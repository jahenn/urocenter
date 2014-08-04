<?php
App::uses('AppController', 'Controller');
/**
 * ScheduledExams Controller
 *
 * @property ScheduledExam $ScheduledExam
 * @property PaginatorComponent $Paginator
 */
class ScheduledExamsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ScheduledExam->recursive = 0;
		$this->set('scheduledExams', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ScheduledExam->exists($id)) {
			throw new NotFoundException(__('Invalid scheduled exam'));
		}
		$options = array('conditions' => array('ScheduledExam.' . $this->ScheduledExam->primaryKey => $id));
		$this->set('scheduledExam', $this->ScheduledExam->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {

			//pr($this->request->data);exit();

			$this->ScheduledExam->create();
			if ($this->ScheduledExam->save($this->request->data)) {

				//add to calendar

				$this->loadModel('CalendarEvent');
				$this->CalendarEvent->create();


				$v =new View();

				$event_url = $v->Html->url(array(
					'controller'=>'ScheduledExams',
					'action'=>'resolve',
					$this->ScheduledExam->getlastInsertId()
					), true);

				$fecha = $this->request->data['ScheduledExam']['fecha_programada'];
				$titulo = $this->request->data['ScheduledExam']['titulo'];
				$this->CalendarEvent->save(array(
					'titulo'=>$titulo,
					'descripcion'=>'Nuevo Examen Programado',
					'fecha'=> $fecha,
					'color_id'=>1,
					'url'=>$event_url
					));


				//add notification


				$this->loadModel('Notification');
				$this->Notification->create();
				$this->Notification->save(array(
					'role_id'=>0,
					'user_id'=>$this->Auth->user()['id'],
					'fecha'=>date('Y-m-d'),
					'titulo'=>'Nuevo Examen Programado',
					'descripcion'=>'Se ha programado un nuevo examen <a href="'.$event_url.'">Ver</a>',
					'color_id'=>1
					));





				$this->Session->setFlash(__('The scheduled exam has been saved.'));
				return $this->redirect(array('action' => 'edit', $this->ScheduledExam->getlastInsertId()));
			} else {
				$this->Session->setFlash(__('The scheduled exam could not be saved. Please, try again.'));
			}
		}
		$questions = $this->ScheduledExam->Question->find('list');
		$this->set(compact('questions'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ScheduledExam->exists($id)) {
			throw new NotFoundException(__('Invalid scheduled exam'));
		}
		if ($this->request->is(array('post', 'put'))) {
			$this->ScheduledExam->id = $id;
			$this->ScheduledExam->read();

			if ($this->ScheduledExam->save($this->request->data)) {
				$this->Session->setFlash(__('The scheduled exam has been saved.'));





				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The scheduled exam could not be saved. Please, try again.'));
			}
		} else {
			$options = array(
				'conditions' => array(
					'ScheduledExam.' . $this->ScheduledExam->primaryKey => $id
					)
				);
			$this->ScheduledExam->recursive = 2;
			$this->request->data = $this->ScheduledExam->find('first', $options);
		}
		$roles = $this->ScheduledExam->Role->find('list', array(
			'conditions'=>array(
				'user_role'=>false
				)
			));
		$questions = $this->ScheduledExam->Question->find('list');
		$this->set(compact('questions','roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ScheduledExam->id = $id;
		if (!$this->ScheduledExam->exists()) {
			throw new NotFoundException(__('Invalid scheduled exam'));
		}
		//$this->request->allowMethod('post', 'delete');
		if ($this->ScheduledExam->delete()) {
			$this->Session->setFlash(__('The scheduled exam has been deleted.'));
		} else {
			$this->Session->setFlash(__('The scheduled exam could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}


	public function addQuestion($exam_id){
		if($this->request->is('post')){

			$question_id = $this->request->data['Question']['question_id'];


			$this->ScheduledExam->QuestionsScheduledExam->create();
			$this->ScheduledExam->QuestionsScheduledExam->save(array(
				'scheduled_exam_id'=>$exam_id,
				'question_id'=>$question_id
				));

			$this->Session->setFlash('Pregunta Agregada al Examen', 'default', array(
				'class'=>'alert alert-success'
				));

			$this->redirect(array(
				'action'=>'edit', $exam_id
				));
		}else{
			$question_categories = $this->ScheduledExam->Question->QuestionCategory->find('list');
			//pr($question_categories);
			$this->set(compact('question_categories'));
		}
	}


	public function resolve($id){

		if($this->request->is('post'))
		{

			$exam = $this->ScheduledExam->find('first', array(
				'conditions'=>array(
					'ScheduledExam.id'=>$id
					)
				));


			$tmp_exam = array(
				'titulo'=>$exam['ScheduledExam']['titulo'],
				'descripcion' => $exam['ScheduledExam']['comentarios'],
				'fecha'=>null,
				'user_id'=>$this->Auth->user()['id'],
				'resultado'=>0,
				'estatus'=>1
				);


			$this->loadModel('Exam');
			$this->Exam->create();
			if($this->Exam->save($tmp_exam))
			{

				$exam_id = $this->Exam->getlastInsertId();
				$this->loadModel('ExamAnswer');

				// relacion de columnas
				if(isset($this->request->data['columnas'])){
					foreach ($this->request->data['Columnas'] as $pK => $pV) {
						foreach ($pV as $ppK => $ppV) {
							$question_id = $ppV['pregunta']['id_pregunta'];
							$answer_id = $ppV['pregunta']['id_respuesta'];

							$this->loadModel('Question');
							$this->loadModel('Answer');

							 $question = $this->Question->find('first', array(
							 	'conditions'=>array(
							 		'Question.id'=>$question_id
							 		)
							 	));

							 $answer = $this->Answer->find('first', array(
							 	'conditions'=>array(
							 		'Answer.id'=>$answer_id
							 		)
							 	));


							 $question_text = $question['Question']['question'];
							 $answer_text = $answer['Answer']['answer'];



							 $answer_correct = $this->Answer->find('first', array(
							 	'conditions'=>array(
							 		'Answer.id'=> $answer_id,
							 		'Answer.question_id'=>$question_id,
							 		'Answer.answer_is_ok'=>true
							 		)
							 	));

							 $correcto = false;
							 if(count($answer_correct) > 0){
							 	$correcto = true;
							 }


							 $tmp_answer = array(
							 	'exam_id'=>$exam_id,
							 	'pregunta'=>$question_text,
							 	'respuesta'=>$answer_text,
							 	'correcta'=>$correcto,
							 	'calificada'=>true
							 	);



							 $this->ExamAnswer->create();
							 $this->ExamAnswer->save($tmp_answer);


							 //pr(compact('question_text', 'answer_text'));

						}
					}
				}

				//Opcion Multiple


				if(isset($this->request->data['Multiple'])){
					foreach ($this->request->data['Multiple'] as $cK => $cV) {

						$question_id = $cV['question'];
						$answer_id = $cV['answer'];


						$this->loadModel('Question');
						$this->loadModel('Answer');

						 $question = $this->Question->find('first', array(
						 	'conditions'=>array(
						 		'Question.id'=>$question_id
						 		)
						 	));

						 $answer = $this->Answer->find('first', array(
						 	'conditions'=>array(
						 		'Answer.id'=>$answer_id
						 		)
						 	));


						 $question_text = $question['Question']['question'];
						 $answer_text = $answer['Answer']['answer'];



						 $answer_correct = $this->Answer->find('first', array(
						 	'conditions'=>array(
						 		'Answer.id'=> $answer_id,
						 		'Answer.question_id'=>$question_id,
						 		'Answer.answer_is_ok'=>true
						 		)
						 	));

						 $correcto = false;
						 if(count($answer_correct) > 0){
						 	$correcto = true;
						 }


						 $tmp_answer = array(
						 	'exam_id'=>$exam_id,
						 	'pregunta'=>$question_text,
						 	'respuesta'=>$answer_text,
						 	'correcta'=>$correcto,
						 	'calificada'=>true
						 	);



						 $this->ExamAnswer->create();
						 $this->ExamAnswer->save($tmp_answer);
					}
				}


				
				$total_questions = $this->ExamAnswer->find('count', array(
					'conditions'=>array(
						'calificada'=>true,
						'exam_id'=>$exam_id
						)
					));



				$questions_ok = $this->ExamAnswer->find('count', array(
					'conditions'=>array(
						'calificada'=>true,
						'exam_id'=>$exam_id,
						'correcta'=>true
						)
					));

				if($total_questions==0){$total_questions=100; $questions_ok=0;}

				$promedio = ($questions_ok / $total_questions ) * 100;

				$this->Exam->id = $exam_id;
				$this->Exam->read();

				$this->Exam->saveField('resultado', $promedio);


				$this->redirect(array(
					'action'=>'thanks'
					));

				echo "saved"; exit();
			}





			exit();

		}


		$this->ScheduledExam->id = $id;

		if($this->ScheduledExam->exists()){
			$this->ScheduledExam->recursive = 4;
			$this->ScheduledExam->Question->QuestionCategory->unbindModel(array(
				'hasMany'=>array('Question')
				));
			$this->request->data = $this->ScheduledExam->find('first', array(
				'conditions'=>array(
					'ScheduledExam.id'=>$id
					)
				));
		}
	}


	public function thanks(){
		
	}

	public function start($id)
	{
		
	}
}

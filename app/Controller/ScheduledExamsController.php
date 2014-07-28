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
		$this->request->allowMethod('post', 'delete');
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
		$this->ScheduledExam->id = $id;

		if($this->ScheduledExam->exists()){
			$this->ScheduledExam->recursive = 3;
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

	public function start($id)
	{
		
	}
}

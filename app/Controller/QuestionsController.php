<?php
App::uses('AppController', 'Controller');
/**
 * Questions Controller
 *
 * @property Question $Question
 * @property PaginatorComponent $Paginator
 */
class QuestionsController extends AppController {

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
		$pendientes = $this->Question->find('count', array(
			'conditions'=>array(
				'question_status_id'=>array(1,2)
				)
			));

		$this->set(compact('pendientes'));
		$this->lists(2);

		
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Question->exists($id)) {
			throw new NotFoundException(__('Invalid question'));
		}
		$options = array('conditions' => array('Question.' . $this->Question->primaryKey => $id));
		$this->set('question', $this->Question->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {




		if ($this->request->is('post')) {
			//pr($this->request->data);exit();
			$imagen = $this->request->data['Question']['imagen'];
			$this->request->data['Question']['imagen'] = '';
			if($imagen['error'] == 0)
			{
				$filename = $imagen['name'];	
				$origen = $imagen['tmp_name'];	
				$destino = WWW_ROOT . 'img/question-images/' . $filename ;

				if(move_uploaded_file($origen, $destino)){
					$this->request->data['Question']['imagen'] = $filename;
				}
			}

			$this->request->data['Question']['question_status_id'] = 1;
			$this->request->data['Question']['fecha_creacion'] = null;
			

			$this->Question->create();
			if ($this->Question->save($this->request->data)) {
				$this->Session->setFlash(__('The question has been saved.'));
				return $this->redirect(array('action' => 'edit', $this->Question->getLastInsertId()));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.'));
			}
		}
		$questionCategories = $this->Question->QuestionCategory->find('list');
		$questionTypes = $this->Question->QuestionType->find('list');
		//$exams = $this->Question->Exam->find('list');
		$this->set(compact('questionCategories', 'questionTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Question->exists($id)) {
			throw new NotFoundException(__('Invalid question'));
		}
		$this->Question->id = $id;
		if ($this->request->is(array('post', 'put'))) {

			$imagen = $this->request->data['Question']['imagen'];

			$this->request->data['Question']['imagen'] = $this->Question->read()['Question']['imagen'];
			if($imagen['error'] == 0)
			{
				$filename = $imagen['name'];	
				$origen = $imagen['tmp_name'];	
				$destino = WWW_ROOT . 'img/question-images/' . $filename ;

				if(move_uploaded_file($origen, $destino)){
					$this->request->data['Question']['imagen'] = $filename;
				}
			}

			if ($this->Question->save($this->request->data)) {
				$this->Session->setFlash(__('The question has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question could not be saved. Please, try again.'));
			}
		} else {
			$options = array(
				'conditions' => array(
					'Question.' . $this->Question->primaryKey => $id,
					));

			
			$this->Question->recursive = 3;
			$this->Question->QuestionCategory->unbindModel(array(
				'hasMany'=>array(
					'Question'
					)
				));

			$this->Question->QuestionType->unbindModel(array(
				'hasMany'=>array(
					'Question'
					)
				));
			$this->request->data = $this->Question->find('first', $options);
		}
		$questionCategories = $this->Question->QuestionCategory->find('list');
		$questionTypes = $this->Question->QuestionType->find('list');
		//$exams = $this->Question->Exam->find('list');
		$this->set(compact('questionCategories', 'questionTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Question->id = $id;
		if (!$this->Question->exists()) {
			throw new NotFoundException(__('Invalid question'));
		}
		//$this->request->allowMethod('post', 'delete');

		if ($this->Question->save(array(
			'question_status_id'=>3
			))) {
			$this->Session->setFlash(__('La pregunta fue eliminada'), 'default', array(
				'class'=>'alert alert-success'
				));
		} else {
			$this->Session->setFlash(__('La pregunta no pudo ser eliminada'), 'default', array(
				'class'=>'alert alert-danger'
				));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function lists()
	{
		// if($id != 2){
		// 	$pendientes = 0;
		// 	$this->set(compact('pendientes'));
		// }

		$this->Question->recursive = 0;

		$this->Paginator->settings = array(
			'order'=>'Question.question_status_id,  Question.id desc'
			);

		$this->set('questions', $this->Paginator->paginate(array(
			'Question.question_status_id'=> array(1,2)
			)));
		
		$this->render('index');
	}
	public function aprobe($id){
		$this->autoRender = false;
		$this->Question->id = $id;
		$this->Question->read();
		if($this->Question->exists()){
			if ($this->Question->save(array(
				'question_status_id'=>2
				))){
				$this->Session->setFlash('La Pregunta ha sido Aprobada', 'default', array(
					'class'=>'alert alert-success'
					));

				$this->redirect(array(
					'action'=>'lists', 1
					));
			}
		}
	}

	public function json($category_id)
	{
		$this->autoRender = false;
		$question_list = $this->Question->find('list', array(
			'conditions'=> array(
				'question_category_id'=>$category_id,
				'Question.question_status_id' => 2
				)
			));

		

		$questions = array();

		
		foreach ($question_list as $key => $value) {
			$questions[] = array(
				'nombre'=>$value,
				'valor'=>$key
				);
		}


		echo json_encode($questions);
	}

	public function uploadImage($question_id){
		$this->autoRender = false;


		if(count($_FILES) > 0){

			$filename = $_FILES['file']['name'];
			$tmp_name = $_FILES['file']['tmp_name'];

			$destino = WWW_ROOT . 'img' . DS . 'question-images' . DS . $filename ;


			move_uploaded_file($tmp_name, $destino);

			$this->Question->id = $question_id;
			$this->Question->read();
			$this->Question->saveField('imagen',$filename);

		}


	}


	public function remove($answer_id, $question_id){

		$this->Question->Answer->id = $answer_id;
		$answer = $this->Question->Answer->read();

		if($answer['Answer']['question_id'] == $question_id){
			$this->Question->Answer->saveField('activa', false);
			$this->redirect(array(
				'action'=>'edit', $question_id
				));
		}

	}


}

<?php
App::uses ( 'AppController', 'Controller' );
/**
 * QuestionsScheduledExams Controller
 *
 * @property QuestionsScheduledExam $QuestionsScheduledExam
 * @property PaginatorComponent $Paginator
 */
class QuestionsScheduledExamsController extends AppController {
	
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array (
			'Paginator' 
	);
	
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->QuestionsScheduledExam->recursive = 0;
		$this->set ( 'questionsScheduledExams', $this->Paginator->paginate () );
	}
	
	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id        	
	 * @return void
	 */
	public function view($id = null) {
		if (! $this->QuestionsScheduledExam->exists ( $id )) {
			throw new NotFoundException ( __ ( 'Invalid questions scheduled exam' ) );
		}
		$options = array (
				'conditions' => array (
						'QuestionsScheduledExam.' . $this->QuestionsScheduledExam->primaryKey => $id 
				) 
		);
		$this->set ( 'questionsScheduledExam', $this->QuestionsScheduledExam->find ( 'first', $options ) );
	}
	
	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is ( 'post' )) {
			$this->QuestionsScheduledExam->create ();
			if ($this->QuestionsScheduledExam->save ( $this->request->data )) {
				$this->Session->setFlash ( __ ( 'The questions scheduled exam has been saved.' ) );
				return $this->redirect ( array (
						'action' => 'index' 
				) );
			} else {
				$this->Session->setFlash ( __ ( 'The questions scheduled exam could not be saved. Please, try again.' ) );
			}
		}
		$scheduledExams = $this->QuestionsScheduledExam->ScheduledExam->find ( 'list' );
		$questions = $this->QuestionsScheduledExam->Question->find ( 'list' );
		$this->set ( compact ( 'scheduledExams', 'questions' ) );
	}
	
	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id        	
	 * @return void
	 */
	public function edit($id = null) {
		if (! $this->QuestionsScheduledExam->exists ( $id )) {
			throw new NotFoundException ( __ ( 'Invalid questions scheduled exam' ) );
		}
		if ($this->request->is ( array (
				'post',
				'put' 
		) )) {
			if ($this->QuestionsScheduledExam->save ( $this->request->data )) {
				$this->Session->setFlash ( __ ( 'The questions scheduled exam has been saved.' ) );
				return $this->redirect ( array (
						'action' => 'index' 
				) );
			} else {
				$this->Session->setFlash ( __ ( 'The questions scheduled exam could not be saved. Please, try again.' ) );
			}
		} else {
			$options = array (
					'conditions' => array (
							'QuestionsScheduledExam.' . $this->QuestionsScheduledExam->primaryKey => $id 
					) 
			);
			$this->request->data = $this->QuestionsScheduledExam->find ( 'first', $options );
		}
		$scheduledExams = $this->QuestionsScheduledExam->ScheduledExam->find ( 'list' );
		$questions = $this->QuestionsScheduledExam->Question->find ( 'list' );
		$this->set ( compact ( 'scheduledExams', 'questions' ) );
	}
	
	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id        	
	 * @return void
	 */
	public function delete($id, $examen) {
		$this->QuestionsScheduledExam->id = $id;
		if (! $this->QuestionsScheduledExam->exists ()) {
			throw new NotFoundException ( __ ( 'Invalid questions scheduled exam' ) );
		}
		
		// exit();
		// $this->request->onlyAllow('post', 'delete');
		if ($this->QuestionsScheduledExam->delete ()) {
			$this->Session->setFlash ( __ ( 'La pregunta fue eliminada del examen' ), 'default', array (
					'class' => 'alert alert-success' 
			) );
		} else {
			$this->Session->setFlash ( __ ( 'The questions scheduled exam could not be deleted. Please, try again.' ) );
		}
		return $this->redirect ( array (
				'controller' => 'scheduled_exams',
				'action' => 'view',
				$examen 
		) );
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * QuestionQuestions Controller
 *
 * @property QuestionQuestion $QuestionQuestion
 * @property PaginatorComponent $Paginator
 */
class QuestionQuestionsController extends AppController {

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
		$this->QuestionQuestion->recursive = 0;
		$this->set('questionQuestions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QuestionQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid question question'));
		}
		$options = array('conditions' => array('QuestionQuestion.' . $this->QuestionQuestion->primaryKey => $id));
		$this->set('questionQuestion', $this->QuestionQuestion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add($question_id) {

		if ($this->request->is('post')) {
			$this->QuestionQuestion->create();
			if ($this->QuestionQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The question question has been saved.'));
				return $this->redirect(array(
					'controller' => 'questions',
					'action'=>'edit', $question_id
					)
				);
			} else {
				$this->Session->setFlash(__('The question question could not be saved. Please, try again.'));
			}
		}
		$questions = $this->QuestionQuestion->Question->find('list');
		$childQuestions = $this->QuestionQuestion->ChildQuestion->find('list', array(
			'conditions'=>array(
				'question_status_id'=>2
				)
			));
		$this->set(compact('questions', 'childQuestions', 'question_id'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->QuestionQuestion->exists($id)) {
			throw new NotFoundException(__('Invalid question question'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QuestionQuestion->save($this->request->data)) {
				$this->Session->setFlash(__('The question question has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question question could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuestionQuestion.' . $this->QuestionQuestion->primaryKey => $id));
			$this->request->data = $this->QuestionQuestion->find('first', $options);
		}
		$questions = $this->QuestionQuestion->Question->find('list');
		$childQuestions = $this->QuestionQuestion->ChildQuestion->find('list');
		$this->set(compact('questions', 'childQuestions'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->QuestionQuestion->id = $id;
		if (!$this->QuestionQuestion->exists()) {
			throw new NotFoundException(__('Invalid question question'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QuestionQuestion->delete()) {
			$this->Session->setFlash(__('The question question has been deleted.'));
		} else {
			$this->Session->setFlash(__('The question question could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

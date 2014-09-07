<?php
App::uses('AppController', 'Controller');
/**
 * UserExams Controller
 *
 * @property UserExam $UserExam
 * @property PaginatorComponent $Paginator
 */
class UserExamsController extends AppController {

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
		$this->UserExam->recursive = 0;
		$this->set('userExams', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserExam->exists($id)) {
			throw new NotFoundException(__('Invalid user exam'));
		}
		$options = array('conditions' => array('UserExam.' . $this->UserExam->primaryKey => $id));
		$this->set('userExam', $this->UserExam->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserExam->create();
			if ($this->UserExam->save($this->request->data)) {
				$this->Session->setFlash(__('The user exam has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user exam could not be saved. Please, try again.'));
			}
		}
		$exams = $this->UserExam->Exam->find('list');
		$examStatuses = $this->UserExam->ExamStatus->find('list');
		$this->set(compact('exams', 'examStatuses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserExam->exists($id)) {
			throw new NotFoundException(__('Invalid user exam'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserExam->save($this->request->data)) {
				$this->Session->setFlash(__('The user exam has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user exam could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserExam.' . $this->UserExam->primaryKey => $id));
			$this->request->data = $this->UserExam->find('first', $options);
		}
		$exams = $this->UserExam->Exam->find('list');
		$examStatuses = $this->UserExam->ExamStatus->find('list');
		$this->set(compact('exams', 'examStatuses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserExam->id = $id;
		if (!$this->UserExam->exists()) {
			throw new NotFoundException(__('Invalid user exam'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserExam->delete()) {
			$this->Session->setFlash(__('The user exam has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user exam could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

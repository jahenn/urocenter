<?php
App::uses('AppController', 'Controller');
/**
 * ExamStatuses Controller
 *
 * @property ExamStatus $ExamStatus
 * @property PaginatorComponent $Paginator
 */
class ExamStatusesController extends AppController {

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
		$this->ExamStatus->recursive = 0;
		$this->set('examStatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExamStatus->exists($id)) {
			throw new NotFoundException(__('Invalid exam status'));
		}
		$options = array('conditions' => array('ExamStatus.' . $this->ExamStatus->primaryKey => $id));
		$this->set('examStatus', $this->ExamStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExamStatus->create();
			if ($this->ExamStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The exam status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exam status could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ExamStatus->exists($id)) {
			throw new NotFoundException(__('Invalid exam status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ExamStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The exam status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exam status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExamStatus.' . $this->ExamStatus->primaryKey => $id));
			$this->request->data = $this->ExamStatus->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ExamStatus->id = $id;
		if (!$this->ExamStatus->exists()) {
			throw new NotFoundException(__('Invalid exam status'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ExamStatus->delete()) {
			$this->Session->setFlash(__('The exam status has been deleted.'));
		} else {
			$this->Session->setFlash(__('The exam status could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

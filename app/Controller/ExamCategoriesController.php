<?php
App::uses('AppController', 'Controller');
/**
 * ExamCategories Controller
 *
 * @property ExamCategory $ExamCategory
 * @property PaginatorComponent $Paginator
 */
class ExamCategoriesController extends AppController {

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
		$this->ExamCategory->recursive = 0;
		$this->set('examCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExamCategory->exists($id)) {
			throw new NotFoundException(__('Invalid exam category'));
		}
		$options = array('conditions' => array('ExamCategory.' . $this->ExamCategory->primaryKey => $id));
		$this->set('examCategory', $this->ExamCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExamCategory->create();
			if ($this->ExamCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The exam category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exam category could not be saved. Please, try again.'));
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
		if (!$this->ExamCategory->exists($id)) {
			throw new NotFoundException(__('Invalid exam category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ExamCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The exam category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exam category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExamCategory.' . $this->ExamCategory->primaryKey => $id));
			$this->request->data = $this->ExamCategory->find('first', $options);
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
		$this->ExamCategory->id = $id;
		if (!$this->ExamCategory->exists()) {
			throw new NotFoundException(__('Invalid exam category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ExamCategory->delete()) {
			$this->Session->setFlash(__('The exam category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The exam category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

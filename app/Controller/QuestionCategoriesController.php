<?php
App::uses('AppController', 'Controller');
/**
 * QuestionCategories Controller
 *
 * @property QuestionCategory $QuestionCategory
 * @property PaginatorComponent $Paginator
 */
class QuestionCategoriesController extends AppController {

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
		$this->QuestionCategory->recursive = 0;
		$this->set('questionCategories', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->QuestionCategory->exists($id)) {
			throw new NotFoundException(__('Invalid question category'));
		}
		$options = array('conditions' => array('QuestionCategory.' . $this->QuestionCategory->primaryKey => $id));
		$this->set('questionCategory', $this->QuestionCategory->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->QuestionCategory->create();
			if ($this->QuestionCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The question category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question category could not be saved. Please, try again.'));
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
		if (!$this->QuestionCategory->exists($id)) {
			throw new NotFoundException(__('Invalid question category'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->QuestionCategory->save($this->request->data)) {
				$this->Session->setFlash(__('The question category has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The question category could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('QuestionCategory.' . $this->QuestionCategory->primaryKey => $id));
			$this->request->data = $this->QuestionCategory->find('first', $options);
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
		$this->QuestionCategory->id = $id;
		if (!$this->QuestionCategory->exists()) {
			throw new NotFoundException(__('Invalid question category'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->QuestionCategory->delete()) {
			$this->Session->setFlash(__('The question category has been deleted.'));
		} else {
			$this->Session->setFlash(__('The question category could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

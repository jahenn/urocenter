<?php
App::uses('AppController', 'Controller');
/**
 * UserRoles Controller
 *
 * @property UserRole $UserRole
 * @property PaginatorComponent $Paginator
 */
class UserRolesController extends AppController {

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
		$this->UserRole->recursive = 0;
		$this->set('userRoles', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserRole->exists($id)) {
			throw new NotFoundException(__('Invalid user role'));
		}
		$options = array('conditions' => array('UserRole.' . $this->UserRole->primaryKey => $id));
		$this->set('userRole', $this->UserRole->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserRole->create();
			if ($this->UserRole->save($this->request->data)) {
				$this->Session->setFlash(__('The user role has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user role could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserRole->User->find('list');
		$roles = $this->UserRole->Role->find('list');
		$this->set(compact('users', 'roles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserRole->exists($id)) {
			throw new NotFoundException(__('Invalid user role'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UserRole->save($this->request->data)) {
				$this->Session->setFlash(__('The user role has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user role could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserRole.' . $this->UserRole->primaryKey => $id));
			$this->request->data = $this->UserRole->find('first', $options);
		}
		$users = $this->UserRole->User->find('list');
		$roles = $this->UserRole->Role->find('list');
		$this->set(compact('users', 'roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->UserRole->id = $id;
		if (!$this->UserRole->exists()) {
			throw new NotFoundException(__('Invalid user role'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UserRole->delete()) {
			$this->Session->setFlash(__('The user role has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user role could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

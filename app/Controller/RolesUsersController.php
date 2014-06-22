<?php
App::uses('AppController', 'Controller');
/**
 * RolesUsers Controller
 *
 * @property RolesUser $RolesUser
 * @property PaginatorComponent $Paginator
 */
class RolesUsersController extends AppController {

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
		$this->RolesUser->recursive = 0;
		$this->set('rolesUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RolesUser->exists($id)) {
			throw new NotFoundException(__('Invalid roles user'));
		}
		$options = array('conditions' => array('RolesUser.' . $this->RolesUser->primaryKey => $id));
		$this->set('rolesUser', $this->RolesUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RolesUser->create();
			if ($this->RolesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The roles user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The roles user could not be saved. Please, try again.'));
			}
		}
		$users = $this->RolesUser->User->find('list');
		$roles = $this->RolesUser->Role->find('list');
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
		if (!$this->RolesUser->exists($id)) {
			throw new NotFoundException(__('Invalid roles user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RolesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The roles user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The roles user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RolesUser.' . $this->RolesUser->primaryKey => $id));
			$this->request->data = $this->RolesUser->find('first', $options);
		}
		$users = $this->RolesUser->User->find('list');
		$roles = $this->RolesUser->Role->find('list');
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
		$this->RolesUser->id = $id;
		if (!$this->RolesUser->exists()) {
			throw new NotFoundException(__('Invalid roles user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RolesUser->delete()) {
			$this->Session->setFlash(__('The roles user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The roles user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

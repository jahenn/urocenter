<?php
App::uses('AppController', 'Controller');
/**
 * RoleMenus Controller
 *
 * @property RoleMenu $RoleMenu
 * @property PaginatorComponent $Paginator
 */
class RoleMenusController extends AppController {

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
		$this->RoleMenu->recursive = 0;
		$this->set('roleMenus', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RoleMenu->exists($id)) {
			throw new NotFoundException(__('Invalid role menu'));
		}
		$options = array('conditions' => array('RoleMenu.' . $this->RoleMenu->primaryKey => $id));
		$this->set('roleMenu', $this->RoleMenu->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RoleMenu->create();
			if ($this->RoleMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The role menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The role menu could not be saved. Please, try again.'));
			}
		}
		$roles = $this->RoleMenu->Role->find('list');
		$menus = $this->RoleMenu->Menu->find('list');
		$this->set(compact('roles', 'menus'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->RoleMenu->exists($id)) {
			throw new NotFoundException(__('Invalid role menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RoleMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The role menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The role menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RoleMenu.' . $this->RoleMenu->primaryKey => $id));
			$this->request->data = $this->RoleMenu->find('first', $options);
		}
		$roles = $this->RoleMenu->Role->find('list');
		$menus = $this->RoleMenu->Menu->find('list');
		$this->set(compact('roles', 'menus'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->RoleMenu->id = $id;
		if (!$this->RoleMenu->exists()) {
			throw new NotFoundException(__('Invalid role menu'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RoleMenu->delete()) {
			$this->Session->setFlash(__('The role menu has been deleted.'));
		} else {
			$this->Session->setFlash(__('The role menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

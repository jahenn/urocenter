<?php
App::uses('AppController', 'Controller');
/**
 * SubMenus Controller
 *
 * @property SubMenu $SubMenu
 * @property PaginatorComponent $Paginator
 */
class SubMenusController extends AppController {

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
		$this->SubMenu->recursive = 0;
		$this->set('subMenus', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubMenu->exists($id)) {
			throw new NotFoundException(__('Invalid sub menu'));
		}
		$options = array('conditions' => array('SubMenu.' . $this->SubMenu->primaryKey => $id));
		$this->set('subMenu', $this->SubMenu->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubMenu->create();
			if ($this->SubMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The sub menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub menu could not be saved. Please, try again.'));
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
		if (!$this->SubMenu->exists($id)) {
			throw new NotFoundException(__('Invalid sub menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The sub menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sub menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubMenu.' . $this->SubMenu->primaryKey => $id));
			$this->request->data = $this->SubMenu->find('first', $options);
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
		$this->SubMenu->id = $id;
		if (!$this->SubMenu->exists()) {
			throw new NotFoundException(__('Invalid sub menu'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->SubMenu->delete()) {
			$this->Session->setFlash(__('The sub menu has been deleted.'));
		} else {
			$this->Session->setFlash(__('The sub menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

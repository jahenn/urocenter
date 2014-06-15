<?php
App::uses('AppController', 'Controller');
/**
 * MenuSubMenus Controller
 *
 * @property MenuSubMenu $MenuSubMenu
 * @property PaginatorComponent $Paginator
 */
class MenuSubMenusController extends AppController {

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
		$this->MenuSubMenu->recursive = 0;
		$this->set('menuSubMenus', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->MenuSubMenu->exists($id)) {
			throw new NotFoundException(__('Invalid menu sub menu'));
		}
		$options = array('conditions' => array('MenuSubMenu.' . $this->MenuSubMenu->primaryKey => $id));
		$this->set('menuSubMenu', $this->MenuSubMenu->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->MenuSubMenu->create();
			if ($this->MenuSubMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The menu sub menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu sub menu could not be saved. Please, try again.'));
			}
		}
		$menus = $this->MenuSubMenu->Menu->find('list');
		$subMenus = $this->MenuSubMenu->SubMenu->find('list');
		$this->set(compact('menus', 'subMenus'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->MenuSubMenu->exists($id)) {
			throw new NotFoundException(__('Invalid menu sub menu'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MenuSubMenu->save($this->request->data)) {
				$this->Session->setFlash(__('The menu sub menu has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The menu sub menu could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('MenuSubMenu.' . $this->MenuSubMenu->primaryKey => $id));
			$this->request->data = $this->MenuSubMenu->find('first', $options);
		}
		$menus = $this->MenuSubMenu->Menu->find('list');
		$subMenus = $this->MenuSubMenu->SubMenu->find('list');
		$this->set(compact('menus', 'subMenus'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->MenuSubMenu->id = $id;
		if (!$this->MenuSubMenu->exists()) {
			throw new NotFoundException(__('Invalid menu sub menu'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->MenuSubMenu->delete()) {
			$this->Session->setFlash(__('The menu sub menu has been deleted.'));
		} else {
			$this->Session->setFlash(__('The menu sub menu could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

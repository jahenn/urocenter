<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 */
class UsersController extends AppController {

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
		$this->User->recursive = 0;
		$this->set('users', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$roles = $this->User->Role->find('list');
		$this->set(compact('roles'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function logout(){
		$this->redirect($this->Auth->logout());
	}

	public function login() {

		$this->User->create();
		$this->User->save(array(
			'username'=>'jahenn33',
			'password'=>'12345'
			));


		if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            return $this->redirect($this->Auth->redirect());
        }
        	$this->Session->setFlash(__('Invalid username or password, try again'));
    	}
	}



	public function login_redirect(){
		$this->autoRender = false;


		$is_admin = $this->User->userHasInRole($this->Auth->user()['id'], 5);


		if($is_admin){
			$this->redirect(array(
				'controller' => 'admin',
				'action'=>'index'
				));
		}
		//pr($this->User->read());
	}


	public function register(){

	}

	public function group($type){
		$users = null;

		switch ($type) {
			case 'news':
				$users = $this->paginate(array(
							'OR'=>array(
								'activo'=>false, 
								'datediff( current_timestamp ,fecha_registro) <=' => 3
								)
							));
				break;
			
			default:


				$this->User->id = $this->Auth->user()['id'];
				$user = $this->User->read();
				$this->User->Role->recursive = -1;
				$role_id = $this->User->Role->find('first', array(
					'conditions'=>array(
						'lower(Role.nombre)' => strtolower($type)
						)
					));

				// $v = new View();
				// pr($v->element('sql_dump'));
				// exit();


				if($role_id == null || count($role_id) <= 0 || 1==1){
					

					$this->Session->setFlash('No existe el usuario o grupo de usuarios', 'default', array(
						'class'=>'alert alert-danger'
						));

					$this->redirect(array(
						'controller'=>'users',
						'action'=>'index'
						));
				}else{
					$role_id = $role_id['Role']['id'];
					$this->User->Role->recursive = 2;
					$this->User->Role->unbindModel(array(
						'hasAndBelongsToMany' => array('Menu')
						));
					$roles = $this->User->Role->find('first', array(
						'conditions'=>array(
							'Role.id' => $role_id
							)
						));

					//pr($roles);

					foreach ($roles['User'] as $key => $value) {
						$users[]['User'] = $value;
					}


					//$users['User'] = $roles['User'];

					// pr("<br><br><br><br><br><br><br><br><br>");
					// pr($users);

					//Obtener a los usuarios que tienen ese rol

				}


				
				break;
		}




		$this->set('users', $users);
		$this->render('group');
	}

	public function aprobe($id){

		$this->User->id = $id;
		$this->User->read();


		$this->User->save(array(
			'activo' => true
			));

		$this->redirect(array(
			'action'=>'news'
			));

	}

}

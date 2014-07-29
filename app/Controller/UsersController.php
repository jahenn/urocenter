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
			//$this->User->create();
			if ($this->User->save($this->request->data)) {

				//add own role
				
				$user_id = $this->User->getLastInsertId();


				$this->User->Role->create();
				$this->User->Role->save(array(
					'nombre'=>$this->request->data['User']['username'],
					'user_role'=>true
					));

				$role_id = $this->User->Role->getLastInsertId();


				
				$this->User->id = $user_id;
				$this->User->read();
				$this->User->save(array(
					'role_id'=> $role_id,
					'password'=>$this->request->data['User']['password']
					));



				$this->User->RolesUser->create();
				$this->User->RolesUser->save(array(
					'user_id'=>$user_id,
					'role_id'=>$role_id
					));




				$this->Session->setFlash(__('The user has been saved.'));


				if($this->Auth->user() != null){
					if($this->User->isAdmin($this->Auth->user()['id'])){
						return $this->redirect(array('action' => 'index'));
					}
				}


				return $this->redirect(array('action' => 'register_complete'));
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

			$this->User->Role->recursive = -1;
			$role = $this->User->Role->find('first', array(
				'conditions'=>array(
					'id'=>$this->request->data['User']['role_id']
					)
				));



			$this->request->data['Role']['Role'][] = $role['Role']['id'];


			//pr($this->request->data);exit();



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
		$roles = $this->User->Role->find('list', array(
			'conditions'=>array(
				'user_role'=>false
				)
			));
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
		//$this->request->allowMethod('post', 'delete');
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

		// $this->User->create();
		// $this->User->save(array(
		// 	'username'=>'jahenn33',
		// 	'password'=>'12345'
		// 	));


		if ($this->request->is('post')) {
        if ($this->Auth->login()) {

        	if($this->Auth->user()['activo']==false){
        		$this->Auth->logout();
        		$this->Auth->redirect(array(
        			'action'=>'register_complete'
        			));
        	}

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
		}else{
			$this->redirect(array(
				'controller'=>'Users',
				'action'=>'home'
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


		$this->User->saveField('activo', true);

		$this->redirect(array(
			'action'=>'group', 'news'
			));

	}

	public function home(){
		$this->loadModel('Notification');
		$notifications = $this->Notification->find('all', array(
			'order'=>'Notification.id desc'
			));

		$this->set(compact('notifications'));
		
	}

	public function register_complete(){
		$this->layout = 'agile_blank';
	}

	public function beforeFilter(){
		parent::beforeFilter();

		$this->Auth->allow('register');
		$this->Auth->allow('register_complete');
		$this->Auth->allow('add');
	}

}

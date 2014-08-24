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
		// $this->User->recursive = 0;
		// $this->set('users', $this->Paginator->paginate());

		$this->redirect(array(
			'controller'=>'users',
			'action'=>'group', 'usuarios'
			));
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
			$this->request->data['User']['nombre_completo'] = $this->request->data['User']['nombre'] 
				. ' ' 
				. $this->request->data['User']['apellido'];

				
			$this->User->create();
			if ($this->User->save($this->request->data)) {


				//add own role
				
				$user_id = $this->User->getLastInsertId();





				$this->User->Role->create();
				if (!$this->User->Role->save(array(

					'nombre'=>$this->request->data['User']['username'],
					'user_role'=>true
					))) {

					debug($this->validationErrors); die();
				}

				$role_id = $this->User->Role->getLastInsertId();


				
				$this->User->id = $user_id;
				$this->User->read();
				$this->User->saveField('role_id', $role_id);

				

				$this->User->RolesUser->create();
				if(!$this->User->RolesUser->save(array(
					'user_id'=>$user_id,
					'role_id'=>$role_id
					))) {
					debug($this->validationErrors); die();
				}


				$this->User->RolesUser->create();
				$this->User->RolesUser->save(array(
					'user_id'=>$user_id,
					'role_id'=> USER_ROLE
					));



				$this->Session->setFlash(__('El Usuario se Guardo Correctamente'), 'default', array(
					'class'=>'alert alert-success'
					));

				


				if($this->Auth->user() != null){

					//pr($this->User->isAdmin($this->Auth->user()['id']));

					if($this->User->isAdmin($this->Auth->user()['id'])){
						return $this->redirect(array('action' => 'index'));
					}
				}

				//exit();

				return $this->redirect(array('action' => 'register_complete'));
			} else {
				$this->Session->setFlash(__('No se pudo guardar el usuario'));
			}
		}
		$roles = $this->User->Role->find('list', array(
			'conditions'=>array(
				'user_role'=>false
				)
			));
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
		$this->User->id =$id;


		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {

			$this->User->Role->recursive = -1;
			$role = $this->User->Role->find('first', array(
				'conditions'=>array(
					'id'=>$this->request->data['User']['role_id']
					)
				));

			if(!$this->User->isAdmin($id))
			{
				$this->request->data['Role']['Role'][] = USER_ROLE;
			}

			$this->request->data['Role']['Role'][] = $role['Role']['id'];
			

			$this->request->data['User']['nombre_completo'] = $this->request->data['User']['nombre'] 
				. ' ' 
				. $this->request->data['User']['apellido'];

			if ($this->User->save($this->request->data)) {


				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);

			//pr($this->request->data);

			//unset($this->request->data['User']['password']);
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
		if ($this->User->saveField('activo', 0)) {
			$this->User->saveField('baja', 1);
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
		// 	'username'=>'administrador',
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
		$users = array();

		switch ($type) {
			case 'nuevos':
				$users = $this->paginate(array(
							'baja'=>false,
							'OR'=>array(
								'activo'=>false,
								'datediff( current_timestamp ,fecha_registro) <=' => 3
								)
							));

				//pr($users); exit();

				break;

			case 'pendientes':
				$users = $this->paginate(array(
					'activo'=>false,
					'baja'=>false
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


				//pr($role_id);exit();

				// $v = new View();
				// pr($v->element('sql_dump'));
				// exit();


				if($role_id == null || count($role_id) <= 0){
					

					$this->Session->setFlash('No existe el usuario o grupo de usuarios', 'default', array(
						'class'=>'alert alert-danger'
						));

					$this->redirect(array(
						'controller'=>'users',
						'action'=>'index'
						));
				}else{
					$role_id = $role_id['Role']['id'];
					// $this->User->Role->recursive = 2;
					// $this->User->Role->unbindModel(array(
					// 	'hasAndBelongsToMany' => array('Menu')
					// 	));
					// $roles = $this->User->Role->find('first', array(
					// 	'conditions'=>array(
					// 		'Role.id' => $role_id
					// 		)
					// 	));

					// //pr($roles);

					// foreach ($roles['User'] as $key => $value) {
					// 	if(!$value['baja'] && !$value['activo'] || 1==1)
					// 	{
					// 		$users[]['User'] = $value;
					// 	}
					// }


					$this->paginate = array(
						'conditions'=>array(
							'User.activo'=>true,
							'User.baja'=>false,
							'Role.id'=>$role_id
							),
						'joins'=>array(
							array(
								'alias'=>'RolesUser',
								'table'=>'roles_users',
								'type'=>'inner',
								'conditions' => 'RolesUser.user_id = User.id'
								),
							array(
								'alias'=>'Role',
								'table'=>'roles',
								'type'=>'inner',
								'conditions' => 'Role.id = RolesUser.role_id'
								)
							)
						);

					$users = $this->paginate();



					//$users['User'] = $roles['User'];

					// pr("<br><br><br><br><br><br><br><br><br>");
					// pr($users);

					//Obtener a los usuarios que tienen ese rol

				}


				
				break;
		}

		$grupos = $this->User->Role->find('list', array(
			'conditions'=>array(
				'user_role'=>false
				)
			));

		$pendientes = $this->User->find('count', array(
			'conditions'=>array(
				'activo'=>false,
				'baja'=>false
				)
			));

		$nuevos = $this->User->find('count', array(
			'conditions'=>array(
				'baja'=>false,
				'OR'=>array(
					'activo'=>false, 
					'datediff( current_timestamp ,fecha_registro) <=' => 3
					)
				)
			));



		$this->set(compact('grupos', 'pendientes', 'nuevos'));
		$this->set('grupo', ucwords($type));

		$this->set('users', $users);
		//$this->render('group');
	}

	public function aprobe($id){

		$this->User->id = $id;
		$this->User->read();


		$this->User->saveField('activo', true);

		$this->redirect(array(
			'action'=>'group', 'pendientes'
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

		$user = $this->User->find('first', array(
		  'conditions'=> array(
		  		'User.id' => $this->Session->read('Auth.User.id')
		  	)
		)); 
		$this->Session->write('Auth', $user);

		


		$this->Auth->allow('register');
		$this->Auth->allow('login');
		$this->Auth->allow('login_redirect');
		$this->Auth->allow('register_complete');
		$this->Auth->allow('profile');
		$this->Auth->allow('home');
		$this->Auth->allow('publico');
		$this->Auth->allow('logout');
		// $this->Auth->allow('add');
	}

	public function publico($id) {
		$this->loadModel('User');


		$public_user = $this->User->find('first', array(
			'conditions'=>array(
				'User.id'=>$id
				)
			));


		$users_top = $this->User->find('all', array(
			'order'=>array(
				'UserRating.rating'
				),
			'limit'=>10
			));

		$this->set(compact('public_user', 'users_top'));

	}

	public function profile(){


		if($this->request->is('post')){

			if(count($_FILES) > 0){



				$img_name = $_FILES['file']['name'];
				$tmp_name = $_FILES['file']['tmp_name'];

				$destino = WWW_ROOT . 'img/profile/' . $img_name;

				
				move_uploaded_file($tmp_name, $destino);
				$this->User->id = $this->Auth->user()['id'];
				$this->User->read();

				$this->User->saveField('avatar', $img_name);

				exit();
			}
		}

		$user_id = $this->Auth->user()['id'];
		$user = $this->User->find('first', array(
			'conditions'=>array(
				'id'=>$user_id
				)
			));

		$this->set(compact('user'));
		$this->render('view');
	}

	public function isAuthorized($user) {
		return false;
	}

}

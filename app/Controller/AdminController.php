<?php 
	
	class AdminController extends AppController{
		public function index(){
			$this->loadModel('User');

			$users = $this->User->find('count', array(
				'conditions'=>array(
					'OR' => array(
						'activo'=>false,
						'datediff( current_timestamp ,fecha_registro) <=' => 3
						)
					)
				));

			$users_pendientes = $this->User->find('count', array(
				'conditions'=>array(
					'activo'=>false
				)));

			$this->set(compact('users', 'users_pendientes'));
		}
	}

 ?>
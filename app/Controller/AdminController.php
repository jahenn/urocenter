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

			$this->loadModel('Question');
			$questions = $this->Question->find('count', array(
				'conditions'=>array(
					'OR' => array(
						'question_status_id'=>1,
						'datediff( current_timestamp ,fecha_creacion) <=' => 3
						)
					)
				));

			$questions_pendientes = $this->Question->find('count', array(
				'conditions'=>array(
					'question_status_id'=>1
					)
				));

			$this->loadModel('Notification');
			$notifications = $this->Notification->find('all', array(
				'order'=>'Notification.id desc'
				));

			$this->set(compact('users', 'users_pendientes','notifications', 'questions', 'questions_pendientes'));
		}
	}

 ?>
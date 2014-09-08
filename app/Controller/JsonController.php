<?php 

class JsonController extends AppController {

	public function buscador_admin($string = ''){

		$arroba = strpos($string, '@');

		if($arroba !== false){
			$string = str_replace('@', '', $string);
		}

		$this->autoRender = false;


		$this->loadModel('User');


		$users = $this->User->find('list', array(
			'conditions'=>array(
				'username like'=> $string.'%'
				)
			));

		$_users = array();
		foreach ($users as $key => $value) {
			$_users[] = '@'.$value;
		}



		if($arroba === false){
			if($this->User->isAdmin($this->Auth->user()['id'])){
				$this->loadModel('QuestionCategory');
				$categorias = $this->QuestionCategory->find('list', array(
					'conditions'=>array(
						'nombre like' => $string.'%'
						)
					));

				foreach ($categorias as $key => $value) {
					$_users[] = $value;
				}
			}
		}

		// exit();

		echo json_encode($_users);

	}


	public function busca(){
		$this->autoRender = false;
		if($this->request->is('post'))
		{
			// pr($this->request->data); exit();
			$string = $this->request->data['finder'];
			$arroba = strpos($string, '@');
			if($arroba !== false){
				$string = str_replace('@', '', $string);
			}
			if($arroba !== false){
				$this->redirect(array(
					'controller'=> $string
					));
			}else{
				$this->loadModel('User');
				if($this->User->isAdmin($this->Auth->user()['id'])){
					$this->loadModel('QuestionCategory');

					$category = $this->QuestionCategory->field('id', array(
						'nombre'=>$string
						));

					$this->redirect(array(
						'controller'=>'question_categories',
						'action'=>'view', $category
						));
				}
			}
		}
		
		
		$this->Session->setFlash('Busqueda No arrojo resultados', 'default', array(
			'class'=>'alert alert-info'
			));
			
		$this->redirect(array(
			'controller'=>'users',
			'action'=>'login_redirect'
			));

	}

}


?>

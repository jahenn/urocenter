<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 * @property UserAnswer $UserAnswer
 * @property Role $Role
 */
class User extends AppModel {


	public $displayField = 'username';

	public function beforeSave($options = array()) {
	    if(!empty($this->data['User']['password'])) {
	        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
	    } else {
	        unset($this->data['User']['password']);
	    }
	    return true;
	}

	// public function beforeSave($options = array()) {

	// 	pr($options); exit();

	//     if (isset($this->data[$this->alias]['password'])) {
	//         $passwordHasher = new SimplePasswordHasher();
	//         $this->data[$this->alias]['password'] = $passwordHasher->hash(
	//             $this->data[$this->alias]['password']
	//         );
	//     }
	//     return true;
	// }


	public function userHasInRole($user, $role_id)
	{
		// $this->User->id = $this->Auth->user()['id'];
		// $this->User->recursive = 2;

		// foreach($this->User->read()['Role'] as $role){
		// 	if($role['id'] == 5)
		// 	{
		// 		$is_admin = true;
		// 	}
		// }
		// $this->loadModel('User');
		$this->id = $user;


		foreach($this->read()['Role'] as $role){
			if($role['id'] == $role_id)
			{
				return true;
			}
		}

		return false;

	}

	public function isAdmin($user){

		$this->id = $user;
		foreach($this->read()['Role'] as $role){
			if($role['id'] == 5)
			{
				return true;
			}
		}

		return false;
	}


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'UserAnswer' => array(
			'className' => 'UserAnswer',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Role' => array(
			'className' => 'Role',
			'joinTable' => 'roles_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'role_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}

<?php
App::uses('AppModel', 'Model');
/**
 * MenusRole Model
 *
 * @property Roles $Roles
 */
class MenusRole extends AppModel {

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'menus_id';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'roles_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Roles' => array(
			'className' => 'Roles',
			'foreignKey' => 'roles_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

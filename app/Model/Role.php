<?php
App::uses('AppModel', 'Model');
/**
 * Role Model
 *
 * @property Menu $Menu
 * @property User $User
 */
class Role extends AppModel {

	var $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Menu' => array(
			'className' => 'Menu',
			'joinTable' => 'menus_roles',
			'foreignKey' => 'role_id',
			'associationForeignKey' => 'menu_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'User' => array(
			'className' => 'User',
			'joinTable' => 'roles_users',
			'foreignKey' => 'role_id',
			'associationForeignKey' => 'user_id',
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

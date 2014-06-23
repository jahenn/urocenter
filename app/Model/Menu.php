<?php
App::uses('AppModel', 'Model');
/**
 * Menu Model
 *
 * @property Role $Role
 */
class Menu extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Role' => array(
			'className' => 'Role',
			'joinTable' => 'menus_roles',
			'foreignKey' => 'menu_id',
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

	public $hasMany = array(
		'ChildMenu' => array(
			'className' => 'Menu',
			'joinTable' => 'menus',
			'foreignKey' => 'child_menu'
			)
		);

}

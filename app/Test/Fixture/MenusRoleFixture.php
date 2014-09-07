<?php
/**
 * MenusRoleFixture
 *
 */
class MenusRoleFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'menus_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'roles_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('menus_id', 'roles_id'), 'unique' => 1),
			'fk_menus_has_roles_roles1_idx' => array('column' => 'roles_id', 'unique' => 0),
			'fk_menus_has_roles_menus1_idx' => array('column' => 'menus_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'menus_id' => 1,
			'roles_id' => 1
		),
	);

}

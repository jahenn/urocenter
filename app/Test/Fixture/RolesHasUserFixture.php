<?php
/**
 * RolesHasUserFixture
 *
 */
class RolesHasUserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'roles_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'users_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('roles_id', 'users_id'), 'unique' => 1),
			'fk_roles_has_users_users1_idx' => array('column' => 'users_id', 'unique' => 0),
			'fk_roles_has_users_roles1_idx' => array('column' => 'roles_id', 'unique' => 0)
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
			'roles_id' => 1,
			'users_id' => 1
		),
	);

}

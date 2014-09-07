<?php
/**
 * MenuSubMenuFixture
 *
 */
class MenuSubMenuFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'menu_sub_menu';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'menu_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'sub_menu_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'menu_id' => array('column' => 'menu_id', 'unique' => 0),
			'sub_menu_id' => array('column' => 'sub_menu_id', 'unique' => 0)
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
			'id' => 1,
			'menu_id' => 1,
			'sub_menu_id' => 1
		),
	);

}

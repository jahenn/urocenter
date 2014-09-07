<?php
App::uses('MenusRole', 'Model');

/**
 * MenusRole Test Case
 *
 */
class MenusRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.menus_role',
		'app.roles'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MenusRole = ClassRegistry::init('MenusRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MenusRole);

		parent::tearDown();
	}

}

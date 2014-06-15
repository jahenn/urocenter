<?php
App::uses('UserRole', 'Model');

/**
 * UserRole Test Case
 *
 */
class UserRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_role',
		'app.user',
		'app.role',
		'app.role_menu',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserRole = ClassRegistry::init('UserRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserRole);

		parent::tearDown();
	}

}

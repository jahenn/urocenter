<?php
App::uses('UsersHasRole', 'Model');

/**
 * UsersHasRole Test Case
 *
 */
class UsersHasRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.users_has_role',
		'app.user',
		'app.role'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UsersHasRole = ClassRegistry::init('UsersHasRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UsersHasRole);

		parent::tearDown();
	}

}

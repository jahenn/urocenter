<?php
App::uses('UserHasRole', 'Model');

/**
 * UserHasRole Test Case
 *
 */
class UserHasRoleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_has_role',
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
		$this->UserHasRole = ClassRegistry::init('UserHasRole');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserHasRole);

		parent::tearDown();
	}

}

<?php
App::uses('RolesHasUser', 'Model');

/**
 * RolesHasUser Test Case
 *
 */
class RolesHasUserTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.roles_has_user',
		'app.users'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RolesHasUser = ClassRegistry::init('RolesHasUser');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RolesHasUser);

		parent::tearDown();
	}

}

<?php
App::uses('RoleMenu', 'Model');

/**
 * RoleMenu Test Case
 *
 */
class RoleMenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.role_menu',
		'app.role',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RoleMenu = ClassRegistry::init('RoleMenu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RoleMenu);

		parent::tearDown();
	}

}

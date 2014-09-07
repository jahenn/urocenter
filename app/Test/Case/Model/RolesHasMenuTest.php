<?php
App::uses('RolesHasMenu', 'Model');

/**
 * RolesHasMenu Test Case
 *
 */
class RolesHasMenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.roles_has_menu',
		'app.menus'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RolesHasMenu = ClassRegistry::init('RolesHasMenu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RolesHasMenu);

		parent::tearDown();
	}

}

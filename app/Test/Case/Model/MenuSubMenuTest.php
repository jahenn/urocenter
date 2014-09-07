<?php
App::uses('MenuSubMenu', 'Model');

/**
 * MenuSubMenu Test Case
 *
 */
class MenuSubMenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.menu_sub_menu',
		'app.menu',
		'app.sub_menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->MenuSubMenu = ClassRegistry::init('MenuSubMenu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->MenuSubMenu);

		parent::tearDown();
	}

}

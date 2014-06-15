<?php
App::uses('SubMenu', 'Model');

/**
 * SubMenu Test Case
 *
 */
class SubMenuTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sub_menu',
		'app.menu'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubMenu = ClassRegistry::init('SubMenu');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubMenu);

		parent::tearDown();
	}

}

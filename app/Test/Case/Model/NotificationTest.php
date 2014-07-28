<?php
App::uses('Notification', 'Model');

/**
 * Notification Test Case
 *
 */
class NotificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.notification',
		'app.role',
		'app.menu',
		'app.menus_role',
		'app.user',
		'app.user_answer',
		'app.user_exam',
		'app.exam',
		'app.exam_status',
		'app.question',
		'app.question_category',
		'app.answer',
		'app.roles_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Notification = ClassRegistry::init('Notification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Notification);

		parent::tearDown();
	}

}

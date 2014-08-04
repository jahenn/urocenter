<?php
App::uses('QuestionType', 'Model');

/**
 * QuestionType Test Case
 *
 */
class QuestionTypeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.question_type',
		'app.question',
		'app.question_category',
		'app.answer',
		'app.user_answer',
		'app.user_exam',
		'app.exam',
		'app.user',
		'app.role',
		'app.menu',
		'app.menus_role',
		'app.roles_user',
		'app.exam_status'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuestionType = ClassRegistry::init('QuestionType');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuestionType);

		parent::tearDown();
	}

}

<?php
App::uses('QuestionQuestion', 'Model');

/**
 * QuestionQuestion Test Case
 *
 */
class QuestionQuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.question_question',
		'app.question',
		'app.question_category',
		'app.question_type',
		'app.answer',
		'app.user_answer',
		'app.user_exam',
		'app.exam',
		'app.user',
		'app.role',
		'app.menu',
		'app.menus_role',
		'app.roles_user',
		'app.exam_status',
		'app.child_question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuestionQuestion = ClassRegistry::init('QuestionQuestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuestionQuestion);

		parent::tearDown();
	}

}

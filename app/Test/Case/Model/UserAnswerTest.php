<?php
App::uses('UserAnswer', 'Model');

/**
 * UserAnswer Test Case
 *
 */
class UserAnswerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_answer',
		'app.user_exam',
		'app.exam',
		'app.exam_category',
		'app.question',
		'app.answer',
		'app.exams_question',
		'app.user',
		'app.role',
		'app.roles_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->UserAnswer = ClassRegistry::init('UserAnswer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserAnswer);

		parent::tearDown();
	}

}

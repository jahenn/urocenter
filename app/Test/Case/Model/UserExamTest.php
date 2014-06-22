<?php
App::uses('UserExam', 'Model');

/**
 * UserExam Test Case
 *
 */
class UserExamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_exam',
		'app.exam',
		'app.exam_category',
		'app.question',
		'app.answer',
		'app.exams_question',
		'app.exam_status',
		'app.user_answer',
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
		$this->UserExam = ClassRegistry::init('UserExam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->UserExam);

		parent::tearDown();
	}

}

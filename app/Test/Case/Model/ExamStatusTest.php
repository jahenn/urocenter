<?php
App::uses('ExamStatus', 'Model');

/**
 * ExamStatus Test Case
 *
 */
class ExamStatusTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exam_status',
		'app.user_exam',
		'app.exam',
		'app.exam_category',
		'app.question',
		'app.answer',
		'app.exams_question',
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
		$this->ExamStatus = ClassRegistry::init('ExamStatus');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExamStatus);

		parent::tearDown();
	}

}

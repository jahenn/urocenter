<?php
App::uses('ScheduledExam', 'Model');

/**
 * ScheduledExam Test Case
 *
 */
class ScheduledExamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.scheduled_exam',
		'app.question',
		'app.question_category',
		'app.answer',
		'app.user_answer',
		'app.user_exam',
		'app.exam',
		'app.exam_category',
		'app.exams_question',
		'app.exam_status',
		'app.user',
		'app.role',
		'app.menu',
		'app.menus_role',
		'app.roles_user',
		'app.questions_scheduled_exam',
		'app.roles_scheduled_exam'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ScheduledExam = ClassRegistry::init('ScheduledExam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ScheduledExam);

		parent::tearDown();
	}

}

<?php
App::uses('QuestionsScheduledExam', 'Model');

/**
 * QuestionsScheduledExam Test Case
 *
 */
class QuestionsScheduledExamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.questions_scheduled_exam',
		'app.scheduled_exam',
		'app.question',
		'app.question_category',
		'app.question_type',
		'app.question_difficulty',
		'app.answer',
		'app.user_answer',
		'app.user_exam',
		'app.exam',
		'app.user',
		'app.user_rating',
		'app.role',
		'app.menu',
		'app.menus_role',
		'app.roles_user',
		'app.exam_status',
		'app.question_question',
		'app.roles_scheduled_exam'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuestionsScheduledExam = ClassRegistry::init('QuestionsScheduledExam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuestionsScheduledExam);

		parent::tearDown();
	}

}

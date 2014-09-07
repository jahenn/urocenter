<?php
App::uses('Question', 'Model');

/**
 * Question Test Case
 *
 */
class QuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
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
		'app.roles_user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Question = ClassRegistry::init('Question');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Question);

		parent::tearDown();
	}

}

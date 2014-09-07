<?php
App::uses('Exam', 'Model');

/**
 * Exam Test Case
 *
 */
class ExamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exam',
		'app.user',
		'app.user_answer',
		'app.user_exam',
		'app.exam_status',
		'app.question',
		'app.question_category',
		'app.answer',
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
		$this->Exam = ClassRegistry::init('Exam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Exam);

		parent::tearDown();
	}

}

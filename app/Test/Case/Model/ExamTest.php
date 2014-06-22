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
		'app.exam_category',
		'app.question',
		'app.answer',
		'app.exams_question'
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

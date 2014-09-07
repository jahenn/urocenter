<?php
App::uses('QuestionCategory', 'Model');

/**
 * QuestionCategory Test Case
 *
 */
class QuestionCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.question_category',
		'app.question',
		'app.answer',
		'app.exam',
		'app.exam_category',
		'app.exams_question'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuestionCategory = ClassRegistry::init('QuestionCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuestionCategory);

		parent::tearDown();
	}

}

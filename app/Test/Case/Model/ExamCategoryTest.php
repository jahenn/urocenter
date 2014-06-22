<?php
App::uses('ExamCategory', 'Model');

/**
 * ExamCategory Test Case
 *
 */
class ExamCategoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exam_category',
		'app.exam',
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
		$this->ExamCategory = ClassRegistry::init('ExamCategory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExamCategory);

		parent::tearDown();
	}

}

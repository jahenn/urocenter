<?php
App::uses('ExamsQuestion', 'Model');

/**
 * ExamsQuestion Test Case
 *
 */
class ExamsQuestionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.exams_question',
		'app.question',
		'app.answer',
		'app.exam',
		'app.exam_category'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ExamsQuestion = ClassRegistry::init('ExamsQuestion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ExamsQuestion);

		parent::tearDown();
	}

}

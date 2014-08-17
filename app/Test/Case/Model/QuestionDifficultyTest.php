<?php
App::uses('QuestionDifficulty', 'Model');

/**
 * QuestionDifficulty Test Case
 *
 */
class QuestionDifficultyTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.question_difficulty'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->QuestionDifficulty = ClassRegistry::init('QuestionDifficulty');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->QuestionDifficulty);

		parent::tearDown();
	}

}

<?php
App::uses('UserExamsController', 'Controller');

/**
 * UserExamsController Test Case
 *
 */
class UserExamsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_exam',
		'app.exam',
		'app.exam_category',
		'app.question',
		'app.answer',
		'app.exams_question',
		'app.user_answer'
	);

}

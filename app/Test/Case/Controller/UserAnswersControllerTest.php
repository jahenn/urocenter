<?php
App::uses('UserAnswersController', 'Controller');

/**
 * UserAnswersController Test Case
 *
 */
class UserAnswersControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.user_answer',
		'app.user_exam',
		'app.exam',
		'app.exam_category',
		'app.question',
		'app.answer',
		'app.exams_question',
		'app.user',
		'app.role',
		'app.roles_user'
	);

}

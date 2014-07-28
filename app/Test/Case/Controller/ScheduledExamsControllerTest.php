<?php
App::uses('ScheduledExamsController', 'Controller');

/**
 * ScheduledExamsController Test Case
 *
 */
class ScheduledExamsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.scheduled_exam',
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
		'app.roles_user',
		'app.questions_scheduled_exam'
	);

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {
		$this->markTestIncomplete('testIndex not implemented.');
	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {
		$this->markTestIncomplete('testView not implemented.');
	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {
		$this->markTestIncomplete('testAdd not implemented.');
	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {
		$this->markTestIncomplete('testEdit not implemented.');
	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {
		$this->markTestIncomplete('testDelete not implemented.');
	}

}

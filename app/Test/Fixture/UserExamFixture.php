<?php
/**
 * UserExamFixture
 *
 */
class UserExamFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'exam_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'last_answer' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'exam_status_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_user_exams_exams1_idx' => array('column' => 'exam_id', 'unique' => 0),
			'fk_user_exams_exam_statuses1_idx' => array('column' => 'exam_status_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'exam_id' => 1,
			'last_answer' => 1,
			'exam_status_id' => 1
		),
	);

}

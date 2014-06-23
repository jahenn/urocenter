<?php
/**
 * ExamsQuestionFixture
 *
 */
class ExamsQuestionFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'exam_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'question_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('exam_id', 'question_id'), 'unique' => 1),
			'fk_exams_has_questions_questions1_idx' => array('column' => 'question_id', 'unique' => 0),
			'fk_exams_has_questions_exams1_idx' => array('column' => 'exam_id', 'unique' => 0)
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
			'exam_id' => 1,
			'question_id' => 1
		),
	);

}

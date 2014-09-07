<?php
/**
 * AnswerFixture
 *
 */
class AnswerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'question_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'answer' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'answer_is_ok' => array('type' => 'boolean', 'null' => true, 'default' => null),
		'value' => array('type' => 'float', 'null' => true, 'default' => null, 'length' => '18,2'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_answers_questions1_idx' => array('column' => 'question_id', 'unique' => 0)
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
			'question_id' => 1,
			'answer' => 'Lorem ipsum dolor sit amet',
			'answer_is_ok' => 1,
			'value' => 1
		),
	);

}

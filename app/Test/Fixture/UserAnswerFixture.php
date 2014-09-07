<?php
/**
 * UserAnswerFixture
 *
 */
class UserAnswerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_exam_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'question_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'answer_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'pregunta' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'respuesta' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'correcta' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'valor' => array('type' => 'float', 'null' => false, 'default' => null, 'length' => '18,2'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_user_answers_user_exams1_idx' => array('column' => 'user_exam_id', 'unique' => 0),
			'fk_user_answers_users1_idx' => array('column' => 'user_id', 'unique' => 0),
			'fk_user_answers_questions1_idx' => array('column' => 'question_id', 'unique' => 0),
			'fk_user_answers_answers1_idx' => array('column' => 'answer_id', 'unique' => 0)
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
			'user_exam_id' => 1,
			'user_id' => 1,
			'question_id' => 1,
			'answer_id' => 1,
			'pregunta' => 'Lorem ipsum dolor sit amet',
			'respuesta' => 'Lorem ipsum dolor sit amet',
			'correcta' => 1,
			'valor' => 1
		),
	);

}

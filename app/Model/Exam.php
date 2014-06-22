<?php
App::uses('AppModel', 'Model');
/**
 * Exam Model
 *
 * @property ExamCategory $ExamCategory
 * @property Question $Question
 */
class Exam extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'exam_description';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'ExamCategory' => array(
			'className' => 'ExamCategory',
			'foreignKey' => 'exam_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Question' => array(
			'className' => 'Question',
			'joinTable' => 'exams_questions',
			'foreignKey' => 'exam_id',
			'associationForeignKey' => 'question_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}

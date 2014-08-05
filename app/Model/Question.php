<?php
App::uses('AppModel', 'Model');
/**
 * Question Model
 *
 * @property QuestionCategory $QuestionCategory
 * @property Answer $Answer
 * @property UserAnswer $UserAnswer
 * @property Exam $Exam
 */
class Question extends AppModel {

	var $displayField = 'question';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'question_category_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'imagen' => array(
			// 'notEmpty' => array(
			// 	'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			//),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'QuestionCategory' => array(
			'className' => 'QuestionCategory',
			'foreignKey' => 'question_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'QuestionType'
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Answer' => array(
			'className' => 'Answer',
			'foreignKey' => 'question_id',
			'dependent' => false,
			'conditions' => array(
				'Answer.activa'=>true
				),
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'UserAnswer' => array(
			'className' => 'UserAnswer',
			'foreignKey' => 'question_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'QuestionQuestion'
	);

}

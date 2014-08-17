<?php
App::uses('AppModel', 'Model');
/**
 * QuestionDifficulty Model
 *
 */
class QuestionDifficulty extends AppModel {
	var $displayField = 'descripcion';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'descripcion' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}

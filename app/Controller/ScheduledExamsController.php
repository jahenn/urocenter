<?php
App::uses ( 'AppController', 'Controller' );
/**
 * ScheduledExams Controller
 *
 * @property ScheduledExam $ScheduledExam
 * @property PaginatorComponent $Paginator
 */
class ScheduledExamsController extends AppController {
	
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array (
			'Paginator' 
	);
	
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		$this->ScheduledExam->recursive = 2;
		$this->ScheduledExam->unbindModel(array(
			'hasAndBelongsToMany'=>array('Question')
			));
		$this->ScheduledExam->Role->unbindModel(array(
			'hasAndBelongsToMany'=>array('Menu', 'User')
			));
		$this->Paginator->settings = array(
			'order'=>array('id'=>'desc')
			);
		$this->set ( 'scheduledExams', $this->Paginator->paginate () );
	}
	
	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id        	
	 * @return void
	 */
	public function view($id = null) {
		if (! $this->ScheduledExam->exists ( $id )) {
			throw new NotFoundException ( __ ( 'Invalid scheduled exam' ) );
		}
		
		if ($this->request->is ( 'post' )) {
			$questions = $this->request->data ['Question'];
			foreach ( $questions as $question ) {
				$this->ScheduledExam->QuestionsScheduledExam->create ();
				
				$this->ScheduledExam->QuestionsScheduledExam->save ( array (
						'scheduled_exam_id' => $id,
						'question_id' => $question ['question_id'] 
				) );
			}
			// exit();
			// pr($this->request->data);exit();
		}
		
		$options = array (
				'conditions' => array (
						'ScheduledExam.' . $this->ScheduledExam->primaryKey => $id 
				) 
		);
		$this->ScheduledExam->recursive = 2;
		
		$scheduledExam = $this->ScheduledExam->find ( 'first', $options );
		
		$questions = $this->ScheduledExam->Question->find ( 'list', array (
				'conditions' => array (
						'question_category_id' => $scheduledExam ['ScheduledExam'] ['question_category_id'] ,
						'question_difficulty_id' => $scheduledExam ['ScheduledExam'] ['question_difficulty_id'],
						'question_status_id'=>2
				) 
		) );
		
		$this->set ( compact ( 'questions', 'scheduledExam' ) );
	}
	
	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		if ($this->request->is ( 'post' )) {
			
			$this->request->data['ScheduledExam']['user_id'] = $this->Auth->user()['id'];
			if($this->request->data['ScheduledExam']['question_difficulty_id'] == ''){
				$this->request->data['ScheduledExam']['question_difficulty_id'] = rand ( 1 , 3 );
			}
			
			$this->ScheduledExam->create ();
			if ($this->ScheduledExam->save ( $this->request->data )) {
				
				$new_id = $this->ScheduledExam->getlastInsertId () ;
				
				$v = new View ();
				$event_url = $v->Html->url ( array (
						'controller' => 'ScheduledExams',
						'action' => 'resolve', $new_id
				
				));
				// pr($this->request->data);
				// exit();
				
				//Asignamos url a el examen
				// $this->ScheduledExam->id = $new_id;
				// $this->ScheduledExam->saveField('private_url', $event_url);
				
				
				// // add to calendar
				
				
				// $this->loadModel ( 'CalendarEvent' );
				

				
				// $fecha = $this->request->data ['ScheduledExam'] ['fecha_programada'];
				// $titulo = $this->request->data ['ScheduledExam'] ['titulo'];


				// foreach ($this->request->data['Role']['Role'] as $key => $value) {

				// 	$this->CalendarEvent->create ();
				// 	$this->CalendarEvent->save ( array (
				// 			'titulo' => $titulo,
				// 			'descripcion' => 'Nuevo Examen Programado',
				// 			'fecha' => $fecha,
				// 			'color_id' => 1,
				// 			'url' => $event_url ,
				// 			'role_id'=>$value
				// 	) );
				// }
				
				$this->Session->setFlash ( __ ( 'Se programo el examen correctamente' ), 'default', array(
					'class'=>'alert alert-success'
				) );
				return $this->redirect ( array (
						'action' => 'view',
						$this->ScheduledExam->getlastInsertId () 
				) );
			} else {
				$this->Session->setFlash ( __ ( 'The scheduled exam could not be saved. Please, try again.' ) );
			}
		}


		$this->loadModel('User');
		$users_list = $this->User->find('list', array(
			'fields'=>array('username'),
			'conditions'=>array(
				'activo'=>true
				)
			));

		//pr($users_list); exit();

		$active_users = array();
		foreach ($users_list as $key => $value) {
			$active_users[] = $value;
		}

		//pr($active_users); exit();

		$questions = $this->ScheduledExam->Question->find ( 'list' );
		$roles = $this->ScheduledExam->Role->find( 'list', array(
			'conditions'=>array(
				'OR'=> array(
					'nombre'=>$active_users,
					'user_role'=> false
					)
				),
			'order'=>array('user_role'=>'asc', 'nombre')
			));
		
		$questionCategories = $this->ScheduledExam->Question->QuestionCategory->find ( 'list' );
		$questionDifficulties = $this->ScheduledExam->Question->QuestionDifficulty->find ( 'list' );
		
		
		
		$this->set ( compact ( 'questions', 'roles', 'questionCategories', 'questionDifficulties' ) );
	}
	
	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id        	
	 * @return void
	 */
	public function edit($id = null) {
		if (! $this->ScheduledExam->exists ( $id )) {
			throw new NotFoundException ( __ ( 'Invalid scheduled exam' ) );
		}
		if ($this->request->is ( array (
				'post',
				'put' 
		) )) {
			$this->ScheduledExam->id = $id;
			$this->ScheduledExam->read ();
			
			if ($this->ScheduledExam->save ( $this->request->data )) {
				$this->Session->setFlash ( __ ( 'The scheduled exam has been saved.' ) );
				
				return $this->redirect ( array (
						'action' => 'index' 
				) );
			} else {
				$this->Session->setFlash ( __ ( 'The scheduled exam could not be saved. Please, try again.' ) );
			}
		} else {
			$options = array (
					'conditions' => array (
							'ScheduledExam.' . $this->ScheduledExam->primaryKey => $id 
					) 
			);
			$this->ScheduledExam->recursive = 2;
			$this->request->data = $this->ScheduledExam->find ( 'first', $options );
		}
		$roles = $this->ScheduledExam->Role->find ( 'list', array (
				'conditions' => array (
						'user_role' => false 
				) 
		) );
		$questions = $this->ScheduledExam->Question->find ( 'list' );
		$this->set ( compact ( 'questions', 'roles' ) );
	}
	
	/**
	 * delete method
	 *
	 * @throws NotFoundException
	 * @param string $id        	
	 * @return void
	 */
	public function delete($id = null) {
		$this->ScheduledExam->id = $id;
		if (! $this->ScheduledExam->exists ()) {
			throw new NotFoundException ( __ ( 'Invalid scheduled exam' ) );
		}
		// $this->request->allowMethod('post', 'delete');
		if ($this->ScheduledExam->delete ()) {
			$this->Session->setFlash ( __ ( 'The scheduled exam has been deleted.' ) );
		} else {
			$this->Session->setFlash ( __ ( 'The scheduled exam could not be deleted. Please, try again.' ) );
		}
		return $this->redirect ( array (
				'action' => 'index' 
		) );
	}
	public function addQuestion($exam_id) {
		if ($this->request->is ( 'post' )) {
			
			$question_id = $this->request->data ['Question'] ['question_id'];
			
			$this->ScheduledExam->QuestionsScheduledExam->create ();
			$this->ScheduledExam->QuestionsScheduledExam->save ( array (
					'scheduled_exam_id' => $exam_id,
					'question_id' => $question_id 
			) );
			
			$this->Session->setFlash ( 'Pregunta Agregada al Examen', 'default', array (
					'class' => 'alert alert-success' 
			) );
			
			$this->redirect ( array (
					'action' => 'view',
					$exam_id 
			) );
		} else {
			$question_categories = $this->ScheduledExam->Question->QuestionCategory->find ( 'list' );
			// pr($question_categories);
			$this->set ( compact ( 'question_categories' ) );
		}
	}
	public function resolve($id) {

		$this->loadModel('Exam');



		$exam_exists = $this->Exam->find('count', array(
			'conditions'=>array(
				'exam_id'=>$id,
				'user_id'=>$this->Auth->user()['id']
				)
			));

		// pr($exam_exists); exit();


		if($exam_exists > 0){
			$this->Session->setFlash('El examen ya fue resuelto', 'default', array(
				'class'=>'alert alert-danger'
				));

			$this->redirect($this->referer());
		}

		$this->ScheduledExam->Question->unbindAll(array(
			'exceptions'=>array('Answer')
			));

		if ($this->request->is ( 'post' )) {
			$this->ScheduledExam->bindModel ( array (
					'belongsTo' => array (
							'QuestionCategory', 'QuestionDifficulty' 
					) 
			) );
			



			$exam = $this->ScheduledExam->find ( 'first', array (
					'conditions' => array (
							'ScheduledExam.id' => $id 
					) 
			) );
			
// 			pr($exam); exit();
			
			$exam_category = $exam ['QuestionCategory'] ['nombre'];
			
			// pr($exam); exit();
			
			$tmp_exam = array (
					'titulo' => $exam ['ScheduledExam'] ['titulo'],
					'descripcion' => $exam ['ScheduledExam'] ['comentarios'],
					'fecha' => date ( 'Y-m-d' ),
					'user_id' => $this->Auth->user ()['id'],
					'resultado' => 0,
					'estatus' => 1,
					'categoria' => $exam_category ,
					'dificultad'=>$exam['QuestionDifficulty']['descripcion'],
					'exam_id'=>$id
			);
			
			$this->loadModel ( 'Exam' );
			
			$this->Exam->create ();
			if ($this->Exam->save ( $tmp_exam )) {
				
				$exam_id = $this->Exam->getlastInsertId ();
				$this->loadModel ( 'ExamAnswer' );
				
				// relacion de columnas
				if (isset ( $this->request->data ['columnas'] )) {
					foreach ( $this->request->data ['Columnas'] as $pK => $pV ) {
						foreach ( $pV as $ppK => $ppV ) {
							$question_id = $ppV ['pregunta'] ['id_pregunta'];
							$answer_id = $ppV ['pregunta'] ['id_respuesta'];
							
							$this->loadModel ( 'Question' );
							$this->loadModel ( 'Answer' );
							
							$question = $this->Question->find ( 'first', array (
									'conditions' => array (
											'Question.id' => $question_id 
									) 
							) );
							
							$answer = $this->Answer->find ( 'first', array (
									'conditions' => array (
											'Answer.id' => $answer_id 
									) 
							) );
							
							$question_text = $question ['Question'] ['question'];
							$answer_text = $answer ['Answer'] ['answer'];
							
							$answer_correct = $this->Answer->find ( 'first', array (
									'conditions' => array (
											'Answer.question_id' => $question_id,
											'Answer.answer_is_ok' => true 
									) 
							) );
							
							//pr($answer_correct); exit();
							
							$correct_text = $answer_correct ['Answer'] ['answer'];
							
							$correcto = false;
							if (count ( $answer_correct ) > 0) {
								$correcto = true;
							}
							
							$tmp_answer = array (
									'exam_id' => $exam_id,
									'pregunta' => $question_text,
									'respuesta' => $answer_text,
									'respuesta_correcta' => $correct_text,
									'correcta' => $correcto,
									'calificada' => true 
							);
							
							$this->ExamAnswer->create ();
							$this->ExamAnswer->save ( $tmp_answer );
							
							// pr(compact('question_text', 'answer_text'));
						}
					}
				}
				
				// Opcion Multiple
				
				if (isset ( $this->request->data ['Multiple'] )) {
					foreach ( $this->request->data ['Multiple'] as $cK => $cV ) {
						
						$question_id = $cV ['question'];
						$answer_id = (isset ( $cV ['answer'] )) ? $cV ['answer'] : 0;
						
						$this->loadModel ( 'Question' );
						$this->loadModel ( 'Answer' );
						
						$this->Question->bindModel ( array (
								'belongsTo' => array (
										'QuestionCategory' 
								) 
						) );
						// $this->Question->recursive = 3;
						$question = $this->Question->find ( 'first', array (
								'conditions' => array (
										'Question.id' => $question_id 
								) 
						) );
						
						$answer = $this->Answer->find ( 'first', array (
								'conditions' => array (
										'Answer.id' => $answer_id 
								) 
						) );
						
						$question_text = $question ['Question'] ['question'];
						$answer_text = (isset ( $answer ['Answer'] ['answer'] )) ? $answer ['Answer'] ['answer'] : '';
						
// 						pr($question);exit();
						$categoria = $question ['QuestionCategory'] ['nombre'];
						$bibliografia = $question['Question']['referencias'];
						
// 						pr($categoria);exit();
						
						$answer_correct = $this->Answer->find ( 'first', array (
								'conditions' => array (
										'Answer.id' => $answer_id,
										'Answer.question_id' => $question_id,
										'Answer.answer_is_ok' => true 
								) 
						) );
						
						$correct_text = 'Sin respuesta correcta';
						$correcto = false;
						if (count ( $answer_correct ) > 0) {
							$correcto = true;
							
						}
						
						$answer_real_correct= $this->Answer->find ( 'first', array (
								'conditions' => array (
										'Answer.question_id' => $question_id,
										'Answer.answer_is_ok' => true,
										'Answer.activa'=> true
								)
						) );
						
						if(!empty($answer_real_correct)){
							$correct_text = $answer_real_correct ['Answer'] ['answer'];
						}

						
						$tmp_answer = array (
								'exam_id' => $exam_id,
								'pregunta' => $question_text,
								'respuesta' => $answer_text,
								'respuesta_correcta' => $correct_text,
								'correcta' => $correcto,
								'calificada' => true,
								'categoria' => $categoria ,
								'bibliografia'=>$bibliografia
						);
						
						$this->ExamAnswer->create ();
						$this->ExamAnswer->save ( $tmp_answer );
					}
					
					// exit();
				}
				
				$total_questions = $this->ExamAnswer->find ( 'count', array (
						'conditions' => array (
								'calificada' => true,
								'exam_id' => $exam_id 
						) 
				) );
				
				$questions_ok = $this->ExamAnswer->find ( 'count', array (
						'conditions' => array (
								'calificada' => true,
								'exam_id' => $exam_id,
								'correcta' => true 
						) 
				) );
				
				if ($total_questions == 0) {
					$total_questions = 100;
					$questions_ok = 0;
				}
				
				$promedio = ($questions_ok / $total_questions) * 100;
				
				$this->Exam->id = $exam_id;
				$this->Exam->read ();
				
				$this->Exam->saveField ( 'resultado', $promedio );
				
				$this->redirect ( array (
						'controller' => 'exams',
						'action' => 'review',
						$exam_id 
				) );
			}
			
			exit ();
		}
		
		$this->ScheduledExam->id = $id;
		
		if ($this->ScheduledExam->exists ()) {
			$this->ScheduledExam->recursive = 4;
			$this->ScheduledExam->Question->QuestionCategory->unbindModel ( array (
					'hasMany' => array (
							'Question' 
					) 
			) );

			
			$this->request->data = $this->ScheduledExam->find ( 'first', array (
					'conditions' => array (
							'ScheduledExam.id' => $id 
					) 
			) );

			//pr($this->request->data);exit();
		}
	}
	public function thanks() {
	}
	public function start($id) {
	}
	public function randomize($id, $elements = 10, $categoria = 0, $difficulty = 1, $redirect = true) {
		$this->autoRender = false;

		// pr(compact('categoria', 'difficulty')); exit();
		
		$questions = $this->ScheduledExam->Question->find ( 'all', array (
				'conditions' => array (
						'OR' => array (
								'question_category_id' => $categoria,
								'"0"' => "$categoria"
						),
						'question_type_id'=>1,
						'question_difficulty_id' => $difficulty,
						'question_status_id'=> 2
				) 
		) );

		//$v = new View();
		//pr($v->element('sql_dump')); exit();
		
		$questions_rnd = array ();
		
		foreach ( $questions as $key => $value ) {
			$questions_rnd [] = $value ['Question'] ['id'];
		}
		
		shuffle ( $questions_rnd );
		
		$questions_rnd = array_slice ( $questions_rnd, 0, $elements );
		
		// pr($questions_rnd);
		
		// exit();
		
		$this->ScheduledExam->QuestionsScheduledExam->deleteAll ( array (
				'scheduled_exam_id' => $id 
		) );
		
		foreach ( $questions_rnd as $key => $value ) {
			
			$this->ScheduledExam->QuestionsScheduledExam->create ();
			
			$this->ScheduledExam->QuestionsScheduledExam->save ( array (
					'scheduled_exam_id' => $id,
					'question_id' => $value 
			) );
		}
		
		if (count ( $questions_rnd ) == 0) {
			$this->Session->setFlash ( 'No hubo resultados para los criterios utilizados', 'default', array (
					'class' => 'alert alert-danger' 
			) );
		}
		
		if (count ( $questions_rnd ) != $elements && count ( $questions_rnd ) != 0) {
			$this->Session->setFlash ( 'No se encontro la cantidad de preguntas solicitadas, para los criterios utilizados', 'default', array (
					'class' => 'alert alert-danger' 
			) );
		}
		
		if ($redirect) {
			$this->redirect ( array (
					'action' => 'view',
					$id 
			) );
		} else {
			return true;
		}
		
		// pr($questions); exit();
		
		// $v = new View();
		// pr($v->element('sql_dump'));
	}
	public function add_random() {
		if ($this->request->is ( 'post' )) {
			// App::import('Controller', 'Questions');
			
			// $q = new QuestionsController;
			$dificultad = $this->request->data ['random_exam'] ['question_difficulty_id'];
			// pr($dificultad);exit();
			if($dificultad == '')
			{
				$dificultad = rand(1, 3);
			}
			$this->request->data ['random_exam'] ['question_difficulty_id'] = $dificultad;
			//pr($dificultad); exit();

			// pr($this->request->data);exit();

			$this->ScheduledExam->create ();
			$exam = array (
					'fecha_programada' => date ( 'Y-m-d' ),
					'estatus' => 3,
					'titulo' => 'Examen Random',
					'question_category_id' => $this->request->data ['random_exam'] ['question_category_id'],
					'question_difficulty_id' => $dificultad,
					'numero_preguntas' => $this->request->data ['random_exam'] ['cantidad'],
					'scheduled_exam_status_id' => 3 
			);

			
			$this->ScheduledExam->save ( $exam );
			
			$id = $this->ScheduledExam->getlastInsertId ();
			$cantidad = $this->request->data ['random_exam'] ['cantidad'];
			$categoria = $this->request->data ['random_exam'] ['question_category_id'];
			$dificultad = $this->request->data ['random_exam'] ['question_difficulty_id'];
			
			$this->randomize ( $id, $cantidad, $categoria, $dificultad, false );
			
			$this->redirect ( array (
					'controller' => 'scheduled_exams',
					'action' => 'resolve',
					$id 
			) );
			
			pr ( $this->request->data );
			exit ();
		}
		
		$this->loadModel ( 'QuestionCategory' );
		$this->loadModel ( 'QuestionDifficulty' );
		
		$questionCategories = $this->QuestionCategory->find ( 'list' );
		$questionDifficulties = $this->QuestionDifficulty->find ( 'list' );
		
		$this->set ( compact ( 'questionCategories', 'questionDifficulties' ) );
	}
}

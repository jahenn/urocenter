<?php
App::uses('AppController', 'Controller');

/**
 * Exams Controller
 *
 * @property Exam $Exam
 * @property PaginatorComponent $Paginator
 */
class ExamsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		
		
		$this->Exam->recursive = 0;
		$this->Paginator->settings = array(
			'order'=>array('fecha'=>'DESC')
			);
		$this->set('exams', $this->Paginator->paginate(array(
			'User.activo'=>true
			)));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Exam->exists($id)) {
			throw new NotFoundException(__('Invalid exam'));
		}
		
		$this->redirect(array('action'=>'review', $id));
		
		$options = array('conditions' => array('Exam.' . $this->Exam->primaryKey => $id));
		$this->set('exam', $this->Exam->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Exam->create();
			if ($this->Exam->save($this->request->data)) {
				$this->Session->setFlash(__('The exam has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exam could not be saved. Please, try again.'));
			}
		}
		$users = $this->Exam->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Exam->exists($id)) {
			throw new NotFoundException(__('Invalid exam'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Exam->save($this->request->data)) {
				$this->Session->setFlash(__('The exam has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The exam could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Exam.' . $this->Exam->primaryKey => $id));
			$this->request->data = $this->Exam->find('first', $options);
		}
		$users = $this->Exam->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Exam->id = $id;
		if (!$this->Exam->exists()) {
			throw new NotFoundException(__('Invalid exam'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Exam->delete()) {
			$this->Session->setFlash(__('The exam has been deleted.'));
		} else {
			$this->Session->setFlash(__('The exam could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function promedio_mensual(){
		$this->autoRender = false;
		$this->Exam->virtualFields['resultado'] = 0;
		$this->Exam->virtualFields['fecha'] = 0;
		$examenes = $this->Exam->query('select cast(fecha as date) as Exam__fecha, cast(avg(resultado) as decimal(18,2)) as Exam__resultado from exams as Exam group by month(fecha)');
		
		$exams = array();

		$meses = array(
			'No definido', 
			'Enero', 
			'Febrero',
			'Marzo',
			'Abril',
			'Mayo',
			'Junio',
			'Julio',
			'Agosto',
			'Septiembre',
			'Octubre',
			'Noviembre',
			'Diciembre');

		//pr($examenes);

		foreach ($examenes as $key => $v) {
			$exams[] = array('fecha'=>  $v['Exam']['fecha'] ,  'value'=>$v['Exam']['resultado']);
		}

		echo json_encode($exams);

	}


	public function review($id) {
		$this->Exam->bindModel(array(
			'hasMany'=>array(
				'ExamAnswer'
				)
			));	
		$exam = $this->Exam->find('first', array(
			'conditions'=>array(
				'Exam.id'=>$id
				)
			));

		$this->set(compact('exam'));
	}


	
}

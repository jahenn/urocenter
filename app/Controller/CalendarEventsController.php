<?php 
	
	class CalendarEventsController extends AppController {

		public function view_day($day, $month, $year)
		{

			$this->loadModel('User');

			$roles = $this->User->find('first', array(
				'conditions'=>array('User.id'=> $this->Auth->user()['id'])
				));
			
			
			$roles_ids = array();
			foreach ($roles['Role'] as $key => $value) {
				$roles_ids[] = $value['id'];
			}

			$this->CalendarEvent->recursive = 3;
			$events = $this->CalendarEvent->find('all', array(
				'conditions'=>array(
					'day(fecha)'=>$day,
					'month(fecha)'=>$month,
					'year(fecha)'=>$year,
					'role_id'=>$roles_ids
					)
			));

			$this->set(compact('events'));
		}


		public function delete($id)
		{
			$this->CalendarEvent->id = $id;
			if($this->CalendarEvent->exists())
			{
				$this->CalendarEvent->delete();
			}

			$this->redirect($this->referer());
		}

		public function json()
		{
			$this->autoRender = false;

			$this->loadModel('User');
			$user_id = $this->Auth->user()['id'];


			$roles = $this->User->find('first', array(
				'conditions'=>array('User.id'=> $user_id)
				));
			

			// $vv = new View();
			// pr($vv->element('sql_dump'));

			// pr($roles); exit();
			
			$roles_ids = array();
			foreach ($roles['Role'] as $key => $value) {
				$roles_ids[] = $value['id'];
			}

			// pr($roles_ids); exit();
			$this->CalendarEvent->recursive = 3;
			$events = $this->CalendarEvent->find('all', array(
				'conditions'=>array(
					'CalendarEvent.role_id' => $roles_ids
					)
				));

			$_evensts = array();
			$_days = array();
			$v = new View();
			foreach ($events as $key => $value) {
				// $_evensts[] = array(
				// 	'title' => $value['CalendarEvent']['titulo'],
				// 	'start' => $value['CalendarEvent']['fecha'],
				// 	'backgroundColor' => $value['Color']['color'],
				// 	'borderColor' => 'white',
				// 	'url' => $value['CalendarEvent']['url']
				// 	);

				$fecha = date('Y-m-d', strtotime($value['CalendarEvent']['fecha']));

				if(isset($_days[$fecha]))
				{
					$_days[$fecha]++;
				}
				else
				{
					$_days[$fecha] = 1;
				}

				

				$_evensts[$fecha] = array(
					'number'=> $_days[$fecha],
					'badgeClass'=>'badge-warning',
					'url'=> $v->Html->url(array(
						'action'=>'view_day', date('d',strtotime($fecha)), date('m',strtotime($fecha)), date('Y',strtotime($fecha)) 
						)),
					'dayEvents'=> array(
						array('name'=>'Nombre', 'hour'=> '08:15')
						)
					);


			}


			// $_evensts = array("ok"=>array("hola"));
			

			echo json_encode($_evensts);
			//pr($_evensts);

		}
	}

 ?>

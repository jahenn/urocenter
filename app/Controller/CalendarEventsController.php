<?php 
	
	class CalendarEventsController extends AppController {

		public function view_day($day, $month, $year)
		{
			$this->CalendarEvent->recursive = 3;
			$events = $this->CalendarEvent->find('all', array(
				'conditions'=>array(
					'day(fecha)'=>$day,
					'month(fecha)'=>$month,
					'year(fecha)'=>$year
					)
			));

			$this->set(compact('events'));
		}



		public function json()
		{
			$this->autoRender = false;
			$this->CalendarEvent->recursive = 3;
			$events = $this->CalendarEvent->find('all');

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
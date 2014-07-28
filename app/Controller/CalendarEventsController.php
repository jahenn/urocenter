<?php 
	
	class CalendarEventsController extends AppController {





		public function json()
		{
			$this->autoRender = false;
			$this->CalendarEvent->recursive = 3;
			$events = $this->CalendarEvent->find('all');

			$_evensts = array();

			foreach ($events as $key => $value) {
				$_evensts[] = array(
					'title' => $value['CalendarEvent']['titulo'],
					'start' => $value['CalendarEvent']['fecha'],
					'backgroundColor' => $value['Color']['valor'],
					'borderColor' => 'white',
					'url' => $value['CalendarEvent']['url']
					);
			}

			echo json_encode($_evensts);
			//pr($_evensts);

		}
	}

 ?>
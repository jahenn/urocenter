<?php 
	
	class CalendarEventsController extends AppController {





		public function json()
		{
			$this->autoRender = false;
			$events = $this->CalendarEvent->find('all');

			$_evensts = array();

			foreach ($events as $key => $value) {
				$_evensts[] = array(
					'title' => $value['CalendarEvent']['titulo'],
					'start' => $value['CalendarEvent']['fecha']
					);
			}

			echo json_encode($_evensts);

		}
	}

 ?>
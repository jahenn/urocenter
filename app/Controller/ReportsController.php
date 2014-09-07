<?php 
	class ReportsController extends AppController {
		
		public function index(){
			$this->loadModel('User');
			$this->set('isAdmin', $this->User->isAdmin($this->Auth->user()['id']) );
		}


		public function users_month_data() {
			$this->autoRender = false;


			$fecha_comienzo = date('Y-m-d', Strtotime ("-1 month")); 

			$datos = array();

			$this->loadModel('User');
			$this->loadModel('Exam');

			for($i=1; $i<= 32; $i++) {

				$users = $this->User->find('count', array(
					'conditions'=>array(
						'fecha_registro >=' => $fecha_comienzo,
						'fecha_registro <=' => $fecha_comienzo.' 23:59:59' 
						)
					));

				$this->Exam->virtualFields['resultado'] = 0;
				$examenes = $this->Exam->find('first', array(
					'fields'=>array(
						'ifnull(avg(Exam.resultado),0) as Exam__resultado'
						),
					'conditions'=>array(
						'fecha >=' => $fecha_comienzo,
						'fecha <=' => $fecha_comienzo.' 23:59:59' 
						)

					));

				$examenes = $examenes['Exam']['resultado'];


				$cantidad_examenes = $this->Exam->find('count', array(
					'conditions'=>array(
						'fecha >=' => $fecha_comienzo,
						'fecha <=' => $fecha_comienzo.' 23:59:59' 
					)));


				if($users != 0 || abs($examenes) != 0 || $cantidad_examenes != 0)
				{
					$datos['fechas'][] = $fecha_comienzo;
					$datos['usuarios'][] = $users;
					$datos['examenes'][] = abs($examenes);
					$datos['no_examenes'][] = abs($cantidad_examenes);
				}

				

				$fecha_comienzo = date('Y-m-d', Strtotime ( $fecha_comienzo." +1 day")); 

			}


			echo json_encode($datos);

		}
		
		public function user_month_data($user) {
			$this->autoRender = false;
		
		
			$fecha_comienzo = date('Y-m-d', Strtotime ("-1 month"));
		
			$datos = array();
		
			$this->loadModel('User');
			$this->loadModel('Exam');
		
			for($i=1; $i<= 32; $i++) {
		
				$this->Exam->virtualFields['resultado'] = 0;
				$examenes = $this->Exam->find('first', array(
						'fields'=>array(
								'ifnull(avg(Exam.resultado),0) as Exam__resultado'
						),
						'conditions'=>array(
								'fecha >=' => $fecha_comienzo,
								'fecha <=' => $fecha_comienzo.' 23:59:59',
								'user_id' => $user
						)
		
				));
				
				$examenes = $examenes['Exam']['resultado'];
		
		
				$cantidad_examenes = $this->Exam->find('count', array(
						'conditions'=>array(
								'fecha >=' => $fecha_comienzo,
								'fecha <=' => $fecha_comienzo.' 23:59:59',
								'user_id' => $user
						)));
		
		
				if(abs($examenes) != 0 || $cantidad_examenes != 0)
				{
					$datos['fechas'][] = $fecha_comienzo;
					$datos['examenes'][] = abs($examenes);
					$datos['no_examenes'][] = abs($cantidad_examenes);
				}
		
				$fecha_comienzo = date('Y-m-d', Strtotime ( $fecha_comienzo." +1 day"));
		
			}
// 			pr($datos);
// 			exit();
		
		
			echo json_encode($datos);
		
		}
		public function user_year_data($user){
			$this->autoRender = false;
		
		
		
			$mes_comienzo = date('Y-m-d', Strtotime ("-12 month"));
		
				
		
			$datos = array();
		
			$this->loadModel('User');
			$this->loadModel('Exam');
		
			for($i=1; $i<=12; $i++)
			{
			$mes = $this->next_month($mes_comienzo);
		
			$year = $mes['year'];
				$month = $mes['month'];
				$month_lg = $mes['month_lg'];
		
		
		
								$this->Exam->virtualFields['resultado'] = 0;
								$examenes = $this->Exam->find('first', array(
										'fields'=>array(
												'ifnull(avg(Exam.resultado),0) as Exam__resultado'
										),
										'conditions'=>array(
						'month(fecha)'=> $month,
						'year(fecha)'=> $year,
						'user_id' => $user
								)
		
								));
		
								$examenes = $examenes['Exam']['resultado'];
		
		
								$cantidad_examenes = $this->Exam->find('count', array(
										'conditions'=>array(
										'month(fecha)'=> $month,
										'year(fecha)'=> $year,
												'user_id' => $user
								)
										));
		
										$datos['meses'][] = $month_lg;
										$datos['examenes'][] = abs($examenes);
										$datos['no_examenes'][] = abs($cantidad_examenes);
		
		
		
												$mes_comienzo = date('Y-m-d', mktime(0,0,0, $month, 1, $year));
		
		}
		
					echo json_encode($datos);
				
				}

		public function users_year_data(){
			$this->autoRender = false;



			$mes_comienzo = date('Y-m-d', Strtotime ("-12 month")); 

			

			$datos = array();

			$this->loadModel('User');
			$this->loadModel('Exam');

			for($i=1; $i<=12; $i++)
			{
				$mes = $this->next_month($mes_comienzo);

				$year = $mes['year'];
				$month = $mes['month'];
				$month_lg = $mes['month_lg'];


				$users = $this->User->find('count', array(
					'conditions'=>array(
						'month(fecha_registro)'=> $month,
						'year(fecha_registro)'=> $year
						)
					));

				$this->Exam->virtualFields['resultado'] = 0;
				$examenes = $this->Exam->find('first', array(
					'fields'=>array(
						'ifnull(avg(Exam.resultado),0) as Exam__resultado'
						),
					'conditions'=>array(
						'month(fecha)'=> $month,
						'year(fecha)'=> $year
						)

					));

				$examenes = $examenes['Exam']['resultado'];


				$cantidad_examenes = $this->Exam->find('count', array(
					'conditions'=>array(
						'month(fecha)'=> $month,
						'year(fecha)'=> $year
						)
					));

				$datos['meses'][] = $month_lg;
				$datos['usuarios'][] = $users;
				$datos['examenes'][] = abs($examenes);
				$datos['no_examenes'][] = abs($cantidad_examenes);



				$mes_comienzo = date('Y-m-d', mktime(0,0,0, $month, 1, $year));

			}

			echo json_encode($datos);
			
		}

		private function next_month($date)
		{
			$meses = array('', 'Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic');

			$mes = date('m', strtotime($date." +1 month"));
			$anio = date('Y', strtotime($date." +1 month"));
			$mes_l = date('M', strtotime($date." +1 month"));
			return array(
				'month'=>$mes,
				'year'=>$anio,
				'month_lg'=>$meses[abs($mes)]
				);
		}

	}


 ?>
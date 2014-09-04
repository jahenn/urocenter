<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Revision de Examen</span>
	<div class="divider"></div>
	</div>
</div>


<div class="row">
	<div class="col-md-12">
		<label for="">Titulo del Examen</label>
		<span><?= $exam['Exam']['titulo'] ?></span>
	</div>
	<div class="col-md-12">
		<label for="">Categoria</label>
		<span><?= $exam['Exam']['categoria'] ?></span>
	</div>
	<div class="col-md-12">
		<label for="">Nivel de Dificultad</label>
		<span>Basico</span>
	</div>
</div>
<br>

<!-- <div class="row">
	<div class="col-md-12">
		<div class="btn btn-success btn-lg">90.00 Puntos</div>
	</div>
</div>
 -->


<?php 
	$cant_preguntas = array();  
	$cant_categorias = array(); 

	foreach($exam['ExamAnswer'] as $answer) {
		@$cant_preguntas['total']++;
		@$cant_categorias[$answer['categoria']]['total']++;
		if($answer['correcta']){
			@$cant_preguntas['ok']++;
			@$cant_categorias[$answer['categoria']]['ok']++;
		}
	}

	$porcentaje = (isset($cant_preguntas['ok']))?$cant_preguntas['ok']:0;
	$porcentaje = ($porcentaje / $cant_preguntas['total']) * 100;
	// pr($cant_preguntas['ok']);
	// pr($cant_preguntas['total']);
	// pr($porcentaje); exit();
	$porcentaje_res = 100 - $porcentaje;
	$color ='';

	if($porcentaje <= 100) {$color='progress-bar-success'; }
	if($porcentaje <= 50) {$color='progress-bar-warning'; }

	//pr($porcentaje);

?>

<!-- <br> -->
<div class="progress">
  <div class="progress-bar <?= $color ?>" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?= $porcentaje ?>%;">
    <span ><?= (($porcentaje_res < $porcentaje )?number_format($porcentaje, 2). ' Puntos' :'') ?></span>
  </div>
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?= $porcentaje_res ?>%;">
    <span ><?= (($porcentaje_res > $porcentaje )?number_format($porcentaje, 2). ' Puntos':'')  ?></span>
  </div>
</div>


<table class="table">
	<thead>
		<tr>
			<th>Pregunta</th>
			<th>Tu Respuesta</th>
			<th>Respuesta Correcta</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($exam['ExamAnswer'] as $answer): ?>
			
			<?php 
				@$cant_preguntas['total']++;
				@$cant_categorias[$answer['categoria']]['total']++;
				if($answer['correcta']){
					@$cant_preguntas['ok']++;
					@$cant_categorias[$answer['categoria']]['ok']++;
				}

			 ?>
				

			<tr>
				<td>
					<?= $answer['pregunta'] ?>
				</td>
				<td>
					<?= $answer['respuesta'] ?>
				</td>
				<td>
					<?= $answer['respuesta_correcta'] ?>
				</td>
				<td>
					<?= (($answer['correcta'])?'<i class="fa fa-check"></i>':'<i class="fa fa-times"></i>') ?>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>


<!-- 
<?php pr(compact('cant_preguntas', 'cant_categorias')); ?> -->
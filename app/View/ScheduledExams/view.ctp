<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Ver Examen</span class="font-size-20">
		</div>
	</div>
<hr>
<h1><?= $scheduledExam['ScheduledExam']['titulo'] ?></h1>

<section>
	<article>
		<?= $scheduledExam['ScheduledExam']['comentarios'] ?>
	</article>
</section>
<br>
<?php foreach($scheduledExam['Role'] as $role): ?>
	<span class="badge" style="background-color:green;"><?= $role['nombre'] ?></span>
<?php endforeach ?>

<br><br>
<div class="row">
	<div class="col-md-12">
		<div class="btn btn-info">
			<i class="fa fa-clock-o"></i>
			<?= date_format( new DateTime($scheduledExam['ScheduledExam']['fecha_programada']), 'Y-m-d') ?>
		</div>
	</div>
</div>

<br>
<hr>
<div class="row">
	<div class="col-md-12">
		<!-- 
		<?php $random = $this->Html->url(array(
			'action'=>'randomize', 
			$scheduledExam['ScheduledExam']['id'], 
			$scheduledExam['ScheduledExam']['numero_preguntas'],
			$scheduledExam['ScheduledExam']['question_category_id'],
			$scheduledExam['ScheduledExam']['question_difficulty_id']
		)); ?> -->
		
		<a href="<?= $random ?>" class="btn btn-primary"><i class="fa fa-refresh"></i> Generar Examen Random</a> 

<!-- 
		<?php $url_add_question = $this->Html->url(array(
			'controller'=>'ScheduledExams',
			'action'=>'addQuestion',
			$scheduledExam['ScheduledExam']['id']
		)) ?>
		
		<a href="<?= $url_add_question ?>" class="btn btn-default"><i class="fa fa-plus"></i> Agregar Pregunta</a>
		<hr>
		<br> -->
		<br>

		<?php $i=0; ?>
		<?php if(!empty($scheduledExam['Question'])): ?>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>#</th>
						<th>Pregunta</th>
						<th>Respuesta</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
			
			<?php foreach($scheduledExam['Question'] as $question): ?>
				<!-- <?php pr($question); ?> -->
				<?php $i++; ?>
				
				<tr>
					<th><?= $i ?></th>
					<td><?= $question['question'] ?></td>
					<td>
						
						<?php 

							$answer_is_ok = '';
							foreach($question['Answer'] as $answer){
								if($answer['answer_is_ok']){$answer_is_ok=$answer['answer'];}
							}

						 ?>
						<?= ($answer_is_ok=='')?'No hay Respuesta':$answer_is_ok ?>
					</td>
					<?php $url_remove_question = $this->Html->url(array(
						'controller'=>'QuestionsScheduledExams',
						'action'=>'delete', $question['QuestionsScheduledExam']['id'], $scheduledExam['ScheduledExam']['id']
					)) ?>
					<th><a href="<?= $url_remove_question ?>"><i class="fa fa-trash"></i></a></th>
				</tr>
					
			<?php endforeach ?>
				</tbody>
			</table>

		<?php endif ?>
		
		<?= $this->Form->create(); ?>
		<table class="table table-hover">
		<?php for($i=$i; $i< $scheduledExam['ScheduledExam']['numero_preguntas']; $i++): ?>
			<tr>
				<td>
					<?= $i+1 ?>
				</td>
				<td>
					<?= $this->Form->input('Question.'.$i.'.question_id', array(
						'label'=>false,
						'div'=>false,
						'class'=>'form-control width-100 chosen'
					)) ?>
				</td>
			</tr>
		<?php endfor ?>
		</table>
		<br>

		<button class="btn btn-info" type="submit">Agregar Preguntas <i class="fa fa-save"></i></button>

		<?= $this->Form->end(); ?>

	</div>
</div>






<script type="text/javascript">
	$(document).ready(function(){
		$(".chosen").chosen({
			'width':'100%'
		});
	});
</script>



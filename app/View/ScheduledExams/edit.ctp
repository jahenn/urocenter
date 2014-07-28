


<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo __('Add Scheduled Exam'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>


<!-- Modales -->

<!-- end Modales -->

<?php echo $this->Form->create('ScheduledExam', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>


<div class="form-row">
	<div class="form-label col-md-2">
		<label for="titulo" class=" text-transform-cap ">
			titulo
		</label>
	</div>
	<div class="form-input col-md-10">		 
		<?= $this->Form->input('titulo', array(
			'label'=>false
			)) ?> 
	</div>
</div>

<div class="form-row">
	<div class="form-label col-md-2">
		<label for="fecha_programada" class=" text-transform-cap ">
			Fecha de Inicio
		</label>
	</div>
	<div class="form-input col-md-10">		 <?= $this->Form->input('fecha_programada', array(
		'label'=>false,
		'type'=>'text',
		'class'=>'date'
		)) ?> 
	</div>
</div>

<div class="form-row">
	<div class="form-label col-md-2">
		<label for="fecha_limite" class=" text-transform-cap ">
			Fecha Limite
		</label>
	</div>
	<div class="form-input col-md-10">		 <?= $this->Form->input('fecha_limite', array(
		'label'=>false,
		'type'=>'text',
		'class'=>'date'
		)) ?> 
	</div>
</div>

<!--  -->


<div class="form-row">
	<div class="form-input col-md-10">		 
		<?= $this->Form->input('estatus', array(
			'label'=>false,
			'type'=>'hidden',
			'value'=>1
			)) ?> 
		</div>
	</div><div class="form-row">
	<div class="form-label col-md-2">
		<label for="comentarios" class=" text-transform-cap ">
			comentarios
		</label>
		</div><div class="form-input col-md-10">		 
		<?= $this->Form->input('comentarios', array(
			'label'=>false
			)) ?> 
		</div>
	</div>
<br>

<h3>Usuarios / Grupos</h3>

<div class="row">
	<div class="col-md-12">
		<?= $this->Form->input('Role') ?>
	</div>
</div>

<br>


<h3>Preguntas del Examen</h3>

<br>
<div class="row">
	<div class="col-md-6">
		<?php $url_add_question = $this->Html->url(array(
			'controller'=>'ScheduledExams',
			'action'=>'addQuestion',
			$this->request->data['ScheduledExam']['id']
		)) ?>
		<a href="<?= $url_add_question ?>" id="btnAddQuestion" class="btn primary-bg medium"> 
			<i class="fa fa-plus"></i> Agregar Pregunta</a>
	</div>
</div>
<br>
<table class="table table-hover">
	<thead>
		<tr>
			<th>#ID</th>
			<th>Categoria</th>
			<th>Pregunta</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach($this->request->data['Question'] as $question): ?>
		<tr>
			<td><?= $question['id'] ?></td>
			<td><?= $question['QuestionCategory']['nombre'] ?></td>
			<td><?= $question['question'] ?></td>
			<td>
				<div class="button-group">
					<a href="#" class="btn primary-bg medium"><i class="fa fa-times"></i> Eliminar</a>
				</div>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

<br>
<br>
<br>
<button class="btn medium primary-bg submit" type="submit">Guardar</button>
<?php echo $this->Form->end(); ?>
<br>
<br>




<script type="text/javascript">
	$(document).ready(function(){
		$(".date").datepicker({
			dateFormat: 'yy-mm-dd'
		});

		$("#RoleRole").multiSelect();




	});
</script>


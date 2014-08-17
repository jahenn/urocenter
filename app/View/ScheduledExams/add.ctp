<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Programar Examen</span class="font-size-20">
	<div class="divider"></div>
	</div>
</div>




<?php echo $this->Form->create('ScheduledExam', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>


<div class="row">
	
	<div class="col-md-12">
		<?= $this->Form->input('titulo', array(
			'label'=>'Titulo del Examen',
			'class'=>'form-control width-100'
			)) ?> 	 
			
	</div>
	<div class="col-md-12">
		<?= $this->Form->input('fecha_programada', array(
				'label'=>'Fecha Programada',
				'type'=>'text',
				'class'=>'date form-control'
				)) ?>
	</div>
	<div class="col-md-12">
		<?= $this->Form->input('comentarios', array(
			'label'=>'Comentarios / Notas del Examen',
			'class'=>'form-control width-100'
			)) ?> 
	</div>


	<div class="col-md-12">
		<?= $this->Form->input('Role', array(
			'label'=>'Usuarios / Grupos de Usuarios',
			'class'=>'form-control width-100',
			'data-placeholder'=>'Selecciona al menos un usuario o grupo de usuarios',
			'required'=>true
			)) ?> 
	</div>

</div>









<?= $this->Form->input('estatus', array(
	'label'=>false,
	'type'=>'hidden',
	'value'=>1
	)) ?> 


<br>

<button class="btn btn-primary submit" type="submit">Siguiente <i class="fa fa-arrow-right"></i></button>


<div class="dialog" style="display:none;">
	
</div>

<?php echo $this->Form->end(); ?>
<br>
<br>


<script type="text/javascript">
	$(document).ready(function(){
		$(".date").datepicker({
			dateFormat: 'yy-mm-dd'
		});

		$("#RoleRole").chosen();


			// $("#ScheduledExamAddForm").submit(function(e){
			// 	e.preventDefault();

			// 	$(".dialog").dialog();
			// });
	});
</script>

<!-- ################ -->
<!--
<div class="scheduledExams form">
<?php echo $this->Form->create('ScheduledExam'); ?>
	<fieldset>
		<legend><?php echo __('Add Scheduled Exam'); ?></legend>
	<?php
		echo $this->Form->input('role_id');
		echo $this->Form->input('fecha_programada');
		echo $this->Form->input('fecha_limite');
		echo $this->Form->input('estatus');
		echo $this->Form->input('titulo');
		echo $this->Form->input('comentarios');
		echo $this->Form->input('Question');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Scheduled Exams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
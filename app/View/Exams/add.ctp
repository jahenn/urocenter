


<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo __('Add Exam'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('Exam', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>


<div class="form-row">
			<div class="form-label col-md-2">
			<label for="titulo" class=" text-transform-cap ">
			titulo
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('titulo', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="descripcion" class=" text-transform-cap ">
			descripcion
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('descripcion', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="fecha_inicio" class=" text-transform-cap ">
			fecha_inicio
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('fecha_inicio', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="fecha_programada" class=" text-transform-cap ">
			fecha_programada
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('fecha_programada', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="user_id" class=" text-transform-cap ">
			user_id
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('user_id', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="resultado" class=" text-transform-cap ">
			resultado
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('resultado', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="estatus" class=" text-transform-cap ">
			estatus
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('estatus', array(
			'label'=>false
			)) ?> 
	</div>
</div>
<br>

<button class="btn medium primary-bg submit" type="submit">Guardar</button>

<?php echo $this->Form->end(); ?>
<br>
<br>

<!-- ################ -->
<!--
<div class="exams form">
<?php echo $this->Form->create('Exam'); ?>
	<fieldset>
		<legend><?php echo __('Add Exam'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('fecha_inicio');
		echo $this->Form->input('fecha_programada');
		echo $this->Form->input('user_id');
		echo $this->Form->input('resultado');
		echo $this->Form->input('estatus');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Exams'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
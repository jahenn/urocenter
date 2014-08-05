


<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo __('Add Question Category'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('QuestionCategory', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>


<div class="form-row">
			<div class="form-label col-md-2">
			<label for="nombre" class=" text-transform-cap ">
			nombre
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('nombre', array(
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
</div>
<br>

<button class="btn medium primary-bg submit" type="submit">Guardar</button>

<?php echo $this->Form->end(); ?>
<br>
<br>

<!-- ################ -->
<!--
<div class="questionCategories form">
<?php echo $this->Form->create('QuestionCategory'); ?>
	<fieldset>
		<legend><?php echo __('Add Question Category'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Question Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
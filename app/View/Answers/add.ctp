
<style type="text/css">
	.label{
		font-weight: bold;
		font-size: 1.5em;
		margin-left: 0px;
		padding-left: 0px !important;
	}
</style>

<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo __('Agregar Respuesta'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('Answer', array(
	'inputDefaults'=>array(
		'div'=>false
		)
		)); ?>


		<div class="form-row">
			<div class="form-input col-md-10">		 
			<?= $this->Form->input('question_id', array(
				'label'=>false,
				'type'=>'hidden',
				'value'=>$question_id
				)) ?> 
			</div>
		</div><div class="form-row">
			<div class="form-input col-md-12">		 
			<?= $this->Form->input('answer', array(
				'label'=>array(
					'text'=>'Captura La Respuesta',
					'class'=>'text-transform-cap'
					),
				'type'=>'textarea',
				'class'=>'form-control'
				)) ?> 
			</div>
		</div><div class="form-row">
		<div class="col-md-2">
			<label for="" class="text-trasform-cap">
				La respuesta es correcta?
			</label>
		</div>
		<div class="form-input col-md-1">		 
			<?= $this->Form->input('answer_is_ok', array(
				'label'=>false,
				'class'=>'float-left'
				)) ?> 
			</div>
		</div><div class="form-row">
		<div class="form-input col-md-10">		 <?= $this->Form->input('value', array(
				'label'=>false,
				'type'=>'hidden',
				'value'=>1
				)) ?> 
			</div>
		</div>
		<br>

		<button class="btn large primary-bg submit" type="submit">Guardar <i class="fa fa-save"></i></button>

		<?php echo $this->Form->end(); ?>
		<br>
		<br>

		<!-- ################ -->
<!--
<div class="answers form">
<?php echo $this->Form->create('Answer'); ?>
	<fieldset>
		<legend><?php echo __('Add Answer'); ?></legend>
	<?php
		echo $this->Form->input('question_id');
		echo $this->Form->input('answer');
		echo $this->Form->input('answer_is_ok');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Answers'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
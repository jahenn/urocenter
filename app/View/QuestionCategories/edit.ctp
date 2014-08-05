<div class="row">
    <div class="col-md-12">
        <span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Editar Categoria
        </span>
    </div>
</div>
<div class="divider"></div>

<?php echo $this->Form->create('QuestionCategory', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>

<?= $this->Form->input('id', array(
'label'=>false
)) ?> 

<?= $this->Form->input('nombre', array(
'label'=>'Nombre de Categoria',
'class'=>'form-control width-12'
)) ?> 


<?= $this->Form->input('descripcion', array(
'label'=>'Descripción',
'class'=>'form-control width-12'
)) ?> 


<br>

<button class="btn btn-primary submit" type="submit"><i class="fa fa-save"></i> Guardar</button>

<?php echo $this->Form->end(); ?>
<br>
<br>

<!-- ################ -->
<!--
<div class="questionCategories form">
<?php echo $this->Form->create('QuestionCategory'); ?>
	<fieldset>
		<legend><?php echo __('Edit Question Category'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('QuestionCategory.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('QuestionCategory.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Question Categories'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
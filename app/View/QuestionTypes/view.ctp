<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('Question Type'); ?>       	       <!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<div class="row">
	<div class="col-md-12">
		<table class="table table-stripped">
			<tr>
				<tr>		<th class="col-md-2 float-none text-left "><?php echo __('Id'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($questionType['QuestionType']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Tipo'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($questionType['QuestionType']['tipo']); ?>
			&nbsp;
		</td>
</tr>			</tr>
		</table>
	</div>
</div>
<div class="related">
	<?php if (!empty($questionType['Question'])): ?>
	<table  class="table table-condensed">
		<thead>
			<tr>
				<th colspan="8">
					<?php echo __('Related Questions'); ?>				</th>
			</tr>
		</thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question'); ?></th>
		<th><?php echo __('Question Category Id'); ?></th>
		<th><?php echo __('Imagen'); ?></th>
		<th><?php echo __('Question Status Id'); ?></th>
		<th><?php echo __('Fecha Creacion'); ?></th>
		<th><?php echo __('Question Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($questionType['Question'] as $question): ?>
		<tr>
			<td><?php echo $question['id']; ?></td>
			<td><?php echo $question['question']; ?></td>
			<td><?php echo $question['question_category_id']; ?></td>
			<td><?php echo $question['imagen']; ?></td>
			<td><?php echo $question['question_status_id']; ?></td>
			<td><?php echo $question['fecha_creacion']; ?></td>
			<td><?php echo $question['question_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'questions', 'action' => 'view', $question['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'questions', 'action' => 'edit', $question['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'questions', 'action' => 'delete', $question['id']), array(), __('Are you sure you want to delete # %s?', $question['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add'), array(
				'class'=>'btn medium primary-bg'
			)); ?> </li>
		</ul>
	</div>
</div>
<br>



<!-- ############# -->

<!--
<div class="questionTypes view">
<h2><?php echo __('Question Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($questionType['QuestionType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($questionType['QuestionType']['tipo']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Question Type'), array('action' => 'edit', $questionType['QuestionType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Question Type'), array('action' => 'delete', $questionType['QuestionType']['id']), array(), __('Are you sure you want to delete # %s?', $questionType['QuestionType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Question Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>



<div class="related">
	<h3><?php echo __('Related Questions'); ?></h3>
	<?php if (!empty($questionType['Question'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question'); ?></th>
		<th><?php echo __('Question Category Id'); ?></th>
		<th><?php echo __('Imagen'); ?></th>
		<th><?php echo __('Question Status Id'); ?></th>
		<th><?php echo __('Fecha Creacion'); ?></th>
		<th><?php echo __('Question Type Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($questionType['Question'] as $question): ?>
		<tr>
			<td><?php echo $question['id']; ?></td>
			<td><?php echo $question['question']; ?></td>
			<td><?php echo $question['question_category_id']; ?></td>
			<td><?php echo $question['imagen']; ?></td>
			<td><?php echo $question['question_status_id']; ?></td>
			<td><?php echo $question['fecha_creacion']; ?></td>
			<td><?php echo $question['question_type_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'questions', 'action' => 'view', $question['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'questions', 'action' => 'edit', $question['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'questions', 'action' => 'delete', $question['id']), array(), __('Are you sure you want to delete # %s?', $question['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

-->

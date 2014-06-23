<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('Exam'); ?>       	       <!-- <small>
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
			<?php echo h($exam['Exam']['id']); ?>
			&nbsp;
		</td>
</tr>		<th class="col-md-2 float-none text-left "><?php echo __('Exam Category'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo $this->Html->link($exam['ExamCategory']['nombre'], array('controller' => 'exam_categories', 'action' => 'view', $exam['ExamCategory']['id'])); ?>
			&nbsp;
		</td>
<tr>		<th class="col-md-2 float-none text-left "><?php echo __('Exam Description'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($exam['Exam']['exam_description']); ?>
			&nbsp;
		</td>
</tr>			</tr>
		</table>
	</div>
</div>
<div class="related">
	<?php if (!empty($exam['Question'])): ?>
	<table  class="table table-condensed">
		<thead>
			<tr>
				<th colspan="3">
					<?php echo __('Related Questions'); ?>				</th>
			</tr>
		</thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($exam['Question'] as $question): ?>
		<tr>
			<td><?php echo $question['id']; ?></td>
			<td><?php echo $question['question']; ?></td>
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
<div class="exams view">
<h2><?php echo __('Exam'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exam Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exam['ExamCategory']['nombre'], array('controller' => 'exam_categories', 'action' => 'view', $exam['ExamCategory']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exam Description'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['exam_description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exam'), array('action' => 'edit', $exam['Exam']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exam'), array('action' => 'delete', $exam['Exam']['id']), array(), __('Are you sure you want to delete # %s?', $exam['Exam']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exams'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exam Categories'), array('controller' => 'exam_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam Category'), array('controller' => 'exam_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>



<div class="related">
	<h3><?php echo __('Related Questions'); ?></h3>
	<?php if (!empty($exam['Question'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Question'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($exam['Question'] as $question): ?>
		<tr>
			<td><?php echo $question['id']; ?></td>
			<td><?php echo $question['question']; ?></td>
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

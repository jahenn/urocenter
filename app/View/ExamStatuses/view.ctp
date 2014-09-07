<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('Exam Status'); ?>       	       <!-- <small>
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
			<?php echo h($examStatus['ExamStatus']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Nombre'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($examStatus['ExamStatus']['nombre']); ?>
			&nbsp;
		</td>
</tr>			</tr>
		</table>
	</div>
</div>
<div class="related">
	<?php if (!empty($examStatus['UserExam'])): ?>
	<table  class="table table-condensed">
		<thead>
			<tr>
				<th colspan="5">
					<?php echo __('Related User Exams'); ?>				</th>
			</tr>
		</thead>
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Exam Id'); ?></th>
		<th><?php echo __('Last Answer'); ?></th>
		<th><?php echo __('Exam Status Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($examStatus['UserExam'] as $userExam): ?>
		<tr>
			<td><?php echo $userExam['id']; ?></td>
			<td><?php echo $userExam['exam_id']; ?></td>
			<td><?php echo $userExam['last_answer']; ?></td>
			<td><?php echo $userExam['exam_status_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_exams', 'action' => 'view', $userExam['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_exams', 'action' => 'edit', $userExam['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_exams', 'action' => 'delete', $userExam['id']), array(), __('Are you sure you want to delete # %s?', $userExam['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Exam'), array('controller' => 'user_exams', 'action' => 'add'), array(
				'class'=>'btn medium primary-bg'
			)); ?> </li>
		</ul>
	</div>
</div>
<br>



<!-- ############# -->

<!--
<div class="examStatuses view">
<h2><?php echo __('Exam Status'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($examStatus['ExamStatus']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($examStatus['ExamStatus']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exam Status'), array('action' => 'edit', $examStatus['ExamStatus']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exam Status'), array('action' => 'delete', $examStatus['ExamStatus']['id']), array(), __('Are you sure you want to delete # %s?', $examStatus['ExamStatus']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exam Statuses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam Status'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List User Exams'), array('controller' => 'user_exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Exam'), array('controller' => 'user_exams', 'action' => 'add')); ?> </li>
	</ul>
</div>



<div class="related">
	<h3><?php echo __('Related User Exams'); ?></h3>
	<?php if (!empty($examStatus['UserExam'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Exam Id'); ?></th>
		<th><?php echo __('Last Answer'); ?></th>
		<th><?php echo __('Exam Status Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($examStatus['UserExam'] as $userExam): ?>
		<tr>
			<td><?php echo $userExam['id']; ?></td>
			<td><?php echo $userExam['exam_id']; ?></td>
			<td><?php echo $userExam['last_answer']; ?></td>
			<td><?php echo $userExam['exam_status_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'user_exams', 'action' => 'view', $userExam['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'user_exams', 'action' => 'edit', $userExam['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'user_exams', 'action' => 'delete', $userExam['id']), array(), __('Are you sure you want to delete # %s?', $userExam['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User Exam'), array('controller' => 'user_exams', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

-->

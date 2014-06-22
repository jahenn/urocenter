<div class="exams index">
	<h2><?php echo __('Exams'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('exam_category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('exam_description'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($exams as $exam): ?>
	<tr>
		<td><?php echo h($exam['Exam']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($exam['ExamCategory']['nombre'], array('controller' => 'exam_categories', 'action' => 'view', $exam['ExamCategory']['id'])); ?>
		</td>
		<td><?php echo h($exam['Exam']['exam_description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $exam['Exam']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $exam['Exam']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $exam['Exam']['id']), array(), __('Are you sure you want to delete # %s?', $exam['Exam']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Exam'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Exam Categories'), array('controller' => 'exam_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam Category'), array('controller' => 'exam_categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>

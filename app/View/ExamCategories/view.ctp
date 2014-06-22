<div class="examCategories view">
<h2><?php echo __('Exam Category'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($examCategory['ExamCategory']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($examCategory['ExamCategory']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exam Category'), array('action' => 'edit', $examCategory['ExamCategory']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exam Category'), array('action' => 'delete', $examCategory['ExamCategory']['id']), array(), __('Are you sure you want to delete # %s?', $examCategory['ExamCategory']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Exam Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam Category'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exams'), array('controller' => 'exams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exam'), array('controller' => 'exams', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Exams'); ?></h3>
	<?php if (!empty($examCategory['Exam'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Exam Category Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($examCategory['Exam'] as $exam): ?>
		<tr>
			<td><?php echo $exam['id']; ?></td>
			<td><?php echo $exam['exam_category_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'exams', 'action' => 'view', $exam['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'exams', 'action' => 'edit', $exam['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'exams', 'action' => 'delete', $exam['id']), array(), __('Are you sure you want to delete # %s?', $exam['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Exam'), array('controller' => 'exams', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>

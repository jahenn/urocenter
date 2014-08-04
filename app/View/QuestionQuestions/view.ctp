<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('Question Question'); ?>       	       <!-- <small>
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
			<?php echo h($questionQuestion['QuestionQuestion']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Question'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo $this->Html->link($questionQuestion['Question']['question'], array('controller' => 'questions', 'action' => 'view', $questionQuestion['Question']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Child Question'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo $this->Html->link($questionQuestion['ChildQuestion']['question'], array('controller' => 'questions', 'action' => 'view', $questionQuestion['ChildQuestion']['id'])); ?>
			&nbsp;
		</td>
</tr>			</tr>
		</table>
	</div>
</div>



<!-- ############# -->

<!--
<div class="questionQuestions view">
<h2><?php echo __('Question Question'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($questionQuestion['QuestionQuestion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($questionQuestion['Question']['question'], array('controller' => 'questions', 'action' => 'view', $questionQuestion['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Child Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($questionQuestion['ChildQuestion']['question'], array('controller' => 'questions', 'action' => 'view', $questionQuestion['ChildQuestion']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Question Question'), array('action' => 'edit', $questionQuestion['QuestionQuestion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Question Question'), array('action' => 'delete', $questionQuestion['QuestionQuestion']['id']), array(), __('Are you sure you want to delete # %s?', $questionQuestion['QuestionQuestion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Question Questions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question Question'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>




-->

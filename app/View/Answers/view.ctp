<h4 class="heading-1 clearfix">
    <div class="heading-content">
    	<?php echo __('Answer'); ?>       	       <!-- <small>
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
			<?php echo h($answer['Answer']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Question'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo $this->Html->link($answer['Question']['question'], array('controller' => 'questions', 'action' => 'view', $answer['Question']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Answer'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($answer['Answer']['answer']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Answer Is Ok'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($answer['Answer']['answer_is_ok']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Value'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($answer['Answer']['value']); ?>
			&nbsp;
		</td>
</tr>			</tr>
		</table>
	</div>
</div>



<!-- ############# -->

<!--
<div class="answers view">
<h2><?php echo __('Answer'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Question'); ?></dt>
		<dd>
			<?php echo $this->Html->link($answer['Question']['question'], array('controller' => 'questions', 'action' => 'view', $answer['Question']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['answer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Answer Is Ok'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['answer_is_ok']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($answer['Answer']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Answer'), array('action' => 'edit', $answer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Answer'), array('action' => 'delete', $answer['Answer']['id']), array(), __('Are you sure you want to delete # %s?', $answer['Answer']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Answers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Answer'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
	</ul>
</div>




-->

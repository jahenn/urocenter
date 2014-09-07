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
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Titulo'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($exam['Exam']['titulo']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Descripcion'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($exam['Exam']['descripcion']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Fecha Inicio'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($exam['Exam']['fecha_inicio']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Fecha Programada'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($exam['Exam']['fecha_programada']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('User'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo $this->Html->link($exam['User']['username'], array('controller' => 'users', 'action' => 'view', $exam['User']['id'])); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Resultado'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($exam['Exam']['resultado']); ?>
			&nbsp;
		</td>
</tr><tr>		<th class="col-md-2 float-none text-left "><?php echo __('Estatus'); ?></th>
		<td class=" col-md-10 float-none text-left ">
			<?php echo h($exam['Exam']['estatus']); ?>
			&nbsp;
		</td>
</tr>			</tr>
		</table>
	</div>
</div>



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
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Inicio'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['fecha_inicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Programada'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['fecha_programada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exam['User']['username'], array('controller' => 'users', 'action' => 'view', $exam['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Resultado'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['resultado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatus'); ?></dt>
		<dd>
			<?php echo h($exam['Exam']['estatus']); ?>
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
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>




-->

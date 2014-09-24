
<!-- <h4 class="heading-1 clearfix">
    <div class="heading-content">
        <?php echo __('Scheduled Exams'); ?>        <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small>
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4> -->

<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Exámenes Programados</span class="font-size-20">
	<!-- <div class="divider"></div> -->
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12">
		<table class="table table-hover">
			<!-- <thead>
				<tr>
					<th colspan="8" class="text-left pad5A">
						<div class="button-group">
							<?php echo $this->Html->link(__('New Scheduled Exam'), array('action' => 'add'), array(
								'class'=>'btn medium primary-bg'
							)); ?>							
									<?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>

						</div>
					</th>
				</tr>
			</thead> -->
		<!-- <tr> -->
					<!-- <thead>
						<tr>
							<th><?php echo $this->Paginator->sort('id'); ?></th>
							<th><?php echo $this->Paginator->sort('fecha_programada'); ?></th>
							<<th><?php echo $this->Paginator->sort('fecha_limite'); ?></th> 
							<th><?php echo $this->Paginator->sort('estatus'); ?></th>
							<th><?php echo $this->Paginator->sort('titulo'); ?></th>
							<th><?php echo $this->Paginator->sort('comentarios'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead> -->
		<!-- </tr> -->
		<?php foreach ($scheduledExams as $scheduledExam): ?>
		<tr>
			<td colspan="5">
				<h4>
					<?php echo h($scheduledExam['ScheduledExam']['titulo']); ?>
				</h4>
				<article>
					<?php echo h($scheduledExam['ScheduledExam']['comentarios']); ?>
				</article>
				<br>
				<div class="row">
					<div class="col-md-12">
						<?php foreach($scheduledExam['Role'] as $role): ?>
							<span class="badge">
								<?php echo $role['nombre']; ?>
							</span>
						<?php endforeach ?>
					</div>
					<br>
					<div class="col-md-12">
						<span><i class="fa fa-clock-o"></i> <?php echo date_format(new DateTime(h($scheduledExam['ScheduledExam']['fecha_programada'])) , 'Y-m-d'); ?></span>
					</div>
				</div>
			</td>
			<td>
				<div class="pull-right">
					<?php echo $this->Form->postLink(__('<i class="fa fa-trash"></i>'), array('action' => 'delete', $scheduledExam['ScheduledExam']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false), __('Seguro que deseas eliminar el examen?')); ?>
				</div>
			</td>
		</tr>
	<!-- <tr>
		<td><?php echo h($scheduledExam['ScheduledExam']['id']); ?>&nbsp;</td>
		<td><?php echo h($scheduledExam['ScheduledExam']['fecha_programada']); ?>&nbsp;</td>
		<td><?php echo h($scheduledExam['ScheduledExam']['fecha_limite']); ?>&nbsp;</td>
		<td><?php echo h($scheduledExam['ScheduledExam']['estatus']); ?>&nbsp;</td>
		<td><?php echo h($scheduledExam['ScheduledExam']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($scheduledExam['ScheduledExam']['comentarios']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>  View'), array('action' => 'view', $scheduledExam['ScheduledExam']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-edit"></i> Edit'), array('action' => 'edit', $scheduledExam['ScheduledExam']['id']),array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-times"></i> Delete'), array('action' => 'delete', $scheduledExam['ScheduledExam']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false), __('Are you sure you want to delete # %s?', $scheduledExam['ScheduledExam']['id'])); ?>
		</td>
	</tr> -->
<?php endforeach; ?>
		<tr>
			<td colspan="6">
				<div class="row">
					<div class="col-md-4">
						<?php
							echo $this->Paginator->counter(array(
								'format' => __('Pagina {:page} de {:pages}, {:current} de {:count} registros, de {:start}, a {:end}')
								)); 
 ?>					</div>
					<div class="col-md-8">
						<div class="paging">
						<div class="button-group float-right">
							<?php
		echo $this->Paginator->prev(__('<i class="fa fa-backward"></i>'), array('class'=>'btn medium primary-bg', 'escape'=>false), null, array('class' => 'prev disabled btn medium primary-bg', 'escape'=>false));
		echo $this->Paginator->numbers(array('separator' => '', 'class'=>'btn medium primary-bg', 'modulus'=>4));
		echo $this->Paginator->next(__('<i class="fa fa-forward"></i>'), array(
											'class'=>'btn medium primary-bg', 'escape'=>false
											), null, array('class' => 'next disabled btn medium primary-bg', 'escape'=>false));
	?>
						</div>
						</div>
					</div>
				</div>
			</td>
		</tr>
		</table>
	</div>
</div>
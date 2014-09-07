
<h4 class="heading-1 clearfix">
    <div class="heading-content">
        <?php echo __('Exam Statuses'); ?>        <!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<div class="row">
	<div class="col-md-12">
		<table class="table table-condensed">
			<thead>
				<tr>
					<th colspan="3" class="text-left pad5A">
						<div class="button-group">
							<?php echo $this->Html->link(__('New Exam Status'), array('action' => 'add'), array(
								'class'=>'btn medium primary-bg'
							)); ?>							
									<?php echo $this->Html->link(__('List User Exams'), array('controller' => 'user_exams', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('New User Exam'), array('controller' => 'user_exams', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>

						</div>
					</th>
				</tr>
			</thead>
		<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('nombre'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($examStatuses as $examStatus): ?>
	<tr>
		<td><?php echo h($examStatus['ExamStatus']['id']); ?>&nbsp;</td>
		<td><?php echo h($examStatus['ExamStatus']['nombre']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>  View'), array('action' => 'view', $examStatus['ExamStatus']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-edit"></i> Edit'), array('action' => 'edit', $examStatus['ExamStatus']['id']),array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-times"></i> Delete'), array('action' => 'delete', $examStatus['ExamStatus']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false), __('Are you sure you want to delete # %s?', $examStatus['ExamStatus']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
		<tr>
			<td colspan="3">
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
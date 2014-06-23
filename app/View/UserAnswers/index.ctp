
<h4 class="heading-1 clearfix">
    <div class="heading-content">
        <?php echo __('User Answers'); ?>        <!-- <small>
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
					<th colspan="10" class="text-left pad5A">
						<div class="button-group">
							<?php echo $this->Html->link(__('New User Answer'), array('action' => 'add'), array(
								'class'=>'btn medium primary-bg'
							)); ?>							
									<?php echo $this->Html->link(__('List User Exams'), array('controller' => 'user_exams', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('New User Exam'), array('controller' => 'user_exams', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
		<?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>

						</div>
					</th>
				</tr>
			</thead>
		<tr>
					<th><?php echo $this->Paginator->sort('id'); ?></th>
					<th><?php echo $this->Paginator->sort('user_exam_id'); ?></th>
					<th><?php echo $this->Paginator->sort('user_id'); ?></th>
					<th><?php echo $this->Paginator->sort('question_id'); ?></th>
					<th><?php echo $this->Paginator->sort('answer_id'); ?></th>
					<th><?php echo $this->Paginator->sort('pregunta'); ?></th>
					<th><?php echo $this->Paginator->sort('respuesta'); ?></th>
					<th><?php echo $this->Paginator->sort('correcta'); ?></th>
					<th><?php echo $this->Paginator->sort('valor'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($userAnswers as $userAnswer): ?>
	<tr>
		<td><?php echo h($userAnswer['UserAnswer']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($userAnswer['UserExam']['id'], array('controller' => 'user_exams', 'action' => 'view', $userAnswer['UserExam']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userAnswer['User']['username'], array('controller' => 'users', 'action' => 'view', $userAnswer['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userAnswer['Question']['question'], array('controller' => 'questions', 'action' => 'view', $userAnswer['Question']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($userAnswer['Answer']['answer'], array('controller' => 'answers', 'action' => 'view', $userAnswer['Answer']['id'])); ?>
		</td>
		<td><?php echo h($userAnswer['UserAnswer']['pregunta']); ?>&nbsp;</td>
		<td><?php echo h($userAnswer['UserAnswer']['respuesta']); ?>&nbsp;</td>
		<td><?php echo h($userAnswer['UserAnswer']['correcta']); ?>&nbsp;</td>
		<td><?php echo h($userAnswer['UserAnswer']['valor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>  View'), array('action' => 'view', $userAnswer['UserAnswer']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-edit"></i> Edit'), array('action' => 'edit', $userAnswer['UserAnswer']['id']),array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-times"></i> Delete'), array('action' => 'delete', $userAnswer['UserAnswer']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false), __('Are you sure you want to delete # %s?', $userAnswer['UserAnswer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
		<tr>
			<td colspan="10">
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
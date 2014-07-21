<h4 class="heading-1 clearfix">
    <div class="heading-content">
        <?php echo __('Preguntas'); ?>        <!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>
<div class="row">
	<?php if($pendientes > 0): ?>
		<div class="col-md-3">
			<?php $pendientes_url = $this->Html->url(array(
				'controller'=>'Questions',
				'action'=>'lists', '1'
			)); ?>
		    <a href="<?= $pendientes_url ?>" class="tile-button tile-button-alt btn bg-green pad0A" title="">
		        <div class="tile-header">
		            Pendientes de Aprobación
		        </div>
		        <div class="tile-content-wrapper">
		            <i class="glyph-icon icon-user"></i>
		            <div class="tile-content">
		                <?= $pendientes ?>
		            </div>
		        </div>
		    </a>
		</div>
	<?php endif ?>
</div>

<br>
<?php echo $this->Html->link(__('<i class="fa fa-plus"></i> Nueva Pregunta '), array('action' => 'add'), array(
	'class'=>'btn large primary-bg',
	'escape'=>false
)); ?>
<br><br>
<div class="row">
	<div class="col-md-12">
		<table class="table table-condensed">
			<!-- <thead>
				<tr>
					<th colspan="5" class="text-left pad5A">
						<div class="button-group">
							<?php echo $this->Html->link(__('New Question'), array('action' => 'add'), array(
								'class'=>'btn medium primary-bg'
							)); ?>							
									<?php echo $this->Html->link(__('List Question Categories'), array('controller' => 'question_categories', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
									<?php echo $this->Html->link(__('New Question Category'), array('controller' => 'question_categories', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>
									<?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
									<?php echo $this->Html->link(__('New Answer'), array('controller' => 'answers', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>
									<?php echo $this->Html->link(__('List User Answers'), array('controller' => 'user_answers', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
									<?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>
									<?php echo $this->Html->link(__('List Exams'), array('controller' => 'exams', 'action' => 'index'), array('class'=>'btn medium primary-bg')); ?>
									<?php echo $this->Html->link(__('New Exam'), array('controller' => 'exams', 'action' => 'add'), array('class'=>'btn medium primary-bg')); ?>

						</div>
					</th>
				</tr>
			</thead> -->
		<thead>
			<tr>
						<th><?php echo $this->Paginator->sort('id'); ?></th>
						<th><?php echo $this->Paginator->sort('question'); ?></th>
						<th><?php echo $this->Paginator->sort('question_category_id'); ?></th>
						<!-- <th><?php echo $this->Paginator->sort('imagen'); ?></th> -->
						<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<?php foreach ($questions as $question): ?>
	<tr>
		<td><?php echo h($question['Question']['id']); ?>&nbsp;</td>
		<td><?php echo h($question['Question']['question']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($question['QuestionCategory']['nombre'], array('controller' => 'question_categories', 'action' => 'view', $question['QuestionCategory']['id'])); ?>
		</td>
		<!-- <td><?php echo h($question['Question']['imagen']); ?>&nbsp;</td> -->
		<td class="actions">
			<?php echo $this->Html->link(__('<i class="fa fa-eye"></i>  View'), array('action' => 'view', $question['Question']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Html->link(__('<i class="fa fa-edit"></i> Edit'), array('action' => 'edit', $question['Question']['id']),array('class'=>'btn medium primary-bg', 'escape'=>false)); ?>
			<?php echo $this->Form->postLink(__('<i class="fa fa-times"></i> Delete'), array('action' => 'delete', $question['Question']['id']), array('class'=>'btn medium primary-bg', 'escape'=>false), __('Are you sure you want to delete # %s?', $question['Question']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
		<tr>
			<td colspan="5">
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
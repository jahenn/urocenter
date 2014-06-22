<?php $this->layout = 'agile'; ?>

<h4 class="heading-1 clearfix">
    <div class="heading-content">
        Usuarios
        <!-- <small>
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
					<th colspan="4" class="text-left pad5A">
						<?php echo $this->Html->link(__('Nuevo Usuario &nbsp; <i class="fa fa-plus"></i>'), array('action' => 'add'), array(
							'class'=>'btn medium primary-bg',
							'escape'=>false
						)); ?>
					</th>
				</tr>
				<tr>
					<th style="" class="col-md-1 float-none text-left"><?php echo $this->Paginator->sort('id'); ?></th>
					<th style="" class="col-md-4 float-none text-left"><?php echo $this->Paginator->sort('username'); ?></th>
					<th style="" class="col-md-4 float-none text-left"><?php echo $this->Paginator->sort('password'); ?></th>
					<th style="" class="col-md-3 float-none text-left"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $user): ?>
				<tr>
					<td><?php echo h($user['User']['id']); ?></td>
					<td><?php echo h($user['User']['username']); ?></td>
					<td><?php echo h($user['User']['password']); ?></td>
					<td class="text-center">
						<div class="button-group">
							<?php echo $this->Html->link(__('<i class="fa fa-eye"></i> View'), array('action' => 'view', $user['User']['id']), array(
								'class'=> 'btn medium primary-bg',
								'escape'=>false
							)); ?>
							<?php echo $this->Html->link(__('<i class="fa fa-edit"></i> Edit'), array('action' => 'edit', $user['User']['id']), array(
								'class'=> 'btn medium primary-bg',
								'escape'=>false
							)); ?>
							<?php echo $this->Form->postLink(__('<i class="fa fa-times"></i> Delete'), array('action' => 'delete', $user['User']['id']), array(
								'class'=> 'btn medium primary-bg',
								'escape'=>false
							), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?>
						</div>
					</td>
				</tr>
				<?php endforeach; ?>
				<?php for ($i= count($users); $i <= 10; $i++): ?>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>
				<?php endfor ?>
			</tbody>
			<tfoot class="ui-state-default">
				<tr>
					<td colspan="4" style="vertical-align:middle;">
						<div class="row">
							<div class="col-md-7">
								<?php
									echo $this->Paginator->counter(array(
										'format' => __('Pagina {:page} de {:pages}, {:current} de {:count} registros, de {:start}, a {:end}')
									));
								?>	
							</div>
							<div class="col-md-5">
								<div class="paging">
								<div class="button-group float-right">
									<?php
										echo $this->Paginator->prev(__('<i class="fa fa-backward"></i>'), array(
											'class'=>'btn medium primary-bg', 'escape'=>false
											), null, array('class' => 'prev disabled btn medium primary-bg', 'escape'=>false));

										echo $this->Paginator->numbers(array('separator' => '', 'class'=>'btn medium primary-bg', 'modulus'=>4));
										echo $this->Paginator->next(__('<i class="fa fa-forward	"></i>'), array(
											'class'=>'btn medium primary-bg', 'escape'=>false
											), null, array('class' => 'next disabled btn medium primary-bg', 'escape'=>false));
									?>
								</div>
								</div>
							</div>
						</div>
					</td>
				</tr>
			</tfoot>
		</table>
	</div>
</div>



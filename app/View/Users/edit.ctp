


<h4 class="heading-1 clearfix">
	<div class="heading-content">
		<?php echo __('Edit User'); ?>       	       
    	<!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<?php echo $this->Form->create('User', array(
	'inputDefaults'=>array(
		'div'=>false
		)
)); ?>


<div class="form-row"><div class="form-input col-md-10">		 <?= $this->Form->input('id', array(
			'label'=>false
			)) ?> 
	</div>
</div><div class="form-row">
			<div class="form-label col-md-2">
			<label for="username" class=" text-transform-cap ">
			username
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('username', array(
			'label'=>false
			)) ?> 
	</div>
</div><!-- <div class="form-row">
			<div class="form-label col-md-2">
			<label for="password" class=" text-transform-cap ">
			password
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('password', array(
			'label'=>false
			)) ?> 
	</div>
</div> --><div class="form-row">
			<div class="form-label col-md-2">
			<label for="email" class=" text-transform-cap ">
			email
			</label>
			</div><div class="form-input col-md-10">		 <?= $this->Form->input('email', array(
			'label'=>false
			)) ?> 
	</div>
</div>		

		<div class="form-label">
		<label for="Role" class=" text-transform-cap " >Role</label>
		</div>
		<div class="form-input">
		<?= $this->Form->input('Role', array(
			'label'=>false
			)) ?> 
</div>

<?= $this->Form->input('role_id', array(
	'type'=>'hidden'
)) ?>

<br>

<button class="btn medium primary-bg submit" type="submit">Guardar</button>

<?php echo $this->Form->end(); ?>
<br>
<br>


<script type="text/javascript">
	
	$(document).ready(function(){
		//alert("ok");
		$("#RoleRole").multiSelect();
	});

</script>

<!-- ################ -->
<!--
<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('Role');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List User Answers'), array('controller' => 'user_answers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Answer'), array('controller' => 'user_answers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Roles'), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Role'), array('controller' => 'roles', 'action' => 'add')); ?> </li>
	</ul>
</div>
-->
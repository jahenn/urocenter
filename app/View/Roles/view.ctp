
<div class="row">
	<div class="col-md-12">
		<span class="font-size-20"><?= ucwords($this->Session->read()['Auth']['User']['username']) ?> / Ver Grupo</span class="font-size-20">
	<!-- <div class="divider"></div> -->
	<br>
	<br>
	<br>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table table-stripped">
			<tr>		
				<th class="col-md-2 float-none text-left "><?php echo __('Id'); ?></th>
				<td class=" col-md-10 float-none text-left ">
					<?php echo h($role['Role']['id']); ?>
					&nbsp;
				</td>
			</tr>
			<tr>
				<th class="col-md-2 float-none text-left "><?php echo __('Nombre'); ?></th>
				<td class=" col-md-10 float-none text-left ">
					<?php echo h($role['Role']['nombre']); ?>
					&nbsp;
				</td>
			</tr>
		</table>
	</div>
</div>


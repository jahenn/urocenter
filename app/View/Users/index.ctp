<h4 class="heading-1 clearfix">
    <div class="heading-content">
        <?php echo __('Users'); ?>        <!-- <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small> -->
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4>

<h4>Grupos de Usuarios</h4>
<br>



<div class="row">
	<div class="col-md-3">
		<?php $user_url = $this->html->url(array(
			'controller'=>'users',
			'action'=>'group', 'news'
		)); ?>
	    <a href="<?= $user_url ?>" class="tile-button tile-button-alt btn bg-blue-alt pad0A" title="">
	        <div class="tile-header">
	            nuevos
	        </div>
	        <div class="tile-content-wrapper">
	            <i class="glyph-icon icon-user"></i>
	            <div class="tile-content">
	                9
	            </div>
	            <!-- <div class="float-right">Registrados / Inactivos</div> -->
	        </div>
	    </a>
	</div>
	<div class="col-md-3">
		<?php $user_url = $this->html->url(array(
			'controller'=>'users',
			'action'=>'group', 'administradores'
		)); ?>
	    <a href="<?= $user_url ?>" class="tile-button tile-button-alt btn info-bg pad0A" title="">
	        <div class="tile-header">
	            Administradores
	        </div>
	        <div class="tile-content-wrapper">
	            <i class="glyph-icon icon-user"></i>
	            <div class="tile-content">
	                9
	            </div>
	            <!-- <div class="float-right">Registrados / Inactivos</div> -->
	        </div>
	    </a>
	</div>
	<div class="col-md-3">
		<?php $user_url = $this->html->url(array(
			'controller'=>'users',
			'action'=>'group', 'grupo-b'
		)); ?>
	    <a href="<?= $user_url ?>" class="tile-button tile-button-alt btn bg-orange pad0A" title="">
	        <div class="tile-header">
	            Grupo B
	        </div>
	        <div class="tile-content-wrapper">
	            <i class="glyph-icon icon-user"></i>
	            <div class="tile-content">
	                9
	            </div>
	            <!-- <div class="float-right">Registrados / Inactivos</div> -->
	        </div>
	    </a>
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-3">
		<?php $user_url = $this->html->url(array(
			'controller'=>'users',
			'action'=>'group', 'usuarios'
		)); ?>
	    <a href="<?= $user_url ?>" class="tile-button tile-button-alt btn bg-red pad0A" title="">
	        <div class="tile-header">
	            Usuarios
	        </div>
	        <div class="tile-content-wrapper">
	            <i class="glyph-icon icon-user"></i>
	            <div class="tile-content">
	                9
	            </div>
	            <!-- <div class="float-right">Registrados / Inactivos</div> -->
	        </div>
	    </a>
	</div>
	<div class="col-md-3">
		<?php $user_url = $this->html->url(array(
			'controller'=>'users',
			'action'=>'group', 'alumnos-uvm'
		)); ?>
	    <a href="<?= $user_url ?>" class="tile-button tile-button-alt btn bg-green pad0A" title="">
	        <div class="tile-header">
	            Alumnos UVM
	        </div>
	        <div class="tile-content-wrapper">
	            <i class="glyph-icon icon-user"></i>
	            <div class="tile-content">
	                9
	            </div>
	            <!-- <div class="float-right">Registrados / Inactivos</div> -->
	        </div>
	    </a>
	</div>
	<div class="col-md-3">
		<?php $user_url = $this->html->url(array(
			'controller'=>'users',
			'action'=>'group', 'grupo-a'
		)); ?>
	    <a href="<?= $user_url ?>" class="tile-button tile-button-alt btn primary-bg pad0A" title="">
	        <div class="tile-header">
	            Grupo A
	        </div>
	        <div class="tile-content-wrapper">
	            <i class="glyph-icon icon-user"></i>
	            <div class="tile-content">
	                9
	            </div>
	            <!-- <div class="float-right">Registrados / Inactivos</div> -->
	        </div>
	    </a>
	</div>
</div>
<?php $this->layout = 'clean'; ?>

<?php //pr($public_user); ?>

<style type="text/css">
.top10 .position {
	display: inline-block;
	font-size: 3em;
	/*margin-top: 10px !important;*/

}
.top10 img {
	width: 60px;
	height: 60px;
	border-radius: 100px;
	position: relative;
		/*margin-top: -30px;
		margin-left: 30px;*/
	}
	.top10 .title {
		display: inline-block;
		font-size: 1.2em;
		vertical-align: middle;
	}
	.alert {
		margin-bottom: 0px;
	}
	.chat-container {
		padding-right: 10px;
		padding-left: 10px;
	}
	</style>

	<div class="container-flush">
		<div class="row">
			<div class="col-md-3 col-xs-12">
				<div class="profile-bar">
					<div class="content-avatar" style="color:#ccc">
						<?= $this->element('avatar_user', array(
							'custom_user'=>$public_user['User']
							)) ?>


							<h2 ><?= $public_user['User']['username'] ?></h2>
							<span class="small"> <i class="fa fa-h-square"/></i> <?= $public_user['User']['hospital'] ?></span>
						</div>
						<div class="content-body">
							<table class="table">
								<tr>
									<th>Mi Calificación</th>
									<td> <?= $public_user['UserRating']['rating'] ?> <i class="fa fa-check" style="color:green;"></i></td>
								</tr>
								<tr>
									<th>Examenes Resueltos</th>
									<td><?= $public_user['UserRating']['examenes'] ?></td>
								</tr>
								<!--
								<tr>
									<th>Preguntas Aportadas</th>
									<td>0</td>
								</tr>
								-->
							</table>
						</div>
					</div>
					<div class="row hidden-sm hidden-xs">
						<dic class="col-md-12 col-xs-12">
							<div id="relleno" style="background-color:#3D5777;"></div>
						</dic>
					</div>
				</div>
				<div class="col-md-9">
					<br>
					<div class="row">
						<div class="col-md-12">
							<span class="font-size-20">Perfil Público</span>
							<!-- <div class="divider"></div> -->
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<!-- <h3>Top 10</h3> -->
							<?php $i = 0; $encontrado=false; $soy_yo = false;?>

							<?php foreach($users_top as $user_top): ?>
							<?php 
							// pr($users_top); exit();

							if($user_top['User']['id'] == $public_user['User']['id'])
							{
								$encontrado = true;
								$soy_yo = true;
							}else{
								$soy_yo = false;
							}

							$i++;  

							if($i <= 5) {
								$alert = 'alert-success';
							}elseif ($i <= 9) {
								$alert = 'alert-warning';
							}else{
								$alert = 'alert-danger';
							}

							if($soy_yo)
								$alert = 'alert-info';
								$usado = true;

							?>
							<div class="alert <?= $alert ?> top10">
								<table class="" style="width:100%;">
									<tr>
										<td style="padding-right:10px; border-right:1px solid #3C763D; width:10px;">
											<div class="position">
												<span><?= $i ?></span>
											</div>
										</td>
										<td style="padding-left:10px; ">
											<?= $this->element('avatar_user', array(
												'custom_user'=>$user_top['User']
												)) ?>
										</td>
										<td style="padding-left:10px;">
											<div class="title">
													<?= ($soy_yo)?'Yo':$user_top['User']['nombre_completo']  ?>
											</div>
										</td>
										<td>
												<div class="rating pull-right">
													<?= $user_top['UserRating']['rating'] ?> Pts.
												</div>
										</td>
									</tr>
								</table>
							</div>
								<br>
							<?php endforeach ?>

							<?php if(!$encontrado): ?>
								<div class="alert alert-danger top10">
								<table class="" style="width:100%;">
									<tr>
										<td style="padding-right:10px; border-right:1px solid #3C763D;width:10px;">
											<div class="position">
												<span><?= $i+1 ?></span>
											</div>
										</td>
										<td style="padding-left:10px; ">
											<?= $this->element('avatar_user', array(
									'custom_user'=>$public_user['User']
								)) ?>
										</td>
										<td style="padding-left:10px;">
											<div class="title">
												Yo
											</div>
										</td>
										<td>
											<div class="rating pull-right">
												<?= $public_user['UserRating']['rating'] ?> Pts.
											</div>
										</td>
									</tr>
								</table>
							</div>
							<?php endif ?>
						</div>
						<!-- <div class="col-md-6">
							<div class="chat-container">

							    <ul class="chat-box">
							        <li class="float-left">
							            <div class="chat-author">
							                <img width="36" src="/urocenter/img/profile/259b352.png" alt="">
							            </div>
							            <div class="popover right no-shadow">
							                <div class="arrow"></div>
							                <div class="popover-content">
							                    This comment line has a bottom button panel, box shadow and title.
							                    <div class="chat-time">
							                        <i class="glyph-icon icon-time"></i>
							                        a few seconds ago
							                    </div>
							                    <div class="divider"></div>
							                    <a href="#" class="small btn bg-gray font-bold text-transform-upr" title=""><span class="button-content">Reply</span></a>
							                    <a href="#" class="small btn bg-red float-right tooltip-button" data-placement="left" title="" data-original-title="Remove comment"><i class="glyph-icon icon-remove"></i></a>
							                </div>
							            </div>
							        </li>
							        <li class="chat-reply button-pane pad10A">
							            <?= $this->Form->create('user_coments', array(
							            	'action'=>'add'
							            )) ?>
							            <div class="row">
							            	<div class="col-md-9">
							            		<?= $this->Form->input('reply', array(
							            			'class'=>'form-control',
							            			'label'=>false,
							            			'type'=>'textarea',
							            			'placeholder'=>'Deja un Comentario'
							            		)) ?>
							            	</div>
							            	<div class="col-md-3">
							            		<button type="submit" class="btn btn-primary pull-right">
							            			<i class="fa fa-reply"></i>
							            		</button>
							            	</div>
							            </div>
							            <?= $this->Form->end() ?>
							        </li>
							    </ul>

							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>



		<script type="text/javascript">
		$(document).ready(function(){
			resize();

			$(window).resize(function(){
				resize();
			})
		});



		function resize()
		{
			$("#relleno").css('height', $(window).height() - 300);
		}
		</script>

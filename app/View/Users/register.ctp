<?php $this->layout = false; ?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Urocenter Login</title>

   <!-- 
   <?= $this->Html->css("bootstrap") ?> -->

   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

   <style type="text/css">

   body, html {
    height: 100%;
    width: 100%;
  }

  body, h1, h2, h3, h4, h5, h6 {
    font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 700;
  }



  .img-responsive2 {
    display: block;
    height: auto;
    max-width: 100%;
    padding: 10px 10px 10px 50px;
  }




  .lead {
    font-size: 18px;
    font-weight: 400;
  }

  .navbar-header img{
    margin: 1
    0px;
  }

  .intro-header {
    /* padding-bottom: 50px; */
    color: #f8f8f8;
    /* background: url(../img/intro-bg.jpg) no-repeat center center; */
    background-size: cover;
    text-align: center;
  }

  .intro-message {
    position: relative;
    padding-top: 20%;
    padding-bottom: 20%;
  }

  .intro-message > h1 {
    margin: 0;
    font-size: 5em;
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6);
  }

  .intro-divider {
    width: 400px;
    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
  }

  .intro-message > h3 {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6);
  }




  @media (max-width: 767px) {
    .intro-message {
      padding-bottom: 15%;
    }

    .intro-message > h1 {
      font-size: 3em;
    }
    

    .img-responsive2 {
      display: block;
      height: auto;
      max-width: 60%;
      padding: 10px 10px 10px 50px;
    }



    ul.intro-social-buttons > li {
      display: block;
      margin-bottom: 20px;
      padding: 0;
    }

    ul.intro-social-buttons > li:last-child {
      margin-bottom: 0;
    }

    .intro-divider {
      width: 100%;
    }
  }



  .content-section-a {
    background-color: #f8f8f8;
    padding: 50px 0;
  }


  .section-heading {
    margin-bottom: 30px;
  }



  .banner {
    padding: 100px 0;
    color: #f8f8f8;
    background: url(../img/banner-bg.jpg) no-repeat center center;
    background-size: cover;
  }

  .banner h2 {
    margin: 0;
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6);
    font-size: 3em;
  }

  .banner ul {
    margin-bottom: 0;
  }

  .banner-social-buttons {
    float: right;
    margin-top: 0;
  }

  @media (max-width: 490px) {

    .img-responsive2 {
      display: block;
      height: auto;
      max-width: 50%;
      padding: 10px 10px 10px 50px;
    }

  }

  @media (min-width: 1199px) {
    ul.banner-social-buttons {
      float: left;
      margin-top: 15px;
    }   

    .img-responsive2 {
      display: block;
      height: auto;
      max-width: 100%;
      padding: 10px 10px 10px 50px;
    }



  }

  @media (max-width: 767px) {
    .banner h2 {
      margin: 0;
      text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.6);
      font-size: 3em;
    }

    .img-responsive2 {
      display: block;
      height: auto;
      max-width: 100%;
      padding: 10px 10px 10px 50px;
    }




    ul.banner-social-buttons > li {
      display: block;
      margin-bottom: 20px;
      padding: 0;
    }

    ul.banner-social-buttons > li:last-child {
      margin-bottom: 0;
    }   
  }

  footer {
    background-color: #f8f8f8;
    padding: 50px 0;
  }

  p.copyright {
    margin: 15px 0 0;
  }




  #contact {
    background-image:url("<?= $this->Html->url(array('controller'=>'img', 'action'=>'contact.jpg')) ?>");
    height: 80%;
  }

  #login input[type="text"], #login input[type="password"], #signup input[type="text"], #signup input[type="password"] {
    width: 100%;
    height: 28px;
  }


  .navbar-default {
    background-color: #37485d !important;
  }

  </style>



</head>

<body>

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <!-- <img src="img/logo1.png" class="img-responsive2" width="50%" alt="" /> -->

      <?php echo $this->Html->image('logo.png', array(
      	'height'=>'50px;'
      )) ?>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


    </div><!-- /.navbar-collapse -->
  </nav>


  <div class="content-section-a" id="contact">

    <div class="container">

      <div class="row">
        <div class="col-lg-5 col-sm-6">
          <h2 class="section-heading">Inicia sesión</h2>

          <?php echo $this->Session->flash(); ?>

          <?= $this->Form->create('User', array('class'=>'well', 'action'=>'add')) ?>
                              <!-- <form name="sentMessage" class="well" id="contactForm"  novalidate> -->
                               
                               <div class="row">
                               	<div class="col-md-12">
                               		<?= $this->Form->input('username', array(
                               					'label'=>false,
                               					'class'=>'form-control',
                               					'placeholder'=>'Nombre de Usuario',
                               					'autocomplete'=>'off',
                               					'required'=>true

                               					)) ?> 
                               		<?= $this->Form->input('password', array(
                               					'label'=>false,
                               					'class'=>'form-control',
                               					'placeholder'=>'Contraseña',
                               					'autocomplete'=>'off',
                               					'required'=>true
                               					)) ?> 

                               		<?= $this->Form->input('email', array(
                               					'label'=>false,
                               					'class'=>'form-control',
                               					'placeholder'=>'Correo Electronico',
                               					'type'=>'email',
                               					'autocomplete'=>'off',
                               					'required'=>true
                               					)) ?> 
                               	</div>

                               </div>

                               <div class="row">
                               	<div class="col-md-6">
                               		<?= $this->Form->input('nombre', array(
                               					'label'=>false,
                               					'class'=>'form-control',
                               					'placeholder'=>'Nombre',
                               					'autocomplete'=>'off',
                               					'required'=>true
                               					)) ?>
                               	</div>
                               	<div class="col-md-6">
                               		<?= $this->Form->input('apellido', array(
                               					'label'=>false,
                               					'class'=>'form-control',
                               					'placeholder'=>'Apellido',
                               					'autocomplete'=>'off',
                               					'required'=>true
                               					)) ?> 
                               	</div>
                               	<div class="col-md-6">
                               		<?= $this->Form->input('nacionalidad', array(
                               					'label'=>false,
                               					'class'=>'form-control',
                               					'placeholder'=>'Nacionalidad',
                               					'autocomplete'=>'off',
                               					'required'=>true
                               					)) ?> 
                               	</div>
                               	<div class="col-md-6">
                               		<?= $this->Form->input('sexo', array(
                               					'label'=>false,
                               					'class'=>'form-control',
                               					'placeholder'=>'Sexo',
                               					'options'=>array('H'=>'Hombre', 'M'=>'Mujer'),
                               					'autocomplete'=>'off',
                               					'required'=>true
                               					)) ?> 
                               	</div>
                               	<div class="col-md-12">
                               		<?= $this->Form->input('hospital', array(
                               					'label'=>false,
                               					'class'=>'form-control',
                               					'placeholder'=>'Hospital',
                               					'autocomplete'=>'off',
                               					'required'=>true
                               					)) ?> 
                               	</div>
                               </div>

                                          
                                               
                             <div id="success"> <?= $this->Session->flash() ?></div> <!-- For success/fail messages -->
                            <!-- <button type="submit" class="btn btn-primary pull-right">Iniciar sesión</button><br /><br/>
                             <button type="submit" class="btn btn-primary pull-right">Registro</button><br /><br/> -->
                             <br>
                             <div class="btn-group">
								
                             </div>
                             <button class="btn btn-block btn-primary" type="submit">Registrarse <i class="fa fa-check"></i></button>
                          <!-- </form> -->
          <?= $this->Form->end() ?>




        </div>
        <div class="col-lg-5 col-lg-offset-2 col-sm-6">
          <!-- <img class="img-responsive" src="img/map.gif" alt="">  -->
        </div>
      </div>

    </div>
    <!-- /.container -->

  </div>
  <!-- /.content-section-a -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="list-inline">


            <li><a href="#about">¿Qué es urocenter?</a>
            </li>


            <li><a href="#contact">Contacto</a>
            </li>
          </ul>
          <p class="copyright text-muted small">Version 0.84 alpha. Urocenter 2014 - 2015</p>
        </div>
      </div>
    </div>
  </footer>

</body>

</html>

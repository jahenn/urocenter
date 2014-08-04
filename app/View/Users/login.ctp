<?php $this->layout =''; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicia Sesion</title>
     <?= $this->Html->css("bootstrap") ?>
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

     <style type="text/css">
        body{
            background-color: #E4E8EE;
            margin-top: 10%;
        }
        .contenido{
            padding-left: 50px !important;
            padding-right: 50px !important;
            text-align: center;
        }
        .no-padding{
            padding-left: none !important;
            padding-right: none !important;
        }
     </style>
</head>
<body>
    <?= $this->Session->flash() ?>

    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4 contenido">
            <h2>Bienvenido</h2>
            

            <?= $this->Form->create('User') ?>
            <?= $this->Form->input('username', array(
                'class'=>'form-control',
                'placeholder'=>'Nombre de Usuario',
                'label'=>false
            )); ?>
            <br>
            <?= $this->Form->input('password', array(
                'class'=>'form-control',
                'placeholder'=>'Contraseña',
                'label'=>false
            )); ?>
            <br>
            <div class="col-md-12 no-padding">
                <div class="btn-group pull-right">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-user"></i> Iniciar Sesion</button>
                    <?php $url_register = $this->Html->url(array(
                        'controller'=>'users',
                        'action'=>'register'
                    )); ?>

                    <a href="<?= $url_register ?>" class="btn btn-primary"><i class="fa fa-user"></i> Registrate</a>
                </div>
            </div>
            <?= $this->Form->end() ?>

        </div>
        <div class="col-md-4"></div>
    </div>
</body>
</html>
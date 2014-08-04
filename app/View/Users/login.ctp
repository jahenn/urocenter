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
        }
        .master{
            position: absolute;
            display:table;
            height:100%;
            width:100%;
        }
        .middle{
            display: table-cell;
            vertical-align: middle;
            width: 300px;
            text-align: center;
        }
     </style>
</head>
<body>
    <?= $this->Session->flash() ?>
    <div class="master">
        <div class="middle">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <h2>Bienvenido <small> <i class="fa fa-user"></i> Inicia Sesion</small></h2>
                    

                    <?= $this->Form->create('User') ?>
                    <?= $this->Form->input('username', array(
                        'class'=>'form-control',
                        'placeholder'=>'Nombre de Usuario',
                        'label'=>false
                    )); ?>
                    <?= $this->Form->input('password', array(
                        'class'=>'form-control',
                        'placeholder'=>'Contraseña',
                        'label'=>false
                    )); ?>
                    <br>
                    <div class="btn-group pull-right">
                        <button class="btn btn-primary" type="submit">Iniciar Sesion</button>
                    </div>
                    <?= $this->Form->end() ?>

                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</body>
</html>
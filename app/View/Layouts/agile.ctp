<!-- AUI Framework -->
<!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>AgileUI</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Favicons -->

        <!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png"> -->
        <!-- <link rel="shortcut icon" href="assets/images/icons/favicon.png"> -->

        <!--[if lt IE 9]>
          <script src="assets/js/minified/core/html5shiv.min.js"></script>
          <script src="assets/js/minified/core/respond.min.js"></script>
        <![endif]-->

        <!-- AgileUI CSS Core -->

        <!-- <link rel="stylesheet" type="text/css" href="assets/css/minified/aui-production.min.css"> -->
      
        <?= $this->Html->css('calendar.min') ?>
       

        
        <?= $this->Html->css('app-production') ?>
        <?= $this->Html->css('themes/agileui/color-schemes/layouts/default') ?>
        <?= $this->Html->css('themes/agileui/color-schemes/elements/default') ?>

        <?= $this->Html->css('themes/minified/agileui/responsive.min') ?>
        <?= $this->Html->css('themes/minified/agileui/animations.min') ?>



        


        <?= $this->Html->css('chosen') ?>
        <?= $this->Html->css('multi-select') ?>
        <?= $this->Html->css('custom') ?> 
<!-- 
        <?= $this->Html->css("font-awesome.min") ?> -->

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        
        <?= $this->Html->css("bootstrap") ?>
        
        
        
        
        


        <?= $this->Html->script('jquery') ?>
        <?= $this->Html->script('aui-production') ?>

        <?= $this->Html->script('chosen.jquery') ?>
        <?= $this->Html->script('chosen.proto') ?>
        <?= $this->Html->script('jquery.multi-select') ?>

        <?= $this->Html->script('morris/morris') ?> 
        <?= $this->Html->script('qtip') ?> 
        <?= $this->Html->script('jquery.easyWizard') ?> 

        
        <!-- Theme UI -->

        <!-- <link id="layout-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/color-schemes/layouts/default.min.css"> -->

        <!-- <link id="elements-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/color-schemes/elements/default.min.css"> -->

        <!-- AgileUI Responsive -->

        <!-- <link rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/responsive.min.css"> -->

        <!-- AgileUI Animations -->

        <!-- <link rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/animations.min.css"> -->

        <!-- AgileUI JS -->

        <!-- <script type="text/javascript" src="assets/js/minified/aui-production.min.js"></script> -->

        <!-- // <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script>
         

        <script src="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/prettify/r224/prettify.min.css">
        <?= $this->Html->css('morris/morris') ?> 




    </head>
    <body class="fixed-sidebar fixed-header">
        

        <div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">
            <img src="assets/images/loader-dark.gif" alt="">
        </div>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="page-wrapper" class="demo-example">

            <div id="page-sidebar">
                <div id="header-logo">
                    <!-- AgileUI <i class="opacity-80">v2.0</i> -->
                    <?= $this->Html->Image('logo.png', array(
                        'width'=>185
                    )) ?>
                    <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" title="Navigation Menu" id="responsive-open-menu">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                </div>
                <div id="sidebar-search">
                    <input type="text" placeholder="Autocomplete search..." class="autocomplete-input tooltip-button" data-placement="right" title="Type &apos;j&apos; to see the available tags..." id="" name="">
                    <i class="glyph-icon icon-search"></i>
                </div>
                <div id="sidebar-menu" class="scrollable-content">

                    <ul>
                        <?php 
                            App::import('Model', 'User');
                            $this->User = new User();

                            $user = $this->Session->read('Auth.User');


                         ?>
                        <?php foreach($menus_bar as $menu):?>

                       

                    <li>
                        <?php foreach($menu['Role'] as $role): ?> 
                            <?php if($this->User->userHasInRole($user['id'], $role['id'])): ?>
                                        <?php if(count($menu['ChildMenu']) > 0): ?>
                                        <a href="javascript:" > 
                                            <i class="<?= $menu['Menu']['class']  ?>"></i>
                                            <?= $menu['Menu']['nombre'] ?> 
                                        </a>
                                        <ul>
                                            <?php foreach($menu['ChildMenu'] as $sub_menu): ?>
                                                <?php foreach($sub_menu['Role'] as $sRole): ?>
                                                    <?php if($this->User->userHasInRole($user['id'], $sRole['id'])): ?>
                                                        <li>
                                                            <?php $url = $this->Html->url(array(
                                                                'controller' => $sub_menu['controller'],
                                                                'action' => $sub_menu['action']
                                                                )); ?>
                                                                <a href="<?= $url ?>">
                                                                    <i class="glyph-icon icon-chevron-right"></i>
                                                                    <?= $sub_menu['nombre'] ?>
                                                                </a>

                                                            </li>
                                                    <?php endif ?>
                                                <?php endforeach ?>
                                            <?php endforeach ?>
                                        </ul>
                                    <?php else: ?>
                                    <?php $url = $this->Html->url(array(
                                        'controller' => $menu['Menu']['controller'],
                                        'action' => $menu['Menu']['action']
                                        )); ?>
                                        <a href="<?= $url ?>" > 
                                            <i class="<?= $menu['Menu']['class'] ?>"></i>
                                            <?= $menu['Menu']['nombre'] ?> 
                                        </a>
                                    <?php endif ?>
                                    <?php break; ?>
                            <?php endif ?> 
                        <?php endforeach ?>     
                    </li>

                <?php endforeach ?>
                    </ul>
                    

                    


                </div>

            </div><!-- #page-sidebar -->
            
            <div id="page-main">

                <div id="page-main-wrapper">

                    <div id="page-header" class="clearfix" style="min-height:50px;">
                        <div id="page-header-wrapper" class="clearfix">


                            <?php $user_data = $this->Session->read()['Auth']['User']; ?>


                            <div class="top-icon-bar dropdown">
                                <a data-toggle="dropdown" class="user-ico clearfix" title="" href="javascript:;">
                                    <?= $this->element('avatar') ?>
                                    <span><?= $user_data['nombre_completo'] ?></span>
                                    <i class="glyph-icon icon-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu float-right">
                                    <li>
                                        <span data-original-title="You can add badges even to dropdown menus!" title="" class="badge badge-absolute float-left radius-all-100 mrg5R bg-green tooltip-button">7</span>
                                        <?php $url_profile = $this->Html->url(array(
                                            'controller'=>'users',
                                            'action'=>'profile'
                                        )); ?>
                                        <a title="" href="<?= $url_profile ?>">
                                            <i class="glyph-icon icon-user mrg5R"></i>
                                            Perfil de Usuario
                                        </a>
                                    </li>
                                    <li>
                                        <?php $signout_url = $this->Html->url(array(
                                            'controller'=>'users',
                                            'action'=>'logout'
                                        )); ?>
                                       <a href="<?= $signout_url ?>"><i class="fa fa-sign-out"></i> Cerrar Sesión</a> 
                                    </li>
                                </ul>
                            </div>

                            <?php if(!$is_admin): ?>
                            <div class="btn-group float-right">
                                <?php $new_question_url = $this->Html->url(array(
                                    'controller'=>'questions',
                                    'action'=>'add'
                                )); ?>
                                <a href="#" class="btn btn-info" >
                                    Examen Aleatorio 
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                                <a href="<?= $new_question_url ?>" class="btn btn-success">
                                    Aportar Pregunta
                                    <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                            <?php endif ?>


                        </div>
                    </div><!-- #page-header -->

                    <div id="page-breadcrumb-wrapper" style="height:0px;padding:0px; margin:0px;min-height:50px;">
                        <!-- <div id="page-breadcrumb">
                            <a href="javascript:;" title="Dashboard">
                                <i class="glyph-icon icon-dashboard"></i>
                                Dashboard
                            </a>
                            <a href="javascript:;" title="Elements">
                                <i class="glyph-icon icon-laptop"></i>
                                Elements
                            </a>
                            <span class="current">
                                Example breadcrumb
                            </span>
                        </div> -->

                    </div><!-- #page-breadcrumb-wrapper -->
                    <div id="page-content">
                    
<!-- <h4 class="heading-1 clearfix">
    <div class="heading-content">
        Files uploader
        <small>
            File Upload widget with multiple file selection, drag&drop support, progress bars, validation and preview images, audio and video for jQuery.
        </small>
    </div>
    <div class="clear"></div>
    <div class="divider"></div>
</h4> -->

<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>




                	</div><!-- #page-content -->
	            </div><!-- #page-main -->
            </div><!-- #page-main-wrapper -->
        </div><!-- #page-wrapper -->

    </body>
</html>

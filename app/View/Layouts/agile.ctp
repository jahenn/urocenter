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

        <?= $this->Html->css('minified/aui-production.min') ?>
        <?= $this->Html->css('themes/minified/agileui/color-schemes/layouts/default.min') ?>
        <?= $this->Html->css('themes/minified/agileui/color-schemes/elements/default.min') ?>
        <?= $this->Html->css('themes/minified/agileui/responsive.min') ?>
        <?= $this->Html->css('themes/minified/agileui/animations.min') ?>
        <?= $this->Html->css("font-awesome.min") ?>


        <?= $this->Html->script('minified/aui-production.min') ?>
        
        <!-- Theme UI -->

        <!-- <link id="layout-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/color-schemes/layouts/default.min.css"> -->

        <!-- <link id="elements-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/color-schemes/elements/default.min.css"> -->

        <!-- AgileUI Responsive -->

        <!-- <link rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/responsive.min.css"> -->

        <!-- AgileUI Animations -->

        <!-- <link rel="stylesheet" type="text/css" href="assets/themes/minified/agileui/animations.min.css"> -->

        <!-- AgileUI JS -->

        <!-- <script type="text/javascript" src="assets/js/minified/aui-production.min.js"></script> -->

        <style type="text/css">

        </style>


        <script type="text/javascript">
            $(document).ready(function(){
                //$(".input").addClass("form-input");
            });
        </script>
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
                    AgileUI <i class="opacity-80">v2.0</i>

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
                        <?php foreach($menus as $menu): ?>
                        <li>
                            <?php if(count($menu['ChildMenu']) > 0): ?>
                            <a href="javascript:" > 
                                <i class="fa fa-square"></i>
                                <?= $menu['Menu']['nombre'] ?> 
                            </a>
                            <ul>
                                <?php foreach($menu['ChildMenu'] as $sub_menu): ?>
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
                    </li>

                <?php endforeach ?>
                    </ul>
                    

                    


                </div>

            </div><!-- #page-sidebar -->
            
            <div id="page-main">

                <div id="page-main-wrapper">

                    <div id="page-header" class="clearfix" style="min-height:50px;">
                        <div id="page-header-wrapper" class="clearfix">


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


<?php echo $this->fetch('content'); ?>




                	</div><!-- #page-content -->
	            </div><!-- #page-main -->
            </div><!-- #page-main-wrapper -->
        </div><!-- #page-wrapper -->

    </body>
</html>

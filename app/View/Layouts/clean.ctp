<!-- AUI Framework -->
<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Urocenter</title>
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
       
        
        <?= $this->Html->css('app-production') ?>
        <?= $this->Html->css('themes/agileui/color-schemes/layouts/default') ?>
        <?= $this->Html->css('themes/agileui/color-schemes/elements/default') ?>

        <?= $this->Html->css('themes/minified/agileui/responsive.min') ?>
        <?= $this->Html->css('themes/minified/agileui/animations.min') ?>



        


        <?= $this->Html->css('chosen') ?>
        <?= $this->Html->css('multi-select') ?>
        <?= $this->Html->css('custom') ?> 
        <?= $this->Html->css('font-awesome.min') ?> 


       

        
        <?= $this->Html->css("bootstrap") ?>
        <?= $this->Html->css("responsive-calendar") ?>
        <?= $this->Html->css("jquery.jgrowl") ?>

        
        
        
        


        <?= $this->Html->script('jquery') ?>
        <?= $this->Html->script('bootstrap') ?> 
        <?= $this->Html->script('aui-production') ?>

        <?= $this->Html->script('chosen.jquery') ?>
        <?= $this->Html->script('jquery.jgrowl') ?>
        <?= $this->Html->script('chosen.proto') ?>
        <?= $this->Html->script('jquery.multi-select') ?>

        <?= $this->Html->script('morris/morris') ?> 
        <?= $this->Html->script('qtip') ?> 
        <?= $this->Html->script('jquery.easyWizard') ?> 
        <?= $this->Html->script('responsive-calendar') ?> 



        <?= $this->Html->script('raphael-min') ?> 
        <?= $this->Html->script('prettify.min') ?> 
        <?= $this->Html->script('dropzone') ?> 
        <?= $this->Html->script('highchart/highcharts.js') ?> 
        
        



        
        
        <?= $this->Html->css('morris/morris') ?> 


        <script type="text/javascript">
        // $(window).resize(function(){
        //     $(".autocomplete-input").val($(window).width());
        //     $(".search-input").val($(window).width());
        // });




        </script>

    </head>
    <body class="fixed-sidebar fixed-header">
        
        
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="page-wrapper" class="demo-example">

            <div id="page-sidebar">
                <div id="header-logo">
                    <?= $this->Html->Image('logo.png') ?> 
                    <a href="javascript:;" class="tooltip-button" data-placement="bottom" title="Close sidebar" id="close-sidebar">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button hidden" data-placement="bottom" title="Open sidebar" id="rm-close-sidebar">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                    <a href="javascript:;" class="tooltip-button" title="Navigation Menu" id="responsive-open-menu">
                        <i class="glyph-icon icon-align-justify"></i>
                    </a>
                </div>




                <div id="sidebar-menu" class="scrollable-content" >
                    
                    <div class="profile-bar">
                        <div class="content-avatar">
                            <?= $this->element('avatar_user', array(
                                'custom_user'=>$public_user['User']
                            )) ?>
                        </div>
                        <div class="content-body">
                            <table class="table">
                                <tr>
                                    <th>Mi Calificación</th>
                                    <td>80 Pts <i class="fa fa-check" style="color:green;"></i></td>
                                </tr>
                                <tr>
                                    <th>Examenes Resueltos</th>
                                    <td>26</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                                <tr>
                                    <th>ok</th>
                                    <td>sas</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

            </div><!-- #page-sidebar -->
           
            <div id="page-main">

                <div id="page-main-wrapper">

                    <div id="page-header" class="clearfix " style="min-height:50px;">
                        <div id="page-header-wrapper" class="clearfix">


                        </div>
                    </div><!-- #page-header -->

                    <div id="page-breadcrumb-wrapper" class='hidden-xs' style="height:0px;padding:0px; margin:0px;min-height:50px;">
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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="<?php echo $this->Html->url('/assets/ico/favicon.png'); ?>">
        <?php
        echo $this->Html->css(array(
            'bootstrap',
            'style',
            '/assets/css/custom',
            'adjust-admin',
            'jquery-ui'
        ));
        ?>
        <?php echo $this->fetch('css'); ?>
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
    
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?php echo $this->Html->url('img/apple-touch-icon-144-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="114x114"
              href="<?php echo $this->Html->url('img/img/apple-touch-icon-114-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed" sizes="72x72"
              href="<?php echo $this->Html->url('img/apple-touch-icon-72-precomposed.png'); ?>">
        <link rel="apple-touch-icon-precomposed"
              href="<?php echo $this->Html->url('img/apple-touch-icon-57-precomposed.png'); ?>">
        <link rel="shortcut icon" href="<?php echo $this->Html->url('img/icon-environment.png'); ?>">
        <?php
        echo $this->Html->script(array(
            'html5shiv',
            'jquery.min',
            'bootstrap.min',
            'scripts',
            'jquery-ui',
            'jquery.ui.datepicker-vi.min',
            'gcalendar-holidays',
            '/assets/tinymce/tinymce.min',
            'localstorage'
        ));
        ?>
        <?php echo $this->fetch('script'); ?>
    </head>

    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="content" style="width: 925px; margin: 0 auto;">
                        <?php echo $this->fetch('breadcrumb'); ?>
                        <?php echo $this->Session->flash(); ?>
                        <?php echo $this->fetch('content'); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

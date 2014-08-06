<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Tisemiz - <?php echo $this->fetch('title');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tisemiz ứng dụng quản lý môi trường tại các khu công nghiệp, góp phần bảo vệ môi trường sống tại Việt nam">
    <meta name="author" content="huynhsonca@gmail.com">
    <?php echo $this->fetch('meta');?>
	<link rel="shortcut icon" href="<?php echo $this->Html->url('/assets/ico/favicon.png');?>">
    <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
    <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
    <!--script src="js/less-1.3.3.min.js"></script-->
    <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

    <!--<link href="css/bootstrap-blue.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">-->
    <?php echo $this->Html->css(array(
        'bootstrap-slate',
        'style',
        '/assets/css/custom',
        '/assets/css/font-awesome.min',
        'adjust'
    ));?>
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
    <!--<script src="js/html5shiv.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>-->
    <?php echo $this->Html->script(array(
        'html5shiv',
        'jquery.min',
        'bootstrap.min',
        'scripts'
    ));?>
    <?php echo $this->fetch('script');?>
</head>

<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
           <header>
               <img src="/img/header1.jpg" style="width: 100%;">
           </header>
            <nav class="navbar navbar-default" role="navigation">
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input id="current_date" type="text" class="form-control" placeholder="" value="<?php echo date('d/m/y H:i\':s\'\'');?>">
                    </div>
                </form>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="/	"><i class="fa fa-home"></i> Trang chủ</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="#">Tin tức</a>
                        </li>
                        <li>
                            <a href="#">Bản đồ</a>
                        </li>
                        <li>
                            <a href="#">Quản lý</a>
                        </li>
                    </ul>
                    <!--<form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Từ khóa tìm kiếm">
                        </div>
                        <button type="submit" class="btn btn-default">Tìm</button>
                    </form>-->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<?php
								if($user=$this->Session->read('Auth.User')){
									echo h($user['username']);
								} else{
									echo __('User');
								}
								?><strong
                                    class="caret"></strong></a>
                            <ul class="dropdown-menu">
								<?php if(!$this->Session->read('Auth.User')):?>
                                <li>
                                    <?php echo $this->Html->link(__('Login'),'/users/login');?>
                                </li>
								<li class="divider">
                                <li>
                                    <?php echo $this->Html->link(__('Register'),'/users/register');?>
                                </li>
								<li class="divider">
								<?php endif;?>
                                <li>
                                    <?php echo $this->Html->link(__('Logout'),'/users/logout');?>
                                </li>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </nav>
            <nav>
                <div class="col-md-12-column">
                    <img src="/img/subheader.jpg" style="width: 100%;">
                </div>
            </nav>
            <!--<ul class="breadcrumb">
                <li>
                    <a href="#">Trang chủ</a> <span class="divider">/</span>
                </li>
                <li>
                    <a href="#">Doanh nghiệp</a> <span class="divider">/</span>
                </li>
                <li class="active">
                    Nhập liệu
                </li>
            </ul>-->
            <div class="content">
                <div class="bread"><span>Phần mềm quản lý môi trường tại khu công nghiệp Tây Bắc Củ Chi (ĐT: 08.32345678)</span></div>
                <?php echo $this->fetch('breadcrumb');?>
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
    </div>
    <!--footer-->
    <div id="footer" class="navbar-footer">
        <div class="container">
            <div class="navbar-header">
                <a href="javascript:void();" class="navbar-brand">&copy;TiseMiz - 2014 - Alright reserved</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
    </div>
    <!--end footer-->
</div>
</body>
</html>

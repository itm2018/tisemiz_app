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
    <?php echo $this->Minify->css(array(
        'bootstrap-blue',
        'style',
        '/assets/css/custom',
        '/assets/css/font-awesome.min'
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
    <?php echo $this->Minify->script(array(
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
            <div class="page-header">
				<div align="center" style="background:url(/img/index_02.gif); height:108px">
					<div style="width:804px; margin:auto; height:108px; background:url(/img/index_04.jpg)"></div>
				</div>
            </div>
            <nav class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a class="navbar-brand" href="#"><i class="fa fa-home"></i> Trang chủ</a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="">
                            <a href="#">Doanh nghiệp</a>
                        </li>
                        <li>
                            <a href="#">Hoạt động môi trường</a>
                        </li>
                        <li>
                            <a href="#">Tin tức</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Báo cáo<strong
                                    class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">1.Báo cáo tuần về hoạt động môi trường KCN</a>
                                </li>
                                <li>
                                    <a href="#">2.Báo cáo tháng về hoạt động môi trường KCN</a>
                                </li>
                                <li>
                                    <a href="#">3.Báo cáo 6 tháng về hoạt động môi trường KCN</a>
                                </li>
                                <li>
                                    <a href="#">4.Báo cáo môi trường KCN</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">5.Báo cáo môi trường tổng hợp hàng năm của doanh nghiệp</a>
                                </li>
                                <li>
                                    <a href="#">6.Báo cáo môi trường 6 tháng của doanh nghiệp</a>
                                </li>
                                <li>
                                    <a href="#">7.Báo cáo quan trắc môi trường của doanh nghiệp</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">8.Báo cáo phí nước thải</a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">Thiết lập thông số</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Danh mục<strong
                                    class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Tài liệu</a>
                                </li>
                                <li>
                                    <a href="#">Thông tư hướng dẫn</a>
                                </li>
                                <li>
                                    <a href="#">Điều khoản</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Từ khóa tìm kiếm">
                        </div>
                        <button type="submit" class="btn btn-default">Tìm</button>
                    </form>
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
            <?php echo $this->fetch('breadcrumb');?>
            <?php echo $this->Session->flash(); ?>
            <?php echo $this->fetch('content'); ?>
        </div>
    </div>
</div>
<div class="marginT100" style="margin-top: 100px;"></div>
<!--footer-->
<div id="footer" class="navbar navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-header">
            <a href="../" class="navbar-brand">TiseMiz</a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav">
                <li>
                    <a href="/help/">Trợ giúp</a>
                </li>
                <li>
                    <a href="/blog/">Blog</a>
                </li>
                <li>
                    <a href="/faq/">FAQ</a>
                </li>
                <li>
                    <a href="/contact/">Liên hệ</a>
                </li>
                <li>
                    <a href="/map/">Bản đồ</a>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://www.facebook.com/tisemiz" target="_blank">Follow Us!</a></li>
                <li><a href="https://www.youtube.com/?ref=bsw" target="_blank">Watch Us!</a></li>
                <li><a href="https://www.twitter.com/?ref=bsw" target="_blank">Tweet Us!</a></li>
				<li id="hidefooter"><a href="javascript:void();"><?php echo __('Hide me');?></a></li>
            </ul>

        </div>
    </div>
</div>
<!--end footer-->
<script type="text/javascript">
	$(function(){
		$('#hidefooter').click(function(){
			$('#footer').fadeOut("slow");
		});
	});
</script>
</body>
</html>

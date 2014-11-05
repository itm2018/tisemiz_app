<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Tisemiz - <?php echo $this->fetch('title'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Tisemiz ứng dụng quản lý môi trường tại các khu công nghiệp, góp phần bảo vệ môi trường sống tại Việt nam">
        <meta name="author" content="huynhsonca@gmail.com">
        <?php echo $this->fetch('meta'); ?>
        <link rel="shortcut icon" href="<?php echo $this->Html->url('/assets/ico/favicon.png'); ?>">
        <!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
        <!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
        <!--script src="js/less-1.3.3.min.js"></script-->
        <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

        <!--<link href="css/bootstrap-blue.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">-->
        <?php
        echo $this->Html->css(array(
            'bootstrap-slate',
            'style',
            '/assets/css/custom',
            '/assets/css/font-awesome.min',
            'adjust'
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
            'bxSlider'
        ));
        ?>
        <?php echo $this->fetch('script'); ?>
        <style>
            #timercount{
                /*height: 1pt;*/
                background: transparent;
            }
        </style>
    </head>

    <body id="top">
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <header>
                        <img src="/img/header1.jpg" style="width: 100%;">
                        <div id="timercount"></div>
                    </header>
                    <nav class="navbar navbar-default" role="navigation">
                        <form class="navbar-form navbar-left" role="search">
                            <div class="form-group">
                                <input id="current_date" type="text" class="form-control" placeholder="" value="<?php echo date('d/m/Y H:i:s') ?>">
                            </div>
                        </form>
                        <script type="text/javascript">
                            var date = "<?php echo date('d/m/Y') ?>";
                            $(document).ready(function() {
                                startCount();
                            });

                            function startCount()
                            {
                                timer = setInterval(count, 1000);
                            }
                            function count()
                            {
                                var time_shown = $("#current_date").val().substring(11, 19);
                                var time_chunks = time_shown.split(":");
                                var date_shown = $("#current_date").val().substring(0, 10);
                                var date_chunks = date_shown.split("/");
                                var hour, mins, secs, day, month, year;

                                hour = Number(time_chunks[0]);
                                mins = Number(time_chunks[1]);
                                secs = Number(time_chunks[2]);
                                day = Number(date_chunks[0]);
                                month = Number(date_chunks[1]);
                                year = Number(date_chunks[2]);
                                secs++;
                                if (secs == 60) {
                                    secs = 0;
                                    mins = mins + 1;
                                }
                                if (mins == 60) {
                                    mins = 0;
                                    hour = hour + 1;
                                }
                                if (hour == 24) {
                                    hour = 0;
                                    day = day + 1;
                                }
                                if (day == 31) {
                                    day = 1;
                                    month = month + 1;
                                }
                                if (month == 13) {
                                    month = 1;
                                    year = year + 1;
                                }
                                if (month < 10) {
                                    month = "0" + month;
                                }
                                date = day + "/" + month + "/" + year;
                                $("#current_date").val(date + ' ' + hour + ":" + plz(mins) + ":" + plz(secs));

                            }

                            function plz(digit) {

                                var zpad = digit + '';
                                if (digit < 10) {
                                    zpad = "0" + zpad;
                                }
                                return zpad;
                            }
                        </script>
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span></button>
                            <a class="navbar-brand" href="/"><i class="fa fa-home"></i> Trang chủ</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="">
                                    <a href="<?php echo $this->Html->url('/vanbanphapquy'); ?>">Văn bản pháp quy</a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url('/bando'); ?>">Bản đồ</a>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('Quản lý', '/admin/dashboards'); ?>
                                </li>
                                <li>
                                    <?php echo $this->Html->link('Liên hệ', '/lienhe'); ?>
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
                                        if ($user = $this->Session->read('Auth.User')) {
                                            echo h($user['username']);
                                        } else {
                                            echo __('User');
                                        }
                                        ?><strong
                                            class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <?php if (!$this->Session->read('Auth.User')): ?>
                                            <li>
                                                <?php echo $this->Html->link(__('Login'), '/users/login'); ?>
                                            </li>
                                            <li class="divider">
                                            <li>
                                                <?php echo $this->Html->link(__('Register'), '/users/register'); ?>
                                            </li>
                                            <li class="divider">
                                            <?php endif; ?>
                                        <li>
                                            <?php echo $this->Html->link(__('Logout'), '/users/logout'); ?>
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
                    <style>
                        .bread{
                            width: 965px;
                            margin: 0 auto;
                        }
                    </style>
                    <div class="content">
                                                <div class="bread"><marquee behavior="scrolling" scrolldelay="90" scrollamount="5" onmouseout="this.start();" onmouseover="this.stop()
                                                                ;"><span>Phần mềm quản lý môi trường tại Cụm Công
															Nghiệp Tân Qui</span></marquee></div>
                                                    <?php echo $this->fetch('breadcrumb'); ?>
                                                    <?php echo $this->Session->flash(); ?>
                                                    <?php echo $this->fetch('content'); ?>
                    </div>
                </div>
            </div>
            <div style="float:right;"><ul class="gotoplink" id="gotoplink"><a href="#top" title="Lên dầu trang"><li></li></a></ul></div>
            <!--footer-->
            <div id="footer" class="navbar-footer">
                <div class="container">
                    <div class="navbar-header">
                        <a href="javascript:void();" class="navbar-brand">©Tisemiz - 2014 - Alright reserved</a>
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
        <script>

            $(function() {
                $("#gotoplink").click(function() {
                    $('html,body').animate({scrollTop: 0}, 'fast');
                    return false;
                });

            });

        </script>
    </body>
</html>

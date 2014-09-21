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
            'localstorage',
            '/admin/js/validator'
        ));
        ?>
        <?php echo $this->fetch('script'); ?>
        <script>
            $(function() {
                tinymce.init({
                    selector: "textarea",
                    theme: "modern",
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor moxiemanager"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    content_css: "/css/custom_content_tinymce.css",
                    theme_advanced_font_sizes: "10px,12px,13px,14px,16px,18px,20px",
                    font_size_style_values: "10px,12px,13px,14px,16px,18px,20px",
                    style_formats: [
                        {title: 'Bold text', inline: 'b'},
                        {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                        {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                        {title: 'Example 1', inline: 'span', classes: 'example1'},
                        {title: 'Example 2', inline: 'span', classes: 'example2'},
                        {title: 'Table styles'},
                        {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                    ]

                });
            });
        </script>

    </head>

    <body>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <header>
                        <img src="/img/header1.jpg" style="width: 100%;">
                    </header>
                    <nav class="navbar navbar-default" role="navigation">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span></button>
                            <a class="navbar-brand" href="/"><i class="fa fa-home"></i> Trang chủ</a>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="<?php echo $this->Html->url('/admin/dashboards'); ?>">Bảng điều khiển</a>
                                </li>
                                <li>
                                    <a href="<?php echo $this->Html->url('/admin/doanhnghiep/lietke'); ?>">Doanh nghiệp</a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Thống kê <strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="">Thống kê thông tin cơ bản</a></li>
                                        <li><a href="">Thống kê hoạt động trạm xử lý nước thải</a></li>
                                        <li><a href="">Thống kê lưu lượng nước thải</a></li>
                                        <li><a href="">Thống kê xử lý cục bộ nước thải</a></li>
                                        <li><a href="">Thống kê chất thải rắn - nguy hại</a></li>
                                        <li><a href="">Thống kê hoạt động bảo vệ môi trường</a></li>
                                        <li><a href="">Thống kê hoạt động thường xuyên</a></li>
                                        <li><a href="">Thống kê chi phí vận hành XLNT</a></li>
                                        <li><a href="">Thống kê sự cố</a></li>
                                        <li><a href="">Thống kê xử lý cục bộ</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Báo cáo <strong class="caret"></strong></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo $this->Html->url('/admin/baocao/baocaogiamsatmoitruong'); ?>">Báo cáo giám sát môi trường</a></li>
                                        <li><a href="<?php echo $this->Html->url('/admin/baocao/danhsachbaocaogiamsatmoitruong'); ?>">Danh sách BCGSMT</a></li>
                                        <li><a href="<?php echo $this->Html->url('/admin/baocao/baocaochatthainguyhai'); ?>">Báo cáo chất thải nguy hại</a></li>
                                        <li><a href="<?php echo $this->Html->url('/admin/baocao/danhsachbaocaochatthainguyhai'); ?>">Danh sách BCCTNH</a></li>
                                    </ul>
                                </li>
                            </ul>
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
                    <style>
                        .bread{
                            width: 965px;
                            margin: 0 auto;
                        }
                    </style>
                    <div class="content">
                        <div class="bread"><marquee behavior="scrolling" scrolldelay="90" scrollamount="5" onmouseout="this.start();" onmouseover="this.stop();"><span>Phần mềm quản lý môi trường tại Cụm Công Nghiệp Tân Quy (ĐT: 08.32345678)</span></marquee></div>
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
            <script>

            $(function() {
                $("#gotoplink").click(function() {
                    $('html,body').animate({scrollTop: 0}, 'fast');
                    return false;
                });

            });

        </script>
        </div>
    </body>
</html>

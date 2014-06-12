
<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
	<title>TiseMiz | <?php echo $this->fetch('title');?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="description" content="TiseMiz - Tool Increase Strength of Environment Management in Industry Zone">
	<meta name="author" content="Son Ca Huynh huynhsonca@wordpress.com">
        <?php echo $this->fetch('meta');?>
        <!-- CSS -->
	<?php
		echo $this->Html->css(array(
			'/assets/css/bootstrap.min',
			'/assets/css/font-awesome.min',
			'/assets/css/main.min',
			'/assets/css/custom',
                        )
		);
	?>
        <?php echo $this->fetch('css');?>

	<link href="<?php echo $this->Html->url('/assets/css/style-switcher.css');?>" rel="stylesheet" type="text/css">

	<!-- Fav and touch icons -->
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->Html->url('/assets/ico/kingboard-favicon144x144.png');?>">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->Html->url('/assets/ico/kingboard-favicon114x114.png');?>">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->Html->url('/assets/ico/kingboard-favicon72x72.png');?>">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $this->Html->url('/assets/ico/kingboard-favicon57x57.png');?>">
	<link rel="shortcut icon" href="<?php echo $this->Html->url('/assets/ico/favicon.png');?>">
        <!-- Javascript -->
	<?php
		echo $this->Html->script(array(
			'/assets/js/jquery-2.1.1.min',
			'/assets/js/bootstrap.min',
			'/assets/js/modernizr',
			'/assets/js/bootstrap-tour.custom',
			'/assets/js/king-common.min',
			'/assets/js/deliswitch.min',
			'/assets/js/stat/jquery.easypiechart.min',
			'/assets/js/raphael-2.1.0.min',
			'/assets/js/stat/flot/jquery.flot.min',
			'/assets/js/stat/flot/jquery.flot.resize.min',
			'/assets/js/stat/flot/jquery.flot.time.min',
			'/assets/js/stat/flot/jquery.flot.pie.min',
			'/assets/js/stat/flot/jquery.flot.tooltip.min',
			'/assets/js/jquery.sparkline.min',
			'/assets/js/datatable/jquery.dataTables.min',
			'/assets/js/datatable/jquery.dataTables.bootstrap',
			'/assets/js/jquery.mapael',
			'/assets/js/maps/usa_states',
			'/assets/js/king-chart-stat.min',
			'/assets/js/king-table.min',
			'/assets/js/king-components.min',
                        '/assets/tinymce/tinymce.min'
		));
	?>
	<?php echo $this->fetch('script');?>
</head>

<body class="dashboard">
	<!-- WRAPPER -->
	<div class="wrapper">

		<!-- TOP GENERAL ALERT -->
		<div class="alert alert-info top-general-alert">
			<span>The system has been upgraded to the new version. Click the <a href="#">release notes</a> to see the changes.</span>
			<a type="button" class="close">&times;</a>
		</div>
		<!-- END TOP GENERAL ALERT -->

		<!-- TOP BAR -->
		<div class="top-bar">
			<div class="container">
				<div class="row">
					<!-- logo -->
					<div class="col-md-2 logo">
						<a href="index.html">
							<img src="/assets/img/kingboard_logo_white.png" alt="Tisemiz - Admin Dashboard" />
							<?php //echo $this->Html->image('/assets/img/kingboard-logo-white.png',array('alt'=>'Tisemiz - Admin Dashboard'));?>
						</a>
						<h1 class="sr-only">Tisemiz Admin Dashboard</h1>
					</div>
					<!-- end logo -->
					<div class="col-md-10">
						<div class="row">
							<div class="col-md-3">
								<!-- search box -->
								<div id="tour-searchbox" class="input-group searchbox">
									<input type="search" class="form-control" placeholder="enter keyword here...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button"><i class="fa fa-search"></i>
										</button>
									</span>
								</div>
								<!-- end search box -->
							</div>
							<div class="col-md-9">
								<div class="top-bar-right">
									<!-- responsive menu bar icon -->
									<a href="#" class="hidden-md hidden-lg main-nav-toggle"><i class="fa fa-bars"></i></a>
									<!-- end responsive menu bar icon -->
									<button type="button" id="start-tour" class="btn btn-link"><i class="fa fa-refresh"></i> Start Tour <span class="badge element-bg-color-blue">New</span></button>
									<div class="notifications">
										<ul>
											<!-- notification: inbox -->
											<li class="notification-item inbox">
												<div class="btn-group">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-envelope"></i>
														<span class="count">2</span>
														<span class="circle"></span>
													</a>

													<ul class="dropdown-menu" role="menu">
														<li class="notification-header">
															<em>You have 2 unread messages</em>
														</li>
														<li class="inbox-item clearfix">
															<a href="#">
																<div class="media">
																	<div class="pull-left" href="#">
																		<img class="media-object" src="<?php echo $this->Html->url('/assets/img/user1.png');?>" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Antonius</h5>
																		<p class="text">The problem just happened this morning. I can't see ...</p>
																		<span class="timestamp">4 minutes ago</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item unread clearfix">
															<a href="#">
																<div class="media">
																	<div class="pull-left" href="#">
																		<img class="media-object" src="<?php echo $this->Html->url('/assets/img/user2.png');?>" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Michael</h5>
																		<p class="text">Hey dude, cool theme!</p>
																		<span class="timestamp">2 hours ago</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item unread clearfix">
															<a href="#">
																<div class="media">
																	<div class="pull-left" href="#">
																		<img class="media-object" src="<?php echo $this->Html->url('/assets/img/user3.png');?>" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Stella</h5>
																		<p class="text">Ok now I can see the status for each item. Thanks! :D</p>
																		<span class="timestamp">Oct 6</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item clearfix">
															<a href="#">
																<div class="media">
																	<div class="pull-left" href="#">
																		<img class="media-object" src="<?php echo $this->Html->url('/assets/img/user4.png');?>" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">Jane Doe</h5>
																		<p class="text"><i class="fa fa-reply"></i> Please check the status of your ...</p>
																		<span class="timestamp">Oct 2</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="inbox-item clearfix">
															<a href="#">
																<div class="media">
																	<div class="pull-left" href="#">
																		<img class="media-object" src="<?php echo $this->Html->url('/assets/img/user5.png');?>" alt="Antonio">
																	</div>
																	<div class="media-body">
																		<h5 class="media-heading name">John Simmons</h5>
																		<p class="text"><i class="fa fa-reply"></i> I've fixed the problem :)</p>
																		<span class="timestamp">Sep 12</span>
																	</div>
																</div>
															</a>
														</li>
														<li class="notification-footer">
															<a href="#">View All Messages</a>
														</li>
													</ul>
												</div>
											</li>
											<!-- end notification: inbox -->

											<!-- notification: general -->
											<li class="notification-item general">
												<div class="btn-group">
													<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-bell"></i>
														<span class="count">8</span>
														<span class="circle"></span>
													</a>
													<ul class="dropdown-menu" role="menu">
														<li class="notification-header">
															<em>You have 8 notifications</em>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">1 minute ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-user green-font"></i>
																<span class="text">New registered user</span>
																<span class="timestamp">12 minutes ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">18 minutes ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-shopping-cart red-font"></i>
																<span class="text">4 new sales order</span>
																<span class="timestamp">4 hours ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-edit yellow-font"></i>
																<span class="text">3 product reviews awaiting moderation</span>
																<span class="timestamp">1 day ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">3 days ago</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-comment green-font"></i>
																<span class="text">New comment on the blog post</span>
																<span class="timestamp">Oct 15</span>
															</a>
														</li>
														<li>
															<a href="#">
																<i class="fa fa-warning red-font"></i>
																<span class="text red-font">Low disk space!</span>
																<span class="timestamp">Oct 11</span>
															</a>
														</li>
														<li class="notification-footer">
															<a href="#">View All Notifications</a>
														</li>
													</ul>
												</div>
											</li>
											<!-- end notification: general -->
										</ul>
									</div>

									<!-- logged user and the menu -->
									<div class="logged-user">
										<div class="btn-group">
											<a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown">
												<img src="<?php echo $this->Html->url("/assets/img/user-avatar.png");?>" />
												<span class="name"><?php if($user=$this->Session->read('Auth.User'))
														echo $user['username'];
													?></span>
												<span class="caret"></span>
											</a>
											<ul class="dropdown-menu" role="menu">
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														<span class="text">Profile</span>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-cog"></i>
														<span class="text">Settings</span>
													</a>
												</li>
												<li>
													<a href="<?php echo $this->Html->url('/users/logout');?>">
														<i class="fa fa-power-off"></i>
														<span class="text">Logout</span>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<!-- end logged user and the menu -->
								</div>
								<!-- /top-bar-right -->
							</div>
						</div>
						<!-- /row -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /top -->


		<!-- BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->
		<div class="bottom">
			<div class="container">
				<div class="row">
					<!-- left sidebar -->
					<div class="col-md-2 left-sidebar">

						<!-- main-nav -->
						<nav class="main-nav">

							<ul class="main-menu">
								<li class="active"><a href="index.html"><i class="fa fa-dashboard fa-fw"></i><span class="text">Trang quản trị</span></a>
								</li>
								<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i><span class="text">Khu công nghiệp</span>
									<i class="toggle-icon fa fa-angle-left"></i></a>
									<ul class="sub-menu ">
										<li>
											<a href="ql-kcn.html">
												<span class="text">Quản lý</span>
											</a>
										</li>
										<li>
											<a href="add-kcn.html">
												<span class="text">Thêm mới</span>
											</a>
										</li>
									</ul>
								</li>
								<li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i><span class="text">Doanh nghiệp</span>
									<i class="toggle-icon fa fa-angle-left"></i></a>
									<ul class="sub-menu ">
										<li>
											<a href="<?php echo $this->Html->url('/admin/doanhnghiep/lietke');?>">
												<span class="text">Liệt kê</span>
											</a>
										</li>
										<li>
											<a href="<?php echo $this->Html->url('/admin/doanhnghiep/themmoi');?>">
												<span class="text">Thêm mới</span>
											</a>
										</li>
									</ul>
								</li>
                                <li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i><span class="text">Hoạt động môi trường</span>
                                    <i class="toggle-icon fa fa-angle-left"></i></a>
                                    <ul class="sub-menu ">
                                        <li>
                                            <a href="nhapsolieu.html">
                                                <span class="text">Nhập số liệu điều tra</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="xuatbieudo.html">
                                                <span class="text">Xuất biểu đồ</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i><span class="text">Thống kê</span>
                                    <i class="toggle-icon fa fa-angle-left"></i></a>
                                    <ul class="sub-menu ">
                                        <li>
                                            <a href="thongke1.html">
                                                <span class="text">Doanh nghiệp theo khu công nghiệp</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="thongke2.html">
                                                <span class="text">Hoạt động bảo vệ môi trường của doanh nghiệp</span>
                                            </a>
                                        </li>
                                     </ul>
                                </li>
                                <li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i><span class="text">Báo cáo</span>
                                    <i class="toggle-icon fa fa-angle-left"></i></a>
                                    <ul class="sub-menu ">
                                        <li>
                                            <a href="#">
                                                <span class="text">1.Báo cáo tuần về hoạt động môi trường KCN</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <span class="text">2.Báo cáo tháng về hoạt động môi trường KCN</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page-knowledgebase.html">
                                                <span class="text">3.Báo cáo 6 tháng về hoạt động môi trường KCN</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page-inbox.html">
                                                <span class="text">4.Báo cáo môi trường KCN</span>
                                            </a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">5.Báo cáo môi trường tổng hợp hàng năm của doanh nghiệ</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">6.Báo cáo môi trường 6 tháng của doanh nghiệp</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">7.Báo cáo quan trắc môi trường của doanh nghiệp</span>
                                            </a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">8.Báo cáo phí nước thải</span>
                                            </a>
                                        </li>
                                        <li class="divider">
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="text">Thiết lập thông số</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#" class="js-sub-menu-toggle"><i class="fa fa-clipboard fa-fw"></i><span class="text">Danh mục</span>
                                    <i class="toggle-icon fa fa-angle-left"></i></a>
                                    <ul class="sub-menu ">
                                        <li>
                                            <a href="tailieu.html">
                                                <span class="text">Tài liệu</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="thongtinhuongdan.html">
                                                <span class="text">Thông tin hướng dẫn</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="dieukhoan.html">
                                                <span class="text">Điều khoản</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="luat.html">
                                                <span class="text">Luật bảo vệ môi trường</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
								</li>
							</ul>
						</nav>
						<!-- /main-nav -->

						<div class="sidebar-minified js-toggle-minified">
							<i class="fa fa-angle-left"></i>
						</div>

						<!-- sidebar content -->
						<div class="sidebar-content">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h5><i class="fa fa-lightbulb-o"></i> Mẹo vặt</h5>
								</div>
								<div class="panel-body">
									<p>Bạn có thể sử dụng thanh công cụ tìm kiếm để tiết kiệm thời gian</p>
								</div>
							</div>

							<h5 class="label label-default"><i class="fa fa-info-circle"></i> Server Info</h5>
							<ul class="list-unstyled list-info-sidebar bottom-30px">
								<li class="data-row">
									<span class="data-name">Số người truy cập</span>
									<span class="data-value">
										27443
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
												<span class="sr-only">10%</span>
											</div>
										</div>
									</span>
								</li>
								<li class="data-row">
									<span class="data-name">Lưu lượng dữ liệu hàng tháng</span>
									<span class="data-value">
										230 / 500 GB
										<div class="progress progress-xs">
											<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 46%">
												<span class="sr-only">46%</span>
											</div>
										</div>
									</span>
								</li>
								<li class="data-row">
									<span class="data-name">Số người đang online</span>
									<span class="data-value">219</span>
								</li>
								<li class="data-row">
									<span class="data-name">Hệ điều hành</span>
									<span class="data-value">Linux</span>
								</li>
								<li class="data-row">
									<span class="data-name">Phiên bản hệ thống</span>
									<span class="data-value">2.4.6</span>
								</li>
								<li class="data-row">
									<span class="data-name">PHP Version</span>
									<span class="data-value">5.3.27</span>
								</li>
								<li class="data-row">
									<span class="data-name">MySQL Version</span>
									<span class="data-value">5.5.34-cll</span>
								</li>
								<li class="data-row">
									<span class="data-name">Architecture</span>
									<span class="data-value">x86_64</span>
								</li>
							</ul>
						</div>
						<!-- end sidebar content -->
					</div>
					<!-- end left sidebar -->

					<!-- content-wrapper -->
					<div class="col-md-10 content-wrapper">
						<div class="row">
							<div class="col-md-4">
								<ul class="breadcrumb">
									<li><i class="fa fa-home"></i><a href="#">Home</a>
									</li>
									<li class="active">Dashboard</li>
								</ul>
							</div>
							<div class="col-md-8">
								<div class="top-content">
									<ul class="list-inline mini-stat">
										<li>
											<h5>LIKES
												<span class="stat-value stat-color-orange"><i class="fa fa-plus-circle"></i> 81,450</span>
											</h5>
											<span id="mini-bar-chart1" class="mini-bar-chart"></span>
										</li>
										<li>
											<h5>SUBSCRIBERS
												<span class="stat-value stat-color-blue"><i class="fa fa-plus-circle"></i> 150,743</span>
											</h5>
											<span id="mini-bar-chart2" class="mini-bar-chart"></span>
										</li>
										<li>
											<h5>CUSTOMERS
												<span class="stat-value stat-color-seagreen"><i class="fa fa-plus-circle"></i> 43,748</span>
											</h5>
											<span id="mini-bar-chart3" class="mini-bar-chart"></span>
										</li>
									</ul>
								</div>
							</div>
						</div>


						<!-- main -->
						<div class="content">
							<?php echo $this->Session->flash(); ?>
							<?php echo $this->fetch('content');?>
						</div>
						<!-- /main -->
					</div>
					<!-- /content-wrapper -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- END BOTTOM: LEFT NAV AND RIGHT MAIN CONTENT -->

		<!-- FOOTER -->
		<footer class="footer">
			&copy; 2014 Tisemiz. Developed by huynhsonca.wordpress.com
		</footer>
		<!-- END FOOTER -->

	</div>
	<!-- /wrapper -->

	<!-- STYLE SWITCHER -->
	<div class="del-style-switcher">
		<div class="del-switcher-toggle toggle-hide"></div>
		<form>
			<section class="del-section del-section-skin">
				<h5 class="del-switcher-header">Choose Skins:</h5>

				<ul>
					<li><a href="#" title="Slate Gray" class="switch-skin slategray" data-skin="<?php echo $this->Html->url('/assets/css/skins/slategray.css');?>">Slate Gray</a></li>
					<li><a href="#" title="Dark Blue" class="switch-skin darkblue" data-skin="<?php echo $this->Html->url('/assets/css/skins/darkblue.css');?>">Dark Blue</a></li>
					<li><a href="#" title="Dark Brown" class="switch-skin darkbrown" data-skin="<?php echo $this->Html->url('/assets/css/skins/darkbrown.css');?>">Dark Brown</a></li>
					<li><a href="#" title="Light Green" class="switch-skin lightgreen" data-skin="<?php echo $this->Html->url('/assets/css/skins/lightgreen.css');?>">Light Green</a></li>
					<li><a href="#" title="Orange" class="switch-skin orange" data-skin="<?php echo $this->Html->url('/assets/css/skins/orange.css');?>">Orange</a></li>
					<li><a href="#" title="Red" class="switch-skin red" data-skin="<?php echo $this->Html->url('/assets/css/skins/red.css');?>">Red</a></li>
					<li><a href="#" title="Teal" class="switch-skin teal" data-skin="<?php echo $this->Html->url('/assets/css/skins/teal.css');?>">Teal</a></li>
					<li><a href="#" title="Yellow" class="switch-skin yellow" data-skin="<?php echo $this->Html->url('/assets/css/skins/yellow.css');?>">Yellow</a></li>
				</ul>

				<button type="button" class="switch-skin-full fulldark" data-skin="<?php echo $this->Html->url('/assets/css/skins/fulldark.css');?>">Full Dark</button>
				<button type="button" class="switch-skin-full fullbright" data-skin="<?php echo $this->Html->url('/assets/css/skins/fullbright.css');?>">Full Bright</button>
			</section>

			<p><a href="#" title="Reset Style" class="del-reset-style">Reset Style</a></p>
		</form>
	</div>
	<!-- END STYLE SWITCHER -->

	
</body>

</html>
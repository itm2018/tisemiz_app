<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>He thong quan ly chat thai nguy hai</title>
		<meta name="description" content="Tisemiz ứng dụng quản lý môi trường tại các khu công nghiệp, góp phần bảo vệ môi trường sống tại Việt nam">
		<meta name="author" content="huynhsonca@gmail.com">
		<?php echo $this->fetch('meta'); ?>
		<?php echo $this->Html->css(array('popup')); ?>
		<?php echo $this->fetch('css'); ?>
		<?php echo $this->Html->script(array('CheckValid','jquery.min')); ?>
		<?php echo $this->fetch('script'); ?>
		</head>
	<body>
		<?php echo $this->Session->flash(); ?>
                <!--<div>ID:<?php // echo !empty($baocaogsmt_id)?h($baocaogsmt_id):'';?></div>-->
		<?php echo $this->fetch('content'); ?>
	</body>
</html>
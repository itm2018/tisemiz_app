<?php
Router::connect('/admin/doanhnghiep/lietke/*',array('plugin'=>'Admin','controller'=>'Doanhnghieps','action'=>'lietke'));
Router::connect('/admin/doanhnghiep/lietke',array('plugin'=>'Admin','controller'=>'Doanhnghieps','action'=>'lietke'));
Router::connect('/admin/doanhnghiep/themmoi',array('plugin'=>'Admin','controller'=>'Doanhnghieps','action'=>'themmoi'));
Router::connect('/',array('plugin'=>'Front','controller'=>'News','action'=>'view'),'home','home');
Router::connect('/tintuc/xem',array('plugin'=>'Front','controller'=>'News','action'=>'view'));
CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';

<?php
//Router::connect('/admin/doanhnghiep/lietke/*',array('plugin'=>'Admin','controller'=>'Doanhnghieps','action'=>'lietke'));
Router::connect('/bando',array('plugin'=>'Front','controller'=>'Map','action'=>'index'));
Router::connect('/admin/dashboards',array('plugin'=>'Admin','controller'=>'Dashboards','action'=>'billboard'));
Router::connect('/admin/doanhnghiep/lietke',array('plugin'=>'Admin','controller'=>'Doanhnghieps','action'=>'lietke'));
Router::connect('/admin/doanhnghiep/lietke/*',array('plugin'=>'Admin','controller'=>'Doanhnghieps','action'=>'lietke'));
Router::connect('/admin/doanhnghiep/themmoi',array('plugin'=>'Admin','controller'=>'Doanhnghieps','action'=>'themmoi'));
//Router::connect('/',array('plugin'=>'Front','controller'=>'News','action'=>'view'),'home','home');
Router::connect('/',array('plugin'=>'Front','controller'=>'Home','action'=>'index'));
Router::connect('/news',array('plugin'=>'Front','controller'=>'News','action'=>'view'));
//Router::connect('/tintuc/xem',array('plugin'=>'Front','controller'=>'News','action'=>'view'));
 //Router::connect('/admin/baocao/dulieugiamsatmoitruong',array('plugin'=>'Admin','controller'=>'Baocao','Action'=>'dulieugiamsatmoitruong'));
// Router::connect('/admin/baocao/xemchitiet/:id',array('plugin'=>'Admin','controller'=>'Baocao','Action'=>'xemchitiet'),array('pass'=>array('id')));
CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';

<?php
Router::connect('/admin/doanhnghiep/lietke',array('plugin'=>'Admin','controller'=>'Doanhnghieps','action'=>'lietke'));
Router::connect('/admin/doanhnghiep/themmoi',array('plugin'=>'Admin','controller'=>'Doanhnghieps','action'=>'themmoi'));
CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';

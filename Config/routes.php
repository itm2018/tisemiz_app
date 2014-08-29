<?php

//Router::connect('/admin/doanhnghiep/lietke/*',array('plugin'=>'Admin','controller'=>'DoanhNghieps','action'=>'lietke'));
Router::connect('/bando', array('plugin' => 'Front', 'controller' => 'Map', 'action' => 'index'));
Router::connect('/admin/dashboards', array('plugin' => 'Admin', 'controller' => 'Dashboards', 'action' => 'billboard'));
Router::connect('/admin/doanhnghiep/lietke', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'lietke'));
Router::connect('/admin/doanhnghiep/lietke/*', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'lietke'));
Router::connect('/admin/doanhnghiep/themmoi', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themmoi'));
Router::connect('/admin/doanhnghiep/themmoi/step2', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'step2Hoatdongsanxuat'));
Router::connect('/admin/doanhnghiep/themmoi/step2/:tab', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'step2Hoatdongsanxuat'), array('pass' => array('tab')));
Router::connect('/admin/doanhnghiep/themmoi/step3', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'step3Xathai'));
Router::connect('/admin/doanhnghiep/themmoi/step4', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'step4Hoatdongbaovemoitruong'));
Router::connect('/admin/doanhnghiep/themmoi/step5', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'step5Kiennghi'));
Router::connect('/admin/doanhnghiep/themmoi/step6', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'step6Hoantat'));
Router::connect('/admin/doanhnghiep/edit/:id', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'edit'), array('pass' => array('id')));
Router::connect('/admin/doanhnghiep/delete/:id', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'delete'), array('pass' => array('id')));
Router::connect('/admin/doanhnghiep/themsanpham', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themsanpham'));
Router::connect('/admin/doanhnghiep/themdiennuoc', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themdiennuoc'));
Router::connect('/admin/doanhnghiep/themnguyenlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themnguyenlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/themnhienlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themnhienlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/themnuocngamdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themnuocngamdoanhnghiep'));
Router::connect('/admin/doanhnghiep/themnuocthainhamay', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'themnuocthainhamay'));
Router::connect('/admin/doanhnghiep/thembienphapxulynuocthaidoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulynuocthaidoanhnghiep'));
Router::connect('/admin/doanhnghiep/thembienphapxulykhithaidoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulykhithaidoanhnghiep'));
Router::connect('/admin/doanhnghiep/thembienphapxulyonrungdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulyonrungdoanhnghiep'));
Router::connect('/admin/doanhnghiep/thembienphapxulyracthaisinhhoat', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulyracthaisinhhoat'));
Router::connect('/admin/doanhnghiep/thembienphapxulychatthaicongnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulychatthaicongnghiep'));
Router::connect('/admin/doanhnghiep/thembienphapxulychatthainguyhai', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'thembienphapxulychatthainguyhai'));
Router::connect('/admin/doanhnghiep/xoadanhmucs', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhmucs'));
Router::connect('/admin/doanhnghiep/xoasanphams', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoasanphams'));
Router::connect('/admin/doanhnghiep/xoanguyenlieus', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoanguyenlieus'));
Router::connect('/admin/doanhnghiep/xoanguonthainuocthais', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoanguonthainuocthais'));
Router::connect('/admin/doanhnghiep/xoadanhsachsanphamdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachsanphamdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachnguyenlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachnguyenlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachdiennuocdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachdiennuocdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachnuocngamdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachnuocngamdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachnhienlieudoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachnhienlieudoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachnuocthainhamay', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachnuocthainhamay'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulynuocthaidoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulynuocthaidoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulykhithaidoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulykhithaidoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulyonrungdoanhnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulyonrungdoanhnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulyracthaisinhhoat', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulyracthaisinhhoat'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulychatthaicongnghiep', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulychatthaicongnghiep'));
Router::connect('/admin/doanhnghiep/xoadanhsachbienphapxulychatthainguyhai', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'xoadanhsachbienphapxulychatthainguyhai'));
Router::connect('/admin/doanhnghiep/chucnang/type/:type', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'chucnang'), array('pass' => array('type'), 'type' => '[0-9]'));
Router::connect('/admin/doanhnghiep/capnhat/type/:type/id/:id', array('plugin' => 'Admin', 'controller' => 'DoanhNghieps', 'action' => 'capnhat'), array('pass' => array('type', 'id'), 'type' => '[0-9]', 'id' => '[0-9]{1,11}'));
//Router::connect('/',array('plugin'=>'Front','controller'=>'News','action'=>'view'),'home','home');
Router::connect('/', array('plugin' => 'Front', 'controller' => 'Home', 'action' => 'index'));
Router::connect('/news', array('plugin' => 'Front', 'controller' => 'News', 'action' => 'view'));
//Router::connect('/tintuc/xem',array('plugin'=>'Front','controller'=>'News','action'=>'view'));
//Router::connect('/admin/baocao/dulieugiamsatmoitruong',array('plugin'=>'Admin','controller'=>'Baocao','Action'=>'dulieugiamsatmoitruong'));
// Router::connect('/admin/baocao/xemchitiet/:id',array('plugin'=>'Admin','controller'=>'Baocao','Action'=>'xemchitiet'),array('pass'=>array('id')));
Router::connect('/admin/baocao/baocaochatthainguyhai',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhai'));
Router::connect('/admin/baocao/baocaochatthainguyhaistep2',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhaistep2'));
Router::connect('/admin/baocao/baocaochatthainguyhaistep3',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhaistep3'));
Router::connect('/admin/baocao/baocaochatthainguyhaistep4',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhaistep4'));
Router::connect('/admin/baocao/baocaochatthainguyhaistep5',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'baocaochatthainguyhaistep5'));
Router::connect('/admin/baocao/chatthainguyhaiphatsinh',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'chatthainguyhaiphatsinh'));
Router::connect('/admin/baocao/chatthainguyhaitonluu',array('plugin'=>'Admin','controller'=>'Baocao','action'=>'chatthainguyhaitonluu'));
CakePlugin::routes();
require CAKE . 'Config' . DS . 'routes.php';

<?php

App::uses('AdminAppModel', 'Admin.Model');

class BienPhapXuLyNuocThai extends AdminAppModel {

    public $useTable = 'bien_phap_xu_ly_nuoc_thai';
    var $name = 'BienPhapXuLyNuocThai';
    public $hasMany = array(
        'XuLyNuocThaiDoanhNghiep' => array(
            'className' => 'Admin.XuLyNuocThaiDoanhNghiep',
            'foreignKey' => ''
        )
    );

}

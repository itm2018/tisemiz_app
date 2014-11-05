<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AdminAppModel', 'Admin.Model');

/**
 * CakePHP DoanhNghiepThongTinTuanThuBvmt
 * @author Administrator
 */
class DoanhNghiepThongTinTuanThuBvmt extends AdminAppModel {

    public $useTable = 'doanh_nghiep_thong_tin_tuan_thu_bvmt';
    var $name = 'DoanhNghiepThongTinTuanThuBvmt';
    public $validate = array(
    );
    public $belongsTo = array(
        'DoanhNghiep' => array(
            'className' => 'Admin.DoanhNghiep',
            'foreignKey' => 'colMaDN'
        ),
        'ThongTinTuanThuBvmt' => array(
            'className' => 'Admin.ThongTinTuanThuBvmt',
            'foreignKey' => 'colMaTailieu'
        )
    );

}

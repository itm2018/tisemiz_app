<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * CakePHP ThongTinTuanThuBvmt
 * @author huynhsonca@gmail.com
 */
class ThongTinTuanThuBvmt extends AdminAppModel {

    public $useTable = 'thong_tin_tuan_thu_bvmt';
    var $name = 'ThongTinTuanThuBvmt';
    public $primaryKey = 'colMa';
    public $validate = array(
    );
    public $hasMany = array(
        'DoanhNghiepThongTinTuanThuBvmt' => array(
            'className' => 'Admin.DoanhNghiepThongTinTuanThuBvmt',
            'foreignKey' => 'colMaTailieu'
        )
    );

}

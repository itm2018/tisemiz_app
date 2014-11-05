<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * CakePHP ThongTinKienNghiBvmt
 * @author huynhsonca@gmail.com
 */
class ThongTinKienNghiBvmt extends AdminAppModel {

    public $useTable = 'thong_tin_kien_nghi_bvmt';
    var $name = 'ThongTinKienNghiBvmt';
    public $primaryKey = 'colMa';
    public $validate = array(
        'colCSSX'=>array(
            'rule'=>'notEmpty',
            'required'=>true,
            'allowEmpty'=>false,
            'message'=>'Chưa chọn doanh nghiệp đề xuất kiến nghị về môi trường'
        )
    );
    public $belongsTo = array(
        'DoanhNghiep' => array(
            'className' => 'Admin.DoanhNghiep',
            'foreignKey' => 'colCSSX'
        )
    );

}

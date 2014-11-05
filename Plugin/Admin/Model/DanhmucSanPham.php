<?php

App::uses('AdminAppModel', 'Admin.Model');

class DanhmucSanpham extends AdminAppModel {

    public $useTable = 'danhmuc_sanpham';
    public $name = 'DanhmucSanPham';
    public $hasMany = array(
        'Sanpham' => array(
            'className' => 'Admin.Sanpham',
            'foreignKey' => 'danhmuc_id'
        )
    );
    public $validate = array(
        'tendanhmuc' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Xin nhập tên danh mục'
            )
        )
    );

}

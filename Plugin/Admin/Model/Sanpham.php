<?php

App::uses('AdminAppModel', 'Admin.Model');

class Sanpham extends AdminAppModel {

    public $useTable = 'sanpham';
    public $name = 'Sanpham';
    public $belongsTo = array(
        'DanhmucSanPham' => array(
            'className' => 'Admin.DanhmucSanPham',
            'foreignKey' => 'danhmuc_id'
        )
    );
    public $validate = array(
        'tensanpham' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Xin nhập tên sản phẩm'
            ),
            'alphaNumeric'=>array(
                'rule'=>'/^[^<>%$\/\'&!@#\(\)\[\]]*$/',
                'message'=>'Tên sản phẩm không được chứa ký tự đặc biệt'
            )
        ),
        'create_by' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Cần đăng nhập để sử dụng chức năng này'
            )
        ),
        'danhmuc_id' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Chưa chọn tên danh mục'
            )
        ),
    );

}

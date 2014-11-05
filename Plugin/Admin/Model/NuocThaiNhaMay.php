<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * NuocThaiNhaMay Model
 * author: cahs
 */
class NuocThaiNhaMay extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'nuoc_thai_nha_may';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    public $belongsTo = array(
        'NguonThaiNuocThai' => array(
            'className' => 'Admin.NguonThaiNuocThai',
            'foreignKey' => 'colNguonThai'
        )
    );
    public $validate = array(
        'colCSSX' => array(
            'notEmty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Chưa chọn doanh nghiệp của dữ liệu nước thải nhà máy'
            )
        ),
        'colNguonThai' => array(
            'notEmty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Chưa chọn nguồn thải của dữ liệu nước thải nhà máy'
            )
        ),
        'colLLuongThai' => array(
            'notEmty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Chưa nhập lưu lượng của dữ liệu nước thải nhà máy'
            ),
            'isnumeric' => array(
                'rule' => 'numeric',
                'Lưu lượng thải phải là số'
            )
        ),
//        'colLLXlyTK' => array(
//            'notEmty' => array(
//                'rule' => 'notEmpty',
//                'required' => true,
//                'allowEmpty' => true,
//                'message' => 'Chưa nhập lưu lượng xử lý thiết kế'
//            ),
//            'isnumeric'=>array(
//                'rule'=>'numeric',
//                'Lưu lượng thiết kế thải phải là số'
//            )
//        ),
//        'colLLXlyTT' => array(
//            'notEmty' => array(
//                'rule' => 'notEmpty',
//                'required' => true,
//                'allowEmpty' => true,
//                'message' => 'Chưa nhập lưu lượng xử lý thiết kế'
//            ),
//            'isnumeric'=>array(
//                'rule'=>'numeric',
//                'Lưu lượng thực tế thải phải là số'
//            )
//        ),
        'colNguonPSinh' => array(
            'notEmty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Chưa nhập nguồn phát sinh chủ yếu của dữ liệu nước thải nhà máy'
            )
        ),
    );

}

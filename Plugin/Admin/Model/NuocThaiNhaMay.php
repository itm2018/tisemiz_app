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
        'colThoiGian' => array(
            'notEmty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Chưa chọn thời gian của dữ liệu nước thải nhà máy'
            ),
            'date' => array(
                'rule' => array('date', 'dmy'),
                'message' => 'Ngày không đúng định dạng'
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

    public function beforeSave($options = array()) {
        if (isset($this->data['NuocThaiNhaMay']['colThoiGian']) && $this->data['NuocThaiNhaMay']['colThoiGian']) {
            $thoigian = date_create_from_format('d/m/Y', $this->data['NuocThaiNhaMay']['colThoiGian']);
            $this->data['NuocThaiNhaMay']['colThoiGian'] = $thoigian->format('Y-m-d');
        }
        parent::beforeSave($options);
    }

}

<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * DienNuocDoanhNghiep Model
 *
 */
class DienNuocDoanhNghiep extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'dien_nuoc_doanh_nghiep';
    public $primaryKey = 'colMa';

    /**
     * Primary key field
     *
     * @var string
     */
    public $validate = array(
        'colLoaiTThu' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Loại tiêu thụ không được để trống'
            )
        ),
        'colLuongSD' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Lưu lượng sử dụng không được để trống'
            )
        ),
        'colCSSX' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Bạn chưa chọn cơ sở hoặc doanh nghiệp cho loại điện (nước) này'
            )
        ),
        'colNam' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Bạn chưa chọn năm nhập liệu'
            )
        ),
    );

}

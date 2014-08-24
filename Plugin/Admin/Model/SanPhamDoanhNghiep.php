<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * SanPhamDoanhNghiep Model
 *
 */
class SanPhamDoanhNghiep extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'san_pham_doanh_nghiep';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    public $belongsTo = array(
        'Sanpham' => array(
            'className' => 'Admin.Sanpham',
            'foreignKey' => 'colSanPham'
        )
    );
    public $validate = array(
        'colSanPham' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Mã sản phẩm không được để trống'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Mã sản phẩm phải là số'
            )
        ),
        'colDVi' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Đơn vị không được để trống'
            )
        ),
        'colCongSuatTK' => array(
            'numeric' => array(
                'rule' => 'numeric',
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Công suất thiết kế phải là số'
            )
        ),
        'colCongSuatTT' => array(
            'numeric' => array(
                'rule' => 'numeric',
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Công suất thực tế phải là số'
            )
        )
    );

}

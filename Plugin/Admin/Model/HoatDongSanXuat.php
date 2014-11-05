<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * HoatDongSanXuat Model
 *
 */
class HoatDongSanXuat extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'hoat_dong_san_xuat';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    public $belongsTo = array(
        'DoanhNghiep' => array(
            'className' => 'Admin.DoanhNghiep',
            'foreignKey' => 'colCSSX'
        )
    );
    public $validate = array(
        'colDienTichDatXD' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Xin nhập tổng diện tích đất xây dựng'
        ),
        'colSoCaSX' => array(
            'rule' => 'notEmpty',
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Xin nhập số ca sản xuất'
        ),
        'colNVienTT' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Xin nhập tổng số nhân viên'
            ),
            'isNumber'=>array(
                'rule'=>'numeric',
                'message'=>'Tổng số nhân viên phải là số nguyên'
            )
        )
    );

}

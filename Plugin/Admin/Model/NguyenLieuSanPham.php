<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * NguyenLieuSanPham Model
 *
 */
class NguyenLieuSanPham extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'nguyen_lieu_san_pham';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    public $belongsTo = array(
        'Nguyenlieu' => array(
            'className' => 'Admin.Nguyenlieu',
            'foreignKey' => 'colNguyenLieu'
        )
    );
    public $validate = array(
        'colNguyenLieu' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Mã nguyên liệu không được để trống'
            ),
            'numeric' => array(
                'rule' => 'numeric',
                'message' => 'Mã nguyên liệu phải là số'
            )
        ),
        'colDonVi' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Đơn vị không được để trống'
            )
        ),
        'colLuongSD' => array(
            'numeric' => array(
                'rule' => 'numeric',
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Lưu lượng sử dụng phải là số'
            )
        ),
        'colLuongDTru' => array(
            'numeric' => array(
                'rule' => 'numeric',
                'required' => false,
                'allowEmpty' => true,
                'message' => 'Lưu lượng dự trữ phải là số'
            )
        )
    );

}

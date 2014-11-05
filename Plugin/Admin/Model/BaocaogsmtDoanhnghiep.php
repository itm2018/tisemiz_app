<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * Description of BaogsmtDoanhnghiep
 *
 * @author Administrator
 */
class BaocaogsmtDoanhnghiep extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'doanhnghiep';
    public $hasMany = array(
        'Doanhnghiepduoclapbaocao' => array(
            'className' => 'Admin.BaocaogsmtDoanhnghiep',
            'foreignKey' => 'id_cosolapbc'
        )
    );
    public $belongsTo = array(
        'Cosolapbaocao' => array(
            'className' => 'Admin.BaocaogsmtDoanhnghiep',
            'foreignKey' => 'id_cosolapbc'
        )
    );

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'id';
    public $name = 'Doanhnghiep';
    public $validate = array(
        'tencoso' => array(
            'nonEmpty' => array(
                'rule' => 'notEmpty',
                'require' => true,
                'allowEmpty' => false,
                'message' => 'Tên doanh nghiệp bắt buộc nhập'
            )
        ),
        'truso' => array(
            'nonEmpty' => array(
                'rule' => 'notEmpty',
                'require' => true,
                'allowEmpty' => false,
                'message' => 'Trụ sở doanh nghiệp bắt buộc nhập'
            )
        ),
        'dienthoai' => array(
            'nonEmpty' => array(
                'rule' => 'notEmpty',
                'require' => true,
                'allowEmpty' => false,
                'message' => 'Điện thoại doanh nghiệp bắt buộc nhập'
            )
        ),
        'email' => array(
            'nonEmpty' => array(
                'rule' => 'notEmpty',
                'require' => true,
                'allowEmpty' => false,
                'message' => 'Email doanh nghiệp bắt buộc nhập'
            )
        ),
        'gpkinhdoanh' => array(
            'nonEmpty' => array(
                'rule' => 'notEmpty',
                'require' => true,
                'allowEmpty' => false,
                'message' => 'Giấy phép kinh doanh của doanh nghiệp bắt buộc nhập'
            )
        ),
        'masothue' => array(
            'nonEmpty' => array(
                'rule' => 'notEmpty',
                'require' => true,
                'allowEmpty' => false,
                'message' => 'Mã số thuế của doanh nghiệp bắt buộc nhập'
            )
        )
    );

}

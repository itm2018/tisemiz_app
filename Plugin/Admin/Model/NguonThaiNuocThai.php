<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * NguonThaiNuocThai Model
 *
 */
class NguonThaiNuocThai extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'nguon_thai_nuoc_thai';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    public $hasMany = array(
        'NuocThaiNhaMay' => array(
            'className' => 'Admin.NuocThaiNhaMay',
            'foreignKey' => 'colNguonThai'
        )
    );
    public $validate = array(
        'colTenNguonThai' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Xin nhập tên nguồn thải'
            )
        )
    );

}

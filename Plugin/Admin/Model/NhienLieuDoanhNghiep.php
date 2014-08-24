<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * NhienLieuDoanhNghiep Model
 *
 */
class NhienLieuDoanhNghiep extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'nhien_lieu_doanh_nghiep';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    //phat trien them
//    public $belongsTo = array(
//        'Nhienlieu' => array(
//            'className' => 'Admin.Nhienlieu',
//            'foreignKey' => 'colNhienLieu'
//        )
//    );

}

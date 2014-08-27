<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * NguonGayOnRung Model
 *
 */
class NguonGayOnRung extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'nguon_gay_on_rung';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    public $hasMany = array(
        'XuLyTiengOnRung' => array(
            'className' => 'Admin.XuLyTiengOnRung',
            'foreignKey' => 'colNguonGayOn'
        )
    );

}

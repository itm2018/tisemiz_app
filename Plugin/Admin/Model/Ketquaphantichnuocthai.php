<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * Ketquaphantichnuocthai Model
 *
 */
class Ketquaphantichnuocthai extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'ketquaphantichnuocthai';
    public $belongsTo = array(
        'Baocaogsmt' => array(
            'className' => 'Admin.Baocaogsmt',
            'foreignKey' => 'id_bc'
        )
    );

}

<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * Tinhhinhsxkd Model
 *
 */
class Tinhhinhsxkd extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'tinhhinhsxkd';
    public $belongsTo = array(
        'Baocaogsmt' => array(
            'className' => 'Admin.Baocaogsmt',
            'foreignKey' => 'id_bc'
        )
    );

}

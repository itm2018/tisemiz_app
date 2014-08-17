<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * Hientrangnuocthai Model
 *
 */
class Hientrangnuocthai extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'hientrangnuocthai';
    public $belongsTo = array(
        'Baocaogsmt' => array(
            'className' => 'Admin.Baocaogsmt',
            'foreignKey' => 'id_bc'
        )
    );

}

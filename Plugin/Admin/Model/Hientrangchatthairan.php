<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * Hientrangchatthairan Model
 *
 */
class Hientrangchatthairan extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'hientrangchatthairan';
    public $belongsTo = array(
        'Baocaogsmt' => array(
            'className' => 'Admin.Baocaogsmt',
            'foreignKey' => 'id_bc'
        )
    );

}

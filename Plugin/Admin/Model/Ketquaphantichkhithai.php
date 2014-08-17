<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * Ketquaphantichkhithai Model
 *
 */
class Ketquaphantichkhithai extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'ketquaphantichkhithai';
    public $belongsTo = array(
        'Baocaogsmt' => array(
            'className' => 'Admin.Baocaogsmt',
            'foreignKey' => 'id_bc'
        )
    );

}

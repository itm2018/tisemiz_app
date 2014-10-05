<?php
App::uses('AdminAppModel', 'Admin.Model');
/**
 * Hientrangkhithai Model
 *
 */
class Hientrangkhithai extends AdminAppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'hientrangkhithai';
        public $belongsTo = array(
        'Baocaogsmt' => array(
            'className' => 'Admin.Baocaogsmt',
            'foreignKey' => 'id_bc'
        )
    );

}

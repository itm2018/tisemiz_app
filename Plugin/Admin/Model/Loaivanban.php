<?php

/**
 * Created by PhpStorm.
 * User: soncahuynh
 * Date: 11/06/2014
 * Time: 01:40
 */
App::uses('AdminAppModel', 'Admin.Model');

class Loaivanban extends AdminAppModel {

    public $useTable = 'loaivanban';
    public $hasMany = array(
        'Vanbanphapquy' => array(
            'className' => 'Admin.Vanbanphapquy',
            'foreignKey' => 'id_loai',
        )
    );

}

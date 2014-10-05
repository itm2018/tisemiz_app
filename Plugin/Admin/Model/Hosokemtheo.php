<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AdminAppModel', 'Admin.Model');

/**
 * CakePHP Hosokemtheo
 * @author Administrator
 */
class Hosokemtheo extends AdminAppModel {

    public $useTable = 'hosokemtheo';
    var $name = 'Hosokemtheo';
    public $validate = array();
    public $belongsTo = array(
        'Baocaochatthainguyhai' => array(
            'className' => 'Admin.Baocaochatthainguyhai',
            'foreignKey' => 'colMaBaocao'
        )
    );

}

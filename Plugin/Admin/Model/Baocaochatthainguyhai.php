<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AdminAppModel', 'Admin.Model');

/**
 * CakePHP Baocaochatthainguyhai
 * @author cahs<huynhsonca@gmail.com>
 */
class Baocaochatthainguyhai extends AdminAppModel {

    public $useTable = 'baocaochatthainguyhai';
    public $primaryKey = 'colMa';
    public $validate = array();
    public $belongsTo=array(
        'DoanhNghiep'=>array(
            'className'=>'Admin.DoanhNghiep',
            'foreignKey'=>'colCSSX'
        )
    );
    public $hasMany = array(
        'Hosokemtheo' => array(
            'className' => 'Admin.Hosokemtheo',
            'foreignKey' => 'colMaBaocao',
            'order'=>'stt asc'
        )
    );

}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AdminAppModel', 'Admin.Model');

/**
 * CakePHP Linhvucvanban
 * @author Administrator
 */
class Linhvucvanban extends AdminAppModel {

    public $useTable = 'linhvucvanban';
    public $hasMany=array(
      'Vanbanphapquy'=>array(
            'className'=>'Admin.Vanbanphapquy',
            'foreignKey'=>'id_linhvuc',
        )  
    );

}

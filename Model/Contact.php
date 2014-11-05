<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AppModel', 'Model');

/**
 * CakePHP Contact
 * @author Administrator
 */
class Contact extends AppModel {
    var $useTable='contact';
    var $validate=array(
        'hoten'=>array(
            'notNull'=>array(
                'rule'=>'notEmpty',
                'required'=>true,
                'allowEmpty'=>false,
                'message'=>'Xin nhập họ tên'
            )
        ),
        'diachi'=>array(
            'notNull'=>array(
                'rule'=>'notEmpty',
                'required'=>true,
                'allowEmpty'=>false,
                'message'=>'Xin nhập địa chỉ'
            )
        ),
        'dienthoai'=>array(
            'notNull'=>array(
                'rule'=>'notEmpty',
                'required'=>true,
                'allowEmpty'=>false,
                'message'=>'Xin nhập số điện thoại'
            )
        ),
        'email'=>array(
            'notNull'=>array(
                'rule'=>'notEmpty',
                'required'=>true,
                'allowEmpty'=>false,
                'message'=>'Xin nhập địa chỉ email'
            ),
            'email'=>array(
                'rule'=>'email',
                'message'=>'Email sai định dạng'
            )
        ),
        'tieude'=>array(
            'notNull'=>array(
                'rule'=>'notEmpty',
                'required'=>true,
                'allowEmpty'=>false,
                'message'=>'Xin nhập tiêu đề'
            )
        ),
        'noidung'=>array(
            'notNull'=>array(
                'rule'=>'notEmpty',
                'required'=>true,
                'allowEmpty'=>false,
                'message'=>'Xin nhập nội dung'
            )
        ),
    );
}

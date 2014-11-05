<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AdminAppModel', 'Admin.Model');

/**
 * CakePHP DanhMucChatThai
 * @author cahs
 */
class DanhMucChatThai extends AdminAppModel {

	public $useTable = 'danh_muc_chat_thai';
	public $name = 'DanhMucChatThai';
	public $hasMany = array(
		'NguonThai' => array(
			'className' => 'Admin.NguonThai',
			'foreignKey' => 'id_danhmucchatthai',
			'order' => 'NguonThai.ma_nguonthai asc'
		)
	);
	public $validate = array(
		'ma_danhmuc' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Mã danh mục là bắt buộc'
			)
		),
		'ten_danhmuc' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Tên danh mục là bắt buộc'
			)
		)
	);

}

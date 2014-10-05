<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AdminAppModel', 'Admin.Model');

/**
 * CakePHP NguonThai
 * @author cahs
 */
class NguonThai extends AdminAppModel {

	public $useTable = 'nguon_thai';
	public $name = 'NguonThai';
	public $belongsTo = array(
		'DanhMucChatThai' => array(
			'className' => 'Admin.DanhMucChatThai',
			'foreignKey' => 'id_danhmucchatthai'
		)
	);
	public $hasMany = array(
		'ChatThai' => array(
			'className' => 'Admin.ChatThai',
			'foreignKey' => 'id_nguonthai',
			'order' => 'ChatThai.ma_chatthai asc'
		)
	);
	public $validate = array(
		'ma_nguonthai' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Tên danh mục là bắt buộc'
			)
		),
		'ten_nguonthai' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Tên danh mục là bắt buộc'
			)
		),
	);

}

<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * Tisemiz KetQuaGiamSatDinhKyNuocThai
 * @author cahs<huynhsonca@gmail.com>
 */
class KetQuaGiamSatDinhKyNuocThai extends AdminAppModel {

    public $useTable = 'ket_qua_giam_sat_dinh_ky_nuoc_thai';
	public $validate = array(
		'chi_tieu'=>array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Xin nhập chỉ tiêu đo đạc'
			)
		),
		'truoc_xu_ly' => array(
			'numberic' => array(
				'rule' => 'numeric',
				'required' => true,
				'allowEmpty' => true,
				'message' => 'Giá trị trước khi xử lý phải là số'
			)
		),
		'sau_xu_ly'=>array(
			'numeric'=>array(
				'rule'=>'numeric',
				'required' => true,
				'allowEmpty' => true,
				'message' => 'Giá trị sau khi xử lý phải là số'
			)
		),
		'nuoc_sinh_hoat'=>array(
			'numeric'=>array(
				'rule'=>'numeric',
				'required' => true,
				'allowEmpty' => true,
				'message' => 'Giá trị nước thải sinh hoạt phải là số'
			)
		)
	);
}

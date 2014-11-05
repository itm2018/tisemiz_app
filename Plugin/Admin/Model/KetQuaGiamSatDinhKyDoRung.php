<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * Tisemiz KetQuaGiamSatDinhKyDoRung
 * @author cahs<huynhsonca@gmail.com>
 */
class KetQuaGiamSatDinhKyDoRung extends AdminAppModel {

    public $useTable = 'ket_qua_giam_sat_dinh_ky_do_rung';
	public $validate=array(
		'vi_tri_do'=>array(
			'nonEmpty'=>array(
				'rule' => 'notEmpty',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Xin chọn vị trí đo'
			),
		),
		'ngay_giam_sat' => array(
			'nonEmpty'=>array(
				'rule' => 'notEmpty',
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Xin chọn ngày giám sát'
			),
            'date' => array(
                'rule' => array('date', 'dmy'),
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ngày giám sát sai định dạng'
            )
        ),
        'ngay_nhap' => array(
            'date' => array(
                'rule' => array('date', 'dmy'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Ngày nhập sai định dạng'
            )
        )
	);
	public function beforeSave($options=array()) {
		if (isset($this->data['KetQuaGiamSatDinhKyDoRung']['ngay_giam_sat']) && $this->data['KetQuaGiamSatDinhKyDoRung']['ngay_giam_sat']) {
			$this->data['KetQuaGiamSatDinhKyDoRung']['ngay_giam_sat'] = str_replace('-', '/', $this->data['KetQuaGiamSatDinhKyDoRung']['ngay_giam_sat']);
			$date = date_create_from_format('d/m/Y', $this->data['KetQuaGiamSatDinhKyDoRung']['ngay_giam_sat']);
			$this->data['KetQuaGiamSatDinhKyDoRung']['ngay_giam_sat'] = $date->format('Y-m-d');
		}
		if (isset($this->data['KetQuaGiamSatDinhKyDoRung']['ngay_nhap']) && $this->data['KetQuaGiamSatDinhKyDoRung']['ngay_nhap']) {
			$this->data['KetQuaGiamSatDinhKyDoRung']['ngay_nhap'] = str_replace('-', '/', $this->data['KetQuaGiamSatDinhKyDoRung']['ngay_nhap']);
			$date = date_create_from_format('d/m/Y', $this->data['KetQuaGiamSatDinhKyDoRung']['ngay_nhap']);
			$this->data['KetQuaGiamSatDinhKyDoRung']['ngay_nhap'] = $date->format('Y-m-d');
		}
	}
}

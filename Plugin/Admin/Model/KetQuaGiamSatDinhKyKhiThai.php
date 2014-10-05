<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * Tisemiz KetQuaGiamSatDinhKyKhiThai
 * @author cahs<huynhsonca@gmail.com>
 */
class KetQuaGiamSatDinhKyKhiThai extends AdminAppModel {

    public $useTable = 'ket_qua_giam_sat_dinh_ky_khi_thai';
    public $validate = array(
        'chi_tieu'=>array(
             'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Xin nhập chỉ tiêu đo đạc'
            )
        ),
        'gia_tri_trung_binh' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Xin nhập giá trị trung bình'
            ),
            'numberic' => array(
                'rule' => 'numeric',
                'message' => 'Giá trị trung bình phải là số'
            )
        ),
        'gia_tri_can_tren'=>array(
            'numeric'=>array(
                'rule'=>'numeric',
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Giá trị cận trên phải là số'
            )
        ),
        'gia_tri_can_duoi'=>array(
            'numeric'=>array(
                'rule'=>'numeric',
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Giá trị cận dưới phải là số'
            )
        )
    );

}

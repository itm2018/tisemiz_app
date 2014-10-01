<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * Tisemiz ViTriDo
 * @author cahs<huynhsonca@gmail.com>
 */
class ViTriDo extends AdminAppModel {

    public $useTable = 'vi_tri_do';
    public $validate = array(
        'ngay_giam_sat' => array(
            'date' => array(
                'rule' => array('date', 'dmy'),
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Xin chọn ngày giám sát'
            )
        ),
        'ngay_nhap' => array(
            'date' => array(
                'rule' => array('date', 'dmy'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Xin chọn ngày nhập'
            )
        )
    );

    public function beforeSave() {
        if (isset($this->data['ViTriDo']['ngay_giam_sat']) && $this->data['ViTriDo']['ngay_giam_sat']) {
            $this->data['ViTriDo']['ngay_giam_sat'] = str_replace('-', '/', $this->data['ViTriDo']['ngay_giam_sat']);
            $date = date_create_from_format('d/m/Y', $this->data['ViTriDo']['ngay_giam_sat']);
            $this->data['ViTriDo']['ngay_giam_sat'] = $date->format('Y-m-d');
        }
         if (isset($this->data['ViTriDo']['ngay_nhap']) && $this->data['ViTriDo']['ngay_nhap']) {
            $this->data['ViTriDo']['ngay_nhap'] = str_replace('-', '/', $this->data['ViTriDo']['ngay_nhap']);
            $date = date_create_from_format('d/m/Y', $this->data['ViTriDo']['ngay_nhap']);
            $this->data['ViTriDo']['ngay_nhap'] = $date->format('Y-m-d');
        }
    }

}

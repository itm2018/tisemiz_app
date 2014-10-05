<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AdminAppModel', 'Admin.Model');

/**
 * CakePHP Vanbanphapquy
 * @author Administrator
 */
class Vanbanphapquy extends AdminAppModel {

    public $useTable = 'vanbanphapquy';

    public $validate = array(
        'kyhieu' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ký hiệu văn bản là bắt buộc'
            )
        ),
        'tenvanban' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Tên văn bản là bắt buộc'
            )
        ),
        'tenfile' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Chưa chọn file văn bản'
            )
        ),
        'id_loai' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Chưa chọn loại văn bản'
            )
        ),
        'id_linhvuc' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Chưa chọn lĩnh vực văn bản'
            )
        ),
        'ngayky' => array(
            'notEmpty' => array(
                'rule' => array('date', 'dmy'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Ngày ký'
            )
        ),
        'ngaybanhanh' => array(
            'notEmpty' => array(
                'rule' => array('date', 'dmy'),
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ngày ban hành là bắt buộc'
            )
        ),
        'ngayhieuluc' => array(
            'notEmpty' => array(
                'rule' => array('date', 'dmy'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Ngày hiệu lực'
            )
        ),
        'ngayhethieuluc' => array(
            'notEmpty' => array(
                'rule' => array('date', 'dmy'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Ngày hết hiệu lực'
            )
        ),
    );
    public $belongsTo = array(
        'Loaivanban' => array(
            'className' => 'Admin.Loaivanban',
            'foreignKey' => 'id_loai',
        ),
        'Linhvucvanban' => array(
            'className' => 'Admin.Linhvucvanban',
            'foreignKey' => 'id_linhvuc',
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data['Vanbanphapquy']['ngayky']) && $this->data['Vanbanphapquy']['ngayky']) {
            $date = date_create_from_format('d/m/Y', $this->data['Vanbanphapquy']['ngayky']);
            $this->data['Vanbanphapquy']['ngayky'] = $date->format('Y-m-d');
        }
        if (isset($this->data['Vanbanphapquy']['ngaybanhanh']) && $this->data['Vanbanphapquy']['ngaybanhanh']) {
            $date = date_create_from_format('d/m/Y', $this->data['Vanbanphapquy']['ngaybanhanh']);
            $this->data['Vanbanphapquy']['ngaybanhanh'] = $date->format('Y-m-d');
        }
        if (isset($this->data['Vanbanphapquy']['ngayhieuluc']) && $this->data['Vanbanphapquy']['ngayhieuluc']) {
            $date = date_create_from_format('d/m/Y', $this->data['Vanbanphapquy']['ngayhieuluc']);
            $this->data['Vanbanphapquy']['ngayhieuluc'] = $date->format('Y-m-d');
        }
        if (isset($this->data['Vanbanphapquy']['ngayhethieuluc']) && $this->data['Vanbanphapquy']['ngayhethieuluc']) {
            $date = date_create_from_format('d/m/Y', $this->data['Vanbanphapquy']['ngayhethieuluc']);
            $this->data['Vanbanphapquy']['ngayhethieuluc'] = $date->format('Y-m-d');
        }
        parent::beforeSave($options);
    }

    public function afterFind($results, $primary = false) {
       
        foreach ($results as $key => $result) {
            if (isset($result['Vanbanphapquy']['ngayky'])) {
                $date = date_create_from_format('Y-m-d H:m:s', $result['Vanbanphapquy']['ngayky']);
                $results[$key]['Vanbanphapquy']['ngayky'] = $date->format('d/m/Y');
            }
            if (isset($result['Vanbanphapquy']['ngaybanhanh'])) {
                $date = date_create_from_format('Y-m-d H:m:s', $result['Vanbanphapquy']['ngaybanhanh']);
                $results[$key]['Vanbanphapquy']['ngaybanhanh'] = $date->format('d/m/Y');
            }
            if (isset($result['Vanbanphapquy']['ngayhieuluc'])) {
                $date = date_create_from_format('Y-m-d H:m:s', $result['Vanbanphapquy']['ngayhieuluc']);
                $results[$key]['Vanbanphapquy']['ngayhieuluc'] = $date->format('d/m/Y');
            }
            if (isset($result['Vanbanphapquy']['ngayhethieuluc'])) {
                $date = date_create_from_format('Y-m-d H:m:s', $result['Vanbanphapquy']['ngayhethieuluc']);
                $results[$key]['Vanbanphapquy']['ngayhethieuluc'] = $date->format('d/m/Y');
            }
        }
        return  $results;
    }
}

<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Search
 *
 * @author Administrator
 */
App::uses('AdminAppModel', 'Admin.Model');

class Search extends AdminAppModel {

    public $useTable = false;
    public $useDbConfig = false;
    public $validate=array(
        'startDate' => array(
            'nonEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ngày bắt đầu là bắt buộc'
            ),
            'isdate' => array(
                'rule' => array('date', 'dmy'),
                'message' => 'Ngày bắt đầu sai định dạng'
            )
        ),
        'endDate' => array(
            'nonEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ngày kết thúc là bắt buộc'
            ),
            'isdate' => array(
                'rule' => array('date', 'dmy'),
                'message' => 'Ngày kết thúc sai định dạng'
            ),
            'greater' => array(
                'rule' => array('greater'),
                'message' => 'Ngày kết thúc phải lớn hơn ngày bắt đầu'
            )
        ),
    );
    /**
     * kiem tra ngay ket thuc lon hon ngay bat dau
     * @param type $check
     * @return type
     */
    public function greater($check) {
        $parsed = array_values($check);
        $value = $parsed[0];
        $denngay = date_create_from_format('d/m/Y', $value);
        $tungay = date_create_from_format('d/m/Y', $this->data['Search']['startDate']);
        return $denngay>$tungay;
    }
}

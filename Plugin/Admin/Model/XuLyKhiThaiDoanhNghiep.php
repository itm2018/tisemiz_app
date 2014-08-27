<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * XuLyKhiThaiDoanhNghiep Model
 *
 */
class XuLyKhiThaiDoanhNghiep extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'xu_ly_khi_thai_doanh_nghiep';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    public $belongsTo = array(
        'NguonThaiKhiThai' => array(
            'className' => 'Admin.NguonThaiKhiThai',
            'foreignKey' => 'colMaNguonThai'
        )
    );
    public $validate = array(
    );

    public function beforeSave($options = array()) {
        if (isset($this->data['XuLyKhiThaiDoanhNghiep']['colThoiGian']) && $this->data['XuLyKhiThaiDoanhNghiep']['colThoiGian']) {
            $thoigian = date_create_from_format('d/m/Y', $this->data['XuLyKhiThaiDoanhNghiep']['colThoiGian']);
            $this->data['XuLyKhiThaiDoanhNghiep']['colThoiGian'] = $thoigian->format('Y-m-d');
        }
        parent::beforeSave($options);
    }
}

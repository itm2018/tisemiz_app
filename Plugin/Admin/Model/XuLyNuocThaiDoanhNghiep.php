<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * XuLyNuocThaiDoanhNghiep Model
 *
 */
class XuLyNuocThaiDoanhNghiep extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'xu_ly_nuoc_thai_doanh_nghiep';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    public $belongsTo = array(
        'BienPhapXuLyNuocThai' => array(
            'className' => 'Admin.BienPhapXuLyNuocThai',
            'foreignKey' => 'colBPhapXL'
        )
    );
    public $validate = array(
    );

    public function beforeSave($options = array()) {
        if (isset($this->data['XuLyNuocThaiDoanhNghiep']['colThoiGian']) && $this->data['XuLyNuocThaiDoanhNghiep']['colThoiGian']) {
            $thoigian = date_create_from_format('d/m/Y', $this->data['XuLyNuocThaiDoanhNghiep']['colThoiGian']);
            $this->data['XuLyNuocThaiDoanhNghiep']['colThoiGian'] = $thoigian->format('Y-m-d');
        }
        parent::beforeSave($options);
    }
}

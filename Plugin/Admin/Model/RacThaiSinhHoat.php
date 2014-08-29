<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * RacThaiSinhHoat Model
 *
 */
class RacThaiSinhHoat extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'rac_thai_sinh_hoat';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    public $validate = array(
    );

    public function beforeSave($options = array()) {
        if (isset($this->data['RacThaiSinhHoat']['colThoiGian']) && $this->data['RacThaiSinhHoat']['colThoiGian']) {
            $thoigian = date_create_from_format('d/m/Y', $this->data['RacThaiSinhHoat']['colThoiGian']);
            $this->data['RacThaiSinhHoat']['colThoiGian'] = $thoigian->format('Y-m-d');
        }
        parent::beforeSave($options);
    }

}

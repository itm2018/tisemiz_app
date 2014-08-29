<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * XuLyTiengOnRung Model
 *
 */
class XuLyTiengOnRung extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'xu_ly_tieng_on_rung';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    public $belongsTo = array(
        'NguonGayOnRung' => array(
            'className' => 'Admin.NguonGayOnRung',
            'foreignKey' => 'colNguonGayOn'
        )
    );
    public $validate = array(
    );

    public function beforeSave($options = array()) {
        if (isset($this->data['XuLyTiengOnRung']['colThoiGian']) && $this->data['XuLyTiengOnRung']['colThoiGian']) {
            $thoigian = date_create_from_format('d/m/Y', $this->data['XuLyTiengOnRung']['colThoiGian']);
            $this->data['XuLyTiengOnRung']['colThoiGian'] = $thoigian->format('Y-m-d');
        }
        parent::beforeSave($options);
    }

}

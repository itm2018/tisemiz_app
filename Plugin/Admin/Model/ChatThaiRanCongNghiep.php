<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * ChatThaiRanCongNghiep Model
 *
 */
class ChatThaiRanCongNghiep extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'chat_thai_ran_cong_nghiep';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';
    public $validate = array(
    );

    public function beforeSave($options = array()) {
        if (isset($this->data['ChatThaiRanCongNghiep']['colThoiGian']) && $this->data['ChatThaiRanCongNghiep']['colThoiGian']) {
            $thoigian = date_create_from_format('d/m/Y', $this->data['ChatThaiRanCongNghiep']['colThoiGian']);
            $this->data['ChatThaiRanCongNghiep']['colThoiGian'] = $thoigian->format('Y-m-d');
        }
        parent::beforeSave($options);
    }

}

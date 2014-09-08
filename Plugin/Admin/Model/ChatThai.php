<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * CakePHP ChatThai
 * @author cahs
 */
class ChatThai extends AdminAppModel {

    public $useTable = 'chat_thai';
    public $name = 'ChatThai';
    public $belongsTo = array(
        'NguonThai' => array(
            'className' => 'Admin.NguonThai',
            'foreignKey' => 'id_nguonthai'
        )
    );
    public $validate = array(
        'ma_chatthai' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Tên danh mục là bắt buộc'
            )
        ),
        'ten_chatthai' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Tên danh mục là bắt buộc'
            )
        )
    );

}

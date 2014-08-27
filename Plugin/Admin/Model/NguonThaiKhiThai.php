<?php
App::uses('AdminAppModel', 'Admin.Model');
/**
 * NguonThaiKhiThai Model
 *
 */
class NguonThaiKhiThai extends AdminAppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'nguon_thai_khi_thai';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'colMa';

        public $hasMany=array(
            'XuLyKhiThaiDoanhNghiep'=>array(
                'className'=>'Admin.XuLyKhiThaiDoanhNghiep',
                'foreignKey'=>'colMaNguonThai'
            )
        );
}

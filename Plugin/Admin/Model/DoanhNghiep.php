<?php
App::uses('AdminAppModel', 'Admin.Model');
/**
 * DoanhNghiep Model
 *
 */
class DoanhNghiep extends AdminAppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'doanh_nghiep';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'colMa';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'colMaNganh6' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}

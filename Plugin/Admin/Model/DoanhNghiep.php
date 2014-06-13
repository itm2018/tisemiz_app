<?php
App::uses('AdminAppModel', 'Admin.Model');
/**
 * DoanhNghiep Model
 *
 */
class DoanhNghiep extends AdminAppModel
{

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

		'nam'          => array(
			'rule'       => array('numeric'),
			'required'   => true,
			'allowEmpty' => false,
			'message'    => 'This field required a number'
		),
		'colTen'       => array(
			'rule'       => array('notEmpty'),
			'required'   => true,
			'allowEmpty' => false,
			'message'    => 'Please enter enterprise\'s name'
		),
		'colDiaChi'    => array(
			'rule'       => array('notEmpty'),
			'required'   => true,
			'allowEmpty' => false,
			'message'    => 'Please enter enterprise\'s address'
		),
		'colDienThoai' => array(
			'notEmpty' => array(
				'rule'       => array('notEmpty'),
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'Please enter a phone number'
			),
			'tel'      => array(
				'rule'    => '/^\(?\d{2,4}\)?\-?\d{3,5}\-?\d{3,5}+$/',
				'message' => 'Phone number is invalid'
			)
		),
		'colFax'       => array(
			'allowEmpty' => array(
				'rule'       => array('notEmpty'),
				'required'   => true,
				'allowEmpty' => true,
				'message'    => 'Please enter a fax number'
			),
			'tel'        => array(
				'rule'    => '/^\(?\d{2,4}\)?\-?\d{3,5}\-?\d{3,5}+$/',
				'message' => 'Fax number is invalid'
			)

		),
		'colEmail'     => array(
			'notEmpty' => array(
				'rule'       => array('notEmpty'),
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'Please enter email'
			),
			'email'    => array(
				'rule'       => array('email'),
				'message'    => 'Email is invalid'
			)
		),
		'colNamHopDong'=>array(
			'date'=>array(
				'rule'=>array('date','dmy'),
				'required'=>true,
				'allowEmpty'=>true,
				'message'=>'Date is invalid'
			),
		)
	);
	public function beforeSave($options=array()){
		if(!empty($this->data['DoanhNghiep']['colNamHopDong'])){
			$date=explode('/',$this->data['DoanhNghiep']['colNamHopDong']);
			if(empty($date)){
				$date=explode('-',$this->data['DoanhNghiep']['colNamHopDong']);
			}
			$this->data['DoanhNghiep']['colNamHopDong']=date('Y-m-d',strtotime($date[1].'/'.$date[0].'/'
																				   .$date[2]));
		}
	}
}

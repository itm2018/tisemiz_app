<?php
/**
 * User: cahs
 * Date: 6/5/14
 * Time: 2:34 PM
 */
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel
{
	public $name = 'User';
	public $useTable = 'user';
//	public $actsAs=array('Acl'=>array('type'=>'Requester'));

	public function beforeSave($options = array())
	{

		if (!empty($this->data[$this->alias]['password'])) {
			$passwordHasher                       = new SimplePasswordHasher(array('hashType' => 'sha256'));
			$this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
		}
		if (!empty($this->data[$this->alias]['password_update'])) {
			$passwordHasher                       = new SimplePasswordHasher(array('hashType' => 'sha256'));
			$this->data[$this->alias]['password'] = $passwordHasher->hash
				(                                                  $this->data[$this->alias]['password_update']);
		}
		return parent::beforeSave($options);
	}

	public $validate = array(
		'username'                => array(
			'notEmpty'                   => array(
				'rule'       => array('notEmpty'),
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'A user name is required'
			),
			'between'                    => array(
				'rule'     => array('between', 5, 20),
				'required' => true,
				'message'  => 'Username must be between 5 to 20 characters'
			),
			'unique'                     => array(
				'rule'    => 'isUnique',
				'message' => 'A user with this username had been registered in the system'
			),
			'alphaNumericDashUnderscore' => array(
				'rule'    => '/^[a-zA-Z0-9_\-]+$/',
				'message' => 'Username can only be letters, numbers and underscores'
			),
		),
		'email'                   => array(
			'notEmpty' => array(
				'rule'       => 'email',
				'required'   => true,
				'allowEmpty' => false,
				'message'    => 'This is not a valid email address'
			),
			'unique'   => array(
				'rule'    => 'isUnique',
				'message' => 'A user with this email had been registered in the system'
			)
		),
		'password'                => array(
			'strength' => array(
				'rule'    => '/(?=^.{6,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/',
				'message' => 'Password must be at least 6 digits, contains at least 1 non-alphabet character, at least 1 uppercase letter and  at least 1 number'
			)
		),
		'confirm_password'        => array(
			'equal' => array(
				'rule'    => array('checkEqualPassword'),
				'message' => 'Please confirm exactly your password'
			)
		),
		'password_update'         => array(
			'strength' => array(
				'rule'    => '/(?=^.{6,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/',
				'message' => 'Password must be at least 6 digits, contains at least 1 non-alphabet character, at least 1 uppercase letter and  at least 1 number'
			)
		),
		'confirm_password_update' => array(
			'equal' => array(
				'rule'    => array('checkEqualPasswordUpdate'),
				'message' => 'Please confirm exactly your password'
			)
		),
	);

	public function checkEqualPassword($check)
	{
		$value = array_values($check);
		$value = $value[0];
		return ($value == $this->data[$this->alias]['password']);
	}

	public function checkEqualPasswordUpdate($check)
	{
		$value = array_values($check);
		$value = $value[0];
		return ($value == $this->data[$this->alias]['password_update']);
	}
	public function matchCurrentPass($check){
		$value=array_values($check);
		$value=$value[0];
		$passwordHasher                       = new SimplePasswordHasher(array('hashType' => 'sha256'));
		$hash=$passwordHasher->hash($value);
		return ($hash==$this->data[$this->alias]['current_hash_password']);
	}

	public function parentNode()
	{
		if (!$this->id && empty($this->data)) {
			return null;
		}
		if (isset($this->data['User']['role_id'])) {
			$role_id = $this->data['User']['role_id'];
		} else {
			$role_id = $this->field('role_id');
		}
		if(!$role_id){
			return null;
		}else{
			return array('Role'=>array('id'=>$role_id));
		}

	}
	public function UpdatePassword(){
		$passwordHasher                       = new SimplePasswordHasher(array('hashType' => 'sha256'));
		return $this->saveField('password',$passwordHasher->hash($this->data[$this->alias]['password_update']));
	}
}

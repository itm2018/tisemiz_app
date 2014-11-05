<?php
/**
 * Created by PhpStorm.
 * User: soncahuynh
 * Date: 03/11/2014
 * Time: 23:40
 */
App::uses('AdminAppController','Admin.Controller');
/**
 * Class UserController
 */
class UserController extends AdminAppController{

	public function changepassword(){
		$this->loadModel('User');
		if($this->request->is('post')){

			$data=$this->request->data;
			$data['User']['username']=$this->Auth->user('username');
			$data['User']['email']=$this->Auth->user('email');
			$data['User']['id']=$this->Auth->user('id');
			$this->User->validate=array(
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
					)
				),
				'password'                => array(
					'matchCurrentPass'=>array(
						'rule'=>array('matchCurrentPass'),
						'message'=>'Mật khẩu hiện tại không đúng'
					),
					'strength' => array(
						'rule'    => '/(?=^.{6,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/',
						'message' => 'Password must be at least 6 digits, contains at least 1 non-alphabet character, at least 1 uppercase letter and  at least 1 number'
					)
				),
				'password_update'         => array(
					'notEmpty'                   => array(
						'rule'       => array('notEmpty'),
						'required'   => true,
						'allowEmpty' => false,
						'message'    => 'Mật khẩu mới là bắt buộc nhập'
					),
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
			//find current login user in database to determine the password
			$logged_user=$this->User->findByEmail($data['User']['email']);
			if(!empty($logged_user)){
				$data['User']['current_hash_password']=$logged_user['User']['password'];
			}
			$this->User->set($data['User']);
			if($this->User->validates()){
				try{
					$this->User->saveField('password',$data['User']['password_update']);

				}catch (Exception $e){

				}
				$this->Session->setFlash('Đổi mật khẩu thành công','default',array('class'=>'success'));
				$this->redirect($this->request->here) ;
			}
		}
	}
}
<?php

/**
 * User: cahs
 * Date: 6/5/14
 * Time: 2:03 PM
 */
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'NetWork/Email');
App::uses('Validation', 'Utility');
//App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class UsersController extends AppController {

    public function login() {
        if ($this->Session->check('Auth.User')) {
            $this->Session->setFlash(__('You are logged in'), 'default', array('class' => 'message warning'));
            return $this->redirect($this->Auth->redirectUrl());
        }
        if ($this->request->is('post')) {

            if (isset($this->request->data['User']['username']) &&
                    Validation::email($this->request->data['User']['username'])
            ) {
                $email = $this->request->data['User']['username'];
                $user = $this->User->find('first', array('conditions' => array('User.email' => $email)));
                if ($user && !empty($this->request->data['User']['password']) && $user['User']['status']) {
                    $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
                    $password = $passwordHasher->hash($this->request->data['User']['password']);
                    if ($password == $user['User']['password']) {
                        $this->Auth->login($user['User']);
                    }
                }
            } else {
                $user = $this->User->find('first', array('conditions' => array('User.username' => $this->request->data['User']['username'])));
            }
            if ($this->Auth->login()) {
                $this->redirect($this->Auth->redirectUrl());
            } else {
                if ($user && !$user['User']['status']) {
                    $this->Session->setFlash(__('Account has not been activated. Please activate your account first or contact with administrator for supporting'));
                } else {
                    $this->Session->setFlash(__('Username or password is incorrect'));
                }
            }
        }
    }

    public function logout() {
		$this->Session->destroy();
        return $this->redirect($this->Auth->logout());
    }

    public function register() {
        if ($this->request->is('post')) {
            $this->loadModel('User');
            $this->User->set($this->request->data['User']);
            if ($this->User->validates()) {
                try {
                    $user = $this->User->save();
                    if ($user) {
                        $this->Session->setFlash('Tài khoản đã được đăng ký, xin chờ quản trị xác nhận', 'default', array('class' => 'message success'));
                        $this->redirect(array('controller' => 'users', 'action' => 'success'));
                    }
                } catch (Exception $ex) {
//                    pr($ex->getMessage());
                    $this->Session->setFlash('Có lỗi xảy ra xin vui lòng thử lại');
                }
            }
        }
    }

    public function success() {

    }
	public function resetpass(){
		if($this->request->is('post')){
			if($this->request->data('reset-password-email')){
				$email=$this->request->data('reset-password-email');
				//find in users table
				$this->loadModel('User');
				$user=$this->User->findByEmail($email);

				$error='';
				if(!empty($user)){
					//send mail with verifying code
					$verify_code=uniqid(str_shuffle('abcdefghijklmnopqstuvwxyzABCDEFGHIJKLMNOPQSTUVWXYZ0123456789'));
					$user['User']['verify_code']=$verify_code;
					//if save verifying code success do sendmail

					$this->User->set($user);

//						try{

//					exit('123');
//						}catch (Exception $e){}
					if($this->User->saveField('verify_code',$verify_code)){
//						exit('1');
						$mailer=new CakeEmail('gmail');
						$link=Router::url('/',true).'users/verify?code='.$verify_code;
//						try{
							$vars=array('verify_link'=>$link);
							$mailer->template('verify',false)
								  ->viewVars($vars)
								  ->subject('Xác nhận khôi phục mật khẩu')
								  ->emailFormat('html')
								  ->to($email)
								  ->send();
//						} catch (Exception $ex) {

//						}
						$this->Session->setFlash('Xin kiểm tra mail và nhấn link xác nhận để đến bước kế tiếp',
												 'default',
												 array('class' => 'success'));
						$this->redirect('/users/sendsuccess');

					}else{
						$error='Lỗi lưu giữ liệu';
					}
				}else{
					$error='Email chưa được đăng ký';

				}
				$this->set('error',$error);
			}
		}
	}
	public function sendsuccess(){

	}
	public function verify(){
		if($this->request->query('code')){
			$code=$this->request->query('code');
			//find the code
			$this->loadModel('User');
			$user=$this->User->findByVerifyCode($code);
			if(!empty($user)){
				$this->set('allowed_reset_pass',true);
				if($this->request->is('post')){
//					$data['password_update']=$this->request->data('password_update');
//					$data['confirm_password_update']=$this->request->data('confirm_password_update');
					$this->User->validate=array(
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
						)
					);
					$this->User->set($this->request->data);
					if($this->User->validates()){
						$user['User']['password']=$this->request->data['User']['password_update'];
						$user['User']['verify_code']='';
						$this->User->set($user);
						$this->User->save();
//						$this->User->saveField('password',$this->request->data['User']['password_update']);
						$this->Session->setFlash('Đổi mật khẩu thành công','default',array('class'=>'success'));
							$this->redirect('/');
					}
				}
			}else{
				throw new NotFoundException();
			}

		}
	}

}

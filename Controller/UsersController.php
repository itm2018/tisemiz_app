<?php

/**
 * User: cahs
 * Date: 6/5/14
 * Time: 2:03 PM
 */
App::uses('AppController', 'Controller');
App::uses('Validation', 'Utility');

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
                    pr($ex->getMessage());
                    $this->Session->setFlash('Có lỗi xảy ra xin vui lòng thử lại');
                }
            }
        }
    }

    public function success() {
        
    }

}

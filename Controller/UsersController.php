<?php
/**
 * User: cahs
 * Date: 6/5/14
 * Time: 2:03 PM
 */
App::uses('AppController', 'Controller');

class UsersController extends AppController
{



    public function login()
    {
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Username or password is incorrect'));
            }
        }
    }
    public function logout() {
        return $this->redirect($this->Auth->logout());
    }
    public function register()
    {
        if ($this->request->is('post')) {
            $this->loadModel('User');
            $this->User->set($this->request->data['User']);
            if ($this->User->validates()) {
                try {
                    if($this->User->save($this->request->data['User'])){
                        $this->redirect(array('controller'=>'users','action'=>'success'));
                    }
                } catch (Exception $ex) {
                    echo $ex->getTraceAsString();
                }
            }
        }
    }
    public function success(){}
}
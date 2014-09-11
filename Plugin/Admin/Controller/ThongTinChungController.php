<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

App::uses('AdminAppController', 'Admin.Controller');
App::uses('Common', 'Admin.Lib');

/**
 * CakePHP ThongTinChungController
 * @author cahs <huynhsonca@gmail.com>
 */
class ThongTinChungController extends AdminAppController {

    public $layout = 'admin/backward';

    public function chatthai() {
        if ($this->request->is('post')) {
            if (isset($this->request->data['DanhMucChatThai']) && $this->request->data['DanhMucChatThai']) {
                $this->loadModel('Admin.DanhMucChatThai');
                $this->DanhMucChatThai->set($this->request->data['DanhMucChatThai']);
                if ($this->DanhMucChatThai->validates()) {
                    $dm = $this->DanhMucChatThai->save();
                    if ($dm) {
                        $this->request->data = $dm;
                        $this->Session->setFlash('Lưu danh mục chất thải thành công', 'default', array('class' => 'success'));
                        exit;
//                        $this->redirect($this->here);
                    }
                }
                $this->Session->setFlash('Lỗi trong quá trình lưu danh mục chất thải');
            } elseif (isset($this->request->data['NguonThai']) && $this->request->data['NguonThai']) {
                $this->loadModel('Admin.NguonThai');
                $this->NguonThai->set($this->request->data['NguonThai']);
                if ($this->NguonThai->validates()) {
                    if ($this->NguonThai->save()) {
                        $this->Session->setFlash('Lưu nguồn thải thành công', 'default', array('class' => 'success'));
                        $this->redirect($this->here);
                    }
                    $this->Session->setFlash('Lỗi trong quá trình lưu nguồn thải');
                }
            } elseif (isset($this->request->data['ChatThai']) && $this->request->data['ChatThai']) {
                $this->loadModel('Admin.ChatThai');
                $this->ChatThai->set($this->request->data['ChatThai']);
                if ($this->ChatThai->validates()) {
                    if ($this->ChatThai->save()) {
                        $this->Session->setFlash('Lưu chất thải thành công', 'default', array('class' => 'success'));
                        $this->redirect($this->here);
                    }
                }
                $this->Session->setFlash('Lỗi trong quá trình lưu chất thải');
            }
        }
    }

    /**
     * response ajax calling for adding basic items
     */
    public function additem() {
        $this->layout = false;
        $this->autoRender = false;
        if ($this->request->is('post') && $this->request->is('ajax')) {
            
        }
    }

}

<?php

App::uses('CakeEmail', 'Network/Email');
/**
 * Created by PhpStorm.
 * User: soncahuynh
 * Date: 10/06/2014
 * Time: 23:05
 */
App::uses('FrontAppController', 'Front.Controller');
App::uses('Common', 'Admin.Lib');

class NewsController extends FrontAppController {

    public $components = array('Paginator');

    public function view() {
        $this->loadModel('Admin.Vanbanphapquy');
        $this->Paginator->settings = array(
            'limit' => 30
        );
        $conditions = array();
        if (($this->request->query('id_loai'))) {
            $id_loai = $this->request->query('id_loai');
            if ($id_loai) {
                $conditions['id_loai'] = $id_loai;
            }
        }
        if (($this->request->query('kyhieu1'))) {
            $kyhieu1 = $this->request->query('kyhieu1');
            if ($kyhieu1) {
                $conditions['kyhieu LIKE'] = "%$kyhieu1%";
            }
        }
        if (($this->request->query('kyhieu'))) {
            $kyhieu = $this->request->query('kyhieu');
            if ($kyhieu) {
                $conditions['kyhieu LIKE'] = "%$kyhieu%";
            }
        }
        if (($this->request->query('id_linhvuc'))) {
            $id_linhvuc = $this->request->query('id_linhvuc');
            if ($id_linhvuc) {
                $conditions['id_linhvuc'] = $id_linhvuc;
            }
        }

        $data = $this->Paginator->paginate('Vanbanphapquy', $conditions);
        $this->set('data', $data);
        $this->request->data = $this->request->query;
    }

    public function chitiet($id) {
        if ($id && is_numeric($id)) {
            $this->loadModel('Admin.Vanbanphapquy');
            $vb = $this->Vanbanphapquy->findById($id);
            if ($vb) {
                $this->set('vanban', $vb);
            } else {
                $this->Session->setFlash('Văn bản không được tìm thấy');
                $this->redirect('/vanbanphapquy');
            }
        }
    }

    public function dodownload() {
        $this->layout = false;
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $type = $this->request->data['type'];
            $id = $this->request->data['id'];
            if ($type == 33) {
                //cap nhat so lan download van ban
                $this->loadModel('Admin.Vanbanphapquy');
                $vb = $this->Vanbanphapquy->findById($id);
                if ($vb) {
                    $vb['Vanbanphapquy']['solantai']+=1;
                    try {
                        $this->Vanbanphapquy->save($vb);
                    } catch (Exception $ex) {
                        
                    }
                }
            }
        }
    }

    public function lienhe() {
        if ($this->request->is('post')) {
            $data = $this->request->data['Contact'];
            $this->loadModel('Contact');
            $this->Contact->set($data);
            if ($this->Contact->validates()) {
                $saved = false;
                try {
                    $saved = $this->Contact->save();
                } catch (Exception $ex) {
                    
                }
                if ($saved) {
                    $email = new CakeEmail('gmail');
                    try{
                        $email->template('contact',false)
                            ->viewVars($data)
                            ->subject($data['tieude'])
                            ->emailFormat('html')
                            ->to('info.tisemiz@gmail.com')
                            ->send();
                    } catch (Exception $ex) {

                    }
                    $this->Session->setFlash('Gửi liên hệ thành công', 'default', array('class' => 'success'));
                    $this->redirect($this->here);
                }
            }
        }
    }

}

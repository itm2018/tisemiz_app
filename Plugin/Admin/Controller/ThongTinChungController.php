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
        if ($this->request->is('post') || $this->request->is('put')) {
            if (isset($this->request->data['DanhMucChatThai']) && $this->request->data['DanhMucChatThai']) {
                $this->loadModel('Admin.DanhMucChatThai');
                $this->DanhMucChatThai->set($this->request->data['DanhMucChatThai']);
                if ($this->DanhMucChatThai->validates()) {
                    $dm = null;
                    try {
                        $dm = $this->DanhMucChatThai->save();
                    } catch (Exception $ex) {
                        if ($ex->getCode() == 23000) {
                            $this->Session->setFlash("Lỗi: Mã danh mục chất thải đã tồn tại");
                        } else {
                            $this->Session->setFlash("Lỗi: " . $ex->getCode() . " : " . $ex->getMessage());
                        }
                    }
                    if ($dm) {
                        $this->Session->write('SavedDanhMucChatThai', $dm);
                        $this->Session->setFlash('Lưu danh mục chất thải thành công', 'default', array('class' => 'success'));
//                        die;
                        $this->redirect($this->here);
                    }
                }
            } elseif (isset($this->request->data['NguonThai']) && $this->request->data['NguonThai']) {
                $this->loadModel('Admin.NguonThai');
                $this->NguonThai->set($this->request->data['NguonThai']);
                if ($this->NguonThai->validates()) {
                    $nt = null;
                    try {
                        $nt = $this->NguonThai->save();
                    } catch (Exception $ex) {
                        if ($ex->getCode() == 23000) {
                            $this->Session->setFlash("Lỗi: Mã nguồn thải đã tồn tại");
                        } else {
                            $this->Session->setFlash("Lỗi: " . $ex->getCode() . " : " . $ex->getMessage());
                        }
                    }
                    if ($nt) {
                        $id_danhmuc = $nt["NguonThai"]["id_danhmucchatthai"];
                        $this->loadModel('Admin.DanhMucChatThai');
                        $dm = $this->DanhMucChatThai->findById($id_danhmuc);
                        $this->Session->write('SavedDanhMucChatThai', $dm);
                        $this->Session->write('SavedNguonThai', $nt);
                        $this->Session->setFlash('Lưu nguồn thải thành công', 'default', array('class' => 'success'));
                        $this->redirect($this->here);
                    }
                }
            } elseif (isset($this->request->data['ChatThai']) && $this->request->data['ChatThai']) {
                $this->loadModel('Admin.ChatThai');
                $this->ChatThai->set($this->request->data['ChatThai']);
                if ($this->ChatThai->validates()) {
                    $ct = null;
                    try {
                        $ct = $this->ChatThai->save();
                    } catch (Exception $ex) {
                        if ($ex->getCode() == 23000) {
                            $this->Session->setFlash("Lỗi: Mã chất thải đã tồn tại");
                        } else {
                            $this->Session->setFlash("Lỗi: " . $ex->getCode() . " : " . $ex->getMessage());
                        }
                    }
                    if ($ct) {
                        $id_nguonthai = $ct['ChatThai']['id_nguonthai'];
                        $this->loadModel('Admin.NguonThai');
                        $nt = $this->NguonThai->findById($id_nguonthai);
                        if ($nt) {
                            $this->Session->write('SavedNguonThai', $nt);
                            $dm["DanhMucChatThai"] = $nt["DanhMucChatThai"];
                            $this->Session->write('SavedDanhMucChatThai', $dm);
                        }
                        $this->Session->write('SavedChatThai', $ct);
                        $this->Session->setFlash('Lưu chất thải thành công', 'default', array('class' => 'success'));
                        $this->redirect($this->here);
                    }
                }
            }
        }
        $ct = $this->Session->read('SavedChatThai');
        $this->request->data["ChatThai"] = $ct["ChatThai"];
        $nt = $this->Session->read('SavedNguonThai');
        $this->request->data["NguonThai"] = $nt["NguonThai"];
        if ($nt) {
            $this->set('id_nguonthai', $nt["NguonThai"]["id"]);
        }
        $dm = $this->Session->read('SavedDanhMucChatThai');
        $this->request->data["DanhMucChatThai"] = $dm["DanhMucChatThai"];
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

    public function chinhsuavanbanphapquy($id) {
        $this->layout = false;
        $this->autoRender = false;
        if ($id && is_numeric($id)) {
            $this->loadModel('Admin.Vanbanphapquy');
            $vb = $this->Vanbanphapquy->findById($id);
            if ($vb) {
                $this->Session->write('CurrentUpdateVanbanphapquy', $vb);
                $this->redirect('/admin/thongtinchung/vanbanphapquy');
            }
        }
    }

    /**
     * cap nhat van ban
     */
    public function vanbanphapquy() {
        $currentupdate = $this->Session->read('CurrentUpdateVanbanphapquy');
        if ($currentupdate) {
            $this->request->data = $currentupdate;
            $this->Session->delete('CurrentUpdateVanbanphapquy');
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $this->loadModel('Admin.Vanbanphapquy');
            $updir = VANBAN_DIR;
            $vanban = $this->request->data['Vanbanphapquy'];
            $sended = $this->request->data;
            $this->request->data = $sended;
//            if ($this->request->is('post') && (!isset($vanban['tenfile']['name']) || !$vanban['tenfile']['name'])) {
//                $this->Session->setFlash('Xin hãy chọn file');
//                $this->redirect($this->here);
//            }
//            if ($vanban['tenfile']['name'] && file_exists($updir . $vanban['tenfile']['name'])) {
//                $this->Session->setFlash('File này đã tồn tại');
//                $this->redirect($this->here);
//            }
            $data = $vanban;
            if (isset($vanban['tenfile']['name']) && $vanban['tenfile']['name'] && move_uploaded_file($vanban['tenfile']['tmp_name'], $updir . $vanban['tenfile']['name'])) {
                $data['tenfile'] = $vanban['tenfile']['name'];
                $data['kichthuoc']=$vanban['tenfile']['size'];
            } else {
                $this->Vanbanphapquy->validate['tenfile'] = null;
                unset($data['tenfile']);
            }

            $this->Vanbanphapquy->set($data);
            if ($this->Vanbanphapquy->validates()) {
                $saved = $this->Vanbanphapquy->save();
                if ($saved) {
                    if ($saved['Vanbanphapquy']['ngayky']) {
                        $ngayky = date_create_from_format('Y-m-d', $saved['Vanbanphapquy']['ngayky']);
                        $saved['Vanbanphapquy']['ngayky'] = $ngayky->format('d/m/Y');
                    }
                    if ($saved['Vanbanphapquy']['ngaybanhanh']) {
                        $ngayky = date_create_from_format('Y-m-d', $saved['Vanbanphapquy']['ngaybanhanh']);
                        $saved['Vanbanphapquy']['ngaybanhanh'] = $ngayky->format('d/m/Y');
                    }
                    if ($saved['Vanbanphapquy']['ngayhieuluc']) {
                        $ngayky = date_create_from_format('Y-m-d', $saved['Vanbanphapquy']['ngayhieuluc']);
                        $saved['Vanbanphapquy']['ngayhieuluc'] = $ngayky->format('d/m/Y');
                    }
                    if ($saved['Vanbanphapquy']['ngayhethieuluc']) {
                        $ngayky = date_create_from_format('Y-m-d', $saved['Vanbanphapquy']['ngayhethieuluc']);
                        $saved['Vanbanphapquy']['ngayhethieuluc'] = $ngayky->format('d/m/Y');
                    }

                    $this->Session->setFlash('Lưu thành công', 'default', array('class' => 'success'));
                    $this->request->data = $saved;
                }
            }
        }
    }

    public function danhsachvanbanphapquy() {
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

}

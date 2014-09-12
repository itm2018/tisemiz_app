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

}

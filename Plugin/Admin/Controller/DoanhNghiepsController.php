<?php

App::uses('AdminAppController', 'Admin.Controller');
/**
 * DoanhNghieps Controller
 *
 */
App::uses('Common', 'Admin.Lib');

class DoanhNghiepsController extends AdminAppController {

//    var $components = array('Paginator');
	public $helpers = array('Paginator');

	/**
	 * Scaffold
	 *
	 * @var mixed
	 */
//	public $scaffold;
	public $layout = 'admin/backward';
	public $paginate = array(
		'limit' => 20,
	);

	public function beforeFiler() {
		parent::beforeFiler();
	}

	public function lietke() {
		if ($this->request->query('number') && is_numeric($this->request->query('number'))) {
			$this->paginate['limit'] = $this->request->query('number');
			$this->set('numberperpage', $this->request->query('number'));
		}
		$this->Paginator->settings = $this->paginate;
		$this->set('limit', $this->paginate['limit']);
		$data = $this->Paginator->paginate('DoanhNghiep');
		$this->set('data', $data);
	}

	private function _getLatestNotSavedEnterprise() {
		$user_id = $this->Auth->user('id');
		$this->loadModel('Admin.DoanhNghiep');
		$notsavedE = $this->DoanhNghiep->find('all', array(
			'conditions' => array('DoanhNghiep.user_id' => $user_id, 'DoanhNghiep.saving_status' => 0),
			'fields' => array('max(DoanhNghiep.colMa) as colMa', '*'),
			'group by' => 'DoanhNghiep.user_id',
			'order' => array('DoanhNghiep.user_id' => 'asc')
		));
		$nganh = array();
		for($i = 1; $i <= 6; ++$i) {
			if ($notsavedE[0]['DoanhNghiep']["colMaNganh$i"]) {
				$nganh[] = $notsavedE[0]['DoanhNghiep']["colMaNganh$i"];
			}
		}
		$notsavedE[0]['DoanhNghiep']['nganh'] = $nganh;
		return $notsavedE;
	}

	public function edit($id = null) {
		if ($id && is_numeric($id)) {
			$this->loadModel('Admin.DoanhNghiep');
			$editing_enterprise = $this->DoanhNghiep->findByColma($id);
			if ($editing_enterprise) {
				$this->Session->write('editing', 1);
				$this->Session->write('savingDoanhNghiep', $editing_enterprise);
				$this->redirect('/admin/doanhnghiep/themmoi');
			} else {
				$this->Session->setFlash('Doanh nghiệp không tồn tại');
				$this->redirect('/admin/doanhnghiep/lietke');
			}
		}
	}

	public function delete($id) {
		if ($this->request->is('post')) {
			if ($id && is_numeric($id)) {
				$this->loadModel('Admin.DoanhNghiep');
				$deleting = $this->DoanhNghiep->findByColma($id);
				if ($deleting) {
					if ($this->DoanhNghiep->deleteAll(array('DoanhNghiep.colMa' => $id), true)) {
						$this->Session->setFlash('Đã xóa thành công dữ liệu của doanh nghiệp', 'default', array('class' => 'success'));
						$this->redirect('/admin/doanhnghiep/lietke');
					} else {
						$this->Session->setFlash('Thất bại!!!Lỗi xảy ra trong quá trình xóa doanh nghiệp');
						$this->redirect('/admin/doanhnghiep/lietke');
					}
				} else {
					$this->Session->setFlash('Dữ liệu doanh nghiệp không tồn tại');
					$this->redirect('/admin/doanhnghiep/lietke');
				}
			}
		}
	}

	public function themmoi() {
		//load not saving enterprise
		$notesavedE = $this->_getLatestNotSavedEnterprise();
		$editing = $this->Session->read('editing');
		if ($notesavedE && !$editing) {
			unset($notesavedE[0][0]); //xoa du lieu max colMa
			$this->Session->write('savingDoanhNghiep', $notesavedE[0]);
		} else {
			$this->loadModel('Admin.DoanhNghiep');
			$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if (!empty($this->request->data['DoanhNghiep'])) {

				$path = ROOT . DIRECTORY_SEPARATOR . APP_DIR . DIRECTORY_SEPARATOR . WEBROOT_DIR . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;
				if (isset($this->request->data['DoanhNghiep']['colHinhAnh']['tmp_name']) && $this->request->data['DoanhNghiep']['colHinhAnh']['tmp_name'] && move_uploaded_file($this->request->data['DoanhNghiep']['colHinhAnh']['tmp_name'], $path . $this->request->data['DoanhNghiep']['colHinhAnh']['name'])) {
					$this->request->data['DoanhNghiep']['colHinhAnh'] = '/uploads/' . $this->request->data['DoanhNghiep']['colHinhAnh']['name'];
				} else {
					if (isset($savingDoanhNghiep['DoanhNghiep']['colHinhAnh']) && $savingDoanhNghiep['DoanhNghiep']['colHinhAnh']) {
						$this->request->data['DoanhNghiep']['colHinhAnh'] = $savingDoanhNghiep['DoanhNghiep']['colHinhAnh'];
					} else {
						unset($this->request->data['DoanhNghiep']['colHinhAnh']);
					}
				}
				$doanhnghiepdata = $this->request->data['DoanhNghiep'];
				if (isset($doanhnghiepdata['nganh']) && is_array($doanhnghiepdata['nganh']) && count($doanhnghiepdata['nganh'])) {
					$nganh = array_values($doanhnghiepdata['nganh']);
					foreach($nganh as $key => $value) {
						if (!is_numeric($value)) {
							unset($nganh[$key]);
						}
					}
					$i = 1;
					foreach($nganh as $nganh_id) {
						$key = 'colMaNganh' . $i;
						$doanhnghiepdata[$key] = $nganh_id;
						++$i;
					}
					//dat lai gia tri cac colMaNganh khac
					if ($i < 7) {
						for($j = $i; $j <= 6; $j++) {
							$key = 'colMaNganh' . $j;
							$doanhnghiepdata[$key] = '';
						}
					}
				}
				//gan colMa cua doanh nghiep neu dang dang ton tai trong session
				if (isset($savingDoanhNghiep['DoanhNghiep']['colMa']) && $savingDoanhNghiep['DoanhNghiep']['colMa']) {
					$doanhnghiepdata['colMa'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
				}
				//save user_id who is updating this enterprise
				$doanhnghiepdata['user_id'] = $this->Auth->user('id');
				$this->DoanhNghiep->set($doanhnghiepdata);
				if ($this->DoanhNghiep->validates()) {
					//luu moi hoac cap nhat thong tin doanh nghiep
					$dn = $this->DoanhNghiep->save();
					$nganh = $this->request->data['DoanhNghiep']['nganh'];
					$this->Session->write('nganh', $nganh);
					if ($dn) {
						$saving_dn = $this->DoanhNghiep->findByColma($dn['DoanhNghiep']['colMa']);
						$this->Session->write('savingDoanhNghiep', $saving_dn);
						$this->Session->setFlash(__('Lưu thành công thông tin doanh nghiệp'), 'default', array('class' => 'message success'));
						$this->redirect('/admin/doanhnghiep/themmoi/step2');
					}
				}
			}
		}
		$after_savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
//        pr($after_savingDoanhNghiep);
		if ($after_savingDoanhNghiep) {
			$after_savingDoanhNghiep['DoanhNghiep']['colNamHopDong'] = date('d/m/Y', strtotime($after_savingDoanhNghiep['DoanhNghiep']['colNamHopDong']));
			$after_savingDoanhNghiep['DoanhNghiep']['nganh'] = $this->Session->read('nganh');
			//gan data cho request de dien lai form
			$nganh = array();
			for($i = 1; $i <= 6; ++$i) {
				if ($after_savingDoanhNghiep['DoanhNghiep']["colMaNganh$i"]) {
					$nganh[] = $after_savingDoanhNghiep['DoanhNghiep']["colMaNganh$i"];
				}
			}
			$after_savingDoanhNghiep['DoanhNghiep']['nganh'] = $nganh;
			$this->request->data = $after_savingDoanhNghiep;
		}
	}

	public function step2Hoatdongsanxuat($tab = null) {
		if ($tab) {
			$this->set('tab', $tab);
		}
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if (!isset($savingDoanhNghiep['DoanhNghiep']) || count(array_unique(array_values($savingDoanhNghiep['DoanhNghiep']))) <= 1) {
			$this->Session->setFlash('Xin nhập thông tin doanh nghiệp');
			$this->redirect('/admin/doanhnghiep/themmoi');
		}
		if (($this->request->is('post') || $this->request->is('put')) && isset($this->request->data['HoatDongSanXuat'])) {
			$this->loadModel('Admin.HoatDongSanXuat');
			$data = $this->request->data['HoatDongSanXuat'];
			$data['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$data['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->HoatDongSanXuat->set($data);
			if ($this->HoatDongSanXuat->validates()) {
				//tim va xoa het nhung hoat dong san xuat da ton tai cua doanh nghiep
				$this->DoanhNghiep->HoatDongSanXuat->deleteAll(array('HoatDongSanXuat.colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa'], 'HoatDongSanXuat.colNam' => $savingDoanhNghiep['DoanhNghiep']['nam']));
				//luu xuong du lieu moi
				if ($this->HoatDongSanXuat->save()) {
					$saving_dn = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
					if ($saving_dn) {
						$this->Session->setFlash('Đã lưu hoạt động sản xuất của doanh nghiệp', 'default', array('class' => 'message success'));
						$this->Session->write('savingDoanhNghiep', $saving_dn);
					}
				}
			}
		}
		$listnhienlieu = $this->DoanhNghiep->NhienLieuDoanhNghiep->find('all', array('conditions' => array('ColCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('NhienLieuDoanhNghiep.created' => 'ASC')));
		$this->set('listnhienlieu', $listnhienlieu);
		$listnuocngam = $this->DoanhNghiep->NuocNgamDoanhNghiep->find('all', array('conditions' => array('ColCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('NuocNgamDoanhNghiep.created' => 'ASC')));
		$this->set('listnuocngam', $listnuocngam);
		$listdiennuoc = $this->DoanhNghiep->DienNuocDoanhNghiep->find('all', array('conditions' => array('ColCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('DienNuocDoanhNghiep.created' => 'ASC')));
		$this->set('listdiennuoc', $listdiennuoc);
		$listnguyenlieu = $this->DoanhNghiep->NguyenLieuSanPham->find('all', array('conditions' => array('ColCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('NguyenLieuSanPham.created' => 'ASC')));
		$classes = array('none', 'active', 'success', 'warning');
		$this->set('listnguyenlieu', $listnguyenlieu);
		$this->set('classes', $classes);
		$listsanpham = $this->DoanhNghiep->SanPhamDoanhNghiep->find('all', array('conditions' => array('ColCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('SanPhamDoanhNghiep.created' => 'ASC')));
		$this->set('listsanpham', $listsanpham);
		$after_savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if (isset($after_savingDoanhNghiep['HoatDongSanXuat']) && $after_savingDoanhNghiep['HoatDongSanXuat']) {
			$this->request->data['HoatDongSanXuat'] = $after_savingDoanhNghiep['HoatDongSanXuat'][count($after_savingDoanhNghiep['HoatDongSanXuat']) - 1];
		}
	}

	public function step3Xathai() {
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if (!isset($savingDoanhNghiep['DoanhNghiep']) || !$savingDoanhNghiep['DoanhNghiep']) {
			$this->Session->setFlash('Xin nhập thông tin doanh nghiệp');
			$this->redirect('/admin/doanhnghiep/themmoi');
		}
		$classes = array('none', 'active', 'success', 'warning');
		$this->set('classes', $classes);
		$listnuocthainhamay = $this->DoanhNghiep->NuocThaiNhaMay->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('NuocThaiNhaMay.created' => 'ASC')));
		$this->set('listnuocthainhamay', $listnuocthainhamay);
		$listbienphapxulynuocthai = $this->DoanhNghiep->XuLyNuocThaiDoanhNghiep->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('XuLyNuocThaiDoanhNghiep.created' => 'ASC')));
		$this->set('listbienphapxulynuocthai', $listbienphapxulynuocthai);
		$listbienphapxulykhithai = $this->DoanhNghiep->XuLyKhiThaiDoanhNghiep->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('XuLyKhiThaiDoanhNghiep.created' => 'ASC')));
		$this->set('listbienphapxulykhithai', $listbienphapxulykhithai);
		$listbienphapxulyonrung = $this->DoanhNghiep->XuLyTiengOnRung->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('XuLyTiengOnRung.created' => 'ASC')));
		$listbienphapxulyonrung = $this->DoanhNghiep->XuLyTiengOnRung->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('XuLyTiengOnRung.created' => 'ASC')));
		$this->set('listbienphapxulyonrung', $listbienphapxulyonrung);
		$listbienphapxulyracthaisinhhoat = $this->DoanhNghiep->RacThaiSinhHoat->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('RacThaiSinhHoat.created' => 'ASC')));
		$this->set('listbienphapxulyracthaisinhhoat', $listbienphapxulyracthaisinhhoat);
		$listbienphapxulychatthairancongnghiep = $this->DoanhNghiep->ChatThaiRanCongNghiep->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('ChatThaiRanCongNghiep.created' => 'ASC')));
		$this->set('listbienphapxulychatthairancongnghiep', $listbienphapxulychatthairancongnghiep);
		$listbienphapxulychatthainguyhai = $this->DoanhNghiep->ChatThaiNguyHai->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('ChatThaiNguyHai.created' => 'ASC')));
		$this->set('listbienphapxulychatthainguyhai', $listbienphapxulychatthainguyhai);
	}

	public function step4Hoatdongbaovemoitruong() {
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if (!isset($savingDoanhNghiep['DoanhNghiep']) || !$savingDoanhNghiep['DoanhNghiep']) {
			$this->Session->setFlash('Xin nhập thông tin doanh nghiệp');
			$this->redirect('/admin/doanhnghiep/themmoi');
		}
		$colMaDN = $savingDoanhNghiep['DoanhNghiep']['colMa'];
		$this->loadModel('Admin.ThongTinTuanThuBvmt');
		$this->loadModel('Admin.DoanhNghiepThongTinTuanThuBvmt');
		$list_tt_bvmt = $this->ThongTinTuanThuBvmt->find('all');
		$this->set('list_tt_bvmt', $list_tt_bvmt);
		$this->set('colMaDN', $colMaDN);

		if ($this->request->is('post')) {
			$data = $this->request->data['DoanhNghiepThongTinTuanThuBvmt'];
			$DoanhNghiepThongTinTuanThuBvmt = array();
			foreach($data['daco'] as $colMaTailieu) {
				$DoanhNghiepThongTinTuanThuBvmt[] = array(
					'colMaDN' => $colMaDN,
					'colMaTailieu' => $colMaTailieu
				);
			}
			//xoa het cac du lieu hien co trong bang lien quan den DN co ma $colMaDN neu co va them du lieu moi
			if ($this->DoanhNghiepThongTinTuanThuBvmt->deleteAll(array('colMaDN' => $colMaDN)) &&
				$this->DoanhNghiepThongTinTuanThuBvmt->saveAll($DoanhNghiepThongTinTuanThuBvmt)) {
				$this->Session->setFlash('Đã cập nhật thông tin tuân thủ bảo vệ môi trường của doanh nghiệp thành công', 'default', array('class' => 'success'));
			}
		}
		$dn_tt_tuanthu_bvmt = $this->DoanhNghiepThongTinTuanThuBvmt->find('list', array('conditions' => array('colMaDN' => $colMaDN), 'fields' => array('colMatailieu')));
		$this->set('list_checked', $dn_tt_tuanthu_bvmt);
	}

	public function step5Kiennghi() {
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if (!isset($savingDoanhNghiep['DoanhNghiep']) || !$savingDoanhNghiep['DoanhNghiep']) {
			$this->Session->setFlash('Xin nhập thông tin doanh nghiệp');
			$this->redirect('/admin/doanhnghiep/themmoi');
		}

		if ($this->request->is('post') || $this->request->is('put')) {
			$data = $this->request->data['DoanhNghiep'];
			$thongtinkiennghibvmt = $data['thongtinkiennghibvmt'];
//            $thongtinkiennghi['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$this->loadModel('Admin.DoanhNghiep');
			$this->DoanhNghiep->set($savingDoanhNghiep);
//            $this->DoanhNghiep->saveField('thongtinkiennghibvmt',$thongtinkiennghibvmt);
//            $this->ThongTinKienNghiBvmt->set($thongtinkiennghi);
//            $saved_thongtinkiennghi = $this->ThongTinKienNghiBvmt->save($thongtinkiennghi);
			if ($this->DoanhNghiep->saveField('thongtinkiennghibvmt', $thongtinkiennghibvmt)) {
//                $this->Session->write('savingKiennghi', $saved_thongtinkiennghi);
				$current_dn = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
				$this->Session->write('savingDoanhNghiep', $current_dn);
				$this->Session->setFlash('Đã lưu thông tin kiến nghị bảo vệ môi trường của doanh nghiệp', 'default', array('class' => 'success'));
			} else {
				$this->Session->setFlash('Có lỗi xảy ra trong quá trình lưu dữ liệu');
			}
			$this->redirect('/admin/doanhnghiep/themmoi/step5');
		}
//        $savingKiennghi = $this->Session->read('savingKiennghi');
		$aftersaveDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if ($aftersaveDoanhNghiep) {
			$this->request->data = $aftersaveDoanhNghiep;
			$this->set('done', true);
		}
	}

	public function step6Hoantat() {
		if ($this->request->is('post') || $this->request->is('put')) {
			$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
			if (!isset($savingDoanhNghiep['DoanhNghiep']) || !$savingDoanhNghiep['DoanhNghiep']) {
				$this->Session->setFlash('Xin nhập thông tin doanh nghiệp');
				$this->redirect('/admin/doanhnghiep/themmoi');
			}
			$this->loadModel('Admin.DoanhNghiep');
			$this->DoanhNghiep->set($savingDoanhNghiep['DoanhNghiep']);
			if ($this->DoanhNghiep->saveField('saving_status', 1)) {
				$this->Session->delete('savingDoanhNghiep');
				$this->Session->delete('editing');
				$this->Session->delete('savingKiennghi');
				$this->Session->setFlash('Đã hoàn tất quá trình cập nhật mới thông tin doanh nghiệp', 'default', array('class' => 'success'));
				$this->redirect('/admin/doanhnghiep/lietke');
			}
		} else {
			$this->Session->setFlash('Xin nhập thông tin doanh nghiệp');
			$this->redirect('/admin/doanhnghiep/themmoi');
		}
	}

	/**
	 * them vao danh sach san pham cua doanh nghiep
	 */
	public function themsanpham() {
		$this->layout = false;
		$this->autoRender = false;
		$this->autoLayout = false;
		if ($this->request->is('post')) {
			$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
			$data = $this->request->data['SanPhamDoanhNghiep'];
			$data['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$data['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->loadModel('Admin.SanPhamDoanhNghiep');
			$this->loadModel('Admin.DoanhNghiep');
			$this->SanPhamDoanhNghiep->set($data);
			if ($this->SanPhamDoanhNghiep->validates()) {
				$this->SanPhamDoanhNghiep->save();
				$this->loadModel('Admin.DoanhNghiep');
				$saving_dn = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
				$listsanpham = $this->DoanhNghiep->SanPhamDoanhNghiep->find('all', array('conditions' => array('ColCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('SanPhamDoanhNghiep.created' => 'ASC')));
				if ($saving_dn) {
					$this->Session->write('savingDoanhNghiep', $saving_dn);
					echo json_encode($listsanpham);
				}
			}
		}
	}

	/**
	 * them dien nuoc vao danh sach dien nuoc cua doanh nghiep
	 */
	public function themdiennuoc() {
		$this->layout = false;
		$this->autoRender = false;
		$this->autoLayout = false;
		if ($this->request->is('post')) {
			$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
			$data = $this->request->data['DienNuocDoanhNghiep'];
			$data['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$data['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->loadModel('Admin.DienNuocDoanhNghiep');
			$this->loadModel('Admin.DoanhNghiep');
			$this->DienNuocDoanhNghiep->set($data);
			if ($this->DienNuocDoanhNghiep->validates()) {
				$this->DienNuocDoanhNghiep->save();
				$this->loadModel('Admin.DoanhNghiep');
				$saving_dn = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
				$listdiennuoc = $this->DoanhNghiep->DienNuocDoanhNghiep->find('all', array('conditions' => array('ColCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('DienNuocDoanhNghiep.created' => 'ASC')));
				if ($saving_dn) {
					$this->Session->write('savingDoanhNghiep', $saving_dn);
					echo json_encode($listdiennuoc);
				}
			}
		}
	}

	/**
	 * cac chuc nang them sua xoa cac danh muc
	 */
	public function chucnang($type, $colMa = null) {
		$this->layout = 'popup_beautiful';
		$classes = array('none', 'active', 'success', 'warning');
		$this->set('classes', $classes);
		if ($type && is_numeric($type)) {
			if ($type == 1) {
				//luu thong tin danh muc san pham
				$this->loadModel('Admin.DanhmucSanPham');
				$list_dmsp = $this->DanhmucSanPham->find('all');
				$this->set('list_danhmucsanpham', $list_dmsp);
				$this->render('Admin.DoanhNghieps/_themdanhmuc');
				if ($this->request->is('post')) {
					$this->DanhmucSanPham->set($this->request->data['DanhmucSanPham']);
					if ($this->DanhmucSanPham->validates()) {
						if ($this->DanhmucSanPham->save()) {
							$this->Session->setFlash('Đã lưu thông tin danh mục', 'default', array('class' => 'success'));
							$this->redirect('/admin/doanhnghiep/chucnang/type/' . $type);
						}
					}
				}
			} elseif ($type == 2) {
				//luu thong tin san pham
				if ($this->request->is('post')) {
					$this->loadModel('Admin.Sanpham');
					$sp = $this->request->data['Sanpham'];
					$sp['create_by'] = $this->Auth->user('username');
					$this->Sanpham->set($sp);
					if ($this->Sanpham->validates()) {
						$sp = $this->Sanpham->save();
						if ($sp) {
							$this->Session->setFlash('Đã lưu sản phẩm: ' . $sp['Sanpham']['tensanpham'], 'default', array('class' => 'success'));
							$this->loadModel('Admin.DanhmucSanPham');
							$saving_danhmuc = $this->DanhmucSanPham->findById($sp['Sanpham']['danhmuc_id']);
							$this->set('savingdanhmuc', $saving_danhmuc);
						}
					}
				}
				$this->render('Admin.DoanhNghieps/_themsanpham');
			} elseif ($type == 3) {
				//luu thong tin nguyen lieu
				$this->loadModel('Admin.Nguyenlieu');
				$list_nguyenlieu = $this->Nguyenlieu->find('all');
				$this->set('listnguyenlieu', $list_nguyenlieu);
				$this->render('Admin.DoanhNghieps/_themnguyenlieu');
				if ($this->request->is('post')) {
					$nguyenlieu = $this->request->data['Nguyenlieu'];
					$this->Nguyenlieu->set($nguyenlieu);
					if ($this->Nguyenlieu->validates()) {
						if ($this->Nguyenlieu->save()) {
							$this->Session->setFlash('Đã lưu thông tin nguyên liệu: ' . $nguyenlieu['tennguyenlieu'], 'default', array('class' => 'success'));
							$this->redirect('/admin/doanhnghiep/chucnang/type/3');
						}
					}
				}
			} elseif ($type == 5) {
				//luu thong tin nguon phat sinh nuoc thai
				$this->loadModel('Admin.NguonThaiNuocThai');
				$list_nguonthaiNT = $this->NguonThaiNuocThai->find('all');
				$this->set('listnguonthaiNT', $list_nguonthaiNT);
				$this->render('Admin.DoanhNghieps/_themnguonthainuocthai');
				if ($this->request->is('post')) {
					$nguonthaiNT = $this->request->data['NguonThaiNuocThai'];
					$this->NguonThaiNuocThai->set($nguonthaiNT);
					if ($this->NguonThaiNuocThai->validates()) {
						if ($this->NguonThaiNuocThai->save()) {
							$this->Session->setFlash('Đã lưu thông tin nước thải: ' . $nguonthaiNT['colTenNguonThai'], 'default', array('class' => 'success'));
							$this->redirect('/admin/doanhnghiep/chucnang/type/5');
						}
					}
				}
			} elseif ($type == 10) {
				if ($this->request->is('post') || $this->request->is('put')) {
					$doanhnghiep = $this->request->data['DoanhNghiep'];
					if (!isset($doanhnghiep['colMaDNME']) || !$doanhnghiep['colMaDNME']) {
						$doanhnghiep['colMaDNME'] = $colMa;
					}
					$this->loadModel('Admin.DoanhNghiep');
					$validates = $this->DoanhNghiep->validate;
					unset($validates['nam']);
					unset($validates['colNamHopDong']);
					$this->DoanhNghiep->validate = $validates;
					$this->DoanhNghiep->set($doanhnghiep);
					if ($this->DoanhNghiep->validates()) {
						$saved_doanhnghiep = $this->DoanhNghiep->save();
						if ($saved_doanhnghiep) {
							$this->Session->setFlash('Lưu thành công', 'default', array('class' => 'success'));
							$this->Session->write('saved_doanhnghiep', $saved_doanhnghiep);
							$this->request->data = $saved_doanhnghiep;
//                            $this->render('Admin.Baocao/_themcoso');
							$this->redirect($this->here);
						}
					}
				}
				$current_doanhnghiep = $this->Session->read('saved_doanhnghiep');
				if (date_create_from_format('Y-m-d', $current_doanhnghiep['DoanhNghiep']['ngaycapchungnhanKDDT'])) {
					$current_doanhnghiep['DoanhNghiep']['ngaycapchungnhanKDDT'] = date('d/m/Y', strtotime($current_doanhnghiep['DoanhNghiep']['ngaycapchungnhanKDDT']));
				}
				$this->request->data = $current_doanhnghiep;
				$this->Session->delete('saved_doanhnghiep');
				$this->render('Admin.Baocao/_themcoso');
			} elseif ($type == 11) {
				if ($colMa && is_numeric($colMa)) {
					$this->loadModel('Admin.DoanhNghiep');
					$doanhnghiep = $this->DoanhNghiep->findByColma($colMa);
					if ($doanhnghiep) {
						if ($doanhnghiep['DoanhNghiep']['ngaycapchungnhanKDDT'] == '0000-00-00 00:00:00') {
							$doanhnghiep['DoanhNghiep']['ngaycapchungnhanKDDT'] = '';
						} elseif (date_create_from_format('Y-m-d H:i:s', $doanhnghiep['DoanhNghiep']['ngaycapchungnhanKDDT'])) {
							$doanhnghiep['DoanhNghiep']['ngaycapchungnhanKDDT'] = date('d/m/Y', strtotime($doanhnghiep['DoanhNghiep']['ngaycapchungnhanKDDT']));
						}
						$this->Session->write('saved_doanhnghiep', $doanhnghiep);
					} else {
						$this->Session->setFlash('Doanh nghiệp không tồn tại');
					}
					$this->redirect('/admin/doanhnghiep/chucnang/type/10/id_dn/' . $colMa);
				}
			}
		}
	}

	public function xoadanhmucs() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			if (isset($this->request->data['ids']) && count($this->request->data['ids'])) {
				$ids = array();
				foreach($this->request->data['ids'] as $id) {
					if (is_numeric($id)) {
						$ids[] = $id;
					}
				}
				$this->loadModel('Admin.DanhmucSanPham');
				try {
					$this->DanhmucSanPham->Sanpham->deleteAll(array('danhmuc_id' => $ids));
					$this->DanhmucSanPham->deleteAll(array('id' => $ids));
				} catch (Exception $ex) {
					
				}
			}
		}
	}

	public function xoasanphams() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			if (isset($this->request->data['ids']) && count($this->request->data['ids'])) {
				$ids = array();
				foreach($this->request->data['ids'] as $id) {
					if (is_numeric($id)) {
						$ids[] = $id;
					}
				}
				$this->loadModel('Admin.DanhmucSanPham');
				$this->DanhmucSanPham->Sanpham->deleteAll(array('Sanpham.id' => $ids));
			}
		}
	}

	public function xoanguonthainuocthais() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			if (isset($this->request->data['list_colMa']) && count($this->request->data['list_colMa'])) {
				$list_colMa = array();
				foreach($this->request->data['list_colMa'] as $colMa) {
					if (is_numeric($colMa)) {
						$list_colMa[] = $colMa;
					}
				}
				$this->loadModel('Admin.NguonThaiNuocThai');
				if ($this->NguonThaiNuocThai->NuocThaiNhaMay->deleteAll(array('NuocThaiNhaMay.colNguonThai' => $list_colMa)) &&
					$this->NguonThaiNuocThai->deleteAll(array('colMa' => $list_colMa))) {
					$this->Session->setFlash('Xóa dữ liệu thành công', 'default', array('class' => 'success'));
				}
			}
		}
	}

	public function xoadanhsachsanphamdoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.SanPhamDoanhNghiep');
			if ($this->SanPhamDoanhNghiep->deleteAll(array('colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa sản phẩm ra khỏi danh sách sản phẩm doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoadanhsachnguyenlieudoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.NguyenLieuSanPham');
			if ($this->NguyenLieuSanPham->deleteAll(array('colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa nguyên liệu ra khỏi danh sách nguyên liệu của doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoadanhsachdiennuocdoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.DienNuocDoanhNghiep');
			if ($this->DienNuocDoanhNghiep->deleteAll(array('colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa thông tin ra khỏi danh sách điện nước của doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoadanhsachnuocngamdoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.NuocNgamDoanhNghiep');
			if ($this->NuocNgamDoanhNghiep->deleteAll(array('colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa thông tin ra khỏi danh sách nước ngầm của doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoadanhsachnhienlieudoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.NhienLieuDoanhNghiep');
			if ($this->NhienLieuDoanhNghiep->deleteAll(array('colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa thông tin ra khỏi danh sách nhiên liệu của doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoadanhsachnuocthainhamay() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.NguonThaiNuocThai');
			if ($this->NguonThaiNuocThai->NuocThaiNhaMay->deleteAll(array('NuocThaiNhaMay.colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa thông tin ra khỏi danh sách nước thải của doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoadanhsachbienphapxulynuocthaidoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.BienPhapXuLyNuocThai');
			if ($this->BienPhapXuLyNuocThai->XuLyNuocThaiDoanhNghiep->deleteAll(array('XuLyNuocThaiDoanhNghiep.colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa thông tin ra khỏi danh sách biện pháp xử lý nước thải của doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoadanhsachbienphapxulykhithaidoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.NguonThaiKhiThai');
			if ($this->NguonThaiKhiThai->XuLyKhiThaiDoanhNghiep->deleteAll(array('XuLyKhiThaiDoanhNghiep.colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa thông tin ra khỏi danh sách biện pháp xử lý khí thải của doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoadanhsachbienphapxulyonrungdoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.NguonGayOnRung');
			if ($this->NguonGayOnRung->XuLyTiengOnRung->deleteAll(array('XuLyTiengOnRung.colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa thông tin ra khỏi danh sách biện pháp xử lý ồn rung của doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoadanhsachbienphapxulyracthaisinhhoat() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.RacThaiSinhHoat');
			if ($this->RacThaiSinhHoat->deleteAll(array('RacThaiSinhHoat.colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa thông tin ra khỏi danh sách biện pháp xử lý rác thải sinh hoạt của doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoadanhsachbienphapxulychatthaicongnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.ChatThaiRanCongNghiep');
			if ($this->ChatThaiRanCongNghiep->deleteAll(array('ChatThaiRanCongNghiep.colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa thông tin ra khỏi danh sách biện pháp xử lý chất thải rắn công nghiệp của doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoadanhsachbienphapxulychatthainguyhai() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$colMas = $this->request->data['listcolMa'];
			$this->loadModel('Admin.ChatThaiNguyHai');
			if ($this->ChatThaiNguyHai->deleteAll(array('ChatThaiNguyHai.colMa' => $colMas))) {
				$this->Session->setFlash('Đã xóa thông tin ra khỏi danh sách biện pháp xử lý chất thải nguy hại của doanh nghiệp', 'default', array('class' => 'success'));
			}
		}
	}

	public function xoanguyenlieus() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post')) {
			$ids = $this->request->data['ids'];
			$this->loadModel('Admin.Nguyenlieu');
			if ($this->Nguyenlieu->deleteAll(array('id' => $ids))) {
				$this->Session->setFlash('Đã xóa nguyên liệu', 'default', array('class' => 'success'));
			}
		}
	}

	/**
	 * them nguyen lieu doanh nghiep hien tai
	 */
	public function themnguyenlieudoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');

		if ($this->request->is('post')) {
			$nguyenlieu_doanhnghiep = $this->request->data['NguyenLieuSanPham'];
			$nguyenlieu_doanhnghiep['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$nguyenlieu_doanhnghiep['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->loadModel('Admin.NguyenLieuSanPham');
			$this->NguyenLieuSanPham->set($nguyenlieu_doanhnghiep);
			if ($this->NguyenLieuSanPham->validates()) {
				if ($this->NguyenLieuSanPham->save()) {
					$current_doanhnghiep = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
					$listnguyenlieu = $this->DoanhNghiep->NguyenLieuSanPham->find('all', array('conditions' => array('ColCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('NguyenLieuSanPham.created' => 'ASC')));
					if ($current_doanhnghiep) {
						$this->Session->write('savingDoanhNghiep', $current_doanhnghiep);
						echo json_encode($listnguyenlieu);
					}
				}
			}
		}
	}

	/**
	 * them nhien lieu vao doanh nghiep hien tai
	 */
	public function themnhienlieudoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');

		if ($this->request->is('post')) {
			$nhienlieu_doanhnghiep = $this->request->data['NhienLieuDoanhNghiep'];
			$nhienlieu_doanhnghiep['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$nhienlieu_doanhnghiep['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->loadModel('Admin.NhienLieuDoanhNghiep');
			$this->NhienLieuDoanhNghiep->set($nhienlieu_doanhnghiep);
			if ($this->NhienLieuDoanhNghiep->validates()) {
				if ($this->NhienLieuDoanhNghiep->save()) {
					$current_doanhnghiep = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
					$listnhienlieu = $this->DoanhNghiep->NhienLieuDoanhNghiep->find('all', array('conditions' => array('ColCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('NhienLieuDoanhNghiep.created' => 'ASC')));
					if ($current_doanhnghiep) {
						$this->Session->write('savingDoanhNghiep', $current_doanhnghiep);
						echo json_encode($listnhienlieu);
					}
				}
			}
		}
	}

	public function themnuocngamdoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');

		if ($this->request->is('post')) {
			$nuocngam_doanhnghiep = $this->request->data['NuocNgamDoanhNghiep'];

			$nuocngam_doanhnghiep['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$nuocngam_doanhnghiep['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];

			$this->loadModel('Admin.NuocNgamDoanhNghiep');
			$this->NuocNgamDoanhNghiep->set($nuocngam_doanhnghiep);
			if ($this->NuocNgamDoanhNghiep->validates()) {
				if ($this->NuocNgamDoanhNghiep->save()) {
					$current_doanhnghiep = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
					$listnuocngam = $this->DoanhNghiep->NuocNgamDoanhNghiep->find('all', array('conditions' => array('ColCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('NuocNgamDoanhNghiep.created' => 'ASC')));
					if ($current_doanhnghiep) {
						$this->Session->write('savingDoanhNghiep', $current_doanhnghiep);
						echo json_encode($listnuocngam);
					}
				}
			}
		}
	}

	public function themnuocthainhamay() {
		$this->layout = false;
		$this->autoRender = false;
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if ($this->request->is('post')) {
			$nuocthainhamay = $this->request->data['NuocThaiNhaMay'];
			$nuocthainhamay['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$nuocthainhamay['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->loadModel('Admin.NuocThaiNhaMay');
			$this->NuocThaiNhaMay->set($nuocthainhamay);
			if ($this->NuocThaiNhaMay->validates()) {
				if ($this->NuocThaiNhaMay->save()) {
					$current_doanhnghiep = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
					$listnuocthainhamay = $this->DoanhNghiep->NuocThaiNhaMay->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('NuocThaiNhaMay.created' => 'ASC')));
					if ($current_doanhnghiep) {
						$this->Session->write('savingDoanhNghiep', $current_doanhnghiep);
						echo json_encode($listnuocthainhamay);
					}
				}
			}
		}
	}

	public function thembienphapxulynuocthaidoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if ($this->request->is('post')) {
			$bienphapxulynuocthai = $this->request->data['XuLyNuocThaiDoanhNghiep'];
			$bienphapxulynuocthai['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$bienphapxulynuocthai['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->loadModel('Admin.XuLyNuocThaiDoanhNghiep');
			$this->loadModel('Admin.DoanhNghiep');
			$this->XuLyNuocThaiDoanhNghiep->set($bienphapxulynuocthai);
			if ($this->XuLyNuocThaiDoanhNghiep->validates()) {
				if ($this->XuLyNuocThaiDoanhNghiep->save()) {
					$current_doanhnghiep = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
					$listbienphapxulynuocthai = $this->DoanhNghiep->XuLyNuocThaiDoanhNghiep->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('XuLyNuocThaiDoanhNghiep.created' => 'ASC')));
					if ($current_doanhnghiep) {
						$this->Session->write('savingDoanhNghiep', $current_doanhnghiep);
						echo json_encode($listbienphapxulynuocthai);
					}
				}
			}
		}
	}

	public function thembienphapxulykhithaidoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if ($this->request->is('post')) {
			$bienphapxulykhithai = $this->request->data['XuLyKhiThaiDoanhNghiep'];
			$bienphapxulykhithai['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$bienphapxulykhithai['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->loadModel('Admin.XuLyKhiThaiDoanhNghiep');
			$this->loadModel('Admin.DoanhNghiep');
			$this->XuLyKhiThaiDoanhNghiep->set($bienphapxulykhithai);
			if ($this->XuLyKhiThaiDoanhNghiep->validates()) {
				if ($this->XuLyKhiThaiDoanhNghiep->save()) {
					$current_doanhnghiep = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
					$listbienphapxulykhithai = $this->DoanhNghiep->XuLyKhiThaiDoanhNghiep->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('XuLyKhiThaiDoanhNghiep.created' => 'ASC')));
					if ($current_doanhnghiep) {
						$this->Session->write('savingDoanhNghiep', $current_doanhnghiep);
						echo json_encode($listbienphapxulykhithai);
					}
				}
			}
		}
	}

	public function thembienphapxulyonrungdoanhnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if ($this->request->is('post')) {
			$bienphapxulyonrung = $this->request->data['XuLyTiengOnRung'];
			$bienphapxulyonrung['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$bienphapxulyonrung['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->loadModel('Admin.XuLyTiengOnRung');
			$this->loadModel('Admin.DoanhNghiep');
			$this->XuLyTiengOnRung->set($bienphapxulyonrung);
			if ($this->XuLyTiengOnRung->validates()) {
				if ($this->XuLyTiengOnRung->save()) {
					$current_doanhnghiep = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
					$listbienphapxulyonrung = $this->DoanhNghiep->XuLyTiengOnRung->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('XuLyTiengOnRung.created' => 'ASC')));
					if ($current_doanhnghiep) {
						$this->Session->write('savingDoanhNghiep', $current_doanhnghiep);
						echo json_encode($listbienphapxulyonrung);
					}
				}
			}
		}
	}

	public function thembienphapxulyracthaisinhhoat() {
		$this->layout = false;
		$this->autoRender = false;
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if ($this->request->is('post')) {
			$bienphapxulyracthaisinhhoat = $this->request->data['RacThaiSinhHoat'];
			$bienphapxulyracthaisinhhoat['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$bienphapxulyracthaisinhhoat['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->loadModel('Admin.RacThaiSinhHoat');
			$this->loadModel('Admin.DoanhNghiep');
			$this->RacThaiSinhHoat->set($bienphapxulyracthaisinhhoat);
			if ($this->RacThaiSinhHoat->validates()) {
				if ($this->RacThaiSinhHoat->save()) {
					$current_doanhnghiep = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
					$listbienphapxulyracthaisinhhoat = $this->DoanhNghiep->RacThaiSinhHoat->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('RacThaiSinhHoat.created' => 'ASC')));
					if ($current_doanhnghiep) {
						$this->Session->write('savingDoanhNghiep', $current_doanhnghiep);
						echo json_encode($listbienphapxulyracthaisinhhoat);
					}
				}
			}
		}
	}

	public function thembienphapxulychatthaicongnghiep() {
		$this->layout = false;
		$this->autoRender = false;
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if ($this->request->is('post')) {
			$bienphapxulychatthairancongnghiep = $this->request->data['ChatThaiRanCongNghiep'];
			$bienphapxulychatthairancongnghiep['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$bienphapxulychatthairancongnghiep['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->loadModel('Admin.ChatThaiRanCongNghiep');
			$this->loadModel('Admin.DoanhNghiep');
			$this->ChatThaiRanCongNghiep->set($bienphapxulychatthairancongnghiep);
			if ($this->ChatThaiRanCongNghiep->validates()) {
				if ($this->ChatThaiRanCongNghiep->save()) {
					$current_doanhnghiep = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
					$listbienphapxulychatthairancongnghiep = $this->DoanhNghiep->ChatThaiRanCongNghiep->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('ChatThaiRanCongNghiep.created' => 'ASC')));
					if ($current_doanhnghiep) {
						$this->Session->write('savingDoanhNghiep', $current_doanhnghiep);
						echo json_encode($listbienphapxulychatthairancongnghiep);
					}
				}
			}
		}
	}

	public function thembienphapxulychatthainguyhai() {
		$this->layout = false;
		$this->autoRender = false;
		$savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
		if ($this->request->is('post')) {
			$bienphapxulychatthainguyhai = $this->request->data['ChatThaiNguyHai'];
			$bienphapxulychatthainguyhai['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
			$bienphapxulychatthainguyhai['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
			$this->loadModel('Admin.ChatThaiNguyHai');
			$this->loadModel('Admin.DoanhNghiep');
			$this->ChatThaiNguyHai->set($bienphapxulychatthainguyhai);
			if ($this->ChatThaiNguyHai->validates()) {
				if ($this->ChatThaiNguyHai->save()) {
					$current_doanhnghiep = $this->DoanhNghiep->findByColma($savingDoanhNghiep['DoanhNghiep']['colMa']);
					$listbienphapxulychatthainguyhai = $this->DoanhNghiep->ChatThaiNguyHai->find('all', array('conditions' => array('colCSSX' => $savingDoanhNghiep['DoanhNghiep']['colMa']), 'order' => array('ChatThaiNguyHai.created' => 'ASC')));
					if ($current_doanhnghiep) {
						$this->Session->write('savingDoanhNghiep', $current_doanhnghiep);
						echo json_encode($listbienphapxulychatthainguyhai);
					}
				}
			}
		}
	}

	/**
	 * response for ajax call xoacoso
	 */
	public function xoacoso() {
		$this->layout = false;
		$this->autoRender = false;
		$_Token = $this->Session->read('_Token');
		$csrfTokens = $_Token['csrfTokens'];
		if ($this->request->is('post') || $this->request->is('ajax')) {
			if (isset($this->request->data['token']) && isset($csrfTokens[$this->request->data['token']])) {
				if ($this->request->data['id_dn'] && is_numeric($this->request->data['id_dn'])) {
					$this->loadModel('Admin.DoanhNghiep');
					if ($this->DoanhNghiep->delete(array('colMa' => $this->request->data['id_dn']))) {
						$this->Session->setFlash('Xóa thành công cơ sở của doanh nghiệp', 'default', array('class' => 'success'));
						exit;
					}
				}
			}
		}
		$this->Session->setFlash('Lỗi!!! Không xóa được cơ sở tại thời điểm hiện tại. Vui lòng liên hệ quản trị để được hỗ trợ.');
	}

	/**
	 * response for ajax call getinfo
	 */
	public function getinfo() {
		$this->layout = false;
		$this->autoRender = false;
		if ($this->request->is('post') || $this->request->is('ajax')) {
			if (isset($this->request->data['colMa'])) {
				$colMa = $this->request->data['colMa'];
				$this->_loadDoanhNghiepInfo($colMa);
			} elseif (isset($this->request->data['colCSSX']) && isset($this->request->data['colNguyenLieu'])) {
				$nguyenlieu['stt'] = (int) $this->request->data['stt'];
				$nguyenlieu['colCSSX'] = $this->request->data['colCSSX'];
				$nguyenlieu['colNguyenLieu'] = $this->request->data['colNguyenLieu'];
				$nguyenlieu['colDonVi'] = $this->request->data['colDonVi'];
				$nguyenlieu['colLuongSD'] = $this->request->data['colLuongSD'];
				$this->loadModel('Admin.NguyenLieuSanPham');
				$this->NguyenLieuSanPham->set($nguyenlieu);
				if ($this->NguyenLieuSanPham->validates()) {
					$nl = $this->NguyenLieuSanPham->save();
					if ($nl) {
						$this->_loadDoanhNghiepInfo($this->request->data['colCSSX']);
					}
				}
			} elseif (isset($this->request->data['colCSSX']) && isset($this->request->data['colSanPham'])) {
				$sanpham['stt'] = (int) $this->request->data['stt'];
				$sanpham['colCSSX'] = $this->request->data['colCSSX'];
				$sanpham['colSanPham'] = $this->request->data['colSanPham'];
				$sanpham['colDVi'] = $this->request->data['colDVi'];
				$sanpham['colCongSuatTT'] = $this->request->data['colCongSuatTT'];
				$sanpham['colCongSuatTK'] = $this->request->data['colCongSuatTT'];
				$this->loadModel('Admin.SanPhamDoanhNghiep');
				$this->SanPhamDoanhNghiep->set($sanpham);
				if ($this->SanPhamDoanhNghiep->validates()) {
					if ($this->SanPhamDoanhNghiep->save()) {
						$this->_loadDoanhNghiepInfo($this->request->data['colCSSX']);
					}
				}
			}
		}
	}

	private function _loadDoanhNghiepInfo($colMa) {
		$this->loadModel('Admin.DoanhNghiep');
		$this->loadModel('Admin.SanPhamDoanhNghiep');
		$this->loadModel('Admin.NguyenLieuSanPham');
		$nguyenlieus = $this->NguyenLieuSanPham->find('all', array('conditions' => array('colCSSX' => $colMa), 'order' => array('stt' => 'asc')));
		$sanphams = $this->SanPhamDoanhNghiep->find('all', array('conditions' => array('colCSSX' => $colMa), 'order' => array('stt' => 'asc')));
		$doanhnghiep = $this->DoanhNghiep->findByColma($colMa);
		if ($doanhnghiep) {
			$doanhnghiep['NguyenLieuSanPham'] = $nguyenlieus;
			$doanhnghiep['SanPhamDoanhNghiep'] = $sanphams;
			echo json_encode($doanhnghiep);
		}
	}

	/**
	 * thuc hien chuc nang xoa cho hau het cac loai du lieu 
	 * bang phuong thuc ajax
	 */
	public function chucnangxoa() {
		if ($this->request->is('post') && $this->request->is('ajax')) {
			$type = $this->request->data['type'];
			$id = $this->request->data['id'];
			if ($type == 10) {
				//xoa nguyen lieu khoi danh sach bao cao chat thai nguy hai cua co so
				$this->loadModel('Admin.NguyenLieuSanPham');
				if ($this->NguyenLieuSanPham->delete(array('colMa' => $id))) {
					$this->Session->setFlash('Xóa nguyên liệu thành công', 'default', array('class' => 'success'));
				} else {
					$this->Session->setFlash('Lỗi! Nguyên liệu không tồn tại hoặc kết nối bị ngắt');
				}
				exit;
			} elseif ($type == 20) {
				//xoa san pham khoi danh sach bao cao chat thai nguy hai cua co so
				$this->loadModel('Admin.SanPhamDoanhNghiep');
				if ($this->SanPhamDoanhNghiep->delete(array('colMa' => $id))) {
					$this->Session->setFlash('Xóa sản phẩm thành công', 'default', array('class' => 'success'));
				} else {
					$this->Session->setFlash('Lỗi! Sản phẩm không tồn tại hoặc kết nối bị ngắt');
				}
				exit;
			} elseif ($type == 30) {
				//xoa chat thai
				$this->loadModel('Admin.ChatThai');
				if ($this->ChatThai->delete(array('id' => $id))) {
					$this->Session->setFlash('Xóa chất thải thành công', 'default', array('class' => 'success'));
				} else {
					$this->Session->setFlash('Lỗi! Chất thải không tồn tại hoặc kết nối bị ngắt');
				}
				exit;
			} elseif ($type == 40) {
				//xoa danh muc
				$this->loadModel('Admin.DanhMucChatThai');
				try {
					$dm = $this->DanhMucChatThai->findById($id);
					if ($dm && count($dm['NguonThai'])) {
						$this->Session->setFlash('Xin xóa các nguồn thải thuộc danh mục này trước');
						exit;
					}
					if ($this->DanhMucChatThai->deleteAll(array('DanhMucChatThai.id' => $id))) {
						$this->DanhMucChatThai->NguonThai->deleteAll(array('NguonThai.id_danhmucchatthai' => $id));
						$this->Session->setFlash('Xóa danh mục thành công', 'default', array('class' => 'success'));
					}
				} catch (Exception $ex) {
					$this->Session->setFlash('Lỗi! Danh mục không tồn tại hoặc kết nối bị ngắt');
					exit;
				}
				exit;
			} elseif ($type == 50) {
				//xoa nguon thai
				$this->loadModel('Admin.NguonThai');
				try {
					if ($this->NguonThai->deleteAll(array('NguonThai.id' => $id))) {
						$this->NguonThai->ChatThai->deleteAll(array('ChatThai.id_nguonthai' => $id));
						$this->Session->setFlash('Xóa nguồn thải thành công', 'default', array('class' => 'success'));
					} else {
						$this->Session->setFlash('Lỗi! Nguồn thải không tồn tại hoặc kết nối bị ngắt');
					}
				} catch (Exception $ex) {
					
				}
				exit;
			}
		}
	}

	/**
	 * response for ajax calling - capnhat
	 * @param type $type
	 * @param type $id
	 */
	public function capnhat($type, $id) {
		$this->layout = 'popup_beautiful';
		if ($id && $type) {
			if ($type == 1) {
				//cap nhat san pham
				$this->loadModel('Admin.Sanpham');
				$sp = $this->Sanpham->findById($id);
				if ($this->request->is('post')) {
					$updating_sp = $this->request->data['Sanpham'];
					$updating_sp['id'] = $id;
					$updating_sp['create_by'] = $sp['Sanpham']['create_by'];
					$updating_sp['update_by'] = $this->Auth->user('username');
					$this->Sanpham->set($updating_sp);
					if ($this->Sanpham->validates()) {
						$updated = $this->Sanpham->save();
						if ($updated) {
							$sp = $updated;
							$this->Session->setFlash('Đã lưu thông tin sản phẩm', 'default', array('class' => 'success'));
						}
					}
//                    else {
//                        $message = '';
//                        foreach ($this->Sanpham->validationErrors as $error) {
//                            $message .='<p>' . $error[0] . '</p>';
//                        }
//                        $this->Session->setFlash($message);
//                    }
				}
				if ($sp) {
					$this->set('sanpham', $sp);
				}
				$this->render('Admin.DoanhNghieps/_capnhatsanpham');
			} elseif ($type == 2) {
				//cap nhat nguyen lieu
				$this->loadModel('Admin.Nguyenlieu');
				$nguyenlieu = $this->Nguyenlieu->findById($id);
				if ($this->request->is('post')) {
					$updating_nl = $this->request->data['Nguyenlieu'];
					$this->Nguyenlieu->set($updating_nl);
					if ($this->Nguyenlieu->validates()) {
						$updated = $this->Nguyenlieu->save();
						if ($updated) {
							$nguyenlieu = $updated;
							$this->Session->setFlash('Đã lưu thông tin nguyên liệu: ' . $nguyenlieu['Nguyenlieu']['tennguyenlieu'], 'default', array('class' => 'success'));
						}
					}
				}
				if ($nguyenlieu) {
					$this->set('nguyenlieu', $nguyenlieu);
				}
				$this->render('Admin.DoanhNghieps/_capnhatnguyenlieu');
			} elseif ($type == 3) {
				//cap nhat nguon thai nuoc thai
				$this->loadModel('Admin.NguonThaiNuocThai');
				$nguonthainuocthai = $this->NguonThaiNuocThai->findByColma($id);
				if ($this->request->is('post')) {
					$updating_ntNT = $this->request->data['NguonThaiNuocThai'];
					$this->NguonThaiNuocThai->set($updating_ntNT);
					if ($this->NguonThaiNuocThai->validates()) {
						$updated = $this->NguonThaiNuocThai->save();
						if ($updated) {
							$nguonthainuocthai = $updated;
							$this->Session->setFlash('Đã lưu thông tin nguồn thải nước thải: ' . $nguonthainuocthai['NguonThaiNuocThai']['colTenNguonThai'], 'default', array('class' => 'success'));
						}
					}
				}
				if ($nguonthainuocthai) {
					$this->set('nguonthainuocthai', $nguonthainuocthai);
				}
				$this->render('Admin.DoanhNghieps/_capnhatnguonthainuocthai');
			} elseif ($type == 4) {
				//cap nhat thong tin nguyen lieu san pham trong form bao cao chat thai nguy hai
				$this->loadModel('Admin.NguyenLieuSanPham');
				$nguyenlieusanpham = $this->NguyenLieuSanPham->findByColma($id);
				if ($this->request->is('post') || $this->request->is('put')) {
					$new_data = $this->request->data['NguyenLieuSanPham'];
					$this->NguyenLieuSanPham->set($new_data);
					if ($this->NguyenLieuSanPham->validates()) {
						$updated = $this->NguyenLieuSanPham->save();
						if ($updated) {
							$this->Session->setFlash('Lưu thành công', 'default', array('class' => 'success'));
							$nguyenlieusanpham = $updated;
						}
					}
				}
				$this->request->data = $nguyenlieusanpham;
				$this->render('Admin.Baocao/_capnhatnguyenlieusanpham');
			} elseif ($type == 5) {
				//cap nhat thong tin nguyen lieu san pham trong form bao cao chat thai nguy hai
				$this->loadModel('Admin.SanPhamDoanhNghiep');
				$sanphamdoanhnghiep = $this->SanPhamDoanhNghiep->findByColma($id);
				if ($this->request->is('post') || $this->request->is('put')) {
					$new_data = $this->request->data['SanPhamDoanhNghiep'];
					$this->SanPhamDoanhNghiep->set($new_data);
					if ($this->SanPhamDoanhNghiep->validates()) {
						$updated = $this->SanPhamDoanhNghiep->save();
						if ($updated) {
							$this->Session->setFlash('Lưu thành công', 'default', array('class' => 'success'));
							$sanphamdoanhnghiep = $updated;
						}
					}
				}
				$this->request->data = $sanphamdoanhnghiep;
				$this->render('Admin.Baocao/_capnhatsanphamdoanhnghiep');
			} elseif ($type == 6) {
				//cap nhat thong tin chat thai
				$this->loadModel('Admin.ChatThai');
				$chat_thai = $this->ChatThai->findById($id);
				if ($this->request->is('put')) {
					$new_data = $this->request->data['ChatThai'];
					$this->ChatThai->set($new_data);
					if ($this->ChatThai->validates()) {
						$updated = null;
						try {
							$updated = $this->ChatThai->save();
						} catch (Exception $ex) {
							if ($ex->getCode() == 23000) {
								$this->Session->setFlash('Lỗi: Mã CTNH đã tồn tại');
							} else {
								$this->Session->setFlash('Lỗi: ' . $ex->getMessage());
							}
						}
						if ($updated) {
							$this->Session->setFlash('Lưu thành công', 'default', array('class' => 'success'));
							$chat_thai = $updated;
						}
					}
				}
				$this->request->data = $chat_thai;
				$this->render('Admin.ThongTinChung/_capnhatchatthai');
			} elseif ($type == 7) {
				//cap nhat thong tin danh muc chat thai
				$this->loadModel('Admin.DanhMucChatThai');
				$danh_muc = $this->DanhMucChatThai->findById($id);
				if ($this->request->is('put')) {
					$new_data = $this->request->data['DanhMucChatThai'];
					$this->DanhMucChatThai->set($new_data);
					if ($this->DanhMucChatThai->validates()) {
						$updated = null;
						try {
							$updated = $this->DanhMucChatThai->save();
						} catch (Exception $ex) {
							if ($ex->getCode() == 23000) {
								$this->Session->setFlash('Lỗi: Mã danh mục đã tồn tại');
							} else {
								$this->Session->setFlash('Lỗi: ' . $ex->getMessage());
							}
						}
						if ($updated) {
							$this->Session->setFlash('Lưu thành công', 'default', array('class' => 'success'));
							$danh_muc = $updated;
						}
					}
				}
				$this->request->data = $danh_muc;
				$this->render('Admin.ThongTinChung/_capnhatdanhmucchatthai');
			} elseif ($type == 8) {
				//cap nhat thong tin nguon thai
				$this->loadModel('Admin.NguonThai');
				$nguon_thai = $this->NguonThai->findById($id);
				if ($this->request->is('put')) {
					$new_data = $this->request->data['NguonThai'];
					$this->NguonThai->set($new_data);
					if ($this->NguonThai->validates()) {
						$updated = null;
						try {
							$updated = $this->NguonThai->save();
						} catch (Exception $ex) {
							if ($ex->getCode() == 23000) {
								$this->Session->setFlash('Lỗi: Mã danh mục đã tồn tại');
							} else {
								$this->Session->setFlash('Lỗi: ' . $ex->getMessage());
							}
						}
						if ($updated) {
							$this->Session->setFlash('Lưu thành công', 'default', array('class' => 'success'));
							$nguon_thai = $updated;
						}
					}
				}
				$this->request->data = $nguon_thai;
				$this->render('Admin.ThongTinChung/_capnhatnguonthai');
			}
		}
	}

}

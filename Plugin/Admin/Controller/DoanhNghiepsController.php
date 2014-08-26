<?php

App::uses('AdminAppController', 'Admin.Controller');
/**
 * DoanhNghieps Controller
 *
 */
App::uses('Common', 'Admin.Lib');

class DoanhNghiepsController extends AdminAppController {

    public $components = array('Paginator');
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
//        'order'=>array(
//            'DoanhNghiep.colMa'=>'asc'
//        )
    );

//    public function beforeFiler() {
////        parent::beforeFiler();
//        $this->Security->allowedControllers = array('Admin.Doanhnghieps');
//        $this->Security->allowedActions = array('themmoi');
//        $this->Security->unlockedActions = array('themmoi');
//    }

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
            'conditions' => array('user_id' => $user_id, 'saving_status' => 0),
            'fields' => array('max(colMa) as colMa', '*'),
            'group by' => 'user_id',
            'order' => array('user_id' => 'asc')
        ));
        return $notsavedE;
    }

    public function themmoi() {
        //load not saving enterprise
        $notesavedE = $this->_getLatestNotSavedEnterprise();
        if ($notesavedE) {
//            pr($notesavedE[0]);exit;
            unset($notesavedE[0]['colMa']); //xoa du lieu max colMa
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
                    foreach ($nganh as $key => $value) {
                        if (!is_numeric($value)) {
                            unset($nganh[$key]);
                        }
                    }
                    $i = 1;
                    foreach ($nganh as $nganh_id) {
                        $key = 'colMaNganh' . $i;
                        $doanhnghiepdata[$key] = $nganh_id;
                        ++$i;
                    }
                    //dat lai gia tri cac colMaNganh khac
                    if ($i < 7) {
                        for ($j = $i; $j <= 6; $j++) {
                            $key = 'colMaNganh' . $j;
                            $doanhnghiepdata[$key] = '';
                        }
                    }
                }
                //gan colMa cua doanh nghiep neu dang dang ton tai trong session
                if (isset($savingDoanhNghiep['DoanhNghiep']['colMa']) && $savingDoanhNghiep['DoanhNghiep']['colMa']) {
                    $doanhnghiepdata['colMa'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
                }
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

        if ($after_savingDoanhNghiep) {
            $after_savingDoanhNghiep['DoanhNghiep']['colNamHopDong'] = date('d/m/Y', strtotime($after_savingDoanhNghiep['DoanhNghiep']['colNamHopDong']));
            $after_savingDoanhNghiep['DoanhNghiep']['nganh'] = $this->Session->read('nganh');
            //gan data cho request de dien lai form
            $this->request->data = $after_savingDoanhNghiep;
        }
    }

    public function step2Hoatdongsanxuat($tab = null) {
        if ($tab) {
            $this->set('tab', $tab);
        }
        $savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
        if (!isset($savingDoanhNghiep['DoanhNghiep']) || !$savingDoanhNghiep['DoanhNghiep']) {
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
    }

    public function step4Hoatdongbaovemoitruong() {
        
    }

    public function step5Kiennghi() {
        
    }

    public function step6Hoantat() {
        
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
    public function chucnang($type) {
        $this->layout = 'popup_beautiful';
        $classes = array('none', 'active', 'success', 'warning');
        $this->set('classes', $classes);
        if ($type && is_numeric($type)) {
            if ($type == 1) {
                //luu thong tin danh muc san pham
                $this->loadModel('Admin.DanhmucSanPham');
                $list_dmsp = $this->DanhmucSanPham->find('all');
                $this->set('list_danhmucsanpham', $list_dmsp);
                $this->render('Admin.Doanhnghieps/_themdanhmuc');
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
                $this->render('Admin.Doanhnghieps/_themsanpham');
            } elseif ($type == 3) {
                //luu thong tin nguyen lieu
                $this->loadModel('Admin.Nguyenlieu');
                $list_nguyenlieu = $this->Nguyenlieu->find('all');
                $this->set('listnguyenlieu', $list_nguyenlieu);
                $this->render('Admin.Doanhnghieps/_themnguyenlieu');
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
                $this->render('Admin.Doanhnghieps/_themnguonthainuocthai');
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
            }
        }
    }

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
                $this->render('Admin.Doanhnghieps/_capnhatsanpham');
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
                $this->render('Admin.Doanhnghieps/_capnhatnguyenlieu');
            } elseif ($type = 3) {
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
                $this->render('Admin.Doanhnghieps/_capnhatnguonthainuocthai');
            }
        }
    }

    public function xoadanhmucs() {
        $this->layout = false;
        $this->autoRender = false;
        if ($this->request->is('post')) {
            if (isset($this->request->data['ids']) && count($this->request->data['ids'])) {
                $ids = array();
                foreach ($this->request->data['ids'] as $id) {
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
                foreach ($this->request->data['ids'] as $id) {
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
                foreach ($this->request->data['list_colMa'] as $colMa) {
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

}

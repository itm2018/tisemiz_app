<?php

/**
 * Created by Huynh Son Ca.
 * User: cahs
 * Date: 6/22/14
 * Time: 1:18 PM
 */
App::uses('AdminAppController', 'Admin.Controller');
App::uses('Common', 'Admin.Lib');

class BaocaoController extends AdminAppController {

    public $layout = 'admin/backward';
    public $components = array('Paginator');
    public $paginate = array(
        'limit' => 20,
        'order' => array(
            'Baocaogsmt.id' => 'asc'
        )
    );

    public function beforeFiler() {
        parent::beforeFiler();
        $this->Security->allowedActions(array('baocaogiamsatmoitruong', 'danhsachbaocaogiamsatmoitruong'));
    }

    public function baocaogiamsatmoitruong() {
        $baocaogsmt_id = date('YmdHis') . rand(0, 1000);
        $this->set('baocaogsmt_id', $baocaogsmt_id);
        $this->Session->write('baocaogsmt_id', $baocaogsmt_id);
        $tinhhinhsanxuatkinhdoanh = $this->Session->read('tinhhinhsxkd');
        $this->set('tinhhinhsxkd', $tinhhinhsanxuatkinhdoanh);
        $nguonphatsinhnuocthai = $this->Session->read('nguonphatsinhnuocthai');
        $this->set('nguonphatsinhnuocthai', $nguonphatsinhnuocthai);
        $ketquaphantichnuocthai = $this->Session->read('ketquaphantichnuocthai');
        $this->set('ketquaphantichnuocthai', $ketquaphantichnuocthai);
        $nguonphatsinhkhithai = $this->Session->read('nguonphatsinhkhithai');
        $this->set('nguonphatsinhkhithai', $nguonphatsinhkhithai);
        $ketquaphantichkhithai = $this->Session->read('ketquaphantichkhithai');
        $this->set('ketquaphantichkhithai', $ketquaphantichkhithai);
        $hientrangchatthairansinhhoat = $this->Session->read('hientrangchatthairansinhhoat');
        $this->set('hientrangchatthairansinhhoat', $hientrangchatthairansinhhoat);
        $hientrangchatthairancongnghiep = $this->Session->read('hientrangchatthairancongnghiep');
        $this->set('hientrangchatthairancongnghiep', $hientrangchatthairancongnghiep);
        $hientrangchatthairannguyhai = $this->Session->read('hientrangchatthairannguyhai');
        $this->set('hientrangchatthairannguyhai', $hientrangchatthairannguyhai);
        if ($this->request->is('post')) {
            if (isset($this->request->data['btnLuu'])) {
                if ($this->save()) {
                    $this->Session->setFlash('Lưu thành công');
                }
            } elseif (isset($this->request->data['btnHoantat'])) {
                if ($this->save()) {
                    if ($this->hoantat()) {
                        //xoa cac gia tri luu trong session
                        $this->Session->delete('baocaogsmt_id');
                        $this->Session->delete('customdir');
                        $this->Session->delete('tinhhinhsxkd');
                        $this->Session->delete('nguonphatsinhnuocthai');
                        $this->Session->delete('ketquaphantichnuocthai');
                        $this->Session->delete('nguonphatsinhkhithai');
                        $this->Session->delete('ketquaphantichkhithai');
                        $this->Session->delete('hientrangchatthairansinhhoat');
                        $this->Session->delete('hientrangchatthairancongnghiep');
                        $this->Session->delete('hientrangchatthairannguyhai');
                        $this->Session->delete('file_QTCNSX');
                        $this->Session->delete('file_NPSON');
                        $this->Session->delete('file_QTXLNT');
                        $this->Session->delete('file_XLNT');
                        $this->Session->delete('file_QTXLKT');
                        $this->Session->delete('file_XLKT');
                        $this->Session->delete('file_PSDR');
                        $this->Session->delete('file_PSTO');
                        $this->Session->delete('file_MTXQ1');
                        $this->Session->delete('file_MTXQ2');
                        $this->Session->setFlash('Báo cáo của bạn đã được lưu giữ thành công.');
                        $this->Session->write('hoantatbaocao', true);
                        $this->redirect('/admin/baocao/thanhcong');
                    }
                }
            }
        }
    }

    private function hoantat() {
        //co so lap bao cao
        $cosobaocao = $this->Session->read('Cosolapbaocao');
        //doanh nghieo bao cao giam sat moi truong
        $doanhnghiep_bcgsmt = $this->Session->read('BaocaogsmtDoanhnghiep');
        //thuc the bao cao giam sat moi truong
        $baocaogsmt = $this->Session->read('Baocaogsmt');
        //luu co so lap bao cao neu co du lieu
        if (count(array_unique(array_values($cosobaocao))) > 1) {
            $this->BaocaogsmtDoanhnghiep->set($cosobaocao);
            $this->BaocaogsmtDoanhnghiep->saveAll();
            $id_cosolapbaocao = $this->BaocaogsmtDoanhnghiep->getLastInsertId();
        }
        //id_cosolapbaocao cua doanh nghiep la id cua co so bao cao vua luu
        if (isset($id_cosolapbaocao) && $id_cosolapbaocao) {
            $doanhnghiep_bcgsmt['id_cosolapbc'] = $id_cosolapbaocao;
        }
        //luu doanh nghiep va lay id cua doanh nghiep
        $this->BaocaogsmtDoanhnghiep->set($doanhnghiep_bcgsmt);
        $this->BaocaogsmtDoanhnghiep->saveAll();
        $id_doanhnghiep = $this->BaocaogsmtDoanhnghiep->getLastInsertId();
        //neu luu doanh nghiep thanh cong thi luu bao cao giam sat moi truong
        if ($id_doanhnghiep) {
//            $tungay = DateTime::createFromFormat('d/m/Y', $baocaogsmt['tungay']);
//            $denngay = DateTime::createFromFormat('d/m/Y', $baocaogsmt['denngay']);
//            $baocaogsmt['tungay'] = $tungay->format('Y-m-d H:i:s');
//            $baocaogsmt['denngay'] = $denngay->format('Y-m-d H:i:s');
            $baocaogsmt['id_doanhnghiep'] = $id_doanhnghiep;
            $baocaogsmt['created_date'] = date('Y-m-d H:i:s');
            $baocaogsmt['updated_date'] = date('Y-m-d H:i:s');
            $baocaogsmt['customdir'] = $this->Session->read('customdir'); //folder for storing upload files of user
//            $this->Baocaogsmt->set($baocaogsmt);
            $this->Baocaogsmt->save($baocaogsmt);
            $id_bc = $this->Baocaogsmt->getLastInsertId();
        }
        //neu luu bao cao thanh cong thi luu cac du lieu khac
        if ($id_bc) {
            $tinhhinhsanxuatkinhdoanh = $this->Session->read('tinhhinhsxkd');
            $nguonphatsinhnuocthai = $this->Session->read('nguonphatsinhnuocthai');
            $ketquaphantichnuocthai = $this->Session->read('ketquaphantichnuocthai');
            $nguonphatsinhkhithai = $this->Session->read('nguonphatsinhkhithai');
            $ketquaphantichkhithai = $this->Session->read('ketquaphantichkhithai');
            $hientrangchatthairansinhhoat = $this->Session->read('hientrangchatthairansinhhoat');
            $hientrangchatthairancongnghiep = $this->Session->read('hientrangchatthairancongnghiep');
            $hientrangchatthairannguyhai = $this->Session->read('hientrangchatthairannguyhai');
            if ($tinhhinhsanxuatkinhdoanh) {
                $this->loadModel('Admin.Tinhhinhsxkd');
                foreach ($tinhhinhsanxuatkinhdoanh as $thsxkd) {
                    $thsxkd['id_bc'] = $id_bc;
                    $thsxkd['tennguyenlieu'] = $thsxkd['tensp']; //gan lai tensp=tennguyenlieu do dat nham
                    $this->Tinhhinhsxkd->saveAll($thsxkd);
                }
            }
            if ($nguonphatsinhnuocthai) {
                $this->loadModel('Admin.Hientrangnuocthai');
                foreach ($nguonphatsinhnuocthai as $npsnt) {
                    $npsnt['id_bc'] = $id_bc;
                    $this->Hientrangnuocthai->saveAll($npsnt);
                }
            }
            if ($ketquaphantichnuocthai) {
                $this->loadModel('Admin.Ketquaphantichnuocthai');
                foreach ($ketquaphantichkhithai as $kqptnt) {
                    $kqptnt['id_bc'] = $id_bc;
                    $this->Ketquaphantichnuocthai->saveAll($kqptnt);
                }
            }
            if ($nguonphatsinhkhithai) {
                $this->loadModel('Admin.Hientrangkhithai');
                foreach ($nguonphatsinhkhithai as $npskt) {
                    $npskt['id_bc'] = $id_bc;
                    $this->Hientrangkhithai->saveAll($npskt);
                }
            }
            if ($ketquaphantichkhithai) {
                $this->loadModel('Admin.Ketquaphantichkhithai');
                foreach ($ketquaphantichkhithai as $kqptkt) {
                    $kqptkt['id_bc'] = $id_bc;
                    $this->Ketquaphantichkhithai->saveAll($kqptkt);
                }
            }
            $this->loadModel('Admin.Hientrangchatthairan');
            if ($hientrangchatthairansinhhoat) {
                foreach ($hientrangchatthairansinhhoat as $htctr_sh) {
                    $htctr_sh['id_loaichatthairan'] = 1;
                    $htctr_sh['id_bc'] = $id_bc;
                    $htctr_sh['donvithugomvanchuyen'] = $htctr_sh['ghichu']; //dat lai do nham
                    $this->Hientrangchatthairan->saveAll($htctr_sh);
                }
            }
            if ($hientrangchatthairancongnghiep) {
                foreach ($hientrangchatthairancongnghiep as $htctr_cn) {
                    $htctr_cn['id_loaichatthairan'] = 2;
                    $htctr_cn['id_bc'] = $id_bc;
                    $htctr_cn['donvithugomvanchuyen'] = $htctr_cn['ghichu'];
                    $this->Hientrangchatthairan->saveAll($htctr_cn);
                }
            }
            if ($hientrangchatthairannguyhai) {
                foreach ($hientrangchatthairannguyhai as $htctr_nh) {
                    $htctr_nh['id_loaichatthairan'] = 3;
                    $htctr_nh['id_bc'] = $id_bc;
                    $htctr_nh['donvithugomvanchuyen'] = $htctr_nh['ghichu'];
                    $this->Hientrangchatthairan->saveAll($htctr_nh);
                }
            }
        }
        return true;
    }

    public function thanhcong() {
        if (!$this->Session->read('hoantatbaocao')) {
            $this->redirect('/admin/baocao/baocaogiamsatmoitruong');
        } else {
            $this->Session->delete('hoantatbaocao');
        }
    }

    private function save() {
//        $this->layout=false;
//        $this->autoRender=false;
//        if (!$this->request->is('post')) {
//            return false;
//        }
        $username = ($this->Auth->user('username')) ? $this->Auth->user('username') : 'defaultuser';
        $current = date('Y-m-d');
        $custom_dir = $username . DIRECTORY_SEPARATOR . $current . DIRECTORY_SEPARATOR;
        $this->Session->write('customdir', $custom_dir);
        $path = ROOT . DIRECTORY_SEPARATOR . APP_DIR . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR;
        if (!is_dir($path)) {
            mkdir($path, 0777);
        }
        $path .= $username . DIRECTORY_SEPARATOR;
        if (!is_dir($path)) {
            mkdir($path, 0777);
        }
        $path .= $current . DIRECTORY_SEPARATOR;
        if (!is_dir($path)) {
            mkdir($path, 0777);
        }
        if (!is_dir($path)) {
            mkdir($path, 0777);
        }
        //set folder permission to 777
        chmod($path, 0777);
//file quy trinh cong nghe san xuat
        $file_QTCNSX = (isset($this->request->data['Baocaogsmt']['txtFileQTCNSX']['name']) && $this->request->data['Baocaogsmt']['txtFileQTCNSX']['name']) ? $this->request->data['Baocaogsmt']['txtFileQTCNSX'] : $this->Session->read('file_QTCNSX');

//file phan tich nguon phat sinh o nhiem
        $file_NPSON = (isset($this->request->data['Baocaogsmt']['txtFileNPSON']['name']) && $this->request->data['Baocaogsmt']['txtFileNPSON']['name']) ? $this->request->data['Baocaogsmt']['txtFileNPSON'] : $this->Session->read('file_NPSON');

//file quy trinh xu ly nuoc thai
        $file_QTXLNT = (isset($this->request->data['Baocaogsmt']['txtFileQTXLNT']['name']) && $this->request->data['Baocaogsmt']['txtFileQTXLNT']['name']) ? $this->request->data['Baocaogsmt']['txtFileQTXLNT'] : $this->Session->read('file_QTXLNT');

//file ket qua phan tich xu ly nuoc thai 
        $file_XLNT = (isset($this->request->data['Baocaogsmt']['txtFileXLNT']['name']) && $this->request->data['Baocaogsmt']['txtFileXLNT']['name']) ? $this->request->data['Baocaogsmt']['txtFileXLNT'] : $this->Session->read('file_XLNT');

//file quy trinh xu ly khi thai
        $file_QTXLKT = (isset($this->request->data['Baocaogsmt']['txtFileQTXLKT']['name']) && $this->request->data['Baocaogsmt']['txtFileQTXLKT']['name']) ? $this->request->data['Baocaogsmt']['txtFileQTXLKT'] : $this->Session->read('file_QTXLKT');

//file phan tich xu ly khi thai
        $file_XLKT = (isset($this->request->data['Baocaogsmt']['txtFileXLKT']['name']) && $this->request->data['Baocaogsmt']['txtFileXLKT']['name']) ? $this->request->data['Baocaogsmt']['txtFileXLKT'] : $this->Session->read('file_XLKT');

// file phan tich nguon phat sinh do rung
        $file_PSDR = (isset($this->request->data['Baocaogsmt']['txtFilePSDR']['name']) && $this->request->data['Baocaogsmt']['txtFilePSDR']['name']) ? $this->request->data['Baocaogsmt']['txtFilePSDR'] : $this->Session->read('file_PSDR');

//file phan tich nguon phat sinh tieng on
        $file_PSTO = (isset($this->request->data['Baocaogsmt']['txtFilePSTO']['name']) && $this->request->data['Baocaogsmt']['txtFilePSTO']['name']) ? $this->request->data['Baocaogsmt']['txtFilePSTO'] : $this->Session->read('file_PSTO');

//file so do khao sat cac diem moi truong xung quanh
        $file_MTXQ1 = (isset($this->request->data['Baocaogsmt']['txtFileMTXQ1']['name']) && $this->request->data['Baocaogsmt']['txtFileMTXQ1']['name']) ? $this->request->data['Baocaogsmt']['txtFileMTXQ1'] : $this->Session->read('file_MTXQ1');

//file ket qua phan tich moi truong xung quanh
        $file_MTXQ2 = (isset($this->request->data['Baocaogsmt']['txtFileMTXQ2']['name']) && $this->request->data['Baocaogsmt']['txtFileMTXQ2']['name']) ? $this->request->data['Baocaogsmt']['txtFileMTXQ2'] : $this->Session->read('file_MTXQ2');
        $baocaogsmt = array(
            'tungay' => $this->request->data['Baocaogsmt']['txttungay'],
            'denngay' => $this->request->data['Baocaogsmt']['txtdenngay'],
            'id_user' => $this->Auth->user('id'),
            'id_doanhnghiep' => 'temp_id',
            'quytrinhcnxstrongkybc' => $this->request->data['Baocaogsmt']['QuytrinhCongngheSanxuat'],
            'file_quytrinhcnsx' => is_array($file_QTCNSX) ? $file_QTCNSX['name'] : $file_QTCNSX,
            'file_nguononhiem' => is_array($file_NPSON) ? $file_NPSON['name'] : $file_NPSON,
            'file_quytrinhcnxlnt' => is_array($file_QTXLNT) ? $file_QTXLNT['name'] : $file_QTXLNT,
            'quytrinhcnxlnt' => $this->request->data['Baocaogsmt']['QuytrinhCongngheXulyNuoc'],
            'file_ketquaphantichnt' => is_array($file_XLNT) ? $file_XLNT['name'] : $file_XLNT,
            'file_quytrinhcnxlkt' => is_array($file_QTXLKT) ? $file_QTXLKT['name'] : $file_QTXLKT,
            'quytrinhcnxlkt' => $this->request->data['Baocaogsmt']['QuytrinhCongngheXulyKhithai'],
            'file_ketquaphantichkt' => is_array($file_XLKT) ? $file_XLKT['name'] : $file_XLKT,
            'nguonpstiengonvabpkp' => $this->request->data['Baocaogsmt']['Nguonphatsinhtiengon'],
            'file_ketquaphantichtiengon' => is_array($file_PSTO) ? $file_PSTO['name'] : $file_PSTO,
            'nguonpsdorungvabpkp' => $this->request->data['Baocaogsmt']['Nguonphatsinhdorung'],
            'file_ketquaphantichdorung' => is_array($file_PSDR) ? $file_PSDR['name'] : $file_PSDR,
            'file_sodovitricacdiemgiamsatmtxq' => is_array($file_MTXQ1) ? $file_MTXQ1['name'] : $file_MTXQ1,
            'file_ketquadodacphantichmtxq' => is_array($file_MTXQ2) ? $file_MTXQ2['name'] : $file_MTXQ2
        );

        $doanhnghiep_bcgsmt = array(
            'tencoso' => $this->request->data['Baocaogsmt']['txtTenDoanhNghiep'],
            'truso' => $this->request->data['Baocaogsmt']['txtDiaChiDN'],
            'dienthoai' => $this->request->data['Baocaogsmt']['txtDienThoaiDN'],
            'fax' => $this->request->data['Baocaogsmt']['txtFaxDN'],
            'email' => $this->request->data['Baocaogsmt']['txtEmailDN'],
            'gpkinhdoanh' => $this->request->data['Baocaogsmt']['txtSoGiayDKKD'],
            'masothue' => $this->request->data['Baocaogsmt']['txtMasothueDN'],
            'quytrinhcnsx' => $this->request->data['Baocaogsmt']['QuytrinhCongngheSanxuat']
        );
        $cosolapbaocao = array(
            'tencoso' => $this->request->data['Baocaogsmt']['txtTenCS'],
            'truso' => $this->request->data['Baocaogsmt']['txtDiaChiCS'],
            'dienthoai' => $this->request->data['Baocaogsmt']['txtDienThoaiCS'],
            'fax' => $this->request->data['Baocaogsmt']['txtFaxCS'],
            'email' => $this->request->data['Baocaogsmt']['txtEmailCS'],
            'gpkinhdoanh' => $this->request->data['Baocaogsmt']['txtDKKD_CS'],
            'masothue' => $this->request->data['Baocaogsmt']['txtMasothueCS'],
        );
        $this->loadModel('Admin.Baocaogsmt');
        $this->Baocaogsmt->set($baocaogsmt);
        $this->loadModel('Admin.BaocaogsmtDoanhnghiep');
        $this->BaocaogsmtDoanhnghiep->set($doanhnghiep_bcgsmt);
        if ($this->Baocaogsmt->validates() && $this->BaocaogsmtDoanhnghiep->validates()) {
            $this->Session->write('Baocaogsmt', $baocaogsmt);
            $this->Session->write('BaocaogsmtDoanhnghiep', $doanhnghiep_bcgsmt);
            $this->Session->write('Cosolapbaocao', $cosolapbaocao);
            try {
                if (isset($file_QTCNSX['name']) && $file_QTCNSX['name']) {
                    if (move_uploaded_file($file_QTCNSX['tmp_name'], $path . $file_QTCNSX['name'])) {
                        $this->Session->write('file_QTCNSX', $file_QTCNSX['name']);
                    }
                }
                if (isset($file_NPSON['name']) && $file_NPSON['name']) {
                    if (move_uploaded_file($file_NPSON['tmp_name'], $path . $file_NPSON['name'])) {
                        $this->Session->write('file_NPSON', $file_NPSON['name']);
                    }
                }
                if (isset($file_QTXLNT['name']) && $file_QTXLNT['name']) {
                    if (move_uploaded_file($file_QTXLNT['tmp_name'], $path . $file_QTXLNT['name'])) {
                        $this->Session->write('file_QTXLNT', $file_QTXLNT['name']);
                    }
                }
                if (isset($file_XLNT['name']) && $file_XLNT['name']) {
                    if (move_uploaded_file($file_XLNT['tmp_name'], $path . $file_XLNT['name'])) {
                        $this->Session->write('file_XLNT', $file_XLNT['name']);
                    }
                }
                if (isset($file_QTXLKT['name']) && $file_QTXLKT['name']) {
                    if (move_uploaded_file($file_QTXLKT['tmp_name'], $path . $file_QTXLKT['name'])) {
                        $this->Session->write('file_QTXLKT', $file_QTXLKT['name']);
                    }
                }
                if (isset($file_XLKT['name']) && $file_XLKT['name']) {
                    if (move_uploaded_file($file_XLKT['tmp_name'], $path . $file_XLKT['name'])) {
                        $this->Session->write('file_XLKT', $file_XLKT['name']);
                    }
                }
                if (isset($file_PSDR['name']) && $file_PSDR['name']) {
                    if (move_uploaded_file($file_PSDR['tmp_name'], $path . $file_PSDR['name'])) {
                        $this->Session->write('file_PSDR', $file_PSDR['name']);
                    }
                }
                if (isset($file_PSTO['name']) && $file_PSTO['name']) {
                    if (move_uploaded_file($file_PSTO['tmp_name'], $path . $file_PSTO['name'])) {
                        $this->Session->write('file_PSTO', $file_PSTO['name']);
                    }
                }
                if (isset($file_MTXQ1['name']) && $file_MTXQ1['name']) {
                    if (move_uploaded_file($file_MTXQ1['tmp_name'], $path . $file_MTXQ1['name'])) {
                        $this->Session->write('file_MTXQ1', $file_MTXQ1['name']);
                    }
                }
                if (isset($file_MTXQ2['name']) && $file_MTXQ2['name']) {
                    if (move_uploaded_file($file_MTXQ2['tmp_name'], $path . $file_MTXQ2['name'])) {
                        $this->Session->write('file_MTXQ2', $file_MTXQ2['name']);
                    }
                }
            } catch (Exception $e) {
                $this->Session->setFlash($e->getMessage());
                $this->redirect('/admin/baocao/baocaogiamsatmoitruong');
            }
            chmod($path, 0644);
            return true;
        }
        return false;
    }

    public function dulieugiamsatmoitruong() {
        $this->layout = 'popup';
        $type = $this->request->query('type');
        $baocaogsmt_id = $this->request->query('baocaogsmtid');
//		if (!($type) && !($baocaogsmt_id) && is_numeric($type) && $baocaogsmt_id == $this->Session->read('baocaogsmt_id')) {
        if (isset($type) && $type && isset($baocaogsmt_id) && $baocaogsmt_id && is_numeric($type)) {
            $this->set('baocaogsmt_id', $this->Session->read('baocaogsmt_id'));
            if ($type == 3) {
                $tinhhinhsxkd = $this->Session->read('tinhhinhsxkd');
//for delete action
                if ($this->request->query('action') == 'delete' && $this->request->query('ID') && is_numeric($this->request->query('ID'))) {
                    foreach ($tinhhinhsxkd as $key => $thsxkd) {
                        if ($thsxkd['temp_id'] == $this->request->query('ID')) {
                            unset($tinhhinhsxkd[$key]);
                        }
                    }
                    $this->Session->write('tinhhinhsxkd', $tinhhinhsxkd);
                }
                $this->set('tinhhinhsxkd', $tinhhinhsxkd);
//tinh hinh san xuat kinh doanh trong ky bao cao
                $this->render('Elements/Baocao/tinhhinhsanxuatkinhdoanh');
            } elseif ($type == 4) {
                $nguonphatsinhnuocthai = $this->Session->read('nguonphatsinhnuocthai');
//for delete action
                if ($this->request->query('action') == 'delete' && $this->request->query('ID') && is_numeric($this->request->query('ID'))) {
                    foreach ($nguonphatsinhnuocthai as $key => $npsnt) {
                        if ($npsnt['temp_id'] == $this->request->query('ID')) {
                            unset($nguonphatsinhnuocthai[$key]);
                        }
                    }
                    $this->Session->write('nguonphatsinhnuocthai', $nguonphatsinhnuocthai);
                }
                $this->set('nguonphatsinhnuocthai', $nguonphatsinhnuocthai);
//nguon phat sinh nuoc thai
                $this->render('Elements/Baocao/nguonphatsinhnuocthai');
            } elseif ($type == 12) {
                $ketquaphantichnuocthai = $this->Session->read('ketquaphantichnuocthai');
//for delete action
                if ($this->request->query('action') == 'delete' && $this->request->query('ID') && is_numeric($this->request->query('ID'))) {
                    foreach ($ketquaphantichnuocthai as $key => $kqptnt) {
                        if ($kqptnt['temp_id'] == $this->request->query('ID')) {
                            unset($ketquaphantichnuocthai[$key]);
                        }
                    }
                    $this->Session->write('ketquaphantichnuocthai', $ketquaphantichnuocthai);
                }
                $this->set('ketquaphantichnuocthai', $ketquaphantichnuocthai);
//ketquaphantichnuocthai
                $this->render('Elements/Baocao/ketquaphantichcongnghexulynuocthai');
            } elseif ($type == 5) {
                $nguonphatsinhkhithai = $this->Session->read('nguonphatsinhkhithai');
//for delete action
                if ($this->request->query('action') == 'delete' && $this->request->query('ID') && is_numeric($this->request->query('ID'))) {
                    foreach ($nguonphatsinhkhithai as $key => $npskt) {
                        if ($npskt['temp_id'] == $this->request->query('ID')) {
                            unset($nguonphatsinhkhithai[$key]);
                        }
                    }
                    $this->Session->write('nguonphatsinhkhithai', $nguonphatsinhkhithai);
                }
                $this->set('nguonphatsinhkhithai', $nguonphatsinhkhithai);
//nguon phat sinh khi thai
                $this->render('Elements/Baocao/nguonphatsinhkhithai');
            } elseif ($type == 13) {
                $ketquaphantichkhithai = $this->Session->read('ketquaphantichkhithai');
//for delete action
                if ($this->request->query('action') == 'delete' && $this->request->query('ID') && is_numeric($this->request->query('ID'))) {
                    foreach ($ketquaphantichkhithai as $key => $kqptkt) {
                        if ($kqptkt['temp_id'] == $this->request->query('ID')) {
                            unset($ketquaphantichkhithai[$key]);
                        }
                    }
                    $this->Session->write('ketquaphantichkhithai', $ketquaphantichkhithai);
                }
                $this->set('ketquaphantichkhithai', $ketquaphantichkhithai);
//ket qua phan tich khi thai
                $this->render('Elements/Baocao/ketquaphantichcongnghexulykhithai');
            } elseif ($type == 6) {
                $hientrangchatthairansinhhoat = $this->Session->read('hientrangchatthairansinhhoat');
//for delete action
                if ($this->request->query('action') == 'delete' && $this->request->query('ID') && is_numeric($this->request->query('ID'))) {
                    foreach ($hientrangchatthairansinhhoat as $key => $htchrsh) {
                        if ($htchrsh['temp_id'] == $this->request->query('ID')) {
                            unset($hientrangchatthairansinhhoat[$key]);
                        }
                    }
                    $this->Session->write('hientrangchatthairansinhhoat', $hientrangchatthairansinhhoat);
                }
                $this->set('hientrangchatthairansinhhoat', $hientrangchatthairansinhhoat);
//chat thai ran sinh hoat
                $this->render('Elements/Baocao/chatthairansinhhoat');
            } elseif ($type == 7) {
                $hientrangchatthairancongnghiep = $this->Session->read('hientrangchatthairancongnghiep');
//for delete action
                if ($this->request->query('action') == 'delete' && $this->request->query('ID') && is_numeric($this->request->query('ID'))) {
                    foreach ($hientrangchatthairancongnghiep as $key => $htchrcn) {
                        if ($htchrcn['temp_id'] == $this->request->query('ID')) {
                            unset($hientrangchatthairancongnghiep[$key]);
                        }
                    }
                    $this->Session->write('hientrangchatthairancongnghiep', $hientrangchatthairancongnghiep);
                }
                $this->set('hientrangchatthairancongnghiep', $hientrangchatthairancongnghiep);
//chat thai cong nghiep
                $this->render('Elements/Baocao/chatthaicongnghiep');
            } elseif ($type == 8) {
                $hientrangchathairannguyhai = $this->Session->read('hientrangchatthairannguyhai');
//for delete action
                if ($this->request->query('action') == 'delete' && $this->request->query('ID') && is_numeric($this->request->query('ID'))) {
                    foreach ($hientrangchathairannguyhai as $key => $htchrnh) {
                        if ($htchrnh['temp_id'] == $this->request->query('ID')) {
                            unset($hientrangchathairannguyhai[$key]);
                        }
                    }
                    $this->Session->write('hientrangchatthairannguyhai', $hientrangchathairannguyhai);
                }
                $this->set('hientrangchatthairannguyhai', $hientrangchathairannguyhai);
//chat thai nguy hai
                $this->render('Elements/Baocao/chatthainguyhai');
            }
        } else {
            $this->Session->setFlash('Có lỗi xảy ra. Bạn đang thay đổi thông tin hệ thống.');
            $this->render(false);
        }
        if ($this->request->is('post')) {
            if ($type == 3) {
                $data = $this->request->data;
                $tinhhinhsxkd = array();
                for ($i = 0; $i < count($data['ThuTu']); ++$i) {
                    $tinhhinhsxkd[$i] = array(
                        'stt' => $data['ThuTu'][$i],
                        'tensp' => $data['Ten'][$i],
                        'donvi' => $data['DonVi'][$i],
                        'quy1' => $data['T1'][$i],
                        'quy2' => $data['T2'][$i],
                        'quy3' => $data['T3'][$i],
                        'quy4' => $data['T4'][$i],
                    );
                }
//validate data
                foreach ($tinhhinhsxkd as $key => $thsxkd) {
                    if (!is_numeric($thsxkd['stt'])) {
                        $tinhhinhsxkd[$key]['stt'] = 0;
                    }
                    if (!($thsxkd['quy1']) && !is_numeric($thsxkd['quy1'])) {
                        $tinhhinhsxkd[$key]['quy1'] = 0;
                    }
                    if (!($thsxkd['quy2']) && !is_numeric($thsxkd['quy2'])) {
                        $tinhhinhsxkd[$key]['quy2'] = 0;
                    }
                    if (!($thsxkd['quy3']) && !is_numeric($thsxkd['quy3'])) {
                        $tinhhinhsxkd[$key]['quy3'] = 0;
                    }
                    if (!($thsxkd['quy4']) && !is_numeric($thsxkd['quy4'])) {
                        $tinhhinhsxkd[$key]['quy4'] = 0;
                    }
//remove null record
                    if (count(array_unique(array_values($thsxkd))) <= 1) {
                        unset($tinhhinhsxkd[$key]);
                    }
                }
//sort array
                foreach ($tinhhinhsxkd as $key => $row) {
                    $stt[$key] = $row['stt'];
                    $tensp[$key] = $row['tensp'];
                    $tinhhinhsxkd[$key]['temp_id'] = $key + 1;
                    $tinhhinhsxkd[$key]['tong'] = $row['quy1'] + $row['quy2'] + $row['quy3'] + $row['quy4'];
                }
                if ($tinhhinhsxkd)
                    array_multisort($stt, SORT_ASC, $tensp, SORT_ASC, $tinhhinhsxkd);
                $this->Session->write('tinhhinhsxkd', $tinhhinhsxkd);
                $tinhhinhsxkd = $this->Session->read('tinhhinhsxkd');
                $this->set('tinhhinhsxkd', $tinhhinhsxkd);
                $this->render('Elements/Baocao/tinhhinhsanxuatkinhdoanh');
            }elseif ($type == 4) {
                $data = $this->request->data;
                $nguonphatsinhnuocthai = array();
                for ($i = 0; $i < count($data['ThuTu']); ++$i) {
                    $nguonphatsinhnuocthai[$i] = array(
                        'stt' => $data['ThuTu'][$i],
                        'loainuocthai' => $data['Ten'][$i],
                        'donvi' => $data['DonVi'][$i],
                        'quy1' => $data['T1'][$i],
                        'quy2' => $data['T2'][$i],
                        'quy3' => $data['T3'][$i],
                        'quy4' => $data['T4'][$i],
                        'ghichu' => $data['GhiChu'][$i]
                    );
                }
//validate data
                foreach ($nguonphatsinhnuocthai as $key => $npsnt) {
                    if (!is_numeric($npsnt['stt'])) {
                        $nguonphatsinhnuocthai[$key]['stt'] = 0;
                    }
                    if (!($npsnt['quy1']) && !is_numeric($npsnt['quy1'])) {
                        $nguonphatsinhnuocthai[$key]['quy1'] = 0;
                    }
                    if (!($npsnt['quy2']) && !is_numeric($npsnt['quy2'])) {
                        $nguonphatsinhnuocthai[$key]['quy2'] = 0;
                    }
                    if (!($npsnt['quy3']) && !is_numeric($npsnt['quy3'])) {
                        $nguonphatsinhnuocthai[$key]['quy3'] = 0;
                    }
                    if (!($npsnt['quy4']) && !is_numeric($npsnt['quy4'])) {
                        $nguonphatsinhnuocthai[$key]['quy4'] = 0;
                    }
//remove null record
                    if (count(array_unique(array_values($npsnt))) <= 1) {
                        unset($nguonphatsinhnuocthai[$key]);
                    }
                }

//sort array
                foreach ($nguonphatsinhnuocthai as $key => $row) {
                    $stt[$key] = $row['stt'];
                    $loainuocthai[$key] = $row['loainuocthai'];
                    $nguonphatsinhnuocthai[$key]['temp_id'] = $key + 1;
                    $nguonphatsinhnuocthai[$key]['tong'] = $row['quy1'] + $row['quy2'] + $row['quy3'] + $row['quy4'];
                }
                if ($nguonphatsinhnuocthai)
                    array_multisort($stt, SORT_ASC, $loainuocthai, SORT_ASC, $nguonphatsinhnuocthai);
                $this->Session->write('nguonphatsinhnuocthai', $nguonphatsinhnuocthai);
                $nguonphatsinhnuocthai = $this->Session->read('nguonphatsinhnuocthai');
                $this->set('nguonphatsinhnuocthai', $nguonphatsinhnuocthai);
                $this->render('Elements/Baocao/nguonphatsinhnuocthai');
            }elseif ($type == 12) {
                $data = $this->request->data;
                $ketquaphantichnuocthai = array();
                for ($i = 0; $i < count($data['ThuTu']); ++$i) {
                    $ketquaphantichnuocthai[$i] = array(
                        'stt' => $data['ThuTu'][$i],
                        'thongsodo' => $data['Ten'][$i],
                        'donvi' => $data['DonVi'][$i],
                        'lan1' => $data['T1'][$i],
                        'lan2' => $data['T2'][$i],
                        'lan3' => $data['T3'][$i],
                        'lan4' => $data['T4'][$i],
                        'ghichu' => $data['GhiChu'][$i]
                    );
                }
//validate data
                foreach ($ketquaphantichnuocthai as $key => $kqptnt) {
                    if (!is_numeric($kqptnt['stt'])) {
                        $ketquaphantichnuocthai[$key]['stt'] = 0;
                    }
                    if (!($kqptnt['lan1']) && !is_numeric($kqptnt['lan1'])) {
                        $ketquaphantichnuocthai[$key]['lan1'] = 0;
                    }
                    if (!($kqptnt['lan2']) && !is_numeric($kqptnt['lan2'])) {
                        $ketquaphantichnuocthai[$key]['lan2'] = 0;
                    }
                    if (!($kqptnt['lan3']) && !is_numeric($kqptnt['lan3'])) {
                        $ketquaphantichnuocthai[$key]['lan3'] = 0;
                    }
                    if (!($kqptnt['lan4']) && !is_numeric($kqptnt['lan4'])) {
                        $ketquaphantichnuocthai[$key]['lan4'] = 0;
                    }
//remove null record
                    if (count(array_unique(array_values($kqptnt))) <= 1) {
                        unset($ketquaphantichnuocthai[$key]);
                    }
                }

//sort array
                foreach ($ketquaphantichnuocthai as $key => $row) {
                    $stt[$key] = $row['stt'];
                    $thongsodo[$key] = $row['thongsodo'];
                    $ketquaphantichnuocthai[$key]['temp_id'] = $key + 1;
                    $ketquaphantichnuocthai[$key]['tong'] = $row['lan1'] + $row['lan2'] + $row['lan3'] + $row['lan4'];
                }
                if ($ketquaphantichnuocthai)
                    array_multisort($stt, SORT_ASC, $thongsodo, SORT_ASC, $ketquaphantichnuocthai);
                $this->Session->write('ketquaphantichnuocthai', $ketquaphantichnuocthai);
                $ketquaphantichnuocthai = $this->Session->read('ketquaphantichnuocthai');
                $this->set('ketquaphantichnuocthai', $ketquaphantichnuocthai);
                $this->render('Elements/Baocao/ketquaphantichcongnghexulynuocthai');
            }elseif ($type == 5) {
                $data = $this->request->data;
                $nguonphatsinhkhithai = array();
                for ($i = 0; $i < count($data['ThuTu']); ++$i) {
                    $nguonphatsinhkhithai[$i] = array(
                        'stt' => $data['ThuTu'][$i],
                        'loaikhithai' => $data['Ten'][$i],
                        'donvi' => $data['DonVi'][$i],
                        'quy1' => $data['T1'][$i],
                        'quy2' => $data['T2'][$i],
                        'quy3' => $data['T3'][$i],
                        'quy4' => $data['T4'][$i],
                        'ghichu' => $data['GhiChu'][$i]
                    );
                }
//validate data
                foreach ($nguonphatsinhkhithai as $key => $npskt) {
                    if (!is_numeric($npskt['stt'])) {
                        $nguonphatsinhkhithai[$key]['stt'] = 0;
                    }
                    if (!($npskt['quy1']) && !is_numeric($npskt['quy1'])) {
                        $nguonphatsinhkhithai[$key]['quy1'] = 0;
                    }
                    if (!($npskt['quy2']) && !is_numeric($npskt['quy2'])) {
                        $nguonphatsinhkhithai[$key]['quy2'] = 0;
                    }
                    if (!($npskt['quy3']) && !is_numeric($npskt['quy3'])) {
                        $nguonphatsinhkhithai[$key]['quy3'] = 0;
                    }
                    if (!($npskt['quy4']) && !is_numeric($npskt['quy4'])) {
                        $nguonphatsinhkhithai[$key]['quy4'] = 0;
                    }
//remove null record
                    if (count(array_unique(array_values($npskt))) <= 1) {
                        unset($nguonphatsinhkhithai[$key]);
                    }
                }

//sort array
                foreach ($nguonphatsinhkhithai as $key => $row) {
                    $stt[$key] = $row['stt'];
                    $loaikhithai[$key] = $row['loaikhithai'];
                    $nguonphatsinhkhithai[$key]['temp_id'] = $key + 1;
                    $nguonphatsinhkhithai[$key]['tong'] = $row['quy1'] + $row['quy2'] + $row['quy3'] + $row['quy4'];
                }
                if ($nguonphatsinhkhithai)
                    array_multisort($stt, SORT_ASC, $loaikhithai, SORT_ASC, $nguonphatsinhkhithai);
                $this->Session->write('nguonphatsinhkhithai', $nguonphatsinhkhithai);
                $nguonphatsinhkhithai = $this->Session->read('nguonphatsinhkhithai');
                $this->set('nguonphatsinhkhithai', $nguonphatsinhkhithai);
                $this->render('Elements/Baocao/nguonphatsinhkhithai');
            }elseif ($type == 13) {
                $data = $this->request->data;
                $ketquaphantichkhithai = array();
                for ($i = 0; $i < count($data['ThuTu']); ++$i) {
                    $ketquaphantichkhithai[$i] = array(
                        'stt' => $data['ThuTu'][$i],
                        'thongsodo' => $data['Ten'][$i],
                        'donvi' => $data['DonVi'][$i],
                        'lan1' => $data['T1'][$i],
                        'lan2' => $data['T2'][$i],
                        'lan3' => $data['T3'][$i],
                        'lan4' => $data['T4'][$i],
                        'ghichu' => $data['GhiChu'][$i]
                    );
                }
//validate data
                foreach ($ketquaphantichkhithai as $key => $kqptkt) {
                    if (!is_numeric($kqptkt['stt'])) {
                        $ketquaphantichkhithai[$key]['stt'] = 0;
                    }
                    if (!($kqptkt['lan1']) && !is_numeric($kqptkt['lan1'])) {
                        $ketquaphantichkhithai[$key]['lan1'] = 0;
                    }
                    if (!($kqptkt['lan2']) && !is_numeric($kqptkt['lan2'])) {
                        $ketquaphantichkhithai[$key]['lan2'] = 0;
                    }
                    if (!($kqptkt['lan3']) && !is_numeric($kqptkt['lan3'])) {
                        $ketquaphantichkhithai[$key]['lan3'] = 0;
                    }
                    if (!($kqptkt['lan4']) && !is_numeric($kqptkt['lan4'])) {
                        $ketquaphantichkhithai[$key]['lan4'] = 0;
                    }
//remove null record
                    if (count(array_unique(array_values($kqptkt))) <= 1) {
                        unset($ketquaphantichkhithai[$key]);
                    }
                }

//sort array
                foreach ($ketquaphantichkhithai as $key => $row) {
                    $stt[$key] = $row['stt'];
                    $thongsodo[$key] = $row['thongsodo'];
                    $ketquaphantichkhithai[$key]['temp_id'] = $key + 1;
                    $ketquaphantichkhithai[$key]['tong'] = $row['lan1'] + $row['lan2'] + $row['lan3'] + $row['lan4'];
                }
                if ($ketquaphantichkhithai)
                    array_multisort($stt, SORT_ASC, $thongsodo, SORT_ASC, $ketquaphantichkhithai);
                $this->Session->write('ketquaphantichkhithai', $ketquaphantichkhithai);
                $ketquaphantichkhithai = $this->Session->read('ketquaphantichkhithai');
                $this->set('ketquaphantichkhithai', $ketquaphantichkhithai);
                $this->render('Elements/Baocao/ketquaphantichcongnghexulykhithai');
            }elseif ($type == 6) {
                $data = $this->request->data;
                $hientrangchatthairansinhhoat = array();
                for ($i = 0; $i < count($data['ThuTu']); ++$i) {
                    $hientrangchatthairansinhhoat[$i] = array(
                        'stt' => $data['ThuTu'][$i],
                        'loaichatthai' => $data['Ten'][$i],
                        'donvi' => $data['DonVi'][$i],
                        'thang1' => $data['T1'][$i],
                        'thang2' => $data['T2'][$i],
                        'thang3' => $data['T3'][$i],
                        'thang4' => $data['T4'][$i],
                        'thang5' => $data['T5'][$i],
                        'thang6' => $data['T6'][$i],
                        'thang7' => $data['T7'][$i],
                        'thang8' => $data['T8'][$i],
                        'thang9' => $data['T9'][$i],
                        'thang10' => $data['T10'][$i],
                        'thang11' => $data['T11'][$i],
                        'thang12' => $data['T12'][$i],
                        'ghichu' => $data['GhiChu'][$i]
                    );
                }
//validate data
                foreach ($hientrangchatthairansinhhoat as $key => $htchrsh) {
                    if (!is_numeric($htchrsh['stt'])) {
                        $hientrangchatthairansinhhoat[$key]['stt'] = 0;
                    }
                    if (!($htchrsh['thang1']) && !is_numeric($htchrsh['thang1'])) {
                        $hientrangchatthairansinhhoat[$key]['thang1'] = 0;
                    }
                    if (!($htchrsh['thang2']) && !is_numeric($htchrsh['thang2'])) {
                        $hientrangchatthairansinhhoat[$key]['thang2'] = 0;
                    }
                    if (!($htchrsh['thang3']) && !is_numeric($htchrsh['thang3'])) {
                        $hientrangchatthairansinhhoat[$key]['thang3'] = 0;
                    }
                    if (!($htchrsh['thang4']) && !is_numeric($htchrsh['thang4'])) {
                        $hientrangchatthairansinhhoat[$key]['thang4'] = 0;
                    }
                    if (!($htchrsh['thang5']) && !is_numeric($htchrsh['thang5'])) {
                        $hientrangchatthairansinhhoat[$key]['thang5'] = 0;
                    }
                    if (!($htchrsh['thang6']) && !is_numeric($htchrsh['thang6'])) {
                        $hientrangchatthairansinhhoat[$key]['thang6'] = 0;
                    }
                    if (!($htchrsh['thang7']) && !is_numeric($htchrsh['thang7'])) {
                        $hientrangchatthairansinhhoat[$key]['thang7'] = 0;
                    }
                    if (!($htchrsh['thang8']) && !is_numeric($htchrsh['thang8'])) {
                        $hientrangchatthairansinhhoat[$key]['thang8'] = 0;
                    }
                    if (!($htchrsh['thang9']) && !is_numeric($htchrsh['thang9'])) {
                        $hientrangchatthairansinhhoat[$key]['thang9'] = 0;
                    }
                    if (!($htchrsh['thang10']) && !is_numeric($htchrsh['thang10'])) {
                        $hientrangchatthairansinhhoat[$key]['thang10'] = 0;
                    }
                    if (!($htchrsh['thang11']) && !is_numeric($htchrsh['thang11'])) {
                        $hientrangchatthairansinhhoat[$key]['thang11'] = 0;
                    }
                    if (!($htchrsh['thang12']) && !is_numeric($htchrsh['thang12'])) {
                        $hientrangchatthairansinhhoat[$key]['thang12'] = 0;
                    }
//remove null record
                    if (count(array_unique(array_values($htchrsh))) <= 1) {
                        unset($hientrangchatthairansinhhoat[$key]);
                    }
                }

//sort array
                foreach ($hientrangchatthairansinhhoat as $key => $row) {
                    $stt[$key] = $row['stt'];
                    $loaichatthai[$key] = $row['loaichatthai'];
                    $hientrangchatthairansinhhoat[$key]['temp_id'] = $key + 1;
                    $hientrangchatthairansinhhoat[$key]['tong'] = $row['thang1'] + $row['thang2'] + $row['thang3'] + $row['thang4'] + $row['thang5'] + $row['thang6'] + $row['thang7'] + $row['thang8'] + $row['thang9'] + $row['thang10'] + $row['thang11'] + $row['thang12'];
                }
                if ($hientrangchatthairansinhhoat)
                    array_multisort($stt, SORT_ASC, $loaichatthai, SORT_ASC, $hientrangchatthairansinhhoat);
                $this->Session->write('hientrangchatthairansinhhoat', $hientrangchatthairansinhhoat);
                $hientrangchatthairansinhhoat = $this->Session->read('hientrangchatthairansinhhoat');
                $this->set('hientrangchatthairansinhhoat', $hientrangchatthairansinhhoat);
                $this->render('Elements/Baocao/chatthairansinhhoat');
            } elseif ($type == 7) {
                $data = $this->request->data;
                $hientrangchatthairancongnghiep = array();
                for ($i = 0; $i < count($data['ThuTu']); ++$i) {
                    $hientrangchatthairancongnghiep[$i] = array(
                        'stt' => $data['ThuTu'][$i],
                        'loaichatthai' => $data['Ten'][$i],
                        'donvi' => $data['DonVi'][$i],
                        'thang1' => $data['T1'][$i],
                        'thang2' => $data['T2'][$i],
                        'thang3' => $data['T3'][$i],
                        'thang4' => $data['T4'][$i],
                        'thang5' => $data['T5'][$i],
                        'thang6' => $data['T6'][$i],
                        'thang7' => $data['T7'][$i],
                        'thang8' => $data['T8'][$i],
                        'thang9' => $data['T9'][$i],
                        'thang10' => $data['T10'][$i],
                        'thang11' => $data['T11'][$i],
                        'thang12' => $data['T12'][$i],
                        'ghichu' => $data['GhiChu'][$i]
                    );
                }
//validate data
                foreach ($hientrangchatthairancongnghiep as $key => $htchrcn) {
                    if (!is_numeric($htchrcn['stt'])) {
                        $hientrangchatthairancongnghiep[$key]['stt'] = 0;
                    }
                    if (!($htchrcn['thang1']) && !is_numeric($htchrcn['thang1'])) {
                        $hientrangchatthairancongnghiep[$key]['thang1'] = 0;
                    }
                    if (!($htchrcn['thang2']) && !is_numeric($htchrcn['thang2'])) {
                        $hientrangchatthairancongnghiep[$key]['thang2'] = 0;
                    }
                    if (!($htchrcn['thang3']) && !is_numeric($htchrcn['thang3'])) {
                        $hientrangchatthairancongnghiep[$key]['thang3'] = 0;
                    }
                    if (!($htchrcn['thang4']) && !is_numeric($htchrcn['thang4'])) {
                        $hientrangchatthairancongnghiep[$key]['thang4'] = 0;
                    }
                    if (!($htchrcn['thang5']) && !is_numeric($htchrcn['thang5'])) {
                        $hientrangchatthairancongnghiep[$key]['thang5'] = 0;
                    }
                    if (!($htchrcn['thang6']) && !is_numeric($htchrcn['thang6'])) {
                        $hientrangchatthairancongnghiep[$key]['thang6'] = 0;
                    }
                    if (!($htchrcn['thang7']) && !is_numeric($htchrcn['thang7'])) {
                        $hientrangchatthairancongnghiep[$key]['thang7'] = 0;
                    }
                    if (!($htchrcn['thang8']) && !is_numeric($htchrcn['thang8'])) {
                        $hientrangchatthairancongnghiep[$key]['thang8'] = 0;
                    }
                    if (!($htchrcn['thang9']) && !is_numeric($htchrcn['thang9'])) {
                        $hientrangchatthairancongnghiep[$key]['thang9'] = 0;
                    }
                    if (!($htchrcn['thang10']) && !is_numeric($htchrcn['thang10'])) {
                        $hientrangchatthairancongnghiep[$key]['thang10'] = 0;
                    }
                    if (!($htchrcn['thang11']) && !is_numeric($htchrcn['thang11'])) {
                        $hientrangchatthairancongnghiep[$key]['thang11'] = 0;
                    }
                    if (!($htchrcn['thang12']) && !is_numeric($htchrcn['thang12'])) {
                        $hientrangchatthairancongnghiep[$key]['thang12'] = 0;
                    }
//remove null record
                    if (count(array_unique(array_values($htchrcn))) <= 1) {
                        unset($hientrangchatthairancongnghiep[$key]);
                    }
                }

//sort array
                foreach ($hientrangchatthairancongnghiep as $key => $row) {
                    $stt[$key] = $row['stt'];
                    $loaichatthai[$key] = $row['loaichatthai'];
                    $hientrangchatthairancongnghiep[$key]['temp_id'] = $key + 1;
                    $hientrangchatthairancongnghiep[$key]['tong'] = $row['thang1'] + $row['thang2'] + $row['thang3'] + $row['thang4'] + $row['thang5'] + $row['thang6'] + $row['thang7'] + $row['thang8'] + $row['thang9'] + $row['thang10'] + $row['thang11'] + $row['thang12'];
                }
                if ($hientrangchatthairancongnghiep)
                    array_multisort($stt, SORT_ASC, $loaichatthai, SORT_ASC, $hientrangchatthairancongnghiep);
                $this->Session->write('hientrangchatthairancongnghiep', $hientrangchatthairancongnghiep);
                $hientrangchatthairancongnghiep = $this->Session->read('hientrangchatthairancongnghiep');
                $this->set('hientrangchatthairancongnghiep', $hientrangchatthairancongnghiep);
                $this->render('Elements/Baocao/chatthaicongnghiep');
            } elseif ($type == 8) {
                $data = $this->request->data;
                $hientrangchatthairannguyhai = array();
                for ($i = 0; $i < count($data['ThuTu']); ++$i) {
                    $hientrangchatthairannguyhai[$i] = array(
                        'stt' => $data['ThuTu'][$i],
                        'loaichatthai' => $data['Ten'][$i],
                        'donvi' => $data['DonVi'][$i],
                        'thang1' => $data['T1'][$i],
                        'thang2' => $data['T2'][$i],
                        'thang3' => $data['T3'][$i],
                        'thang4' => $data['T4'][$i],
                        'thang5' => $data['T5'][$i],
                        'thang6' => $data['T6'][$i],
                        'thang7' => $data['T7'][$i],
                        'thang8' => $data['T8'][$i],
                        'thang9' => $data['T9'][$i],
                        'thang10' => $data['T10'][$i],
                        'thang11' => $data['T11'][$i],
                        'thang12' => $data['T12'][$i],
                        'ghichu' => $data['GhiChu'][$i]
                    );
                }
//validate data
                foreach ($hientrangchatthairannguyhai as $key => $htchrnh) {
                    if (!is_numeric($htchrnh['stt'])) {
                        $hientrangchatthairannguyhai[$key]['stt'] = 0;
                    }
                    if (!($htchrnh['thang1']) && !is_numeric($htchrnh['thang1'])) {
                        $hientrangchatthairannguyhai[$key]['thang1'] = 0;
                    }
                    if (!($htchrnh['thang2']) && !is_numeric($htchrnh['thang2'])) {
                        $hientrangchatthairannguyhai[$key]['thang2'] = 0;
                    }
                    if (!($htchrnh['thang3']) && !is_numeric($htchrnh['thang3'])) {
                        $hientrangchatthairannguyhai[$key]['thang3'] = 0;
                    }
                    if (!($htchrnh['thang4']) && !is_numeric($htchrnh['thang4'])) {
                        $hientrangchatthairannguyhai[$key]['thang4'] = 0;
                    }
                    if (!($htchrnh['thang5']) && !is_numeric($htchrnh['thang5'])) {
                        $hientrangchatthairannguyhai[$key]['thang5'] = 0;
                    }
                    if (!($htchrnh['thang6']) && !is_numeric($htchrnh['thang6'])) {
                        $hientrangchatthairannguyhai[$key]['thang6'] = 0;
                    }
                    if (!($htchrnh['thang7']) && !is_numeric($htchrnh['thang7'])) {
                        $hientrangchatthairannguyhai[$key]['thang7'] = 0;
                    }
                    if (!($htchrnh['thang8']) && !is_numeric($htchrnh['thang8'])) {
                        $hientrangchatthairannguyhai[$key]['thang8'] = 0;
                    }
                    if (!($htchrnh['thang9']) && !is_numeric($htchrnh['thang9'])) {
                        $hientrangchatthairannguyhai[$key]['thang9'] = 0;
                    }
                    if (!($htchrnh['thang10']) && !is_numeric($htchrnh['thang10'])) {
                        $hientrangchatthairannguyhai[$key]['thang10'] = 0;
                    }
                    if (!($htchrnh['thang11']) && !is_numeric($htchrnh['thang11'])) {
                        $hientrangchatthairannguyhai[$key]['thang11'] = 0;
                    }
                    if (!($htchrnh['thang12']) && !is_numeric($htchrnh['thang12'])) {
                        $hientrangchatthairannguyhai[$key]['thang12'] = 0;
                    }
//remove null record
                    if (count(array_unique(array_values($htchrnh))) <= 1) {
                        unset($hientrangchatthairannguyhai[$key]);
                    }
                }

//sort array
                foreach ($hientrangchatthairannguyhai as $key => $row) {
                    $stt[$key] = $row['stt'];
                    $loaichatthai[$key] = $row['loaichatthai'];
                    $hientrangchatthairannguyhai[$key]['temp_id'] = $key + 1;
                    $hientrangchatthairannguyhai[$key]['tong'] = $row['thang1'] + $row['thang2'] + $row['thang3'] + $row['thang4'] + $row['thang5'] + $row['thang6'] + $row['thang7'] + $row['thang8'] + $row['thang9'] + $row['thang10'] + $row['thang11'] + $row['thang12'];
                }
                if ($hientrangchatthairannguyhai)
                    array_multisort($stt, SORT_ASC, $loaichatthai, SORT_ASC, $hientrangchatthairannguyhai);
                $this->Session->write('hientrangchatthairannguyhai', $hientrangchatthairannguyhai);
                $hientrangchatthairannguyhai = $this->Session->read('hientrangchatthairannguyhai');
                $this->set('hientrangchatthairannguyhai', $hientrangchatthairannguyhai);
                $this->render('Elements/Baocao/chatthainguyhai');
            }
        }
    }

    /**
     * tim kiem va liet ke danh sach bao cao giam sat moi truong
     * cua user hien hanh
     */
    public function danhsachbaocaogiamsatmoitruong() {
        if ($this->request->is('post')) {
            $this->loadModel('Admin.Search');
            $data = array(
                'startDate' => $this->request->data['Search']['txtStartDate'],
                'endDate' => $this->request->data['Search']['txtEndDate'],
            );
            $this->Search->set($data);
            if ($this->Search->validates()) {
                $this->loadModel('Admin.Baocaogsmt');
                $startdate = date_create_from_format('d/m/Y', $this->Search->data['Search']['startDate']);
                $enddate = date_create_from_format('d/m/Y', $this->Search->data['Search']['endDate']);
                $this->Paginator->settings = $this->paginate;
                $result = $this->Paginator->paginate('Baocaogsmt', array(
//                    'id_user' => $this->Auth->user('id'), //gioi han chi xem nhung bao cao user hien hanh da tao
//					'tungay <= ' => $startdate->format('Y-m-d'),
//					'tungay >= ' => $enddate->format('Y-m-d')
                ));
                $this->set('result', $result);
            }
        }
    }

    /**
     * xem chi tiet bao cao
     * @param type $id
     */
    public function xemchitiet($id) {
        if (isset($id) && $id && is_numeric($id)) {
            $this->loadModel('Admin.Baocaogsmt');
            $baocaogsmt = $this->Baocaogsmt->find('first', array('conditions' => array('Baocaogsmt.id' => $id)));
            if ($baocaogsmt) {
                $this->loadModel('Admin.BaocaogsmtDoanhnghiep');
                $doanghiepid = $baocaogsmt['BaocaogsmtDoanhnghiep']['id'];
                $dn = $this->BaocaogsmtDoanhnghiep->Doanhnghiepduoclapbaocao->findById($doanghiepid);
                $cosolapbaocao = $dn['Cosolapbaocao'];
                $this->set('cosolapbaocao', $cosolapbaocao);
                $this->set('data', $baocaogsmt);
            } else {
                throw new NotFoundException('Không tìm thấy báo cáo.');
            }
        } else {
            throw new NotFoundException('Không tìm thấy báo cáo.');
        }
        if ($this->request->is('post')) {
            if (isset($this->request->data['btnXoa'])) {
                $id_bc = $baocaogsmt['Baocaogsmt']['id'];
                $this->Baocaogsmt->Tinhhinhsxkd->deleteAll(array('Tinhhinhsxkd.id_bc' => $id_bc), false);
                $this->Baocaogsmt->Hientrangnuocthai->deleteAll(array('Hientrangnuocthai.id_bc' => $id_bc), false);
                $this->Baocaogsmt->Ketquaphantichnuocthai->deleteAll(array('Ketquaphantichnuocthai.id_bc' => $id_bc), false);
                $this->Baocaogsmt->Hientrangkhithai->deleteAll(array('Hientrangkhithai.id_bc' => $id_bc), false);
                $this->Baocaogsmt->Ketquaphantichkhithai->deleteAll(array('Ketquaphantichkhithai.id_bc' => $id_bc), false);
                $this->Baocaogsmt->Hientrangchatthairan->deleteAll(array('Hientrangchatthairan.id_bc' => $id_bc), false);
                if ($this->Baocaogsmt->delete($id_bc)) {
                    $this->Session->setFlash('Đã xóa thành công');
                    $this->redirect('/admin/baocao/baocaogiamsatmoitruong');
                }
            }
        }
    }

    /**
     * cho phep user xem hoac tai file dinh kem
     * @param type $id
     * @param type $file
     */
    public function viewfile($id, $file) {
        $this->layout = false;
        if ($id && $file) {
            $this->loadModel('Admin.Baocaogsmt');
            $bcgsmt = $this->Baocaogsmt->findById($id);
            if (is_array($bcgsmt) && count($bcgsmt)) {
                $file_dir = $bcgsmt['Baocaogsmt']['customdir'];
                $path = ROOT . DIRECTORY_SEPARATOR . APP_DIR . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR;
                $download_file = $path . $file_dir . $file;
                chmod($download_file, 0777);
                if (file_exists($download_file)) {
                    header('Content-Description: File Transfer');
//                    header('Content-Type: application/force-download');
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename=' . basename($download_file));
                    header('Content-Transfer-Encoding: binary');
                    header('Expires: 0');
                    header('Cache-Control: must-revalidate');
                    header('Pragma: public');
                    header('Content-Length: ' . filesize($download_file));
                    readfile($download_file);
                    chmod($download_file, 0644);
                    exit;
                }
            }
        } else {
            throw new NotFoundException('Không tìm thấy file');
        }
    }

    /**
     * in baocao
     * @param type $id
     */
    public function in($id) {
        $this->layout = 'print';
        if (isset($id) && $id && is_numeric($id)) {
            $this->loadModel('Admin.Baocaogsmt');
            $baocaogsmt = $this->Baocaogsmt->find('first', array('conditions' => array('Baocaogsmt.id' => $id)));
            if ($baocaogsmt) {
                $this->loadModel('Admin.BaocaogsmtDoanhnghiep');
                $doanghiepid = $baocaogsmt['BaocaogsmtDoanhnghiep']['id'];
                $dn = $this->BaocaogsmtDoanhnghiep->Doanhnghiepduoclapbaocao->findById($doanghiepid);
                $cosolapbaocao = $dn['Cosolapbaocao'];
                $this->set('cosolapbaocao', $cosolapbaocao);
                $this->set('data', $baocaogsmt);
            }
        } else {
            throw new NotFoundException('Không tồn tại báo cáo này');
        }
    }

    /**
     * Bao cao chat thai nguy hai
     * Chon doanh nghiep
     */
    public function baocaochatthainguyhaistep0() {
        $search_params = Set::filter($this->request->query);
        if ($search_params || isset($this->request->params['named']['sort'])) {
            unset($search_params['submit']);
            if ($search_params || isset($this->request->params['named']['sort'])) {
                $this->request->data = $search_params;
                $search_conditions = array();
                foreach ($search_params as $key => $value) {
                    if (!$value) {
                        //go bo cac dieu kien khong duoc nhap
                        unset($search_params[$key]);
                    } else {
                        $search_conditions["DoanhNghiep.$key LIKE"] = '%' . $value . '%';
                    }
                }
                if (count($search_conditions)) {
                    $this->Session->write('search_conditions', $search_conditions);
                }
                $this->Paginator->settings = array(
                    'limit' => 50
                );
                //try to read from session
                if (!count($search_conditions)) {
                    $search_conditions = $this->Session->read('search_conditions');
                }
                $this->loadModel('Admin.DoanhNghiep');
                $doanhnghieps = $this->Paginator->paginate('DoanhNghiep', array($search_conditions));
                $this->set('data', $doanhnghieps);
            } else {
                $this->Session->setFlash('Xin nhập thông tin tìm kiếm');
            }
        }
    }

    public function dangkyctnh($colMa) {
        $this->layout = false;
        $this->autoRender = false;
        if ($this->request->is('post')) {
            if ($colMa) {
                $this->loadModel('Admin.Baocaochatthainguyhai');
                $baocao = $this->Baocaochatthainguyhai->create();
                $baocao['colCSSX'] = $colMa;
                $baocao['created_date'] = date('Y-m-d');
                if ($baocao = $this->Baocaochatthainguyhai->save($baocao)) {
                    $this->Session->write('CurrentBaocaochatthainguyhai', $baocao);
                    $this->Session->write('colMaDoanhNghiepBaocaoCTNH', $colMa);
                }
                $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
            }
        }
    }

    public function baocaochatthainguyhai() {
        $colMa_doanhnghiep = $this->Session->read('colMaDoanhNghiepBaocaoCTNH');
        $this->loadModel('Admin.DoanhNghiep');
        if ($this->request->is('post') || $this->request->is('put')) {

            try {
                $data_doanhnghiep = $this->request->data['DoanhNghiep'];
                /*
                 * update list nganh
                 */
                if (isset($data_doanhnghiep['nganh']) && $data_doanhnghiep['nganh']) {
//                    $listnganh = array_values($data_doanhnghiep['nganh']);
//                    foreach ($listnganh as $key => $value) {
//                        if (!is_numeric($value)) {
//                            unset($listnganh[$key]);
//                        }
//                    }
//                    $i = 1;
//                    foreach ($listnganh as $nganh_id) {
//                        $data_doanhnghiep['colMaNganh' . $i] = $nganh_id;
//                        ++$i;
//                    }
//                    //dat lai gia tri cac colMaNganh khac
//                    if ($i < 6) {
//                        for ($j = $i; $j <= 6; $j++) {
//                            $key = 'colMaNganh' . $j;
//                            $data_doanhnghiep[$key] = '';
//                        }
//                    }
                    $data_doanhnghiep['colMaNganh1']=$data_doanhnghiep['nganh'];
                }
                //end update list nganh
                $this->DoanhNghiep->set($data_doanhnghiep);
                foreach ($data_doanhnghiep as $key => $value) {
                    if ($key !== 'colMa') {
                        $this->DoanhNghiep->saveField($key, $value);
                    }
                }
                if ($data_doanhnghiep['checkDN']) {
                    $coso = $data_doanhnghiep['CoSo'];
                    $listcoso_dn = $this->DoanhNghiep->findByColmadnme('$colMa_doanhnghiep');
                    if (!$listcoso_dn) {
                        //march nganh
                        if (isset($coso['nganh']) && is_array($coso['nganh']) && count($coso['nganh'])) {
                            $listnganh = array_values($coso['nganh']);
                            foreach ($listnganh as $key => $value) {
                                if (!is_numeric($value)) {
                                    unset($listnganh[$key]);
                                }
                            }
                            $i = 1;
                            foreach ($listnganh as $nganh_id) {
                                $coso['colMaNganh' . $i] = $nganh_id;
                                ++$i;
                            }
                            //dat lai gia tri cac colMaNganh khac
                            if ($i < 6) {
                                for ($j = $i; $j <= 6; $j++) {
                                    $key = 'colMaNganh' . $j;
                                    $coso[$key] = '';
                                }
                            }
                        }
                        //end march nganh
                        //set colDNME
                        $coso['colMaDNME'] = $colMa_doanhnghiep;
                        $validate_rules = $this->DoanhNghiep->validate;
                        unset($validate_rules['nam']);
                        unset($validate_rules['colNamHopDong']);
                        $this->DoanhNghiep->validate = $validate_rules;
                        $this->DoanhNghiep->set($coso);
                        $this->DoanhNghiep->save();
                    }
                }
                $this->Session->setFlash('Lưu thành công', 'default', array('class' => 'success'));
            } catch (Exception $ex) {
                $this->Session->setFlash('Lỗi: ' . $ex->getMessage());
            }
        }
        $doanhnghiep = $this->DoanhNghiep->findByColma($colMa_doanhnghiep);
        if (!$doanhnghiep) {
            $this->Session->setFlash('Xin chọn doanh nghiệp cần đăng ký chất thải nguy hại');
            $this->redirect('/admin/baocao/baocaochatthainguyhai/timkiem');
        }
        $nganh = array();
        for ($i = 1; $i <= 6; ++$i) {
            if ($doanhnghiep['DoanhNghiep']["colMaNganh$i"]) {
                $nganh[] = $doanhnghiep['DoanhNghiep']["colMaNganh$i"];
            }
        }
        if (date_create_from_format('Y-m-d H:i:s', $doanhnghiep['DoanhNghiep']['ngaycapchungnhanKDDT'])) {
            $doanhnghiep['DoanhNghiep']['ngaycapchungnhanKDDT'] = date('d/m/Y', strtotime($doanhnghiep['DoanhNghiep']['ngaycapchungnhanKDDT']));
        }
        if (date_create_from_format('Y-m-d H:i:s', $doanhnghiep['DoanhNghiep']['ngaycapcmndgiamdoc'])) {
            $doanhnghiep['DoanhNghiep']['ngaycapcmndgiamdoc'] = date('d/m/Y', strtotime($doanhnghiep['DoanhNghiep']['ngaycapcmndgiamdoc']));
        }
        $doanhnghiep['DoanhNghiep']['nganh'] = $nganh;
        $this->request->data = $doanhnghiep;
    }

    public function baocaochatthainguyhaistep2() {
        $colMa_doanhnghiep = $this->Session->read('colMaDoanhNghiepBaocaoCTNH');
        $this->loadModel('Admin.DoanhNghiep');
        $doanhnghiep = $this->DoanhNghiep->findByColma($colMa_doanhnghiep);
        if (!$doanhnghiep['Children']) {
            $this->Session->setFlash('Vui lòng chọn thông tin doanh nghiệp cần cập nhật thông tin nguồn thải nguy hại');
            $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
        }
        $list_children = $this->_getListChildrenCoso($doanhnghiep['Children']);
        $this->set('list_children', $list_children);
    }

    private function _getListChildrenCoso($list) {
        $result = array();
        foreach ($list as $dn) {
            $result[$dn['colMa']] = $dn['colTen'];
        }
        return $result;
    }

    public function baocaochatthainguyhaistep3() {
        $colMa_doanhnghiep = $this->Session->read('colMaDoanhNghiepBaocaoCTNH');
        $this->loadModel('Admin.DoanhNghiep');
        $doanhnghiep = $this->DoanhNghiep->findByColma($colMa_doanhnghiep);
        if (!$doanhnghiep['Children']) {
            $this->Session->setFlash('Vui lòng chọn thông tin doanh nghiệp cần cập nhật thông tin nguồn thải nguy hại');
            $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
        }
        $list_children = $this->_getListChildrenCoso($doanhnghiep['Children']);
        $this->set('list_children', $list_children);
    }

    public function baocaochatthainguyhaistep4() {
        $colMa_doanhnghiep = $this->Session->read('colMaDoanhNghiepBaocaoCTNH');
        $this->loadModel('Admin.DoanhNghiep');
        $doanhnghiep = $this->DoanhNghiep->findByColma($colMa_doanhnghiep);
        if (!$doanhnghiep['Children']) {
            $this->Session->setFlash('Vui lòng chọn thông tin doanh nghiệp cần cập nhật thông tin nguồn thải nguy hại');
            $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
        }
        $baocao = $this->Session->read('CurrentBaocaochatthainguyhai');
        if (!$baocao) {
            $this->Session->setFlash('Vui lòng chọn thông tin doanh nghiệp cần cập nhật thông tin nguồn thải nguy hại');
            $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
        }
        $this->set('colMaBaocao', $baocao['Baocaochatthainguyhai']['colMa']);
        $this->loadModel('Admin.Hosokemtheo');
        if ($this->request->is('post')) {
            $upload_dir = UPLOAD_DIR;
            $hosokemtheo = $this->request->data['Hosokemtheo'];
            if (move_uploaded_file($hosokemtheo['tenfile']['tmp_name'], $upload_dir . $hosokemtheo['tenfile']['name'])) {

                $data = $hosokemtheo;
                $data['tenfile'] = $hosokemtheo['tenfile']['name'];
                $data['filepath'] = $hosokemtheo['tenfile']['name'];
                $data['filesize'] = $hosokemtheo['tenfile']['size'];
                $this->Hosokemtheo->set($data);
                if ($this->Hosokemtheo->validates()) {
                    $saved = $this->Hosokemtheo->save();
                    if ($saved) {
                        $this->Session->setFlash('Upload thành công', 'default', array('class' => 'success'));
                        $this->redirect($this->here);
                    }
                }
            } else {
                $this->Session->setFlash('Lỗi! Không thể upload file.Chú ý dung lượng file < 2MB');
            }
        }
        $listhskt = $this->Hosokemtheo->find('all', array('colMaBaocao' => $baocao['Baocaochatthainguyhai']['colMa']));
        $this->set('listhosokemtheo', $listhskt);
    }

    public function baocaochatthainguyhaistep5() {
        $colMa_doanhnghiep = $this->Session->read('colMaDoanhNghiepBaocaoCTNH');
        $this->loadModel('Admin.DoanhNghiep');
        $doanhnghiep = $this->DoanhNghiep->findByColma($colMa_doanhnghiep);
        if (!$doanhnghiep['Children']) {
            $this->Session->setFlash('Vui lòng chọn thông tin doanh nghiệp cần cập nhật thông tin nguồn thải nguy hại');
            $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
        }
        $baocao = $this->Session->read('CurrentBaocaochatthainguyhai');
        if (!$baocao) {
            $this->Session->setFlash('Vui lòng chọn thông tin doanh nghiệp cần cập nhật thông tin nguồn thải nguy hại');
            $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
        }
//        pr($doanhnghiep);
        $this->loadModel('Admin.NguyenLieuSanPham');
        $this->loadModel('Admin.SanPhamDoanhNghiep');
        $this->loadModel('Admin.Baocaochatthainguyhai');
        $baocaochatthainguyhai = $this->Baocaochatthainguyhai->findByColma($baocao['Baocaochatthainguyhai']['colMa']);
        $this->set('baocaochatthainguyhai', $baocaochatthainguyhai);
//       pr($baocaochatthainguyhai);
        $children_doanhnghiep = $doanhnghiep['Children'];
        foreach ($children_doanhnghiep as $key => $child) {
            $colMaChild = $child['colMa'];
            $child_info = $this->DoanhNghiep->findByColma($colMaChild);
            $doanhnghiep['Children'][$key]['DoanhNghiep'] = $child_info;
            foreach ($doanhnghiep['Children'][$key]['DoanhNghiep']['NguyenLieuSanPham'] as $keyc => $nlspc) {
                $nlsp = $this->NguyenLieuSanPham->findByColma($nlspc['colMa']);
                $doanhnghiep['Children'][$key]['DoanhNghiep']['NguyenLieuSanPham'][$keyc]['NguyenLieuSanPham'] = $nlsp;
            }
            foreach ($doanhnghiep['Children'][$key]['DoanhNghiep']['SanPhamDoanhNghiep'] as $keyc => $spc) {
                $sp = $this->SanPhamDoanhNghiep->findByColma($spc['colMa']);
                $doanhnghiep['Children'][$key]['DoanhNghiep']['SanPhamDoanhNghiep'][$keyc]['SanPhamDoanhNghiep'] = $sp;
            }
        }
//        pr($doanhnghiep);
        $this->set('colMaBaocao', $baocao['Baocaochatthainguyhai']['colMa']);
        $this->set('doanhnghiep', $doanhnghiep);
        if ($this->request->is('post')) {
            $this->loadModel('Admin.Baocaochatthainguyhai');
            $baocao_saving = $baocao['Baocaochatthainguyhai'];
            $baocao_saving['status'] = 1;
            if ($this->Baocaochatthainguyhai->save($baocao_saving)) {
                $this->Session->setFlash('Lưu thành công', 'default', array('class' => 'success'));
                $this->Session->delete('colMaDoanhNghiepBaocaoCTNH');
                $this->Session->delete('CurrentBaocaochatthainguyhai');
                $this->redirect('/admin/baocao/danhsachbaocaochatthainguyhai');
            }
        }
    }

    public function update($id) {
        if($id){
            $this->loadModel('Admin.Baocaochatthainguyhai');
            $baocao=$this->Baocaochatthainguyhai->findByColma($id);
            if($baocao){
                $this->Session->write('CurrentBaocaochatthainguyhai',$baocao);
                $this->Session->write('colMaDoanhNghiepBaocaoCTNH',$baocao['Baocaochatthainguyhai']['colCSSX']);
                $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
            }else{
                $this->Session->setFlash('Không tìm thấy báo cáo');
                $this->redirect('/admin/baocao/baocaochatthainguyhai/timkiem');
            }
        }
    }
    public function chatthainguyhaiphatsinh() {
        
    }

    public function chatthainguyhaitonluu() {
        
    }

    public function themchatthainguyhai() {
        $this->layout = false;
        $this->autoRender = false;
        if ($this->request->is('post')) {
            $chatthainguyhai = $this->request->data;
            $this->loadModel('Admin.ChatThaiNguyHai');
            $this->ChatThaiNguyHai->set($chatthainguyhai);
            if ($this->ChatThaiNguyHai->validates()) {
                if ($this->ChatThaiNguyHai->save()) {
                    $this->Session->setFlash('Lưu thành công', 'default', array('class' => 'success'));
                }
            }
        }
    }

    public function review() {
        $this->layout = 'review';
        $colMa_doanhnghiep = $this->Session->read('colMaDoanhNghiepBaocaoCTNH');
        $this->loadModel('Admin.DoanhNghiep');
        $doanhnghiep = $this->DoanhNghiep->findByColma($colMa_doanhnghiep);
        if (!$doanhnghiep['Children']) {
            $this->Session->setFlash('Vui lòng chọn thông tin doanh nghiệp cần cập nhật thông tin nguồn thải nguy hại');
            $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
        }
        $baocao = $this->Session->read('CurrentBaocaochatthainguyhai');
        if (!$baocao) {
            $this->Session->setFlash('Vui lòng chọn thông tin doanh nghiệp cần cập nhật thông tin nguồn thải nguy hại');
            $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
        }
//        pr($doanhnghiep);
        $this->loadModel('Admin.NguyenLieuSanPham');
        $this->loadModel('Admin.SanPhamDoanhNghiep');
        $this->loadModel('Admin.Baocaochatthainguyhai');
        $baocaochatthainguyhai = $this->Baocaochatthainguyhai->findByColma($baocao['Baocaochatthainguyhai']['colMa']);
        $this->set('baocaochatthainguyhai', $baocaochatthainguyhai);
//       pr($baocaochatthainguyhai);
        $children_doanhnghiep = $doanhnghiep['Children'];
        foreach ($children_doanhnghiep as $key => $child) {
            $colMaChild = $child['colMa'];
            $child_info = $this->DoanhNghiep->findByColma($colMaChild);
            $doanhnghiep['Children'][$key]['DoanhNghiep'] = $child_info;
            foreach ($doanhnghiep['Children'][$key]['DoanhNghiep']['NguyenLieuSanPham'] as $keyc => $nlspc) {
                $nlsp = $this->NguyenLieuSanPham->findByColma($nlspc['colMa']);
                $doanhnghiep['Children'][$key]['DoanhNghiep']['NguyenLieuSanPham'][$keyc]['NguyenLieuSanPham'] = $nlsp;
            }
            foreach ($doanhnghiep['Children'][$key]['DoanhNghiep']['SanPhamDoanhNghiep'] as $keyc => $spc) {
                $sp = $this->SanPhamDoanhNghiep->findByColma($spc['colMa']);
                $doanhnghiep['Children'][$key]['DoanhNghiep']['SanPhamDoanhNghiep'][$keyc]['SanPhamDoanhNghiep'] = $sp;
            }
        }
        $this->set('colMaBaocao', $baocao['Baocaochatthainguyhai']['colMa']);
        $this->set('doanhnghiep', $doanhnghiep);
    }

    public function ketxuatword() {

        $this->layout = 'review';
        $colMa_doanhnghiep = $this->Session->read('colMaDoanhNghiepBaocaoCTNH');
        $this->loadModel('Admin.DoanhNghiep');
        $doanhnghiep = $this->DoanhNghiep->findByColma($colMa_doanhnghiep);
        if (!$doanhnghiep['Children']) {
            $this->Session->setFlash('Vui lòng chọn thông tin doanh nghiệp cần cập nhật thông tin nguồn thải nguy hại');
            $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
        }
        $baocao = $this->Session->read('CurrentBaocaochatthainguyhai');
        if (!$baocao) {
            $this->Session->setFlash('Vui lòng chọn thông tin doanh nghiệp cần cập nhật thông tin nguồn thải nguy hại');
            $this->redirect('/admin/baocao/baocaochatthainguyhai/step1');
        }
//        pr($doanhnghiep);
        $this->loadModel('Admin.NguyenLieuSanPham');
        $this->loadModel('Admin.SanPhamDoanhNghiep');
        $this->loadModel('Admin.Baocaochatthainguyhai');
        $baocaochatthainguyhai = $this->Baocaochatthainguyhai->findByColma($baocao['Baocaochatthainguyhai']['colMa']);
        $this->set('baocaochatthainguyhai', $baocaochatthainguyhai);
//       pr($baocaochatthainguyhai);
        $children_doanhnghiep = $doanhnghiep['Children'];
        foreach ($children_doanhnghiep as $key => $child) {
            $colMaChild = $child['colMa'];
            $child_info = $this->DoanhNghiep->findByColma($colMaChild);
            $doanhnghiep['Children'][$key]['DoanhNghiep'] = $child_info;
            foreach ($doanhnghiep['Children'][$key]['DoanhNghiep']['NguyenLieuSanPham'] as $keyc => $nlspc) {
                $nlsp = $this->NguyenLieuSanPham->findByColma($nlspc['colMa']);
                $doanhnghiep['Children'][$key]['DoanhNghiep']['NguyenLieuSanPham'][$keyc]['NguyenLieuSanPham'] = $nlsp;
            }
            foreach ($doanhnghiep['Children'][$key]['DoanhNghiep']['SanPhamDoanhNghiep'] as $keyc => $spc) {
                $sp = $this->SanPhamDoanhNghiep->findByColma($spc['colMa']);
                $doanhnghiep['Children'][$key]['DoanhNghiep']['SanPhamDoanhNghiep'][$keyc]['SanPhamDoanhNghiep'] = $sp;
            }
        }
        $this->set('colMaBaocao', $baocao['Baocaochatthainguyhai']['colMa']);
        $this->set('doanhnghiep', $doanhnghiep);
        $docname = 'BaoCaoCTNH_' . $doanhnghiep['DoanhNghiep']['colTen'];
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=$docname.doc");
    }

    public function danhsachbaocaochatthainguyhai() {
        $trang_thais = array(
            0 => 'Đang soạn',
            1 => 'Đang tiếp nhận',
            2 => 'Thụ lý',
            3 => 'Chờ duyệt',
            4 => 'Chờ cấp sổ',
            5 => 'Đã cấp sổ',
        );
        $this->loadModel('Admin.Baocaochatthainguyhai');
        $this->Paginator->settings = array('limit' => 50);
        $data = $this->Paginator->paginate('Baocaochatthainguyhai');
        $this->set('data', $data);
        $this->set('trangthais', $trang_thais);
    }

}

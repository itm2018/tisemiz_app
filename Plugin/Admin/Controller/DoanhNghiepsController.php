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

    public function beforeFiler() {
//        parent::beforeFiler();
        $this->Security->allowedControllers = array('Admin.Doanhnghieps');
        $this->Security->allowedActions = array('themmoi');
        $this->Security->unlockedActions = array('themmoi');
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

    public function themmoi() {
        $this->loadModel('Admin.DoanhNghiep');
        $savingDoanhNghiep = $this->Session->read('savingDoanhNghiep');
        if ($savingDoanhNghiep) {
            $this->Session->delete('savingDoanhNghiep');
            $this->set('savingDoanhNghiep', $savingDoanhNghiep);
        }
        if ($this->request->is('post')) {
            if (!empty($this->request->data['DoanhNghiep'])) {
                $this->set('tab_ttdn', 1);
                if (!isset($savingDoanhNghiep['colMa']) || !$savingDoanhNghiep['colMa']) {
                    $doanhnghiepdata = $this->request->data['DoanhNghiep'];
                    $path = ROOT . DIRECTORY_SEPARATOR . APP_DIR . DIRECTORY_SEPARATOR . WEBROOT_DIR . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR;
                    if (move_uploaded_file($this->request->data['DoanhNghiep']['colHinhAnh']['tmp_name'], $path . $this->request->data['DoanhNghiep']['colHinhAnh']['name'])) {
                        $doanhnghiepdata['colHinhAnh'] = '/uploads/' . $doanhnghiepdata['colHinhAnh']['name'];
                    } else {
                        $doanhnghiepdata['colHinhAnh'] = 'failed upload';
                    }
                    var_dump($doanhnghiepdata['nganh']);exit;
                    if (isset($doanhnghiepdata['nganh'])) {
                        $nganh = array_values($doanhnghiepdata['nganh']);
                        foreach ($nganh as $key => $value) {
                            if (!is_numeric($value)) {
                                unset($nganh[$key]);
                            }
                        }
                        $i = 1;
                        foreach ($nganh as $nganh_id) {
                            $doanhnghiepdata['colNganh' . $i] = $nganh_id;
                            ++$i;
                        }
                    }
                    $this->DoanhNghiep->set($doanhnghiepdata);
                    if ($this->DoanhNghiep->validates()) {
                        var_dump($doanhnghiepdata);exit;
                        $dn = $this->DoanhNghiep->save($doanhnghiepdata);
                        if ($dn) {
                            $this->Session->write('savingDoanhNghiep', $dn);
//                        var_dump($dn);exit;
                            $this->Session->setFlash(__('Lưu thành công thông tin doanh nghiệp'), 'default', array('class' => 'message success'));
                        }
                    }
                    var_dump($this->DoanhNghiep->validationErrors);exit;
                }
            }
            if (!empty($this->request->data['HoatDongSanXuat'])) {
//                $this->set('tab_hdsx', 1);
                $this->loadModel('Admin.HoatDongSanXuat');
                $data = $this->request->data['HoatDongSanXuat'];
                $data['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
                $this->HoatDongSanXuat->set($data);
                if ($this->HoatDongSanXuat->validates()) {
                    $savingDoanhNghiep['HoatDongSanXuat'] = $data;
                    $savingDoanhNghiep['HoatDongSanXuat']['colNam'] = $savingDoanhNghiep['DoanhNghiep']['nam'];
//                    var_dump($savingDoanhNghiep);
//                        exit;
                    $hdsx = $this->DoanhNghiep->saveAssociated($savingDoanhNghiep);
                    if ($hdsx) {
                        $this->Session->setFlash('Đã lưu hoạt động sản xuất của doanh nghiệp', 'default', array('class' => 'message success'));
                        $this->Session->write('savingDoanhNghiep', $hdsx);
                    } else {
                        $this->Session->setFlash('Không có thông tin nào thay đổi', 'default', array('class' => 'message success'));
                    }
                }
            }
        }
    }

}

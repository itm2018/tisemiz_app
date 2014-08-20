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
            $this->set('savingDoanhNghiep', $savingDoanhNghiep);
        }
        if ($this->request->is('post')) {
            if (!empty($this->request->data['DoanhNghiep'])) {
                $this->set('tab_ttdn', 1);
//                var_dump($this->request->data['DoanhNghiep']);
//                exit;
                if (!isset($savingDoanhNghiep['colMa']) || !$savingDoanhNghiep['colMa']) {

                    $this->DoanhNghiep->set($this->request->data['DoanhNghiep']);
                    if ($this->DoanhNghiep->validates()) {

                        $dn = $this->DoanhNghiep->save($this->request->data['DoanhNghiep']);
                        if ($dn) {
                            $this->Session->write('savingDoanhNghiep', $dn);
//                        var_dump($dn);exit;
                            $this->Session->setFlash(__('Lưu thành công thông tin doanh nghiệp'), 'default', array('class' => 'message success'));
                        }
                    }
                }
            }
            if (!empty($this->request->data['HoatDongSanXuat'])) {
                $this->set('tab_hdsx', 1);
                $this->loadModel('Admin.HoatDongSanXuat');
                $data = $this->request->data['HoatDongSanXuat'];
                $data['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
                $this->HoatDongSanXuat->set($data);
                if ($this->HoatDongSanXuat->validates()) {
//                    $savingDoanhNghiep['HoatDongSanXuat'] = $this->request->data['HoatDongSanXuat'];
//                    $savingDoanhNghiep['colCSSX'] = $savingDoanhNghiep['DoanhNghiep']['colMa'];
//                    var_dump($savingDoanhNghiep);
//                        exit;
                    $hdsx = $this->HoatDongSanXuat->save();
                    if ($hdsx) {
                        $this->Session->setFlash('Đã lưu hoạt động sản xuất của doanh nghiệp', 'default', array('class' => 'message success'));
//                        $this->Session->write('savingDoanhNghiep', $dn);
//                        var_dump($dn);
//                        exit;
                    }
                }
            }
        }
    }

}

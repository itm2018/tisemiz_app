<?php

/**
 * Created by Huynh Son Ca.
 * User: cahs
 * Date: 6/22/14
 * Time: 1:18 PM
 */
App::uses('AdminAppController', 'Admin.Controller');

class BaocaoController extends AdminAppController {

	public $layout = 'admin/backward';

	public function baocaogiamsatmoitruong() {
		$baocaogsmt_id = date('YmdHis') . rand(0, 1000);
		$this->set('baocaogsmt_id', $baocaogsmt_id);
		$this->Session->write('baocaogsmt_id', $baocaogsmt_id);
	}

	public function dulieugiamsatmoitruong() {
		$this->layout = 'popup';
		$type = $this->request->query('type');
		$baocaogsmt_id = $this->request->query('baocaogsmtid');
//		if (!empty($type) && !empty($baocaogsmt_id) && is_numeric($type) && $baocaogsmt_id == $this->Session->read('baocaogsmt_id')) {
		if (!empty($type) && !empty($baocaogsmt_id) && is_numeric($type)) {
			$this->set('baocaogsmt_id',$this->Session->read('baocaogsmt_id'));
			if ($type == 3) {
				//tinh hinh san xuat kinh doanh trong ky bao cao
				$this->render('Elements/Baocao/tinhhinhsanxuatkinhdoanh');
			} elseif ($type == 4) {
				//nguon phat sinh nuoc thai
				$this->render('Elements/Baocao/nguonphatsinhnuocthai');
			} elseif ($type == 12) {
				//ketquaphantichnuocthai
				$this->render('Elements/Baocao/ketquaphantichcongnghexulynuocthai');
			} elseif ($type == 5) {
				//nguon phat sinh khi thai
				$this->render('Elements/Baocao/nguonphatsinhkhithai');
			} elseif ($type == 13) {
				//ket qua phan tich khi thai
				$this->render('Elements/Baocao/ketquaphantichcongnghexulykhithai');
			} elseif ($type == 6) {
				//chat thai ran sinh hoat
				$this->render('Elements/Baocao/chatthairansinhhoat');
			} elseif ($type == 7) {
				//chat thai cong nghiep
				$this->render('Elements/Baocao/chatthaicongnghiep');
			} elseif ($type == 8) {
				//chat thai nguy hai
				$this->render('Elements/Baocao/chatthainguyhai');
			}
		} else {
			$this->Session->setFlash('Có lỗi xảy ra. Bạn đang thay đổi thông tin hệ thống.');
			$this->render(false);
		}
		if($this->request->is('post')){
			if($type==3){
				$data=$this->request->data;
				$tinhhinhsxkd=array(
					0=>array(
						'stt'=>$data['ThuTu'][0],
						'tensp'=>$data['Ten'][0],
						'donvi'=>$data['DonVi'][0],
						'quy1'=>$data['T1'][0],
						'quy2'=>$data['T2'][0],
						'quy3'=>$data['T3'][0],
						'quy4'=>$data['T4'][0],
						)
				);
				
			}
		}
	}

}

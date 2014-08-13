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
		$tinhhinhsanxuatkinhdoanh = $this->Session->read('tinhhinhsxkd');
		$this->set('tinhhinhsxkd',$tinhhinhsanxuatkinhdoanh);
	}

	public function dulieugiamsatmoitruong() {
		$this->layout = 'popup';
		$type = $this->request->query('type');
		$baocaogsmt_id = $this->request->query('baocaogsmtid');
//		if (!empty($type) && !empty($baocaogsmt_id) && is_numeric($type) && $baocaogsmt_id == $this->Session->read('baocaogsmt_id')) {
		if (!empty($type) && !empty($baocaogsmt_id) && is_numeric($type)) {
			$this->set('baocaogsmt_id', $this->Session->read('baocaogsmt_id'));
			if ($type == 3) {
				$tinhhinhsxkd = $this->Session->read('tinhhinhsxkd');
				//for delete action
				if ($this->request->query('action') == 'delete' && $this->request->query('ID') && is_numeric($this->request->query('ID'))) {
					foreach($tinhhinhsxkd as $key => $thsxkd) {
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
		if ($this->request->is('post')) {
			if ($type == 3) {
				$data = $this->request->data;
				$tinhhinhsxkd = array();
				for($i = 0; $i < count($data['ThuTu']); ++$i) {
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
				foreach($tinhhinhsxkd as $key => $thsxkd) {
					if (!is_numeric($thsxkd['stt'])) {
						$tinhhinhsxkd[$key]['stt'] = 0;
					}
					if (!empty($thsxkd['quy1']) && !is_numeric($thsxkd['quy1'])) {
						$tinhhinhsxkd[$key]['quy1'] = 0;
					}
					if (!empty($thsxkd['quy2']) && !is_numeric($thsxkd['quy2'])) {
						$tinhhinhsxkd[$key]['quy2'] = 0;
					}
					if (!empty($thsxkd['quy3']) && !is_numeric($thsxkd['quy3'])) {
						$tinhhinhsxkd[$key]['quy3'] = 0;
					}
					if (!empty($thsxkd['quy4']) && !is_numeric($thsxkd['quy4'])) {
						$tinhhinhsxkd[$key]['quy4'] = 0;
					}
					//remove null record
					if (count(array_unique(array_values($thsxkd))) <= 1) {
						unset($tinhhinhsxkd[$key]);
					}
				}
//				$tinhhinhsxkd_in_session = array();
//				if($this->Session->read('tinhhinhsxkd')){
//					$tinhhinhsxkd_in_session= $this->Session->read('tinhhinhsxkd');
//				}
//				$tinhhinhsxkd = array_merge($tinhhinhsxkd_in_session,$tinhhinhsxkd);
				//sort array
				foreach($tinhhinhsxkd as $key => $row) {
					$stt[$key] = $row['stt'];
					$tensp[$key] = $row['tensp'];
					$tinhhinhsxkd[$key]['temp_id'] = $key;
					$tinhhinhsxkd[$key]['tong'] = $row['quy1'] + $row['quy2'] + $row['quy3'] + $row['quy4'];
				}
				array_multisort($stt, SORT_ASC, $tensp, SORT_ASC, $tinhhinhsxkd);
				$this->Session->write('tinhhinhsxkd', $tinhhinhsxkd);
				$tinhhinhsxkd = $this->Session->read('tinhhinhsxkd');
				$this->set('tinhhinhsxkd', $tinhhinhsxkd);
				$this->render('Elements/Baocao/tinhhinhsanxuatkinhdoanh');
			}
		}
	}

}

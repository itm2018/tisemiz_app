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
        $this->set('tinhhinhsxkd', $tinhhinhsanxuatkinhdoanh);
        $nguonphatsinhnuocthai = $this->Session->read('nguonphatsinhnuocthai');
        $this->set('nguonphatsinhnuocthai', $nguonphatsinhnuocthai);
        $ketquaphantichnuocthai = $this->Session->read('ketquaphantichnuocthai');
        $this->set('ketquaphantichnuocthai', $ketquaphantichnuocthai);
        $nguonphatsinhkhithai = $this->Session->read('nguonphatsinhkhithai');
        $this->set('nguonphatsinhkhithai', $nguonphatsinhkhithai);
        $ketquaphantichkhithai = $this->Session->read('ketquaphantichkhithai');
        $this->set('ketquaphantichkhithai', $ketquaphantichkhithai);
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
                $hientrangchatthairannguyhai = $this->Session->read('hientrangchatthairannguyhai');
                //for delete action
                if ($this->request->query('action') == 'delete' && $this->request->query('ID') && is_numeric($this->request->query('ID'))) {
                    foreach ($hientrangchatthairannguyhai as $key => $htchrcn) {
                        if ($htchrcn['temp_id'] == $this->request->query('ID')) {
                            unset($hientrangchatthairannguyhai[$key]);
                        }
                    }
                    $this->Session->write('hientrangchatthairannguyhai', $hientrangchatthairannguyhai);
                }
                $this->set('hientrangchatthairannguyhai', $hientrangchatthairannguyhai);
                //chat thai cong nghiep
                $this->render('Elements/Baocao/chatthainguyhai');
            } elseif ($type == 8) {
                $hientrangchathairannguyhai = $this->Session->read('hientrangchathairannguyhai');
                //for delete action
                if ($this->request->query('action') == 'delete' && $this->request->query('ID') && is_numeric($this->request->query('ID'))) {
                    foreach ($hientrangchathairannguyhai as $key => $htchrnh) {
                        if ($htchrnh['temp_id'] == $this->request->query('ID')) {
                            unset($hientrangchathairannguyhai[$key]);
                        }
                    }
                    $this->Session->write('hientrangchathairannguyhai', $hientrangchathairannguyhai);
                }
                $this->set('hientrangchathairannguyhai', $hientrangchathairannguyhai);
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
                //sort array
                foreach ($tinhhinhsxkd as $key => $row) {
                    $stt[$key] = $row['stt'];
                    $tensp[$key] = $row['tensp'];
                    $tinhhinhsxkd[$key]['temp_id'] = $key;
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
                    if (!empty($npsnt['quy1']) && !is_numeric($npsnt['quy1'])) {
                        $nguonphatsinhnuocthai[$key]['quy1'] = 0;
                    }
                    if (!empty($npsnt['quy2']) && !is_numeric($npsnt['quy2'])) {
                        $nguonphatsinhnuocthai[$key]['quy2'] = 0;
                    }
                    if (!empty($npsnt['quy3']) && !is_numeric($npsnt['quy3'])) {
                        $nguonphatsinhnuocthai[$key]['quy3'] = 0;
                    }
                    if (!empty($npsnt['quy4']) && !is_numeric($npsnt['quy4'])) {
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
                    $nguonphatsinhnuocthai[$key]['temp_id'] = $key;
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
                    if (!empty($kqptnt['lan1']) && !is_numeric($kqptnt['lan1'])) {
                        $ketquaphantichnuocthai[$key]['lan1'] = 0;
                    }
                    if (!empty($kqptnt['lan2']) && !is_numeric($kqptnt['lan2'])) {
                        $ketquaphantichnuocthai[$key]['lan2'] = 0;
                    }
                    if (!empty($kqptnt['lan3']) && !is_numeric($kqptnt['lan3'])) {
                        $ketquaphantichnuocthai[$key]['lan3'] = 0;
                    }
                    if (!empty($kqptnt['lan4']) && !is_numeric($kqptnt['lan4'])) {
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
                    $ketquaphantichnuocthai[$key]['temp_id'] = $key;
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
                    if (!empty($npskt['quy1']) && !is_numeric($npskt['quy1'])) {
                        $nguonphatsinhkhithai[$key]['quy1'] = 0;
                    }
                    if (!empty($npskt['quy2']) && !is_numeric($npskt['quy2'])) {
                        $nguonphatsinhkhithai[$key]['quy2'] = 0;
                    }
                    if (!empty($npskt['quy3']) && !is_numeric($npskt['quy3'])) {
                        $nguonphatsinhkhithai[$key]['quy3'] = 0;
                    }
                    if (!empty($npskt['quy4']) && !is_numeric($npskt['quy4'])) {
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
                    $nguonphatsinhkhithai[$key]['temp_id'] = $key;
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
                    if (!empty($kqptkt['lan1']) && !is_numeric($kqptkt['lan1'])) {
                        $ketquaphantichkhithai[$key]['lan1'] = 0;
                    }
                    if (!empty($kqptkt['lan2']) && !is_numeric($kqptkt['lan2'])) {
                        $ketquaphantichkhithai[$key]['lan2'] = 0;
                    }
                    if (!empty($kqptkt['lan3']) && !is_numeric($kqptkt['lan3'])) {
                        $ketquaphantichkhithai[$key]['lan3'] = 0;
                    }
                    if (!empty($kqptkt['lan4']) && !is_numeric($kqptkt['lan4'])) {
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
                    $ketquaphantichkhithai[$key]['temp_id'] = $key;
                    $ketquaphantichkhithai[$key]['tong'] = $row['thang1'] + $row['thang2'] + $row['thang3'] + $row['thang4'] + $row['thang5'] + $row['thang6'] + $row['thang7'] + $row['thang8'] + $row['thang7'] + $row['thang9'] + $row['thang10'] + $row['thang11'] + $row['thang7'] + $row['thang8'] + $row['thang7'] + $row['thang9'] + $row['thang10'] + $row['thang11'] + $row['thang12'];
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
                    if (!empty($htchrsh['thang1']) && !is_numeric($htchrsh['thang1'])) {
                        $hientrangchatthairansinhhoat[$key]['thang1'] = 0;
                    }
                    if (!empty($htchrsh['thang2']) && !is_numeric($htchrsh['thang2'])) {
                        $hientrangchatthairansinhhoat[$key]['thang2'] = 0;
                    }
                    if (!empty($htchrsh['thang3']) && !is_numeric($htchrsh['thang3'])) {
                        $hientrangchatthairansinhhoat[$key]['thang3'] = 0;
                    }
                    if (!empty($htchrsh['thang4']) && !is_numeric($htchrsh['thang4'])) {
                        $hientrangchatthairansinhhoat[$key]['thang4'] = 0;
                    }
                    if (!empty($htchrsh['thang5']) && !is_numeric($htchrsh['thang5'])) {
                        $hientrangchatthairansinhhoat[$key]['thang5'] = 0;
                    }
                    if (!empty($htchrsh['thang6']) && !is_numeric($htchrsh['thang6'])) {
                        $hientrangchatthairansinhhoat[$key]['thang6'] = 0;
                    }
                    if (!empty($htchrsh['thang7']) && !is_numeric($htchrsh['thang7'])) {
                        $hientrangchatthairansinhhoat[$key]['thang7'] = 0;
                    }
                    if (!empty($htchrsh['thang8']) && !is_numeric($htchrsh['thang8'])) {
                        $hientrangchatthairansinhhoat[$key]['thang8'] = 0;
                    }
                    if (!empty($htchrsh['thang9']) && !is_numeric($htchrsh['thang9'])) {
                        $hientrangchatthairansinhhoat[$key]['thang9'] = 0;
                    }
                    if (!empty($htchrsh['thang10']) && !is_numeric($htchrsh['thang10'])) {
                        $hientrangchatthairansinhhoat[$key]['thang10'] = 0;
                    }
                    if (!empty($htchrsh['thang11']) && !is_numeric($htchrsh['thang11'])) {
                        $hientrangchatthairansinhhoat[$key]['thang11'] = 0;
                    }
                    if (!empty($htchrsh['thang12']) && !is_numeric($htchrsh['thang12'])) {
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
                    $hientrangchatthairansinhhoat[$key]['temp_id'] = $key;
                    $hientrangchatthairansinhhoat[$key]['tong'] = $row['thang1'] + $row['thang2'] + $row['thang3'] + $row['thang4'] + $row['thang5'] + $row['thang6'] + $row['thang7'] + $row['thang8'] + $row['thang7'] + $row['thang9'] + $row['thang10'] + $row['thang11'] + $row['thang7'] + $row['thang8'] + $row['thang7'] + $row['thang9'] + $row['thang10'] + $row['thang11']+ $row['$row['thang1'] + $row['thang2'] + $row['thang3'] + $row['thang4'] + $row['thang5'] + $row['thang6'] + $row['thang7'] + $row['thang8'] + $row['thang7'] + $row['thang9'] + $row['thang10'] + $row['thang11'] + $row['thang7'] + $row['thang8'] + $row['thang7'] + $row['thang9'] + $row['thang10'] + $row['thang11'] +  $row['thang12'];
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
                    if (!empty($htchrcn['thang1']) && !is_numeric($htchrcn['thang1'])) {
                        $hientrangchatthairancongnghiep[$key]['thang1'] = 0;
                    }
                    if (!empty($htchrcn['thang2']) && !is_numeric($htchrcn['thang2'])) {
                        $hientrangchatthairancongnghiep[$key]['thang2'] = 0;
                    }
                    if (!empty($htchrcn['thang3']) && !is_numeric($htchrcn['thang3'])) {
                        $hientrangchatthairancongnghiep[$key]['thang3'] = 0;
                    }
                    if (!empty($htchrcn['thang4']) && !is_numeric($htchrcn['thang4'])) {
                        $hientrangchatthairancongnghiep[$key]['thang4'] = 0;
                    }
                    if (!empty($htchrcn['thang5']) && !is_numeric($htchrcn['thang5'])) {
                        $hientrangchatthairancongnghiep[$key]['thang5'] = 0;
                    }
                    if (!empty($htchrcn['thang6']) && !is_numeric($htchrcn['thang6'])) {
                        $hientrangchatthairancongnghiep[$key]['thang6'] = 0;
                    }
                    if (!empty($htchrcn['thang7']) && !is_numeric($htchrcn['thang7'])) {
                        $hientrangchatthairancongnghiep[$key]['thang7'] = 0;
                    }
                    if (!empty($htchrcn['thang8']) && !is_numeric($htchrcn['thang8'])) {
                        $hientrangchatthairancongnghiep[$key]['thang8'] = 0;
                    }
                    if (!empty($htchrcn['thang9']) && !is_numeric($htchrcn['thang9'])) {
                        $hientrangchatthairancongnghiep[$key]['thang9'] = 0;
                    }
                    if (!empty($htchrcn['thang10']) && !is_numeric($htchrcn['thang10'])) {
                        $hientrangchatthairancongnghiep[$key]['thang10'] = 0;
                    }
                    if (!empty($htchrcn['thang11']) && !is_numeric($htchrcn['thang11'])) {
                        $hientrangchatthairancongnghiep[$key]['thang11'] = 0;
                    }
                    if (!empty($htchrcn['thang12']) && !is_numeric($htchrcn['thang12'])) {
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
                    $hientrangchatthairancongnghiep[$key]['temp_id'] = $key;
                    $hientrangchatthairancongnghiep[$key]['tong'] = $row['lan1'] + $row['lan2'] + $row['lan3'] + $row['lan4'];
                }
                if ($hientrangchatthairancongnghiep)
                    array_multisort($stt, SORT_ASC, $loaichatthai, SORT_ASC, $hientrangchatthairancongnghiep);
                $this->Session->write('hientrangchatthairancongnghiep', $hientrangchatthairancongnghiep);
                $hientrangchatthairancongnghiep = $this->Session->read('hientrangchatthairancongnghiep');
                $this->set('hientrangchatthairancongnghiep', $hientrangchatthairancongnghiep);
                $this->render('Elements/Baocao/chatthairancongnghiep');
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
                    if (!empty($htchrnh['thang1']) && !is_numeric($htchrnh['thang1'])) {
                        $hientrangchatthairannguyhai[$key]['thang1'] = 0;
                    }
                    if (!empty($htchrnh['thang2']) && !is_numeric($htchrnh['thang2'])) {
                        $hientrangchatthairannguyhai[$key]['thang2'] = 0;
                    }
                    if (!empty($htchrnh['thang3']) && !is_numeric($htchrnh['thang3'])) {
                        $hientrangchatthairannguyhai[$key]['thang3'] = 0;
                    }
                    if (!empty($htchrnh['thang4']) && !is_numeric($htchrnh['thang4'])) {
                        $hientrangchatthairannguyhai[$key]['thang4'] = 0;
                    }
                    if (!empty($htchrnh['thang5']) && !is_numeric($htchrnh['thang5'])) {
                        $hientrangchatthairannguyhai[$key]['thang5'] = 0;
                    }
                    if (!empty($htchrnh['thang6']) && !is_numeric($htchrnh['thang6'])) {
                        $hientrangchatthairannguyhai[$key]['thang6'] = 0;
                    }
                    if (!empty($htchrnh['thang7']) && !is_numeric($htchrnh['thang7'])) {
                        $hientrangchatthairannguyhai[$key]['thang7'] = 0;
                    }
                    if (!empty($htchrnh['thang8']) && !is_numeric($htchrnh['thang8'])) {
                        $hientrangchatthairannguyhai[$key]['thang8'] = 0;
                    }
                    if (!empty($htchrnh['thang9']) && !is_numeric($htchrnh['thang9'])) {
                        $hientrangchatthairannguyhai[$key]['thang9'] = 0;
                    }
                    if (!empty($htchrnh['thang10']) && !is_numeric($htchrnh['thang10'])) {
                        $hientrangchatthairannguyhai[$key]['thang10'] = 0;
                    }
                    if (!empty($htchrnh['thang11']) && !is_numeric($htchrnh['thang11'])) {
                        $hientrangchatthairannguyhai[$key]['thang11'] = 0;
                    }
                    if (!empty($htchrnh['thang12']) && !is_numeric($htchrnh['thang12'])) {
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
                    $hientrangchatthairannguyhai[$key]['temp_id'] = $key;
                    $hientrangchatthairannguyhai[$key]['tong'] = $row['thang1'] + $row['thang2'] + $row['thang3'] + $row['thang4'] + $row['thang5'] + $row['thang6'] + $row['thang7'] + $row['thang8'] + $row['thang7'] + $row['thang9'] + $row['thang10'] + $row['thang11'] + $row['thang7'] + $row['thang8'] + $row['thang7'] + $row['thang9'] + $row['thang10'] + $row['thang11'] + $row['thang12'];
                }
                if ($hientrangchatthairannguyhai)
                    array_multisort($stt, SORT_ASC, $loaichatthai, SORT_ASC, $hientrangchatthairannguyhai);
                $this->Session->write('hientrangchatthairannguyhai', $hientrangchatthairannguyhai);
                $hientrangchatthairannguyhai = $this->Session->read('hientrangchatthairannguyhai');
                $this->set('hientrangchatthairannguyhai', $hientrangchatthairannguyhai);
                $this->render('Elements/Baocao/chatthairannguyhai');
            }
        }
    }

}

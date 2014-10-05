<?php

/**
 * Created by PhpStorm.
 * User: soncahuynh
 * Date: 11/06/2014
 * Time: 00:49
 */
App::uses('Loaihinhdoanhnghiep', 'Admin.Model');
App::uses('Quocgia', 'Admin.Model');
App::uses('Nganh', 'Admin.Model');
App::uses('Nguyenlieu', 'Admin.Model');
App::uses('Sanpham', 'Admin.Model');
App::uses('DanhmucSanPham', 'Admin.Model');
App::uses('NuocNgamDoanhNghiep', 'Admin.Model');
App::uses('NguonThaiNuocThai', 'Admin.Model');
App::uses('NguonThaiKhiThai', 'Admin.Model');
App::uses('BienPhapXuLyNuocThai', 'Admin.Model');
App::uses('NguonGayOnRung', 'Admin.Model');
App::uses('DanhMucChatThai', 'Admin.Model');
App::uses('ChatThai', 'Admin.Model');
App::uses('NguonThai', 'Admin.Model');
App::uses('Loaivanban', 'Admin.Model');
App::uses('Linhvucvanban', 'Admin.Model');
App::uses('DoanhNghiep', 'Admin.Model');

class Common {

    public static function getListLoaihinhkinhdoanh() {
        $result = array();
        $loaihinhkinhdoanh = new Loaihinhdoanhnghiep();
        $list = $loaihinhkinhdoanh->find('all', array('fields' => array('id', 'tenloaihinh')));
        if (is_array($list) && count($list)) {
            foreach ($list as $item) {
                $result[$item['Loaihinhdoanhnghiep']['id']] = $item['Loaihinhdoanhnghiep']['tenloaihinh'];
            }
        }
        return $result;
    }

    public static function getListQuocgia() {
        $result = array();
        $quocgia = new Quocgia();
        $list = $quocgia->find('all', array('fields' => array('id', 'tenquocgia')));
        if (is_array($list) && count($list)) {
            foreach ($list as $item) {
                $result[$item['Quocgia']['id']] = $item['Quocgia']['tenquocgia'];
            }
        }
        return $result;
    }

    public static function getListNganh() {
        $result = array();
        $nganh = new Nganh();
        $list = $nganh->find('all', array('fields' => array('id', 'tennganh')));
        if (is_array($list) && count($list)) {
            foreach ($list as $item) {
                $result[$item['Nganh']['id']] = $item['Nganh']['tennganh'];
            }
        }
        return $result;
    }

    public static function getListNguyenlieu() {
        $result = array();
        $nguyen_lieu = new Nguyenlieu();
        $list = $nguyen_lieu->find('all', array('fields' => array('id', 'tennguyenlieu')));
        if (is_array($list) && count($list)) {
            foreach ($list as $item) {
                $result[$item['Nguyenlieu']['id']] = $item['Nguyenlieu']['tennguyenlieu'];
            }
        }
        return $result;
    }

    public static function getListSanPham() {
        $result = array();
        $san_pham = new Sanpham();
        $list = $san_pham->find('all', array('fields' => array('id', 'tensanpham')));
        if (is_array($list) && count($list)) {
            foreach ($list as $item) {
                $result[$item['Sanpham']['id']] = $item['Sanpham']['tensanpham'];
            }
        }
        return $result;
    }

    public static function getListDanhmucSanPham() {
        $result = array('0' => '...vui lòng chọn');
        $danh_muc_san_pham = new DanhmucSanPham();
        $list = $danh_muc_san_pham->find('all', array('fields' => array('id', 'tendanhmuc')));
        if (is_array($list) && count($list)) {
            foreach ($list as $item) {
                $result[$item['DanhmucSanPham']['id']] = $item['DanhmucSanPham']['tendanhmuc'];
            }
        }
        return $result;
    }

    public static function getFullListDanhmucSanPham() {
        $danh_muc_san_pham = new DanhmucSanPham();
        $list = $danh_muc_san_pham->find('all');
        return $list;
    }

    public static function getListNguonThaiNuocThai() {
        $result = array();
        $nguon_thai_nuoc_thai = new NguonThaiNuocThai();
        $list = $nguon_thai_nuoc_thai->find('all', array('fields' => array('colMa', 'colTenNguonThai')));
        if (is_array($list) && count($list)) {
            foreach ($list as $item) {
                $result[$item['NguonThaiNuocThai']['colMa']] = $item['NguonThaiNuocThai']['colTenNguonThai'];
            }
        }
        return $result;
    }

    public static function getListBienPhapXuLyNuocThai() {
        $result = array();
        $bien_phap = new BienPhapXuLyNuocThai();
        $list = $bien_phap->find('all', array('fields' => array('id', 'tenbienphap')));
        if (is_array($list) && count($list)) {
            foreach ($list as $item) {
                $result[$item['BienPhapXuLyNuocThai']['id']] = $item['BienPhapXuLyNuocThai']['tenbienphap'];
            }
        }
        return $result;
    }

    public static function getListNguonThaiKhiThai() {
        $result = array();
        $nguonthai = new NguonThaiKhiThai();
        $list = $nguonthai->find('all', array('fields' => array('colMa', 'colTenNgThai')));
        if (is_array($list) && count($list)) {
            foreach ($list as $item) {
                $result[$item['NguonThaiKhiThai']['colMa']] = $item['NguonThaiKhiThai']['colTenNgThai'];
            }
        }
        return $result;
    }

    public static function getListNguonGayOnRung() {
        $result = array();
        $nguonthai = new NguonGayOnRung();
        $list = $nguonthai->find('all', array('fields' => array('colMa', 'colTenNguon')));
        if (is_array($list) && count($list)) {
            foreach ($list as $item) {
                $result[$item['NguonGayOnRung']['colMa']] = $item['NguonGayOnRung']['colTenNguon'];
            }
        }
        return $result;
    }

    public static function getTenNganh($id) {
        $tennguon = '';
        $nganh = new Nganh();
        $result = $nganh->findById($id);
        if ($result) {
            $tennguon = $result['Nganh']['tennganh'];
        }
        return $tennguon;
    }

    public static function getListDanhMucChatThai() {
        $danhmuc = new DanhMucChatThai();
        $list = $danhmuc->find('all');
        if ($list) {
            foreach ($list as $dm) {
                $result[$dm['DanhMucChatThai']['id']] = $dm['DanhMucChatThai']['ma_danhmuc'] . ' - ' . $dm['DanhMucChatThai']['ten_danhmuc'];
            }
            return $result;
        }
        return array();
    }

    public static function getFullListDanhMucChatThai() {
        $danhmuc = new DanhMucChatThai();
        $list = $danhmuc->find('all', array('order' => 'ma_danhmuc asc'));
        if (is_array($list)) {
            return json_encode($list);
        }
    }

    public static function getFullListNguonThai() {
        $nguon_thai = new NguonThai();
        $list = $nguon_thai->find('all');
        if (is_array($list)) {
            return json_encode($list);
        }
    }

    public static function getListLoaivanban() {
        $loaivanban = new Loaivanban();
        $list = $loaivanban->find('all');
        $result[''] = '[-- Chọn một loại văn bản --]';
        foreach ($list as $key => $loai) {
            $result[$loai['Loaivanban']['id']] = $loai['Loaivanban']['tenloai'];
        }
        return $result;
    }

    public static function getListLinhvucvanban() {
        $lvvanban = new Linhvucvanban();
        $list = $lvvanban->find('all');
        $result[''] = '[-- Chọn một loại lĩnh vực --]';
        foreach ($list as $key => $loai) {
            $result[$loai['Linhvucvanban']['id']] = $loai['Linhvucvanban']['linhvuc'];
        }
        return $result;
    }

    public static function getListThang() {
        return array(
            '1' => 'Tháng 1',
            '2' => 'Tháng 2',
            '3' => 'Tháng 3',
            '4' => 'Tháng 4',
            '5' => 'Tháng 5',
            '6' => 'Tháng 6',
            '7' => 'Tháng 7',
            '8' => 'Tháng 8',
            '9' => 'Tháng 9',
            '10' => 'Tháng 10',
            '11' => 'Tháng 11',
            '12' => 'Tháng 12',
        );
    }

    public static function getUserIP() {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
	public static function getListNamNhapLieu(){
		$doanhNghiep=new DoanhNghiep();
		$result=array(1=>'--Chọn hết--');
		$data=$doanhNghiep->find('list',array('fields'=>array('nam')));
		$data=array_unique(array_values($data));
		foreach($data as $v){
			if($v){
				$result[$v]=$v;
			}
		}
		return $result;

	}

}

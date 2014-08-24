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
App::uses('DanhmucSanpham', 'Admin.Model');
App::uses('NuocNgamDoanhNghiep', 'Admin.Model');
App::uses('NguonThaiNuocThai', 'Admin.Model');
App::uses('NguonThaiKhiThai', 'Admin.Model');
App::uses('BienPhapXuLyNuocThai', 'Admin.Model');

class Common
{
    public static function getListLoaihinhkinhdoanh()
    {
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

    public static function getListQuocgia()
    {
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

    public static function getListNganh()
    {
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

    public static function getListNguyenlieu()
    {
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

    public static function getListSanPham()
    {
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

    public static function getListDanhmucSanPham()
    {
        $result = array('0'=>'...vui lòng chọn');
        $danh_muc_san_pham = new DanhmucSanpham();
        $list = $danh_muc_san_pham->find('all', array('fields' => array('id', 'tendanhmuc')));
        if (is_array($list) && count($list)) {
            foreach ($list as $item) {
                $result[$item['DanhmucSanPham']['id']] = $item['DanhmucSanPham']['tendanhmuc'];
            }
        }
        return $result;
    }
    public static function getFullListDanhmucSanPham(){
        $danh_muc_san_pham = new DanhmucSanpham();
        $list = $danh_muc_san_pham->find('all');
        return $list;
    }

    public static function getListNguonThaiNuocThai()
    {
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

    public static function getListBienPhapXuLyNuocThai()
    {
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
}
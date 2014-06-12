<?php
/**
 * Created by PhpStorm.
 * User: soncahuynh
 * Date: 11/06/2014
 * Time: 00:49
 */
App::uses('Loaihinhdoanhnghiep','Admin.Model');
App::uses('Quocgia','Admin.Model');
App::uses('Nganh','Admin.Model');

class Common{
	public static function getListLoaihinhkinhdoanh(){
		$result=array();
		$loaihinhkinhdoanh=new Loaihinhdoanhnghiep();
		$list=$loaihinhkinhdoanh->find('all',array('fields'=>array('id','tenloaihinh')));
		if(is_array($list) && count($list)){
			foreach($list as $item){
				$result[$item['Loaihinhdoanhnghiep']['id']]=$item['Loaihinhdoanhnghiep']['tenloaihinh'];
			}
		}
		return $result;
	}
	public static function getListQuocgia(){
		$result=array();
		$quocgia=new Quocgia();
		$list=$quocgia->find('all',array('fields'=>array('id','tenquocgia')));
		if(is_array($list)&&count($list)){
			foreach($list as $item){
				$result[$item['Quocgia']['id']]=$item['Quocgia']['tenquocgia'];
			}
		}
		return $result;
	}
	public static function getListNganh(){
		$result=array();
		$nganh=new Nganh();
		$list=$nganh->find('all',array('fields'=>array('id','tennganh')));
		if(is_array($list)&&count($list)){
			foreach($list as $item){
				$result[$item['Nganh']['id']]=$item['Nganh']['tennganh'];
			}
		}
		return $result;
	}
}
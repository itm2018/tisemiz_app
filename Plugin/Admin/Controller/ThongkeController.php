<?php
App::uses('AdminAppController', 'Admin.Controller');
App::uses('Common', 'Admin.Lib');
/**
 * Created by cahs.
 * User: soncahuynh
 * Date: 06/10/2014
 * Time: 01:56
 */
class ThongkeController extends AdminAppController{
	public $layout = 'admin/backward';

	public function thongtincoban(){
		if($this->request->is('get')){
//			pr($this->request);
			$this->Paginator->settings=array('limit'=>20);
			if(isset($this->request->query['nam_nhap_lieu'])){
				$nam_nhap_lieu=$this->request->query['nam_nhap_lieu'];
				$this->Session->write('thong_ke_nam_nhap_lieu',$nam_nhap_lieu);
			}else{
				$nam_nhap_lieu=$this->Session->read('thong_ke_nam_nhap_lieu');
			}
			if($nam_nhap_lieu){
				if($nam_nhap_lieu==1)
				$condition=array();
				if($nam_nhap_lieu>1){
					$condition['DoanhNghiep.nam']=$nam_nhap_lieu;
				}
				$this->loadModel('Admin.DoanhNghiep');
				$result=$this->Paginator->paginate('DoanhNghiep',$condition);
				$this->Session->write('thongkecoban_condition',$condition);
				$this->set('data',$result);
				$this->set('nam_nhap_lieu',$nam_nhap_lieu);
			}
		}
	}
	function xuatexcel($type){
		$this->layout=false;
		if($type==1){
			//xuat thong tin co ban
			$this->loadModel('Admin.DoanhNghiep');
			$condition=$this->Session->read('thongkecoban_condition');
			$data=$this->DoanhNghiep->find('all',array('conditions'=>$condition));
			$docname = 'Thongkethongtincoban_' . date('d-m-Y');
			header('Content-Type: application/force-download; charset=UTF-8');
			header('Content-Transfer-Encoding:base64');
			header("Content-disposition: attachment; filename=$docname.xls");
//			header("Content-Transfer-Encoding: binary");
			header("Pragma: ");
			header("Cache-Control: ");
			echo   "\xEF\xBB\xBF";
			foreach ($data as $doanhnghiep) {
				foreach ($doanhnghiep['DoanhNghiep'] as $key => $value) {
					echo mb_convert_encoding($value,"UTF-8") . "\t";
				}
				echo "\r\n";
			}
			die();
		}
	}
}

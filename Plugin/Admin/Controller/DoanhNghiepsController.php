<?php
App::uses('AdminAppController', 'Admin.Controller');
/**
 * DoanhNghieps Controller
 *
 */
class DoanhNghiepsController extends AdminAppController {
   public $components=array('Paginator');
    public $helpers=array('Paginator');
/**
 * Scaffold
 *
 * @var mixed
 */
//	public $scaffold;
	public $layout = 'admin/default';
    public $paginate =array(
        'limit'=>20,
//        'order'=>array(
//            'DoanhNghiep.colMa'=>'asc'
//        )
    );
	public function lietke(){
        $this->Paginator->settings=$this->paginate;
        $data=$this->Paginator->paginate('DoanhNghiep');
        $this->set('data',$data);
    }
	public function themmoi(){}
}

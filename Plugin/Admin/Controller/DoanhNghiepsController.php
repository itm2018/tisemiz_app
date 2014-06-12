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
        if($this->request->query('number') && is_numeric($this->request->query('number'))){
            $this->paginate['limit']=$this->request->query('number');
        }
        $this->Paginator->settings=$this->paginate;
        $this->set('limit',$this->paginate['limit']);
        $data=$this->Paginator->paginate('DoanhNghiep');
        $this->set('data',$data);
    }
	public function themmoi(){}
}

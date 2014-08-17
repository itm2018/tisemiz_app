<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * Baocaogsmt Model
 *
 */
class Baocaogsmt extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'baocaogsmt';
    public $belongsTo = array(
        'BaocaogsmtDoanhnghiep' => array(
            'className' => 'Admin.BaocaogsmtDoanhnghiep',
            'foreignKey' => 'id_doanhnghiep'
        ),
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'id_user'
        )
    );
    public $hasMany = array(
        'Tinhhinhsxkd' => array(
            'className' => 'Admin.Tinhhinhsxkd',
            'foreignKey' => 'id_bc',
            'order' => 'Tinhhinhsxkd.stt ASC'
        ),
        'Hientrangnuocthai' => array(
            'className' => 'Admin.Hientrangnuocthai',
            'foreignKey' => 'id_bc',
            'order' => 'Hientrangnuocthai.stt ASC'
        ),
        'Ketquaphantichnuocthai' => array(
            'className' => 'Admin.Ketquaphantichnuocthai',
            'foreignKey' => 'id_bc',
            'order' => 'Ketquaphantichnuocthai.stt ASC'
        ),
        'Hientrangkhithai' => array(
            'className' => 'Admin.Hientrangkhithai',
            'foreignKey' => 'id_bc',
            'order' => 'Hientrangkhithai.stt ASC'
        ),
        'Ketquaphantichkhithai' => array(
            'className' => 'Admin.Ketquaphantichkhithai',
            'foreignKey' => 'id_bc',
            'order' => 'Ketquaphantichkhithai.stt ASC'
        ),
        'Hientrangchatthairan' => array(
            'className' => 'Admin.Hientrangchatthairan',
            'foreignKey' => 'id_bc',
            'order' => array(
                'Hientrangchatthairan.id_loaichatthairan' => 'ASC',
                'Hientrangchatthairan.stt' => 'ASC'
            )
        ),
    );
    public $validate = array(
        'tungay' => array(
            'nonEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ngày bắt đầu của báo cáo là bắt buộc'
            ),
            'isdate' => array(
                'rule' => array('date', 'dmy'),
                'message' => 'Ngày bắt đầu sai định dạng'
            )
        ),
        'denngay' => array(
            'nonEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Ngày kết thúc của báo cáo là bắt buộc'
            ),
            'isdate' => array(
                'rule' => array('date', 'dmy'),
                'message' => 'Ngày kết thúc sai định dạng'
            ),
            'greater' => array(
                'rule' => array('greater'),
                'message' => 'Ngày kết thúc phải lớn hơn ngày bắt đầu'
            )
        ),
        'id_user' => array(
            'nonEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Bạn phải đăng nhập để thực hiện hành động này'
            ),
        ),
        'file_quytrinhcnsxbaocaogsmt' => array(
            'allowFileType' => array(
                'rule' => array('allowFileType'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Định dạng file quy trình công nghệ sản xuất không được cho phép'
            )
        ),
        'file_nguononhiem' => array(
            'allowFileType' => array(
                'rule' => array('allowFileType'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Định dạng file nguồn phát sinh ô nhiễm không được cho phép'
            )
        ),
        'file_quytrinhcnxlnt' => array(
            'allowFileType' => array(
                'rule' => array('allowFileType'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Định dạng file quy trình công nghệ xử lý nước thải không được cho phép'
            )
        ),
        'file_ketquaphantichnt' => array(
            'allowFileType' => array(
                'rule' => array('allowFileType'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Định dạng file kết quả phân tích nước thải không được cho phép'
            )
        ),
        'file_quytrinhcnxlkt' => array(
            'allowFileType' => array(
                'rule' => array('allowFileType'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Định dạng file quy trình xử lý khí thải không được cho phép'
            )
        ),
        'file_ketquaphantichkt' => array(
            'allowFileType' => array(
                'rule' => array('allowFileType'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Định dạng file kết quả phân tích khí thải không được cho phép'
            )
        ),
        'file_ketquaphantichtiengon' => array(
            'allowFileType' => array(
                'rule' => array('allowFileType'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Định dạng file kết quả phân tích tiếng ồn không được cho phép'
            )
        ),
        'file_ketquaphantichdorung' => array(
            'allowFileType' => array(
                'rule' => array('allowFileType'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Định dạng file kết quả phân tích độ rung không được cho phép'
            )
        ),
        'file_sodovitricacdiemgiamsatmtxq' => array(
            'allowFileType' => array(
                'rule' => array('allowFileType'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Định dạng file sơ đồ vị trí giám sát môi trường xung quanh không được cho phép'
            )
        ),
        'file_ketquadodacphantichmtxq' => array(
            'allowFileType' => array(
                'rule' => array('allowFileType'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Định dạng file kết quả đo đạc phân tích môi trường xung quanh không được cho phép'
            )
        ),
    );

    public function allowFileType($check) {
        $value = array_values($check);
        $value = $value[0];
        if ($value) {
            $part = explode('.', $value);
            $last = count($part) - 1;
            $allowExtendsion = array('doc', 'docx', 'xls', 'xlsx', 'pdf');
            $extension = $part[$last];
            return in_array($extension, $allowExtendsion);
        }
    }

    public function beforeSave($options = array()) {
        $tungay = DateTime::createFromFormat('d/m/Y', $this->data['Baocaogsmt']['tungay']);
        $denngay = DateTime::createFromFormat('d/m/Y', $this->data['Baocaogsmt']['denngay']);
        $this->data['Baocaogsmt']['tungay'] = $tungay->format('Y-m-d');
        $this->data['Baocaogsmt']['denngay'] = $denngay->format('Y-m-d');
        parent::beforeSave($options);
    }

    public function greater($check) {
        $parsed = array_values($check);
        $value = $parsed[0];
        $denngay = date_create_from_format('d/m/Y', $value);
        $tungay = date_create_from_format('d/m/Y', $this->data['Baocaogsmt']['tungay']);
        return $denngay > $tungay;
    }

}

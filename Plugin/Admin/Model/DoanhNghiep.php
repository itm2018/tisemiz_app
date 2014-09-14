<?php

App::uses('AdminAppModel', 'Admin.Model');

/**
 * DoanhNghiep Model
 *
 */
class DoanhNghiep extends AdminAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = 'doanh_nghiep';

    /**
     * Primary key field
     *
     * @var string
     */
    public $primaryKey = 'colMa';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'nam' => array(
            'rule' => array('numeric'),
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Trường này phải là số của năm'
        ),
        'colTen' => array(
            'rule' => array('notEmpty'),
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Xin nhập tên doanh nghiệp'
        ),
        'colDiaChi' => array(
            'rule' => array('notEmpty'),
            'required' => true,
            'allowEmpty' => false,
            'message' => 'Xin nhập địa chỉ doanh nghiệp'
        ),
        'colDienThoai' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Xin nhập số điện thoại'
            ),
            'tel' => array(
                'rule' => '/^\(?\d{2,4}\)?\-?\d{3,5}\-?\d{3,5}+$/',
                'message' => 'Số điện thoại không đúng'
            )
        ),
        'colFax' => array(
            'allowEmpty' => array(
                'rule' => array('notEmpty'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Xin nhập số fax'
            ),
            'tel' => array(
                'rule' => '/^\(?\d{2,4}\)?\-?\d{3,5}\-?\d{3,5}+$/',
                'message' => 'Số fax không đúng'
            )
        ),
        'colEmail' => array(
            'notEmpty' => array(
                'rule' => array('notEmpty'),
                'required' => true,
                'allowEmpty' => false,
                'message' => 'Xin nhập địa chỉ email của doanh nghiệp'
            ),
            'email' => array(
                'rule' => array('email'),
                'message' => 'Địa chỉ email không đúng'
            )
        ),
        'colNamHopDong' => array(
            'date' => array(
                'rule' => array('date', 'dmy'),
                'required' => true,
                'allowEmpty' => true,
                'message' => 'Ngày không đúng định dạng'
            ),
        )
    );
    public $hasMany = array(
        'HoatDongSanXuat' => array(
            'className' => 'Admin.HoatDongSanXuat',
            'foreignKey' => 'colCSSX'
        ),
        'SanPhamDoanhNghiep' => array(
            'className' => 'Admin.SanPhamDoanhNghiep',
            'foreignKey' => 'colCSSX',
            'order'=>'stt asc'
        ),
        'NguyenLieuSanPham' => array(
            'className' => 'Admin.NguyenLieuSanPham',
            'foreignKey' => 'colCSSX',
            'order'=>'stt asc'
        ),
        'NhienLieuDoanhNghiep' => array(
            'className' => 'Admin.NhienLieuDoanhNghiep',
            'foreignKey' => 'colCSSX'
        ),
        'DienNuocDoanhNghiep' => array(
            'className' => 'Admin.DienNuocDoanhNghiep',
            'foreignKey' => 'colCSSX'
        ),
        'NuocNgamDoanhNghiep' => array(
            'className' => 'Admin.NuocNgamDoanhNghiep',
            'foreignKey' => 'colCSSX'
        ),
        'NuocThaiNhaMay' => array(
            'className' => 'Admin.NuocThaiNhaMay',
            'foreignKey' => 'colCSSX'
        ),
        'XuLyNuocThaiDoanhNghiep' => array(
            'className' => 'Admin.XuLyNuocThaiDoanhNghiep',
            'foreignKey' => 'colCSSX'
        ),
        'XuLyKhiThaiDoanhNghiep' => array(
            'className' => 'Admin.XuLyKhiThaiDoanhNghiep',
            'foreignKey' => 'colCSSX'
        ),
        'XuLyTiengOnRung' => array(
            'className' => 'Admin.XuLyTiengOnRung',
            'foreignKey' => 'colCSSX'
        ),
        'RacThaiSinhHoat' => array(
            'className' => 'Admin.RacThaiSinhHoat',
            'foreignKey' => 'colCSSX'
        ),
        'ChatThaiRanCongNghiep' => array(
            'className' => 'Admin.ChatThaiRanCongNghiep',
            'foreignKey' => 'colCSSX'
        ),
        'ChatThaiNguyHai' => array(
            'className' => 'Admin.ChatThaiNguyHai',
            'foreignKey' => 'colCSSX'
        ),
        'ChatThaiNguyHaiThongThuong' => array(
            'className' => 'Admin.ChatThaiNguyHai',
            'foreignKey' => 'colCSSX',
            'conditions' => array('ChatThaiNguyHaiThongThuong.is_tonluu' => 0,'ChatThaiNguyHaiThongThuong.is_phatsinhthuongxuyen' => 0,'ChatThaiNguyHaiThongThuong.is_tuxuly' => 0)
        ),
        'ChatThaiNguyHaiTonLuu' => array(
            'className' => 'Admin.ChatThaiNguyHai',
            'foreignKey' => 'colCSSX',
            'conditions' => array('ChatThaiNguyHaiTonLuu.is_tonluu' => 1)
        ),
        'ChatThaiNguyHaiPhatSinhThuongXuyen' => array(
            'className' => 'Admin.ChatThaiNguyHai',
            'foreignKey' => 'colCSSX',
            'conditions' => array('ChatThaiNguyHaiPhatSinhThuongXuyen.is_phatsinhthuongxuyen' => 1)
        ),
        'ChatThaiNguyHaiTuXuLy' => array(
            'className' => 'Admin.ChatThaiNguyHai',
            'foreignKey' => 'colCSSX',
            'conditions' => array('ChatThaiNguyHaiTuXuLy.is_tuxuly' => 1)
        ),
        'DoanhNghiepThongTinTuanThuBvmt' => array(
            'className' => 'Admin.DoanhNghiepThongTinTuanThuBvmt',
            'foreignKey' => 'colMaDN'
        ),
        'ThongTinKienNghiBvmt' => array(
            'className' => 'Admin.ThongTinKienNghiBvmt',
            'foreignKey' => 'colCSSX'
        ),
        'Children' => array(
            'className' => 'Admin.DoanhNghiep',
            'foreignKey' => 'colMaDNME',
        )
    );
    public $belongsTo = array(
        'Parent' => array(
            'className' => 'Admin.DoanhNghiep',
            'foreignKey' => 'colMaDNME'
        ),
        'Nganh1' => array(
            'className' => 'Admin.Nganh',
            'foreignKey' => 'colMaNganh1'
        )
    );

    public function beforeSave($options = array()) {
        if (!empty($this->data['DoanhNghiep']['colNamHopDong'])) {
            $date = explode('/', $this->data['DoanhNghiep']['colNamHopDong']);
            if (empty($date)) {
                $date = explode('-', $this->data['DoanhNghiep']['colNamHopDong']);
            }
            $this->data['DoanhNghiep']['colNamHopDong'] = date('Y-m-d', strtotime($date[1] . '/' . $date[0] . '/'
                            . $date[2]));
        }
        if (!empty($this->data['DoanhNghiep']['ngaycapchungnhanKDDT'])) {
            $date = array(1970, 1, 1);
            $date = explode('/', $this->data['DoanhNghiep']['ngaycapchungnhanKDDT']);
            if (empty($date)) {
                $date = explode('-', $this->data['DoanhNghiep']['ngaycapchungnhanKDDT']);
            }
            $this->data['DoanhNghiep']['ngaycapchungnhanKDDT'] = date('Y-m-d', strtotime($date[1] . '/' . $date[0] . '/'
                            . $date[2]));
        }
        if (!empty($this->data['DoanhNghiep']['ngaycapcmndgiamdoc'])) {
            $date = array(1970, 1, 1);
            $date = explode('/', $this->data['DoanhNghiep']['ngaycapcmndgiamdoc']);
            if (empty($date)) {
                $date = explode('-', $this->data['DoanhNghiep']['ngaycapcmndgiamdoc']);
            }
            $this->data['DoanhNghiep']['ngaycapcmndgiamdoc'] = date('Y-m-d', strtotime($date[1] . '/' . $date[0] . '/'
                            . $date[2]));
        }
    }

    public function saveAssociated($data = null, $options = array()) {
        foreach ($data as $alias => $modelData) {
            if (!empty($this->hasMany[$alias])) {
                $Model = ClassRegistry::init($this->hasMany[$alias]['className']);
                if (empty($modelData['colMa'])) {
                    $Model->create();
                }
                $Model->set($modelData);
                $saved = $Model->save();
                $hasmany = $saved ? $saved : array();
                $data[$alias] = array_values($hasmany);
            }
        }
        return $data;
    }

}

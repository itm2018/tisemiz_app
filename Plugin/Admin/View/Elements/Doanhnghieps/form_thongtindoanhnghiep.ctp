<?php

echo $this->Form->create('DoanhNghiep', array('type' => 'file', 'class' => 'form-horizontal', 'role' => 'form'));
?>
<h4>Thông tin chung</h4>
<div class="form-group">
    <div class="image-view"><img border="0" src="<?php echo isset($this->data['DoanhNghiep']['colHinhAnh']) ? $this->data['DoanhNghiep']['colHinhAnh'] : Router::url('/admin/img/no-images.jpg'); ?>" alt="Hình ảnh đại diện doanh nghiệp" width="304" height="228"></div>
    <?php echo $this->Form->input('colMa', array('type' => 'hidden', 'class' => 'form-control', 'div' => array('class' => 'col-sm-10'), 'label' => false)); ?>
    <label for="inputNamnhaplieu" class="col-sm-2 control-label">Năm nhập liệu <span class="required">*</span></label>
    <?php
    echo $this->Form->input('nam', array('type' => 'number', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false,
        'value' => date('Y')));
    ?>
</div>
<div class="form-group">
    <label for="inputTenDoanhNghiep" class="col-sm-2 control-label">Tên Doanh Nghiệp <span class="required">*</span></label>
    <?php
    echo $this->Form->input('colTen', array('type' => 'text', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputTenTiengAnh" class="col-sm-2 control-label">Tên Tiếng Anh</label>
    <?php
    echo $this->Form->input('colTenTAnh', array('type' => 'text', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="colHinhAnh" class="col-sm-2 control-label">Hình ảnh</label>
    <?php
    echo $this->Form->input('colHinhAnh', array('type' => 'file', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputGiamDoc" class="col-sm-2 control-label">Giám đốc</label>
    <?php
    echo $this->Form->input('giamdoc', array('type' => 'text', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputLoaihinhKinhDoanh" class="col-sm-2 control-label">Loại hình kinh doanh</label>
    <?php
    echo $this->Form->input('colLoaiHinhDN', array('class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false,
        'options' => Common::getListLoaihinhkinhdoanh()));
    ?>
</div>
<div class="form-group">
    <label for="inputNamHD" class="col-sm-2 control-label">Năm hoạt động</label>
    <?php
    echo $this->Form->input('colNamHopDong', array('type' => 'text', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false,
        'placeholder' => 'dd/mm/yyyy'));
    ?>
</div>
<div class="form-group">
    <label for="inputQuocgia" class="col-sm-2 control-label">Quốc gia</label>
    <?php
    echo $this->Form->input('colQuocGia', array('class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false,
        'options' => Common::getListQuocgia()));
    ?>
</div>
<div class="form-group">
    <label for="inputGiayPhepHD" class="col-sm-2 control-label">Giấy phép hoạt động/kinhdoanh</label>
    <?php
    echo $this->Form->input('colGiayPhepKD', array('type' => 'text', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputGiayPhepHD" class="col-sm-2 control-label">Giấy phép đầu tư</label>
    <?php
    echo $this->Form->input('colGiayPhepDT', array('type' => 'text', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputQuitrinhSanXuat" class="col-sm-2 control-label">Qui trình sản xuất</label>
    <?php
    echo $this->Form->input('colQTrinhSX', array('type' => 'textarea', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputTinhHinhHoatDong" class="col-sm-2 control-label">Đang ngưng hoạt động</label>
    <div class="col-sm-6">
        <?php echo $this->Form->checkbox('status'); ?>
    </div>
</div>

<h4>Thông tin tình hình hoạt động</h4>
<div class="form-group">
    <label for="inputNguoiPhuTrachMoitruong" class="col-sm-2 control-label">Người phụ trách môi trường</label>
    <?php
    echo $this->Form->input('nguoiphutrachmt', array('type' => 'text', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputSanpham" class="col-sm-2 control-label">Sản phẩm</label>
    <?php
    echo $this->Form->input('colSanpham', array('type' => 'text', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputCongsuat" class="col-sm-2 control-label">Công suất</label>
    <?php
    echo $this->Form->input('colCongsuat', array('type' => 'text', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputNganh" class="col-sm-2 control-label">Ngành (lựa chọn tối đa là 6)</label>
    <div class="col-sm-10">

        <?php
        echo $this->Form->input('nganh', array('class' => 'form-control multiselect',
            'multiple' => 'multiple',
            'div' => false, 'label' => false, 'style' => 'display: none',
            'id' => 'nganh-all',
            'options' => Common::getListNganh()));
        ?>
        <div class="btn-group">
            <?php echo $this->Html->script('/assets/js/bootstrap-multiselect'); ?>
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#nganh-all").multiselect({includeSelectAllOption: !0, buttonClass: "btn btn-primary"});
                });
            </script>
        </div>
    </div>
</div>
<h4>Vị trí địa lý</h4>
<div class="form-group">
    <label for="inputCongsuat" class="col-sm-2 control-label">Toạ độ</label>
    <div class="col-sm-6">
        <?php
        echo $this->Form->input('colX', array('type' => 'text', 'class' => 'col-sm-4 form-control',
            'placeholder' => 'X', 'div' => false, 'label' => false));
        ?>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php
        echo $this->Form->input('colY', array('type' => 'text', 'class' => 'col-sm-4 form-control',
            'placeholder' => 'Y', 'div' => false, 'label' => false));
        ?>
    </div>
</div>
<div class="form-group">
    <label for="inputDiachi" class="col-sm-2 control-label">Địa chỉ <span class="required">*</span></label>
    <?php
    echo $this->Form->input('colDiaChi', array('type' => 'text', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<h4>Thông tin liên lạc</h4>
<div class="form-group">
    <label for="inputTel" class="col-sm-2 control-label">Điện thoại <span class="required">*</span></label>
    <?php
    echo $this->Form->input('colDienThoai', array('type' => 'tel', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputFax" class="col-sm-2 control-label">Fax</label>
    <?php
    echo $this->Form->input('colFax', array('type' => 'tel', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputEmail" class="col-sm-2 control-label">Email <span class="required">*</span></label>
    <?php
    echo $this->Form->input('colEmail', array('type' => 'email', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <label for="inputSotk" class="col-sm-2 control-label">Số tài khoản</label>
    <?php
    echo $this->Form->input('colSoTKhoan', array('type' => 'text', 'class' => 'form-control',
        'div' => array('class' => 'col-sm-6'), 'label' => false));
    ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->submit(__('Lưu thông tin doanh nghiệp'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));
        ?>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <?php
        echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<table border="0" cellpadding="0" cellspacing="0">
            <tbody><tr>
                    <td align="left" colspan="6" height="30">
                        <img id="Image22" src="/img/nutcate.gif" alt="" border="0"><span class="text_note_b">CHÚ
                            Ý</span>
                    </td>
                </tr>
                <tr>
                    <td align="left" colspan="6">
                        <span class="text_titlenote">1. </span><span class="text_note">Nhập liệu bằng tiếng
                            việt Unicode.</span>
                    </td>
                </tr>
                <tr>
                    <td align="left" colspan="6">
                        <span class="text_titlenote">2. </span><span class="text_note">Xin hãy
                            nhập những thông tin yêu cầu đúng theo mẫu sổ đăng ký hoặc giấy phép hành nghề đã
                            được cơ quan quản lý cấp.</span>
                    </td>
                </tr>
                <tr>
                    <td align="left" colspan="6" style="height: 17px">
                        <span class="text_titlenote">3. </span><span class="text_note">Những trường đánh dấu
                            (*) là bắt buộc phải nhập.</span>
                    </td>
                </tr>
                <tr>
                    <td align="left" colspan="6">
                        <span class="text_titlenote">4. </span><span class="text_note">Sau khi điền đầy đủ các
                            thông tin xin nhấn nút Lưu thông tin doanh nghiệp và chuyển sang bước 2 (Dữ liệu sản
                            xuất).</span>
                    </td>
                </tr>
                <tr>
                    <td align="left" colspan="6">
                        <span class="text_titlenote">5. </span><span class="text_note">Sau khi đi đến bước 5, sẽ xuất hiện nút Hoàn tất, nhấn nút này để kết thúc quá trình cập nhật doanh nghiệp.</span>
                    </td>
                </tr>
            </tbody>
        </table>
<script type="text/javascript">
    $(function() {
        $('#DoanhNghiepColNamHopDong').datepicker({numberOfMonths: 2}).next('.ui-datepicker-trigger').css({
            float: 'right',
            marginRight: '-20px',
            marginTop: '-25px'
        });
        $('#DoanhNghiepThemmoiForm').on('submit', function() {
            if ($('.btn-group ul li.active').length > 6) {
                alert('Chỉ chọn tối đa 6 ngành');
                return false;
            }
        });
    });
</script>
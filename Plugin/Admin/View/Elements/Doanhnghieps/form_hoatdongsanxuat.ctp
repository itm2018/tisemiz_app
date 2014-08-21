<p><h3>II. THÔNG TIN HOẠT ĐỘNG SẢN XUẤT</h3></p>
<?php echo $this->Form->create('HoatDongSanXuat', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')); ?>
<?php echo $this->Form->input('colMa', array('type' => 'hidden', 'class' => 'form-control', 'div' => array('class' => 'col-sm-10'), 'label' => false, 'value' => isset($savingDoanhNghiep['HoatDongSanXuat'][0]['colMa']) ? $savingDoanhNghiep['HoatDongSanXuat'][0]['colMa'] : '')); ?>

<div class="form-group">
    <label for="inputTongdtxd" class="col-sm-2 control-label">Tổng diện tích xây dựng <span class="required">*</span></label>
    <?php echo $this->Form->input('colDienTichDatXD', array('div' => array('class' => 'col-sm-10'), 'label' => false, 'type' => 'text', 'class' => 'form-control',
        'placeholder' => __('tổng diện tích đất xây dựng (m2)')));
    ?>
</div>
<div class="form-group">
    <label for="inputTongnv" class="col-sm-2 control-label">Tổng nhân viên <span class="required">*</span></label>
    <?php echo $this->Form->input('colNVienTT', array('div' => array('class' => 'col-sm-10'), 'label' => false, 'type' => 'text', 'class' => 'form-control',
        'placeholder' => __('tổng số lượng nhân viên')));
    ?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Số ca sản xuất <span class="required">*</span></label>
<?php echo $this->Form->input('colSoCaSX', array('div' => array('class' => 'col-sm-10'), 'label' => false, 'type' => 'text', 'class' => 'form-control',
));
?>
</div>
<div class="row clearfix">
    <div class="col-md-6 column">
        <div class="form-group">
            <table>
                <tr>
                    <td>
                        <label for="suatan" class="col-sm-12 control-label">Suất ăn cho công nhân</label>
                    </td>
                    <td>
                        <div class="col-sm-offset-2 col-sm-10">
                            <table>
                                <tr>
                                    <td>
                                        <div class="radio">
<?php echo $this->Form->radio('colNoiCapSuatAn', array('1' => __('Nhà máy'))); ?>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="radio">
<?php echo $this->Form->radio('colNoiCapSuatAn', array('2' => __('Bên ngoài'))); ?>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-md-6 column">
        <div class="form-group">
            <table>
                <tr>
                    <td>
                        <label for="inputSoxuat" class="col-sm-12 control-label">Số xuất trên ngày</label>
                    </td>
                    <td>
                        <div class="col-sm-offset-2 col-sm-10">
<?php echo $this->Form->input('colSuatAn', array('div' => array('class' => 'col-sm-10'), 'label' => false, 'class' => 'form-control')); ?>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="form-group">
    <label for="inputQuitrinh" class="col-sm-2 control-label">Qui trình công nghệ sản xuất</label>
        <?php echo $this->Form->input('colQTrinhSX', array('div' => array('class' => 'col-sm-10'), 'label' => false, 'class' => 'form-control', 'type' => 'textarea')) ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->Form->submit(__('Lưu thông tin hoạt động sản xuất'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));
        ?>
<?php echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
    'div' => false, 'label' => false));
?>
    </div>
</div>
<?php echo $this->Form->end(); ?>

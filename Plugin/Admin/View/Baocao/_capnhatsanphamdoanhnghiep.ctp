<h4>Cập nhập nguyên liệu</h4>
<?php echo $this->Form->create('SanPhamDoanhNghiep', array('type' => 'post')); ?>
<table class="table">
    <tr>
        <th width="100px">
            Thứ tự
        </th>
        <th width="200px">
            Tên nguyên liệu
        </th>
        <th width="200px">
            Đơn vị
        </th>
        <th width="200px">
            Số lượng
        </th>
    </tr>
    <tr>
        <td width="60px">
            <?php echo $this->Form->input('stt', array('div' => false, 'label' => false, 'style' => 'width: 100%;', 'min' => 0)) ?>
            <?php echo $this->Form->hidden('colMa') ?>
        </td>
        <td>
            <?php echo $this->Form->hidden('colSanPham') ?>
            <?php echo $this->Form->input('colSanPham', array('div' => false, 'label' => false, 'style' => 'width: 100%;height: 24px;', 'disabled' => 'disabled', 'options' => Common::getListSanPham())) ?>
        </td>
        <td width="68px">
            <?php echo $this->Form->input('colDVi', array('div' => false, 'label' => false, 'style' => 'width: 100%;')) ?>
        </td>
        <td width="68px">
            <?php echo $this->Form->input('colCongSuatTT', array('div' => false, 'label' => false, 'style' => 'width: 100%;', 'min' => 0)) ?>
        </td>
        <td style="width: 85px" colspan="2" align="center">
            <?php echo $this->Form->submit('Cập nhật', array('div' => false, 'label' => false, 'style' => 'width: 80px; height: 24px;')) ?>
        </td>
    </tr>
</table>
<?php echo $this->Form->end(); ?>
<table class="table" id="list_danhmuc">
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input type="button" value="Đóng" class="btn btn-sm" onclick="javascript:window.opener.location.reload();
                        window.close();">
            </td>
        </tr>
    </tbody>
</table>

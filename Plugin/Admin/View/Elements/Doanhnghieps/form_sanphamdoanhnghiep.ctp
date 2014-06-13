<p><h3>2.1 SẢN PHẨM</h3></p>
<table class="table">
    <thead>
    <tr>
        <th>
            Năm
        </th>
        <th>
            Sản phẩm
        </th>
        <th>
            Đơn vị tính
        </th>
        <th>
            Công suất thiết kế
        </th>
        <th>
            Công suất thực tế
        </th>
        <th>
            Xóa
        </th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>
            2008
        </td>
        <td>
            Sơn nước
        </td>
        <td>
            Tấn
        </td>
        <td>
            300
        </td>
        <td>
            100
        </td>
        <td>
            <input type="checkbox" name="deleterow#">
        </td>
    </tr>
    <tr class="active">
        <td>
            2008
        </td>
        <td>
            Quần áo
        </td>
        <td>
            Tấn
        </td>
        <td>
            300
        </td>
        <td>
            100
        </td>
        <td>
            <input type="checkbox" name="deleterow#">
        </td>
    </tr>
    <tr class="success">
        <td>
            2008
        </td>
        <td>
            Giày Dép
        </td>
        <td>
            Tấn
        </td>
        <td>
            500
        </td>
        <td>
            100
        </td>
        <td>
            <input type="checkbox" name="deleterow#">
        </td>
    </tr>
    <tr class="warning">
        <td>
            2008
        </td>
        <td>
            Bàn ghế
        </td>
        <td>
            cái
        </td>
        <td>
            1000
        </td>
        <td>
            100
        </td>
        <td>
            <input type="checkbox" name="deleterow#">
        </td>
    </tr>
    <tr>
        <td colspan="5">
        </td>
        <td>
            <button type="submit" name="delete" class="btn btn-danger">Xóa</button>
        </td>
    </tr>
    </tbody>
</table>
<?php echo $this->Form->create('SanPhamDoanhNghiep',array('method'=>'post','class'=>'form-horizontal','role'=>'form'));?>
<div class="form-group">
    <label for="inputTongdtxd" class="col-sm-2 control-label">Danh mục sản phẩm</label>
    <?php echo $this->Form->input('colDanhMucSanPham',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','options'=>Common::getListDanhmucSanPham()))
    ;?>
</div>
<div class="form-group">
    <label for="inputTongdtxd" class="col-sm-2 control-label">Sản phẩm</label>
    <?php echo $this->Form->input('colSanPham',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','options'=>Common::getListSanPham()))
    ;?>
</div>
<div class="form-group">
    <label for="inputTongnv" class="col-sm-2 control-label">Đơn vị tính</label>
    <?php echo $this->Form->input('colDVi', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'text','class'=>'form-control',
        'placeholder'=>__('tấn/kg/m3/cái...')));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Công suất thiết kế</label>
    <?php echo $this->Form->input('colCongSuatTK', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'number','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Công suất thực tế</label>
    <?php echo $this->Form->input('colCongSuatTT', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'number','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->Form->submit(__('Lưu thông tin sản phẩm doanh nghiệp'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));?>
        <?php echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false));?>
    </div>
</div>
<?php echo $this->Form->end();?>

<p><h3>2.4.NƯỚC NGẦM</h3></p>
<table class="table">
    <thead>
    <tr>
        <th>
            Năm
        </th>
        <th>
            Giàn khoan
        </th>
        <th>
            Vị trí
        </th>
        <th>
            Tọa độ x
        </th>
        <th>
            Tọa độ y
        </th>
        <th>
            Công suất
        </th>
        <th>
            Lưu lượng
        </th>
        <th>
            Số Giấy Phép
        </th>
        <th>
            Ghi chú
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
            Giếng sâu
        </td>
        <td>
            Sân sau
        </td>
        <td>
            1236.0
        </td>
        <td>
            100.25
        </td>
        <td>
            3000m3/h
        </td>
        <td>
            2500m3/h
        </td>
        <td>
            GPBN87345
        </td>
        <td>
            checked
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
            Giếng sâu
        </td>
        <td>
            Sân sau
        </td>
        <td>
            1236.0
        </td>
        <td>
            100.25
        </td>
        <td>
            3000m3/h
        </td>
        <td>
            2500m3/h
        </td>
        <td>
            GPBN87345
        </td>
        <td>
            checked
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
            Giếng sâu
        </td>
        <td>
            Sân sau
        </td>
        <td>
            1236.0
        </td>
        <td>
            100.25
        </td>
        <td>
            3000m3/h
        </td>
        <td>
            2500m3/h
        </td>
        <td>
            GPBN87345
        </td>
        <td>
            checked
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
            Giếng sâu
        </td>
        <td>
            Sân sau
        </td>
        <td>
            1236.0
        </td>
        <td>
            100.25
        </td>
        <td>
            3000m3/h
        </td>
        <td>
            2500m3/h
        </td>
        <td>
            GPBN87345
        </td>
        <td>
            checked
        </td>
        <td>
            <input type="checkbox" name="deleterow#">
        </td>
    </tr>
    <tr>
        <td colspan="9">
        </td>
        <td>
            <button type="submit" name="delete" class="btn btn-danger">Xóa</button>
        </td>
    </tr>
    </tbody>
</table>
<?php echo $this->Form->create('DienNuocDoanhNghiep',array('method'=>'post','class'=>'form-horizontal','role'=>'form'));?>
<div class="form-group">
    <label for="inputTongdtxd" class="col-sm-2 control-label">Giàn khoan</label>
    <?php echo $this->Form->input('colMaGK',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','type'=>'text'))
    ;?>
</div>
<div class="form-group">
    <label for="inputTongnv" class="col-sm-2 control-label">Vị trí</label>
    <?php echo $this->Form->input('colViTri', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'text','class'=>'form-control'));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Công suất</label>
    <?php echo $this->Form->input('colCongSuat', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'text','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Lưu lượng</label>
    <?php echo $this->Form->input('colLLuong', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'text','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Giấy phép số</label>
    <?php echo $this->Form->input('colSoGiayPhep', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'text','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Ghi chú</label>
    <?php echo $this->Form->input('colGhiChu', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'text','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->Form->submit(__('Lưu thông tin nước ngầm doanh nghiệp'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));?>
        <?php echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false));?>
    </div>
</div>
<?php echo $this->Form->end();?>

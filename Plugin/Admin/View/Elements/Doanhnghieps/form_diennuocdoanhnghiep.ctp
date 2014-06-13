<p><h3>2.3.ĐIỆN NƯỚC</h3></p>
<table class="table">
    <thead>
    <tr>
        <th>
            Năm
        </th>
        <th>
            Loại tiêu thụ
        </th>
        <th>
            Lưu lượng sử dụng
        </th>
        <th>
            Số ngày sử dụng
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
            Kinh doanh
        </td>
        <td>
            3000 Kw
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
            Kinh doanh
        </td>
        <td>
            3000 Kw
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
            Kinh doanh
        </td>
        <td>
            3000 Kw
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
            Kinh doanh
        </td>
        <td>
            3000 Kw
        </td>
        <td>
            100
        </td>
        <td>
            <input type="checkbox" name="deleterow#">
        </td>
    </tr>
    <tr>
        <td colspan="4">
        </td>
        <td>
            <button type="submit" name="delete" class="btn btn-danger">Xóa</button>
        </td>
    </tr>
    </tbody>
</table>
<?php echo $this->Form->create('DienNuocDoanhNghiep',array('method'=>'post','class'=>'form-horizontal','role'=>'form'));?>
<div class="form-group">
    <label for="inputTongdtxd" class="col-sm-2 control-label">Loại tiêu thụ</label>
    <?php echo $this->Form->input('colLoaiTThu',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','type'=>'text'))
    ;?>
</div>
<div class="form-group">
    <label for="inputTongnv" class="col-sm-2 control-label">Lưu lượng sử dụng</label>
    <?php echo $this->Form->input('colLuongSD', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'number','class'=>'form-control'));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Số ngày sử dụng</label>
    <?php echo $this->Form->input('colSoNgaySuDung', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'number','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->Form->submit(__('Lưu thông tin điện nước doanh nghiệp'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));?>
        <?php echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false));?>
    </div>
</div>
<?php echo $this->Form->end();?>

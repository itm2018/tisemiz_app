<p><h3>2.2. NGUYÊN LIỆU</h3></p>
<table class="table">
    <thead>
    <tr>
        <th>
            Năm
        </th>
        <th>
            Nguyên liệu
        </th>
        <th>
            Đơn vị tính
        </th>
        <th>
           Lượng sử dụng
        </th>
        <th>
           Lượng dữ trữ
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
            Gaz
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
            CỦi
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
            Trấu
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
            Than Đá
        </td>
        <td>
            Tấn
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
<?php echo $this->Form->create('NguyenLieuSanPham',array('method'=>'post','class'=>'form-horizontal','role'=>'form'));?>
<div class="form-group">
    <label for="inputTongdtxd" class="col-sm-2 control-label">Nguyên liệu</label>
    <?php echo $this->Form->input('colNguyenLieu',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','options'=>Common::getListNguyenlieu()))
    ;?>
</div>
<div class="form-group">
    <label for="inputTongnv" class="col-sm-2 control-label">Đơn vị tính</label>
    <?php echo $this->Form->input('colDonVi', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'text','class'=>'form-control',
        'placeholder'=>__('tấn/kg/m3...')));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Lượng sử dụng</label>
    <?php echo $this->Form->input('colLuongSD', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'number','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Lượng dự trữ</label>
    <?php echo $this->Form->input('colLuongDTru', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'number','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->Form->submit(__('Lưu thông tin nguyên liệu sản xuất'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));?>
        <?php echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false));?>
    </div>
</div>
<?php echo $this->Form->end();?>

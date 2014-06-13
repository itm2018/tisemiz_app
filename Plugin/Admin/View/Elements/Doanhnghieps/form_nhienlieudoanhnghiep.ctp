<p><h3>2.5. NHIÊN LIỆU</h3></p>
<table class="table">
    <thead>
    <tr>
        <th>
            Năm
        </th>
        <th>
            Nhiên liệu
        </th>
        <th>
            Đơn vị tính
        </th>
        <th>
            Lưu Lượng sử dụng
        </th>
        <th>
            Số ngày sử dụng
        </th>
        <th>
            Mục đích sử dụng
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
            Đốt
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
            Đốt
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
            Đốt
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
            Đốt
        </td>
        <td>
            <input type="checkbox" name="deleterow#">
        </td>
    </tr>
    <tr>
        <td colspan="6">
        </td>
        <td>
            <button type="submit" name="delete" class="btn btn-danger">Xóa</button>
        </td>
    </tr>
    </tbody>
</table>
<?php echo $this->Form->create('NhienLieuDoanhNghiep',array('method'=>'post','class'=>'form-horizontal','role'=>'form'));?>
<div class="form-group">
    <label for="inputTongdtxd" class="col-sm-2 control-label">Nhiên liệu</label>
    <?php echo $this->Form->input('colNhienLieu',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','options'=>Common::getListNguyenlieu()))
    ;?>
</div>
<div class="form-group">
    <label for="inputTongnv" class="col-sm-2 control-label">Đơn vị tính</label>
    <?php echo $this->Form->input('colDonVi', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'text','class'=>'form-control',
        'placeholder'=>__('tấn/kg/m3...')));?>
</div>
<div class="form-group">
    <label for="inputcolLuongSD" class="col-sm-2 control-label">Lượng sử dụng</label>
    <?php echo $this->Form->input('colLuongSD', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'number','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Số ngày sử dụng</label>
    <?php echo $this->Form->input('colSoNgaySD', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'number','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Mục đích sử dụng</label>
    <?php echo $this->Form->input('colSoNgaySD', array('div'=>array('class'=>'col-sm-10'),'label'=>false,'type'=>'text','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->Form->submit(__('Lưu thông tin nhiên liệu doanh nghiệp'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));?>
        <?php echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false));?>
    </div>
</div>
<?php echo $this->Form->end();?>

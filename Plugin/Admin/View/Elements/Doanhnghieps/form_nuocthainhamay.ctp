<p><h3>3.1. NƯỚC THẢI</h3></p>
<table class="table">
    <thead>
    <tr>
        <th>
            Năm
        </th>
        <th>
            Nguồn thải
        </th>
        <th>
            Lưu lượng
        </th>
        <th>
            Nguồn phát sinh chủ yếu
        </th>
        <th>
            Lưu lượng thiết kế
        </th>
        <th>
            Lưu lượng thực tế
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
            Sinh hoạt
        </td>
        <td>
            60
        </td>
        <td>
            Từ hoạt động nhà ăn tập thể và <br> vệ sinh của công nhân viên
        </td>
        <td>
            100
        </td>
        <td>
            60
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
            Sinh hoạt
        </td>
        <td>
            60
        </td>
        <td>
            Từ hoạt động nhà ăn tập thể và <br> vệ sinh của công nhân viên
        </td>
        <td>
            100
        </td>
        <td>
            60
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
            Sinh hoạt
        </td>
        <td>
            60
        </td>
        <td>
            Từ hoạt động nhà ăn tập thể và <br> vệ sinh của công nhân viên
        </td>
        <td>
            100
        </td>
        <td>
            60
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
            Sinh hoạt
        </td>
        <td>
            60
        </td>
        <td>
            Từ hoạt động nhà ăn tập thể và <br> vệ sinh của công nhân viên
        </td>
        <td>
            100
        </td>
        <td>
            60
        </td>
        <td>
            <input type="checkbox" name="deleterow#">
        </td>
    </tr>
    <tr class="danger">
        <td>
            2008
        </td>
        <td>
            Sinh hoạt
        </td>
        <td>
            60
        </td>
        <td>
            Từ hoạt động nhà ăn tập thể và <br> vệ sinh của công nhân viên
        </td>
        <td>
            100
        </td>
        <td>
            60
        </td>
        <td>
            <input type="checkbox" name="deleterow"/>
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
<p><h3>THÔNG TIN NƯỚC THẢI</h3></p>
<!--<form class="form-horizontal" role="form">-->
<?php echo $this->Form->create('NuocThaiNhamay',array('method'=>'post','role'=>'form','class'=>'form-horizontal'));?>
    <div class="form-group">
        <label for="inputNguonthai" class="col-sm-2 control-label">Nguồn thải</label>
       <!-- <div class="col-sm-10">
            <select class="form-control" id="inputNguonthai">
                <option value="1">Sinh hoạt</option>
                <option value="2">Sản xuất</option>
            </select>
        </div>-->
        <?php echo $this->Form->input('colNguonThai',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','options'=>Common::getListNguonThaiNuocThai()));?>
    </div>
    <div class="form-group">
        <label for="inputNam" class="col-sm-2 control-label">Thời điểm <span class="text-danger">*</span></label>
        <!--<div class="col-sm-10">
            <input type="text" class="form-control" id="inputNam" placeholder="">
        </div>-->
       <?php echo $this->Form->input('colThoiGian',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>__('dd/mm/yyyy')));?>
    </div>
    <div class="form-group">
        <label for="inputLuuluong" class="col-sm-2 control-label">Lưu lượng thải(m3/ngày)<span class="text-danger">*</span></label>
        <?php echo $this->Form->input('colLLuongThai',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','type'=>'text'));?>
    </div>
    <div class="form-group">
        <label for="inputNguonphatsinhchuyeu" class="col-sm-2 control-label">Nguồn phát sinh chủ yếu<span class="text-danger">*</span></label>
        <?php echo $this->Form->input('colNguonPSinh',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','type'=>'text'));?>
    </div>
    <div class="form-group">
        <label for="inputLuuluongthietke" class="col-sm-2 control-label">Lưu lượng thiết kế</label>
        <?php echo $this->Form->input('colLLXlyTK',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','type'=>'text'));?>
    </div>
    <div class="form-group">
        <label for="inputLuuluongthucte" class="col-sm-2 control-label">Lưu lượng thực tế</label>
        <?php echo $this->Form->input('colLLXlyTT',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','type'=>'text'));?>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo $this->Form->submit(__('Lưu thông tin nước thải'), array('class' => 'btn btn-primary',
                'div' => false, 'label' => false));?>
            <?php echo $this->Form->input('Thêm khác', array('type' => 'button', 'class' => 'btn btn-success', 'value' => 'Thêm khác',
                'div' => false, 'label' => false));?>
            <?php echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
                'div' => false, 'label' => false));?>
        </div>
    </div>
<?php echo $this->Form->end();?>
<p><h3>3.2. BIỆN PHÁP XỬ LÝ NƯỚC THẢI</h3></p>
<table class="table">
    <thead>
    <tr>
        <th>
            Năm
        </th>
        <th>
            Biện pháp xử lý
        </th>
        <th>
           Sinh hoạt
        </th>
        <th>
            Sản xuất
        </th>
        <th>
            Xử lý khí thải
        </th>
        <th>
            Làm nguội
        </th>
        <th>
            Nguồn khác
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
            Xả vào tuyến nước mưa
        </td>
        <td>
            có
        </td>
        <td>
            có
        </td>
        <td>
            không
        </td>
        <td>
            có
        </td>
        <td>
            Tẩy trùng, lọc
        </td>
        <td>
            cần kiểm tra thêm
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
            Xả vào tuyến nước mưa
        </td>
        <td>
            có
        </td>
        <td>
            có
        </td>
        <td>
            không
        </td>
        <td>
            có
        </td>
        <td>
            Tẩy trùng, lọc
        </td>
        <td>
            cần kiểm tra thêm
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
            Xả vào tuyến nước mưa
        </td>
        <td>
            có
        </td>
        <td>
            có
        </td>
        <td>
            không
        </td>
        <td>
            có
        </td>
        <td>
            Tẩy trùng, lọc
        </td>
        <td>
            cần kiểm tra thêm
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
            Xả vào tuyến nước mưa
        </td>
        <td>
            có
        </td>
        <td>
            có
        </td>
        <td>
            không
        </td>
        <td>
            có
        </td>
        <td>
            Tẩy trùng, lọc
        </td>
        <td>
            cần kiểm tra thêm
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
            Xả vào tuyến nước mưa
        </td>
        <td>
            có
        </td>
        <td>
            có
        </td>
        <td>
            không
        </td>
        <td>
            có
        </td>
        <td>
            Tẩy trùng, lọc
        </td>
        <td>
            cần kiểm tra thêm
        </td>
        <td>
            <input type="checkbox" name="deleterow#">
        </td>
    </tr>
    <tr>
        <td colspan="8">
        </td>
        <td>
            <button type="submit" name="delete" class="btn btn-danger">Xóa</button>
        </td>
    </tr>
    </tbody>
</table>
<p><h3>THÔNG TIN XỬ LÝ NƯỚC THẢI</h3></p>
<!--<form class="form-horizontal" role="form">-->
<?php echo $this->Form->create('XuLyNuocThaiDoanhNghiep',array('method'=>'post','class'=>'form-horizontal','role'=>'form'));?>
    <div class="form-group">
        <label for="inputBienphapxuly" class="col-sm-2 control-label">Biện pháp xử lý</label>
        <!--<div class="col-sm-10">
            <select class="form-control" id="inputBienphapxuly">
                <option value="1">Xả vào tuyến nước mưa</option>
                <option value="2">Xả vào tuyến nước bẩn</option>
                <option value="3">Song chắn rác</option>
                <option value="4">Tuyến nổi</option>
                <option value="5">Lắng</option>
                <option value="6">Keo tụ</option>
                <option value="7">Điều chỉnh pH</option>
                <option value="8">Sinh học kỵ khí</option>
                <option value="9">Sinh học hiếu khí</option>
                <option value="10">Lắng 2</option>
                <option value="11">Lọc</option>
                <option value="12">Khử trùng</option>
                <option value="13">Ép bùn</option>
                <option value="14">Khác</option>
            </select>
        </div>-->
        <?php echo $this->Form->input('colBPhapXL',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','options'=>Common::getListBienPhapXuLyNuocThai()))
        ;?>
    </div>
    <div class="form-group">
        <label for="inputNam" class="col-sm-2 control-label">Thời điểm <span class="text-danger">*</span></label>
        <!--<div class="col-sm-10">
            <input type="text" class="form-control" id="inputNam" placeholder="">
        </div>-->
        <?php echo $this->Form->input('colThoiGian',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','type'=>'text','placeholder'=>__('dd/mm/yyyy')))
        ;?>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <!--<div class="checkbox">
                <label><input type="checkbox"> Sinh hoạt</label>
            </div>-->
            <?php echo $this->Form->input('colNTSHoat',array('div'=>array('class'=>'checkbox'),'label'=>__('Sinh hoạt'),'type'=>'checkbox'))
            ;?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">

            <?php echo $this->Form->input('colNTSX',array('div'=>array('class'=>'checkbox'),'label'=>__('Sản xuất'),'type'=>'checkbox'))
            ;?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">

            <?php echo $this->Form->input('colXLKT',array('div'=>array('class'=>'checkbox'),'label'=>__('Xử lý khí thải'),'type'=>'checkbox'))
            ;?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">

            <?php echo $this->Form->input('colLamNguoi',array('div'=>array('class'=>'checkbox'),'label'=>__('Làm nguội'),'type'=>'checkbox'))
            ;?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">

            <?php echo $this->Form->input('colNguonKhac',array('div'=>array('class'=>'checkbox'),'label'=>__('Nguồn khác'),'type'=>'checkbox','id'=>'colNguonKhac'))
            ;?>
        </div>
    </div>
<div class="form-group" style="display: none" id="MotaNguonKhac">
    <label for="inputNam" class="col-sm-2 control-label">Mô tả</label>
    <?php echo $this->Form->input('colMotaNguonKhac',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'class'=>'form-control','type'=>'text','id'=>'colMotaNguonKhac'))
    ;?>
</div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php echo $this->Form->submit(__('Lưu thông tin xử lý nước thải'), array('class' => 'btn btn-primary',
                'div' => false, 'label' => false));?>
            <?php echo $this->Form->input('Thêm khác', array('type' => 'button', 'class' => 'btn btn-success', 'value' => 'Thêm khác',
                'div' => false, 'label' => false));?>
            <?php echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
                'div' => false, 'label' => false));?>
        </div>
    </div>
<?php echo $this->Form->end();?>
<script type="text/javascript">
    $(function(){
        $('#colNguonKhac').click(function(){
            $('#MotaNguonKhac').toggle(this.checked);
        });
    });
</script>
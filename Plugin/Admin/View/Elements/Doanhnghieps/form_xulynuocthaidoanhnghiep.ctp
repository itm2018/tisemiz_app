<p><h3>3.2. BIỆN PHÁP XỬ LÝ NƯỚC THẢI</h3></p>
<table class="table">
    <thead>
        <tr>
            <th>
                Thời điểm
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
    <tbody id="list-kqpt-nuocthaidoanhnghiep">
        <?php if (isset($listbienphapxulynuocthai) && count($listbienphapxulynuocthai)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listbienphapxulynuocthai as $xlntDN): ?>
                <tr class="<?php echo $classes[$i]; ?>">
                    <td>
                        <input type="hidden" name="colMa" value="<?php echo $xlntDN['XuLyNuocThaiDoanhNghiep']['colMa'] ?>">
                        <?php echo date('d/m/Y', strtotime($xlntDN['XuLyNuocThaiDoanhNghiep']['colThoiGian'])) ?>
                    </td>
                    <td>
                        <?php echo $xlntDN['BienPhapXuLyNuocThai']['tenbienphap'] ?>
                    </td>
                    <td>
                        <?php echo $xlntDN['XuLyNuocThaiDoanhNghiep']['colNTSHoat']?$xlntDN['XuLyNuocThaiDoanhNghiep']['colNTSHoat']:0; ?>
                    </td>
                    <td>
                        <?php echo $xlntDN['XuLyNuocThaiDoanhNghiep']['colNTSX']?$xlntDN['XuLyNuocThaiDoanhNghiep']['colNTSX']:0; ?>
                    </td>
                    <td>
                        <?php echo $xlntDN['XuLyNuocThaiDoanhNghiep']['colXLKT']?$xlntDN['XuLyNuocThaiDoanhNghiep']['colXLKT']:0; ?>
                    </td>
                    <td>
                        <?php echo $xlntDN['XuLyNuocThaiDoanhNghiep']['colLamNguoi']?$xlntDN['XuLyNuocThaiDoanhNghiep']['colLamNguoi']:0; ?>
                    </td>
                    <td>
                        <?php echo $xlntDN['XuLyNuocThaiDoanhNghiep']['colMotaNguonKhac'] ?>
                    </td>
                    <td>
                        <?php echo $xlntDN['XuLyNuocThaiDoanhNghiep']['colGhiChu'] ?>
                    </td>
                    <td>
                        <input type="checkbox" name="deleterow<?php echo $xlntDN['XuLyNuocThaiDoanhNghiep']['colMa'] ?>">
                    </td>
                </tr>
                <?php
                ++$i;
                if ($i == 3) {
                    $i = 0;
                }
                ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
    <tbody>
        <tr>
            <td colspan="8">
            </td>
            <td>
                <button type="submit" name="delete" class="btn btn-danger" id="btn-xoa-bienphapxulynuocthaidoanhnghiep">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<p><h3>THÔNG TIN XỬ LÝ NƯỚC THẢI</h3></p>
<!--<form class="form-horizontal" role="form">-->
<?php echo $this->Form->create('XuLyNuocThaiDoanhNghiep', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormXuLyNuocThaiDoanhNghiep')); ?>
<div class="form-group">
    <label for="inputBienphapxuly" class="col-sm-2 control-label">Biện pháp xử lý</label>
    <?php
    echo $this->Form->input('colBPhapXL', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'options' => Common::getListBienPhapXuLyNuocThai()))
    ;
    ?>
</div>
<div class="form-group">
    <label for="inputNam" class="col-sm-2 control-label">Thời điểm <span class="text-danger">*</span></label>
    <!--<div class="col-sm-10">
        <input type="text" class="form-control" id="inputNam" placeholder="">
    </div>-->
    <?php
    echo $this->Form->input('colThoiGian', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput validate-date', 'tentruong' => 'Thời điểm', 'type' => 'text', 'placeholder' => __('dd/mm/yyyy'), 'id' => 'txtcolThoiGian'))
    ;
    ?>
</div>
<table class="table-checkbox">
    <tr>
        <td><div class="form-group">
    <div class="col-sm-offset-2 col-sm-6">
        <?php
        echo $this->Form->input('colNTSHoat', array('div' => array('class' => 'checkbox'), 'label' => __('Sinh hoạt'), 'type' => 'checkbox'))
        ;
        ?>
    </div>
</div></td>
        <td><div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

        <?php
        echo $this->Form->input('colNTSX', array('div' => array('class' => 'checkbox'), 'label' => __('Sản xuất'), 'type' => 'checkbox'))
        ;
        ?>
    </div>
</div></td>
    </tr>
    <tr>
        <td><div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

        <?php
        echo $this->Form->input('colXLKT', array('div' => array('class' => 'checkbox'), 'label' => __('Xử lý khí thải'), 'type' => 'checkbox'))
        ;
        ?>
    </div>
</div></td>
        <td><div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

        <?php
        echo $this->Form->input('colLamNguoi', array('div' => array('class' => 'checkbox'), 'label' => __('Làm nguội'), 'type' => 'checkbox'))
        ;
        ?>
    </div>
</div></td>
    </tr>
    <tr>
        <td></td>
        <td><div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">

        <?php
        echo $this->Form->input('colNguonKhac', array('div' => array('class' => 'checkbox'), 'label' => __('Nguồn khác'), 'type' => 'checkbox', 'id' => 'colNguonKhac'))
        ;
        ?>
    </div>
</div></td>
        
    </tr>
</table>





<div class="form-group" style="display: none" id="MotaNguonKhac">
    <label for="inputNam" class="col-sm-2 control-label">Mô tả</label>
    <?php
    echo $this->Form->input('colMotaNguonKhac', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'colMotaNguonKhac'))
    ;
    ?>
</div>
<div class="form-group" id="ghichu">
    <label for="inputNam" class="col-sm-2 control-label">Ghi chú</label>
    <?php
    echo $this->Form->input('colGhiChu', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'colGhiChu'))
    ;
    ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->submit(__('Lưu thông tin xử lý nước thải'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));
        ?>
        <?php
// echo $this->Form->input('Thêm khác', array('type' => 'button', 'class' => 'btn btn-success', 'value' => 'Thêm khác',
//                'div' => false, 'label' => false));
        ?>
        <?php
        echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false, 'id' => 'btn-reset-bienphapxulynuocthai'));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
    $(function() {
        $('#colNguonKhac').change(function() {
            $('#MotaNguonKhac').toggle(this.checked);
        });
        $('#txtcolThoiGian').datepicker({numberOfMonths: 2}).next('.ui-datepicker-trigger').css({
            float: 'right',
            marginRight: '-20px',
            marginTop: '-25px'
        });
        $('#button-them-bienphapxulynuocthai').bind('click', function() {
            PopUp(6);
        });
        $('#btn-xoa-bienphapxulynuocthaidoanhnghiep').bind('click', function() {
            var list_colMa = [];
            $('#list-kqpt-nuocthaidoanhnghiep tr').each(function() {
                var colMa = $(this).find('input[name="colMa"]').first();
                var checkbox = $(this).find('input[type="checkbox"]');
                if (checkbox.prop('checked') == true) {
                    list_colMa.push(colMa.val());
                }
            });
            if (list_colMa.length == 0) {
                alert('Xin chọn dòng cần xóa');
                return false;
            }
            if (confirm('Bạn xác nhận muốn xóa (những) dòng này khỏi danh sách hiện tại')) {
                xoaDanhSachBienPhapXuLyNuocThai(list_colMa);
            } else {
                return false;
            }
        });
        var validaform_nuocthainhamaybpxlnt = Validator.init('#FormXuLyNuocThaiDoanhNghiep', 'doAddBPXLNT');
    });
    function doAddBPXLNT() {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: $('#FormXuLyNuocThaiDoanhNghiep').serialize(),
            type: "post",
            success: function(data, textStatus) {
//                console.log(data);
                var html = '';
                var parsed = JSON.parse(data);
                var classes = ['none', 'active', 'success', 'warning'];
                var i = 0;
                parsed.forEach(function(bpxlnt) {
                    html += '<tr class="' + classes[i] + '">\n\
            <td><input type="hidden" name="colMa" value="' + bpxlnt['XuLyNuocThaiDoanhNghiep']['colMa'] + '">' + formatDate(new Date(getDateFromFormat(bpxlnt['XuLyNuocThaiDoanhNghiep']['colThoiGian'], 'yyyy-MM-dd HH:mm:ss')), 'dd/MM/yyyy') + '</td>\n\
<td>' + bpxlnt['BienPhapXuLyNuocThai']['tenbienphap'] + '</td><td>' + echoBoolValue(bpxlnt['XuLyNuocThaiDoanhNghiep']['colNTSHoat']) + '</td>\n\
<td>' + echoBoolValue(bpxlnt['XuLyNuocThaiDoanhNghiep']['colNTSX']) + '</td>\n\
<td>' + echoBoolValue(bpxlnt['XuLyNuocThaiDoanhNghiep']['colXLKT']) + '</td>\n\
<td>' + echoBoolValue(bpxlnt['XuLyNuocThaiDoanhNghiep']['colLamNguoi']) + '</td>\n\
<td>' + bpxlnt['XuLyNuocThaiDoanhNghiep']['colMotaNguonKhac'] + '</td>\n\
<td>' + bpxlnt['XuLyNuocThaiDoanhNghiep']['colGhiChu'] + '</td>\n\
<td><input type="checkbox" name="deleterow' + bpxlnt['XuLyNuocThaiDoanhNghiep']['colMa'] + '"></td>\n\
</tr>';
                    ++i;
                    if (i == 3) {
                        i = 0;
                    }
                });
                $('#list-kqpt-nuocthaidoanhnghiep').html(html);
                $('#btn-reset-bienphapxulynuocthai').trigger('click');
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/thembienphapxulynuocthaidoanhnghiep') ?>"
        });
        return false;
    }
    function xoaDanhSachBienPhapXuLyNuocThai(list_colMa) {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: {listcolMa: list_colMa},
            type: "post",
            success: function(data, textStatus) {
//                console.log(data)
                window.location.reload();
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachbienphapxulynuocthaidoanhnghiep') ?>"
        });
        return false;
    }
    function echoBoolValue(value) {
        if (value === true || value === "true")
        {
            return 1;
        } else {
            return 0;
        }
    }
</script>
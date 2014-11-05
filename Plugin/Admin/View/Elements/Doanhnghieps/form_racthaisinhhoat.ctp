<!--form rác thải sinh hoạt-->
<p><h3>3.5. THÔNG TIN RÁC THẢI SINH HOẠT</h3></p>
<table class="table">
    <thead>
        <tr>
            <th>
                Thời gian
            </th>
            <th>
                Dạng chất thải
            </th>
            <th>
                Tổng khối lượng
            </th>
            <th>
                Nguồn phát sinh chủ yếu
            </th>
            <th>
                Hình thức lưu giữ
            </th>
            <th>
                Bán ra
            </th>
            <th>
                Thải bỏ
            </th>
            <th>
                Đơn vị thu mua
            </th>
            <th>
                Định kỳ thu mua
            </th>
            <th>
                Ghi chú
            </th>
            <th>
                Xóa
            </th>
        </tr>
    </thead>
    <tbody id="list-kqpt-racthaisinhhoatdoanhnghiep">
       <?php if (isset($listbienphapxulyracthaisinhhoat) && count($listbienphapxulyracthaisinhhoat)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listbienphapxulyracthaisinhhoat as $xlrtSH): ?>
                        <tr class="<?php echo $classes[$i]; ?>">
                            <td>
                                <input type="hidden" name="colMa" value="<?php echo $xlrtSH['RacThaiSinhHoat']['colMa'] ?>">
                <?php echo date('d/m/Y', strtotime($xlrtSH['RacThaiSinhHoat']['colThoiGian'])) ?>
                            </td>
                            <td>
                <?php echo h($xlrtSH['RacThaiSinhHoat']['colDangCThai']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtSH['RacThaiSinhHoat']['colTongKL']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtSH['RacThaiSinhHoat']['colNguonPSinh']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtSH['RacThaiSinhHoat']['colHThucLuu']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtSH['RacThaiSinhHoat']['colBanRa']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtSH['RacThaiSinhHoat']['colThaiBo']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtSH['RacThaiSinhHoat']['colDViThuMua']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtSH['RacThaiSinhHoat']['colDinhKyThuMua']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtSH['RacThaiSinhHoat']['colGhiChu']) ?>
                            </td>
                            <td>
                                <input type="checkbox" name="deleterow<?php echo $xlrtSH['RacThaiSinhHoat']['colMa'] ?>">
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
            <td colspan="10">
            </td>
            <td>
                <button type="submit" name="delete" class="btn btn-danger" id="btn-xoa-racthaisinhhoatdoanhnghiep">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<p><h3>THÔNG TIN KIỂM SOÁT RÁC THẢI SINH HOẠT</h3></p>
<?php echo $this->Form->create('RacThaiSinhHoat', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormRacThaiSinhHoat')); ?>
<div class="form-group">
    <label for="inputNam" class="col-sm-2 control-label">Thời điểm <span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colThoiGian', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput validate-date', 'tentruong' => 'Thời điểm', 'type' => 'text', 'placeholder' => __('dd/mm/yyyy'), 'id' => 'txtcolThoiGian_RacThaiSH'))
    ;
    ?>
</div>    
<div class="form-group">
    <label for="inputDangchatthai" class="col-sm-2 control-label">Dạng chất thải<span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colDangCThai', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'tentruong' => 'Dạng chất thải', 'type' => 'text', 'id' => 'txtcolDangCThai'))
    ;
    ?>
</div>    
<div class="form-group">
    <label for="inputcolTongKL" class="col-sm-2 control-label">Tổng khối lượng<span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colTongKL', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'tentruong' => 'Tổng khối lượng', 'type' => 'text', 'id' => 'txtcolTongKL'))
    ;
    ?>
</div>    

<div class="form-group">
    <label for="inputNguonphatsinhchuyeu_khi" class="col-sm-2 control-label">Nguồn phát sinh chủ yếu<span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colNguonPSinh', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'tentruong' => 'Nguồn phát sinh chủ yếu', 'type' => 'text', 'id' => 'txtcolNguonPSinh'))
    ;
    ?>
</div>
<div class="form-group">
    <label for="inputcolHThucLuu" class="col-sm-2 control-label">Hình thức lưu giữ<span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colHThucLuu', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'tentruong' => 'Hình thức lưu giữ', 'type' => 'text', 'id' => 'colHThucLuu'))
    ;
    ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->input('colBanRa', array('div' => array('class' => 'checkbox'), 'label' => __('Bán ra'), 'type' => 'checkbox'))
        ;
        ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->input('colThaiBo', array('div' => array('class' => 'checkbox'), 'label' => __('Thải bỏ'), 'type' => 'checkbox'))
        ;
        ?>
    </div>
</div>
<div class="form-group" id="ghichu">
    <label for="inputcolDViThuMua" class="col-sm-2 control-label">Đơn vị thu mua</label>
    <?php
    echo $this->Form->input('colDViThuMua', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'colDViThuMua'))
    ;
    ?>
</div>
<div class="form-group" id="ghichu">
    <label for="inputcolDinhKyThuMua" class="col-sm-2 control-label">Định kỳ thu mua</label>
    <?php
    echo $this->Form->input('colDinhKyThuMua', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'colDinhKyThuMua'))
    ;
    ?>
</div>
<div class="form-group" id="ghichu">
    <label for="inputcolGhiChu" class="col-sm-2 control-label">Ghi chú</label>
    <?php
    echo $this->Form->input('colGhiChu', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'colGhiChu'))
    ;
    ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->submit(__('Lưu thông tin rác thải sinh hoạt'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));
        ?>
        <?php
        echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false, 'id' => 'btn-reset-racthaisinhhoatdoanhnghiep'));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<!--/end form rac thai sinh hoat-->
<script type="text/javascript">
    $(function() {
        $('#txtcolThoiGian_RacThaiSH').datepicker({numberOfMonths: 2}).next('.ui-datepicker-trigger').css({
            float: 'right',
            marginRight: '-20px',
            marginTop: '-25px'
        });
        $('#btn-xoa-racthaisinhhoatdoanhnghiep').bind('click', function() {
            var list_colMa = [];
            $('#list-kqpt-racthaisinhhoatdoanhnghiep tr').each(function() {
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
                xoaDanhSachBienPhapRacThaiSinhHoat(list_colMa);
            } else {
                return false;
            }
        });
        var validaform_racthaisinhhoatdoanhnghiep = Validator.init('#FormRacThaiSinhHoat', 'doAddBPXLRTSH');
    });
    function doAddBPXLRTSH() {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: $('#FormRacThaiSinhHoat').serialize(),
            type: "post",
            success: function(data, textStatus) {
//                console.log(data);
                var html = '';
                var parsed = JSON.parse(data);
                var classes = ['none', 'active', 'success', 'warning'];
                var i = 0;
                parsed.forEach(function(bpxlrthsh) {
                    html += '<tr class="' + classes[i] + '">\n\
            <td><input type="hidden" name="colMa" value="' + bpxlrthsh['RacThaiSinhHoat']['colMa'] + '">' + formatDate(new Date(getDateFromFormat(bpxlrthsh['RacThaiSinhHoat']['colThoiGian'], 'yyyy-MM-dd HH:mm:ss')), 'dd/MM/yyyy') + '</td>\n\
<td>' + bpxlrthsh['RacThaiSinhHoat']['colDangCThai'] + '</td><td>' + bpxlrthsh['RacThaiSinhHoat']['colTongKL'] + '</td><td>' + bpxlrthsh['RacThaiSinhHoat']['colNguonPSinh'] + '</td>\n\
<td>' + bpxlrthsh['RacThaiSinhHoat']['colHThucLuu'] + '</td>\n\
<td>' + echoBoolValue(bpxlrthsh['RacThaiSinhHoat']['colBanRa']) + '</td>\n\
<td>' + echoBoolValue(bpxlrthsh['RacThaiSinhHoat']['colThaiBo']) + '</td>\n\
<td>' + bpxlrthsh['RacThaiSinhHoat']['colDViThuMua'] + '</td>\n\
<td>' + bpxlrthsh['RacThaiSinhHoat']['colDinhKyThuMua'] + '</td>\n\
<td>' + bpxlrthsh['RacThaiSinhHoat']['colGhiChu'] + '</td>\n\
<td><input type="checkbox" name="deleterow' + bpxlrthsh['RacThaiSinhHoat']['colMa'] + '"></td>\n\
</tr>';
                    ++i;
                    if (i == 3) {
                        i = 0;
                    }
                });
                $('#list-kqpt-racthaisinhhoatdoanhnghiep').html(html);
                $('#btn-reset-racthaisinhhoatdoanhnghiep').trigger('click');
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/thembienphapxulyracthaisinhhoat') ?>"
        });
        return false;
    }
    function xoaDanhSachBienPhapRacThaiSinhHoat(list_colMa) {
		var data={listcolMa: list_colMa},
			url="<?php echo Router::url('/admin/doanhnghiep/xoadanhsachbienphapxulyracthaisinhhoat') ?>";
		doPostAjax(url,data,'redirectracsinhhoat');
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
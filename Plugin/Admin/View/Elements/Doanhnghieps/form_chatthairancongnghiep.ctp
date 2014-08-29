<!--form rác thải công nghiệp-->
<p><h3>3.6. THÔNG TIN CHẤT THẢI RẮN CÔNG NGHIỆP</h3></p>
<table class="table">
    <thead>
        <tr>
            <th>
                Năm
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
                Xóa
            </th>
        </tr>
    </thead>
    <tbody id="list-kqpt-chatthairancongnghiep">
        <?php if (isset($listbienphapxulychatthairancongnghiep) && count($listbienphapxulychatthairancongnghiep)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listbienphapxulychatthairancongnghiep as $xlrtCN): ?>
                        <tr class="<?php echo $classes[$i]; ?>">
                            <td>
                                <input type="hidden" name="colMa" value="<?php echo $xlrtCN['ChatThaiRanCongNghiep']['colMa'] ?>">
                <?php echo date('d/m/Y', strtotime($xlrtCN['ChatThaiRanCongNghiep']['colThoiGian'])) ?>
                            </td>
                            <td>
                <?php echo h($xlrtCN['ChatThaiRanCongNghiep']['colDangCThai']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtCN['ChatThaiRanCongNghiep']['colTongKL']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtCN['ChatThaiRanCongNghiep']['colNguonPSinh']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtCN['ChatThaiRanCongNghiep']['colHThucLuu']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtCN['ChatThaiRanCongNghiep']['colBanRa']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtCN['ChatThaiRanCongNghiep']['colThaiBo']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtCN['ChatThaiRanCongNghiep']['colDViThuMua']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtCN['ChatThaiRanCongNghiep']['colDinhKyThuMua']) ?>
                            </td>
                            <td>
                <?php echo h($xlrtCN['ChatThaiRanCongNghiep']['colGhiChu']) ?>
                            </td>
                            <td>
                                <input type="checkbox" name="deleterow<?php echo $xlrtCN['ChatThaiRanCongNghiep']['colMa'] ?>">
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
                <button type="submit" name="delete" class="btn btn-danger" id="btn-xoa-chatthairancongnghiep">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<p><h3>THÔNG TIN KIỂM SOÁT CHẤT THẢI RẮN CÔNG NGHIỆP</h3></p>
<?php echo $this->Form->create('ChatThaiRanCongNghiep', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormChatThaiRanCongNghiep')); ?>
<div class="form-group">
    <label for="inputNam" class="col-sm-2 control-label">Thời điểm <span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colThoiGian', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput validate-date', 'tentruong' => 'Thời điểm', 'type' => 'text', 'placeholder' => __('dd/mm/yyyy'), 'id' => 'txtcolThoiGian_RacThaiCN'))
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
        echo $this->Form->submit(__('Lưu thông tin chất thải rắn công nghiệp'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));
        ?>
        <?php
        echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false, 'id' => 'btn-reset-chatthairancongnghiep'));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<!--/end form rac thai công nghiệp-->
<script type="text/javascript">
    $(function() {
        $('#txtcolThoiGian_RacThaiCN').datepicker({numberOfMonths: 2}).next('.ui-datepicker-trigger').css({
            float: 'right',
            marginRight: '-20px',
            marginTop: '-25px'
        });
        $('#btn-xoa-chatthairancongnghiep').bind('click', function() {
            var list_colMa = [];
            $('#list-kqpt-chatthairancongnghiep tr').each(function() {
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
                xoaDanhSachBienPhapChatThaiCongNghiep(list_colMa);
            } else {
                return false;
            }
        });
        var validaform_chatthairancongnghiep = Validator.init('#FormChatThaiRanCongNghiep', 'doAddBPXLCTCN');
    });
    function doAddBPXLCTCN() {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: $('#FormChatThaiRanCongNghiep').serialize(),
            type: "post",
            success: function(data, textStatus) {
                console.log(data);
                var html = '';
                var parsed = JSON.parse(data);
                var classes = ['none', 'active', 'success', 'warning'];
                var i = 0;
                parsed.forEach(function(bpxlrthsh) {
                    html += '<tr class="' + classes[i] + '">\n\
            <td><input type="hidden" name="colMa" value="' + bpxlrthsh['ChatThaiRanCongNghiep']['colMa'] + '">' + formatDate(new Date(getDateFromFormat(bpxlrthsh['ChatThaiRanCongNghiep']['colThoiGian'], 'yyyy-MM-dd HH:mm:ss')), 'dd/MM/yyyy') + '</td>\n\
<td>' + bpxlrthsh['ChatThaiRanCongNghiep']['colDangCThai'] + '</td><td>' + bpxlrthsh['ChatThaiRanCongNghiep']['colTongKL'] + '</td><td>' + bpxlrthsh['ChatThaiRanCongNghiep']['colNguonPSinh'] + '</td>\n\
<td>' + bpxlrthsh['ChatThaiRanCongNghiep']['colHThucLuu'] + '</td>\n\
<td>' + echoBoolValue(bpxlrthsh['ChatThaiRanCongNghiep']['colBanRa']) + '</td>\n\
<td>' + echoBoolValue(bpxlrthsh['ChatThaiRanCongNghiep']['colThaiBo']) + '</td>\n\
<td>' + bpxlrthsh['ChatThaiRanCongNghiep']['colDViThuMua'] + '</td>\n\
<td>' + bpxlrthsh['ChatThaiRanCongNghiep']['colDinhKyThuMua'] + '</td>\n\
<td>' + bpxlrthsh['ChatThaiRanCongNghiep']['colGhiChu'] + '</td>\n\
<td><input type="checkbox" name="deleterow' + bpxlrthsh['ChatThaiRanCongNghiep']['colMa'] + '"></td>\n\
</tr>';
                    ++i;
                    if (i == 3) {
                        i = 0;
                    }
                });
                $('#list-kqpt-chatthairancongnghiep').html(html);
                $('#btn-reset-chatthairancongnghiep').trigger('click');
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/thembienphapxulychatthaicongnghiep') ?>"
        });
        return false;
    }
    function xoaDanhSachBienPhapChatThaiCongNghiep(list_colMa) {
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
            url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachbienphapxulychatthaicongnghiep') ?>"
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
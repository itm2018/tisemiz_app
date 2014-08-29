<!--form rác thải nguy hại-->
<p><h3>3.7. THÔNG TIN CHẤT THẢI NGUY HẠI</h3></p>
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
    <tbody id="list-kqpt-chatthainguyhai">
        <?php if (isset($listbienphapxulychatthainguyhai) && count($listbienphapxulychatthainguyhai)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listbienphapxulychatthainguyhai as $xlctNH): ?>
                <tr class="<?php echo $classes[$i]; ?>">
                    <td>
                        <input type="hidden" name="colMa" value="<?php echo $xlctNH['ChatThaiNguyHai']['colMa'] ?>">
                        <?php echo date('d/m/Y', strtotime($xlctNH['ChatThaiNguyHai']['colThoiGian'])) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colDangCThai']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colTongKL']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colNguonPSinh']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colHThucLuu']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colBanRa']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colThaiBo']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colDViThuMua']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colDinhKyThuMua']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colGhiChu']) ?>
                    </td>
                    <td>
                        <input type="checkbox" name="deleterow<?php echo $xlctNH['ChatThaiNguyHai']['colMa'] ?>">
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
                <button type="submit" name="delete" class="btn btn-danger" id="btn-xoa-chatthainguyhai">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<p><h3>THÔNG TIN KIỂM SOÁT CHẤT THẢI NGUY HẠI</h3></p>
<?php echo $this->Form->create('ChatThaiNguyHai', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormChatThaiNguyHai')); ?>
<div class="form-group">
    <label for="inputNam" class="col-sm-2 control-label">Thời điểm <span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colThoiGian', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput validate-date', 'tentruong' => 'Thời điểm', 'type' => 'text', 'placeholder' => __('dd/mm/yyyy'), 'id' => 'txtcolThoiGian_RacThaiNH'))
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
        echo $this->Form->submit(__('Lưu thông tin chất thải nguy hại'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));
        ?>
        <?php
        echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false, 'id' => 'btn-reset-chatthainguyhai'));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<!--/end form rac thai nguy hại-->
<script type="text/javascript">
    $(function() {
        $('#txtcolThoiGian_RacThaiNH').datepicker({numberOfMonths: 2}).next('.ui-datepicker-trigger').css({
            float: 'right',
            marginRight: '-20px',
            marginTop: '-25px'
        });
        $('#btn-xoa-chatthainguyhai').bind('click', function() {
            var list_colMa = [];
            $('#list-kqpt-chatthainguyhai tr').each(function() {
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
                xoaDanhSachBienPhapChatThaiNguyHai(list_colMa);
            } else {
                return false;
            }
        });
        var validaform_chatthainguyhai = Validator.init('#FormChatThaiNguyHai', 'doAddBPXLCTNH');
    });
    function doAddBPXLCTNH() {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: $('#FormChatThaiNguyHai').serialize(),
            type: "post",
            success: function(data, textStatus) {
                console.log(data);
                var html = '';
                var parsed = JSON.parse(data);
                var classes = ['none', 'active', 'success', 'warning'];
                var i = 0;
                parsed.forEach(function(bpxlctNH) {
                    html += '<tr class="' + classes[i] + '">\n\
            <td><input type="hidden" name="colMa" value="' + bpxlctNH['ChatThaiNguyHai']['colMa'] + '">' + formatDate(new Date(getDateFromFormat(bpxlctNH['ChatThaiNguyHai']['colThoiGian'], 'yyyy-MM-dd HH:mm:ss')), 'dd/MM/yyyy') + '</td>\n\
<td>' + bpxlctNH['ChatThaiNguyHai']['colDangCThai'] + '</td><td>' + bpxlctNH['ChatThaiNguyHai']['colTongKL'] + '</td><td>' + bpxlctNH['ChatThaiNguyHai']['colNguonPSinh'] + '</td>\n\
<td>' + bpxlctNH['ChatThaiNguyHai']['colHThucLuu'] + '</td>\n\
<td>' + echoBoolValue(bpxlctNH['ChatThaiNguyHai']['colBanRa']) + '</td>\n\
<td>' + echoBoolValue(bpxlctNH['ChatThaiNguyHai']['colThaiBo']) + '</td>\n\
<td>' + bpxlctNH['ChatThaiNguyHai']['colDViThuMua'] + '</td>\n\
<td>' + bpxlctNH['ChatThaiNguyHai']['colDinhKyThuMua'] + '</td>\n\
<td>' + bpxlctNH['ChatThaiNguyHai']['colGhiChu'] + '</td>\n\
<td><input type="checkbox" name="deleterow' + bpxlctNH['ChatThaiNguyHai']['colMa'] + '"></td>\n\
</tr>';
                    ++i;
                    if (i == 3) {
                        i = 0;
                    }
                });
                $('#list-kqpt-chatthainguyhai').html(html);
                $('#btn-reset-chatthainguyhai').trigger('click');
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/thembienphapxulychatthainguyhai') ?>"
        });
        return false;
    }
    function xoaDanhSachBienPhapChatThaiNguyHai(list_colMa) {
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
            url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachbienphapxulychatthainguyhai') ?>"
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
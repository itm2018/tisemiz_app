<p><h3>4.1. GIÁM SÁT ĐỊNH KỲ KHÍ THẢI</h3></p>

<?php echo $this->Form->create('KetQuaGiamSatDinhKyKhiThai', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormKetQuaGiamSatDinhKyKhiThai')); ?>
<div class="form-group">
    <label class="col-sm-2 control-label">Vị trí đo</label>
    <?php
    echo $this->Form->input('id_vi_tri_do', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput'))
    ?>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Ngày giám sát <span class="required">*</span></label>
    <?php
    echo $this->Form->input('ngay_giam_sat', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'text', 'class' => 'short-length requiredInput',
        'id' => 'ngaygiamsat'));
    ?>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label"></label>
    <?php
    echo $this->Form->input('mota', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'textarea', 'class' => 'form-control',
        'id' => 'mota'));
    ?>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Ngày nhập </label>
    <?php
    echo $this->Form->input('ngay_nhap', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'text', 'class' => 'short-length',
        'id' => 'ngaynhap'));
    ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->submit(__('Đồng ý'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false, 'id' => 'btn-luu-kqgsdk-khithai'));
        ?>
        <?php
        echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false, 'id' => 'btn-reset-kqgsdk-khithai'));
        ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->button(__('Kết quả giám sát'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false, 'type' => 'button', 'id' => 'btn-nhap-kqgsdk-khithai'));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<table class="table">
    <thead>
        <tr>
            <th>
                Stt
            </th>
            <th>
                Vị trí đo
            </th>
            <th>
                Ngày giám sát
            </th>
            <th>
                Ngày nhập
            </th>
            <th>
                Xóa
            </th>
        </tr>
    </thead>
    <tbody id="list-vitrido">
        <?php if (isset($listnguyenlieu) && count($listnguyenlieu)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listnguyenlieu as $nl): ?>
                <tr class="<?php echo $classes[$i]; ?>">
                    <td>
                        <?php echo $nl['NguyenLieuSanPham']['colThang'] ?>
                    </td>
                    <td>
                        <input type="hidden" name="colMa" value="<?php echo $nl['NguyenLieuSanPham']['colMa'] ?>">
                        <?php echo $nl['NguyenLieuSanPham']['colNam'] ?>
                    </td>
                    <td>
                        <?php echo $nl['Nguyenlieu']['tennguyenlieu'] ?>
                    </td>
                    <td>
                        <?php echo $nl['NguyenLieuSanPham']['colDonVi'] ?>
                    </td>
                    <td>
                        <?php echo $nl['NguyenLieuSanPham']['colLuongSD'] ?>
                    </td>
                    <td>
                        <?php echo $nl['NguyenLieuSanPham']['colLuongDTru'] ?>
                    </td>
                    <td>
                        <input type="checkbox" name="deleterow<?php echo $nl['NguyenLieuSanPham']['colMa'] ?>">
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
            <td colspan="4">
            </td>
            <td>
                <button type="submit" name="delete" class="btn btn-danger" id="button-xoa-nguyenlieu-doanhnghiep">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript">
    $(function() {
        $('#ngaygiamsat').datepicker();
        $('#ngaynhap').datepicker();
        $('#btn-luu-thongtin-nguyenlieusx').bind('click', function() {

        });
        $('#btn-nhap-kqgsdk-khithai').bind('click', function() {
            PopUpUpdate(3,1);
        });
        $('#button-xoa-nguyenlieu-doanhnghiep').bind('click', function() {
            var list_colMa = [];
            $('#list-materials tr').each(function() {
                var colMa = $(this).find('input[name="colMa"]').first();
                var checkbox = $(this).find('input[type="checkbox"]');
                if (checkbox.prop('checked') == true) {
                    list_colMa.push(colMa.val());
                }
            });
            if (list_colMa.length == 0) {
                alert('Xin chọn nguyên liệu cần xóa');
                return false;
            }
            if (confirm('Bạn xác nhận muốn xóa những nguyên liệu này khỏi danh sách hiện tại')) {
                xoaDanhsachNguyenlieu(list_colMa);
            } else {
                return false;
            }
        });
        var validation_nguyenlieu = Validator.init('#FormNguyenLieuSanPham', 'doAddNguyenLieuSX');
    });
    function doAddNguyenLieuSX() {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: $('#FormNguyenLieuSanPham').serialize(),
            type: "post",
            success: function(data, textStatus) {

                var html = '';
                var parsed = JSON.parse(data);
                var classes = ['none', 'active', 'success', 'warning'];
                var i = 0;
                parsed.forEach(function(nl) {
                    //                    console.log(nl);
                    html += '<tr class="' + classes[i] + '"><td>' + parseInt(nl['NguyenLieuSanPham']['colThang']) + '</td>\n\
            <td><input type="hidden" name="colMa" value="' + nl['NguyenLieuSanPham']['colMa'] + '">' + parseInt(nl['NguyenLieuSanPham']['colNam']) + '</td>\n\
<td>' + nl['Nguyenlieu']['tennguyenlieu'] + '</td><td>' + nl['NguyenLieuSanPham']['colDonVi'] + '</td>\n\
<td>' + parseFloat(nl['NguyenLieuSanPham']['colLuongSD']) + '</td>\n\
<td>' + parseFloat(nl['NguyenLieuSanPham']['colLuongDTru']) + '</td>\n\
<td><input type="checkbox" name="deleterow' + nl['NguyenLieuSanPham']['colMa'] + '"></td>\n\
</tr>';
                    ++i;
                    if (i > 3) {
                        i = 0;
                    }
                });
                $('#list-materials').html(html);
                $('#btn-reset-nguyenlieusanpham').trigger('click');
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/themnguyenlieudoanhnghiep') ?>"
        });
        return false;
    }
    function xoaDanhsachNguyenlieu(list_colMa) {
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
                window.location.reload();
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachnguyenlieudoanhnghiep') ?>"
        });
        return false;
    }
</script>
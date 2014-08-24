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
    <tbody id="list-diennuoc">
        <?php if (isset($listdiennuoc) && count($listdiennuoc)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listdiennuoc as $pw): ?>
                <tr class="<?php echo $classes[$i]; ?>">
                    <td>
                        <input type="hidden" name="colMa" value="<?php echo $pw['DienNuocDoanhNghiep']['colMa'] ?>">
                        <?php echo $pw['DienNuocDoanhNghiep']['colNam'] ?>
                    </td>
                    <td>
                        <?php echo $pw['DienNuocDoanhNghiep']['colLoaiTThu'] ?>
                    </td>
                    <td>
                        <?php echo $pw['DienNuocDoanhNghiep']['colLuongSD'] ?>
                    </td>
                    <td>
                        <?php echo $pw['DienNuocDoanhNghiep']['colSoNgaySuDung'] ?>
                    </td>
                    <td>
                        <input type="checkbox" name="deleterow<?php echo $pw['DienNuocDoanhNghiep']['colMa'] ?>">
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
                <button type="submit" name="delete" class="btn btn-danger" id="btn-xoa-diennuoc">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<?php echo $this->Form->create('DienNuocDoanhNghiep', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormDienNuocDoanhNghiep')); ?>
<div class="form-group">
    <label for="colLoaiTThu" class="col-sm-2 control-label">Loại tiêu thụ</label>
    <?php
    echo $this->Form->input('colLoaiTThu', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'type' => 'text'))
    ;
    ?>
</div>
<div class="form-group">
    <label for="colLuongSD" class="col-sm-2 control-label">Lưu lượng sử dụng</label>
<?php echo $this->Form->input('colLuongSD', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'text', 'class' => 'form-control requiredInput')); ?>
</div>
<div class="form-group">
    <label for="colSoNgaySuDung" class="col-sm-2 control-label">Số ngày sử dụng</label>
    <?php
    echo $this->Form->input('colSoNgaySuDung', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'number', 'class' => 'form-control requiredInput',
    ));
    ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->submit(__('Lưu thông tin điện nước doanh nghiệp'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false, 'id' => 'btn-luu-thongtin-diennuoc'));
        ?>&nbsp;&nbsp;&nbsp;
<?php
echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
    'div' => false, 'label' => false, 'id' => 'btn-reset-diennuoc'));
?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
    $(function() {

        $('#btn-xoa-diennuoc').bind('click', function() {
            var list_colMa = [];
            $('#list-diennuoc tr').each(function() {
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
            if (confirm('Bạn xác nhận muốn xóa những thông tin về điện nước này khỏi danh sách hiện tại')) {
                xoaDanhsachDiennuoc(list_colMa);
            } else {
                return false;
            }
        });
        var validation = Validator.init('#FormDienNuocDoanhNghiep', 'doAddPowerWater');
    });
    function doAddPowerWater() {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: $('#FormDienNuocDoanhNghiep').serialize(),
            type: "post",
            success: function(data, textStatus) {
                var html = '';
                var powerwaters = JSON.parse(data);
                var classes = ['', 'active', 'success', 'warning'];
                var i = 0;
                powerwaters.forEach(function(sp) {
                    html += '<tr class="' + classes[i] + '"><td><input type="hidden" name="colMa" value="' + sp['DienNuocDoanhNghiep']['colMa'] + '">' + sp['DienNuocDoanhNghiep']['colNam'] + '</td><td>' + sp['DienNuocDoanhNghiep']['colLoaiTThu'] + '</td><td>' + sp['DienNuocDoanhNghiep']['colLuongSD'] + '</td><td>' + sp['DienNuocDoanhNghiep']['colSoNgaySuDung'] + '</td><td><input type="checkbox" name="deleterow' + sp['DienNuocDoanhNghiep']['colMa'] + '"></td></tr>';
                    ++i;
                    if (i == 3) {
                        i = 0;
                    }
                });
                $('#list-diennuoc').html(html);
                resetdata();
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/themdiennuoc') ?>"
        });
        return false;
    }

    function resetdata() {
        $('#btn-reset-diennuoc').trigger("click");
    }
    function xoaDanhsachDiennuoc(list_colMa) {
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
            url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachdiennuocdoanhnghiep') ?>"
        });
        return false;
    }
</script>
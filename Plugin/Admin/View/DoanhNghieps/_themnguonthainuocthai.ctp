<h4>Thêm mới nguồn thải nước thải</h4>
<?php echo $this->Form->create('NguonThaiNuocThai', array('type' => 'post')); ?>
<table class="table">
    <tr>
        <td><label for="colTenNguonThai" class="col-sm-10 control-label">Tên nguồn thải nước thải <span class="required">*</span></label></td>
        <td><?php echo $this->Form->input('colTenNguonThai', array('div' => array('class' => 'col-sm-10'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'txtcolTenNguonThai', 'placeholder' => 'nhập tên nguồn thải')); ?></td>
        <td style="text-align: left;"><?php echo $this->Form->submit('Lưu nguồn thải', array('class' => 'btn btn-primary', 'id' => 'button-luu-nguonthainuocthai')); ?></td>
    </tr>
</table>
<?php echo $this->Form->end(); ?>
<table class="table" id="list_nguonthainuocthai">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Tên Nguồn Thải
            </th>
            <th>
                Ngày tạo
            </th>
            <th>
                Sửa
            </th>
            <th>
                Xóa
            </th>
        </tr>
    </thead>
    <tbody id="list-products">
        <?php if(isset($listnguonthaiNT) && count($listnguonthaiNT)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listnguonthaiNT  as $ntNT): ?>
        <tr class="<?php echo $classes[$i]; ?>"><td><input type="hidden" name="colMa" value="<?php echo $ntNT['NguonThaiNuocThai']['colMa'] ?>"><?php echo $ntNT['NguonThaiNuocThai']['colMa'] ?></td><td style="text-align: left;"><?php echo $ntNT['NguonThaiNuocThai']['colTenNguonThai'] ?></td><td><?php echo date('d/m/Y', strtotime($ntNT['NguonThaiNuocThai']['created']))?></td><td><button type="button" class="btn btn-info" onclick="javascript:doUpdate(3, '<?php echo $ntNT['NguonThaiNuocThai']['colMa'] ?>');">Cập nhật</button></td><td><input type="checkbox" name="deleterow<?php echo $ntNT['NguonThaiNuocThai']['colMa'] ?>"></td></tr>
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
                <input type="button" value="Đóng" class="btn btn-sm" onclick="javascript:window.opener.location.reload();
                        window.close();">
            </td>
            <td>
                <button type="submit" name="delete" class="btn btn-danger" id="btn-xoa-nguonthainuocthai">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript">
    var json_str = '<?php echo json_encode(Common::getFullListDanhmucSanPham()); ?>';
    $(function() {
        $('#button-luu-nguonthainuocthai').bind('click', function() {
//            var dm = $('#inputDanhmucId').val();
            var tennl = $.trim($('#txtcolTenNguonThai').val());
//            if (dm == 0 || dm == '') {
//                alert('Xin chọn danh mục');
//                $('#inputDanhmucId').focus();
//                return false;
//            }
            if (tennl == '')
            {
                alert('Xin nhập tên nguồn thải');
                $('#txtcolTenNguonThai').focus();
                return false;
            }
        });
        $("#btn-xoa-nguonthainuocthai").click(function() {
            var colMas = [];
            $("#list_nguonthainuocthai tr").each(function() {
                var colMa = $(this).find('input[name="colMa"]').first().val();
                var checkbox = $(this).find('input[type="checkbox"]').first();
                if (checkbox.prop('checked') == true) {
                    colMas.push(colMa);
                }
            });
            if (!colMas.length) {
                alert('Xin chọn nguồn thải cần xóa');
                return false;
            }
            if (confirm("Xóa nguồn thải sẽ đồng thời xóa thông tin nguồn thải nước thải của doanh nghiệp.\nBạn có chắc muốn xóa nguồn thải?")) {
                doDeleteNguonThai(colMas);
            } else {
                return false;
            }
        });
    });
    function doDeleteNguonThai(colMas) {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: {list_colMa: colMas},
            type: "post",
            success: function(data, textStatus) {
//                console.log(data);
                window.location.reload();
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/xoanguonthainuocthais') ?>"
        });
        return false;
    }
/**
    function showLoading() {
        var div = '<div id="indicator" style="display: none;text-align: center; width: 100%; height: 100%; margin: auto; position: fixed; z-index: 999; background-color: #000; opacity: 0.7; left: 0; right: 0; top: 0; bottom: 0; vertical-align: middle;"><div style="position: relative; top: 45%; font-size: 14pt; color: #ccc; font-style: italic;">Đang xử lý...</div></div>';
        var i = 0;
        $('#indicator').each(function() {
            ++i;
        });
        if (i > 1) {
            $('#indicator').fadeIn();
        } else {
            $('body').append(div);
            $('#indicator').fadeIn();
        }
    }
    function hideLoading() {
        $("#indicator").fadeOut();
        window.location.reload();
    }
    */
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js');?>
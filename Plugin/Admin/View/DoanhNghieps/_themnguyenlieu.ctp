<h4>Thêm mới nguyên liệu</h4>
<?php echo $this->Form->create('Nguyenlieu', array('type' => 'post')); ?>
<table class="table">
<!--    <tr>
        <td><label for="colDanhMucSanPham" class="col-sm-2 control-label">Danh mục sản phẩm</label></td>
        <td><?php // echo $this->Form->input('danhmuc_id', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'id' => 'inputDanhmucId', 'options' => Common::getListDanhmucSanPham())); ?>
        </td>
        <td></td>
    </tr>-->
    <tr>
        <td><label for="inputTennguyenlieu" class="col-sm-2 control-label">Tên nguyên liệu <span class="required">*</span></label></td>
        <td><?php echo $this->Form->input('tennguyenlieu', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'txtTennguyenlieu', 'placeholder' => 'nhập tên nguyên liệu')); ?></td>
        <td><?php echo $this->Form->submit('Lưu nguyên liệu', array('class' => 'btn btn-primary', 'id' => 'button-luu-sanpham')); ?></td>
    </tr>
</table>
<?php echo $this->Form->end(); ?>
<table class="table" id="list_nguyenlieu">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Tên Nguyên Liệu
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
        <?php if (isset($listnguyenlieu) && count($listnguyenlieu)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listnguyenlieu  as $nguyenlieu): ?>
        <tr class="<?php echo $classes[$i]; ?>"><td><input type="hidden" name="id" value="<?php echo $nguyenlieu['Nguyenlieu']['id'] ?>"><?php echo $nguyenlieu['Nguyenlieu']['id'] ?></td><td style="text-align: left;"><?php echo $nguyenlieu['Nguyenlieu']['tennguyenlieu'] ?></td><td><?php echo date('d/m/Y', strtotime($nguyenlieu['Nguyenlieu']['created']))?></td><td><button type="button" class="btn btn-info" onclick="javascript:doUpdate(2, '<?php echo $nguyenlieu['Nguyenlieu']['id'] ?>');">Cập nhật</button></td><td><input type="checkbox" name="deleterow<?php echo $nguyenlieu['Nguyenlieu']['id'] ?>"></td></tr>
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
                <button type="submit" name="delete" class="btn btn-danger" id="btn-xoa-nguyenlieu">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript">
    var json_str = '<?php echo json_encode(Common::getFullListDanhmucSanPham()); ?>';
    $(function() {
        $('#button-luu-sanpham').bind('click', function() {
//            var dm = $('#inputDanhmucId').val();
            var tennl = $.trim($('#txtTennguyenlieu').val());
//            if (dm == 0 || dm == '') {
//                alert('Xin chọn danh mục');
//                $('#inputDanhmucId').focus();
//                return false;
//            }
            if (tennl == '')
            {
                alert('Xin nhập tên nguyên liệu');
                $('#txtTennguyenlieu').focus();
                return false;
            } else if (tennl.length < 5) {
                alert('Tên nguyên liệu có ít nhất 5 ký tự');
                $('#txtTennguyenlieu').focus();
                return false;
            }
        });
//        $('#inputDanhmucId').change(function() {
//            $('#txtTensanpham').val('');
//            var dm = $(this).val();
//            var found = false;
//            try {
//                var arr = JSON.parse(json_str);
//                var classes = ['none', 'active', 'success', 'warning'];
//                arr.forEach(function(oj) {
//                    if (oj['DanhmucSanPham']['id'] == dm && oj['Sanpham'].length > 0) {
//                        var listsp = oj['Sanpham'];
//                        var html = '';
//                        var i = 0;
//                        listsp.forEach(function(sp) {
//                            html += '<tr class="' + classes[i] + '"><td><input type="hidden" name="id" value="' + sp['id'] + '">' + sp['id'] + '</td><td style="text-align: left;">' + sp['tensanpham'] + '</td><td>' + oj['DanhmucSanPham']['tendanhmuc'] + '</td><td>' + sp['updated'] + '</td><td><button type="button" class="btn btn-info" onclick="javascript:doUpdate(1,' + parseInt(sp['id']) + ');">Cập nhật</button></td><td><input type="checkbox" name="deleterow' + sp['id'] + '"></td></tr>';
//                            ++i;
//                            if (i == 3) {
//                                i = 0;
//                            }
//                        });
//                        $('#list-products').html(html);
//                        found = true;
//                    }
//                });
//            } catch (e) {
//            }
//            if (!found) {
//                $('#list-products').html('<tr class="warning"><td colspan="6">Chưa có sản phẩm</td></tr>');
//            }
//        });
        $("#btn-xoa-nguyenlieu").click(function() {
            var ids = [];
            $("#list_nguyenlieu tr").each(function() {
                var id = $(this).find('input[name="id"]').first().val();
                var checkbox = $(this).find('input[type="checkbox"]').first();
                if (checkbox.prop('checked') == true) {
                    ids.push(id);
                }
            });
            if (!ids.length) {
                alert('Xin chọn nguyên liệu cần xóa');
                return false;
            }
            if (confirm("Bạn có chắc muốn xóa nguyên liệu?")) {
                ajaxRequest(ids);
            } else {
                return false;
            }
        });
    });
    function ajaxRequest(ids) {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: {ids: ids},
            type: "post",
            success: function(data, textStatus) {
                console.log(data);
                window.location.reload();
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/xoanguyenlieus') ?>"
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
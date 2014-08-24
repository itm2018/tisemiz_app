<h4>Thêm mới danh mục</h4>
<?php echo $this->Form->create('DanhmucSanPham', array('type' => 'post')); ?>
<table class="table">
    <tr>
        <td><label for="inputTenDanhMuc" class="col-sm-2 control-label">Tên danh mục <span class="required">*</span></label></td>
        <td><?php echo $this->Form->input('tendanhmuc', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'txtTendanhmuc', 'placeholder' => 'nhập tên danh mục')); ?></td>
        <td><?php echo $this->Form->submit('Lưu danh mục', array('class' => 'btn btn-primary')); ?></td>
    </tr>
</table>
<?php echo $this->Form->end(); ?>
<table class="table" id="list_danhmuc">
    <thead>
        <tr>
            <th>
                ID
            </th>
            <th>
                Tên Danh Mục
            </th>
            <th>
                Ngày tạo
            </th>
            <th>
                Số lượng sản phẩm
            </th>
            <th>
                Xóa
            </th>
        </tr>
    </thead>
    <tbody id="list-products">
        <?php if (isset($list_danhmucsanpham) && count($list_danhmucsanpham)): ?>
            <?php $i = 0; ?>
            <?php foreach ($list_danhmucsanpham as $danhmucsanpham): ?>
                <tr class="<?php echo $classes[$i]; ?>"><td><input type="hidden" name="id" value="<?php echo $danhmucsanpham['DanhmucSanPham']['id'] ?>"><?php echo $danhmucsanpham['DanhmucSanPham']['id'] ?></td><td style="text-align: left;"><?php echo $danhmucsanpham['DanhmucSanPham']['tendanhmuc'] ?></td><td><?php echo date('d/m/Y', strtotime($danhmucsanpham['DanhmucSanPham']['updated'])); ?></td><td><?php echo count($danhmucsanpham['Sanpham']); ?></td><td><input type="checkbox" name="deleterow<?php echo $danhmucsanpham['DanhmucSanPham']['id'] ?>"></td></tr>
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
                <button type="submit" name="delete" class="btn btn-danger" id="btn-xoa-danhmuc">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript">
    $(function() {
        $("#btn-xoa-danhmuc").click(function() {
            var ids = [];
            $("#list_danhmuc tr").each(function() {
                var id = $(this).find('input[name="id"]').first().val();
                var checkbox = $(this).find('input[type="checkbox"]').first();
                if (checkbox.prop('checked') == true) {
                    ids.push(id);
                }
            });
            if (!ids.length) {
                alert('Xin chọn danh mục sản phẩm cần xóa');
                return false;
            }
            if (confirm("Xóa danh mục sẽ mất các sản phẩm của danh mục đó.\nBạn có chắc muốn xóa?")) {
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
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhmucs') ?>"
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
    **/
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js');?>
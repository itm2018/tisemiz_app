<h4>Cập nhập sản phẩm</h4>
<?php echo $this->Form->create('Sanpham', array('type' => 'post')); ?>
<table class="table">
    <tr>
        <td><label for="colDanhMucSanPham" class="col-sm-2 control-label">Danh mục sản phẩm</label></td>
        <td><?php echo $this->Form->input('danhmuc_id', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'id' => 'inputDanhmucId', 'options' => Common::getListDanhmucSanPham())); ?>
        </td>
        <td></td>
    </tr>
    <tr>
        <td><label for="inputTensanpham" class="col-sm-2 control-label">Tên sản phẩm <span class="required">*</span></label></td>
        <td><?php echo $this->Form->input('tensanpham', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'txtTensanpham', 'placeholder' => 'nhập tên sản phẩm', 'value' => isset($sanpham) ? $sanpham['Sanpham']['tensanpham'] : '')); ?></td>
        <td><?php echo $this->Form->submit('Lưu sản phẩm', array('class' => 'btn btn-primary', 'id' => 'button-luu-sanpham')); ?></td>
    </tr>
</table>
<?php echo $this->Form->end(); ?>
<table class="table" id="list_danhmuc">
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <input type="button" value="Đóng" class="btn btn-sm" onclick="javascript:window.opener.location.reload();
                        window.close();">
            </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript">
    var danhmuc_id = "<?php echo isset($sanpham) ? $sanpham['Sanpham']['danhmuc_id'] : 0; ?>";
    $(function() {
        $('#inputDanhmucId').val(danhmuc_id);
        $('#button-luu-sanpham').bind('click', function() {
            var dm = $('#inputDanhmucId').val();
            var tensp = $.trim($('#txtTensanpham').val());
            if (dm == 0 || dm == '') {
                alert('Xin chọn danh mục');
                $('#inputDanhmucId').focus();
                return false;
            }
            else if (tensp == '')
            {
                alert('Xin nhập tên sản phẩm');
                $('#txtTensanpham').focus();
                return false;
            } else if (tensp.length < 5) {
                alert('Tên sản phẩm có ít nhất 5 ký tự');
                $('#txtTensanpham').focus();
                return false;
            }
        });
    });
</script>
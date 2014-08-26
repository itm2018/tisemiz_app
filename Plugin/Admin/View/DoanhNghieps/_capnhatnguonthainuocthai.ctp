<h4>Cập nhập nguồn thải nước thải</h4>
<?php echo $this->Form->create('NguonThaiNuocThai', array('type' => 'post')); ?>
<?php echo $this->Form->input('colMa', array('div' => false, 'label' => false, 'class' => 'form-control', 'type' => 'hidden', 'id' => 'colMa','value' => isset($nguonthainuocthai) ? $nguonthainuocthai['NguonThaiNuocThai']['colMa'] : '')); ?>
<table class="table">
    <tr>
        <td><label for="colTenNguonThai" class="col-sm-10 control-label">Tên nguồn thải <span class="required">*</span></label></td>
        <td><?php echo $this->Form->input('colTenNguonThai', array('div' => array('class' => 'col-sm-10'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'textcolTenNguonThai', 'placeholder' => 'nhập tên nguồn thải', 'value' => isset($nguonthainuocthai) ? $nguonthainuocthai['NguonThaiNuocThai']['colTenNguonThai'] : '')); ?></td>
        <td style="text-align: left;"><?php echo $this->Form->submit('Lưu nguồn thải', array('class' => 'btn btn-primary', 'id' => 'button-capnhat-nguonthainuocthai')); ?></td>
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
//    var danhmuc_id = "<?php // echo isset($sanpham) ? $sanpham['Sanpham']['danhmuc_id'] : 0; ?>";
    $(function() {
//        $('#inputDanhmucId').val(danhmuc_id);
        $('#button-capnhat-nguonthainuocthai').bind('click', function() {
//            var dm = $('#inputDanhmucId').val();
            var tennl = $.trim($('#textcolTenNguonThai').val());
//            if (dm == 0 || dm == '') {
//                alert('Xin chọn danh mục');
//                $('#inputDanhmucId').focus();
//                return false;
//            }
            if (tennl == '')
            {
                alert('Xin nhập tên nguồn thải nước thải');
                $('#txtTennguyenlieu').focus();
                return false;
            } 
//            else if (tennl.length < 5) {
//                alert('Tên nguyên liệu có ít nhất 5 ký tự');
//                $('#txtTennguyenlieu').focus();
//                return false;
//            }
        });
    });
</script>
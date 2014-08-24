<h4>Cập nhập nguyên liệu</h4>
<?php echo $this->Form->create('Nguyenlieu', array('type' => 'post')); ?>
<?php echo $this->Form->input('id', array('div' => false, 'label' => false, 'class' => 'form-control', 'type' => 'hidden', 'id' => 'idNguyenlieu','value' => isset($nguyenlieu) ? $nguyenlieu['Nguyenlieu']['id'] : '')); ?>
<table class="table">
    <tr>
        <td><label for="inputTennguyenlieu" class="col-sm-2 control-label">Tên nguyên liệu <span class="required">*</span></label></td>
        <td><?php echo $this->Form->input('tennguyenlieu', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'txtTennguyenlieu', 'placeholder' => 'nhập tên nguyên liệu', 'value' => isset($nguyenlieu) ? $nguyenlieu['Nguyenlieu']['tennguyenlieu'] : '')); ?></td>
        <td><?php echo $this->Form->submit('Lưu nguyên liệu', array('class' => 'btn btn-primary', 'id' => 'button-luu-nguyenlieu')); ?></td>
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
        $('#button-luu-nguyenlieu').bind('click', function() {
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
            } 
//            else if (tennl.length < 5) {
//                alert('Tên nguyên liệu có ít nhất 5 ký tự');
//                $('#txtTennguyenlieu').focus();
//                return false;
//            }
        });
    });
</script>
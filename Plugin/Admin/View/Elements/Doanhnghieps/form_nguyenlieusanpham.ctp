<p><h3>2.2. NGUYÊN LIỆU</h3></p>
<table class="table">
    <thead>
        <tr>
            <th rowspan="2">
                Tháng
            </th>
            <th rowspan="2">
                Năm
            </th>
            <th rowspan="2">
                Nguyên liệu
            </th>
            <th rowspan="2">
                Đơn vị tính
            </th>
            <th rowspan="2">
                Lượng sử dụng
            </th>
            <th rowspan="2">
                Lượng dữ trữ
            </th>
            <th colspan="2" class="center">
                Chức năng
            </th>
        </tr>
		<tr>
			<th>Cập nhật</th>
			<th>Xóa</th>
		</tr>
    </thead>
    <tbody id="list-materials">
        <?php if (isset($listnguyenlieu) && count($listnguyenlieu)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listnguyenlieu as $nl): ?>
                <tr class="<?php echo $classes[$i]; ?>">
                    <td>
                        <?php echo h($nl['NguyenLieuSanPham']['colThang'])?>
                    </td>
                    <td>
                        <input type="hidden" name="colMa" value="<?php echo $nl['NguyenLieuSanPham']['colMa'] ?>">
                        <?php echo h($nl['NguyenLieuSanPham']['colNam']) ?>
                    </td>
                    <td>
                        <?php echo h($nl['Nguyenlieu']['tennguyenlieu']) ?>
                    </td>
                    <td>
                        <?php echo h($nl['NguyenLieuSanPham']['colDonVi']) ?>
                    </td>
                    <td>
                        <?php echo h($nl['NguyenLieuSanPham']['colLuongSD']) ?>
                    </td>
                    <td>
                        <?php echo h($nl['NguyenLieuSanPham']['colLuongDTru']) ?>
                    </td>
					<td><button title="Ấn để cập nhật" type="button"
								class="btn
				btn-edit" onclick="javascript:loadData(1005,<?php echo h($nl['NguyenLieuSanPham']['colMa'])?>);
							"></button>
					</td>
                    <td>
                        <input type="checkbox" name="deleterow<?php echo h($nl['NguyenLieuSanPham']['colMa']) ?>">
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
        <form id="formupdatenguyenlieusanpham" method="post">
		<tr>
            <td>
				<input type="hidden" name="colMa" class="loadData" prefix="M_">
				<input type="hidden" name="colCSSX" class="loadData" prefix="M_">
				<input type="hidden" name="colNguyenLieu" class="loadData" prefix="M_">
				<input type="text" name="colThang" class="input loadData" prefix="M_" style="max-width: 50px;">
            </td>
			<td>
				<input type="text" name="colNam" class="input loadData" prefix="M_" style="max-width: 100px;">
            </td>
            <td>
				<input type="text" name="tennguyenlieu" class="input loadData" prefix="M_" disabled="disabled">
            </td>
            <td>
				<input type="text" name="colDonVi" class="input loadData" prefix="M_" style="max-width: 150px;">
            </td>
            <td>
				<input type="text" name="colLuongSD" class="input loadData" prefix="M_" style="max-width: 150px;">
            </td>
            <td>
				<input type="text" name="colLuongDTru" class="input loadData" prefix="M_" style="max-width: 150px;">
            </td>
			<td>
				<input type="button" name="submit" class="btn btn-success btn-update"
					   onclick="javascript:updatenguyenlieusanpham();"
					   value="Cập nhật">
			</td>
            <td>
                <button type="submit" name="delete" class="btn btn-danger" id="button-xoa-nguyenlieu-doanhnghiep">Xóa</button>
            </td>
        </tr>
		</form>
    </tbody>
</table>
    <?php echo $this->Form->create('NguyenLieuSanPham', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormNguyenLieuSanPham')); ?>
<div class="form-group">
    <label for="inputThang" class="col-sm-2 control-label">Tháng</label>
    <?php
    echo $this->Form->input('colThang', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'options' => Common::getListThang()))
    ;
    ?>
</div>
<div class="form-group">
    <label for="inputTongdtxd" class="col-sm-2 control-label">Nguyên liệu</label>
    <?php
    echo $this->Form->input('colNguyenLieu', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'options' => Common::getListNguyenlieu()))
    ;
    ?>
    <button id="button-them-nguyenlieu" class="add-group" type="button"></button>
</div>
<div class="form-group">
    <label for="inputTongnv" class="col-sm-2 control-label">Đơn vị tính</label>
    <?php
    echo $this->Form->input('colDonVi', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'text', 'class' => 'form-control requiredInput',
        'placeholder' => __('tấn/kg/m3...')));
    ?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Lượng sử dụng</label>
    <?php
    echo $this->Form->input('colLuongSD', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput',
    ));
    ?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Lượng dự trữ</label>
    <?php
    echo $this->Form->input('colLuongDTru', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control',
    ));
    ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->submit(__('Lưu thông tin nguyên liệu sản xuất'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false, 'id' => 'btn-luu-thongtin-nguyenlieusx'));
        ?>
        <?php
        echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false, 'id' => 'btn-reset-nguyenlieusanpham'));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
    $(function() {
        $('#btn-luu-thongtin-nguyenlieusx').bind('click', function() {

        });
        $('#button-them-nguyenlieu').bind('click', function() {
            PopUp(3);
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
            if(confirm('Bạn xác nhận muốn xóa những nguyên liệu này khỏi danh sách hiện tại')){
                xoaDanhsachNguyenlieu(list_colMa);
            }else{
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
<td><button title="Ấn để cập nhật" ' +
						'type="button" class="btn btn-edit" onclick="javascript:loadData(1005,' +
						'' + parseInt(nl['NguyenLieuSanPham']['colMa']) + ');"></button></td>\n\
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
    function xoaDanhsachNguyenlieu(list_colMa){
		var data={listcolMa: list_colMa};
		var url="<?php echo Router::url('/admin/doanhnghiep/xoadanhsachnguyenlieudoanhnghiep') ?>";
        doPostAjax(url,data,'redirectnguyenlieu');
        return false;
    }
</script>
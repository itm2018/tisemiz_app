<p><h3>2.5. NHIÊN LIỆU</h3></p>
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
			Nhiên liệu
		</th>
		<th rowspan="2">
			Đơn vị tính
		</th>
		<th rowspan="2">
			Lưu Lượng<br> sử dụng
		</th>
		<th rowspan="2">
			Số ngày<br> sử dụng
		</th>
		<th rowspan="2">
			Mục đích<br> sử dụng
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
	<tbody id="list-fuel">
	<?php if (isset($listnhienlieu) && count($listnhienlieu)): ?>
		<?php $i = 0; ?>
		<?php foreach ($listnhienlieu as $nl): ?>
			<tr class="<?php echo $classes[$i]; ?>">
				<td>
					<?php echo $nl['NhienLieuDoanhNghiep']['colThang'] ?>
				</td>
				<td>
					<input type="hidden" name="colMa" value="<?php echo $nl['NhienLieuDoanhNghiep']['colMa'] ?>">
					<?php echo $nl['NhienLieuDoanhNghiep']['colNam'] ?>
				</td>
				<td>
					<?php echo $nl['NhienLieuDoanhNghiep']['colNhienLieu'] ?>
				</td>
				<td>
					<?php echo $nl['NhienLieuDoanhNghiep']['colDonVi'] ?>
				</td>
				<td>
					<?php echo $nl['NhienLieuDoanhNghiep']['colLuongSD'] ?>
				</td>
				<td>
					<?php echo $nl['NhienLieuDoanhNghiep']['colSoNgaySD'] ?>
				</td>
				<td>
					<?php echo $nl['NhienLieuDoanhNghiep']['colMDichSD'] ?>
				</td>
				<td>
					<button title="Ấn để cập nhật" type="button"
							class="btn
				btn-edit" onclick="javascript:loadData(1015,<?php echo h($nl['NhienLieuDoanhNghiep']['colMa']) ?>);
						"></button>
				</td>
				<td>
					<input type="checkbox" name="deleterow<?php echo $nl['NhienLieuDoanhNghiep']['colMa'] ?>">
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
	<form name="formupdatenhienlieudoanhnghiep" id="formupdatenhienlieudoanhnghiep" method="post">
		<tbody>
		<tr>
			<td>
				<input type="hidden" name="colMa" class="loadData" prefix="F_">
				<input type="text" name="colThang" class="loadData" prefix="F_" style="width: 50px;">
			</td>
			<td>
				<input type="text" name="colNam" class="input loadData" prefix="F_" style="width: 50px;">
			</td>
			<td>
				<input type="text" name="colNhienLieu" class="input loadData" prefix="F_">
			</td>
			<td>
				<input type="text" name="colDonVi" class="input loadData" prefix="F_">
			</td>
			<td>
				<input type="text" name="colLuongSD" class="input loadData" prefix="F_">
			</td>
			<td>
				<input type="text" name="colSoNgaySD" class="loadData" prefix="F_" style="width: 60px;">
			</td>
			<td>
				<input type="text" name="colMDichSD" class="input loadData" prefix="F_">
			</td>
			<td>
				<input type="button" name="submit" class="btn btn-success btn-update"
					   onclick="javascript:updatenhienlieudoanhnghiep();"
					   value="Cập nhật">
			</td>
			<td>
				<button type="button" name="delete" class="btn btn-danger" id="btn-xoa-nhienlieudoanhnghiep">Xóa
				</button>
			</td>
		</tr>

		</tbody>
	</form>
</table>
<?php echo $this->Form->create('NhienLieuDoanhNghiep', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormNhienLieuDoanhNghiep')); ?>
<div class="form-group">
	<label for="inputThang" class="col-sm-2 control-label">Tháng</label>
	<?php
	echo $this->Form->input('colThang', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'options' => Common::getListThang()));
	?>
</div>
<div class="form-group">
	<label for="colNhienLieu" class="col-sm-2 control-label">Nhiên liệu</label>
	<?php echo $this->Form->input('colNhienLieu', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'type' => 'text'));
	?>
	<!--<button id="button-them-nhienlieu" class="add-group" type="button"></button>-->
</div>
<div class="form-group">
	<label for="colDonVi" class="col-sm-2 control-label">Đơn vị tính</label>
	<?php echo $this->Form->input('colDonVi', array('div'         => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'text', 'class' => 'form-control requiredInput',
													'placeholder' => __('tấn/kg/m3...')));
	?>
</div>
<div class="form-group">
	<label for="colLuongSD" class="col-sm-2 control-label">Lượng sử dụng</label>
	<?php echo $this->Form->input('colLuongSD', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control',
												));
	?>
</div>
<div class="form-group">
	<label for="colSoNgaySD" class="col-sm-2 control-label">Số ngày sử dụng</label>
	<?php echo $this->Form->input('colSoNgaySD', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'number', 'class' => 'form-control',
												 ));
	?>
</div>
<div class="form-group">
	<label for="colMDichSD" class="col-sm-2 control-label">Mục đích sử dụng</label>
	<?php echo $this->Form->input('colMDichSD', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'text', 'class' => 'form-control',
												));
	?>
</div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<?php echo $this->Form->submit(__('Lưu thông tin nhiên liệu doanh nghiệp'), array('class' => 'btn btn-primary',
																						  'div'   => false, 'label' => false, 'id' => 'btn-luu-thongtinnhienlieu'));
		?>&nbsp;&nbsp;&nbsp;
		<?php echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
												  'div'  => false, 'label' => false, 'id' => 'btn-reset-thongtinnhienlieu'));
		?>
	</div>
</div>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
	$(function () {
		$('#button-them-nhienlieu').bind('click', function () {
			PopUp(4);
		});
		$('#btn-xoa-nhienlieudoanhnghiep').bind('click', function () {
			var list_colMa = [];
			$('#list-fuel tr').each(function () {
				var colMa = $(this).find('input[name="colMa"]').first();
				var checkbox = $(this).find('input[type="checkbox"]');
				if (checkbox.prop('checked') == true) {
					list_colMa.push(colMa.val());
				}
			});
			if (list_colMa.length == 0) {
				alert('Xin chọn nhiên liệu cần xóa');
				return false;
			}
			if (confirm('Bạn xác nhận muốn xóa những nhiên liệu này khỏi danh sách hiện tại')) {
				xoaDanhsachNhienLieu(list_colMa);
			} else {
				return false;
			}
		});
		var validation_nhienlieu = Validator.init('#FormNhienLieuDoanhNghiep', 'doAddNhienLieuDN');
	});
	function doAddNhienLieuDN() {
		$.ajax({
			beforeSend: function (XMLHttpRequest) {
				showLoading();
			},
			complete: function (XMLHttpRequest, textStatus) {
				hideLoading();
			},
			data: $('#FormNhienLieuDoanhNghiep').serialize(),
			type: "post",
			success: function (data, textStatus) {
				console.log(data);
				var html = '';
				var parsed = JSON.parse(data);
				var classes = ['none', 'active', 'success', 'warning'];
				var i = 0;
				parsed.forEach(function (nl) {
//                    console.log(nl);
					html += '<tr class="' + classes[i] + '">\n\
            <td>' + parseInt(nl['NhienLieuDoanhNghiep']['colThang']) + '</td><td><input type="hidden" name="colMa" value="' + nl['NhienLieuDoanhNghiep']['colMa'] + '">' + parseInt(nl['NhienLieuDoanhNghiep']['colNam']) + '</td>\n\
<td>' + nl['NhienLieuDoanhNghiep']['colNhienLieu'] + '</td><td>' + nl['NhienLieuDoanhNghiep']['colDonVi'] + '</td>\n\
<td>' + parseInt(nl['NhienLieuDoanhNghiep']['colLuongSD']) + '</td>\n\
<td>' + parseInt(nl['NhienLieuDoanhNghiep']['colSoNgaySD']) + '</td>\n\
<td>' + nl['NhienLieuDoanhNghiep']['colMDichSD'] + '</td>\n\
<td><button title="Ấn để cập nhật" ' +
						'type="button" class="btn btn-edit" onclick="javascript:loadData(1015,' +
						'' + parseInt(nl['NhienLieuDoanhNghiep']['colMa']) + ');"></button></td>\n\
<td><input type="checkbox" name="deleterow' + nl['NhienLieuDoanhNghiep']['colMa'] + '"></td>\n\
</tr>';
					++i;
					if (i > 3) {
						i = 0;
					}
				});
				$('#list-fuel').html(html);
				$('#btn-reset-thongtinnhienlieu').trigger('click');
			},
			url: "<?php echo Router::url('/admin/doanhnghiep/themnhienlieudoanhnghiep') ?>"
		});
		return false;
	}
	function xoaDanhsachNhienLieu(list_colMa) {
		var data={listcolMa: list_colMa};
		var url="<?php echo Router::url('/admin/doanhnghiep/xoadanhsachnhienlieudoanhnghiep') ?>";
		doPostAjax(url,data,'redirectnhienlieu');
		return false;
	}
</script>
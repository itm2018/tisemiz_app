<p><h3>2.3.2 NƯỚC</h3></p>
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
			Loại tiêu thụ
		</th>
		<th rowspan="2">
			Lưu lượng sử dụng
		</th>
		<th rowspan="2">
			Số ngày sử dụng
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
	<tbody id="list-nuoc">
	<?php if (isset($listnuoc) && count($listnuoc)): ?>
		<?php $i = 0; ?>
		<?php foreach ($listnuoc as $pw): ?>
			<tr class="<?php echo $classes[$i]; ?>">
				<td><?php echo h($pw['DienNuocDoanhNghiep']['colThang']) ?></td>
				<td>
					<input type="hidden" name="colMa" value="<?php echo h($pw['DienNuocDoanhNghiep']['colMa']) ?>">
					<?php echo h($pw['DienNuocDoanhNghiep']['colNam']) ?>
				</td>
				<td>
					<?php echo h($pw['DienNuocDoanhNghiep']['colLoaiTThu']) ?>
				</td>
				<td>
					<?php echo h($pw['DienNuocDoanhNghiep']['colLuongSD']) ?>
				</td>
				<td>
					<?php echo h($pw['DienNuocDoanhNghiep']['colSoNgaySuDung']) ?>
				</td>
				<td><button title="Ấn để cập nhật" type="button"
							class="btn
				btn-edit" onclick="javascript:loadData(1010,<?php echo h($pw['DienNuocDoanhNghiep']['colMa'])?>);
						"></button>
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
	<form id="formupdatenuocdoanhnghiep" method="post">
		<tr>
			<td>
				<input type="hidden" name="colMa" class="loadData" prefix="P_">
				<input type="hidden" name="colCSSX" class="loadData" prefix="P_">
				<input type="hidden" name="loai" class="loadData" prefix="P_">
				<input type="text" name="colThang" class="input loadData" prefix="P_">
			</td>
			<td>
				<input type="text" name="colNam" class="input loadData" prefix="P_">
			</td>
			<td>
				<input type="text" name="colLoaiTThu" class="input loadData" prefix="P_">
			</td>
			<td>
				<input type="text" name="colLuongSD" class="input loadData" prefix="P_">
			</td>
			<td>
				<input type="text" name="colSoNgaySuDung" class="input loadData" prefix="P_">
			</td>
			<td>
				<input type="button" name="submit" class="btn btn-success btn-update"
					   onclick="javascript:updatenuocdoanhnghiep();"
					   value="Cập nhật">
			</td>
			<td>
				<button type="button" name="delete" class="btn btn-danger" id="btn-xoa-nuoc">Xóa</button>
			</td>
		</tr>
	</form>
	</tbody>
</table>
<?php echo $this->Form->create('DienNuocDoanhNghiep', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormNuocDoanhNghiep')); ?>
<?php echo $this->Form->hidden('loai',array('value'=>2))?>
<div class="form-group">
	<label for="inputThang" class="col-sm-2 control-label">Tháng</label>
	<?php
	echo $this->Form->input('colThang', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'options' => Common::getListThang()))
	;
	?>
</div>
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
	echo $this->Form->input('colSoNgaySuDung', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'number', 'class' => 'form-control',
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
											'div' => false, 'label' => false, 'id' => 'btn-reset-nuoc'));
		?>
	</div>
</div>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
	$(function() {

		$('#btn-xoa-nuoc').bind('click', function() {
			var list_colMa = [];
			$('#list-nuoc tr').each(function() {
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
				xoaDanhsachNuoc(list_colMa);
			} else {
				return false;
			}
		});
		var validation = Validator.init('#FormNuocDoanhNghiep', 'doAddPowerWater2');
	});
	function doAddPowerWater2() {
		$.ajax({
			beforeSend: function(XMLHttpRequest) {
				showLoading();
			},
			complete: function(XMLHttpRequest, textStatus) {
				hideLoading();
			},
			data: $('#FormNuocDoanhNghiep').serialize(),
			type: "post",
			success: function(data, textStatus) {
				var html = '';
				var powerwaters = JSON.parse(data);
				var classes = ['', 'active', 'success', 'warning'];
				var i = 0;
				powerwaters.forEach(function(sp) {
					html += '<tr class="' + classes[i] + '"><td>' + parseInt(sp['DienNuocDoanhNghiep']['colThang']) +
						'</td><td><input type="hidden" name="colMa" value="' + sp['DienNuocDoanhNghiep']['colMa'] + '">' + parseInt(sp['DienNuocDoanhNghiep']['colNam']) + '</td><td>' + sp['DienNuocDoanhNghiep']['colLoaiTThu'] + '</td><td>' + sp['DienNuocDoanhNghiep']['colLuongSD'] + '</td><td>' + parseInt(sp['DienNuocDoanhNghiep']['colSoNgaySuDung']) + '</td><td><button title="Ấn để cập nhật" ' +
						'type="button" class="btn btn-edit" onclick="javascript:loadData(1010,' +
						'' + parseInt(sp['DienNuocDoanhNghiep']['colMa']) + ');"></button></td><td><input type="checkbox" name="deleterow' + sp['DienNuocDoanhNghiep']['colMa'] + '"></td></tr>';
					++i;
					if (i == 3) {
						i = 0;
					}
				});
				$('#list-nuoc').html(html);
				resetdata();
			},
			url: "<?php echo Router::url('/admin/doanhnghiep/themdiennuoc') ?>"
		});
		return false;
	}

	function resetdata() {
		$('#btn-reset-nuoc').trigger("click");
	}
	function xoaDanhsachNuoc(list_colMa) {
		var data={listcolMa: list_colMa};
		var url="<?php echo Router::url('/admin/doanhnghiep/xoadanhsachdiennuocdoanhnghiep') ?>";
		doPostAjax(url,data,'redirectnuoc');
		return false;
	}
</script>
<p><h3>3.1. NƯỚC THẢI</h3></p>
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
			Nguồn thải
		</th>
		<th rowspan="2">
			Lưu lượng
		</th>
		<th rowspan="2">
			Nguồn phát sinh<br> chủ yếu
		</th>
		<th rowspan="2">
			Lưu lượng<br> thiết kế
		</th>
		<th rowspan="2">
			Lưu lượng<br> thực tế
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
	<tbody id="list-plantwastewater">
	<?php if (isset($listnuocthainhamay) && count($listnuocthainhamay)): ?>
		<?php $i = 0; ?>
		<?php foreach ($listnuocthainhamay as $ntnm): ?>
			<tr class="<?php echo $classes[$i]; ?>">
				<td><?php echo $ntnm['NuocThaiNhaMay']['colThang'] ?></td>
				<td><input type="hidden" name="colMa"
						   value="<?php echo $ntnm['NuocThaiNhaMay']['colMa'] ?>"><?php echo $ntnm['NuocThaiNhaMay']['colNam'] ?>
				</td>
				<td>
					<?php echo $ntnm['NguonThaiNuocThai']['colTenNguonThai'] ?>
				</td>
				<td>
					<?php echo $ntnm['NuocThaiNhaMay']['colLLuongThai'] ?>
				</td>
				<td>
					<?php echo $ntnm['NuocThaiNhaMay']['colNguonPSinh'] ?>
				</td>
				<td>
					<?php echo $ntnm['NuocThaiNhaMay']['colLLXLyTK'] ?>
				</td>
				<td>
					<?php echo $ntnm['NuocThaiNhaMay']['colLLXLyTT'] ?>
				</td>
				<td>
					<button title="Ấn để cập nhật" type="button"
							class="btn
				btn-edit" onclick="javascript:loadData(1020,<?php echo h($ntnm['NuocThaiNhaMay']['colMa']) ?>);
						"></button>
				</td>
				<td>
					<input type="checkbox" name="deleterow<?php echo $ntnm['NuocThaiNhaMay']['colMa'] ?>">
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
	<form id="formupdatenuocthainhamay" method="post">
		<tr>
			<td>
				<input type="hidden" name="colMa" class="loadData" prefix="W_">
				<input type="hidden" name="colCSSX" class="loadData" prefix="W_">
				<input type="text" name="colThang" class="input loadData" prefix="W_" style="max-width: 50px;">
			</td>
			<td>
				<input type="text" name="colNam" class="input loadData" prefix="W_" style="max-width: 60px;">
			</td>
			<td>
				<input type="hidden" name="colNguonThai" class="loadData" prefix="W_">
				<input type="text" name="colTenNguonThai" class="input loadData" prefix="W_">
			</td>
			<td>
				<input type="text" name="colLLuongThai" class="input loadData" prefix="W_" style="max-width: 120px;">
			</td>
			<td>
				<input type="text" name="colNguonPSinh" class="input loadData" prefix="W_" style="max-width: 150px;">
			</td>
			<td>
				<input type="text" name="colLLXLyTK" class="input loadData" prefix="W_" style="max-width: 120px;">
			</td>
			<td>
				<input type="text" name="colLLXLyTT" class="input loadData" prefix="W_" style="max-width: 120px;">
			</td>
			<td>
				<input type="button" name="submit" class="btn btn-success btn-update"
					   onclick="javascript:updatenuocthainhamay();"
					   value="Cập nhật">
			</td>
			<td>
				<button type="button" name="delete" class="btn btn-danger" id="btn-xoa-nuocthainhamay">Xóa</button>
			</td>
		</tr>
	</form>
	</tbody>
</table>
<p><h3>THÔNG TIN NƯỚC THẢI</h3></p>
<?php echo $this->Form->create('NuocThaiNhaMay', array('method' => 'post', 'role' => 'form', 'class' => 'form-horizontal', 'id' => 'FormNuocThaiNhaMay')); ?>
<div class="form-group">
	<label for="inputThang" class="col-sm-2 control-label">Tháng</label>
	<?php
	echo $this->Form->input('colThang', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'options' => Common::getListThang()));
	?>
</div>
<div class="form-group">
	<label for="inputNguonthai" class="col-sm-2 control-label">Nguồn thải</label>
	<?php echo $this->Form->input('colNguonThai', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'options' => Common::getListNguonThaiNuocThai())); ?>
	<button id="button-them-nguonthainuocthai" class="add-group" type="button"></button>
</div>
<div class="form-group">
	<label for="inputLuuluong" class="col-sm-2 control-label">Lưu lượng thải(m3/ngày)<span class="text-danger">*</span></label>
	<?php echo $this->Form->input('colLLuongThai', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput validate-number', 'type' => 'text', 'type' => 'text', 'tentruong' => 'Lưu lượng thải')); ?>
</div>
<div class="form-group">
	<label for="inputNguonphatsinhchuyeu" class="col-sm-2 control-label">Nguồn phát sinh chủ yếu<span
			class="text-danger">*</span></label>
	<?php echo $this->Form->input('colNguonPSinh', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'type' => 'text')); ?>
</div>
<div class="form-group">
	<label for="inputLuuluongthietke" class="col-sm-2 control-label">Lưu lượng thiết kế</label>
	<?php echo $this->Form->input('colLLXLyTK', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control validate-number', 'type' => 'text', 'tentruong' => 'Lưu lượng thiết kế')); ?>
</div>
<div class="form-group">
	<label for="inputLuuluongthucte" class="col-sm-2 control-label">Lưu lượng thực tế</label>
	<?php echo $this->Form->input('colLLXLyTT', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control validate-number', 'type' => 'text', 'tentruong' => 'Lưu lượng thực tế')); ?>
</div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<?php
		echo $this->Form->submit(__('Lưu thông tin nước thải'), array('class' => 'btn btn-primary',
																	  'div'   => false, 'label' => false, 'id' => 'btn-luu-nuocthainhamay'));
		?>
		<?php
		// echo $this->Form->input('Thêm khác', array('type' => 'button', 'class' => 'btn btn-success', 'value' => 'Thêm khác',
		//                'div' => false, 'label' => false));
		?>
		<?php
		echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
											'div'  => false, 'label' => false, 'id' => 'btn-reset-nuocthainhamay'));
		?>
	</div>
</div>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
	$(function () {
		$('#textColThoigian').datepicker({numberOfMonths: 2}).next('.ui-datepicker-trigger').css({
			float: 'right',
			marginRight: '-20px',
			marginTop: '-25px'
		});
		$('#button-them-nguonthainuocthai').bind('click', function () {
			PopUp(5);
		});
		$('#btn-xoa-nuocthainhamay').bind('click', function () {
			var list_colMa = [];
			$('#list-plantwastewater tr').each(function () {
				var colMa = $(this).find('input[name="colMa"]').first();
				var checkbox = $(this).find('input[type="checkbox"]');
				if (checkbox.prop('checked') == true) {
					list_colMa.push(colMa.val());
				}
			});
			if (list_colMa.length == 0) {
				alert('Xin chọn nguồn nước thải cần xóa');
				return false;
			}
			if (confirm('Bạn xác nhận muốn xóa những nguồn nước thải này khỏi danh sách hiện tại')) {
				xoaDanhSachNuocThaiNhaMay(list_colMa);
			} else {
				return false;
			}
		});
		var validaform_nuocthainhamay = Validator.init('#FormNuocThaiNhaMay', 'doAddNuocThaiNhaMay');
	});
	function doAddNuocThaiNhaMay() {
		$.ajax({
			beforeSend: function (XMLHttpRequest) {
				showLoading();
			},
			complete: function (XMLHttpRequest, textStatus) {
				hideLoading();
			},
			data: $('#FormNuocThaiNhaMay').serialize(),
			type: "post",
			success: function (data, textStatus) {
				var html = '';
				var parsed = JSON.parse(data);
				var classes = ['none', 'active', 'success', 'warning'];
				var i = 0;
				parsed.forEach(function (ntnm) {
					console.log(ntnm);
					html += '<tr class="' + classes[i] + '">\n\
            <td><input type="hidden" name="colMa" value="' + ntnm['NuocThaiNhaMay']['colMa'] + '">' + parseInt(ntnm['NuocThaiNhaMay']['colThang']) + '</td>\n\
<td>' + parseInt(ntnm['NuocThaiNhaMay']['colNam']) + '</td><td>' + ntnm['NguonThaiNuocThai']['colTenNguonThai'] + '</td><td>' + parseFloat(ntnm['NuocThaiNhaMay']['colLLuongThai']) + '</td>\n\
<td>' + ntnm['NuocThaiNhaMay']['colNguonPSinh'] + '</td>\n\
<td>' + parseFloat(ntnm['NuocThaiNhaMay']['colLLXLyTK']) + '</td>\n\
<td>' + parseFloat(ntnm['NuocThaiNhaMay']['colLLXLyTT']) + '</td>\n\
<td><input type="checkbox" name="deleterow' + ntnm['NuocThaiNhaMay']['colMa'] + '"></td>\n\
</tr>';
					++i;
					if (i == 3) {
						i = 0;
					}
				});
				$('#list-plantwastewater').html(html);
				$('#btn-reset-nuocthainhamay').trigger('click');
			},
			url: "<?php echo Router::url('/admin/doanhnghiep/themnuocthainhamay') ?>"
		});
		return false;
	}
	function xoaDanhSachNuocThaiNhaMay(list_colMa) {
		var data={listcolMa: list_colMa};
		var url= "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachnuocthainhamay') ?>";
		doPostAjax(url,data);
		return false;
	}
</script>
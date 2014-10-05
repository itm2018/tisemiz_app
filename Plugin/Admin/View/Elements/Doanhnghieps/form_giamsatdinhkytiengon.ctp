<p><h3>4.3. GIÁM SÁT ĐỊNH KỲ TIẾNG ỒN</h3></p>

<?php echo $this->Form->create('KetQuaGiamSatDinhKyDoRung', array('url'=>'/admin/doanhnghiep/themmoi/step4/tiengon',
																	'method' => 'post',
																	'class' => 'form-horizontal',
																	'role' => 'form',
																	'id' => 'FormKetQuaGiamSatDinhKyDoRung')); ?>
<?php echo $this->Form->hidden('id'); ?>
<div class="form-group">
	<label class="col-sm-2 control-label">Vị trí đo <span class="required">*</span></label>
	<?php
	echo $this->Form->input('vi_tri_do', array('div' => array('class' => 'col-sm-6'), 'label' => false,
											 'class' => 'form-control requiredInput'))
	?>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Ngày giám sát <span class="required">*</span></label>
	<?php
	echo $this->Form->input('ngay_giam_sat', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'text', 'class' => 'short-length requiredInput',
											 ));
	?>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Tiếng ồn </label>
	<?php
	echo $this->Form->input('tieng_on', array('div' => array('class' => 'col-sm-6'), 'label' => false,
											 'type' => 'text', 'class' => 'short-length requiredInput',
											 ));
	?>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Độ rung </label>
	<?php
	echo $this->Form->input('do_rung', array('div' => array('class' => 'col-sm-6'), 'label' => false,
											 'type' => 'text', 'class' => 'short-length requiredInput',
											 ));
	?>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Ghi chú</label>
	<?php
	echo $this->Form->input('ghichu', array('div' => array('class' => 'col-sm-6'), 'label' => false,
										  'type' => 'textarea', 'class' => 'form-control',
									));
	?>
</div>
<div class="form-group">
	<label class="col-sm-2 control-label">Ngày nhập </label>
	<?php
	echo $this->Form->input('ngay_nhap', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'text', 'class' => 'short-length',
										 ));
	?>
</div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<?php
		echo $this->Form->submit(__('Đồng ý'), array('class' => 'btn btn-primary',
													 'div' => false, 'label' => false, 'id' => 'btn-luu-kqgsdk-khithai'));
		?>
		<?php
		echo $this->Form->input('reset', array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
											'div' => false, 'label' => false, 'id' => 'btn-reset-kqgsdk-dorung'));
		?>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
	</div>
</div>
<?php echo $this->Form->end(); ?>
<div class="scroll">
	<table class="table">
		<thead>
		<tr>
			<th>
				Stt
			</th>
			<th>
				Vị trí đo
			</th>
			<th>
				Ngày giám sát
			</th>
			<th>
				Ngày nhập
			</th>
			<th>Tiếng ồn</th>
			<th>Độ rung</th>
			<th>
				Xóa
			</th>
		</tr>
		</thead>
		<tbody id="list-KetQuaGiamSatDinhKyDoRung">
		<?php if (isset($list_ketquagiamsatdorung) && count($list_ketquagiamsatdorung)): ?>
			<?php $i = 0; ?>
			<?php $stt = 1; ?>
			<?php foreach ($list_ketquagiamsatdorung as $point): ?>
				<tr class="<?php echo $classes[$i]; ?>" title="click để cập nhật">
					<input type="hidden" name="id" value="<?php echo h($point['KetQuaGiamSatDinhKyDoRung']['id']) ?>"/>
					<td style="display: none" class="ghichu"><?php echo h
						($point['KetQuaGiamSatDinhKyDoRung']['ghichu'])
						?></td>
					<td>
						<?php echo $stt ?>
					</td>
					<td class="vitrido">
						<?php echo h($point['KetQuaGiamSatDinhKyDoRung']['vi_tri_do']) ?>
					</td>
					<td class="ngaygiamsat">
						<?php echo date('d/m/Y', strtotime($point['KetQuaGiamSatDinhKyDoRung']['ngay_giam_sat'])) ?>
					</td>
					<td class="ngaynhap">
						<?php echo!empty($point['KetQuaGiamSatDinhKyDoRung']['ngay_nhap']) ? date('d/m/Y', strtotime($point['KetQuaGiamSatDinhKyDoRung']['ngay_nhap'])) : ''; ?>
					</td>
					<td class="tiengon">
						<?php echo h($point['KetQuaGiamSatDinhKyDoRung']['tieng_on']) ?>
					</td>
					<td class="dorung">
						<?php echo h($point['KetQuaGiamSatDinhKyDoRung']['do_rung']) ?>
					</td>
					<td>
						<input type="checkbox" name="deleterow<?php echo $point['KetQuaGiamSatDinhKyDoRung']['id'] ?>">
					</td>
				</tr>
				<?php
				++$i;
				++$stt;
				if ($i == 3) {
					$i = 0;
				}
				?>
			<?php endforeach; ?>
		<?php endif; ?>
		</tbody>
		<tbody>
		<tr>
			<td colspan="6">
			</td>
			<td>
				<button type="submit" name="delete" class="btn btn-danger"
						id="button-xoa-kqgsdk-dorung-doanhnghiep">Xóa</button>
			</td>
		</tr>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(function() {
		$('#KetQuaGiamSatDinhKyDoRungNgayGiamSat').datepicker();
		$('#KetQuaGiamSatDinhKyDoRungNgayNhap').datepicker();
		$('#button-xoa-kqgsdk-dorung-doanhnghiep').bind('click', function() {
			var list_colMa = [];
			$('#list-KetQuaGiamSatDinhKyDoRung tr').each(function() {
				var id = $(this).find('input[name="id"]').first();
				var checkbox = $(this).find('input[type="checkbox"]');
				if (checkbox.prop('checked') == true) {
					list_colMa.push(id.val());
				}
			});
			if (list_colMa.length == 0) {
				alert('Xin chọn dòng cần xóa');
				return false;
			}

			if (confirm('Bạn xác nhận muốn xóa những dòng này khỏi danh sách hiện tại')) {
				xoadanhsachketquagiamsatdinhkydorung(list_colMa);
			} else {
				return false;
			}
		});
		$('#list-KetQuaGiamSatDinhKyDoRung tr').bind('click', function() {
			var vitrido = $.trim($(this).find('.vitrido').html());
			$('#KetQuaGiamSatDinhKyDoRungViTriDo').val(vitrido);
			var id = $(this).children('input[name="id"]').val();
			$('#KetQuaGiamSatDinhKyDoRungId').val(id);
			var ngaygiamsat=$.trim($(this).children('.ngaygiamsat').html());
			$('#KetQuaGiamSatDinhKyDoRungNgayGiamSat').val(ngaygiamsat);
			var ngaynhap=$.trim($(this).children('.ngaynhap').html());
			$('#KetQuaGiamSatDinhKyDoRungNgayNhap').val(ngaynhap);
			var tiengon=$.trim($(this).children('.tiengon').text());
			$('#KetQuaGiamSatDinhKyDoRungTiengOn').val(tiengon);
			var dorung=$.trim($(this).children('.dorung').text());
			$('#KetQuaGiamSatDinhKyDoRungDoRung').val(dorung);
			var ghichu = $.trim($(this).children('.ghichu').text());
			tinyMCE.get('KetQuaGiamSatDinhKyDoRungGhichu').setContent(ghichu);
		});
	});
	function xoadanhsachketquagiamsatdinhkydorung(list_colMa) {
		$.ajax({
			beforeSend: function(XMLHttpRequest) {
				showLoading();
			},
			complete: function(XMLHttpRequest, textStatus) {
				hideLoading();
			},
			data: {listcolMa: list_colMa},
			type: "post",
			success: function(data, textStatus) {
				window.location.reload();
			},
			url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachketquagiamsatdorung') ?>"
		});
		return false;
	}
</script>
<p><h3>4.2. GIÁM SÁT ĐỊNH KỲ NƯỚC THẢI</h3></p>

<?php echo $this->Form->create('ViTriDoNuocThai', array('url'=>'/admin/doanhnghiep/themmoi/step4/nuocthai',
																	'method' => 'post',
																	'class' => 'form-horizontal',
																 'role' => 'form',
																 'id' => 'FormViTriGiamSatDinhKyNuocThai')); ?>
<?php echo $this->Form->hidden('type', array('value' => 2)); ?>
<?php echo $this->Form->hidden('id'); ?>
<div class="form-group">
	<label class="col-sm-2 control-label">Vị trí đo <span class="required">*</span></label>
	<?php
	echo $this->Form->input('vi_tri', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput'))
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
	<label class="col-sm-2 control-label"></label>
	<?php
	echo $this->Form->input('mota', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'textarea', 'class' => 'form-control',
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
											'div' => false, 'label' => false, 'id' => 'btn-reset-kqgsdk-nuocthai'));
		?>
	</div>
</div>
<div class="form-group">
	<div class="col-sm-offset-2 col-sm-10">
		<?php
		//        echo $this->Form->button(__('Kết quả giám sát'), array('class' => 'btn btn-primary',
		//            'div' => false, 'label' => false, 'type' => 'button', 'id' => 'btn-nhap-kqgsdk-nuocthai'));
		?>
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
			<th>KQGS</th>
			<th>
				Xóa
			</th>
		</tr>
		</thead>
		<tbody id="list-vitridonuocthai">
		<?php if (isset($vitridonuocthai) && count($vitridonuocthai)): ?>
			<?php $i = 0; ?>
			<?php $stt = 1; ?>
			<?php foreach ($vitridonuocthai as $point): ?>
				<tr class="<?php echo $classes[$i]; ?>" title="click để cập nhật">
					<input type="hidden" name="id" value="<?php echo h($point['ViTriDoNuocThai']['id']) ?>"/>
					<td style="display: none" class="mota"><?php echo h($point['ViTriDoNuocThai']['mota'])?></td>
					<td>
						<?php echo $stt ?>
					</td>
					<td class="vitri">
						<?php echo h($point['ViTriDoNuocThai']['vi_tri']) ?>
					</td>
					<td class="ngaygiamsat">
						<?php echo date('d/m/Y', strtotime($point['ViTriDoNuocThai']['ngay_giam_sat'])) ?>
					</td>
					<td class="ngaynhap">
						<?php echo!empty($point['ViTriDoNuocThai']['ngay_nhap']) ? date('d/m/Y', strtotime($point['ViTriDoNuocThai']['ngay_nhap'])) : ''; ?>
					</td>
					<td>
						<?php
						echo $this->Form->button(__('Kết quả giám sát'), array('class' => 'btn btn-primary',
																			   'div' => false, 'label' => false,
																			   'type' => 'button',
																			   'id' => 'btn-nhap-kqgsdk-NuocThai','onclick'=>'javascript:PopUpUpdate(31,'.h($point['ViTriDoNuocThai']['id']).')'));
						?>
					</td>
					<td>
						<input type="checkbox" name="deleterow<?php echo $point['ViTriDoNuocThai']['id'] ?>">
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
			<td colspan="5">
			</td>
			<td>
				<button type="submit" name="delete" class="btn btn-danger" id="button-xoa-ViTriDoNuocThai-doanhnghiep">Xóa</button>
			</td>
		</tr>
		</tbody>
	</table>
</div>
<script type="text/javascript">
	$(function() {
		$('#ViTriDoNuocThaiNgayGiamSat').datepicker();
		$('#ViTriDoNuocThaiNgayNhap').datepicker();
		$('#btn-luu-thongtin-nguyenlieusx').bind('click', function() {

		});
		$('#button-xoa-ViTriDoNuocThai-doanhnghiep').bind('click', function() {
			var list_colMa = [];
			$('#list-vitridonuocthai tr').each(function() {
				var id = $(this).find('input[name="id"]').first();
				var checkbox = $(this).find('input[type="checkbox"]');
				if (checkbox.prop('checked') == true) {
					list_colMa.push(id.val());
				}
			});
			if (list_colMa.length == 0) {
				alert('Xin chọn vị trí đo cần xóa');
				return false;
			}
			if (confirm('Bạn xác nhận muốn xóa những vị trí này khỏi danh sách hiện tại')) {
				xoaDanhSachViTriDoNuocThai(list_colMa);
			} else {
				return false;
			}
		});
		$('#list-vitridonuocthai tr').bind('click', function() {
			var vitri = $.trim($(this).find('.vitri').html());
			$('#ViTriDoNuocThaiViTri').val(vitri);
			var id = $(this).children('input[name="id"]').val();
			$('#ViTriDoNuocThaiId').val(id);
			var ngaygiamsat=$.trim($(this).children('.ngaygiamsat').html());
			$('#ViTriDoNuocThaiNgayGiamSat').val(ngaygiamsat);
			var ngaynhap=$.trim($(this).children('.ngaynhap').html());
			$('#ViTriDoNuocThaiNgayNhap').val(ngaynhap);
			var mota = $.trim($(this).children('.mota').text());
            $('#ViTriDoNuocThaiMoTa').html(mota);
			tinyMCE.get('ViTriDoNuocThaiMota').setContent(mota);
		});
	});

	function xoaDanhSachViTriDoNuocThai(list_colMa) {
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
			url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachvitrido') ?>"
		});
		return false;
	}
</script>
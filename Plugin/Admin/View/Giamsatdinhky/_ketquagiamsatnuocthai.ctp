<h2>NHẬP THÔNG TIN - Kết quả giám sát nước thải</h2>
<?php echo $this->Form->create('KetQuaGiamSatDinhKyNuocThai') ?>
<?php echo $this->Form->hidden('id_vi_tri_do', array('value' => isset($vitrido['ViTriDo']['id'])
		?$vitrido['ViTriDo']['id']:'')) ?>
<?php echo $this->Form->hidden('id') ?>
<table class="">
	<tr>
		<th>Giám sát<span class="required">(*)</span> </th>
		<td><?php echo $this->Form->input('vi_tri', array('value' => isset($vitrido['ViTriDo']['vi_tri'])
					?$vitrido['ViTriDo']['vi_tri']:'',
														  'disabled' => 'disabled', 'div' => false,
														  'label' => false)) ?></td>
	</tr>
	<tr>
		<th>Chỉ tiêu<span class="required">(*)</span> </th>
		<td><?php echo $this->Form->input('chi_tieu', array('div' => false, 'label' => false)) ?></td>
	</tr>
	<tr>
		<th>Trước khi xử lý </th>
		<td><?php echo $this->Form->input('truoc_xu_ly', array('div' => false, 'label' => false)) ?></td>
	</tr>
	<tr>
		<th>Sau khi xử lý </th>
		<td><?php echo $this->Form->input('sau_xu_ly', array('div' => false, 'label' => false)) ?></td>
	</tr>
	<tr>
		<th>Nước thải sinh hoạt</th>
		<td><?php echo $this->Form->input('nuoc_sinh_hoat', array('div' => false, 'label' => false)) ?></td>
	</tr>
	<tr>
		<th>Ghi chú </th>
		<td><?php echo $this->Form->input('ghichu', array('div' => false, 'label' => false)) ?></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Đồng ý" class="btn btn-primary">
			<input type="button" onclick="window.close();" value="Kết thúc" class="btn btn-custom-secondary"></td>
	</tr>
</table>
<?php echo $this->Form->end();?>
<table class="table">
	<thead>
	<tr>
		<th>STT</th>
		<th>Chỉ tiêu</th>
		<th>Trước khi xử lý</th>
		<th>Sau khi xử lý</th>
		<th>Nước thải sinh hoạt</th>
		<th>Ghi chú</th>
		<th>Xóa</th>
	</tr>
	</thead>
	<tbody id="list-ketqua">
	<?php if (isset($list_ketqua) && $list_ketqua): ?>
		<?php foreach ($list_ketqua as $k => $kq): ?>
			<tr title="click để cập nhật">
				<input type="hidden" class="id" name="id" value="<?php echo h
				($kq['KetQuaGiamSatDinhKyNuocThai']['id']) ?>">
				<td><?php echo $k + 1 ?></td>
				<td class="chi_tieu"><?php echo h($kq['KetQuaGiamSatDinhKyNuocThai']['chi_tieu']) ?></td>
				<td class="truoc_xu_ly"><?php echo h($kq['KetQuaGiamSatDinhKyNuocThai']['truoc_xu_ly']) ?></td>
				<td class="sau_xu_ly"><?php echo h($kq['KetQuaGiamSatDinhKyNuocThai']['sau_xu_ly']) ?></td>
				<td class="nuoc_sinh_hoat"><?php echo h($kq['KetQuaGiamSatDinhKyNuocThai']['nuoc_sinh_hoat'])
					?></td>
				<td class="ghichu"><?php echo h($kq['KetQuaGiamSatDinhKyNuocThai']['ghichu']) ?></td>
				<td><input type="checkbox" name="delete"></td>
			</tr>
		<?php endforeach; ?>
	<?php endif; ?>
	</tbody>
	<tr>
		<td colspan="6"></td>
		<td><button type="button" class="btn btn-danger" id="xoa-kqgsdk_nuocthai">Xóa</button></td>
	</tr>
</table>
<script type="text/javascript">
	$(function() {
		$('#list-ketqua').tooltip();
		$('#list-ketqua tr').bind('click', function(event) {
			if (event.target.name !== 'delete') {
				var id = parseInt($(this).children('.id').val());
				var chi_tieu = $(this).children('.chi_tieu').html();
				var truoc_xu_ly = $(this).children('.truoc_xu_ly').html();
				var sau_xu_ly = $(this).children('.sau_xu_ly').html();
				var nuoc_sinh_hoat = $(this).children('.nuoc_sinh_hoat').html();
				var ghichu = $(this).children('.ghichu').html();
				$('#KetQuaGiamSatDinhKyNuocThaiId').val(id);
				$('#KetQuaGiamSatDinhKyNuocThaiChiTieu').val(chi_tieu);
				$('#KetQuaGiamSatDinhKyNuocThaiTruocXuLy').val(truoc_xu_ly);
				$('#KetQuaGiamSatDinhKyNuocThaiSauXuLy').val(sau_xu_ly);
				$('#KetQuaGiamSatDinhKyNuocThaiNuocSinhHoat').val(nuoc_sinh_hoat);
				$('#KetQuaGiamSatDinhKyNuocThaiGhichu').val(ghichu);
			}
		});
		$('#xoa-kqgsdk_nuocthai').bind('click', function() {
			var list_colMa = [];
			$('#list-ketqua tr').each(function() {
				var id = $(this).find('input[name="id"]').first();
				var checkbox = $(this).find('input[type="checkbox"]');
				if (checkbox.prop('checked') == true) {
					list_colMa.push(id.val());
				}
			});
			if (list_colMa.length == 0) {
				alert('Xin chọn kết quả đo cần xóa');
				return false;
			}
			if (confirm('Bạn xác nhận muốn xóa những kết quả đo đạc này khỏi danh sách hiện tại')) {
				xoaDanhSachKetquagiamsat(list_colMa);
			} else {
				return false;
			}
		});
	});
	function xoaDanhSachKetquagiamsat(list_colMa) {
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
			url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachketquagiamsatnuocthai') ?>"
		});
		return false;
	}
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>
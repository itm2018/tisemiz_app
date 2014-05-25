<div class="doanhNghieps form">
<?php echo $this->Form->create('DoanhNghiep'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Doanh Nghiep'); ?></legend>
	<?php
		echo $this->Form->input('colTen');
		echo $this->Form->input('colTenTAnh');
		echo $this->Form->input('colDiaChi');
		echo $this->Form->input('colDienThoai');
		echo $this->Form->input('colFax');
		echo $this->Form->input('colEmail');
		echo $this->Form->input('colSoTKhoan');
		echo $this->Form->input('colX');
		echo $this->Form->input('colY');
		echo $this->Form->input('colNamHopDong');
		echo $this->Form->input('colGiayPhepDT');
		echo $this->Form->input('colGiayPhepKD');
		echo $this->Form->input('colLoaiHinhDN');
		echo $this->Form->input('colMaNganh1');
		echo $this->Form->input('colMaNganh2');
		echo $this->Form->input('colMaNganh3');
		echo $this->Form->input('colMaNganh4');
		echo $this->Form->input('colMaNganh5');
		echo $this->Form->input('colMaNganh6');
		echo $this->Form->input('colLinhVucHD');
		echo $this->Form->input('colSanPham');
		echo $this->Form->input('colCongSuat');
		echo $this->Form->input('colQuocGia');
		echo $this->Form->input('colQTrinhSX');
		echo $this->Form->input('colMoTaKT');
		echo $this->Form->input('colMoTaNT');
		echo $this->Form->input('colMoTaRT');
		echo $this->Form->input('colGhiChu');
		echo $this->Form->input('colHinhAnh');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Doanh Nghieps'), array('action' => 'index')); ?></li>
	</ul>
</div>

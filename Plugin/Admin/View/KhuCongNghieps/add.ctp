<div class="khuCongNghieps form">
<?php echo $this->Form->create('KhuCongNghiep'); ?>
	<fieldset>
		<legend><?php echo __('Add Khu Cong Nghiep'); ?></legend>
	<?php
		echo $this->Form->input('colTen');
		echo $this->Form->input('colTenTAnh');
		echo $this->Form->input('colDiaChi');
		echo $this->Form->input('colDThoai');
		echo $this->Form->input('colFax');
		echo $this->Form->input('colEmail');
		echo $this->Form->input('colNamHDong');
		echo $this->Form->input('colDienTich');
		echo $this->Form->input('colSoCTy');
		echo $this->Form->input('colSoCNhan');
		echo $this->Form->input('colMoTa');
		echo $this->Form->input('colHinhAnh');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Khu Cong Nghieps'), array('action' => 'index')); ?></li>
	</ul>
</div>

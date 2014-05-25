<div class="khuCongNghieps view">
<h2><?php echo __('Khu Cong Nghiep'); ?></h2>
	<dl>
		<dt><?php echo __('ColMa'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colMa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColTen'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colTen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColTenTAnh'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colTenTAnh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColDiaChi'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colDiaChi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColDThoai'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colDThoai']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColFax'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colFax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColEmail'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colEmail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColNamHDong'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colNamHDong']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColDienTich'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colDienTich']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColSoCTy'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colSoCTy']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColSoCNhan'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colSoCNhan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColMoTa'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colMoTa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColHinhAnh'); ?></dt>
		<dd>
			<?php echo h($khuCongNghiep['KhuCongNghiep']['colHinhAnh']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Khu Cong Nghiep'), array('action' => 'edit', $khuCongNghiep['KhuCongNghiep']['colMa'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Khu Cong Nghiep'), array('action' => 'delete', $khuCongNghiep['KhuCongNghiep']['colMa']), null, __('Are you sure you want to delete # %s?', $khuCongNghiep['KhuCongNghiep']['colMa'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Khu Cong Nghieps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Khu Cong Nghiep'), array('action' => 'add')); ?> </li>
	</ul>
</div>

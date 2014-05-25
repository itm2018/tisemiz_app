<div class="doanhNghieps view">
<h2><?php echo __('Doanh Nghiep'); ?></h2>
	<dl>
		<dt><?php echo __('ColMa'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colMa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColTen'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colTen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColTenTAnh'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colTenTAnh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColDiaChi'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colDiaChi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColDienThoai'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colDienThoai']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColFax'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colFax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColEmail'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colEmail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColSoTKhoan'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colSoTKhoan']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColX'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colX']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColY'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colY']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColNamHopDong'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colNamHopDong']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColGiayPhepDT'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colGiayPhepDT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColGiayPhepKD'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colGiayPhepKD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColLoaiHinhDN'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colLoaiHinhDN']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColMaNganh1'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColMaNganh2'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColMaNganh3'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColMaNganh4'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColMaNganh5'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColMaNganh6'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh6']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColLinhVucHD'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colLinhVucHD']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColSanPham'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colSanPham']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColCongSuat'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colCongSuat']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColQuocGia'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colQuocGia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColQTrinhSX'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colQTrinhSX']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColMoTaKT'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colMoTaKT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColMoTaNT'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colMoTaNT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColMoTaRT'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colMoTaRT']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColGhiChu'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colGhiChu']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ColHinhAnh'); ?></dt>
		<dd>
			<?php echo h($doanhNghiep['DoanhNghiep']['colHinhAnh']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Doanh Nghiep'), array('action' => 'edit', $doanhNghiep['DoanhNghiep']['colMa'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Doanh Nghiep'), array('action' => 'delete', $doanhNghiep['DoanhNghiep']['colMa']), null, __('Are you sure you want to delete # %s?', $doanhNghiep['DoanhNghiep']['colMa'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Doanh Nghieps'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Doanh Nghiep'), array('action' => 'add')); ?> </li>
	</ul>
</div>

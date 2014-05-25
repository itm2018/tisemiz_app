<div class="doanhNghieps index">
	<h2><?php echo __('Doanh Nghieps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('colMa'); ?></th>
			<th><?php echo $this->Paginator->sort('colTen'); ?></th>
			<th><?php echo $this->Paginator->sort('colTenTAnh'); ?></th>
			<th><?php echo $this->Paginator->sort('colDiaChi'); ?></th>
			<th><?php echo $this->Paginator->sort('colDienThoai'); ?></th>
			<th><?php echo $this->Paginator->sort('colFax'); ?></th>
			<th><?php echo $this->Paginator->sort('colEmail'); ?></th>
			<th><?php echo $this->Paginator->sort('colSoTKhoan'); ?></th>
			<th><?php echo $this->Paginator->sort('colX'); ?></th>
			<th><?php echo $this->Paginator->sort('colY'); ?></th>
			<th><?php echo $this->Paginator->sort('colNamHopDong'); ?></th>
			<th><?php echo $this->Paginator->sort('colGiayPhepDT'); ?></th>
			<th><?php echo $this->Paginator->sort('colGiayPhepKD'); ?></th>
			<th><?php echo $this->Paginator->sort('colLoaiHinhDN'); ?></th>
			<th><?php echo $this->Paginator->sort('colMaNganh1'); ?></th>
			<th><?php echo $this->Paginator->sort('colMaNganh2'); ?></th>
			<th><?php echo $this->Paginator->sort('colMaNganh3'); ?></th>
			<th><?php echo $this->Paginator->sort('colMaNganh4'); ?></th>
			<th><?php echo $this->Paginator->sort('colMaNganh5'); ?></th>
			<th><?php echo $this->Paginator->sort('colMaNganh6'); ?></th>
			<th><?php echo $this->Paginator->sort('colLinhVucHD'); ?></th>
			<th><?php echo $this->Paginator->sort('colSanPham'); ?></th>
			<th><?php echo $this->Paginator->sort('colCongSuat'); ?></th>
			<th><?php echo $this->Paginator->sort('colQuocGia'); ?></th>
			<th><?php echo $this->Paginator->sort('colQTrinhSX'); ?></th>
			<th><?php echo $this->Paginator->sort('colMoTaKT'); ?></th>
			<th><?php echo $this->Paginator->sort('colMoTaNT'); ?></th>
			<th><?php echo $this->Paginator->sort('colMoTaRT'); ?></th>
			<th><?php echo $this->Paginator->sort('colGhiChu'); ?></th>
			<th><?php echo $this->Paginator->sort('colHinhAnh'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($doanhNghieps as $doanhNghiep): ?>
	<tr>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colMa']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colTen']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colTenTAnh']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colDiaChi']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colDienThoai']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colFax']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colEmail']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colSoTKhoan']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colX']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colY']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colNamHopDong']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colGiayPhepDT']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colGiayPhepKD']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colLoaiHinhDN']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh1']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh2']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh3']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh4']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh5']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colMaNganh6']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colLinhVucHD']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colSanPham']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colCongSuat']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colQuocGia']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colQTrinhSX']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colMoTaKT']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colMoTaNT']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colMoTaRT']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colGhiChu']); ?>&nbsp;</td>
		<td><?php echo h($doanhNghiep['DoanhNghiep']['colHinhAnh']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $doanhNghiep['DoanhNghiep']['colMa'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $doanhNghiep['DoanhNghiep']['colMa'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $doanhNghiep['DoanhNghiep']['colMa']), null, __('Are you sure you want to delete # %s?', $doanhNghiep['DoanhNghiep']['colMa'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Doanh Nghiep'), array('action' => 'add')); ?></li>
	</ul>
</div>

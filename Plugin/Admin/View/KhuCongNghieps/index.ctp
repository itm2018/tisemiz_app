<div class="khuCongNghieps index">
	<h2><?php echo __('Khu Cong Nghieps'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('colMa'); ?></th>
			<th><?php echo $this->Paginator->sort('colTen'); ?></th>
			<th><?php echo $this->Paginator->sort('colTenTAnh'); ?></th>
			<th><?php echo $this->Paginator->sort('colDiaChi'); ?></th>
			<th><?php echo $this->Paginator->sort('colDThoai'); ?></th>
			<th><?php echo $this->Paginator->sort('colFax'); ?></th>
			<th><?php echo $this->Paginator->sort('colEmail'); ?></th>
			<th><?php echo $this->Paginator->sort('colNamHDong'); ?></th>
			<th><?php echo $this->Paginator->sort('colDienTich'); ?></th>
			<th><?php echo $this->Paginator->sort('colSoCTy'); ?></th>
			<th><?php echo $this->Paginator->sort('colSoCNhan'); ?></th>
			<th><?php echo $this->Paginator->sort('colMoTa'); ?></th>
			<th><?php echo $this->Paginator->sort('colHinhAnh'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($khuCongNghieps as $khuCongNghiep): ?>
	<tr>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colMa']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colTen']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colTenTAnh']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colDiaChi']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colDThoai']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colFax']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colEmail']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colNamHDong']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colDienTich']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colSoCTy']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colSoCNhan']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colMoTa']); ?>&nbsp;</td>
		<td><?php echo h($khuCongNghiep['KhuCongNghiep']['colHinhAnh']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $khuCongNghiep['KhuCongNghiep']['colMa'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $khuCongNghiep['KhuCongNghiep']['colMa'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $khuCongNghiep['KhuCongNghiep']['colMa']), null, __('Are you sure you want to delete # %s?', $khuCongNghiep['KhuCongNghiep']['colMa'])); ?>
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
		<li><?php echo $this->Html->link(__('New Khu Cong Nghiep'), array('action' => 'add')); ?></li>
	</ul>
</div>

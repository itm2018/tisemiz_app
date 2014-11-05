<h1>Cập nhật thông tin nguồn thải</h1>
<table class="grid">
	<thead>
		<tr>
			<th>Mã nguồn thải</th>
			<th>Tên nguồn thải</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php echo $this->Form->create('NguonThai', array('method' => 'post')) ?>
			<td>
				<?php echo $this->Form->input('ma_nguonthai', array('div' => false, 'label' => false, 'id' => 'ma_chatthai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
			</td>
			<td>
				<?php echo $this->Form->input('ten_nguonthai', array('div' => false, 'label' => false, 'id' => 'ten_chatthai', 'style' => 'width: 500px;', 'required' => 'required')) ?>
				<?php echo $this->Form->hidden('id') ?>
			</td>
			<td>
				<span>
					<?php echo $this->Form->submit('Cập nhật nguồn thải', array('div' => false, 'label' => false, 'id' => 'btn-update-nguonthai', 'style' => 'width: 130px;')) ?>
				</span>
			</td>
		</tr>
		<tr>
			<td colspan="3"><?php echo $this->Form->button('Đóng', array('type' => 'button', 'div' => false, 'label' => false, 'id' => 'btn-close', 'style' => 'width: 110px;', 'onclick' => 'javascript: window.opener.location.reload(); window.close();')) ?></td>
		</tr>
		<?php echo $this->Form->end(); ?>
	</tbody>
</table>
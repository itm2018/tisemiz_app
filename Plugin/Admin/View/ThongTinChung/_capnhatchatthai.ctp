<h1>Cập nhật thông tin chất thải nguy hại</h1>
<table class="grid">
	<thead>
		<tr>
			<th></th>
			<th>Mã CTNH</th>
			<th>Tên chất thải <span style="margin-left: 320px;">Dạng tồn tại</span></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<?php echo $this->Form->create('ChatThai', array('method' => 'post')) ?>
			<td></td>
			<td>
				<?php echo $this->Form->input('ma_chatthai', array('div' => false, 'label' => false, 'id' => 'ma_chatthai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
			</td>
			<td>
				<?php echo $this->Form->input('ten_chatthai', array('div' => false, 'label' => false, 'id' => 'ten_chatthai', 'style' => 'width: 400px;', 'required' => 'required')) ?>
				<?php echo $this->Form->input('tt_tontai', array('div' => false, 'label' => false, 'id' => 'tt_tontai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
				<?php echo $this->Form->hidden('id') ?>
				<span>
					<?php echo $this->Form->submit('Cập nhật chất thải', array('div' => false, 'label' => false, 'id' => 'btn-them-chatthai', 'style' => 'width: 110px;')) ?>
				</span>
			</td>
		</tr>
		<tr>
			<td colspan="3"><?php echo $this->Form->button('Đóng', array('div' => false, 'label' => false, 'id' => 'btn-close', 'style' => 'width: 110px;', 'onclick' => 'javascript: window.opener.location.reload(); window.close();')) ?></td>
		</tr>
		<?php echo $this->Form->end(); ?>
	</tbody>
</table>
<?php echo $this->Form->create(false, array('type' => 'get','url'=>Router::url('/admin/thongke/thongtincoban'))) ?>
<table>
	<tr>
		<td>
			<label for="nam_nhap_lieu">Năm nhập liệu:</label>
		</td>
		<td>
			<?php echo $this->Form->input('nam_nhap_lieu',array('div'=>false,'label'=>false, 'class'=>'form-control',
																'options'=>Common::getListNamNhapLieu()))?>
		</td>
		<td>
			<?php echo $this->Form->submit('Chọn điều kiện',array('class'=>'btn'));?>
		</td>
	</tr>
</table>
<?php echo $this->Form->end(); ?>
<?php
if(isset($data)&&$data){
	echo $this->element('Admin.Thongke/_ketquatimkiem',array($data,$nam_nhap_lieu));
}
?>
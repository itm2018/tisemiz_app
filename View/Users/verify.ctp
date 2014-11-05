<style>
	table{
		border-collapse: collapse;
	}
	th,td{
		border-spacing: 2px;
		border-collapse: separate;
		border: 1px solid #ccc;

	}
</style>
<?php if(isset($allowed_reset_pass)&&$allowed_reset_pass):?>
	<?php echo $this->Form->create('User',array('type'=>'post'))?>
	<div style="width: 500px; margin: 0 auto;">
		<h3>Đổi mật khẩu</h3>
		<table>
			<tr>
				<th>Mật khẩu mới:</th><td><?php echo $this->Form->input('password_update',array('label'=>false,
																								'type'=>'password'
																						  ))?></td>
			</tr>
			<tr>
				<th>Xác nhận mật khẩu mới:</th><td><?php echo $this->Form->input('confirm_password_update',
																				 array('label'=>false,
																										 'type'=>'password'
																								   ))?></td>
			</tr>
			<tr style="text-align: right;">
				<td colspan="2">
					<input type="submit" name="submit" value="Đổi mật khẩu" style="text-align: center">
				</td>
			</tr>
		</table>
	</div>
<?php endif;?>
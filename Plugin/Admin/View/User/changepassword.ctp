<style>
	.resetpass-table{
		border-collapse: separate;
		padding: 2px;
		border-spacing: 2px;
		width: 500px;
		margin: 0 auto;
	}
	table,th,td{
		/*border-collapse: collapse;*/

		/*padding: 2px?;*/
		border: 1px solid #000;
	}
	th{
		background: #c0a16b;
		color: #003d4c;
		padding-left: 4px;
	}
	td input{
		width: 100%;
	}
	.submit{
		width: 200px;
		margin: 0 auto;
	}
</style>
<h1 style="text-align: center">Màn hình thay đổi mật khẩu</h1>
<?php echo $this->Form->create('User',array('type'=>'post'));?>
<table class="resetpass-table">
	<tr>
		<th>Mật khẩu hiện tại:</th>
		<td><?php echo $this->Form->input('password',array('type'=>'password','label'=>false,'maxlength'=>100))?></td>
	</tr>
	<tr>
		<th>Mật khẩu mới:</th>
		<td><?php echo $this->Form->input('password_update',array('type'=>'password','label'=>false,
																  'maxlength'=>100))?></td>
	</tr>
	<tr>
		<th>Xác nhận mật khẩu:</th>
		<td><?php echo $this->Form->input('confirm_password_update',array('type'=>'password','label'=>false,
																		  'maxlength'=>100))?></td>
	</tr>
	<tr>
		<td colspan="2"><?php echo $this->Form->submit('Cập nhật',array('class'=>'submit'))?></td>
	</tr>
</table>
<?php echo $this->Form->end();?>
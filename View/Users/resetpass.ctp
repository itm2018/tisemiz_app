
<?php echo $this->Form->create(false,array('type'=>'post'))?>
<div style="width: 500px;margin: 0 auto;">
	<?php if(isset($error))echo '<p class="error">'.$error.'</p>';?>
	<p>Nhập email khôi phục mật khẩu:<input type="email" class="input" name="reset-password-email"
											id="reset-password-email"
		value="" style="width: 200px;" required="required">&nbsp;&nbsp;<input type="submit" value="Thực hiện"
																	   name="submit"></p>
</div>
<?php echo $this->Form->end();?>
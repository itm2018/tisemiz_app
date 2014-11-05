<?php echo $this->start('title'); ?>
<?php echo __('Login'); ?>
<?php echo $this->end('title'); ?>
<?php echo $this->start('breadcrumb'); ?>
<ul class="breadcrumb">
	<li>
		<a href="/"><?php echo __('Home page'); ?></a> <span class="divider">/</span>
	</li>
	<li class="active">
		<?php echo __('Login'); ?>
	</li>
</ul>
<?php echo $this->end('breadcrumb'); ?>
<div class="container">
	<div class="col-md-6">
		<div class="widget">
			<div class="widget-header">
				<h3><i class="fa fa-edit"></i> <?php echo __('Login Information'); ?></h3>
			</div>
			<div class="widget-content">
				<div class="row">
					<?php echo $this->Form->create('User', array('method' => 'post', 'id' => 'user_login_form')); ?>
					<?php
					echo $this->Form->input('username', array('div'         => array('class' => 'form-group'),
															  'type'        => 'text', 'class' => 'form-control',
															  'placeholder' => __('email/username')));
					?>
					<br>
					<?php
					echo $this->Form->input('password', array('div' => array('class' => 'form-group'), 'type' => 'password', 'class' => 'form-control'));
					?>
					<br>

					<div class="form-group">
						<?php echo $this->Form->submit(__('Login'), array('div' => false, 'class' => 'btn btn-primary')); ?>
						&nbsp;&nbsp;
						<?php echo $this->Form->reset('Reset', array('div' => false, 'class' => 'btn btn-info', 'value' => __('Reset'))); ?>
						<br>

						<p><?php echo __('Forgot your password?'); ?>
							&nbsp;&nbsp;<?php echo $this->Html->link(__('Reset Password'), '/users/resetpass'); ?></p>

						<p><?php echo __('Don\'t have an account?'); ?>
							&nbsp;&nbsp;<?php echo $this->Html->link(__('Register'), '/users/register'); ?></p>
					</div>
					<?php echo $this->Form->end(); ?>
				</div>
			</div>
		</div>
	</div>
</div>
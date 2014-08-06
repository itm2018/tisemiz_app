<?php echo $this->start('title');?>
<?php echo __('Register');?>
<?php echo $this->end('title');?>
<?php echo $this->start('breadcrumb');?>
<ul class="breadcrumb">
    <li>
        <a href="/"><?php echo __('Home page'); ?></a> <span class="divider">/</span>
    </li>
    <li class="active">
        <?php echo __('Register');?>
    </li>
</ul>
<?php echo $this->end('breadcrumb');?>
<div class="container">
    <div class="col-md-6">
        <div class="widget">
            <div class="widget-header">
                <h3><i class="fa fa-edit"></i> <?php echo __('Login Information'); ?></h3>
            </div>
            <div class="widget-content">
                <div class="row">
                    <!-- <div class="col-md-6">-->
                    <!-- <form action="dologin" method="post" id="user_login_form">-->
                    <?php echo $this->Form->create('User', array('method' => 'post', 'id' => 'user_register_form')); ?>
                    <?php
                    echo $this->Form->input('username', array('div' => array('class' => 'form-group'), 'type' => 'text', 'class' => 'form-control'));
                    ?>
                    <br>
                    <?php
                    echo $this->Form->input('email', array('div' => array('class' => 'form-group'), 'type' => 'email', 'class' => 'form-control'));
                    ?>
                    <br>
                    <?php
                    echo $this->Form->input('password', array('div' => array('class' => 'form-group'), 'type' => 'password', 'class' => 'form-control'));
                    ?>
                    <br>
                    <?php
                    echo $this->Form->input('confirm_password', array('div' => array('class' => 'form-group'), 'label' => __('Confirm Password'), 'type' => 'password', 'class' => 'form-control'));
                    ?>
                    <br>

                    <div class="form-group">
                        <!--<button type="submit" class="btn btn-primary">Login</button>-->
                        <?php echo $this->Form->submit(__('Register'), array('div' => false, 'class' => 'btn btn-primary')); ?>
                        &nbsp;&nbsp;
                        <!--<button type="reset" class="btn btn-info">Reset</button>-->
                        <?php echo $this->Form->reset('Reset', array('div' => false, 'class' => 'btn btn-info', 'value' => __('Reset'))); ?>
                    </div>
                    <!--</form>-->
                    <?php echo $this->Form->end(); ?>
                    <!--</div>-->
                </div>
            </div>
        </div>
    </div>
</div>
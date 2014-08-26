<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<div style="float: left; width: 640px; margin-left: 5px; margin-top: 5px;">
    <div id="wowslider-container1">
        <div class="ws_images"><ul>
                <li><img src="data1/images/2.jpg" alt="2" title="2" id="wows1_0"/></li>
                <li><img src="data1/images/3.jpg" alt="3" title="3" id="wows1_1"/></li>
                <li><img src="data1/images/4.jpg" alt="4" title="4" id="wows1_2"/></li>
                <li><img src="data1/images/5.jpg" alt="5" title="5" id="wows1_3"/></li>
                <li><img src="data1/images/6.jpg" alt="6" title="6" id="wows1_4"/></li>
                <li><img src="data1/images/7.jpg" alt="7" title="7" id="wows1_5"/></li>
                <li><img src="data1/images/1.jpg" alt="1" title="1" id="wows1_6"/></li>
            </ul></div>
        <div class="ws_bullets"><div>
                <a href="#" title="2"><img src="data1/tooltips/2.jpg" alt="2"/>1</a>
                <a href="#" title="3"><img src="data1/tooltips/3.jpg" alt="3"/>2</a>
                <a href="#" title="4"><img src="data1/tooltips/4.jpg" alt="4"/>3</a>
                <a href="#" title="5"><img src="data1/tooltips/5.jpg" alt="5"/>4</a>
                <a href="#" title="6"><img src="data1/tooltips/6.jpg" alt="6"/>5</a>
                <a href="#" title="7"><img src="data1/tooltips/7.jpg" alt="7"/>6</a>
                <a href="#" title="1"><img src="data1/tooltips/1.jpg" alt="1"/>7</a>
            </div></div>
        <div class="ws_shadow"></div>
    </div>	
</div>
<div style="float: right; margin-right: 88px;">
    <div class="col-md-12">
        <div class="widget">
            <div class="widget-header">
                <h3><i class="fa fa-edit"></i> <?php echo __('Login Information'); ?></h3>
            </div>
            <div class="widget-content">
                <div class="row">
                    <?php echo $this->Form->create('User', array('method' => 'post', 'url' => Router::url('/users/login'), 'id' => 'user_login_form')); ?>
                    <?php
                    echo $this->Form->input('username', array('div' => array('class' => 'form-group'),
                        'type' => 'text', 'class' => 'form-control', 'autocomplete' => 'off',
                        'placeholder' => __('email/username')));
                    ?>
                    <br>
                    <?php
                    echo $this->Form->input('password', array('div' => array('class' => 'form-group'), 'type' => 'password', 'class' => 'form-control', 'autocomplete' => 'off'));
                    ?>
                    <br>

                    <div class="form-group">
                        <?php echo $this->Form->submit(__('Login'), array('div' => false, 'class' => 'btn btn-success', 'style' => 'border: none;')); ?>
                        &nbsp;&nbsp;
                        <?php echo $this->Form->reset('Reset', array('div' => false, 'class' => 'btn btn-info', 'style' => 'border: none;', 'value' => __('Reset'))); ?>
                        <br>

                        <p><?php echo __('Forgot your password?'); ?>
                            &nbsp;&nbsp;<?php echo $this->Html->link(__('Reset Password'), '/users/resetpass', array('style' => 'color: green;')); ?></p>

                        <p><?php echo __('Don\'t have an account?'); ?>
                            &nbsp;&nbsp;<?php echo $this->Html->link(__('Register'), '/users/register', array('style' => 'color: green;')); ?></p>
                    </div>
                    <?php echo $this->Form->end(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<script type="text/javascript">
    $(function() {
        $('.bread').hide();
        $('a[href="http://wowslider.com"]').each(function() {
            $(this).html('');
        });
    });
</script>

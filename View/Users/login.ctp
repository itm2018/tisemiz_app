<div class="row">
    <div class="col-md-6">
        <div class="widget">
            <div class="widget-header">
                <h3><i class="fa fa-edit"></i> Login Information</h3>
            </div>
            <div class="widget-content">
                <div class="row">
                    <div class="col-md-6">
                       <!-- <form action="dologin" method="post" id="user_login_form">-->
                        <?php echo $this->Form->create('User',array('method'=>'post','id'=>'user_login_form'));?>
                            <!--<div class="input-group">
                                <span class="input-group-addon">Username</span>
                                <input type="text" class="form-control" placeholder="username/email">
                            </div>-->
                            <?php
                                echo $this->Form->input('username',array('div'=>array('class'=>'input-group'),'type'=>'text','class'=>'form-control','placeholder'=>__('please enter your email')));
                            ?>
                            <br>
                           <!--<div class="input-group">
                                <span class="input-group-addon">Password</span>
                                <input type="password" class="form-control" placeholder="">
                            </div>-->
                            <?php
                                echo $this->Form->input('password',array('div'=>array('class'=>'input-group'),'type'=>'password','class'=>'form-control'));
                            ?>
                            <br>

                            <div class="input-group">
                                <!--<button type="submit" class="btn btn-primary">Login</button>-->
                                <?php echo $this->Form->submit('Login',array('div'=>false,'class'=>'btn btn-primary'));?>
                                &nbsp;&nbsp;
                                <!--<button type="reset" class="btn btn-info">Reset</button>-->
                                <?php echo $this->Form->reset('Reset',array('div'=>false,'class'=>'btn btn-info'));?>
                            </div>
                        <!--</form>-->
                        <?php echo $this->Form->end();?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
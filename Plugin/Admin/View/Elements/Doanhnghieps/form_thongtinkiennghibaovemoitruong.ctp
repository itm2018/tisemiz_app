<p>
<h3>V. CÁC KIẾN NGHỊ VỚI CƠ QUAN QUẢN LÝ NHÀ NƯỚC</h3>
</p>
<?php echo $this->Form->create('DoanhNghiep', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form','id'=>'FormThongTinKienNghiBvmt')); ?>
<?php echo $this->Form->hidden('colMa', array('id' => 'inputcolMa')) ?>
<div class="form-group">
    <label for="inputKiennghi" class="col-sm-2 control-label">Thông tin kiến nghị</label>
    <?php echo $this->Form->input('thongtinkiennghibvmt', array('div' => array('class' => 'col-sm-10'), 'label' => false, 'id' => 'inputKiennghi', 'type' => 'textarea')) ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->Form->submit(__('Lưu thông tin kiến nghị'), array('class' => 'btn btn-primary', 'div' => false)); ?>
        <?php echo $this->Form->button(__('Làm lại'), array('type' => 'reset', 'class' => 'btn btn-info')); ?>
        <?php if(isset($done) && $done):?>
        <?php echo $this->Form->button(__('Hoàn tất'),array('class'=>'btn btn-success','type'=>'button','id'=>'btn-hoantat'))?>
        <script type="text/javascript">
        $(function(){
            $('#btn-hoantat').bind('click',function(){
               if(confirm('Bạn xác nhận hoàn thành việc cập nhật thông tin doanh nghiệp?')){
                   $('#FormThongTinKienNghiBvmt').attr('action','<?php echo Router::url('/admin/doanhnghiep/themmoi/step6');?>').submit();
                   return true;
               } 
               return false;
            });
        });
        </script>
        <?php endif;?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<p><h3>IV. THÔNG TIN VỀ HOẠT ĐỘNG TUÂN THỦ BẢO VỆ MÔI TRƯỜNG</h3></p>
<?php echo $this->Form->create('DoanhNghiepThongTinTuanThuBvmt', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')); ?>
<table class="table">
    <thead>
        <tr>
            <th>
                Thông tin
            </th>
            <th>
                Đã có
            </th>
        </tr>
    </thead>
    <tbody>
        <?php if (isset($list_tt_bvmt) && $list_tt_bvmt): ?>
            <?php foreach ($list_tt_bvmt as $tt_bvmt): ?>
                <tr>
                    <td>
                        <?php echo $this->Form->hidden('colMaTailieu', array('name' => 'data[DoanhNghiepThongTinTuanThuBvmt][colMaTailieu][]', 'value' => $tt_bvmt['ThongTinTuanThuBvmt']['colMa'])); ?>
                        <?php echo h($tt_bvmt['ThongTinTuanThuBvmt']['colTentailieu']) ?>
                    </td>
                    <td>
                        <?php echo $this->Form->hidden('colMaDN', array('name' => 'data[DoanhNghiepThongTinTuanThuBvmt][colMaDN][]', 'value' => (isset($colMaDN) && $colMaDN) ? $colMaDN : '')); ?>
                        <?php
                        echo $this->Form->input('daco', array('div' => false,'hiddenField'=>false, 'label' => false, 'type' => 'checkbox', 'name' => 'data[DoanhNghiepThongTinTuanThuBvmt][daco][]','value'=>h($tt_bvmt['ThongTinTuanThuBvmt']['colMa']),'checked'=>  in_array($tt_bvmt['ThongTinTuanThuBvmt']['colMa'], $list_checked)?'checked':''))
                        ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <!--<button type="submit" class="btn btn-primary">Lưu thông tin tuân thủ bảo vệ môi trường</button>-->
        <!--<button type="reset" class="btn btn-info">Quay về</button>-->
        <?php
        echo $this->Form->submit(__('Lưu thông tin tuân thủ bảo vệ môi trường'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));
        ?>
        <?php
//        echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
//            'div' => false, 'label' => false, 'id' => 'btn-reset-chatthairancongnghiep'));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
    
</script>
<style>
    .input{
        max-width: 400px;
    }
</style>
<?php echo $this->Form->create('Vanbanphapquy', array('type' => 'file')) ?>
<div style="width: 900px; margin: 0 auto; padding: 2px;">
    <table>
        <thead>
            <tr>
                <th colspan="4"><h2>Thông tin văn bản</h2></th>
        </tr>
        </thead>
        
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td style="text-align: right;">
                    <a href="<?php echo Router::url('/admin/thongtinchung/danhsachvanbanphapquy');?>"><button type="button" class="btn btn-info">Xem danh sách</button></a>
                </td>
            </tr>
            <tr style="height: 30px;">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <?php echo $this->Form->hidden('id') ?>
                <td>Ký hiệu văn bản <span class="required">*</span></td>
                <td><?php echo $this->Form->input('kyhieu', array('label' => false)) ?></td>
                <td>Tên văn bản <span class="required">*</span></td>
                <td><?php echo $this->Form->input('tenvanban', array('label' => false)) ?></td>
            </tr>
            <tr>
                <td>Ngày ký</td>
                <td><?php echo $this->Form->input('ngayky', array('label' => false, 'id' => 'datengayky', 'type' => 'text')) ?></td>
                <td>Ngày hiệu lực</td>
                <td><?php echo $this->Form->input('ngayhieuluc', array('label' => false, 'id' => 'datengayhieuluc', 'type' => 'text')) ?></td>
            </tr>
            <tr>
                <td>Ngày ban hành <span class="required">*</span></td>
                <td><?php echo $this->Form->input('ngaybanhanh', array('label' => false, 'id' => 'datengaybanhanh', 'type' => 'text')) ?></td>
                <td>Ngày hết hiệu lực</td>
                <td><?php echo $this->Form->input('ngayhethieuluc', array('label' => false, 'id' => 'datengayhethieuluc', 'type' => 'text')) ?></td>
            </tr>
            <tr>
                <td>Người ký</td>
                <td><?php echo $this->Form->input('nguoiky', array('label' => false)) ?></td>
                <td>Cơ quan ban hành</td>
                <td><?php echo $this->Form->input('coquanbanhanh', array('label' => false)) ?></td>
            </tr>
            <tr>
                <td>Loại văn bản <span class="required">*</span></td>
                <td><?php echo $this->Form->input('id_loai', array('label' => false, 'options' => Common::getListLoaivanban())) ?></td>
                <td>Lĩnh vực văn bản <span class="required">*</span></td>
                <td><?php echo $this->Form->input('id_linhvuc', array('label' => false, 'options' => Common::getListLinhvucvanban())) ?></td>
            </tr>
            <tr>
                <td>Nguồn </td>
                <td><?php echo $this->Form->input('nguon', array('label' => false, 'type' => 'text', 'multiple' => 'multiple', 'style' => 'width: 700px;')) ?></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Mô tả </td>
                <td><?php echo $this->Form->input('mota', array('label' => false, 'type' => 'text', 'multiple' => 'multiple', 'style' => 'width: 700px;')) ?></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>File văn bản <span class="required">*</span></td>
                <td><?php echo $this->Form->input('tenfile', array('label' => false, 'type' => 'file', 'required' => '')) ?></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Nội dung</td>
                <td><?php echo $this->Form->input('noidung', array('label' => false, 'type' => 'textarea')) ?></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Ghi chú</td>
                <td><?php echo $this->Form->input('ghichu', array('label' => false, 'type' => 'text', 'style' => 'width: 700px;')) ?></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Từ khóa</td>
                <td><?php echo $this->Form->input('tukhoa', array('label' => false, 'type' => 'text', 'style' => 'width: 700px;')) ?></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Từ khóa liên quan</td>
                <td><?php echo $this->Form->input('tukhoalienquan', array('label' => false, 'type' => 'text', 'style' => 'width: 700px;')) ?></td>
                <td colspan="2"></td>
            </tr>
            <tr style="text-align: center;">
                <td colspan="4"><?php echo $this->Form->submit('Lưu văn bản', array('label' => false, 'class' => 'btn btn-primary')) ?></td>
            </tr>
        </tbody>
    </table>
</div>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
    $(function() {
        $('#datengayky').datepicker();
        $('#datengayhieuluc').datepicker();
        $('#datengaybanhanh').datepicker();
        $('#datengayhethieuluc').datepicker();
    });
</script>
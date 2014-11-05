<h3>Cập nhật thông tin hồ sơ kèm theo</h3>
<table class="grid">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên giấy tờ</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <?php echo $this->Form->create('Hosokemtheo', array('method' => 'post')) ?>
            <td>
                <?php echo $this->Form->input('stt', array('div' => false, 'label' => false, 'id' => 'ma_chatthai', 'style' => 'width: 50px;', 'required' => 'required')) ?>
            </td>
            <td>
                <?php echo $this->Form->input('tenhoso', array('div' => false, 'label' => false, 'id' => 'tt_tontai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
                <?php echo $this->Form->hidden('id') ?>
               
            </td>
            <td>
                 <span>
                    <?php echo $this->Form->submit('Cập nhật hồ sơ', array('div' => false, 'label' => false, 'id' => 'btn-them-chatthai', 'style' => 'width: 110px;')) ?>
                </span>
            </td>
        </tr>
        <tr>
            <td colspan="6"><?php echo $this->Form->button('Đóng', array('div' => false, 'label' => false, 'id' => 'btn-close', 'style' => 'width: 110px;', 'onclick' => 'javascript: window.opener.location.reload(); window.close();')) ?></td>
        </tr>
        <?php echo $this->Form->end(); ?>
    </tbody>
</table>
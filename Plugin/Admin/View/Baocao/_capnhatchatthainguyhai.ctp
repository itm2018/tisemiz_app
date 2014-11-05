<h1>Cập nhật thông tin chất thải nguy hại doanh nghiệp</h1>
<table class="grid">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên chất thải</th>
            <th>Trạng thái tồn tại</th>
            <th>Số lượng(Kg/năm)</th>
            <th>Mã CTNH</th>
            <th></th>

        </tr>
    </thead>
    <tbody>
        <tr>
            <?php echo $this->Form->create('ChatThaiNguyHai', array('method' => 'post')) ?>
            <td>
                <?php echo $this->Form->input('stt', array('div' => false, 'label' => false, 'id' => 'ma_chatthai', 'style' => 'width: 50px;', 'required' => 'required')) ?>
            </td>
            <td>
                <?php echo $this->Form->input('colDangCThai', array('div' => false, 'label' => false, 'id' => 'colDangCThai', 'style' => 'width: 300px;', 'required' => 'required')) ?>
            </td>
            <td>
                <?php echo $this->Form->input('tt_tontai', array('div' => false, 'label' => false, 'id' => 'tt_tontai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
                <?php echo $this->Form->hidden('colMa') ?>
               
            </td>
            <td>				
                <?php echo $this->Form->input('colTongKL', array('div' => false, 'label' => false, 'id' => 'ten_chatthai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
            </td>
            <td>
                <?php echo $this->Form->input('ma_chatthai', array('div' => false, 'label' => false, 'id' => 'ten_chatthai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
            </td>
            <td>
                 <span>
                    <?php echo $this->Form->submit('Cập nhật chất thải', array('div' => false, 'label' => false, 'id' => 'btn-them-chatthai', 'style' => 'width: 110px;')) ?>
                </span>
            </td>
        </tr>
        <tr>
            <td colspan="6"><?php echo $this->Form->button('Đóng', array('div' => false, 'label' => false, 'id' => 'btn-close', 'style' => 'width: 110px;', 'onclick' => 'javascript: window.opener.location.reload(); window.close();')) ?></td>
        </tr>
        <?php echo $this->Form->end(); ?>
    </tbody>
</table>
<?php echo $this->Form->create('ChatThaiNguyHai', array('method' => 'post', 'id' => 'formChatThaiNguyHaiCoSo')) ?>
<fieldset>  
    <table cellspacing="0" cellpadding="0" width="100%" border="0" class="grid">
        <thead>
            <tr>
                <th width="40px">
                    Thứ tự
                </th>
                <th width="346px">
                    Tên chất thải
                </th>
                <th width="70px">
                    Trạng thái tồn tại
                </th>
                <th width="60px">
                    Số lượng(Kg/năm)
                </th>
                <th width="60px">
                    Mã CTNH
                </th>
                <th colspan="2">
                    Chức năng
                </th>
            </tr>
        </thead>

        <tbody>
            <?php if (isset($chatthais) && $chatthais): ?>
                <?php $start = isset($start_stt) ? $start_stt : 1; ?>
                <?php foreach ($chatthais as $key => $chatthai): ?>
                    <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
                        <td align="center">
                            <?php echo $this->Form->input('stt', array('value' => isset($list_chatthainguyhai_updated) ? $list_chatthainguyhai_updated[$key]['ChatThaiNguyHai']['stt'] : $start, 'name' => 'data[ChatThaiNguyHai][stt][]', 'id' => 'rptDataCTNH_ThuTu', 'style' => 'width: 98%;', 'div' => false, 'label' => false)) ?>
                            <?php echo $this->Form->hidden('colMa', array('value' => isset($chatthai['ChatThai']['colMa']) ? $chatthai['ChatThai']['colMa'] : '', 'name' => 'data[ChatThaiNguyHai][colMa][]', 'id' => 'rptDataCTNH_colMa')) ?>
                            <!--<input name="rptDataCTNH$ctl01$ThuTu" type="text" value="10" id="rptDataCTNH_ThuTu_0" style="width:98%;">-->
                            <!--<input type="hidden" name="rptDataCTNH$ctl01$ID" id="rptDataCTNH_ID_0" value="785968">-->
                        </td>
                        <td align="left">
                            <!--Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua-->
                            <?php echo $chatthai['ChatThai']['ten_chatthai'] ?>
                        </td>
                        <td align="center">
                            <?php echo $this->Form->input('tt_tontai', array('value' => isset($list_chatthainguyhai_updated) ? $list_chatthainguyhai_updated[$key]['ChatThaiNguyHai']['tt_tontai'] : 'Rắn/lỏng/bùn', 'name' => 'data[ChatThaiNguyHai][tt_tontai][]', 'id' => 'rptDataCTNH_TrangThaiTonTai', 'style' => 'width: 98%;', 'div' => false, 'label' => false)) ?>
                            <!--<input name="rptDataCTNH$ctl01$TrangThaiTonTai" type="text" value="Rắn/bùn" id="rptDataCTNH_TrangThaiTonTai_0" style="width:98%;">-->
                        </td>
                        <td align="center">
                            <?php echo $this->Form->input('colTongKL', array('value' => isset($list_chatthainguyhai_updated) ? $list_chatthainguyhai_updated[$key]['ChatThaiNguyHai']['colTongKL'] : '', 'name' => 'data[ChatThaiNguyHai][colTongKL][]', 'id' => 'rptDataCTNH_Soluong', 'style' => 'width: 98%;', 'div' => false, 'label' => false)) ?>
                            <!--<input name="rptDataCTNH$ctl01$Soluong" type="text" value="100" id="rptDataCTNH_Soluong_0" style="width:98%;">-->
                        </td>
                        <td align="center">
                            <!--010101-->
                            <?php echo $chatthai['ChatThai']['ma_chatthai'] ?>
                        </td>
                    </tr>
                    <?php ++$start; ?>
                <?php endforeach; ?>
            <?php endif; ?>
<!--            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
<td align="center">
    <input name="rptDataCTNH$ctl02$ThuTu" type="text" value="10" id="rptDataCTNH_ThuTu_1" style="width:98%;">
    <input type="hidden" name="rptDataCTNH$ctl02$ID" id="rptDataCTNH_ID_1" value="785969">
</td>
<td align="left">
    Các loại cặn thải khác có chứa các thành phần nguy hại
</td>
<td align="center">
    <input name="rptDataCTNH$ctl02$TrangThaiTonTai" type="text" value="Rắn/lỏng/bùn" id="rptDataCTNH_TrangThaiTonTai_1" style="width:98%;">
</td>
<td align="center">
    <input name="rptDataCTNH$ctl02$Soluong" type="text" value="100" id="rptDataCTNH_Soluong_1" style="width:98%;">
</td>
<td align="center">
    010102
</td>
</tr>

<tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
<td align="center">
    <input name="rptDataCTNH$ctl03$ThuTu" type="text" value="11" id="rptDataCTNH_ThuTu_2" style="width:98%;">
    <input type="hidden" name="rptDataCTNH$ctl03$ID" id="rptDataCTNH_ID_2" value="785970">
</td>
<td align="left">
    Chất thải có chứa các thành phần nguy hại từ quá trình chế biến quặng sắt
</td>
<td align="center">
    <input name="rptDataCTNH$ctl03$TrangThaiTonTai" type="text" value="Rắn/lỏng/bùn" id="rptDataCTNH_TrangThaiTonTai_2" style="width:98%;">
</td>
<td align="center">
    <input name="rptDataCTNH$ctl03$Soluong" type="text" value="100" id="rptDataCTNH_Soluong_2" style="width:98%;">
</td>
<td align="center">
    010103
</td>
</tr>-->

        </tbody></table>

</fieldset>
<input type="submit" name="btnSave" value="Cập nhật" id="btnSave" class="button">
<input type="button" id="btnCapNhat" name="btnCapNhat" onclick="window.opener.location.reload();
        window.close();" value="Kết thúc lựa chọn mã CTNH">
<?php echo $this->Form->end(); ?>
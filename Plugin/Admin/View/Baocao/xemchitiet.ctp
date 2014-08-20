<style>
    .error-message{
        display: block;
        padding: 9.5px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.428571429;
        color: #F31414;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #f5f5f5;
        border: 1px solid #cccccc;
        border-radius: 4px;   
    }
    .download-link{
        color: #0a0;
        font-size: 11pt;
        font-weight: bold;
    }
</style>
<?php echo $this->Form->create('Baocaogsmt', array('method' => 'post', 'url' => $this->Html->url())); ?>
<table id="table1" cellspacing="0" cellpadding="0" width="100%" bgcolor="white" border="0">
    <tbody>
        <tr>
            <td valign="top" align="left" width="100%">
                <table id="Table13" cellspacing="0" cellpadding="0" width="100%" border="0">
                    <tbody>
                        <tr>
                            <td>
                                <table id="Table9" cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <img id="Image2" src="/img/hea_im_title04.gif">
                                            </td>
                                            <td width="100%">
                                                <span id="Label19" style="font-family:Times New Roman;font-size:11pt;font-weight:bold;">BÁO CÁO GIÁM SÁT MÔI TRƯỜNG</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding-right: 15px; padding-left: 15px; padding-bottom: 15px">
                                <table id="Table7" cellspacing="0" cellpadding="0" style="width: 750px">
                                    <tbody>
                                        <tr>
                                            <td>
                                                Báo cáo từ ngày:
                                            </td>
                                            <td>
                                                <?php echo $this->Form->input('txttungay', array('div' => 'fase', 'style' => 'border: none;', 'label' => false, 'readonly' => 'readonly', 'type' => 'text', 'id' => 'txttungay', 'class' => 'textbox', 'autocomplete' => 'off', 'value' => date('d/m/Y', strtotime($data['Baocaogsmt']['tungay'])))); ?>
                                            </td>
                                            <td>
                                                Đến ngày:
                                            </td>
                                            <td>
                                                <?php echo $this->Form->input('txtdenngay', array('div' => 'fase', 'style' => 'border: none;', 'label' => false, 'readonly' => 'readonly', 'type' => 'text', 'id' => 'txtdenngay', 'class' => 'textbox', 'autocomplete' => 'off', 'value' => date('d/m/Y', strtotime($data['Baocaogsmt']['denngay'])))); ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table3" cellspacing="5" cellpadding="5" border="0" style="width: 750px">
                                    <tbody>
                                        <tr>
                                            <td align="left">
                                                <span id="Label20" style="font-family:Times New Roman;font-weight:bold;">1. PHẦN KHAI CHUNG</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table id="Table2" cellspacing="10" cellpadding="5" style="width: 750px" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="3">
                                                                Tên cơ sở:
                                                                <?php echo $this->Form->input('txtTenDoanhNghiep', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtTenDoanhNghiep', 'class' => 'typeinput', 'style' => 'width: 660px;', 'value' => $data['BaocaogsmtDoanhnghiep']['tencoso'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                Địa chỉ văn phòng, trụ sở chính:
                                                                <?php echo $this->Form->input('txtDiaChiDN', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtDiaChiDN', 'class' => 'typeinput', 'style' => 'width: 526px;', 'value' => $data['BaocaogsmtDoanhnghiep']['truso'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%">
                                                                Điện thoại:
                                                                <?php echo $this->Form->input('txtDienThoaiDN', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtDienThoaiDN', 'class' => 'typeinput', 'style' => 'width: 140px;', 'value' => $data['BaocaogsmtDoanhnghiep']['dienthoai'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                            <td style="width: 30%">
                                                                Fax:
                                                                <?php echo $this->Form->input('txtFaxDN', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtFaxDN', 'class' => 'typeinput', 'style' => 'width: 150px;', 'value' => $data['BaocaogsmtDoanhnghiep']['fax'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                            <td style="width: 40%">
                                                                Email:
                                                                <?php echo $this->Form->input('txtEmailDN', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtEmailDN', 'class' => 'typeinput', 'style' => 'width: 241px;', 'value' => $data['BaocaogsmtDoanhnghiep']['email'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                Giấy đăng ký kinh doanh:
                                                                <?php echo $this->Form->input('txtSoGiayDKKD', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtSoGiayDKKD', 'class' => 'typeinput', 'style' => 'width: 260px;', 'value' => $data['BaocaogsmtDoanhnghiep']['gpkinhdoanh'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                            <td>
                                                                Mã số thuế:
                                                                <?php echo $this->Form->input('txtMasothueDN', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtMasothueDN', 'class' => 'typeinput', 'style' => 'width: 205px;', 'value' => $data['BaocaogsmtDoanhnghiep']['masothue'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table id="Table27" cellspacing="10" cellpadding="5" style="width: 750px" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="3">
                                                                1.2 Cơ sở lập báo cáo
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                Tên cơ sở:
                                                                <?php echo $this->Form->input('txtTenCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtTenCS', 'class' => 'typeinput', 'style' => 'width: 660px;', 'value' => $cosolapbaocao['tencoso'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                Địa chỉ:
                                                                <?php echo $this->Form->input('txtDiaChiCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtDiaChiCS', 'class' => 'typeinput', 'style' => 'width: 681px;', 'value' => $cosolapbaocao['truso'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%">
                                                                Điện thoại:
                                                                <?php echo $this->Form->input('txtDienThoaiCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtDienThoaiCS', 'class' => 'typeinput', 'style' => 'width: 140px;', 'value' => $cosolapbaocao['dienthoai'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                            <td style="width: 30%">
                                                                Fax:
                                                                <?php echo $this->Form->input('txtFaxCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtFaxCS', 'class' => 'typeinput', 'style' => 'width: 150px;', 'value' => $cosolapbaocao['fax'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                            <td style="width: 40%">
                                                                Email:
                                                                <?php echo $this->Form->input('txtEmailCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtEmailCS', 'class' => 'typeinput', 'style' => 'width: 241px;', 'value' => $cosolapbaocao['email'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                Giấy đăng ký kinh doanh:
                                                                <?php echo $this->Form->input('txtDKKD_CS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtDKKD_CS', 'class' => 'typeinput', 'style' => 'width: 260px;', 'value' => $cosolapbaocao['gpkinhdoanh'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                            <td>
                                                                Mã số thuế:
                                                                <?php echo $this->Form->input('txtMasothueCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtMasothueCS', 'class' => 'typeinput', 'style' => 'width: 205px;', 'value' => $cosolapbaocao['masothue'], 'readonly' => 'readonly')); ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table8" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr>
                                            <td>
                                                1.3. Quy trình và Công nghệ sản xuất:
                                                <span id="lblQTCNSX"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table id="Table4" cellspacing="0" cellpadding="0" style="width: 750px" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div>
                                                                    <?php
                                                                    echo $data['Baocaogsmt']['quytrinhcnxstrongkybc'];
                                                                    ?>
                                                                    <input type="hidden" name="hidden_QuytrinhCongngheSanxuat" id ="hidden_QuytrinhCongngheSanxuat" value="" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left">
                                                                <span id="Label1">File đính kèm: </span>
                                                                <?php if (!empty($data['Baocaogsmt']['file_quytrinhcnsx'])): ?>
                                                                    <a href="<?php echo $this->Html->url('/admin/baocao/viewfile/' . $data['Baocaogsmt']['id'] . '/' . $data['Baocaogsmt']['file_quytrinhcnsx']); ?>" target="_blank" class="download-link"><?php echo $data['Baocaogsmt']['file_quytrinhcnsx']; ?></a>
                                                                <?php else: ?>
                                                                    (không có)
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table12" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr valign="bottom">
                                            <td style="font-size: 14px; height: 25px;">
                                                <b>II TÌNH HỈNH SẢN XUẤT VÀ KINH DOANH TRONG KỲ BÁO CÁO</b>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                                <table id="Table15" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr valign="bottom">
                                            <td height="25px">
                                                <b>
                                                </b>
                                            </td>
                                            <td align="right">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table cellspacing="0" cellpadding="0" width="100%" border="0" class="grid">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%" align="center">
                                                                STT
                                                            </th>
                                                            <th width="10%" align="center">
                                                                Tên nguyên liệu
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Đơn vị
                                                            </th>

                                                            <th align="center">
                                                                Quý
                                                                1
                                                            </th>

                                                            <th align="center">
                                                                Quý
                                                                2
                                                            </th>

                                                            <th align="center">
                                                                Quý
                                                                3
                                                            </th>

                                                            <th align="center">
                                                                Quý
                                                                4
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Tổng
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if (!empty($data['Tinhhinhsxkd'])) {
                                                            foreach ($data['Tinhhinhsxkd'] as $key => $thsxkd) {
                                                                ?>		

                                                                <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
                                                                    <td align="right">
                                                                        <?php echo h($thsxkd['stt']); ?>
                                                                    </td>
                                                                    <td align="left">
                                                                        <?php echo h($thsxkd['tennguyenlieu']); ?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo h($thsxkd['donvi']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($thsxkd['quy1']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($thsxkd['quy2']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($thsxkd['quy3']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($thsxkd['quy4']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h(round($thsxkd['tong'], 2)); ?>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table16" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr valign="bottom">
                                            <td style="font-size: 14px; height: 25px;">
                                                <b>III HIỆN TRẠNG MÔI TRƯỜNG TRONG KỲ BÁO CÁO</b>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table19" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr valign="bottom">
                                            <td colspan="2" style="font-size: 13px; height: 25px">
                                                <b>3.1 Nguồn phát sinh ô nhiễm và biện pháp khống chế</b><span id="lblNPSON"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2">
                                                <span id="Label2">File đính kèm sơ đồ vị trí các điểm giám sát khí thải, nước thải: </span>
                                                <?php if (!empty($data['Baocaogsmt']['file_nguononhiem'])): ?>
                                                    <a href="<?php echo $this->Html->url('/admin/baocao/viewfile/' . $data['Baocaogsmt']['id'] . '/' . $data['Baocaogsmt']['file_nguononhiem']); ?>" target="_blank" class="download-link"><?php echo $data['Baocaogsmt']['file_nguononhiem']; ?></a>
                                                <?php else: ?>
                                                    (không có)
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <tr valign="bottom">
                                            <td height="25px">
                                                <b>3.1.1 Nước thải</b>
                                            </td>
                                            <td align="right">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table cellspacing="0" cellpadding="0" width="100%" border="0" class="grid">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%" align="center">
                                                                STT
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Loại nước thải
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Đơn vị
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Quý
                                                                1
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Quý
                                                                2
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Quý
                                                                3
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Quý
                                                                4
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Tổng
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Ghi chú
                                                            </th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <?php
                                                        if (!empty($data['Hientrangnuocthai'])) {
                                                            foreach ($data['Hientrangnuocthai'] as $key => $npsnt) {
                                                                ?>
                                                                <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                    style="background: rgb(255, 255, 255);">
                                                                    <td align="right">
                                                                        <?php echo h($npsnt['stt']); ?>
                                                                        <!--<input type="hidden" name="rptNuocThai$ctl01$ID" id="rptNuocThai_ID_0" value=" <?php echo h($npsnt['temp_id']); ?>">-->
                                                                    </td>
                                                                    <td align="left">
                                                                        <?php echo h($npsnt['loainuocthai']); ?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo h($npsnt['donvi']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($npsnt['quy1']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($npsnt['quy2']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($npsnt['quy3']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($npsnt['quy4']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($npsnt['tong']); ?>
                                                                    </td>
                                                                    <td align="left">
                                                                        <?php echo h($npsnt['ghichu']); ?>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
<!--                                                        <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
style="background: rgb(255, 255, 255);">
<td align="right">
1
<input type="hidden" name="rptNuocThai$ctl01$ID" id="rptNuocThai_ID_0" value="785222">
</td>
<td align="left">
Nước thải sinh hoạt
</td>
<td align="right">
m3
</td>

<td align="right">
0
</td>

<td align="right">
0
</td>

<td align="right">
0
</td>

<td align="right">
1278
</td>

<td align="right">
1278
</td>
<td align="left">

</td>
</tr>

<tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
<td align="right">
2
<input type="hidden" name="rptNuocThai$ctl02$ID" id="rptNuocThai_ID_1" value="785223">
</td>
<td align="left">
Nước thải sản xuất
</td>
<td align="right">
m3
</td>

<td align="right">
0
</td>

<td align="right">
0
</td>

<td align="right">
0
</td>

<td align="right">
0
</td>

<td align="right">
0
</td>
<td align="left">

</td>
</tr>-->


                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table20" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr>
                                            <td height="25px">
                                                <b>Quy trình công nghệ xử lý nước thải đang áp dụng</b><span id="lblFileQTXLNT"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table id="Table5" cellspacing="0" cellpadding="0" width="100%" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div>
                                                                    <?php echo $data['Baocaogsmt']['quytrinhcnxlnt']; ?>
                                                                    <input type="hidden" name="hidden_QuytrinhCongngheXulyNuoc" id ="hidden_QuytrinhCongngheXulyNuoc" value="" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left">
                                                                <span id="Label3">File đính kèm: </span>
                                                                <?php if (isset($data['Baocaogsmt']['file_quytrinhcnxlnt']) && $data['Baocaogsmt']['file_quytrinhcnxlnt']): ?>
                                                                    <a href="<?php echo $this->Html->url('/admin/baocao/viewfile/' . $data['Baocaogsmt']['id'] . '/' . $data['Baocaogsmt']['file_quytrinhcnxlnt']); ?>" target="_blank" class="download-link"><?php echo $data['Baocaogsmt']['file_quytrinhcnxlnt']; ?></a>
                                                                <?php else: ?>
                                                                    (không có)
                                                                <?php endif; ?>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table21" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b>Kết quả phân tích</b><span id="lblFileXLNT"></span>
                                            </td>
                                            <td align="right">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table cellspacing="0" cellpadding="0" width="100%" border="0" class="grid">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%" align="center">
                                                                STT
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Thông số đo
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Đơn vị
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                1
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                2
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                3
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                4
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Ghi chú
                                                            </th>
                                                        </tr>
                                                    </thead>


                                                    <tbody>
                                                        <?php
                                                        if (!empty($data['Ketquaphantichnuocthai'])) {
                                                            foreach ($data['Ketquaphantichnuocthai'] as $key => $kqptnt) {
                                                                ?>
                                                                <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                    style="background: rgb(255, 255, 255);">
                                                                    <td align="right">
                                                                        <?php echo h($kqptnt['stt']); ?>
                                                                    </td>
                                                                    <td align="left">
                                                                        <?php echo h($kqptnt['thongsodo']); ?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo h($kqptnt['donvi']); ?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo h($kqptnt['lan1']); ?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo h($kqptnt['lan2']); ?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo h($kqptnt['lan3']); ?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo h($kqptnt['lan4']); ?>
                                                                    </td>
                                                                    <td align="left">
                                                                        <?php echo h($kqptnt['ghichu']); ?>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2">
                                                <span id="Label4">File đính kèm kết quả phân tích nước thải: </span>
                                                <?php if (isset($data['Baocaogsmt']['file_ketquaphantichnt']) && $data['Baocaogsmt']['file_ketquaphantichnt']): ?>
                                                                    <a href="<?php echo $this->Html->url('/admin/baocao/viewfile/' . $data['Baocaogsmt']['id'] . '/' . $data['Baocaogsmt']['file_ketquaphantichnt']); ?>" target="_blank" class="download-link"><?php echo $data['Baocaogsmt']['file_ketquaphantichnt']; ?></a>
                                                                <?php else: ?>
                                                                    (không có)
                                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table22" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr valign="bottom">
                                            <td height="25px">
                                                <b>3.1.2 Khí thải tại nguồn</b>
                                            </td>
                                            <td align="right">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table cellspacing="0" cellpadding="0" width="100%" border="0" class="grid">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%" align="center">
                                                                STT
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Loại khí thải
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Đơn vị
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                1
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                2
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                3
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                4
                                                            </th>


                                                            <th width="5%" align="center">
                                                                Ghi chú
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if (!empty($data['Hientrangkhithai'])) {
                                                            foreach ($data['Hientrangkhithai'] as $key => $npskt) {
                                                                ?>
                                                                <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                    <td align="right">
                                                                        <?php echo $npskt['stt']; ?>
                                                                    </td>
                                                                    <td align="left">
                                                                        <?php echo $npskt['loaikhithai']; ?>
                                                                    </td>
                                                                    <td align="left">
                                                                        <?php echo $npskt['donvi']; ?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo $npskt['quy1']; ?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo $npskt['quy2']; ?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo $npskt['quy3']; ?>
                                                                    </td>
                                                                    <td align="right">
                                                                        <?php echo $npskt['quy4']; ?>
                                                                    </td>
                                                                    <td align="left">
                                                                        <?php echo $npskt['ghichu']; ?>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table23" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr>
                                            <td height="25px">
                                                <b>Quy trình công nghệ xử lý khí thải đang áp dụng</b><span id="lblFileQTXLKT"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table id="Table11" cellspacing="0" cellpadding="0" width="100%" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div>
                                                                    <?php echo $data['Baocaogsmt']['quytrinhcnxlkt']; ?>
                                                                    <input type="hidden" name="hidden_QuytrinhCongngheXulyKhithai" id ="hidden_QuytrinhCongngheXulyKhithai" value="" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <span id="Label5">File đính kèm: </span>
                                                <?php if (!empty($data['Baocaogsmt']['file_quytrinhcnxlkt'])): ?>
                                                                    <a href="<?php echo $this->Html->url('/admin/baocao/viewfile/' . $data['Baocaogsmt']['id'] . '/' . $data['Baocaogsmt']['file_quytrinhcnxlkt']); ?>" target="_blank" class="download-link"><?php echo $data['Baocaogsmt']['file_quytrinhcnxlkt']; ?></a>
                                                                <?php else: ?>
                                                                    (không có)
                                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table24" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <b>Kết quả phân tích</b><span id="lblFileXLKT"></span>
                                            </td>
                                            <td align="right">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table cellspacing="0" cellpadding="0" width="100%" border="0" class="grid">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%" align="center">
                                                                STT
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Thông số đo
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Đơn vị
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                1
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                2
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                3
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Lần
                                                                4
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Ghi chú
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        if (!empty($data['Ketquaphantichkhithai'])) {
                                                            foreach ($data['Ketquaphantichkhithai'] as $key => $kqptkt) {
                                                                ?>
                                                                <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                    style="background: rgb(255, 255, 255);">
                                                                    <td align="right">
                                                                        <?php echo h($kqptkt['stt']); ?>
                                                                    </td>
                                                                    <td align="left">
                                                                        <?php echo h($kqptkt['thongsodo']); ?>
                                                                    </td>
                                                                    <td align="left">
                                                                        <?php echo h($kqptkt['donvi']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($kqptkt['lan1']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($kqptkt['lan2']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($kqptkt['lan3']); ?>
                                                                    </td>

                                                                    <td align="right">
                                                                        <?php echo h($kqptkt['lan4']); ?>
                                                                    </td>

                                                                    <td align="left">
                                                                        <?php echo h($kqptkt['ghichu']); ?>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2">
                                                <span id="Label7">File đính kèm kết quả phân tích khí thải: </span>
                                                <?php if (!empty($data['Baocaogsmt']['file_ketquaphantichkt'])): ?>
                                                                    <a href="<?php echo $this->Html->url('/admin/baocao/viewfile/' . $data['Baocaogsmt']['id'] . '/' . $data['Baocaogsmt']['file_ketquaphantichkt']); ?>" target="_blank" class="download-link"><?php echo $data['Baocaogsmt']['file_ketquaphantichkt']; ?></a>
                                                                <?php else: ?>
                                                                    (không có)
                                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table25" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr valign="bottom">
                                            <td height="25px">
                                                <b>3.1.3 Chất thải rắn</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table cellspacing="0" cellpadding="0" width="100%" border="0" class="grid">
                                                    <thead>
                                                        <tr>
                                                            <th width="5%" align="center">
                                                                STT
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Loại chất thải
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Đơn vị
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 1
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 2
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 3
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 4
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 5
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 6
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 7
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 8
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 9
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 10
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 11
                                                            </th>

                                                            <th width="5%" align="center">
                                                                T 12
                                                            </th>

                                                            <th width="5%" align="center">
                                                                Tổng
                                                            </th>
                                                            <th width="5%" align="center">
                                                                Đơn vị thu gom-<br>
                                                                vận chuyển-xử lý
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td colspan="16" style="font-weight: bold;">
                                                                A Chất thải RSH
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        if (!empty($data['Hientrangchatthairan'])) {
                                                            foreach ($data['Hientrangchatthairan'] as $key => $htctrsh) {
                                                                ?>
                                                                <?php if ($htctrsh['id_loaichatthairan'] == 1): ?>
                                                                    <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
                                                                        <td align="center">
                                                                            <?php echo $htctrsh['stt']; ?>
                                                                            <!--<input type="hidden" style="width: 98%" value="<?php echo $htctrsh['temp_id']; ?>" id="ID" name="ID[]">-->
                                                                        </td>
                                                                        <td align="left">
                                                                            <?php echo $htctrsh['loaichatthai']; ?>
                                                                        </td>
                                                                        <td align="center">
                                                                            <?php echo $htctrsh['donvi']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang1']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang2']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang3']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang4']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang5']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang6']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang7']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang8']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang9']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang10']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang11']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrsh['thang12']; ?>
                                                                        </td>

                                                                        <td>
                                                                            <?php echo $htctrsh['tong']; ?>
                                                                        </td>

                                                                        <td align="center">
                                                                            <?php echo $htctrsh['donvithugomvanchuyen']; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                                <?php
                                                            }
                                                        }
                                                        ?>

                                                        <tr>
                                                            <td colspan="16" style="font-weight: bold;">
                                                                B Chất thải Công nghiệp
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        if (!empty($data['Hientrangchatthairan'])) {
                                                            foreach ($data['Hientrangchatthairan'] as $key => $htctrcn) {
                                                                ?>
                                                                <?php if ($htctrcn['id_loaichatthairan'] == 2): ?>
                                                                    <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
                                                                        <td align="center">
                                                                            <?php echo $htctrcn['stt']; ?>
                                                                            <!--<input type="hidden" style="width: 98%" value="<?php echo $htctrcn['temp_id']; ?>" id="ID" name="ID[]">-->
                                                                        </td>
                                                                        <td align="left">
                                                                            <?php echo $htctrcn['loaichatthai']; ?>
                                                                        </td>
                                                                        <td align="center">
                                                                            <?php echo $htctrcn['donvi']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang1']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang2']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang3']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang4']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang5']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang6']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang7']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang8']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang9']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang10']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang11']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrcn['thang12']; ?>
                                                                        </td>

                                                                        <td>
                                                                            <?php echo $htctrcn['tong']; ?>
                                                                        </td>

                                                                        <td align="center">
                                                                            <?php echo $htctrcn['donvithugomvanchuyen']; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                                <?php
                                                            }
                                                        }
                                                        ?>

                                                        <tr>
                                                            <td colspan="16" style="font-weight: bold;">
                                                                C Chất thải nguy hại
                                                            </td>
                                                            <td>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                        if (!empty($data['Hientrangchatthairan'])) {
                                                            foreach ($data['Hientrangchatthairan'] as $key => $htctrnh) {
                                                                ?>
                                                                <?php if ($htctrnh['id_loaichatthairan'] == 3): ?>
                                                                    <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
                                                                        <td align="center">
                                                                            <?php echo $htctrnh['stt']; ?>
                                                                            <!--<input type="hidden" style="width: 98%" value="<?php echo $htctrnh['temp_id']; ?>" id="ID" name="ID[]">-->
                                                                        </td>
                                                                        <td align="left">
                                                                            <?php echo $htctrnh['loaichatthai']; ?>
                                                                        </td>
                                                                        <td align="center">
                                                                            <?php echo $htctrnh['donvi']; ?>0
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang1']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang2']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang3']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang4']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang5']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang6']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang7']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang8']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang9']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang10']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang11']; ?>
                                                                        </td>

                                                                        <td align="right">
                                                                            <?php echo $htctrnh['thang12']; ?>
                                                                        </td>

                                                                        <td>
                                                                            <?php echo $htctrnh['tong']; ?>
                                                                        </td>

                                                                        <td align="center">
                                                                            <?php echo $htctrnh['donvithugomvanchuyen']; ?>
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table id="Table26" cellspacing="0" cellpadding="0" border="0" style="width: 750px">
                                    <tbody>
                                        <tr>
                                            <td height="25px">
                                                <b>3.1.4 Các biện pháp khống chế ồn, rung</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25px">
                                                <b>Nguồn phát sinh tiếng ồn &amp; biện pháp khắc phục</b><span id="lblFilePSDR"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table id="Table6" cellspacing="0" cellpadding="0" width="100%" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div>
                                                                    <?php echo $data['Baocaogsmt']['nguonpstiengonvabpkp']; ?>
                                                                    <?php // echo $this->Form->input('Nguonphatsinhtiengon', array('div' => false, 'label' => false, 'type' => 'textarea', 'class' => 'form-control', 'id' => 'Nguonphatsinhtiengon')); ?>
                                                                    <input type="hidden" name="hidden_Nguonphatsinhtiengon" id ="hidden_Nguonphatsinhtiengon" value="" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <span id="Label9">File đính kèm kết quả phân tích: </span>
                                                 <?php if (!empty($data['Baocaogsmt']['file_ketquaphantichtiengon'])): ?>
                                                                    <a href="<?php echo $this->Html->url('/admin/baocao/viewfile/' . $data['Baocaogsmt']['id'] . '/' . $data['Baocaogsmt']['file_ketquaphantichtiengon']); ?>" target="_blank" class="download-link"><?php echo $data['Baocaogsmt']['file_ketquaphantichtiengon']; ?></a>
                                                                <?php else: ?>
                                                                    (không có)
                                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25px">
                                                <b>Nguồn phát sinh độ rung &amp; biện pháp khắc phục</b><span id="lblFilePSTO"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table id="Table10" cellspacing="0" cellpadding="0" width="100%" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div>
                                                                    <?php echo $data['Baocaogsmt']['nguonpstiengonvabpkp']; ?>
                                                                    <?php // echo $this->Form->input('Nguonphatsinhdorung', array('div' => false, 'label' => false, 'hiddenField' => false, 'type' => 'textarea', 'class' => 'form-control', 'id' => 'Nguonphatsinhdorung')); ?>
                                                                    <input type="hidden" name="hidden_Nguonphatsinhdorung" id ="hidden_Nguonphatsinhdorung" value="" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left">
                                                <span id="Label8">File đính kèm kết quả phân tích: </span>
                                                <?php if (!empty($data['Baocaogsmt']['file_ketquaphantichdorung'])): ?>
                                                                    <a href="<?php echo $this->Html->url('/admin/baocao/viewfile/' . $data['Baocaogsmt']['id'] . '/' . $data['Baocaogsmt']['file_ketquaphantichdorung']); ?>" target="_blank" class="download-link"><?php echo $data['Baocaogsmt']['file_ketquaphantichdorung']; ?></a>
                                                                <?php else: ?>
                                                                    (không có)
                                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25px">
                                                <b>3.2 Môi trường xung quanh (Không khí xung quanh, nước ngầm, đất, nước mặt - nếu có)</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25px">
                                                File đính kèm:
                                                <span id="lblFileMTXQ1"></span><br>
                                                Sơ đồ vị trí các điểm giám sát đối với môi trường không khí xung quanh, đất, nước
                                                ngầm, nước mặt.
                                                <br>
                                                 <?php if (!empty($data['Baocaogsmt']['file_sodovitricacdiemgiamsatmtxq'])): ?>
                                                                    <a href="<?php echo $this->Html->url('/admin/baocao/viewfile/' . $data['Baocaogsmt']['id'] . '/' . $data['Baocaogsmt']['file_sodovitricacdiemgiamsatmtxq']); ?>" target="_blank" class="download-link"><?php echo $data['Baocaogsmt']['file_sodovitricacdiemgiamsatmtxq']; ?></a>
                                                                <?php else: ?>
                                                                    (không có)
                                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25px">
                                                File đính kèm:
                                                <span id="lblFileMTXQ2"></span>
                                                <br>
                                                Các kết quả đo đạc phân tích giám sát môi trường không khí xung quanh, đất, nước
                                                ngầm, nước mặt.<br>
                                                <?php if (!empty($data['Baocaogsmt']['file_ketquadodacphantichmtxq'])): ?>
                                                                    <a href="<?php echo $this->Html->url('/admin/baocao/viewfile/' . $data['Baocaogsmt']['id'] . '/' . $data['Baocaogsmt']['file_ketquadodacphantichmtxq']); ?>" target="_blank" class="download-link"><?php echo $data['Baocaogsmt']['file_ketquadodacphantichmtxq']; ?></a>
                                                                <?php else: ?>
                                                                    (không có)
                                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25px">
                                                ......................., ngày... tháng... năm...
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="25px">
                                                Chủ cơ sở
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" bgcolor="aliceblue" height="50">
                                                <a href="<?php echo $this->Html->url('/admin/baocao/in/'.$data['Baocaogsmt']['id']);?>" target="_blank"><input type="button" name="btnIn" value="In ấn"
                                                       onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions( & quot; btnLuu & quot; , & quot; & quot; , true, & quot; & quot; , & quot; & quot; , false, false))"
                                                       id="btnIn" style="width:100px;">&nbsp;</a>
                                                <input type="submit" name="btnXoa" value="Xóa báo cáo"
                                                       onclick="javascript:confirm('Bạn có chắc muốn xóa báo cáo này không');"
                                                       id="btnXoa" style="width:100px;">&nbsp;
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
<?php echo $this->Form->end(); ?>

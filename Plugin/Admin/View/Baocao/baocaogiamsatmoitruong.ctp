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
</style>
<?php
if ((isset($this->validationErrors['Baocaogsmt']) && $this->validationErrors['Baocaogsmt'])  || (isset($this->validationErrors['BaocaogsmtDoanhnghiep']) && $this->validationErrors['BaocaogsmtDoanhnghiep'])):
    ?>
    <div class="error-message">
        <ul>
            <?php if(isset($this->validationErrors['Baocaogsmt']) && $this->validationErrors['Baocaogsmt']):?>
            <?php foreach ($this->validationErrors['Baocaogsmt'] as $key => $value): ?>
                <li class=""><?php echo $value[0]; ?></li>
            <?php endforeach; ?>
            <?php endif;?>
            <?php if(isset($this->validationErrors['BaocaogsmtDoanhnghiep']) && $this->validationErrors['BaocaogsmtDoanhnghiep']):?> 
            <?php foreach ($this->validationErrors['BaocaogsmtDoanhnghiep'] as $key => $value): ?>
                <li class=""><?php echo $value[0]; ?></li>
            <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
<?php endif; ?>
<?php echo $this->Form->create('Baocaogsmt', array('method' => 'post', 'url' => $this->Html->url(), 'enctype' => 'multipart/form-data')); ?>
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
                                                <!--<input name="txttungay" readonly="readonly" type="text"  id="txttungay" class="textbox" autocomplete="off" >-->
                                                <?php echo $this->Form->input('txttungay', array('label' => false, 'readonly' => 'readonly', 'type' => 'text', 'id' => 'txttungay', 'class' => 'textbox', 'autocomplete' => 'off')); ?>
                                            </td>
                                            <td>
                                                Đến ngày:
                                            </td>
                                            <td>
                                                <!--<input name="txtdenngay" readonly="readonly" type="text" id="txtdenngay" class="textbox">-->
                                                <?php echo $this->Form->input('txtdenngay', array('label' => false, 'readonly' => 'readonly', 'type' => 'text', 'id' => 'txtdenngay', 'class' => 'textbox', 'autocomplete' => 'off')); ?>
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
                                                                <!--<input name="hidDoanhnghiepID" type="hidden" id="hidDoanhnghiepID" value="770465">-->
<!--                                                                <input name="txtTenDoanhNghiep" type="text" id="txtTenDoanhNghiep" class="typeinput"
                                                                       style="width: 660px;">-->
                                                                <?php echo $this->Form->input('txtTenDoanhNghiep', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtTenDoanhNghiep', 'class' => 'typeinput', 'style' => 'width: 660px;')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                Địa chỉ văn phòng, trụ sở chính:
                                                                <!--<input name="txtDiaChiDN" type="text" id="txtDiaChiDN" class="typeinput" style="width: 526px;">-->
                                                                <?php echo $this->Form->input('txtDiaChiDN', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtDiaChiDN', 'class' => 'typeinput', 'style' => 'width: 526px;')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%">
                                                                Điện thoại:
<!--                                                                <input name="txtDienThoaiDN" type="text" id="txtDienThoaiDN" class="typeinput"
                                                                       style="width: 140px;">-->
                                                                <?php echo $this->Form->input('txtDienThoaiDN', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtDienThoaiDN', 'class' => 'typeinput', 'style' => 'width: 140px;')); ?>
                                                            </td>
                                                            <td style="width: 30%">
                                                                Fax:
                                                                <!--<input name="txtFaxDN" type="text" id="txtFaxDN" class="typeinput" style="width: 150px;">-->
                                                                <?php echo $this->Form->input('txtFaxDN', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtFaxDN', 'class' => 'typeinput', 'style' => 'width: 150px;')); ?>
                                                            </td>
                                                            <td style="width: 40%">
                                                                Email:
                                                                <!--<input name="txtEmailDN" type="text" id="txtEmailDN" class="typeinput" style="width: 241px;">-->
                                                                <?php echo $this->Form->input('txtEmailDN', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtEmailDN', 'class' => 'typeinput', 'style' => 'width: 241px;')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                Giấy đăng ký kinh doanh:
<!--                                                                <input name="txtSoGiayDKKD" type="text" id="txtSoGiayDKKD" class="typeinput"
                                                                       style="width: 260px;">-->
                                                                <?php echo $this->Form->input('txtSoGiayDKKD', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtSoGiayDKKD', 'class' => 'typeinput', 'style' => 'width: 260px;')); ?>
                                                            </td>
                                                            <td>
                                                                Mã số thuế:
<!--                                                                <input name="txtMasothueDN" type="text" id="txtMasothueDN" class="typeinput"
                                                                       style="width: 205px;">-->
                                                                <?php echo $this->Form->input('txtMasothueDN', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtMasothueDN', 'class' => 'typeinput', 'style' => 'width: 205px;')); ?>
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
                                                                <!--<input name="hidCosoID" type="hidden" id="hidCosoID" value="-1">-->
                                                                <!--<input name="txtTenCS" type="text" id="txtTenCS" class="typeinput" style="width: 660px;">-->
                                                                <?php echo $this->Form->input('txtTenCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtTenCS', 'class' => 'typeinput', 'style' => 'width: 660px;')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="3">
                                                                Địa chỉ:
                                                                <!--<input name="txtDiaChiCS" type="text" id="txtDiaChiCS" class="typeinput" style="width: 681px;">-->
                                                                <?php echo $this->Form->input('txtDiaChiCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtDiaChiCS', 'class' => 'typeinput', 'style' => 'width: 681px;')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width: 30%">
                                                                Điện thoại:
<!--                                                                <input name="txtDienThoaiCS" type="text" id="txtDienThoaiCS" class="typeinput"
                                                                       style="width:140px;">-->
                                                                <?php echo $this->Form->input('txtDienThoaiCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtDienThoaiCS', 'class' => 'typeinput', 'style' => 'width: 140px;')); ?>
                                                            </td>
                                                            <td style="width: 30%">
                                                                Fax:
                                                                <!--<input name="txtFaxCS" type="text" id="txtFaxCS" class="typeinput" style="width: 150px;">-->
                                                                <?php echo $this->Form->input('txtFaxCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtFaxCS', 'class' => 'typeinput', 'style' => 'width: 150px;')); ?>
                                                            </td>
                                                            <td style="width: 40%">
                                                                Email:
                                                                <!--<input name="txtEmailCS" type="text" id="txtEmailCS" class="typeinput" style="width: 241px;">-->
                                                                <?php echo $this->Form->input('txtEmailCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtEmailCS', 'class' => 'typeinput', 'style' => 'width: 241px;')); ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan="2">
                                                                Giấy đăng ký kinh doanh:
                                                                <!--<input name="txtDKKD_CS" type="text" id="txtDKKD_CS" class="typeinput" style="width: 260px;">-->
                                                                <?php echo $this->Form->input('txtDKKD_CS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtDKKD_CS', 'class' => 'typeinput', 'style' => 'width: 260px;')); ?>
                                                            </td>
                                                            <td>
                                                                Mã số thuế:
<!--                                                                <input name="txtMasothueCS" type="text" id="txtMasothueCS" class="typeinput"
                                                                       style="width: 205px;">-->
                                                                <?php echo $this->Form->input('txtMasothueCS', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtMasothueCS', 'class' => 'typeinput', 'style' => 'width: 205px;')); ?>
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
                                                                    <?php echo $this->Form->input('QuytrinhCongngheSanxuat', array('div' => false, 'label' => false, 'type' => 'textarea', 'class' => 'form-control', 'id' => 'QuytrinhCongngheSanxuat')); ?>
                                                                    <input type="hidden" name="hidden_QuytrinhCongngheSanxuat" id ="hidden_QuytrinhCongngheSanxuat" value="" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left">
                                                                <span id="Label1">hoặc đính kèm file: </span>
                                                                <?php echo $this->Form->input('txtFileQTCNSX', array('div' => false, 'label' => false, 'type' => 'file', 'id' => 'txtFileQTCNSX', 'size' => '10')); ?>
                                                                <?php 
																$get_file_in_session=$this->Session->read('file_QTCNSX');
																if ($get_file_in_session): ?>
                                                                    <div style="color: #008000;">File đính kèm: <?php echo h($this->Session->read('file_QTCNSX')); ?></div>
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
                                                <a href="javascript:doDLBaocao('3');">Cập nhật dữ liệu</a>
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
                                                        if (isset($tinhhinhsxkd)) {
                                                            foreach ($tinhhinhsxkd as $key => $thsxkd) {
                                                                ?>		

                                                                <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
                                                                    <td align="right">
                                                                        <?php echo h($thsxkd['stt']); ?>
                                                                        <!--<input type="hidden" name="tensp" id="rptNuocThai_ID_0" value="785222">-->
                                                                    </td>
                                                                    <td align="left">
                                                                        <?php echo h($thsxkd['tensp']); ?>
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
                                                <span id="Label2">Đính kèm file:  Sơ đồ vị trí các điểm giám sát khí thải, nước thải</span>
                                                <?php echo $this->Form->input('txtFileNPSON', array('div' => false, 'label' => false, 'type' => 'file', 'id' => 'txtFileNPSON', 'size' => 10)); ?>
                                                <?php 
												$get_file_in_session=$this->Session->read('file_NPSON');
												if (isset($get_file_in_session)): ?>
                                                    <div style="color: #008000;">File đính kèm: <?php echo h($this->Session->read('file_NPSON')); ?></div>
                                                <?php endif; ?>
                                            </td>
                                        </tr>

                                        <tr valign="bottom">
                                            <td height="25px">
                                                <b>3.1.1 Nước thải</b>
                                            </td>
                                            <td align="right">
                                                <a href="javascript:doDLBaocao('4');">Cập nhật dữ liệu</a>
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
                                                        if (isset($nguonphatsinhnuocthai)) {
                                                            foreach ($nguonphatsinhnuocthai as $key => $npsnt) {
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
                                                                    <?php echo $this->Form->input('QuytrinhCongngheXulyNuoc', array('div' => false, 'label' => false, 'hiddenField' => false, 'type' => 'textarea', 'class' => 'form-control', 'id' => 'QuytrinhCongngheXulyNuoc')); ?>
                                                                    <input type="hidden" name="hidden_QuytrinhCongngheXulyNuoc" id ="hidden_QuytrinhCongngheXulyNuoc" value="" />
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td align="left">
                                                                <span id="Label3">hoặc đính kèm file: </span>
                                                                <?php echo $this->Form->input('txtFileQTXLNT', array('div' => false, 'label' => false, 'type' => 'file', 'id' => 'txtFileQTXLNT', 'size' => 10)); ?>
                                                                <?php 
																$get_file_in_session=$this->Session->read('file_QTXLNT');
																if (isset($get_file_in_session)): ?>
                                                                    <div style="color: #008000;">File đính kèm: <?php echo h($this->Session->read('file_QTXLNT')); ?></div>
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
                                                <a href="javascript:doDLBaocao('12');">Cập nhật dữ liệu</a>
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
                                                        if (isset($ketquaphantichnuocthai)) {
                                                            foreach ($ketquaphantichnuocthai as $key => $kqptnt) {
                                                                ?>
                                                                <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                    style="background: rgb(255, 255, 255);">
                                                                    <td align="right">
                                                                        <?php echo h($kqptnt['stt']); ?>
                                                                        <!--<input type="hidden" name="rptPhanTichNuocThai$ctl01$ID" id="rptPhanTichNuocThai_ID_0" value="<?php echo h($kqptnt['temp_id']); ?>">-->
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
                                                        } else {
                                                            ?>
                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    1
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl01$ID" id="rptPhanTichNuocThai_ID_0" value="785224">-->
                                                                </td>
                                                                <td align="left">
                                                                    pH Nước thải sinh hoạt
                                                                </td>
                                                                <td align="right">

                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    2
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl02$ID" id="rptPhanTichNuocThai_ID_1" value="785225">-->
                                                                </td>
                                                                <td align="left">
                                                                    BOD5 Nước thải sinh hoạt
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    3
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl03$ID" id="rptPhanTichNuocThai_ID_2" value="785226">-->
                                                                </td>
                                                                <td align="left">
                                                                    COD Nước thải sinh hoạt
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    4
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl04$ID" id="rptPhanTichNuocThai_ID_3" value="785227">-->
                                                                </td>
                                                                <td align="left">
                                                                    SS Nước thải sinh hoạt
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    5
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl05$ID" id="rptPhanTichNuocThai_ID_4" value="785228">-->
                                                                </td>
                                                                <td align="left">
                                                                    NH4+ Nước thải sinh hoạt
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    6
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl06$ID" id="rptPhanTichNuocThai_ID_5" value="785229">-->
                                                                </td>
                                                                <td align="left">
                                                                    N Tổng Nước thải sinh hoạt
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    7
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl07$ID" id="rptPhanTichNuocThai_ID_6" value="785230">-->
                                                                </td>
                                                                <td align="left">
                                                                    P Tổng nước thải sinh hoạt
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    8
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl08$ID" id="rptPhanTichNuocThai_ID_7" value="785231">-->
                                                                </td>
                                                                <td align="left">
                                                                    Dầu mỡ ĐTV Nước thải sinh hoạt
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    9
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl09$ID" id="rptPhanTichNuocThai_ID_8" value="785232">-->
                                                                </td>
                                                                <td align="left">
                                                                    Coliform Nước thải sinh hoạt
                                                                </td>
                                                                <td align="right">
                                                                    MPN/100mL
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    10
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl10$ID" id="rptPhanTichNuocThai_ID_9" value="785233">-->
                                                                </td>
                                                                <td align="left">
                                                                    pH Nước thải sản xuất
                                                                </td>
                                                                <td align="right">

                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    11
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl11$ID" id="rptPhanTichNuocThai_ID_10" value="785234">-->
                                                                </td>
                                                                <td align="left">
                                                                    BOD5 Nước thải sản xuất
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    12
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl12$ID" id="rptPhanTichNuocThai_ID_11" value="785235">-->
                                                                </td>
                                                                <td align="left">
                                                                    COD Nước thải sản xuất
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    13
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl13$ID" id="rptPhanTichNuocThai_ID_12" value="785236">-->
                                                                </td>
                                                                <td align="left">
                                                                    SS Nước thải sản xuất
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    14
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl14$ID" id="rptPhanTichNuocThai_ID_13" value="785237">-->
                                                                </td>
                                                                <td align="left">
                                                                    NH4+ Nước thải sản xuất
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    15
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl15$ID" id="rptPhanTichNuocThai_ID_14" value="785238">-->
                                                                </td>
                                                                <td align="left">
                                                                    N Tổng Nước thải sản xuất
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    16
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl16$ID" id="rptPhanTichNuocThai_ID_15" value="785239">-->
                                                                </td>
                                                                <td align="left">
                                                                    P Tổng Nước thải sản xuất
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    17
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl17$ID" id="rptPhanTichNuocThai_ID_16" value="785240">-->
                                                                </td>
                                                                <td align="left">
                                                                    Dầu khoáng nước thải sản xuất
                                                                </td>
                                                                <td align="right">
                                                                    mg/L
                                                                </td>

                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    18
                                                                    <!--<input type="hidden" name="rptPhanTichNuocThai$ctl18$ID" id="rptPhanTichNuocThai_ID_17" value="785241">-->
                                                                </td>
                                                                <td align="left">
                                                                    Coliform nước thải sản xuất
                                                                </td>
                                                                <td align="right">
                                                                    MPN/100mL
                                                                </td>

                                                            </tr>
                                                        <?php } ?>

                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2">
                                                <span id="Label4">Đính kèm file kết quả phân tích nước thải: </span>
                                                <?php echo $this->Form->input('txtFileXLNT', array('div' => false, 'label' => false, 'type' => 'file', 'id' => 'txtFileXLNT', 'size' => 10)); ?>
                                                <?php 
												$get_file_in_session=$this->Session->read('file_XLNT');
												if (isset($get_file_in_session) && $get_file_in_session): ?>
                                                    <div style="color: #008000;">File đính kèm: <?php echo h($this->Session->read('file_XLNT')); ?></div>
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
                                                <a href="javascript:doDLBaocao('5');">Cập nhật dữ liệu</a>
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
                                                        if (isset($nguonphatsinhkhithai)) {
                                                            foreach ($nguonphatsinhkhithai as $key => $npskt) {
                                                                ?>
                                                                <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                    <td align="right">
                                                                        <?php echo $npskt['stt']; ?>
                                                                        <!--<input type="hidden" name="rptKhiThai$ctl01$ID" id="rptKhiThai_ID_0" value="<?php echo $npskt['temp_id']; ?>">-->
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
                                                        } else {
                                                            ?>
                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    1
                                                                    <!--<input type="hidden" name="rptKhiThai$ctl01$ID" id="rptKhiThai_ID_0" value="785242">-->
                                                                </td>
                                                                <td align="left">
                                                                    Bụi Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    2
                                                                    <!--<input type="hidden" name="rptKhiThai$ctl02$ID" id="rptKhiThai_ID_1" value="785243">-->
                                                                </td>
                                                                <td align="left">
                                                                    SO2 khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    3
                                                                    <!--<input type="hidden" name="rptKhiThai$ctl03$ID" id="rptKhiThai_ID_2" value="785244">-->
                                                                </td>
                                                                <td align="left">
                                                                    NO2 Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    4
                                                                    <!--<input type="hidden" name="rptKhiThai$ctl04$ID" id="rptKhiThai_ID_3" value="785245">-->
                                                                </td>
                                                                <td align="left">
                                                                    CO Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    5
                                                                    <!--<input type="hidden" name="rptKhiThai$ctl05$ID" id="rptKhiThai_ID_4" value="785246">-->
                                                                </td>
                                                                <td align="left">
                                                                    Bụi khu vực xưởng sản xuất
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    6
                                                                    <!--<input type="hidden" name="rptKhiThai$ctl06$ID" id="rptKhiThai_ID_5" value="785247">-->
                                                                </td>
                                                                <td align="left">
                                                                    SO2 Khu vực xưởng sản xuất
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    7
                                                                    <!--<input type="hidden" name="rptKhiThai$ctl07$ID" id="rptKhiThai_ID_6" value="785248">-->
                                                                </td>
                                                                <td align="left">
                                                                    NO2 Khu vực xưởng sản xuất
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    8
                                                                    <!--<input type="hidden" name="rptKhiThai$ctl08$ID" id="rptKhiThai_ID_7" value="785249">-->
                                                                </td>
                                                                <td align="left">
                                                                    CO Khu vực xưởng sản xuất
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
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
                                                                    <?php echo $this->Form->input('QuytrinhCongngheXulyKhithai', array('div' => false, 'label' => false, 'hiddenField' => false, 'type' => 'textarea', 'class' => 'form-control', 'id' => 'QuytrinhCongngheXulyKhithai')); ?>
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
                                                <span id="Label5">hoặc đính kèm file: </span>
                                                <?php echo $this->Form->input('txtFileQTXLKT', array('div' => false, 'label' => false, 'type' => 'file', 'id' => 'txtFileQTXLKT', 'size' => 10)); ?>
                                                <?php 
												$get_file_in_session=$this->Session->read('file_QTXLKT');
												if (isset($get_file_in_session) && $get_file_in_session): ?>
                                                    <div style="color: #008000;">File đính kèm: <?php echo h($this->Session->read('file_QTXLKT')); ?></div>
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
                                                <a href="javascript:doDLBaocao('13');">Cập nhật dữ liệu</a>
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
                                                        if (isset($ketquaphantichkhithai)) {
                                                            foreach ($ketquaphantichkhithai as $key => $kqptkt) {
                                                                ?>
                                                                <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                    style="background: rgb(255, 255, 255);">
                                                                    <td align="right">
                                                                        <?php echo h($kqptkt['stt']); ?>
                                                                        <!--<input type="hidden" name="rptPhanTichKhiThai$ctl01$ID" id="rptPhanTichKhiThai_ID_0" value="<?php echo h($kqptkt['temp_id']); ?>">-->
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
                                                        } else {
                                                            ?>
                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    1
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl01$ID" id="rptPhanTichKhiThai_ID_0" value="785250">-->
                                                                </td>
                                                                <td align="left">
                                                                    Tiếng ồn Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    dBA
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    2
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl02$ID" id="rptPhanTichKhiThai_ID_1" value="785251">-->
                                                                </td>
                                                                <td align="left">
                                                                    Nhiệt độ Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    Độ C
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    3
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl03$ID" id="rptPhanTichKhiThai_ID_2" value="785252">-->
                                                                </td>
                                                                <td align="left">
                                                                    Tóc độ gió Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    m/s
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    4
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl04$ID" id="rptPhanTichKhiThai_ID_3" value="785253">-->
                                                                </td>
                                                                <td align="left">
                                                                    Độ ẩm Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    %
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    5
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl05$ID" id="rptPhanTichKhiThai_ID_4" value="785254">-->
                                                                </td>
                                                                <td align="left">
                                                                    Ánh sáng Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    Lux
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    6
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl06$ID" id="rptPhanTichKhiThai_ID_5" value="785255">-->
                                                                </td>
                                                                <td align="left">
                                                                    Bụi Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    dBA
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    7
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl07$ID" id="rptPhanTichKhiThai_ID_6" value="785256">-->
                                                                </td>
                                                                <td align="left">
                                                                    SO2 Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    8
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl08$ID" id="rptPhanTichKhiThai_ID_7" value="785257">-->
                                                                </td>
                                                                <td align="left">
                                                                    NO2 Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    9
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl09$ID" id="rptPhanTichKhiThai_ID_8" value="785258">-->
                                                                </td>
                                                                <td align="left">
                                                                    CO Khu vực cổng bảo vệ
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    10
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl10$ID" id="rptPhanTichKhiThai_ID_9" value="785259">-->
                                                                </td>
                                                                <td align="left">
                                                                    Tiiếng ồn Khu vực xưởng sản xuất
                                                                </td>
                                                                <td align="left">
                                                                    dBA
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    11
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl11$ID" id="rptPhanTichKhiThai_ID_10" value="785260">-->
                                                                </td>
                                                                <td align="left">
                                                                    Nhiệt độ Khu vực xưởng sản xuất
                                                                </td>
                                                                <td align="left">
                                                                    Độ C
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    12
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl12$ID" id="rptPhanTichKhiThai_ID_11" value="785261">-->
                                                                </td>
                                                                <td align="left">
                                                                    Tốc độ gió Khu vực xưởng sản xuất
                                                                </td>
                                                                <td align="left">
                                                                    m/s
                                                                </td>
                                                            </tr>
                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    13
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl13$ID" id="rptPhanTichKhiThai_ID_12" value="785262">-->
                                                                </td>
                                                                <td align="left">
                                                                    Độ ẩm Khu vực xưởng sản xuất
                                                                </td>
                                                                <td align="left">
                                                                    %
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'"
                                                                style="background: rgb(255, 255, 255);">
                                                                <td align="right">
                                                                    14
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl14$ID" id="rptPhanTichKhiThai_ID_13" value="785263">-->
                                                                </td>
                                                                <td align="left">
                                                                    Ánh sáng Khu vực xưởng sản xuất
                                                                </td>
                                                                <td align="left">
                                                                    Lux
                                                                </td>
                                                            </tr>

                                                            <tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
                                                                <td align="right">
                                                                    15
                                                                    <!--<input type="hidden" name="rptPhanTichKhiThai$ctl15$ID" id="rptPhanTichKhiThai_ID_14" value="785264">-->
                                                                </td>
                                                                <td align="left">
                                                                    Bụi Khu vực xưởng sản xuất
                                                                </td>
                                                                <td align="left">
                                                                    mg/m3
                                                                </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="2">
                                                <span id="Label7">Đính kèm file kết quả phân tích khí thải: </span>
                                                <?php echo $this->Form->input('txtFileXLKT', array('div' => false, 'label' => false, 'type' => 'file', 'id' => 'txtFileXLKT', 'size' => 10)); ?>
                                                <?php 
												$get_file_in_session=$this->Session->read('file_XLKT');
												if (isset($get_file_in_session) && $get_file_in_session): ?>
                                                    <div style="color: #008000;">File đính kèm: <?php echo h($this->Session->read('file_XLKT')); ?></div>
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
                                                                <a href="javascript:doDLBaocao('6');">Cập nhật dữ liệu</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        if (isset($hientrangchatthairansinhhoat)) {
                                                            foreach ($hientrangchatthairansinhhoat as $key => $htctrsh) {
                                                                ?>
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
                                                                        <?php echo $htctrsh['ghichu']; ?>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>

                                                        <tr>
                                                            <td colspan="16" style="font-weight: bold;">
                                                                B Chất thải Công nghiệp
                                                            </td>
                                                            <td>
                                                                <a href="javascript:doDLBaocao('7');">Cập nhật dữ liệu</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        if (isset($hientrangchatthairancongnghiep)) {
                                                            foreach ($hientrangchatthairancongnghiep as $key => $htctrcn) {
                                                                ?>
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
                                                                        <?php echo $htctrcn['ghichu']; ?>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>

                                                        <tr>
                                                            <td colspan="16" style="font-weight: bold;">
                                                                C Chất thải nguy hại
                                                            </td>
                                                            <td>
                                                                <a href="javascript:doDLBaocao('8');">Cập nhật dữ liệu</a>
                                                            </td>
                                                        </tr>

                                                        <?php
                                                        if (isset($hientrangchatthairannguyhai)) {
                                                            foreach ($hientrangchatthairannguyhai as $key => $htctrnh) {
                                                                ?>
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
                                                                        <?php echo $htctrnh['ghichu']; ?>
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
                                                                    <?php echo $this->Form->input('Nguonphatsinhtiengon', array('div' => false, 'label' => false, 'type' => 'textarea', 'class' => 'form-control', 'id' => 'Nguonphatsinhtiengon')); ?>
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
                                                <span id="Label9">Đính kèm file kết quả phân tích (nếu có): </span>
                                                <?php echo $this->Form->input('txtFilePSTO', array('div' => false, 'label' => false, 'type' => 'file', 'id' => 'txtFilePSTO', 'size' => 10)); ?>
                                                <?php 
												$get_file_in_session=$this->Session->read('file_PSTO');
												if (isset($get_file_in_session) && $get_file_in_session): ?>
                                                    <div style="color: #008000;">File đính kèm: <?php echo h($this->Session->read('file_PSTO')); ?></div>
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
                                                                    <?php echo $this->Form->input('Nguonphatsinhdorung', array('div' => false, 'label' => false, 'hiddenField' => false, 'type' => 'textarea', 'class' => 'form-control', 'id' => 'Nguonphatsinhdorung')); ?>
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
                                                <span id="Label8">Đính kèm file kết quả phân tích (nếu có): </span>
                                                <?php echo $this->Form->input('txtFilePSDR', array('div' => false, 'label' => false, 'type' => 'file', 'id' => 'txtFilePSDR', 'size' => 10)); ?>
                                                <?php 
												$get_file_in_session=$this->Session->read('file_PSDR');
												if (isset($get_file_in_session) && $get_file_in_session): ?>
                                                    <div style="color: #008000;">File đính kèm: <?php echo h($this->Session->read('file_PSDR')); ?></div>
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
                                                <?php echo $this->Form->input('txtFileMTXQ1', array('div' => false, 'label' => false, 'type' => 'file', 'id' => 'txtFileMTXQ1', 'size' => 10)); ?>
                                                <?php 
												$get_file_in_session=$this->Session->read('file_MTXQ1');
												if (isset($get_file_in_session) && $get_file_in_session): ?>
                                                    <div style="color: #006600;">File đính kèm: <?php echo h($this->Session->read('file_MTXQ1')); ?></div>
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
                                                <?php echo $this->Form->input('txtFileMTXQ2', array('div' => false, 'label' => false, 'type' => 'file', 'id' => 'txtFileMTXQ2', 'size' => 10)); ?>
                                                <?php 
												$get_file_in_session=$this->Session->read('file_MTXQ2');
												if (isset($get_file_in_session) && $get_file_in_session): ?>
                                                    <div style="color: #008000;">File đính kèm: <?php echo h($this->Session->read('file_MTXQ2')); ?></div>
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
                                                <input type="submit" name="btnLuu" value="Lưu tạm"
                                                       onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions( & quot; btnLuu & quot; , & quot; & quot; , true, & quot; & quot; , & quot; & quot; , false, false))"
                                                       id="btnLuu" style="width:100px;">&nbsp;
                                                <input type="submit" name="btnHoantat" value="Nộp báo cáo"
                                                       onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions( & quot; btnHoantat & quot; , & quot; & quot; , true, & quot; & quot; , & quot; & quot; , false, false))"
                                                       id="btnHoantat" style="width:100px;">&nbsp;
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
<script type="text/javascript">

            $(function(){
            $("#txttungay").datepicker({
                numberOfMonths: 1,
                changeMonth: true,
                changeYear: true,
                showButtonPanel: true,
            });
            $("#txtdenngay").datepicker({
                  numberOfMonths: 1,
                    changeMonth: true,
                    changeYear: true,
                    showButtonPanel: true, });
            $('input[type="file"]').each(function(){
               $(this).on('change',function(){
                  var parts = $(this).val().split('.');
                  var last = parts.length - 1;
                  if(parts[last]!='doc' && parts[last]!='docx' && parts[last]!='pdf' && parts[last]!='xls' && parts[last]!='xlsx'){
                    $(this).val(null);
                    alert('Bạn chỉ có thể tải lên file Word, Excel hoặc Pdf');
                  }
               }); 
            });  
            });                 
</script>
<script type="text/javascript">
            function doDLBaocao(type) {
					var width = 800;
                    var height = 400;
                    var left = parseInt((screen.availWidth / 2) - (width / 2));
                    var top = parseInt((screen.availHeight / 2) - (height / 2));
                    var ObjectID = "<?php echo !empty($baocaogsmt_id) ? $baocaogsmt_id : ''; ?>";
                    PPwindow2 = window.open("<?php echo $this->Html->url(array('plugin' => 'admin', 'controller' => 'baocao', 'action' => 'dulieugiamsatmoitruong')); ?>" + "?type=" + type + "&baocaogsmtid=" + ObjectID, "CTNH", "width=" + width + ",height=" + height + ",toolbar=no,directories=no,status=yes, menubar=no,scrollbars=yes,resizable=yes,border=thin,left=" + left + ",top=" + top + "screenX=" + left + ",screenY=" + top + "");
                    PPwindow2.focus();
            }
</script>
<script type="text/javascript">
    function setValueTextareaBox(){
    var cnsx = $('#hidden_QuytrinhCongngheSanxuat').val();
            var xln = $('#hidden_QuytrinhCongngheXulyNuoc').val();
            var xlkt = $('#hidden_QuytrinhCongngheXulyKhithai').val();
            var psto = $('#hidden_Nguonphatsinhtiengon').val();
            var psdr = $('#hidden_Nguonphatsinhdorung').val();
            $('#QuytrinhCongngheSanxuat').text(cnsx);
            $('#QuytrinhCongngheXulyNuoc').text(xln);
            $('#QuytrinhCongngheXulyKhithai').text(xlkt);
            $('#Nguonphatsinhtiengon').text(psto);
            $('#Nguonphatsinhdorung').text(psdr);
            if ($('#QuytrinhCongngheSanxuat').text() == ''){
    $('#QuytrinhCongngheSanxuat').text(cnsx);
    }
    if ($('#QuytrinhCongngheXulyNuoc').text() == ''){
    $('#QuytrinhCongngheXulyNuoc').text(xln);
    }
    if ($('#QuytrinhCongngheXulyKhithai').text() == ''){
    $('#QuytrinhCongngheXulyKhithai').text(xlkt);
    }
    if ($('#Nguonphatsinhtiengon').text() == ''){
    $('#Nguonphatsinhtiengon').text(psto);
    }
    if ($('#Nguonphatsinhdorung').text() == ''){
    $('#Nguonphatsinhdorung').text(psdr);
    }
    }
    $(function(){

    $(window).on('beforeunload', function(){
    var values = [];
            $('input[type="text"]').each(function(){
    values.push($(this).val());
    });
            setLocalStorage('inputvalues', JSON.stringify(values));
            var editors_text = [];
            editors_text.push(tinyMCE.get('QuytrinhCongngheSanxuat').getContent());
            editors_text.push(tinyMCE.get('QuytrinhCongngheXulyNuoc').getContent());
            editors_text.push(tinyMCE.get('QuytrinhCongngheXulyKhithai').getContent());
            editors_text.push(tinyMCE.get('Nguonphatsinhtiengon').getContent());
            editors_text.push(tinyMCE.get('Nguonphatsinhdorung').getContent());
            setLocalStorage('editors_text', JSON.stringify(editors_text));
    });
            var inputvalues = getLocalStorage('inputvalues');
            if (inputvalues){
    var arr = JSON.parse(inputvalues);
            var i = 0;
            $('input[type="text"]').each(function(){
    $(this).val(arr[i]);
            ++i;
    });
    }
    var editors_text = getLocalStorage('editors_text');
            if (editors_text){
    var text_arr = JSON.parse(editors_text);
            if (text_arr[0]){
    $('#hidden_QuytrinhCongngheSanxuat').val(text_arr[0]);
    }
    if (text_arr[1]){
    $('#hidden_QuytrinhCongngheXulyNuoc').val(text_arr[1]);
    }
    if (text_arr[2]){
    $('#hidden_QuytrinhCongngheXulyKhithai').val(text_arr[2]);
    }
    if (text_arr[3]){
    $('#hidden_Nguonphatsinhtiengon').val(text_arr[3]);
    }
    if (text_arr[4]){
    $('#hidden_Nguonphatsinhdorung').val(text_arr[4]);
    }
    setValueTextareaBox();
    }

    });

</script>
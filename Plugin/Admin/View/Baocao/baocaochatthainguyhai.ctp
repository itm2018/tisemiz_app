<?php echo $this->Html->css(array('baocaonguyhaistyle'), array('inline' => false)); ?>
<div style="width: 800px; margin: 0 auto; padding: 2px;">
<?php echo $this->Form->create('DoanhNghiep', array('method' => 'post', 'novalidate' => 'novalidate', 'class' => 'form-horizontal', 'role' => 'form')); ?>
    <table id="table9" cellspacing="0" cellpadding="0" width="780px" border="0">
        <tbody>
            <tr>
                <td>
                    <div id="nav_header">
                        <h3>
                            Cập nhật thông tin đăng ký chủ nguồn thải</h3>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="border: solid 1px #2c8337; width: 780px;" id="navmain_bghead">
                    <table id="table3" cellspacing="0" cellpadding="0" width="750px" border="0" style="margin: 5px 5px 5px 5px;" align="center">
                        <tbody><tr>
                                <td>
                                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step1') ?>">
                                        <img id="Image3" src="/img/b1_actv_cnt.gif" alt="" border="0"></a>
                                </td>
                                <td align="center">
                                    <img id="Image4" src="/img/tab_arrow.gif" alt="" border="0">
                                </td>
                                <td>
                                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step2') ?>">
                                        <img id="Image5" src="/img/b2_dactv_cnt.gif" alt="" border="0"></a>
                                </td>
                                <td align="center">
                                    <img id="Image6" src="/img/tab_arrow.gif" alt="" border="0">
                                </td>
                                <td>
                                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step3') ?>">
                                        <img id="Image7" src="/img/b3_dactv_cnt.gif" alt="" border="0"></a>
                                </td>
                                <td align="center">
                                    <img id="Img2" src="/img/tab_arrow.gif" alt="" border="0">
                                </td>

                                <td>
                                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step4') ?>">
                                        <img id="Img5" src="/img/b5_dactv_cnt.gif" alt="" border="0"></a>
                                </td>
                                <td align="center">
                                    <img id="Img6" src="/img/tab_arrow.gif" alt="" border="0">
                                </td>
                                <td>
                                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step5') ?>">
                                        <img id="Img7" src="/img/b6_xt_hid.gif" alt="" border="0"></a>
                                </td>
                            </tr>
                        </tbody></table>
                    <table align="left" class="lstview" style="padding: 0; margin: 0; border: none; border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                                <td colspan="2" align="left">
<?php
echo $this->Form->hidden('colMa');
echo $this->Form->hidden('colMaDNME');
?>
                                    <div id="divDN" style="display: inline">
                                        <table class="lstview" align="left" border="0" cellpadding="0" cellspacing="0">
                                            <tbody><tr>
                                                    <td colspan="3" valign="bottom" style="height: 15px; text-align: left; padding-left: 10px;">
                                                        <img id="Image19" src="/img/ct2.gif" alt="" border="0">
                                                        <span style="font-size: 11pt; color: gray; font-family: Arial"><strong><span style="font-size: 10pt;
                                                                                                                                     color: #000;">THÔNG TIN DOANH NGHIỆP</span> </strong></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        * Tên doanh nghiệp
                                                    </th>
                                                    <td align="left" colspan="2">
<?php
echo $this->Form->input('colTen', array('type' => 'text',
    'div' => array('class' => 'col-sm-6'), 'label' => false, 'style' => 'width:550px;'));
?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Mã số QLCTNH
                                                    </th>
                                                    <td align="left" colspan="2">
                                                        <span>
<?php
echo $this->Form->input('colMaQLCTNH', array('type' => 'text',
    'div' => array('class' => 'col-sm-6'), 'label' => false, 'style' => 'width:550px;'));
?>
                                                            (trường hợp cấp lại)</span> <span></span><span>
                                                        </span><br>
                                                        <span><font color="red">
                                                            <span id="lblMesConfirm"></span></font></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        *Địa chỉ văn phòng/trụ sở chính
                                                    </th>
                                                    <td align="left" colspan="2">
<?php
echo $this->Form->input('colDiaChi', array('type' => 'text', 'class' => '',
    'div' => array('class' => 'col-sm-6'), 'label' => false, 'style' => 'width:550px;'));
?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="bold">
                                                        Loại hình (ngành nghề) hoạt động
                                                    </th>
                                                    <td align="left">
<?php
echo $this->Form->input('nganh', array(
//            'class' => 'form-control multiselect',
//    'multiple' => 'multiple',
    'div' => array('class' => 'col-sm-6'), 'label' => false,
    'style' => 'display: none',
    'id' => 'nganh-all',
    'options' => Common::getListNganh()));
?>
                                                        <div class="btn-group">
                                                        <?php echo $this->Html->script('/assets/js/bootstrap-multiselect'); ?>
                                                            <script type="text/javascript">
                                                                $(document).ready(function() {
                                                                    $("#nganh-all").multiselect({includeSelectAllOption: !0, buttonClass: "btn btn-primary"});
                                                                });</script>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        *Điện thoại
                                                    </th>
                                                    <td align="left" colspan="2">
                                                        <span>
<?php
echo $this->Form->input('colDienThoai', array('type' => 'tel',
    'div' => array('style' => 'width: 100px; float: left;'), 'label' => false, 'style' => 'width:95px;'));
?>
                                                        </span>

                                                        <span style="color: Black; padding: 5px 5px 0px 30px; font-weight: bold; float: left;">Fax</span>
<?php
echo $this->Form->input('colFax', array('type' => 'tel',
    'div' => array('style' => 'width: 150px; float: left;'), 'label' => false, 'style' => 'width:150px;'));
?>
                                                        <span style="color: Black; padding-left: 25px; font-weight: bold; float: left;">*Email &nbsp;</span>
                                                        <span>
<?php
echo $this->Form->input('colEmail', array('type' => 'email',
    'div' => array('style' => 'width: 150px; float: left;'), 'label' => false, 'style' => 'width:150px;'));
?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        * Tài khoản số
                                                    </th>
                                                    <td align="left" colspan="2">
<?php
echo $this->Form->input('colSoTKhoan', array('type' => 'text',
    'div' => array('style' => 'width: 160px; float: left;'), 'label' => false, 'style' => 'width:160px;'));
?>
                                                        <span style="color: Black; padding-left: 15px; font-weight: bold; float: left;">* Tại &nbsp;</span>
                                                        <?php
                                                        echo $this->Form->input('colTKMoTaiNH', array('type' => 'text',
                                                            'div' => array('style' => 'width: 330px; float: left;'), 'label' => false, 'style' => 'width:330px;'));
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        *Tên người liên hệ
                                                    </th>
                                                    <td colspan="2">
                                                        <span>
<?php
echo $this->Form->input('nguoiphutrachmt', array('type' => 'text',
    'div' => array('style' => 'width: 160px; float: left;'), 'label' => false, 'style' => 'width:160px;'));
?>
                                                            <span style="color: Black; padding-left: 15px; font-weight: bold; float: left;">* Người đại diện pháp luật &nbsp;</span>
                                                            <?php
                                                            echo $this->Form->input('giamdoc', array('type' => 'text',
                                                                'div' => array('style' => 'width: 215px; float: left;'), 'label' => false, 'style' => 'width:215px;'));
                                                            ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        *Số ĐT của người đại diện pháp luật
                                                    </th>
                                                    <td align="left" colspan="2">
<?php
echo $this->Form->input('dienthoaigiamdoc', array('type' => 'tel',
    'div' => array('style' => 'width: 160px; float: left;'), 'label' => false, 'style' => 'width:160px;'));
?>
                                                        <span style="color: Black; padding-left: 15px; padding-right: 46px; font-weight: bold; float: left;">
                                                            Địa danh đăng ký</span><span>
<?php
echo $this->Form->input('diadanhdangky', array('type' => 'tel',
    'div' => array('style' => 'width: 215px; float: left;'), 'label' => false, 'style' => 'width:215px;'));
?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="3" style="text-align: left; padding-left: 30px;">
                                                        <span>
<?php echo $this->Form->checkbox('lacanhan', array('id' => 'chbxlacanhan')); ?>
                                                        </span>
                                                        <span id="lblmesDN">(click vào đây nếu là cá nhân)</span>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                        <table id="tdShowHide2" class="lstview" align="left" style="padding: 0;
                                               margin: 0; border: none; border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                                            <tbody><tr>
                                                    <th style="padding-right: 10px; white-space: normal; width: 185px;">
                                                        * Giấy chứng nhận ĐKKD/ Giấy chứng nhận đầu tư
                                                    </th>
                                                    <td align="left">
<?php
echo $this->Form->input('colGiayPhepKD', array('type' => 'text',
    'div' => array('style' => 'width: 160px; float: left;'), 'label' => false, 'style' => 'width:160px;'));
?>
                                                        <span style="color: Black; padding-left: 25px; font-weight: bold; float: left;">Ngày cấp &nbsp;</span>
                                                        <?php
                                                        echo $this->Form->input('ngaycapchungnhanKDDT', array('type' => 'text',
                                                            'div' => array('style' => 'width: 75px; float: left;'), 'label' => false, 'style' => 'width:75px;', 'id' => 'txtngaycapchungnhanKDDT'));
                                                        ?>
                                                    </span><span style="padding-left: 23px; float: left;">Nơi cấp &nbsp;</span> 
                                                        <?php
                                                        echo $this->Form->input('noicapchungnhanKDDT', array('type' => 'text',
                                                            'div' => array('style' => 'width: 125px; float: left;'), 'label' => false, 'style' => 'width:125px;'));
                                                        ?>
                                            </td>
                                        </tr>
                                    </tbody></table>

                                <table id="tdShowHide1" class="lstview" align="left" style="padding: 0;
                                       margin: 0; display: none; border: none; border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                            <th>
                                                CMTND số
                                            </th>
                                            <td align="left">
<?php
echo $this->Form->input('cmndgiamdoc', array('type' => 'text',
    'div' => array('style' => 'width: 150px; float: left;'), 'label' => false, 'style' => 'width:150px;'));
?>
                                                <span style="color: Black; padding-left: 30px; font-weight: bold; float: left;">Ngày cấp &nbsp;</span>
                                                <?php
                                                echo $this->Form->input('ngaycapcmndgiamdoc', array('type' => 'text',
                                                    'div' => array('style' => 'width: 100px; float: left;'), 'label' => false, 'style' => 'width:100px;'));
                                                ?>
                                                <span style="color: Black; padding-left: 23px; font-weight: bold; float: left;">Nơi cấp &nbsp;</span>
                                                <span>
<?php
echo $this->Form->input('noicapcmndgiamdoc', array('type' => 'text',
    'div' => array('style' => 'width: 100px; float: left;'), 'label' => false, 'style' => 'width:100px;'));
?>
                                            </td>
                                        </tr>
                                    </tbody></table>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" valign="bottom" style="height: 15px; text-align: left; padding-left: 10px;">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tbody><tr>
                                        <td style="width: 400px">
                                            <img id="Img8" src="/img/ct2.gif" alt="" border="0">
                                            <span style="font-size: 11pt; color: gray; font-family: Arial"><strong><span style="font-size: 10pt;
                                                                                                                         color: #000;">THÔNG TIN VỀ CƠ SỞ PHÁT SINH CTNH</span> </strong></span>
                                            &nbsp;
                                            <!--<input id="ChkDN" type="checkbox" name="ChkDN" onclick="javascript:;">-->
<?php echo $this->Form->checkbox('checkDN', array('id' => 'checkDN')) ?>
                                            Tại trụ sở chính
                                        </td>
                                    </tr>
                                </tbody></table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table id="tblDanhSachCoSo" cellpadding="0" cellspacing="0" border="0" width="100%">
                            </table>

                        </td>
                    </tr>
                    <!-- copy tru so chinh-->
                    <tr>
                        <td class="bold">
                            * Tên cơ sở
                        </td>
                        <td align="left" style="width: 600px">
                            <!--<input name="txtTenCS" type="text" maxlength="200" id="txtTenCS" style="width:610px;">-->
<?php echo $this->Form->input('DoanhNghiep.CoSo.colTen', array('label' => false, 'type' => 'text', 'maxLength' => 200, 'style' => 'width: 610px;', 'id' => 'txtTenCS')) ?>
                        </td>
                    </tr>
                    <tr>
                        <td class="bold">
                            *Địa chỉ
                        </td>
                        <td align="left">
                            <div>
<?php echo $this->Form->input('DoanhNghiep.CoSo.colDiaChi', array('label' => false, 'type' => 'text', 'maxLength' => 200, 'style' => 'width: 610px;', 'id' => 'txtDiaChiCS')) ?>
                                <tr>
                                    <td class="bold">
                                        Loại hình (ngành nghề) hoạt động
                                    </td>
                                    <td align="left">
                                        <table cellpadding="0" cellspacing="0">
                                            <tbody><tr>
                                                    <td>
                                                        <span id="spnNganhExP">
<?php
echo $this->Form->input('DoanhNghiep.CoSo.nganh', array(
//            'class' => 'form-control multiselect',
//    'multiple' => 'multiple',
    'div' => array('class' => 'col-sm-6'), 'label' => false,
//            'style' => 'display: none',
    'id' => 'nganh-all-CS',
    'options' => Common::getListNganh()));
?>

                                                        </span><span id="spnNganhInP"></span>
                                                    </td>
                                                    <td>
                                                        <div id="div_nganhkhac" style="display: none;">

                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bold">
                                        *Điện thoại
                                    </td>
                                    <td align="left">
                                        <div>
<!--                                            <span>
                                                <input name="txtDienThoaiCS" type="text" maxlength="15" id="txtDienThoaiCS" style="width:150px;"></span>-->
<?php echo $this->Form->input('DoanhNghiep.CoSo.colDienThoai', array('div' => false, 'label' => false, 'type' => 'text', 'maxLength' => 15, 'style' => 'width: 150px;', 'id' => 'txtDienThoaiCS')) ?>
                                            <span style="color: Black; padding: 5px 5px 0px 30px; font-weight: bold;">Fax</span>
<!--                                            <span>
                                                <input name="txtFaxCS" type="text" maxlength="15" id="txtFaxCS" style="width:150px;"></span>-->
<?php echo $this->Form->input('DoanhNghiep.CoSo.colFax', array('div' => false, 'label' => false, 'type' => 'text', 'maxLength' => 15, 'style' => 'width: 150px;', 'id' => 'txtFaxCS')) ?>
                                            <span style="color: Black; padding-left: 25px; font-weight: bold;">*Email</span>
<!--                                            <span>
                                                <input name="txtEmailCS" type="text" maxlength="100" id="txtEmailCS" style="width:175px;"></span>-->
<?php echo $this->Form->input('DoanhNghiep.CoSo.colEmail', array('div' => false, 'label' => false, 'type' => 'text', 'maxLength' => 100, 'style' => 'width: 175px;', 'id' => 'txtEmailCS')) ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="left" style="border-collapse: collapse; border: none; padding-top: 0;
                                        padding-bottom: 0;">
                                        <table id="Table1" class="lstview" align="left" style="padding: 0;
                                               margin: 0; border: none; border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                                            <tbody><tr>
                                                    <th>
                                                        Giấy ĐKKD số
                                                    </th>
                                                    <td align="left">
<!--                                                        <span>
                                                            <input name="txtDKKD_CS" type="text" maxlength="15" id="txtDKKD_CS" style="width:150px;"></span>-->
<?php echo $this->Form->input('DoanhNghiep.CoSo.colGiayPhepKD', array('div' => false, 'label' => false, 'type' => 'text', 'maxLength' => 15, 'style' => 'width: 150px;', 'id' => 'txtGiayPhepKD_CS')) ?>
                                                        <span style="color: Black; padding-left: 30px; font-weight: bold;">Ngày cấp</span>
<!--                                                        <span>
                                                            <input name="txtNgayCapDKKD_CS" type="text" value="" id="txtNgayCapDKKD_CS" calendar="" format="dd/mm/yyyy" dir="ltr" autocomplete="off"  invaliddatemessage="Bạn nhập sai kiểu ngày hãy nhập ngày theo kiêu (dd/mm/yyyy) ví dụ: 31/8/2005!." style="width:100px;">-->
<?php echo $this->Form->input('DoanhNghiep.CoSo.ngaycapchungnhanKDDT', array('div' => false, 'label' => false, 'type' => 'text', 'maxLength' => 15, 'style' => 'width: 100px;', 'id' => 'txtNgayCapDKKD_CS')) ?>
                                                        </span>
                                                        <span style="padding-left: 23px;">Nơi cấp</span> 
<!--                                                        <span>
                                                            <input name="txtNoiCapDKKD_CS" type="text" id="txtNoiCapDKKD_CS" style="width:175px;"></span>-->
<?php echo $this->Form->input('DoanhNghiep.CoSo.noicapchungnhanKDDT', array('div' => false, 'label' => false, 'type' => 'text', 'maxLength' => 15, 'style' => 'width: 175px;', 'id' => 'txtNoiCapDKKD_CS')) ?>
                                                    </td>
                                                </tr>
                                            </tbody></table>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="bold">
                                        Mã số QLCTNH
                                    </td>
                                    <td align="left">
<!--                                        <span>
                                            <input name="txtMaSoQLCTNH" type="text" maxlength="50" id="txtMaSoQLCTNH" style="width:200px;"></span>-->
<?php echo $this->Form->input('DoanhNghiep.CoSo.colMaQLCTNH', array('div' => false, 'label' => false, 'type' => 'text', 'maxLength' => 15, 'style' => 'width: 200px;', 'id' => 'txtMaSoQLCTNH_CS')) ?>
                                        <span style="font-family: Arial Verdana Sans-Serif; font-size: 11px; font-style: italic;
                                              color: #000;">&nbsp; (nếu có)</span> &nbsp; &nbsp; &nbsp; &nbsp;
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        Tọa độ GPS (nếu có)
                                    </th>
                                    <td align="left">
                                        <span>Tọa độ X</span> 
<!--                                        <span>
                                            <input name="txtgpsX" type="text" value="0" maxlength="50" id="txtgpsX" style="width:50px;"></span>-->
<?php echo $this->Form->input('DoanhNghiep.CoSo.colX', array('div' => false, 'label' => false, 'type' => 'text', 'maxLength' => 50, 'style' => 'width: 50px;', 'id' => 'txtgpsX')) ?>
                                        <span>Tọa độ Y</span> 
<!--                                        <span>
                                            <input name="txtgpsY" type="text" value="0" maxlength="50" id="txtgpsY" style="width:50px;"></span>-->
<?php echo $this->Form->input('DoanhNghiep.CoSo.colY', array('div' => false, 'label' => false, 'type' => 'text', 'maxLength' => 50, 'style' => 'width: 50px;', 'id' => 'txtgpsY')) ?>
                                    </td>
                                </tr>
                                <!-- end copy tru so chinh-->
                                <tr>
                                    <td colspan="3">
                                        <table id="tblDanhSachCoSo" cellpadding="0" cellspacing="0" border="0" width="100%">
                                            <tbody>
<?php $i = 1; ?>
                                                <?php foreach ($this->data['Children'] as $doanhnghiep_con): ?>
                                                    <tr>
                                                        <td><table cellpadding="0" cellspacing="0" border="0" class="grid" width="100%" style="border-color:#ccc;margin-left:5px;margin-top:5px;"><tbody><tr><th colspan="3" style="text-align:left;"><input type="hidden" id="hidCoso<?php echo $i; ?>" name="hidCoso<?php echo $i; ?>" value="<?php echo h($doanhnghiep_con['colMa']); ?>"><input type="radio" id="rdCoso<?php echo $i; ?>" name="rdCoSo" value="<?php echo h($doanhnghiep_con['colMa']); ?>">cơ sở <?php echo $i; ?>. (<?php echo h($doanhnghiep_con['colTen']); ?>)</th></tr><tr><td colspan="3"> Tên cơ sở: <?php echo h($doanhnghiep_con['colTen']); ?></td></tr><tr><td colspan="3">Địa chỉ: <?php echo h($doanhnghiep_con['colDiaChi']); ?></td></tr><tr><td colspan="3"> Loại hình (ngành nghề) hoạt động: <?php echo Common::getTenNganh($doanhnghiep_con['colMaNganh1']) ?></td></tr><tr><td> Điện thoại: <?php echo h($doanhnghiep_con['colDienThoai']); ?></td><td> Fax: <?php echo h($doanhnghiep_con['colFax']); ?></td><td> Email: <?php echo h($doanhnghiep_con['colEmail']); ?></td></tr><tr><td> Giấy đăng ký kinh doanh (nếu có) số: <?php echo h($doanhnghiep_con['colGiayPhepKD']) ?></td><td> Ngày cấp: <?php echo ($doanhnghiep_con['ngaycapchungnhanKDDT']) ? date('d/m/Y', strtotime($doanhnghiep_con['ngaycapchungnhanKDDT'])) : ''; ?></td><td> Nơi cấp: <?php echo h($doanhnghiep_con['noicapchungnhanKDDT']) ?></td></tr></tbody></table></td>
                                                    </tr>
    <?php ++$i; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                </tbody></table>
            <table border="0" cellpadding="0" cellspacing="0">
                <tbody><tr>
                        <td align="center" width="100%" colspan="6" height="40">
                            &nbsp;
<?php echo $this->Form->submit('Cập nhật', array('div' => array('class' => 'col-sm-10'), 'label' => false, 'id' => 'cmdTieptuc', 'class' => 'btn btn-primary')); ?>
                        </td>


                        <td>
<?php echo $this->Form->button('Thêm Cơ sở', array('type' => 'button', 'class' => 'btn btn-success', 'id' => 'btn-them-coso')) ?>
                        </td>
                        <td>
<?php echo $this->Form->button('Sửa Cơ sở', array('type' => 'button', 'class' => 'btn btn-info', 'id' => 'btn-sua-coso')) ?>
                        </td>
                        <td>
<?php echo $this->Form->button('Xóa Cơ sở', array('type' => 'button', 'class' => 'btn btn-danger', 'id' => 'btn-xoa-coso')) ?>
                    </tr>
                </tbody></table>
            <table border="0" cellpadding="0" cellspacing="0">
                <tbody><tr>
                        <td align="left" colspan="6" height="30">
                            <img id="Image22" src="/img/nutcate.gif" alt="" border="0"><span class="text_note_b">CHÚ
                                Ý</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" colspan="6">
                            <span class="text_titlenote">1. </span><span class="text_note">Nhập liệu bằng tiếng
                                việt Unicode.</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" colspan="6">
                            <span class="text_titlenote">2. </span><span class="text_note">Quý doanh nghiệp hãy
                                nhập những thông tin yêu cầu đúng theo mẫu sổ đăng ký hoặc giấy phép hành nghề đã
                                được cơ quan quản lý cấp.</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" colspan="6" style="height: 17px">
                            <span class="text_titlenote">3. </span><span class="text_note">Những trường đánh dấu
                                (*) là bắt buộc phải nhập.</span>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" colspan="6">
                            <span class="text_titlenote">4. </span><span class="text_note">Sau khi điền đầy đủ các
                                thông tin qúy doanh nghiệp nhấn nút cập nhật và chuyển sang bước 2 (Dữ liệu sản
                                xuất).</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
</tbody>
</table>
<?php echo $this->Form->end(); ?>
</div>
<script type="text/javascript">
    $(function() {
        $('#txtngaycapchungnhanKDDT').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
        });
        $('#DoanhNghiepNgaycapcmndgiamdoc').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
        });
        $('#txtNgayCapDKKD_CS').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
        });

        $('#chbxlacanhan').bind('change', function() {
            showHideDNCN();
        });
        $('#chbxlacanhan').trigger("change");
        $('#btn-them-coso').bind('click', function() {
            PopUpCoSo(10);
        });
        $('#btn-sua-coso').bind('click', function() {
            var coso = $('input[name="rdCoSo"]:checked').val();
            if (!coso) {
                alert('Xin chọn cơ sở để cập nhật thông tin');
                return false;
            }
            PopUpUpdate(11, coso);
        });
        $('#btn-xoa-coso').bind('click', function() {
            var coso = $('input[name="rdCoSo"]:checked').val();
            if (!coso) {
                alert('Xin chọn cơ sở để xóa');
                return false;
            }
            if (confirm('Bạn muốn xóa cơ sở này')) {
                var url = "<?php echo Router::url('/admin/doanhnghiep/xoacoso'); ?>";
                var data = {id_dn: coso, token: '<?php echo $this->params['_Token']['key']; ?>'};
                doPostAjax(url, data);
            }
            return false;
        });
        $('#DoanhNghiepBaocaochatthainguyhaiForm').on('submit', function() {
            if ($('.btn-group ul li.active').length > 6) {
                alert('Chỉ chọn tối đa 6 ngành');
                return false;
            }
        });
        $('#checkDN').on('change', function() {
            if ($(this).prop('checked')) {
                copydata();
            } else {
                resetdata();
            }
        });
    });
    function copydata() {
        $('#txtTenCS').val($('#DoanhNghiepColTen').val());
        $('#txtDiaChiCS').val($('#DoanhNghiepColDiaChi').val());
        $('#nganh-all-CS').val($('#nganh-all').val());
        $('#txtDienThoaiCS').val($('#DoanhNghiepColDienThoai').val());
        $('#txtFaxCS').val($('#DoanhNghiepColFax').val());
        $('#txtEmailCS').val($('#DoanhNghiepColEmail').val());
        $('#txtGiayPhepKD_CS').val($('#DoanhNghiepColGiayPhepKD').val());
        $('#txtNgayCapDKKD_CS').val($('#DoanhNghiepNgaycapcmndgiamdoc').val());
        $('#txtNoiCapDKKD_CS').val($('#DoanhNghiepNoicapchungnhanKDDT').val());
        $('#txtMaSoQLCTNH_CS').val($('#DoanhNghiepColMaQLCTNH').val());
    }
    function resetdata(){
        $('#txtTenCS').val('');
        $('#txtDiaChiCS').val('');
        $('#nganh-all-CS').val('');
        $('#txtDienThoaiCS').val('');
        $('#txtFaxCS').val('');
        $('#txtEmailCS').val('');
        $('#txtGiayPhepKD_CS').val('');
        $('#txtNgayCapDKKD_CS').val('');
        $('#txtNoiCapDKKD_CS').val('');
        $('#txtMaSoQLCTNH_CS').val('');
    }
    function showHideDNCN() {
        $('#tdShowHide2').toggle(!$('#chbxlacanhan').prop('checked'));
        $('#tdShowHide1').toggle($('#chbxlacanhan').prop('checked'));
    }
    function PopUpCoSo(type) {
        var width = 800;
        var height = 400;
        var left = parseInt((screen.availWidth / 2) - (width / 2));
        var top = parseInt((screen.availHeight / 2) - (height / 2));
        var madn = parseInt($('#DoanhNghiepColMa').val());
        var PPwindow2 = window.open("<?php echo Router::url('/admin/commonfunction/chucnang/type/'); ?>" + type + '/id_dn/' + madn, "_blank", "width=" + width + ",height=" + height + ",toolbar=no,directories=no,status=yes, menubar=no,scrollbars=yes,resizable=yes,border=thin,left=" + left + ",top=" + top + "screenX=" + left + ",screenY=" + top + "");
        PPwindow2.focus();
    }
    
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>
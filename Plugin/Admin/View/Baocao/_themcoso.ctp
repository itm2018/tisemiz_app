<?php

echo $this->Html->css(array('baocaonguyhaistyle'),array('inline'=>false))?>
  <?php echo $this->Form->create('DoanhNghiep', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')); ?>
<?php echo $this->Form->hidden('colMa');?>
<?php echo $this->Form->hidden('colMaDNME');?>
<table id="table9" cellspacing="0" cellpadding="0" width="780px" border="0">
    <tbody><tr>
            <td>
                <div id="nav_header">
                    <h3>
                        Cập nhật thông tin đăng ký Cơ sở</h3>
                </div>
            </td>
        </tr>
        <tr>
            <td style="border: solid 1px #2c8337; width: 780px;" id="navmain_bghead">
                <table id="table10" cellspacing="0" cellpadding="0" width="100%" border="0">
                    <tbody><tr>
                            <td valign="top" style="width: 780px">
                                <table id="table11" cellspacing="0" cellpadding="0" width="100%" border="0">
                                    <tbody><tr>
                                            <td align="right" style="height: 1px; text-align: left;">
                                                <span id="lblmsg" style="color:#FF0033;font-weight:normal;"></span>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                <table align="left" class="lstview" style="padding: 0; margin: 0; border: none; border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                            <td colspan="2" valign="bottom" style="height: 15px; text-align: left; padding-left: 10px;">
                                                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                                    <tbody><tr>
                                                            <td style="width: 400px">
                                                                <img id="Img8" src="/img/ct2.gif" alt="" border="0">
                                                                <span style="font-size: 11pt; color: black; font-family: Arial"><strong><span style="font-size: 10pt;">THÔNG TIN VỀ CƠ SỞ PHÁT SINH CTNH</span> </strong></span>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="bold">
                                                * Tên cơ sở
                                            </td>
                                            <td align="left" style="width: 600px">
                                                <div class="form-group">    
                                                <?php
                                                    echo $this->Form->input('colTen', array('type' => 'text',
                                                        'div' => array('class' => 'col-sm-6'), 'label' => false, 'style' => 'width:610px;'));
                                                    ?>
                                                </div>
                                        </tr>
                                        <tr>
                                            <td class="bold">
                                                *Địa chỉ
                                            </td>
                                            <td align="left">
                                                <div>
                                                    <span>
                                                         <?php
                                                    echo $this->Form->input('colDiaChi', array('type' => 'text', 'class' => '',
                                                        'div' => array('class' => 'col-sm-6'), 'label' => false, 'style' => 'width:610px;'));
                                                    ?>
                                                        <!--<input name="txtDiaChiCS" type="text" maxlength="100" id="txtDiaChiCS" style="width:610px;"></span>-->
<!--                                                        <span style="color: Black; padding-left: 60px; font-weight: bold;">*Tỉnh/TP</span>
                                                    <span>
                                                        <select name="drpTinhCS" onchange="javascript:setTimeout('__doPostBack(\'drpTinhCS\',\'\')', 0)" id="drpTinhCS" style="width:250px;">
                                                            <option selected="selected" value="54479">An Giang</option>
                                                            <option value="54463">Bà Rịa - Vũng Tàu</option>
                                                            <option value="54393">Bắc Giang</option>
                                                            <option value="54371">Bắc Kạn</option>
                                                            <option value="54489">Bạc Liêu</option>
                                                            <option value="54399">Bắc Ninh</option>
                                                            <option value="54471">Bến Tre</option>
                                                            <option value="54435">Bình Định</option>
                                                            <option value="54459">Bình Dương</option>
                                                            <option value="54455">Bình Phước</option>
                                                            <option value="54443">Bình Thuận</option>
                                                            <option value="54491">Cà Mau</option>
                                                            <option value="54483">Cần Thơ</option>
                                                            <option value="54369">Cao Bằng</option>
                                                            <option value="54449">Đăk Lăk</option>
                                                            <option value="54451">Đăk Nông</option>
                                                            <option value="54377">Điện Biên</option>
                                                            <option value="54461">Đồng Nai</option>
                                                            <option value="54477">Đồng Tháp</option>
                                                            <option value="54447">Gia Lai</option>
                                                            <option value="54367">Hà Giang</option>
                                                            <option value="54411">Hà Nam</option>
                                                            <option value="54365">Hà Nội</option>
                                                            <option value="54421">Hà Tĩnh</option>
                                                            <option value="54403">Hải Dương</option>
                                                            <option value="54405">Hải Phòng</option>
                                                            <option value="54485">Hậu Giang</option>
                                                            <option value="54385">Hoà Bình</option>
                                                            <option value="54407">Hưng Yên</option>
                                                            <option value="54439">Khánh Hoà</option>
                                                            <option value="54481">Kiên Giang</option>
                                                            <option value="54445">Kon Tum</option>
                                                            <option value="54379">Lai Châu</option>
                                                            <option value="54453">Lâm Đồng</option>
                                                            <option value="54389">Lạng Sơn</option>
                                                            <option value="54375">Lào Cai</option>
                                                            <option value="54467">Long An</option>
                                                            <option value="54413">Nam Định</option>
                                                            <option value="54419">Nghệ An</option>
                                                            <option value="54415">Ninh Bình</option>
                                                            <option value="54441">Ninh Thuận</option>
                                                            <option value="54395">Phú Thọ</option>
                                                            <option value="54437">Phú Yên</option>
                                                            <option value="54423">Quảng Bình</option>
                                                            <option value="54431">Quảng Nam</option>
                                                            <option value="54433">Quảng Ngãi</option>
                                                            <option value="54391">Quảng Ninh</option>
                                                            <option value="54425">Quảng Trị</option>
                                                            <option value="54487">Sóc Trăng</option>
                                                            <option value="54381">Sơn La</option>
                                                            <option value="54457">Tây Ninh</option>
                                                            <option value="54409">Thái Bình</option>
                                                            <option value="54387">Thái Nguyên</option>
                                                            <option value="54417">Thanh Hoá</option>
                                                            <option value="54427">Thừa Thiên Huế</option>
                                                            <option value="54469">Tiền Giang</option>
                                                            <option value="54429">TP Đà Nẵng</option>
                                                            <option value="54465">TP Hồ Chí Minh</option>
                                                            <option value="54473">Trà Vinh</option>
                                                            <option value="54373">Tuyên Quang</option>
                                                            <option value="54475">Vĩnh Long</option>
                                                            <option value="54397">Vĩnh Phúc</option>
                                                            <option value="54383">Yên Bái</option>

                                                        </select>
                                                    </span>-->
                                                </div>
                                            </td>
                                        </tr>
<!--                                            <tr>
                                            <td class="bold">
                                                *Quận/Huyện
                                            </td>
                                            <td align="left">
                                                <div>
                                                    <span>
                                                        <select name="drpQuanHuyenCS" onchange="javascript:setTimeout('__doPostBack(\'drpQuanHuyenCS\',\'\')', 0)" id="drpQuanHuyenCS" style="width:250px;">
                                                            <option selected="selected" value="54691">Huyện An Phú</option>
                                                            <option value="54694">Huyện Châu Phú</option>
                                                            <option value="54697">Huyện Châu Thành</option>
                                                            <option value="54698">Huyện Chợ Mới</option>
                                                            <option value="54693">Huyện Phú Tân</option>
                                                            <option value="54692">Huyện Tân Châu</option>
                                                            <option value="54699">Huyện Thoại Sơn</option>
                                                            <option value="54695">Huyện Tịnh Biên</option>
                                                            <option value="54696">Huyện Tri Tôn</option>
                                                            <option value="54689">Thành phố Long Xuyên</option>
                                                            <option value="54690">Thị xã Châu Đốc</option>

                                                        </select>
                                                    </span><span style="color: Black; padding-left: 45px; font-weight: bold;">*Phường/Xã</span>
                                                    <span>
                                                        <select name="drpPhuongXaCS" id="drpPhuongXaCS" style="width:250px;">
                                                            <option value="65271">Thị trấn An Phú</option>
                                                            <option value="65283">Xã Đa Phước</option>
                                                            <option value="65272">Xã Khánh An</option>
                                                            <option value="65273">Xã Khánh Bình</option>
                                                            <option value="65275">Xã Nhơn Hội</option>
                                                            <option value="65277">Xã Phú Hội</option>
                                                            <option value="65276">Xã Phú Hữu</option>
                                                            <option value="65278">Xã Phước Hưng</option>
                                                            <option value="65274">Xã Quốc Thái</option>
                                                            <option value="65280">Xã Vĩnh Hậu</option>
                                                            <option value="65282">Xã Vĩnh Hội Đông</option>
                                                            <option value="65279">Xã Vĩnh Lộc</option>
                                                            <option value="65281">Xã Vĩnh Trường</option>

                                                        </select>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>-->
                                        <tr>
                                            <td class="bold">
                                                Loại hình (ngành nghề) hoạt động
                                            </td>
                                            <td align="left">
                                                <table cellpadding="0" cellspacing="0">
                                                    <tbody><tr>
                                                            <td>
                                                                <?php
        echo $this->Form->input('colMaNganh1', array(
//            'class' => 'form-control multiselect',
//            'multiple' => 'multiple',
            'div' => array('class'=>'col-sm-6'), 'label' => false, 
//            'style' => 'display: none',
            'id' => 'nganh-all',
            'options' => Common::getListNganh()));
        ?>

                                                            </td>
                                                            <td>
                                                                <div id="div_nganhkhac">

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
                                                    <span>
                                                         <?php
                                                        echo $this->Form->input('colDienThoai', array('type' => 'tel',
                                                            'div' => array('style' => 'width: 100px; float: left;'), 'label' => false, 'style' => 'width:95px;'));
                                                        ?>
                                                    </span>
                                                    <span style="color: Black; padding: 5px 5px 0px 30px; font-weight: bold; float: left;">Fax</span>
                                                    <span>
                                                     <?php
                                                    echo $this->Form->input('colFax', array('type' => 'tel',
                                                        'div' => array('style' => 'width: 150px; float: left;'), 'label' => false, 'style' => 'width:150px;'));
                                                    ?>
                                                    </span>
                                                    <span style="color: Black; padding-left: 25px; font-weight: bold; float: left;">*Email</span>
                                                    <span>
                                                     <?php
                                                        echo $this->Form->input('colEmail', array('type' => 'email',
                                                            'div' => array('style' => 'width: 150px; float: left;'), 'label' => false, 'style' => 'width:150px;'));
                                                        ?>
                                                    </span>
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
                                                                <span>
                                                                    <?php
                                                        echo $this->Form->input('colGiayPhepKD', array('type' => 'text',
                                                            'div' => array('style' => 'width: 160px; float: left;'), 'label' => false, 'style' => 'width:160px;'));
                                                        ?>
                                                                </span>
                                                                <span style="color: Black; padding-left: 30px; font-weight: bold; float: left;">Ngày cấp &nbsp;</span>
                                                                <span>
                                                                    <?php
                                                        echo $this->Form->input('ngaycapchungnhanKDDT', array('type' => 'text',
                                                            'div' => array('style' => 'width: 100px; float: left;'), 'label' => false, 'style' => 'width:100px;','id'=>'txtngaycapchungnhanKDDT'));
                                                        ?>
                                                                </span><span style="padding-left: 23px; float: left;">Nơi cấp</span> <span>
                                                                    <?php
                                                        echo $this->Form->input('noicapchungnhanKDDT', array('type' => 'text',
                                                            'div' => array('style' => 'width: 125px; float: left;'), 'label' => false, 'style' => 'width:175px;'));
                                                        ?>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </tbody></table>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th>
                                                Tọa độ GPS
                                            </th>
                                            <td align="left">
                                                <span style="float: left;">Tọa độ X &nbsp;</span> <span>
                                                    <!--<input name="txtgpsX" type="text" value="0" maxlength="50" id="txtgpsX" style="width:50px;">-->
                                                      <?php
                                                        echo $this->Form->input('colX', array('type' => 'text',
                                                            'div' => array('style' => 'width: 50px; float: left;'), 'label' => false, 'style' => 'width:50px;'));
                                                        ?>
                                                </span>
                                                <span style="float: left;">Tọa độ Y &nbsp;</span> <span>
                                                    <!--<input name="txtgpsY" type="text" value="0" maxlength="50" id="txtgpsY" style="width:50px;">-->
                                                     <?php
                                                        echo $this->Form->input('colY', array('type' => 'text',
                                                            'div' => array('style' => 'width: 50px; float: left;'), 'label' => false, 'style' => 'width:50px;'));
                                                        ?>
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody></table>
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                            <td>                                        
                                                <?php echo $this->Form->submit('Cập nhật',array('div'=>false,'class'=>'btn btn-primary'));?>
                                 <?php echo $this->Form->button('Kết thúc',array('type'=>'button','onclick'=>'window.opener.location.reload(); window.close();','class'=>'btn btn-warning'));?>
                                            </td>

                                        </tr>
                                    </tbody></table>
                            </td>
                        </tr>
                    </tbody></table>
            </td>
        </tr>
    </tbody></table>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
$(function(){
   $('#txtngaycapchungnhanKDDT').datepicker({
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
        });
});  
</script>
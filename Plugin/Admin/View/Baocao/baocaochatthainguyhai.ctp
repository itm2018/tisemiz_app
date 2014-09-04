<?php echo $this->Html->css(array('baocaonguyhaistyle'),array('inline'=>false));?>
<table id="table9" cellspacing="0" cellpadding="0" width="780px" border="0">
        <tbody><tr>
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
                            <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step1')?>">
                                <img id="Image3" src="/img/b1_actv_cnt.gif" alt="" border="0"></a>
                        </td>
                        <td align="center">
                            <img id="Image4" src="/img/tab_arrow.gif" alt="" border="0">
                        </td>
                        <td>
                            <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step2')?>">
                                <img id="Image5" src="/img/b2_dactv_cnt.gif" alt="" border="0"></a>
                        </td>
                        <td align="center">
                            <img id="Image6" src="/img/tab_arrow.gif" alt="" border="0">
                        </td>
                        <td>
                            <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step3')?>">
                                <img id="Image7" src="/img/b3_dactv_cnt.gif" alt="" border="0"></a>
                        </td>
                        <td align="center">
                            <img id="Img2" src="/img/tab_arrow.gif" alt="" border="0">
                        </td>
                        
                        <td>
                            <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step4')?>">
                                <img id="Img5" src="/img/b5_dactv_cnt.gif" alt="" border="0"></a>
                        </td>
                        <td align="center">
                            <img id="Img6" src="/img/tab_arrow.gif" alt="" border="0">
                        </td>
                        <td>
                            <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step5')?>">
                                <img id="Img7" src="/img/b6_xt_hid.gif" alt="" border="0"></a>
                        </td>
                    </tr>
                </tbody></table>
                <table align="left" class="lstview" style="padding: 0; margin: 0; border: none; border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td colspan="2" align="left">
                            <span id="lblmsg" style="color:#FF0033;font-weight:normal;">Cập nhật thành công!</span>
                            <input name="txtDangkyCNTID" type="hidden" id="txtDangkyCNTID" value="785419">
                            <input name="IDDN" type="hidden" id="IDDN" width="49px" style="width: 37px" value="785418">
                            
                            <input name="cntID" type="hidden" id="cntID" width="49px" style="width: 79px" value="785419">
                            <div id="divDN" style="display: inline">
                                <input name="hiddivDN" type="hidden" id="hiddivDN" value="none">
                                <table class="lstview" align="left" border="0" cellpadding="0" cellspacing="0">
                                    <tbody><tr>
                                        <td colspan="3" valign="bottom" style="height: 15px; text-align: left; padding-left: 10px;">
                                            <img id="Image19" src="/img/ct2.gif" alt="" border="0">
                                            <span style="font-size: 11pt; color: gray; font-family: Arial"><strong><span style="font-size: 10pt;
                                                color: appworkspace">THÔNG TIN DOANH NGHIỆP</span> </strong></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            * Tên doanh nghiệp
                                        </th>
                                        <td align="left" colspan="2">
                                            <input name="txtTenDoanhNghiep" type="text" value="Evolable Asia" id="txtTenDoanhNghiep" style="width:550px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Mã số QLCTNH
                                        </th>
                                        <td align="left" colspan="2">
                                            <span>
                                                <input name="MaDoanhNghiep" type="text" maxlength="50" id="MaDoanhNghiep" style="width:150px;">&nbsp;
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
                                            <input name="txtDiaChiDN" type="text" value="9 Đinh Tiên Hoàng, P. ĐaKao, Q.1, Tp. Hồ Chí Minh" id="txtDiaChiDN" style="width:550px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            *Tỉnh/TP
                                        </th>
                                        <td align="left">
                                            <span>
                                                <select name="drpTinhDN" onchange="javascript:setTimeout('__doPostBack(\'drpTinhDN\',\'\')', 0)" id="drpTinhDN" disabled="disabled" class="aspNetDisabled" style="width:100px;">
	<option value="54479">An Giang</option>
	<option value="54463">Bà Rịa - Vũng Tàu</option>
	<option value="54393">Bắc Giang</option>
	<option value="54371">Bắc Kạn</option>
	<option value="54489">Bạc Liêu</option>
	<option value="54399">Bắc Ninh</option>
	<option value="54471">Bến Tre</option>
	<option value="54435">Bình Định</option>
	<option selected="selected" value="54459">Bình Dương</option>
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
                                            </span>
                                        </td>
                                        <td>
                                            <span style="color: Black; padding-left: 10px; font-weight: bold;">*Quận/Huyện</span>
                                            <span>
                                                <select name="drpQuanHuyenDN" onchange="javascript:setTimeout('__doPostBack(\'drpQuanHuyenDN\',\'\')', 0)" id="drpQuanHuyenDN" style="width:125px;">
	<option value="54584">Huyện Bến Cát</option>
	<option selected="selected" value="54583">Huyện Dầu Tiếng</option>
	<option value="54585">Huyện Phú Giáo</option>
	<option value="54586">Huyện Tân Uyên</option>
	<option value="54587">Thị xã Dĩ An</option>
	<option value="54588">Thị xã Thuận An</option>
	<option value="54582">TP. Thủ Dầu Một</option>

</select>
                                            </span><span style="color: Black; padding-left: 10px; font-weight: bold;">*Phường/Xã
                                            </span><span>
                                                <select name="drpPhuongXaDN" id="drpPhuongXaDN" style="width:155px;">
	<option value="63751">Thị trấn Dầu Tiếng</option>
	<option selected="selected" value="63759">Xã An Lập</option>
	<option value="63755">Xã Định An</option>
	<option value="63758">Xã Định Hiệp</option>
	<option value="63757">Xã Định Thành</option>
	<option value="63756">Xã Long Hoà</option>
	<option value="63760">Xã Long Tân</option>
	<option value="63752">Xã Minh Hoà</option>
	<option value="63754">Xã Minh Tân</option>
	<option value="63753">Xã Minh Thạnh</option>
	<option value="63761">Xã Thanh An</option>
	<option value="63762">Xã Thanh Tuyền</option>

</select>
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            *Điện thoại
                                        </th>
                                        <td align="left" colspan="2">
                                            <span>
                                                <input name="txtDienThoaiDN" type="text" value="02348234765" maxlength="15" id="txtDienThoaiDN" style="width:95px;"></span>
                                            <span style="color: Black; padding: 5px 5px 0px 30px; font-weight: bold;">Fax</span>
                                            <span>
                                                <input name="txtFaxDN" type="text" maxlength="15" id="txtFaxDN" style="width:150px;"></span>
                                            <span style="color: Black; padding-left: 25px; font-weight: bold;">*Email</span>
                                            <span>
                                                <input name="txtEmailDN" type="text" value="huynhsonca@gmail.com" maxlength="100" id="txtEmailDN" style="width:160px;"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            * Tài khoản số
                                        </th>
                                        <td align="left" colspan="2">
                                            <span>
                                                <input name="txtTaiKhoan" type="text" value="02346523456" maxlength="20" id="txtTaiKhoan" style="width:160px;"></span>
                                            <span style="color: Black; padding-left: 15px; font-weight: bold;">* Tại</span>
                                            <span>
                                                <input name="txtTai" type="text" value="Đông Á Bank" id="txtTai" style="width:330px;"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            *Tên người liên hệ
                                        </th>
                                        <td colspan="2">
                                            <span>
                                                <input name="txtTenNguoiLienHe" type="text" value="Huỳnh Sơn Ca" id="txtTenNguoiLienHe" style="width:160px;"></span>
                                            <span style="color: Black; padding-left: 15px; font-weight: bold;">* Người đại diện
                                                pháp luật</span> <span>
                                                    <input name="txtNguoiDangKy" type="text" value="Huỳnh Sơn Ca" maxlength="50" id="txtNguoiDangKy" style="width:215px;"></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            *Số ĐT của người đại diện pháp luật
                                        </th>
                                        <td align="left" colspan="2">
                                            <input name="txtSDTNguoiDangKy" type="text" value="092345765" maxlength="50" id="txtSDTNguoiDangKy" style="width:160px;">
                                            <span style="color: Black; padding-left: 15px; padding-right: 46px; font-weight: bold;">
                                                Địa danh đăng ký</span><span>
                                                    <input name="txtNoiDangKy" type="text" maxlength="50" id="txtNoiDangKy" style="width:215px;"></span>
                                        </td>
                                    </tr>
                                    <!-- td style="padding-left:20px"><span>Ngày hết hạn Hợp đồng nguyên tắc</span> <span>
                                                            <input name="txtNgayHetHanHDNT" type="text" value="19/06/2014" maxlength="50" id="txtNgayHetHanHDNT" Calendar="PopCalendar3" Format="dd/mm/yyyy" dir="ltr" autocomplete="off" onkeydown="__PopCalValidateKey(this, event);" onfocus="__PopCalSetFocus(this, event);" onblur="__PopCalSetBlur(this, event);" InvalidDateMessage="Bạn nhập sai kiểu ngày hãy nhập ngày theo kiêu (dd/mm/yyyy) ví dụ: 31/8/2005!." style="width:101px;" />
                                                            <span id='PopCalendar3_Control' onclick='__PopCalShowCalendar("txtNgayHetHanHDNT",this)' style='cursor:pointer;'><img src='/PopCalendar/Calendar.gif' border='0' align='absmiddle' /></span>
                                                        </span></td -->
                                    <tr>
                                        <td colspan="3" style="text-align: left; padding-left: 30px;">
                                            <span>
                                                <input id="chbOnChanged" type="checkbox" name="chbOnChanged" onclick="HidnandView(this,'tdShowHide1','tdShowHide2');"></span>
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
                                            <span>
                                                <input name="txtSoGiayDKKD" type="text" value="BTN02343746" maxlength="15" id="txtSoGiayDKKD" style="width:160px;"></span>
                                            <span style="color: Black; padding-left: 25px; font-weight: bold;">Ngày cấp</span>
                                            <span>
                                                <input name="txtNgayCapGiayDKKD" type="text" value="04/06/2012" id="txtNgayCapGiayDKKD" calendar="Popcalendar4" format="dd/mm/yyyy" dir="ltr" autocomplete="off" onkeydown="__PopCalValidateKey(this, event);" onfocus="__PopCalSetFocus(this, event);" onblur="__PopCalSetBlur(this, event);" invaliddatemessage="Bạn nhập sai kiểu ngày hãy nhập ngày theo kiêu (dd/mm/yyyy) ví dụ: 31/8/2005!." style="width:75px;">
                                                <span id="Popcalendar4_Control" onclick="__PopCalShowCalendar(&quot;txtNgayCapGiayDKKD&quot;,this)" style="cursor:pointer;"><img src="/img/calendar.gif" border="0" align="absmiddle"></span>
                                            </span><span style="padding-left: 23px;">Nơi cấp</span> <span>
                                                <input name="txtNoiCapGiayDKKD" type="text" value="TpHCM" id="txtNoiCapGiayDKKD" style="width:125px;"></span>
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
                                            <span>
                                                <input name="txtSoCMT" type="text" maxlength="9" id="txtSoCMT" style="width:150px;"></span>
                                            <span style="color: Black; padding-left: 30px; font-weight: bold;">Ngày cấp</span>
                                            <span>
                                                <input name="txtNgayCapCMT" type="text" id="txtNgayCapCMT" calendar="Popcalendar2" format="dd/mm/yyyy" dir="ltr" autocomplete="off" onkeydown="__PopCalValidateKey(this, event);" onfocus="__PopCalSetFocus(this, event);" onblur="__PopCalSetBlur(this, event);" invaliddatemessage="Bạn nhập sai kiểu ngày hãy nhập ngày theo kiêu (dd/mm/yyyy) ví dụ: 31/8/2005!." style="width:100px;">
                                                <span id="Popcalendar2_Control" onclick="__PopCalShowCalendar(&quot;txtNgayCapCMT&quot;,this)" style="cursor:pointer;"><img src="/img/calendar.gif" border="0" align="absmiddle"></span>
                                            </span><span style="color: Black; padding-left: 23px; font-weight: bold;">Nơi cấp</span>
                                            <span>
                                                <input name="txtNoiCapCMT" type="text" id="txtNoiCapCMT" style="width:175px;"></span>
                                        </td>
	</tr>
</tbody></table>

                            </div>
                        </td>
                    </tr>
                    <!-- end dnm -->
                    <tr>
                        <td colspan="3" valign="bottom" style="height: 15px; text-align: left; padding-left: 10px;">
                            <table cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tbody><tr>
                                    <td style="width: 400px">
                                        <img id="Img8" src="/img/ct2.gif" alt="" border="0">
                                        <span style="font-size: 11pt; color: gray; font-family: Arial"><strong><span style="font-size: 10pt;
                                            color: appworkspace">THÔNG TIN VỀ CƠ SỞ PHÁT SINH CTNH</span> </strong></span>
                                        &nbsp;
                                        <input id="ChkDN" type="checkbox" name="ChkDN" onclick="javascript:setTimeout('__doPostBack(\'ChkDN\',\'\')', 0)">
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
                    <tr>
                        <td class="bold">
                            * Tên cơ sở
                        </td>
                        <td align="left" style="width: 600px">
                            <input name="txtTenCS" type="text" maxlength="200" id="txtTenCS" style="width:610px;">
                        </td>
                    </tr>
                    <tr>
                        <td class="bold">
                            *Địa chỉ
                        </td>
                        <td align="left">
                            <div>
                                <span>
                                    <input name="txtDiaChiCS" type="text" maxlength="100" id="txtDiaChiCS" style="width:247px;"></span>
                                <span style="color: Black; padding-left: 60px; font-weight: bold;">*Tỉnh/TP</span>
                                <span>
                                    <select name="drpTinhCS" onchange="javascript:setTimeout('__doPostBack(\'drpTinhCS\',\'\')', 0)" id="drpTinhCS" disabled="disabled" class="aspNetDisabled" style="width:250px;">
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
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
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
                    </tr>
                    <tr>
                        <td class="bold">
                            Loại hình (ngành nghề) hoạt động
                        </td>
                        <td align="left">
                            <table cellpadding="0" cellspacing="0">
                                <tbody><tr>
                                    <td>
                                        <span id="spnNganhExP">
                                            <select name="drpNganh" id="drpNganh" onchange="javascript:show_hide_nganh(this);" style="width:206px;">
	<option value="5">Chế biến thực phẩm</option>
	<option value="2">Cơ khí</option>
	<option value="10">Dầu khí</option>
	<option value="11">Dược</option>
	<option value="1">Điện</option>
	<option value="12">Điện tử</option>
	<option value="3">Hóa chất</option>
	<option value="13">Khoáng sản</option>
	<option value="4">Luyện kim</option>
	<option value="14">Nông nghiệp</option>
	<option value="8">Quản lý, xử lý nước, nước thải, chất thải</option>
	<option value="15">Sản xuất hàng tiêu dùng</option>
	<option value="16">Sản xuất vật liệu cơ bản (cao su, nhựa, thuỷ tinh…)</option>
	<option value="6">Sản xuất vật liệu xây dựng</option>
	<option value="17">Xây dựng (bao gồm cả phá dỡ công trình)</option>
	<option value="7">Y tế và thú y</option>
	<option value="9">Ngành khác</option>

</select>
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
                                <span>
                                    <input name="txtDienThoaiCS" type="text" maxlength="15" id="txtDienThoaiCS" style="width:150px;"></span>
                                <span style="color: Black; padding: 5px 5px 0px 30px; font-weight: bold;">Fax</span>
                                <span>
                                    <input name="txtFaxCS" type="text" maxlength="15" id="txtFaxCS" style="width:150px;"></span>
                                <span style="color: Black; padding-left: 25px; font-weight: bold;">*Email</span>
                                <span>
                                    <input name="txtEmailCS" type="text" maxlength="100" id="txtEmailCS" style="width:175px;"></span>
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
                                            <input name="txtDKKD_CS" type="text" maxlength="15" id="txtDKKD_CS" style="width:150px;"></span>
                                        <span style="color: Black; padding-left: 30px; font-weight: bold;">Ngày cấp</span>
                                        <span>
                                            <input name="txtNgayCapDKKD_CS" type="text" value="30/08/2014" id="txtNgayCapDKKD_CS" calendar="Popcalendar1" format="dd/mm/yyyy" dir="ltr" autocomplete="off" onkeydown="__PopCalValidateKey(this, event);" onfocus="__PopCalSetFocus(this, event);" onblur="__PopCalSetBlur(this, event);" invaliddatemessage="Bạn nhập sai kiểu ngày hãy nhập ngày theo kiêu (dd/mm/yyyy) ví dụ: 31/8/2005!." style="width:100px;">
                                            <span id="Popcalendar1_Control" onclick="__PopCalShowCalendar(&quot;txtNgayCapDKKD_CS&quot;,this)" style="cursor:pointer;"><img src="i/Calendar.gif" border="0" align="absmiddle"></span>
                                        </span><span style="padding-left: 23px;">Nơi cấp</span> <span>
                                            <input name="txtNoiCapDKKD_CS" type="text" id="txtNoiCapDKKD_CS" style="width:175px;"></span>
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
                            <span>
                                <input name="txtMaSoQLCTNH" type="text" maxlength="50" id="txtMaSoQLCTNH" style="width:200px;"></span>
                            <span style="font-family: Arial Verdana Sans-Serif; font-size: 11px; font-style: italic;
                                color: #000;">&nbsp; (nếu có)</span> &nbsp; &nbsp; &nbsp; &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Tọa độ GPS (nếu có)
                        </th>
                        <td align="left">
                            <span>Tọa độ X</span> <span>
                                <input name="txtgpsX" type="text" value="0" maxlength="50" id="txtgpsX" style="width:50px;"></span>
                            <span>Tọa độ Y</span> <span>
                                <input name="txtgpsY" type="text" value="0" maxlength="50" id="txtgpsY" style="width:50px;"></span>
                        </td>
                    </tr>
                </tbody></table>
                <table border="0" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                        <td align="center" width="100%" colspan="6" height="40">
                            &nbsp;<input type="submit" name="cmdTiepTuc" value="Cập nhật" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;cmdTiepTuc&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="cmdTiepTuc">
                            
                        </td>
                        
                        
                        <td>
                            <input name="btnThemCS" type="button" id="btnThemCS" style="width: auto; height: 24px" value="Thêm cơ sở" onclick="javascript:doOpenCoso();">
                        </td>
                        <td>
                            <input name="btnSuaCS" type="button" id="btnSuaCS" style="width: auto; height: 24px" value="Sửa cơ sở" onclick="javascript:doOpenCoso('ID');">
                        </td>
                        <td>
                            <span>
                                <input type="submit" name="btnXoaCS" value="Xóa  cơ sở" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;btnXoaCS&quot;, &quot;&quot;, true, &quot;&quot;, &quot;&quot;, false, false))" id="btnXoaCS"></span>
                        </td>
                        
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
                </tbody></table>
            </td>
        </tr>
    </tbody></table>
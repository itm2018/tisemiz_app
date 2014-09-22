<div style="width: 800px; margin: 0 auto; padding: 2px;">
    <table id="table1" cellspacing="0" cellpadding="0" width="780px" border="0">
        <tbody><tr>
                <td>
                    <div id="nav_header">
                        <h3>
                            Cập nhật thông tin đăng ký chủ nguồn thải</h3>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="100%" style="border: solid 1px #2c8337; width: 780px;" id="navmain_bghead">
                    <table id="table9" cellspacing="0" cellpadding="0" width="100%" border="0">
                        <tbody><tr>
                                <td>
                                    <table id="table3" cellspacing="0" cellpadding="0" width="750px" border="0" style="margin: 5px 5px 5px 5px;" align="center">
                                        <tbody><tr>
                                                <td>
                                                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step1') ?>">
                                                        <img id="Image3" src="/img/b1_actv_cnt.gif" alt="" border="0"></a>
                                                </td>
                                                <td align="center" width="150">
                                                    <img id="Image4" src="/img/guide_img05.gif" alt="" border="0">
                                                </td>
                                                <td>
                                                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step2') ?>">
                                                        <img id="Image5" src="/img/b2_actv_cnt.gif" alt="" border="0"></a>
                                                </td>
                                                <td align="center" width="150">
                                                    <img id="Image6" src="/img/guide_img05.gif" alt="" border="0">
                                                </td>
                                                <td>
                                                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step3') ?>">
                                                        <img id="Image7" src="/img/b4_actv.gif" alt="" border="0"></a>
                                                </td>
                                                <td align="center" width="150">
                                                    <img id="Img2" src="/img/guide_img05.gif" alt="" border="0">
                                                </td>

                                                <td>
                                                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step4') ?>">
                                                        <img id="Img5" src="/img/b5_dactv_cnt.gif" alt="" border="0"></a>
                                                </td>
                                                <td align="center" width="150">
                                                    <img id="Img1" src="/img/guide_img05.gif" alt="" border="0">
                                                </td>
                                                <td>
                                                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step5') ?>">
                                                        <img id="Img6" src="/img/b6_xt_hid.gif" alt="" border="0"></a>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                </td>
                            </tr>
                            <tr>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="left">
                                    Cập nhật dữ liệu chất thải cho cơ sở:
                                    <?php echo $this->Form->hidden('drpCosoSelected'); ?>
                                    <?php echo $this->Form->input('drpCoso', array('id' => 'drpCoso', 'label' => false, 'div' => false, 'options' => $list_children)); ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    3.1. Danh sách chất thải nguy hại phát sinh thường xuyên:
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <table class="grid" border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="40px">
                                                    Thứ tự
                                                </th>
                                                <th>
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
                                        <tbody id="list-chat-thai-nguy-hai-co-so">
<!--                                            <tr onmouseover="this.style.background = '#EEE0C5'" onmouseout="this.style.background = '#ffffff'">
                                                <td align="center"><b>1</b></td>
                                                <td>Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua</td>
                                                <td>Rắn/bùn</td>
                                                <td align="right">150</td>
                                                <td>010101</td>
                                                <td><a href="javascript:updateItem('785786','Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','Rắn/bùn','150','010101','1');">Sửa</a></td>
                                                <td><a href="javascript:doDelete('785786','Cặn thải có khả năng sinh axit từ quá trình chế biến quặng sunfua','DangKyCNTID=785419&CosoID=785783')">Xóa</a></td>
                                            </tr>
                                            <tr onmouseover="this.style.background = '#EEE0C5'" onmouseout="this.style.background = '#ffffff'">
                                                <td align="center"><b>2</b></td>
                                                <td>Natri hydroxit và kali hydroxit thải</td>
                                                <td>Rắn/Lỏng</td>
                                                <td align="right">100</td>
                                                <td>020201</td>
                                                <td><a href="javascript:updateItem('785787','Natri hydroxit và kali hydroxit thải','Rắn/Lỏng','100','020201','2');">Sửa</a></td>
                                                <td><a href="javascript:doDelete('785787','Natri hydroxit và kali hydroxit thải','DangKyCNTID=785419&CosoID=785783')">Xóa</a></td>
                                            </tr>
                                            <tr onmouseover="this.style.background = '#EEE0C5'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
                                                <td align="center"><b>3</b></td>
                                                <td>Các loại bazơ thải khác
                                                </td>
                                                <td>Rắn/lỏng</td>
                                                <td align="right">100</td>
                                                <td>020202</td>
                                                <td><a href="javascript:updateItem('785788','Các loại bazơ thải khác
                                                       ','Rắn/lỏng','100','020202','3');">Sửa</a></td>
                                                <td><a href="javascript:doDelete('785788','Các loại bazơ thải khác
                                                       ','DangKyCNTID=785419&CosoID=785783')">Xóa</a></td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" align="right"><b>Tổng số lượng</b></td>
                                                <td align="right"><b>350</b></td>
                                                <td colspan="3"></td>
                                            </tr>-->

                                        </tbody>
                                        <tr>
                                            <td></td>
                                            <td><b>Tổng số lượng</b></td>
                                            <td></td>
                                            <td align="right"><b><span id="tongnguyhaithongthuong"></span></b></td>
                                            <td colspan="3"></td>
                                        </tr>
                                        <tfoot>
                                            <tr>
                                                <td style="text-align: left;" bgcolor="#eff6f6">
                                                    <input name="hidMaxID" type="hidden" id="hidMaxID" value="785788">
                                                    <input name="txtThuTuCTNH" type="text" value="" id="txtThuTuCTNH" style="width:50px;">
                                                    <input name="hidID" type="hidden" id="hidID">
                                                </td>
                                                <td style="text-align: right;" bgcolor="#eff6f6" valign="middle">
                                                    <input name="txtTenNhom" type="text" id="txtTenNhom" style="width:316px;" class="ui-autocomplete-input" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                                                </td>
                                                <td bgcolor="#eff6f6">
                                                    <input name="txtTrangThaiCTNH" type="text" value="Rắn/lỏng/bùn" id="txtTrangThaiCTNH" style="width:100%;">
                                                </td>
                                                <td bgcolor="#eff6f6">
                                                    <input name="txtSoLuongCTNH" type="text" value="" id="txtSoLuongCTNH" style="width:100%;text-align: right">
                                                </td>
                                                <td bgcolor="#eff6f6">
                                                    <input name="txtMaCTNH" type="text" id="txtMaCTNH" style="width:100%;text-align: right">
                                                </td>
                                                <td valign="bottom" align="center" bgcolor="#eff6f6" colspan="2">
                                                    <input name="cmdAddCTNH" type="submit" id="cmdAddCTNH" style="width: 64px; height: 24px" onclick="KTCTNH(this)" value="Cập nhật">
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </td>
                            </tr>
                            <tr id="trAddEditCT">
                                <td align="left" style="width: 100%; padding-left: 6px; padding-right: 6px">
                                    <input name="btnSelect" type="button" id="btnSelect" style="width: auto; height: 24px" value="Thêm CTNH phát sinh" onclick="javascript:doThemCTNH();">
                                </td>
                            </tr>

                            <tr height="30px" valign="bottom">
                                <td>
                                    3.2. Danh sách chất thải thông thường phát sinh thường xuyên:
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <table class="grid" id="Table4" border="0" cellpadding="0" cellspacing="0" width="100%">

                                        <thead>
                                            <tr>
                                                <th width="40px">
                                                    Thứ tự
                                                </th>
                                                <th>
                                                    Tên chất thải
                                                </th>
                                                <th width="70px">
                                                    Trạng thái tồn tại
                                                </th>
                                                <th width="60px">
                                                    Số lượng(kg/năm)
                                                </th>
                                                <th width="60px">
                                                    Mã CTNH
                                                </th>
                                                <th colspan="2">
                                                    Chức năng
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="list-chat-thai-nguy-hai-phat-sinh-thuong-xuyen-co-so">
                                        </tbody>
                                        <tr>
                                            <td></td>
                                            <td><b>Tổng số lượng</b></td>
                                            <td></td>
                                            <td align="right"><b><span id="tongpstx"></span></b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tbody>
                                            <tr>
                                                <td width="40px">
                                                    <input name="txtThuTuCTK" type="text" value="1" id="txtThuTuCTK" style="width:100%;">
                                                    <input name="hidIDCTK" type="hidden" id="hidIDCTK">
                                                </td>
                                                <td>
                                                    <input name="txtTenCTK" type="text" id="txtTenCTK" style="width:100%;">
                                                </td>
                                                <td width="78px">
                                                    <input name="txtTrangThaiCTK" type="text" id="txtTrangThaiCTK" style="width:100%;" class="ui-autocomplete-input" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                                                </td>
                                                <td width="68px">
                                                    <input name="txtSoLuongCTK" type="text" id="txtSoLuongCTK" style="width:100%;">
                                                </td>
                                                <td width="68px">
                                                    <input name="txtSoLuongCTK" type="text" id="txtMaCTNH" style="width:100%;">
                                                </td>
                                                <td style="width: auto" align="center" colspan="2">
                                                    <input name="cmdAddCTK" type="submit" id="cmdAddCTK" style="width: auto; height: 24px" onclick="KTCTK(this)" value="Cập nhật">
                                                </td>
                                            </tr>
                                        </tbody>

                                    </table>
                                </td>
                            </tr>
                            <tr id="trAddEditCT">
                                <td align="left" style="width: 100%; padding-left: 6px; padding-right: 6px">
                                    <input name="btnSelect" type="button" id="btnSelect" style="width: auto; height: 24px" value="Thêm CTNH thông thường phát sinh" onclick="javascript:doThemCTNHThongThuongPhatSinh();">
                                </td>
                            </tr>
                            <tr height="30px" valign="bottom">
                                <td>
                                    3.3. Danh sách chất thải nguy hại tồn lưu (nếu có):
                                </td>
                            </tr>
                            <tr>
                                <td align="left">
                                    <table class="grid" border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="40px">
                                                    Thứ tự
                                                </th>
                                                <th>
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
                                        <tbody id ="list-chat-thai-nguy-hai-ton-luu-co-so">

                                        </tbody>
                                        <tr>
                                            <td></td>
                                            <td><b>Tổng số lượng</b></td>
                                            <td></td>
                                            <td align="right"><b><span id="tongtonluu"></span></b></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <td style="text-align: left;" bgcolor="#eff6f6">
                                    <input name="hidMaxTLID" type="hidden" id="hidMaxTLID" value="785791">
                                    <input name="txt_thutuTL" type="text" value="" id="txt_thutuTL" style="width:50px;">
                                    <input name="hidIDTL" type="hidden" id="hidIDTL">
                                </td>
                                <td style="text-align: right;" bgcolor="#eff6f6" valign="middle">
                                    <input name="txtTenNhomTL" type="text" id="txtTenNhomTL" style="width:316px;" class="ui-autocomplete-input" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                                </td>
                                <td bgcolor="#eff6f6">
                                    <input name="txt_trangthaiTL" type="text" value="Rắn/lỏng/bùn" id="txt_trangthaiTL" style="width:100%;">
                                </td>
                                <td bgcolor="#eff6f6">
                                    <input name="txt_soluongTL" type="text" value="" id="txt_soluongTL" style="width:100%;text-align: right">
                                </td>
                                <td bgcolor="#eff6f6">
                                    <input name="txt_MaCTNHTL" type="text" id="txt_MaCTNHTL" style="width:100%;text-align: right">
                                </td>
                                <td valign="bottom" align="center" bgcolor="#eff6f6" colspan="2">
                                    <input name="cmdAddCTNHTL" type="submit" id="cmdAddCTNHTL" style="width: auto; height: 24px" onclick="KTCTNHTL(this)" value="Cập nhật">
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </td>
            </tr>
            <tr id="tr1">
                <td align="left" style="width: 100%; padding-left: 6px; padding-right: 6px">
                    <input name="Button2" type="button" id="Button2" style="width: auto; height: 24px" value="Thêm CTNH Tồn lưu" onclick="javascript:doThemCTNHTonLuu();">
                </td>
            </tr>

            <tr height="30px" valign="bottom">
                <td>
                    3.4. Danh sách CTNH đăng ký tự xử lý CTNH tại cơ sở (nếu có):
                </td>
            </tr>
            <tr>
                <td>
                    <table class="grid" id="Table5" border="0" cellpadding="0" cellspacing="0" width="100%">

                        <thead>
                            <tr>
                                <th width="30px">
                                    Thứ tự
                                </th>
                                <th>
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
                                <th width="60px">
                                    Phương án xử lý
                                </th>
                                <th width="60px">
                                    Mức độ xử lý
                                </th>
                                <th colspan="2">
                                    Chức năng
                                </th>
                            </tr>
                        </thead>
                        <tbody id="list-chat-thai-nguy-hai-co-so-tu-xu-ly">

                        </tbody>
                        <tbody>
                            <?php echo $this->Form->create('ChatThaiNguyHai', array('id' => 'formChatThaiDoanhNghiepTuXuLy')) ?>
                            <tr>
                                <td>
                                    <input name="stt" type="text" value="1" id="txtThuTuCA" style="width:100%;">
                                    <input name="colCSSX" type="hidden" id="hidIDCSCA">
                                    <input name="is_tuxuly" type="hidden" id="hidis_tuxuly" value="1">
                                </td>
                                <td>
                                    <input name="colDangCThai" type="text" id="txtTenNhomCA" style="width:100%;" class="ui-autocomplete-input" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                                </td>
                                <td>
                                    <input name="tt_tontai" type="text" id="txtTrangThaiCA" style="width:100%;">
                                </td>
                                <td>
                                    <input name="colTongKL" type="text" value="" id="txtSoLuongCA" style="width:100%;">
                                </td>
                                <td>
                                    <input name="ma_chatthai" type="text" id="txtMaCTNHCA" style="width:100%;">
                                </td>
                                <td>
                                    <input name="phuonganxuly" type="text" id="txtPAXLCA" style="width:100%;">
                                </td>
                                <td>
                                    <input name="mucdoxuly" type="text" id="txtMucDoXLCA" style="width:100%;">
                                </td>
                                <td style="width: auto" align="center" colspan="2">
                                    <input name="Submit2" type="button" id="submitCA" style="width: auto; height: 24px" value="Cập nhật">
                                </td>
                            </tr>
                            <?php echo $this->Form->end() ?>
                        </tbody></table>
                </td>
            </tr>
            <tr>
                <td valign="top" width="100%" height="15">
                    <!-- BEGIN PAGER --->

                    <!-- END PAGER --->
                </td>
            </tr>
            <tr>
                <td height="20px;" align="left" valign="top" style="font-family: Arial Verdana Sans-Serif;
                    font-size: 12px; font-style: italic; color: #000;">
                    <b>Ghi chú</b>:Bạn có thể nhập số thứ tự theo ý mình để tiện sắp xếp.
                </td>
            </tr>
            <tr>
            </tr><tr>
                <td>
                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step2') ?>"><input name="cmdQuayLai" type="button" id="cmdQuayLai" style="width: 80px; height: 24px" value="Quay lại"></a>
                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step4') ?>"><input type="submit" name="cmdTiep" value="Tiếp tục" id="cmdTiep" style="width:80px;"></a>

                </td>
            </tr>
        </tbody></table>
</td>
</tr>
</tbody></table>
</div>
<script type="text/javascript">

    $(function() {
        var baseUrl = '<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step3', true) ?>';
        $('#drpCoso').bind("change", function() {
            var colMa = parseInt($(this).val());

            var url = "<?php echo Router::url('/admin/doanhnghiep/getinfo') ?>";
            var data = {colMa: colMa};
            doPostAjax(url, data, 'renderlist');
            $('#hidIDCSCA').val(colMa);
        });
        $('#drpCoso').trigger("change");
        $('#submitCA').bind('click', function() {
            var url = "<?php echo Router::url('/admin/baocao/themchatthainguyhai') ?>";
            var data = $('#formChatThaiDoanhNghiepTuXuLy').serialize();
            data.colCSSX = $('#drpCoso').val();
                    doPostAjax(url, data);
        });
    });
    function myfunction(data) {
        console.log(data);
    }
    function renderlist(data) {
        try {
            var result = JSON.parse(data);
            var chatthainguyhais = result["ChatThaiNguyHaiThongThuong"];
            var chathais_html = '';
            var tongnguyhaithongthuong = 0.0;
            chatthainguyhais.forEach(function(ct) {
                tongnguyhaithongthuong += parseFloat(ct["colTongKL"]);
                chathais_html += '<tr onmouseover="this.style.background = \'#EEE0C5\'" onmouseout="this.style.background = \'#ffffff\'">' +
                        '<td align="right">' +
                        ct["stt"] +
                        '<input type="hidden" value="' + ct["colMa"] + '">' +
                        '</td>' +
                        '<td align="left">' +
                        ct["colDangCThai"] +
                        '</td>' +
                        '<td align="left">' +
                        ct["tt_tontai"] +
                        '</td>' +
                        '<td align="right">' +
                        ct["colTongKL"] +
                        '</td>' +
                        '<td align="right">' +
                        ct["ma_chatthai"] +
                        '</td>' +
                        ' <td width="35px" align="center">' +
                        '<a href="javascript:doUpdate(9,' + ct["colMa"] + ');">Sửa</a>' +
                        '</td>' +
                        '<td width="35px" align="center">' +
                        '<a href="javascript:doDelete(90,' + ct["colMa"] + ')">Xóa</a>' +
                        '</td>' +
                        '</tr>';
            });
            $('#list-chat-thai-nguy-hai-co-so').html(chathais_html);
            $('#tongnguyhaithongthuong').html(tongnguyhaithongthuong);
            //danh sach chat thai ton luu
            var chatthaitonluus = result["ChatThaiNguyHaiTonLuu"];
            var chathais_html = '';
            var tongtonluu = 0;
            chatthaitonluus.forEach(function(ct) {
                tongtonluu += parseFloat(ct["colTongKL"]);
                chathais_html += '<tr onmouseover="this.style.background = \'#EEE0C5\'" onmouseout="this.style.background = \'#ffffff\'">' +
                        '<td align="right">' +
                        ct["stt"] +
                        '<input type="hidden" value="' + ct["colMa"] + '">' +
                        '</td>' +
                        '<td align="left">' +
                        ct["colDangCThai"] +
                        '</td>' +
                        '<td align="left">' +
                        ct["tt_tontai"] +
                        '</td>' +
                        '<td align="right" class ="tongkhoiluong">' +
                        ct["colTongKL"] +
                        '</td>' +
                        '<td align="right">' +
                        ct["ma_chatthai"] +
                        '</td>' +
                        ' <td width="35px" align="center">' +
                        '<a href="javascript:doUpdate(9,' + ct["colMa"] + ');">Sửa</a>' +
                        '</td>' +
                        '<td width="35px" align="center">' +
                        '<a href="javascript:doDelete(90,' + ct["colMa"] + ')">Xóa</a>' +
                        '</td>' +
                        '</tr>';
            });
            $('#list-chat-thai-nguy-hai-ton-luu-co-so').html(chathais_html);
            $('#tongtonluu').html(tongtonluu);
            //list-chat-thai-nguy-hai-phat-sinh-thuong-xuyen-co-so
            var chatthaiphatsinhthuongxuyens = result["ChatThaiNguyHaiPhatSinhThuongXuyen"];
            var chathaipstx_html = '';
            var tongpstx = 0;
            chatthaiphatsinhthuongxuyens.forEach(function(ct) {
                tongpstx += parseFloat(ct["colTongKL"]);
                chathaipstx_html += '<tr onmouseover="this.style.background = \'#EEE0C5\'" onmouseout="this.style.background = \'#ffffff\'">' +
                        '<td align="right">' +
                        ct["stt"] +
                        '<input type="hidden" value="' + ct["colMa"] + '">' +
                        '</td>' +
                        '<td align="left">' +
                        ct["colDangCThai"] +
                        '</td>' +
                        '<td align="left">' +
                        ct["tt_tontai"] +
                        '</td>' +
                        '<td align="right" class ="tongkhoiluong">' +
                        ct["colTongKL"] +
                        '</td>' +
                        '<td align="right">' +
                        ct["ma_chatthai"] +
                        '</td>' +
                        ' <td width="35px" align="center">' +
                        '<a href="javascript:doUpdate(9,' + ct["colMa"] + ');">Sửa</a>' +
                        '</td>' +
                        '<td width="35px" align="center">' +
                        '<a href="javascript:doDelete(90,' + ct["colMa"] + ')">Xóa</a>' +
                        '</td>' +
                        '</tr>';
            });
            $('#list-chat-thai-nguy-hai-phat-sinh-thuong-xuyen-co-so').html(chathaipstx_html);
            $('#tongpstx').html(tongpstx);
            //list-chat-thai-nguy-hai-co-so-tu-xu-ly
            var chatthaidntuxulys = result["ChatThaiNguyHaiTuXuLy"];
            var chathaituxuly_html = '';
            chatthaidntuxulys.forEach(function(ct) {
                tongpstx += parseFloat(ct["colTongKL"]);
                chathaituxuly_html += '<tr onmouseover="this.style.background = \'#EEE0C5\'" onmouseout="this.style.background = \'#ffffff\'">' +
                        '<td align="right">' +
                        ct["stt"] +
                        '<input type="hidden" value="' + ct["colMa"] + '">' +
                        '</td>' +
                        '<td align="left">' +
                        ct["colDangCThai"] +
                        '</td>' +
                        '<td align="left">' +
                        ct["tt_tontai"] +
                        '</td>' +
                        '<td align="right" class ="tongkhoiluong">' +
                        ct["colTongKL"] +
                        '</td>' +
                        '<td align="right">' +
                        ct["ma_chatthai"] +
                        '</td>' +
                        '<td align="right">' +
                        ct["phuonganxuly"] +
                        '</td>' +
                        '<td align="right">' +
                        ct["mucdoxuly"] +
                        '</td>' +
                        ' <td width="35px" align="center">' +
                        '<a href="javascript:doUpdate(10,' + ct["colMa"] + ');">Sửa</a>' +
                        '</td>' +
                        '<td width="35px" align="center">' +
                        '<a href="javascript:doDelete(90,' + ct["colMa"] + ')">Xóa</a>' +
                        '</td>' +
                        '</tr>';
            });
            $('#list-chat-thai-nguy-hai-co-so-tu-xu-ly').html(chathaituxuly_html);
//            $('#tongpstx').html(tongpstx);
        } catch (e) {
        }
    }
    function doThemCTNH() {
        var macoso = parseInt($('#drpCoso').val());
        if (macoso != 'undefined') {
            PopUpUpdate(12, macoso);
        }
    }
    function doThemCTNHTonLuu() {
        var macoso = parseInt($('#drpCoso').val());
        if (macoso != 'undefined') {
            PopUpUpdate(13, macoso);
        }
    }
    function doThemCTNHThongThuongPhatSinh() {
        var macoso = parseInt($('#drpCoso').val());
        if (macoso != 'undefined') {
            PopUpUpdate(14, macoso);
        }
    }
    function doThemCTNHDoanhNghiepTuXuLy() {
        var macoso = parseInt($('#drpCoso').val());
        if (macoso != 'undefined') {
            PopUpUpdate(15, macoso);
        }
    }
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>
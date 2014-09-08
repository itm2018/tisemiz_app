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
            <td width="100%" style="border: solid 1px #2c8337; width: 780px;" id="navmain_bghead">
                <table id="table12" cellspacing="0" cellpadding="0" width="100%" border="0">
                    <tbody><tr>
                            <td>
                                <table id="table3" cellspacing="0" cellpadding="0" width="750px" border="0" style="margin: 5px 5px 5px 5px;" align="center">
                                    <tbody><tr>
                                            <td>
                                                <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step1') ?>">
                                                    <img id="Image3" src="/img/b1_actv_cnt.gif" alt=""></a>
                                            </td>
                                            <td align="center" width="150">
                                                <img id="Img6" src="/img/guide_img05.gif" alt="">
                                            </td>
                                            <td>
                                                <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step2') ?>">
                                                    <img id="Image5" src="/img/b2_actv_cnt.gif" alt=""></a>
                                            </td>
                                            <td align="center" width="150">
                                                <img id="Image6" src="/img/guide_img05.gif" alt="">
                                            </td>
                                            <td>
                                                <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step3') ?>">
                                                    <img id="Image7" src="/img/b3_dactv_cnt.gif" alt=""></a>
                                            </td>
                                            <td align="center" width="150">
                                                <img id="Img2" src="/img/guide_img05.gif" alt="">
                                            </td>

                                            <td>
                                                <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step4') ?>">
                                                    <img id="Img5" src="/img/b5_dactv_cnt.gif" alt=""></a>
                                            </td>
                                            <td align="center" width="150">
                                                <img id="Img1" src="/img/guide_img05.gif" alt="" border="0">
                                            </td>
                                            <td>
                                                <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step5') ?>">
                                                    <img id="Img7" src="/img/b6_xt_hid.gif" alt="" border="0"></a>
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
                                Cập nhật dữ liệu sản xuất cho cơ sở:
                                <?php echo $this->Form->hidden('drpCosoSelected'); ?>
                                <?php echo $this->Form->input('drpCoso', array('id' => 'drpCoso', 'label' => false, 'div' => false, 'options' => $list_children)); ?>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="padding-right: 5px; padding-left: 5px; padding-bottom: 5px;
                                padding-top: 5px; height: 25px">
                                <span id="Label32" style="font-weight:bold;">2.1.Danh sách nguyên liệu thô/hoá chất:</span>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 780px" colspan="2" align="center">
                                <table class="grid" id="Table5" border="0" cellpadding="0" cellspacing="0" width="96%">

                                    <tbody><tr>
                                            <th width="50px">
                                                Thứ tự
                                            </th>
                                            <th>
                                                Tên nguyên liệu
                                            </th>
                                            <th>
                                                Đơn vị
                                            </th>
                                            <th width="60px">
                                                Số lượng
                                            </th>
                                            <th width="100px" colspan="2">
                                                Chức năng
                                            </th>
                                        </tr>
                                    <tbody id="list-nguyenlieu-coso">

                                    </tbody>
                                    <tr>
                                        <td width="60px">
                                            <input name="txtThuTuNL" type="text" value="" id="txtThuTuNL" style="width:100%;">
                                            <input name="hidID" type="hidden" id="hidID">
                                        </td>
                                        <td>
                                            <?php echo $this->Form->input('txtTenNL', array('div' => false, 'label' => false, 'id' => 'txtTenNL', 'style' => 'width: 100%;', 'options' => Common::getListNguyenlieu())) ?>
                                        </td>
                                        <td width="68px">
                                            <input name="txtDonViNL" type="text" id="txtDonViNL" style="width:100%;">
                                        </td>
                                        <td width="68px">
                                            <input name="txtSoLuongNL" type="text" id="txtSoLuongNL" style="width:100%;">
                                        </td>
                                        <td style="width: 85px" colspan="2" align="center">
                                            <input name="cmdAddNL" type="submit" id="cmdAddNL" style="width: 80px; height: 24px" onclick="ThemNLDN();" value="Thêm">
                                        </td></tr>
                    </tbody></table>
            </td>
        </tr>
        <tr>
            <td>
                <span id="Label1" style="font-weight:bold;">2.2. Danh sách sản phẩm:</span>
            </td>
        </tr>
        <tr>
            <td style="width: 780px" align="center">
                <table class="grid" id="Table2" border="0" cellpadding="0" cellspacing="0" width="96%">

                    <tbody>
                        <tr>
                            <th width="40px">
                                Thứ tự
                            </th>
                            <th>
                                Tên sản phẩm
                            </th>
                            <th width="60px">
                                Đơn vị
                            </th>
                            <th width="60px">
                                Công suất
                            </th>
                            <th width="100px" colspan="2">
                                Chức năng
                            </th>
                        </tr>
                    <tbody id="list-sanpham-coso">
                    </tbody>
                    <tbody>
                        <tr>
                            <td width="60px">
                                <input name="txtThuTuSP" type="text" value="" id="txtThuTuSP" style="width:100%;">
                                <input name="hidIDSP" type="hidden" id="hidIDSP">
                            </td>
                            <td>
                                <?php echo $this->Form->input('txtTenSP', array('div' => false, 'label' => false, 'id' => 'txtTenSP', 'style' => 'width: 100%;', 'options' => Common::getListSanPham())); ?>
                            </td>
                            <td width="68px">
                                <input name="txtDVi" type="text" id="txtDVi" style="width:100%;">
                            </td>
                            <td width="68px">
                                <input name="txtCongSuatTT" type="text" id="txtCongSuatTT" style="width:100%;">
                            </td>
                            <td style="width: 60px" colspan="2" align="center">
                                <input name="cmdAddSP" type="submit" id="cmdAddSP" onclick="ThemSPDN();" style="width: 80px; height: 24px" value="Thêm">
                            </td>
                        </tr>
                    </tbody></table>
            </td>
        </tr>
        <tr>
            <td>
                <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step1') ?>"><input name="cmdQuayLai" type="button" id="cmdQuayLai" style="width: 80px; height: 24px" value="Quay lại"></a>
                <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step3') ?>"><input type="submit" name="cmdTiep" value="Tiếp tục" id="cmdTiep" style="width:80px;"></a>

            </td>
        </tr>
    </tbody></table>



</td></tr></tbody></table>
<script type="text/javascript">
    $(function() {
        $('#drpCoso').bind("change", function() {
            var colMa = parseInt($(this).val());
            var url = "<?php echo Router::url('/admin/doanhnghiep/getinfo') ?>";
            var data = {colMa: colMa};
            doPostAjax(url, data, 'renderlist');
        });
        $('#drpCoso').trigger("change");
    });
    function renderlist(data) {
//        console.log(data);
        try {
            var result = JSON.parse(data);
            var nguyenlieus = result["NguyenLieuSanPham"];
            var sanphams = result["SanPhamDoanhNghiep"];
//            console.log(nguyenlieus);
            var nguyenlieu_html = '';
            nguyenlieus.forEach(function(nl) {
                nguyenlieu_html += '<tr onmouseover="this.style.background = \'#EEE0C5\'" onmouseout="this.style.background = \'#ffffff\'">' +
                        '<td align="right">' +
                        nl["NguyenLieuSanPham"]["stt"] +
                        '<input type="hidden" value="' + nl["NguyenLieuSanPham"]["colMa"] + '">' +
                        '</td>' +
                        '<td align="left">' +
                        nl["Nguyenlieu"]["tennguyenlieu"] +
                        '</td>' +
                        '<td align="left">' +
                        nl["NguyenLieuSanPham"]["colDonVi"] +
                        '</td>' +
                        '<td align="right">' +
                        nl["NguyenLieuSanPham"]["colLuongSD"] +
                        '</td>' +
                        ' <td width="35px" align="center">' +
                        '<a href="javascript:doUpdate(4,' + nl["NguyenLieuSanPham"]["colMa"] + ');">Sửa</a>' +
                        '</td>' +
                        '<td width="35px" align="center">' +
                        '<a href="javascript:doDelete(10,' + nl["NguyenLieuSanPham"]["colMa"] + ')">Xóa</a>' +
                        '</td>' +
                        '</tr>';
            });
            $('#list-nguyenlieu-coso').html(nguyenlieu_html);
            resetThemNLDN();
            var sanphams_html = '';
            sanphams.forEach(function(sp) {
                sanphams_html += '<tr onmouseover="this.style.background = \'#EEE0C5\'" onmouseout="this.style.background = \'#ffffff\'">' +
                        '<td align="right">' +
                        sp["SanPhamDoanhNghiep"]["stt"] +
                        '<input type="hidden" value="' + sp["SanPhamDoanhNghiep"]["colMa"] + '">' +
                        '</td>' +
                        '<td align="left">' +
                        sp["Sanpham"]["tensanpham"] +
                        '</td>' +
                        '<td align="left">' +
                        sp["SanPhamDoanhNghiep"]["colDVi"] +
                        '</td>' +
                        '<td align="right">' +
                        sp["SanPhamDoanhNghiep"]["colCongSuatTT"] +
                        '</td>' +
                        ' <td width="35px" align="center">' +
                        '<a href="javascript:doUpdate(5,' + sp["SanPhamDoanhNghiep"]["colMa"] + ');">Sửa</a>' +
                        '</td>' +
                        '<td width="35px" align="center">' +
                        '<a href="javascript:doDelete(20,' + sp["SanPhamDoanhNghiep"]["colMa"] + ')">Xóa</a>' +
                        '</td>' +
                        '</tr>';
            });
            $('#list-sanpham-coso').html(sanphams_html);
            resetThemSPDN();
        } catch (e) {
        }
    }
    function ThemNLDN() {
        var CSSX = $('#drpCoso').val();
        var stt = $('#txtThuTuNL').val();
        var colDonVi = $('#txtDonViNL').val();
        var txtTenNL = $('#txtTenNL').val();
        var txtSoLuongNL = $('#txtSoLuongNL').val();
        var url = "<?php echo Router::url('/admin/doanhnghiep/getinfo') ?>";
        var data = {colCSSX: CSSX, stt: stt, colNguyenLieu: txtTenNL, colLuongSD: txtSoLuongNL, colDonVi: colDonVi};
        doPostAjax(url, data, 'renderlist');
    }
    function resetThemNLDN() {
        $('#txtThuTuNL').val('');
        $('#txtDonViNL').val('');
        $('#txtSoLuongNL').val('');
    }
    function ThemSPDN() {
        var CSSX = $('#drpCoso').val();
        var stt = $('#txtThuTuSP').val();
        var txtTenSanPham = $('#txtTenSP').val();
        var txtDVi = $('#txtDVi').val();
        var txtCongSuatTT = $('#txtCongSuatTT').val();
        var url = "<?php echo Router::url('/admin/doanhnghiep/getinfo') ?>";
        var data = {colCSSX: CSSX, stt: stt, colSanPham: txtTenSanPham, colCongSuatTT: txtCongSuatTT, colDVi: txtDVi};
        doPostAjax(url, data, 'renderlist');
    }
    function resetThemSPDN() {
        $('#txtThuTuSP').val('');
        $('#txtDVi').val('');
        $('#txtCongSuatTT').val('');
    }
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>
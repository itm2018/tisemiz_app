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
<!--                                <select name="drpCoso" id="drpCoso">
                                    <option selected="selected" value="785783">Evolable Asia</option>
                                </select>-->
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
                                            <th width="60px">
                                                Số lượng(Kg/năm)
                                            </th>
                                            <th width="100px" colspan="2">
                                                Chức năng
                                            </th>
                                        </tr>

<!--                                        <tr onmouseover="this.style.background = '#EEE0C5'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
                                            <td align="right">
                                                1
                                            </td>
                                            <td align="left">
                                                fasdf
                                            </td>
                                            <td align="right">
                                                1.544
                                            </td>
                                            <td width="35px" align="center">
                                                <a href="javascript:updateItem('785784','fasdf','1544','1');">Sửa</a>
                                            </td>
                                            <td width="35px" align="center">
                                                <a href="javascript:doDeleteNL('785784','fasdf','DangKyCNTID=785419&CosoID=785783')">Xóa</a>
                                            </td>
                                        </tr>

                                        <tr onmouseover="this.style.background = '#EEE0C5'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(238, 224, 197);">
                                            <td align="right">
                                                2
                                            </td>
                                            <td align="left">
                                                fsdfsd
                                            </td>
                                            <td align="right">
                                                32.434
                                            </td>
                                            <td width="35px" align="center">
                                                <a href="javascript:updateItem('785785','fsdfsd','32434','2');">Sửa</a>
                                            </td>
                                            <td width="35px" align="center">
                                                <a href="javascript:doDeleteNL('785785','fsdfsd','DangKyCNTID=785419&CosoID=785783')">Xóa</a>
                                            </td>
                                        </tr>-->

                                    <tbody id="list-nguyenlieu-coso">
                                        <tr onmouseover="this.style.background = '#EEE0C5'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(238, 224, 197);">
                                            <td align="right">
                                                2
                                            </td>
                                            <td align="left">
                                                fsdfsd
                                            </td>
                                            <td align="right">
                                                32.434
                                            </td>
                                            <td width="35px" align="center">
                                                <a href="javascript:updateItem('785785','fsdfsd','32434','2');">Sửa</a>
                                            </td>
                                            <td width="35px" align="center">
                                                <a href="javascript:doDeleteNL('785785','fsdfsd','DangKyCNTID=785419&CosoID=785783')">Xóa</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tr>
                                        <td width="60px">
                                            <input name="txtThuTuNL" type="text" value="3" id="txtThuTuNL" style="width:100%;">
                                            <input name="hidID" type="hidden" id="hidID">
                                        </td>
                                        <td>
                                            <input name="txtTenNL" type="text" id="txtTenNL" style="width:100%;">
                                        </td>
                                        <td width="68px">
                                            <input name="txtSoLuongNL" type="text" id="txtSoLuongNL" style="width:100%;">
                                        </td>
                                        <td style="width: 85px" colspan="2" align="center">
                                            <input name="cmdAddNL" type="submit" id="cmdAddNL" style="width: 80px; height: 24px" onclick="KTNL(this)" value="Thêm">
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
                                Số lượng(Kg/năm)
                            </th>
                            <th width="100px" colspan="2">
                                Chức năng
                            </th>
                        </tr>
                    <tbody id="list-sanpham-coso">
                        
                    </tbody>
                        <tr>
                            <td width="60px">
                                <input name="txtThuTuSP" type="text" value="1" id="txtThuTuSP" style="width:100%;">
                                <input name="hidIDSP" type="hidden" id="hidIDSP">
                            </td>
                            <td>
                                <input name="txtTenSP" type="text" id="txtTenSP" style="width:100%;">
                            </td>
                            <td width="68px">
                                <input name="txtSoLuongSP" type="text" id="txtSoLuongSP" style="width:100%;">
                            </td>
                            <td style="width: 60px" colspan="2" align="center">
                                <input name="cmdAddSP" type="submit" id="cmdAddSP" style="width: 80px; height: 24px" onclick="KTSP(this)" value="Thêm">
                            </td>
                        </tr>
                    </tbody></table>
            </td>
        </tr>
        <tr>
            <td>
                <input onclick="__doPostBack('cmdQuayLai', '')" name="cmdQuayLai" type="button" id="cmdQuayLai" style="width: 80px; height: 24px" value="Quay lại">
                <input type="submit" name="cmdTiep" value="Tiếp tục" id="cmdTiep" style="width:80px;">

            </td>
        </tr>
    </tbody></table>



</td></tr></tbody></table>
<script type="text/javascript">
    $(function() {
        $('#drpCoso').bind("change", function() {
            var colMa =  parseInt($(this).val());
            var url="<?php echo Router::url('/admin/doanhnghiep/get')?>";
            var data = {colMa:colMa};
            doPostAjax(url,data,'renderlist');
        });
         $('#drpCoso').trigger("change");
    });
    function renderlist(data){
    console.log(data);
    }
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>
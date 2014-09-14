<div style="width: 800px; margin: 0 auto; padding: 2px;">
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
                                        <img id="Img5" src="/img/b5_actv_cnt.gif" alt="" border="0"></a>
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
                    <table id="table4" cellspacing="0" cellpadding="0" width="100%" border="0">
                        <tbody><tr>
                                <td>

                                </td>
                            </tr>
                            <tr>
                                <td align="center">
                                    <table border="0" cellpadding="0" cellspacing="0">
                                        <tbody><tr>
                                                <td>
                                                    <table class="grid" id="Table5" border="0" cellpadding="0" cellspacing="0" width="780px">

                                                        <thead>
                                                            <tr>
                                                                <th width="40px">
                                                                    Thứ tự
                                                                </th>
                                                                <th>
                                                                    Tên giấy tờ
                                                                </th>
                                                                <th>
                                                                    File kèm theo
                                                                </th>
                                                                <th colspan="2">
                                                                    Chức năng
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="list-ho-so-kem-theo">
                                                            <?php if (isset($listhosokemtheo) && count($listhosokemtheo)): ?>
                                                                <?php foreach ($listhosokemtheo as $hoso): ?>
                                                                    <tr onmouseover="this.style.background = '#EEE0C5'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
                                                                        <td align="center">
                                                                            <?php echo $hoso['Hosokemtheo']['stt'] ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $hoso['Hosokemtheo']['tenhoso'] ?>
                                                                        </td>
                                                                        <td width="35px" align="center">
                                                                            <a target="_blank" href="<?php echo Router::url('/admin/baocaos/').$hoso['Hosokemtheo']['filepath'] ?>">Xem</a>
                                                                        </td>
                                                                        <td width="35px" align="center">
                                                                            <a href="javascript:doUpdate(15,<?php echo $hoso['Hosokemtheo']['id']?>);">Sửa</a>
                                                                        </td>
                                                                        <td width="35px" align="center">
                                                                            <a href="javascript:doDelete(100,<?php echo $hoso['Hosokemtheo']['id']?>);">Xóa</a>
                                                                        </td>
                                                                    </tr>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </tbody>
                                                        <tbody>
                                                            <?php echo $this->Form->create('Hosokemtheo', array('type' => 'file')) ?>
                                                            <tr>
                                                                <td style="width: 30px">
                                                                    <?php echo $this->Form->input('stt', array('div' => false, 'label' => false, 'type' => 'text', 'style' => 'width: 98%','required'=>'required')) ?>
                                                                    <?php echo $this->Form->hidden('colMaBaocao', array('value' => $colMaBaocao)) ?>
                                                                </td>
                                                                <td style="width: 150px">
                                                                    <?php echo $this->Form->input('tenhoso', array('div' => false, 'label' => false, 'type' => 'text', 'style' => 'width: 98%','required'=>'required')) ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $this->Form->input('tenfile', array('div' => false, 'label' => false, 'type' => 'file', 'style' => 'width: 98%','required'=>'required')) ?>
                                                                </td>
                                                                <td style="width: 80px" align="center">
                                                                    <?php echo $this->Form->submit('Cập nhật', array('div' => false, 'label' => false, 'style' => 'width: 80px; height: 24px')) ?>
                                                                </td></tr>
                                                            <?php echo $this->Form->end() ?>
                                                        </tbody></table>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top" height="15">
                                    <!-- BEGIN PAGER --->

                                    <!-- END PAGER --->
                                </td>
                            </tr>
                            <tr>
                                <td height="20px;" align="left" valign="top" style="font-family: Arial; font-size: 12px;
                                    font-style: italic; color: #000; line-height: 18px;">
                                    <b>Ghi chú</b>:Nên Scan ảnh nhỏ(Size &lt; 2MB).Scan đen trắng(Nên nén lại).<br>
                                    - Bản sao Giấy chứng nhận đăng ký kinh doanh, Quyết định thành lập cơ sở, Giấy chứng
                                    nhận đầu tư hoặc các giấy tờ tương đương;<br>
                                    - Bản sao Quyết định phê duyệt báo cáo ĐTM, Giấy xác nhận đăng ký Bản cam kết BVMT
                                    hay Phiếu xác nhận Bản đăng ký đạt tiêu chuẩn môi trường, Quyết định phê duyệt hoặc
                                    Giấy xác nhận Đề án BVMT hoặc bất kỳ giấy tờ về môi trường nào khác của cơ quan
                                    có thẩm quyền (nếu có);<br>
                                    - Bản sao kết quả phân tích để chứng minh các chất thải thuộc loại * phát sinh tại
                                    cơ sở (trừ các mã từ 19 12 01 đến 19 12 04) không vượt ngưỡng CTNH theo quy định
                                    tại Quy chuẩn kỹ thuật quốc gia QCVN 07:2009/BTNMT để đăng ký là các chất thải thông
                                    thường tại Điểm 3.2 của Đơn (nếu không tiến hành lấy mẫu phân tích thì phải đăng
                                    ký là CTNH);<br>
                                    - Bản sao báo cáo ĐTM và Giấy xác nhận về việc thực hiện báo cáo ĐTM và yêu cầu
                                    của Quyết định phê duyệt, Bản cam kết BVMT hay Bản đăng ký đạt tiêu chuẩn môi trường
                                    hoặc Đề án BVMT và tất cả các hồ sơ, giấy tờ pháp lý về môi trường liên quan đến
                                    việc đầu tư các công trình bảo vệ môi trường phục vụ việc tự xử lý CTNH (chỉ áp
                                    dụng đối với trường hợp có công trình tự xử lý CTNH);<br>
                                    - Bản giải trình các điểm sửa đổi, bổ sung (trường hợp cấp lại Sổ đăng ký).
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step3') ?>"><input name="cmdQuayLai" type="button" id="cmdQuayLai" style="width: 80px; height: 24px" value="Quay lại"></a>
                    <a href="<?php echo Router::url('/admin/baocao/baocaochatthainguyhai/step5') ?>"><input type="submit" name="cmdTiep" value="Tiếp tục" id="cmdTiep" style="width:80px;"></a>
                                </td>
                            </tr>
                        </tbody></table>
                </td>
            </tr>
        </tbody></table>
</div>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>
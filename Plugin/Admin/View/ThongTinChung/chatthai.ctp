<style>
    .function a{
        padding: 5px;
        color: #0077b3;
    }
</style>
<div style="width: 800px; margin: 0 auto; padding: 2px;">
    <h2>Cập nhật thông tin danh mục chất thải nguy hại</h2>
    <table id="table1" cellspacing="0" cellpadding="0" width="800px" bgcolor="white" border="0">
        <tbody>
            <tr>
                <td align="left" valign="top" style="height: 27px">
                </td>
                <td bgcolor="#dce5ec" align="left" style="text-align: center; color: #000000; height: 27px;" valign="top" colspan="2">
                    <strong><span style="font-size: 12pt; font-family: Times New Roman">DANH MỤC CHẤT THẢI</span></strong>
                </td>
            </tr>
            <tr>
                <td align="left" height="100%" valign="top">
                </td>
                <td align="left" colspan="2" style="height: 10px" valign="top">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Mã danh mục</td>
                <td>Tên danh mục</td>
            </tr>
            <tr>
                <?php echo $this->Form->create('DanhMucChatThai', array('method' => 'post')) ?>
                <td></td>
                <td>
                    <?php echo $this->Form->input('ma_danhmuc', array('div' => false, 'label' => false, 'id' => 'ma_danhmuc', 'style' => 'width: 100px;', 'required' => 'required')) ?>
                </td>
                <td>
                    <?php echo $this->Form->input('ten_danhmuc', array('div' => false, 'label' => false, 'id' => 'ten_danhmuc', 'style' => 'width: 500px;', 'required' => 'required')) ?>
                    <span>
                        <?php echo $this->Form->submit('Thêm danh mục', array('div' => false, 'label' => false, 'id' => 'btn-them_danhmucchatthai')) ?>
                    </span>
                </td>
                <?php echo $this->Form->end(); ?>
            </tr>
            <tr>
                <td align="left" height="100%" valign="top">
                </td>
                <td align="left" colspan="2" style="height: 10px" valign="top">
                </td>
            </tr>
            <tr style="color: #000000">
                <td align="left" valign="top" style="height: 22px">
                </td>
                <td align="left" style="width: 25%; text-align: left; height: 22px;" valign="top">
                    <strong>Dòng thải chính</strong>
                </td>
                <td align="left" style="text-align: left; width: 100%; height: 22px;" valign="top">
<!--                    <select name="group_danhmucchatthai" id="group_danhmucchatthai" style="width:600px;">
                        <option selected="selected" value="4796">01 - CHẤT THẢI TỪ NGÀNH THĂM DÒ, KHAI THÁC, CHẾ BIẾN KHOÁNG SẢN, DẦU KHÍ VÀ THAN</option>
                        <option value="4821">02 - CHẤT THẢI TỪ NGÀNH SẢN XUẤT HOÁ CHẤT VÔ CƠ</option>
                        <option value="4859">03 - CHẤT THẢI TỪ NGÀNH SẢN XUẤT HOÁ CHẤT  HỮU CƠ</option>
                        <option value="4927">04 - CHẤT THẢI TỪ NGÀNH NHIỆT ĐIỆN VÀ CÁC QUÁ TRÌNH NHIỆT KHÁC</option>
                        <option value="4938">05 - CHẤT THẢI TỪ NGÀNH LUYỆN KIM </option>
                        <option value="5002">06 - CHẤT THẢI TỪ NGÀNH SẢN XUẤT VẬT LIỆU XÂY DỰNG VÀ THỦY TINH</option>
                        <option value="5016">07 - CHẤT THẢI TỪ QUÁ TRÌNH XỬ LÝ, CHE PHỦ BỀ MẶT, TẠO HÌNH KIM LOẠI VÀ CÁC VẬT LIỆU KHÁC</option>
                        <option value="5046">08 - CHẤT THẢI TỪ QUÁ TRÌNH SẢN XUẤT, ĐIỀU CHẾ, CUNG ỨNG, SỬ DỤNG CÁC SẢN PHẨM CHE PHỦ (SƠN, VÉC NI, MEN THUỶ TINH), CHẤT KẾT DÍNH, CHẤT BỊT KÍN VÀ MỰC IN</option>
                        <option value="5064">09 - CHẤT THẢI TỪ NGÀNH CHẾ BIẾN GỖ, SẢN XUẤT CÁC SẢN PHẨM GỖ, GIẤY VÀ BỘT GIẤY</option>
                        <option value="5073">10 - CHẤT THẢI TỪ NGÀNH CHẾ BIẾN DA, LÔNG VÀ DỆT NHUỘM</option>
                        <option value="5082">11 - CHẤT THẢI XÂY DỰNG VÀ PHÁ DỠ (KỂ CẢ ĐẤT ĐÀO TỪ CÁC KHU VỰC BỊ Ô NHIỄM)</option>
                        <option value="5106">12 - CHẤT THẢI TỪ CÁC CƠ SỞ TÁI CHẾ, XỬ LÝ, TIÊU HUỶ CHẤT THẢI, XỬ LÝ NƯỚC CẤP SINH HOẠT VÀ CÔNG NGHIỆP</option>
                        <option value="5153">13 - CHẤT THẢI TỪ NGÀNH Y TẾ VÀ THÚ Y  (trừ chất thải sinh hoạt của ngành này)</option>
                        <option value="5165">14 - CHẤT THẢI TỪ NGÀNH NÔNG NGHIỆP, LÂM NGHIỆP VÀ THUỶ SẢN</option>
                        <option value="5179">15 - THIẾT BỊ, PHƯƠNG TIỆN GIAO THÔNG VẬN TẢI ĐÃ HẾT HẠN SỬ DỤNG VÀ CHẤT THẢI TỪ HOẠT ĐỘNG PHÁ DỠ, BẢO DƯỠNG THIẾT BỊ, PHƯƠNG TIỆN GIAO THÔNG VẬN TẢI </option>
                        <option value="5207">16 - CHẤT THẢI HỘ GIA ĐÌNH VÀ CHẤT THẢI SINH HOẠT TỪ CÁC NGUỒN KHÁC</option>
                        <option value="5223">17 - DẦU THẢI, CHẤT THẢI TỪ NHIÊN LIỆU LỎNG, CHẤT THẢI DUNG MÔI HỮU CƠ, MÔI CHẤT LẠNH VÀ CHẤT ĐẨY (propellant)</option>
                        <option value="5268">18 - CÁC LOẠI CHẤT THẢI BAO BÌ, CHẤT HẤP THỤ, GIẺ LAU, VẬT LIỆU LỌC VÀ VẢI BẢO VỆ </option>
                        <option value="5274">19 - CÁC LOẠI CHẤT THẢI KHÁC</option>
                        <option value="5328">20 - Chất thải rắn</option>

                    </select>-->
                    <?php echo $this->Form->input('ma_danhmuc', array('id' => 'group_danhmucchatthai', 'style' => 'width:600px;', 'div' => false, 'label' => false, 'options' => Common::getListDanhMucChatThai())) ?>
                    <span class="function"><a href="javascript:doUpdateDM();">Sửa</a></span><span class="function"><a href="javascript:doDeleteDM();">Xóa</a></span>
                </td>
            </tr>
            <tr>
                <td align="left" height="100%" valign="top">
                </td>
                <td align="left" colspan="2" style="height: 10px" valign="top">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Mã nguồn thải</td>
                <td>Tên nguồn thải</td>
            </tr>
            <tr>
                <?php echo $this->Form->create('NguonThai', array('method' => 'post')) ?>
                <td></td>
                <td>
                    <?php echo $this->Form->input('ma_nguonthai', array('div' => false, 'label' => false, 'id' => 'ma_nguonthai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
                </td>
                <td>
                    <?php echo $this->Form->input('ten_nguonthai', array('div' => false, 'label' => false, 'id' => 'ten_nguonthai', 'style' => 'width: 500px;', 'required' => 'required')) ?>
                    <?php echo $this->Form->hidden('id_danhmucchatthai', array('id' => 'id_danhmucchatthai_nguonthai')) ?>
                    <span>
                        <?php echo $this->Form->submit('Thêm nguồn thải', array('div' => false, 'label' => false, 'id' => 'btn-them-nguonthai')) ?>
                    </span>
                </td>
                <?php echo $this->Form->end(); ?>
            </tr>
            <tr>
                <td align="left" height="100%" valign="top">
                </td>
                <td align="left" colspan="2" style="height: 10px" valign="top">
                </td>
            </tr>
            <tr>
                <td align="left" valign="top" style="height: 29px">
                </td>
                <td align="left" style="width: 15%; height: 29px;" valign="top">
                    <strong>Nguồn thải</strong>
                </td>
                <td align="left" style="width: 100%; height: 29px;" valign="top">
                    <select name="group_nguonthai" id="group_nguonthai" style="width:600px;">
                        <!--                        <option selected="selected" value="4797">0101 - Chất thải từ quá trình chế biến quặng sắt bằng phương pháp hoá-lý</option>
                                                <option value="4801">0102 - Chất thải từ quá trình chế biến quặng kim loại màu bằng phương pháp hoá-lý</option>
                                                <option value="4803">0103 - Bùn thải và các chất thải khác từ quá trình khoan</option>
                                                <option value="4806">0104 - Chất thải từ quá trình lọc dầu</option>
                                                <option value="4817">0105 - Chất thải từ quá trình chế biến than bằng phương pháp nhiệt phân</option>
                                                <option value="4819">0106 - Chất thải từ quá trình tinh chế và vận chuyển khí thiên nhiên</option>-->

                    </select>
                    <span class="function"><a href="javascript:doUpdateNT();">Sửa</a></span><span class="function"><a href="javascript:doDeleteNT();">Xóa</a></span>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>Mã CTNH</td>
                <td>Tên chất thải <span style="margin-left: 320px;">Dạng tồn tại</span></td>
            </tr>
            <tr>
                <?php echo $this->Form->create('ChatThai', array('method' => 'post')) ?>
                <td></td>
                <td>
                    <!--<input type="text" name="ma_chatthai" id="ma_chatthai" style="width: 100px;">-->
                    <?php echo $this->Form->input('ma_chatthai', array('div' => false, 'label' => false, 'id' => 'ma_chatthai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
                </td>
                <td>
                    <!--<input type="text" name="ten_chatthai" id="ten_chatthai" style="width: 400px;">-->
                    <?php echo $this->Form->input('ten_chatthai', array('div' => false, 'label' => false, 'id' => 'ten_chatthai', 'style' => 'width: 400px;', 'required' => 'required')) ?>
                    <!--<input type="text" name="tt_tontai" id="tt_tontai" style="width: 100px;">-->
                    <?php echo $this->Form->input('tt_tontai', array('div' => false, 'label' => false, 'id' => 'tt_tontai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
                    <?php echo $this->Form->hidden('id_nguonthai', array('id' => 'id_nguonthai_chatthai')) ?>
                    <span>
                        <!--<button class="" id="btn-them-chatthai">Thêm chất thải</button>-->
                        <?php echo $this->Form->submit('Thêm chất thải', array('div' => false, 'label' => false, 'id' => 'btn-them-chatthai', 'style' => 'width: 110px;')) ?>
                    </span>

                </td>
                <?php echo $this->Form->end; ?>
            </tr>
            <tr>
                <td align="left" height="100%" valign="top">
                </td>
                <td align="left" colspan="2" style="height: 10px" valign="top">
                </td>
            </tr>
            <tr>
                <td valign="top" align="left" height="100%">
                </td>
                <td align="left" valign="top" colspan="2">

                    <table class="grid" id="tblChatthaiList" cellspacing="1" cellpadding="2" width="800px;" border="0">
                        <thead><tr>
                                <th>
                                    Mã CTNH
                                </th>
                                <th>
                                    Tên
                                </th>
                                <th>
                                    TT Tồn Tại
                                </th>
                                <th colspan="2">
                                    Chức năng
                                </th>
                            </tr>
                        </thead>
                        <tbody id="list-chat-thai">

                        </tbody></table>

                </td>
            </tr>

            <tr>
                <td align="left" valign="top" style="height: 29px" colspan="4">
                    &nbsp;
                </td>
            </tr>

        </tbody></table>
</div>
<script type="text/javascript">
    $(function() {
        var json_str = '<?php echo Common::getFullListDanhMucChatThai() ?>';
        var json_str_ct = '<?php echo Common::getFullListNguonThai() ?>';
        $("#group_danhmucchatthai").bind("change", function() {
            $("#id_danhmucchatthai_nguonthai").val($(this).val());
            renderListNguonThai($(this).val(), json_str);
        }).trigger("change");
        $("#group_nguonthai").bind("change", function() {
            $("#id_nguonthai_chatthai").val($(this).val());
            setTimeout(renderListChatThai($(this).val(), json_str_ct),3000);
        }).trigger("change");
    });
    function renderListNguonThai(id_danhmuc, json_str) {
        var obj = parseJson(json_str);
        //var danhmucs = obj["DanhMucChatThai"];
        var options_html = '';
        obj.forEach(function(dm) {
            if (dm["DanhMucChatThai"]["id"] == id_danhmuc) {
                var nguonthais = dm["NguonThai"];
                nguonthais.forEach(function(nt) {
                    options_html += '<option value="' + nt["id"] + '">' + nt["ma_nguonthai"] + ' - ' + nt["ten_nguonthai"] + '</option>';
                });
            }
        });
        $('#group_nguonthai').html(options_html);
    }
    function renderListChatThai(id_nguonthai, json_str_ct) {
//        json_str = json_str.Replace('\/',"");
        var obj = parseJson(json_str_ct);
        console.log(obj);
        var list_html = '';
        obj.forEach(function(nt) {
            console.log(nt);
            if (nt["NguonThai"]["id"] == id_nguonthai) {
                var chatthais = nt["ChatThai"];
                chatthais.forEach(function(ct) {
                    list_html += '<tr><td class="DataTD"><font class="DataFONT">' +
                            ct['ma_chatthai'] +
                            '</font></td><td class="DataTD" style="width: 500px;">' +
                            ct['ten_chatthai'] +
                            '</td><td class="DataTD"><font class="DataFONT">' +
                            ct['tt_tontai'] +
                            '</font></td>' +
                            '<td><a href="javascript:doUpdate(6,' + ct['id'] + ');">Sửa</a></td>' +
                            '<td><a href="javascript:doDelete(30,' + ct['id'] + ');">Xóa</a></td></tr>';
                });
                
            }
        });
        $('#list-chat-thai').html(list_html);
    }
    function parseJson(json_str) {
        try {
            var rs = JSON.parse(json_str);
            return rs;
        } catch (e) {
            alert('Lỗi lấy dữ liệu từ server');
            return false;
        }
    }
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js') ?>
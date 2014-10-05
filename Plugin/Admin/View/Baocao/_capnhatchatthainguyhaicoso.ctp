<style>
    .function a{
        padding: 5px;
        color: #0077b3;
    }
</style>
<div style="width: 800px; margin: 0 auto; padding: 2px;">
    <!--<h2>Cập nhật thông tin danh mục chất thải nguy hại</h2>-->
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
                    <?php echo $this->Form->create('DanhMucChatThai', array('method' => 'post')) ?>
                    <?php echo $this->Form->input('id', array('id' => 'group_danhmucchatthai', 'style' => 'width:600px;', 'div' => false, 'label' => false, 'options' => Common::getListDanhMucChatThai())) ?>
                    <?php echo $this->Form->end() ?>
                </td>
            </tr>
            <tr>
                <td align="left" height="100%" valign="top">
                </td>
                <td align="left" colspan="2" style="height: 10px" valign="top">
                </td>
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
                    <?php echo $this->Form->create('NguonThai', array('method' => 'post')) ?>
                    <?php echo $this->Form->hidden('id_nguonthai', array('id' => 'id_current_nguonthai', 'value' => isset($id_nguonthai) ? $id_nguonthai : '')) ?>
                    <?php echo $this->Form->input('id', array('id' => 'group_nguonthai', 'style' => 'width:600px;', 'div' => false, 'label' => false, 'options' => array())) ?>
                    <?php echo $this->Form->end(); ?>
                </td>
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
                                <th>
                                    <img onclick="javascript:checkedAllSelects(true);" style="cursor: pointer;" src="/img/CheckAllPlus.gif" alt="Chọn tất" title="Chọn tất">
                                    <img onclick="javascript:checkedAllSelects(false);" style="cursor: pointer;" src="/img/CheckAllMinus.gif" alt="Không chọn gì" title="Không chọn gì">
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
            <?php echo $this->Form->create('ChatThai', array('method' => 'post','id'=>'formListMaCTNH')) ?>
            <tr>
                <td align="left" valign="top" style="height: 29px">
                </td>
                <td align="left" style="width: 15%; height: 29px;" valign="top" colspan="2">
                    <!--<input type="button" id="btnAdd" name="btnAdd" value="Cập nhật vào danh sách lựa chọn">&nbsp;&nbsp;-->
                    <?php echo $this->Form->button('Cập nhật vào danh sách lựa chọn', array('type' => 'button', 'value' => 'Cập nhật vào danh sách lựa chọn', 'id' => 'btnAdd', 'div' => false, 'label' => false)) ?>&nbsp;&nbsp;
                    <?php echo $this->Form->submit('Kết thúc lựa chọn mã CTNH', array('id' => 'cmdAddCTNH', 'div' => false, 'label' => false)) ?>&nbsp;&nbsp;
                    <!--<input name="cmdAddCTNH" type="submit" id="cmdAddCTNH" style="width: 190px; height: 24px" value="Kết thúc lựa chọn mã CTNH">-->
                </td>
            </tr>
            <tr>
                <td align="left" valign="top" style="height: 70px" colspan="4">
                    <!--<textarea name="txtSelected" id="txtSelected" style="width: 100%; height: 70px"></textarea>-->
                    <?php echo $this->Form->input('listMaCTNH', array('id' => 'txtSelected','type'=>'textarea', 'style' => 'width: 100%; height: 70px', 'div' => false, 'label' => false)) ?>
                </td>
            </tr>
            <?php echo $this->Form->end(); ?>
        </tbody></table>
</div>
<script type="text/javascript">
    $(function() {
        var json_str = '<?php echo Common::getFullListDanhMucChatThai() ?>';
        var json_str_ct = '<?php echo Common::getFullListNguonThai() ?>';
        $("#group_danhmucchatthai").bind("change", function() {
            $("#id_danhmucchatthai_nguonthai").val($(this).val());
            renderListNguonThai($(this).val(), json_str);
            $("#group_nguonthai").trigger("change");
        }).trigger("change");
        $("#group_nguonthai").bind("change", function() {
            $("#id_nguonthai_chatthai").val($(this).val());
            setTimeout(renderListChatThai($(this).val(), json_str_ct), 3000);
        }).trigger("change");
        //reset data
        $('#ma_danhmuc').val('');
        $('#ten_danhmuc').val('');
        $('#ma_nguonthai').val('');
        $('#ten_nguonthai').val('');
        $('#ma_chatthai').val('');
        $('#ten_chatthai').val('');
//		$('#tt_tontai').val('');
        var id_nguonthai = $('#id_current_nguonthai').val();
        if (id_nguonthai) {
            $('#group_nguonthai').val(id_nguonthai).trigger("change");
        }
        $('#btnAdd').bind("click", function() {
            doAdd();
        });
        $('#formListMaCTNH').on("submit",function(){
           if($('#txtSelected').html()==''){
               return false;
           }
        });
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
        var list_html = '';
        obj.forEach(function(nt) {
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
                            '<td><input type="checkbox"></td></tr>';
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
    function doUpdateDM() {
        var id_dm = parseInt($('#group_danhmucchatthai').val());
        if (id_dm) {
            doUpdate(7, id_dm);
        }
    }
    function doDeleteDM() {
        var id_dm = parseInt($('#group_danhmucchatthai').val());
        if (id_dm) {
            doDelete(40, id_dm);
        }
    }
    function doUpdateNT() {
        var id_dm = parseInt($('#group_nguonthai').val());
        if (id_dm) {
            doUpdate(8, id_dm);
        }
    }
    function doDeleteNT() {
        var id_dm = parseInt($('#group_nguonthai').val());
        if (id_dm) {
            doDelete(50, id_dm);
        }
    }
    function checkedAllSelects(state) {
        $('#list-chat-thai tr input[type="checkbox"]').each(function() {
            if (state) {
                $(this).prop('checked', 'checked');
            } else {
                $(this).prop('checked', false);
            }
        });
    }
    function doAdd() {
        var list = [];
        var listmactnh = $('#txtSelected').html();
        if (listmactnh != '') {
            //listmactnh +=',';
            list = listmactnh.split(",");
        }
        var html = '';
        $('#list-chat-thai tr').each(function() {
            var checked = $(this).find('input[type="checkbox"]').prop('checked');
            var mactnh = $(this).find('td:first').text();
            if (checked) {
                list.push(mactnh);
            }
            else {
                if (exist(mactnh, list)) {
                    list = remove(mactnh, list);
                }
            }
        });
        if (list.length > 0) {
            var uniq = unique(list);
            var i = 0;
            for (i = 0; i < uniq.length - 1; ++i) {
                html += uniq[i] + ',';
            }
            html += uniq[i];
        }
        $('#txtSelected').html(html);

    }
    function exist(value, arr) {
        var index = arr.indexOf(value);
        if (index > -1) {
            return true;
        }
        return false;
    }
    function unique(arr) {
        var results = arr;
        var count = arr.length;
        for (var i = 0; i < count - 1; ++i) {
            for (var j = i + 1; j < count; ++j) {
                if (arr[i] === arr[j]) {
                    results.splice(j, 1);
                }
            }
        }
        return results;
    }
    function remove(value, arr) {
        var result = arr;
        for (var i = 0; i < arr.length; ++i) {
            if (arr[i] === value) {
                result.splice(i, 1);
            }
        }
        return result;
    }

</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js') ?>
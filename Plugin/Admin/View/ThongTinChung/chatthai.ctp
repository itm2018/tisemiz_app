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
					<?php echo $this->Form->create('DanhMucChatThai', array('method' => 'post')) ?>
					<?php echo $this->Form->input('id', array('id' => 'group_danhmucchatthai', 'style' => 'width:600px;', 'div' => false, 'label' => false, 'options' => Common::getListDanhMucChatThai())) ?>
                    <span class="function"><a href="javascript:doUpdateDM();">Sửa</a></span><span class="function"><a href="javascript:doDeleteDM();">Xóa</a></span>
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
					<?php echo $this->Form->create('NguonThai', array('method' => 'post')) ?>
					<?php echo $this->Form->hidden('id_nguonthai', array('id' => 'id_current_nguonthai', 'value' => isset($id_nguonthai) ? $id_nguonthai : '')) ?>
					<?php echo $this->Form->input('id', array('id' => 'group_nguonthai', 'style' => 'width:600px;', 'div' => false, 'label' => false, 'options' => array())) ?>
                    <span class="function"><a href="javascript:doUpdateNT();">Sửa</a></span><span class="function"><a href="javascript:doDeleteNT();">Xóa</a></span>
					<?php echo $this->Form->end(); ?>
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
					<?php echo $this->Form->input('ma_chatthai', array('div' => false, 'label' => false, 'id' => 'ma_chatthai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
                </td>
                <td>
					<?php echo $this->Form->input('ten_chatthai', array('div' => false, 'label' => false, 'id' => 'ten_chatthai', 'style' => 'width: 400px;', 'required' => 'required')) ?>
					<?php echo $this->Form->input('tt_tontai', array('div' => false, 'label' => false, 'id' => 'tt_tontai', 'style' => 'width: 100px;', 'required' => 'required')) ?>
					<?php echo $this->Form->hidden('id_nguonthai', array('id' => 'id_nguonthai_chatthai')) ?>
                    <span>
						<?php echo $this->Form->submit('Thêm chất thải', array('div' => false, 'label' => false, 'id' => 'btn-them-chatthai', 'style' => 'width: 110px;')) ?>
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
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js') ?>
<!--form rác thải nguy hại-->
<p><h3>3.7. THÔNG TIN CHẤT THẢI NGUY HẠI</h3></p>
<div class="scroll">
<table class="table">
    <thead>
        <tr>
			<th rowspan="2">STT</th>
            <th rowspan="2">
                Thời điểm
            </th>
            <th rowspan="2">
                Dạng chất thải
            </th>
            <th rowspan="2">
                Tổng khối lượng
            </th>
            <th rowspan="2">
                Nguồn phát sinh<br> chủ yếu
            </th>
            <th rowspan="2">
                Hình thức<br> lưu giữ
            </th>
            <th rowspan="2">
                Bán ra
            </th>
            <th rowspan="2">
                Thải bỏ
            </th>
            <th rowspan="2">
                Đơn vị<br> thu mua
            </th>
            <th rowspan="2">
                Định kỳ<br> thu mua
            </th>
			<th rowspan="2">
                Ghi chú
            </th>
            <th colspan="2" class="center">
                Chức năng
            </th>
        </tr>
		<tr>
			<th>Cập nhật</th>
			<th>Xóa</th>
		</tr>
    </thead>

	<tbody id="list-kqpt-chatthainguyhai">
        <?php if (isset($listbienphapxulychatthainguyhai) && count($listbienphapxulychatthainguyhai)): ?>
            <?php $i = 0; $stt=1;?>
            <?php foreach ($listbienphapxulychatthainguyhai as $xlctNH): ?>
                <tr class="<?php echo $classes[$i]; ?>">
					<td><?php echo $stt?></td>
                    <td>
                        <input type="hidden" name="colMa" value="<?php echo $xlctNH['ChatThaiNguyHai']['colMa'] ?>">
                        <?php echo $xlctNH['ChatThaiNguyHai']['colThoiGian'] ? date('d/m/Y', strtotime($xlctNH['ChatThaiNguyHai']['colThoiGian'])) : '' ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colDangCThai']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colTongKL']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colNguonPSinh']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colHThucLuu']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colBanRa']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colThaiBo']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colDViThuMua']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colDinhKyThuMua']) ?>
                    </td>
                    <td>
                        <?php echo h($xlctNH['ChatThaiNguyHai']['colGhiChu']) ?>
                    </td>
					<td>
						<button title="Ấn để cập nhật" type="button"
								class="btn
				btn-edit" onclick="javascript:loadData(1025,<?php echo h($xlctNH['ChatThaiNguyHai']['colMa']) ?>);
							"></button>
					</td>
                    <td>
                        <input type="checkbox" name="deleterow<?php echo $xlctNH['ChatThaiNguyHai']['colMa'] ?>">
                    </td>
                </tr>
                <?php
                ++$i;
				++$stt;
                if ($i == 3) {
                    $i = 0;
                }
                ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
	</table>
</div>
<form id="formupdatechatthainguyhai" method="post">
<table class="table">
    <tbody>
        <tr>
            <td>
				<input type="hidden" name="colMa" class="loadData" prefix="RH_">
				<input type="hidden" name="colCSSX" class="loadData" prefix="RH_">
				<input title="Thời điểm" type="text" name="colThoiGian" class="input loadData" prefix="RH_"
					   style="width:
				90px;" placeholder="dd/mm/yyyy">
            </td>
			<td>
				<input title="Chất thải" type="text" name="colDangCThai" class="input loadData" prefix="RH_"
					   style="max-width:
				100px;">
            </td>
			<td>
				<input title="Tổng khối lượng" type="text" name="colTongKL" class="input loadData" prefix="RH_"
					   style="width:
				60px;">
            </td>
			<td>
				<input title="Nguồn phát sinh" type="text" name="colNguonPSinh" class="input loadData" prefix="RH_"
					   style="max-width:
				100px;">
            </td>
			<td>
				<input title="Hình thức lưu" type="text" name="colHThucLuu" class="input loadData" prefix="RH_"
					   style="max-width:
				100px;">
            </td>
			<td>
<!--				<input type="hidden" name="colBanRa" class="input loadData" prefix="RH_" style="width: 20px;"-->
<!--					   id="h_colBanRa">-->
				<input title="Bán ra" type="checkbox" name="colBanRa" class="input loadData" prefix="RH_"
					   style="width:
				20px;" id="c_colBanRa">
            </td>
			<td>
<!--				<input type="hidden" name="colThaiBo" class="input loadData" prefix="RH_" style="width: 20px;"-->
<!--					   id="h_colThaiBo">-->
				<input title="Thải bỏ" type="checkbox" name="colThaiBo" class="input loadData" prefix="RH_"
					   style="width:
				20px;" id="c_colThaiBo">
            </td>
			<td>
				<input title="DV Thu mua" type="text" name="colDViThuMua" class="input loadData" prefix="RH_"
					   style="max-width:
				100px;">
            </td>
			<td>
				<input title="DK Thu mua" type="text" name="colDinhKyThuMua" class="input loadData" prefix="RH_"
					   style="max-width:
				100px;">
            </td>
			<td>
				<input title="Ghi chú" type="text" name="colGhiChu" class="input loadData" prefix="RH_"
					   style="max-width:
				100px;">
            </td>
			<td>
				<input type="button" name="submit" class="btn btn-success btn-update"
					   onclick="javascript:updatechatthainguyhai();"
					   value="Cập nhật">
			</td>
            <td>
                <button type="button" name="delete" class="btn btn-danger" id="btn-xoa-chatthainguyhai">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
</form>
<p><h3>THÔNG TIN KIỂM SOÁT CHẤT THẢI NGUY HẠI</h3></p>
<?php echo $this->Form->create('ChatThaiNguyHai', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormChatThaiNguyHai')); ?>
<div class="form-group">
    <label for="inputNam" class="col-sm-2 control-label">Thời điểm <span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colThoiGian', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput validate-date', 'tentruong' => 'Thời điểm', 'type' => 'text', 'placeholder' => __('dd/mm/yyyy'), 'id' => 'txtcolThoiGian_RacThaiNH'))
    ;
    ?>
</div>    
<div class="form-group">
    <label for="inputDangchatthai" class="col-sm-2 control-label">Dạng chất thải<span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colDangCThai', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'tentruong' => 'Dạng chất thải', 'type' => 'text', 'id' => 'txtcolDangCThai'))
    ;
    ?>
</div>    
<div class="form-group">
    <label for="inputcolTongKL" class="col-sm-2 control-label">Tổng khối lượng<span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colTongKL', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'tentruong' => 'Tổng khối lượng', 'type' => 'text', 'id' => 'txtcolTongKL'))
    ;
    ?>
</div>    

<div class="form-group">
    <label for="inputNguonphatsinhchuyeu_khi" class="col-sm-2 control-label">Nguồn phát sinh chủ yếu<span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colNguonPSinh', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'tentruong' => 'Nguồn phát sinh chủ yếu', 'type' => 'text', 'id' => 'txtcolNguonPSinh'))
    ;
    ?>
</div>
<div class="form-group">
    <label for="inputcolHThucLuu" class="col-sm-2 control-label">Hình thức lưu giữ<span class="text-danger">*</span></label>
    <?php
    echo $this->Form->input('colHThucLuu', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'tentruong' => 'Hình thức lưu giữ', 'type' => 'text', 'id' => 'colHThucLuu'))
    ;
    ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->input('colBanRa', array('div' => array('class' => 'checkbox'), 'label' => __('Bán ra'), 'type' => 'checkbox'))
        ;
        ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->input('colThaiBo', array('div' => array('class' => 'checkbox'), 'label' => __('Thải bỏ'), 'type' => 'checkbox'))
        ;
        ?>
    </div>
</div>
<div class="form-group" id="ghichu">
    <label for="inputcolDViThuMua" class="col-sm-2 control-label">Đơn vị thu mua</label>
    <?php
    echo $this->Form->input('colDViThuMua', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'colDViThuMua'))
    ;
    ?>
</div>
<div class="form-group" id="ghichu">
    <label for="inputcolDinhKyThuMua" class="col-sm-2 control-label">Định kỳ thu mua</label>
    <?php
    echo $this->Form->input('colDinhKyThuMua', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'colDinhKyThuMua'))
    ;
    ?>
</div>
<div class="form-group" id="ghichu">
    <label for="inputcolGhiChu" class="col-sm-2 control-label">Ghi chú</label>
    <?php
    echo $this->Form->input('colGhiChu', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'colGhiChu'))
    ;
    ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->submit(__('Lưu thông tin chất thải nguy hại'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false));
        ?>
        <?php
        echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false, 'id' => 'btn-reset-chatthainguyhai'));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<!--/end form rac thai nguy hại-->
<script type="text/javascript">
    $(function() {
		$('#h_colThaiBo').bind('change',function(){
			var check = $(this).val();
			alert(check);
			if(check=="true"){
				$('#c_colThaiBo').attr('checked','checked');
			}
		});
        $('#txtcolThoiGian_RacThaiNH').datepicker({numberOfMonths: 2}).next('.ui-datepicker-trigger').css({
            float: 'right',
            marginRight: '-20px',
            marginTop: '-25px'
        });
        $('#btn-xoa-chatthainguyhai').bind('click', function() {
            var list_colMa = [];
            $('#list-kqpt-chatthainguyhai tr').each(function() {
                var colMa = $(this).find('input[name="colMa"]').first();
                var checkbox = $(this).find('input[type="checkbox"]');
                if (checkbox.prop('checked') == true) {
                    list_colMa.push(colMa.val());
                }
            });
            if (list_colMa.length == 0) {
                alert('Xin chọn dòng cần xóa');
                return false;
            }
            if (confirm('Bạn xác nhận muốn xóa (những) dòng này khỏi danh sách hiện tại')) {
                xoaDanhSachBienPhapChatThaiNguyHai(list_colMa);
            } else {
                return false;
            }
        });
        var validaform_chatthainguyhai = Validator.init('#FormChatThaiNguyHai', 'doAddBPXLCTNH');
    });
    function doAddBPXLCTNH() {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: $('#FormChatThaiNguyHai').serialize(),
            type: "post",
            success: function(data, textStatus) {
                console.log(data);
                var html = '';
                var parsed = JSON.parse(data);
                var classes = ['none', 'active', 'success', 'warning'];
                var i = 0;
				var stt=1;
                parsed.forEach(function(bpxlctNH) {
                    html += '<tr class="' + classes[i] + '"><td>' + stt + '</td>\n\
            <td><input type="hidden" name="colMa" value="' + bpxlctNH['ChatThaiNguyHai']['colMa'] + '">' + echoDate(bpxlctNH['ChatThaiNguyHai']['colThoiGian']) + '</td>\n\
<td>' + bpxlctNH['ChatThaiNguyHai']['colDangCThai'] + '</td><td>' + echoNull(bpxlctNH['ChatThaiNguyHai']['colTongKL']) + '</td><td>' + echoNull
					(bpxlctNH['ChatThaiNguyHai']['colNguonPSinh']) + '</td>\n\
<td>' + echoNull(bpxlctNH['ChatThaiNguyHai']['colHThucLuu']) + '</td>\n\
<td>' + echoBoolValue(bpxlctNH['ChatThaiNguyHai']['colBanRa']) + '</td>\n\
<td>' + echoBoolValue(bpxlctNH['ChatThaiNguyHai']['colThaiBo']) + '</td>\n\
<td>' + echoNull(bpxlctNH['ChatThaiNguyHai']['colDViThuMua']) + '</td>\n\
<td>' + echoNull(bpxlctNH['ChatThaiNguyHai']['colDinhKyThuMua']) + '</td>\n\
<td>' + echoNull(bpxlctNH['ChatThaiNguyHai']['colGhiChu']) + '</td>\n\
<td><button title="Ấn để cập nhật" ' +
						'type="button" class="btn btn-edit" onclick="javascript:loadData(1025,' +
						'' + parseInt(bpxlctNH['ChatThaiNguyHai']['colMa']) + ');"></button></td>\n\
<td><input type="checkbox" name="deleterow' + bpxlctNH['ChatThaiNguyHai']['colMa'] + '"></td>\n\
</tr>';
                    ++i;
					++stt;
                    if (i == 3) {
                        i = 0;
                    }
                });
                $('#list-kqpt-chatthainguyhai').html(html);
                $('#btn-reset-chatthainguyhai').trigger('click');
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/thembienphapxulychatthainguyhai') ?>"
        });
        return false;
    }
    function xoaDanhSachBienPhapChatThaiNguyHai(list_colMa) {
		var data={listcolMa: list_colMa},
			url= "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachbienphapxulychatthainguyhai') ?>";
       doPostAjax(url,data,'redirectchatthainguyhai');
        return false;
    }
    
    
</script>
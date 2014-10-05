<p><h3>2.4.NƯỚC NGẦM</h3></p>
<table class="table">
    <thead>
    <tr>
        <th>
            Năm
        </th>
        <th>
            Giàn khoan
        </th>
        <th>
            Vị trí
        </th>
        <th>
            Tọa độ x
        </th>
        <th>
            Tọa độ y
        </th>
        <th>
            Công suất
        </th>
        <th>
            Lưu lượng
        </th>
        <th>
            Số Giấy Phép
        </th>
        <th>
            Ghi chú
        </th>
        <th>
            Xóa
        </th>
    </tr>
    </thead>
    <tbody id="list-nuocngam">
    <?php if (isset($listnuocngam) && count($listnuocngam)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listnuocngam as $uw): ?>
                <tr class="<?php echo $classes[$i]; ?>">
                    <td>
                        <input type="hidden" name="colMa" value="<?php echo $uw['NuocNgamDoanhNghiep']['colMa'] ?>">
                        <?php echo $uw['NuocNgamDoanhNghiep']['colNam'] ?>
                    </td>
                    <td>
                        <?php echo $uw['NuocNgamDoanhNghiep']['colMaGK'] ?>
                    </td>
                    <td>
                        <?php echo $uw['NuocNgamDoanhNghiep']['colViTri'] ?>
                    </td>
                    <td>
                        <?php echo $uw['NuocNgamDoanhNghiep']['colX'] ?>
                    </td>
                    <td>
                        <?php echo $uw['NuocNgamDoanhNghiep']['colY'] ?>
                    </td>
                    <td>
                        <?php echo $uw['NuocNgamDoanhNghiep']['colCongSuat'] ?>
                    </td>
                    <td>
                        <?php echo $uw['NuocNgamDoanhNghiep']['colLLuong'] ?>
                    </td>
                    <td>
                        <?php echo $uw['NuocNgamDoanhNghiep']['colSoGiayPhep'] ?>
                    </td>
                    <td>
                        <?php echo $uw['NuocNgamDoanhNghiep']['colGhiChu'] ?>
                    </td>
                    <td>
                        <input type="checkbox" name="deleterow<?php echo $uw['NuocNgamDoanhNghiep']['colMa'] ?>">
                    </td>
                </tr>
                <?php
                ++$i;
                if ($i == 3) {
                    $i = 0;
                }
                ?>
    <?php endforeach; ?>
<?php endif; ?>
    </tbody>
    <tbody
    <tr>
        <td colspan="9">
        </td>
        <td>
            <button type="submit" name="delete" class="btn btn-danger" id="btn-xoa-nuocngam">Xóa</button>
        </td>
    </tr>
    </tbody>
</table>
<?php echo $this->Form->create('NuocNgamDoanhNghiep',array('method'=>'post','class'=>'form-horizontal','role'=>'form','id'=>'FormNuocNgamDoanhNghiep'));?>
<div class="form-group">
    <label for="inputTongdtxd" class="col-sm-2 control-label">Giàn khoan <span class="required">*</span></label>
    <?php echo $this->Form->input('colMaGK',array('div'=>array('class'=>'col-sm-6'),'label'=>false,'class'=>'form-control requiredInput','type'=>'text'))
    ;?>
</div>
<div class="form-group">
    <label for="inputTongnv" class="col-sm-2 control-label">Vị trí <span class="required">*</span></label>
    <?php echo $this->Form->input('colViTri', array('div'=>array('class'=>'col-sm-6'),'label'=>false,'type'=>'text','class'=>'form-control requiredInput'));?>
</div>
<div class="form-group">
    <label for="colX" class="col-sm-2 control-label">Tọa độ X</label>
    <?php echo $this->Form->input('colX', array('div'=>array('class'=>'col-sm-6'),'label'=>false,'type'=>'text','class'=>'form-control'));?>
</div>
<div class="form-group">
    <label for="colY" class="col-sm-2 control-label">Tọa độ Y</label>
    <?php echo $this->Form->input('colY', array('div'=>array('class'=>'col-sm-6'),'label'=>false,'type'=>'text','class'=>'form-control'));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Công suất <span class="required">*</span></label>
    <?php echo $this->Form->input('colCongSuat', array('div'=>array('class'=>'col-sm-6'),'label'=>false,'type'=>'text','class'=>'form-control requiredInput',
    ));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Lưu lượng <span class="required">*</span></label>
    <?php echo $this->Form->input('colLLuong', array('div'=>array('class'=>'col-sm-6'),'label'=>false,'type'=>'text','class'=>'form-control requiredInput',
    ));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Giấy phép số</label>
    <?php echo $this->Form->input('colSoGiayPhep', array('div'=>array('class'=>'col-sm-6'),'label'=>false,'type'=>'text','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Ghi chú</label>
    <?php echo $this->Form->input('colGhiChu', array('div'=>array('class'=>'col-sm-6'),'label'=>false,'type'=>'text','class'=>'form-control',
    ));?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php echo $this->Form->submit(__('Lưu thông tin nước ngầm doanh nghiệp'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false,'id'=>'btn-luu-thongtinnuocngam'));?>
        <?php echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false,'id'=>'btn-reset-thongtinnuocngam'));?>
    </div>
</div>
<?php echo $this->Form->end();?>
<script type="text/javascript">
    $(function() {
        $('#btn-xoa-nuocngam').bind('click', function() {
            var list_colMa = [];
            $('#list-nuocngam tr').each(function() {
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
            if (confirm('Bạn xác nhận muốn xóa những thông tin về nước ngầm này khỏi danh sách hiện tại')) {
                xoaDanhsachNuocngam(list_colMa);
            } else {
                return false;
            }
        });
        var validation = Validator.init('#FormNuocNgamDoanhNghiep', 'doAddUnderWater');
    });
    function doAddUnderWater() {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: $('#FormNuocNgamDoanhNghiep').serialize(),
            type: "post",
            success: function(data, textStatus) {
                console.log(data);
                var html = '';
                var underwaters = JSON.parse(data);
                var classes = ['', 'active', 'success', 'warning'];
                var i = 0;
                underwaters.forEach(function(sp) {
                    html += '<tr class="' + classes[i] + '"><td><input type="hidden" name="colMa" value="' + sp['NuocNgamDoanhNghiep']['colMa'] + '">' + sp['NuocNgamDoanhNghiep']['colNam'] + '</td><td>' + sp['NuocNgamDoanhNghiep']['colMaGK'] + '</td><td>' + sp['NuocNgamDoanhNghiep']['colViTri'] + '</td><td>' + parseFloat(sp['NuocNgamDoanhNghiep']['colX']) + '</td><td>' + parseFloat(sp['NuocNgamDoanhNghiep']['colY']) + '</td><td>' + sp['NuocNgamDoanhNghiep']['colCongSuat'] + '</td><td>' + sp['NuocNgamDoanhNghiep']['colLLuong'] + '</td><td>' + sp['NuocNgamDoanhNghiep']['colSoGiayPhep'] + '</td><td>' + sp['NuocNgamDoanhNghiep']['colGhiChu'] + '</td><td><input type="checkbox" name="deleterow' + sp['NuocNgamDoanhNghiep']['colMa'] + '"></td></tr>';
                    ++i;
                    if (i == 3) {
                        i = 0;
                    }
                });
                $('#list-nuocngam').html(html);
                resetdata();
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/themnuocngamdoanhnghiep') ?>"
        });
        return false;
    }

    function resetdata() {
        $('#btn-reset-thongtinnuocngam').trigger("click");
    }
    function xoaDanhsachNuocngam(list_colMa) {
		var data={listcolMa: list_colMa};
		var url ="<?php echo Router::url('/admin/doanhnghiep/xoadanhsachnuocngamdoanhnghiep') ?>";
        doPostAjax(url,data,'redirectnuocngam');
        return false;
    }
</script>
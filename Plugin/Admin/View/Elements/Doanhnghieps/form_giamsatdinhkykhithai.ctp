<p><h3>4.1. GIÁM SÁT ĐỊNH KỲ KHÍ THẢI</h3></p>

<?php echo $this->Form->create('ViTriDo', array('url'=>'/admin/doanhnghiep/themmoi/step4/khithai','method' =>
'post', 'class' => 'form-horizontal', 'role' => 'form',
										  'id' => 'FormViTriGiamSatDinhKyKhiThai')); ?>
<?php echo $this->Form->hidden('type', array('value' => 1)); ?>
<?php echo $this->Form->hidden('id'); ?>
<div class="form-group">
    <label class="col-sm-2 control-label">Vị trí đo <span class="required">*</span></label>
    <?php
    echo $this->Form->input('vi_tri', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput'))
    ?>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Ngày giám sát <span class="required">*</span></label>
    <?php
    echo $this->Form->input('ngay_giam_sat', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'text', 'class' => 'short-length requiredInput',
        'id' => 'ngaygiamsat'));
    ?>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label"></label>
    <?php
    echo $this->Form->input('mota', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'textarea', 'class' => 'form-control',
        'id' => 'mota'));
    ?>
</div>
<div class="form-group">
    <label class="col-sm-2 control-label">Ngày nhập </label>
    <?php
    echo $this->Form->input('ngay_nhap', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'text', 'class' => 'short-length',
        'id' => 'ngaynhap'));
    ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->submit(__('Đồng ý'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false, 'id' => 'btn-luu-kqgsdk-khithai'));
        ?>
        <?php
        echo $this->Form->input('reset', array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false, 'id' => 'btn-reset-kqgsdk-khithai'));
        ?>
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
//        echo $this->Form->button(__('Kết quả giám sát'), array('class' => 'btn btn-primary',
//            'div' => false, 'label' => false, 'type' => 'button', 'id' => 'btn-nhap-kqgsdk-khithai'));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<div class="scroll">
<table class="table">
    <thead>
        <tr>
            <th>
                Stt
            </th>
            <th>
                Vị trí đo
            </th>
            <th>
                Ngày giám sát
            </th>
            <th>
                Ngày nhập
            </th>
            <th>KQGS</th>
            <th>
                Xóa
            </th>
        </tr>
    </thead>
    <tbody id="list-vitridokhithai">
        <?php if (isset($vitridokhithai) && count($vitridokhithai)): ?>
            <?php $i = 0; ?>
            <?php $stt = 1; ?>
            <?php foreach ($vitridokhithai as $point): ?>
                <tr class="<?php echo $classes[$i]; ?>" title="click để cập nhật">
                    <input type="hidden" name="id" value="<?php echo h($point['ViTriDoKhiThai']['id']) ?>"/>
                    <td style="display: none" class="mota"><?php echo h($point['ViTriDoKhiThai']['mota'])?></td>
                    <td>
                        <?php echo $stt ?>
                    </td>
                    <td class="vitri">
                        <?php echo h($point['ViTriDoKhiThai']['vi_tri']) ?>
                    </td>
                    <td class="ngaygiamsat">
                        <?php echo date('d/m/Y', strtotime($point['ViTriDoKhiThai']['ngay_giam_sat'])) ?>
                    </td>
                    <td class="ngaynhap">
                        <?php echo!empty($point['ViTriDoKhiThai']['ngay_nhap']) ? date('d/m/Y', strtotime($point['ViTriDoKhiThai']['ngay_nhap'])) : ''; ?>
                    </td>
                    <td>
                        <?php
                        echo $this->Form->button(__('Kết quả giám sát'), array('class' => 'btn btn-primary',
                            'div' => false, 'label' => false, 'type' => 'button', 'id' => 'btn-nhap-kqgsdk-khithai','onclick'=>'javascript:PopUpUpdate(30,'.h($point['ViTriDoKhiThai']['id']).')'));
                        ?>
                    </td>
                    <td>
                        <input type="checkbox" name="deleterow<?php echo $point['ViTriDoKhiThai']['id'] ?>">
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
    <tbody>
        <tr>
            <td colspan="5">
            </td>
            <td>
                <button type="submit" name="delete" class="btn btn-danger" id="button-xoa-vitrido-doanhnghiep">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
    </div>
<script type="text/javascript">
    $(function() {
        $('#ngaygiamsat').datepicker();
        $('#ngaynhap').datepicker();
        $('#btn-luu-thongtin-nguyenlieusx').bind('click', function() {

        });
        $('#button-xoa-vitrido-doanhnghiep').bind('click', function() {
            var list_colMa = [];
            $('#list-vitridokhithai tr').each(function() {
                var id = $(this).find('input[name="id"]').first();
                var checkbox = $(this).find('input[type="checkbox"]');
                if (checkbox.prop('checked') == true) {
                    list_colMa.push(id.val());
                }
            });
            if (list_colMa.length == 0) {
                alert('Xin chọn vị trí đo cần xóa');
                return false;
            }
            if (confirm('Bạn xác nhận muốn xóa những vị trí này khỏi danh sách hiện tại')) {
                xoaDanhSachVitrido(list_colMa);
            } else {
                return false;
            }
        });
        $('#list-vitridokhithai tr').bind('click', function() {
            var vitri = $.trim($(this).find('.vitri').html());
            $('#ViTriDoViTri').val(vitri);
            var id = $(this).children('input[name="id"]').val();
            $('#ViTriDoId').val(id);
            var ngaygiamsat=$.trim($(this).children('.ngaygiamsat').html());
            $('#ngaygiamsat').val(ngaygiamsat);
            var ngaynhap=$.trim($(this).children('.ngaynhap').html());
            $('#ngaynhap').val(ngaynhap);
            var mota=$.trim($(this).children('.mota').text());
            tinyMCE.get('mota').setContent(mota);
        });
    });

    function xoaDanhSachVitrido(list_colMa) {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
                hideLoading();
            },
            data: {listcolMa: list_colMa},
            type: "post",
            success: function(data, textStatus) {
                window.location.reload();
            },
            url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachvitrido') ?>"
        });
        return false;
    }
</script>
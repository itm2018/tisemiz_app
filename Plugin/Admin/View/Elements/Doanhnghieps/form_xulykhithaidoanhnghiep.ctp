<!--khithai-->
<p><h3>3.3. KIỂM SOÁT Ô NHIỄM KHÔNG KHÍ</h3></p>
<table class="table">
    <thead>
        <tr>
            <th>
                Năm
            </th>
            <th>
                Nguồn thải
            </th>
            <th>
                Nguồn thải chủ yếu
            </th>
            <th>
                Chưa xử lý
            </th>
            <th>
                Ống khói
            </th>
            <th>
                Hấp phụ
            </th>
            <th>
                Hấp thụ
            </th>
            <th>
                Khác
            </th>
            <th>
                Ghi chú
            </th>
            <th>
                Xóa
            </th>
        </tr>
    </thead>
    <tbody id="list-kqpt-khithaidoanhnghiep">
        <?php if (isset($listbienphapxulykhithai) && count($listbienphapxulykhithai)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listbienphapxulykhithai as $ntnm): ?>
                <tr class="<?php echo $classes[$i]; ?>">
                    <td>
                        <input type="hidden" name="colMa" value="<?php echo $ntnm['XuLyKhiThaiDoanhNghiep']['colMa'] ?>">
                        <?php echo date('d/m/Y', strtotime($ntnm['XuLyKhiThaiDoanhNghiep']['colThoiGian'])) ?>
                    </td>
                    <td>
                        <?php echo h($ntnm['NguonThaiKhiThai']['colTenNgThai']) ?>
                    </td>
                    <td>
                        <?php echo h($ntnm['XuLyKhiThaiDoanhNghiep']['colNguonPSinh']) ?>
                    </td>
                    <td>
                        <?php echo h($ntnm['XuLyKhiThaiDoanhNghiep']['colChuaXLy']) ?>
                    </td>
                    <td>
                        <?php echo h($ntnm['XuLyKhiThaiDoanhNghiep']['colOngKhoi']) ?>
                    </td>
                    <td>
                        <?php echo h($ntnm['XuLyKhiThaiDoanhNghiep']['colHapPhu']) ?>
                    </td>
                    <td>
                        <?php echo h($ntnm['XuLyKhiThaiDoanhNghiep']['colHapThu']) ?>
                    </td>
                    <td>
                        <?php echo h($ntnm['XuLyKhiThaiDoanhNghiep']['colMotaBienPhapKhac']) ?>
                    </td>
                    <td>
                        <?php echo h($ntnm['XuLyKhiThaiDoanhNghiep']['colGhiChu']) ?>
                    </td>
                    <td>
                        <input type="checkbox" name="deleterow<?php echo $ntnm['XuLyKhiThaiDoanhNghiep']['colMa'] ?>">
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
    <tbody>
        <tr>
            <td colspan="8">
            </td>
            <td>
                <button type="submit" name="delete" class="btn btn-danger" id="btn-xoa-bienphapxulykhithaidoanhnghiep">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<p><h3>THÔNG TIN KIỂM SOÁT Ô NHIỄM KHÔNG KHÍ</h3></p>
    <?php echo $this->Form->create('XuLyKhiThaiDoanhNghiep', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormXuLyKhiThaiDoanhNghiep')); ?>
    <div class="form-group">
        <label for="inputNguonthaikhi" class="col-sm-2 control-label">Nguồn thải</label>
        <?php
        echo $this->Form->input('colMaNguonThai', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'options' => Common::getListNguonThaiKhiThai()))
        ;
        ?>
        <!--<button id="button-them-nguonthaikhithai" class="add-group" type="button"></button>-->
    </div>
    <div class="form-group">
        <label for="inputNam" class="col-sm-2 control-label">Thời điểm <span class="text-danger">*</span></label>
        <?php
        echo $this->Form->input('colThoiGian', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput validate-date', 'tentruong' => 'Thời điểm', 'type' => 'text', 'placeholder' => __('dd/mm/yyyy'), 'id' => 'txtcolThoiGian_KhiThai'))
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
        <div class="col-sm-offset-2 col-sm-10">
            <?php
            echo $this->Form->input('colChuaXLy', array('div' => array('class' => 'checkbox'), 'label' => __('Chưa xử lý'), 'type' => 'checkbox'))
            ;
            ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php
            echo $this->Form->input('colOngKhoi', array('div' => array('class' => 'checkbox'), 'label' => __('Ống khói'), 'type' => 'checkbox'))
            ;
            ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php
            echo $this->Form->input('colHapPhu', array('div' => array('class' => 'checkbox'), 'label' => __('Hấp phụ'), 'type' => 'checkbox'))
            ;
            ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php
            echo $this->Form->input('colHapThu', array('div' => array('class' => 'checkbox'), 'label' => __('Hấp thụ'), 'type' => 'checkbox'))
            ;
            ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php
            echo $this->Form->input('colBienPhapKhac', array('div' => array('class' => 'checkbox'), 'label' => __('Khác'), 'type' => 'checkbox', 'id' => 'colBienPhapKhac'))
            ;
            ?>
        </div>
    </div>
    <div class="form-group" style="display: none" id="divMotaBienPhapKhac">
        <label for="inputNam" class="col-sm-2 control-label">Mô tả</label>
        <?php
        echo $this->Form->input('colMotaBienPhapKhac', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'colMotaBienPhapKhac'))
        ;
        ?>
    </div>
    <div class="form-group" id="ghichu">
        <label for="inputNam" class="col-sm-2 control-label">Ghi chú</label>
        <?php
        echo $this->Form->input('colGhiChu', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'colGhiChu'))
        ;
        ?>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php
            echo $this->Form->submit(__('Lưu thông tin kiểm soát khí thải'), array('class' => 'btn btn-primary',
                'div' => false, 'label' => false));
            ?>
            <?php
            echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
                'div' => false, 'label' => false, 'id' => 'btn-reset-kiemsoatkhithai'));
            ?>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
    <!--/khithai-->
    <script type="text/javascript">
        $(function() {
            $('#colBienPhapKhac').change(function() {
                $('#divMotaBienPhapKhac').toggle(this.checked);
            });
            $('#txtcolThoiGian_KhiThai').datepicker({numberOfMonths: 2}).next('.ui-datepicker-trigger').css({
                float: 'right',
                marginRight: '-20px',
                marginTop: '-25px'
            });
            $('#button-them-nguonthaikhithai').bind('click', function() {
                PopUp(7);
            });
            $('#btn-xoa-bienphapxulykhithaidoanhnghiep').bind('click', function() {
                var list_colMa = [];
                $('#list-kqpt-khithaidoanhnghiep tr').each(function() {
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
                    xoaDanhSachBienPhapXuLyKhiThai(list_colMa);
                } else {
                    return false;
                }
            });
            var validaform_khithainhamaybpxlnt = Validator.init('#FormXuLyKhiThaiDoanhNghiep', 'doAddBPXLKT');
        });
        function doAddBPXLKT() {
            $.ajax({
                beforeSend: function(XMLHttpRequest) {
                    showLoading();
                },
                complete: function(XMLHttpRequest, textStatus) {
                    hideLoading();
                },
                data: $('#FormXuLyKhiThaiDoanhNghiep').serialize(),
                type: "post",
                success: function(data, textStatus) {
//                                    console.log(data);
                    var html = '';
                    var parsed = JSON.parse(data);
                    var classes = ['none', 'active', 'success', 'warning'];
                    var i = 0;
                    parsed.forEach(function(bpxlnt) {
                        html += '<tr class="' + classes[i] + '">\n\
                <td><input type="hidden" name="colMa" value="' + bpxlnt['XuLyKhiThaiDoanhNghiep']['colMa'] + '">' + formatDate(new Date(getDateFromFormat(bpxlnt['XuLyKhiThaiDoanhNghiep']['colThoiGian'], 'yyyy-MM-dd HH:mm:ss')), 'dd/MM/yyyy') + '</td>\n\
    <td>' + bpxlnt['NguonThaiKhiThai']['colTenNgThai'] + '</td><td>' + bpxlnt['XuLyKhiThaiDoanhNghiep']['colNguonPSinh'] + '</td>\n\
    <td>' + echoBoolValue(bpxlnt['XuLyKhiThaiDoanhNghiep']['colChuaXLy']) + '</td>\n\
    <td>' + echoBoolValue(bpxlnt['XuLyKhiThaiDoanhNghiep']['colOngKhoi']) + '</td>\n\
    <td>' + echoBoolValue(bpxlnt['XuLyKhiThaiDoanhNghiep']['colHapPhu']) + '</td>\n\
    <td>' + echoBoolValue(bpxlnt['XuLyKhiThaiDoanhNghiep']['colHapThu']) + '</td>\n\
    <td>' + bpxlnt['XuLyKhiThaiDoanhNghiep']['colMotaBienPhapKhac'] + '</td>\n\
    <td>' + bpxlnt['XuLyKhiThaiDoanhNghiep']['colGhiChu'] + '</td>\n\
    <td><input type="checkbox" name="deleterow' + bpxlnt['XuLyKhiThaiDoanhNghiep']['colMa'] + '"></td>\n\
    </tr>';
                        ++i;
                        if (i == 3) {
                            i = 0;
                        }
                    });
                    $('#list-kqpt-khithaidoanhnghiep').html(html);
                    $('#btn-reset-kiemsoatkhithai').trigger('click');
                },
                url: "<?php echo Router::url('/admin/doanhnghiep/thembienphapxulykhithaidoanhnghiep') ?>"
            });
            return false;
        }
        function xoaDanhSachBienPhapXuLyKhiThai(list_colMa) {
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
                    //                console.log(data)
                    window.location.reload();
                },
                url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachbienphapxulykhithaidoanhnghiep') ?>"
            });
            return false;
        }
        function echoBoolValue(value) {
            if (value === true || value === "true")
            {
                return 1;
            } else {
                return 0;
            }
        }
    </script>
<!--tieng on rung-->
<p><h3>3.4. XỬ LÝ TIẾNG ỒN - RUNG</h3></p>
<table class="table">
    <thead>
        <tr>
            <th>
                Năm
            </th>
            <th>
                Nguồn gây ồn - rung
            </th>
            <th>
                Nguồn phát sinh chủ yếu
            </th>
            <th>
                Không xử lý
            </th>
            <th>
                Che chắn
            </th>
            <th>
                Bọc cách âm
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
    <tbody id="list-kqpt-xulytiengonrung">
        <?php if (isset($listbienphapxulyonrung) && count($listbienphapxulyonrung)): ?>
            <?php $i = 0; ?>
            <?php foreach ($listbienphapxulyonrung as $xlor): ?>
                <tr class="<?php echo $classes[$i]; ?>">
                    <td>
                        <input type="hidden" name="colMa" value="<?php echo $xlor['XuLyTiengOnRung']['colMa'] ?>">
                        <?php echo date('d/m/Y', strtotime($xlor['XuLyTiengOnRung']['colThoiGian'])) ?>
                    </td>
                    <td>
                        <?php echo h($xlor['NguonGayOnRung']['colTenNguon']) ?>
                    </td>
                    <td>
                        <?php echo h($xlor['XuLyTiengOnRung']['colNguonPSinh']) ?>
                    </td>
                    <td>
                        <?php echo h($xlor['XuLyTiengOnRung']['colKhongXLy']) ?>
                    </td>
                    <td>
                        <?php echo h($xlor['XuLyTiengOnRung']['colCheChan']) ?>
                    </td>
                    <td>
                        <?php echo h($xlor['XuLyTiengOnRung']['colBocCachAm']) ?>
                    </td>
                    <td>
                        <?php echo h($xlor['XuLyTiengOnRung']['colMoTaBienPhapKhac']) ?>
                    </td>
                    <td>
                        <?php echo h($xlor['XuLyTiengOnRung']['colGhiChu']) ?>
                    </td>
                    <td>
                        <input type="checkbox" name="deleterow<?php echo $xlor['XuLyTiengOnRung']['colMa'] ?>">
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
                <button type="submit" name="delete" class="btn btn-danger" id="btn-xoa-bienphapxulytiengonrung">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<p><h3>THÔNG TIN KIỂM SOÁT TIẾNG ỒN RUNG</h3></p>
    <?php echo $this->Form->create('XuLyTiengOnRung', array('method' => 'post', 'class' => 'form-horizontal', 'role' => 'form', 'id' => 'FormXuLyTiengOnRung')); ?>
    <div class="form-group">
        <label for="inputNguongayonrung" class="col-sm-2 control-label">Nguồn gây ồn rung</label>
        <?php
        echo $this->Form->input('colNguonGayOn', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'options' => Common::getListNguonGayOnRung()))
        ;
        ?>
        <!--<button id="button-them-nguongayonrung" class="add-group" type="button"></button>-->
    </div>
    <div class="form-group">
        <label for="inputNam" class="col-sm-2 control-label">Thời điểm <span class="text-danger">*</span></label>
        <?php
        echo $this->Form->input('colThoiGian', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput validate-date', 'tentruong' => 'Thời điểm', 'type' => 'text', 'placeholder' => __('dd/mm/yyyy'), 'id' => 'txtcolThoiGian_OnRung'))
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
            echo $this->Form->input('colKhongXLy', array('div' => array('class' => 'checkbox'), 'label' => __('Không xử lý'), 'type' => 'checkbox'))
            ;
            ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php
            echo $this->Form->input('colCheChan', array('div' => array('class' => 'checkbox'), 'label' =>__('Che chắn'), 'type' => 'checkbox'))
            ;
            ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php
            echo $this->Form->input('colBocCachAm', array('div' => array('class' => 'checkbox'), 'label' => __('Bọc cách âm'), 'type' => 'checkbox'))
            ;
            ?>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?php
            echo $this->Form->input('colBienPhapKhac', array('div' => array('class' => 'checkbox'), 'label' => __('Khác'), 'type' => 'checkbox', 'id' => 'colBienPhapKhac_OnRung'))
            ;
            ?>
        </div>
    </div>
    <div class="form-group" style="display: none" id="divMotaBienPhapKhacOnRung">
        <label for="inputNam" class="col-sm-2 control-label">Mô tả</label>
        <?php
        echo $this->Form->input('colMoTaBienPhapKhac', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'type' => 'text', 'id' => 'colMotaBienPhapKhac_OnRung'))
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
            echo $this->Form->submit(__('Lưu thông tin kiểm soát ồn rung'), array('class' => 'btn btn-primary',
                'div' => false, 'label' => false));
            ?>
            <?php
            echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
                'div' => false, 'label' => false, 'id' => 'btn-reset-kiemsoatonrung'));
            ?>
        </div>
    </div>
    <?php echo $this->Form->end(); ?>
    <!--/khithai-->
    <script type="text/javascript">
        $(function() {
            $('#colBienPhapKhac_OnRung').change(function() {
                $('#divMotaBienPhapKhacOnRung').toggle(this.checked);
            });
            $('#txtcolThoiGian_OnRung').datepicker({numberOfMonths: 2}).next('.ui-datepicker-trigger').css({
                float: 'right',
                marginRight: '-20px',
                marginTop: '-25px'
            });
            $('#button-them-nguongayonrung').bind('click', function() {
                PopUp(7);
            });
            $('#btn-xoa-bienphapxulytiengonrung').bind('click', function() {
                var list_colMa = [];
                $('#list-kqpt-xulytiengonrung tr').each(function() {
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
                    xoaDanhSachBienPhapXuLyOnRung(list_colMa);
                } else {
                    return false;
                }
            });
            var validaform_onrungnhamaybpxlnt = Validator.init('#FormXuLyTiengOnRung', 'doAddBPXLOR');
        });
        function doAddBPXLOR() {
            $.ajax({
                beforeSend: function(XMLHttpRequest) {
                    showLoading();
                },
                complete: function(XMLHttpRequest, textStatus) {
                    hideLoading();
                },
                data: $('#FormXuLyTiengOnRung').serialize(),
                type: "post",
                success: function(data, textStatus) {
                                    console.log(data);
                    var html = '';
                    var parsed = JSON.parse(data);
                    var classes = ['none', 'active', 'success', 'warning'];
                    var i = 0;
                    parsed.forEach(function(bpxlor) {
                        html += '<tr class="' + classes[i] + '">\n\
                <td><input type="hidden" name="colMa" value="' + bpxlor['XuLyTiengOnRung']['colMa'] + '">' + formatDate(new Date(getDateFromFormat(bpxlor['XuLyTiengOnRung']['colThoiGian'], 'yyyy-MM-dd HH:mm:ss')), 'dd/MM/yyyy') + '</td>\n\
    <td>' + bpxlor['NguonGayOnRung']['colTenNguon'] + '</td><td>' + bpxlor['XuLyTiengOnRung']['colNguonPSinh'] + '</td>\n\
    <td>' + echoBoolValue(bpxlor['XuLyTiengOnRung']['colKhongXLy']) + '</td>\n\
    <td>' + echoBoolValue(bpxlor['XuLyTiengOnRung']['colCheChan']) + '</td>\n\
    <td>' + echoBoolValue(bpxlor['XuLyTiengOnRung']['colBocCachAm']) + '</td>\n\
    <td>' + bpxlor['XuLyTiengOnRung']['colMoTaBienPhapKhac'] + '</td>\n\
    <td>' + bpxlor['XuLyTiengOnRung']['colGhiChu'] + '</td>\n\
    <td><input type="checkbox" name="deleterow' + bpxlor['XuLyTiengOnRung']['colMa'] + '"></td>\n\
    </tr>';
                        ++i;
                        if (i == 3) {
                            i = 0;
                        }
                    });
                    $('#list-kqpt-xulytiengonrung').html(html);
                    $('#btn-reset-kiemsoatonrung').trigger('click');
                },
                url: "<?php echo Router::url('/admin/doanhnghiep/thembienphapxulyonrungdoanhnghiep') ?>"
            });
            return false;
        }
        function xoaDanhSachBienPhapXuLyOnRung(list_colMa) {
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
                url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachbienphapxulyonrungdoanhnghiep') ?>"
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
<p><h3>2.1 SẢN PHẨM</h3></p>
<table class="table">
    <thead>
        <tr>
            <th>
                Năm
            </th>
            <th>
                Sản phẩm
            </th>
            <th>
                Đơn vị tính
            </th>
            <th>
                Công suất thiết kế
            </th>
            <th>
                Công suất thực tế
            </th>
            <th>
                Xóa
            </th>
        </tr>
    </thead>
    <tbody id="list-products">
        <?php
        $classes = array('none', 'active', 'success', 'warning');
        $i = 0;
        ?>
        <?php if (isset($listsanpham) && count($listsanpham)): ?>
            <?php foreach ($listsanpham as $sp): ?>
                <tr class="<?php echo $classes[$i]; ?>"><td><input type="hidden" name="colMa" value="<?php echo $sp['SanPhamDoanhNghiep']['colMa']; ?>"><?php echo $sp['SanPhamDoanhNghiep']['colNam']; ?></td><td><?php echo $sp['Sanpham']['tensanpham']; ?></td><td><?php echo $sp['SanPhamDoanhNghiep']['colDVi']; ?></td><td><?php echo $sp['SanPhamDoanhNghiep']['colCongSuatTK']; ?></td><td><?php echo $sp['SanPhamDoanhNghiep']['colCongSuatTT']; ?></td><td><input type="checkbox" name="deleterow#"></td></tr>
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
            <td colspan="5">
            </td>
            <td>
                <button type="submit" name="delete" id="btn-xoa-danhsach-sanpham-doanhnghiep" class="btn btn-danger">Xóa</button>
            </td>
        </tr>
    </tbody>
</table>
<?php echo $this->Form->create('SanPhamDoanhNghiep', array('url' => Router::url('/admin/doanhnghiep/themsanpham'), 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'FormSanPhamDoanhNghiep', 'role' => 'form')); ?>
<div class="form-group">
    <label for="inputTongdtxd" class="col-sm-2 control-label">Danh mục sản phẩm</label>
    <?php
    echo $this->Form->input('colDanhMucSanPham', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control', 'options' => Common::getListDanhmucSanPham()))
    ;
    ?>
    <button id="button-them-danhmuc-sanpham" class="add-group" type="button"></button>
</div>
<div class="form-group">
    <label for="inputTongdtxd" class="col-sm-2 control-label">Sản phẩm</label>
    <?php
    echo $this->Form->input('colSanPham', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'class' => 'form-control requiredInput', 'options' => array('0' => '...vui lòng chọn')))
    ;
    ?>
    <button id="button-them-sanpham" class="add-group" type="button"></button>
</div>
<div class="form-group">
    <label for="inputTongnv" class="col-sm-2 control-label">Đơn vị tính</label>
    <?php
    echo $this->Form->input('colDVi', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'text', 'class' => 'form-control requiredInput',
        'placeholder' => __('tấn/kg/m3/cái...')));
    ?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Công suất thiết kế</label>
    <?php
    echo $this->Form->input('colCongSuatTK', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'number', 'class' => 'form-control requiredInput',
    ));
    ?>
</div>
<div class="form-group">
    <label for="inputSoca" class="col-sm-2 control-label">Công suất thực tế</label>
    <?php
    echo $this->Form->input('colCongSuatTT', array('div' => array('class' => 'col-sm-6'), 'label' => false, 'type' => 'number', 'class' => 'form-control requiredInput',
    ));
    ?>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <?php
        echo $this->Form->submit(__('Lưu thông tin sản phẩm doanh nghiệp'), array('class' => 'btn btn-primary',
            'div' => false, 'label' => false, 'id' => 'btnLuuSanphamDoanhnghiep'));
        ?>&nbsp;&nbsp;&nbsp;
        <?php
        echo $this->Form->input(null, array('type' => 'reset', 'class' => 'btn btn-info', 'value' => 'Làm lại',
            'div' => false, 'label' => false, 'id' => 'btnResetSanphamDoanhnghiep'));
        ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
    var json_str = '<?php echo json_encode(Common::getFullListDanhmucSanPham()); ?>';
    $(function() {
        $('#SanPhamDoanhNghiepColDanhMucSanPham').change(function() {
            var dm = $(this).val();
            var found = false;
            try {
                var arr = JSON.parse(json_str);
                arr.forEach(function(oj) {
                    if (oj['DanhmucSanPham']['id'] == dm) {
                        var listsp = oj['Sanpham'];
                        var html = '<option value="0">---vui lòng chọn</option>';
                        listsp.forEach(function(sp) {
                            html += '<option value="' + sp['id'] + '">' + sp['tensanpham'] + '</option>';
                        });
                        $('#SanPhamDoanhNghiepColSanPham').html(html);
                        found = true;
                    }
                });
            } catch (e) {
            }
            if (!found) {
                $('#SanPhamDoanhNghiepColSanPham').html('<option value="0">---vui lòng chọn</option>');
            }
        });
        $('#btn-xoa-danhsach-sanpham-doanhnghiep').bind('click', function() {
            var list_colMa = [];
            $('#list-products tr').each(function() {
                var colMa = $(this).find('input[name="colMa"]').first();
                var checkbox = $(this).find('input[type="checkbox"]');
                if (checkbox.prop('checked') == true) {
                    list_colMa.push(colMa.val());
                }
            });
            if (list_colMa.length == 0) {
                alert('Xin chọn sản phẩm cần xóa');
                return false;
            }
            if(confirm('Bạn xác nhận muốn xóa những sản phẩm này khỏi danh sách hiện tại')){
                xoaDanhsachSanpham(list_colMa);
            }else{
                return false;
            }
        });
        var validation = Validator.init('#FormSanPhamDoanhNghiep', 'doAddProduct');
    });
    function doAddProduct() {
        $.post('<?php echo Router::url('/admin/doanhnghiep/themsanpham') ?>', $('#FormSanPhamDoanhNghiep').serialize(), function(data, status) {
            try {
                var html = '';
                var products = JSON.parse(data);
                var classes = ['', 'active', 'success', 'warning'];
                var i = 0;
                products.forEach(function(sp) {
                    html += '<tr class="' + classes[i] + '"><td><input type="hidden" name="colMa" value="' + sp['SanPhamDoanhNghiep']['colMa'] + '">' + sp['SanPhamDoanhNghiep']['colNam'] + '</td><td>' + sp['Sanpham']['tensanpham'] + '</td><td>' + sp['SanPhamDoanhNghiep']['colDVi'] + '</td><td>' + sp['SanPhamDoanhNghiep']['colCongSuatTK'] + '</td><td>' + sp['SanPhamDoanhNghiep']['colCongSuatTT'] + '</td><td><input type="checkbox" name="deleterow#"></td></tr>';
                    ++i;
                    if (i == 3) {
                        i = 0;
                    }
                });
                $('#list-products').html(html);
                 $('#btnResetSanphamDoanhnghiep').trigger("click");
            } catch (e) {
            }

        });
    }

    function xoaDanhsachSanpham(list_colMa){
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
            url: "<?php echo Router::url('/admin/doanhnghiep/xoadanhsachsanphamdoanhnghiep') ?>"
        });
        return false;
    }
</script>
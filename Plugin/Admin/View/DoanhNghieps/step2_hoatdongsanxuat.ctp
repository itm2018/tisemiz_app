<div class="main-header">
    <h2>Thêm mới doanh nghiệp</h2>
    <em>lưu ý chọn năm nhập liệu</em>

</div>
<br>
<table>
    <tr>
        <td>
            <div class="nav-steps">
                <ul id="steps">
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi'); ?>"><li class="active">1</li></a>
                    <li class="active">2</li>
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step3'); ?>"><li>3</li></a>
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step4'); ?>"><li>4</li></a>
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step5'); ?>"><li>5</li></a>
                    <li>6</li>
                </ul>
            </div>
        </td>
    </tr>
</table>
<div class="main-content">

    <!--form_main-->
    <div class="tabbable" id="tabs-9834">
        <ul class="nav nav-tabs">
            <li class="tab1">
                <a href="#panel-1" data-toggle="tab">Thông tin doanh nghiệp</a>
            </li>
            <li class="tab2 active">
                <a href="#panel-2" data-toggle="tab">Hoạt động sản xuất</a>
            </li>
            <li class="tab3">
                <a href="#panel-3" data-toggle="tab">Xả thải</a>
            </li>
            <li class="tab4">
                <a href="#panel-4" data-toggle="tab">Hoạt động bảo vệ môi trường</a>
            </li>
            <li class="tab5">
                <a href="#panel-5" data-toggle="tab">Kiến nghị</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane " id="panel-1">

            </div>
            <div class="tab-pane active" id="panel-2">
                <br>
                <div class="tabbable" id="tabs-9835">
                    <ul class="nav nav-tabs">
                        <li class="active canclick" id="tab-tongquan">
                            <a id="step2-panel-tongquan" href="#panel-tongquan" data-toggle="tab">Tổng quan</a>
                        </li>
                        <li class="canclick">
                            <a id="step2-panel-sanpham" href="#panel-sanpham" data-toggle="tab">Sản phẩm</a>
                        </li>
                        <li class="canclick">
                            <a id="step2-panel-nguyenlieu" href="#panel-nguyenlieu" data-toggle="tab">Nguyên liệu</a>
                        </li>
                        <li class="canclick">
                            <a id="step2-panel-diennuoc" href="#panel-diennuoc" data-toggle="tab">Điện nước</a>
                        </li>
                        <li class="canclick">
                            <a id="step2-panel-nuocngam" href="#panel-nuocngam" data-toggle="tab">Nước ngầm</a>
                        </li>
                        <li class="canclick">
                            <a id="step2-panel-nhienlieu" href="#panel-nhienlieu" data-toggle="tab">Nhiên liệu</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="panel-tongquan">
                            <!--form thong tin hoat dong san xuat -->
                            <?php echo $this->element('Admin.Doanhnghieps/form_hoatdongsanxuat'); ?>
                            <!--end form thong tin hoat dong san xuat-->
                        </div>
                        <div class="tab-pane" id="panel-sanpham">

                            <!--form thong tin sản phẩm -->
                            <?php echo $this->element('Admin.Doanhnghieps/form_sanphamdoanhnghiep'); ?>
                            <!--end form thong tin sản phẩm-->
                        </div>
                        <div class="tab-pane" id="panel-nguyenlieu">
                            <!--form nguyen lieu-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_nguyenlieusanpham'); ?>
                            <!--end form nguyen lieu-->
                        </div>
                        <div class="tab-pane" id="panel-diennuoc">
                            <!--form dien nươc-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_diennuocdoanhnghiep'); ?>
                            <!--end form dien nuoc-->
                        </div>
                        <div class="tab-pane" id="panel-nuocngam">
                            <!--form nuoc ngam-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_nuocngamdoanhnghiep'); ?>
                            <!--end form nuoc ngam-->
                        </div>
                        <div class="tab-pane" id="panel-nhienlieu">
                            <!--form nhien lieu-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_nhienlieudoanhnghiep'); ?>
                            <!--end form nhien lieu-->
                        </div>
                    </div>
                    <!-- common of hoat dong san xuat -->

                    <!-- end of common of hoat dong san xuat -->
                </div>


            </div>
            <div class="tab-pane" id="panel-3">

            </div>
            <div class="tab-pane" id="panel-4">

            </div>
            <div class="tab-pane" id="panel-5">

            </div>
        </div>
    </div>
    <!--form_main-->
</div>
<!-- /main-content -->
<script type="text/javascript">
//    var fullbaseUrl = '<?php // echo Router::fullBaseUrl()?>';
//    var baseUrl = '<?php // echo Router::url('/admin/doanhnghiep/themmoi/step2')?>';
    $(function() {
        $('ul.nav-tabs li').click(function(event) {
            if (!$(this).hasClass('active') && !$(this).hasClass('canclick')) {
                alert('Vui lòng nhập thông tin hoạt động sản xuất');
                return false;
            }
        });
//        $('#step2-panel-sanpham').bind('click', function() {
//            window.location.href = fullbaseUrl + baseUrl + '/panel-sanpham';
//        });
    });
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>
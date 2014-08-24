


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
                <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi');?>"><li class="tab1 active">1</li></a>
                <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step2');?>"><li class="tab2 active">2</li></a>
                <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step3');?>"><li class="tab3 active">3</li></a>
                <li class="tab4 active">4</li>
                <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step5');?>"><li class="tab5">5</li></a>
                <li class="tab6">6</li>
            </ul>
            </div>
        </td>
    </tr>
</table>
<div class="main-content">

    <!--form_main-->
    <div class="tabbable" id="tabs-9834">
        <ul class="nav nav-tabs">
            <li>
                <a href="#panel-1" data-toggle="tab">Thông tin doanh nghiệp</a>
            </li>
            <li id="tab-hdsx">
                <a href="#panel-2" data-toggle="tab">Hoạt động sản xuất</a>
            </li>
            <li>
                <a href="#panel-3" data-toggle="tab">Xả thải</a>
            </li>
            <li class="active">
                <a href="#panel-4" data-toggle="tab">Hoạt động bảo vệ môi trường</a>
            </li>
            <li>
                <a href="#panel-5" data-toggle="tab">Kiến nghị</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" id="panel-1">
                
            </div>
            <div class="tab-pane" id="panel-2">
                
            </div>
            <div class="tab-pane" id="panel-3">

            </div>
            <div class="tab-pane active" id="panel-4">
                <p><h3>IV. THÔNG TIN VỀ HOẠT ĐỘNG TUÂN THỦ BẢO VỆ MÔI TRƯỜNG</h3></p>
                <form class="form-horizontal" role="form">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    Thông tin
                                </th>
                                <th>
                                    Đã có
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    Lập hồ sơ đánh giá tác động môi trường
                                </td>
                                <td>
                                    <input type="checkbox" name="daco">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    "Sổ đăng ký nguồn thải" chất nguy hại
                                </td>
                                <td>
                                    <input type="checkbox" name="daco">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Lập hồ sơ đánh giá tác động môi trường
                                </td>
                                <td>
                                    <input type="checkbox" name="daco">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Lập hồ sơ đánh giá tác động môi trường
                                </td>
                                <td>
                                    <input type="checkbox" name="daco">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Lưu thông tin tuân thủ bảo vệ môi trường</button>
                            <button type="reset" class="btn btn-info">Quay về</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="panel-5">
               
            </div>
        </div>
    </div>
    <!--form_main-->
</div>
<!-- /main-content -->
<script type="text/javascript">
    $(function() {
        $('ul.nav-tabs li').click(function(event) {
            if (!$(this).hasClass('active')) {
                alert('Vui lòng nhập thông tin hoạt động bảo vệ môi trường');
                return false;
            }
        });
    });
</script>
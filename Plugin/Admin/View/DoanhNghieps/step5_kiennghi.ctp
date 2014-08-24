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
                <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step4');?>"><li class="tab4 active">4</li></a>
                <li class="tab5 active">5</li>
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
            <li>
                <a href="#panel-4" data-toggle="tab">Hoạt động bảo vệ môi trường</a>
            </li>
            <li class="active">
                <a href="#panel-5 " data-toggle="tab">Kiến nghị</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" id="panel-1">
                
            </div>
            <div class="tab-pane" id="panel-2">
                
            </div>
            <div class="tab-pane" id="panel-3">

            </div>
            <div class="tab-pane" id="panel-4">
                
            </div>
            <div class="tab-pane active" id="panel-5">
                <p>
                <h3>V. CÁC KIẾN NGHỊ VỚI CƠ QUAN QUẢN LÝ NHÀ NƯỚC</h3>
                </p>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label for="inputKiennghi" class="col-sm-2 control-label">Thông tin kiến nghị</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="inputKiennghi" id="inputKiennghi" placeholder="Thông tin kiến nghị với cơ quan nhà nước"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Lưu thông tin kiến nghị</button>
                            <button type="reset" class="btn btn-info">Quay về</button>
                        </div>
                    </div>
                </form>
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
                alert('Vui lòng nhập thông tin kiến nghị về môi trường của doanh nghiệp');
                return false;
            }
        });
    });
</script>
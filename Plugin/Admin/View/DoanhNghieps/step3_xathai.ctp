


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
                <li class="tab3 active">3</li>
                <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step4');?>"><li class="tab4">4</li></a>
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
            <li class="active">
                <a href="#panel-3" data-toggle="tab">Xả thải</a>
            </li>
            <li>
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
            <div class="tab-pane active" id="panel-3">
                <br>
                <div class="tabtable" id="tabs-9836">
                    <ul class="nav nav-tabs">
                        <li class="active canclick">
                            <a href="#panel-nuocthai" data-toggle="tab">Nước thải</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-kiemsoatnuocthai" data-toggle="tab">Kiểm soát nước thải</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-khithai" data-toggle="tab">Khí thải</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-tiengonrung" data-toggle="tab">Tiếng ồn và rung</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-racsinhhoat" data-toggle="tab">Rác sinh hoạt</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-chatthaicongnghiep" data-toggle="tab">Chất thải công nghiệp</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-chatthainguyhai" data-toggle="tab">Chất thải nguy hại</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="panel-nuocthai">
                            <!-- form thong tin nuoc thai doanh nghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_nuocthainhamay'); ?>
                            <!-- end form thong tin nuoc thai doanh nghiep -->
                        </div>
                        <div class="tab-pane" id="panel-kiemsoatnuocthai">
                            <!-- form xu ly nuoc thai doanh nghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_xulynuocthaidoanhnghiep'); ?>
                            <!-- end form xu ly nuoc thai doanh nghiep -->
                        </div>
                        <div class="tab-pane" id="panel-khithai">
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
                                            Xóa
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            2008
                                        </td>
                                        <td>
                                            Sinh hoạt
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            Từ hoạt động nhà ăn tập thể và <br> vệ sinh của công nhân viên
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            Không biết
                                        </td>
                                        <td>
                                            Không biết
                                        </td>
                                        <td>
                                            <input type="checkbox" name="deleterow#">
                                        </td>
                                    </tr>
                                    <tr class="active">
                                        <td>
                                            2008
                                        </td>
                                        <td>
                                            Sinh hoạt
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            Từ hoạt động nhà ăn tập thể và <br> vệ sinh của công nhân viên
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            Không biết
                                        </td>
                                        <td>
                                            Không biết
                                        </td>
                                        <td>
                                            <input type="checkbox" name="deleterow#">
                                        </td>
                                    </tr>
                                    <tr class="success">
                                        <td>
                                            2008
                                        </td>
                                        <td>
                                            Sinh hoạt
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            Từ hoạt động nhà ăn tập thể và <br> vệ sinh của công nhân viên
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            Không biết
                                        </td>
                                        <td>
                                            Không biết
                                        </td>
                                        <td>
                                            <input type="checkbox" name="deleterow#">
                                        </td>
                                    </tr>
                                    <tr class="warning">
                                        <td>
                                            2008
                                        </td>
                                        <td>
                                            Sinh hoạt
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            Từ hoạt động nhà ăn tập thể và <br> vệ sinh của công nhân viên
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            Không biết
                                        </td>
                                        <td>
                                            Không biết
                                        </td>
                                        <td>
                                            <input type="checkbox" name="deleterow#">
                                        </td>
                                    </tr>
                                    <tr class="danger">
                                        <td>
                                            2008
                                        </td>
                                        <td>
                                            Sinh hoạt
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            Từ hoạt động nhà ăn tập thể và <br> vệ sinh của công nhân viên
                                        </td>
                                        <td>
                                            100
                                        </td>
                                        <td>
                                            60
                                        </td>
                                        <td>
                                            Không biết
                                        </td>
                                        <td>
                                            Không biết
                                        </td>
                                        <td>
                                            <input type="checkbox" name="deleterow"/>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="7">
                                        </td>
                                        <td>
                                            <button type="submit" name="delete" class="btn btn-danger">Xóa</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p><h3>THÔNG TIN KIỂM SOÁT Ô NHIỄM KHÔNG KHÍ</h3></p>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputNguonthaikhi" class="col-sm-2 control-label">Nguồn thải</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" id="inputNguonthaikhi">
                                            <option value="1">Khí thải/mùi</option>
                                            <option value="2">Bụi</option>
                                            <option value="3">Khói thải lò hơi</option>
                                            <option value="4">Khói từ sấy, đốt</option>
                                            <option value="5">Máy phát dự phòng</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNam" class="col-sm-2 control-label">Năm <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputNam" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputNguonphatsinhchuyeu_khi" class="col-sm-2 control-label">Nguồn phát sinh chủ yếu<span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputNguonphatsinhchuyeu_khi" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Chưa xử lý</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Ống khói</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Hấp phụ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Hấp thụ</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label><input type="checkbox"> Khác</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-primary">Lưu thông tin kiểm soát</button>
                                        <button type="submit" class="btn btn-success">Thêm khác</button>
                                        <button type="reset" class="btn btn-info">Quay về</button>
                                    </div>
                                </div>
                            </form>
                            <!--/khithai-->
                        </div>
                        <div class="tab-pane" id="panel-tiengonrung">
                            <!--tiengonrung-->
                            <!--/tiengonrung-->
                        </div>
                        <div class="tab-pane" id="panel-racsinhhoat">
                            <!--racsinhhoat-->
                            <!--/racsinhhoat-->
                        </div>
                        <div class="tab-pane" id="panel-chatthaicongnghiep">
                            <!--chatthaicongnghiep-->
                            <!--/chatthaicongnghiep-->
                        </div>
                        <div class="tab-pane" id="panel-chatthainguyhai">
                            <!--chatthainguyhai-->
                            <!--/chatthainguyhai-->
                        </div>
                    </div>
                </div>

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
    $(function() {
        $('ul.nav-tabs li').click(function(event) {
            if (!$(this).hasClass('active') && !$(this).hasClass('canclick')) {
                alert('Vui lòng nhập thông tin hoạt động xả thải');
                return false;
            }
        });
    });
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>
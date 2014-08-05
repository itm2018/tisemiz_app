<div class="main-header">
    <h2>Thêm mới doanh nghiệp</h2>
    <em>lưu ý chọn năm nhập liệu</em>
</div>

<div class="main-content">
    <!--form_main-->
    <div class="tabbable" id="tabs-9834">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="#panel-1" data-toggle="tab">Thông tin doanh nghiệp</a>
            </li>
            <li>
                <a href="#panel-2" data-toggle="tab">Hoạt động sản xuất</a>
            </li>
            <li>
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
            <div class="tab-pane active" id="panel-1">
                <p><h3>I. THÔNG TIN DOANH NGHIỆP</h3></p>
				<!-- form thong tin doanh nghiep -->
                <?php echo $this->element('Admin.Doanhnghieps/form_thongtindoanhnghiep');?>
				<!-- end form thong tin doanh nghiep-->

			</div>
            <div class="tab-pane" id="panel-2">
                <br>
                <div class="tabbable" id="tabs-9835">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#panel-tongquan" data-toggle="tab">Tổng quan</a>
                        </li>
                        <li>
                            <a href="#panel-sanpham" data-toggle="tab">Sản phẩm</a>
                        </li>
                        <li>
                            <a href="#panel-nguyenlieu" data-toggle="tab">Nguyên liệu</a>
                        </li>
                        <li>
                            <a href="#panel-diennuoc" data-toggle="tab">Điện nước</a>
                        </li>
                        <li>
                            <a href="#panel-nuocngam" data-toggle="tab">Nước ngầm</a>
                        </li>
                        <li>
                            <a href="#panel-nhienlieu" data-toggle="tab">Nhiên liệu</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="panel-tongquan">
                            <!--form thong tin hoat dong san xuat -->
                            <?php echo $this->element('Admin.Doanhnghieps/form_hoatdongsanxuat');?>
                            <!--end form thong tin hoat dong san xuat-->
                        </div>
                        <div class="tab-pane" id="panel-sanpham">

                            <!--form thong tin sản phẩm -->
                            <?php echo $this->element('Admin.Doanhnghieps/form_sanphamdoanhnghiep');?>
							<!--end form thong tin sản phẩm-->
                        </div>
                        <div class="tab-pane" id="panel-nguyenlieu">
                            <!--form nguyen lieu-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_nguyenlieusanpham');?>
                            <!--end form nguyen lieu-->
                        </div>
                        <div class="tab-pane" id="panel-diennuoc">
                            <!--form dien nươc-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_diennuocdoanhnghiep');?>
                            <!--end form dien nuoc-->
                        </div>
                        <div class="tab-pane" id="panel-nuocngam">
                            <!--form nuoc ngam-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_nuocngamdoanhnghiep');?>
                            <!--end form nuoc ngam-->
                        </div>
                        <div class="tab-pane" id="panel-nhienlieu">
                            <!--form nhien lieu-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_nhienlieudoanhnghiep');?>
                            <!--end form nhien lieu-->
                        </div>
                    </div>
                    <!-- common of hoat dong san xuat -->

                    <!-- end of common of hoat dong san xuat -->
                </div>


            </div>
            <div class="tab-pane" id="panel-3">
                <br>
                <div class="tabtable" id="tabs-9836">
                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a href="#panel-nuocthai" data-toggle="tab">Nước thải</a>
                        </li>
                        <li>
                            <a href="#panel-kiemsoatnuocthai" data-toggle="tab">Kiểm soát nước thải</a>
                        </li>
                        <li>
                            <a href="#panel-khithai" data-toggle="tab">Khí thải</a>
                        </li>
                        <li>
                            <a href="#panel-tiengonrung" data-toggle="tab">Tiếng ồn và rung</a>
                        </li>
                        <li>
                            <a href="#panel-racsinhhoat" data-toggle="tab">Rác sinh hoạt</a>
                        </li>
                        <li>
                            <a href="#panel-chatthaicongnghiep" data-toggle="tab">Chất thải công nghiệp</a>
                        </li>
                        <li>
                            <a href="#panel-chatthainguyhai" data-toggle="tab">Chất thải nguy hại</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="panel-nuocthai">
                            <!-- form thong tin nuoc thai doanh nghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_nuocthainhamay');?>
                            <!-- end form thong tin nuoc thai doanh nghiep -->
                        </div>
                        <div class="tab-pane" id="panel-kiemsoatnuocthai">
                            <!-- form xu ly nuoc thai doanh nghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_xulynuocthaidoanhnghiep');?>
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
    tinymce.init({
        selector: "textarea",
        plugins: [
            "advlist autolink lists link image charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste moxiemanager textcolor hr spellchecker tabfocus insertdatetime autoresize code bbcode contextmenu emoticons fullpage"
        ],
        toolbar: "insertfile undo redo | fontselect fontsizeselect formatselect styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | color | search replace | bullist numlist | outdent indent blockquote | link unlink anchor image cleanup help code | insertdate inserttime preview | forecolor backcolor | tablecontrols | hr removeformat visualaid | sub sup | charmap emotions iespell media advhr | print | ltr rtl | fullscreen",
    });
</script>
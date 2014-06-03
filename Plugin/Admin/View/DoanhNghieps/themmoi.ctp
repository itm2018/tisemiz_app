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
                <form class="form-horizontal" role="form">
                	<h4>Thông tin chung</h4>
                	<div class="form-group">
                        <label for="inputNamnhaplieu" class="col-sm-2 control-label">Năm nhập liệu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNamnhaplieu" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputMaDoanhNghiep" class="col-sm-2 control-label">Mã doanh nghiệp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputMaDoanhNghiep" placeholder="" disabled="disabled">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTenDoanhNghiep" class="col-sm-2 control-label">Tên Doanh Nghiệp</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTenDoanhNghiep" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTenTiengAnh" class="col-sm-2 control-label">Tên Tiếng Anh</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputTenTiengANh" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputGiamDoc" class="col-sm-2 control-label">Giám đốc</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputGiamDoc" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLoaihinhKinhDoanh" class="col-sm-2 control-label">Loại hình kinh doanh</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputLoaihinhKinhDoanh">
                            	<option value="1">Doanh nghiệp tư nhân</option>
                            	<option vaue="2">Công ty TNHH</option>
                            	<option value=3">Công ty Cổ phần</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputNamHD" class="col-sm-2 control-label">Năm hoạt động</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNamHD">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputQuocgia" class="col-sm-2 control-label">Quốc gia</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="inputQuocgia">
                            	<option value="1">Việt Nam</option>
                            	<option vaue="2">Nhật</option>
                            	<option value=3">Hàn Quốc</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputGiayPhepHD" class="col-sm-2 control-label">Giấy phép hoạt động</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputGiayPhepHD" placeholder="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputQuitrinhSanXuat" class="col-sm-2 control-label">Qui trình sản xuất</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" id="inputQuitrinhSanXuat" placeholder=""></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputTinhHinhHoatDong" class="col-sm-2 control-label">Đang/ngưng hoạt động</label>
                        <div class="col-sm-10">
                            <input type="checkbox" class="form-control" id="inputTinhHinhHoatDong"">
                        </div>
                    </div>
                    <!--<div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                 <label><input type="checkbox"> Remember me</label>
                            </div>
                        </div>
                    </div>-->
                    <h4>Thông tin tình hình hoạt động</h4>
                    <div class="form-group">
                        <label for="inputNguoiPhuTrachMoitruong" class="col-sm-2 control-label">Người phụ trách môi trường</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputNguoiPhuTrachMoitruong"">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSanpham" class="col-sm-2 control-label">Sản phẩm</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSanpham"">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCongsuat" class="col-sm-2 control-label">Công suất</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputCongsuat"">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputNganh" class="col-sm-2 control-label">Ngành</label>
                        <div class="col-sm-10">
                            <select id="multiselect3-all" name="multiselect3[]" class="multiselect" multiple="multiple" style="display: none;">
													<option value="multiselect-all">Select All</option>
													<option value="cheese">Dệt may</option>
													<option value="tomatoes">Điện tử</option>
													<option value="mozarella">Hoá phẩm</option>
													<option value="mushrooms">Giày dép</option>
													<option value="pepperoni">Thuốc BVTV</option>
													<option value="onions">Ắc qui</option>
												</select>
							<div class="btn-group">
							<?php echo $this->Html->script('/assets/js/bootstrap-multiselect');?>
							<script type="text/javascript">
							$(document).ready(function(){
								$("#multiselect3-all").multiselect({includeSelectAllOption:!0,buttonClass:"btn btn-primary"});
								});
							</script>
							</div>
                        </div>
                    </div>
                    <h4>Vị trí địa lý</h4>
                     <div class="form-group">
                        <label for="inputCongsuat" class="col-sm-2 control-label">Toạ độ</label>
                        <div class="col-sm-10">
                            <input type="text" class="col-sm-4 form-control" id="inputToadox" placeholder="X">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="text" class="col-sm-4 form-control" id="inputToadoy" placeholder="Y">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputDiachi" class="col-sm-2 control-label">Địa chỉ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputDiachi">
                        </div>
                    </div>
                    <h4>Thông tin liên lạc</h4>
                    <div class="form-group">
                        <label for="inputTel" class="col-sm-2 control-label">Điện thoại</label>
                        <div class="col-sm-10">
                            <input type="tel" class="form-control" id="inputTel">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputFax" class="col-sm-2 control-label">Fax</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputDiachi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputSotk" class="col-sm-2 control-label">Số tài khoản</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSotk">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Lưu thông tin doanh nghiệp</button>
                            <button type="reset" class="btn btn-info">Làm lại</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="panel-2">
                <br>
                <div class="tabbable" id="tabs-9835">
                    <ul class="nav nav-tabs">
                        <li class="active">
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
                        <div class="tab-pane active" id="panel-sanpham">
                            <p><h3>II. THÔNG TIN HOẠT ĐỘNG SẢN XUẤT</h3></p>
                            <form class="form-horizontal" role="form">
                                <div class="form-group">
                                    <label for="inputTongdtxd" class="col-sm-2 control-label">Tổng diện tích xây dựng</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputTongdtxd" placeholder="diện tích xây dựng">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputTongnv" class="col-sm-2 control-label">Tổng nhân viên</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputTongnv" placeholder="tổng số lượng nhân viên">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSoca" class="col-sm-2 control-label">Số ca sản xuất</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSoca" placeholder="số ca sản xuất">
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-6 column">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <label for="suatan" class="col-sm-12 control-label">Suất ăn cho công nhân</label>
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        <div class="radio">
                                                                            <label><input type="radio" name="suatan" value="1"> Nhà máy</label>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="radio">
                                                                            <label><input type="radio" name="suatan" value="2"> Bên ngoài</label>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-md-6 column">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <label for="inputSoxuat" class="col-sm-12 control-label">Số xuất trên ngày</label>
                                                    </td>
                                                    <td>
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputSoxuat" placeholder="">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>


                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputQuitrinh" class="col-sm-2 control-label">Qui trình công nghệ sản xuất</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputQuitrinh" placeholder="Qui trình công nghệ sản xuất"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="panel-nguyenlieu">
                            Nguyên liệu
                        </div>
                        <div class="tab-pane" id="panel-diennuoc">
                            Điện nước
                        </div>
                        <div class="tab-pane" id="panel-nuocngam">
                            Nước ngầm
                        </div>
                        <div class="tab-pane" id="panel-nhienlieu">
                            Nhiên liệu
                        </div>
                    </div>
                    <!-- common of hoat dong san xuat -->
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Lưu thông tin hoạt động sản xuất</button>
                            <button type="reset" class="btn btn-info">Làm lại</button>
                        </div>
                    </div>
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
            <p><h3>3.1. NƯỚC THẢI</h3></p>
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
                        Lưu lượng
                    </th>
                    <th>
                        Nguồn phát sinh chủ yếu
                    </th>
                    <th>
                        Lưu lượng thiết kế
                    </th>
                    <th>
                        Lưu lượng thực tế
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
                        <input type="checkbox" name="deleterow"/>
                    </td>
                </tr>
                <tr>
                    <td colspan="6">
                    </td>
                    <td>
                        <button type="submit" name="delete" class="btn btn-danger">Xóa</button>
                    </td>
                </tr>
                </tbody>
            </table>
            <p><h3>THÔNG TIN NƯỚC THẢI</h3></p>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputNguonthai" class="col-sm-2 control-label">Nguồn thải</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="inputNguonthai">
                            <option value="1">Sinh hoạt</option>
                            <option value="2">Sản xuất</option>
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
                    <label for="inputLuuluong" class="col-sm-2 control-label">Lưu lượng(m3/ngày)<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputLuuluong" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputNguonphatsinhchuyeu" class="col-sm-2 control-label">Nguồn phát sinh chủ yếu<span class="text-danger">*</span></label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputNguonphatsinhchuyeu" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputLuuluongthietke" class="col-sm-2 control-label">Lưu lượng thiết kế</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputLuuluongthietke" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputLuuluongthucte" class="col-sm-2 control-label">Lưu lượng thực tế</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputLuuluongthucte" placeholder="">
                    </div>
                </div>
                <!--<div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                             <label><input type="checkbox"> Remember me</label>
                        </div>
                    </div>
                </div>-->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Lưu thông tin nước thải</button>
                        <button type="submit" class="btn btn-success">Thêm khác</button>
                        <button type="reset" class="btn btn-info">Quay về</button>
                    </div>
                </div>
            </form>
            </div>
            <div class="tab-pane" id="panel-kiemsoatnuocthai">
            <p><h3>3.2. BIỆN PHÁP XỬ LÝ NƯỚC THẢI</h3></p>
            <table class="table">
                <thead>
                <tr>
                    <th>
                        Năm
                    </th>
                    <th>
                        Biện pháp xử lý
                    </th>
                    <th>
                        Sinh hoạt
                    </th>
                    <th>
                        Sản xuất
                    </th>
                    <th>
                        Xử lý khí thải
                    </th>
                    <th>
                        Làm nguội
                    </th>
                    <th>
                        Nguồn khác
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
            <p><h3>THÔNG TIN XỬ LÝ NƯỚC THẢI</h3></p>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputBienphapxuly" class="col-sm-2 control-label">Biện pháp xử lý</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="inputBienphapxuly">
                            <option value="1">Xả vào tuyến nước mưa</option>
                            <option value="2">Xả vào tuyến nước bẩn</option>
                            <option value="3">Song chắn rác</option>
                            <option value="4">Tuyến nổi</option>
                            <option value="5">Lắng</option>
                            <option value="6">Keo tụ</option>
                            <option value="7">Điều chỉnh pH</option>
                            <option value="8">Sinh học kỵ khí</option>
                            <option value="9">Sinh học hiếu khí</option>
                            <option value="10">Lắng 2</option>
                            <option value="11">Lọc</option>
                            <option value="12">Khử trùng</option>
                            <option value="13">Ép bùn</option>
                            <option value="14">Khác</option>
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
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input type="checkbox"> Sinh hoạt</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input type="checkbox"> Sản xuất</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input type="checkbox"> Xử lý khí thải</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input type="checkbox"> Làm nguội</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input type="checkbox"> Nguồn khác</label>
                        </div>
                    </div>
                </div>
                <!--<div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                             <label><input type="checkbox"> Remember me</label>
                        </div>
                    </div>
                </div>-->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Lưu thông tin xử lý nước thải</button>
                        <button type="submit" class="btn btn-success">Thêm khác</button>
                        <button type="reset" class="btn btn-info">Quay về</button>
                    </div>
                </div>
            </form>
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
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
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step6'); ?>"><li>6</li></a>
					<a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step7'); ?>"><li>7</li></a>
					<li>8</li>
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
                <a href="#panel-3" data-toggle="tab">HĐ Xả thải</a>
            </li>
            <li class="tab4">
                <a href="#panel-4" data-toggle="tab">Giám sát định kỳ</a>
            </li>
            <li class="tab5">
                <a href="#panel-5" data-toggle="tab">Hoạt động bảo vệ MT</a>
            </li>
			<li class="tab6">
				<a href="#panel-6" data-toggle="tab">Quan trắc tự động</a>
			</li>
			<li class="tab7">
				<a href="#panel-7" data-toggle="tab">Kiến nghị</a>
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
                            <a id="step2-panel-dien" href="#panel-dien" data-toggle="tab">Điện</a>
                        </li>
						<li class="canclick">
							<a id="step2-panel-nuoc" href="#panel-nuoc" data-toggle="tab">Nước</a>
						</li>
                        <li class="canclick">
                            <a id="step2-panel-nuocngam" href="#panel-nuocngam" data-toggle="tab">Nước ngầm</a>
                        </li>
                        <li class="canclick">
                            <a id="step2-panel-nhienlieu" href="#panel-nhienlieu" data-toggle="tab">Nhiên liệu</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane<?php if(!$activetab) echo ' active'?>" id="panel-tongquan">
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
                        <div class="tab-pane" id="panel-dien">
                            <!--form dien nươc-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_diennuocdoanhnghiep'); ?>
                            <!--end form dien nuoc-->
                        </div>
						<div class="tab-pane" id="panel-nuoc">
							<!--form nươc-->
							<?php echo $this->element('Admin.Doanhnghieps/form_nuocdoanhnghiep'); ?>
							<!--end form nuoc-->
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
            <div class="tab-pane" id="panel-6">

            </div>
			<div class="tab-pane" id="panel-7">

            </div>
        </div>
    </div>
    <!--form_main-->
</div>
<!-- /main-content -->
<script type="text/javascript">
//    var fullbaseUrl = '<?php // echo Router::fullBaseUrl() ?>';
//    var baseUrl = '<?php // echo Router::url('/admin/doanhnghiep/themmoi/step2') ?>';
    $(function() {
		$('.table').tooltip();
        $('ul.nav-tabs li').click(function(event) {
            if (!$(this).hasClass('active') && !$(this).hasClass('canclick')) {
                alert('Vui lòng nhập thông tin hoạt động sản xuất');
                return false;
            }
        });
		<?php if(isset($activetab) && $activetab=='sanpham'):?>
			$('#panel-sanpham').addClass('active');
			$('a[href="#panel-sanpham"]').parent('li').addClass('active');
		 	$('a[href="#panel-sanpham"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
		<?php if(isset($activetab) && $activetab=='nguyenlieu'):?>
		$('#panel-nguyenlieu').addClass('active');
		$('a[href="#panel-nguyenlieu"]').parent('li').addClass('active');
		$('a[href="#panel-nguyenlieu"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
		<?php if(isset($activetab) && $activetab=='dien'):?>
		$('#panel-dien').addClass('active');
		$('a[href="#panel-dien"]').parent('li').addClass('active');
		$('a[href="#panel-dien"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
		<?php if(isset($activetab) && $activetab=='nuoc'):?>
		$('#panel-nuoc').addClass('active');
		$('a[href="#panel-nuoc"]').parent('li').addClass('active');
		$('a[href="#panel-nuoc"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
		<?php if(isset($activetab) && $activetab=='nuocngam'):?>
		$('#panel-nuocngam').addClass('active');
		$('a[href="#panel-nuocngam"]').parent('li').addClass('active');
		$('a[href="#panel-nuocngam"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
		<?php if(isset($activetab) && $activetab=='nhienlieu'):?>
		$('#panel-nhienlieu').addClass('active');
		$('a[href="#panel-nhienlieu"]').parent('li').addClass('active');
		$('a[href="#panel-nhienlieu"]').parent('li').parent('ul').children('li:first').removeClass('active');
		<?php endif;?>
    });
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>
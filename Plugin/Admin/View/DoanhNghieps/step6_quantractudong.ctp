<table>
	<tr>
		<td>
			<div class="nav-steps">
				<ul id="steps">
					<a href="<?php echo Router::url('/admin/doanhnghiep/themmoi'); ?>"><li class="active">1</li></a>
					<a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step2'); ?>"><li class="active">2</li></a>
					<a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step3'); ?>"><li class="active">3</li></a>
					<a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step4'); ?>"><li class="active">4</li></a>
					<a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step5'); ?>"><li class="active">5</li></a>
					<li class="active">6</li>
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
			<li class="tab2">
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
			<li class="tab6 active">
				<a href="#panel-6 active" data-toggle="tab">Quan trắc tự động</a>
			</li>
			<li class="tab7">
				<a href="#panel-7" data-toggle="tab">Kiến nghị</a>
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
			<div class="tab-pane" id="panel-5">

			</div>
			<div class="tab-pane active" id="panel-6">
				<!--thong tin quan trac tu dong-->
<!--				bo sung sau-->
				<!--ket thuc thong tin quan trac tu dong-->
			</div>
			<div class="tab-pane" id="panel-7">

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
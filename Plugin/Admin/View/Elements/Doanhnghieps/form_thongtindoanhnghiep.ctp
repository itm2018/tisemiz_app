<?php echo $this->Form->create('DoanhNghiep',array('method'=>'post','class'=>'form-horizontal','role'=>'form',
												   'novalidate'=>'novalidate'));?>
	<h4>Thông tin chung</h4>
	<div class="form-group">
		<label for="inputNamnhaplieu" class="col-sm-2 control-label">Năm nhập liệu <span class="required">*</span></label>
		<?php echo $this->Form->input('nam',array('type'=>'number','class'=>'form-control',
												  'div'=>array('class'=>'col-sm-10'),'label'=>false,
												  'value'=>date('Y')));?>
	</div>
	<div class="form-group">
		<label for="inputTenDoanhNghiep" class="col-sm-2 control-label">Tên Doanh Nghiệp <span class="required">*</span></label>
		<?php echo $this->Form->input('colTen',array('type'=>'text','class'=>'form-control',
													 'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputTenTiengAnh" class="col-sm-2 control-label">Tên Tiếng Anh</label>
		<?php echo $this->Form->input('colTenTAnh',array('type'=>'text','class'=>'form-control',
													 'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputGiamDoc" class="col-sm-2 control-label">Giám đốc</label>
		<?php echo $this->Form->input('giamdoc',array('type'=>'text','class'=>'form-control',
													 'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputLoaihinhKinhDoanh" class="col-sm-2 control-label">Loại hình kinh doanh</label>
		<?php echo $this->Form->input('colLoaiHinhDN',array('class'=>'form-control',
													 'div'=>array('class'=>'col-sm-10'),'label'=>false,
									  'options'=>Common::getListLoaihinhkinhdoanh()));?>
	</div>
	<div class="form-group">
		<label for="inputNamHD" class="col-sm-2 control-label">Năm hoạt động</label>
		<?php echo $this->Form->input('colNamHopDong',array('type'=>'text','class'=>'form-control',
													 'div'=>array('class'=>'col-sm-10'),'label'=>false,
													 'placeholder'=>'dd/mm/yyyy'));?>
	</div>
	<div class="form-group">
		<label for="inputQuocgia" class="col-sm-2 control-label">Quốc gia</label>
		<?php echo $this->Form->input('colQuocGia',array('class'=>'form-control',
															'div'=>array('class'=>'col-sm-10'),'label'=>false,
															'options'=>Common::getListQuocgia()));?>
	</div>
	<div class="form-group">
		<label for="inputGiayPhepHD" class="col-sm-2 control-label">Giấy phép hoạt động/kinhdoanh</label>
		<?php echo $this->Form->input('colGiayPhepKD',array('type'=>'text','class'=>'form-control',
															'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputGiayPhepHD" class="col-sm-2 control-label">Giấy phép đầu tư</label>
		<?php echo $this->Form->input('colGiayPhepDT',array('type'=>'text','class'=>'form-control',
															'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputQuitrinhSanXuat" class="col-sm-2 control-label">Qui trình sản xuất</label>
		<?php echo $this->Form->input('colQTrinhSX',array('type'=>'textarea','class'=>'form-control',
															'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputTinhHinhHoatDong" class="col-sm-2 control-label">Đang/ngưng hoạt động</label>
		<div class="col-sm-10">
			<?php echo $this->Form->checkbox('status');?>
		</div>
	</div>

	<h4>Thông tin tình hình hoạt động</h4>
	<div class="form-group">
		<label for="inputNguoiPhuTrachMoitruong" class="col-sm-2 control-label">Người phụ trách môi trường</label>
		<?php echo $this->Form->input('nguoiphutrachmt',array('type'=>'text','class'=>'form-control',
															'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputSanpham" class="col-sm-2 control-label">Sản phẩm</label>
		<?php echo $this->Form->input('colSanpham',array('type'=>'text','class'=>'form-control',
															  'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputCongsuat" class="col-sm-2 control-label">Công suất</label>
		<?php echo $this->Form->input('colCongsuat',array('type'=>'text','class'=>'form-control',
															  'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputNganh" class="col-sm-2 control-label">Ngành</label>
		<div class="col-sm-10">

			<?php echo $this->Form->input('multiselect3[]',array('class'=>'form-control multiselect',
																 'multiple'=>'multiple',
														  'div'=>false,'label'=>false,'style'=>'display: none',
														  'id'=>'multiselect3-all',
														  'options'=>Common::getListNganh()));?>
			<div class="btn-group">
			<?php echo $this->Html->script('/assets/js/bootstrap-multiselect');?>
				<script type="text/javascript">
					$(document).ready(function() {
						$("#multiselect3-all").multiselect({includeSelectAllOption: !0, buttonClass: "btn btn-primary"});
					});
				</script>
			</div>
		</div>
	</div>
	<h4>Vị trí địa lý</h4>
	<div class="form-group">
		<label for="inputCongsuat" class="col-sm-2 control-label">Toạ độ</label>
		<div class="col-sm-10">
			<?php echo $this->Form->input('colX',array('type'=>'text','class'=>'col-sm-4 form-control',
													   'placeholder'=>'X','div'=>false,'label'=>false));?>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<?php echo $this->Form->input('colY',array('type'=>'text','class'=>'col-sm-4 form-control',
													   'placeholder'=>'Y','div'=>false,'label'=>false));?>
		</div>
	</div>
	<div class="form-group">
		<label for="inputDiachi" class="col-sm-2 control-label">Địa chỉ</label>
		<?php echo $this->Form->input('colDiaChi',array('type'=>'text','class'=>'form-control',
														  'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<h4>Thông tin liên lạc</h4>
	<div class="form-group">
		<label for="inputTel" class="col-sm-2 control-label">Điện thoại</label>
		<?php echo $this->Form->input('colDienThoai',array('type'=>'tel','class'=>'form-control',
														  'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputFax" class="col-sm-2 control-label">Fax</label>
		<?php echo $this->Form->input('colFax',array('type'=>'tel','class'=>'form-control',
														   'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputEmail" class="col-sm-2 control-label">Email</label>
		<?php echo $this->Form->input('colEmail',array('type'=>'email','class'=>'form-control',
														   'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<label for="inputSotk" class="col-sm-2 control-label">Số tài khoản</label>
		<?php echo $this->Form->input('colSoTK',array('type'=>'text','class'=>'form-control',
													   'div'=>array('class'=>'col-sm-10'),'label'=>false));?>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<?php echo $this->Form->submit(__('Lưu thông tin doanh nghiệp'),array('class'=>'btn btn-primary',
																				  'div'=>false,'label'=>false));?>
			<?php echo $this->Form->input(null,array('type'=>'reset','class'=>'btn btn-info','value'=>'Làm lại',
													 'div'=>false,'label'=>false));?>
		</div>
	</div>
<?php echo $this->Form->end();?>
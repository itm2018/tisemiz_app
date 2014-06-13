<!--<form class="form-horizontal" role="form">-->
<?php echo $this->Form->create('HoatDongSanXuat',array('method'=>'post','class'=>'form-horizontal','role'=>'form'));?>
	<div class="form-group">
		<label for="inputTongdtxd" class="col-sm-2 control-label">Tổng diện tích xây dựng</label>
		<!--<div class="col-sm-10">
			<input type="text" class="form-control" id="inputTongdtxd" placeholder="diện tích xây dựng">
		</div>-->
		<?php echo $this->Form->input('colDienTichDatXD',array('type'=>'text','class'=>'form-control',
															   'placeholder'=>__('tổng diện tích đất xây dựng (m2)')))
		;?>
	</div>
	<div class="form-group">
		<label for="inputTongnv" class="col-sm-2 control-label">Tổng nhân viên</label>
		<!--<div class="col-sm-10">
			<input type="text" class="form-control" id="inputTongnv" placeholder="tổng số lượng nhân viên">
		</div>-->
		<?php echo $this->Form->input('colNVienTT', array('type'=>'text','class'=>'form-control',
														  'placeholder'=>__('tổng số lượng nhân viên')));?>
	</div>
	<div class="form-group">
		<label for="inputSoca" class="col-sm-2 control-label">Số ca sản xuất</label>
		<!--<div class="col-sm-10">
			<input type="text" class="form-control" id="inputSoca" placeholder="số ca sản xuất">
		</div>-->
		<?php echo $this->Form->input('colSoCaSX', array('type'=>'text','class'=>'form-control',
														  ));?>
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
							<div class="col-sm-offset-
							2 col-sm-10">
								<table>
									<tr>
										<td>
											<div class="radio">
												<!--<label><input type="radio" name="suatan" value="1"> Nhà
												máy</label>-->
												<?php echo $this->Form->radio('');?>
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

<?php echo $this->Form->create('form1',array('method'=>'post'));?>
    <table id="Table9" cellspacing="0" cellpadding="0" width="100%" border="0">
        <tbody><tr>
				<td style="text-align: left;">
					<?php echo $this->Html->image('hea_im_title04.gif', array('id' => 'title_image')); ?>
				</td>
				<td style="text-align: left;">
					<span id="lblTitle" style="font-family:Times New Roman;font-size:12pt;font-weight:bold;">Chất thải nguy hại</span>
				</td>
			</tr>
		</tbody></table>
	<table cellspacing="0" cellpadding="0" width="100%" border="0" class="grid" style="margin-top: 20px;">
		<thead>
			<tr>
				<th width="5%" align="center">
					STT
				</th>
				<th width="10%" align="center">
					Loại chất thải
				</th>
				<th width="5%" align="center">
					Đơn vị
				</th>

				<th align="center">
					Tháng
					1
				</th>

				<th align="center">
					Tháng
					2
				</th>

				<th align="center">
					Tháng
					3
				</th>

				<th align="center">
					Tháng
					4
				</th>

				<th align="center">
					Tháng
					5
				</th>

				<th align="center">
					Tháng
					6
				</th>

				<th align="center">
					Tháng
					7
				</th>

				<th align="center">
					Tháng
					8
				</th>

				<th align="center">
					Tháng
					9
				</th>

				<th align="center">
					Tháng
					10
				</th>

				<th align="center">
					Tháng
					11
				</th>

				<th align="center">
					Tháng
					12
				</th>

				<th width="5%" align="center">
					Tổng
				</th>

				<th width="5%" align="center">
					Đơn vị thu gom-vận chuyển-xử lý
				</th>

				<th width="5%" align="center">
					Chức năng
				</th>
			</tr>
		</thead>

		<tbody><tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
				<td align="center">
					<input type="text" style="width: 98%" value="" id="ThuTu" name="ThuTu[]">
					<input type="hidden" style="width: 98%" value="" id="ID" name="ID[]">
				</td>
				<td align="left">
					<input type="text" style="width: 98%" value="" id="Ten" name="Ten[]">
				</td>
				<td align="center">
					<input type="text" style="width: 98%" value="" id="DonVi" name="DonVi[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T1[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T2[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T3[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T4[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T5[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T6[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T7[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T8[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T9[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T10[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T11[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T12[]">
				</td>

				<td>
				</td>

				<td align="center">
					<input type="text" style="width: 98%" value="" id="GhiChu" name="GhiChu[]">
				</td>

				<td align="center">
				</td>
			</tr>

			<tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
				<td align="center">
					<input type="text" style="width: 98%" value="" id="ThuTu" name="ThuTu[]">
					<input type="hidden" style="width: 98%" value="" id="ID" name="ID[]">
				</td>
				<td align="left">
					<input type="text" style="width: 98%" value="" id="Ten" name="Ten[]">
				</td>
				<td align="center">
					<input type="text" style="width: 98%" value="" id="DonVi" name="DonVi[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T1[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T2[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T3[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T4[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T5[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T6[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T7[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T8[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T9[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T10[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T11[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T12[]">
				</td>

				<td>
				</td>

				<td align="center">
					<input type="text" style="width: 98%" value="" id="GhiChu" name="GhiChu[]">
				</td>

				<td align="center">
				</td>
			</tr>

			<tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
				<td align="center">
					<input type="text" style="width: 98%" value="" id="ThuTu" name="ThuTu[]">
					<input type="hidden" style="width: 98%" value="" id="ID" name="ID[]">
				</td>
				<td align="left">
					<input type="text" style="width: 98%" value="" id="Ten" name="Ten[]">
				</td>
				<td align="center">
					<input type="text" style="width: 98%" value="" id="DonVi" name="DonVi[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T1[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T2[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T3[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T4[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T5[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T6[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T7[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T8[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T9[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T10[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T11[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T12[]">
				</td>

				<td>
				</td>

				<td align="center">
					<input type="text" style="width: 98%" value="" id="GhiChu" name="GhiChu[]">
				</td>

				<td align="center">
				</td>
			</tr>

			<tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
				<td align="center">
					<input type="text" style="width: 98%" value="" id="ThuTu" name="ThuTu[]">
					<input type="hidden" style="width: 98%" value="" id="ID" name="ID[]">
				</td>
				<td align="left">
					<input type="text" style="width: 98%" value="" id="Ten" name="Ten[]">
				</td>
				<td align="center">
					<input type="text" style="width: 98%" value="" id="DonVi" name="DonVi[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T1[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T2[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T3[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T4[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T5[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T6[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T7[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T8[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T9[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T10[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T11[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T12[]">
				</td>

				<td>
				</td>

				<td align="center">
					<input type="text" style="width: 98%" value="" id="GhiChu" name="GhiChu[]">
				</td>

				<td align="center">
				</td>
			</tr>

			<tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
				<td align="center">
					<input type="text" style="width: 98%" value="" id="ThuTu" name="ThuTu[]">
					<input type="hidden" style="width: 98%" value="" id="ID" name="ID[]">
				</td>
				<td align="left">
					<input type="text" style="width: 98%" value="" id="Ten" name="Ten[]">
				</td>
				<td align="center">
					<input type="text" style="width: 98%" value="" id="DonVi" name="DonVi[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T1[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T2[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T3[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T4[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T5[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T6[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T7[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T8[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T9[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T10[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T11[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T12[]">
				</td>

				<td>
				</td>

				<td align="center">
					<input type="text" style="width: 98%" value="" id="GhiChu" name="GhiChu[]">
				</td>

				<td align="center">
				</td>
			</tr>
			<?php
			if(!empty($hientrangchatthairannguyhai)){
				foreach($hientrangchatthairannguyhai as $key=>$htctrnh){
					?>
			<tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(219, 240, 201);">
				<td align="center">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['stt'];?>" id="ThuTu" name="ThuTu[]">
					<input type="hidden" style="width: 98%" value="<?php echo $htctrnh['temp_id'];?>" id="ID" name="ID[]">
				</td>
				<td align="left">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['loaichatthai'];?>" id="Ten" name="Ten[]">
				</td>
				<td align="center">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['donvi'];?>" id="DonVi" name="DonVi[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang1'];?>" name="T1[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang2'];?>" name="T2[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang3'];?>" name="T3[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang4'];?>" name="T4[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang5'];?>" name="T5[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang6'];?>" name="T6[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang7'];?>" name="T7[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang8'];?>" name="T8[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang9'];?>" name="T9[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang10'];?>" name="T10[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang11'];?>" name="T11[]">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['thang12'];?>" name="T12[]">
				</td>

				<td>
					<?php echo $htctrnh['tong'];?>
				</td>

				<td align="center">
					<input type="text" style="width: 98%" value="<?php echo $htctrnh['ghichu'];?>" id="GhiChu" name="GhiChu[]">
				</td>

				<td align="center">
					<a href="javascript:doDelete(<?php echo h($htctrnh['temp_id']); ?>,'');">Delete</a>
				</td>
			</tr>
			<?php
				}
			}
			?>
		</tbody></table>


    <input type="button" id="btnCapNhat" name="btnCapNhat" onclick="window.opener.location.reload();
			window.close();" value="Kết thúc">
    <input type="submit" name="btnSave" value="Cập nhật" id="btnSave" class="button">
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
	function doDelete(strID, strAllQueryString) {
		if (confirm('Bạn có thực sự muốn xóa ?')) {
			window.location.href = "<?php echo $this->here . '?' . $_SERVER['QUERY_STRING']; ?>&action=delete&ID=" + strID + "&" + strAllQueryString;
		}
	}
</script>
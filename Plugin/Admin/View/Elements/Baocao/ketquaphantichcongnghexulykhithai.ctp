<div>ID:<?php echo !empty($baocaogsmt_id)?h($baocaogsmt_id):'';?></div>
<form method="post" action="" id="form1">
	<div class="aspNetHidden">
		<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUJNzE4NTk2ODM0D2QWAgIBD2QWBgIBDw8WAh4EVGV4dAVKS+G6v3QgcXXhuqMgcGjDom4gdMOtY2ggQ8O0bmcgbmdo4buHIHjhu60gbMO9IGtow60gdGjhuqNpIMSRYW5nIMOhcCBk4bulbmdkZAICD2QWAmYPZBYCZg9kFgYCAQ8PFgIfAAUYU+G7kSBs4bqnbiBwaMOibiB0w61jaDogZGQCAw8WAh4HVmlzaWJsZWhkAgUPDxYCHwFoZGQCAw8WAh4LXyFJdGVtQ291bnRmZGSvV2aoyJ0XkaHr3d/H0BWWc4kvfkBmV7YfpTz53tCmGg==">
	</div>

	<div class="aspNetHidden">

		<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEdAAJ9JAffbFnxNFfqcqAJqOIzlliAPKY+KvRmniYVjNuQiBO2/ObUDM2ICF7PJT0loYKUk96/l3VN5uik2uMELtNR">
	</div>
    <table id="Table9" cellspacing="0" cellpadding="0" width="100%" border="0">
        <tbody><tr>
				<td style="text-align: left;">
					<?php echo $this->Html->image('hea_im_title04.gif', array('id' => 'title_image')); ?>
				</td>
				<td style="text-align: left;">
					<span id="lblTitle" style="font-family:Times New Roman;font-size:12pt;font-weight:bold;">Kết quả phân tích Công nghệ xử lý khí thải đang áp dụng</span>
				</td>
			</tr>
		</tbody></table>
    <table id="tblBCGSMT" cellspacing="0" cellpadding="0" width="100%" border="0" style="margin-top: 20px;">
		<tbody><tr>
				<td align="left">
					<span id="lblTitleColumn">Số lần phân tích: </span>


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
					Thông số đo
				</th>
				<th width="5%" align="center">
					Đơn vị
				</th>

				<th align="center">
					Lần
					1
				</th>

				<th align="center">
					Lần
					2
				</th>

				<th align="center">
					Lần
					3
				</th>

				<th align="center">
					Lần
					4
				</th>

				<th width="5%" align="center">
					Tổng
				</th>

				<th width="5%" align="center">
					Ghi chú
				</th>

				<th width="5%" align="center">
					Chức năng
				</th>
			</tr>
		</thead>

		<tbody><tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'">
				<td align="center">
					<input type="text" style="width: 98%" value="" id="ThuTu" name="ThuTu">
					<input type="hidden" style="width: 98%" value="" id="ID" name="ID">
				</td>
				<td align="left">
					<input type="text" style="width: 98%" value="" id="Ten" name="Ten">
				</td>
				<td align="center">
					<input type="text" style="width: 98%" value="" id="DonVi" name="DonVi">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T1">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T2">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T3">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T4">
				</td>

				<td>
				</td>

				<td align="center">
					<input type="text" style="width: 98%" value="" id="File" name="File">
				</td>

				<td align="center">
				</td>
			</tr>

			<tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
				<td align="center">
					<input type="text" style="width: 98%" value="" id="ThuTu" name="ThuTu">
					<input type="hidden" style="width: 98%" value="" id="ID" name="ID">
				</td>
				<td align="left">
					<input type="text" style="width: 98%" value="" id="Ten" name="Ten">
				</td>
				<td align="center">
					<input type="text" style="width: 98%" value="" id="DonVi" name="DonVi">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T1">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T2">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T3">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T4">
				</td>

				<td>
				</td>

				<td align="center">
					<input type="text" style="width: 98%" value="" id="File" name="File">
				</td>

				<td align="center">
				</td>
			</tr>

			<tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
				<td align="center">
					<input type="text" style="width: 98%" value="" id="ThuTu" name="ThuTu">
					<input type="hidden" style="width: 98%" value="" id="ID" name="ID">
				</td>
				<td align="left">
					<input type="text" style="width: 98%" value="" id="Ten" name="Ten">
				</td>
				<td align="center">
					<input type="text" style="width: 98%" value="" id="DonVi" name="DonVi">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T1">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T2">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T3">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T4">
				</td>

				<td>
				</td>

				<td align="center">
					<input type="text" style="width: 98%" value="" id="File" name="File">
				</td>

				<td align="center">
				</td>
			</tr>

			<tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(255, 255, 255);">
				<td align="center">
					<input type="text" style="width: 98%" value="" id="ThuTu" name="ThuTu">
					<input type="hidden" style="width: 98%" value="" id="ID" name="ID">
				</td>
				<td align="left">
					<input type="text" style="width: 98%" value="" id="Ten" name="Ten">
				</td>
				<td align="center">
					<input type="text" style="width: 98%" value="" id="DonVi" name="DonVi">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T1">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T2">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T3">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T4">
				</td>

				<td>
				</td>

				<td align="center">
					<input type="text" style="width: 98%" value="" id="File" name="File">
				</td>

				<td align="center">
				</td>
			</tr>

			<tr onmouseover="this.style.background = '#dbf0c9'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(219, 240, 201);">
				<td align="center">
					<input type="text" style="width: 98%" value="" id="ThuTu" name="ThuTu">
					<input type="hidden" style="width: 98%" value="" id="ID" name="ID">
				</td>
				<td align="left">
					<input type="text" style="width: 98%" value="" id="Ten" name="Ten">
				</td>
				<td align="center">
					<input type="text" style="width: 98%" value="" id="DonVi" name="DonVi">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T1">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T2">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T3">
				</td>

				<td align="right">
					<input type="text" style="width: 98%" value="" name="T4">
				</td>

				<td>
				</td>

				<td align="center">
					<input type="text" style="width: 98%" value="" id="File" name="File">
				</td>

				<td align="center">
				</td>
			</tr>

		</tbody></table>

    <table id="Table1" cellspacing="0" cellpadding="0" width="100%" border="0" style="margin-top: 20px;">
		<tbody><tr>
				<td align="left">
					<span id="labelFileDownload"></span>
				</td>
			</tr>
		</tbody></table>


    <input type="button" id="btnCapNhat" name="btnCapNhat" onclick="window.opener.location.reload();
			window.close();" value="Kết thúc">
    <input type="submit" name="btnSave" value="Cập nhật" id="btnSave" class="button">
</form>
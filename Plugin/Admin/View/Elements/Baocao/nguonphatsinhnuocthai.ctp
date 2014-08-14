<div>ID:<?php echo !empty($baocaogsmt_id)?h($baocaogsmt_id):'';?></div>
<?php echo $this->Form->create('form1', array('method' => 'post')); ?>
    <table id="Table9" cellspacing="0" cellpadding="0" width="100%" border="0">
        <tbody><tr>
            <td style="text-align: left;">
                <?php echo $this->Html->image('hea_im_title04.gif', array('id' => 'title_image')); ?>
            </td>
            <td style="text-align: left;">
                <span id="lblTitle" style="font-family:Times New Roman;font-size:12pt;font-weight:bold;">Nguồn phát sinh ô nhiễm: Nước thải</span>
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
                            Loại nước thải
                        </th>
                        <th width="5%" align="center">
                            Đơn vị
                        </th>
                        
                        <th align="center">
                            Quý
                            1
                        </th>
                        
                        <th align="center">
                            Quý
                            2
                        </th>
                        
                        <th align="center">
                            Quý
                            3
                        </th>
                        
                        <th align="center">
                            Quý
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
                
                <tbody><tr onmouseover="this.style.background='#dbf0c9'" onmouseout="this.style.background='#ffffff'" style="background: rgb(255, 255, 255);">
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
                    
                    <td>
                    </td>
                    
                    <td align="center">
                        <input type="text" style="width: 98%" value="" id="GhiChu" name="GhiChu[]">
                    </td>
                    
                    <td align="center">
                    </td>
                </tr>
                
                <tr onmouseover="this.style.background='#dbf0c9'" onmouseout="this.style.background='#ffffff'" style="background: rgb(255, 255, 255);">
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
                    
                    <td>
                    </td>
                    
                    <td align="center">
                        <input type="text" style="width: 98%" value="" id="GhiChu" name="GhiChu[]">
                    </td>
                    
                    <td align="center">
                    </td>
                </tr>
                
                <tr onmouseover="this.style.background='#dbf0c9'" onmouseout="this.style.background='#ffffff'" style="background: rgb(255, 255, 255);">
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
                    
                    <td>
                    </td>
                    
                    <td align="center">
                        <input type="text" style="width: 98%" value="" id="GhiChu" name="GhiChu[]">
                    </td>
                    
                    <td align="center">
                    </td>
                </tr>
                
                <tr onmouseover="this.style.background='#dbf0c9'" onmouseout="this.style.background='#ffffff'" style="background: rgb(255, 255, 255);">
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
                    
                    <td>
                    </td>
                    
                    <td align="center">
                        <input type="text" style="width: 98%" value="" id="GhiChu" name="GhiChu[]">
                    </td>
                    
                    <td align="center">
                    </td>
                </tr>
                
                <tr onmouseover="this.style.background='#dbf0c9'" onmouseout="this.style.background='#ffffff'">
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
                    
                    <td>
                    </td>
                    
                    <td align="center">
                        <input type="text" style="width: 98%" value="" id="GhiChu" name="GhiChu[]">
                    </td>
                    
                    <td align="center">
                    </td>
                </tr>
                <?php 
                if(!empty($nguonphatsinhnuocthai)){
                    foreach ($nguonphatsinhnuocthai as $key=>$npsnt){
                ?>  
                <tr onmouseover="this.style.background='#dbf0c9'" onmouseout="this.style.background='#ffffff'">
                    <td align="center">
                        <input type="text" style="width: 98%" value="<?php echo h($npsnt['stt']);?>" id="ThuTu" name="ThuTu[]">
                        <input type="hidden" style="width: 98%" value="<?php echo h($npsnt['temp_id']);?>" id="ID" name="ID[]">
                    </td>
                    <td align="left">
                        <input type="text" style="width: 98%" value="<?php echo h($npsnt['loainuocthai']);?>" id="Ten" name="Ten[]">
                    </td>
                    <td align="center">
                        <input type="text" style="width: 98%" value="<?php echo h($npsnt['donvi']);?>" id="DonVi" name="DonVi[]">
                    </td>
                    
                    <td align="right">
                        <input type="text" style="width: 98%" value="<?php echo h($npsnt['quy1']);?>" name="T1[]">
                    </td>
                    
                    <td align="right">
                        <input type="text" style="width: 98%" value="<?php echo h($npsnt['quy2']);?>" name="T2[]">
                    </td>
                    
                    <td align="right">
                        <input type="text" style="width: 98%" value="<?php echo h($npsnt['quy3']);?>" name="T3[]">
                    </td>
                    
                    <td align="right">
                        <input type="text" style="width: 98%" value="<?php echo h($npsnt['quy4']);?>" name="T4[]">
                    </td>
                    
                    <td>
                        <?php echo h(round($npsnt['tong'],2));?>
                    </td>
                    
                    <td align="center">
                        <input type="text" style="width: 98%" value="<?php echo h($npsnt['ghichu']);?>" id="GhiChu" name="GhiChu[]">
                    </td>
                    
                    <td align="center">
                        <a href="javascript:doDelete(<?php echo h($npsnt['temp_id']); ?>,'');">Delete</a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
            </tbody></table>
        
      
    <input type="button" id="btnCapNhat" name="btnCapNhat" onclick="window.opener.location.reload();window.opener.location.reload();window.close();" value="Kết thúc">
    <input type="submit" name="btnSave" value="Cập nhật" id="btnSave" class="button">
<?php echo $this->Form->end(); ?>
<script type="text/javascript">
	function doDelete(strID, strAllQueryString) {
		if (confirm('Bạn có thực sự muốn xóa ?')) {
			window.location.href = "<?php echo $this->here . '?' . $_SERVER['QUERY_STRING']; ?>&action=delete&ID=" + strID + "&" + strAllQueryString;
		}
	}
</script>
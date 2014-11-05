<style>
    .floatright {
        float: right;
    }
    @media (max-width: 768px) {
        .floatright {
            float: none;
        }
    }
    table.table_search td{
        background-color: #B0E0E6;
        padding: 2px;
    }
    .table_search input,
    .table_search select{
        max-width: 200px;
    }
    body{
        background: #fff;
    }
    .div{
        background: #fff;
        padding: 0 5px;
    }
    .taglib-search-iterator td a:hover{
        color: #005fb3;
    }
    .portlet-topper{
        color: #fff;
        background: #FF4500;
        padding: 5px;
    }
    .pagination{
        float: right;
    }
    .disabled{
        float: left;
        display: none;
    }
    .pagination li.disabled{
        display: none;
    }
    td.td_le a:hover{
        color: #fff;
    }
</style>
<?php echo $this->Html->css(array('/front/css/vanban', '/front/css/vanban2'), array('inline' => false)) ?>
<div class="portlet-topper">
    <span class="portlet-title"> Tra cứu văn bản</span>
    <div class="portlet-icons" id="portlet-small-icon-bar_EXT_BOCUCVANBAN">
    </div>
</div>
<div id="options-timkiem-coban" class="div" style="display: block;">
    <?php echo $this->Form->create(false,array('type'=>'get')) ?>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_search">
        <tbody>
            <tr>
                <td width="20%" align="right" class="td_base">Ký hiệu văn bản&nbsp;</td>
                <td width="70%" class="td_base">	 	
                    <!--<input name="_EXT_BOCUCVANBAN_symbol" id="_EXT_BOCUCVANBAN_symbol1" type="text" value="" style="width:50%;" onkeypress="return show_searchBCVB_basic(event);">-->
                    <?php echo $this->Form->input('kyhieu1', array('div' => false, 'label' => false, 'style' => 'width: 50%')) ?>
                    &nbsp;(Ex: 05/2008/TB/HQ)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	 	
                    <a style="cursor:pointer;" onclick="javascript:ShowNangCao(true);">Nâng cao...</a>	 	
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div id="options-timkiem-nangcao" class="div" style="display: none;">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_search">
                            <tbody>
                                <tr>
                                    <td width="35%" align="right">Ký hiệu văn bản&nbsp;</td>
                                    <td width="65%" class="td_base">	 	
                                        <?php echo $this->Form->input('kyhieu', array('div' => false, 'label' => false, 'style' => 'width: 50%')) ?> 	&nbsp;(Ex: 05/2008/TB/HQ)	 
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Tóm tắt&nbsp;</td>
                                    <td class="td_base">
                                        <!--<input name="_EXT_BOCUCVANBAN_summary" type="text" value="" style="width:98%;" onkeypress="return show_searchBCVB(event);">-->
                                        <?php echo $this->Form->input('tenvanban', array('div' => false, 'label' => false, 'style' => 'width: 98%')) ?> 
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Loại văn bản&nbsp;</td>
                                    <td class="td_base">
                                        <?php echo $this->Form->input('id_loai', array('div' => false, 'label' => false, 'options' => Common::getListLoaivanban(), 'style' => 'width: 100%')) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Lĩnh vực văn bản&nbsp;</td>
                                    <td class="td_base">
                                        <?php echo $this->Form->input('id_linhvuc', array('div' => false, 'label' => false, 'options' => Common::getListLinhvucvanban(), 'style' => 'width: 100%')) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Cơ quan ban hành&nbsp;</td>
                                    <td class="td_base">
                                        <!--<input name="_EXT_BOCUCVANBAN_pubOrgan" type="text" value="" style="width:98%;" onkeypress="return show_searchBCVB(event);">-->
                                        <?php echo $this->Form->input('coquanbanhanh', array('div' => false, 'label' => false, 'style' => 'width: 98%')) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="right">Người ký&nbsp;</td>
                                    <td class="td_base">	 	
                                        <!--<input name="_EXT_BOCUCVANBAN_signPerson" type="text" value="" style="width:50%;" onkeypress="return show_searchBCVB(event);">	 	&nbsp;	 	<a style="cursor:pointer" onclick="javascript:ShowNangCao(false);">Thu nhỏ/Mở rộng</a>-->	 
                                        <?php echo $this->Form->input('nguoiky', array('div' => false, 'label' => false, 'style' => 'width: 98%')) ?>
                                    </td>
                                </tr>
                                <!-- Moi them vao dong mo tim kiem div-->
                                <tr>
                                    <td colspan="2" width="100%;">
                                        <div id="taolao" style="display: none;">
                                            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table_search">
                                                <!-- Moi them vao dong moi tim kiem div-->	
                                                <tbody>
                                                    <tr>
                                                        <td width="35%" align="right">Ngày ký từ&nbsp;</td>
                                                        <td width="65%" class="td_base">
                                                            
                                                            <input name="ngaykytu" type="text" value="" size="20%" maxlength="10" onkeypress="return show_searchBCVB(event);"> 	&nbsp;đến&nbsp;	
                                                            <input name="ngaykyden" type="text" value="" size="20%" maxlength="10" onkeypress="return show_searchBCVB(event);">	&nbsp;(dd/mm/yyyy)	</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Ngày ban hành từ&nbsp;</td>
                                                        <td class="td_base">
                                                            <input name="ngaybanhanhtu" type="text" value="" size="20%" maxlength="10" onkeypress="return show_searchBCVB(event);"> 	&nbsp;đến&nbsp;	
                                                            <input name="ngaybanhanhden" type="text" value="" size="20%" maxlength="10" onkeypress="return show_searchBCVB(event);">	&nbsp;(dd/mm/yyyy)	</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Ngày có hiệu lực từ&nbsp;</td>
                                                        <td class="td_base">	    	
                                                            <input name="ngayhieuluctu" type="text" value="" size="20%" maxlength="10" onkeypress="return show_searchBCVB(event);"> 	 &nbsp;đến&nbsp; 	 
                                                            <input name="ngayhieulucden" type="text" value="" size="20%" maxlength="10" onkeypress="return show_searchBCVB(event);">	 &nbsp;(dd/mm/yyyy)	 	</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Ngày hết hiệu lực từ&nbsp;</td>
                                                        <td class="td_base">	    	
                                                            <input name="ngayhethieuluctu" type="text" value="" size="20%" maxlength="10" onkeypress="return show_searchBCVB(event);">	&nbsp;đến&nbsp; 	
                                                            <input name="ngayhethieulucden" type="text" value="" size="20%" maxlength="10" onkeypress="return show_searchBCVB(event);">	&nbsp;(dd/mm/yyyy)	</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Từ khóa tìm kiếm&nbsp;</td>
                                                        <td class="td_base"><input name="tukhoa" type="text" value="" style="width:98%;" onkeypress="return show_searchBCVB(event);"></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Từ khóa liên quan&nbsp;</td>
                                                        <td class="td_base"><input name="tukhoalienquan" type="text" value="" style="width:98%;" onkeypress="return show_searchBCVB(event);">	</td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">Nội dung&nbsp;</td>
                                                        <td class="td_base"><input name="noidung" type="text" value="" style="width:98%;" onkeypress="return show_searchBCVB(event);">	 </td>
                                                    </tr>
                                                    <!-- Moi them vao dong mo tim kiem div -->	  	
                                                </tbody>
                                            </table>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>


                    </div>
                </td>
            </tr>
            <!-- Moi them vao dong moi tim kiem div -->	
            <tr>
                <td><a style="cursor:pointer; margin-left:55px;" onclick="javascript:ShowNangCao(false);">...Cơ bản</a>&nbsp;</td>
                <td align="left" class="td_base">	
                    <input type="submit" value="Tìm kiếm văn bản" name="_EXT_BOCUCVANBAN_search" onclick="javascript;">	</td>
            </tr>
         	
        </tbody>
    </table>
</div>
<?php echo $this->Form->end(); ?>
<?php
$this->Paginator->options = array(
    'url' => array(
        'plugin' => '',
        'controller' => '',
        'action' => 'vanbanphapquy'
    )
);
?>
<div class="results-grid">
    <table class="taglib-search-iterator">
        <tbody>
            <tr class="portlet-section-header results-header">
                <th class="col-1 ">	Stt	</th>
                <th class="col-2 ">	
                    <span class="result-column-name">	
                        <?php echo $this->Paginator->sort('kyhieu', 'Ký hiệu văn bản') ?>    
                    </span>	
                </th>
                <th class="col-3 sort-column sort-asc">	<span class="result-column-name">
                        <?php echo $this->Paginator->sort('ngaybanhanh', 'Ngày ban hành') ?>    	</span
                </th>
                <th class="col-4" style="min-width: 700px;">	<?php echo $this->Paginator->sort('tenvanban', 'Tóm tắt') ?>	</th>
                <th class="col-5">	Tải</th>
                <th class="col-5" colspan="2">	Chức năng</th>
            </tr>
            <tr class="lfr-template portlet-section-body results-row">
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($data as $vanban): ?>
                <tr class="portlet-section-body results-row" onmouseover="this.className = 'portlet-section-body-hover results-row hover';" onmouseout="this.className = 'portlet-section-body results-row';">
                    <td align="left" class="col-1" colspan="1" valign="middle">	<a style="cursor:pointer;"><?php echo $i ?></a>	</td>
                    <td align="left" class="col-2" colspan="1" valign="middle">	<a style="cursor:pointer;" onclick=""><?php echo $vanban['Vanbanphapquy']['kyhieu'] ?></a>	</td>
                    <td align="left" class="col-3" colspan="1" valign="middle">	<?php echo $vanban['Vanbanphapquy']['ngaybanhanh']?></td>
                    <td align="left" class="col-4" colspan="1" valign="middle">	<a style="cursor:pointer;" onclick=""><?php echo $vanban['Vanbanphapquy']['tenvanban'] ?></a>	</td>
                    <td align="left" class="col-5" colspan="1" valign="middle">	<a target="_blank" href="<?php echo Router::url('/admin/vanbans/' . $vanban['Vanbanphapquy']['tenfile']) ?>"><img align="center" title="Download" src="<?php echo Router::url('/front/img/download.gif') ?>"></a>	</td>
                    <td align="left" class="col-5" colspan="1" valign="middle">	<a target="" href="<?php echo Router::url('/admin/thongtinchung/chinhsuavanbanphapquy/'.$vanban['Vanbanphapquy']['id'])?>">Sửa</a>	</td>
                    <td align="left" class="col-5" colspan="1" valign="middle">	<a target="" href="javascript:doDelete(200,<?php echo $vanban['Vanbanphapquy']['id']?>);">Xóa</a>	</td>
                </tr>
                <?php ++$i; ?>
            <?php endforeach; ?>
            <tr class="portlet-section-body results-row">
                <td valign="top" colspan="5">
                    <!-- BEGIN PAGER --->
                    <?php
                    echo $this->Paginator->counter(array(
                        'format' => __('Trang {:page} trong số {:pages} trang,
                            hiển thị {:current} dòng trong tổng số
                            {:count}
                            , bắt đầu {:start}, kết thúc {:end}')
                    ));
                    ?>
                    <!-- END PAGER --->
                    <ul class="pagination">
                        <?php
                        echo $this->Paginator->prev('←', array('class' => 'prev', 'tag' => 'li'), null, array('class' => 'prev disabled', 'tag' => 'li'));
                        echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentClass' => 'active', 'currentTag' => 'a'));
                        echo $this->Paginator->next('→', array('class' => 'next', 'tag' => 'li'), null, array('class' => 'next disabled', 'tag' => 'li'));
                        ?>
                    </ul>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<script type="text/javascript">
    function ShowNangCao(yes) {
        if (yes) {
            $('#options-timkiem-nangcao').show();
        } else {
            $('#options-timkiem-nangcao').hide();
        }
    }
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js');?>
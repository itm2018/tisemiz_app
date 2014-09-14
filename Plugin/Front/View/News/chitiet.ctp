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
<table class="lfr-grid" id="layout-grid">
    <tbody>
        <tr>
            <td class="lfr-column" colspan="2" id="column-1" valign="top">
                <div class="lfr-portlet-column empty" id="layout-column_column-1"></div>
            </td>
        </tr>
        <tr id="column-center">
            <td class="lfr-column fifty" id="column-2" valign="top">
                <div class="lfr-portlet-column empty" id="layout-column_column-2"></div>
            </td>
            <td class="lfr-column fifty" id="column-3" valign="top">
                <div class="lfr-portlet-column empty" id="layout-column_column-3"></div>
            </td>
        </tr>
        <tr>
            <td class="lfr-column" colspan="2" id="column-4" valign="top">
                <div class="lfr-portlet-column" id="layout-column_column-4">
                    <div id="p_p_id_EXT_BOCUCVANBAN_" class="portlet-boundary portlet-boundary_EXT_BOCUCVANBAN_  ">
                        <a id="p_EXT_BOCUCVANBAN"></a>
                        <div class="portlet" id="portlet-wrapper-EXT_BOCUCVANBAN">
                            <div class="portlet-topper">
                                <span class="portlet-title">
                                    Tra cứu văn bản	</span>	
                                <div class="portlet-icons" id="portlet-small-icon-bar_EXT_BOCUCVANBAN">
                                </div>
                            </div>
                            <div class="portlet-content">
                                <div class="portlet-content-container" style="">
                                    <div>
                                        <style>	/******************** Start ********************/
                                            /***** a style sheet *****/ 
                                            a {
                                                color: #003366;
                                                text-decoration: none;
                                                cursor: pointer;
                                            }
                                            #content-wrapper {
                                                background:transparent none repeat scroll 0 0;
                                                max-width:100%;
                                                min-width:400px;
                                                width:100%;
                                            }
                                            /*
                                            .columns-1 #column-1, .columns-max #column-1 {
                                            clear:both;
                                            display:table;
                                            padding-left:0;
                                            padding-right:0;
                                            min-width:450px;
                                            width:450px;
                                            max-width:90%;
                                            }
                                            */
                                            /***** div style sheet *****/ 
                                            .div { /* dung cho khung nhap du lieu tim kiem hoac them moi/hieu chinh nhanh */	align: center;	border: 1px solid #BFBFBF; 	padding: 5px 4px 5px 4px;	width: 98%;	background-color:  #DBE8FA;	margin: auto;
                                            }
                                            .div_result {	align: left;	background-color:  #E3E7E8;	background:#F4FDEF url(../images/messages/success.gif) no-repeat scroll 0.5em 50%;	border:1px solid #3F9305;	display:block;	margin:0.15em auto 1.2em;	padding:0.5em 0.5em 0.5em 2.8em;	text-align:left;
                                            }
                                            .div_result_fail {	align: left;	background-color:  #FFDDDD;	background:#FFDDDD url(../images/messages/error.png) no-repeat scroll 6px 50%;	border:1px solid #FF0000;	display:block;	font-weight:bold;	margin:2px auto 14px;	padding:6px 6px 6px 30px;	text-align:left;
                                            }
                                            .div_content_scroll_popup { /* dung de hien thi noi dung cua popup co thanh cuon */ 	align: left;	background-color:  #FFFDFC;	border: 1px solid #B0F3FF;	display: block;	margin: 0px;	padding: 0em 0em 0em 0em;	text-align: left;	/*xuancong height: 100%;*/	width: 99.5%;	/*xuancong overflow: scroll;*/	overflow-x: hidden; 	overflow-y: auto;	position: inline; 	/*xuancong z-index: 1;*/
                                            }
                                            /***** form style sheet *****/ 
                                            .frmSearch tr {	height: 27px;
                                            }
                                            .frmSearch img:hover {	cursor: pointer;
                                            }
                                            .frmSearch a {	color: #003366;
                                            }
                                            .frmSearch a:hover {	color: #0066CC;	text-decoration: none;
                                            }
                                            .frmSearch img:hover {	cursor: pointer;
                                            }
                                            .frmUpload tr {	height: 27px;
                                            }
                                            /***** h style sheet *****/ 
                                            h1, h2 {	color: #000033;
                                            }
                                            h3, h4, h5, h6 {	color: #006699;
                                            }
                                            /***** image style sheet *****/ 
                                            img:hover {	cursor: pointer;
                                            }
                                            /***** table style sheet *****/ 
                                            .table_custom {	border-collapse: collapse;
                                            }
                                            .table_custom img:hover {	cursor: pointer;
                                            }
                                            .table {	background-color: #EBEADB;	border : 0;	width : 100%; 	cellspacing : 0; 	border-style: collapse; 
                                            }
                                            .table_detail {	background-color: #E3E7E8;	border : 0;	cellspacing : 0; 	border-style: collapse; 
                                            }
                                            .table_popup {	background-color: #B0F3FF;	min-width:300px;	width: 100%;	max-width:100%;	border : 0;	cellspacing : 0; 	border-style: collapse; 
                                            }
                                            .table_popup_RelKeyword
                                            {
                                                background-color:#B0F3FF;
                                                min-width:300px;
                                                width: 100%;
                                                max-width:100%;
                                                border:0 none;
                                            }
                                            .table_search {	background-color:#DBE8FA;	border:0;	width:100%; 	cellspacing:0; 	border-style: collapse; 
                                            }
                                            /***** td style sheet *****/ 
                                            .td_header {	border-bottom: 1px solid #CCCCCC;	color: #0033FF;	font-weight: bold;	padding: 0.3em 0.5em;
                                            }
                                            .td_le {	border-bottom: 1px solid #BFBFBF;	border-top: 1px solid #BFBFBF;	padding: 0.3em 0.5em;
                                            }
                                            .td_chan {	border-bottom: 1px solid #BFBFBF;	border-top: 1px solid #BFBFBF;	padding: 0.3em 0.5em;
                                            }
                                            .td_base {	padding: 1px 5px 1px 0px;	background-color: #DBE8FA;
                                            }
                                            .td_detail_title {	border-bottom: 1px solid #BFBFBF;	border-top: 1px solid #BFBFBF;	padding: 0.3em 0.5em;	background-color: #3399CC;	text-align: right;	color: #FFFFFF;
                                            }
                                            .td_detail_content {	border-bottom: 1px solid rgb(212, 212, 212);	border-top: 1px solid #BFBFBF;	padding: 0.3em 0.5em;	background-color: #FFFFE5;	text-align: left;
                                            }
                                            .tdLeft {	text-align: right;
                                            }
                                            .tdRight {	text-align: left;	padding-left: 5px;
                                            }
                                            .td_table {	font-family: Tahoma, Geneva, Arial, Helvetica, sans-serif;	font-size: 13px; 	font-weight: normal;	color: black;	padding-left: 5px;	padding-right: 5px;	height: 25px;
                                            }
                                            .td_color {	font-family: Tahoma, Geneva, Arial, Helvetica, sans-serif;	font-size: 13px; 	font-weight: normal;	color: black;	background-color: #D5EAFF;
                                            }
                                            .td_attach_table_1 {	background:#3A7D8C none repeat scroll 0 0;	color:#FFFFFF;	font-weight:bold;	padding:8px 8px 8px 15px;
                                            }
                                            .td_attach_table_2 {	background: #EAF5F5 none repeat scroll 0 0;
                                            }
                                            .td_attach_table_2 a{
                                                font-weight:normal;
                                            }
                                            .td_attach_table_2 ul{
                                                list-next-style-type:none;
                                                /*padding-left:10px;*/
                                                margin-left:1em;
                                            }
                                            .td_attach_table_2 li{
                                                background-image:url(/images/custom/icon_links.gif);
                                                background-repeat:no-repeat;
                                                background-position:20px 12px;
                                                margin-left:-25px;
                                                padding-left:40px;
                                                margin-bottom:-10px;
                                                background-color:#EAF5F5;
                                                padding-top:8px;
                                                padding-bottom:8px;
                                                color:#666;
                                                font-size:11px;
                                            }
                                            .td_attach_table_2 ul li a{
                                                color:#000;
                                                font-size:12px;
                                            }
                                            .td_attach_table_2 img{
                                                padding-right:10px;
                                            }
                                            /***** text style sheet *****/ 
                                            .text_div_result {	color: #0066FF;
                                            }
                                            .text_div_result_fail {	color: #000000;	font-weight:bold;
                                            }
                                            .text_title_popup {	font-family: Tahoma, Geneva, Arial, Helvetica, sans-serif;	color: #0066FF;	font-size: 16pt;
                                            }
                                            /***** portlet title *****/ 
                                            /***** tr style sheet *****/ 
                                            .tr_header {	background: #DBE8FA none repeat scroll 0%;	/*xuancong padding: 1px 0pt 0pt;*/
                                            }
                                            .tr_le {	background: #FFFFFF none repeat scroll 0 0;	color: #000000;	padding: 1px 0px 0px 1px;
                                            }
                                            .tr_le:hover {	background: #A8D6ED;
                                            }
                                            .tr_chan {	background: #E9F5FF none repeat scroll 0%;	color: #000000;	padding: 1px 0px 0px 1px;
                                            }
                                            .tr_chan:hover {	background: #A8D6ED;
                                            }
                                            .tr_hover {	background: #A8D6ED;
                                            }
                                            .tr_title {	background-color: #CCCCFF;	font-weight: bold;	border-bottom: solid 1px #D4D4D4;	height: 30px;
                                            }
                                            /******************** End ********************/
                                        </style>
                                        <form action="http://www.hepza.hochiminhcity.gov.vn/web/guest/29?p_p_id=EXT_BOCUCVANBAN&amp;p_p_lifecycle=1&amp;p_p_state=normal&amp;p_p_mode=view&amp;p_p_col_id=column-4&amp;p_p_col_count=1&amp;_EXT_BOCUCVANBAN_struts_action=%2Fext%2Fbocucvanban%2Fview" method="post" name="_EXT_BOCUCVANBAN_fm">
                                            <input name="_EXT_BOCUCVANBAN_cmd" type="hidden" value="">
                                            <input type="hidden" name="_EXT_BOCUCVANBAN_id" value="">
                                            <input type="hidden" name="_EXT_BOCUCVANBAN_submitID">
                                            <table width="100%">
                                                <tbody>
                                                    <tr>
                                                        <td align="center">
                                                            <table align="center" width="90%" class="table_detail">
                                                                <tbody>
                                                                    <tr>
                                                                        <td width="18%" class="td_detail_title">Ký hiệu văn bản</td>
                                                                        <td width="35%" class="td_detail_content"><?php echo $vanban['Vanbanphapquy']['kyhieu'] ?></td>
                                                                        <td width="25%" class="td_detail_title">Người ký</td>
                                                                        <td width="22%" class="td_detail_content"><?php echo $vanban['Vanbanphapquy']['nguoiky'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_detail_title">Ngày ký</td>
                                                                        <td class="td_detail_content"><?php echo $vanban['Vanbanphapquy']['ngayky'] ?></td>
                                                                        <td class="td_detail_title">Ngày ban hành</td>
                                                                        <td class="td_detail_content"><?php echo $vanban['Vanbanphapquy']['ngaybanhanh'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_detail_title">Ngày có hiệu lực</td>
                                                                        <td class="td_detail_content">	<?php echo $vanban['Vanbanphapquy']['ngayhieuluc'] ?></td>
                                                                        <td class="td_detail_title">Ngày hết hiệu lực</td>
                                                                        <td class="td_detail_content">	<?php echo $vanban['Vanbanphapquy']['ngayhethieuluc'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_detail_title">Nguồn</td>
                                                                        <td class="td_detail_content">	<?php echo $vanban['Vanbanphapquy']['nguon'] ?></td>
                                                                        <td class="td_detail_title">Cơ quan ban hành</td>
                                                                        <td class="td_detail_content">	<?php echo $vanban['Vanbanphapquy']['coquanbanhanh'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_detail_title">Từ khóa tìm kiếm</td>
                                                                        <td class="td_detail_content">	<?php echo $vanban['Vanbanphapquy']['tukhoa'] ?></td>
                                                                        <td class="td_detail_title">Từ khóa liên quan</td>
                                                                        <td class="td_detail_content">	<?php echo $vanban['Vanbanphapquy']['tukhoalienquan'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_detail_title">Nội dung</td>
                                                                        <td colspan="3" class="td_detail_content" valign="top"><?php echo $vanban['Vanbanphapquy']['noidung'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="td_detail_title">Ghi chú</td>
                                                                        <td colspan="3" class="td_detail_content"><?php echo $vanban['Vanbanphapquy']['ghichu'] ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table width="100%" border="0">
                                                                <tbody>
                                                                    <tr style="font-weight:bold" height="25">
                                                                        <td colspan="5">Văn bản đính kèm</td>
                                                                    </tr>
                                                                    <tr class="tr_header">
                                                                        <td width="9%" class="td_header">Số</td>
                                                                        <td width="23%" style="min-width: 520px" class="td_header">Tiêu đề</td>
                                                                        <td width="36%" style="min-width: 305px" class="td_header">Mô tả</td>
                                                                        <td width="17%" class="td_header">Kích thước</td>
                                                                        <td width="15%" class="td_header">Số lần tải về</td>
                                                                    </tr>
                                                                    <tr class="tr_le" style="cursor:pointer">
                                                                        <td class="td_le">1.</td>
                                                                        <td class="td_le">
                                                                            <a target="_blank" onclick="doDownload(33,'<?php echo $vanban['Vanbanphapquy']['id'] ?>');" href="<?php echo Router::url('/admin/baocaos/'.$vanban['Vanbanphapquy']['tenfile'])?>"><?php echo $vanban['Vanbanphapquy']['tenvanban'] ?></a>
                                                                        </td>
                                                                        <td class="td_le"><?php echo $vanban['Vanbanphapquy']['mota'] ?></td>
                                                                        <td class="td_le">	<?php echo $vanban['Vanbanphapquy']['kichthuoc']?  round($vanban['Vanbanphapquy']['kichthuoc']/1024, 2):'' ?>&nbsp;kb
                                                                        </td>
                                                                        <td class="td_le"><?php echo $vanban['Vanbanphapquy']['solantai'] ?></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <table width="100%" border="0">
                                                                <tbody>
                                                                    <tr style="font-weight:bold" height="25">
                                                                        <td colspan="5">Văn bản liên quan	</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">	<input name="button" type="button" align="right" value="Quay lại" onclick="javascript:window.history.back(-1);"></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
</table>
<script type="text/javascript">
    function doDownload(type,id){
        var url = '<?php echo Router::url('/dodownload');?>';
        var data = {type: type,id: id};
        doPostAjax(url, data);
        return false;
    }
    function doPostAjax(url, data, callbackfn) {
        $.ajax({
            beforeSend: function(XMLHttpRequest) {
//                showLoading();
            },
            complete: function(XMLHttpRequest, textStatus) {
//                hideLoading();
            },
            data: data,
            type: "post",
            success: function(data, textStatus) {
                if (callbackfn) {
                    window[callbackfn](data);
                } else {
                }
            },
            url: url
        });
    }
</script>
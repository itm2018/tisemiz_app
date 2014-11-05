<?php echo $this->Html->css(array('baocaonguyhaistyle'), array('inline' => false)); ?>
<div style="width: 800px; margin: 0 auto; padding: 2px;">
    <?php echo $this->Form->create(false, array('type' => 'get','url'=>Router::url('/admin/baocao/baocaochatthainguyhai/timkiem'), 'novalidate' => 'novalidate', 'class' => 'form-horizontal', 'role' => 'form')); ?>
    <table id="table9" cellspacing="0" cellpadding="0" width="780px" border="0">
        <tbody>
            <tr>
                <td>
                    <div id="nav_header">
                        <h3>
                            Đăng ký thông tin chủ nguồn thải</h3>
                    </div>
                </td>
            </tr>
            <tr>
                <td style="border: solid 1px #2c8337; width: 780px;" id="navmain_bghead">
                    <table align="left" class="lstview" style="padding: 0; margin: 0; border: none; border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                                <td colspan="2" align="left">
                                <?php
                                                    echo $this->Form->hidden('colMa');
                                                    ?>
                                    <div id="divDN" style="display: inline">
                                        <table class="lstview" align="left" border="0" cellpadding="0" cellspacing="0">
                                            <tbody><tr>
                                                    <td colspan="3" valign="bottom" style="height: 15px; text-align: left; padding-left: 10px;">
                                                        <img id="Image19" src="/img/ct2.gif" alt="" border="0">
                                                        <span style="font-size: 11pt; color: gray; font-family: Arial"><strong><span style="font-size: 10pt;
                                                                                                                                     color: #000;">TÌM KIẾM DOANH NGHIỆP</span> </strong></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Tên doanh nghiệp
                                                    </th>
                                                    <td align="left" colspan="2">
                                                    <?php
                                                    echo $this->Form->input('colTen', array('type' => 'text',
                                                        'div' => array('class' => 'col-sm-6'), 'label' => false, 'style' => 'width:400px;'));
                                                    ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Địa chỉ văn phòng/trụ sở chính
                                                    </th>
                                                    <td align="left" colspan="2">
                                                    <?php
                                                    echo $this->Form->input('colDiaChi', array('type' => 'text', 'class' => '',
                                                        'div' => array('class' => 'col-sm-6'), 'label' => false, 'style' => 'width:400px;'));
                                                    ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Điện thoại
                                                    </th>
                                                    <td align="left" colspan="2">
                                                        <span>
                                                        <?php
                                                        echo $this->Form->input('colDienThoai', array('type' => 'tel',
                                                            'div' => array('class' => 'col-sm-6'), 'label' => false, 'style' => 'width:400px;'));
                                                        ?>
                                                        </span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Email
                                                    </th>
                                                    <td align="left" colspan="2">
                                                        <span>
                                                        <?php
                                                        echo $this->Form->input('colEmail', array('type' => 'email',
                                                            'div' => array('class' => 'col-sm-6'), 'label' => false, 'style' => 'width:400px;'));
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>
                                                        Tài khoản số
                                                    </th>
                                                    <td align="left" colspan="2">
                                                    <?php
                                                    echo $this->Form->input('colSoTKhoan', array('type' => 'text',
                                                        'div' => array('class' => 'col-sm-6'), 'label' => false, 'style' => 'width:400px;'));
                                                    ?>
                                                </tr>
                                            </tbody></table>
                                        <table id="tdShowHide2" class="lstview" align="left" style="padding: 0;
                                               margin: 0; border: none; border-collapse: collapse;" border="0" cellpadding="0" cellspacing="0">
                                            <tbody><tr>
                                                    <th style="padding-right: 10px; white-space: normal; width: 185px;">
                                                        Giấy chứng nhận ĐKKD/ Giấy chứng nhận đầu tư
                                                    </th>
                                                    <td align="left">
                                                     <?php
                                                        echo $this->Form->input('colGiayPhepKD', array('type' => 'text',
                                                            'div' => array('class' => 'col-sm-6'), 'label' => false, 'style' => 'width:375px;'));
                                                        ?>
                                                    </td>
                                                </tr>
                                            </tbody></table>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" style="text-align: center;">
                               <?php echo $this->Form->submit('Tìm kiếm',array('div'=>array('class'=>'col-sm-10'),'label'=>false,'id'=>'cmdTieptuc','class'=>'btn btn-primary','name'=>'submit'));?>

                                </td>
                            </tr>
                        </tbody></table>
                </td>
            </tr>
        </tbody>
    </table>
<?php echo $this->Form->end(); ?>
</div>
<?php if(isset($data) && count($data)):?>
<?php
$this->Paginator->options(array(
    'url' => array(
        'plugin' => 'admin',
        'controller' => 'baocao',
        'action' => 'baocaochatthainguyhai/timkiem'
    )
));
?>
<style>

    .pagination>.current>a, .pagination>.current>span, .pagination>.current>a:hover, .pagination>.current>span:hover, .pagination>.current>a:focus, .pagination>.current>span:focus {
        z-index: 2;
        color: #fff;
        background-color: #428bca;
        border-color: #428bca;
        cursor: default;
    }
    ul.pagination li.disabled{
        display: none;
    }
</style>
<div class="main-content">
    <!-- JQUERY DATA TABLE -->
    <div class="widget widget-table">
        <div class="widget-header">
            <h3><i class="fa fa-table"></i> Danh sách doanh nghiệp</h3>
            <table id="jqGridDn" class="table table-sorting table-striped table-hover datatable ui-jqgrid-htable" cellpadding="0" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="sorting"><?php echo $this->Paginator->sort('colMa', __('ID')); ?></th>
                        <th class="sorting"><?php echo $this->Paginator->sort('colTen', __('Tên DN')); ?></th>
                        <th class="sorting"><?php echo $this->Paginator->sort('colDiaChi', __('Địa chỉ')); ?></th>
                        <th class="sorting"><?php echo $this->Paginator->sort('colDienThoai', __('Điện thoai')); ?></th>
                        <th class="sorting"><?php echo $this->Paginator->sort('colEmail', __('Email')); ?></th>
                        <th class="sorting"><?php echo $this->Paginator->sort('colSoTKhoan', __('Số tài khoản')); ?></th>
                        <th class="sorting"><?php echo $this->Paginator->sort('colNamHopDong', __('Năm HD')); ?></th>
                        <th class="sorting"><?php echo $this->Paginator->sort('colSanpham', __('Sản phẩm')); ?></th>
                        <th class="actions"><?php echo __('Chức năng'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $doanhNghiep): ?>
                    <tr>
                        <td><?php echo h($doanhNghiep['DoanhNghiep']['colMa']); ?>&nbsp;</td>
                        <td><?php echo h($doanhNghiep['DoanhNghiep']['colTen']); ?>&nbsp;</td>
                        <td><?php echo h($doanhNghiep['DoanhNghiep']['colDiaChi']); ?>&nbsp;</td>
                        <td><?php echo h($doanhNghiep['DoanhNghiep']['colDienThoai']); ?>&nbsp;</td>
                        <td><?php echo h($doanhNghiep['DoanhNghiep']['colEmail']); ?>&nbsp;</td>
                        <td><?php echo h($doanhNghiep['DoanhNghiep']['colSoTKhoan']); ?>&nbsp;</td>
                        <td><?php echo date('Y', strtotime(h($doanhNghiep['DoanhNghiep']['colNamHopDong']))); ?>&nbsp;</td>
                        <td><?php echo h($doanhNghiep['DoanhNghiep']['colSanpham']); ?>&nbsp;</td>
                        <td class="actions">
                                <?php echo $this->Form->postLink(__('Đăng ký CTNH'), array('plugin' => 'admin', 'controller' => 'baocao', 'action' => 'baocaochatthainguyhai/dangkyctnh', $doanhNghiep['DoanhNghiep']['colMa'])); ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <div class="col-md-6"><div class="dataTables_info" id="DataTables_Table_0_info"> <?php
                    echo $this->Paginator->counter(array(
                        'format' => __('Trang {:page} trong số {:pages} trang,
                            hiển thị {:current} dòng trong tổng số
                            {:count}
                            , bắt đầu {:start}, kết thúc {:end}')
                    ));
                    ?></div></div>
            <div class="col-md-6">
                <div class="dataTables_paginate paging_bootstrap">
                    <ul class="pagination">
                        <?php
                        echo $this->Paginator->prev('←', array('class' => 'prev', 'tag' => 'li'), null, array('class' => 'prev disabled', 'tag' => 'li'));
                        echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentClass' => 'active', 'currentTag' => 'a'));
                        echo $this->Paginator->next('→', array('class' => 'next', 'tag' => 'li'), null, array('class' => 'next disabled', 'tag' => 'li'));
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /main-content -->
<?php
echo $this->Html->script(array(
    '/assets/js/jqgrid/jquery.jqGrid.min',
    '/assets/js/jqgrid/i18n/grid.locale-en',
    '/assets/js/jqgrid/jquery.jqGrid.fluid',
    '/assets/js/bootstrap-datepicker',
    '/assets/js/king-table.min'
));
?>
<?php elseif(isset($data) && !count($data)):?>
<div style="padding: 10px;color: #f00;"><p>Không tìm thấy dữ liệu</p></div>
<?php endif;?>


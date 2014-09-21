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
        background-color: #fff;
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
    .table-contact td{
        padding: 5px;
    }
</style>
<?php echo $this->Html->css(array('/front/css/vanban', '/front/css/vanban2'), array('inline' => false)) ?>
<div style="width: 800px; margin: 0 auto;border: 1px #022f5a solid;">
    <div class="portlet-topper">
        <span class="portlet-title" style="padding-left: 10px;">
            <i class="icon-tasks"></i>LIÊN HỆ	</span>	
        <div class="portlet-icons" id="portlet-small-icon-bar_1_WAR_webformportlet_INSTANCE_31tC">
        </div>
    </div>
    <div class="portlet-content">
        <div class="portlet-content-container" style="">
            <div>
                <?php echo $this->Form->create('Contact', array()) ?>
                <fieldset class="block-labels">
                    <legend></legend>
                    <h4>Thông tin liên hệ</h4>
                    
                    <p class="description"></p>
                    <table class="table-contact">
                        <tr>
                            <td>Đơn vị</td>
                            <td><?php echo $this->Form->input('donvi', array('div' => false, 'label' => false)) ?></td>
                        </tr>
                        <tr>
                            <td>Họ và tên (*)</td>
                            <td><?php echo $this->Form->input('hoten', array('div' => false, 'label' => false)) ?> </td>

                        </tr>
                        <tr>
                            <td>Chức vụ</td>
                            <td><?php echo $this->Form->input('chucvu', array('div' => false, 'label' => false)) ?></td>

                        </tr>
                        <tr>
                            <td>Địa chỉ (*)</td>
                            <td><?php echo $this->Form->input('diachi', array('div' => false, 'label' => false)) ?> </td>

                        </tr>
                        <tr>
                            <td>Điện thoại (*)</td>
                            <td><?php echo $this->Form->input('dienthoai', array('div' => false, 'label' => false)) ?></td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td><?php echo $this->Form->input('fax', array('div' => false, 'label' => false)) ?></td>
                        </tr>
                        <tr>
                            <td>Email (*)</td>
                            <td><?php echo $this->Form->input('email', array('div' => false, 'label' => false)) ?> </td>

                        </tr>
                        <tr>
                            <td>Tiêu đề (*)</td>
                            <td><?php echo $this->Form->input('tieude', array('div' => false, 'label' => false)) ?></td>

                        </tr>
                        <tr>
                            <td>Nội dung (*)</td>
                            <td><?php echo $this->Form->input('noidung', array('div' => false, 'label' => false, 'type' => 'textarea')) ?></td>
                        </tr>
                    </table>

                    <div class="button-holder">	<?php echo $this->Form->submit('Gửi', array('class' => 'btn btn-info')) ?>	</div>
                </fieldset>
                <?php echo $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
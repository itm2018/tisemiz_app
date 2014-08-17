<style>
    .error-message{
        display: block;
        padding: 9.5px;
        margin: 0 0 10px;
        font-size: 13px;
        line-height: 1.428571429;
        color: #F31414;
        word-break: break-all;
        word-wrap: break-word;
        background-color: #f5f5f5;
        border: 1px solid #cccccc;
        border-radius: 4px;   
    }
</style>
<?php
if (!empty($this->validationErrors['Search'])):
    ?>
    <div class="error-message">
        <ul>
            <?php foreach ($this->validationErrors['Search'] as $key => $value): ?>
                <li class=""><?php echo $value[0]; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>
<div style="padding: 10px 10px; width: 900px; margin: 0 auto;">
    <?php echo $this->Form->create('Search', array('method' => 'post')); ?>
    <table id="tblDieuKienSearch" cellspacing="0" cellpadding="0" border="0">
        <tbody><tr>
<!--                <td align="left">
                    <b>Từ khóa:</b>
                </td>-->
                <td style="padding-left: 10px;">
                    <b>Từ ngày:</b>
                </td>
                <td style="padding-left: 10px;">
                    <b>Đến ngày:</b>
                </td>
                <td>
                </td>
            </tr>
            <tr>
<!--                <td>
                    <?php echo $this->Form->input('txtKeywords', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtKeywords', 'style' => 'width: 250px;')); ?>
                </td>-->
                <td style="padding-left: 10px;">
                    <?php echo $this->Form->input('txtStartDate', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtStartDate', 'class' => 'textboxnew', 'autocomplete' => 'off', 'style' => 'width: 100px;', 'readonly' => 'readonly')); ?>
                </td>
                <td style="padding-left: 10px;">
                    <?php echo $this->Form->input('txtEndDate', array('div' => false, 'label' => false, 'type' => 'text', 'id' => 'txtEndDate', 'class' => 'textboxnew', 'autocomplete' => 'off', 'style' => 'width: 100px;', 'readonly' => 'readonly')); ?>
                </td>
                <td style="padding: 0px 0px 0px 20px;" valign="bottom" class="nav_bgsearh">
                    <?php echo $this->Form->input('btnSearch', array('div' => false, 'label' => false, 'type' => 'image', 'id' => 'btnSearch', 'src' => $this->Html->url('/img/nav_bgsearh.gif'), 'onclick' => 'javascript:void();')); ?>
                </td>
            </tr>
        </tbody></table>
    <?php echo $this->Form->end(); ?>
    <?php if (!empty($result)): ?>
        <style>
            .searchresult{
                border-collapse: separate;
                border-spacing: 2px;
                padding: 2px;
            }
            .searchresult th{
                border: 1px solid #cccccc;
                text-align: center;
                background: #cccccc;
            }
            .searchresult td{
                border: 1px dotted #cccccc;
            }
            .searchresult td.id{
                min-width: 100px;
            }
            .searchresult td.ngaytao{
                min-width: 150px;
            }
            .searchresult td.nguoitao{
                min-width: 150px;
            }
            .searchresult td.ngaybatdau{
                min-width: 150px;
            }
            .searchresult td.ngaykethuc{
                min-width: 150px;
            }
            .searchresult td.xemchitiet{
                min-width: 100px;
            }
            .divsearchresult{
                width: 900px;
                padding: 10px 7px;
                margin: 0 auto;
            }
        </style>
        <div class="divsearchresult">
            <table class="searchresult"  cellspacing="1" cellpadding="2" border="0">
                <thead>
                <th>ID</th>
                <th>Ngày tạo</th>
                <th>Người tạo</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Xem chi tiết</th>
                </thead>
                <tbody>
                    <?php
//                    pr($result[0]['User']);
                    ?>
                    <?php foreach ($result as $key => $baocaogsmt): ?>
                        <tr>
                            <td class="id"><?php echo $baocaogsmt['Baocaogsmt']['id'];?></td>
                            <td class="ngaytao"><?php echo date('d/m/Y',  strtotime($baocaogsmt['Baocaogsmt']['created_date']));?></td>
                            <td class="nguoitao"><?php echo $baocaogsmt['User']['username'];?></td>
                            <td class="ngaybatdau"><?php echo date('d/m/Y',  strtotime($baocaogsmt['Baocaogsmt']['tungay']))?></td>
                            <td class="ngayketthuc"><?php echo date('d/m/Y',  strtotime($baocaogsmt['Baocaogsmt']['denngay']));?></td>
                            <td class="xemchitiet"><a href="<?php echo $this->Html->url('/admin/baocao/xemchitiet/'.$baocaogsmt['Baocaogsmt']['id']);?>"><?php echo $this->Html->image('detail_16.png',array('alt'=>'Xem chi tiết'));?></a></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else:?>
        <div class="divsearchresult" style="border: 1px solid #ccc; text-align: center;"><span style="padding: 10px 20px; color: #F31414;">Không tìm thấy dữ liệu</span></div>
    <?php endif; ?>
</div>
<script type="text/javascript">
    $('#txtStartDate').datepicker({
        numberOfMonths: 1,
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true
    });
    $('#txtEndDate').datepicker({
        numberOfMonths: 1,
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true
    });
</script>
<h2>NHẬP THÔNG TIN - Kết quả giám sát khí thải</h2>
<?php echo $this->Form->create('KetQuaGiamSatDinhKyKhiThai')?>
<?php echo $this->Form->hidden('id_vi_tri_do',array('value'=>$vitrido['ViTriDo']['id']))?>
<?php echo $this->Form->hidden('id')?>
<table class="">
    <tr>
        <th>Giám sát<span class="required">(*)</span> </th>
        <td><?php echo $this->Form->input('vi_tri',array('value'=>$vitrido['ViTriDo']['vi_tri'],'disabled'=>'disabled','div'=>false,'label'=>false))?></td>
    </tr>
    <tr>
        <th>Chỉ tiêu<span class="required">(*)</span> </th>
        <td><?php echo $this->Form->input('chi_tieu',array('div'=>false,'label'=>false))?></td>
    </tr>
    <tr>
        <th>Giá trị cận trên </th>
        <td><?php echo $this->Form->input('gia_tri_can_tren',array('div'=>false,'label'=>false))?></td>
    </tr>
    <tr>
        <th>Giá trị cận dưới </th>
        <td><?php echo $this->Form->input('gia_tri_can_duoi',array('div'=>false,'label'=>false))?></td>
    </tr>
    <tr>
        <th>Giá trị trung bình<span class="required">(*)</span></th>
        <td><?php echo $this->Form->input('gia_tri_trung_binh',array('div'=>false,'label'=>false))?></td>
    </tr>
    <tr>
        <th>Ghi chú </th>
        <td><?php echo $this->Form->input('ghichu',array('div'=>false,'label'=>false))?></td>
    </tr>
    <tr>
        <td colspan="2"><input type="submit" value="Đồng ý" class="btn btn-primary">
            <input type="button" value="Kết thúc" class="btn btn-custom-secondary"></td>
    </tr>
</table>
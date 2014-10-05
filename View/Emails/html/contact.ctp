<style>
    table{
        border-collapse: collapse;
        border-spacing: 1px;
    }
    table th{vertical-align: top; text-align: left;}
    table th,
    table td{
        border: 1px solid #ccc;
    }
</style>
<table style="width: 700px; text-align: left;">
    <tr>
        <td colspan="2"><h3>Có một liên hệ mới từ khách:</h3></td>
    </tr>
    <tr>
        <th style="width: 200px;">Từ: </th>
        <td><?php echo $email ?></td>
    </tr>
    <tr>
        <th>Đơn vị: </th>
        <td><?php echo $donvi ?></td>
    </tr>
    <tr>
        <th>Họ tên: </th>
        <td><?php echo $hoten ?></td>
    </tr>
    <tr>
        <th>Chức vụ: </th>
        <td><?php echo $chucvu ?></td>
    </tr>
    <tr>
        <th>Địa chỉ: </th>
        <td><?php echo $diachi ?></td>
    </tr>
    <tr>
        <th>Điện thoại: </th>
        <td><?php echo $dienthoai ?></td>
    </tr>
    <tr>
        <th>Fax: </th>
        <td><?php echo $fax ?></td>
    </tr>
    <tr>
        <th>Tiêu đề: </th>
        <td><?php echo $tieude ?></td>
    </tr>
    <tr>
        <th>Nội dung: </th>
        <td><?php echo $noidung ?></td>
    </tr>
    <tr>
        <th>Thời gian: </th>
        <td><?php echo date('d/m/Y H:i:s') ?></td>
    </tr>
    <tr>
        <th>IP: </th>
        <td><?php echo $_SERVER['REMOTE_ADDR'] ?></td>
    </tr>
</table>
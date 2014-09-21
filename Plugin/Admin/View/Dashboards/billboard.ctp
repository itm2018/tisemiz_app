<style>
    .content{
        min-height: 800px;
    }
    .list-thongtinchung li{
        list-style: none;
        list-style-image: url('/img/ct2.gif');
        height: 30px;
    }
    .list-thongtinchung a:hover{
        color: #0088cc;
    }
</style>
<div class="main-header">
	<h1>Bảng điều khiển</h1>
	<em>phần quản trị hệ thống</em>
</div>

<div class="main-content">
    <h3>Thông Tin Chung</h3>
    <ul class="list-thongtinchung">
        <li><a href="<?php echo Router::url('/admin/thongtinchung/chatthai')?>">Thông tin chất thải</a></li>
        <li><a href="<?php echo Router::url('/admin/commonfunction/chucnang/type/3',true)?>" target="_blank">Thông tin nguyên liệu</a></li>
        <li><a href="<?php echo Router::url('/admin/commonfunction/chucnang/type/1')?>" target="_blank">Danh mục sản phẩm</a></li>
        <li><a href="<?php echo Router::url('/admin/commonfunction/chucnang/type/2')?>" target="_blank">Sản phẩm</a></li>
        <li><a href="<?php echo Router::url('/admin/thongtinchung/vanbanphapquy')?>" target="_blank">Văn bản pháp quy</a></li>
    </ul>
</div>
<!-- /main-content -->
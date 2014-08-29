


<div class="main-header">
    <h2>Thêm mới doanh nghiệp</h2>
    <em>lưu ý chọn năm nhập liệu</em>

</div>
<br>
<table>
    <tr>
        <td>
            <div class="nav-steps">
            <ul id="steps">
                <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi');?>"><li class="tab1 active">1</li></a>
                <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step2');?>"><li class="tab2 active">2</li></a>
                <li class="tab3 active">3</li>
                <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step4');?>"><li class="tab4">4</li></a>
                <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step5');?>"><li class="tab5">5</li></a>
                <li class="tab6">6</li>
            </ul>
            </div>
        </td>
    </tr>
</table>
<div class="main-content">

    <!--form_main-->
    <div class="tabbable" id="tabs-9834">
        <ul class="nav nav-tabs">
            <li>
                <a href="#panel-1" data-toggle="tab">Thông tin doanh nghiệp</a>
            </li>
            <li id="tab-hdsx">
                <a href="#panel-2" data-toggle="tab">Hoạt động sản xuất</a>
            </li>
            <li class="active">
                <a href="#panel-3" data-toggle="tab">Xả thải</a>
            </li>
            <li>
                <a href="#panel-4" data-toggle="tab">Hoạt động bảo vệ môi trường</a>
            </li>
            <li>
                <a href="#panel-5" data-toggle="tab">Kiến nghị</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" id="panel-1">
                
            </div>
            <div class="tab-pane" id="panel-2">
                
            </div>
            <div class="tab-pane active" id="panel-3">
                <br>
                <div class="tabtable" id="tabs-9836">
                    <ul class="nav nav-tabs">
                        <li class="active canclick">
                            <a href="#panel-nuocthai" data-toggle="tab">Nước thải</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-kiemsoatnuocthai" data-toggle="tab">Kiểm soát nước thải</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-khithai" data-toggle="tab">Khí thải</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-tiengonrung" data-toggle="tab">Tiếng ồn và rung</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-racsinhhoat" data-toggle="tab">Rác sinh hoạt</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-chatthaicongnghiep" data-toggle="tab">Chất thải công nghiệp</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-chatthainguyhai" data-toggle="tab">Chất thải nguy hại</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="panel-nuocthai">
                            <!-- form thong tin nuoc thai doanh nghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_nuocthainhamay'); ?>
                            <!-- end form thong tin nuoc thai doanh nghiep -->
                        </div>
                        <div class="tab-pane" id="panel-kiemsoatnuocthai">
                            <!-- form xu ly nuoc thai doanh nghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_xulynuocthaidoanhnghiep'); ?>
                            <!-- end form xu ly nuoc thai doanh nghiep -->
                        </div>
                        <div class="tab-pane" id="panel-khithai">
                            <!-- form xu ly khi thai doanh nghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_xulykhithaidoanhnghiep');?>
                            <!-- end form xu ly khi thai doanh nhgiep-->
                        </div>
                        <div class="tab-pane" id="panel-tiengonrung">
                            <!--tiengonrung-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_xulytiengonrung');?>
                            <!--/tiengonrung-->
                        </div>
                        <div class="tab-pane" id="panel-racsinhhoat">
                            <!--racsinhhoat-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_racthaisinhhoat');?>
                            <!--/racsinhhoat-->
                        </div>
                        <div class="tab-pane" id="panel-chatthaicongnghiep">
                            <!--chatthaicongnghiep-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_chatthairancongnghiep');?>
                            <!--/chatthaicongnghiep-->
                        </div>
                        <div class="tab-pane" id="panel-chatthainguyhai">
                            <!--chatthainguyhai-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_chatthainguyhai');?>
                            <!--/chatthainguyhai-->
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane" id="panel-4">
               
            </div>
            <div class="tab-pane" id="panel-5">
                
            </div>
        </div>
    </div>
    <!--form_main-->
</div>
<!-- /main-content -->
<script type="text/javascript">
    $(function() {
        $('ul.nav-tabs li').click(function(event) {
            if (!$(this).hasClass('active') && !$(this).hasClass('canclick')) {
                alert('Vui lòng nhập thông tin hoạt động xả thải');
                return false;
            }
        });
    });
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>
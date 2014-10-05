<table>
    <tr>
        <td>
            <div class="nav-steps">
                <ul id="steps">
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi'); ?>"><li class="active">1</li></a>
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step2'); ?>"><li class="active">2</li></a>
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step3'); ?>"><li class="active">3</li></a>
                    <li class="active">4</li>
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step5'); ?>"><li>5</li></a>
                    <a href="<?php echo Router::url('/admin/doanhnghiep/themmoi/step6'); ?>"><li>6</li></a>
                    <li>7</li>
                </ul>
            </div>
        </td>
    </tr>
</table>
<div class="main-content">

    <!--form_main-->
    <div class="tabbable" id="tabs-9834">
        <ul class="nav nav-tabs">
            <li class="tab1">
                <a href="#panel-1" data-toggle="tab">Thông tin doanh nghiệp</a>
            </li>
            <li class="tab2">
                <a href="#panel-2" data-toggle="tab">Hoạt động sản xuất</a>
            </li>
            <li class="tab3">
                <a href="#panel-3" data-toggle="tab">Xả thải</a>
            </li>
            <li class="tab4 active">
                <a href="#panel-4" data-toggle="tab">Giám sát định kỳ</a>
            </li>
            <li class="tab5">
                <a href="#panel-5" data-toggle="tab">Hoạt động bảo vệ môi trường</a>
            </li>
            <li class="tab6">
                <a href="#panel-6" data-toggle="tab">Kiến nghị</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane" id="panel-1">

            </div>
            <div class="tab-pane" id="panel-2">

            </div>
            <div class="tab-pane" id="panel-3">


            </div>
            <div class="tab-pane active" id="panel-4">
                <br>
                <div class="tabtable" id="tabs-9836">
                    <ul class="nav nav-tabs">
                        <li class="active canclick">
                            <a href="#panel-giamsatkhithai" data-toggle="tab">Giám sát khí thải</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-giamsatnuocthai" data-toggle="tab">Giám sát nước thải</a>
                        </li>
                        <li class="canclick">
                            <a href="#panel-giamsattiengon" data-toggle="tab">Giám sát tiếng ồn</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane" id="panel-giamsatkhithai">
                            <!-- form giam sat khi thai-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_giamsatdinhkykhithai'); ?>
                            <!-- end form giam sat khi thai -->
                        </div>

                        <div class="tab-pane"
							 id="panel-giamsatnuocthai">
                            <!-- form giam sat nuoc thai-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_giamsatdinhkynuocthai'); ?>
                            <!-- end form giam sat nuoc thai -->
                        </div>
                        <div class="tab-pane" id="panel-giamsattiengon">
                            <!-- form giam sat tieng on-->
                            <?php echo $this->element('Admin.Doanhnghieps/form_giamsatdinhkytiengon'); ?>
                            <!-- end form giam sat tieng on-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="panel-5">

            </div>
            <div class="tab-pane" id="panel-6">

            </div>
        </div>
    </div>
    <!--form_main-->
</div>
<!-- /main-content -->
<script type="text/javascript">
    $(function() {
		$('.table').tooltip();
        $('ul.nav-tabs li').click(function(event) {
            if (!$(this).hasClass('active') && !$(this).hasClass('canclick')) {
                alert('Vui lòng nhập thông tin hoạt động xả thải');
                return false;
            }
        });
		<?php if($activetab=='nuocthai'):?>
			$('#panel-giamsatnuocthai').addClass('active');
			$('a[href="#panel-giamsatnuocthai"]').parent('li').addClass('active').prev('li').removeClass('active');
			$('#panel-giamsatkhithai').removeClass('active').hide();
			$('a[href="#panel-giamsatkhithai"]').parent('li').removeClass('active').bind('click',function(){
				$('#panel-giamsatkhithai').addClass('active').show();
			});
		<?php endif;?>
		<?php if($activetab=='tiengon'):?>
		$('#panel-giamsattiengon').addClass('active');
		$('a[href="#panel-giamsattiengon"]').parent('li').addClass('active');
		$('#panel-giamsatkhithai').removeClass('active').hide();
		$('a[href="#panel-giamsatkhithai"]').parent('li').removeClass('active').bind('click',function(){
			$('#panel-giamsatkhithai').addClass('active').show();
		});
		<?php endif;?>
		<?php if(!$activetab || $activetab='khithai'):?>
		$('#panel-giamsatkhithai').addClass('active');
		<?php endif;?>
    });
</script>
<?php echo $this->element('Admin.Doanhnghieps/backend.js'); ?>
<!--javascript for backend. Author: cahs huynhsonca@gmail.com-->
<script type="text/javascript">
    $(function() {
        $('#button-them-danhmuc-sanpham').click(function() {
            PopUp(1);
        });
        $('#button-them-sanpham').bind('click', function() {
            PopUp(2);
        });
    });
    function PopUp(type) {
        var width = 800;
        var height = 400;
        var left = parseInt((screen.availWidth / 2) - (width / 2));
        var top = parseInt((screen.availHeight / 2) - (height / 2));
        var PPwindow2 = window.open("<?php echo Router::url('/admin/doanhnghiep/chucnang/type/'); ?>" + type, "_blank", "width=" + width + ",height=" + height + ",toolbar=no,directories=no,status=yes, menubar=no,scrollbars=yes,resizable=yes,border=thin,left=" + left + ",top=" + top + "screenX=" + left + ",screenY=" + top + "");
        PPwindow2.focus();
    }
    function doUpdate(type, id) {
        var width = 800;
        var height = 400;
        var left = parseInt((screen.availWidth / 2) - (width / 2));
        var top = parseInt((screen.availHeight / 2) - (height / 2));
        var PPwindow3 = window.open("<?php echo Router::url('/admin/doanhnghiep/capnhat/type/'); ?>" + type + '/id/' + id, "_blank", "width=" + width + ",height=" + height + ",toolbar=no,directories=no,status=yes, menubar=no,scrollbars=yes,resizable=yes,border=thin,left=" + left + ",top=" + top + "screenX=" + left + ",screenY=" + top + "");
        PPwindow3.focus();
    }
    function showLoading() {
        var div = '<div id="indicator" style="display: none;text-align: center; width: 100%; height: 100%; margin: auto; position: fixed; z-index: 999; background-color: #000; opacity: 0.7; left: 0; right: 0; top: 0; bottom: 0; vertical-align: middle;"><div style="position: relative; top: 45%; font-size: 14pt; color: #ccc; font-style: italic;">Đang xử lý...</div></div>';
        var i = 0;
        $('#indicator').each(function() {
            ++i;
        });
        if (i > 1) {
            $('#indicator').fadeIn();
        } else {
            $('body').append(div);
            $('#indicator').fadeIn();
        }
    }
    function hideLoading() {
        $("#indicator").fadeOut();
//        window.location.reload();
    }
</script>
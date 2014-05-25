<div class="main-header">
        <h2>Doanh nghiệp</h2>
        <em>Liệt kê danh sách doanh nghiệp</em>
    </div>

    <div class="main-content">
        <!-- JQUERY DATA TABLE -->
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Bảng cố định</h3>
                <em>- với chức năng tìm kiếm trực tiếp, sắp xếp, phân trang</em>
            </div>
            <div class="widget-content">
                <table class="table table-sorting table-striped table-hover datatable" cellpadding="0" cellspacing="0" width="100%">
                    <thead>
                    <tr>
                        <th>Browser</th>
                        <th>Operating System</th>
                        <th>Visits</th>
                        <th>New Visits</th>
                        <th>Bounce Rate</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Chrome</td>
                        <td>Macintosh</td>
                        <td>360</td>
                        <td>82.78%</td>
                        <td>87.77%</td>
                    </tr>
                    <tr>
                        <td>Chrome</td>
                        <td>Windows</td>
                        <td>582</td>
                        <td>87.24%</td>
                        <td>90.12%</td>
                    </tr>
                    <tr>
                        <td>Chrome</td>
                        <td>Linux</td>
                        <td>172</td>
                        <td>45.21%</td>
                        <td>48.81%</td>
                    </tr>
                    <tr>
                        <td>Chrome</td>
                        <td>iOS</td>
                        <td>86</td>
                        <td>35.23%</td>
                        <td>44.21%</td>
                    </tr>
                    <tr>
                        <td>Firefox</td>
                        <td>Windows</td>
                        <td>280</td>
                        <td>63.12%</td>
                        <td>89.34%</td>
                    </tr>
                    <tr>
                        <td>Firefox</td>
                        <td>Android</td>
                        <td>236</td>
                        <td>58.02%</td>
                        <td>76.19%</td>
                    </tr>
                    <tr>
                        <td>Internet Explorer</td>
                        <td>Windows</td>
                        <td>145</td>
                        <td>45.23%</td>
                        <td>94.65%</td>
                    </tr>
                    <tr>
                        <td>Safari</td>
                        <td>Macintosh</td>
                        <td>103</td>
                        <td>22.12%</td>
                        <td>52.43%</td>
                    </tr>
                    <tr>
                        <td>Safari</td>
                        <td>iOS</td>
                        <td>302</td>
                        <td>56.98%</td>
                        <td>45.53%</td>
                    </tr>
                    <tr>
                        <td>Opera</td>
                        <td>Windows</td>
                        <td>328</td>
                        <td>67.12%</td>
                        <td>78.34%</td>
                    </tr>
                    <tr>
                        <td>Opera</td>
                        <td>Macintosh</td>
                        <td>22</td>
                        <td>87.21%</td>
                        <td>79.81%</td>
                    </tr>
                    <tr>
                        <td>Chrome</td>
                        <td>iOS</td>
                        <td>45</td>
                        <td>23.21%</td>
                        <td>34.67%</td>
                    </tr>
                    <tr>
                        <td>Firefox</td>
                        <td>Windows</td>
                        <td>67</td>
                        <td>27.11%</td>
                        <td>78.08%</td>
                    </tr>
                    <tr>
                        <td>Chrome</td>
                        <td>Macintosh</td>
                        <td>120</td>
                        <td>80.78%</td>
                        <td>80.77%</td>
                    </tr>
                    <tr>
                        <td>Chrome</td>
                        <td>Windows</td>
                        <td>682</td>
                        <td>89.44%</td>
                        <td>95.32%</td>
                    </tr>
                    <tr>
                        <td>Chrome</td>
                        <td>Windows</td>
                        <td>172</td>
                        <td>43.11%</td>
                        <td>46.89%</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END JQUERY DATA TABLE -->

        <!-- JQGRID TABLE -->
        <div class="widget widget-table">
            <div class="widget-header">
                <h3><i class="fa fa-table"></i> Bảng có thể chỉnh sửa</h3>
                <em>- chỉnh sửa dòng, điều chỉnh, thêm, sửa, xóa, tìm kiếm, reload</em>
            </div>
            <div class="widget-content">
                <div id="jqgrid-wrapper">
                    <table id="jqgrid" class="table table-striped table-hover">
                        <tr>
                            <td></td>
                        </tr>
                    </table>
                    <div id="jqgrid-pager"></div>
                </div>
            </div>
        </div>
        <!-- JQGRID TABLE -->

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
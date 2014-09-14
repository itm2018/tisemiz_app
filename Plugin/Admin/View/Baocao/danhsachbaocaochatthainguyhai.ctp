<div style="width: 800px; margin: 0 auto; padding: 2px;">
    <table id="table9" cellspacing="0" cellpadding="0" width="100%" border="0">
        <tbody><tr>
                <td width="100%">
                    <div id="nav_header">
                        <h3>
                            Danh sách cơ sở đăng ký</h3>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="100%" style="border: solid 1px #2c8337; width: 780px;">
                    <table id="table10" cellspacing="0" cellpadding="0" border="0" width="780px">
                        <tbody><tr>
                                <td valign="top" align="center" height="2" id="navmain_bghead">
                                    <div id="navHeaderName">
                                        <h3>
                                            Danh sách đăng ký Chủ nguồn thải</h3>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 0px 0px;">
                                    <table id="list1">
                                    </table>
                                    <div id="pager1">
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 0px 0px 0px;">
                                    <table id="table2" cellspacing="0" cellpadding="0" border="0" width="780px">
                                        <tbody><tr>
                                                <td align="right" style="height: 21px">
                                                    <select name="drp_dangky" onchange="javascript:setTimeout('__doPostBack(\'drp_dangky\',\'\')', 0)" id="drp_dangky">
                                                        <option selected="selected" value="">------Trạng thái------</option>
                                                        <option value="5">Đã cấp sổ</option>
                                                        <option value="4">Chờ cấp sổ</option>
                                                        <option value="3">Chờ duyệt</option>
                                                        <option value="2">Thụ lý</option>
                                                        <option value="1">Chờ tiếp nhận</option>
                                                        <option value="0">Đang soạn</option>
                                                        <option value="-2">Cần chỉnh sửa</option>

                                                    </select>
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    <table class="grid" id="Table5" border="0" cellpadding="0" cellspacing="0" width="780px">
                                        <tbody><tr>
                                                <td valign="top">

                                                    <table class="grid" id="tblContactList" cellspacing="0" cellpadding="0" border="0" width="780px">
                                                        <tbody><tr>
                                                                <th width="32%" style="text-align: center;">
                                                                    Tên Doanh Nghiệp
                                                                </th>
                                                                <th width="12%">
                                                                    Ngày Đăng Ký
                                                                </th>
                                                                <th width="12%">
                                                                    Trạng Thái
                                                                </th>
                                                                <th width="12%">
                                                                    Chức năng
                                                                </th>
                                                            </tr>
                                                            <?php foreach ($data as $baocao): ?>
                                                                <tr onmouseover="this.style.background = '#efefef'" onmouseout="this.style.background = '#ffffff'" style="background: rgb(239, 239, 239);">
                                                                    <td>
                                                                        <?php echo $baocao['DoanhNghiep']['colTen'] ?>
                                                                    </td>
                                                                    <td style="text-align: center;">
                                                                        <?php echo!empty($baocao['Baocaochatthainguyhai']['created_date']) ? date('d/m/Y', strtotime($baocao['Baocaochatthainguyhai']['created_date'])) : '' ?>
                                                                    </td>
                                                                    <td style="text-align: center;">
                                                                        <?php echo $trangthais[$baocao['Baocaochatthainguyhai']['status']] ?>
                                                                    </td>
                                                                    <td style="text-align: center;">
                                                                        <a href="<?php echo Router::url('/admin/baocao/update/' . $baocao['Baocaochatthainguyhai']['colMa']) ?>"> Sửa</a>
                                                                    </td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>

                                                    <!-- END MAIN CONTENT --->
                                                </td>
                                            </tr>
                                        </tbody></table>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <!-- BEGIN PAGER --->
                                    <?php
                                    echo $this->Paginator->counter(array(
                                        'format' => __('Trang {:page} trong số {:pages} trang,
                            hiển thị {:current} dòng trong tổng số
                            {:count}
                            , bắt đầu {:start}, kết thúc {:end}')
                                    ));
                                    ?>
                                    <!-- END PAGER --->
                                    <ul class="pagination">
                                        <?php
                                        echo $this->Paginator->prev('←', array('class' => 'prev', 'tag' => 'li'), null, array('class' => 'prev disabled', 'tag' => 'li'));
                                        echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentClass' => 'active', 'currentTag' => 'a'));
                                        echo $this->Paginator->next('→', array('class' => 'next', 'tag' => 'li'), null, array('class' => 'next disabled', 'tag' => 'li'));
                                        ?>
                                    </ul>
                                </td>
                            </tr>


                        </tbody></table>
                </td>
            </tr>
        </tbody></table>
</div>
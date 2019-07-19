<?php require_once "header.php"; 

$users = new User;

?>

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">

            </div>
            <div class="col-lg-6">

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- USER DATA -->
                <div class="user-data m-b-30">
                    <h3 class="title-3 m-b-30"><i class="zmdi zmdi-account-calendar"></i>User data</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md ">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All Properties</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="time">
                                    <option selected="selected">Today</option>
                                    <option value="">3 Days</option>
                                    <option value="">1 Week</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>filters</button>
                        </div>

                        <div class="table-data__tool-right">
                            <!-- Button trigger modal -->
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small" data-toggle="modal" data-target="#add_user">
                                <i class="zmdi zmdi-plus"></i>add user</button>

                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                <select class="js-select2" name="type">
                                    <option selected="selected">Export</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr class="tr-shadow">
                                    <th>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </th>
                                    <th>username</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>status</th>
                                    <th>course</th>
                                    <th>Updated at</th>
                                    <th></th>
                                <tr class="spacer"></tr>
                            </thead>
                            <tbody>
                              
                            <?php
                                $get_users = $users->selectAll();

                                if($get_users){
                                    foreach($get_users as $key => $row){
                                        $id = $row['user_id'];
                                        echo"<tr>";
                                        echo"<td>
                                        <label class='au-checkbox'>
                                            <input type='checkbox'>
                                            <span class='au-checkmark'></span>
                                        </label>";
                                        echo"<td>".$row['username']. "</td>";
                                        echo"<td>".$row['user_firstname']."</td>";
                                        echo"<td>".$row['user_lastname']."</td>";
                                        echo"<td>".$row['status_name']."</td>";
                                        echo"<td>".$row['user_course']."</td>";
                                        echo"<td>".$row['user_updated']."</td>";
                                        echo"<td>
                                        <div class='table-data-feature'>
                                            <button class='item' href='user_action.php?user_id=$id' data-toggle='tooltip' data-placement='top'
                                                    title='Send'>
                                                    <i class='zmdi zmdi-mail-send'></i>
                                            </button>
                                            <a class='item' href='edit_user.php?user_id=$id' data-toggle='tooltip' data-placement='top' title='Edit'>
                                            <i class='zmdi zmdi-edit'></i>
                                            </a>
                                            
                                            <button class='item' data-toggle='tooltip' data-placement='top'
                                                title='More'>
                                                <i class='zmdi zmdi-more'></i>
                                            </button>";

                                        ?>
                                        <a class='item' href='user_action.php?action=delete&user_id=<?php echo $id; ?>' data-toggle='tooltip' data-placement='top'
                                                title='Delete' onclick='return confirm("Are you sure you want to delete?");'>
                                                <i class='zmdi zmdi-delete'></i>
                                        </a>
                                        </div>
                                        </td>
                                    </tr>

                                    <?php
                                    

                                }else{
                                    echo"<tr><td colspan='7' class='text-center'>Nothing toshow</td></tr>";
                                }                    
                            ?>
                            
                                <tr class="tr-shadow">
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>
                                    <td>Lori Lynch</td>
                                    <td>
                                        <span class="block-email">lori@example.com</span>
                                    </td>
                                    <td class="desc">Samsung S8 Black</td>
                                    <td>2018-09-27 02:12</td>
                                    <td>
                                        <span class="role admin">admin</span>
                                    </td>
                                    <td>$679.00</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="More">
                                                <i class="zmdi zmdi-more"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                <tr class="tr-shadow">
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>
                                    <td>Lori Lynch</td>
                                    <td>
                                        <span class="block-email">john@example.com</span>
                                    </td>
                                    <td class="desc">iPhone X 64Gb Grey</td>
                                    <td>2018-09-29 05:57</td>
                                    <td>
                                        <span class="role member">Staff</span>
                                    </td>
                                    <td>$999.00</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="More">
                                                <i class="zmdi zmdi-more"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                <tr class="tr-shadow">
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>
                                    <td>Lori Lynch</td>
                                    <td>
                                        <span class="block-email">lyn@example.com</span>
                                    </td>
                                    <td class="desc">iPhone X 256Gb Black</td>
                                    <td>2018-09-25 19:03</td>
                                    <td>
                                        <span class="role user">Student</span>
                                    </td>
                                    <td>$1199.00</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="More">
                                                <i class="zmdi zmdi-more"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="spacer"></tr>
                                <tr class="tr-shadow">
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox">
                                            <span class="au-checkmark"></span>
                                        </label>
                                    </td>
                                    <td>Lori Lynch</td>
                                    <td>
                                        <span class="block-email">doe@example.com</span>
                                    </td>
                                    <td class="desc">Camera C430W 4k</td>
                                    <td>2018-09-24 19:10</td>
                                    <td>
                                        <span class="status--process">Processed</span>
                                    </td>
                                    <td>$699.00</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Send">
                                                <i class="zmdi zmdi-mail-send"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Edit">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                            <button class="item" data-toggle="tooltip" data-placement="top"
                                                title="More">
                                                <i class="zmdi zmdi-more"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright">
                        <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a
                                href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>

<?php require_once "modals.php"; ?>
<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
<?php require_once "header.php"; 
require_once "../../classes/Course.php";

$courses = new Course;

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
                <div class="course-data m-b-30">
                    <h3 class="title-3 m-b-30"><i class="zmdi zmdi-account-calendar"></i>Course data</h3>
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
                                <i class="zmdi zmdi-plus"></i>add course</button>

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
                                    <th>Depertment</th>
                                    <th>Course Name</th>
                                    <th>Courses Description</th>
                                    <th></th>
                                <tr class="spacer"></tr>
                            </thead>
                            <tbody>
                              
                            <?php
                                $get_courses = $courses->selectAll();

                                if($get_courses){
                                    foreach($get_courses as $key => $row){
                                        $id = $row['course_id'];
                                        echo"<tr>";
                                        echo"<td>
                                        <label class='au-checkbox'>
                                            <input type='checkbox'>
                                            <span class='au-checkmark'></span>
                                        </label>";
                                        echo"<td>".$row['dept_id']. "</td>";
                                        echo"<td>".$row['course_name']. "</td>";
                                        echo"<td>".$row['course_description']."</td>";
                                        echo"<td>
                                        <div class='table-data-feature'>
                                            <button class='item' href='user_action.php?course_id=$id' data-toggle='tooltip' data-placement='top'
                                                    title='Send'>
                                                    <i class='zmdi zmdi-mail-send'></i>
                                            </button>
                                            <a class='item' href='edit_course.php?course_id=$id' data-toggle='tooltip' data-placement='top' title='Edit'>
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
                                    

                                }
                                }else{
                                    echo"<tr><td colspan='7' class='text-center'>Nothing toshow</td></tr>";
                                }                    
                            ?>
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

<?php require_once "add.course.php"; ?>
<!-- Jquery JS-->
<script src="../vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="../vendor/bootstrap-4.1/popper.min.js"></script>
<script src="../vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="../vendor/slick/slick.min.js">
</script>
<script src="../vendor/wow/wow.min.js"></script>
<script src="../vendor/animsition/animsition.min.js"></script>
<script src="../vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="../vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="../vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="../vendor/circle-progress/circle-progress.min.js"></script>
<script src="../vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../vendor/chartjs/Chart.bundle.min.js"></script>
<script src="../vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="../js/main.js"></script>

</body>

</html>
<!-- end document-->
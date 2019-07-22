<?php require_once "header.php"; 
require_once "../../classes/Course.php";

//create an instance

$courses = new Course;
$id = $_GET['courses_id'];
$get_course = $courses->selectOne($id);

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
                <!-- Courses DATA -->
                <div class="card">
                    <div class="card-body">
                        <!-- EDIT THIS PART ONLY -->
                        <form action="action_course.php?action=add" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="modal-body">
                <div class="col-lg-12">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="depertment_id" class=" form-control-label">Depertment</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <select class="form-control" name="dept_id">
                                    <option value="1">IT</option>
                                    <option value="2">English</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="col-lg-12">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="course_name" class=" form-control-label">Course name</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="course_name" name="course_name" placeholder="Course name"
                                    class="form-control" value="<?php echo $get_course['course_name']; ?>">
                                <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div>
                </div>
                <div class="col-lg-12">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="course_description" class=" form-control-label">Course Description</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="course_description" name="course_description" placeholder="Course Description"
                                    class="form-control" value="<?php echo $get_course['course_description']; ?>">
                                <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

</div>

<?php require_once "add_course.php"; ?>
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
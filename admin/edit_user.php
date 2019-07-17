<?php
require_once "header.php";

//create an instance

$users = new User;
$id = $_GET['user_id'];
$get_user = $users->selectOne($id);
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
                <div class="card">
                    <div class="card-body">
                        <!-- EDIT THIS PART ONLY -->
                        <form action="user_action.php?action=add" method="post" enctype="multipart/form-data"
                            class="form-horizontal">
                            <div class="modal-body">
                                <div class="col-lg-12">
                                <input type="hidden" name="user_id" value="<?php echo $_GET['user_id'];?>">
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="username" class=" form-control-label">User name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="username" name="username" placeholder="User name"
                                                class="form-control" value="<?php echo $get_user['username']; ?>">
                                            <small class="form-text text-muted">This is a help text</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="email" class=" form-control-label">Email</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="email" id="email" name="email" placeholder="Enter Email"
                                                class="form-control" value="<?php echo $get_user['user_email']; ?>">
                                            <small class="help-block form-text">Please enter your email</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="password" class=" form-control-label">Password</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="password" name="password" placeholder="Password"
                                                class="form-control" value="<?php echo $get_user['user_password']; ?>">
                                            <small class="help-block form-text">Please enter a complex password</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="password-input" class=" form-control-label">First Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="firstname" name="firstname" placeholder="First Name"
                                                class="form-control" value="<?php echo $get_user['user_firstname']; ?>">
                                            <small class="help-block form-text">Please enter a complex Firstname</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="password-input" class=" form-control-label">Last Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="lastname" name="lastname" placeholder="Last Name"
                                                class="form-control" value="<?php echo $get_user['user_lastname']; ?>">
                                            <small class="help-block form-text">Please enter a complex Lastname</small>
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="select" class=" form-control-label">Status</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="status" id="select" class="form-control" value="<?php echo $get_user['user_status']; ?>">
                                                <option value="0">Please select</option>
                                                <option value="1">Student</option>
                                                <option value="2">Teacher</option>
                                                <option value="3">Staff</option>
                                                <option value="4">CEO</option>
                                                <option value="5">graduated</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label class=" form-control-label">Course</label>
                                        </div>
                                        <div class="col col-md-9">
                                            <div class="form-check-inline form-check" value="<?php echo $get_user['user_course']; ?>">
                                                <label for="inline-checkbox1" class="form-check-label">
                                                    <input type="checkbox" id="inline-checkbox1" name="inline-checkbox1"
                                                        value="option1" class="form-check-input">English
                                                </label>
                                                <label for="inline-checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2"
                                                        value="option2" class="form-check-input">Web Basic
                                                </label>
                                                <label for="inline-checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2"
                                                        value="option2" class="form-check-input">Web Design
                                                </label>
                                                <label for="inline-checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2"
                                                        value="option2" class="form-check-input">Web Develop
                                                </label>
                                                <label for="inline-checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2"
                                                        value="option2" class="form-check-input">Ruby on Rails
                                                </label>
                                                <label for="inline-checkbox2" class="form-check-label ">
                                                    <input type="checkbox" id="inline-checkbox2" name="inline-checkbox2"
                                                        value="option2" class="form-check-input">AI
                                                </label>
                                                <label for="inline-checkbox3" class="form-check-label ">
                                                    <input type="checkbox" id="inline-checkbox3" name="inline-checkbox3"
                                                        value="option3" class="form-check-input">none
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="date-input" class=" form-control-label">Date</label>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <input type="date" id="date" name="admission" placeholder="Start day"
                                                class="form-control" value="<?php echo $get_user['user_admission']; ?>">
                                            <small class="help-block form-text">Please enter a Start Day</small>
                                        </div>
                                        to
                                        <div class="col-12 col-md-4">
                                            <input type="date" id="date" name="graduate" placeholder="Graduate day"
                                                class="form-control" value="<?php echo $get_user['user_graduate']; ?>">
                                            <small class="help-block form-text">Please enter a Graduate Day</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="username" class=" form-control-label">Address</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="address" name="adress" placeholder="User Address"
                                                class="form-control" value="<?php echo $get_user['user_address']; ?>">
                                            <small class="form-text text-muted">This is a your Address</small>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="file-input" class=" form-control-label">File input</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="file-input" name="file-input"
                                                class="form-control-file">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Website URL</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="url" id="website" name="website" 　value="http://"
                                                class="form-control" value="<?php echo $get_user['user_website']; ?>">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">FaceBook URL</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="url" id="fb" name="fb" placeholder="url" 
                                                class="form-control" value="<?php echo $get_user['user_fb']; ?>">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">twitter URL</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="url" id="twitter" name="twitter" 　value="http://"
                                                class="form-control" value="<?php echo $get_user['user_twitter']; ?>">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Instagram URL</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="url" id="insta" name="insta" placeholder="url"
                                                class="form-control" value="<?php echo $get_user['user_insta']; ?>">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Youtube URL</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="url" id="youtube" name="youtube" placeholder="url"
                                                class="form-control" value="<?php echo $get_user['user_youtube']; ?>"">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="text-input" class=" form-control-label">Github URL</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="url" id="github" name="github" placeholder="url"
                                                class="form-control" value="<?php echo $get_user['user_github']; ?>">
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="textarea-input" class=" form-control-label">memo</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="textarea-input" id="textarea-input" rows="9"
                                                placeholder="Content..." class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                    <button type="submit" class="btn btn-primary" name="update">Save</button>
                                    </div>
                                </div>
                        </form>
                        <!-- END OF EDIT PART ONLY -->

                    </div>
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
<?php
    require_once "../classes/User.php";
    require_once "../classes/Course.php";

    //create instance
    $user = new User;

    if($_GET['action']=='add'){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $status = $_POST['status'];
        $course = $_POST['course'];
        $address = $_POST['address'];
        $website = $_POST['website'];
        $fb = $_POST['fb'];
        $twitter = $_POST['twitter'];
        $insta = $_POST['insta'];
        $youtube = $_POST['youtube'];
        $admission = $_POST['admission'];
        $graduate = $_POST['graduate'];
        $result = $user->save($username,$password,$email,$firstname,$lastname,$status,$course,$address,$website,$fb,$twitter,$insta,$youtube,$admission,$graduate);

        if($result){
            echo"<script>window.location.replace('users.php');</script>";
        }else{
            echo"Error!!";
        }
    }
    elseif($_GET['action']=='update'){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $status = $_POST['status'];
        $course = $_POST['course'];
        $address = $_POST['address'];
        $website = $_POST['website'];
        $fb = $_POST['fb'];
        $twitter = $_POST['twitter'];
        $insta = $_POST['insta'];
        $youtube = $_POST['youtube'];
        $admission = $_POST['admission'];
        $graduate = $_POST['graduate'];
        $result = $user->update($id,$username,$email,$firstname,$lastname,$status,$course,$address,$website,$fb,$twitter,$insta,$youtube,$admission,$graduate);

        if($result){
            echo"<script>window.location.replace('users.php');</script>";
        }

    }

    elseif($_GET['action']=='delete'){
        $id = $_GET['user_id'];
        $result = $user->delete($id);
        if($result){
            echo "<script>window.location.replace('users.php');</script>";
        }
    }

    //course create instance
    $course = new Course;

    if($_GET['action']=='add'){
        $dept_id = $_POST['dept_id'];
        $course_name = $_POST['course_name'];
        $course_description = $_POST['course_description'];
        $result = $user->save($dept_id,$course_name,$course_description);

        if($result){
    require_once "../classes/course.php";
            echo"<script>window.location.replace('course.php');</script>";
        }else{
            echo"Error!!";
        }
    }
    elseif($_GET['action']=='update'){
        $dept_id = $_POST['dept_id'];
        $course_name = $_POST['course_name'];
        $course_description = $_POST['course_description'];
        $result = $user->update($dept_id,$course_name,$course_description);

        if($result){
            echo"<script>window.location.replace('users.php');</script>";
        }

    }

    elseif($_GET['action']=='delete'){
        $id = $_GET['course_id'];
        $result = $course->delete($id);
        if($result){
            echo "<script>window.location.replace('users.php');</script>";
        }
    }



?>
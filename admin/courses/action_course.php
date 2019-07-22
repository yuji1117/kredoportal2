<?php
    require_once "../../classes/Course.php";

//course create instance
    $course = new Course;

    if($_GET['action']=='add'){
        $dept_id = $_POST['dept_id'];
        $course_name = $_POST['course_name'];
        $course_description = $_POST['course_description'];
        $result = $course->save($dept_id,$course_name,$course_description);

        if($result){
    require_once "course.php";
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
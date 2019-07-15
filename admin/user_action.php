<?php
    require_once "User.php";

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
        $admisson = $_POST['admisson'];
        $graduate = $_POST['graduate'];
        $result = $user->save($username,$password,$email,$firstname,$lastname,$status,$course,$address,$website,$fb,$twitter,$insta,$youtube,$admisson,$graduate);

        if($result){
            echo"<script>window.location.replace('user.php');</script>";
        }else{
            echo"Error!!";
        }
    }
    elseif($_GET['action']=='update'){
        $user_id = $_POST['user_id'];
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
        $admisson = $_POST['admisson'];
        $graduate = $_POST['graduate'];
        $result = $user->update($user_id,$username,$email,$firstname,$lastname,$status,$course,$address,$website,$fb,$twitter,$insta,$youtube,$admisson,$graduate);

        if($result){
            echo"<script>window.location.replace('user.php');</script>";
        }

    }

    elseif($_GET['action']=='delete'){
        $user_id = $_GET['user_id'];
        $result = $user->delete($user_id);
        if($result){
            echo "<script>window.location.replace('users.php');</script>";
        }
    }

?>
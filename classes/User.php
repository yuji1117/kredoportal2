<?php

require_once "Config.php";

class User extends Config{

//login 

    public function login($email,$password){
        $hashed_password = md5($password);
        $sql = "SELECT * FROM users WHERE user_email='$email' AND user_password='$hashed_password'";
        //execute or run the query
        $result = $this->conn->query($sql);
        if($result->num_rows == 1){
            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['user_id'];
            if ($row['user_status'] == 'admin') {
                $this->redirect_js("admin/index.php");
            } else {
                $this->redirect_js("user/index.php");
            }
        }else{
            echo"<p class='text-danger'>Invalid Email or Password</p>";
        }
    }

    //logout
    public function logout()
    {
        // session_start();
        session_destroy();
        header("Location: login.php");
        exit;
    }

    public function selectAll(){
        //query
        $sql = "SELECT * FROM users";
        
        //execute or run the query
        $result = $this->conn->query($sql);
        $rows = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }else{
            return false;
        }
    }

    public function selectOne($id){
        //query
        $sql = "SELECT * FROM users WHERE user_id=$id";
        
        //execute or run the query
        $result = $this->conn->query($sql);
        if($result){
            return $result->fetch_assoc();
        }elseif($this->conn->error){
            echo"Error:" .$this->conn->error;
        }
    }


    public function save($username,$password,$email,$firstname,$lastname){

        $new_password = md5($password);
        $sql = "INSERT INTO users(username,email,password,firstname,lastname,status,course,address,website,fb,twitter,insta,youtube,admisson,graduate)
        VALUES('$username','$email','$new_password','$firstname','$lastname','$status','$course','$address','$website','$fb','$twitter','$insta','$youtube','$admisson','$gtraduate')";
        //execute or run the query
        $result = $this->conn->query($sql);

        if($result){
            return true;

        }else{
            echo "Error:" . $this->conn->error;
        }
    }
    public function update($id,$username,$email,$firstname,$lastname,$status,$course,$address,$website,$fb,$twitter,$insta,$youtube,$admisson,$gtraduate){
        $sql = "UPDATE users SET username='$username', email='$email', firstname='$firstname',
        lastname='$lastname', status='$status', course='$course',address='$address', website='$website',
        fb='$fb', twitter='$twitter', insta='$insta',youtube='$youtube', admisson='$admisson', graduate='$graduate' WHERE user_id=$id";
        //sescute or run query
        $result = $this->conn->query($sql);
        if($result){
            return true;
        }else{
            echo"Error:" . $this->conn->error;
        }
    }

    public function delete($id){
        $sql = "DELETE FROM users WHERE user_id=$id";
        //execute or run the query
        $result = $this->conn->query($sql);

        if($result){
            return true;
        }else{
            echo "Error:" . $this->conn->error;
        }
    }
}



?>
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
        $sql = "SELECT * FROM users
                INNER JOIN status ON users.status_id=status.status_id";
        
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

    public function selectAllStatus(){
        //query
        $sql = "SELECT * FROM status";
        
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


    public function save($username,$user_email,$user_password,$user_firstname,$user_lastname,$user_status,$user_course,$user_address,$user_website,$user_fb,$user_twitter,$user_insta,$user_youtube,$user_admission,$user_graduate){

        $new_password = md5($password);
        $sql = "INSERT INTO users(username,user_email,user_password,user_firstname,user_lastname,status_id,user_course,user_address,user_website,user_fb,user_twitter,user_insta,user_youtube,user_admission,user_graduate)
        VALUES('$username','$user_email','$user_password','$user_firstname','$user_lastname','$user_status','$user_course','$user_address','$user_website','$user_fb','$user_twitter','$user_insta','$user_youtube','$user_admission','$user_graduate')";
        //execute or run the query
        $result = $this->conn->query($sql);

        if($result){
            return true;

        }else{
            echo "Error:" . $this->conn->error;
        }
    }
    public function update($id,$username,$user_password,$user_email,$user_firstname,$user_lastname,$user_status,$user_course,$user_address,$user_website,$user_fb,$user_twitter,$user_insta,$user_youtube,$user_admission,$user_graduate){
        $sql = "UPDATE users SET username='$username', user_email='$user_email', user_firstname='$user_firstname',
        user_lastname='$user_lastname', status_id='$user_status', user_course='$user_course',user_address='$user_address', user_website='$user_website',
        user_fb='$user_fb', user_twitter='$user_twitter', user_insta='$user_insta',user_youtube='$user_youtube', user_admission='$user_admission', user_graduate='$user_graduate' WHERE user_id=$id";
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
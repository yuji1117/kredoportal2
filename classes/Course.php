<?php

require_once "Config.php";

class Course extends Config{

    public function selectAll(){
        //query
        $sql = "SELECT * FROM courses INNER JOIN depertments ON courses.dept_id=depertments.dept_id";
        
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
        $sql = "SELECT * FROM courses WHERE course_id=$id";
        
        //execute or run the query
        $result = $this->conn->query($sql);
        if($result){
            return $result->fetch_assoc();
        }elseif($this->conn->error){
            echo"Error:" .$this->conn->error;
        }
    }

    public function save($dept_id,$course_name,$course_description){

        $sql = "INSERT INTO courses(dept_id,course_name,course_description)
        VALUES('$dept_id','$course_name','$course_description')";
        //execute or run the query
        $result = $this->conn->query($sql);

        if($result){
            return true;

        }else{
            echo "Error:" . $this->conn->error;
        }
    }
    public function update($dept_id,$course_name,$course_description){
        $sql = "UPDATE courses SET dept_id=$cdept_id, course_name='$course_name', course_description='$course_description'
        WHERE course_id=$id";
        //sescute or run query
        $result = $this->conn->query($sql);
        if($result){
            return true;
        }else{
            echo"Error:" . $this->conn->error;
        }
    }

    public function delete($id){
        $sql = "DELETE FROM courses WHERE course_id=$id";
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
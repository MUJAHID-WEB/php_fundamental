<?php
    Class crudApp{
        private $conn;

        public function __construct()
        {
            #database host, database user, database pass, database name
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = 'crudapp';

            $this->conn= mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
            
            if(!$this->conn){
                die("Database Connection Error!!");
            }
        }


        public function add_data($data){
            $std_name = $data['std_name'];
            $std_roll = $data['std_roll'];
            $std_img = $_FILES['std_img']['name'];
            $tmp_name = $_FILES['std_img']['tmp_name'];

            $query = "INSERT INTO students(std_name,std_roll,stg_img) VALUE('$std_name',$std_roll,'$std_img')";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmp_name, 'upload/'.$std_img);
                return "Information Added Successfully";
            }
        }

        public function display_data(){
            $query = "SELECT * FROM students";
            if(mysqli_query($this->conn, $query)){
                $returndata = mysqli_query($this->conn, $query);
                return $returndata;
            }
        }
        public function display_data_by_id($id){
            $query = "SELECT * FROM students WHERE id=$id";
            if(mysqli_query($this->conn, $query)){
                $returndata = mysqli_query($this->conn, $query);
                $studentData = mysqli_fetch_assoc($returndata);
                return $studentData;
            }
        }

        public function update_data($data){
            $std_name = $data['u_std_name'];
            $std_roll = $data['U_std_roll'];
            $idno = $data['std_id'];
            $std_img = $_FILES['u_std_img']['name'];
            $tmp_name = $_FILES['u_std_img']['tmp_name'];

            $query = "UPDATE students SET std_name='$std_name', std_roll=$std_roll, stg_img='$std_img' WHERE id=$idno";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmp_name, 'upload/'.$std_img);
                return "Information Updated Successfully!";
            }
        }

        public function delete_data($id){
            $catch_img = "SELECT * FROM students WHERE id=$id";
            $delete_std_info = mysqli_query($this->conn, $catch_img);
            $std_infoDle = mysqli_fetch_assoc($delete_std_info);
            $deleteImg_data = $std_infoDle['stg_img'];
            $query = "DELETE FROM students WHERE id=$id";
            if(mysqli_query($this->conn, $query)){
                unlink('upload/'.$deleteImg_data);
                return "Deleted Successfully";
            }
        }
    }



?>
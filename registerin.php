<?php
    // if ($_SERVER['REQUEST_method'] == 'POST') {
        $reg_no=$_POST['reg_no'];
        $name=$_POST['name'];
        $password=$_POST['password'];

        $servername="localhost";
        $username="root";
        $database="pblf";
        $passerver="";

        $conn=mysqli_connect($servername,$username,$passerver,$database);

        if (!$conn) {
            die("failed".mysqli_connect_error());
        }else {
            echo "successful";
            $sql="INSERT INTO `info` (`reg_no`, `name`, `password`) VALUES ('$reg_no', '$name', '$password')";
            $result= mysqli_query($conn,$sql);

            if ($result) {
                echo "inserted succesfully";
                header("location:loginpage.html");
            }
            else {
                echo "not inserted";
            }
        }

    // }

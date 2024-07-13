<?php
$login=false;
$showError=false;
    // if ($_SERVER['REQUEST_method'] == 'POST') {
        $reg_no=$_POST['reg_no'];
        $password=$_POST['password'];

        $servername="localhost";
        $username="root";
        $database="pblf";
        $passerver="";

        $conn=mysqli_connect($servername,$username,$passerver,$database);
        // include('C:\xampp\htdocs\pbl2\in.php');
        if (!$conn) {
            die("failed".mysqli_connect_error());
        }else {
            // echo "successful";
            $sql="Select * from info where reg_no='$reg_no' AND password='$password'";
            $result= mysqli_query($conn,$sql);
            $num=mysqli_num_rows($result);
            if ($num==1) {
                // $login=true;
                // echo "prathamesh";
                header("location:homepage.html");
            }
            else {
                $showError="Invalid";
                // echo "prathamesh";
                //header("location:login.html");
            }
        }

    // }
?>
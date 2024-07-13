<?php
    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $roll_no=$_POST['roll_no'];
    $branch=$_POST['branch'];
    $year=$_POST['year'];
    $dob=$_POST['dob'];
    $fe_cgpa=$_POST['fe_cgpa'];
    $se_cgpa=$_POST['se_cgpa'];
    $te_cgpa=$_POST['te_cgpa'];
    $be_cgpa=$_POST['be_cgpa'];


    $servername="localhost";
    $username="root";
    $database="pblf";
    $passerver="";

    $conn=mysqli_connect($servername,$username,$passerver,$database);

        if (!$conn) {
            die("failed".mysqli_connect_error());
        }else {
            // echo "successful";
            $sql="UPDATE info set surname='$surname',roll_no='$roll_no',branch='$branch',year='$year',dob='$dob',fe_cgpa='$fe_cgpa',se_cgpa='$se_cgpa',te_cgpa='$te_cgpa',be_cgpa='$be_cgpa' where name='$name'";
            $result= mysqli_query($conn,$sql);
            header("location:prof.html");
        }
?>
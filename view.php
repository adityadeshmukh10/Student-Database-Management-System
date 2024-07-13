<?php
    $login=false;
    $showError=false;
    // $name=$_POST['name'];
    $name=$_POST['name'];
    // $password=$_POST['password'];
    // function my_funct(){
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
                $sql="Select * from info where name='$name'";
                $result= mysqli_query($conn,$sql);
                $num=mysqli_num_rows($result);
                if ($num<1) {
                  $showError="Invalid";
                  // header("location:login.html");
                }
            }
      $sql1="select reg_no,surname,roll_no,branch,year,dob,fe_cgpa,se_cgpa,te_cgpa,be_cgpa from info where name='$name'";
      $result1=$conn->query($sql1);
      if($result->num_rows==1){
        if ($rows=$result1->fetch_assoc()) {
        // echo '<h2>'.$name.'</h2>';
        echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-image: url(zxd.jpg);
            background-size: 100%;
        }

        .navbar {
            height: 100vh;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        li {
            padding: 16px;
        }

        a {
            display: block;
            color: #fff;
            text-decoration: none;
        }

        a:hover {
            background-color: #666;
        }



        .content>ul {
            width: 100%;
            margin: 10px;
            text-align: center;
            line-height: 75px;
            font-size: 30px;
        }

        /* Optional styles for active link */
        .active {
            background-color: #666;
        }


        .image {
            position: absolute;

            top: -30px;
            right: 00px;

        }

        .asd {
            position: relative;
            top: -10px;
            right: -265px;
            color: blue;
            font-family: Georgia, Times, serif;
            font-size: 28px;
            background-color: aqua;
            width: 950px;
        }

        .box {
            float: right;
            height: 560px;
            border: 3px solid red;
            background-color: #666;
            width: 550px;
            border-radius: 10px;
        }

        #bn {
            margin-left: 15px;
            padding-left: 15px;
            margin-top: 20px;
        }

        .vb {
            position: relative;
            left: 470px;
            border: 3px solid red;
            background-color: #666;
            width: 550px;
            height: 560px;
            border-radius: 10px;

        }

        #fh {
            margin-left: 15px;
            padding-left: 10px;
        }

        #ty {
            margin-top: 20px;
            margin-left: 10px;
            padding-left: 10px;
        }

        #h {
            padding-left: 15px;
            margin-left: 15px;
        }
    </style>
</head>

<body>
    <div class="image">
        <img src="pp.png">
    </div>
    <h2 class="asd">INTERNATIONAL INSTITUTE OF INFORMATION TECHNOLOGY</h2>
    <div class="navbar">
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="prof.html">Enter details</a></li>
            
            <li><a href="loginpage.html">Logout</a></li>
            <!-- Add more navbar items as needed -->
        </ul>
    </div>
    <section class="vb">
    <div class="hj">
    <h3><p>Reg. no: ' .$rows['reg_no'] . '</p></h3>
        <h3><p>surname: ' .$rows['surname'] . '</p></h3>
        <h3><p>Roll no: ' . $rows['roll_no'] . '</p></h3>
        <h3><p>Branch: ' . $rows['branch'] . '</p></h3>
        <h3><p>Year: ' . $rows['year'] . '</p></h3>
        <h3><p>Birth Year: ' . $rows['dob'] . '</p></h3>
        <h3><p>fe_cgpa: ' . $rows['fe_cgpa'] . '</p></h3>
        <h3><p>se_cgpa: ' . $rows['se_cgpa'] . '</p></h3>
        <h3><p>te_cgpa: ' . $rows['te_cgpa'] . '</p></h3>
        <h3><p>be_cgpa: ' . $rows['be_cgpa'] . '</p></h3>
        
    </div>
    </section> 

    
</body>

</html>';

        }
      }
      $conn->close();

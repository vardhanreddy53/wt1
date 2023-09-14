<?php
$uname="root";
$pass="";
$server="localhost";
$dbname="wt";
$con=mysqli_connect($server,$uname,$pass,$dbname);
if (!$con){
    die('Could not connect: '.mysqli_connect_error());  
}
    else
    {  $teachername=$_POST["teacher_name"];
       $teachermail=$_POST["teacher_mail"];
       $teacherpass=$_POST["teacher_pass"];
       $query="select * from teacher_info where teacher_mail='".$teachermail."' and teacher_name='".$teachername."' and teacher_password='".$teacherpass."';";
       if(mysqli_num_rows(mysqli_query($con,$query))>=1){
        $cookie_name = "role";
        $cookie_value = "teacher";
        setcookie($cookie_name, $cookie_value);
        setcookie('mail',$teachermail);
        header("Location: success.php");
    }
       else
       header("Location: failure.php");
    }
?>
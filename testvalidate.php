<?php
session_start();
$ar=$_SESSION['ans'];
$sum=0;
for($i=1;$i<=5;$i++)
{
    if($ar[$i]==$_POST[$i])
    {
        $sum++;
    }
}
$per=($sum/5)*100;
echo $per;
if($per>=80)
{
    echo "You have passed the exam and are eligible to Upload";
    include('connect.php');
    $query="INSERT INTO eligiblet(`mail`, `subject`)";
}
else{
    echo "U cant be like Vignesh without Studying Get yourself a life like vignesh";
}
?>
<?php
require("nav.html");
require("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>This is Test</h2>
    <form action="testvalidate.php" method='post'>
        <div class="mx-3">
            <?php
            session_start();
            $ar=array();
            $query="Select * from ppsq;";
            $rs=mysqli_query($con,$query);
            if(mysqli_num_rows($rs)>=1)
            {
                $i=1;
                while($temp=mysqli_fetch_assoc($rs)){
                    echo $i.") ".$temp['ques']."<br><br>";
                    for($j=1;$j<=4;$j++){
                        $str="op".$j;
                        echo "<input type='radio' name='$i' value='$j' required>  $temp[$str]<br><br>";
                    }
                    $ar[$i]=$temp['ans'];
                    $i++;
                    echo "<hr>";
                }
            }
            // foreach($ar as $t)
            // {
            //     echo "<h3>$t</h3>";
            // }
            $_SESSION['ans']=$ar;
            ?>
            <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
    </form>
</body>
</html>
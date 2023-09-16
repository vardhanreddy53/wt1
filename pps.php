<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPS</title>
    <style>
        #test{
            float: right;
        }
        .grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  /* background-color: #d0bdf4; */
  padding: 10px;
}
.grid-item {
    justify-items: center; 
    background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.8);
    border-radius:16px;
  padding: 20px;
  font-size: 30px;
  text-align: center;
  margin: 30px;
  height:200px;
  background:transparent;
}
    </style>
</head>
<body>
    <?php
    include("nav.html");
    ?>
    <!-- <h2>THIS IS PPS PAGE</h2> -->
    <div style="background-color:#d0bdf4;">
    <?php
    Session_start();
    if($_COOKIE['role']==='teacher'){
        include('connect.php');
        $query="SELECT * FROM eligiblet WHERE mail='".$_COOKIE['mail']."' and subject='pps';";
        if(mysqli_num_rows(mysqli_query($con,$query))==1){
            $_SESSION['subject']='pps';
            echo '<a href="uploadfile.php"><button type="button" class="btn btn-primary mx-2" id="test">Upload</button></a>';
        }
        else{
            echo '<a href="uploadtest.php"><button type="button" class="btn btn-primary mx-2" id="test">Take Test to Upload</button></a>'; 
        }
    }
    ?>
        <div class="grid-container"  style="margin-top:30px">
            <div class="grid-item"><video controls loop src="pps1.mp4"></video></div>
            <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">AP</button></div>
            <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">BEE</button></div>  
            <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">BEM</button></div>
            <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">MVC</button></div>
            <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">PPS-2</button></div>  
            <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">SD</button></div>
            <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">DM</button></div>
            <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">CHEM</button></div>  
            <h2>Videos will be here</h2>
</div>
    </div>
</body>
</html>
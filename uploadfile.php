<?php
include('nav.html');
?>
<h1>Upload demo video</h1>
<html>
<head>
    <title>login page</title>
    <link rel="stylesheet" href="v.css">
    
    <style>

    </style>
</head>

<body>
    <div class="cursor"></div>
    <div class="box">
        <span class="borderline">
            <form method="post" enctype="multipart/form-data" >
                <h2>UPLOADING  A FILE</h2>
                <div class="inputbox">
                    <input type="file" required="required" name="image">
                    <i></i>

                </div>
                
                
                <input type="submit" value="Upload" name="Upload" >
            </form>
        </span>
    </div>
    <script>
         
       const cursor= document.querySelector(".cursor");
        var timeout;
        document.addEventListener("mousemove",(e) =>{
            let x=e.pageX;
            let y=e.pageY;
            cursor.style.top =y +'px';
            cursor.style.left=x +'px';
            cursor.style.display='block';
             function mousestopped(){
                cusror.style.display='none';
             }
             clearTimeout(timeout);
                timeout=setTimeout(mousestopped,1000);
             
        });
    </script>
    
</body>

</html>
<?php

include('connect.php');
if (isset($_POST['Upload']))
{
	$pname =$_FILES['image']['name'];
    $rename=$pname;
    $nn=$rename;
	$tname = $_FILES['image']['tmp_name'];
	$uploads_dir= "videos/" .$nn;
	$t=date('d-m-y')."-".time();
	if(file_exists($uploads_dir))
	die('<font color="Crimson" size=5px >'.$pname.' File already Exists</font>');
	if($_FILES['image']['size']>500000000000)
	die('<font color="yellow" size=5px>Choose a file size below 5MB</font>');
	$f1=explode(".",$pname);
	if(sizeof($f1)>2)
	{
		die('<font color="blue" size=5px>Multiple file extensions used</font>');
		echo "<br>";
	}
	$ok=array("mkv","mp4","mov");
	for($i=1;$i<sizeof($f1);$i++)
	{
	if(!in_array($f1[$i],$ok))
		$x=1;
	}
	if($x==1)
	{
		die('<font color="#FF19F3" size=5px>'.$pname. ' is Wrong file format</font>');
	}
	if($x==0)
	{
	move_uploaded_file($tname, $uploads_dir);
	$sql = "INSERT INTO temp(videos,Uploaded_on) values('$uploads_dir',now())";
	if(mysqli_query($conn,$sql))
	die('<font color="green" size=5px>'.$pname. ' is Successfully Uploaded</font>');	
	}
}
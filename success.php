<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <style>
        body{
            background-color:black;
        }
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto;
  background-color: black;
  padding: 10px;
}
.grid-item {
    justify-items: center; 
    background-color: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(0, 0, 0, 0.8);
    border-radius:16px;
  /* padding: 20px; */
  font-size: 30px;
  text-align: center;
  /* margin: 30px;. */
  height:270px;
  /* background:transparent; */
}
.btn:hover{
      background-color: black;
      color:blue;
    }
    .btn-success{
        --bs-btn-bg:#2ce7dd;
    }
</style>
</head>

<body>
        <nav class="navbar navbar-dark bg-dark " style="height: 86px; ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" style='font-family: "Sofia", sans-serif; '>
                    <h1 style="margin-left: 40px; ">Inside The Box</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel" style="    width: 22%;">
            <div class="offcanvas-header">
                <h3 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Welcome,User</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="padding-top: 0px; font-size: 20px;">
                <!-- <form class="d-flex mt-2" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success" type="submit">Search</button>
                </form> -->
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Upload</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sign Out</a>
                </li>
            </ul>
            
        </div>
    </div>
</div>
</nav>
<div>
    <!-- <h1>Complete the qualification exam to access </h1> -->
    <div class="grid-container"  style="margin-top:30px">
  <div class="grid-item"><a href="pps.php"><button type="button" class="btn btn-success" style="width:100%;height:100%">PPS</button></a></div>
  <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">AP</button></div>
  <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">BEE</button></div>  
  <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">BEM</button></div>
  <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">MVC</button></div>
  <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">PPS-2</button></div>  
  <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">SD</button></div>
  <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">DM</button></div>
  <div class="grid-item"><button type="button" class="btn btn-success" style="width:100%;height:100%">CHEM</button></div>  
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>
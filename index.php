<?php

if(isset($_POST["sub"])){


  $name=$_POST["name"];
  $age=$_POST["age"];
  $gender=$_POST["gender"];
  $contact=$_POST["contact"];
  $ward=$_POST["ward"];
  
  
  
  
  $query="insert into user(name,age,gender,contact,ward) values(?,?,?,?,?)";
  $stmt = $mysqli->prepare($query);
  $rc=$stmt->bind_param('sssss',$name,$age,$gender,$contact,$ward);
  $stmt->execute();
  
  
  
  
  if($stmt){
      
      header('Location:index.php');
  
  }
  
  
  }
  








require "header.php";?>




<h1 style="font-size: 60px;background-color: #F0FFFF;color:darkslategray ;text-align:center;font-family: Brush Script MT;margin-top:2cm ">
<img src="images/boy.webp" alt="" width="60px;"> Get ready to book our hostel...
</h1>

<div class="head" >





</div>



      
  
  
  
  <div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/hostelboygirs.jpg" alt="" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/image2.jpg" alt="" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="images/image1.jpg" alt="" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
  
  
  
  
  
  
  
 





</div>
</div>



    
    
    
       





</div>
<div class="container my-5">
    <div class="my-4 d-flex mx-auto align-items-center col-md-12">
        <h1 class="font-weight-bold col-md-6" style="text-align: center; background-color:aquamarine">BOOKING AVAILABLE</h1>
        <!-- <div class="input-group justify-content-end">
                <div class="form-outline">
                    <input type="search" id="form1" class="form-control" />
                    <label class="form-label" for="form1">Search</label>
                </div>
                <button type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div> -->
    </div>
    <!-- cards -->
    <div class="container d-flex  gap-4 flex-wrap justify-content-center">

      
            <div class="card w-25 hover-shadow border rounded">
                <div class="">
                    <img src="images/room1.jpeg" class="img-fluid w-100 rounded" />
                </div>
                <a href="userlogin.php" class="card-body " style="color: #4a4a4a;">

                <p class mt-1> Seater:1</p>
                <p> Price:RS 5000</p>
                </a>
                    
                
            </div>
    
            <div class="card w-25 hover-shadow border rounded">
                <div class="">
                    <img src="images/room2.jpg" class="img-fluid w-100 rounded" />
                </div>
                <a href="userlogin.php" class="card-body " style="color: #4a4a4a;">

                <p class mt-1> Seater:4</p>
                <p> Price: RS 1000</p>

               
                </a>
                
            </div>
            <div class="card w-25 hover-shadow border rounded">
                <div class="">
                    <img src="images/room3.jpg" class="img-fluid w-100 rounded" />
                </div>
                <a href="userlogin.php" class="card-body " style="color: #4a4a4a;">

                <p class mt-1> Seater:2</p>
                <p> Price:RS 2500</p>
                </a>
                    
                
            </div>
    
    </div>
    <!-- cards -->
</div>












<?php require "footer.php"; ?>
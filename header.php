
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>


    <style>

.border{
    border: paleturquoise ;
    background-color: #F0FFFF;

}


.title{

   font-family: Brush Script MT ;
   font-display: fallback;
   font-size: 80px;
   text-transform: uppercase;
  background-image: linear-gradient(
    -225deg,
    #231557 0%,
    #44107a 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto; 
  color: #fff;
  background-clip: text;
  text-fill-color: transparent;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 15s linear infinite;
  display: inline-block;
  font-size: 80px;
    
}

@keyframes textclip {
  to {
    background-position: 200% center;
  }
}
/* .newdate{
   text-align: center !important;
} */

/* 
tr,td{

    background-color: whitesmoke;

	
	font-size: 30px;
	padding-right: 50px;
	

}
*/
nav  a:hover{
	background-color: #71f0e1;
	color: whitesmoke;
  
} 
.head{
margin-left: 120px;
margin-right: 120px;
border-color: #939e9d !important ;
border: solid;
height: auto;
/* border-right: 2px solid black; */


}
.second{

margin-top: 50px;


}
.view{
    border-color: #939e9d !important ;
 border: solid; 
text-align: center;
margin-top: 100px;
padding-top: 20px;
padding-bottom: 20px;
background: yellow;
margin-left: 20px;
margin-right: 20px;

}
  a:hover{
	background-color: #71f0e1;
	color: whitesmoke;
  }



    </style>


</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-white" >
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="images/logo.jpg" alt="Avatar Logo" style="width:50px;" class="rounded-pill"> 
    </a>
    <div class="d-flex justify-content-end gap-1" >

        <form class="d-flex " >
            <input class="form-control me-2" type="text" placeholder="Search">
            <button class="btn btn-primary" type="button">Search</button>
        </form>
        
        
        <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
      login
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item " href="login.php">Admin</a></li>
      <li><a class="dropdown-item " href="userlogin.php">User</a></li>

    </ul>
  </div>
    </div>
        
    </div>
 
</nav>


<div class="border">
 <div class="container-fluid d-flex  justify-content-between">
     <div class="firstimage">
         
         <img src="images/hostelimages.webp" alt="" style="width:100px;">
        </div>
 <h1 class="title">BOOK HOSTEL</h1>
 
 <img src="images/hostelimages.webp" alt="" style="width:100px;">
 </div>

<div class="d-flex justify-content-center gap-2">

    <img src="images/clock.svg" alt="" style="width:15px;">
    <p id="date" style="font-size: 20px;">
      </div>

 
</p>

 </div>

 </div>

<!-- 
 <nav class="navbar navbar-expand-sm bg-white navbar-light sticky-top ">
  <div class="container-fluid d-flex justify-content-center">
     -->
   
<!-- <table>
	<tr>
		<td>
            <a href="index.html">Home</a></td>

		<td>
            <a href="article.html">Article</a></td>
		<td>
            <a href="finding.html">Information</a></td>
		<td>
            <a href="contact.html">Contact</a></td>

	</tr>
</table>
    -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid d-flex justify-content-center ">
    <ul class="navbar-nav gap-4 ">
    <li class="nav-item">
        <a class="nav-link" href="#"><h4></h4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php"><h4>Home</h4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="roomallot.php"><h4>Room Allotment</h4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><h4>Feedbacks</h4</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactus.php"><h4>Contact Us</h4></a>
      </li>
    </ul>
  </div>
</nav>


    

<script>
let current = new Date();
let cDate = current.getFullYear() + '-' + (current.getMonth() + 1) + '-' + current.getDate();
let cTime = current.getHours() + ":" + current.getMinutes() + ":" + current.getSeconds();
let dateTime = cDate + ' ' + cTime;
document.getElementById("date").innerHTML=dateTime;
</script>

<!-- its for admin -->
<?php  session_start();?>



<?php


include('admin/include/config.php');
if(isset($_POST['userlogin']))
{
  $username=$_POST['email'];
  $password=$_POST['password'];
  $stmt=$mysqli->prepare("SELECT Email_ID,Password,Id FROM register WHERE (Email_ID=?) and Password=?");
  $stmt->bind_param('ss',$username,$password);
  $stmt->execute();
  $stmt -> bind_result($username,$password,$id);
  $rs=$stmt->fetch();
  $_SESSION['id']=$id;
  $uip=$_SERVER['REMOTE_ADDR'];
  $ldate=date('d/m/Y h:i:s', time());
  if($rs)
  {

    $_SESSION['status']="log in sucessfully";
    //  $insert="INSERT into admin(adminid,ip)VALUES(?,?)";
    // $stmtins = $mysqli->prepare($insert);
    // $stmtins->bind_param('sH',$id,$uip);
    //$res=$stmtins->execute();
    header("Location:userdashboard/index.php");
  }
  
				else
				{
          echo "<script>alert('Invalid Username/Email or password');</script>";
				}
			}
      ?>
<!-- its for user -->
      









      <?php require "header.php";?>

<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="images/h1.webp" class="img-fluid"
          alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

      <!-- //form -->
        <!-- <form action="signup.php" method="post"> -->

          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3 " style="background-color: #b0f7ef;">Sign in for Users</p>
            <!-- <a class="nav-link" href="#">
      <img src="images/logo-facebook.svg" alt="Avatar Logo" style="width:50px;" class="rounded-pill"> 
            
        </a>

        <a class="nav-link" href="#">
      <img src="images/logo-google.svg" alt="Avatar Logo" style="width:50px;" class="rounded-pill"> 

        </a> -->


          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>

          <!-- Email input -->
          <form action="" method="post">

            <div class="form-outline mb-4">
              <input type="text" id="formemail" class="form-control form-control-lg"
              placeholder="Enter a valid email address" name="email"/>
              <label class="form-label" for="formemail"></label>
            </div>
            
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="formpassword" class="form-control form-control-lg"
              placeholder="Enter password" name="password"/>
              <label class="form-label" for="formpassword"></label>
            </div>
            
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="formcheckbox" required />
                <label class="form-check-label" for="formcheckbox">
                  Remember me
                </label>
              </div>
              <a href="#!" class="text-body">Forgot password?</a>
            </div>
            
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;" name="userlogin">Login</button>
</form>


              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
              class="link-danger">Register</a></p>
            </div>
            
          <!-- </form> -->
        </div>
      </div>
    </div>
    
    
    
    
    
    
    
    




<?php require "footer.php"; ?>
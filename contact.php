
<?php  

session_start();
?>
<?php require "userdashboard/include/config.php"?>
<?php








if(isset($_POST['submit'])){


    $name =$_POST['name'];
    $email =$_POST['email'];
    
    $subject =$_POST['subject'];
    $content =$_POST['message'];




    $query="insert into feedbacks(name,email,subject,message) values(?,?,?,?)";
    $stmt = $mysqli->prepare($query);
    $rc=$stmt->bind_param('ssss',$name,$email,$subject,$content);
    $stmt->execute();
 



    if($stmt){
        $_SESSION['status'] ="message send successfully";
        header('Location:contact.php');

    }
}

?>
<?php require "header.php";?>


<?php if(isset($_SESSION['status'])){
    echo $_SESSION['status'];
    unset($_SESSION['status']);
}
?>





<h3 style="text-align: center; padding: 10px;background-color:aquamarine">Enter Your Details To Contact</h3>
    <div class="form-container d-flex justify-content-center " style="background-color: #F0FFFF;">
        <form  method="POST"
            action="" >

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="name"
                   />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="email"  />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject"  />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="message" 
                    class="input-field" cols="60" rows="6"></textarea>
            </div>
            <div>
                <input type="submit" name="submit" class="btn-submit btn btn-primary"
                    value="Send" />
<br><br>
                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
        </form>
    </div>



    <div style="background-color: #F0FFFF; padding-left:5%">


        <table class="tabble"  >
            <div> <h3 style="text-align: center; background-color:aquamarine"> comments</h3></div>
    <?php	
// $aid=$_SESSION['id'];
$ret="select * from feedbacks ";
$stmt= $mysqli->prepare($ret) ;
// $stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
// $cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>

<thead style="background-color:green ;">
    <td >
       <img src="images/return-up-forward-sharp.svg" alt="" style="width:15px;"> <?php echo $row->name;?>  
          <!-- //name of user -->
    </td>
</thead>

<thead class="primary">



<td>
email:

<?php echo $row->email;?>               


</td>


<thead class="info"> 

    <td>
         subject :
        <?php echo $row->subject;?>
        
    </td>
    
</thead>
<!-- <hr> -->
<thead table-warning>
    
    
    <td>
        
                                   <!-- message -->
                                   <?php echo $row->message;?>
                                   <hr><div class="container-fluid mt-2">
  <div class="row">
    <div class="col p-1 ">
        <button id="butt" >
        <img src="images/thumbs-up-sharp.svg" alt="" style=" width:10px;">
<footer style="color:black">like</footer>
        </button>

    </div>
    <div class="col p-1 ">

    <button type="button" class="btn btn-light">

        <img src="images/mail-sharp.svg" alt="" style=" width:10px;">
        
        <footer style="color:black">comment</footer>
    </button>



    </div>
  </div>
</div><br><hr><br><br><hr>
</td>


    </thead>

<?php  } ?>
</table>

    <!-- <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script> -->
    <!-- <scrip type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        } -->

    </div>
    <script>





const btn = document.getElementById('butt');

let index = 0;

const colors = [ 'blue', 'white'];

btn.addEventListener('click', function onClick() {
  btn.style.backgroundColor = colors[index];
  btn.style.color = 'white';

  index = index >= colors.length - 1 ? 0 : index + 1;
});
    </script>
<?php require "footer.php";?>

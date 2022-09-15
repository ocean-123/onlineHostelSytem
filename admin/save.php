
<?php include('include/config.php');?>


<?php


$First_name =$_POST['fname'];
$Last_name =$_POST['lname'];

$Address =$_POST['address'];
$Gender =$_POST['inlineRadioOptions'];
$Contact=$_POST['contact'];
$Email =$_POST['email'];
$password =$_POST['pass'];
$cPassword =$_POST['cpass'];


// if(empty($First_name) || empty($Last_name) ||empty($Mother_name) ||empty($Father_name) ||empty($Address) ||empty($Gender) ||empty($State) ||empty($City) ||empty($DOB) ||empty($Pin_code) ||empty($Email) ||empty($Password))
//     {
        
//         echo die();
//     }

try{

    if(isset($_POST['submit']))
    {
        
    
  
if($password!=$cPassword){
    
    echo "<script>alert('enter same password');</script>";
    
}
    else{
    

        
        $stmt =$pdo->prepare( "INSERT INTO register(First_name ,Last_name,Address,Gender,Contact,Email_id,Password,Cpassword)VALUES('$First_name','$Last_name','$Address','$Gender','$Contact','$Email','$password','$cPassword')");
        
        
        $stmt->execute();
    

if($stmt){
    header('Location: index.php');
   
}
}
    
}   
} catch(PDOException $e) {
echo  "<br>" . $e->getMessage();
}

$conn = null;


?>



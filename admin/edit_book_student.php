<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();
//code for add courses
if($_POST['submit'])
{
    $fname=$_POST['firstName'];
    $lname=$_POST['larstName'];
    $contact =$_POST['contactno'];
    $stay =$_POST['stayfrom'];

$seater=$_POST['seater'];
// $fees=$_POST['fees'];
$id=$_GET['id'];
$query="update registration set firstName=?,larstName=?, seater=?,contactno=? ,stayfrom=? where id=?";
$stmt = $mysqli->prepare($query);
$rc=$stmt->bind_param('iiiiii',$fname,$lname,$contact,$stay,$seater,$id);
$stmt->execute();
echo"<script>alert('Room Details has been Updated successfully');</script>";
}

?>
<!-- <!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	<title>Edit Room Details</title> -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">>
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.11.3-jquery.min.js"></script>
<script type="text/javascript" src="js/validation.min.js"></script>
<!-- </head>
<body> -->
	<?php include('header.php');?>
	<div class="ts-main-content">
		<!-- <?php include('includes/sidebar.php');?> -->
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">
					
						<h2 class="page-title">Edit Booking student Details </h2>
	
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Edit  Details</div>
									<div class="panel-body">
										<form method="post" class="form-horizontal">
												<?php	
												$id=$_GET['id'];
	$ret="select * from registration where id=?";
		$stmt= $mysqli->prepare($ret) ;
	 $stmt->bind_param('i',$id);
	 $stmt->execute() ;//ok
	 $res=$stmt->get_result();
	 //$cnt=1;
	   while($row=$res->fetch_object())
	  {
	  	?>
						<div class="hr-dashed"></div>

                        <div class="form-group">
						<label class="col-sm-2 control-label">First Name  </label>
					<div class="col-sm-8">
					<input type="text"  name="seater" value="<?php echo $row->firstName;?>"  class="form-control"> </div>
					</div>

                    <div class="form-group">
						<label class="col-sm-2 control-label">Last Name   </label>
					<div class="col-sm-8">
					<input type="text"  name="seater" value="<?php echo $row->lastName;?>"  class="form-control"> </div>
					</div>

                    <div class="form-group">
						<label class="col-sm-2 control-label">Contact NO. </label>
					<div class="col-sm-8">
					<input type="text"  name="seater" value="<?php echo $row->contactno;?>"  class="form-control"> </div>
					</div>

                    <div class="form-group">
						<label class="col-sm-2 control-label">Stay From  </label>
					<div class="col-sm-8">
					<input type="text"  name="seater" value="<?php echo $row->stayfrom;?>"  class="form-control"> </div>
					</div>


						<div class="form-group">
						<label class="col-sm-2 control-label">Seater  </label>
					<div class="col-sm-8">
					<input type="text"  name="seater" value="<?php echo $row->seater;?>"  class="form-control"> </div>
					</div>



				 <div class="form-group">
				<label class="col-sm-2 control-label">Room no </label>
		<div class="col-sm-8">
	<input type="text" class="form-control" name="rmno" id="rmno" value="<?php echo $row->room_no;?>" disabled>
	<span class="help-block m-b-none">
													Room no can't be changed.</span>
						 </div>
						</div>



<?php } ?>
												<div class="col-sm-8 col-sm-offset-2">
													
													<input class="btn btn-primary" type="submit" name="submit" value="Update Room Details ">
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</script>
<!-- </body>

</html> -->
<?php require "footer.php"?>
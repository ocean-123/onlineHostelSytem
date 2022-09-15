<?php
session_start();
include('include/config.php');
include('include/checklogin.php');
check_login();


if(isset($_GET['del']))
{
	$id=intval($_GET['del']);
	$adn="delete from register where Id=?";
		$stmt= $mysqli->prepare($adn);
		$stmt->bind_param('i',$id);
        $stmt->execute();
        $stmt->close();	   
        echo "<script>alert('Data Deleted');</script>" ;
}
?>


	<?php include('header.php');?>

	<div class="ts-main-content">
			<!-- include('includes/sidebar.php'); -->
		<div class="content-wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<!-- <h2 class="page-title" style="margin-top:4%">Access Log</h2> -->
						<div class="panel panel-default">
							<div class="panel-heading">All registers Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>S.No</th>
											<th>FirstName</th>
											<th>LastName</th>
											<th>Address</th>
											<th>Gender</th>
											<th>Contact</th>
											<th>Email</th>



										</tr>
									</thead>
									  <tfoot>
										<tr>
											<th>S.No</th>
											<th>FirstName</th>
											<th>LastName</th>
											<th>Address</th>
											<th>Gender</th>
											<th>Contact</th>
											<th>Email</th>

											
										</tr>
									</tfoot> 
									<tbody>
<?php	
$aid=$_SESSION['id'];
$ret="select * from register";
$stmt= $mysqli->prepare($ret) ;
// $stmt->bind_param('i',$aid);
$stmt->execute() ;
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->First_name;?></td>
<td><?php echo $row->Last_name;?></td>
<td><?php echo $row->Address;?></td>
<td><?php echo $row->Gender;?></td>
<td><?php echo $row->Contact;?></td>

<td><?php echo $row->Email_ID;?></td>

<td>
<!-- <a href="javascript:void(0);"  onClick="popUpWindow('http://localhost/hostel/admin/full-profile.php?id=<?php echo $row->id;?>');" title="View Full Details"><i class="fa fa-desktop"></i></a>&nbsp;&nbsp; -->
<a href="useraccess.php?del=<?php echo $row->Id;?>" title="Delete Record" onclick="return confirm("Do you want to delete");"><i class="fa fa-close"></i></a></td>










										</tr>
									<?php
$cnt=$cnt+1;
									 } ?>
											
										
									</tbody>
								</table>

								
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

	<?php include('footer.php');?>

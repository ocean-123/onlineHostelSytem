<?php 
require "userdashboard/include/config.php";
require "header.php";

?>


<header>
    <br>
    <h1 style="text-align:center;font-style:Lucida Bright;background-color:#eded87;margin:2cm;">  Room Details  </h1>
</header>


	<div class="row">
									<div class="col-md-6">
										<div class="panel panel-default">
											<div class="panel-body bg-info text-light mt-5"style="width: auto; height:3cm">
												<div class="stat-panel text-center mt-7" >



													<div class="stat-panel-number h1 ">Total rooms </div>
                                                    <?php
												$query ="SELECT id FROM rooms ORDER BY id";

												$result=mysqli_query($mysqli,$query);
$data=mysqli_num_rows($result);
echo '<h1 style="color:black">'.$data.'</h1>';
?>
	
												</div>
											</div>
											<div class="container mt-3">
  <button type="button" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#demo">full details</button>
  <div id="demo" class="collapse show">


  <div class="panel-heading">All Room Details</div>
							<div class="panel-body">
								<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Sno.</th>
										
											<th>Seater</th>
											<th>Room No.</th>
											<th>Fees (PM) </th>

											<!-- <th>Posting Date  </th>
											<th>Action</th> -->
										</tr>
									</thead>
									<tfoot>
										<!-- <tr>
											<th>Sno.</th>
											<th>Seater</th>
											<th>Room No.</th>
										
											<th>Fees (PM) </th>
											<th>Posting Date  </th>
											<th>Action</th>
										</tr> -->
									</tfoot>
									<tbody>
<?php	
// $aid=$_SESSION['id'];
$ret="select * from rooms";
$stmt= $mysqli->prepare($ret) ;
//$stmt->bind_param('i',$aid);
$stmt->execute() ;//ok
$res=$stmt->get_result();
$cnt=1;
while($row=$res->fetch_object())
	  {
	  	?>
<tr><td><?php echo $cnt;;?></td>
<td><?php echo $row->seater;?></td>
<td><?php echo $row->room_no;?></td>
<td><?php echo $row->fees;?></td>
<!-- <td><?php echo $row->posting_date;?></td>
<td><a href="edit-room.php?id=<?php echo $row->id;?>"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;
<a href="manageroom.php?del=<?php echo $row->id;?>" onclick="return confirm("Do you want to delete");"><i class="fa fa-close"></i></a></td>
										</tr> -->
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
									<div class="col-md-6  ">
										<div class="panel panel-default">
											<div class="panel-body bg-success text-light mt-5" style="width: auto; height:3cm">
												<div class="stat-panel text-center">

												<div class="stat-panel-number h1">Booked Rooms</div>
                                                <?php
												$query ="SELECT id FROM registration ORDER BY id";

												$result=mysqli_query($mysqli,$query);
$data=mysqli_num_rows($result);
echo '<h1 style="color:black">'.$data.'</h1>';
?>
<div class="container mt-4  d-flex justify-content-start">
  <button type="button" class="btn btn-primary" style="color:white;"><a href="userlogin.php" style="color:white;"> Check Availability </a></button>
</div>
	
													
												</div>
											</div>
											<!-- <a href="room.php" class="block-anchor panel-footer text-center bg-warning">See All &nbsp; <i class="fa fa-arrow-right"></i></a> -->
										</div>
									</div>
							
								</div>
<?php
require "footer.php";
?>
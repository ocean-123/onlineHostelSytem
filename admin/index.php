<?php 
session_start();


require "include/config.php";
require "header.php"; ?>

<?php 
if(isset($_SESSION['status'])){



 echo $_SESSION['status'];
unset($_SESSION['status']);
}






?>


<div class="row" style="margin: 2%;">
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bg-info text-light">
												<div class="stat-panel text-center">



													<div class="stat-panel-number h1 ">My Profile</div>
													
												</div>
											</div>
											<a href="admin_profile.php" class="block-anchor panel-footer bg-warning">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bg-success text-light">
												<div class="stat-panel text-center">

												<div class="stat-panel-number h1 ">Total Students</div>

												<?php
												$query ="SELECT id FROM registration ORDER BY id";

												$result=mysqli_query($mysqli,$query);
$data=mysqli_num_rows($result);
echo '<h1>'.$data.'</h1>';
?>
												</div>
											</div>
											<a href="bookdetails.php" class="block-anchor panel-footer text-center bg-warning">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>


                                    <div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bg-info text-light">
												<div class="stat-panel text-center">



													<div class="stat-panel-number h1 ">Total    Rooms</div>
													<?php
												$query ="SELECT id FROM rooms ORDER BY id";

												$result=mysqli_query($mysqli,$query);
$data=mysqli_num_rows($result);
echo '<h1>'.$data.'</h1>';
?>
												</div>
											</div>
											<a href="manageroom.php" class="block-anchor panel-footer bg-warning">Full Detail <i class="fa fa-arrow-right"></i></a>
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
	

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}
	</script>












<?php require "footer.php"; ?>













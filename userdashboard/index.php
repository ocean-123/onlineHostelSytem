
<?php session_start();?>

<?php require "header.php";?>


<?php


if(isset($_SESSION['status'])){



	echo $_SESSION['status'];
	unset($_SESSION['status']);
}






?>




								<div class="row">
									<div class="col-md-4">
										<div class="panel panel-default">
											<div class="panel-body bg-info text-light">
												<div class="stat-panel text-center">



													<div class="stat-panel-number h1 ">My Profile</div>
													
												</div>
											</div>
											<a href="myprofile.php" class="block-anchor panel-footer  text-center bg-warning">Full Detail &nbsp;<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-4 ">
										<div class="panel panel-default">
											<div class="panel-body bg-success text-light">
												<div class="stat-panel text-center">

												<div class="stat-panel-number h1 ">My Room</div>
													
												</div>
											</div>
											<a href="room.php" class="block-anchor panel-footer text-center bg-warning">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
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
	<script src="jsCopy/jquery.min.js"></script>
	<script src="jsCopy/bootstrap-select.min.js"></script>
	<script src="jsCopy/bootstrap.min.js"></script>
	<script src="jsCopy/jquery.dataTables.min.js"></script>
	<script src="jsCopy/dataTables.bootstrap.min.js"></script>
	<script src="jsCopy/Chart.min.js"></script>
	<script src="jsCopy/fileinput.js"></script>
	<script src="jsCopy/chartData.js"></script>
	<script src="jsCopy/main.js"></script>
	
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





<?php require "footer.php";?>








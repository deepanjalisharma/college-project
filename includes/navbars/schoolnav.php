<style>
.mainnav
{
background-color: #8c221b!important;
}
</style>
<div class="schoolnav">
				<nav class="navbar navbar-expand-lg navbar-dark">
					<h2 class="text-center text-success">welcome <?php echo $_SESSION['schname'];?></h2>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav text-center ml-auto">
							
							<li class="nav-item">
								<a class="nav-link" href="schooldashboard.php">Home <span class="sr-only">(current)</span></a>
							</li>
							
							<li class="nav-item">
								<a  class="nav-link" href="#aboutorigin.php">About origin</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="schoolparticipants_form.php">Add participants</a>
							</li>
							<li class="nav-item ">
								<a class="nav-link" href="view_own_participants.php">View participants</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="view_rules.php">Rules for event</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="view_schoolresults.php">get results</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="contactus_form.php">Contact us</a>
							</li>
					
							<li>
								<a href="schoollogin_form.php"><button  class="btn btn-outline-light btn-sm btn-danger" type="submit">logout</button></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>


<link rel="stylesheet" href="css/cardDesign.css">
<section class="top-info-menu">	
		<div class="container">
			<div class="col-6">
				<div class="top-menu-info-left">
				<a href="index.php"><span class="wl">Game center.	</span>	</a>
				<?php if(isset($_SESSION['userlogin'])){?>
					<a href="#">[Manager Product]</a>
					<?php } ?>
				</div>
			</div>
			<div class="col-6">
			
				<div class="top-menu-info-right ">
					<a href="admin.php?action=login">Sign in &nbsp</a>
					<a href="admin.php?action=logout">Log out</a> 
				</div>
			</div>	
		</div>
		<div class="bar">
			<i></i>
			<i></i>
			<i></i>
		</div>
	</section>
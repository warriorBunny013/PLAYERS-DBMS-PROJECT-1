<?php
  require("db.config.php");
  require("essentials.php");
  adminLogin();
  session_regenerate_id(true);
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
    <!-- <link rel="stylesheet" href="style.css"> -->
	<link rel="stylesheet" href="dashboard.css">
    <style>
        .logo{
            width:200px;
            margin-left:2px;
        }
		body {
  overflow: hidden; 
}
    </style>
     <script src="https://kit.fontawesome.com/6fa63ac098.js" crossorigin="anonymous"></script>
	<title>Admin Panel-Dashboard</title>
</head>
<body>


	<?php require('header.php');?>
	<?php
	 
	 $totalverify_s="SELECT count(*) FROM `registration` WHERE `seen`=?";
     $values=[1];
     $totalverify_r=mysqli_fetch_assoc(select($totalverify_s,$values,'i'));

	 $pendingverify_s="SELECT count(*) FROM `registration` WHERE `seen`=?";
     $values=[0];
     $pendingverify_r=mysqli_fetch_assoc(select($pendingverify_s,$values,'i'));
    //  print_r($contact_r);

	 $pendinginbox_s="SELECT count(*) FROM `user_queries` WHERE `seen`=?";
     $values=[0];
     $pendinginbox_r=mysqli_fetch_assoc(select($pendinginbox_s,$values,'i'));
	?>

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.jpg">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Admin Panel</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<!-- <i class='bx bxs-calendar-check' ></i> -->
					<i class='bx bxs-check-square bx-tada-hover' ></i>
					<!-- <box-icon name='bell' animation='tada'></box-icon> -->
					<span class="text">
						<h3><?php 
						  
						   echo $totalverify_r['count(*)'];
						?></h3>
						<p>Total verified players</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group bx-tada-hover' ></i>
					<span class="text">
						<h3><?php 
						  
						  echo $pendingverify_r['count(*)'];
					   ?></h3>
						<p>Pending players verification</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-envelope bx-tada-hover' ></i>
					<span class="text">
						<h3><?php 
						  
						  echo $pendinginbox_r['count(*)'];
					   ?></h3>
						<p>Pending inbox Queries</p>
					</span>
				</li>
			</ul>


			
	</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script>const allSideMenu = document.querySelectorAll('#sidebar .side-menu.top li a');

allSideMenu.forEach(item=> {
	const li = item.parentElement;

	item.addEventListener('click', function () {
		allSideMenu.forEach(i=> {
			i.parentElement.classList.remove('active');
		})
		li.classList.add('active');
	})
});




// TOGGLE SIDEBAR
const menuBar = document.querySelector('#content nav .bx.bx-menu');
const sidebar = document.getElementById('sidebar');

menuBar.addEventListener('click', function () {
	sidebar.classList.toggle('hide');
})







const searchButton = document.querySelector('#content nav form .form-input button');
const searchButtonIcon = document.querySelector('#content nav form .form-input button .bx');
const searchForm = document.querySelector('#content nav form');

searchButton.addEventListener('click', function (e) {
	if(window.innerWidth < 576) {
		e.preventDefault();
		searchForm.classList.toggle('show');
		if(searchForm.classList.contains('show')) {
			searchButtonIcon.classList.replace('bx-search', 'bx-x');
		} else {
			searchButtonIcon.classList.replace('bx-x', 'bx-search');
		}
	}
})





if(window.innerWidth < 768) {
	sidebar.classList.add('hide');
} else if(window.innerWidth > 576) {
	searchButtonIcon.classList.replace('bx-x', 'bx-search');
	searchForm.classList.remove('show');
}


window.addEventListener('resize', function () {
	if(this.innerWidth > 576) {
		searchButtonIcon.classList.replace('bx-x', 'bx-search');
		searchForm.classList.remove('show');
	}
})



const switchMode = document.getElementById('switch-mode');

switchMode.addEventListener('change', function () {
	if(this.checked) {
		document.body.classList.add('dark');
	} else {
		document.body.classList.remove('dark');
	}
})</script>
</body>
</html>
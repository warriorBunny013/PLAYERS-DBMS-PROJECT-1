<?php

require("db.config.php");
require("essentials.php");

if(isset($_GET['seen'])){
	$frm_data=filteration($_GET);
	if($frm_data['seen']=='all'){
    
	}
	else{
		$q="UPDATE `registration` SET `seen`=? WHERE `Reg_id`=?";
		$values=[1,$frm_data['seen']];
		if(update($q,$values,'ii')){
			alert('success','marked as read!');
		}
		else{
			alert('error','operation failed!');
		}
	}
}
if(isset($_GET['del'])){
	$frm_data=filteration($_GET);
	if($frm_data['del']=='all'){
    
	}
	else{
		$q="DELETE FROM `registration` WHERE `Reg_id`=?";
		$values=[$frm_data['del']];
		if(update($q,$values,'i')){
			alert('success','data deleted!');
		}
		else{
			alert('error','deletion failed!');
		}
	}
}


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
	<?php require("links.php")?>
	<link rel="stylesheet" href="dashboard.css">
	<link rel="stylesheet" href="bootstrap.css">
    <style>
        .logo{
            width:200px;
            margin-left:2px;
        }
		.card{
			margin-left:4rem;
			margin-top:2rem;
		}
		.side-menu{
			padding:0;
		}
		.card{
			max-width: 100vh;
		}
		.btn-primary{
			background-color: #4d822b!important;
		}
		.custom-alert{
			position: fixed;
			top:70px;
			right:40px;

		}
		.action{
			width:130px;
		}
		.card{
			margin-left:0rem;
		}

    </style>
     <script src="https://kit.fontawesome.com/6fa63ac098.js" crossorigin="anonymous"></script>
	 
	 <!-- <script src="" crossorigin="anonymous"></script> -->
	<title>Admin Panel-Dashboard</title>
</head>
<body>
	<?php require('header.php');?>
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
	<div class="container-fluid" id="main-content">
		<div class="row">
			<div class="col-lg-10 ms-auto p-4 overflow-hidden">
				<h3 class="mb-4 ml-2">User Queries</h3>
			<div class="card border-0 shadow-sm mb-4">
				<div class="card-body">
				    <div class="table-responsive-md" style="height:450px; overflow-y:scroll;">
					  <table class="table table-hover border">
						<thead class="sticky-top">
							<tr class="bg-dark text-light">
								<th scope="col">no.</th>
								<th scope="col">USERS</th>
								
							</tr>
						</thead>
						<tbody>
							<?php
							   
							   
							   $q="SELECT * FROM `masterlogin`";
							   $data=mysqli_query($con,$q);
							   $i=1;

							   while($row=mysqli_fetch_assoc($data)){
								
								echo<<<query
								    <tr>
									     <td>$i</td>
									     
										  <td>$row[USER_NAME]</td>
										  

										  </tr>
								  
								query;
								 $i++;
							   }
							?>
						</tbody>
					</table>
	                </div>
				</div>
	        </div>
	    </div>
	</div>

	</div>
		


</section>
<?php require('scripts.php');?>

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
<!-- <script href="scr"></script> -->
</body>
</html>
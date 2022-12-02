<?php

require("db.config.php");
require("essentials.php");



if(isset($_GET['del'])){
	$frm_data=filteration($_GET);
	if($frm_data['del']=='all'){
    
	}
	else{
		$q="DELETE FROM `events` WHERE `sr_no`=?";
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
				<h3 class="mb-4 ml-2">Event Details</h3>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#events-s">
                      ADD New Events
                    </button>
			<div class="card border-0 shadow-sm mb-4">
				<div class="card-body">
				    <div class="table-responsive-md" style="height:450px; overflow-y:scroll;">
					  <table class="table table-hover border">
						<thead class="sticky-top">
							<tr class="bg-dark text-light">
								<th scope="col">no.</th>
								<th scope="col">Category</th>
								<th scope="col">Date</th>
								<th scope="col">Event_name</th>
								<th scope="col">Country</th>
								<th scope="col">Description</th>
								<th scope="col">MatchID</th>
								<th scope="col">Action</th>
								<th scope="col"></th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php
						
							   $q="SELECT * FROM `events` ORDER BY `sr_no` DESC";
							   $data=mysqli_query($con,$q);
							   $i=1;

							   while($row=mysqli_fetch_assoc($data)){
                                $seen='';
                                
							   $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm mt-2 rounded-pill btn-danger'>Delete</a>";
							   
								echo<<<query
								    <tr>
									     <td>$i</td>
									     <td>$row[event_category]</td>
									      <td>$row[date]</td>
										  <td>$row[event_name]</td>
										  <td>$row[country]</td>
										  <td>$row[description]</td>
										  <td>$row[match_id]</td>
										  <td> <a href="events_view.php?id=<?= $row[sr_no];?>" class="btn btn-info btn-sm">View</a></td>
										   <td> <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#events-s">
										   Edit
										 </button></td>
										  <td>$seen</td>

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
		
 <!--settings modal-->
 <div class="modal fade" id="events-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">General Settings</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="mb-3">
		  <label class="form-label">Category</label>
		   <input name="event_category" id="event_category_inp" type="text" class="form-control shadow-none">
	    </div>
		<div class="mb-3">
		  <label class="form-label">Date</label>
		   <input name="date" id="date_inp" type="text" class="form-control shadow-none">
	    </div>
		<div class="mb-3">
		  <label class="form-label">event name</label>
		   <textarea name="event_name" id="event_name_inp" class="form-control shadow-none" rows="3" style="resize:none;"></textarea>
	    </div>        
      </div>
      <div class="modal-footer">
        <button type="button" id="close-btn-events"  class="btn text-secondary shadow-none" data-bs-dismiss="modal">Close</button>
        <button type="button" id="submit-btn-events" class="btn btn-primary shadow-none">Submit</button>
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
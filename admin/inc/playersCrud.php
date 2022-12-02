<?php

require("db.config.php");
require("essentials.php");
// $useroption = $_POST['OPTIONS'];
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require ('phpmailer/Exception.php');
require ('phpmailer/PHPMailer.php');
require ('phpmailer/SMTP.php');

if(isset($_GET['seen'])){
	$frm_data=filteration($_GET);
	$qa="SELECT * FROM `registration` ORDER BY `Reg_id`";
	$dataa=mysqli_query($con,$qa);
	$rowa = mysqli_fetch_assoc($dataa);
	
	if($frm_data['seen']=='all'){
    
	}
	else{
		$q="UPDATE `registration` SET `seen`=? WHERE `Reg_id`=?";
		$values=[1,$frm_data['seen']];
		if(update($q,$values,'ii')){
			

		
                $mail = new PHPMailer(true);
                $mail->isSMTP();
   
               $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
               $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
               $mail->Username   = 'mona23sonai@gmail.com';                     //SMTP username
               $mail->Password   = 'kiiiwqqxihhdoprq';                               //SMTP password
               $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
               $mail->Port       = 465;    

              $mail->setFrom('mona23sonai@gmail.com', 'SportoZo');
              $mail->addAddress($rowa['Email']) ;
              $mail->isHTML(true);                                  //Set email format to HTML
              $mail->Subject = 'WELCOME to our Sportozo Community';
              $mail->Body    = '<head>
               <meta charset="UTF-8">
               <meta http-equiv="X-UA-Compatible" content="IE=edge">
                 <meta name="viewport" content="width=device-width, initial-scale=1.0">
               <title></title>
    
    <style>
        
        h1{
            
            padding:2rem;

        }
        
        img{
            margin-bottom:1rem;
            height: 24rem;
        }
        p{
            font-size: 1.5rem;
            text-decoration:underline;
        }
        
    </style>
</head>

<body>
        <h1>Congratulations! You are succesfully verified as player!!</h1>
        <img src="https://i.postimg.cc/FzQS6nvj/sendemailimg.jpg"/>
        <p>you can now login and follow us for more updates!</p>
    
    
</body>';

    $mail->send();
	alert('success','Verifiedadf!');
    
                
            }
            else{
                echo "
                <script>
                  alert('SORRY unsuccessful');
                  
                  </script>
                ";

            }
			


		}
}
	

if(isset($_GET['checked'])){
	$frm_data=filteration($_GET);
	if($frm_data['checked']=='all'){
    
	}
	else{
		$q="UPDATE `registration` SET `checked`=? WHERE `seen`=1";
		$values=[1,$frm_data['checked']];
		if(update($q,$values,'i')){
			// alert('success','marked as read!');
		}
		else{
			// alert('error','operation failed!');
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
        .btn{
			width:100px;
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
				<h3 class="mb-4 ml-2">Player Credentials</h3>
			<div class="card border-0 shadow-sm mb-6" >
				<div class="card-body">
				    <div class="table-responsive-md" style="height:450px;  overflow-y:scroll;">
					  <table class="table table-hover border">
						<thead class="sticky-top">
							<tr class="bg-dark text-light">
                                <th scope="col">sr_no</th>
                                <th scope="col">Reg_id</th>
								<th scope="col">Name</th>
								<th scope="col">Country</th>
								<th scope="col">PlayerEmail</th>
								<th scope="col">category</th>
								<th scope="col">Event</th>
								<th scope="col">Sport</th>
								<th scope="col">Mobile</th>
								<th scope="col" class="action">Action</th>
								
							</tr>
						</thead>
						<tbody>
							<?php
							   
							   
							   $q="SELECT * FROM `registration` ORDER BY `Reg_id`";
							   $data=mysqli_query($con,$q);
							   $i=1;

							   while($row=mysqli_fetch_assoc($data)){
								$seen='';
                                $checked='';
							   if($row['seen']!=1){
								 $seen="<a href='?seen=$row[Reg_id]' class='btn btn-sm rounded-pill btn-primary'>Verify</a>";
                                    $checked.="0";
							   } 
							   
							   $seen.="<a href='?del=$row[Reg_id]' class='btn btn-sm mt-2 rounded-pill btn-danger'>Not Eligible</a>";
                            
								echo<<<query
								    <tr> <td>$i</td>
									     <td>$row[Reg_id]</td>
									     <td>$row[Name]</td>
									      <td>$row[Country]</td>
										  <td>$row[Email]</td>
										  <td>$row[Category]</td>
										  <td>$row[Event]</td>
										  <td>$row[Sport]</td>
										  <td>$row[Mobile]</td>
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
		


</section>
<?php require('scripts.php');?>
<?php

?>

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
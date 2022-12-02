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
         <!-- settings edit page -->
	     <div class="card">
          <div class="card-body">
			<div class="d-flex align-items-cemter justify-content-between mb-4">
				<h5 class="card-title m-0">General Settings</h5>
				<!-- Button trigger modal -->
                   <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                      Edit
                    </button>

	         </div>
             <!-- <h5 class="card-title">Card title</h5> -->
                 <h6 class="card-subtitle mb-1 fw-bold">Site title</h6>
				 <p class="card-text" id="site_title"></p>
                 <h6 class="card-subtitle mb-1 fw-bold">about us</h6>
				 <p class="card-text" id="site_about"></p>
            </div>
        </div >
        <!--settings modal-->
		<div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">General Settings</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="mb-3">
		  <label class="form-label">Site name</label>
		   <input name="site_title" id="site_title_inp" type="text" class="form-control shadow-none">
	    </div>
		<div class="mb-3">
		  <label class="form-label">About us</label>
		   <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="3" style="resize:none;"></textarea>
	    </div>        
      </div>
      <div class="modal-footer">
        <button type="button" id="close-btn-settings"  class="btn text-secondary shadow-none" data-bs-dismiss="modal">Close</button>
        <button type="button" id="submit-btn-settings" class="btn btn-primary shadow-none">Submit</button>
      </div>
    </div>
  </div>
</div>
	
        <!--shutdown website-->
		<div class="card">
          <div class="card-body">
			<div class="d-flex align-items-cemter justify-content-between mb-4">
				<h5 class="card-title m-0">Shutdown Website</h5>
				<div class="form-check form-switch">
					<form>
                      <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id="shutdown-toggle">
	                </form>
				</div>
	         </div>
				 <p class="card-text">
					no customers will be able to book when shutdown is turned on
				 </p>
            </div>
        </div >

		<!-- contact us -->
		<div class="card mb-5">
          <div class="card-body">
			<div class="d-flex align-items-cemter justify-content-between mb-4">
				<h5 class="card-title m-0">Contact Us</h5>
				<!-- Button trigger modal -->
                   <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                      Edit
                    </button>

	         </div>
			 <div class="row">
				<div class="col-lg-6">
					<div class="mb-4">
						<h6 class="card-subtitle mb-1 fw-bold">Address</h6>
						<p class="card-text" ><span id="address"></span></p>
				   </div>
					<div class="mb-4">
						<h6 class="card-subtitle mb-1 fw-bold">Phone Numbers</h6>
						<p class="card-text">
						<span id="pn1"></span>
						</p>
				   </div>
					<div class="mb-4">
						<h6 class="card-subtitle mb-1 fw-bold">email</h6>
						<p class="card-text" ><i class="bi bi-telephone-fill"></i>
						<span id="email"></span>	
					</p>
				   </div>
					<div class="mb-4">
						<h6 class="card-subtitle mb-1 fw-bold">Open hours</h6>
						<p class="card-text">
						<span  id="openhours"></span>
						</p>
				   </div>
				   <div class="mb-4">
						<h6 class="card-subtitle mb-1 fw-bold">facebook</h6>
						<p class="card-text" >
						<span  id="facebook"></span>
						</p>
				   </div>
					<div class="mb-4">
						<h6 class="card-subtitle mb-1 fw-bold">Twitter</h6>
						<p class="card-text" >
						<span  id="twitter"></span>
						</p>
				   </div>
					<div class="mb-4">
						<h6 class="card-subtitle mb-1 fw-bold">Instagram</h6>
						<p class="card-text" >
						<span  id="instagram"></span>
						</p>
				   </div>
					<div class="mb-4">
						<h6 class="card-subtitle mb-1 fw-bold">linkedIn</h6>
						<p class="card-text">
						<span   id="linkedin"></span>
						</p>
				   </div>
				</div>
			 </div>
            </div>
        </div >

<div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
	<form id="contacts_s_form" >
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5">Contact us</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<div class="mb-3">
		  <label class="form-label">address</label>
		   <input name="address" id="address_inp" type="text" class="form-control shadow-none" required>
	    </div>
		<div class="mb-4">
		   <label class="form-label">phone number</label>
		   <!--<textarea name="pn1" id="" class="form-control shadow-none" rows="1" style="resize:none;" required></textarea> -->
		     <div class="input-group flex-nowrap">
                <span class="input-group-text">+91</span>
                <input type="text" id="pn1_inp" name="pn1" class="form-control" required>
            </div>
		</div>        
		<div class="mb-3">
		  <label class="form-label">email</label>
		     <div class="input-group flex-nowrap">
                  <span class="input-group-text">@</span>
                         <input type="text" id="email_inp" name="email" class="form-control" required>
	         </div>  
	    </div>      
		<div class="mb-3">
		  <label class="form-label">Open hours</label>
		   <textarea name="openhours" id="openhours_inp" class="form-control shadow-none" rows="1" style="resize:none;"></textarea>
	    </div>        
		<div class="mb-3">
		  <label class="form-label">facebook</label>
		     <div class="input-group">
                  <span class="input-group-text">@</span>
                <input type="text" id="facebook_inp" name="facebook" class="form-control" required>
	         </div>
	    </div>
		<div class="mb-3">
		  <label class="form-label">twitter</label>
		     <div class="input-group">
             <span class="input-group-text">@</span>
             <input type="text" id="twitter_inp" name="twitter" class="form-control" required>
	         </div>
	    </div>
		<div class="mb-3">
		  <label class="form-label">instagram</label>
		      <div class="input-group ">
              <span class="input-group-text">@</span>
              <input type="text" id="instagram_inp" name="instagram" class="form-control" required>
	          </div> 
	     </div>       
		<div class="mb-3">
		  <label class="form-label">Linekedin</label>
		     <div class="input-group">
                <span class="input-group-text">@</span>
                <input type="text" id="linkedin_inp" name="linkedin" class="form-control" required>
            </div>
	    </div>
      <div class="modal-footer">
        <button type="button" onclick="contacts_inp(contacts_data)" id="close-btn"  class="btn text-secondary shadow-none" data-bs-dismiss="modal">Close</button>
        <button type="submit" id="submit-btn" onclick="upd_contacts()" class="btn btn-primary shadow-none">Submit</button>
      </div>
    </div>
  </div>
	</form>
</div>
	</div>

</section>
<?php require('scripts.php');?>
  <script>
	let general_data,contacts_data;
    let contacts_s_form=document.getElementById('contacts_s_form');
	function get_general(){
		let site_title=document.getElementById('site_title');
		let site_about=document.getElementById('site_about');

		let site_title_inp=document.getElementById('site_title_inp');
		let site_about_inp=document.getElementById('site_about_inp');

		let shutdown_toggle=document.getElementById('shutdown-toggle');

		let xhr=new XMLHttpRequest();
		xhr.open("POST","settings_crud.php",true);
		xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
		
		xhr.onload=function(){
			general_data=JSON.parse(this.responseText);
			console.log(general_data);
			console.log("124");
			site_title.innerText=general_data.site_title;
			site_about.innerText=general_data.site_about;

			site_title_inp.value=general_data.site_title;
			site_about_inp.value=general_data.site_about;
			if(general_data.shutdown==0){
				shutdown_toggle.checked=false;
				shutdown_toggle.value=0;
			}
			else{
				shutdown_toggle.checked=true;
				shutdown_toggle.value=1;
			}
		}
		xhr.send('get_general');
	} 
	
	const close=document.getElementById('close-btn-settings');
	close.addEventListener("click",function(){
         site_title_inp.value=general_data.site_title;
         site_about_inp.value=general_data.site_about;
		 
		 console.log(site_title_inp.value);
	});
	const submit=document.getElementById('submit-btn-settings');
	submit.addEventListener("click",function(){
		console.log(site_title_inp.value);
         upd_general(site_title_inp.value,site_about_inp.value);
	});
	const submit_btn=document.getElementById('submit-btn');
	submit_btn.addEventListener("click",function(){
		// console.log(site_title_inp.value);
		upd_contacts(address_inp.value,pn1_inp.value,email_inp.value,openhours_inp.value,facebook_inp.value,twitter_inp.value,instagram_inp.value,linkedin_inp.value);
	});

	// contacts_s_form.addEventListener('submit',function(e){
	// 	e.preventDefault();
	// 	upd_contacts(address_inp.value,pn1_inp.value,email_inp.value,openhours_inp.value,facebook_inp.value,twitter_inp.value,instagram_inp.value,linkedin_inp.value);
	// });
	
	function upd_general(site_title_val,site_about_val){
		let xhr=new XMLHttpRequest();
		xhr.open("POST","settings_crud.php",true);
		xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
		xhr.onload=function(){
			var myModalEl = document.getElementById('general-s')
             var modal = bootstrap.Modal.getInstance(myModalEl)
			 modal.hide(); 
			 if(this.responseText==1){
				// console.log('data updated');
				alert("success","    Changes saved!");
				get_general();
			 }
			 else{
				// console.log("no changes");
				alert("error","No Changes made!");
			 }

			console.log(this.responseText);
			// console.log(site_about_val);

		}
		
		xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
		
	}
	function upd_shutdown(val){
		let xhr=new XMLHttpRequest();
		xhr.open("POST","settings_crud.php",true);
		xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
		xhr.onload=function(){ 
			 if(this.responseText==1 && general_data.shutdown==0){
				// console.log('data updated');
				alert("success","site has been shutdown!");
				// get_general();
			 }
			 else{
				// console.log("no changes");
				alert("success","shutdown mode off!");
			 }
			 get_general();
		}	
		xhr.send('upd_shutdown='+val);	
	}
	function get_contacts(){
        let contacts_p_id=['address','pn1','email','openhours','facebook','twitter','instagram','linkedin']
		let xhr=new XMLHttpRequest();
		xhr.open("POST","settings_crud.php",true);
		xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
		
		xhr.onload=function(){
			contacts_data=JSON.parse(this.responseText);
			contacts_data=Object.values(contacts_data);
			console.log(contacts_data);

			for(i=0;i<contacts_p_id.length;i++){
				document.getElementById(contacts_p_id[i]).innerText=contacts_data[i+1];
			}
			contacts_inp(contacts_data);
			
		}
		xhr.send('get_contacts');
	}

	function contacts_inp(data){
		let contacts_inp_id=['address_inp','pn1_inp','email_inp','openhours_inp','facebook_inp','twitter_inp','instagram_inp','linkedin_inp'];

		for(i=0;i<contacts_inp_id.length;i++){
			document.getElementById(contacts_inp_id[i]).value=data[i+1];
		}
	}
		
	
	function upd_contacts(address_val,pn1_val,email_val,openhours_val,facebook_val,twitter_val,instagram_val,linkedin_val){
		// let index=['address','pn1','email','openhours','facebook','twitter','instagram','linkedin'];
		// let contacts_inp_id=['address_inp','pn1_inp','email_inp','openhours_inp','facebook_inp','twitter_inp','instagram_inp','linkedin_inp'];

		// let data_str="";

		// for(i=0;i<index.length;i++){
		// 	data_str+=index[i]+"="+document.getElementById(contacts_inp_id[i]).value +'&';
		// }
		// data_str+="upd_contacts";
		// console.log("skfdjgwdsgvkjbjkfdskjbjnfsjkbdfbdabfb");
		// console.log(data_str);
		let xhr=new XMLHttpRequest();
		xhr.open("POST","settings_crud.php",true);
		xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");

		xhr.onload=function(){
			var myModal = document.getElementById('contacts-s');
             var modal = bootstrap.Modal.getInstance(myModal);
			 modal.hide();
            if(this.responseText==1){
				// console.log('data updated');
				alert("success","changed saved!");
				// get_general();
				get_contacts();
			 }
			 else{
				// console.log("no changes");
				alert("error","no changes saved!");
			 }
			
		}
		xhr.send('address='+address_val+'&pn1='+pn1_val+'&email='+email_val+'&openhours='+openhours_val+'&fb='+facebook_val+'&twitter='+twitter_val+'&instagram='+instagram_val+'&LinkedIn='+linkedin_val+'&upd_contacts');
	}
	window.onload=function(){
		get_general();
		get_contacts(); 
	}
	</script>
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
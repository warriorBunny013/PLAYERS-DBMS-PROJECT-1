<?php
require('admin/inc/db.config.php');
require('admin/inc/essentials.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="img/icon-logo.png" />
    <link href="style.css" rel="stylesheet" />
    <link href="Youmaylike.css" rel="stylesheet" />
    <link href="featuredEvents.css" rel="stylesheet" />
    <link href="featuredAthletes.css" rel="stylesheet" />
    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="Youmaylike.css" rel="stylesheet" />
    <!-- bootsrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <script src="https://kit.fontawesome.com/6fa63ac098.js" crossorigin="anonymous"></script>
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      .alert{
       /* height:41px; */
       font-size:14px;
       position:fixed;
       left:1320px;
       width:140px;

      }
      .custom-alert{
        position:fixed;
        top:-77px!important;
      }
      @media screen and (max-width: 1388px) {
        body{
          width:202vh;
        }
        #faq{
  right:20rem;
 }
      }
      @media screen and (max-width: 1110px) {
        
        #faq{
  right:0rem;
 }
      }
      @media screen and (max-width: 918px) {
        
        #faq{
  right:-27rem;
 }
      }
      @media screen and (max-width: 596px) {
        
        #faq{
  right:-53rem;
 }
      }

      @media screen and (max-width: 1000px) {
        
       .section-cta .container{
        max-width:400vh;
       }
       /* .navbarkacont{
        visibility: hidden;
       } */
     }
     /* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 389px) {
  body{
          width:191vh;
        }
 
}
@media screen and (max-width: 330px) {
  body{
          width:183vh;
        }
 
}
 .navbarkacont{
  display: flex;
    flex-wrap: wrap;
    
    list-style: none;
    display: flex;
    
    overflow: hidden;
    /* width: 240vh; */
    background-color: #fff;
   
    gap: 10px;
    

 }


      </style>
    <link href="bootstrap.css" rel="stylesheet" />
    <title>players website</title>
  </head>
  <body>
  <?php
  $siteabout_s="SELECT * FROM `settings` WHERE `sr_no`=?";
  $values=[1];
  $siteabout_r=mysqli_fetch_assoc(select($siteabout_s,$values,'i'));
  $contact_s="SELECT * FROM `contact_details` WHERE `sr_no`=?";
  $values=[1];
  $contact_r=mysqli_fetch_assoc(select($contact_s,$values,'i'));
  // print_r($contact_r);
  ?>
    <!-- HOME PAGE -->
    <header class="home-page">
        <nav class="nav">
        <div class="logo-parent"><img class="logo" src="img/logo-2.png" /></div>
          <div class="navbarkacont">
          <a href="#home" class="nav-item is-active active" active-color="orange"
            >Home</a
          >
          <a href="#you-may-like" class="nav-item" active-color="green"
            >You may like</a
          >
          <!-- <a href="#" class="nav-item" active-color="blue">Next games</a> -->
          <a href="#featured-events" class="nav-item" active-color="red"
            >Featured events</a
          >
          <a href="#featured-athletes" class="nav-item" active-color="violet"
            >Featured athletes</a
          >
          <a href="gallery.html" class="nav-item" active-color="blue"
            >Gallery</a
          >
          <a href="#bookticket" class="nav-item" active-color="blue"
            >Book tickets</a
          >
          <a href="#particles-js" class="nav-item" active-color="#eab676">FAQ</a>
          <a href="#footer" class="nav-item" active-color="#eab676">Contact</a>
          <a href="login_SportoZo.html" class="nav-item" active-color="rebeccapurple">Log in</a>
          <a href="registration_Sportozo.php" class="nav-item" active-color="rebeccapurple">signup</a>
        
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signup">
  sign-up
</button> -->
         
          <!-- <a href="dashboard.html" class="nav-item" active-color="rebeccapurple">Dashboard</a> -->
          <span class="nav-indicator"></span>
          </div>
          
        </nav>
        <!-- HAMBURGER MENU STARTS -->
   
        
      <!-- Modal -->
<div class="modal fade" id="signup" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">   
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body m-4">
        <!-- <h4 class="modal-title mb-4">Signup form</h4> -->
        <form method="post" id="signup-form">
          <div class="form-group">
            <!-- <label for="exampleInputEmail1">Email address</label> -->
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group">
            <!-- <label for="exampleInputPassword1">Password</label> -->
            <input type="password" name="pass" class="form-control" style="margin-top:10px" id="exampleInputPassword1" placeholder="Password" required>
            <input type="password" name="cpass" class="form-control" style="margin-top:10px" id="exampleConfirmtPassword1" placeholder="Confirm password.." required>
          </div>
          <!-- <label for="chose">player/user</label> -->
          <select name="option" class="form-control"style="margin-top:10px">
            <option>User</option>
            <option>Player</option>
          </select>
          <div class="input-group mb-3" style="margin-top:10px">
            <input type="file" accept=".jpg,.jpeg,.png,.webp" name="profile" class="form-control" id="inputGroupFile02" required >
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
        <button type="button" id="submit-btn-signup" class="btn btn-primary mx-auto p-2">Sign-up</button>
      </div>
    </div>
  </div>
</div>
<script>
   function alert(type,msg,position='body'){
         let bs_class=(type=='success')?'alert-success':'alert-danger';
         let element=document.createElement('div');
         element.innerHTML=`
         <div class="alert ${bs_class} alert-dismissible fade show custom-alert" role="alert">
                <strong class="me-3">${msg}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>`;
            if(position=='body'){
              document.body.append(element);
              element.getElementById(position).appendChild(element);
            }
            setTimeout(remAlert,2000);
            
        }
        function remAlert(){
          document.getElementsByClassName('alert')[0].remove();
        }

      
  function setActive(){}


  // const submit=document.getElementById('submit-btn-settings');
	// submit.addEventListener("click",function(){
	// 	console.log(site_title_inp.value);
  //        upd_general(site_title_inp.value,site_about_inp.value);
	// });


  let register_form=document.getElementById("submit-btn-signup");
  register_form.addEventListener("click",(e)=>{
   e.preventDefault();
   let data=new FormData();
   data.append('email',register_form.elements['email'].value);
   data.append('option',register_form.elements['option'].value);
   data.append('profile',register_form.elements['profile'].files[0]);
   data.append('pass',register_form.elements['pass'].value);
   data.append('cpass',register_form.elements['cpass'].value);
   data.append('register','');

 
   let xhr=new XMLHttpRequest();
		xhr.open("POST","admin/inc/login_register.php",true);
		      
    var myModal=document.getElementById('signup');
   var modal=bootstrap.Modal.getInstance(myModal);
   modal.hide();
		
		xhr.onload=function(){


			if(this.responseText=='pass_mismatch'){
        alert('error',"password Mismatch!");
      }
			else if(this.responseText=='email_already'){
        alert('error',"Email is already registered!");
      }
			else if(this.responseText=='phone_already'){
        alert('error',"phone number is already registered!");
      }
			else if(this.responseText=='inv_img'){
        alert('error',"Only JPG,WEBP & PNG images are allowed!");
      }
			else if(this.responseText=='upd_failed'){
        alert('error',"image upload failed");
      }
			else if(this.responseText=='mail_failed'){
        alert('error',"Cannot send confirmation email! server down");
      }
			else if(this.responseText=='ins_failed'){
        alert('error',"Registration failed! server down");
      }else{
        alert('success',"Registration successful.confirmation link sent to email");
        register_form.reset();
      }
		}
		xhr.send(data);
  });

  setActive();
    </script>


      <script src="nav.js"></script>
      <div class="large-home" id="home">
        <div class="home" style="height: 90 vh">
          <div class="home-heading">
            <!-- <p class="welcome-text">Welcome</p> -->
            <span class="home-heading-text">
              Alone we can do so litte, together we can do so much
            </span>
            <!-- <div class="scroll">
              <button class="scroll-below shake">Scroll Below</button>
            </div> -->
          </div>
          <div class="hero" style="width: 100px">
            <img class="home-image" src="img/home-image-1.jpg" />
          </div>
          <div class="slider"></div>
        </div>
      </div>
    </header>

    <!-- FAQ SECTION -->
    <div id="particles-js"></div>
    <section class="accordion-content reveal" id="faq">
      <h1 class="faq">Frequently Asked Questions</h1>
      <div class="accordion">
        <p class="number">01</p>
        <h1 class="heading-text">How to register in the upcoming touranaments</h1>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="icon-down"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M19 9l-7 7-7-7"
          />
        </svg>
        <div class="hidden-box">
          <p class="text">
          Get hassle-free train ticket booking with EaseMyTrip. Search train tickets on your preferred dates and book a confirmed railway ticket in minutes.

          </p>
          <ul>
            <li>find the best time to book. No hidden fees. No hidden charges.</li>
            <li>find the best time to book. No hidden fees. No hidden charges.</li>
            <li>find the best time to book. No hidden fees. No hidden charges.</li>
            <li>find the best time to book. No hidden fees. No hidden charges.</li>
          </ul>
        </div>
      </div>
      <div class="accordion">
        <p class="number">02</p>
        <h1 class="heading-text">How to check result of past touranaments?</h1>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="icon-down"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M19 9l-7 7-7-7"
          />
        </svg>
        <div class="hidden-box">
          <p class="text">
          INOX Cinemas Mumbai Tickets Online Booking. Checkout Prices, film Shows, cinema showtimes, nearby theatre address, movies & cinemas Show Timings for Current
          </p>
          <ul>
            <li>Cinemas Mumbai Tickets Online Booking</li>
            <li>Cinemas Mumbai Tickets Online Booking</li>
            <li>Cinemas Mumbai Tickets Online Booking</li>
            <li>Cinemas Mumbai Tickets Online Booking</li>
            
          </ul>
        </div>
      </div>
      <div class="accordion">
        <p class="number">03</p>
        <h1 class="heading-text">How to submit health details?</h1>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          class="icon-down"
          fill="none"
          viewBox="0 0 24 24"
          stroke="currentColor"
          stroke-width="2"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M19 9l-7 7-7-7"
          />
        </svg>
        <div class="hidden-box">
          <p class="text">
          INOX Cinemas Mumbai Tickets Online Booking. Checkout Prices, film Shows, cinema showtimes, nearby theatre address, movies & cinemas Show Timings for Current
          </p>
          <ul>
          <li>Cinemas Mumbai Tickets Online Booking</li>
            <li>Cinemas Mumbai Tickets Online Booking</li>
            <li>Cinemas Mumbai Tickets Online Booking</li>
            <li>Cinemas Mumbai Tickets Online Booking</li>
          </ul>
        </div>
      </div>
    </section>
    <section class="section-cta" id="cta">
      <div class="container">
        <div class="cta">
          <div class="cta-text-box">
            <h2 class="heading-secondary">Hub for all Champions.</h2>
            <p class="cta-text">
              sign-up and register for upcomming tournaments and Stay up to date
              on your favourite sports and athletes. Watch original SportoZo
              films and documentaries. Get exclusive stories about your
              favourit SportoZo athletes and sports into your e-mail inbox and many more.
            </p>

            <form action = "#signup-form" method = "post">

              <div class = "explore_more">
              <button class="btnm btn--formm">Signup to Explore More</button></div>

              <!-- <input type="checkbox" />
              <input type="number" /> -->

            </form>
          </div>
          <div class="cta-img-box reveal" role="img">
            <img src="img/athlete-removebg-preview.png" />
          </div>
        </div>
      </div>
    </section>
    <section class="youmaylike" id="you-may-like">
      <h1 class="welcome-text youmay" id="headtxt">YOU MAY LIKE</h1>
      <div class="news">
        <div class="item" data-aos="fade-up" data-aos-delay="150" id="item1">
          <div class="subitem">
            <div class="news_image">
              <img
                src="img/stadium.jpg"
                width="400px"
                height="225px"
                alt="highlight1"
              />
            </div>
            <p class="highlights">
              India’s best in track and field events: Meet the national
              athletics record holders
            </p>
            <a href="#">read more <i class="fas fa-angle-right"></i></a>
          </div>
        </div>
        <div class="item" data-aos="fade-up" data-aos-delay="300" id="item2">
          <div class="subitem">
            <div class="news_image">
              <img
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Carter_vs_Gasol%2C_Lakers_vs_Magic.jpg/413px-Carter_vs_Gasol%2C_Lakers_vs_Magic.jpg"
                width="400px"
                height="225px"
                alt="highlights"
              />
            </div>
            <p class="highlights">
              National Open Athletics Championships 2022: Rosy Meena Paulraj
              wins pole vault gold medal with new national record
            </p>
            <a href="#">read more <i class="fas fa-angle-right"></i></a>
          </div>
        </div>
        <div class="item" data-aos="fade-up" data-aos-delay="450" id="item3">
          <div class="subitem">
            <div class="news_image">
              <img
                src="img/valleyball.jpg"
                width="400px"
                height="225px"
                alt="highlights"
              />
            </div>
            <p class="highlights">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti
              alias cum nulla.
            </p>
            <a href="#">read more <i class="fas fa-angle-right"></i></a>
          </div>
        </div>
        <div class="item" data-aos="fade-up" data-aos-delay="150" id="item4">
          <div class="subitem">
            <div class="news_image">
              <img
                src="img/racing.jpg"
                width="400px"
                height="225px"
                alt="highlights"
              />
            </div>
            <p class="highlights">
              Volleyball 2022 Women’s World Championship final: Serbia wins
              back-to-back titles
            </p>
            <a href="#">read more <i class="fas fa-angle-right"></i></a>
          </div>
        </div>

        <div class="item" data-aos="fade-up" data-aos-delay="300" id="item5">
          <div class="subitem">
            <div class="news_image">
              <img
                src="img/cycling-wiki.jpg"
                width="400px"
                height="225px"
                alt="highlights"
              />
            </div>
            <p class="highlights">
              FIFA U-17 Women’s World Cup 2022: Fixtures, scores and points
              table
            </p>
            <a href="#">read more <i class="fas fa-angle-right"></i></a>
          </div>
        </div>
        <div class="item" data-aos="fade-up" data-aos-delay="450" id="item6">
          <div class="subitem">
            <div class="news_image">
              <img
                src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/fllfymkd0w3cixipfotc"
                width="400px"
                height="225px"
                alt="highlights"
              />
            </div>
            <p class="highlights">
              China's Lu Kaiman beats Olympic champion Anna Korakaki for women's
              10m air pistol world title
            </p>
            <a href="#">read more <i class="fas fa-angle-right"></i></a>
          </div>
        </div>

        <div class="item" data-aos="fade-up" data-aos-delay="150" id="item7">
          <div class="subitem">
            <div class="news_image">
              <img
                src="img/swimming-wiki.jpg"
                width="400px"
                height="225px"
                alt="highlights"
              />
            </div>
            <p class="highlights">
              Lucas Broussard claims back-to-back Junior Grand Prix title in
              Egna, Italy
            </p>
            <a href="#">read more <i class="fas fa-angle-right"></i></a>
          </div>
        </div>
        <div class="item" data-aos="fade-up" data-aos-delay="300" id="item8">
          <div class="subitem">
            <div class="news_image">
              <img
                src="img/jersy.jpg"
                width="400px"
                height="225px"
                alt="highlights"
              />
            </div>
            <p class="highlights">
              Rudrankksh Patil wears world crown, seals Olympic quota for India
            </p>
            <a href="#">read more <i class="fas fa-angle-right"></i></a>
          </div>
        </div>

        <div class="item" data-aos="fade-up" data-aos-delay="450" id="item9">
          <div class="subitem">
            <div class="news_image">
              <img
                src="https://img.olympicchannel.com/images/image/private/t_16-9_400-225/f_auto/primary/lki5jrtfi8kohwcgbjnx"
                width="400px"
                height="225px"
                alt="highlights"
              />
            </div>
            <p class="highlights">
              National Open Athletics Championships 2022: Rosy Meena Paulraj
              wins pole vault gold medal with new national record
            </p>
            <a href="#">read more <i class="fas fa-angle-right"></i></a>
          </div>
        </div>
      </div>
    </section>
    <!-- Featured Events -->
    
    <section class="Masterfeature" id="featured-events">
      <div class="Featuredevents">
        <div class="featurehead">
          <h1 class="welcome-text reveal" id="headtext">Featured Events</h1>
        </div>
        <p class="description reveal">
          Watch live action from your favourite sports, discover award-winning
          Original Films and Series and explore our 24/7 thematic linear
          channels.
        </p>
      </div>
      <!-- <div class="topic_name"> -->
      <div class="liveka">
        <h2 class="topic_name">Live Events</h2>
        <img class="live-img" src="img/live-icon.png" height="45px" />
      </div>

      <!-- </div> -->
      <div class="displaying_content">
        <div class="box">
          <div class="header-box">
            <div class="txt">volleyball</div>
            <!-- <div class="image-logos"> -->
            <img
              src="https://img.olympicchannel.com/images/image/private/t_1-1_300/f_auto/v1538355600/primary/hd7ytq34vaz3bbaaareq"
              height="50px"
              width="50px"
              class="image-logos"
            />
            <!-- </div> -->
          </div>
          <div class="text-box">
            <div class="subheaddate-text-box"><p>23 sep - 15 oct</p></div>
            <div class="subhead-text-box">
              <p>volleyball | Women's World Championships 2022</p>
            </div>
          </div>
          <div class="image-box">
            <img
              src="https://img.olympicchannel.com/images/image/private/t_16-9_760/f_auto/v1663666338/primary/fcwmxncnfj1b3hxxobkh"
              height="250px"
            />
          </div>
        </div>
        <div class="box">
          <div class="header-box">
            <div class="txt">swimming</div>
            <div class="image-logos">
              <img
                src="https://img.olympicchannel.com/images/image/private/t_1-1_300/f_auto/v1538355600/primary/vcnrdj0dumc3u0uskav9"
                height="50px"
                width="50px"
              />
            </div>
          </div>
          <div class="text-box">
            <div class="subheaddate-text-box"><p>01 - 15 oct</p></div>
            <div class="subhead-text-box">
              <p>volleyball | Women's World Championships 2022</p>
            </div>
          </div>
          <div class="image-box">
            <img
              src="https://img.olympicchannel.com/images/image/private/t_16-9_760/f_auto/v1664272518/primary/egjdiwrhrtvsxq5xonip"
              height="250px"
            />
          </div>
        </div>

        <div class="box">
          <div class="header-box">
            <div class="txt">Shooting</div>
            <div class="image-logos">
              <img
                src="https://img.olympicchannel.com/images/image/private/t_1-1_300/f_auto/v1538355600/primary/mse3qy2wknfe6nasxvfn"
                height="50px"
                width="50px"
              />
            </div>
          </div>
          <div class="text-box">
            <div class="subheaddate-text-box"><p>12 - 15 oct</p></div>
            <div class="subhead-text-box">
              <p>
                Shooting | Olympic Qualifier | World Championship Rifle/Pistol |
                Cairo
              </p>
            </div>
          </div>
          <div class="image-box">
            <img
              src="https://img.olympicchannel.com/images/image/private/t_16-9_760/f_auto/v1660830141/primary/wonnyrvouv1f7jovlonu"
              height="250px"
            />
          </div>
        </div>
      </div>

      <!-- <div > -->
      <h1 class="head-orig reveal">Originals In The Spotlight</h1>
      <!-- </div> -->

      <div class="spot-light">
        <div class="originals">
          <img
            src="https://img.olympicchannel.com/images/image/private/t_carousel-480X812/f_auto/v1538355600/primary/tlj4qaxirqyrwqfdota0"
            height="350px"
          />
        </div>
        <div class="originals">
          <img
            src="https://img.olympicchannel.com/images/image/private/t_carousel-480X812/f_auto/v1538355600/primary/s8v1btovdeick05yli8v"
            height="350px"
          />
        </div>
        <div class="originals">
          <img
            src="https://img.olympicchannel.com/images/image/private/t_carousel-480X812/f_auto/v1538355600/primary/uajfe0cg9icjcwytewyj"
            height="350px"
          />
        </div>
        <div class="originals">
          <img
            src="https://img.olympicchannel.com/images/image/private/t_carousel-480X812/f_auto/v1538355600/primary/nc7l7nqg57cqhnsebsno"
            height="350px"
          />
        </div>
        <div class="originals">
          <img
            src="https://img.olympicchannel.com/images/image/private/t_carousel-480X812/f_auto/v1538355600/primary/umbx5gcfdfhuuy4bvguy"
            height="350px"
          />
        </div>
        <div class="originals">
          <img
            src="https://img.olympicchannel.com/images/image/private/t_carousel-480X812/f_auto/v1538355600/primary/wtcw6zeb62okro9ebpkd"
            height="350px"
          />
        </div>
      </div>
    </section>
    <!-- Featured athletes-->

    <section class="featured_athletes" id="featured-athletes">
      <div class="featured_heading">
        <h1 class="welcome-text reveal">Featured Athletes</h1>
      </div>

      <div class="athletes">
        <div class="Item_box">
          <div class="Medals_won">
            <div class="medals" id="b1">2</div>
            <div class="medals" id="gold">G</div>
            <div class="medals" id="b2">1</div>
            <div class="medals" id="silver">S</div>
            <div class="medals" id="b3">1</div>
            <div class="medals" id="bronze">B</div>
          </div>
          <div class="image_boxicon">
            <div class="Athletes_image">
              <img
                src="https://img.olympicchannel.com/images/image/private/t_1-1_300/primary/sofaf1eebviulpdlbw9y"
                height="200px"
                width="200px"
              />
            </div>
          </div>
          <div class="name1">Eluid Kipochoge</div>
          <hr />
          <div class="part">Athletes</div>
          <div class="country">
            <div class="countryflag">
              <img
                src="https://olympics.com/images/static/country/flag/4x3/ke.svg"
                height="40px"
                width="40px"
              />
            </div>
            <div class="countryname">Kenya</div>
          </div>
        </div>
        <div class="Item_box">
          <div class="Medals_won">
            <div class="medals" id="b2">1</div>
            <div class="medals" id="silver">S</div>
          </div>
          <div class="image_boxicon">
            <div class="Athletes_image">
              <img
                src="https://img.olympicchannel.com/images/image/private/t_1-1_300/v1655996747/primary/cvkohtnfy2gchvxw2w8l"
                height="200px"
                width="200px"
              />

              <!-- <div class="fav_icon">
                <img
                  src="https://olympics.com/images/static/b2p-icons/small_24px/favorites.svg"
                  height="20px"
                  width="20px"
                />
              </div> -->
            </div>
          </div>
          <div class="name1">Rayssa Leal</div>
          <hr />
          <div class="part">Skateboarding</div>
          <div class="country">
            <div class="countryflag">
              <img
                src="https://olympics.com/images/static/country/flag/4x3/br.svg"
                height="40px"
                width="40px"
              />
            </div>
            <div class="countryname">Brazil</div>
          </div>
        </div>
        <div class="Item_box">
          <div class="Medals_won">
            <div class="medals" id="b1">1</div>
            <div class="medals" id="gold">G</div>
          </div>
          <div class="image_boxicon">
            <div class="Athletes_image">
              <img
                src="https://imgk.timesnownews.com/story/Neeraj_Chopra_AP2_0.jpg?tr=w-1200,h-900"
                height="200px"
                width="200px"
              />
              <!-- 
              <div class="fav_icon">
                <img
                  src="https://olympics.com/images/static/b2p-icons/small_24px/favorites.svg"
                  height="20px"
                  width="20px"
                />
              </div> -->
            </div>
          </div>
          <div class="name1">Neeraj Chopra</div>
          <hr />
          <div class="part">Javelin Throw</div>
          <div class="country">
            <div class="countryflag">
              <img
                src="https://cdn-icons-png.flaticon.com/512/330/330439.png"
                height="40px"
                width="40px"
              />
            </div>
            <div class="countryname">India</div>
          </div>
        </div>
        <div class="Item_box">
          <div class="Medals_won">
            <div class="medals" id="b1"><p>3</p></div>
            <div class="medals" id="gold"><p>G</p></div>
            <div class="medals" id="b3"><p>1</p></div>
            <div class="medals" id="bronze"><p>B</p></div>
          </div>
          <div class="image_boxicon">
            <div class="Athletes_image">
              <img
                src="https://img.olympicchannel.com/images/image/private/t_1-1_300/primary/heoopmantspbzhbwwjya"
                height="200px"
                width="200px"
              />

              <!-- <div class="fav_icon">
                <img
                  src="https://olympics.com/images/static/b2p-icons/small_24px/favorites.svg"
                  height="20px"
                  width="20px"
                />
              </div> -->
            </div>
          </div>
          <div class="name1">Jassy Rogger</div>
          <hr />
          <div class="part">Athletes</div>
          <div class="country">
            <div class="countryflag">
              <img
                src="https://olympics.com/images/static/country/flag/4x3/au.svg"
                height="40px"
                width="40px"
              />
            </div>
            <div class="countryname">Australia</div>
          </div>
        </div>
      </div>
    </section>
     <!-- services section starts  -->

     <section class="services" id="services">
      <div class="heading">
        <span>our services</span>
        <h1>countless expericences</h1>
      </div>

      <div class="box-container">
        <div class="box" data-aos="zoom-in-up" data-aos-delay="150">
          <i class="fas fa-globe"></i>
          <h3>worldwide</h3>
          <p>
          The World Wide Web, commonly known as the Web, is an information system enabling documents and other web resources to be accessed over the Internet. Documents and downloadable 
          </p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="300">
          <i class="fas fa-newspaper"></i>
          <h3>News updates</h3>
          <p>
          Upgrading is the process of replacing a product with a newer version of the same product. I
          </p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="450">
          <i class="fa-solid fa-ticket"></i>
          <h3>Book tickets</h3>
          <p>
          Search flights, hotels and car hire in one place, and find the best time to book. No hidden fees. No hidden charges. Take the next step with Skyscanner. Airline Safety Scores.
          </p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="600">
          <i class="fa-solid fa-football"></i>
          <h3>Player Registrations</h3>
          <p>
          Search flights, hotels and car hire in one place, and find the best time to book. No hidden fees. No hidden charges. Take the next step with Skyscanner. Airline Safety Scores.
          </p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="750">
          <i class="fas fa-wallet"></i>
          <h3>affordable price</h3>
          <p>
          Search flights, hotels and car hire in one place, and find the best time to book. No hidden fees. No hidden charges. Take the next step with Skyscanner. Airline Safety Scores.
          </p>
        </div>
        <div class="box" data-aos="zoom-in-up" data-aos-delay="900">
          <i class="fa-regular fa-square-check"></i>
          <h3>Secure payment</h3>
          <p>
          Search flights, hotels and car hire in one place, and find the best time to book. No hidden fees. No hidden charges. Take the next step with Skyscanner. Airline Safety Scores.
          </p>
        </div>

        <div class="box" data-aos="zoom-in-up" data-aos-delay="1050">
          <i class="fas fa-headset"></i>
          <h3>24/7 support</h3>
          <p>
          Search flights, hotels and car hire in one place, and find the best time to book. No hidden fees. No hidden charges. Take the next step with Skyscanner. Airline Safety Scores.
          </p>
        </div>
      </div>
    </section>

    <!-- services section ends -->
    
    <!-- banner section starts  -->
  <section id="bookticket">
    <div class="banner">
      <div class="content" data-aos="zoom-in-up" data-aos-delay="300">
        <span>Book tickets</span>
        <h3>Let's Explore Matches</h3>
        <p>
        Search flights, hotels and car hire in one place, and find the best time to book. No hidden fees. No hidden charges. Take the next step with Skyscanner. Airline Safety Scores.
        </p>
        <a href="search-filter-matches.html" class="btnk">Book now</a>
      </div>
    </div>
  </section>

    <!-- banner section ends -->

    <!-- FOOTER -->

    <!-- footer section starts  -->

    <section class="footer" id="footer">
      <div class="box-container">
        <div class="box" data-aos="fade-up" data-aos-delay="150">
          <a href="#">
            <img src="img/logo-2.png" class="logo-next" />
          </a>
          <p>
          <?php
            echo $siteabout_r['site_about'];
            ?>
          </p>
          <div class="share">
            <a href=" <?php
            echo $contact_r['fb'];
            ?>" class="fab fa-facebook-f"></a>
            <a href=" <?php
            echo $contact_r['twitter'];
            ?>" class="fab fa-twitter"></a>
            <a href=" <?php
            echo $contact_r['instagram'];
            ?>" class="fab fa-instagram"></a>
            <a href=" <?php
            echo $contact_r['LinkedIn'];
            ?>" class="fab fa-linkedin"></a>
          </div>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="300">
          <h3>quick links</h3>
          <a href="#home" class="links">
            <i class="fas fa-arrow-right"></i> home
          </a>
          <a href="#about" class="links">
            <i class="fas fa-arrow-right"></i> about
          </a>
          <a href="#featured-events" class="links">
            <i class="fas fa-arrow-right"></i> featured events
          </a>
          <a href="#services" class="links">
            <i class="fas fa-arrow-right"></i> services
          </a>
          <a href="gallery.html" class="links">
            <i class="fas fa-arrow-right"></i> gallery
          </a>
          <a href="#bookticket" class="links">
            <i class="fas fa-arrow-right"></i>Book tickets
          </a>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="450">
          <h3>contact info</h3>
          <p><i class="fas fa-map"></i>   <?php
            echo $contact_r['address'];
            ?></p>
          <p><i class="fas fa-phone"></i>  <?php
            echo $contact_r['pn1'];
            ?></p>
          <p><i class="fas fa-envelope"></i>  <?php
            echo $contact_r['email'];
            ?></p>
          <p><i class="fas fa-clock"></i>  <?php
            echo $contact_r['openhours'];
            ?></p>
        </div>

        <div class="box" data-aos="fade-up" data-aos-delay="600">
          <h3>Contact Us</h3>
          <p>subscribe for latest updates</p>
          <form class="form-footer"action="index.php#footer" method="POST">
            <div>
            <input
              type="email"
              name="email"
              placeholder="enter your email"
              class="email"
              id="email"
              required
            />
            <textarea class="email" type="text" name="message" placeholder="enter your text" style="resize:none;" required></textarea>
            </div>
            <input type="submit" name="send" value="send message" class="btnk" />
          </form>
        </div>
      </div>
    </section>
<?php
   if(isset($_POST['send'])){
    $frm_data=filteration($_POST);
    $q="INSERT INTO `user_queries`(`email`, `message`) VALUES (?,?)";
    $values=[$frm_data['email'],$frm_data['message']];
    $res=insert($q,$values,'ss');
    if($res==1){
      // alert('success','Mail sent!');
    }
    else{
      // alert('error','Server Down! Try again later.');
    }
   }
?>
    <div class="credit">
      created by  ❤️<span> Uditi & Shreya</span>
    </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
      AOS.init({
        duration: 800,
        offset: 150,
      });
    </script>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <script src="scroll.js"></script>

    <script src="particles.js"></script>
    <script src="app.js"></script>
    <script src="accordion.js"></script>

    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
      integrity="sha512-DkPsH9LzNzZaZjCszwKrooKwgjArJDiEjA5tTgr3YX4E6TYv93ICS8T41yFHJnnSmGpnf0Mvb5NhScYbwvhn2w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TimelineMax.min.js"
      integrity="sha512-0xrMWUXzEAc+VY7k48pWd5YT6ig03p4KARKxs4Bqxb9atrcn2fV41fWs+YXTKb8lD2sbPAmZMjKENiyzM/Gagw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>

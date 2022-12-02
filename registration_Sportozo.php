<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>registration</title>
<style>
  *{
            padding : 0px;
            margin : 0px;

        }
    body{
       
    }
    .box{
        box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
        /* padding:4rem; */
        /* max-width: 20rem; */
        height : 325px;
    width : 350px;
    }
    .head{
      background-color: black;
      color:white;
      padding-inline:4rem;
      padding-top: 1rem;
      padding-bottom: 1rem;
      
    }
    form{
      padding: 2rem;
    }
    .registration_nav{
    background-color : rgb(240, 236, 236);
    height : 65px;

}
.form-content{
  display: flex;
  justify-content: center;
  align-items: center;
}
.img_reg_nav{
    margin: auto;
    padding-left : 20px;
    padding-top : 10px;
}
Button[type = "submit"]{
    color : white;
    background-color : green;
    border-radius : 7px;
    height : 35px;
    width : 130px;
    margin-top : 5px;
    font-size : 17px;
    border : none;
    margin-inline : auto;

}
button[type = "submit"]:hover{
    background-color : white;
    color : rgb(95, 92, 92);
    cursor : pointer;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;}
.col-auto{
  display : flex;
    justify-content : center;
    align-items : center;
}
.login_panel_head{
    background-color : black;
    color : white;
    display : flex;
    justify-content : center;
    align-items : center;
    font-size : 25px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight : bold;
    height : 60px;
}
</style>
</head>
<body>
<div class = "container_application">
        <div class = "registration_nav">
            <img class = "img_reg_nav" src = "logo-2.png" height = "55rem"/>
        </div>
    <div class="form-content">
     <div class="box mt-4" id="signup">
       <!-- <h1 class="head mb-4">Signup</h1> -->
       <div class = "login_panel_head">
                Signup panel

            </div>
        <form method="POST" action="login_registration.php" id="signup-form">
            <div class="form-group">
              <!-- <label for="exampleInputEmail1">Email address</label> -->
              <input type="email" name="USER_NAME" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
              <!-- <label for="exampleInputPassword1">Password</label> -->
              <input type="password" name="PASSWORD" class="form-control" style="margin-top:10px" id="exampleInputPassword1" placeholder="Password" required>
              <input type="password" name="CPASSWORD" class="form-control" style="margin-top:10px" id="exampleConfirmtPassword1" placeholder="Confirm password.." required>
            </div>
            <!-- <label for="chose">player/user</label> -->
            <!-- <select name="OPTIONS" class="form-control"style="margin-top:10px">
              <option>User</option>
              <option>Player</option>
            </select> -->
            <!-- <div class="input-group mb-3" style="margin-top:10px">
              <input type="file" accept=".jpg,.jpeg,.png,.webp" name="PROFILE" class="form-control" id="inputGroupFile02" required >
            </div> -->
            <div class="col-auto mt-4">
                <button type="submit" name="register" class="btn mb-3">Submit</button>
              </div>
              
          </form>
          
     </div>
    </div>
   
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- <script>
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
     
     
       let register_form=document.getElementById("signup-form");
       register_form.addEventListener("submit",(e)=>{
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
      </div>
</body> -->
      </div>
      </body>
</html>


?>
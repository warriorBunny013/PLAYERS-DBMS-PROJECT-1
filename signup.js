function setActive(){

}
let signup_form=document.getElementById("signup-form");
 signup_form.addEventListener("submit",(e)=>{
    e.preventDefault();
    let data=new FormData();

    data.append("email",signup_form.elements["email"].value);
    data.append("pass",signup_form.elements["pass"].value);
    data.append("cpass",signup_form.elements["cpass"].value);
    data.append("option",signup_form.elements["option"].value);
    data.append("file",signup_form.elements["file"].files[0]);
    data.append("register","");
    // data.append("option",signup_form.elements["option"].value);
    var myModal=document.getElementById("signup");
    var modal=bootstrap.Modal.getInstance(myModal);
    modal.hide();

    let xhr=new XMLHttpRequest();
    xhr.open("POST","ajax/login_register.php",true);
    xhr.onload=function(){
         
    }
    xhr.send(data);
 });  
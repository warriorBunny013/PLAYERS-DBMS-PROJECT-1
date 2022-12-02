<?php
    require("essentials.php");
    require("db.config.php");

    session_start();
    if((isset($_SESSION["adminLogin"]) && $_SESSION["adminLogin"]==true)){
        echo "<script>
            window.location.href='dashboard.php';
           </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login panel</title>
    <?php require("links.php")?>
    <style>
        div.login-form{
            position: absolute;
            top:20%;
            /* left:50%; */
            /* transform: translate((-50%,-50%)); */

            width:400px;
        }
       @media screen and (max-width: 415px) {
        div.login-form{

            width:340px;
        }
           }
        section{
            display:flex;
            justify-content: center;
        }
    </style>

</head> 
<body>
<section class="bg-light">
    <div class="login-form text-center rounded bg-white shadow overflow-hidden">
        <form method="POST">
            <h4 class="bg-dark text-white py-3">ADMIN LOGIN PANEL</h4>
            <div class="p-4">
               <div class="mb-3">
            <!-- <label for="exampleInputEmail1">Email address</label> -->
                  <input type="text" name="admin_name" class="form-control shadow-none text-center" placeholder="Admin Name" required>
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                 <div class="mb-4">
            <!-- <label for="exampleInputPassword1">Password</label> -->
                   <input type="password" name="admin_pass" class="form-control shadow-none text-center" placeholder="Password" required>
            <!-- <input type="password" name="cpass" class="form-control" style="margin-top:10px" id="exampleConfirmtPassword1" placeholder="Confirm password.." required> -->
            
                 </div>
                <button name="login" type="submit" class="btn text-white bg-success shadow-none">LOGIN</button>
            <div>
            
        </form>
    </div>
</section>
<?php
     if(isset($_POST["login"])){ 
        $frm_data=filteration($_POST);
        // echo"<h1>$frm_data[admin_name]</h1>";
        // echo"<h1>$frm_data[admin_pass]</h1>";
        // print_r($frm_data);
        $query="SELECT *FROM `admin_cred` WHERE `admin_name`=? AND `admin_pass`=?";
        $values=[$frm_data["admin_name"],$frm_data["admin_pass"]];
        $datatypes="ss";
        $res=select($query,$values,"ss");
        // print_r($res);
        if($res->num_rows==1){
            // echo"got user";
            $row=mysqli_fetch_assoc($res);
            // session_start();
            $SESSION["adminLogin"]=true;
            $SESSION["adminId"]=$row["sr_no"];
            redirect("dashboard.php");

        }
        else{
            alert("error","Login failed-Invalid Credentials!");
              
        }
    } 
    
    ?>
    <?php require("scripts.php")?>
</body>
</html>
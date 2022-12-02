
<!-- uploading passport photo -->
<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["passphoto"]["name"];
	$tempname = $_FILES["passphoto"]["tmp_name"];
	$folder = "./image/" . $filename;




	$db = mysqli_connect("localhost", "root", "", "sportozo");

	// Get all the submitted data from the form
	$sql = "INSERT INTO image (filename) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
        die("Passport Photo Not uploaded!");
	}
}
?>


<!-- Uploading signature -->
<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["sign_photo"]["name"];
	$tempname = $_FILES["sign_photo"]["tmp_name"];
	$folder = "./image_sign/" . $filename;




	$db = mysqli_connect("localhost", "root", "", "sportozo");

	// Get all the submitted data from the form
	$sql = "INSERT INTO image_sign (filename_sign) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		die("Failed To Upload signature image!");
        
	}
}
?>


<!-- uploading medical certificate -->
<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["med_photo"]["name"];
	$tempname = $_FILES["med_photo"]["tmp_name"];
	$folder = "./image_medical/" . $filename;




	$db = mysqli_connect("localhost", "root", "", "sportozo");

	// Get all the submitted data from the form
	$sql = "INSERT INTO image_medical (filename_med) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
	} else {
		die("Failed To Upload medical certificate!");
        
	}
}
?>


<!-- //uploading Uniqe Sports identification card -->
<?php
error_reporting(0);

$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {

	$filename = $_FILES["player_idphoto"]["name"];
	$tempname = $_FILES["player_idphoto"]["tmp_name"];
	$folder = "./image_id/" . $filename;




	$db = mysqli_connect("localhost", "root", "", "sportozo");

	// Get all the submitted data from the form
	$sql = "INSERT INTO image_id (filename_id) VALUES ('$filename')";

	// Execute query
	mysqli_query($db, $sql);

	// Now let's move the uploaded image into the folder: image
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
        header("Location: loginDestination.html");

	} else {
		die("Failed To Upload Sport's Identity Card!");
        
	}
}
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document upload</title>
    <style>
        *{
            margin : 0px;
            padding : 0px;

        }
        .registration_nav{
    background-color : white;
    height : 60px;
    background-color: #eee;

}
.img_reg_nav{
    padding : 5px;
    margin: auto;
    padding-left : 20px;
}
.Head_upload{
    color : rgb(3, 73, 3);
    /* padding-left : 25rem; */
    margin-top : 2rem;
    font-size : 1.5rem;
    margin-bottom : 2.5rem;
    display :flex;
    justify-content: center;
    align-items : center;

}
.p1{

    color :rgb(3, 73, 3);
    font-size : 1.15rem;
    margin-bottom : 1.3rem;
}
.p2{
    color : red;
    font-size : 0.95rem;
    padding-left: 0.5rem;
    margin-bottom : 0.3rem;
}
.column_name{
    border : 0.1rem solid rgb(216, 213, 213);
    background-color : rgb(225, 255, 225);
    display : grid;
    grid-template-columns : 5% 25% 25% auto;
    color : rgb(8, 78, 43);
    font-weight : bold;
    padding-left : 0.5rem;
    margin-top : 0.1rem;
    padding-bottom : 0.5rem;
    border-bottom : none;
    padding-top : 0.5rem;
    
    /* display : grid;
    grid-template-rows : auto auto auto auto; */




}
.Photograph, .Signature,.Verification_detail, .Medical_certificate{
    border : 0.1rem solid rgb(216, 213, 213);
   height : 10rem;
   /* padding : 0.5rem; */
   display : grid;

   grid-template-columns : 5% 25% 25% auto;
   border-bottom : none;
}
.big_box{
    display : grid;
    grid-template-rows : auto auto auto auto;
}
.r1,.r2,.r3,.r4{
    color : rgb(194, 6, 6);
    border-right : 0.08rem solid rgb(216,213,213);
    padding-top : none;
    padding-left : 0.5rem;
    padding-top : 1rem;
    background-color: #eee;
}
.v_1, .v_2, .v_3, .v_4,.s1,.s2,.s3, .s4,.d1, .d2,.d3, .d4{
    color : rgb(95, 94, 94);
    border-right : 0.08rem solid rgb(216, 213, 213);
    padding-top : none;
    padding-left : 0.5rem;
    padding-top : 1rem;
    background-color : #eee;
}
.button_upload{
    display : flex;
    justify-content : center;
    align-content : center;
    margin-top : 2rem;
    margin-bottom : 2rem;

}
Button[type = "Submit"]{
    color : white;
    font-size : 1rem;
    border : none;
    font-weight : bold;
    background-color : green;
    /* border : 2px solid white; */
    width : 8rem;
    height : 3rem;
    border-radius : 1rem;

}
Button[type = "Submit"]:hover{
    color : black;
    cursor : pointer;
    background-color: rgb(169, 246, 169);
    box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px inset, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px inset;
}



    </style>

</head>
<body>
    <div class = "Upload_container">
        <div class = "registration_nav">
            <img class = "img_reg_nav" src = "logo-2.png" height = "45rem">
        </div>

        <div class = "Head_upload">
            <h2>Image Upload</h2>
        </div>
        <div class = "p2">*Please Upload the following Scanned files carefully.</div>
        <form action = "" method = "POST" enctype="multipart/form-data">
        <div class = "big_box">
        <div class = "column_name">
            <div class = "c1">
             S.No.
            </div>
            <div class = "c2">
                Required Document
               </div>
               <div class = "c3">
                Document Specification
               </div>
               <div class = "c4">
                Upload
               </div></div>
        <div class = "Photograph">
            <div class = "s1">1</div>
            <div class = "r1">Photograph(with 80% face without mask)</div>
            <div class = "v_1"><div class = "v1">Document Format: JPG </div>
                                <div class = "v1">Min_size(KB) : 10</div>
                                <div class = "v2">Max Size(KB) :200</div>
        </div>
        
           <div class = "d1"> <input type = "file" id = "photo" name = "passphoto"></div>

        </div>
        <div class = "Signature">
            <div class = "s2">2</div>
            <div class = "r2">Signature</div>
            <div class = "v_2">
                  <div class = "v1">Document Format : JPG</div>
                  <div class = "v2">Min Size(KB) : 4</div>
                <div class = "v3">Max Size(KB) : 200</div>

            </div>
        
           <div class = "d2"><input type = "file" id = "sign" name = "sign_photo"></div>
        </div>
        <div class = "Medical_certificate">
            <div class = "s3">3</div>
            <div class = "r3">Medical Certificate</div>
            <div class = "v_3">
                <div class = "v1">Document Format : PDF</div>
                <div class = "v2">Min Size(KB) : 50</div>
              <div class = "v3">Max Size(KB) : 100</div>

          </div>
      
         <div class = "d3"><input type = "file" id = "medical" name = "med_photo"></div>
            </div>
        <div class = "Verification_detail">
            <div class = "s4">4</div>
            <div class = "r4">Player's Identity Card</div>
            <div class = "v_4">
                <div class = "v1">Document Format : PDF</div>
                <div class = "v2">Min Size(KB) : 50</div>
              <div class = "v3">Max Size(KB) : 300</div>

          </div>
      
            <div class = "d4"><input type = "file" id = "player" name = "player_idphoto"></div></div>

            <div class = "button_upload">
                <Button type = "Submit" name = "upload" >Upload

                </Button>
            </div>



    </form></div>

    </div>
	<!-- <div id="display-image">
		 <?php
		$query = " select * from image ";
		$result = mysqli_query($db, $query);

		while ($data = mysqli_fetch_assoc($result)) {
		?>
			<img src="./image/<?php echo $data['filename']; ?>">

		<?php
		}
		?>
	</div> -->
</body>

</html>

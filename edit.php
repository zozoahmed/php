<?php

if(isset($_POST['update'])){
  $id = $_GET ['ID'];
  $name = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];
  $file_image = $_POST["file_image"];
  $gender = $_POST["gender"];
  $country = $_POST["country"];

$sql = "update users set fname	='$name', lname='$lname', email= '$email',  password=$password, confirm_password='$confirm_password', file_image='$file_image', gender='$gender', country	='$country' where ID=$id";
$edit = mysqli_query($mysqli, $sql);

}

include_once ("confg.php");
$id = $_GET ['ID'];
$sql = "select * from myinfo where ID = $id";
$result = mysqli_query($mysqli,$sql);
$user = mysqli_fetch_assoc($result);
// var_dump($user);
// var_dump($name);
$name = $user["fname"];
$lname = $user["lname"];
$email = $user["email"];
$password = $user["password"];
$confirm_password = $user["confirm_password"];
$file_image = $user["file_image"];
$gender = $user["gender"];
$country = $user["country"];

 

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
 <title>Bootstrap Simple Login Form with Blue Background</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 <style>
 body {
 	color: #fff;
 	background: #ffffff;
 	font-family: 'Roboto', sans-serif;
 }
 .form-control {
 	height: 41px;
 	background: #f2f2f2;
 	box-shadow: none !important;
 	border: none;
 }
 .form-control:focus {
 	background: #e2e2e2;
 }
 .form-control, .btn {
 	border-radius: 3px;
 }
 .signup-form {
 	width: 400px;
 	margin: 30px auto;
 }
 .signup-form form {
 	color: #999;
 	border-radius: 3px;
 	margin-bottom: 15px;
 	background: #fff;
 	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
 	padding: 30px;
 }
 .signup-form h2  {
 	color: #333;
 	font-weight: bold;
 	margin-top: 0;
 }
 .signup-form hr  {
 	margin: 0 -30px 20px;
 }
 .signup-form .form-group {
 	margin-bottom: 20px;
 }
 .signup-form input[type="checkbox"] {
 	margin-top: 3px;
 }
 .signup-form .row div:first-child {
 	padding-right: 10px;
 }
 .signup-form .row div:last-child {
 	padding-left: 10px;
 }
 .signup-form .btn {
 	font-size: 16px;
 	font-weight: bold;
 	background: #3598dc;
 	border: none;
 	min-width: 140px;
 }
 .signup-form .btn:hover, .signup-form .btn:focus {
 	background: #2389cd !important;
 	outline: none;
 }
 .signup-form a {
 	color: #fff;
 	text-decoration: underline;
 }
 .signup-form a:hover {
 	text-decoration: none;
 }
 .signup-form form a {
 	color: #3598dc;
 	text-decoration: none;
 }
 .signup-form form a:hover {
 	text-decoration: underline;
 }
 .signup-form .hint-text  {
 	padding-bottom: 15px;
 	text-align: center;
 }
 </style>
 </head>
 <body>

  
 <div class="signup-form">
     <form action="add.php" method="post" oninput='up2.setCustomValidity(up2.value != up.value ? "Passwords do not match." : "")'>

 		<h2>Edit Regestraion</h2>
 		<p>Please fill in this form to create an account!</p>
 		<hr>
         <div class="form-group">
 			<div class="row">
 				<div class="col"><input type="text" class="form-control" name="first_name" placeholder="First Name" required="required" value=" <?php echo $name; ?>" ></div>
 				<div class="col"><input type="text" class="form-control" name="last_name" placeholder="Last Name" required="required" value=" <?php echo $lname; ?>  " ></div>
 			</div>
         </div>
         <div class="form-group">
         	<input type="email" class="form-control" name="email" placeholder="Email" required="required" value=" <?php  echo $email;  ?>  "   >
         </div>

         <p>
         <label for="password1">Password:</label>
         <!-- <input id="password1" type=password required name=up> -->
         <input type="password" id="psw" name="up" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required value=" <?php echo $password; ?> " >

         <p>
         <label for="password2">Confirm password:</label>
         <input id="password2" type=password name=up2 value=" <?php echo $confirm_password; ?> ">
         <p>



         <div class="form-group">
           upload a pic :
           <input type="file" name="myImage" accept="image/png, image/gif, image/jpeg" value="<?php echo $file_image; ?>" required />
             </div>

             <div class="form-group">
               <input type="radio" id="male" name="gender" value="male" required="required value="<?php echo $gender; ?>" >
                 <label for="male">male</label><br>
                 <input type="radio" id="female" name="gender" value="female">
                 <label for="female">female</label><br>
     		</div>



   <div class="form-group">
      <select name="country" id="country" value="<?php echo $country; ?>"  >
           <option value="Egypt">Egypt</option>
           <option value="Spain">Spain</option>
           <option value="France">France</option>
           <option value="England">England</option>
      </select>
   </div>



         <div class="form-group">
 			<label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
 		</div>
 		<div class="form-group">
             <button type="submit" Name= "update" class="btn btn-primary btn-lg">Edit</button>
         </div>
     </form>





 </body>
 </html>

<?php
// Always start this first
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "mydiarydb";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
// Check connection
if(!$conn){
    die("Connection failed: ".mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$qz = "SELECT * FROM signup where email='".$email."' and password='".$password."'" ;
$result = mysqli_query($conn,$qz);
if (mysqli_num_rows($result) > 0)

  { 
     // make session variables
    $_SESSION['email'] = $email;
  header("Location: user.php");
    } 
else{ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>MY DIARY - GUEST</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="calendarstyle.css">
<link rel="stylesheet" href="web.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
body, html {
    height: 100%;
    line-height: 1.8;
}
/* Full height image header */
.bgimg-1 {
    background-position: right;
    background-size: cover;
    background-image: url(394482-PCGX1X-951.jpg);
    min-height: 100%;
}
.w3-bar .w3-button {
    padding: 16px;
}
input, datalist, textarea, option {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input.hover {
    border: 3px solid 555;
}
    #about,#contact,#blog,#login,#signup{
        display: none;
    }
    sidebar {
        display: none;
    }

///
.w3-bar .w3-button {
    padding: 16px;
}
.top-row a {
  text-decoration: none;
  color: #fff;
  transition: .5s ease;
}
.top-row a:hover {
  color: #000000;
}

.form {
  position:relative;
  padding: 40px;
  max-width: 600px;
  margin: 10px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
  transition: .5s ease;
}

.form:hover {
	box-shadow: 0px 0px 40px 16px #D3D3D3;
	}

h1 {
  text-align: center;
  color: #000000;
  font-weight: 300;
  margin: 0 0 40px;
}

label {
  position: absolute;
  transform: translateY(6px);
  left: 15px;
  color:white;
  transition: all 0.25s ease;
  pointer-events: none;
  font-size: 22px;
  border-radius:5px;
}


label.active {
  transform: translateY(50px);
  left: 2px;
  font-size: 14px;
  border-radius:5px;
}
label.active .req {
  opacity: 0;
}

label.highlight {
  color: #000;
  margin-top:-10px;
}

.top-row input {
  font-size: 22px;
  display: block;
  width: 100%;
  height: 100%;
  padding: 5px 10px;
  background: none;
  background-image: none;
  border: 1px solid #fff;
  color: #A9A9A9;
  border-radius: 0;
  transition: border-color .25s ease, box-shadow .25s ease;
}
input:focus{
  outline: 0;
  border-color: #000;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
  border-radius:5px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.button {
  border: 0;
  outline: none;
  border-radius: 5px;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: black;
  color: #ffffff;
  transition: all 0.5s ease;
}
.button:hover, .button:focus {
  background: #FFC0CB;
}

.button-block {
  display: block;
  width: 100%;
}
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 100px;
   border-radius: 50%;
}
.mid{  
text-align: center;

.forgot {
  margin-top: -20px;
  
  margin-bottom:10px;
}
::placeholder{
color:#A9A9A9;}
</style>
</head>
<body class='bgimg-1'>



    <div class="wrapper" style="min-height: 100%;" >
        
        <main>
        <div class='form w3-white'>
            <h1>Wrong UserName Or Password</h1>
            <p><a  href='guest.php'class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Go Back to Main Page</a></p>
            </div>
 
      </main>

        
    </div> 


</body>
</html>

<?php
   echo("Wrong Username or Password");
}
mysqli_close($conn);


?>

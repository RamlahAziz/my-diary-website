<?php
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
//if signup was clicked
if (isset($_POST['form_signup'])){
    
    $formfname=$_POST['fname'];
    $formlname=$_POST['lname'];
    $formusername=$_POST['username'];
    $formemail=$_POST['email'];
    $formpassword=$_POST['password'];
    $formbirthday=$_POST['birthday'];
    echo $formfname;
    echo $formlname;
    echo $formusername;
    echo $formemail;
    echo $formpassword;
    echo $formbirthday;

    if ($query = $conn->prepare("INSERT INTO signup (fname,lname,username,email,password,birthday) VALUES ('$formfname','$formlname','$formusername','$formemail','$formpassword','$formbirthday')"))
    {
        
        $query->execute();
        $query->close();
    }
    // show an error if the query has an error
    else
    {
    echo "ERROR: Could not prepare SQL statement.";
    }

    // redirect the user
    header("Location: user.php");
    exit;
} 
else{
    echo "form was not submitted as values were not submitted";
}
?>
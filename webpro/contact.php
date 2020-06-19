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
//if submit was clicked
if (isset($_POST['form_submitted'])){
    $formcontactoption=$_POST['contactoption'];
    $formfname=$_POST['fname'];
    $formlname=$_POST['lname'];
    $formtext=$_POST['textarea'];

    if ($query = $conn->prepare("INSERT INTO contact (contactoption, fname, lname, textarea) VALUES (?,?,?,?)"))
    {
        $query->bind_param("ssss", $formcontactoption, $formfname, $formlname, $formtext);
        $query->execute();
        $query->close();
    }
    // show an error if the query has an error
    else
    {
    echo "ERROR: Could not prepare SQL statement.";
    }

    // redirec the user
    header("Location: guest.php");
    exit;
} 

elseif(isset($_POST['user_form_submitted'])){
    $formcontactoption=$_POST['contactoption'];
    $formfname=$_POST['fname'];
    $formlname=$_POST['lname'];
    $formtext=$_POST['textarea'];
    echo $formcontactoption;
    echo $formfname;
    echo $formlname;
    echo $formtext;
    if ($query = $conn->prepare("INSERT INTO contact (contactoption, fname, lname, textarea) VALUES (?,?,?,?)"))
    {
        $query->bind_param("ssss", $formcontactoption, $formfname, $formlname, $formtext);
        $query->execute();
        $query->close();
    }
    // show an error if the query has an error
    else
    {
    echo "ERROR: Could not prepare SQL statement.";
    }
    // redirec the user
    header("Location: user.php");
    exit;
}

else{
    echo "form was not submitted as values were not submitted";
}

?>

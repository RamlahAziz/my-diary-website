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
if (isset($_POST['diary_submitted'])){
    $formdate = strtotime($_POST['date']);
    $formdate = date('Y-m-d H:i:s', $formdate);
    $formday=$_POST['day'];
    $formtitle=$_POST['title'];
    $formdiarytext=$_POST['diarytext'];
    $formdiarytext=htmlspecialchars($formdiarytext);
    echo $formdate;
    echo $formday;
    echo $formtitle;
    echo $formdiarytext;
    if ($query = mysqli_query($conn,"INSERT INTO diaryentries (date, day, title, diarytext) VALUES ('$formdate','$formday','$formtitle','$formdiarytext')"))
    {
        echo 'inserted';
    }
    // show an error if the query has an error
    else
    {
    echo "ERROR: Could not prepare SQL statement.";
    }

    // redirec the user
    mysqli_close($conn);
    header("Location: user.php");
    exit;
}

else{
    echo "form was not submitted as values were not submitted";
}
mysqli_close($conn);
?>

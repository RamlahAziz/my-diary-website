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

    if (isset($_SESSION['email']))
    {
        $email = $_SESSION['email'];
        if ($delete = $conn->prepare("DELETE FROM signup WHERE email = ? LIMIT 1"))
        {
            $delete->bind_param("s",$email);
            $delete->execute();
            $delete->close();
        }
        else{
            echo "ERROR: could not prepare SQL statement.";
        }
    }
    else
        echo "could not get email";

    session_destroy();
    mysqli_close($conn);
    header("location: guest.php");
?>

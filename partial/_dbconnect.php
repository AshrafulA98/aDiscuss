<?php 
 // Script to connect with the database

 $serverName = "localhost";
 $userName = "root";
 $password = "";
 $databaseName = "adiscuss";

 // Create the connection 
$conn = mysqli_connect($serverName, $userName, $password, $databaseName);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    // echo "Database connection is succssful";
}

?>
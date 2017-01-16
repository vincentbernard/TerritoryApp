<?php
$servername = "localhost";
$username = "vbernard";
$password = "Jhmy8frZ#";

// Create connection
$db = new mysqli($servername, $username, $password);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

$query = "SELECT publisherid,firstname,lastname FROM territorytracker.publisher WHERE IsActive='TRUE'";
$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo '<a href="#" onclick="territoryByPublisher(' .$row[0] .  ')">' .$row['firstname'] . '</a>' ;
}    
   
?> 

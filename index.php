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
?>
<html>
<head lang = "en-US">
<meta charset = "UTF-8">
<title>TerritoryTracker</title>
 <link rel = "stylesheet"
   type = "text/css"
   href = "territory.css" />
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="territory.js"></script>
</head>
<body>
<div class="dropdown">
  <button onclick="mySearchFunction()" class="dropbtn" id="searchbtn">Search By...</button>

  <div id="mySearchDropdown" class="dropdown-content">
    <a href="#" onclick="updateCriteria(1)">Publisher</a>
    <a href="#" onclick="updateCriteria(2)">Area</a>
    <a href="#" onclick="updateCriteria(3)">Last Worked</a>
  </div>
</div>
<div class="dropdown">
  <button onclick="myCriteriaFunction()" class="dropbtn" id="criteriabtn">Criteria</button>
  <div id="myCriteriaDropdown" class="dropdown-content">
  <?php
//Step2
$query = "SELECT firstname FROM territorytracker.publisher";
//mysqli_query($db, $query) or die('Error querying database.');


$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo '<a href="#" onclick="">' .$row['firstname'] . '</a>' ;
}    
    
?> 
  </div>
</div>

   
</body>
</html>

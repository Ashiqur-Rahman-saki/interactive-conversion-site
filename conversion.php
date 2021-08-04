<?php

require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}
$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit1'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_mass($from_value, $from_unit, $to_unit);
}

$mass_options = array(
  "ounces",
  "pounds",
  "stones",
  "long tons",
  "short tons",
  "milligrams",
  "grams",
  "kilograms",
  "metric tonnes"
);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Length</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
      <style>
    .dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: Black;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}
.dropdown {
  font-size: 16px;
  border: none;
  outline: none;
  color: Black;
  padding: 14px 16px;
  background-color: red;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}
/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}
    .dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}
ul li{
  list-style: none;
  display: inline-block;
  }
  ul li a {
    text-decoration: none;
    margin-right: 10px;
  }
  </style>
  </head>
  <body>
    <h1>page 2 [Conversion Rate]</h1><br />
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="conversion.php">Coversion Rate</a></li>
    <li><a href="History.php">History</a></li>
  </ul>
  <h4>Conversion site</h4>
  <div class="dropdown">
    <button class="dropbtn"><a href="length.php">Length</a>
      <!-- <i class="fa fa-caret-down"></i> -->
    </button>
    <!-- <div class="dropdown-content">
      
      <a href="mass.php">Mass</a>
      

    </div> -->
    <button class="dropbtn"><a href="mass.php">Mass</a>
     
      <!-- <i class="fa fa-caret-down"></i> -->
    </button>
    <!-- <div class="dropdown-content">
      <a href="length.php">Length</a>
      

    </div> -->
  </div>
  </body>
</html>

<?php

require_once('includes/functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {

  if( isset($_POST['from_value']) && is_numeric($_POST['from_value'])){
    $from_value = $_POST['from_value'];
    $from_unit = $_POST['from_unit'];
    $to_unit = $_POST['to_unit'];
    
    $to_value = convert_length($from_value, $from_unit, $to_unit);
  }else{
    echo "Enter a numeric number.";
  }

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
    <title>Convert Mass</title>
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
    <li><a href="Conversion.php">Coversion Rate</a></li>
    <li><a href="History.php">History</a></li>
  </ul>
  <h4>Conversion site</h4>
  <div class="dropdown">
    <button class="dropbtn">Select a category
      <!-- <i class="fa fa-caret-down"></i> -->
    </button>
    <div class="dropdown-content">
      <a href="length.php">Length</a>
      <a href="mass.php">Mass</a>
      

    </div>
  </div><br /><br /><br /><br />

    <div id="main-content">

      <h1>Convert Mass</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="text" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <?php
            foreach($mass_options as $unit) {
              $opt = optionize($unit);
              echo "<option value=\"{$opt}\"";
              if($from_unit == $opt) { echo " selected"; }
              echo ">{$unit}</option>";
            }
            ?>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="text" name="to_value" value="<?php echo float_to_string($to_value); ?>" />&nbsp;
          <select name="to_unit">
            <?php
            foreach($mass_options as $unit) {
              $opt = optionize($unit);
              echo "<option value=\"{$opt}\"";
              if($to_unit == $opt) { echo " selected"; }
              echo ">{$unit}</option>";
            }
            ?>
          </select>
          
        </div>
        
        <input type="submit" name="submit" value="Submit" />
      </form>
  
      <br />
      <a href="index.php">Close</a>
      
    </div>
  </body>
</html>

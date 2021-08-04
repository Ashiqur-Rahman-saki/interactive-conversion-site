<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Conversion site</title>
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
	<h1>page 3 [History]</h1><br />
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="Conversion.php">Coversion Rate</a></li>
		<li><a href="history.php">History</a></li>
	</ul>
	<h4>Conversion site</h4>
  <h4>History is establishing</h4>

	<div class="dropdown">
    <button class="dropbtn">Go back to
      <!-- <i class="fa fa-caret-down"></i> -->
    </button>
    <div class="dropdown-content">
      <a href="Home.php">Home</a>
      <a href="Conversion.php">conversion Rate</a>
      

    </div>
  </div>
	
</body>
</html>
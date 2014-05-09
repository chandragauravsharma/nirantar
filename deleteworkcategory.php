
<?php
    
    $host="localhost"; // Host name 
    $username="root"; // Mysql username 
    $password="shanti.ram123"; // Mysql password 
    $db_name="nirantar"; // Database name 
    $tbl_name="workcategorydetails"; // Table name 

    // Connect to server and select databse.
    $connection = mysql_connect($host, $username, $password) or die("cannot connect to mysql" . mysql_error());
    mysql_select_db($db_name) or die("cannot connect to database" . mysql_error()); 
	
	$id = $_POST['id'];
	
	$sql = "DELETE FROM $tbl_name WHERE workCategoryId = '$id'";
	$result = mysql_query($sql) or die('Could not delete data: ' . mysql_error());
	
	
    //closing mysql connection
    mysql_close($connection);
	if($result)
	{echo "yes";}
	
?>


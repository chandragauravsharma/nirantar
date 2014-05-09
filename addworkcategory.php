                    <?php
               
                        $host="localhost"; // Host name 
                        $username="root"; // Mysql username 
                        $password="shanti.ram123"; // Mysql password 
                        $db_name="nirantar"; // Database name 
                        $tbl_name="workcategorydetails"; // Table name 

                        // Connect to server and select databse.
                        $connection = mysql_connect($host, $username, $password) or die("cannot connect to mysql" . mysql_error());
                        mysql_select_db($db_name) or die("cannot connect to database" . mysql_error()); 

                        // parameters sent from form 
						$val = $_POST['val'];
						
                        $category=trim($val[0]); 
                        
 
                        // To protect MySQL injection (more detail about MySQL injection)
                        $category = stripslashes($category);
                        
					 
                        $category = mysql_real_escape_string($category);
                        
						
						$sql = "INSERT INTO $tbl_name".
                               "(workCategory)".
                               "VALUES('$category')";

                     
                        $result=mysql_query($sql) or die('Could not enter data: ' . mysql_error());
                        
                        //closing mysql connection
                        mysql_close($connection);
					    
						if($result)
						{echo "yes";}
					
                ?>
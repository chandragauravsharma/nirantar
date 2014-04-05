                    <?php
               
                        $host="localhost"; // Host name 
                        $username="root"; // Mysql username 
                        $password="shanti.ram123"; // Mysql password 
                        $db_name="nirantar"; // Database name 
                        $tbl_name="customerdetails"; // Table name 

                        // Connect to server and select databse.
                        $connection = mysql_connect($host, $username, $password) or die("cannot connect to mysql" . mysql_error());
                        mysql_select_db($db_name) or die("cannot connect to database" . mysql_error()); 

                        // parameters sent from form 
						$val = $_POST['val'];
						
                        $lastname=trim($val[0]); 
                        $firstname=trim($val[1]);
					    $gender=trim($val[2]);
						$address=trim($val[3]); 
                        $city=trim($val[4]);
					    $phone=trim($val[5]);
						$mobile=trim($val[6]); 
                        $email=trim($val[7]);
					    $additionaldetails=trim($val[8]);
 
                        // To protect MySQL injection (more detail about MySQL injection)
                        $lastname = stripslashes($lastname);
                        $firstname = stripslashes($firstname);
						$city = stripslashes($city);
                        $phone = stripslashes($phone);
						$mobile = stripslashes($mobile);
                        $email = stripslashes($email);
					 
                       // $lastname = mysql_real_escape_string($lastname);
                        $firstname = mysql_real_escape_string($firstname);
						//$address = mysql_real_escape_string($address);
                        //$city = mysql_real_escape_string($city);
						$phone = mysql_real_escape_string($phone);
                        $mobile = mysql_real_escape_string($mobile);
						$email = mysql_real_escape_string($email);
                        $additionaldetails = mysql_real_escape_string($additionaldetails);
						
						$sql = "INSERT INTO $tbl_name".
                               "(custLastName, custFirstName, custAddress, custCity, custPhone, custMobile, custEmail, custOtherDetails, custGender)".
                               "VALUES('$lastname', '$firstname', '$address', '$city', '$phone', '$mobile', '$email', '$additionaldetails', '$gender')";

                     
                        $result=mysql_query($sql) or die('Could not enter data: ' . mysql_error());
                        
                        //closing mysql connection
                        mysql_close($connection);
					    
						if($result)
						{echo "yes";}
					
                ?>
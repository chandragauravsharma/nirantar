<?php include 'header.php' ?>

<div class="container">
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div id="loginError" style="text-align:center; display:none"><font color="red">Incorrect user name or password</font></div>


                <!--php code for login verification-->
                <?php
                if (isset($_POST['submitbutton'])) 
                {
                     $host="localhost"; // Host name 
                     $username="root"; // Mysql username 
                     $password="shanti.ram123"; // Mysql password 
                     $db_name="nirantar"; // Database name 
                     $tbl_name="admindetails"; // Table name 

                     // Connect to server and select databse.
                     $connection = mysql_connect($host, $username, $password) or die("cannot connect to mysql" . mysql_error());
                     mysql_select_db($db_name) or die("cannot connect to database" . mysql_error()); 

                     // username and password sent from form 
                     $myusername=trim($_POST['username']); 
                     $mypassword=trim($_POST['password']); 
 
                     // To protect MySQL injection (more detail about MySQL injection)
                     $myusername = stripslashes($myusername);
                     $mypassword = stripslashes($mypassword);
                     $myusername = mysql_real_escape_string($myusername);
                     $mypassword = mysql_real_escape_string($mypassword);
                     $sql="SELECT * FROM $tbl_name WHERE userName = '" . $myusername . "' and password = '" . $mypassword . "'";
                     $result=mysql_query($sql);

                     //closing mysql connection
                     mysql_close($connection);

                     // Mysql_num_row is counting table row
                     $count=mysql_num_rows($result);
    
                     // If result matched $myusername and $mypassword, table row must be 1 row
                     if($count==1)
                    {
                         header("location: main.php");
                         exit();
                    }
                     else
                    {
                         echo "<script type = 'text/javascript'> $('#loginError').show(); </script>";
                    }

                }
                ?>
                <!--php code ended here-->


            <div class="panel-heading">
                <h3 class="panel-title">Please Log In</h3>
            </div>
            <div class="panel-body">
                <form role="form" action="index.php" method="post">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="User Name" name="username" type="text" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                          
                            <button type="submit" name="submitbutton" class="btn btn-lg btn-success btn-block">Login</button>
                            
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php include 'footer.php' ?>


    
       
   

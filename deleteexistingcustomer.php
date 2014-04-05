<?php include 'header.php' ?>

<nav class="navbar-default navbar-static-side" role="navigation" style="background-color:#F0F8FF">
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
					
					<!--customer details here-->
                    <li>
                        <a href="#"><i class="fa fa-user fa-fw"></i>Customer<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addnewcustomer.php">Add New</a>
                            </li>
                            <li>
                                <a href="deleteexistingcustomer.php">Delete Existing</a>
                            </li>							
							<li>
                                <a href="listallcustomers.php">List All Customers</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
					<!--customer details ended here-->
					
					
                    <li>
                        <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="panels-wells.html">Panels and Wells</a>
                            </li>
                            <li>
                                <a href="buttons.html">Buttons</a>
                            </li>
                            <li>
                                <a href="notifications.html">Notifications</a>
                            </li>
                            <li>
                                <a href="typography.html">Typography</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Second Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Item</a>
                                    </li>
                                </ul>
                                <!-- /.nav-third-level -->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="blank.html">Blank Page</a>
                            </li>
                            <li>
                                <a href="login.html">Login Page</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
                <!-- /#side-menu -->
            </div>
            <!-- /.sidebar-collapse -->
        </nav>
        <!-- /.navbar-static-side -->
 






 
 
 
 
 
 
 
 
 







 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Delete Existing Customer</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-warning">
                        <div class="panel-heading">
                            Please Search Existing Customer for Permanent Deletion
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form">
									    <div class="form-group form-inline">
                                            <label>Search Criteria</label> &nbsp;
                                            <select class="form-control" id="searchcriteria" autofocus>
                                                <option value="name">Name</option>
                                                <option value="city">City</option>
                                                <option value="mobile">Mobile</option>
                                                <option value="email">Email</option>
                                                <option value="gender">Gender</option>
												
                                            </select>
											<p class="help-block">(Partial search is supported. e.g. can enter 'jai' for 'jaipur' in city wise search)</p>
                                        </div>
                                        <div class="form-group form-inline" id="custname">
                                            <label>Enter Name</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input class="form-control" placeholder="Last Name" name="lastname" id="custlastname" type="text">
											
											<input class="form-control" placeholder="First Name" name="firstname" id="custfirstname" type="text">
											<p class="help-block">(Enter either last or first name, or both)</p>
                                        </div>
										<div class="form-group" style="display:none" id="custgender">
                                            <label>Select Gender</label> &nbsp;
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInlineMale" value="male" checked>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optionsRadiosInline" id="optionsRadiosInlineFemale" value="female">Female
                                            </label>
											<p class="help-block">(Customers of selected gender will be listed)</p>
                                        </div>
										
										<div class="form-group form-inline" style="display:none" id="custcity">
                                            <label>Enter City</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input class="form-control" name="city" id="custcity" type="text">
											<p class="help-block">(City wise search)</p>
                                        </div>
										
										<div class="form-group form-inline" style="display:none" id="custmobile">
                                            <label>Enter Mobile</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input class="form-control" placeholder="10 digits only" name="mobile" id="custmobile" type="text" maxlength="10">
											<p class="help-block">(Can enter few digits of mobile number)</p>
                                        </div>
										<div class="form-group form-inline" style="display:none" id="custemail">
                                            <label>Enter Email</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<input class="form-control" placeholder="example@abc.com" name="email" id="custemail" type="text">
											<p class="help-block">(Can enter partial email)</p>
                                        </div>
										
										 <button type="button" class="btn btn-info" name="custdeletesearchbutton" id="custdeletesearchbuttonid">Search</button> 
                                    </form>
									
									
									<form role="form" action="deleteexistingcustomer.php" method="get">
									    
                                        <button type="submit" class="btn btn-warning" style="display:none" name="custdeletebutton" id="custdeletebuttonid">Delete</button> 
                                    </form>
									
									
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->




		
		
		
<!--script to show/hide search divs-->
 <script type="text/javascript" language="javascript">
 $("#searchcriteria").change(function() {
    if($('#searchcriteria').val() == "city")
	{$('#custname').hide();
	 $('#custgender').hide();
	 $('#custmobile').hide();
	 $('#custemail').hide();
	 $('#custcity').show();}
	 else if($('#searchcriteria').val() == "gender")
	{$('#custname').hide(); 
	 $('#custmobile').hide();
	 $('#custemail').hide();
	 $('#custcity').hide();
	 $('#custgender').show();}
	 else if($('#searchcriteria').val() == "mobile")
	{$('#custname').hide();  
	 $('#custemail').hide();
	 $('#custcity').hide();
	 $('#custgender').hide();
	 $('#custmobile').show();}
	 else if($('#searchcriteria').val() == "email")
	{$('#custname').hide();  
	 $('#custcity').hide();
	 $('#custgender').hide();
	 $('#custmobile').hide();
	 $('#custemail').show();}
	 else
	 {$('#custcity').hide();
	 $('#custgender').hide();
	 $('#custmobile').hide();
	 $('#custemail').hide();
	 $('#custname').show();}
	  
});
 </script>







<?php include 'footer.php' ?>
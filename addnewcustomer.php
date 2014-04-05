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
                    <h4 class="page-header">Add New Customer</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Please Enter Customer Details (* marked mandatory fields)
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
								    <div id="mandatoryFieldError" style="text-align:left; display:none"><font color="red">Some * marked mandatory field left empty (please fill and submit again)</font></div>
									<div id="dataEntrySuccess" style="text-align:left; display:none"><font color="green">Success: Data successfully entered into database!!!</font></div>
									<div id="dataEntryFailure" style="text-align:left; display:none"><font color="green">Error: Could not enter data into database. Please try again later.</font></div>
									<br>
									
                                    <form role="form" id="addcustform">
                                        <div class="form-group form-inline">
                                            <label>Name<label style="color:red"><font size="4">*</font></label></label> &nbsp;&nbsp;
                                            <input class="form-control" placeholder="Last Name" name="lastname" id="custlastname" type="text" onchange="validateLastName()" autofocus>
											
											<input class="form-control" placeholder="First Name" name="firstname" id="custfirstname" type="text" onchange="validateFirstName()">
											<button type="button" class="btn btn-success btn-circle" style="visibility:hidden" id="rightnamebutton" disabled><i class="fa fa-check"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-circle" style="visibility:hidden" id="wrongnamebutton" disabled><i class="fa fa-times"></i>
                                            </button>
											<p class="help-block">(Only 'first name' is mandatory)</p>
                                        </div>
										<div class="form-group">
                                            <label>Gender<label style="color:red"><font size="4">*</font></label></label> &nbsp;
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInlineMale" value="MALE" checked>Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="gender" id="optionsRadiosInlineFemale" value="FEMALE">Female
                                            </label>
                                        </div>
										<div class="form-group">
                                            <label>Address</label>
											
                                            <textarea class="form-control" placeholder="Customer Address (max 500 characters)" name="address" id="custaddress" rows="3" onchange="validateAddress()"></textarea>
                                        </div>
										<div class="form-group form-inline">
                                            <label>City<label style="color:red"><font size="4">*</font></label></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input class="form-control" name="city" id="custcity" type="text" onchange="validateCity()">
                                        </div>
										<div class="form-group form-inline">
                                            <label>Phone</label> &nbsp;&nbsp;
                                            <input class="form-control" placeholder="only digits"name="phone" id="custphone" type="text" onchange="validatePhone()">
											<button type="button" class="btn btn-success btn-circle" style="visibility:hidden" id="rightphonebutton" disabled><i class="fa fa-check"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-circle" style="visibility:hidden" id="wrongphonebutton" disabled><i class="fa fa-times"></i>
                                            </button>
                                        </div>
										<div class="form-group form-inline">
                                            <label>Mobile</label> &nbsp;
                                            <input class="form-control" placeholder="10 digits only" name="mobile" id="custmobile" type="text" maxlength="10" onchange="validateMobile()">
											<button type="button" class="btn btn-success btn-circle" style="visibility:hidden" id="rightmobilebutton" disabled><i class="fa fa-check"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-circle" style="visibility:hidden" id="wrongmobilebutton" disabled><i class="fa fa-times"></i>
                                            </button>
                                        </div>
										<div class="form-group form-inline">
                                            <label>Email</label> &nbsp;&nbsp;&nbsp;&nbsp;
											<input class="form-control" placeholder="example@abc.com" name="email" id="custemail" type="text" onchange="validateEmail()">
											<button type="button" class="btn btn-success btn-circle" style="visibility:hidden" id="rightemailbutton" disabled><i class="fa fa-check"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-circle" style="visibility:hidden" id="wrongemailbutton" disabled><i class="fa fa-times"></i>
                                            </button>
                                        </div>
										<div class="form-group">
                                            <label>Additional Details</label>
                                            <textarea class="form-control" placeholder="Customer's additional details (max 1000 characters)" name="additionaldetails" id="custadditionaldetails" rows="3" onchange="validateAdditionalDetails()"></textarea>
                                        </div>
										
                                        <button type="button" class="btn btn-success" name="custsubmitbutton" id="custsubmitbuttonid">Submit</button> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button type="reset" class="btn btn-info" name="custresetbutton" id="custresetbuttonid">Reset Form</button>
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





<script>
function validateLastName()
{
    var x=document.getElementById("custlastname");
    x.value=x.value.toUpperCase(); 
	var letters = (/^([A-Za-z]|[a-zA-Z]\s)+$/);
	if(x.value.match(letters))  
    {  
        document.getElementById('wrongnamebutton').style.visibility = "hidden";
        document.getElementById('rightnamebutton').style.visibility = "visible";
    }  
    else  
    {  
        document.getElementById('rightnamebutton').style.visibility = "hidden";
        document.getElementById('wrongnamebutton').style.visibility = "visible";
        x.focus();    
    } 
}

function validateFirstName()
{
    var x=document.getElementById("custfirstname");
    x.value=x.value.toUpperCase(); 
}

function validateAddress()
{
    var x=document.getElementById("custaddress");
    x.value=x.value.toUpperCase();
}

function validateCity()
{
    var x=document.getElementById("custcity");
    x.value=x.value.toUpperCase();
}

function validatePhone()
{
    var x=document.getElementById("custphone");
    var numbers = /^[0-9]+$/;  
    if(x.value.match(numbers))  
    {  
        document.getElementById('wrongphonebutton').style.visibility = "hidden";
        document.getElementById('rightphonebutton').style.visibility = "visible";
    }  
    else  
    {  
        document.getElementById('rightphonebutton').style.visibility = "hidden";
        document.getElementById('wrongphonebutton').style.visibility = "visible";
        x.focus();    
    }  
}

function validateMobile()
{
    var x=document.getElementById("custmobile");
    var numbers = /^[0-9]+$/;  
    if(x.value.match(numbers))  
    {  
        document.getElementById('wrongmobilebutton').style.visibility = "hidden";
        document.getElementById('rightmobilebutton').style.visibility = "visible";
    }  
    else  
    {  
        document.getElementById('rightmobilebutton').style.visibility = "hidden";
        document.getElementById('wrongmobilebutton').style.visibility = "visible";
        x.focus();    
    }  
}

function validateEmail()
{
    var x=document.getElementById("custemail");
    x.value=x.value.toLowerCase();
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(x.value.match(mailformat))  
    {  
        document.getElementById('wrongemailbutton').style.visibility = "hidden";
        document.getElementById('rightemailbutton').style.visibility = "visible";
    }  
    else  
    {  
        document.getElementById('rightemailbutton').style.visibility = "hidden";
        document.getElementById('wrongemailbutton').style.visibility = "visible";
        x.focus();    
    }
}

function validateAdditionalDetails()
{
    var x=document.getElementById("custadditionaldetails");
    x.value=x.value.toUpperCase();
}
</script>




<!-- script for form submission via ajax -->
<script type="text/javascript" language="javascript">
    $("#custsubmitbuttonid").click(function(){
	    var firstname = $("#custfirstname").val();
		var gender = $("input[type='radio']:checked").val();
		var city = $("#custcity").val();
		
		if((firstname.length > 0) && (gender.length > 0) && (city.length > 0))
		{
		var allVals = [];
		allVals.push($("#custlastname").val());
		allVals.push(firstname);
		allVals.push(gender);
		allVals.push($("#custaddress").val());
		allVals.push(city);
		allVals.push($("#custphone").val());
		allVals.push($("#custmobile").val());
		allVals.push($("#custemail").val());
		allVals.push($("#custadditionaldetails").val());
	    $.ajax({
		    type: 'post',
            url: 'addcustomer.php',
            data: {'val':allVals},
            success: function(response){
			    console.log("submitted successfully" + response);
				$('#mandatoryFieldError').hide();
				$('#dataEntryFailure').hide();
				$('#dataEntrySuccess').show();
				//clear the form
				$('#custresetbuttonid').trigger('click');
				//hide all buttons
				$('#rightnamebutton').hide();
				$('#wrongnamebutton').hide();
				$('#rightphonebutton').hide();
				$('#wrongphonebutton').hide();
				$('#rightmobilebutton').hide();
				$('#wrongmobilebutton').hide();
				$('#rightemailbutton').hide();
				$('#wrongemailbutton').hide();
			},
            error: function(xhr,status,error){
       			console.log("submission error");
				$('#dataEntrySuccess').hide(); 
			    $('#mandatoryFieldError').hide();
				$('#dataEntryFailure').show();
				
			}
		});
		}
		else
		{
		    $('#dataEntryFailure').hide();
			$('#dataEntrySuccess').hide(); 
			$('#mandatoryFieldError').show();
		}
	});
</script>     
				







<?php include 'footer.php' ?>
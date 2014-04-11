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
                    <h4 class="page-header">List of All Customers</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Please Refer Below Table Regarding Customer Info
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" id="panel-bodyid">	   
							    
							    <div class="row">
                                    <div class="col-lg-12">
								    <form role="form">
									    <div id="deletionSuccess" style="text-align:center; display:none"><font color="green">Success: Selected customers permanently deleted.</font></div>
									    <div id="deletionError" style="text-align:center; display:none"><font color="red">Error: Some problem occured!! Could not permanently delete the selected customer from database. Please try later.</font></div>
										<div id="editingSuccess" style="text-align:center; display:none"><font color="green">Success: Edited fields updated in database.</font></div>
									    <div id="editingError" style="text-align:center; display:none"><font color="red">Error: Some problem occured!! Could not permanently edit the selected details from this customer. Please try later.</font></div>
										
								        <div class="button-inline">
										    <button type="button" class="btn btn-success" name="custeditbutton" style="float:right;  margin-left:20px" id="custeditbuttonid">Edit Selected</button> 
							                <button type="button" class="btn btn-warning" name="custdeletebutton" style="float:right" id="custdeletebuttonid" value="delete">Delete Selected</button> 
								        </div>
								    
							<br>
							<br>
							<br>
                            <div id = "tablediv" class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="customerlist">
                                    <thead>
                                        <tr> 
										    <th style="background-color:#d9edf7"></th>   
                                            <th style="background-color:#d9edf7">First Name</th>
											<th style="background-color:#d9edf7">Last Name</th>
                                            <th style="background-color:#d9edf7">Gender</th>
                                            <th style="background-color:#d9edf7">City</th>
                                            <th style="background-color:#d9edf7">Mobile</th>
											<th style="background-color:#d9edf7">Email</th>
										    <th style="text-align:left; background-color:#d9edf7"><input type="checkbox" style="width:16px; height:16px" onClick="toggle(this)"/></th>   
                                        </tr>
                                    </thead>
                                    <tbody>
									   
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
							<br>
							<br>
                            <div class="well">
                                <h5><font color="green">Note:</font></h5>
                                <p><font color="green">1. To delete customer(s), select from checkbox and press delete button present on top right. You can delete more than one customers at a time. <br> 2. To edit customer(s) details, select from checkbox and press edit button present on top right. Only one customer's details can be edited at a time.</font></p>
                            </div>
							</form>
							<!-- /.form -->
						    </div>
							</div>
							<!-- /.row -->
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
	
		
		
		


		

<!-- script for row expansion/collapse-->   
<script type="text/javascript" language="javascript">
var oTable;

/* Formating function for row details */
function fnFormatDetails ( nTr )
{
    var aData = oTable.fnGetData( nTr );
	
	var sOut = '<div class="innerDetails" style="display:none">';
    sOut += '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
    sOut += '<tr><td>Name:</td><td>'+ aData[1] + " " + aData[2] +'</td></tr>';
	sOut += '<tr><td>Gender:</td><td>'+ aData[3] +'</td></tr>';
	sOut += '<tr><td>Address:</td><td>'+ aData[8] +'</td></tr>';
	sOut += '<tr><td>City:</td><td>'+ aData[4] +'</td></tr>';
	sOut += '<tr><td>Phone:</td><td>'+ aData[9] +'</td></tr>';
	sOut += '<tr><td>Mobile:</td><td>'+ aData[5] +'</td></tr>';
	sOut += '<tr><td>Email:</td><td>'+ aData[6] +'</td></tr>';
	sOut += '<tr><td>Other:</td><td>'+ aData[10] +'</td></tr>';
    sOut += '</table>';
	sOut += '</div>';
     
    return sOut;
}

 
 //when the document loads
$(document).ready(function() {
	oTable = $('#customerlist').dataTable( {
	    "bProcessing": true,
        "bServerSide": true,
		"async": false,
        "sAjaxSource": "getcustomertabledata.php",
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [ 0,7 ] },
			{ "bSearchable": false, "aTargets": [ 0,7 ] },
			{ "mData": null,
              "sDefaultContent": '<img class="expand" src="image/details_open.png" />',
              "aTargets": [ 0 ]
            },
			{
			  "mData": null,
			  "sDefaultContent": '<input type="checkbox" name="custcheckbox" style="width:14px; height:14px" value="idOn" />',
			  "aTargets": [ 7 ]
			},
        ],
		
        "aaSorting": [[1, 'asc']]
    });
	
     
    /* Add event listener for opening and closing details
     * Note that the indicator for showing which row is open is not controlled by DataTables,
     * rather it is done here
     */
    $('#customerlist').on('click',  '.expand', function () {
        var nTr = $(this).parents('tr')[0];
        if ( oTable.fnIsOpen(nTr) )
        {
            /* This row is already open - close it */
            this.src = "image/details_open.png";
			$('div.innerDetails', $(nTr).next()[0]).slideUp( function () {
            oTable.fnClose( nTr );
            } );
        }
        else
        {
            /* Open this row */
            this.src = "image/details_close.png";
            var nDetailsRow = oTable.fnOpen( nTr, fnFormatDetails(nTr), 'details' );
			$('div.innerDetails', nDetailsRow).slideDown();
        }
    } );
} );

</script>




<!--script to check/uncheck all textboxes-->
<script type="text/javascript" language="javaScript">
function toggle(checkAll) {
  cbs = document.getElementsByName('custcheckbox');
 for(var i=0; i < cbs.length; i++) {
    if(cbs[i].type == 'checkbox') {
    cbs[i].checked = checkAll.checked;
   }
 }
}
</script>





<!--script to delete/edit customer table -->
<script>

$('#custeditbuttonid').on('click', function() {
    var editVals = [];
	var erowData;
        $(':checkbox:checked').each(function() {
	    if($(this).val() == "idOn")
        {var erow = $(this).parents('tr')[0];
		erowData = oTable.fnGetData( erow );
		var eid = erowData[11];
		editVals.push(eid);}
    });
	//console.log(editVals);
	var ecnt = editVals.length;
	//console.log(ecnt); 
    
    if(ecnt <=0)
    {   
        BootstrapDialog.show({
            title: 'No Customer Selected!!!',
            message: 'You have not selected any customer to edit details.',
			buttons: [ {
                label: 'OK',
				cssClass: 'btn-primary',
                action: function(dialogItself){
                dialogItself.close();
                }
            }]
        });		 
    }
    else if(ecnt > 1)
    {
		BootstrapDialog.show({
            title: 'More than One Customer Selected!!!',
            message: 'You can edit only one customer at a time.',
			buttons: [ {
                label: 'OK',
				cssClass: 'btn-primary',
                action: function(dialogItself){
                dialogItself.close();
                }
            }]
        });
	}
    else if(ecnt == 1)
    {    
		var msg = $('<div>');
		msg.append('<form role="form" id="modaleditform">');
		msg.append('<div class="form-group form-inline">');
		msg.append('<label>Name<label style="color:red"><font size="4">*</font></label></label> &nbsp;&nbsp;');
		msg.append('<input class="form-control" name="lastname1" id="custlastname1" onchange="validateLastName()" type="text" value="'+erowData[2]+'"> &nbsp;');
		msg.append('<input class="form-control" name="firstname1" id="custfirstname1" onchange="validateFirstName()" type="text" value="'+erowData[1]+'">');
		msg.append('<p class="help-block">(Only first name is mandatory)</p>');
		msg.append('</div>');
		if(erowData[3] == "MALE")
		{
		msg.append('<div class="form-group">');
        msg.append('<label>Gender<label style="color:red"><font size="4">*</font></label></label> &nbsp;');
        msg.append('<label class="radio-inline">');
        msg.append('<input type="radio" name="gender1" id="optionsRadiosInlineMale1" value="MALE" checked>Male');
        msg.append('</label>');
        msg.append('<label class="radio-inline">');
        msg.append('<input type="radio" name="gender1" id="optionsRadiosInlineFemale1" value="FEMALE">Female');
        msg.append('</label>');
        msg.append('</div>');
		}
		else
		{
		msg.append('<div class="form-group">');
        msg.append('<label>Gender<label style="color:red"><font size="4">*</font></label></label> &nbsp;');
        msg.append('<label class="radio-inline">');
        msg.append('<input type="radio" name="gender1" id="optionsRadiosInlineMale1" value="MALE">Male');
        msg.append('</label>');
        msg.append('<label class="radio-inline">');
        msg.append('<input type="radio" name="gender1" id="optionsRadiosInlineFemale1" value="FEMALE" checked>Female');
        msg.append('</label>');
        msg.append('</div>');
		}
		msg.append('<div class="form-group">');
        msg.append('<label>Address</label>');
        msg.append('<textarea class="form-control" name="address1" id="custaddress1" onchange="validateAddress" rows="3">'+erowData[8]+'</textarea>');
        msg.append('</div>');
		msg.append('<div class="form-group form-inline">');
        msg.append('<label>City<label style="color:red"><font size="4">*</font></label></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
        msg.append('<input class="form-control" name="city1" id="custcity1" onchange="validateCity" type="text" value="'+erowData[4]+'">');
        msg.append('</div>');
		msg.append('<div class="form-group form-inline">');
        msg.append('<label>Phone</label> &nbsp;&nbsp;');
        msg.append('<input class="form-control" name="phone1" id="custphone1" onchange="validatePhone" type="text" value="'+erowData[9]+'">');
        msg.append('</div>');
		msg.append('<div class="form-group form-inline">');
        msg.append('<label>Mobile</label> &nbsp;');
        msg.append('<input class="form-control" name="mobile1" id="custmobile1" onchange="validateMobile" type="text" maxlength="10" value="'+erowData[5]+'">');
        msg.append('</div>');
		msg.append('<div class="form-group form-inline">');
        msg.append('<label>Email</label> &nbsp;&nbsp;&nbsp;&nbsp;');
        msg.append('<input class="form-control" name="email1" id="custemail1" onchange="validateEmail" type="text" value="'+erowData[6]+'">');
        msg.append('</div>');
		msg.append('<div class="form-group">');
        msg.append('<label>Additional Details</label>');
        msg.append('<textarea class="form-control" name="additionaldetails1" id="custadditionaldetails1" onchange="validateAdditionalDetails" rows="3">'+erowData[10]+'</textarea>');
        msg.append('</div>');
		msg.append('</form>');
		msg.append('</div>');
		
		BootstrapDialog.show({
            title: 'Edit Customer Details',
			type: BootstrapDialog.TYPE_SUCCESS,
            closable: false,
			message: msg,
			buttons: [{
                label: 'Submit',
                cssClass: 'btn-success',
                action: function(dialogItself) {
					//submit button action code here
					var firstnameM = $("#custfirstname1").val();
		            var genderM = $("input[name='gender1']:checked").val();
		            var cityM = $("#custcity1").val();
					if((firstnameM.length > 0) && (genderM.length > 0) && (cityM.length > 0))
		            {
	                	var Vals = [];
		                Vals.push($("#custlastname1").val());
		                Vals.push(firstnameM);
		                Vals.push(genderM);
		                Vals.push($("#custaddress1").val());
		                Vals.push(cityM);
		                Vals.push($("#custphone1").val());
		                Vals.push($("#custmobile1").val());
		                Vals.push($("#custemail1").val());
		                Vals.push($("#custadditionaldetails1").val());
		                Vals.push(editVals[0]);
		                console.log(editVals);
		                $.ajax({
                            type: "post", 
                            url: "editcustomer.php",
		                    //dataType:"json",
                            data: {'val': Vals}, 
		                    async: false,
		                    cache: false,
                            success: function(response){
			                    console.log("success in editing" + response);
			                    $("#editingError").hide();
			                    $("#editingSuccess").show();
			                    oTable.fnDraw();
								dialogItself.close();
                            },
		                    error: function(xhr,status,error){
		                        console.log("error in deletion" + status);
			                    $("#editingSuccess").hide();
			                    $("#editingError").show();
								dialogItself.close();
		                    }
                        });
		            }
		            else
	            	{
		                BootstrapDialog.show({
                            title: 'Mandatory Field Left Empty!!!',
                            message: 'Please fill all * marked mandatory fields.',
			                buttons: [ {
                                label: 'OK',
			                	cssClass: 'btn-primary',
                                action: function(dialogItself){
                                dialogItself.close();
                                }
                            }]
                        });
		            }
					//ended here
                }
            },
			{
                label: 'Close',
				cssClass: 'btn-primary',
                action: function(dialogItself){
                dialogItself.close();
                }
            }]
        }); 
	}  	
} );



$("#custdeletebuttonid").on('click', function(){ 
	var allVals = [];
    $(':checkbox:checked').each(function() {
	    if($(this).val() == "idOn")
        {var row = $(this).parents('tr')[0];
		var rowData = oTable.fnGetData( row );
		var id = rowData[11];
		allVals.push(id);}
    });
	//console.log(allVals);
	var cnt = allVals.length;
	//console.log(cnt);
	
	if(cnt > 0)
	{
		BootstrapDialog.show({
            title: 'Confirm Deletion!!!',
			type: BootstrapDialog.TYPE_WARNING,
            closable: false,
            message: 'Are you sure, you want to permanently delete selected customer(s)?',
			buttons: [ {
                label: 'Yes',
				cssClass: 'btn-warning',
                action: function(dialogItself){
                    $.ajax({
                        type: "post", 
                        url: "deletecustomer.php",
		                //dataType:"json",
                        data: {'id':allVals}, 
		                async: false,
						cache: false,
                        success: function(response){
			                console.log("success in deletion" + response);
			                $("#deletionError").hide();
			                $("#deletionSuccess").show();
			                oTable.fnDraw();
							dialogItself.close();
                        },
		                error: function(xhr,status,error){
		                    console.log("error in deletion" + status);
			                $("#deletionSuccess").hide();
			                $("#deletionError").show();
							dialogItself.close();
		                }
                    });
                }
            },
			{
			    label: 'No',
				cssClass: 'btn-primary',
                action: function(dialogItself){
                dialogItself.close();
                }
			}]
        });
	}
	else
	{
	    BootstrapDialog.show({
            title: 'No Customer Selected!!!',
            message: 'You have not selected any customer for deletion.',
			buttons: [ {
                label: 'OK',
				cssClass: 'btn-primary',
                action: function(dialogItself){
                dialogItself.close();
                }
            }]
        });
	}
});
</script>



<!-- script to validate modal forms-->
<script>
function validateLastName()
{
    var x=document.getElementById("custlastname1");
    x.value=x.value.toUpperCase(); 
}

function validateFirstName()
{
    var x=document.getElementById("custfirstname1");
    x.value=x.value.toUpperCase(); 
}

function validateAddress()
{
    var x=document.getElementById("custaddress1");
    x.value=x.value.toUpperCase();
}

function validateCity()
{
    var x=document.getElementById("custcity1");
    x.value=x.value.toUpperCase();
}

function validatePhone()
{
    var x=document.getElementById("custphone1");
    
}

function validateMobile()
{
    var x=document.getElementById("custmobile1");
    
}

function validateEmail()
{
    var x=document.getElementById("custemail1");
    x.value=x.value.toLowerCase();
	
}

function validateAdditionalDetails()
{
    var x=document.getElementById("custadditionaldetails1");
    x.value=x.value.toUpperCase();
}
</script>




<?php include 'footer.php' ?>
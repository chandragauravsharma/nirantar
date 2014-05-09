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
                                <a href="listallcustomers.php">List All Customers</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
					<!--customer details ended here-->

                    <!--work details here-->
                    <li>
                        <a href="#"><i class="fa fa-pencil fa-fw"></i>Work<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="addnewwork.php">Add New</a>
                            </li>                           
                            <li>
                                <a href="listallworkdone.php">List All Work Done</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <!--work details ended here-->

                    <!--work category details here-->
                    <li>
                        <a href="workcategory.php"><i class="fa fa-list fa-fw"></i>Work Category</a>
                    </li>
                    <!--work details ended here-->
					
					
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
                    <h4 class="page-header">Work Categories</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Categorize your work here
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body" id="panel-bodyid">	   
							    
							    <div class="row">
								
								<div class="col-lg-12">
								        <div id="additionSuccess" style="text-align:center; display:none"><font color="green">Success: Work category permanently added to database.</font></div>
									    <div id="additionError" style="text-align:center; display:none"><font color="red">Error: Some problem occured!! Could not update database. Please try later.</font></div>
									    <div id="deletionSuccess" style="text-align:center; display:none"><font color="green">Success: Selected work category permanently deleted.</font></div>
									    <div id="deletionError" style="text-align:center; display:none"><font color="red">Error: Some problem occured!! Could not permanently delete the selected work category from database. Please try later.</font></div>
									    <br>
								</div>
								
                                    <div class="col-lg-6">
									<form role="form">
								     
                            <div id = "workcategorytablediv" class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="workcategorylist">
                                    <thead>
                                        <tr> 
										    <th style="background-color:#d9edf7">Work Category</th>     
											<th style="background-color:#d9edf7"></th>
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
                                <p><font color="green">1. To delete a work category, click on that table row and press delete button present on top right.</font></p>
                            </div>
							</form>
						    </div>
							
							<div class="col-lg-3">
							</div>
							
							<div class="col-lg-3">
							    <form role="form" id="addnewcategoryform">
								<div class="form-group form-inline">
								    <label>Work Category<label style="color:red"><font size="4">*</font></label></label> &nbsp;&nbsp;
									<input class="form-control" placeholder="Add new category" name="categoryname" id="categorynameid" type="text" onchange="validateCategory()">
								</div>
									<button type="button" class="btn btn-success" name="categorybutton" id="categorybuttonid">Submit</button>
									<button type="reset" class="btn btn-info" style="display:none" id="resetbuttonid"></button>
								</form>
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
	
		
		
		


		

<!-- script for table work category -->   
<script type="text/javascript" language="javascript">
var oTable; 
 //when the document loads
$(document).ready(function() {
	oTable = $('#workcategorylist').dataTable( {
	    "bProcessing": true,
        "bServerSide": true,
		"async": false,
        "sAjaxSource": "getworkcategory.php",
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [ 1 ] },
			{ "bSearchable": false, "aTargets": [ 1 ] },
			{ "mData": null,
              "sDefaultContent": '<img class="del" src="image/category_delete.png" />',
              "aTargets": [ 1 ]
            },
        ],
		
        "aaSorting": [[0, 'asc']]
    });
	
	//Add event listener for deleting a work category
	$('#workcategorylist').on('click', '.del', function() {
	    var nTr = $(this).parents('tr')[0];
		var aData = oTable.fnGetData( nTr );
		var wid = aData[2];
		BootstrapDialog.show({
            title: 'Confirm Deletion!!!',
			type: BootstrapDialog.TYPE_WARNING,
            closable: true,
            message: 'Are you sure, you want to permanently delete this work category?',
			buttons: [ {
                label: 'Yes',
				cssClass: 'btn-warning',
                action: function(dialogItself){
                    $.ajax({
                        type: "post", 
                        url: "deleteworkcategory.php",
		                //dataType:"json",
                        data: {'id':wid}, 
		                async: false,
						cache: false,
                        success: function(response){
			               console.log("success in deletion" + response);
							$("#additionSuccess").hide();
							$("#additionError").hide();
			                $("#deletionError").hide();
			                $("#deletionSuccess").show();
			                oTable.fnDraw();
							dialogItself.close();
                        },
		                error: function(xhr,status,error){
		                    console.log("error in deletion" + status);
							$("#additionSuccess").hide();
							$("#additionError").hide();
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
	});
	
} );
</script>





<!-- script to validate work category -->
<script>
function validateCategory()
{
    var x=document.getElementById("categorynameid");
    x.value=x.value.toUpperCase(); 
}
</script>



<!-- script to submit work category> -->
<script>
    $("#categorybuttonid").click( function(){
	    var category = $("#categorynameid").val();
		console.log(category);
		if(category.length > 0)
		{
		    var allVals = [];
		    allVals.push(category);
			$.ajax({
		    type: 'post',
            url: 'addworkcategory.php',
            data: {'val':allVals},
            success: function(response){
			    console.log("submitted successfully" + response);
				$('#deletionSuccess').hide();
				$('#deletionError').hide();
				$('#additionError').hide();
				$('#additionSuccess').show();
				//clear the form
				$('#resetbuttonid').trigger('click');
				oTable.fnDraw();
			},
            error: function(xhr,status,error){
       			console.log("submission error");
				$('#deletionSuccess').hide();
				$('#deletionError').hide();
				$('#additionSuccess').hide();
				$('#additionError').show();
			}
		});
		}
		else
		{
		    BootstrapDialog.show({
            title: 'Field Empty!!!',
            message: 'Please provide a valid work category.',
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




<?php include 'footer.php' ?>
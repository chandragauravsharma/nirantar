<?php include 'header.php' ?>


<?php
    //php code to extract table data from database
    $host="localhost"; // Host name 
    $username="root"; // Mysql username 
    $password="shanti.ram123"; // Mysql password 
    $db_name="nirantar"; // Database name 
    $tbl_name="customerdetails"; // Table name 
	
	 // Connect to server and select databse.
    $connection = mysql_connect($host, $username, $password) or die("cannot connect to mysql" . mysql_error());
    mysql_select_db($db_name) or die("cannot connect to database" . mysql_error()); 
	
    $sql="SELECT * FROM $tbl_name";
    $result=mysql_query($sql);
	
	//closing mysql connection
    mysql_close($connection);

    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);
    
	//$customer_array = array();
	while ($row = mysql_fetch_assoc($result)){  
        $customer_array[] = array($row['custId'], $row['custLastName'], $row['custFirstName'], $row['custAddress'], $row['custCity'], $row['custPhone'], $row['custMobile'], $row['custEmail'], $row['custOtherDetails'], $row['custGender']);
    }
	
	function hello()
	{
	   //php code to extract table data from database
    $host="localhost"; // Host name 
    $username="root"; // Mysql username 
    $password="shanti.ram123"; // Mysql password 
    $db_name="nirantar"; // Database name 
    $tbl_name="customerdetails"; // Table name 
	
	 // Connect to server and select databse.
    $connection = mysql_connect($host, $username, $password) or die("cannot connect to mysql" . mysql_error());
    mysql_select_db($db_name) or die("cannot connect to database" . mysql_error()); 
	
    $sql="SELECT * FROM $tbl_name";
    $result=mysql_query($sql);
	
	//closing mysql connection
    mysql_close($connection);

    // Mysql_num_row is counting table row
    $count=mysql_num_rows($result);
    
	//$customer_array = array();
	while ($row = mysql_fetch_assoc($result)){  
        $customer_array[] = array($row['custId'], $row['custLastName'], $row['custFirstName'], $row['custAddress'], $row['custCity'], $row['custPhone'], $row['custMobile'], $row['custEmail'], $row['custOtherDetails'], $row['custGender']);
    }
	}
	
?>


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
                        <div class="panel-body">
						
                 						<!-- Modal Unselected alert-->
                                        <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header" style="background-color:#d9edf7">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Alert!!!</h4>
                                        </div>
                                        <div class="modal-body">
                                                No customer selected for deletion.
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-info" data-dismiss="modal">OK</button>
                                        </div>
                                        </div>
                                        </div>
                                        </div>
						                <!-- /.Modal -->
										
										<!-- Modal confirm deletion-->
                                        <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
										<form role="form">
                                        <div class="modal-header" style="background-color:#ed9c28">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Confirm Deletion!!!</h4>
                                        </div>
                                        <div class="modal-body">
                                                Are you sure, you want to permanently delete selected customer(s)?
                                        </div>
                                        <div class="modal-footer">
										<button type="button" class="btn btn-warning" data-dismiss="modal" name="confirm" id="confirmbutton" value="yes">Yes</button>
                                        <button type="button" class="btn btn-warning" data-dismiss="modal">No</button>
                                        </form>
										</div>
                                        </div>
                                        </div>
                                        </div>
						                <!-- /.Modal -->
							    
							    <div class="row">
                                    <div class="col-lg-12">
								    <form role="form">
									    <div id="deletionSuccess" style="text-align:center; display:none"><font color="green">Success: Selected customers permanently deleted.</font></div>
									    <div id="deletionError" style="text-align:center; display:none"><font color="red">Error: Some problem occured!! Could not permanently delete the selected customer from database. Please try later.</font></div>
										
								        <div class="button-inline" action="listallcustomers.php" method="get">
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
                                            <th style="text-align:center; background-color:#d9edf7">Customer ID</th>
                                            <th style="background-color:#d9edf7">Name</th>
                                            <th style="background-color:#d9edf7">Gender</th>
                                            <th style="background-color:#d9edf7">City</th>
                                            <th style="background-color:#d9edf7">Mobile</th>
											<th style="background-color:#d9edf7">Email</th>
											<th style="text-align:center; background-color:#d9edf7"><input type="checkbox" style="width:16px; height:16px" onClick="toggle(this)"/></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									    for($i=0; $i < $count ;$i++)
									    { ?>
									    <tr> 
										    <td style="text-align:center"><?php echo $customer_array[$i][0] ?></td>
											<td><?php echo $customer_array[$i][2] . " " . $customer_array[$i][1] ?></td>
											<td><?php echo $customer_array[$i][9] ?></td>
											<td><?php echo $customer_array[$i][4] ?></td>
											<td><?php echo $customer_array[$i][6] ?></td>
											<td><?php echo $customer_array[$i][7] ?></td>
											<td style="text-align:center"><input type="checkbox" style="width:14px; height:14px" id="custcheckboxid" name="custcheckbox" value="<?php echo $customer_array[$i][0] ?>"></td>
										</tr>
									<?php }
									?>
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
/* Formating function for row details */
function fnFormatDetails ( oTable, nTr )
{
    var aData = oTable.fnGetData( nTr );
	<?php
      $js_array = json_encode($customer_array);
	  $js_count = json_encode($count);
      echo "var javascript_array = ". $js_array . ";\n";
	  echo "var javascript_count = ". $js_count . ";\n";
    ?>
	var number=0;
	for(var i=0;i<javascript_count;i++)
	{
	   if(aData[1] == javascript_array[i][0])
	   {number = i; break;}
	}
	var sOut = '<div class="innerDetails" style="display:none">';
    sOut += '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
    sOut += '<tr><td>Name:</td><td>' + javascript_array[number][2] + " " + javascript_array[number][1] + '</td></tr>';
	sOut += '<tr><td>Gender:</td><td>' + javascript_array[number][9] + '</td></tr>';
	sOut += '<tr><td>Address:</td><td>' + javascript_array[number][3] + '</td></tr>';
	sOut += '<tr><td>City:</td><td>' + javascript_array[number][4] + '</td></tr>';
	sOut += '<tr><td>Phone:</td><td>' + javascript_array[number][5] + '</td></tr>';
	sOut += '<tr><td>Mobile:</td><td>' + javascript_array[number][6] + '</td></tr>';
	sOut += '<tr><td>Email:</td><td>' + javascript_array[number][7] + '</td></tr>';
	sOut += '<tr><td>Other:</td><td>' + javascript_array[number][8] + '</td></tr>';
    sOut += '</table>';
	sOut += '</div>';
     
    return sOut;
}


function initializeTable()
{
      /*
     * Insert a 'details' column to the table
     */ 
    var nCloneTh = document.createElement( 'th' );
	nCloneTh.setAttribute("style","background-color:#d9edf7");
    var nCloneTd = document.createElement( 'td' );
    nCloneTd.innerHTML = '<img src="image/details_open.png">';
    nCloneTd.className = "center";
     
    $('#customerlist thead tr').each( function () {
        this.insertBefore( nCloneTh, this.childNodes[0] );
    } );
     
    $('#customerlist tbody tr').each( function () {
        this.insertBefore(  nCloneTd.cloneNode( true ), this.childNodes[0] );
    } );
     
    /*
     * Initialse DataTables, with no sorting on the 'details' column
     */
    var oTable = $('#customerlist').dataTable( {
        "aoColumnDefs": [
            { "bSortable": false, "aTargets": [ 0,7 ] },
			{ "bSearchable": false, "aTargets": [ 0,7 ] }
        ],
        "aaSorting": [[1, 'asc']],
    });
     
    /* Add event listener for opening and closing details
     * Note that the indicator for showing which row is open is not controlled by DataTables,
     * rather it is done here
     */
    $('#customerlist tbody td img').click( function () {
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
            var nDetailsRow = oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
			$('div.innerDetails', nDetailsRow).slideDown();
        }
    } );
}
 
 //when the document loads
$(document).ready(function() {
    initializeTable();
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





<!--script after confirm deletion button -->
<script>
$("#custdeletebuttonid").on('click', function(){ 
	var allVals = [];
    $(':checkbox:checked').each(function() {
	    if($(this).val() != "on")
        {allVals.push($(this).val());}
    });
	
	var cnt = 0;
	var allRows = [];
	$('#customerlist tbody tr').each( function () {
        $(this).find('td').each(function(){
		    $(this).find(':checkbox:checked').each(function(){
			    //console.log(cnt);
				allRows.push(cnt);
			});
		});
		cnt++;
    } );
	console.log(allRows + allRows.length);
	
	if(allVals.length > 0)
	{
		$("#myModal2").modal({ backdrop: "static", keyboard: false}); $("#myModal2").modal("show");
		$("#confirmbutton").on('click', function(){
		
		$.ajax({
        type: "post", 
        url: "deletecustomer.php",
		//dataType:"json",
        data: {'id':allVals}, 
		async: false,
        success: function(response){
		     
			//$('#customerlist').dataTable().fnClearTable();
			//$('#customerlist').dataTable().fnDraw();
			//$('#customerlist').html('');
			//initializeTable();
			//location.href = "listallcustomers.php";
			console.log("success in deletion" + response);
			for(var i = 0; i < allRows.length; i++)
			{$('#customerlist').dataTable().fnDeleteRow(allRows[i]);}
			$("#deletionError").hide();
			$("#deletionSuccess").show();
        },
		error: function(xhr,status,error){
		    console.log("error in deletion" + status);
			$("#deletionSuccess").hide();
			$("#deletionError").show();
		}
        });
		});
	}
	else
	{
	    $("#myModal1").modal({ backdrop: "static"}); $("#myModal1").modal("show");
	}
});
</script>


   
		
		



<?php include 'footer.php' ?>
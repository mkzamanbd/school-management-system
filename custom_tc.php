<?php
include("php/dbconnect.php");
include("php/checklogin.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CBST Public School Bhilai</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
	


    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	 <script src="js/jquery-1.10.2.js"></script>


	
</head>
<?php
include("php/header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">


			   
    <h1 class="well" style="background-color:#99b3ff;">TRANSFER CERTIFICATE PRINT</h1>

				<form role="form" action="custom_tc1.php" method="post">
					<div class="col-sm-12">
					
<!--=====================================================================-->					
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>Student Name</label>
								<input name= "sname"type="text" placeholder="Enter Student Name Here.." class="form-control" required>
							</div>
							<div class="col-sm-3 form-group">
								<label>Father Name</label>
								<input name="fname"type="text" placeholder="Enter Father Name Here.." class="form-control"required>
							</div>
							
							
							<div class="col-sm-3 form-group">
								<label>Mother Name</label>
								<input name="mname"type ="text" placeholder="Enter Mother Here.." rows="3" class="form-control"required>
						</div>
						
							<div class="col-sm-3 form-group">
								<label>Class Name</label>
								<input name="class"type ="text" placeholder="Enter Mother Here.." rows="3" class="form-control"required>
							</div>
						</div></br>

<!--=====================================================================-->						
							
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>S No.</label>
								<input name="sno"type="number" placeholder="Enter S No. Here.." class="form-control"required>
							</div>
							<div class="col-sm-3 form-group">
								<label>Roll No.</label>
								<input name="rno"type="number" placeholder="Enter Roll  No. Here.." class="form-control"required>
							</div>
							<div class="col-sm-3 form-group">
								<label>Admission No</label>
								<input name="admno"type="number" placeholder="Enter Admission No Here.." class="form-control"required>
							</div>	
							<div class="col-sm-3 form-group">
								<label>Discharge NO</label>
								<input name="dno"type="number" placeholder="Enter Discharge NO Here.." class="form-control"required>
							</div>		
						</div></br>
						
<!--=====================================================================-->						
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>Admission Date</label>
								<input name="admdate"type="date" placeholder="Enter Admission Date Here.." class="form-control"required>
							</div>
							<div class="col-sm-3 form-group">
								<label>Birth Date</label>
								<input name="bdate"type="date" placeholder="Enter date of birth Date Here.." class="form-control"required>
							</div>	
							<div class="col-sm-3 form-group">
								<label>Leaves on the </label>
								<input name="leaves"type="text" placeholder="Enter Leaves on the .." class="form-control"required>
							</div>
							<div class="col-sm-3 form-group">
								<label>day of</label>
								<input name="dayof"type="text" placeholder="..... day of Here.." class="form-control"required>
							</div>	
						</div></br>
<!--=====================================================================-->						
						
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>Passed/Failed Class</label>
								<input name="passclass"type="text" placeholder="Enter Passed/Failed Class Here.." class="form-control"required>
							</div>		
							<div class="col-sm-3 form-group">
								<label>Medium</label>
								<input name="medium"type="text" placeholder="Enter Medium Here.." class="form-control"required>
							</div>	
							<div class="col-sm-3 form-group">
								<label>Enrolled in Class</label>
								<input name="enrollclass"type="text" placeholder="Enter Enrolled in Class Here.." class="form-control"required>
							</div>	
							
							<div class="col-sm-3 form-group">
								<label>Cast</label>
								<input name="cast"type="text" placeholder="Enter Enrolled in Class Here.." class="form-control"required>
							</div>	
						</div></br>
<!--=====================================================================-->						
						
				<div class="row">
						
					<div class="col-sm-3 form-group">
						<label>Tution Fees Upto</label>
						<input name="tfees"type="text" placeholder="Enter Tution Fees Upto Here.." class="form-control"required>
					</div>
					<div class="col-sm-3 form-group">
						<label>Passed Year</label>
						<input name="pyears"type="text" placeholder="Enter Passed Year Here.." class="form-control"required>
					</div>						
					<div class="col-sm-6 form-group">
						<label>Birth date in Text</label>
						<input name="bdate2"type="text" placeholder="Enter Birthdate in text.." class="form-control"required>
					</div>
					
				</div>
				<div class="col-sm-4 form-group">
					<button type="submit" name="submit" class="btn  btn-info btn-lg">Submit</button>					
				</div>
				
					
				</div></br>
<!--=====================================================================-->				
				
				
				</form>
				

                     
	<script src="js/dataTable/jquery.dataTables.min.js"></script>
     <script>
         $(document).ready(function () {
             $('#tSortable22').dataTable({
    "bPaginate": true,
    "bLengthChange": false,
    "bFilter": true,
    "bInfo": false,
    "bAutoWidth": true });
	
         });
		 
	
    </script>
				
				
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <?php include_once'php/footer.php'; ?>
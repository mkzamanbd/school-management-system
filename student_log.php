<?php
include("php/dbconnect.php");
include("php/checklogin.php");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Management system</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
	<link href="css/datatable/datatable.css" rel="stylesheet" />

	


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
                    <div class="col-md-12">
                        <h1 class="page-head-line">Student Log
						</h1>
                     
                    </div>
                </div>
				
				
<!---==========================================================================================================-->		
		
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Student Log
							<button type="button"class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button>

<!---==========================================================================================================-->      

<!---==========================================================================================================-->      


                        </div>
                        <div class="panel-body">
                             <div class="table-sorting table-responsive"id="printableArea">

                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>S No.</th>
                                            <th>Name</th>
                                            <th>Father Name</th>
                                            <th>Mother Name</th>
											<th>Class</th>
											<th>Section</th>
											<th>Birthdate</th>
											<th>Admission No</th>
                                            <th>Admission Date</th>
                                            <th>Contact No</th>
											<th>Address</th>
											<th>Total Fees</th>
											<th>Balance Fees</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql = "SELECT  distinct student.sname,student.fname,student.about,student.emailid,student.contact,
									student.fees,student.balance,student.roll_number,student.admissionNo,student.birthdate,
											student.joindate,student.id,student.delete_status,branch.branch,
											branch.detail from student join branch on branch.id = student.branch";

									
									
									
									$q = $conn->query($sql);
									$i=1;
									while($r = $q->fetch_assoc())
									{
									echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$r['sname'].'</td>
                                            <td>'.$r['fname'].'</td>
                                            <td>'.$r['emailid'].'</td>
											<td>'.$r['branch'].'</td>
											<td>'.$r['detail'].'</td>
                                            <td>'.date("d-m-Y", strtotime($r['birthdate'])).'</td>
                                            <td>'.$r['admissionNo'].'</td>
											<td>'.date("d-m-Y", strtotime($r['joindate'])).'</td>
                                            <td>'.$r['contact'].'</td>
                                            <td>'.$r['about'].'</td>
											<td>'.$r['fees'].'</td>
                                            <td>'.$r['balance'].'</td>
                                        </tr>';
										$i++;
									}
									?>
									
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
	
	<!-- you need to include the shieldui css and js assets in order for the components to work -->
<link rel="stylesheet" type="text/css" href="js/export2Excel/all.min.css" />
<script type="text/javascript" src="js/export2Excel/shieldui-all.min.js"></script>
<script type="text/javascript" src="js/export2Excel/jszip.min.js"></script>
<script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
  </script>		
                     
	<script src="js/dataTable/jquery.dataTables.min.js"></script>
    <script src="js/jquery.table2excel.js"></script>
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

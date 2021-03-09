<?php
include("../php/dbconnect.php");
include("../php/checklogin.php");


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CBST Public School</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="../css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="../css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	<link href="../css/ui.css" rel="stylesheet" />
	<link href="../css/datepicker.css" rel="stylesheet" />	
	
    <script src="../js/jquery-1.10.2.js"></script>
	
    <script type='text/javascript' src='../js/jquery/jquery-ui-1.10.1.custom.min.js'></script>
   
	
</head>
<?php
include("header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Bus Fees</h1>
                     
                    </div>
                </div>
				
				
				
 
		
		 <link href="../css/datatable/datatable.css" rel="stylesheet" />
		 
		
		 
		 
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Fees 
                        </div>
                        <div class="panel-body">
                            <div class="table-sorting table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name/Contact</th>
											<th>Class/Section</th>
											<th>Adm No</th>
                                            <th>Fees</th>
											<th>Balance</th>
											<th>April Bal</th>
											<th>July Bal</th>
											<th>October Bal</th>
											<th>January Bal</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql = "SELECT  distinct bus_student.sname,bus_student.fname,
									bus_student.fees,bus_student.balance,bus_student.admissionNo,
											bus_student.admdate,bus_student.id,bus_student.aprilb,bus_student.julyb,bus_student.octoberb,bus_student.januaryb,branch.branch,
											branch.detail from bus_student join branch on branch.id = bus_student.bid";
									$q = $conn->query($sql);
									$i=1;
									while($r = $q->fetch_assoc())
									{
									
									echo '<tr '.(($r['balance']>0)?'class="danger"':'').'>
                                            <td>'.$i.'</td>
                                            <td>'.$r['sname'].'<br/>/'.$r['fname'].'</td>
											<td>'.$r['branch'].' &nbsp;  '.$r['detail'].'</td>
                                            <td>'.$r['admissionNo'].'</td>
                                            <td>'.$r['fees'].'</td>
											<td>'.$r['balance'].'</td>
											<td>'.$r['aprilb'].'</td>
											<td>'.$r['julyb'].'</td>
											<td>'.$r['octoberb'].'</td>
											<td>'.$r['januaryb'].'</td>
											<td>
											
											

											
											
											<a  href="fees1.php?action=delete&id='.$r['id'].'" class="btn btn-warning btn-xs"><i class="fa fa-usd "></i>Take</span></a></td>
																					
											
                                        </tr>';
										$i++;
									}
									?>
									
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     
	<script src="../js/dataTable/jquery.dataTables.min.js"></script>
    
     <script>
         $(document).ready(function () {
             $('#tSortable22').dataTable({
    "bPaginate": true,
    "bLengthChange": true,
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

 <?php include_once'../php/footer.php'; ?>

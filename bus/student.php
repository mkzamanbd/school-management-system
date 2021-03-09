<?php
include("../php/dbconnect.php");
include("../php/checklogin.php");
$errormsg = '';


if(isset($_GET['action']) && $_GET['action']=="delete"){  //delete

$sql = "DELETE FROM bus_student WHERE id='".$_GET['id']."'";


if (mysqli_query($conn, $sql)) {
	
	$sql = "DELETE FROM bus_transaction WHERE busid='".$_GET['id']."'";
	mysqli_query($conn, $sql);
	
	header("location: student.php?act=3");
} else {
    header("location: student.php?act=4");
}
	



}




if(isset($_REQUEST['act']) && @$_REQUEST['act']=="1")
{
$errormsg = "<div class='alert alert-success'> <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Student Add successfully</div>";
}else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="2")
{
$errormsg = "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a> <strong>Success!</strong> Student Edit successfully</div>";
}
else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="3")
{
$errormsg = "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Student Delete successfully</div>";
}
else if(isset($_REQUEST['act']) && @$_REQUEST['act']=="4")
{
$errormsg = "<div class='alert alert-success'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Success!</strong> Student Data Not Deleted</div>";
}

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
                        <h1 class="page-head-line">Bus Students  
						
						
						<a href="add_student.php" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add </a>
						
						</h1>
                     
<?php

echo $errormsg;
?>
                    </div>
                </div>
				
				
				
 
		
		 <link href="../css/datatable/datatable.css" rel="stylesheet" />
		 
		
		 
		 
		<div class="panel panel-default">
                        <div class="panel-heading">
                            Manage Student  
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
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql = "SELECT  distinct bus_student.sname,bus_student.fname,
									bus_student.fees,bus_student.balance,bus_student.admissionNo,
											bus_student.admdate,bus_student.id,branch.branch,
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
											<td>
											
											

											
											
											<a onclick="return confirm(\'Are you sure you want to delete this record\');" href="student.php?action=delete&id='.$r['id'].'" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span></a> 
											<a  href="report.php?action=delete&id='.$r['id'].'" class="btn btn-warning btn-xs"><i class="fa fa-usd "></i>Report</span></a>	
											
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

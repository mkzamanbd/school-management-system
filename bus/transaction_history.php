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
	<link href="../css/datatable/datatable.css" rel="stylesheet" />

	


    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	
	 <script src="../js/jquery-1.10.2.js"></script>


       


	
</head>
<?php
include("header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
				<div class="row">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Bus Transaction History
						</h1>
                     
                    </div>
                </div>
				
				
<!---==========================================================================================================-->		
		
				<div class="panel panel-default">
                        <div class="panel-heading">
                            Student Log
							<button type="button"class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button>
                        </div>
						
						
                        <div class="panel-body">
                             <div class="table-sorting table-responsive"id="printableArea">

                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>S No.</th>
                                            <th>Name</th>
                                            <th>Father Name</th>
											<th>Admission No</th>
											<th>April pay</th>
											<th>July pay</th>
											<th>October pay</th>
											<th>January pay</th>
                                            <th>Transaction Date</th>
                                            <th>Transaction Amount</th>
											<th>Transaction Remark</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql = "SELECT  distinct t.submitdate, t.paid,t.april,t.july,t.october,t.january, t.fees_remark,
											s.sname,s.fname,s.admissionNo
									from bus_transaction as t join bus_student as s on s.id = t.busid";

									
									
									
									$q = $conn->query($sql);
									$i=1;
									while($r = $q->fetch_assoc())
									{
									echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$r['sname'].'</td>
                                            <td>'.$r['fname'].'</td>
											 <td>'.$r['admissionNo'].'</td>
											 <td>'.$r['april'].'</td>
											 <td>'.$r['july'].'</td>
											 <td>'.$r['october'].'</td>
											 <td>'.$r['january'].'</td>
                                            <td>'.date("d-m-Y", strtotime($r['submitdate'])).'</td>
                                            <td>'.$r['paid'].'</td>
											<td>'.$r['fees_remark'].'</td>
                                        </tr>';
										$i++;
									}
									?>
									
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


<div>
					<h1 align="center">Date Wise Transaction</h1></br>
					
					
					
					<form action="transaction_history.php" method="post"  class="form-horizontal">
                        
						<div class="form-group">	
							
							
							
							<label class="col-sm-2 control-label" for="Old">Date </label>
								<div class="col-sm-6">
									<input type="date" class="form-control" id="date" name="date" required>
								</div>
							</div>
						
						<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
									<button type="submit" name="submit" class="btn btn-primary">Get </button>
								</div>
							</div>
                         
                     
					</form>
					
					
					
					
					
<?php					
if(isset($_POST['submit']))
{

$date = mysqli_real_escape_string($conn,$_POST['date']);
					
$sql = "SELECT sum(paid) as tamount FROM bus_transaction where submitdate= '$date'";//total of each date
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$tamount = $tpr['tamount'];	
echo' <h1 align="center"style=" color:green;"> Total Transaction :  '.$tpr['tamount'].' <h1>';

		
}				
					
					
?>					
</div><!--end div-->					

					
	<!-- you need to include the shieldui css and js assets in order for the components to work -->
<script src="../js/dataTable/jquery.dataTables.min.js"></script>
<script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
  </script>		
                     
	<script src="../js/dataTable/jquery.dataTables.min.js"></script>
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



    <?php include_once'../php/footer.php'; ?>

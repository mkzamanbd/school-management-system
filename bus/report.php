<?php
include("../php/dbconnect.php");
include("../php/checklogin.php");



if(isset($_GET['action']) && $_GET['action']=="delete"){  //delete

$id = $_GET['id'];

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
<?php
							 
$sql = "select paid,submitdate,fees_remark from bus_transaction  where busid='$id'";
$fq = $conn->query($sql);
if($fq->num_rows>0)
{


$sql = "select s.id,s.sname,s.balance,s.fees,s.admissionNo,s.fname,b.branch,b.detail from bus_student as s,branch as b where b.id=s.bid  and s.id='$id'";
$sq = $conn->query($sql);
$sr = $sq->fetch_assoc();

echo '
<h4>Student Bus Fees Info</h4>
<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th>Name</th>
<td>'.$sr['sname'].'</td>
<th>CLASS</th>
<td>'.$sr['branch'].'&nbsp' .$sr['detail'].'</td>
</tr>
<tr>
<th>Father Name</th>
<td>'.$sr['fname'].'</td>
<th>Admission No</th>
<td>'.$sr['admissionNo'].'</td>
</tr>


</table>
</div>
';


echo '
<h4 >Fee Info</h4>
<div class="table-responsive">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Date</th>
        <th>Paid</th>
        <th>Remark</th>
      </tr>
    </thead>
    <tbody>';
	$totapaid = 0;
while($res = $fq->fetch_assoc())
{
$totapaid+=$res['paid'];
        echo '<tr>
        <td>'.date("d-m-Y", strtotime($res['submitdate'])).'</td>
        <td>'.$res['paid'].'</td>
        <td>'.$res['fees_remark'].'</td>
      </tr>' ;
}
      
echo '	  
    </tbody>
  </table>
 </div> 
 
<table class="table table-bordered" >
<tr>
<th>Total Fees: 
</th>
<td>'.$sr['fees'].'
</td>
</tr>

<tr>
<th>Total Paid: 
</th>
<td>'.$totapaid.'
</td>
</tr>

<tr>
<th>Balance: 
</th>
<td>'.$sr['balance'].'
</td>
</tr>
</table>
 ';


 }
 
 
else
{
echo 'No fees submit.';
}
 


?>
							 
                                
                            </div>
                        </div>
                    </div>



					
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
				
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->


<?php include_once'../php/footer.php';  }
else{

header('Location: student.php');
}
 ?>
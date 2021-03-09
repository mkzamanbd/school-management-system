<?php
include("php/dbconnect.php");
include("php/checklogin.php");
$errormsg = '';
$action = "add";

$branch='';
$address='';
$detail = '';
$id= '';
if(isset($_POST['save']))
{

$name = mysqli_real_escape_string($conn,$_POST['name']);
$amount = mysqli_real_escape_string($conn,$_POST['amount']);
$date = mysqli_real_escape_string($conn,$_POST['date']);

 if($_POST['action']=="add")
 {
 
  $sql = $conn->query("INSERT INTO expense (name,amount,date) VALUES ('$name','$amount','$date')") ;
    
    echo '<script type="text/javascript">window.location="expense.php?act=1";</script>';
 
 }else{
	 
 }


}

if(isset($_REQUEST['act']) && @$_REQUEST['act']=="1")
{
$errormsg = "<div class='alert alert-success'><strong>Success!</strong> Expense Add successfully</div>";
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Gyan Public School Bhilai</title>

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
                    <div class="col-md-12">
                        <h1 class="page-head-line">Expense
						<?php
						echo (isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")?
						' <a href="expense.php" class="btn btn-primary btn-sm pull-right">Back <i class="glyphicon glyphicon-arrow-right"></i></a>':'<a href="expense.php?action=add" class="btn btn-primary btn-sm pull-right"><i class="glyphicon glyphicon-plus"></i> Add </a>';
						?>
						</h1>
                     
<?php

echo $errormsg;
?>
                    </div>
                </div>
				
				
				
        <?php 
		 if(isset($_GET['action']) && @$_GET['action']=="add" || @$_GET['action']=="edit")
		 {
		?>
		
			<script type="text/javascript" src="js/validation/jquery.validate.min.js"></script>
                <div class="row">
				
                    <div class="col-sm-8 col-sm-offset-2">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           <?php echo ($action=="add")? "Add Expense": "Edit Class"; ?>
                        </div>
						<form action="expense.php" method="post" id="signupForm1" class="form-horizontal">
                        <div class="panel-body">
						
						
						
						
						<div class="form-group">
								
							
							
							<div class="form-group">
								<label class="col-sm-2 control-label" for="Password"> Expense </label>
								<div class="col-sm-10">
	                        <textarea class="form-control" id="name" name="name"required></textarea >
								</div>
							</div>
							
							
							<label class="col-sm-2 control-label" for="Old">Amount </label>
								<div class="col-sm-10">
									<input type="number" class="form-control" id="amount" name="amount"required >
								</div>
							</div>
							
							<label class="col-sm-2 control-label" for="Old">Date </label>
								<div class="col-sm-10">
									<input type="date" class="form-control" id="date" name="date" required>
								</div>
							</div>
						
						<div class="form-group">
								<div class="col-sm-8 col-sm-offset-2">
								<input type="hidden" name="id" value="<?php echo $id;?>">
								<input type="hidden" name="action" value="<?php echo $action;?>">
								
									<button type="submit" name="save" class="btn btn-primary">Save </button>
								</div>
							</div>
                         
                           
                           
                         
                           
                         </div>
							</form>
							
                        </div>
                            </div>
            
			
                </div>
               

			   
			   


			   
		<?php
		}else{
		?>
		
		 <link href="css/datatable/datatable.css" rel="stylesheet" />
		 
		
		 
		 
		<div class="panel panel-default">
                        <div class="panel-heading">
                           Expense
						   <button type="button"class="btn btn-default" onclick="printDiv('printableArea')"><i class="fa fa-print" aria-hidden="true" style="    font-size: 17px;"> Print</i></button>	
                        </div>
                        <div class="panel-body"id="printableArea">
                             <div class="table-sorting table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Exopense</th>
                                            <th>Amount</th>
                                            <th>Date</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									$sql = "select name,amount,date from expense order by date DESC";
									$q = $conn->query($sql);
									$i=1;
									while($r = $q->fetch_assoc())
									{
									echo '<tr>
                                            <td>'.$i.'</td>
                                            <td>'.$r['name'].'</td>
                                            <td>'.$r['amount'].'</td>
                                            <td>'.$r['date'].'</td>
											<td>   </td>
											 
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
					<h1 align="center">Date Wise Expense</h1></br>
					
					
					
					<form action="expense.php" method="post" id="signupForm1" class="form-horizontal">
                        
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
					
$sql = "SELECT sum(amount) as tamount FROM expense where date= '$date'";//total of each date
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$tamount = $tpr['tamount'];	
		
$sql = "SELECT sum(paid) as ttamount FROM fees_transaction where submitdate= '$date'";//total of each date
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$ttamount = $tpr['ttamount'];
		
?>		
	<h1 align="center"style=" color:green;"> Total Paid :  <?php echo $ttamount; ?> <h1></br>
	<h1 align="center"style=" color:green;"> Total Expense :  <?php echo $tamount; ?> <h1></br>
	<h1 align="center"style=" color:green;"> Total Balance :  <?php echo $ttamount-$tamount; ?> <h1>


<?php
		
}				
					
					
?>					
</div><!--end div-->					
					
					
					
					
                     
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
	<script>
  function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
  

</script>	
		
		<?php
		}
		?>
				
				
            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

 <?php include_once'php/footer.php'; ?>
<?php
include("../php/dbconnect.php");
include("../php/checklogin.php");


$result_s = mysqli_query($conn,"SELECT id FROM bus_student"); //total student count
$student = mysqli_num_rows($result_s);

$sql = "SELECT sum(paid) as totalpaid FROM bus_transaction";//tatal paid count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$totalpaid = $tpr['totalpaid'];

$sql = "SELECT sum(fees) as totalfees FROM bus_student ";//tatal fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$totalfees = $tpr['totalfees'];	

		
$sql = "SELECT sum(april) as tapril FROM bus_student ";//total april fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$tapril = $tpr['tapril'];

$sql = "SELECT sum(july) as tjuly FROM bus_student ";//total july fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$tjuly = $tpr['tjuly'];


$sql = "SELECT sum(october) as toctober FROM bus_student ";//total october fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$toctober = $tpr['toctober'];


$sql = "SELECT sum(january) as tjanuary FROM bus_student ";//total january fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$tjanuary = $tpr['tjanuary'];


$sql = "SELECT sum(april) as papril FROM bus_transaction ";//total paid april fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$papril = $tpr['papril'];

$sql = "SELECT sum(july) as pjuly FROM bus_transaction ";//total  paid july fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$pjuly = $tpr['pjuly'];


$sql = "SELECT sum(october) as poctober FROM bus_transaction ";//total paid october fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$poctober = $tpr['poctober'];


$sql = "SELECT sum(january) as pjanuary FROM bus_transaction ";//total paid january fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$pjanuary = $tpr['pjanuary'];
		
//SELECT sum(paid) as pjanuary from fees_transaction where month(submitdate) = 4
/**======================Monthly report==========================**/		
$sql = "SELECT sum(paid) as january1 FROM bus_transaction where month(submitdate) = 1 ";//total paid january fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$january1 = $tpr['january1'];		
		
$sql = "SELECT sum(paid) as feb1 FROM bus_transaction where month(submitdate) = 2 ";//total paid feb fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$feb1 = $tpr['feb1'];


$sql = "SELECT sum(paid) as march1 FROM bus_transaction where month(submitdate) = 3 ";//total paid march fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$march1 = $tpr['march1'];	

$sql = "SELECT sum(paid) as april1 FROM bus_transaction where month(submitdate) = 4 ";//total paid april fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$april1 = $tpr['april1'];

$sql = "SELECT sum(paid) as may1 FROM bus_transaction where month(submitdate) = 5 ";//total paid may fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$may1 = $tpr['may1'];	

$sql = "SELECT sum(paid) as june1 FROM bus_transaction where month(submitdate) = 6 ";//total paid june fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$june1 = $tpr['june1'];	

$sql = "SELECT sum(paid) as july1 FROM bus_transaction where month(submitdate) = 7 ";//total paid july fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$july1 = $tpr['july1'];	

$sql = "SELECT sum(paid) as august1 FROM bus_transaction where month(submitdate) = 8 ";//total paid august fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$august1 = $tpr['august1'];

$sql = "SELECT sum(paid) as september1 FROM bus_transaction where month(submitdate) = 9 ";//total paid september fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$september1 = $tpr['september1'];

$sql = "SELECT sum(paid) as october1 FROM bus_transaction where month(submitdate) = 10 ";//total paid october fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$october1 = $tpr['october1'];

$sql = "SELECT sum(paid) as november1 FROM bus_transaction where month(submitdate) = 11 ";//total paid November fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$november1 = $tpr['november1'];	

$sql = "SELECT sum(paid) as december1 FROM bus_transaction where month(submitdate) = 12 ";//total paid december fees count
		$tpq = $conn->query($sql);
		$tpr = $tpq->fetch_assoc();
		$december1 = $tpr['december1'];						
		
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>School Management system</title>

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
</head>
<?php
include("header.php");
?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">BUS DASHBOARD</h1>
                       
                    </div>
                </div>
                <!-- /. ROW  -->
                <div class="row">
				
				
					<div class="col-md-3">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class=""></i>
								<span>Total-<?php echo $tapril ?></span></br>
								<span>Paid-<?php echo $papril ?></span></br>
								<span>Balance-<?php echo $tapril-$papril ?></span>
                                <h5>April</h5>
                            </a>
                        </div>
                    </div><div class="col-md-3">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class=""></i>
								<span>Total-<?php echo $tjuly ?></span></br>
								<span>Paid-<?php echo $pjuly ?></span></br>
								<span>Balance-<?php echo $tjuly-$pjuly ?></span>
                                <h5>July</h5>
                            </a>
                        </div>
                    </div><div class="col-md-3">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class=""></i>
								<span>Total-<?php echo $toctober ?></span></br>
								<span>Paid-<?php echo $poctober ?></span></br>
								<span>Balance-<?php echo $toctober-$poctober ?></span>
                                <h5>October</h5>
                            </a>
                        </div>
                    </div><div class="col-md-3">
                        <div class="main-box mb-dull">
                            <a href="#">
                                <i class=""></i>
								<span>Total-<?php echo $tjanuary ?></span></br>
								<span>Paid-<?php echo $pjanuary ?></span></br>
								<span>Balance-<?php echo $tjanuary-$pjanuary ?></span>
                                <h5>January</h5>
                            </a>
                        </div>
                    </div>
					
					
				
				  <div class="col-md-3">
                        <div class="main-box mb-pink">
                            <a href="student.php">
                                <i class="fa fa-users fa-5x"></i>
								<span class="number counter"><?php echo $student ?></span>
                                <h5>Student Bus</h5>
                            </a>
                        </div>
                    </div>
					
					
				
				
                   
					
                    <div class="col-md-3">
                        <div class="main-box mb-dull">
                            <a href="fees.php">
                                <i class="fa fa-dollar fa-5x"></i>
								<span class="number counter"><?php echo $totalfees ?></span>
                                <h5>Take Bus Fees</h5>
                            </a>
                        </div>
                    </div>
					
					
					
					
					<div class="col-md-3">
                        <div class="main-box mb-red">
                            <a href="transaction_history.php">
                                <i class="fa fa-dollar fa-5x"></i>
								<span class="number counter"><?php echo $totalpaid ?></span>
                                <h5>Transaction</h5>
                            </a>
                        </div>
                    </div>
					
					
					
					
					
					
					
					
                    </div></br>

					

<h1 align ="center"style="background-color:;"> Monthly Reports </h1>				
					
					
<div class="table-sorting table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="tSortable22">
                                    <thead>
                                        <tr class="danger">
                                            <th>#</th>
                                            <th>Month</th>
                                            <th>Total Collection</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
                                            <td>01</td>
                                            <td>January</td>
											<th><?php echo $january1; ?></th>
                                        </tr>
										<tr>
                                            <td>02</td>
                                            <td>Febuary</td>
											<th><?php echo $feb1; ?></th>
                                        </tr>
										<tr>
                                            <td>03</td>
                                            <td>March</td>
											<th><?php echo $march1; ?></th>
                                        </tr>
										<tr>
                                            <td>04</td>
                                            <td>April</td>
											<th><?php echo $april1; ?></th>
                                        </tr>
										<tr>
                                            <td>05</td>
                                            <td>May</td>
											<th><?php echo $may1; ?></th>
                                        </tr>
										<tr>
                                            <td>06</td>
                                            <td>June</td>
											<th><?php echo $june1; ?></th>
                                        </tr>
										<tr>
                                            <td>07</td>
                                            <td>July</td>
											<th><?php echo $july1; ?></th>
                                        </tr><tr>
                                            <td>08</td>
                                            <td>August</td>
											<th><?php echo $august1; ?></th>
                                        </tr><tr>
                                            <td>09</td>
                                            <td>September</td>
											<th><?php echo $september1; ?></th>
                                        </tr><tr>
                                            <td>10</td>
                                            <td>October</td>
											<th><?php echo $october1; ?></th>
                                        </tr><tr>
                                            <td>11</td>
                                            <td>November</td>
											<th><?php echo $november1; ?></th>
                                        </tr><tr>
                                            <td>12</td>
                                            <td>December</td>
											<th><?php echo $december1; ?></th>
                                        </tr>
										<tr class="danger">
                                            <td>13</td>
                                            <td>Total</td>
											<th><?php echo $totalpaid; ?></th>
                                        </tr>
									
                                        
                                    </tbody>
                                </table>
                            					
					
					
			</div>		
					

            
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

  <?php include_once'../php/footer.php'; ?>
<?php
include("php/dbconnect.php");
include("php/checklogin.php");


/**=====================================================**/

$result_s = mysqli_query($conn, "SELECT id FROM student"); //total student count
$student = mysqli_num_rows($result_s);

$result_b = mysqli_query($conn, "SELECT id FROM branch where delete_status ='0'"); // total class count
$branch = mysqli_num_rows($result_b);



$sql = "SELECT sum(paid) as totalpaid FROM fees_transaction"; //tatal paid count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$totalpaid = $tpr['totalpaid'];

$sql = "SELECT sum(fees) as totalfees FROM student "; //tatal fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$totalfees = $tpr['totalfees'];


$sql = "SELECT sum(april) as tapril FROM student "; //total april fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$tapril = $tpr['tapril'];

$sql = "SELECT sum(july) as tjuly FROM student "; //total july fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$tjuly = $tpr['tjuly'];


$sql = "SELECT sum(october) as toctober FROM student "; //total october fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$toctober = $tpr['toctober'];


$sql = "SELECT sum(january) as tjanuary FROM student "; //total january fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$tjanuary = $tpr['tjanuary'];


$sql = "SELECT sum(april) as papril FROM fees_transaction "; //total paid april fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$papril = $tpr['papril'];

$sql = "SELECT sum(july) as pjuly FROM fees_transaction "; //total  paid july fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$pjuly = $tpr['pjuly'];


$sql = "SELECT sum(october) as poctober FROM fees_transaction "; //total paid october fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$poctober = $tpr['poctober'];


$sql = "SELECT sum(january) as pjanuary FROM fees_transaction "; //total paid january fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$pjanuary = $tpr['pjanuary'];


//SELECT sum(paid) as pjanuary from fees_transaction where month(submitdate) = 4
/**======================Monthly report==========================**/
$sql = "SELECT sum(paid) as january1 FROM fees_transaction where month(submitdate) = 1 "; //total paid january fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$january1 = $tpr['january1'];

$sql = "SELECT sum(paid) as feb1 FROM fees_transaction where month(submitdate) = 2 "; //total paid feb fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$feb1 = $tpr['feb1'];


$sql = "SELECT sum(paid) as march1 FROM fees_transaction where month(submitdate) = 3 "; //total paid march fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$march1 = $tpr['march1'];

$sql = "SELECT sum(paid) as april1 FROM fees_transaction where month(submitdate) = 4 "; //total paid april fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$april1 = $tpr['april1'];

$sql = "SELECT sum(paid) as may1 FROM fees_transaction where month(submitdate) = 5 "; //total paid may fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$may1 = $tpr['may1'];

$sql = "SELECT sum(paid) as june1 FROM fees_transaction where month(submitdate) = 6 "; //total paid june fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$june1 = $tpr['june1'];

$sql = "SELECT sum(paid) as july1 FROM fees_transaction where month(submitdate) = 7 "; //total paid july fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$july1 = $tpr['july1'];

$sql = "SELECT sum(paid) as august1 FROM fees_transaction where month(submitdate) = 8 "; //total paid august fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$august1 = $tpr['august1'];

$sql = "SELECT sum(paid) as september1 FROM fees_transaction where month(submitdate) = 9 "; //total paid september fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$september1 = $tpr['september1'];

$sql = "SELECT sum(paid) as october1 FROM fees_transaction where month(submitdate) = 10 "; //total paid october fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$october1 = $tpr['october1'];

$sql = "SELECT sum(paid) as november1 FROM fees_transaction where month(submitdate) = 11 "; //total paid November fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$november1 = $tpr['november1'];

$sql = "SELECT sum(paid) as december1 FROM fees_transaction where month(submitdate) = 12 "; //total paid december fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$december1 = $tpr['december1'];
/**======================monthly report for expense===============================**/


$sql = "SELECT sum(amount) as ejanuary1 FROM expense where month(date) = 1 "; //total expense january fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$ejanuary1 = $tpr['ejanuary1'];

$sql = "SELECT sum(amount) as efeb1 FROM expense where month(date) = 2 "; //total expense feb fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$efeb1 = $tpr['efeb1'];


$sql = "SELECT sum(amount) as emarch1 FROM expense where month(date) = 3 "; //total expense march fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$emarch1 = $tpr['emarch1'];

$sql = "SELECT sum(amount) as eapril1 FROM expense where month(date) = 4 "; //total expense april fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$eapril1 = $tpr['eapril1'];

$sql = "SELECT sum(amount) as emay1 FROM expense where month(date) = 5 "; //total expense may fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$emay1 = $tpr['emay1'];

$sql = "SELECT sum(amount) as ejune1 FROM expense where month(date) = 6 "; //total expense june fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$ejune1 = $tpr['ejune1'];

$sql = "SELECT sum(amount) as ejuly1 FROM expense where month(date) = 7 "; //total expense july fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$ejuly1 = $tpr['ejuly1'];

$sql = "SELECT sum(amount) as eaugust1 FROM expense where month(date) = 8 "; //total expense august fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$eaugust1 = $tpr['eaugust1'];

$sql = "SELECT sum(amount) as eseptember1 FROM expense where month(date) = 9 "; //total expense september fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$eseptember1 = $tpr['eseptember1'];

$sql = "SELECT sum(amount) as eoctober1 FROM expense where month(date) = 10 "; //total expense october fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$eoctober1 = $tpr['eoctober1'];

$sql = "SELECT sum(amount) as enovember1 FROM expense where month(date) = 11 "; //total expense November fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$enovember1 = $tpr['enovember1'];

$sql = "SELECT sum(amount) as edecember1 FROM expense where month(date) = 12 "; //total expense december fees count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$edecember1 = $tpr['edecember1'];

$sql = "SELECT sum(amount) as texpense FROM expense "; //total expense  count
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$texpense = $tpr['texpense'];
/**=====================================================**/

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>CBST Public School</title>

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
</head>
<?php
include("php/header.php");
?>
<div id="page-wrapper">
	<div id="page-inner">
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-head-line">DASHBOARD</h1>

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
						<span>Balance-<?php echo $tapril - $papril ?></span>
						<h5>April</h5>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="main-box mb-dull">
					<a href="#">
						<i class=""></i>
						<span>Total-<?php echo $tjuly ?></span></br>
						<span>Paid-<?php echo $pjuly ?></span></br>
						<span>Balance-<?php echo $tjuly - $pjuly ?></span>
						<h5>July</h5>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="main-box mb-dull">
					<a href="#">
						<i class=""></i>
						<span>Total-<?php echo $toctober ?></span></br>
						<span>Paid-<?php echo $poctober ?></span></br>
						<span>Balance-<?php echo $toctober - $poctober ?></span>
						<h5>October</h5>
					</a>
				</div>
			</div>
			<div class="col-md-3">
				<div class="main-box mb-dull">
					<a href="#">
						<i class=""></i>
						<span>Total-<?php echo $tjanuary ?></span></br>
						<span>Paid-<?php echo $pjanuary ?></span></br>
						<span>Balance-<?php echo $tjanuary - $pjanuary ?></span>
						<h5>January</h5>
					</a>
				</div>
			</div>



			<div class="col-md-3">
				<div class="main-box mb-pink">
					<a href="student.php">
						<i class="fa fa-users fa-5x"></i>
						<span class="number counter"><?php echo $student ?></span>
						<h5>Student</h5>
					</a>
				</div>
			</div>



			<div class="col-md-3">
				<div class="main-box mb-red">
					<a href="branch.php">
						<i class="fa fa-bank fa-5x"></i>
						<span class="number counter"><?php echo $branch ?></span>
						<h5>CLASS</h5>
					</a>
				</div>
			</div>




			<div class="col-md-3">
				<div class="main-box mb-dull">
					<a href="fees.php">
						<i class="fa fa-dollar fa-5x"></i>
						<span class="number counter"><?php echo $totalfees ?></span>
						<h5>Take Fees</h5>
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





			<div class="col-md-3">
				<div class="main-box mb-red">
					<a href="report.php">
						<i class="fa fa-file-text fa-5x"></i>
						<h5>Fees Report</h5>
					</a>
				</div>
			</div>


			<div class="col-md-3">
				<div class="main-box mb-dull">
					<a href="tc.php">
						<i class="fa fa-file-text fa-5x"></i>
						<h5>TC Generate</h5>
					</a>
				</div>
			</div>

			<div class="col-md-3">
				<div class="main-box mb-red">
					<a href="custom_tc.php">
						<i class="fa fa-file-text fa-5x"></i>
						<h5>Custom Tc</h5>
					</a>
				</div>
			</div>

			<div class="col-md-3">
				<div class="main-box mb-dull">
					<a href="student_log.php">
						<i class="fa fa-file-text fa-5x"></i>
						<h5>Print All</h5>
					</a>
				</div>
			</div></br>
			<h1 align="center" style="background-color: transparent;"> Monthly Reports </h1>
		</div> </br>


		<div class="table-sorting table-responsive">

			<table class="table table-striped table-bordered table-hover" id="tSortable22">
				<thead>
					<tr class="danger">
						<th>#</th>
						<th>Month</th>
						<th>Total Collection</th>
						<th>Total Expense</th>
						<th>Total Income</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>01</td>
						<td>January</td>
						<th><?php echo $january1; ?></th>
						<th><?php echo $ejanuary1; ?></th>
						<th><?php echo $january1 - $ejanuary1; ?></th>
					</tr>
					<tr>
						<td>02</td>
						<td>Febuary</td>
						<th><?php echo $feb1; ?></th>
						<th><?php echo $efeb1; ?></th>
						<th><?php echo $feb1 - $efeb1; ?></th>
					</tr>
					<tr>
						<td>03</td>
						<td>March</td>
						<th><?php echo $march1; ?></th>
						<th><?php echo $emarch1; ?></th>
						<th><?php echo $march1 - $emarch1; ?></th>
					</tr>
					<tr>
						<td>04</td>
						<td>April</td>
						<th><?php echo $april1; ?></th>
						<th><?php echo $eapril1; ?></th>
						<th><?php echo $april1 - $eapril1; ?></th>
					</tr>
					<tr>
						<td>05</td>
						<td>May</td>
						<th><?php echo $may1; ?></th>
						<th><?php echo $emay1; ?></th>
						<th><?php echo $may1 - $emay1; ?></th>
					</tr>
					<tr>
						<td>06</td>
						<td>June</td>
						<th><?php echo $june1; ?></th>
						<th><?php echo $ejune1; ?></th>
						<th><?php echo $june1 - $ejune1; ?></th>
					</tr>
					<tr>
						<td>07</td>
						<td>July</td>
						<th><?php echo $july1; ?></th>
						<th><?php echo $ejuly1; ?></th>
						<th><?php echo $july1 - $ejuly1; ?></th>
					</tr>
					<tr>
						<td>08</td>
						<td>August</td>
						<th><?php echo $august1; ?></th>
						<th><?php echo $eaugust1; ?></th>
						<th><?php echo $august1 - $eaugust1; ?></th>
					</tr>
					<tr>
						<td>09</td>
						<td>September</td>
						<th><?php echo $september1; ?></th>
						<th><?php echo $eseptember1; ?></th>
						<th><?php echo $september1 - $eseptember1; ?></th>
					</tr>
					<tr>
						<td>10</td>
						<td>October</td>
						<th><?php echo $october1; ?></th>
						<th><?php echo $eoctober1; ?></th>
						<th><?php echo $october1 - $eoctober1; ?></th>
					</tr>
					<tr>
						<td>11</td>
						<td>November</td>
						<th><?php echo $november1; ?></th>
						<th><?php echo $enovember1; ?></th>
						<th><?php echo $november1 - $enovember1; ?></th>
					</tr>
					<tr>
						<td>12</td>
						<td>December</td>
						<th><?php echo $december1; ?></th>
						<th><?php echo $edecember1; ?></th>
						<th><?php echo $december1 - $edecember1; ?></th>
					</tr>
					<tr class="danger">
						<td>13</td>
						<td>Total</td>
						<th><?php echo $totalpaid; ?></th>
						<th><?php echo $texpense; ?></th>
						<th><?php echo $totalpaid - $texpense; ?></th>
					</tr>


				</tbody>
			</table>



		</div>
		<!-- /. ROW  -->


	</div>
	<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->

<?php include_once 'php/footer.php'; ?>
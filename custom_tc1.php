<?php
include("php/dbconnect.php");
include("php/checklogin.php");
$errormsg= '';
if(isset($_POST['submit']))
{
	
/*=================================================================================================*/

$sname = mysqli_real_escape_string($conn,$_POST['sname']);
$fname = mysqli_real_escape_string($conn,$_POST['fname']);
$mname = mysqli_real_escape_string($conn,$_POST['mname']);
$cast = mysqli_real_escape_string($conn,$_POST['cast']);
$class = mysqli_real_escape_string($conn,$_POST['class']);
$sno = mysqli_real_escape_string($conn,$_POST['sno']);
$rno = mysqli_real_escape_string($conn,$_POST['rno']);
$dno = mysqli_real_escape_string($conn,$_POST['dno']);
$admno = mysqli_real_escape_string($conn,$_POST['admno']);
$pyears = mysqli_real_escape_string($conn,$_POST['pyears']);
$bdate2 = mysqli_real_escape_string($conn,$_POST['bdate2']);


$admdate1 = $_POST['admdate'];
$admdate = date( 'd-m-Y',strtotime( $admdate1));

$bdate1 = $_POST['bdate'];
$bdate = date( 'd-m-Y',strtotime($bdate1));

$leaves = mysqli_real_escape_string($conn,$_POST['leaves']);
$dayof = mysqli_real_escape_string($conn,$_POST['dayof']);
$passclass = mysqli_real_escape_string($conn,$_POST['passclass']);
$medium = mysqli_real_escape_string($conn,$_POST['medium']);
$enrollclass = mysqli_real_escape_string($conn,$_POST['enrollclass']);
$tfees = mysqli_real_escape_string($conn,$_POST['tfees']);



?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GPS BHILAI-03</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--link href="css/print.css" rel="stylesheet"-->
<style>

body{
					display:block;
					background: url(img/cbst.png) fixed no-repeat;
					opacity: 0.9;
					background-position:  right center;
					
					
					

					
					}
</style>
  </head>

  <body>
<div class="container">
<div class="row" style="background-color:#ffffff;border-bottom:3px solid #000000;border-top:3px solid #000000;border-left:3px solid #000000;border-right:3px solid #000000;">


			<div class="col-sm-2">
				<div class="receipt-left"style="padding-top:10px">
					<img class="img-responsive" alt="cbst" src="img/cbst.png" style="width: 140px;">
				</div>
			</div>
  
  
				<div class="col-sm-6">
						<h3 class="text-center"><b> CBST PUBLIC SCHOOL </b></h3>
						<h5 class="text-center">Near By Zila School ,Mymensingh.</h5>
						<h4 class="text-center">Distt-Mymensingh</h4>
						<h4 class="text-center">Afiliatted to  C.G. Board</h4>					
				</div>
				<div class="col-sm-4">
					<p class ="text-right mt-5 pt-5">Reg No.- 2606 &nbsp;&nbsp;Dias Code - 22101100327</p>
				</div>
</div><!--end row-->
</div><!--end container-->


<div class="container">
<div class="row" style="background-color:#ffffff;border-bottom:3px solid #000000;border-left:3px solid #000000;border-right:3px solid #000000;">
							<div class="col-md-12">
								<h4 align="center"style="padding-right: 80px;">TRANSFER CERTIFICATE </h4>
							</div>
							<div class="col-md-6">
								<p style="padding-left: px;">S. No. <?php echo $sno; ?></p>
								<p style="padding-left: px;">Roll No. <?php echo $rno; ?></p>
							</div>
							
							<div class="col-md-6">
								<p class="text-right"style="padding-left: px;">Admission No. <?php echo $admno; ?></p>
								<p class="text-right"style="padding-left: px;">Descharge NO. <?php echo $dno; ?></p>
							</div>
							
							<div class="col-md-12">
								<p>This is Certify that Master/Kumari &nbsp;<b> <?php echo $sname; ?>  </b> </p></br>
								<p> Father's Name Shri.&nbsp;<b> <?php echo $fname; ?></b> &nbsp;&nbsp;&nbsp;
							Mothers's Name Smt.&nbsp;<b> <?php echo $mname; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;Cast <b>&nbsp;&nbsp; <?php echo $cast; ?> </b> &nbsp;&nbsp;
							 &nbsp;&nbsp; Tahsil Patan &nbsp;&nbsp;&nbsp;&nbsp; Distt-Durg </br></br>(C.G) attended the school from &nbsp;&nbsp;<b> <?php echo $admdate; ?>   </b>&nbsp;&nbsp;and now he/she leave 
							 on the &nbsp;&nbsp;&nbsp;<b><?php echo $leaves; ?></b>&nbsp;&nbsp;&nbsp;day of&nbsp;&nbsp;&nbsp;<b><?php echo $dayof; ?></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;He/she was
							 paid fees as below </br></br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data. As per school Admission No.&nbsp;&nbsp; <b><?php echo $admno; ?> </b>
							 &nbsp;&nbsp;&nbsp;&nbsp;his/her date of Birth &nbsp;&nbsp; <b><?php echo $bdate; ?></b>&nbsp;&nbsp;is
							 (in Word ) &nbsp;&nbsp;&nbsp;&nbsp;<b> <?php echo $bdate2; ?> &nbsp;&nbsp;&nbsp;&nbsp;</b>he/she</br></br> was vaccinated or is otherwise protected from small pox.</br></br>
							 the last annual promotion passed/failed by his/her is that of class &nbsp;&nbsp;&nbsp;<b>12th&nbsp;&nbsp;&nbsp;</b>medium&nbsp;&nbsp;&nbsp;<b>English&nbsp;&nbsp;&nbsp;</b>
							 in the Year &nbsp;&nbsp;&nbsp;<b><?php echo $pyears; ?>&nbsp;&nbsp;&nbsp;</b>He/she was enrolled</br></br> in class &nbsp;&nbsp;&nbsp; <b><?php echo $enrollclass; ?></b>&nbsp;&nbsp;&nbsp;he/she conduct in school was
							 &nbsp;&nbsp;&nbsp;<b>Good&nbsp;&nbsp;&nbsp;</b> 
							 </p></br></br></br>
							 
							 
							 <div><!---sing box-->
												
									<div class="text-right">
										<div class="receipt-right">
											</br></br><p>Principal <i class="fa fa-location-arrow"></i></p>
										</div>
									</div>
												
								</div><!---end sing box-->
							</div><!--end col-md-12-->
						
</div><!--end row-->
</div><!--end container-->



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!--script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <!--script src="vendor/vide/jquery.vide.min.js"></script-->

 

  </body>

</html>
<?php }else
{
	header('Location: custom_tc.php');
}


 ?>

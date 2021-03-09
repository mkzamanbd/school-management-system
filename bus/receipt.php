<?php
include("../php/dbconnect.php");
include("../php/checklogin.php");





       
$errormsg= '';
if(isset($_POST['save']))
{
$paid = mysqli_real_escape_string($conn,$_POST['paid']);


//fuction for converting number to currency
/**
   * Created by PhpStorm.
   * User: sakthikarthi
   * Date: 9/22/14
   * Time: 11:26 AM
   * Converting Currency Numbers to words currency format
   */
$number = $paid;
   $no = round($number);
   $point = round($number - $no, 2) * 100;
   $hundred = null;
   $digits_1 = strlen($no);
   $i = 0;
   $str = array();
   $words = array('0' => '', '1' => 'one', '2' => 'two',
    '3' => 'three', '4' => 'four', '5' => 'five', '6' => 'six',
    '7' => 'seven', '8' => 'eight', '9' => 'nine',
    '10' => 'ten', '11' => 'eleven', '12' => 'twelve',
    '13' => 'thirteen', '14' => 'fourteen',
    '15' => 'fifteen', '16' => 'sixteen', '17' => 'seventeen',
    '18' => 'eighteen', '19' =>'nineteen', '20' => 'twenty',
    '30' => 'thirty', '40' => 'forty', '50' => 'fifty',
    '60' => 'sixty', '70' => 'seventy',
    '80' => 'eighty', '90' => 'ninety');
   $digits = array('', 'hundred', 'thousand', 'lakh', 'crore');
   while ($i < $digits_1) {
     $divider = ($i == 2) ? 10 : 100;
     $number = floor($no % $divider);
     $no = floor($no / $divider);
     $i += ($divider == 10) ? 1 : 2;
     if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? ' and ' : null;
        $str [] = ($number < 21) ? $words[$number] .
            " " . $digits[$counter] . $plural . " " . $hundred
            :
            $words[floor($number / 10) * 10]
            . " " . $words[$number % 10] . " "
            . $digits[$counter] . $plural . " " . $hundred;
     } else $str[] = null;
  }
  $str = array_reverse($str);
  $paid1 = implode('', $str);
  $points = ($point) ?
    "." . $words[$point / 10] . " " . 
          $words[$point = $point % 10] : '';
 


//end function


$submitdate1 = mysqli_real_escape_string($conn,$_POST['submitdate']);
$submitdate = date( 'd-m-Y',strtotime( $submitdate1));
$transaction_remark = mysqli_real_escape_string($conn,$_POST['transcation_remark']);
$sid = mysqli_real_escape_string($conn,$_POST['stdid']);

$aprilp = mysqli_real_escape_string($conn,$_POST['aprilp']);
$julyp = mysqli_real_escape_string($conn,$_POST['julyp']);
$octoberp = mysqli_real_escape_string($conn,$_POST['octoberp']);
$januaryp = mysqli_real_escape_string($conn,$_POST['januaryp']);

/**============================================================================================---**/

$sql = "select *  from bus_student where id = '$sid'";     //retrive student detail
$sq = $conn->query($sql);
$sr = $sq->fetch_assoc();
$totalfee = $sr['fees'];
$sname = $sr['sname'];
$fname = $sr['fname'];
$admissionNo = $sr['admissionNo'];
$joindate = $sr['admdate'];
$branch_id = $sr['bid'];
$balance = $sr['balance'];  //student balance

$aprilb = $sr['aprilb']; 
$julyb = $sr['julyb']; 
$octoberb = $sr['octoberb']; 
$januaryb = $sr['januaryb']; 



if($sr['balance']>0)    //check balance zero or not
{
$sql = "INSERT INTO `bus_transaction` (`id`, `busid`, `paid`, `april`, `july`, `october`, `january`, `submitdate`, `fees_remark`)
 VALUES ('', '$sid', '$paid','$aprilp','$julyp','$octoberp','$januaryp', '$submitdate1', '$transaction_remark`') ";
$conn->query($sql);

$result_s = mysqli_query($conn,"SELECT id FROM bus_transaction"); //total student count
$rid = mysqli_num_rows($result_s);

/**
$sql = "SELECT sum(paid) as totalpaid FROM fees_transaction WHERE stdid = '$sid'";
$tpq = $conn->query($sql);
$tpr = $tpq->fetch_assoc();
$totalpaid = $tpr['totalpaid'];**/



$tbalance = $balance - $paid;
$tapril = $aprilb - $aprilp;
$tjuly = $julyb - $julyp;
$toctober = $octoberb - $octoberp;
$tjanuary = $januaryb - $januaryp;

$sql = "update bus_student set balance='$tbalance',aprilb='$tapril',julyb='$tjuly',octoberb='$toctober',januaryb='$tjanuary' where id = '$sid'";  //student balance update
$Success=$conn->query($sql);


}
if(isset($Success)){
?>


<!---/*============================================================================================---*/-->

<?php  

$sql = "select branch,detail from branch where id = '$branch_id'";		//retrive branch information
$bq = $conn->query($sql);
$br = $bq->fetch_assoc();
$branchb = $br['branch'];
$detailb = $br['detail'];



?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CBST BHILAI</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!--link href="css/print.css" rel="stylesheet"-->
  </head>

  <body>


<div class="container">
<div class="row" style="background-color:#ffffff;border-bottom:3px solid #000000;border-top:3px solid #000000;border-left:3px solid #000000;border-right:3px solid #000000;">


			<div class="col-sm-2">
				<div class="receipt-left"style="padding-top:10px">
					<img class="img-responsive" alt="cbst" src="../img/cbst.png" style="width: 140px;">
				</div>
			</div>
  
  
				<div class="col-sm-10">
						<h3 style="padding-left: 90px;"><b> CBST PUBLIC SCHOOL  </b></h3>
						<h5 style="padding-left: 140px;">Near Radha Krishna Mandir,</h5>
						<h4 style="padding-left: 200px;">Distt-Durg Mymensingh</h4>
						
						<div class="row">
							<div class="col-md-10">
								<p style="padding-left: 100px;">Email- cbstcse@gmail.com , Contact No- 01684793288</p>
							</div>
							
							
						</div>
				</div>
</div><!--end row-->
</div><!--end container-->


<div class="container">
<div class="row" style="background-color:#ffffff;border-bottom:3px solid #000000;border-left:3px solid #000000;border-right:3px solid #000000;">
							<div class="col-md-12" STYLE="border-bottom:3px solid #000000;">
								<h4 align="center"style="padding-right: 80px;">FEES RECEIPT FOR ACADEMIC SESSION :2018-19 </h4>
							</div>
				<div class="container"STYLE="border-bottom:6px solid #000000;">		
					<div class="row">		
							
							<div class="col-md-3">
								<p style="padding-left: px;">Admission No</p>
								<p style="padding-left: px;">Name</p>
								<p style="padding-left: px;">Father's Name</p>
								<p style="padding-left: px;">Date</p>
							</div>
							
							<div class="col-md-3">
								<p style="padding-left: px;">: <?php echo $admissionNo; ?></p>
								<p style="padding-left: px;">: <?php echo $sname; ?></p>
								<p style="padding-left: px;">: Mr. &nbsp; <?php echo $fname; ?></p>
								<p style="padding-left: px;">: <?php echo $submitdate; ?></p>
							</div>
							
							<div class="col-md-3">
								<p style="padding-left: px;">Receipt No</p>
								<p style="padding-left: px;">Class</p>
								<p style="padding-left: px;">Installment</p>
								<p style="padding-left: px;">Balance</p>
								
							</div>
							
							<div class="col-md-3">
								<p style="padding-left: px;">: <?php echo $rid; ?></p>
								<p style="padding-left: px;">:  <?php echo $branchb; ?>- <?php echo $detailb; ?></p>
								<p style="padding-left: px;">: <?php echo $transaction_remark ?></p>
								<p style="padding-left: px;">: <?php echo $tbalance ?></p>
								
							</div>
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
				
				
				
				<div class="container">		
					<div class="row">		
							
							<div class="col-md-9">
								<H4 style="padding-left: px;">PARTICULERS</H4>
								
							</div>
							
							<div class="col-md-3"STYLE="border-left:2px solid;">
								<H4 class="text-right"style="padding-left: px;">AMOUNT</H4>
							</div>
							
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
				
				
				
				<div class="container"STYLE="border-TOP:2px solid;">		
					<div class="row">		
							
							<div class="col-md-9">
								<P style="padding-left: px;">BUS FEES</P>
								
							</div>
							
							<div class="col-md-3"STYLE="border-left:2px solid;">
								<P class="text-right"style="padding-left: px;"><?php echo $paid; ?></P>
							</div>
							
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
				<div class="container"STYLE="border-TOP:2px solid;">		
					<div class="row">		
							
							<div class="col-md-9">
								<P style="padding-left: px;"></P>
								
							</div>
							</BR></br></br></br></br>
							<div class="col-md-3"STYLE="border-left:2px solid;">
								<P class="text-right"style="padding-left: px;"></P>
							</div>
							
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
				
				<div class="container"STYLE="border-TOP:2px solid;">		
					<div class="row">		
							
							<div class="col-md-9">
								<P style="padding-left: px;"><b>TOTAL :</b></P>
								<H5 ><?php echo strtoupper($paid1); ?> RUPEE ONLY</H5>
								
							</div>
							
							<div class="col-md-3"STYLE="border-left:2px solid;">
								<P class="text-right"style="padding-left: px;"><b><?php echo $paid; ?></b></P>
							</div>
							
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
				
				
				<div class="container"STYLE="border-TOP:2px solid;">		
					<div class="row">		
							
							
							
							<div class="col-md-12">
								<P align="center">PLEASE DEPOSIT THE FEES YOUR WARD BETWEEN 1st TO 8th of EVERY MONTH</P>
							</div>
							
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
</div><!--end row-->
</div><!--end container-->				
<!--=====================================================================================================-->
</br><p>---------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
<div class="container">
<div class="row" style="background-color:#ffffff;border-bottom:3px solid #000000;border-top:3px solid #000000;border-left:3px solid #000000;border-right:3px solid #000000;">


			<div class="col-sm-2">
				<div class="receipt-left"style="padding-top:10px">
					<img class="img-responsive" alt="gps_logo" src="../img/gps_logo.png" style="width: 140px;">
				</div>
			</div>
  
  
				<div class="col-sm-10">
						<h3 style="padding-left: 90px;"><b> GYAN PUBLIC SCHOOL BHILAI-03 </b></h3>
						<h5 style="padding-left: 140px;">Near Radha Krishna Mandir, Bhilai-3,</h5>
						<h4 style="padding-left: 200px;">Distt-Durg (C.G.)</h4>
						
						<div class="row">
							<div class="col-md-10">
								<p style="padding-left: 100px;">Email- gpsbhilai3@gmail.com , Contact No- 9754058837</p>
							</div>
							
							
						</div>
				</div>
</div><!--end row-->
</div><!--end container-->


<div class="container">
<div class="row" style="background-color:#ffffff;border-bottom:3px solid #000000;border-left:3px solid #000000;border-right:3px solid #000000;">
							<div class="col-md-12" STYLE="border-bottom:3px solid #000000;">
								<h4 align="center"style="padding-right: 80px;">FEES RECEIPT FOR ACADEMIC SESSION :2018-19 </h4>
							</div>
				<div class="container"STYLE="border-bottom:6px solid #000000;">		
					<div class="row">		
							
							<div class="col-md-3">
								<p style="padding-left: px;">Admission No</p>
								<p style="padding-left: px;">Name</p>
								<p style="padding-left: px;">Father's Name</p>
								<p style="padding-left: px;">Date</p>
							</div>
							
							<div class="col-md-3">
								<p style="padding-left: px;">: <?php echo $admissionNo; ?></p>
								<p style="padding-left: px;">: <?php echo $sname; ?></p>
								<p style="padding-left: px;">: Mr. &nbsp; <?php echo $fname; ?></p>
								<p style="padding-left: px;">: <?php echo $submitdate; ?></p>
							</div>
							
							<div class="col-md-3">
								<p style="padding-left: px;">Receipt No</p>
								<p style="padding-left: px;">Class</p>
								<p style="padding-left: px;">Installment</p>
								<p style="padding-left: px;">Balance</p>
								
							</div>
							
							<div class="col-md-3">
								<p style="padding-left: px;">: <?php echo $rid; ?></p>
								<p style="padding-left: px;">:  <?php echo $branchb; ?>- <?php echo $detailb; ?></p>
								<p style="padding-left: px;">: <?php echo $transaction_remark ?></p>
								<p style="padding-left: px;">: <?php echo $tbalance ?></p>
								
							</div>
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
				
				
				
				<div class="container">		
					<div class="row">		
							
							<div class="col-md-9">
								<H4 style="padding-left: px;">PARTICULERS</H4>
								
							</div>
							
							<div class="col-md-3"STYLE="border-left:2px solid;">
								<H4 class="text-right"style="padding-left: px;">AMOUNT</H4>
							</div>
							
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
				
				
				
				<div class="container"STYLE="border-TOP:2px solid;">		
					<div class="row">		
							
							<div class="col-md-9">
								<P style="padding-left: px;">BUS FEES</P>
								
							</div>
							
							<div class="col-md-3"STYLE="border-left:2px solid;">
								<P class="text-right"style="padding-left: px;"><?php echo $paid; ?></P>
							</div>
							
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
				<div class="container"STYLE="border-TOP:2px solid;">		
					<div class="row">		
							
							<div class="col-md-9">
								<P style="padding-left: px;"></P>
								
							</div>
							</BR></br></br></br></br>
							<div class="col-md-3"STYLE="border-left:2px solid;">
								<P class="text-right"style="padding-left: px;"></P>
							</div>
							
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
				
				<div class="container"STYLE="border-TOP:2px solid;">		
					<div class="row">		
							
							<div class="col-md-9">
								<P style="padding-left: px;"><b>TOTAL :</b></P>
								<H5 ><?php echo strtoupper($paid1); ?> RUPEE ONLY</H5>
								
							</div>
							
							<div class="col-md-3"STYLE="border-left:2px solid;">
								<P class="text-right"style="padding-left: px;"><b><?php echo $paid; ?></b></P>
							</div>
							
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
				
				
				<div class="container"STYLE="border-TOP:2px solid;">		
					<div class="row">		
							
							
							
							<div class="col-md-12">
								<P align="center">PLEASE DEPOSIT THE FEES YOUR WARD BETWEEN 1st TO 8th of EVERY MONTH</P>
							</div>
							
							
								
							 
					</div><!--end col-md-12-->
				</div><!--end container-->
				
</div><!--end row-->
</div><!--end container-->				




<?php }
else{
	
	
	header('Location: fees.php');
}

 }
else{
	
	
	header('Location: fees.php');
}

?>
  <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!--script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <!--script src="vendor/vide/jquery.vide.min.js"></script-->

 

  </body>

</html>
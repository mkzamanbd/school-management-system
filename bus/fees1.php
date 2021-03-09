<?php
include("../php/dbconnect.php");
include("../php/checklogin.php");
$errormsg = '';


if(isset($_GET['action']) && $_GET['action']=="delete"){  //delete

$id = $_GET['id'];



$sql = "select s.id,s.sname,s.admissionNo,s.balance,s.fees,s.april,s.july,s.october,s.january,s.aprilb,s.julyb,s.octoberb,s.januaryb,
 b.branch,b.detail from bus_student as s,branch as b where b.id=s.bid  and s.id='$id'";
$q = $conn->query($sql);
if($q->num_rows>0)
{

$sr = $q->fetch_assoc();

$sname = $sr['sname'];
$branch = $sr['branch'];
$detail = $sr['detail'];
$admissionNo = $sr['admissionNo'];
$fees = $sr['fees'];
$balance = $sr['balance'];

$april = $sr['april'];
$july = $sr['july'];
$october = $sr['october'];
$january = $sr['january'];

$aprilb = $sr['aprilb'];
$julyb = $sr['julyb'];
$octoberb = $sr['octoberb'];
$januaryb = $sr['januaryb'];





}//end if
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
                        <h1 class="page-head-line" style="color:green;">  
				
                     
<?php
if (empty($msg))
{
}
else
{
echo $msg;
}


?>
                    </div>
                </div>
                        <h1>   Student Bus Fees</h1></br></br>


<form  action="receipt.php" method="post" target="_blank">



<div class="col-md-12">

	<div class="form-group col-sm-3">
		<label>Name:</label>
		<input type="text" class="form-control" disabled  value="<?php echo $sname; ?>" >
    </div>
  
  
  <div class="form-group col-sm-3">
		<label>Class Name:</label>
		<input type="text" class="form-control" disabled  value="<?php echo $branch; ?>-<?php echo $detail; ?>" >
   </div>
  
  
  
  <div class="form-group col-sm-3">
		<label>Admission No:</label>
      <input type="text" class="form-control" disabled  value="<?php echo $admissionNo; ?>" >

  </div>
  
  <div class="form-group col-sm-3">
		<label>Total Fee :</label>
      <input type="text" class="form-control" disabled  value="<?php echo $fees; ?>" >

  </div>
  
</div>


<div class="col-md-12">

	<div class="form-group col-sm-3">
		<label>April Installment:</label>
		<input type="text" class="form-control" disabled  value="<?php echo $april; ?>" >
    </div>
  
  
  <div class="form-group col-sm-3">
		<label>July Installment:</label>
		<input type="text" class="form-control" disabled  value="<?php echo $july; ?>" >
   </div>
  
  
  
  <div class="form-group col-sm-3">
		<label>October Installment:</label>
      <input type="text" class="form-control" disabled  value="<?php echo $october; ?>" >

  </div>
  
  <div class="form-group col-sm-3">
		<label>January Installment:</label>
      <input type="text" class="form-control" disabled  value="<?php echo $january; ?>" >

  </div>
  
</div>


<div class="col-md-12">

	<div class="form-group col-sm-3">
		<label>April Balance:</label>
		<input type="text" class="form-control" disabled  value="<?php echo $aprilb; ?>" >
    </div>
  
  
  <div class="form-group col-sm-3">
		<label>July Balance:</label>
		<input type="text" class="form-control" disabled  value="<?php echo $julyb; ?>" >
   </div>
  
  
  
  <div class="form-group col-sm-3">
		<label>October Balance:</label>
      <input type="text" class="form-control" disabled  value="<?php echo $octoberb; ?>" >

  </div>
  
  <div class="form-group col-sm-3">
		<label>January Balance:</label>
      <input type="text" class="form-control" disabled  value="<?php echo $januaryb; ?>" >

  </div>
  
</div>


 <div class="col-md-12"> 
  
  <div class="form-group col-md-6">
    <label >Total Balance:</label>
    
      <input type="text" class="form-control" name="balance"  id="balance" value="<?php echo $balance; ?>" disabled />
	  <input type="hidden" value="<?php echo $id; ?>" name="sid">
    
  </div>
  
  
  <div class="form-group col-md-6">
    <label >Total Paid:</label>
    
      <input type="number" class="form-control" name="paid"  id="paid"  />
   
  </div>
  
  
</div> 
  
 <div class="col-md-12">

	<div class="form-group col-sm-3">
		<label>April Pay:</label>
		<input type="number" name="aprilp"class="form-control"  required>
    </div>
  
  
  <div class="form-group col-sm-3">
		<label>July Pay:</label>
		<input type="number" class="form-control" name="julyp" required>
   </div>
  
  
  
  <div class="form-group col-sm-3">
		<label>October Pay:</label>
      <input type="number" class="form-control" name="octoberp"required>

  </div>
  
  <div class="form-group col-sm-3">
		<label>January Pay:</label>
      <input type="number" class="form-control" name="januaryp"required>

  </div>
  
</div> 


<div class="col-md-12">    
  
  <div class="form-group col-md-6">
    <label >Date:</label>
    
	
      <input type="date" class="form-control" name="submitdate"  id="submitdate">

  </div>
  
  
   <div class="form-group col-md-6">
    <label>Remark:</label>
    
      <textarea class="form-control" name="transcation_remark" id="transcation_remark"></textarea>
  
  </div>
 
 </div>
 
 
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
		<input type="hidden" class="form-control" name="stdid"  value="<?php echo $id;?>">
      <button type="submit" class="btn btn-primary" name="save">Save</button>
    </div>
  </div>
</form>





  
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

 <?php include_once'../php/footer.php'; ?>
<?php
}//end ifisset
?>
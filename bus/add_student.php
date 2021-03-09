<?php
include("../php/dbconnect.php");
include("../php/checklogin.php");

if(isset($_POST['save']))
{

$sname = mysqli_real_escape_string($conn,$_POST['sname']);
$fname = mysqli_real_escape_string($conn,$_POST['fname']);


$branch = mysqli_real_escape_string($conn,$_POST['branch']);

$joindate = mysqli_real_escape_string($conn,$_POST['joindate']);


$admissionNo = mysqli_real_escape_string($conn,$_POST['admissionNo']);


$fees = mysqli_real_escape_string($conn,$_POST['fees']);
$april = mysqli_real_escape_string($conn,$_POST['april']);
$july = mysqli_real_escape_string($conn,$_POST['july']);
$october = mysqli_real_escape_string($conn,$_POST['october']);
$january = mysqli_real_escape_string($conn,$_POST['january']);


 
 
$sql = "INSERT INTO bus_student (bid,sname,fname,admissionNo,admdate,balance,fees,april,july,october,january,aprilb,julyb,octoberb,januaryb)
 VALUES ('$branch','$sname','$fname','$admissionNo','$joindate','$fees','$fees',
 '$april','$july','$october','$january','$april','$july','$october','$january')" ;

if (mysqli_query($conn, $sql)) {
    $msg = "New Student Admited successfully";
} else {
    $msg = "Please try again";
} 

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
				
			
            

                        <h1>   Add Student For Bus</h1></br></br>
                      
			<form action="add_student.php" method="post" id="signupForm1" class="">
                        
					<div class="col-md-12">
							
						
							<div class="form-group col-sm-4">
									<label for="sname">Name* </label>
									<input type="text" class="form-control" id="sname" name="sname"required>
							</div>
							
							<div class="form-group col-sm-4">
									<label for="fname">Father Name* </label>
									<input type="text" class="form-control" id="fname" name="fname"required>
							</div>
							
							<div class="form-group col-sm-4">
									<label>Admission No* </label>
									<input type="number" class="form-control" id="admissionNo" name="admissionNo"required>
							</div>
							
							
							
							
							
							
					</div><!--end row-->
					
					
					<div class="col-md-12">
					
					<div class="form-group col-sm-4">
								<label>Class* </label>
								
									<select  class="form-control" id="branch" name="branch"  required>
									<option value="" >Select Class</option>
                                    <?php
									$sql = "select * from branch where delete_status='0'   order by branch.branch  asc";
									$q = $conn->query($sql);
									
									while($r = $q->fetch_assoc())
									{
									echo '<option value="'.$r['id'].'"  '.(($branch==$r['id'])?'selected="selected"':'').'>'.$r['branch']. '&nbsp' .$r['detail']. '</option>';
									}
									?>									
									
									</select>
								
						</div>
						
						
						<div class="form-group col-sm-4">
									<label>Admission Date </label>
									<input type="date" class="form-control" id="joindate" name="joindate"required>
						</div>
							
						<div class="form-group col-sm-4">
									<label>Total Fees* </label>
									<input type="number" class="form-control" id="fees" name="fees" required>
						</div>
							
							
					</div><!--end row-->	
					
				<div class="col-md-12">				
				
						 
						
						
						<div class="form-group col-sm-3">
									<label>April Fees* </label>
									<input type="number" class="form-control" id="april" name="april"required>
						</div>
						
						<div class="form-group col-sm-3">
									<label>July Fees* </label>
									<input type="number" class="form-control" id="july" name="july"required>	
						</div>
						
						<div class="form-group col-sm-3">
								<label >October Fees* </label>
								<input type="number" class="form-control" id="october" name="october"required>
						</div>
						<div class="form-group col-sm-3">
								<label>January Fees* </label>
								<input type="number" class="form-control" id="january" name="january"required>
								
						</div>
						
				</div><!--end row--></br></br>
						
						
						
							
			
						
						<div class="form-group">
								<div class="col-sm-6 ">
								
									<button type="submit" name="save" class="btn btn-primary btn-lg">Submit </button>
								 
								   
								   
								</div>
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

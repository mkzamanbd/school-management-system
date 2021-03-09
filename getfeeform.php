<?php
include("php/dbconnect.php");

if(isset($_POST['req']) && $_POST['req']=='1') 
{

$sid = (isset($_POST['student']))?mysqli_real_escape_string($conn,$_POST['student']):'';

 $sql = "select s.id,s.sname,s.birthdate,s.admissionNo,s.balance,s.fees,s.april,s.july,s.october,s.january,s.aprilb,s.julyb,s.octoberb,s.januaryb,
 s.contact,b.branch,b.detail,s.joindate from student as s,branch as b where b.id=s.branch and  s.delete_status='0' and s.id='".$sid."'";
$q = $conn->query($sql);
if($q->num_rows>0)
{

$res = $q->fetch_assoc();
echo '  <form  id ="signupForm1" action="receipt.php" method="post" target="_blank">



<div class="col-sm-12">

	<div class="form-group col-sm-3">
		<label>Name:</label>
		<input type="text" class="form-control" disabled  value="'.$res['sname'].'" >
    </div>
  
  
  <div class="form-group col-sm-3">
		<label>Class Name:</label>
		<input type="text" class="form-control" disabled  value="'.$res['branch'].'-'.$res['detail']. '" >
   </div>
  
  
  
  <div class="form-group col-sm-3">
		<label>Admission No:</label>
      <input type="text" class="form-control" disabled  value="'.$res['admissionNo'].'" >

  </div>
  
  <div class="form-group col-sm-3">
		<label>Total Fee :</label>
      <input type="text" class="form-control" disabled  value="'.$res['fees'].'" >

  </div>
  
</div>


<div class="col-sm-12">

	<div class="form-group col-sm-3">
		<label>June Installment:</label>
		<input type="text" class="form-control" disabled  value="'.$res['april'].'" >
    </div>
  
  
  <div class="form-group col-sm-3">
		<label>July Installment:</label>
		<input type="text" class="form-control" disabled  value="'.$res['july'].'" >
   </div>
  
  
  
  <div class="form-group col-sm-3">
		<label>October Installment:</label>
      <input type="text" class="form-control" disabled  value="'.$res['october'].'" >

  </div>
  
  <div class="form-group col-sm-3">
		<label>January Installment:</label>
      <input type="text" class="form-control" disabled  value="'.$res['january'].'" >

  </div>
  
</div>


<div class="col-sm-12">

	<div class="form-group col-sm-3">
		<label>June Balance:</label>
		<input type="text" class="form-control" disabled  value="'.$res['aprilb'].'" >
    </div>
  
  
  <div class="form-group col-sm-3">
		<label>July Balance:</label>
		<input type="text" class="form-control" disabled  value="'.$res['julyb'].'" >
   </div>
  
  
  
  <div class="form-group col-sm-3">
		<label>October Balance:</label>
      <input type="text" class="form-control" disabled  value="'.$res['octoberb'].'" >

  </div>
  
  <div class="form-group col-sm-3">
		<label>January Balance:</label>
      <input type="text" class="form-control" disabled  value="'.$res['januaryb'].'" >

  </div>
  
</div>

  
<div class="col-md-12">  
  <div class="form-group col-md-6">
    <label>Total Balance:</label>
      <input type="text" class="form-control" name="balance"  id="balance" value="'.$res['balance'].'" disabled />
	  <input type="hidden" value="'.$res['id'].'" name="sid">
  </div>
  
  
  <div class="form-group col-md-6">
    <label>Total Paid:</label>
      <input type="number" class="form-control" name="paid"  id="paid"  />
    </div>
	
	
	
 </div>
 
  
 <div class="col-md-12">

	<div class="form-group col-sm-3">
		<label>June Pay:</label>
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

 
  <div class="form-group col-sm-6">
    <label>Date:</label>
	
      <input type="text" class="form-control" name="submitdate"  id="submitdate" style="background:#fff;"  readonly />
  </div>
  
  
   <div class="form-group col-sm-6">
    <label>Remark:</label>
   
      <textarea class="form-control" name="transcation_remark" id="transcation_remark"></textarea>
    </div>
	
	
	
</div>
 
 
 
 
 
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary" name="save">Save</button>
    </div>
  </div>
</form>

<script type="text/javascript">
$(document).ready( function() {
$("#submitdate").datepicker( {
        changeMonth: true,
        changeYear: true,
       
        dateFormat: "yy-mm-dd",
      
    });
	
	
///////////////////////////

$( "#signupForm1" ).validate( {
				rules: {
					submitdate: "required",
					
					paid: {
						required: true,
						digits: true,
						max:'.$res['balance'].'
					}	
					
					
				},
				errorElement: "em",
				errorPlacement: function ( error, element ) {
					// Add the `help-block` class to the error element
					error.addClass( "help-block" );

					// Add `has-feedback` class to the parent div.form-group
					// in order to add icons to inputs
					element.parents( ".col-sm-10" ).addClass( "has-feedback" );

					if ( element.prop( "type" ) === "checkbox" ) {
						error.insertAfter( element.parent( "label" ) );
					} else {
						error.insertAfter( element );
					}

					
					if ( !element.next( "span" )[ 0 ] ) {
						$( "<span class=\'glyphicon glyphicon-remove form-control-feedback\'></span>" ).insertAfter( element );
					}
				},
				success: function ( label, element ) {
					if ( !$( element ).next( "span" )[ 0 ] ) {
						$( "<span class=\'glyphicon glyphicon-ok form-control-feedback\'></span>" ).insertAfter( $( element ) );
					}
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-10" ).addClass( "has-error" ).removeClass( "has-success" );
					$( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
				},
				unhighlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".col-sm-10" ).addClass( "has-success" ).removeClass( "has-error" );
					$( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
				}
			} );


	
	
	
});

</script>
';

}else
{
echo "Something Goes Wrong! Try After sometime.";
}


}
/**==================================================================================================================================================
==========================================================================================================================================**/



if(isset($_POST['req']) && $_POST['req']=='2') //fees report
{

$sid = (isset($_POST['student']))?mysqli_real_escape_string($conn,$_POST['student']):'';
$sql = "select paid,submitdate,transaction_remark from fees_transaction  where stdid='".$sid."'";
$fq = $conn->query($sql);
if($fq->num_rows>0)
{


$sql = "select s.id,s.sname,s.balance,s.fees,s.admissionNo,s.fname,b.branch,b.detail from student as s,branch as b where b.id=s.branch  and s.id='".$sid."'";
$sq = $conn->query($sql);
$sr = $sq->fetch_assoc();

echo '
<h4>Student Info</h4>
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
        <td>'.$res['transaction_remark'].'</td>
      </tr>' ;
}
      
echo '	  
    </tbody>
  </table>
 </div> 
 
<table style="width:150px;" >
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
 
}
		
/**==================================================================================================================================
===========================================================================================================================================**/		 

if(isset($_POST['req']) && $_POST['req']=='3') //tc generate
{

$sid = (isset($_POST['student']))?mysqli_real_escape_string($conn,$_POST['student']):'';

 $sql = "select s.id,s.sname,s.fname,s.roll_number,s.admissionNo,s.birthdate,s.emailid,s.balance,s.fees,s.contact,b.branch,b.detail,
 s.joindate from student as s,branch as b where b.id=s.branch
 and  s.delete_status='0' and s.id='".$sid."'";
 
 
$q = $conn->query($sql);
if($q->num_rows>0)
{

$res = $q->fetch_assoc();
echo ' <div class="col-sm-10"><form  id ="signupForm1" action="tc_1.php" method="post" target="_blank">


<div class="row">

	<div class="form-group col-sm-3">
		<label>Name:</label>
		<input type="text" class="form-control" disabled  value="'.$res['sname'].'" >
    </div>
  
  
  <div class="form-group col-sm-3">
		<label>Class Name:</label>
		<input type="text" class="form-control" disabled  value="'.$res['branch'].'-'.$res['detail']. '" >
   </div>
  
  
  
  <div class="form-group col-sm-3">
		<label>Admission No:</label>
      <input type="text" class="form-control" disabled  value="'.$res['admissionNo'].'" >

  </div>
  
  <div class="form-group col-sm-3">
		<label>Birthdate :</label>
      <input type="text" class="form-control" disabled  value="'.date("d-m-Y", strtotime($res['birthdate'])).'" >

  </div>
  
</div>


<div class="row">

	<div class="form-group col-sm-4">
		<label>Roll No:</label>
      <input type="text" class="form-control" disabled  value="'.$res['roll_number'].'" >

  </div>

	<div class="form-group col-sm-4">
		<label>total fees:</label>
		<input type="text" class="form-control" disabled  value="'.$res['fees'].'" >
    </div>
  
  
  <div class="form-group col-sm-4">
		<label>Balance Fees:</label>
		<input type="text" class="form-control" disabled  value="'.$res['balance'].'" >
   </div>
   
  
</div>


<div class="row">

	<div class="form-group col-sm-4">
		<label>Cast:</label>
		<input type="text" class="form-control" name="cast" required>
    </div>
  
  
  <div class="form-group col-sm-4">
		<label>S No:</label>
		<input type="number" class="form-control"  name="sno" required>
   </div>
  
  
  
  <div class="form-group col-sm-4">
		<label>Discharge No:</label>
      <input type="number" class="form-control" name="dno" required>

  </div>
  
</div>

<div class="row">

	<div class="form-group col-sm-4">
		<label>Leaves:</label>
		<input type="text" class="form-control" name="leaves" required>
    </div>
  
  
  <div class="form-group col-sm-4">
		<label>Day Of:</label>
		<input type="text" class="form-control"  name="dayof" required>
   </div>
  
  
  
  <div class="form-group col-sm-4">
		<label>Enroll Class:</label>
      <input type="text" class="form-control" name="enrollclass" required>

  </div>
  
</div>
<div>
    
	  
	<div class="form-group col-sm-4">
		<label>Passed Year:</label>
	  <input type="text" class="form-control" name="pyears" required>
	</div>  
	  
 <div class="form-group col-sm-8">
		<label>Birth Date in Text:</label>
	  <input type="text" class="form-control" name="bdate2" required>
 </div>
</div> 
 
 

 <input type="hidden" name="sid" value="'.$res['id'].'" >
 
  <div class="form-group col-sm-4"> 
    <div class="">
      <button type="submit" class="btn btn-primary" name="save">Generate Tc</button>
   </div>
  </div>
</form>

</div></div>';

}else
{
echo "Something Goes Wrong! Try After sometime.";
}


}

?>
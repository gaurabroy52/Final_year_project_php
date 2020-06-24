<?php
include('connection.php');
?>
<html>
<head>
<title>Delete Student Account</title>
<link rel="stylesheet" type="text/css" href="css/delete_student_account.css"> 
<link rel="icon" href="image/icon.ico">
<script src="https://kit.fontawesome.com/30c2a69a62.js" crossorigin="anonymous"></script>
</head>
<div id="header3">
<img src="image/CGEC_LOGO.png" id="test3">
<h1>Cooch Behar Government Engineering College</h1>
<h2>Library Managment System</h2>

<div>

<body>
<marquee bahavior="scroll">Delete Student Account</marquee>
<div id="div3">
<h3>Instruction to Use</h3>
<p>
This page is used to delete a student entity from the databse completely. Please search the student with its <span style="color:red" >Unique ROLLNO</span> First and delete the student if necessary.
Sometimes we have delete some students who were already achive their degree. The details of that student will be shown in the another form.
</p>
</div>
<form id="theForm5" action="" method="">
<div class="row">
<label for="rollno1">Roll No</label>
<input type="number" id="rollno1" name="rollno1" />
</div>

<div class="row">
<input type="submit" value="Search" onclick="return validationForm4()" name="search2" />
</div>
</form>
<br><br><br><br><br><br><br><br><br><br><br>

<?php
if(isset($_REQUEST['search2'])){
$rollno = $_REQUEST['rollno1'];
$resultset = "SELECT * FROM table2 WHERE ROLLNO = '$rollno'";
$query_run=mysqli_query($conn,$resultset);
	if($rows=mysqli_fetch_array($query_run))
	{
		
?>

<form id="theForm6" action="" method="">
<div class="row">
<label for="rollno31">Roll NO</label>
<input type="number" id="rollno31"  name="rollno22" value="<?php echo $rows['ROLLNO']?>"/>
</div>
<div class="row">
<label for="studentname">Student Name</label>
<input type="text" id="studentname" value="<?php echo $rows['STUDENTNAME']?>"/>
</div>

<div class="row">
<label for="dept">Department</label>
<input type="text" id="dept" value="<?php echo $rows['DEPT']?>"/>
</div>

<div class="row">
<label for="phone">Phone No</label>
<input type="number" id="phone" value="<?php echo $rows['PHONE']?>" />
</div>

<div class="row">
<label for="sem">Semister</label>
<input type="number" id="sem" value="<?php echo $rows['SEMISTER']?>" />
</div>

<div class="row">
<label for="fine">Fine</label>
<input type="number" id="fine" value="<?php echo $rows['FINE']?>" />
</div>

<div class="row">
<input type="submit" value="Delete" name="delete22" onclick="fun4()" />
</div>
</form>

<?php
   
   }else{
	   echo "<font color='red'><i>The System Doesn't Have Any Record For This Student</i></font>";
   }
   }
?>
<?php
include('connection.php');
if(isset($_REQUEST['delete22'])){
$rollno=$_REQUEST['rollno22'];

$query = "DELETE FROM table2  WHERE ROLLNO ='$rollno'";
$qry = mysqli_query($conn,$query);
if($qry)
{
   
   echo "<font color='green'><i>The Specific Student is Deleted Successfully</i></font>";
}
else
{
	echo "<font color='red'><i>The Specific Student is not Deleted Successfully</i></font>";
	
}
}
 ?>
<div id="footer3">
<p id="test6">
Contract Us
</p>

<p id="test7">
Address: Post Ghughumari, District, Harinchawra, Cooch Behar, West Bengal 736170
&nbsp
Phone: 03582 233 044
<div align="center">
<a href="https://www.facebook.com/official.cgec/?eid=ARBqqz__X1WSDjkMTKe1ngF_vp2bYMcElrqvt8oYaaOn38U13B1hlvWDw5mGmI2PayicSuQb832VocRz&timeline_context_item_type=intro_card_education&timeline_context_item_source=100004659010536&fref=tag"><i class="fab fa-facebook fa-2x"></i></a>
<a href="https://www.linkedin.com/company/coochbehar-government-engineering-college/"><i class="fab fa-linkedin fa-2x"></i></a>
<a href="https://www.instagram.com/cgec_official/?hl=en"><i class="fab fa-instagram fa-2x"></i></a>
</div>
</p>
</div>
<script type="text/javascript">
function validationForm4()
{
	var box1=document.getElementById("rollno1");
	if(box1.value=="" )
	{
		alert("Please Fill the BookId  Fields");
		if(box1.value=="")
		{
		box1.focus();
		box1.style.border="solid 3px red";
		}
		
		return false;
	}
}
function fun4()
{
	return confirm("Are you sure to delete the Student?");
}
</script>
</body>

</html>
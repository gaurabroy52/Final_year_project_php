<?php
include("connection.php");
?>
<html>
<head>
<title>Student Login Page</title>
<link rel="stylesheet" type="text/css" href="css/student_login_page.css">
<link rel="icon" href="image/icon.ico">
<script src="https://kit.fontawesome.com/30c2a69a62.js" crossorigin="anonymous"></script>

</head>

<body>
<div id="header3">
<img src="image/CGEC_LOGO.png" id="test3">
<h1>Cooch Behar Government Engineering College</h1>
<h2>Library Managment System</h2>

<div>
<marquee bahavior="scroll">Student Login Page</marquee>
<div id="div3">
<h3>Instruction to Use</h3>
<p>
This page is used to login in the system with a active student account . Please put the student details with his/her <span style="color:red">unique Roll No</span>.
</p>
</div>
<img src="image/cgec1.jpg" align="left" width="650" height="500" id="para5"/>


<form id="theForm12" method="POST" >
<div class="row">
<label for="rollno7">Roll No:</label>
<input type="number" id="rollno7" name="rollno7"/>
</div>

<div class="row">
<label for="pass5">Password:</label>
<input type="password" name="pass5" id="pass5" />
</div>


<div class="row">
<input type="submit" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green" name="submit" value="Sign In" bgcolor="#088A08" onclick="return validationForm13()"/> 
<input type="reset" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green"  value="Reset" bgcolor="#088A08"/>
</div>
<div class="row">
<input type="submit" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green" name="forget" value="Forget Password" bgcolor="#088A08" onclick="fun1()"/> 
<input type="submit" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green" name="new" value="New Registration" bgcolor="#088A08" onclick="fun2()"/>

</div>




</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php 
if(isset($_POST['submit'])){
		
			$rollno = $_POST['rollno7'];
		
			$password = $_POST['pass5'];
			$query1 = "select * from table2 where ROLLNO='$rollno' ";
			$data1 = mysqli_query($conn, $query1);
			$total1 = mysqli_num_rows($data1);
			if($total1>0){
				$result1 = mysqli_fetch_assoc($data1);
				$database_password = $result1['PASSWORD'];
				
				if($database_password == $password){
					header('location:student_main_page.php');
				}else{
					echo "<font color='red'><i>ROLLNO or PASSWORD Is Wrong</i></font>";
				}
			
			}else{
			
				echo "<font color='red'><i>You Don't have The Account Now...Please Visit to The New Registation to make a New Account</i></font>";
			}
		}
if(isset($_POST['forget'])){
	header('location:forgotpassword.php');
}
if(isset($_POST['new'])){
	header('location:New Registation.php');
}

?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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

function validationForm13()
{
	var box1=document.getElementById("rollno7");
	var box2=document.getElementById("studentname7");
	var box3=document.getElementById("pass5");
	
	if(box1.value=="" || box2.value=="" || box3.value=="" )
	{
		alert("Please Fill all the Fields");
		if(box1.value=="")
		{
		box1.focus();
		box1.style.border="solid 3px red";
		}
		if(box2.value=="")
		{
		box2.focus();
		box2.style.border="solid 3px red";
		}
		if(box3.value=="")
		{
		box3.focus();
		box3.style.border="solid 3px red";
		}
		
		return false;
	}
}
</script>

</body>

</html>
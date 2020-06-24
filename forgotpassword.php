<?php
include("connection.php");
?>

<html>
<head>
<title>Forget Password</title>
<link rel="stylesheet" type="text/css" href="css/forgot password.css">
<link rel="icon" href="image\icon.ico">
<script src="https://kit.fontawesome.com/30c2a69a62.js" crossorigin="anonymous"></script>
</head>

<body>
<div id="header3">
<img src="image/CGEC_LOGO.png" id="test3">
<h1>Cooch Behar Government Engineering College</h1>
<h2>Library Managment System</h2>

</div>
<marquee bahavior="scroll">Forget Password</marquee>
<div id="div3">
<h3>Instruction to Use</h3>
<p>
This page is used to change the <span style="color:red">Password</span> for a perticular student. If any student forget his/her password 
of his/her account then He/She will set new password using this page. Please put 
The RollNo and Name of the student and after that put the new password in the corresponding fields.
</p>
</div>
<img src="image/cgec7.jpg" align="left" width="580" height="500" id="para5"/>

<form id="theForm15" action="" method="POST">
<div class="row">
<label for="rollno2">Roll No:</label>
<input type="text" id="rollno2" name="rollno2" />
</div>
<div class="row">
<label for="studentname2">Student Name:</label>
<input type="text" id="studentname2" name="studentname2"/>
</div>

<div class="row">
<label for="pass2">New Password:</label>
<input type="password" id="pass2" name="pass2"/>
</div>

<div class="row">
<input type="submit" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green" name="sub1" value="Submit" bgcolor="#088A08" onclick="return validationForm5()"/>
<input type="reset" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green" name="reset" value="Reset" bgcolor="#088A08">

</div>

</form>
<?php
	if(isset($_POST['sub1']))
	{
		$roll=$_POST['rollno2'];
		$name=$_POST['studentname2'];
		$ps=$_POST['pass2'];
		$sql1="select * from table2 where RollNo='$roll'";
		$data1 = mysqli_query($conn, $sql1);
		$total1 = mysqli_num_rows($data1);
		if($total1>0)
		{
			$result1=mysqli_fetch_assoc($data1);
			$database_name = $result1['STUDENTNAME'];
			$password = $result1['PASSWORD'];
			if(is_null($password)){
				echo "<font color='red'><i>You Don't Have An Account Right Now...Please Visit The New Registation Page to Create An Account</i></font>";
			}else{
			if (strcmp($database_name, $name)==0)
			{
				$sql2="update table2 set PASSWORD='$_POST[pass2]' where ROLLNO='$_POST[rollno2]'";
				$data2 = mysqli_query($conn, $sql2);
				if($data2)
				{
					echo "<font color='green'><i>password change successfully</i></font>";
				}else{
				echo "<font color='red'><i>Something Went Wrong</i></font>";
			}

			}else
			{
			echo "<font color='red'><i>Account Does't Exist</i></font>";
			}
			}
			
		}
		else
		{
			echo "<font color='red'><i>Account Does't Exist</i></font>";
		}

	}




?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
function validationForm5()
{
	var box1=document.getElementById("rollno2");
	var box2=document.getElementById("studentname2");
	var box3=document.getElementById("pass2");
	
	if(box1.value=="" || box2.value=="" || box3.value=="")
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
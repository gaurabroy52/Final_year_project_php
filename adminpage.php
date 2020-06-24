<html>
<head>
<title>Admin Login Page</title>
<link rel="stylesheet" type="text/css" href="css/adminpage.css">
<link rel="icon" href="image/icon.ico">
<script src="https://kit.fontawesome.com/30c2a69a62.js" crossorigin="anonymous"></script>
</head>

<body>
<div id="header2">
<img src="image/CGEC_LOGO.png" id="test2">
<h1>Cooch Behar Government Engineering College</h1>
<h2>Library Managment System</h2>

<div>
<marquee bahavior="scroll">Admin Login Page</marquee>
<div id="div2">
<h3>Instruction to Use</h3>
<p>
This page is used to login for the Admin Section. Please put the Admin Username and the password to login in the Admin main section.
</p>
</div>
<img src="image/cgec4.jpg" align="left" width="850" height="400" id="para5">


<form id="theForm2" method="POST" >
<div class="row">
<label for="username">Username:</label>
<input type="text" name="username" id="username">
</div>
<br><br>
<div class="row">
<label for="pass1">Password:</label>
<input type="password" name="pass1" id="pass1">
</div>
<div class="row">
<input type="submit" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green" name="submit" value="Login" bgcolor="#088A08" onclick="return validationForm2()"> 
<input type="reset" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green"  value="Reset" bgcolor="#088A08">
</div>
</form>

<?php
	if(isset($_POST['submit']))
	{

		$flag=1;
		$username=$_POST['username'];
		$password2=$_POST['pass1'];
		
		
			if($username=="Admin" && $password2=="cgec2016")
			{
				$flag=0;
			}
		
		if($flag==0)
			
		    header('location:adminpage2.php');
		else
			echo"<script>alert('Incorrect Rollno or Password')</script>";
		echo "<font color='red'><i>Incorrect Rollno or Password</i></font>";
	}


?>


<br><br><br><br><br><br><br><br><br>
<div id="footer2">
<p id="test4">
Contract Us
</p>

<p id="test5">
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
function validationForm2()
{
	var box1=document.getElementById("username");
	var box2=document.getElementById("pass1");
	
	if(box1.value=="" || box2.value=="" )
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
		return false;
	}
}

</script>
</body>

</html>
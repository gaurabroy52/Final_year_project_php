<?php
include("connection.php");
?>
<html>
<head>
<title>New Registration</title>
<link rel="stylesheet" type="text/css" href="css/New Registration.css">
<link rel="icon" href="image/icon.ico">
<script src="https://kit.fontawesome.com/30c2a69a62.js" crossorigin="anonymous"></script>
</head>

<body>
<div id="header3">
<img src="image/CGEC_LOGO.png" id="test3"/>
<h1>Cooch Behar Government Engineering College</h1>
<h2>Library Managment System</h2>

</div>
<marquee bahavior="scroll">New Regitration</marquee>
<div id="div3">
<h3>Instruction to Use</h3>
<p>
This page is used to create an active account for this system. Anyone who are a student and still have no registered account for this system,
can create his/her own account using this page. Please put all the details of the student with their <span style="color:red">Unique Roll No</span>.
</p>
</div>
<img src="image/cgec4.jpg" align="left" width="700" height="500" id="para5"/>

<form id="theForm7" action="" method="post">
<div class="row">
<label for="rollno4">Roll No:</label>
<input type="number" id="rollno4" name="rollno" />
</div>
<div class="row">
<label for="studentname4">Student Name:</label>
<input type="text" id="studentname4" name="studentname" />
</div>
<div class="row">
<label for="dept3">Department:</label>
<select id="dept3" name="dept">
<option value="">Choose Department</option>
<option value="Computer Science & Engineering" >Computer Science & Engineering</option>
<option value="Electronics & Communication Engineering" >Electronics & Communication Engineering</option>
<option value="Mechanical Engineering" >Mechanical Engineering</option>
<option value="Electrical Engineering" >Electrical Engineering</option>
<option value="Civil Engineering" >Civil Engineering</option>
<option value="Basic Science & Humanities" >Basic Science & Humanities</option>
</select>
</div>
<div class="row">
<label for="phone1">Contract Number:</label>
<input type="tel" id="phone1" name="contact" />
</div>
<div class="row">
<label for="semister5">Semister:</label>
<input type="number" id="semister5" name="semister" />
</div>
<div class="row">
<label for="pass3">Password:</label>
<input type="password" id="pass3" name="password" />
</div>




<div class="row">
<input type="submit" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green" name="submit" value="Submit" bgcolor="#088A08" onclick="return validationForm7()" /> 
<input type="reset" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green"  value="Reset" bgcolor="#088A08">
</div>


</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php 
	if(isset($_POST['submit'])){
		
			$roll=$_POST['rollno'];
			$name=$_POST['studentname'];
			$dept=$_POST['dept'];
			$phn=$_POST['contact'];
			$semister=$_POST['semister'];
			$ps=$_POST['password'];
			$sql1="select * from table2 where ROLLNO='$roll'";
			$data1 = mysqli_query($conn, $sql1);
			$total1 = mysqli_num_rows($data1);
			if($total1 == 0)
			{
				$sql2 = "insert into table2(ROLLNO,STUDENTNAME,PASSWORD,DEPT,PHONE,SEMISTER) values('$roll','$name','$ps','$dept','$phn','$semister')";
				$data2 = mysqli_query($conn, $sql2);
				if($data2){
					echo"<font color='green'><i>Student Registered Sucessfully</i></font>";
				}
				else
				{
					echo"<font color='red'><i>Student Is Not registered  sucessfully</i></font>";
				}
			}
			else
			{
				$sql3="update table2 set PHONE ='$phn' , PASSWORD='$ps' where rollno='$roll'";
				$data3 = mysqli_query($conn, $sql3);
				if($data3){
					
					echo"<font color='green'><i>Student Registration Updated</i></font>";
				}
				else
				{
					
					echo"<font color='red'><i>Invalid.......</i></font>";
				}
			}
		}
	
		
			
		
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
function validationForm7()
{
	var box1=document.getElementById("rollno4");
	var box2=document.getElementById("studentname4");
	var box3=document.getElementById("dept3");
	var box4=document.getElementById("phone1");
	var box5=document.getElementById("semister5");
	var box6=document.getElementById("pass3");
	
	if(box1.value=="" || box2.value=="" || box3.value=="" || box4.value=="" || box5.value=="" || box6.value==""  )
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
		if(box4.value=="")
		{
		box4.focus();
		box4.style.border="solid 3px red";
		}
		if(box5.value=="")
		{
		box5.focus();
		box5.style.border="solid 3px red";
		}
		if(box6.value=="")
		{
		box6.focus();
		box6.style.border="solid 3px red";
		}
		return false;
	}
}

</script>
</body>

</html>
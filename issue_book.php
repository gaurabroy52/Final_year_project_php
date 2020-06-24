<?php
include("connection.php");
?>
<html>
<head>
<title>Issue book</title>
<link rel="stylesheet" type="text/css" href="css/issue_book.css">
<link rel="icon" href="image/icon.ico">
<script src="https://kit.fontawesome.com/30c2a69a62.js" crossorigin="anonymous"></script>
<script type="text/javascript">
function validationForm6()
{
	var box1=document.getElementById("rollno3");
	var box2=document.getElementById("bookid3");
	var box3=document.getElementById("studentname3");
	var box4=document.getElementById("bookname3");
	var box5=document.getElementById("semister4");
	var box6=document.getElementById("dept2");
	var box7=document.getElementById("date1");
	if(box1.value=="" || box2.value=="" || box3.value=="" || box4.value=="" || box5.value=="" || box6.value=="" || box7.value=="" )
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
		if(box7.value=="")
		{
		box7.focus();
		box7.style.border="solid 3px red";
		}
		return false;
	}
}

</script>
</head>

<body>
<div id="header3">
<img src="image/CGEC_LOGO.png" id="test3"/>
<h1>Cooch Behar Government Engineering College</h1>
<h2>Library Managment System</h2>

</div>
<marquee bahavior="scroll">Issue book</marquee>
<div id="div3">
<h3>Instruction to Use</h3>
<p>
This page is used to issue books for students.Please put the details of the student who isse the book with <span style="color:red">ROLL NO</span> and 
the book which is issed with it's <span style="color:red">BookId</span>.
</p>
</div>
<img src="image/cgec6.jpg" align="left" width="650" height="500" id="para5"/>


<form id="theForm16" action="" method="POST">
<div class="row">
<label for="rollno3">Roll No:</label>
<input type="number" id="rollno3" name="rollno3"/>
</div>
<div class="row">
<label for="bookid3">Book Id:</label>
<input type="number" id="bookid3" name="bookid3"/>
</div>
<div class="row">
<label for="studentname3">Student Name:</label>
<input type="text" id="studentname3" name="studentname3"/>
</div>
<div class="row">
<label for="bookname3">Book Name:</label>
<input type="text" id="bookname3" name="bookname3"/>
</div>
<div class="row">
<label for="semister4">Semister:</label>
<input type="number" id="semister4" name="semister4"/>
</div>
<div class="row">
<label for="dept2">Department:</label>
<select id="dept2" name="dept2">
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
<label for="date1">Date:</label>
<input type="Date" id="date1" name="date1"/>
</div>

<div class="row">
<input type="submit" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green" name="submit" value="Submit" bgcolor="#088A08" onclick="return validationForm6()" />
<input type="reset" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green"  value="Reset" bgcolor="#088A08"/>

</div>

</form>




<?php 
	if(isset($_POST['submit'])){
		
		$rollno = $_POST['rollno3'];
		$bookid = $_POST['bookid3'];
		$studentname = $_POST['studentname3'];
		$bookname = $_POST['bookname3'];
		$semister = $_POST['semister4'];
		$dept = $_POST['dept2'];
		$date = $_POST['date1'];
		
		$query1 = "select * from table1 where BOOKID='$bookid' ";
		$data1 = mysqli_query($conn, $query1);
		$total1 = mysqli_num_rows($data1);
		if($total1 != 0){
		   
		   $result1 = mysqli_fetch_assoc($data1);
		   $quantity = $result1['QUANTITY'];
		   if($quantity>0){
				$quantity=($quantity-1);
				$query2 = "select * from table2 where ROLLNO='$rollno' ";
				$data2 = mysqli_query($conn, $query2);
				$total2 = mysqli_num_rows($data2);
				if($total2 == 0){
					$query3 = "insert into table2(ROLLNO,STUDENTNAME,DEPT,SEMISTER) values('$rollno','$studentname','$dept','$semister')";
					$data3 = mysqli_query($conn, $query3);
					
				}
				$query4 = "update table1 set QUANTITY='$quantity' where BOOKID='$bookid' ";
				$data4 = mysqli_query($conn, $query4);
				if($data4){
					$query5 = "insert into table3(ROLLNO,BOOKID,STUDENTNAME,BOOKNAME,DEPT,SEM,DATE) values('$rollno','$bookid','$studentname','$bookname','$dept','$semister','$date') ";
					$data5 = mysqli_query($conn, $query5);
					if($data5){
						echo "<font color='green'><i>The Book Was Issued Successfully</i></font>";
					}
				}
				
				
			   
		   }else{
			   echo "<font color='red'><i>The Library Don't Have Any Copy of This Book</i></font>";
		   }
		   
		}else{
		   echo "<font color='red'><i>We Don't Have The Book Right Now</i></font>";
		}
	}
	
  
   ?>
   <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
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

</body>

</html>
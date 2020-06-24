<?php
include("connection.php");
?>
<html>
<head>
<title>return book</title>
<link rel="stylesheet" type="text/css" href="css/return_book.css">
<link rel="icon" href="image/icon.ico">
<script src="https://kit.fontawesome.com/30c2a69a62.js" crossorigin="anonymous"></script>
</head>

<body>
<div id="header3">
<img src="image/CGEC_LOGO.png" id="test3"/>
<h1>Cooch Behar Government Engineering College</h1>
<h2>Library Managment System</h2>

</div>
<marquee bahavior="scroll">Return book</marquee>
<div id="div3">
<h3>Instruction to Use</h3>
<p>
This page is used to return books for students.Please put the details of the student who return the book with <span style="color:red">ROLL NO</span> and 
the book which is returned with it's <span style="color:red">BookId</span>.
</p>
</div>
<img src="image/cgec6.jpg" align="left" width="700" height="500" id="para5"/>

<form id="theForm17" action="" method="POST">
<div class="row">
<label for="rollno5">Roll No:</label>
<input type="number" id="rollno5" name="rollno5"/>
</div>
<div class="row">
<label for="bookid5">Book Id:</label>
<input type="number" id="bookid5" name="bookid5"/>
</div>
<div class="row">
<label for="studentname5">Student Name:</label>
<input type="text" id="studentname5" name="studentname5"/>
</div>
<div class="row">
<label for="bookname5">Book Name:</label>
<input type="text" id="bookname5" name="bookname5" />
</div>
<div class="row">
<label for="semister5">Semister:</label>
<input type="number" id="semister5" name="semister5"/>
</div>
<div class="row">
<label for="dept4">Department:</label>
<select id="dept4" name="dept4">
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
<label for="date2">Date:</label>
<input type="Date" id="date2" name="date2"/>
</div>


<div class="row">
<input type="submit" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green" name="submit" value="Submit" bgcolor="#088A08" onclick="return validationForm8()" />
<input type="reset" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green"  value="Reset" bgcolor="#088A08">

</div>
</form>


<?php
   if(isset($_POST['submit'])){
		
			$rollno = $_POST['rollno5'];
			$bookid = $_POST['bookid5'];
			$studentname = $_POST['studentname5'];
			$bookname = $_POST['bookname5'];
			$semister = $_POST['semister5'];
			$dept = $_POST['dept4'];
			$to_date = $_POST['date2'];
			$query1 = "select * from table3 where ROLLNO='$rollno' and BOOKID='$bookid' ";
			$data1 = mysqli_query($conn, $query1);
			$total1 = mysqli_num_rows($data1);
			if($total1 != 0){
				$result2 = mysqli_fetch_assoc($data1);
				$from_date = $result2['DATE'];
				$day_diff = abs(strtotime($to_date) - strtotime($from_date));
				$day_diff = floor($day_diff/(60*60*24*24));
				if($day_diff>15){
					$days_for_fine = ($day_diff-15);
					$fine = ($days_for_fine*1);
					$query2 = "select * from table2 where ROLLNO='$rollno' ";
					$data2 = mysqli_query($conn, $query2);
					$result3 = mysqli_fetch_assoc($data2);
					$privious_fine = $result3['FINE'];
					$new_updted_fine = ($privious_fine + $fine);
					$query3 = "update table2 set FINE='$new_updted_fine' where ROLLNO='$rollno' ";
					$data3 = mysqli_query($conn, $query3);
					
				}
				$query4 = "select * from table1 where BOOKID='$bookid' ";
				$data4 = mysqli_query($conn, $query4);
				$result4 = mysqli_fetch_assoc($data4);
				$present_stock = $result4['QUANTITY'];
				$new_stock = ($present_stock + 1);
				$query5 = "update table1 set QUANTITY='$new_stock' where BOOKID='$bookid' ";
				$data5 = mysqli_query($conn, $query5);
				if($data5){
					$query6 = "delete from table3 where ROLLNO='$rollno' and BOOKID='$bookid' ";
					$data6 = mysqli_query($conn, $query6);
					if($data6){
						echo "<font color='green'><i>The Book Is Returned Successfully to The Library</i></font>";
					}
				}
				
			}else{
				echo "<font color='red'><i>The Book Was not Issued From The Library</i></font>";
			}
		}
	   
   
?>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
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
function validationForm8()
{
	var box1=document.getElementById("rollno5");
	var box2=document.getElementById("bookid5");
	var box3=document.getElementById("studentname5");
	var box4=document.getElementById("bookname5");
	var box5=document.getElementById("semister5");
	var box6=document.getElementById("dept4");
	var box7=document.getElementById("date2");
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
</body>

</html>
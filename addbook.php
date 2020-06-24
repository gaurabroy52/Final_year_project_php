<?php
include("connection.php");
?>
<html>
<head>
<title>Add New book</title>
<link rel="stylesheet" type="text/css" href="css/addbook.css"/>
<link rel="icon" href="icon.ico"/>
<script src="https://kit.fontawesome.com/30c2a69a62.js" crossorigin="anonymous"></script>
</head>

<body>
<div id="header1">

<img src="image/CGEC_LOGO.png" id="test1">
<h1>Cooch Behar Government Engineering College</h1>
<h2>Library Managment System</h2>

<div>

<marquee bahavior="scroll" >Add books</marquee>
<div id="div1">
<h3>Instruction to Use</h3>
<p>
This page is used to add books for a particuler bookid.
Please put all the details of a specific book with its <span style="color:red">unique BOOKID </span>.
</p>
</div>
<img src="image/library.png" align="left" width="750" height="523" id="para5">

<form id="theForm1" action = "" method="POST" >
<div class="row">
<label for="bookid1">Book Id:</label>
<input type="number" id="bookid1" name="bookid1"/>

</div>
<br><br>
<div class="row">
<label for="bookname1">Book Name:</label>
<input type="text" id="bookname1" name="bookname1"/>
</div>
<br><br>
<div class="row">
<label for="dept1">Department:</label>
<select id="dept1" name="dept1">
<option value="">Choose Department</option>
<option value="Computer Science & Engineering" >Computer Science & Engineering</option>
<option value="Electronics & Communication Engineering" >Electronics & Communication Engineering</option>
<option value="Mechanical Engineering" >Mechanical Engineering</option>
<option value="Electrical Engineering" >Electrical Engineering</option>
<option value="Civil Engineering" >Civil Engineering</option>
<option value="Basic Science & Humanities" >Basic Science & Humanities</option>
</select>
</div>
<br><br>
<div class="row">
<label for="authorname1">Aurthor Name:</label>
<input type="text" id="authorname1" name="authorname1"/>
</div>
<br><br>
<div class="row">
<label for="quantity1">Quantity:</label>
<input type="number" id="quantity1" name="quantity1"/>
</div>
<br><br>
<div class="row">
<input class="button1" type="submit" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green" name="submit" value="Submit" bgcolor="#088A08" onclick="return validationForm1()" /> 

<input class="button1" type="reset" style="font-face:'Comic Sans MS'; font-size: larger;color:teal;background-color=green" value="reset" bgcolor="#088A08"  />
</div>
</form>
<?php

		
if(isset($_POST['submit'])){

		
		
				$BOOKID = $_POST['bookid1'];
				$BOOKNAME=$_POST['bookname1'];
				$DEPT=$_POST['dept1'];
				$AUTHORNAME=$_POST['authorname1'];
				$QUANTITY=$_POST['quantity1'];
				$query1 = "SELECT * FROM table1 WHERE BOOKID = '$BOOKID'";
				$data1 = mysqli_query($conn,$query1);
				$total = mysqli_num_rows($data1);
				if($total>0){
					$result1 = mysqli_fetch_assoc($data1);
					$quantity2 = $result1['QUANTITY'];
					$quantity2 = $quantity2 + $QUANTITY;
					$sql = "UPDATE table1 set QUANTITY = '$quantity2' WHERE BOOKID ='$BOOKID'";
					$data4=mysqli_query($conn,$sql);
					if($data4)
					{
						echo "<font color='green'>Books Added Successfully</font>";
				    }else{
	
						echo "<font color='red'>data is not updated</font>";
					}
					}else{
					$query = "INSERT INTO table1 VALUES ('$BOOKID','$BOOKNAME','$DEPT','$AUTHORNAME','$QUANTITY')";
					$data = mysqli_query($conn,$query);
					if($data){
	
					
							echo "<font color='green'>New Books are Added Successfully</font>";
						}else{
						
							echo "<font color='red'>New Books are Not Added</font>";
						}
		}
				
	}


		
?>
<br><br><br><br><br><br><br><br>
<div id="footer1">
<p id="test2">
Contract Us
</p>

<p id="test3">
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
function validationForm1()
{
	var box1=document.getElementById("bookid1");
	var box2=document.getElementById("bookname1");
	var box3=document.getElementById("dept1");
	var box4=document.getElementById("authorname1");
	var box5=document.getElementById("quantity1");
	if(box1.value=="" || box2.value=="" || box3.value=="" || box4.value=="" || box5.value=="" )
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
		return false;
	}
	
	
	
	
}

</script>


</body>
</html>
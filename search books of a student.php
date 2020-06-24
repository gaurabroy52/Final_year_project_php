<?php
include('connection.php');
?>

<html>
<head>
<title>Search Book of A Student</title>
<link rel="stylesheet" type="text/css" href="css/search book.css">
<link rel="icon" href="image/icon.ico">
<script src="https://kit.fontawesome.com/30c2a69a62.js" crossorigin="anonymous"></script>
</head>

<body>
<div id="header3">
<img src="image/CGEC_LOGO.png" id="test3"/>
<h1>Cooch Behar Government Engineering College</h1>
<h2>Library Managment System</h2>

</div>
<marquee bahavior="scroll">Issued Books of a Student</marquee>
<div id="div3">
<h3>Instruction to Use</h3>
<p>
This page is used to get the idea about what are the books which are issued 
by a particular student.Please put the <span style="color:red">Roll No</span> of the student and search and get the result.
</p>
</div>
<form id="theForm8" action="" method="POST">
<div class="row">
<label for="rollno6">Roll No</label>
<input type="number" id="rollno6" name="rollno6">
</div>
<div class="row">
<input type="Submit" value="Search" name="search5" onclick="return validationForm11()"/>
</div>
</form>
Avaliable Books are:
<table border = 2>
  <tr>

    <th style="padding:10px">Book ID</th>
	<th style="padding:10px">Student Name</th>
    <th style="padding:10px">Book Name</th>
	<th style="padding:10px">Sem</th>
    
    <th style="padding:10px">Date</th>
  </tr>  <br>
 <?php
//$output = NULL;
if(isset($_POST['search5'])){
 $rollno6 = $_POST["rollno6"];
 $query = "SELECT * FROM table3 WHERE ROLLNO = '$rollno6'";
 $query_run = mysqli_query($conn,$query);
 while($row = mysqli_fetch_array($query_run))
 {
	 ?>
	 <tr>

     <td><?php echo $row['BOOKID']?></td>
	 <td><?php echo $row['STUDENTNAME']?></td>
     <td><?php echo $row['BOOKNAME']?></td>
	 <td><?php echo $row['SEM']?></td>
     
	 <td><?php echo $row['DATE']?></td>
	 </tr>
	 <?php
 }
}
?>
</table>
<br><br>
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
<script type="text/javascript">
function validationForm11()
{
	var box1=document.getElementById("rollno6");
	if(box1.value=="" )
	{
		alert("Please Fill the Roll No Fields");
		if(box1.value=="")
		{
		box1.focus();
		box1.style.border="solid 3px red";
		}
		
		return false;
	}
}

</script>
</body>

</html>
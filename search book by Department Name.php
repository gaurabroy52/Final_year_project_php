<?php
include('connection.php');
?>
<html>
<head>
<title>Search Books By Department Name</title>
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

<marquee bahavior="scroll">Search Books By Department Name</marquee>
<div id="div3">
<h3>Instruction to Use</h3>
<p>
This page is used to get any idea about what are the names and quantities avaliable in the Library at the search time
of a particular department's book.Please select the <span style="color:red">Department Name</span> and search and get the result.
</p>
</div>
<form id="theForm10" action="" method="POST">
<div class="row">
<label for="Department">Department Name</label>

<select id="Department" name="Department">
<option value="" >Choose Department</option>
<option value="Computer Science & Engineering" >Computer Science & Engineering</option>
<option value="Electronics & Communication Engineering" >Electronics & Communication Engineering</option>
<option value="Mechanical Engineering" >Mechanical Engineering</option>
<option value="Electrical Engineering" >Electrical Engineering</option>
<option value="Civil Engineering" >Civil Engineering</option>
<option value="Basic Science & Humanities" >Basic Science & Humanities</option>
</select>
</div>
<div class="row">
<input type="Submit" value="Search" name="search4" onclick="return validationForm10()"/>
</div>
</form>
Avaliable Books are:
<table border = 2>
  <tr>
    <th style="padding:10px">Book ID</th>
    <th style="padding:10px">Book Name</th>
   
    <th style="padding:10px">Author Name</th>
	<th style="padding:10px">Quantity</th>
  </tr>  <br>
 <?php
//$output = NULL;
if(isset($_POST['search4'])){
 $Department = $_POST["Department"];
 $query = "SELECT * FROM table1 WHERE DEPT = '$Department'";
 $query_run = mysqli_query($conn,$query);
 while($row = mysqli_fetch_array($query_run))
 {
	 ?>
	 <tr>
	 <td><?php echo $row['BOOKID']?></td>
	 <td><?php echo $row['BOOKNAME']?></td>
	 
	 <td><?php echo $row['AUTHORNAME']?></td>
	 <td><?php echo $row['QUANTITY']?></td>
	 </tr>
	 <?php
 }
}
?>
</table>
<br>
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
function validationForm10()
{
	var box1=document.getElementById("Department");
	if(box1.value=="" )
	{
		alert("Please Choose the Department Fields");
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
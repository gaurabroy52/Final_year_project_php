<?php
include('connection.php');
?>
<html>
<head>
<title>Delete Books</title>
<link rel="stylesheet" type="text/css" href="css/delete_book.css">
<link rel="icon" href="image/icon.ico">
<script src="https://kit.fontawesome.com/30c2a69a62.js" crossorigin="anonymous"></script>
</head>


<body>
<div id="header3">
<img src="image/CGEC_LOGO.png" id="test3">
<h1>Cooch Behar Government Engineering College</h1>
<h2>Library Managment System</h2>

<div>
<marquee bahavior="scroll">Delete Books</marquee>
<div id="div3">
<h3>Instruction to Use</h3>
<p>
This page is used to delete a book entity from the databse completely. Please search the book with its <span style="color:red" >Unique bOOKID</span> First 
and delete the book if necessary.
Sometimes we have some books which are backdated with the Syllabus...for that reason 
we need to delete that book entity from our Database. The details of that book will be shown in the another form.
</p>
</div>
<form  id="theForm3" action="" method="">
<div class="row">
<label for="bookid2">BookId</label>
<input type="number" id="bookid2" name="bookid2"/>
</div>
<div class="row">
<input type="submit" value="Search" name="search1" onclick="return validationForm3()" />
</div>
</form>
<br><br><br><br><br><br><br><br>
<?php
if(isset($_REQUEST['search1'])){
$bookid = $_REQUEST['bookid2'];
$resultset = "SELECT * FROM table1 WHERE BOOKID = '$bookid'";
$query_run=mysqli_query($conn,$resultset);
	while($rows=mysqli_fetch_array($query_run))
	{
		
?>
<form id="theForm4" action="" method="">
<div class="row">
<label for="bookid11">Book ID</label>
<input type="number" id="bookid11" name="bookid21" value="<?php echo $rows['BOOKID']?>"/>
</div>
<div class="row">
<label for="bookname">Book Name</label>
<input type="text" id="bookname" value="<?php echo $rows['BOOKNAME']?>"/>
</div>
<div class="row">
<label for="dept">Department</label>
<input type="text" id="dept" value="<?php echo $rows['DEPT']?>"/>

</div>

<div class="row">
<label for="aurthorname">Aurthor Name</label>
<input type="text" id="aurthorname" value="<?php echo $rows['AUTHORNAME']?>" />
</div>

<div class="row">
<label for="quantity">Quantity</label>
<input type="number" id="quantity" value="<?php echo $rows['QUANTITY']?>" />
</div>

<div class="row">
<input type="submit" value="Delete" name="submit" onclick="fun3()" />
</div>
</form>

<?php
   
   }  
   }
?>

<?php
include('connection.php');
if(isset($_REQUEST['submit'])){
$bookid=$_REQUEST['bookid21'];

$query = "DELETE FROM table1  WHERE BOOKID ='$bookid'";
$sudipa = mysqli_query($conn,$query);
if($sudipa)
{
   echo "<font color='green'><i>The Specific Type of Book is Deleted SuccessFully From The System</i></font>";
}
else
{

	echo "<font color='red'><i>The Specific Type of Book is Not Deleted SuccessFully From The System </i></font>";
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
function validationForm3()
{
	var box1=document.getElementById("bookid2");
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
function fun3()
{
	return confirm("Are you sure to delete the Book?");
}
</script>
</body>

</html>
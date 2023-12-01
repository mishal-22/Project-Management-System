<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];
if(empty($_SESSION['Email']))
{
header("location:index.php");
}
else
{
if($role=="Admin")
{
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
	body
	{
		background: #F2F2F2;
    margin: 0;
    font-family: 'Poppins';
	}
        
</style>
<title>Project Management System</title>
</head>
<div>
<body>
<table width="100%"  border="0"cellspacing="00" cellpadding="00">
  <tr bgcolor="#D2691E">
  <div class="navbar">
        <div class="container">
            <a class="logo" href="#">Projec<span>TTO</span></a>

            <img id="mobile-cta" class="mobile-menu" src="images/menu.svg" alt="Open Navigation">

            <nav>
                <img id="mobile-exit" class="mobile-menu-exit" src="images/exit.svg" alt="Close Navigation">
                
                <ul class="primary-nav">
                    <li class="index.html"><a href="file:///C:/xampp/htdocs/PMS/index.html">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">About</a></li>
                </ul>

                <ul class="secondary-nav">
                    <li><a href="#">Contact</a></li>
                    <li class="go-premium-cta"><a href="http://localhost/PMS/">Login</a></li>
                    <li><a href="#">
                      <?php
    print $role;
    ?></a></li>
                    
                </ul>
            </nav>
        </div>
    </div></font></th>
    
  </tr>
</table>
<table width="100%" border="0" cellspacing="01" cellpadding="01" >
  <tr bgcolor="#99CCFF">
  <th width="5%" scope="col"><h4>&nbsp;</h4></th>
      <th width="12%" scope="col"><a style="text-decoration: none;"  href="student.php">Add Student</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="faculty.php">Add Faculty</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="stsearch.php">Search Student</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="fa_search.php">Search Faculty </a></th>
      <th width="15%" scope="col"><a style="text-decoration: none;" href="mark/index1.php">Mark</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="allocate.php">Allocate</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="report.php">Schedule</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="../logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
</table >
    <br/><br/>
    </p><form method="post" action="st.php">
        <div style="background-color: beige; margin-left: 15%; alignment-adjust: central; width: 50%">
            <table  align="center" width="100%" cellspacing="5" cellpadding="05">
  <tr>
    <th width="7%" scope="col">&nbsp;</th>
    <th width="43%" scope="col">&nbsp;</th>
    <th width="44%" scope="col">&nbsp;</th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Student ID&nbsp;:&nbsp;</font></td>
    <td><input type="text" size="20" id="in" name="id"/><font color="red" size="4">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Name&nbsp;:&nbsp;</font></td>
    <td><input type="text" id="in" name="stname"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Email&nbsp;:&nbsp;</font></td>
    <td><input type="email" id="in" name="stemail"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Phone&nbsp;:&nbsp;</font></td>
    <td><input type="text" id="in" name="stphone"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"> <font size="5">Password &nbsp;:&nbsp;</font></td>
    <td><input type="password" id="in" name="stpass"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Year&nbsp;:&nbsp;</font></td>
    <td><input type="text" id="in" name="styear"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Class&nbsp;: &nbsp;</font></td>
    <td><select name="stream" style="width: 193px; height: 2em; font-size: 15px;">
         <option value="Selcet">Select</option>
        <option value="CSE">CSE-1</option>
        <option value="COM">CSE-2</option>          
        </select><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr align="center" >
    <td>&nbsp;</td>
    <br/>
    <br/>
    <td colspan="2"> <br/><input type="submit"  name="add" value="Add" id="bt" />
    				
    <td>&nbsp;</td>
  </tr>
            </table> <br/><br/>  </div></form>
 <?php
}
elseif($role=="Faculty")    
{
?>
    <?php 
    header('Location:../Admin.php');
    ?>
 <?php
}
else   
{
?>
    <?php 
    header('Location:../Admin.php');
    ?>
<?php
}
?>
</table>
<p>
  <?php
}
?>
    
    

<p>&nbsp;</p>

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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/main.css">
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
                    <li class="index.html"><a href="/PMS/index.html">Home</a></li>
                    <li><a href="#">Features</a></li>
                    <li><a href="#">About</a></li>
                </ul>

                <ul class="secondary-nav">
                    <li><a href="#">Contact</a></li>
                    <li class="go-premium-cta"><a href="http://localhost/PMS/">Login</a></li>
                    <li><a href="#"><?php
    print $role;
    ?></a></li>
                    
                </ul>
            </nav>
        </div>
    </div>
</font></th>
  </tr>
</table >
<table  width="100%" border="0" cellspacing="0" cellpadding="0" >
  <tr bgcolor="#99CCFF">
      <th width="5%" scope="col"><h4>&nbsp;</h4></th>
      <th width="12%" scope="col"><a style="text-decoration: none;"  href="ADMIN/student.php">Add Student</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="ADMIN/faculty.php">Add Faculty</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="ADMIN/stsearch.php">Search Student</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="ADMIN/fa_search.php">Search Faculty </a></th>
      <th width="15%" scope="col"><a style="text-decoration: none;" href="ADMIN/mark/index1.php">Mark</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="ADMIN/allocate.php">Allocate</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="ADMIN/report.php">Schedule</a></th>
      <th width="11%" scope="col"><a style="text-decoration: none;" href="logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
    <tr>
        <td colspan="10"><section class="hero">
        <div class="container">
            <div class="left-col">
                <p class="subhead">Solution for Project Management</p>
                <h1>Projec<span>TTO</span> - Advance Feature</h1>

                
            </div>

            <img src="images/illustration.svg" class="hero-img" alt="Illustration">
        </div>
    </section></td>
    </tr>
</table>
   
 <?php
}
elseif($role=="Faculty")    
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
        a link{
            text-decoration: none;
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
                    <li class="index.html"><a href="http://localhost/PMS/index.html">Home</a></li>
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
  <table width="100%" border="0" cellspacing="00" cellpadding="00">
      <tr bgcolor="#99CCFF">
      <th width="7%" scope="col"><h4>&nbsp;</h4></th>
      <th width="15%" scope="col"><a style="text-decoration: none;" href="FACULTY/skill.php">Faculty details</a></th>
      <th width="14%" scope="col"><a style="text-decoration: none;" href="FACULTY/view.php">View</a></th>
      <th width="15%" scope="col"><a style="text-decoration: none;" href="FACULTY/mail.php">Mail</a></th>
      <th width="15%" scope="col"><a style="text-decoration: none;" href="FACULTY/mark/index1.php">Mark</a></th>
      <th width="13%" scope="col"><a style="text-decoration: none;" href="FACULTY/meeting.php">Meeting</a></th>
      <th width="15%" scope="col"><a style="text-decoration: none;" href="FACULTY/report.php">Schedule</a></th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
       <tr>
       <td colspan="10"><section class="hero">
        <div class="container">
            <div class="left-col">
                <p class="subhead">Solution for Project Management</p>
                <h1>Projec<span>TTO</span> - Advance Feature</h1>

                
            </div>

            <img src="images/illustration.svg" class="hero-img" alt="Illustration">
        </div>
    </section></td>
    </tr>
</table>
 <?php
}
else   
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
        a link{
            text-decoration: none;
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
                    <li class="index.html"><a href="http://localhost/PMS/index.html">Home</a></li>
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
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#99CCFF">
      <th width="7%" scope="col"><h4>&nbsp;</h4></th>
    <th width="13%" scope="col"><a style="text-decoration: none;" href="STUDENT/project.php">Project</a></th>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a style="text-decoration: none;" href="STUDENT/skill.php">Faculty details</details></a></th>
    <th width="11%" scope="col">&nbsp;</th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="STUDENT/mark/index1.php">Mark</a></th>
    <th width="11%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a style="text-decoration: none;" href="STUDENT/mail.php">Mail</a></th>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="13%" scope="col"><a style="text-decoration: none;" href="logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
       <tr>
       <td colspan="10"><section class="hero">
        <div class="container">
            <div class="left-col">
                <p class="subhead">Solution for Project Management</p>
                <h1>Projec<span>TTO</span> - Advance Feature</h1>

                
            </div>

            <img src="images/illustration.svg" class="hero-img" alt="Illustration">
        </div>
    </section></td>
    </tr>
</table>
<?php
}
?>
</table>
<p>
  <?php
}
?>
    
    
</p>
<p>&nbsp;</p>
  </table>
</table></body>
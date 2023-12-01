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
if($role=="Faculty")
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
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#99CCFF">
  <th width="7%" scope="col"> <h4>&nbsp;</h4></th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="skill.php">Faculty Details</a></th>
    <th width="14%" scope="col"><a style="text-decoration: none;" href="view.php">View</a></th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="mail.php">Mail</a></th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="mark/index1.php">Mark</a></th>
    <th width="13%" scope="col"><a style="text-decoration: none;" href="meeting.php">Meeting</a></th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="report.php">Schedule</a></th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="../logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
</table>
    <br/><br/><br/>
    <table  align="center" bgcolor=#007AF3 cellpadding="30em" cellspacing="0">
            <?php
                echo "<tr>";
                echo "<th>"."Meeting ID"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Faculty ID"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Student ID"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Date"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Time"."</th>";
                echo "<th>" ?> &nbsp; <?php "</th>";
                echo "<th>"."Description"."</th>";
                echo "</tr>";
                include './connection.php';
                        $sql1="select * from meeting ";
                        $rec=mysqli_query($conn, $sql1);
                        while ($std=mysqli_fetch_assoc($rec))
                        {
                           ?> <tr bgcolor="beige" align="center"><?php
                            echo "<td>".$std['meeting_id']."<td/>";
                            echo "<td>".$std['f_id']."<td/>"; 
                            echo "<td>".$std['s_id']."<td/>"; 
                            echo "<td>".$std['date']."<td/>"; 
                            echo "<td>".$std['time']."<td/>"; 
                            echo "<td>".$std['desc']."<td/>"; 
                            ?>  </tr> <?php 
                        }
            ?>
        </table>
    </form>
 <?php
 
}
elseif($role=="Admin")    
{
    header('Location:../Admin.php'); 
?>
 <?php
}
else   
{
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
   
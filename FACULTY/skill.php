<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];


include '../connection.php';
if(isset($_POST['update']))
{
           $domain=$_POST['domain'];
           $research=$_POST['research']; 
           $others=$_POST['others'];
           
           if (!empty($domain)|| !empty($research)||!empty($others))
           {
              
            $sql= "UPDATE `pmas`.`faculty` SET `domain` = '$domain', `research` = '$research', `others` = '$others' WHERE `faculty`.`f_id` = '$user';";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:skill.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:skill.php');
        }  
}



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
<style>
	body
	{
		background-image:url(../background.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
	}
</style>
<title>Project Management System</title>
</head>
<div>
    <body>
<?php
   header('Location:../Admin.php');
   ?>
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
      <form action="skill.php" method="post">
          <div style="background-color:beige; border:1px solid black; width:40%; margin-left:30%; margin-top:100px;">
              <br/>
              <table   cellspacing="05" cellpadding="05" align="center" width="100%">
    <tr>
      <td>&nbsp;</td>
      <td align="right"><font size="5">Domain : </font></td>
      <td><input id="in" type="text" name="domain"/><font color="red">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><font size="5">Research : </font></td>
      <td><input id="in" type="text" name="research"/><font color="red">*</font></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><font size="5">Other Skill (s) if any : </font></td>
      <td><input id="in" type="text" name="others"/></td>
      <td>&nbsp;</td>
    </tr>
    
    <tr>
        <td colspan="4" align="center"><input id="bt" type="submit" name="update" value="Update" /></td>
    </tr>
  </table>
          </div>
  </form>
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
    
    
    
  </p>
  <p>&nbsp;</p>
    </body>

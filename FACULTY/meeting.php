<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];

include '../connection.php';
        if(isset($_POST['submit']))
        {
           $sid=$_POST['sid']; 
           $fid=$_POST['fid'];
           $date=$_POST['dat'];
           $time=$_POST['tem'];
           $dec=$_POST['des']; 
           
           
          if (!empty($date)||!empty($time)||!empty($dec))
           {
              
            $sql= "INSERT INTO `pmas`.`meeting` (`meeting_id`, `f_id`, `s_id`, `date`, `time`, `desc`) VALUES ('', '$fid', '$sid', '$date', '$time', '$dec');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:meeting.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:meeting.php');
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
    <link rel="stylesheet" type="text/css" href="css/main.css">
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
 header("location:../Admin.php");
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
		background-image:url(../background.png);
		background-repeat: no-repeat; 
		background-attachment: fixed;
		background-size: 100% 100%;
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
      <th width="7%" scope="col"><h4>&nbsp;</h4></th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="skill.php">Faculty Details</a></th>
    <th width="14%" scope="col"><a style="text-decoration: none;" href="view.php">View</a></th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="mail.php">Mail</a></th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="mark/index1.php">Mark</a></th>
    <th width="13%" scope="col"><a style="text-decoration: none;" href="meeting.php">Meeting</a></th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="report.php">Schedule</a></th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="../logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
 <?php
}
else   
{
?>
    
<?php
header("location:../Admin.php");
}
?>
</table>
<p>
  <?php
}
?>
    
    
</p>
<p>&nbsp;</p>
<form method="post" action="meeting.php">
    <div style="background-color:beige; border:1px solid black; width:40%; margin-left:30%; margin-top:50px;">
<table width="100%" border="0" cellspacing="05" cellpadding="05">
  <tr>
    <th width="14%" rowspan="2" scope="col">&nbsp;</th>
    <th colspan="2" scope="col"><font size="6">Create Schedule</font></th>
    <th width="12%" rowspan="2" scope="col">&nbsp;</th>
  </tr>
  <tr>
      <td width="36%" scope="col" align="right"><font size="5">Faculty ID : </font></th>
      <td width="38%" scope="col"><input id="in" type="text" name="fid" value="<?php echo $user;?>" readonly/></th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" ><font size="5">Student ID : </font></td>
    <td align="left">
                
    <?php
            include '../connection.php';
             $sql="select s_id from project where f_id='$user';";
             $result=  mysqli_query($conn, $sql)
             ?> <select name="sid" style="width: 10em; height: 2em; font-size: 15px;">
                 <option selected>Supervisory</option>
                 <?php
                 while($row = mysqli_fetch_assoc($result))
                 {
                     $category= $row['s_id'];
                     ?>
                 <option selected="selected" value="<?php echo $category; ?>"><?php echo $category;?></option>
                 <?php
                 }
     ?>
            </select>
            </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Date :  </font></td>
    <td><input id="in" type="date" name="dat"/><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Time : </font></td>
    <td><input id="in" type="time" name="tem" /><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right"><font size="5">Description : </font></td>
    <td><textarea id="in" name="des" cols="22" rows="5"></textarea><font color="red">*</font></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" align="center"><input style="width: 10em;  height: 3em; font-size: 20px;" type="submit" name="submit" value="Submit" /></td>
    <td>&nbsp;</td>
  </tr>
</table>
    </div>
</form>
</body>
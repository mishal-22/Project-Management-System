<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];

if(isset($_POST['bppf'])){
if (isset($_FILES['ppf']))
{
    $file= $_FILES['ppf'];
    //file properties
    $file_name=$file['name'];
    $file_temp=$file['tmp_name'];
    $file_size=$file['size'];
    $file_error=$file['error'];
    // work out the extension
    $file_ext = explode('.', $file_name);
    $file_ext=  strtolower(end($file_ext));
    $allowed= array('docx','doc','txt','pdf');
    
    if(in_array($file_ext, $allowed))
    {
        if($file_error===0)
        {
            if($file_size<=9999999999)
            {
                $file_name_new=uniqid('',TRUE).'.'.$file_ext;
                $file_destination='../ppf/'.$file_name_new;
                if(move_uploaded_file($file_temp, $file_destination))
                {
                    //echo $file_destination;
                    include '../connection.php';
                    $sql = "UPDATE project SET ppf='$file_name' WHERE s_id='$user'";
                    mysqli_query($conn, $sql);
                    $conn->close();
                    header('Location:project.php'); 
                }
            }
        }
    }
}
}


    elseif(isset($_POST['bpsf']))
 {
if (isset($_FILES['psf']))
{
    $file= $_FILES['psf'];
    //file properties
    $file_name=$file['name'];
    $file_temp=$file['tmp_name'];
    $file_size=$file['size'];
    $file_error=$file['error'];
    // work out the extension
    $file_ext = explode('.', $file_name);
    $file_ext=  strtolower(end($file_ext));
    $allowed= array('docx','doc','txt','pdf');
    
    if(in_array($file_ext, $allowed))
    {
        if($file_error===0)
        {
            if($file_size<=9999999999)
            {
                $file_name_new=uniqid('',TRUE).'.'.$file_ext;
                $file_destination='../psf/'.$file_name_new;
                if(move_uploaded_file($file_temp, $file_destination))
                {
                    //echo $file_destination;
                    include '../connection.php';
                    $sql = "UPDATE project SET psf='$file_name' WHERE s_id='$user'";
                    mysqli_query($conn, $sql);
                    $conn->close();
                    header('Location:project.php'); 
                }
            }
        }
    }
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
		background: #F2F2F2;
    margin: 0;
    font-family: 'Poppins';
	}
</style>
<title>Project Management System</title>
</head>
<div>
<body>
    <?php
header('Location:../Admin.php');
 
}
elseif($role=="Faculty")    
{
    header('Location:../Admin.php');
?>
    
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
  <table width="100%" border="0" cellspacing="00" cellpadding="00">
      <tr bgcolor="#99CCFF">
          <th width="7%" scope="col"><h4>&nbsp;</h4></th>
          <th width="13%" scope="col"><a style="text-decoration: none;" href="project.php">Project</a></th>
    
    <th width="15%" scope="col"><a style="text-decoration: none;" href="mark/index1.php">Mark</a></th>
    <th width="11%" scope="col">&nbsp;</th>
    <th width="15%" scope="col"><a style="text-decoration: none;" href="skill.php">Faculty details</a></th>
    
    
    <th width="13%" scope="col"><a style="text-decoration: none;" href="mail.php">Mail</a></th>
    
    <th width="13%" scope="col"><a style="text-decoration: none;" href="../logout.php">Logout</a></th>
    <th width="6%" scope="col">&nbsp;</th>
  </tr>
<?php
}
?>
</table>
<p>
  <?php
}
?>
    
    
</p>

<div style="background-color:#93faf1 ; width: 70%; margin-left: 15%; margin-top: 0px; ">
    <br/><br /><br />
<form method="post" action="project.php" enctype="multipart/form-data">
    
<table width="100%" border="0" cellspacing="05" cellpadding="05">
  <tr>
    <th width="12%" scope="col">&nbsp;</th>
    <th width="37%" scope="col">&nbsp;</th>
    <th width="37%" scope="col">&nbsp;</th>
    <th width="13%" scope="col">&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="center"><div style="background-color: beige;"><br/><h3>Project  Proposal</h3><br /><input type="file" name="ppf"/><br/><br/><input type="submit" name="bppf" value="upload"/><br/><br/></div></td>
    <td align="center"><div style="background-color: beige;"><br/><h3>Project  Report</h3><br /><input type="file" name="psf"/><br/><br/><input type="submit" name="bpsf" value="upload"/><br/><br/></div></td>
    <td>&nbsp;</td>
  </tr>
</form>
</table>
    <br /><br />
<form method="post" action="project.php"> 
    <div style="background-color: beige; width: 30%; margin-left: 35%">
        <table align="center">
    <tr>
    <td>&nbsp;<br/><br/></td>
    <?php
    if(isset ($_POST['feedback']))
{
    include '../connection.php';
                    $sql1="select * from project where s_id ='$user' ";
                    $rec=mysqli_query($conn, $sql1);
                    
                    while($std=mysqli_fetch_assoc($rec))
                    {
                        ?>
    
    <td colspan="2" align="center"><textarea name="feedback" rows="5" cols="30" readonly="readonly" placeholder="FEEDBACK"><?php echo $std['remark'];?> </textarea> </td>  <td></td> </tr>
                      <?php 
                    }
}?>
    <tr> 
        <td></td>
        <td colspan="2" align="center"><input type="submit" name="feedback" value="Get Feedback"/><br/><br/></td>
    <td>&nbsp;</td>
  </tr></form>
  
</table>
   </div>       </body><br /><br /> </div>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body></div></html>

<?php
session_start();
$user =  $_SESSION['Email'];
$role = $_SESSION['Role'];

include '../connection.php';


if (isset($_POST['submit']))
{
            $to=$_POST['to']; 
           $msg=$_POST['msg'];
           
           
          if (!empty($to))
           {
              
            $sql= "INSERT INTO `pmas`.`st_mail` (`s_mail_id`, `s_id`, `f_id`, `mag`) VALUES ('', '$user', '$to', '$msg');";
                mysqli_query($conn, $sql);
                $conn->close();
                header('Location:mail.php');  
           }
        else
            
        {
              echo 'Please fill up all fields';
              header('Location:mail.php');
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
 <?php
 header('Location:../Admin.php');
}
elseif($role=="Faculty")    
{
?>
    
 <?php
 header('Location:../Admin.php');
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
  <table width="100%" border="0" cellspacing="00" cellpadding="00">
      <tr bgcolor="#99CCFF">
          <th width="7%" scope="col"><h4>&nbsp;</h4></th>
          <th width="13%" scope="col"><a style="text-decoration: none;" href="project.php">Project</a></th>
          <th width="15%" scope="col"><a style="text-decoration: none;" href="mark/index1.php">Mark</a></th>
   
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
<p>&nbsp;</p>


<form method="post" action="mail.php">
    <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
        <tr bgcolor="beige">   <th><h4>&nbsp;</h4></th>
                <th><input style="width: 10em;  height: 3em; font-size: 15px;" type="submit" value="Compose" name="compose"/></th>
                <th>&nbsp;</th>
                <th><input style="width: 10em;  height: 3em; font-size: 15px;" type="submit" value="Inbox" name="inbox"/></th>
                <th>&nbsp;</th>
                <th><input style="width: 10em;  height: 3em; font-size: 15px;" type="submit" value="Sent Mail" name="sent"/></th>
                <th>&nbsp;</th>
        </tr>
                <?php
                
                if (isset($_POST['compose']))
                {
                    $sql1="select * from project where s_id ='$user' ";
                    $rec=mysqli_query($conn, $sql1);
                    $std=mysqli_fetch_assoc($rec);
                    ?>
                <tr>
                    <td colspan="2">&nbsp;</td>
                    <td colspan="3" align="center">
                        <br/><br/>
                        <div style="background-color: beige; width: 40%; margin-left: 5%; border: black;">
                        <br/><br/>
                        <font size="5">To : &nbsp;&nbsp; </font><input id="in" type="text" name="to" readonly value="<?php echo $std["f_id"];?>"/><br/><br/>
                        <font size="5">  From : </font><input id="in" type="text" name="from" value="<?php echo $user;?>" readonly/><br/><br/>
                        <textarea name="msg" cols="30" rows="5" placeholder="Message" ></textarea><br/><br/>
                        <input id="bt" type="submit" value="Send" name="submit"/>
                        <br/><br/>
                        </div>
                    </td>
                    <td colspan="2">&nbsp;</td>
                </tr>
                 <?php
                }
                elseif (isset($_POST['inbox'])) 
                    {
                        ?>  
                        
                            <table width="60%" cellpadding="0" cellspacing="1" border="0" align="center" bgcolor="blue">  

                    <?php
                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "<br/>";
                       echo "<tr>";
                    echo "<th>"."FROM"."</th>";
                    echo "<th>" ?> &nbsp; <?php "</th>";
                    echo "<th>"."MESSAGE"."</th>";
                    echo "</tr>";
                        $sql1="select * from mail where s_id ='$user'";
                        $rec=mysqli_query($conn, $sql1);
                        
                        echo "<tr>";
                        while ($std= mysqli_fetch_assoc($rec))
                        {
                           if ($std['from']="supervisor")
                            {
                               ?> <tr bgcolor="beige" align="center"><?php
                            //echo "<tr>";
                            echo "<td>".$std['f_id']."<td/>";
                            echo "<td>".$std['msg']."<td/>"; 
                            ?>  </tr> <?php 
                            //echo "<tr/>";
                            }
                        }
                        
                        ?> </table> <?php
                         
                    }
                    
                    elseif (isset($_POST['sent'])) 
                    {
                        ?>  <table width="60%" cellpadding="0" cellspacing="2" border="0" align="center" bgcolor="blue">  

                    <?php
                    
                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "<br/>";
                                            echo "<tr>";
                    echo "<th>"."TO"."</th>";
                    echo "<th>" ?> &nbsp; <?php "</th>";
                    echo "<th>"."MESSAGE"."</th>";
                    echo "</>";
                        $sql1="select * from st_mail where s_id ='$user' ";
                        $rec=mysqli_query($conn, $sql1);
                        
                        echo "<tr>";
                        while ($std=mysqli_fetch_assoc($rec))
                        {
                           ?> <tr bgcolor="beige" align="center"><?php
                            echo "<td>".$std['f_id']."<td/>";
                            echo "<td>".$std['mag']."<td/>"; 
                            ?>  </tr> <?php 
                        }
                        //echo "<tr/>";
                        ?> </table> <?php
                         
                    }
                
                ?>
        
    </table>
</form>
    
<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   
   //echo 'You have cleaned session';
   header('Refresh: 30; URL = Studentlogin1.php');
?>

<?php

include"connectdb.php"

?>

<!DOCTYPE html>
<html lang='en'>   
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='../css/bootstrap.css' rel='stylesheet'>
<link href="../css/bootstrap.min.css" rel="stylesheet">   
<title>Automation of student services</title>       
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    
<link rel="stylesheet" type="text/css" href="../css/Studentlogin1.css">

   </head>
      <body> 
          
          <header>
    
        <div class="container-fluid"> 
  <div class="row row-fixed-top">
       <div class="col-xs-12">
           <h1> <div class="class01"><font color="white"><center>Welcome to automation of student services</center></font> </div></h1> </div>
            </div>
        </div>
             
 </header>                 
          
<div class="container-fluid"> 
    <div class="col-sm-12 text-center"><h1><font color="white">Student Login Form</font></h1>
        </div>
    
    <div class="col-sm-4">
    
    </div>
    
   <div class="col-sm-4"> 
          
   <div class="alert alert-info">
       
       <br>
       
       <form action='Studentlogin1.php' method="POST" class="form-horizontal" role="student id input"> 
        
        
            <b>
            <table class="table">    
    
             <tr><td>
                 <label>Student_Id</label></td><td><div class="form-group" ><div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span> <input type="text" class="form-control" id="studentid" name="studentid" placeholder="Enter your RegNo"/></div></td></tr>
     <tr><tr></tr><tr><td>
    <label>Password</labe></td><td><div class="form-group" >
<div class="input-group"><span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span><input type="password" class="form-control"  id="pswd" class="glyphicon glyphicon-key" name="pswd" placeholder="Enter your password"></div></td></tr>
     
<tr><td></td><td><br> <input type="submit" id="btn" name="login" value="Login"></td></tr>
         
       </table></b>
        </form>
          
          <center>
              
<font color=red><h4><br>                 
     
     <?php
  

$sid=stripcslashes('$sid');
$pswd=stripcslashes('$pswd');

   $sid=mysql_real_escape_string('$sid');
    $pswd=mysql_real_escape_string('$pswd');    
        
if(isset($_POST['login']))
{
    
//session_start();
 
     $sid= $_POST['studentid'];
   $pswd= $_POST['pswd'];  
    
  if((!isset($sid) || $sid=="") || (!isset($pswd) || $pswd==""))
{ 
echo "Provide your credentials please!";    
    }
    
if($_POST['studentid']!="" && $_POST['pswd']!="")
{  
    
 $selectquery = "Select * From students Where Student_ID='$sid' and Password='$pswd'"; 
    
$result=mysql_query($selectquery);
    
$row=mysql_fetch_array($result);
    
if($row['Student_ID']==$sid && $row['Password']==$pswd)  {

    $name=$row['First_Name'];
     $_SESSION['username']=$name;   header("location:Studentpage1.php");
    
      exit();
    
//echo "Login success!!! Welcme".$row['Student_ID'];
    
    
}
else{ // if not
            echo "Invalid StudentId or Password"; 
        }
}

}

?> 
              
    <br>
    
        
         <br><font color=orange>If you are no longer registered, register<b>&nbsp<a href="authentic.php">Here</a></b></font></center>
              <p>
                  <font color=white>.</font>
              </p>
        
        </div>
                  <br>
                  
     
     <br><br>
     
     
    
     
      </center> 
      </div>
      
       <br>
       </div></div>
  
    <br><br><br><br>
          <footer>
    <div class="col-sm-12">
     <div class="class2">
         <p align=center> 
         <font color=white>
             <a href="../index.php"><font color="white">Back to Homepage</a></font>
      </div>
    </div>
        <br><br>
        </footer>          
 
 <script   src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>            
 </body>
</html>
             

         
     
     
          
 
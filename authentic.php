<!DOCTYPE html>
<html lang='en'>   
<head>
    <meta charset="utf-8">
    <script language="JavaScript">
    //function register(){
    //alert('Sorry, you have jumped unfilled field! Please try again.')
    }
    
    </script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='../css/bootstrap.css' rel='stylesheet'>
<link href="../css/bootstrap.min.css" rel="stylesheet">   
<title>Automation of student services</title>       
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    
<link rel="stylesheet" type="text/css" href="../css/Register1.css">

   </head>
      <body> 
    <header>
    
        <div class="container-fluid"> 
  <div class="row row-fixed-top">
       <div class="col-xs-12">
           <h1> <div class="class2"><font color="white"><center>Welcome to automation of student services</center></font> </div></h1> </div>
            </div>
        </div>
             
 </header> 
                
  <!-- GUFUNGURA autentic page-->        
<div class="container-fluid"> 
    <div class="col-sm-12 text-center"><br><h1><font color="white">Student Registration Form</font></h1>
        </div>
    
    <div class="col-sm-3">
    
    </div>
    
   <div class="col-sm-6"> 
  
      <div class="bg-info">
    
<center><form action="authentic.php" method="post">
        
        <div class="table-responsive">
            <b>
 <table class="table">
        
<tr>
<td>Student_ID</td>
<td><input type="text" name="studentid" maxlength="12" placeholder="Enter your RegNo" value=""></td></tr>
 &nbsp&nbsp&nbsp&nbsp;   <tr><td><div class=form-group>  <button type='submit' name="checkid" id="inputid" class='btn btn-primary'><span class='glyphicon glyphicon-ok'></span>&nbsp;Check Me!</button></div></td></tr></table></b></div></form>
                
<?php 

if(isset($_POST["checkid"]))
{
    
$studentid=$_POST['studentid']; 
 
  if((!isset($studentid) || $studentid=="")){

 echo "<h4 style='color:#f53138'>Empty Number! Please try again.</h4>";


    }
    
  else{   
mysql_connect("localhost","tuyijonathe","1234") or die(mysql_error());

    mysql_select_db("maindb");
    
  $select="SELECT * from allstudents where RegNo='$studentid'";  
  $result=mysql_query($select);
$row=mysql_fetch_array($result);
      
  $a=$row["RegNo"];
  $b=$row["First_Name"];
  $c=$row["Last_Name"];
      
    if($result=$a){
            
    ?>
    
 <!-- GUFUNGURA autentic page nyuma yo gukanda buto ya Check me -->
    
<center>    <form action="authentic.php" method="post" name="insertform">
    
    <!-- GUFUNGURA Div ya mbere -->
    
   <div class="table-responsive">                        
   <br>
       <label for="regno" id=""><i><b><font color=blue>Welcome&nbsp;<?php echo $b; ?>!</font></b></i></label><input hidden="" name="regno" value="<?php echo $a; ?>">
       <tr><td><label for="fname" id=""></label></td><td><input hidden="" type="text" name="fname" id="inputid" value="<?php echo $b; ?>"></td></tr>       
 <tr><td><label for="lname" id=""></label></td><td><input hidden=""  type="text" name="lname" id="inputid" value="<?php echo $c; ?>"></td></tr>
<table class="table"> 
     
     <p>
    <!--<tr><td><label for="regno" id="">Student_Id</label></td><td><input hidden="" name="regno" value="<?php //echo $a; ?>"></td></tr>
<tr><td><label for="fname" id="">First name</label></td><td><input type="text" name="fname" id="inputid" value="<?php //echo $b; ?>"></td></tr>       
 <tr><td><label for="lname" id="">Last name</label></td><td><input  type="text" name="lname" id="inputid" value="<?php //echo $c; ?>"></td></tr>-->    
 
 <tr><td> <label for="gender" id="">Gender</label></td><td> <select name="gender" placeholder="select gender">
        <option> </option>
                            <option>Female</option>
                            <option>Male</option>
                        </select> </td></tr>
<tr><td><label for="dept" id="">Department</label></td><td><select name="dept" placeholder="select Department">
                    <option> </option> 
                        <?php
    
    mysql_connect("localhost","tuyijonathe","1234") or die(mysql_error());

        mysql_select_db("maindb");

$selectquery="select DEPARTMENT from departments";

$result=mysql_query($selectquery);


$count=mysql_num_rows($result);


if($count>0){


	while($row=mysql_fetch_array($result)){
        
        $dept=$row["DEPARTMENT"];
		 
	?>
     <!--<option> </option> -->     
    <option><?php echo $dept; ?></option>      
    <?php
        
    }
}
       ?>
                        </select> </td></tr>
  <tr><td><label for="phone" id="">Phone</label></td><td>  <input type="text" name="phone" id="inputid" value=""> </td></tr>
  <tr><td>  <label for="email" id="">Email</label></td><td> <input type="text" name="email" id="inputid" value=""> </td></tr>
        <tr><td> <label for="email" id="">Password</label></td><td> <input type="password" name="password" id="inputid" value=""> </td></tr>
<tr><td><label for="email" id="">Repassword</label></td><td><input type="password" name="repassword" id="inputid" value=""></td></tr></table>
    <table><tr><td><a href=authentic.php><div class=form-group>  <button type='submit' name="cancel" class='btn btn-primary'><span class='glyphicon glyphicon-...'></span>&nbsp;Cancel</button></div> </a></td><td><div class=form-group>  <button type='submit' name="submit" id="inputid" class='btn btn-primary'><span class='glyphicon glyphicon-save'></span>Register</button></div></td></tr></table> </div>  
 
<?php
  
 }
    else{
      echo "<h4 style='color:#f53138'>Invalid Number! Please try again.<h4>";
  
      }
}
    function test_input($data){
        $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
    }
}
       
?>
                </form> </center> 
          <!-- GUFUNGA autentic page nyuma yo gukanda buto ya Check me -->
          
          <!--Gukara buto ya Submission of Student registration -->
                
          <center>
              
<font color=red><h4><br>   
       
 <?php

if(isset($_POST["submit"]))
{
        // 1. get data from the form

   $sid=$_POST["regno"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $gender=$_POST["gender"];
    $dept=$_POST["dept"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];
   

    // 2. verify if all the fields have some data
    if((!isset($gender) || $gender=="")|| (!isset($dept) || $dept=="") || (!isset($phone) || $phone=="") || (!isset($email) || $email=="") || (!isset($password) || $password=="")|| (!isset($repassword) || $repassword=="")){

 echo "Sorry, you have jumped unfilled field! Please try again.";


    }else{
            // 3. Mysql connection
mysql_connect("localhost","tuyijonathe","1234") or die(mysql_error());

        mysql_select_db("maindb");

        if($password==$repassword){

            //5. insertion

            //5.1 insert query

$insertquery="insert into students values('$sid','$fname',
'$lname','$gender','$dept','$phone','$email','$password','$repassword')";

            //5.2 execute the insert query

                $result=mysql_query($insertquery);

            // 5.3 verify if the query was executed successfully

                if($result){

            echo"<h4 style='color:#4977f4'>Student registration successfully!</h4>";
                }
            else{

            echo "The RegNo is in use, Plz try another one!";

            }
        }
        else{

            echo"<h4>Sorry passwords are Mismatched!!<br>Please try again to match the passwords.</h4>";
        }

    }    
    
}

?>                  
                  
    </h4></font>
              <!-- GUFUNGA Gukara buto ya Submission of Student registration -->
     
     <b>Once you are a full registered, <a href="Studentlogin1.php">Login Now</a></b>
        </center>
          <!-- <p><font color=#d3f4fa>.</font></p> -->
      </div>
      
       <br>
       </div></div>
    <!-- GUFUNGA autentic page -->
          <br><br>
          <footer>
    <div class="col-sm-12">
          
         <p align=center> 
         <font color=white>
        <a href="../index.php"><font color="white">Back to Homepage</a></font>
          
          </div>
        <br><br>
        </footer>     

 <script   src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    
    </body>
</html>
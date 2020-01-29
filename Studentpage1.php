<?php
session_start();
if(!isset($_SESSION["username"])){
header("location:Studentlogin1.php");
exit;
}
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
        
        <link rel="stylesheet" type="text/css" href="../css/Studentpage1.css">
    
    <style> 
        
    #navbar ul{
    
    list-style: none;
    }
     *{
    margin: 0px;
    padding: 0px;
    }
    #navbar ul li{ 
         width: 150px;
        border-bottom: 2px solid white;
        //border-left: 2px solid white;
        border-right: 2px solid white;
        border-radius: 5%;
        height: 50px;
        line-height: 50px;
        text-align: center;
        float: left;
        color: antiquewhite;
        font-size: 18px;
        position: relative;
    }
    
    #navbar ul ul{
    display: none;
    }
    
    #navbar ul li:hover > ul{
    display: block;
    
    }
    
    #navbar ul ul ul{
     margin-left: 150px;
        top: 0px;
        position: absolute;
            
    }
    
    .item img{
    width: 80%;
        height: 100%;
    }
    #slider{margin-top: 60px;}
    
     hr { border: solid #95e7fa; border-width: 5px 0 0; clear: both; margin: 22px 0 21px; height: 0; width: 90%;}   
</style>        
   </head>
      <body>
           <header>
    
        <div class="container-fluid"> 
  <div class="row row-fixed-top">
       <div class="col-sm-12">
           <h1> <div class="alert alert-danger"><font color="blue"><center>Welcome to automation of student services</center></font> </div></h1> </div>
            </div>
        </div>
             
 </header>
          
 <div class="container-fluid"> 
  <div class="row row-fixed-top">
       <div class="col-sm-12">
         <div class="class1">
      <center> <table border="0.5">
       
           <tr><td><td><td><td><td><b><h3><a href="../index.html"></a></h3></b></td>
        <td><td><td><td><td><td><b><h3><a href="Service.html"></a></h3></b></td>
               <td><td><td><td><td><td><b><h3><font color=white>Welcome&nbsp;<?php echo $_SESSION['username']; ?>&nbsp&nbsp&nbsp&nbsp;</font><a href="Studentlogin1.php">Logout</a></h3></b></td></tr></table>
          </div>
             <br>
        
    <div class="container-fluid">
    <div class="row">
            <div class="col-md-12"> 
                  <div class="alert alert-success text-right">
    
<h4>
    <?php
echo "You loged in as a student. <br /><br />  Welcome again   "  .$_SESSION['username'],"!!";
            ?>
</h4>
                       <div class="table-responsive">
                           
        <div id="navbar"> 
          
        <ul class="nav navbar-nav collapse
navbar-collapse">
     <table class="table">
         
<tr class="active"><td><b><h2><li class="default"><a href="Response.php"><div class="form-group"> <div class="col-sm-offset-0"> <button type="submit" class="btn btn-active"><span class="glyphicon glyphicon-..."></span><b>&nbsp;View responses(<b><font color=#fd8181>

<?php

$a=$_SESSION['username'];

$x=0;
//$S=$x+1,
mysql_connect("localhost","tuyijonathe","1234") or die(mysql_error());

        mysql_select_db("maindb");

$selectquery="select * from responses where First_Name='$a'";

$result=mysql_query($selectquery);

$count = mysql_num_rows($result);

if($result){

    echo $count;
    
    }
 else 
 {
 echo $x;
 }
?>
    
</font></b>)
               </button> 
    </div> 
    </div></a></li></h2></b></td></tr>
         
         <tr class="active"><td><b><h2><li class="default"><a href="Comments.php"><div class="form-group"> <div class="col-sm-offset-0"> <button type="submit" class="btn btn-active"><span class="glyphicon glyphicon-..."></span><b>&nbsp;Contact with staff</b></button> 
    </div> 
             </div></a></li></h2></b></td></tr>
        <!--<tr class="active"><td><b><h4><font color=#5e5e9d>-->
            

            <!--<form action="Studentpage1.php"><table class="table text-left">-->
<tr class="active"><td><b><h2><li class="default"><a href="link.php"><div class="form-group"> <div class="col-sm-offset-0"> <button type="submit" class="btn btn-active"><span class="glyphicon glyphicon-..."></span><b>&nbsp;View results</b></button> 
    </div> 
             </div></a></li></h2></b></td></tr>
    <!--<select name="acadyear" placeholder="Academic year"><option> Academic year</option>
             <option id="a">2010-2011</option>
            <option id="b">2011-2012</option>
            <option id="c">2012-2013</option>
            <option id="d">2013-2014</option>
            <option id="e">2014-2015</option>
            <option id="f">2015-2016</option>
            <option id="g">2016-2017</option>
            <option id="h">2017-2018</option>
            <option id="e">2018-2019</option>
            <option id="j">2019-2020</option>
            </select></td><td><li class=""><div class="form-group"> <div class="col-sm-offset-0"> <button type="submit" class="btn btn-active"><span class="glyphicon glyphicon-..."></span><b>&nbsp;<a href="link.php">&nbsp&nbsp&nbsp&nbsp;Go</a></b></button></div></div>
            
            <ul class="dropdown-menu">
<li class="active"><a>IT&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&raquo;</a>
                
<ul class="nav navbar-nav navbar-right">
<li class="active"><a>IT YEAR1</a>
    <ul class="dropdown-menu">
        <li class="active"><a>IT YEAR1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a>IT YEAR2</a>
     <ul class="dropdown-menu">
        <li class="active"><a>IT YEAR2&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a>IT YEAR3</a>
     <ul class="dropdown-menu">
        <li class="active"><a>IT YEAR3&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a>IT YEAR4</a>
     <ul class="dropdown-menu">
        <li class="active"><a>IT YEAR4&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li class=""><div class="form-group"> <div class="col-sm-offset-0"><button class="btn btn-active" disabled="disabled"><span class="glyphicon glyphicon-plus"></span><b>&nbsp;YEAR</b></button></a></li>
    </ul>
    </li>
    </ul>
    </li>
</ul>              
</li>
    </ul>
       </li>
           </ul>
                </li>

<li class="active"><a>IS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&raquo;</a>
                
                <ul class="nav navbar-nav navbar-right">
<li class="active"><a >IS YEAR1</a>
     <ul class="dropdown-menu">
        <li class="active"><a>IS YEAR1&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a>IS YEAR2</a>
     <ul class="dropdown-menu">
        <li class="active"><a >IS YEAR2&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a>IS YEAR3</a>
     <ul class="dropdown-menu">
        <li class="active"><a>IS YEAR3&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a>IS YEAR4</a>
     <ul class="dropdown-menu">
        <li class="active"><a>IS YEAR4&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li class=""><div class="form-group"> <div class="col-sm-offset-0"><button class="btn btn-active" disabled="disabled"><span class="glyphicon glyphicon-plus"></span><b>&nbsp;YEAR</b></button></div></div></li>
    </ul>
    </li>
    </ul>
    </li>
</ul>              
</li>
    </ul>
       </li>
           </ul>
                </li>
                
<li class="active"><a>CS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;&raquo;</a>
                
                <ul class="nav navbar-nav navbar-right">
<li class="active"><a>CS YEAR1</a>
     <ul class="dropdown-menu">
        <li class="active"><a>CS YEAR1&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a>CS YEAR2</a>
     <ul class="dropdown-menu">
        <li class="active"><a>CS YEAR2&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a>CS YEAR3</a>
     <ul class="dropdown-menu">
        <li class="active"><a>CS YEAR3&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
<li class="active"><a>CS YEAR4</a>
     <ul class="dropdown-menu">
        <li class="active"><a>CS YEAR4&nbsp&nbsp&nbsp&nbsp&nbsp;<span class="caret"></span></a></li>
    <li class="active"><a href="link.php">SEM1</a>
    <li class="active"><a href="link.php">SEM2</a>
    </ul>
<ul class="nav navbar-nav navbar-right">
    <li class=""><div class="form-group"> <div class="col-sm-offset-0"><button class="btn btn-active" disabled="disabled"><span class="glyphicon glyphicon-plus"></span><b>&nbsp;YEAR</b></button></div></div></li>
    </ul>
    </li>
    </ul>
    </li>
</ul>              
</li>
    </ul>
       </li>
           </ul>
                </li>
            
            </ul> 
    </li></td></tr></table></form></font>
</b>
         
 
            </h4></b></td></tr>-->
<tr class="active"><td><b><h3><li class="default"><a href="../makepdf/pdffile.php"><div class="form-group"> <div class="col-sm-offset-0"> <button type="submit" class="btn btn-active"><span class="glyphicon glyphicon-..."></span><b>&nbsp;Getting result Transcript</b></button> 
    </div> 
             </div></a></li></h3></b></td></tr>
         <!--<tr class="active"><td><b><h3><a href="Comments.php"><div class="form-group"> <div class="col-sm-offset-0"> <button type="submit" class="btn btn-active"><span class="glyphicon glyphicon-..."></span><b>&nbsp;Suggestion Box</b></button> 
    </div> 
    </div> </a></h3></b></td></tr>-->
            <tr class="active"><td><h3><!-- Button trigger modal --> <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">Submit Feedback about lecturers' performance </button> <!-- Modal --> <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"> <div class="modal-dialog" role="document"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <div align=center><h1 class="modal-title" id="myModalLabel" class="alert alert-success">Marking lecturers platform</h1></div> </div> <div class="modal-body">
      <!--<p align=center>
             Teacher will be marked here. 
             </p>-->
                        
             <div class="container-fluid">
          
        
            <form action="Studentpage1.php" method="post">
            <div align=center><table><tr>
                    <td>Depatment</td>
                    <td>&nbsp;
                 <select name="dept" placeholder="select Department">
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
		 /*$code=$row["MODULE_CODE"];
		 $mark=$row["Semester"];
		 $semark=$row["AcademicYear"];
        $des=$row["Description"];*/
	?>
     <!--<option> </option> -->     
    <option><?php echo $dept; ?></option>      
    <?php
        
    }
}
       ?>
            </select>
                    </td>
                </tr>
                <tr>
                    <td>Lecturer</td>
                    <td>&nbsp;
                 <select name="dept" placeholder="select Staff Name">
                    <option> </option> 
            
<?php
    
    mysql_connect("localhost","tuyijonathe","1234") or die(mysql_error());

        mysql_select_db("maindb");

$selectquery="select StaffName from staffs";

$result=mysql_query($selectquery);


$count=mysql_num_rows($result);


if($count>0){


	while($row=mysql_fetch_array($result)){
        $staffname=$row["StaffName"];
		 /*$code=$row["MODULE_CODE"];
		 $mark=$row["Semester"];
		 $semark=$row["AcademicYear"];
        $des=$row["Description"];*/
	?>
     <!--<option> </option> -->     
    <option><?php echo $staffname; ?></option>      
    <?php
        
    }
}
       ?>
            </select>
                    </td>
                </tr>
                
                </table>
            <br> <b>Submit feedback</b>
                </div>
            <br>
      
        
        <div class="table-responsive">
            
            <table class="table">
                
                <tr class=info>
                    <td class=danger>Department<br>Quality</td>
                    <td>Excvellent</td><td>Very Good</td><td>Good</td><td>Bad</td><td>Very Poor</td>
                </tr>
                <tr>
                    <td class=info>Lecture<br>Quality</td>
                    <td class=warning><input type="radio" name="col1"></td><td class=warning><input type="radio" name="col2"></td><td class=warning><input type="radio" name="col3"></td><td class=warning><input type="radio" name="col4"></td><td class=warning><input type="radio" name="col5"></td>
                </tr>
                <tr>
                    <td class=info>Consulation<br> Hours</td>
                    <td class=warning><input type="radio" name="col1"></td><td class=warning><input type="radio" name="col2"></td><td class=warning><input type="radio" name="col3"></td><td class=warning><input type="radio" name="col4"></td><td class=warning><input type="radio" name="col5"></td>
                </tr>                                
               
            </table></div>
        <center><br>
                    
                        
            <br><div class="modal-footer"> <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> <button type="submit" name="submitfdb" class="btn btn-primary">Submit</button> </div></center>  </form>
          
            
           
        
             </div> </div></div></div></td></tr>                    
</table>
    
    
    <div align=center>
    
    <?php

if(isset($_POST["submitfdb"]))
{
    

 echo "<h4 style='color:#4977f4'>Thank you. Your submission is successfully sent!";
    echo "<h4 style='color:'>
<script>alert('Thank you. Your submission is successfully sent!')</script>";


    }

?>              </div></ul>  </div></div>
        
        </div>
                      
             </div>
             
                                        
           </div></div>
            <br><br>
          <footer>
    <!--<div class="col-md-12">
          <div class="class1">
         <p align=center> 
         <font color=white>
        <a href="../index.html"><font color="white">Back to Homepage</a></font>
          </div>
          </div>-->
        <br><br>
        </footer>     

 <script   src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>    
    </body>
</html>
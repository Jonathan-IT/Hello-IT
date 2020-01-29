<!DOCTYPE html>
<html lang='en'>   
<head>
              
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='css/bootstrap.css' rel='stylesheet'>
<!--<link href="css/bootstrap.min.css" rel="stylesheet">--> 
<!--<link href="../css/bootstrap.min.css" rel="stylesheet">--> 
    <link href="../css/bootstrap-sandstone.min.css" rel="stylesheet">
<title>Automation of student services</title>
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
    
    t {background-color: #c6eaf2;
  text-align: right;
  font-size: 25px;
  border-radius: 4px;
        
}
    
     hr { border: solid #95e7fa; border-width: 5px 0 0; clear: both; margin: 22px 0 21px; height: 0; width: 90%;}   
</style>        
              
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
    
 <link rel="stylesheet" type="text/css" href="css/style1.css">
    
    
   </head>
      <body> 
    <header>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
                <div class="row">
        <div class="container-fluid"> 
  
       <div class="col-sm-12">
       <h1> <div class="bg-primary"><i><font color=#14d365>Sch<font color=#f7c24b>ool</font> <font color=#c5e052>of</font> <font color=#f07eec>ICT</font></i>&nbsp&nbsp&nbsp&nbsp&nbsp;<p align="center"><font color=white>Welcome to automation of student services</font</p>&nbsp&nbsp&nbsp;<font color=#27136a> <t id="demo"></t>

<script>
// Set the date we're counting down to
var countUpDate = new Date("Jan 1, 2018 16:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {
    
    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countUpDate + now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = hours + ": "
    + minutes + ": " + seconds + "";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script></font> </div></h1> </div>
            </div>
        </div>
     
  <div class="container-fluid"> <h4> 
    <nav class="navbar navbar-default"> 
        <div class="navbar-header">
      <div class="col-sm-12">   
 	  <div class="class2 ">     
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
<span class='sr-only'>Toggle navigation</span> 
<span class='icon-bar'></span>
<span class='icon-bar'></span>
<span class='icon-bar'></span>

    </button>

       </div>
        
          <div id="navbar"> 
          
        <ul class="nav navbar-nav collapse
navbar-collapse">
           <li class="default"><a href="index.html">Home</a></li>
           <!-- <li class=""><a href="pages/Service.html">Service</a></li>
            <li class="" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Technology<span class="caret"></span></a>
                
             
            
   <ul class="dropdown-menu">
    
<li class="active" ><a href="#">New Technology</a></li>
        
<li class="active" ><a href="#">Rwanda ICT</a></li> 
        
<li class="active" ><a href="#">E_Learning</a></li>
</ul>
    </li>
          
<li class="" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us<span class="caret"></span></a>
            
            
   <ul class="dropdown-menu">
  
       
<li class="active" ><a href="#">School &raquo;</a> <span class=""></span></a>
     
<ul class="nav navbar-nav navbar-right">

<li class="active"><a href="pages/Depts.html">ICT</a></li>

<li class="active"><a href="">ENGINEERING</a></li>

           </ul>
       </li>
       
<li class="active" ><a href="pages/Depts.html">Department &raquo;</a>
            
            <ul class="nav navbar-nav navbar-right">

<li class="active"><a href="pages/Depts.html">IT</a></li>

<li class="active"><a href="pages/Depts.html">IS</a></li>
                
<li class="active"><a href="">CS</a></li>

           </ul>
            </li>
       
<li class="active" ><a href="#">Academic</a></li>
<li class="active" ><a href="pages/staffgallery.php">Gallery</a></li>
</ul>
</li> -->
  <li class="" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration<span class="caret"></span></a>
            
            
   <ul class="dropdown-menu">
    
<li class="active" ><a href="pages/authentic.php">As new Student</a></li>
       
<!-- <li class="active"><a href="pages/Staffregistration.php">As new Staff</a></li> -->
      
<!-- <li class="active" ><a href="#">As new Adimin</a></li> -->
</ul>
      
    </li>
 <li class="" class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login<span class="caret"></span></a>
            
            
   <ul class="dropdown-menu">
    
<li class="active" ><a href="pages/Studentlogin1.php">Student login</a></li>
     
<li class="active" ><a href="pages/Stafflogin1.php">Staff login</a></li>
       
<li class="active" ><a href="pages/adimlogin1.php">Adimin login</a></li>
</ul>

</li> </ul>
   
<!--&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;
&nbsp&nbsp&nbsp&nbsp&nbsp;&nbsp&nbsp&nbsp&nbsp&nbsp;
<form action="" class="navbar-form navbar-right" role="search">
<div class="form-group" >   
<input type="search" name="search" placeholder="search key" class="form-control"/>
</div>
<div class="form-group"> <div class="col-sm-offset-0"> <button type="submit" class="btn btn-default" disabled="disabled"><span class="glyphicon glyphicon-search"></span>&nbsp;search</button> 
    </div> 
    </div>
      </form> -->
          </div>
        
    </nav>  </h4> 
    
            </div> </div> </div></div></nav>
 </header> <!--End header-->
          
   <br> 
          <br><br><br><br><br><br>
        
 <div class="row">         
<div class="container-fluid" id="slider"> 
    
    <div class="col-sm-4">
    <div class="alert alert-info"><h3>It is our pleasure to see you happy!</p></h3>
        
        <br>
                 
<p class="text-danger"><font color=#02111a>
A student or pupil is a learner or someone who attends an educational institution. 
<p>Service is any activity or benefit that one party can offer to another that is essentially intangible and does not result in the ownership of anything.</p>
<br>The Automation of student services is a management information system for education establishments to manage student data and easy communication between both staff lectures and students.</font></p>
 
<br>      
       <p></p><em>Hello all students?</em></p> 
        </div>  
      </div>
    
<div class="col-sm-5">
    
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      <li data-target="#carousel-example-generic" data-slide-to="3"></li>
      <!--<li data-target="#carousel-example-generic" data-slide-to="4"></li>
      <li data-target="#carousel-example-generic" data-slide-to="5"></li>-->
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/Coika2.jpg" class="img-responsive" alt="NUR KOICA">
      <!--<div class="carousel-caption">
       <h2>School of ICT</h2>
          <p>OK OK OK</p>
      </div>-->
    </div>
      <div class="item">
      <img src="images/SFS.png" class="img-responsive" alt="Student Feedback System">
      <!--<div class="carousel-caption">
       <h2>UR-School of ICT</h2>
          <p>OK OK OK</p>
      </div>-->
    </div>
    <div class="item">
      <img src="images/Sending%20sms-to-phone%20with%20php.png" class="img-responsive" alt="NUR KOICA">
      <!--<div class="carousel-caption">
          <h2>School of ICT</h2>
          <p>OK OK OK</p>
      </div>-->
    </div>
    <div class="item">
      <img src="images/Woww.PNG" class="img-responsive" alt="NUR KOICA">
      <!--<div class="carousel-caption">
          <h2>School of ICT</h2>
          <p>OK OK OK</p>
      </div>-->
    </div>
      <!--<div class="item">
      <img src="images/Take%20a%20break.jpg" class="img-responsive" alt="Code now">
      <!--<div class="carousel-caption">
          <h2>Code now</h2>
          <p>OK OK OK</p>
      </div>
    </div>
      <div class="item">
      <img src="images/umbrella.png" class="img-responsive" alt="umbrell">
      <div class="carousel-caption">
          <h2>An umbrella</h2>
          <p>OK OK OK</p>
      </div>
    </div>-->
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    <!--<br><font color=black>
    <h2>This page will be <p>completed very soon!</p></h2>
        <br>
        <p class="text-danger">
        We are sorry for this short incovenience.</p>
        <p><font color=#02111a>Big Thanks.</font></p>
        <br> 
         <p>IT Students from School of ICT in IT Department</p><br> 
       <p>IT Students from ICT</p>
        <br>
        <em>rendered as italicized text</em></font>-->
 </div>
    
    <div class="col-sm-3">
        <div class="alert alert-success"><h4><u>OUR CONCERN</u></h4>
    <p class="text-active">
        Automation of student services is often designed to provide access to information from diverse sources in a uniform manner. 
<p>This site involves the development of a specialized portal designed to be used by undergraduates and graduates students to undertake clearance processes from the different departments during and after their studies in the university.</p></p>
        <h4><em>Most welcome!</em></h4>
   <em><b>Feel free and enjoy your stay. </b> </em> 
        <em><b> <p><p align=right><a href="pages/PHPArrayStp1.php"> Welcome to SMMS</a></b> <?php
date_default_timezone_set("Africa/Kigali");
echo "The time is " . date("h:i:sa");
?></em>
           
            
        </div></div>
  
     </div></div>
          
   <!- To make a footer-->       
          
	<footer>
        			
<div class="row">
    <div class="container-fluid">
		<div class="col-sm-12">
		<div class="class2">
        <br>
   <p align="center"> <a href="index.html">Home</a>
             &nbsp&nbsp&nbsp&nbsp&nbsp;
    <a href="pages/Depts.html">Departments</a>
              &nbsp&nbsp&nbsp&nbsp&nbsp;
    <a href="pages/Creators.html">Creators</a>
             &nbsp&nbsp&nbsp&nbsp&nbsp;
    <a href="pages/contacts.php" alt="Contacts">Contact Us</a>
            </p>
            
<p><center><h4> Get in touch with</h4>
    <a href='images/ur-African.png'><img src= "images/Urlogo%20for%20registers.jpg" height="80" width="280" alt="Urlogo for registers">Univesity of Rwanda</a></center></p>    
            <center><hr/></center>  
          <br>
		<p align="center">© 2016-<?php echo date("Y");?> IT student designers Huye campus, Designed to get quick service.</p>    
 </center>
			
          </div></div></div></div>
	
       
	</footer>

          
 <script   src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    
    </body>
</html>
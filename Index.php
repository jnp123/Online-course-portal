<!doctype html>
<html>
<head>
    <title>Index Page Having Common Structure</title>

    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
 
 <link rel="stylesheet" href="CSS/Basic.css">
<style>
#menu{
    background-color: rgb(200, 200, 200);
    border: 2px solid #5D0580;
    
}
#menu ul li{
    float: left;
    font-size: 1.8em;
    margin-top:-6px;
    font-weight:bold;
    font-family: bitter,georgia,times,"Arabic",serif;
    
}
header, footer {
    padding: 1em;
    color: white;
    background-color: black;
    clear: left;
    text-align: center;
}

#menu ul{
    list-style: none;
    margin-bottom: 0px;
    
    height: 30px;
    border-bottom: 1px solid #000;
}

#menu ul li a{
    
    display: block;
    color: ##00;
    text-decoration: none;
    padding: 0 20px;
    line-height: 30px;
}

#menu ul li a:hover,#menu ul li a.selected
{
    background: url("images/pattern.png");
    background-color: #5D0580;
    color: #ffff; 
}
    
    #social{
   
    
}

#social ul li{
    float: left;
    margin-left: 10px;
    margin-top: 15px;
    list-style: none;
}
section.links h3{
    background: rgba(0, 0, 0, 0) url("images/pattern.png") repeat scroll 0 0;
    color: white;
    font-family: Bitter,Georgia,Times,"Times New Roman",serif;
    font-size: 1.9em;
    font-weight: 100;
    line-height: 25px;
   display: block;

}
section.links{
height: 300px;
}
section.links ul{
    margin-left: -30px;
   
}
section.links li{
    list-style: none;
    padding-top: 10px;
    
}
section.links li a{
    background-color: #fbae2c;
    display: block;
    list-style: none;
    font-size: 1.1em;
    line-height: 35px;
    text-decoration: none;
    color: white;
	
    }
section.links li a:hover{
    background: url("images/pattern.png");
    display: block;
    list-style: none;
    font-size: 1.3em;
    font-weight: bold;
    line-height: 30px;
    text-decoration: none;
    padding-left: 25px;
    color: white;
   border-bottom-left-radius: 15px;
   border-bottom-right-radius: 15px;
   border-top-left-radius: 15px;
   border-top-right-radius: 15px;
   background-color:#5D0580;/*rgba(168,88,163,1);*/
    }
   

h2,legend{
    color: White;
    font-size: 1.6em;  
background: url("images/pattern.png");
font-family: Bitter,Georgia,Times,"Times New Roman",serif;
text-align: center;
background-color:#5D0580;

}

#request{
    color: rgb(251, 184, 44);
    font-family: Bitter,Georgia,"Times New Roman",Times,serif;
    font-size: 3.0em;
    line-height: 1.9em;
    font-weight: bold;

    
}
.req{
     font-size: 1.2em;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
}


</style>
    
</head>

<body>
    <div id="wrap">
	
	<div id ="container">
	<marquee direction = "right"></marquee>
	<font color="red"><marquee style="background:yellow" direction="right" behavior="alternate"><marquee  width="200"><h1>Online Course Portal<h1></marquee></marquee></font>
	</div>
        <div id="header">
		
            <div id="logo">
	
	    </div>
        </div>
		
        <div id="menu">
            <ul>
<li><a href="Index.php">Home</a></li>
<li><a href="Index.php?PageName=About" >About Us </a></li>
<li><a href="Index.php?PageName=Contact">Contact Us</a></li>
<li><a href="Index.php?PageName=Signin">SignIn</a></li>
<li><a href="Index.php?PageName=Register">Register</a></li>
<li><a href="Index.php?PageName=comingsoon">Coming Soon</a></li>
<li><a href="Index.php?PageName=form1"></a></li>
            </ul>
 <div class="clear"></div>
 </div>
        <!-- Main Area Content Area -->
<div id="main">
<div id="content">
<?php
$PagesDirectory='Pages Folder';
if(!empty($_GET['PageName']))
{

$PagesFolder=scandir($PagesDirectory,0);
unset($PagesFolder[0],$PagesFolder[1]);
$PageName=$_GET['PageName'];
if(in_array($PageName.'.inc.php',$PagesFolder)){
include($PagesDirectory.'/'.$PageName.'.inc.php');    
}else{
    echo '<h1 id="request">You are Lost..</h1>';
echo '<img src="Images/Lost.gif" width="680" height="430">';
    
    echo '<h2>Sorry Page Not Found</h2>';
}

}
else{
    include($PagesDirectory.'/Home.inc.php');
}
?>
 	
	  <div class="clear"></div>	  	 

       </div>
	    
         <!-- Side Area -->
        <div id="side">
        <section class="links">
	    <h4 style="background-color"="yellow">Latest Available Courses</h4>
	    <ul>
		<li><a href="https://www.udemy.com/courses/development/">Development</a></li>
		<li><a href="https://business.udemy.com/?ref=ufb_header">Bussiness</a></li>
		<li><a href="https://www.udemy.com/courses/it-and-software/"> I.T and Software</a></li>
		<li><a href="https://www.udemy.com/courses/design/">Design</a></li>
		<li><a href="https://www.udemy.com/courses/marketing/analytics-and-automation/all-courses/">Marketing & Hr </a></li>
		
	    </ul>
	     </section>
	   <h2>Trending Topics</h2>
	    <section class="sideimage">
	    <img src="images/Machine-Learning.png" width="245" height="120" alt=""/>
	    
	    <h4 style="background: url(images/pattern.png);">Machine Learning</h4>
	   <p>Machine learning is the science of getting computers to act without being explicitly programmed. In the past decade, machine learning has given us self-driving cars, practical speech recognition, effective web search, and a vastly improved understanding of the human genome. Machine learning is so pervasive today that you probably use it dozens of times a day without knowing it.<a href="#">More</a>
	   </p></section>
	    <br>
	   <div class="clear"></div>
	  
          <section class="sideimage">
	    <img src="images/Ai.jpg" width="245" height="120" alt=""/>
            <h4 style="background: url(images/pattern.png);">Artificial Intelligence</h4>
	   <p>Machine learning is the science of getting computers to act without being explicitly programmed. In the past decade, machine learning has given us self-driving cars, practical speech recognition, effective web search, and a vastly improved understanding of the human genome. Machine learning is so pervasive today that you probably use it dozens of times a day without knowing it.<a href="#">More</a>
	   </p></section>
	    <br>
	   <div class="clear"></div>
	  
           <section class="sideimage">
	    <img src="images/cloudcomputing.jpg" width="245" height="120" alt=""/>
	    <h4 style="background: url(images/pattern.png);">cloud Computing</h4>
	   <p>Cloud computing is an information technology (IT) paradigm, a model for enabling ubiquitous access to shared pools of configurable resources (such as computer networks, servers, storage, applications and services),which can be rapidly provisioned with minimal management effort, often over the Internet. Cloud computing allows users and enterprises with various computing capabilities to store and process data either in a privately-owned cloud, or on a third-party server located in a data center, thus making data-accessing mechanisms more efficient and reliable </p>
	 </section>
	 
	   </p><br><br><br><br><br></section>
	   <div class="clear"></div>
	   <br>
	    </div>
   
            <div class="clear"></div>
        </div>
        <!-- Footer Area -->
        <div id="footer">
        <hr>
        <p>Theme By | Jagannadh Patro |&copy;2014-2018 All right reserved.
	<br><a style="color: white; text-decoration: none; cursor: pointer; font-weight:bold;" href="www.google.co.in" target="_blank">Build reponsive website with html5 and css from scratch.</a>
	<br><a style="color: white; text-decoration: none; cursor: pointer; font-weight:bold;" href="www.google.co.in" target="_blank">Javascript complete and comprehensive for beginners. </a> <br>
	This site is only used for Study purpose Onlinecorse.com have all the rights. No one is allow to distributecopies other then <br>
        &trade; onlinecourse.com &trade; Udemy ; &trade; Skillshare ; &trade; StackSkills
        </p>
        <hr>
	   
	</div>
        
        
       <div style="height: 10px; background: rgb(274, 280, 270);"></div> 
    </div>
<script src="Script/Myscript.js"></script>
</body>
</html>
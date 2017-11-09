<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>


<h2>Top Trending Courses</h2>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/aa.jpg" style="width:100%">
  <div class="text">Artificial Intelligence</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/machine.jpg" style="width:100%">
  <div class="text">Machine Learning</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/cloud.jpg" style="width:100%">
  <div class="text">Cloud Computing</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

 







	  <div id="content">
		<div id="latest"> <p>Latest Entries</p></div>



           <h1 class="contenthead"><u>Top 10 Best Online courses in 2017</u></h1>
          	<div class="contentbigdiv">
		    <img style="float: right;" src="newimages/01.jpg" height ="200" width="200" alt=""/>
		<p style="font-size:1.2em;">Back in the day, if you wanted to learn something new, you'd go to school for it. Today, not only are educational institutions offering their full programs and individual courses online, but experts in almost every field imaginable are creating their own programs and courses online to share their knowledge with their worldwide audiences.

                </p>
		</div>
		<div class="continue" ><a href="http://indiatoday.intoday.in/education/story/free-education/1/850896.html" style="color: #B0B7CB; text-decoration: none" >continue reading>></a></div>
	    <div class="clear"></div> <hr>
	 
          


          <h1 class="contenthead">Microsoft Azure</h1>
           
          	<div class="contentbigdiv">
		    <img style="float: right;" src="newimages/02.jpg" height="200" width="200" alt=""/>
		<p style="font-size:1.2em;">Azure is a comprehensive set of cloud services that developers and IT professionals use to build, deploy and manage applications through our global network of datacenters. Integrated tools, DevOps and a marketplace support you in efficiently building anything from simple mobile apps to internet-scale solutions.</p>
		</div>
		<div class="continue" ><a href="https://azure.microsoft.com/en-in/" style="color: #B0B7CB; text-decoration: none" >continue reading>></a></div>
	  <div class="clear"></div> <hr>
	   
         
        
          <h1 class="contenthead">Mastering Data Analysis in Excel</h1>
          
          	<div class="contentbigdiv">
		    <img style="float: right;" src="newimages/03.jpg" height="200" width="200" alt=""/>
		
          <p style="font-size:1.2em;">This course will prepare you to design and implement realistic predictive models based on data. In the Final Project (module 6) you will assume the role of a business data analyst for a bank, and develop two different predictive models to determine which applicants for credit cards should be accepted and which rejected. Your first model will focus on minimizing default risk, and your second on maximizing bank profits. </p>
		</div>
		<div class="continue" ><a href="https://www.coursera.org/learn/analytics-excel" style="color: #B0B7CB; text-decoration: none" >continue reading>></a></div>
	  <div class="clear"></div> <hr>
	  


          

         <h1 class="contenthead">Programming for Everybody (Getting Started with Python)</h1>
           
          	<div class="contentbigdiv">
		    <img style="float: right;" src="newimages/04.jpg" height="200" width="200" alt=""/>
		<p style="font-size:1.2em">This course aims to teach everyone the basics of programming computers using Python. We cover the basics of how one constructs a program from a series of simple instructions in Python.  The course has no pre requisites and avoids all but the simplest mathematics. Anyone with moderate computer experience should be able to master the materials in this course. This course will cover Chapters 1-5 of the textbook Python for Everybody.  Once a student completes this course, they will be ready to take more advanced programming courses</p></div>
		<div class="continue" ><a href="https://www.python.org/about/gettingstarted/" style="color: #B0B7CB; text-decoration: none" >continue reading>></a></div>
	  <div class="clear"></div> <hr>
	  
	 



          <h1 class="contenthead"> Machine Learning</h1>
           
          	<div class="contentbigdiv">
		    <img style="display: block; margin: 0 auto;" src="newimages/05.jpg" height="200" width ="200" alt=""/>
                 <p style="font-size:1.2em;"> Machine learning is the science of getting computers to act without being explicitly programmed. In the past decade, machine learning has given us self-driving cars, practical speech recognition, effective web search, and a vastly improved understanding of the human genome. Machine learning is so pervasive today that you probably use it dozens of times a day without knowing it. Many researchers also think it is the best way to make progress towards human-level AI.</p>
		</div>
		<div class="continue" ><a href="https://www.python.org/about/gettingstarted/" style="color: #B0B7CB; text-decoration: none" >continue reading>></a></div>
	  <div class="clear"></div> <hr>
	 




         <h1 class="contenthead">R Programming</h1>

          	<div class="contentbigdiv">
		    <img style="display: block; margin: 0 auto;" src="newimages/06.jpg" alt=""/>
		<p style="font-size:1.2em;">R is an open source programming language and software environment for statistical computing and graphics that is supported by the R Foundation for Statistical Computing.The R language is widely used among statisticians and data miners for developing statistical software and data analysis. Polls, surveys of data miners, and studies of scholarly literature databases show that R's popularity has increased substantially in recent years.</p>
		</div>
		<div class="continue" ><a href="https://www.coursera.org/learn/r-programming" style="color: #B0B7CB; text-decoration: none" >continue reading>></a></div>
	  <div class="clear"></div> <hr>
	  



           <h1 class="contenthead"> Programming Mobile Applications for Android</h1>

          	<div class="contentbigdiv">
		    <img style="display: block; margin: 0 auto;" src="newimages/07.jpg" alt=""/>
		<p style="font-size:1.2em;">Android is a mobile operating system developed by Google, based on the Linux kernel and designed primarily for touchscreen mobile devices such as smartphones and tablets. Android's user interface is mainly based on direct manipulation, using touch gestures that loosely correspond to real-world actions, such as swiping, tapping and pinching, to manipulate on-screen objects, along with a virtual keyboard for text input</p>
		</div>
		<div class="continue" ><a href="https://developer.android.com/training/index.html" style="color: #B0B7CB; text-decoration: none" >continue reading>></a></div>
	  <div class="clear"></div> <hr>



        <h1 class="contenthead">Introduction to Big Data </h1>

          	<div class="contentbigdiv">
		    <img style="display: block; margin: 0 auto;" src="newimages/08.jpg" alt=""/>
		<p style="font-size:1.2em;">Big data is a term for data sets that are so large or complex that traditional data processing application software is inadequate to deal with them. Big data challenges include capturing data, data storage, data analysis, search, sharing, transfer, visualization, querying, updating and information privacy</p>
		</div>
		<div class="continue" ><a href="https://www.coursera.org/learn/big-data-introduction" style="color: #B0B7CB; text-decoration: none" >continue reading>></a></div>
	  <div class="clear"></div> <hr>





 <h1 class="contenthead">Introduction to Financial Accounting </h1>

          	<div class="contentbigdiv">
		    <img style="display: block; margin: 0 auto;" src="newimages/09.jpg" alt=""/>
		<p style="font-size:1.2em;">Financial accounting is a specialized branch of accounting that keeps track of a company's financial transactions. Using standardized guidelines, the transactions are recorded, summarized, and presented in a financial report or financial statement such as an income statement or a balance sheet.</p>
		</div>
		<div class="continue" ><a href="https://www.coursera.org/learn/wharton-accounting" style="color: #B0B7CB; text-decoration: none" >continue reading>></a></div>
	  <div class="clear"></div> <hr>

          	
	 <div class="clear"></div>
 	  
            <h1 class="contenthead">Follow&ndash;Us</h1>
	    <div id="social">
		<ul>
<li style="margin-left: -20px;"><a href="https://www.facebook.com/jazeb.akram" target="_blank"><img src="images/fb.png" width="40px" height="40px;" alt="facebook"/></a></li>
<li><a href="https://twitter.com/jazebakram"target="_blank"><img src="images/tweet.png" width="40px" height="40px;" alt="tweeter"/></a></li>
<li><a href="https://plus.google.com/+jazebakram/posts"target="_blank"><img src="images/google.png" width="40px" height="40px;" alt="G+"/></a></li>
<li><a href="https://www.youtube.com/channel/UChLQHgrd2LU1lpn_Q_uXAWA"target="_blank"><img src="images/youtube.png" width="40px" height="40px;" alt="youtube"/></a></li>
 <li><a href="https://www.linkedin.com/in/jazebakram"target="_blank"><img src="images/link.png" width="40px" height="40px;" alt="linkdIn"/></a></li>
		</ul>
	    </div>
	    
	    	  <div class="clear"></div>
		</div>
	  <div class="clear"></div>
	 
</body>
</html>	  
<!Doctype html>
<html>
    <head>
        <title>Zeinab-task1 </title>
	    <meta charset="utf-8">
        <style>
	     div {
		 width:400px;
		 padding:10px;
		 Background:#DDD;
		 border:2px solid #0c46f4;
		 margin:10px ;
		 }
		 span{

		 padding:20px;
		 Background:#00ffee;
		 margin:20px;
		 }
  
	    </style>
    </head>
    <body>
	    <!--*************************Part1********************************-->
        <div>
             <h1 id="Frist Div">Frist Div </h1>
             <p>Image without title and link without target</p>
	         <p>Your Image & Link </p>
	         <a href="www.Facebook.com">Facebook</a>
	         <br>
		     <img src="images/2222.jpg"width="200"height="200">
	         <p> username</p>
	         <input type="username">
	         <p>Password</p>
	         <input type="Password">
	         <br> 
			 <a href="#Second">Link go to Second div</a>
        </div>
	    <br>  
	    <br>
		<!--*************************Part2********************************-->
	    <div>
	         <h1 id="Second">Second Div </h1>
	         <p>Image with title and link with target</p>
	         <p>Your Image & Link </p>
	         <a href="www.Facebook.com" target="_blank">Facebook</a>
	         <br>
			 <img src="images/2222.jpg"width="200"height="200"title="Programmer">
	         <p> username</p>
	         <input type="username"value="username">
	         <p>Password</p>
	         <input type="Password"value="Password">
	         <br>
			 <a href="#Frist Div">Link go to Frist div</a>
	    </div>
		<br>
		<br>
	
	    <!--*************************Part3********************************-->
	
	    <span>My Name is zeinab </span> 
		<span style="background:#d2691e">I am a Student at FCI</span> 
		<span> I am programmer</span>
		<br>
	    <br>
		<br>
	
	
	    <!--*************************Part4********************************-->
		
	    <div style="width:1500px;padding:10px;Background:#673dff;border:1px solid #CCC;margin:10px0">
	    
		     <p>My Skills are:</P>
	         <ol>
	             <li style="width:99%;padding:10px;Background:#ccc;border:1px solid #ccc;margin:10px 0px">html & html5</li>
	             <li style="width:99%;padding:10px;Background:#ccc;border:1px solid #CCC;margin:10px 0px">css & css3</li>
	             <li style="width:99%;padding:10px;Background:#ccc;border:1px solid #CCC;margin:10px 0px">javascript
	             <ul>
	                 <li style="width:98%;padding:10px;Background:#ffea00;border:1px solid #CCC;margin:10px 0px">jquery</li>
				     <li style="width:98%;padding:10px;Background:#ffea00;border:1px solid #CCC;margin:10px 0px">bom</li>
	                 <li style="width:98%;padding:10px;Background:#ffea00;border:1px solid #CCC;margin:10px 0px">dom</li>
	
	             </ul>
	             </li>
	             <li style="width:99%;padding:10px;Background:#ccc;border:1px solid #CCC;margin:10px 0px">Bootstrap </li>
	
	
	         </ol>
			 <?php
                for ($x = 0; $x <= 10; $x++) 
				{
                  echo "The number is: $x <br>";
                }
             ?>
		
        </div>
    </body>
<html>
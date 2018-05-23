<!doctype html>
<!--------------------------------Bootstrap  Main variant ------------------------------------------>
  <html lang="en-US">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html">
      <meta name="description" content="QR Codes, qr codes on-line," />
      <meta name="keywords" content="QR Codes on-line">
      <title>Weather</title>
  
      <!--Favicon-->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <link rel="stylesheet" type="text/css" media="all" href="css/myWeathers.css">
      <script src="weather_core.js"></script><!--  Core Random JS-->
	  
	  
	
	  
	  <meta name="viewport" content="width=device-width" />

     </head>

     <body>

       <div id="headX" class="jumbotron text-center gradient alert-info" style =' background-color:lavender ;'> <!--#2ba6cb;-->
         <h1 id="h1Text"> <span id="textChange"> Weather on-line</span> <span class="glyphicon glyphicon-tree-conifer"><!--</span> <img src="http://78.media.tumblr.com/tumblr_m2hq5tt3ma1qav3uso1_400.gif" style="width:3%"/>--> </h1> 
		   
           <p class="header_p">All cities weather processor  <!--generates random lists, ramdomizes integers, etc--> <span class="glyphicon glyphicon-duplicate"></span>
           </p>
		   <!--<p class="language"><a href="/eng">ENG</a></p>-->
		   
	   </div>



       
         <div class="wrapper grey">
    	   <div class="container">
		      <div class="col-sm-4 col-xs-12" style="background-color:lavender;">
			  
			  
             
		           <!--------Form Start------>	
                   <form action="" id="myFormZ" method="post">
                      <div class="form-group">
                          <label for="city">Your city: <span class="glyphicon glyphicon-transfer"></span></label>
                          <input type="text" class="form-control" id="citytext" name="qr" list="character">
						  <datalist id="character">
						      <option value="Kyiv"></option>
                              <option value="Odessa"></option>
							  <option value="London"></option>
							  <option value="Miami"></option>
						  </datalist>
                     </div>
					<!--
                    <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd">
                    </div>
                    <div class="checkbox">
                          <label><input type="checkbox"> Remember me</label>
                    </div>
					-->
                   <button type="button" class="btn btn-default" id="submit">Submit</button>
				   <button type="button" class="btn btn-default" id="clear">Clear</button>
                   </form>				   
                   <!---------END Form -------->				   
				  
				   
				 </div> <!--END <div class="col-sm-4" style="background-color:lavender;">-->
				
				 
				  <!--<div class="col-sm-1 col-xs-1" "></div>-->
				 
				 
				 
				 
				 <!--------------------------- START Error window---------------------------->
				<div class="row">
				<div class="col-sm-6 col-xs-12" id="qrResult">
				<center>
				
                
				</center></div> <!-- END <div class="col-sm-4 col-xs-12" id="qrResult">-->
				</div>
                <!------------------------- END Error window------------------------------>
				 
				 
				 
				 
				 
				 
                <!--------------------------- START GENERATING Weather DIVS---------------------------->
				<br>
				<center>
				
				<hr class="alert-info" style="width:98%;height:8px;">
				<h3 class="alert-info"> Weather in <span id='cityName'>Kyiv</span> for 6 days</h3>
				<div class="row" id="weatherResult"> <!-- This div accept the JS html result-->
				       
				
				</div> <!-- END class="row weatherResult">-->
				</center>
                <!------------------------- SEND  GENERATING Weather DIVS------------------------------>
                

				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
				 
                                    
     
    			</div><!-- /.container -->	
				  		
    		</div><!-- /.wrapper -->

                


    	
    	
		
		
		
		  <!-----Footer ---->
		        
				<div class="footer navbar-fixed-bottom"> <!--navbar-fixed-bottom  fixxes bootom problem-->
				    Contact: <strong>dimmm931@gmail.com</strong><br>
					<?php  echo date("Y"); ?>
				</div>
		<!--END Footer ---->  
		
		
		
		
		<!-- ##### -- Advertise -- #### -->
		<!--
		   <div class="ads ">
		        <a target="_blank" href="https://www.facebook.com/events/165143454205556/" id="link">
				    <img src="images/ads/sub_od.jpg" alt="Submerged"/>  
				</a>	
			</div>
			-->
		<!-- ##### -- END Advertise -- #### -->
		
		
		
		
    
    </body>
</html>





<?php

// Record (with CLASS) all the  input  to  txt;  //;
      include("Classes/RecordTxt.php");
      RecordTxt::RecordAnyInput(array(/*$user*/), 'recordText/weather_log.txt');// Record  to  text;
//End  Record;
?>

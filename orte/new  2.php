
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1" />

<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
<script src="js/Main.js" type="text/javascript"> </script> 
<link rel="stylesheet" href="css/style.css" type="text/css" >

<title>Pflegeheim</title>
</head>Erfolgreich verbunden<body>


	<div data-role="page" id="home" class="bg">

	<div data-role="header" style="overflow:hidden;" class="header " >
		 
		<img src="image/icon.png" style="float: left "></img>
		 <h1>App- Name</h1> 
		 <a href="#myPanel"  class=" ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-user ui-btn-right ui-btn-a ui-btn-icon-notext">Actions...</a>
			
	</div><div data-role="panel" id="myPanel" data-position="right" data-display="overlay">  
	<ul data-role="listview" data-inset="true" style="min-width:210px;">				
		<li><a href="#login" data-rel="popup" data-position-to="window" data-transition="pop" >Login</a>
				<div data-role="popup" id="login" data-overlay-theme="a" data-dismissible="false" style="max-width:400px;">
					<div role="main" class="ui-content">
						<form>
						First name: <input type="text" name="firstname"><br>
						Last name: <input type="text" name="lastname">
						</form> 
						<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a" data-rel="back">Cancel</a>
						<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a" data-rel="back" data-transition="flow">Submit</a>
					</div>
				</div>
		</li>
						<li><a href="#regist"  data-transition="flip" class="show-page-loading-msg" data-theme="a" data-textonly="false" data-textvisible="true"  data-inline="true">Registrieren</a></li>

						<li><a href="#pwverg" data-rel="popup" data-position-to="window" data-transition="pop">Passwort vergessen</a>
				<div data-role="popup" id="pwverg" data-overlay-theme="a" data-dismissible="false" style="max-width:400px;">
					
		
				<div role="main" class="ui-content">
				<p> Passwort zurücksetzen </p>
						<form>
						Email: <input type="text" name="firstname">
						</form> 
						<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a" data-rel="back" data-transition="flow">Submit</a>
					</div>
				</div>	
						
		</li>
	</ul>
			
 </div> 

	<div data-role="main"class="loaction" >
<form>
  <input id="pre-rendered-filterable" data-type="search">
</form>
<div
  class="ui-controlgroup ui-controlgroup-vertical ui-corner-all"
  data-role="controlgroup"
  data-filter="true"
  data-input="#pre-rendered-filterable"
  data-filter-reveal="true"
  data-enhanced="true">
  <div class="ui-controlgroup-controls">
    <a href="index.html" class="ui-screen-hidden" data-role="button"></a>
    <a href="settings.html" class="ui-screen-hidden" data-role="button">Settings</a>
    <a href="advanced.html" class="ui-screen-hidden" data-role="button">Advanced</a>
   
	 <a href='#Buchen' class='ui-screen-hidden' data-role='button'>(74722) Buchen</a>	
	
  </div>
</div>

		</div>
	</div>
		  
<div data-role="page" id="regist">

	<div data-role="header" style="overflow:hidden;" class="header " >
		 
		<img src="image/icon.png" style="float: left "></img>
		 <h1>App- Name</h1> 
		
		<div class="bback">
		<a href="#home" ""  class=" ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn ui-btn-a ui-btn-icon-notext" data-transition="flip">Actions...</a>
		 <a href="#myPanel"   class=" ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-back ui-btn ui-btn-a ui-btn-icon-notext" data-transition="flip">Actions...</a>
		</div>	
	</div><div data-role="panel" id="myPanel" data-position="right" data-display="overlay">  
	<ul data-role="listview" data-inset="true" style="min-width:210px;">				
		<li><a href="#login" data-rel="popup" data-position-to="window" data-transition="pop" >Login</a>
				<div data-role="popup" id="login" data-overlay-theme="a" data-dismissible="false" style="max-width:400px;">
					<div role="main" class="ui-content">
						<form>
						First name: <input type="text" name="firstname"><br>
						Last name: <input type="text" name="lastname">
						</form> 
						<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a" data-rel="back">Cancel</a>
						<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a" data-rel="back" data-transition="flow">Submit</a>
					</div>
				</div>
		</li>
						<li><a href="#regist"  data-transition="flip" class="show-page-loading-msg" data-theme="a" data-textonly="false" data-textvisible="true"  data-inline="true">Registrieren</a></li>

						<li><a href="#pwverg" data-rel="popup" data-position-to="window" data-transition="pop">Passwort vergessen</a>
				<div data-role="popup" id="pwverg" data-overlay-theme="a" data-dismissible="false" style="max-width:400px;">
					
		
				<div role="main" class="ui-content">
				<p> Passwort zurücksetzen </p>
						<form>
						Email: <input type="text" name="firstname">
						</form> 
						<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a" data-rel="back" data-transition="flow">Submit</a>
					</div>
				</div>	
						
		</li>
	</ul>
			
 </div> 

	<div data-role="main" >
	   <form method="post" action=""  > 
First name: <input type="text" name="firstname"><br>
Last name: <input type="text" name="lastname">
		</form>
	</div>
		  


</div>
		

	
 

</body>

</html>
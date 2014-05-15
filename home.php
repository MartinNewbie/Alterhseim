<!-- Home --> 
<div data-role="page" id="home" class="bg">

	<div data-role="header" style="overflow:hidden;" class="header" >
			<img src="image/icon.png" style="float: left "></img>
			 <h1>App- Name</h1>  
			 <a href="#myPanel2"   class="app ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-user ui-btn-right ui-btn-a ui-btn-icon-notext">Actions...</a>	 
	</div>
 	<div data-role="header" style="overflow:hidden;" class="header " >
		<img src="image/header.png" class="img" style="float: left  "></img>
	</div>
	
	<div data-role="panel" data-display="overlay" data-position="right" data-theme="a" id="myPanel2">  
			<ul data-role="listview" data-inset="true" style="min-width:210px;">				
				<li> 
					<a href="#login" data-rel="popup" data-position-to="window" data-transition="pop" >Login</a>
					<div data-role="popup" id="login" data-overlay-theme="a" data-theme="a" data-dismissible="false" style="max-width:400px;">
						<div data-role="header" data-theme="a">
						<h1>Login</h1>
						</div>
						<div role="main" class="ui-content">
							<h3 class="ui-title">Are you sure you want to delete this page?</h3>
						<p>This action cannot be undone.</p>
							<a href="#"  data-rel="back">Cancel</a>
							<a href="#" data-rel="back" data-transition="flow">Delete</a>
						</div>
					</div>
				</li>
				<li><a href="#regist">Registrieren</a></li>
				<li> 
					<a href="#pwvergessen" data-rel="popup" data-position-to="window" data-transition="pop" >Passwort vergessen</a>
					<div data-role="popup" id="pwvergessen" data-overlay-theme="a" data-theme="a" data-dismissible="false" style="max-width:400px;">
						<div data-role="header" data-theme="a">
						<h1>Delete Page?</h1>
						</div>
						<div role="main" class="ui-content">
							<h3 class="ui-title">Are you sure you want to delete this page?</h3>
						<p>This action cannot be undone.</p>
							<a href="#"  data-rel="back">Cancel</a>
							<a href="#"  data-rel="back" data-transition="flow">Delete</a>
						</div>
					</div>
				</li>
			</ul>	
	</div> 
	 
	<div data-role="main"   >
		<div class="location">
		<div class="gps" id="navigate"> 
			<button class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-btn-icon-notext ui-icon-location">location</button> </div>
		<div class="search"><form>
		  <input id="pre-rendered-filterable" data-type="search">
		</form></div></div>
		<a href="phpinfo.php"> PHP Info </a> 
		</div>
			<div id="filtertab"class="ui-controlgroup ui-controlgroup-vertical ui-corner-all"   data-role="controlgroup"   data-filter="true"   data-input="#pre-rendered-filterable"   data-filter-reveal="true"   data-enhanced="true">
			  <div class="ui-controlgroup-controls">
				<a href="index.html" class="ui-screen-hidden" data-role="button"></a>
				<a href="settings.html" class="ui-screen-hidden" data-role="button">Settings</a>
				<a href="advanced.html" class="ui-screen-hidden" data-role="button">Advanced</a>
				
				<a href="#Buchen" class="ui-screen-hidden" data-role="button">Buchen 74722 </a>
				<?php  
			/**	$ergebnis = mysql_query( "SELECT * FROM postleitzahl");
					while($unter=mysql_fetch_array($ergebnis)) //nun wird das Ergebnis welches in $z steht in ein Array $unter umgewandelt und so lange durchlaufen wie Zeilen die Abfrage ausgibt. 
					{ 
					echo " <a href='#".$unter['Name']."' class='ui-screen-hidden' data-role='button'>(".$unter['PLZ'].") ".$unter['Name']."</a>" ; //da $unter nun ein Array ist, muss es dementsprechend mit Feldbezeichungen ausgegeben werden 
					} **/
				?>
				     
			  </div>
			</div>  
	 </div>
</div>
		  <!-- Home Ende --> 
		  
	
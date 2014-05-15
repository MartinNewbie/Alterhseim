<!-- Regist --> 
<div data-role="page" id="regist" class="bg">
 	<div data-role="header" style="overflow:hidden;" class="header " >
		<img src="image/icon.png" style="float: left "></img>
		 <h1>App- Name</h1> 
		 <div class="bback">
		 <a href="#home" class="app ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-plus ui-btn ui-btn-a ui-btn-icon-notext ui-btn-icon-righ"> Home </a>
		 <a href="#home "  class="app ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-delete ui-btn ui-btn-a ui-btn-icon-notext ui-btn-icon-right">Actions...</a>
		</div>
	</div>
 	<div data-role="header" style="overflow:hidden;" class="header " >
		<img src="image/header.png"  class="img" style="float: left "></img>
	</div>
	
	<div data-role="panel" data-display="overlay" data-position="right" data-theme="a" id="myPanel">  
			<ul data-role="listview" data-inset="true" style="min-width:210px;">				
				<li> 
					<a href="#login" data-rel="popup" data-position-to="window" data-transition="pop"  ">Login</a>
					<div data-role="popup" id="login" data-overlay-theme="a" data-theme="a" data-dismissible="false" style="max-width:400px;">
						<div data-role="header" data-theme="a">
						<h1>Delete Page?</h1>
						</div>
						<div role="main" class="ui-content">
							<h3 class="ui-title">Are you sure you want to delete this page?</h3>
						<p>This action cannot be undone.</p>
							<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a" data-rel="back">Cancel</a>
							<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a" data-rel="back" data-transition="flow">Delete</a>
						</div>
					</div>
				</li>
				<li><a href="#regist">Registrieren</a></li>
				<li> 
					<a href="#pwvergessen" data-rel="popup" data-position-to="window" data-transition="pop"  ">Login</a>
					<div data-role="popup" id="pwvergessen" data-overlay-theme="a" data-theme="a" data-dismissible="false" style="max-width:400px;">
						<div data-role="header" data-theme="a">
						<h1>Delete Page?</h1>
						</div>
						<div role="main" class="ui-content">
							<h3 class="ui-title">Are you sure you want to delete this page?</h3>
						<p>This action cannot be undone.</p>
							<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a" data-rel="back">Cancel</a>
							<a href="#" class="ui-btn ui-corner-all ui-shadow ui-btn-inline ui-btn-a" data-rel="back" data-transition="flow">Delete</a>
						</div>
					</div>
				</li>
			</ul>	
	</div> 
	
	<div data-role="main" >
	</div>
</div>
<!-- Regist Ende  --> 
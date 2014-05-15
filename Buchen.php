
<div data-role="page" id="Buchen">

	<div data-role="header" style="overflow:hidden;" class="header" >
			<img src="image/icon.png" style="float: left "></img>
			 <h1>App- Name</h1>  
			 <a href="#myPanel3"   class="app ui-btn ui-corner-all ui-shadow ui-btn-inline ui-icon-user ui-btn-right ui-btn-a ui-btn-icon-notext">Actions...</a>	 
	</div> 
	<div data-role="panel" data-display="overlay" data-position="right" data-theme="a" id="myPanel3">  
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
					<a href="#pwvergessen" data-rel="popup" data-position-to="window" data-transition="pop" >Login</a>
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

	<div data-role="main" >
			<div class="content_adress">

			<div class="content_pic"><img src="image/ah.jpg" class="content_pic"> </div>
			<div class="content_text">
			<h4>Altersheim Buchen </h4> 
			<p>Am Ring 1 </p> 
			<p>74722 Buchen </p>
			
			</div>

			</div>
	</div>
		  


</div>

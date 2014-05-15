<div data-role="panel" id="myPanel" data-position="right" data-display="overlay">  
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
						<li><a   data-transition="flip" class="show-page-loading-msg" data-theme="a" data-textonly="false" data-textvisible="true"  data-inline="true">Registrieren</a></li>

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
//Variablen
var currentPage = 0;
var Seiten = new Array();

/*
 * Diese Funktion dient dazu, herauszufinden, an welcher Stelle sich der Besucher befindet, dazu
 * wird mit activePage die aktuelle ID der Seite ermittelt und dann mit dem Array verglichen
 */
function currentPageAnalyse() {
		var activePage = $.mobile.activePage[0].id;
		
		for(i = 0; i < Seiten.length; i++) 
		{
			if(Seiten[i] == activePage) {
				currentPage = i;
				break;
			}
		}	
}

/*
 * Swipe-Effekt
 */
jQuery(document).ready(function() {
	var SeitenAnzahl = $("div[data-role=page]").size();
			
	for(var a = 1; a <= SeitenAnzahl; a++){
		Seiten.push($("div[data-role=page]").get(a-1).id);
	}
	
	$(document).on('pagebeforeshow', currentPageAnalyse);
	$(document).on('swipeleft', swipeLeft);
	$(document).on('swiperight', swipeRight);
	
	function swipeLeft(event) {
		if(currentPage + 1 < Seiten.length) {
			$.mobile.changePage('#' + Seiten[currentPage + 1], {transition: "slide"});	
		}
	}
	function swipeRight(event) {
		if(currentPage > 0) {
			$.mobile.changePage('#' + Seiten[currentPage - 1], {transition: "slide", reverse: true});	
		}
	}
	
});	


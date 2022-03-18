//Dark Mode
const chk = document.getElementById('chk');

chk.addEventListener('change', () => {
	document.body.classList.toggle('dark');
});

//Fonction autorisation click 3 checkbox max
var MAX_ALLOWED = 3; 
var clickedData = new Array(false, false, false, false);

function itemsClicked() {
	var i = 0;
	for (var j = 0; j < clickedData.length; j++) i += clickedData[j] ? 1 : 0;
	return (i);
}

function itemClicked(_v) {
	var ALLOW_THIS = true;
	var x = itemsClicked();
	if (x >= MAX_ALLOWED && !clickedData[_v]) {
		ALLOW_THIS = false;
	} else {
		clickedData[_v] = clickedData[_v] ? false : true;
		eval("document.formulaire.r" + _v + ".clicked=false;");
	}
	return (ALLOW_THIS); /* fin gestionnaire de l'événements */

}

// selecteur clickable
selectValue = document.getElementById('numberArticle');
formSelect 	= document.getElementById('formSelect');

formSelect.onchange = () => {
	formSelect.submit();
}

var futuroid = {
	"title" : "Futuroid",
	"image" : "img/futuroid.png",
	"text" : "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
	"alt" : "Futuroid",
}

var perioseries = {
	"title" : "PerioSeries",
	"image" : "img/perioseries.png",
	"text" : "PerioSeries est un projet fictif réalisé en binome avec <a href='http://neooo.fr/'>Néo Roussel</a> lors de ma 1ere année à MyDigitalSchool. Ce projet a été assez important pour moi puisque c'est un des premiers sites sur lequel j'ai commencer à coder en PHP. J'ai également pu dévouvrir les bases de données et la manipulation de celles-ci, ce qui fut un réel plaisir et ce qui m'a pousser à continuer dans ce domaine.",
	"alt" : "PerioSeries",
}

var sevenkeys = {
	"title" : "Seven Keys",
	"image" : "img/seven_keys.jpg",
	"text" : "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
	"alt" : "Seven Keys",
}

var slider = [futuroid, perioseries, sevenkeys];
var actualSlide = 1;

setSlide();
function setSlide() {
	document.getElementById('slideTitle').innerHTML = slider[actualSlide].title;
	document.getElementById('slideText').innerHTML = slider[actualSlide].text;
	document.getElementById('slideImage').src = slider[actualSlide].image;
	document.getElementById('slideImage').alt = slider[actualSlide].alt;
}


function nextSlide() {
	switch (actualSlide) {
		case 0:
			actualSlide = 1;
			break;
		case 1:
			actualSlide = 2;
			break;
		case 2:
			actualSlide = 0;
			break;
	}
	setSlide();
}

function previousSlide() {
	switch (actualSlide) {
		case 0:
		actualSlide = 2;
		break;
		case 1:
		actualSlide = 0;
		break;
		case 2:
		actualSlide = 1;
		break;
	}
	setSlide();
}

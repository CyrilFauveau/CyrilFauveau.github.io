var futuroid = {
	"title" : "Futuroid",
	"image" : "img/futuroid.png",
	"text" : "Futuroid est une entreprise basée à Angers proposant des jeux en réalité virtuelle. Lors de ma deuxième année à My Digital School, nous travaillions tous les mercredis en autonomie sur différents projets concrets. Mon groupe et moi-même avons réalisé la refonte de l'ancien site. Je me suis occupé de la partie backend avec notamment la réservation en ligne de créneaux horaires.",
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
	"text" : "Un jeu en 48 heures. C'est le but de la Game Jam à laquelle j'ai participer en nomvembre 2019 avec 5 autres personnes. Ce projet fut une découverte pour moi puisque je n'avais jamais réalisé de jeux auparavant. J'ai vraiment apprécié toute la partie de réflexion et de collaboration qui était nécessaire pour développer ce jeu.",
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

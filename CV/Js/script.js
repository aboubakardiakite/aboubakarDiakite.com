
var nav = document.getElementById('navul');
var nom = document.getElementById('nom');
var titre = nom.querySelectorAll('div');
var red_divider = document.querySelector(".red-divider");
var jeFait = document.getElementById('jeFait');
var svg = document.getElementById('telechager');
console.log(svg);
const itemNav = nav.querySelectorAll('li')
const me = document.querySelector('.profile-pucture');



const TL1 = new TimelineMax({paused: true});

TL1
.staggerFrom(itemNav, 2,{y:-200,opacity:0.5},0.1, '-=1')
.from(me,1,{y:-300,opacity:0})
.staggerFrom(titre,1,{x:-100,opacity:0},0.1, '-=1')
.from(jeFait,1,{x:200,opacity:0})
.from(svg,1,{opacity:0})
.from(red_divider,1,{x:-100,opacity:0})
TL1.play();



//plier page

 // Afficher et masquer des sections de formulaire
 function preparePage() {
	document.getElementById("brochures").onclick = function() {
		if (document.getElementById("brochures").checked) {// checked verifie si la case est cocher (true ou false)
			// utiliser un style CSS pour afficher
            document.getElementById("tourSelection").style.display = "block";//afficher la section 
            
            TL1
            .from(document.getElementById("tourSelection"),1,{x:-300,opacity:0});


            TL1.play()
		} else {
			// ou pour masquer le div
			document.getElementById("tourSelection").style.display = "none";//masquer la section
		}
	};
	// Cacher le div au chargement initial de la page.
	document.getElementById("tourSelection").style.display = "none";
}

window.onload =  function() {
	preparePage();
};




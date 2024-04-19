import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import Draggable from "gsap/Draggable";
import Flip from "gsap/Flip";

// Sélection de l'élément à animer
const box = document.querySelector('.box');

// Création de l'animation avec GSAP
gsap.fromTo(box, {
    opacity: 0, 
    y: 100 // Décalage initial vers le bas
}, {
    opacity: 1, 
    y: 0, // Pas de décalage
    duration: 1, // Durée de l'animation en secondes
    scrollTrigger: {
        trigger: box, // Déclencheur : l'élément lui-même
        start: 'top 80%', // L'animation commence lorsque l'élément est à 80% de la hauteur de la fenêtre
        end: 'bottom 20%', // L'animation se termine lorsque l'élément est à 20% de la hauteur de la fenêtre
        scrub: true // L'animation suit le défilement
    }
});

import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import Draggable from "gsap/Draggable";
import Flip from "gsap/Flip";

gsap.registerPlugin(ScrollTrigger, Draggable, Flip, MotionPathPlugin);

let animationTest = document.getElementsByClassName('container').gsap.to( animationTest, {
    xPercent: -50,
    yPercent: -50,
})

console.log("Fonction bein");
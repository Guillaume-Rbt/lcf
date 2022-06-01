var header = document.querySelector('header');
header.innerHTML += "<div class='click' id='click'></div>"


var click = document.getElementById("click");

click.addEventListener("click", function () {
    document.location.href = "https://lesciseauxdeflorine.fr/";
})


/*   Add span in H1      **/

function lettrine(arg1) {

    if (document.getElementById(arg1)) {

        var txt = document.getElementById(arg1).innerHTML;
        var html = "<span class='lettrine'>" + txt[0] + "</span>";
        for (var i = 1; i < txt.length; i++)
            html += txt[i];
        document.getElementById(arg1).innerHTML = html;

    }

}

/* add span in h5 */

function lettrineH5(el) {
    var title = el.innerHTML;
    var html = "<span class='lettrine'>" + title[0] + "</span>";
    for (var i = 1; i < title.length; i++)
        html += title[i];
    el.innerHTML = html;

}


const title = document.querySelectorAll("h1");

function timeline() {
    const TL = gsap.timeline({ paused: true });

    TL.from(title, 1, { top: -50, opacity: 0 }, 0.5);


    TL.play();
}




let ProductType = document.querySelectorAll(".ProductType");
console.log(ProductType);

for (var k = 0; k < ProductType.length; k++) {
    lettrineH5(ProductType[k]);
}


lettrine("fonctionnement");
lettrine("contact");
lettrine("bienvenue");
lettrine("titlePres");
lettrine("boutique");
lettrine("titleCatProd");
lettrine("galerie");
window.addEventListener("load", () => timeline());



// slider 

const allPhotos = document.getElementsByClassName("thumbnailAcc");

let slideActuel = 0;
let slideSuivante = 1;

function fade() {
    allPhotos[slideActuel].classList.toggle("fade");
    allPhotos[slideSuivante].classList.toggle("fade")

    slideActuel++;
    slideSuivante++;

    if (slideActuel > 2) {
        slideActuel = 0;
    }

    if (slideSuivante > 2) {
        slideSuivante = 0;
    }

    setTimeout(fade, 3000);
}

setTimeout(fade, 3000)


var acc = document.querySelectorAll(".content_acc");

window.addEventListener("load", function () {
    if (window.innerHeight > 1000 && window.innerWidth > 1000) {
        acc[0].style.height = window.innerHeight + "px";
    }
})

// animation

const controller = new ScrollMagic.Controller();



const trigger_fonc = document.getElementById("fonctionnement");
const fonctionnement = document.querySelectorAll(".fonctionnement_container li");

let tween3 = gsap.from(fonctionnement, { y: -150, opacity: 0, ease: "back.out(4)", stagger: 0.5 });
let scene3 = new ScrollMagic.Scene({
    triggerElement: trigger_fonc,
    reverse: true
}).setTween(tween3).addTo(controller);


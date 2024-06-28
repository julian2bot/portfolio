// const slidingscroll_top = document.querySelector('.scroll_top')
// // console.log(slidingscroll_top);

// window.addEventListener('scroll', () =>{
//     const {scrollTop, clientHeight} = document.documentElement;
//     // console.log(scrollTop, clientHeight);

//     // console.log(slidingscroll_top.getBoundingClientRect());
//     const topElementToTopViewport = slidingscroll_top.getBoundingClientRect().top;
//     if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * .05) {
//         slidingscroll_top.classList.add('active')
//     }
// })

// const slidingNewsletter = document.querySelector('.slide-in');

// window.addEventListener('scroll', () => {

//     const {scrollTop, clientHeight} = document.documentElement;

//     // console.log(scrollTop, clientHeight);

//     const topElementToTopViewport = slidingNewsletter.getBoundingClientRect().top;

//     console.log(topElementToTopViewport);

//     if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8){
//         slidingNewsletter.classList.add('active')
//     }
// })


// faire apparaitre alatoirement le logo (moi) sur la page en la faisant apparaitre d'un point random autour
const randomStart = Math.floor(Math.random() * 301) - 150; 
const randomStart2 = Math.floor(Math.random() * 301) - 150; 

console.log(randomStart)
console.log(randomStart2)
document.querySelector('.moi').style.setProperty('--random-start', randomStart + 'vw');
document.querySelector('.moi').style.setProperty('--random-start2', randomStart2 + 'vw');



document.querySelectorAll('.nav-header').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien

        // Supprime la classe clicked de tous les liens
        document.querySelectorAll('.nav-header').forEach(link => link.classList.remove('clicked'));

        // Ajoute la classe clicked au lien cliqué
        this.classList.add('clicked');

        // Récupère la durée de l'animation depuis les variables CSS
        const animationDuration = getComputedStyle(document.documentElement).getPropertyValue('--animation-duration');

        // Convertit la durée de l'animation en millisecondes
        const durationInMs = parseFloat(animationDuration) * 1000;

        // Récupère l'ID de la section cible à partir de l'attribut href du lien
        const targetId = this.getAttribute('href');

        // Redirige vers la section cible après la durée de l'animation
        setTimeout(() => {
            window.location.href = targetId;
        }, durationInMs);
    });
});

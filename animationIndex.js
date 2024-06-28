


// faire apparaitre alatoirement le logo (moi) sur la page en la faisant apparaitre d'un point random autour
const randomStart = Math.floor(Math.random() * 301) - 150; 
const randomStart2 = Math.floor(Math.random() * 301) - 150; 

console.log(randomStart)
console.log(randomStart2)
document.querySelector('.moi').style.setProperty('--random-start', randomStart + 'vw');
document.querySelector('.moi').style.setProperty('--random-start2', randomStart2 + 'vw');



// // quand on clique sur le <a> du nav ca effectue une animation avant d'envoyer sur la page voulu
// document.querySelectorAll('.nav-header').forEach(link => {
//     link.addEventListener('click', function(event) {
//         event.preventDefault(); // Empêche le comportement par défaut du lien

//         // Supprime la class .ckicked sur tout
//         document.querySelectorAll('.animation').forEach(link => link.classList.remove('clicked'));

//         // ajout class clicked sur le .animation voulu
//         this.classList.add('clicked');

//         const animationDuration = getComputedStyle(document.documentElement).getPropertyValue('--animation-duration');

//         // Convertit la durée de l'animation en millisecondes
//         const durationInMs = parseFloat(animationDuration) * 1000;

//         // Récupère l'ID de la section cible à partir de l'attribut href du lien
//         const targetId = this.getAttribute('href');

//         // Redirige vers la section cible après la durée de l'animation
//         setTimeout(() => {
//             window.location.href = targetId;
//         }, durationInMs);
//     });
// });



// // quand on clique sur le <a> du nav ca effectue une animation avant d'envoyer sur la page voulu
// document.querySelectorAll('.nav-header').forEach(link => {
//     link.addEventListener('click', function(event) {
//         event.preventDefault(); // Empêche le comportement par défaut du lien

//         const slidingNewsletter = document.querySelector('.animation');
//         // document.querySelectorAll('.animation').forEach(link => link.classList.remove('clicked'));
//         slidingNewsletter.classList.add('clicked')

//         const animationDuration = getComputedStyle(document.documentElement).getPropertyValue('--animation-duration');

//         // Convertit la durée de l'animation en millisecondes
//         const durationInMs = parseFloat(animationDuration) * 1000;

//         // Récupère l'ID de la section cible à partir de l'attribut href du lien
//         const targetId = this.getAttribute('href');

//         // Redirige vers la section cible après la durée de l'animation
//         setTimeout(() => {
//             window.location.href = targetId;
//         }, durationInMs);
//     });
// });


// quand on clique sur le <a> du nav ca effectue une animation avant d'envoyer sur la page voulu
document.querySelectorAll('.nav-header').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien

        const anime = document.querySelector('.animation');
        anime.classList.add('clicked')

        const pointerCircle = document.querySelector('.circle');
        pointerCircle.classList.add('clicked')


        const animationDuration = getComputedStyle(document.documentElement).getPropertyValue('--temps-animation6');
        console.log("temps animation"+animationDuration);
        // Convertit la durée de l'animation en millisecondes
        const durationInMs = parseFloat(animationDuration) * 1000 + 100;
        console.log("temps animation"+durationInMs);

        // Récupère l'ID de la section cible à partir de l'attribut href du lien
        const targetId = this.getAttribute('href');

        // Redirige vers la section cible après la durée de l'animation
        setTimeout(() => {
            window.location.href = targetId;
        }, durationInMs);
    });
    
});


// window.addEventListener('scroll', () => {

//     const {scrollTop, clientHeight} = document.documentElement;

//     // console.log(scrollTop, clientHeight);

//     const topElementToTopViewport = slidingNewsletter.getBoundingClientRect().top;

//     console.log(topElementToTopViewport);

//     if(scrollTop > (scrollTop + topElementToTopViewport).toFixed() - clientHeight * 0.8){
//         
//     }
// })
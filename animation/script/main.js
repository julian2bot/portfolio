// quand on clique sur le <a> du nav ca effectue une animation avant d'envoyer sur la page voulu
document.querySelectorAll('.nav-header').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); 


        const anime = document.querySelector('.animation');
        anime.classList.add('clicked')

        const pointerCircle = document.querySelector('.circle');
        pointerCircle.classList.add('clicked')

        const animationDuration = getComputedStyle(document.documentElement).getPropertyValue('--temps-animation6');
        console.log("temps animation: " + animationDuration);

        const durationInMs = parseFloat(animationDuration) * 1000 + 100;
        console.log("temps animation en ms: " + durationInMs);

        const targetId = this.getAttribute('href');

        setTimeout(() => {
            window.location.href = targetId;
        }, durationInMs);
    });
});



document.querySelectorAll('.cv').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); 

        document.getElementById('pdf-viewer').style.display = "flex";
        document.querySelector('.body').style.filter = 'blur(2px)';
        document.body.style.overflowY = 'hidden';
    });
});



document.querySelectorAll('.close').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); 

        document.getElementById('pdf-viewer').style.display = "none";
        
        document.querySelector('.body').style.filter = 'blur(0px)';
        document.body.style.overflowY = 'scroll';

    });
});

const textearea= document.getElementById('message');
const hauteurDiv = document.querySelector('.contact').offsetHeight ;
console.log("v1 "+hauteurDiv);

// hauteur de la balise form
const hauteurFORM = document.querySelector('.form').offsetHeight ;
console.log("v1 "+hauteurFORM);

// hauteur de la balise form
const hauteurbtn = document.querySelector('.btn').offsetHeight ;
console.log("v1.1 "+hauteurbtn);

const hauteurTextArea = textearea.offsetHeight ;

// pour avoir la valeur de 1em en px 
const emPx = parseFloat(getComputedStyle(document.documentElement).fontSize);

// calcul de la hauteur pour le textearea en fonction des deux precedente
const hauteurMaxTextarea = hauteurDiv - hauteurFORM + hauteurbtn - emPx - hauteurTextArea;
console.log("maxxx"+ hauteurMaxTextarea);
textearea.style.height =  hauteurMaxTextarea + 'px';


// valeur pour une condition max
// let precedenteMaxHeight = document.getElementById('message').offsetHeight;

// function autoResize(textarea) {
//     textarea.style.height = 'auto';
//     textarea.style.height = textarea.scrollHeight + 'px';
    
//     // hauteur de la div class contact
//     const hauteurDiv = document.querySelector('.contact').offsetHeight ;
//     console.log(hauteurDiv);

//     // hauteur de la balise form
//     const hauteur = document.querySelector('.form').offsetHeight ;
//     console.log(hauteur);

//     // calcul de la hauteur pour le textearea en fonction des deux precedente
//     const hauteurMaxTextarea = hauteurDiv - hauteur;
//     console.log('hauteur max'+hauteurMaxTextarea);

//     if (hauteurMaxTextarea > precedenteMaxHeight) {
//         precedenteMaxHeight = hauteurMaxTextarea;
//         textarea.style.maxHeight = hauteurMaxTextarea + 'px';
//     }

// }


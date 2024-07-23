// suppr le pointer une fois l'animation effectué
document.querySelector('.pointer').addEventListener('animationend', function(event) {
    if (event.animationName === 'disparition') {
        event.target.remove();
    }
});



// suppr la div class .up une fois l'animation effectué
document.querySelector('.up').addEventListener('animationend', function(event) {
    if (event.animationName === 'disparition-all') {
        event.target.remove();
    }
});



document.querySelector('.up').addEventListener('animationend', function(event) {
    const DivElem = document.createElement('div');
    DivElem.classList.add('div');
    DivElem.innerHTML = '<a href="../"> <img class="headerMoi" src="../asset/images/moi.png" alt="image dessin de moi" > </a>';


    if (event.animationName === 'ouverture') {
        const mainHeader = document.getElementById('main-header');
        const nav = mainHeader.querySelector('nav');
        mainHeader.insertBefore(DivElem, nav);
    }
});



document.querySelector('.up').addEventListener('animationend', function(event) {
    const DivElem = document.createElement('div');
    DivElem.classList.add('burger');
    DivElem.innerHTML = '<img src="../asset/images/parametre.png" alt="Petit Burger" class="burger-img"><div class="buttons"><button class="button" id="changerTheme">changer Theme</button><button class="button" id="changerAnimation">changerAnimation</button></div>';


    if (event.animationName === 'ouverture') {
        const mainHeader = document.getElementById('main-header');
        const nav = mainHeader.querySelector('nav');
        mainHeader.appendChild(DivElem, nav);
    }
});


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

// //   // Fonction pour charger les données depuis LocalStorage
// function chargerData() {
//     const data = localStorage.getItem('userData');
    
//     return data ? JSON.parse(data) : initialData;
// }
            
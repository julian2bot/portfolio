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
    DivElem.classList.add('div');
    DivElem.innerHTML = '<div class="burger"><img src="../asset/images/close.png" alt="Petit Burger" class="burger-img"><div class="buttons"><button class="button" id="changerTheme">Bouton 1</button><button class="button" id="changerAnimation">Bouton 2</button></div></div>';


    if (event.animationName === 'ouverture') {
        const mainHeader = document.getElementById('main-header');
        const nav = mainHeader.querySelector('nav');
        mainHeader.appendChild(DivElem, nav);
    }
});


// quand on clique sur le <a> du nav ca effectue une animation avant d'envoyer sur la page voulu
document.querySelectorAll('.nav-header').forEach(link => {
    link.addEventListener('click', function(event) {
        // if(chargerData().animation ="Active"){    
        if(true){    

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
        } else{
            const targetId = this.getAttribute('href');

            window.location.href = targetId;
         }

    });
});

//   // Fonction pour charger les données depuis LocalStorage
function chargerData() {
    const data = localStorage.getItem('userData');
    
    return data ? JSON.parse(data) : initialData;
  }
            
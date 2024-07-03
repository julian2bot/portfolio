// suppr le pointer une fois l'animation effectué
document.querySelector('.pointer').addEventListener('animationend', function(event) {
    if (event.animationName === 'disparition') {
        event.target.remove();
    }
});


// // suppr le pointer une fois l'animation effectué
// // document.querySelector('.line').addEventListener('animationend', function(event) {
// //     if (event.animationName === 'disparition-all') {
// //         event.target.remove();
// //     }
// // });


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
    // const Style = document.createElement('div');
    
    // Style.innerHTML = '<style>body{overflow:scroll;}</style>';


    if (event.animationName === 'ouverture') {
        document.getElementById('main-header').appendChild(DivElem);
        // document.getElementById('main-header').appendChild(Style);
    }
});





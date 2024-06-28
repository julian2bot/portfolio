// suppr le pointer une fois l'animation effectué
document.querySelector('.pointer').addEventListener('animationend', function(event) {
    if (event.animationName === 'disparition') {
        event.target.remove();
    }
});


// // suppr le pointer une fois l'animation effectué
// document.querySelector('.line').addEventListener('animationend', function(event) {
//     if (event.animationName === 'disparition-all') {
//         event.target.remove();
//     }
// });

document.querySelector('.up').addEventListener('animationend', function(event) {
    if (event.animationName === 'disparition-all') {
        event.target.remove();
    }
});


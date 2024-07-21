// Données initiales
const initialData = {
    animation:"Active",
    theme:"White",
};

// charger les données depuis LocalStorage
function chargerData() {
    const data = localStorage.getItem('userData');
    return data ? JSON.parse(data) : initialData;
}
function sauvegarderData(data) {
    localStorage.setItem('userData', JSON.stringify(data));
}

function changerAnimation() {
    const data = chargerData();
    data.animation = data.animation === 'Active' ? 'Desactive' : 'Active';
    sauvegarderData(data);
    console.log(chargerData());
}

function changerTheme() {
    const data = chargerData();
    data.theme = data.theme === 'White' ? 'Dark' : 'White';
    sauvegarderData(data);
    console.log(chargerData());
}


//   // appliquer le style en fonction du sexe
//   function appliquerStyle(data) {
//     if (data.sexe === 'M') {
//       document.body.classList.add('blue');
//       document.body.classList.remove('pink');
//     } else {
//       document.body.classList.add('pink');
//       document.body.classList.remove('blue');
//     }
//   }

document.addEventListener('DOMContentLoaded', () => {
    const data = chargerData();
    document.getElementById('changerTheme')?.addEventListener('click', changerTheme);
    document.getElementById('changerAnimation')?.addEventListener('click', changerAnimation);
});


console.log("les données : ",chargerData() );

  
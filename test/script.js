// Données initiales
const initialData = {
    animation:"Active",
    theme:"White",
    sexe: 'M'
  };
  

  

  
//   // Fonction pour modifier le prénom
//   function modifierPrenom() {
//     const data = chargerData();
//     data.prenom = prompt('Entrez un nouveau prénom:', data.prenom);
//     sauvegarderData(data);
//     appliquerStyle(data);
//   }
  
//   // Fonction pour changer le sexe
//   function changerSexe() {
//     const data = chargerData();
//     data.sexe = data.sexe === 'M' ? 'F' : 'M';
//     sauvegarderData(data);
//     appliquerStyle(data);
//   }

  // Fonction pour charger les données depuis LocalStorage
  function chargerData() {
    const data = localStorage.getItem('userData');
    return data ? JSON.parse(data) : initialData;
  }
  // Fonction pour sauvegarder les données dans LocalStorage
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

  
//   // Fonction pour appliquer le style en fonction du sexe
//   function appliquerStyle(data) {
//     if (data.sexe === 'M') {
//       document.body.classList.add('blue');
//       document.body.classList.remove('pink');
//     } else {
//       document.body.classList.add('pink');
//       document.body.classList.remove('blue');
//     }
//   }
  
  // Charger les données et appliquer le style au chargement de la page
  document.addEventListener('DOMContentLoaded', () => {
    const data = chargerData();
    // appliquerStyle(data);
  
    // document.getElementById('modifierPrenom')?.addEventListener('click', modifierPrenom);
    document.getElementById('changerTheme')?.addEventListener('click', PrintchangerTheme);
    document.getElementById('changerAnimation')?.addEventListener('click', PrintchangerAnimation);
  });




function PrintchangerAnimation(){
    console.log("PrintchangerAnimation");
}
function PrintchangerTheme(){
    console.log("PrintchangerTheme");
}

  
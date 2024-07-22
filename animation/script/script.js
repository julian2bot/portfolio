// Données initiales
const initialData = {
    animation:"Active",
    theme:"White",
};
document.addEventListener('DOMContentLoaded', () => {

    // charger les données depuis LocalStorage
    function chargerData() {
        const data = localStorage.getItem('userData');
        return data ? JSON.parse(data) : initialData;
    }
    function sauvegarderData(data) {
        localStorage.setItem('userData', JSON.stringify(data));
    }

    // function changerAnimation() {
    //     const data = chargerData();
    //     data.animation = data.animation === 'Active' ? 'Desactive' : 'Active';
    //     sauvegarderData(data);
    //     console.log(chargerData());
    // }

    function changerTheme() {
        const currentTheme = document.body.classList.contains('white-theme') ? 'White' : 'Dark';
        const newTheme = currentTheme === 'White' ? 'Dark' : 'White';
        
        data.theme = newTheme;
        sauvegarderData(data);
        appliquerTheme(newTheme);
        console.log(chargerData());
    }


    //   // appliquer le style en fonction du sexe
    //   function appliquerStyle(data) {
    //     if (data.sexe === 'M') {
    //       document.querySelector('.card-container').classList.add('blue');
    //       document.querySelector('.card-container').classList.remove('pink');
    //     } else {
    //       document.querySelector('.card-container').classList.add('pink');
    //       document.querySelector('.card-container').classList.remove('blue');
    //     }
    //   }
    const themeButton = document.getElementById('changerTheme');

    function appliquerTheme(){
        body = document.body;
        header = document.querySelector("header");
        ps = document.getElementsByTagName('p');


        if(data.theme ==="White"){
            body.classList.add('white-theme');
            body.classList.remove('dark-theme');
            
            header.classList.add('white-theme');
            header.classList.remove('dark-theme');
            
            for (let p of ps) {
                p.classList.add('white-theme');
                p.classList.remove('dark-theme');
            }            

            themeButton.textContent = 'Thème sombre';

        }   
        else{
            body.classList.add('dark-theme');
            body.classList.remove('white-theme');
            
            header.classList.add('dark-theme');
            header.classList.remove('white-theme');
            
            for (let p of ps) {
                p.classList.add('dark-theme');
                p.classList.remove('white-theme');
            }

            themeButton.textContent = 'Thème clair';
        }
    }



    themeButton.addEventListener('click', changerTheme);

    
    
    // document.getElementById('changerAnimation')?.addEventListener('click', changerAnimation);
    const data = chargerData();
    appliquerTheme();



    const textee =  document.getElementById('ps')
    const animeButton = document.getElementById('changerAnimation');
    animeButton.addEventListener('click', changerAnimation);
    function changerAnimation() {
        const data = chargerData();

        const currentText = textee.textContent;

        const newtext = currentText === 'Active' ? 'Desactive' : 'Active';
        // console.log()
        data.animation = newtext;
        sauvegarderData(data);
        textee.textContent = newtext;
        animeButton.textContent= animeButton.textContent === 'Active Animation' ? 'Desactive Animation' : 'Active Animation';
        
    }

    function animationDefault(){
        textee.textContent = data.animation;
        animeButton.textContent= animeButton.textContent === 'Active Animation' ? 'Desactive Animation' : 'Active Animation';
        // textee.textContent = textee.textContent === 'Active' ? 'Desactive' : 'Active';
    
    }

    animationDefault();
});



// console.log("les données : ",chargerData() );

  
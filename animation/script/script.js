// Données initiales
const initialData = {
    animation:"Active",
    theme:"White",
};
// console.log("fsfd");
if (document.readyState === 'complete' || document.readyState === 'interactive') {
    console.log("soon\n le meme code qu'en dessous mais dupliqué sans le eventlistener pour l'instant");
    function chargerData() {
        const data = localStorage.getItem('userData');
        return data ? JSON.parse(data) : initialData;
    }
    function sauvegarderData(data) {
        localStorage.setItem('userData', JSON.stringify(data));
    }
    const data = chargerData();

    console.log(chargerData());
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
        // console.log('ok');
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
    // const testAction = document.getElementById('testaction');
    // console.log(testAction);
    // testAction.addEventListener('click', changerTheme);
    
    
    
    const themeButton = document.getElementById('changerTheme');
    console.log(document.getElementById('changerTheme'));

    function appliquerTheme(){
        body = document.body;
        header = document.querySelector("header");
        footer = document.querySelector("footer");
        ps = document.getElementsByTagName('p');
        input = document.getElementsByTagName('input');
        textarea = document.getElementsByTagName('textarea');
        console.log("input",input);

        if(data.theme ==="White"){
            body.classList.add('white-theme');
            body.classList.remove('dark-theme');
            
            header.classList.add('white-theme');
            header.classList.remove('dark-theme');
            
            footer.classList.add('white-theme');
            footer.classList.remove('dark-theme');
            
            for (let p of ps) {
                p.classList.add('white-theme');
                p.classList.remove('dark-theme');
            }     
            
            for (let input_ of input) {
                input_.classList.add('white-theme');
                input_.classList.remove('dark-theme');
            }     

            themeButton.textContent = 'Thème sombre';

        }   
        else{
            body.classList.add('dark-theme');
            body.classList.remove('white-theme');
            
            header.classList.add('dark-theme');
            header.classList.remove('white-theme');
            
            footer.classList.add('dark-theme');
            footer.classList.remove('white-theme');
            
            for (let p of ps) {
                p.classList.add('dark-theme');
                p.classList.remove('white-theme');
            }

            for (let input_ of input) {
                input_.classList.add('dark-theme');
                input_.classList.remove('white-theme');
            }

            themeButton.textContent = 'Thème clair';
        }
    }


    
    themeButton.addEventListener('click', changerTheme);

    
    
    // document.getElementById('changerAnimation')?.addEventListener('click', changerAnimation);
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
}
document.addEventListener('DOMContentLoaded', () => {
    console.log("ici");
    // charger les données depuis LocalStorage
    function chargerData() {
        const data = localStorage.getItem('userData');
        return data ? JSON.parse(data) : initialData;
    }
    function sauvegarderData(data) {
        localStorage.setItem('userData', JSON.stringify(data));
    }
    const data = chargerData();

    console.log(chargerData());
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
        // console.log('ok');
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
    // const testAction = document.getElementById('testaction');
    // console.log(testAction);
    // testAction.addEventListener('click', changerTheme);
    
    
    
    const themeButton = document.getElementById('changerTheme');
    console.log(document.getElementById('changerTheme'));

    function appliquerTheme(){
        body = document.body;
        header = document.querySelector("header");
        footer = document.querySelector("footer");
        ps = document.getElementsByTagName('p');
        input = document.getElementsByTagName('input');
        textarea = document.getElementsByTagName('textarea');
        console.log("input",input);

        if(data.theme ==="White"){
            body.classList.add('white-theme');
            body.classList.remove('dark-theme');
            
            header.classList.add('white-theme');
            header.classList.remove('dark-theme');
            
            footer.classList.add('white-theme');
            footer.classList.remove('dark-theme');
            
            for (let p of ps) {
                p.classList.add('white-theme');
                p.classList.remove('dark-theme');
            }     
            
            for (let input_ of input) {
                input_.classList.add('white-theme');
                input_.classList.remove('dark-theme');
            }     

            themeButton.textContent = 'Thème sombre';

        }   
        else{
            body.classList.add('dark-theme');
            body.classList.remove('white-theme');
            
            header.classList.add('dark-theme');
            header.classList.remove('white-theme');
            
            footer.classList.add('dark-theme');
            footer.classList.remove('white-theme');
            
            for (let p of ps) {
                p.classList.add('dark-theme');
                p.classList.remove('white-theme');
            }

            for (let input_ of input) {
                input_.classList.add('dark-theme');
                input_.classList.remove('white-theme');
            }

            themeButton.textContent = 'Thème clair';
        }
    }


    
    themeButton.addEventListener('click', changerTheme);

    
    
    // document.getElementById('changerAnimation')?.addEventListener('click', changerAnimation);
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

  
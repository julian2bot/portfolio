// Données initiales
const initialData = {
    animation:"Desactive",
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

    
    function changerLang() {
        if(document.cookie === "lang=fr"){

            document.cookie = "lang=en; path=/; expires=" + new Date(new Date().getTime() + 3600 * 24 * 365 * 1000).toUTCString();
            // langButton.textContent= langButton.textContent === 'fr' ? 'en' : 'fr';
        
        }
        else{
            document.cookie = "lang=fr; path=/; expires=" + new Date(new Date().getTime() + 3600 * 24 * 365 * 1000).toUTCString();
            // langButton.textContent= langButton.textContent === 'en' ? 'fr' : 'en';
        }


        console.log(langButton);
        window.location.href ="";
        console.log(document.cookie);
        return;
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


    const langButton = document.getElementById('changerLang');
    langButton.addEventListener('click', changerLang);

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
            for (let textarea_ of textarea) {
                textarea_.classList.add('dark-theme');
                textarea_.classList.remove('white-theme');
            }     

            themeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-moon"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>';

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
            for (let textarea_ of textarea) {
                textarea_.classList.add('white-theme');
                textarea_.classList.remove('dark-theme');
            }   
            themeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sun"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>';
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
        // if(animeButton.textContent === 'Active Animation'){
        //     animeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor-play"><path d="M10 7.75a.75.75 0 0 1 1.142-.638l3.664 2.249a.75.75 0 0 1 0 1.278l-3.664 2.25a.75.75 0 0 1-1.142-.64z"/><path d="M12 17v4"/><path d="M8 21h8"/><rect x="2" y="3" width="20" height="14" rx="2"/></svg>';
        // } else if (animeButton.textContent === 'Desactive Animation'){
        //     animeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor-stop"><path d="M12 17v4"/><path d="M8 21h8"/><rect x="2" y="3" width="20" height="14" rx="2"/><rect x="9" y="7" width="6" height="6" rx="1"/></svg>';

        // }
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

   

    function changerLang() {
        if(document.cookie === "lang=fr"){

            document.cookie = "lang=en; path=/; expires=" + new Date(new Date().getTime() + 3600 * 24 * 365 * 1000).toUTCString();
            // langButton.textContent= langButton.textContent === 'fr' ? 'en' : 'fr';
        
        }
        else{
            document.cookie = "lang=fr; path=/; expires=" + new Date(new Date().getTime() + 3600 * 24 * 365 * 1000).toUTCString();
            // langButton.textContent= langButton.textContent === 'en' ? 'fr' : 'en';
            
        }


        console.log(langButton);
        window.location.href ="";
        console.log(document.cookie);
        return;
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
    const langButton = document.getElementById('changerLang');
    // console.log(document.getElementById('changerTheme'));
    
    //  init texte bouton lang
    if(document.cookie === "lang=fr"){
        console.log('je passe');
        langButton.textContent = 'en';
    }else{
        langButton.textContent = 'fr';        
    }
    
    
    
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
            
            for (let textarea_ of textarea) {
                textarea_.classList.add('white-theme');
                textarea_.classList.remove('dark-theme');
            }  
            themeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-moon"><path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"/></svg>';

            // themeButton.textContent = 'Thème sombre';

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

            for (let textarea_ of textarea) {
                textarea_.classList.add('dark-theme');
                textarea_.classList.remove('white-theme');
            }  
            themeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sun"><circle cx="12" cy="12" r="4"/><path d="M12 2v2"/><path d="M12 20v2"/><path d="m4.93 4.93 1.41 1.41"/><path d="m17.66 17.66 1.41 1.41"/><path d="M2 12h2"/><path d="M20 12h2"/><path d="m6.34 17.66-1.41 1.41"/><path d="m19.07 4.93-1.41 1.41"/></svg>';

            // themeButton.textContent = 'Thème clair';
        }
    }


    
    themeButton.addEventListener('click', changerTheme);
    langButton.addEventListener('click', changerLang);

    
    
    // document.getElementById('changerAnimation')?.addEventListener('click', changerAnimation);
    appliquerTheme();


    const textee =  document.getElementById('ps')
    const animeButton = document.getElementById('changerAnimation');
    animeButton.addEventListener('click', changerAnimation);
    function changerAnimation() {
        const data = chargerData();

        const currentText = textee.textContent;

        const newtext = currentText === 'Active' ? 'Desactive' : 'Active';*

        
        // console.log()
        data.animation = newtext;
        sauvegarderData(data);
        textee.textContent = newtext;
        animeButton.textContent= animeButton.textContent === 'Active Animation' ? 'Desactive Animation' : 'Active Animation';
        // if(animeButton.textContent === 'Active Animation'){
        //     animeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor-play"><path d="M10 7.75a.75.75 0 0 1 1.142-.638l3.664 2.249a.75.75 0 0 1 0 1.278l-3.664 2.25a.75.75 0 0 1-1.142-.64z"/><path d="M12 17v4"/><path d="M8 21h8"/><rect x="2" y="3" width="20" height="14" rx="2"/></svg>';
        // } else if (animeButton.textContent === 'Desactive Animation'){
        //     animeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-monitor-stop"><path d="M12 17v4"/><path d="M8 21h8"/><rect x="2" y="3" width="20" height="14" rx="2"/><rect x="9" y="7" width="6" height="6" rx="1"/></svg>';

        // }
    }

    function animationDefault(){
        textee.textContent = data.animation;
        animeButton.textContent= animeButton.textContent === 'Active Animation' ? 'Desactive Animation' : 'Active Animation';
        // textee.textContent = textee.textContent === 'Active' ? 'Desactive' : 'Active';
    
    }
    animationDefault();
});



// console.log("les données : ",chargerData() );

  
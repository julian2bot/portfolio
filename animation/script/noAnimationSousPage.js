const DivElem = document.createElement('div');
DivElem.classList.add('div');
DivElem.innerHTML = '<a href="../"> <img class="headerMoi" src="../asset/images/moi.png" alt="image dessin de moi" > </a>';


const mainHeader = document.getElementById('main-header');
const nav = mainHeader.querySelector('nav');
mainHeader.insertBefore(DivElem, nav);


const divReglage = document.createElement('div');
divReglage.classList.add('burger');
divReglage.innerHTML = '\
            <img src="../asset/images/parametre.png" altP="etit Burger" class="burger-img">\
            <div class="buttons"> \
                <button class="button" id="changerTheme">changer Theme</button>\
                <button class="button" id="changerAnimation">changerAnimation</button>\
                <button class="button" id="changerLang">changerLang</button>\
            </div>';



// const mainHeader2 = document.getElementById('main-header');
// const nav2 = mainHeader2.querySelector('nav');
// mainHeader2.appendChild(divReglage, nav2);
mainHeader.appendChild(divReglage, nav);

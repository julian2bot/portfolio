const DivElem = document.createElement('div');
DivElem.classList.add('div');
DivElem.innerHTML = '<a href="../"> <img class="headerMoi" src="../asset/images/moi.png" alt="image dessin de moi" > </a>';


const mainHeader = document.getElementById('main-header');
const nav = mainHeader.querySelector('nav');
mainHeader.insertBefore(DivElem, nav);


const DivElem2 = document.createElement('div');
DivElem2.classList.add('burger');
DivElem2.innerHTML = '<img src="../asset/images/close.png" alt="Petit Burger" class="burger-img"><div class="buttons"><button class="button" id="changerTheme">Bouton 1</button><button class="button" id="changerAnimation">Bouton 2</button></div>';



const mainHeader2 = document.getElementById('main-header');
const nav2 = mainHeader2.querySelector('nav');
mainHeader2.appendChild(DivElem2, nav2);

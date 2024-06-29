// faire apparaitre alatoirement le logo (moi) sur la page en la faisant apparaitre d'un point random autour
const randomStart = Math.floor(Math.random() * 301) - 150; 
const randomStart2 = Math.floor(Math.random() * 301) - 150; 

console.log(randomStart)
console.log(randomStart2)
document.querySelector('.moi').style.setProperty('--random-start', randomStart + 'vw');
document.querySelector('.moi').style.setProperty('--random-start2', randomStart2 + 'vw');


const divElement = document.querySelector('.div');
if (divElement) {
    divElement.remove();
}

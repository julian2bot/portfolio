// quand on clique sur le <a> du nav ca effectue une animation avant d'envoyer sur la page voulu
document.querySelectorAll('.nav-header').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); 


        const anime = document.querySelector('.animation');
        anime.classList.add('clicked')

        const pointerCircle = document.querySelector('.circle');
        pointerCircle.classList.add('clicked')

        const animationDuration = getComputedStyle(document.documentElement).getPropertyValue('--temps-animation6');
        console.log("temps animation: " + animationDuration);

        const durationInMs = parseFloat(animationDuration) * 1000 + 100;
        console.log("temps animation en ms: " + durationInMs);

        const targetId = this.getAttribute('href');

        setTimeout(() => {
            window.location.href = targetId;
        }, durationInMs);
    });
});




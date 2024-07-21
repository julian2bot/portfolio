document.querySelectorAll('.cv').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); 

        document.getElementById('pdf-viewer').style.display = "flex";
        document.querySelector('.body').style.filter = 'blur(2px)';
        document.body.style.overflowY = 'hidden';
    });
});



document.querySelectorAll('.close').forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault(); 

        document.getElementById('pdf-viewer').style.display = "none";
        
        document.querySelector('.body').style.filter = 'blur(0px)';
        document.body.style.overflowY = 'scroll';

    });
});

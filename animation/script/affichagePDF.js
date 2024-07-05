 // Récupérer l'élément canvas et son contexte
 const canvas = document.getElementById('pdf-render');
 const context = canvas.getContext('2d');

 // Chargement du PDF
 const pdfUrl = '../asset/CV_Marques_Julian.pdf';
 const loadingTask = pdfjsLib.getDocument(pdfUrl);

 loadingTask.promise.then(function(pdf) {
     console.log('PDF chargé.');

     // Affichage de la première page
     pdf.getPage(1).then(function(page) {
         console.log('Page 1 chargée.');

         const viewport = page.getViewport({ scale: 3.0 });
         canvas.height = viewport.height;
         canvas.width = viewport.width;

         // Rendu de la page PDF dans le canvas
         const renderContext = {
             canvasContext: context,
             viewport: viewport
         };
         page.render(renderContext);
     });
 }, function(reason) {
     console.error('Erreur lors du chargement du PDF : ' + reason);
 });

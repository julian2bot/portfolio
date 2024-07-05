<!-- <object style="background-color:red;width:100%;height:100%;" src="CV_Marques_Julian.pdf" type="application/pdf"></object> -->
<!-- <embed style="background-color:red;width:100%;height:100%;" src="./CV_Marques_Julian.pdf" type="application/pdf"> -->
<!-- <embed src="CV_Marques_Julian.pdf" type="application/pdf" /> -->
<!-- <object style="width: 80%; height: 90%; border: 1px solid #000;" data="CV_Marques_Julian.pdf" type="application/pdf"></object> -->
<!-- <embed src="https://1a6f8f8f-9b81-49e8-af83-f7b52230d081-00-2v8t184jwouor.picard.replit.dev/asset/CV_Marques_Julian.pdf" width="100%" height="100%" type="application/pdf" /> -->
<!-- <iframe src="https://1a6f8f8f-9b81-49e8-af83-f7b52230d081-00-2v8t184jwouor.picard.replit.dev/asset/CV_Marques_Julian.pdf" width="100%" height="100%" style="border: none;"></iframe> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
    <div id="pdf-viewer">
        <canvas id="pdf-render"></canvas>
    </div>  
    <script>
        // Récupérer l'élément canvas et son contexte
        const canvas = document.getElementById('pdf-render');
        const context = canvas.getContext('2d');

        // Chargement du PDF
        const pdfUrl = '../asset/CV_Marques_Julian.pdf'; // Remplacez par le chemin correct
        const loadingTask = pdfjsLib.getDocument(pdfUrl);

        loadingTask.promise.then(function(pdf) {
            console.log('PDF chargé.');

            // Affichage de la première page
            pdf.getPage(1).then(function(page) {
                console.log('Page 1 chargée.');

                const viewport = page.getViewport({ scale: 1.0 });
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
    </script>
</body>
</html>
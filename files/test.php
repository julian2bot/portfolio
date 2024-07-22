<?php
// NON UTILISé
// juste un fichier de test
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changer de Thème</title>
    <style>
        body.white-theme {
            background-color: white;
            color: black;
        }
        body.dark-theme {
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <button id="changerTheme">Changer le thème</button>
    <button id="changerAnimation">Changer le thème</button>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeButton = document.getElementById('changerTheme');

            function chargerData() {
                // Chargement des données depuis le localStorage
                return { theme: localStorage.getItem('theme') || 'White' };
            }

            function appliquerTheme(theme) {
                if (theme === "White") {
                    document.body.classList.add('white-theme');
                    document.body.classList.remove('dark-theme');
                    themeButton.textContent = 'Thème clair';
                } else {
                    document.body.classList.add('dark-theme');
                    document.body.classList.remove('white-theme');
                    themeButton.textContent = 'Thème sombre';
                }
            }

            function changerTheme() {
                const currentTheme = document.body.classList.contains('white-theme') ? 'White' : 'Dark';
                const newTheme = currentTheme === 'White' ? 'Dark' : 'White';
                localStorage.setItem('theme', newTheme);
                appliquerTheme(newTheme);
            }

            themeButton.addEventListener('click', changerTheme);

            // Charger les données et appliquer le thème initial
            const data = chargerData();
            appliquerTheme(data.theme);
            
            const textee =  document.getElementById('ps')
            const animeButton = document.getElementById('changerAnimation');
            animeButton.addEventListener('click', changerAnimation);
            function changerAnimation() {
                // const currentTheme = document.body.classList.contains('white-theme') ? 'White' : 'Dark';
                // const newTheme = currentTheme === 'White' ? 'Dark' : 'White';
                // localStorage.setItem('theme', newTheme);
                // appliquerTheme(newTheme);

                const currentText = textee.textContent;

                const newtext = currentText === 'a' ? 'b' : 'a';
                // console.log()
                textee.textContent = newtext;
            }

        });
    </script>
    <?php
    $variable_php = "b";
    ?>
    <script>
        var variable_js = "<?php echo $variable_php; ?>";
        console.log(variable_js); // Affichera "Bonjour"
    </script>

    <p id="ps" >
        <?php
            echo $variable_php;
            // if($variable_php === "b"){
            //     echo "tfsv:";
            // }
            // echo 'salut';
        ?>
    </p>
</body>
</html>

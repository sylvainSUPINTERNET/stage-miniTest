<?php
require_once 'index.php';

$titreAnnounce = $_GET['titre'];
var_dump($titreAnnounce);

$stmt = $pdo->prepare('SELECT * FROM test WHERE titre = :titre '); //query est plus utile ici mais bon
$stmt->bindParam('titre', $titreAnnounce);
$stmt->execute();
/* to see if request get good result
$result = $stmt->fetchAll();
var_dump($result);
*/
while ($row = $stmt->fetchObject()) {
    echo "<ul>";
    echo "<button class='clickMe'>Display</button>"; //to event listenner
    echo "<div id='container'>"; // to display
    echo "<li>Contenu : " . $row->contenu . "</li>";
    echo "</div>";
    echo "</ul>";
}


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>
<script src="jquery.js"></script>
<script>
    "use strict";

    window.onload = function () {

        $('#container').css({
            'display': 'none'
        });

        var i = 0;
        $('.clickMe').click(function () {
            /* affichage merdique
             $('#container').css({
             'display' : 'block'
             })
             */
            //affichage with animation
            $("#container").slideDown("fast", function () {
                // Animation complete.
            });

        });
    };
</script>
</body>
</html>

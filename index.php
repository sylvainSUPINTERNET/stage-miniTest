<?php
/* With loop de la merde lel
$pdo = new PDO('mysql:host=localhost;dbname=testperso', 'root', '');
$stmt = $pdo->prepare('SELECT * FROM test WHERE titre LIKE "offre%" ');
$stmt->execute();
//$response = $stmt->fetch(PDO::FETCH_ASSOC);
$results  = $stmt->fetchAll(PDO::FETCH_ASSOC);
$html = "";
foreach($results as $result){ //tab in tab avec fetchAll
    foreach($result as $value){
        var_dump($value);
        $html .= "<li>$value</li>";  }
}
echo $html;
*/

//With Object
$pdo = new PDO('mysql:host=localhost;dbname=testperso', 'root', '');
$stmt = $pdo->prepare('SELECT * FROM test WHERE titre LIKE "offre%" '); //query est plus utile ici mais bon
$stmt->execute();
while ($row = $stmt->fetchObject()) {
    echo "<ul>";
    echo "<li><a href='./contact.php?titre=$row->titre'>See more</a> " . $row->titre . "</li>";
    //echo "<li>Contenu : " .$row->contenu . "</li>";
    echo "</ul>";
}

?>

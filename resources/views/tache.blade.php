<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // permet de se connecter à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motDePasse = "root";
$nomBaseDeDonnees = "toDoList";

// Active le rapport d'erreurs MySQLi
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);
if ($connexion->connect_error) {
    die("Connexion échouée : " . $connexion->connect_error);
} else {
    echo "Connexion réussie à la base de données.";
}
        $tache = $connexion->prepare("SELECT * FROM taches ");
        $tache->execute();
        $resultat = $tache->get_result();
        if ($resultat->num_rows > 0){
            echo "<div style='border:2px solid black; '><br>";
            while($row = $resultat->fetch_assoc()){
                echo "  
                <div style='display: flex; justify-content:space-around; flex-direction:row; border-bottom:1px solid black; '>
                    <p>".htmlspecialchars($row['description'])." </p>
                    <p>Priorité : ".htmlspecialchars($row['priorite'])." </p>
                    <p>Date d'échéance : ".htmlspecialchars($row['date_echeance'])." </p>
                </div><br>";
            }
            echo "</div>";
        }
    ?>
</body>
</html>
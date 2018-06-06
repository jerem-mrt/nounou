<?php
//Récupéré les noms des villes recherchées

include 'database.php';

//obtenir des données appariées de la table de ville

//$bdd = new mysqli('localhost','root','','nounou');
//$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


/*
if ($requete = $database->prepare('SELECT nomV FROM ville WHERE nomV LIKE ?')){
    
   
 
    $requete->bind_param("s", $term);


    $requete->execute();


    $requete->bind_result($district);


    while ($row = $result->fetch_row()) {
        var_dump($row);
    }


    $requete->close();
    
    
} // j'effectue ma requête SQL grâce au mot-clé LIKE
//$requete->execute(array('term' => $term.'%'));
*/

$term = $_GET['term'];
$requete = $bd->prepare('SELECT nomV FROM ville WHERE upper(nomV) LIKE upper(:term)'); //j'effectue ma requête SQL grâce au mot-clé LIKE
$requete->execute(array('term' => $term.'%'));
$array = array(); // on créé le tableau

while($donnee = $requete->fetch()) // on effectue une boucle pour obtenir les données
{
    array_push($array, $donnee['nomV']); // et on ajoute celles-ci à notre tableau
}

echo json_encode($array); // il n'y a plus qu'à convertir en JSON

/*
$query = $bdd->query("SELECT nomV FROM ville WHERE nomV LIKE '%".$term."%' ORDER BY nomV ASC");
while($row = $query->fetch_assoc()){
    $data[] = $row['nomV'];
}

echo json_encode($data);
*/
?>

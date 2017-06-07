<?php

$postQuery 		= $_POST['query'];
$postGraad 		= $_POST['checkboxa'];
$postSchool 	= $_POST['checkboxb'];
$postCategorie 	= $_POST['checkboxc'];

try
{
	//Connect to db
	$db = new PDO('mysql:charset=utf8;host=localhost;dbname=wordpress_studant_v2','root','123');
	$dbmessage = "Connection successful";

	//Queries
	$query_specific	= "SELECT * FROM wp_onderwijs WHERE "; 
	$query_search 	= "richting LIKE :query_search";

	$QUERIES = array();

	if(isset($postGraad)){
		foreach($postGraad as $check) { $arraya[] = "'" . $check . "'"; }
		$query_Graad = ('campus = ' . implode (' OR campus = ', $arraya));
		array_push($QUERIES, $query_Graad);
	}	
	if(isset($postSchool)){
		foreach($postSchool as $check) { $arrayb[] = "'" . $check . "'"; }
		$query_School = ('soort = ' . implode (' OR soort = ', $arrayb));
		array_push($QUERIES, $query_School);
	}
	if(isset($postCategorie)){
		foreach($postCategorie as $check) { $arrayc[] = "'" . $check . "'"; }
		$query_Categorie = ('categorie LIKE ' . implode (' OR categorie LIKE ', $arrayc));
		array_push($QUERIES, $query_Categorie);
	}

	//ENKEL TEKST QUERY
	if(isset($postQuery) && !isset($postGraad) && !isset($postSchool) && !isset($postCategorie))
	{
		$query = $db->prepare($query_specific . $query_search);
		$query->bindValue(':query_search','%' . $postQuery . '%');
	}
	//ENKEL FILTER
	else if( (isset($postGraad) || isset($postSchool) || isset($postCategorie)) && ($postQuery == NULL) )
	{

		if(count($QUERIES) == 0) {
			$query = $db->prepare($query_specific . $QUERIES[0]);
		}
		else {
			$queryValues = implode(') AND (', $QUERIES);
			$query = $db->prepare($query_specific . "(" . $queryValues . ")");
		}

	}
	//BEIDE
	else if(isset($postQuery) && (isset($postGraad) || isset($postSchool) || isset($postCategorie)))
	{
		if(count($QUERIES) == 0) {
			$query = $db->prepare($query_specific . $query_search . ' AND ' . $QUERIES[0]);
			$query->bindValue(':query_search','%' . $postQuery . '%');
		}
		else {
			$queryValues = implode(') AND (', $QUERIES);
			$query = $db->prepare($query_specific . $query_search . " AND (" . $queryValues . ")");
			$query->bindValue(':query_search','%' . $postQuery . '%');
		}
	}
	//GEEN
	else
	{
		$query = $db->prepare("SELECT * FROM wp_onderwijs");
	}

	//EXECUTE
	$query->execute();
	while($row = $query->fetch(PDO::FETCH_ASSOC)) {
    	$printInhoud[] = $row;
    }


}
catch(PDOException $e)
{ 
	$dbmessage = "An error has occured: " . $e->getMessage();
}

?>
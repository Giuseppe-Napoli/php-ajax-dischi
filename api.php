<?php
//prendo l'array contenuto in db.png
  require_once __DIR__ . '/data/db.php';

  //3)inizializziamo i genres ed estraiamo dal db tutti i genrs senza pero duplicarli 
  $genres = [];
  //operazione ternaria per la quale se il get genr è vuoto o è all allora mi restuisce l'array database altrimenti mi restituisce un array vuoto
  $albumsArr = empty($_GET['genre'])  || $_GET['genre'] === 'all'? $database : [];
  // ciclo per popolare array $genres
  foreach($database as $album){
    // in php per vedere se un elemento è incluso si usa 'in_array'
    if(!in_array($album['genre'],$genres)){
      //forma contratta per pushare dentro un array
      $genres[] = $album['genre'];
    }
  }

  // ciclo per popolare array $albumsArr
  if(count($albumsArr)===0){
    foreach($database as $album){
      if($album['genre'] === $_GET['genre']){
        $albumsArr[] = $album;
      }
    }
  }
  

  
  $response = [
    'albums' => $albumsArr,
    'genres' => $genres 
  ];
  
  //1)non dobbiamo stampare solo il database ma anche i genres per la select per questo creiamo $response
  header('Content-Type: application/json');
  echo json_encode($response);
?>

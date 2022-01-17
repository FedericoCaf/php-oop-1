<?php
  require_once __DIR__ . "/database.php";
  require_once __DIR__ . "/Movie.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Movie</title>
</head>
<body>

<div class="fc-container">
  <?php
  foreach ($movies as $movie) :
    $new_movie = new Movie($movie['name']);
    $new_movie->genre = $movie['genre'];
    $new_movie->year = $movie['year'];
    $new_movie->cast = $movie['cast'];
    $new_movie->review = $movie['review'];

  ?>

  <div class="filmCard">
      <h2> <?php echo $new_movie->name ?> </h2>
      <h4> <?php echo $new_movie->genre ?> </h4>
      <h5> <?php echo $new_movie->year ?> </h5>
      <ul>
          <?php foreach($new_movie->cast as $cast) : ?> 
            <li> <?php echo $cast ?> </li>
          <?php endforeach ?>
      </ul>
      recensione: <strong><?php echo $new_movie->getReview() ?></strong> </p>

    </div>

  <?php endforeach ?>
</div>
  
</body>
</html>
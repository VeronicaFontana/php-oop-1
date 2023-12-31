<?php



try{
  require_once __DIR__ . "/Traits/Year.php";
  require_once __DIR__ . "/Model/Production.php";
  require_once __DIR__ . "/Model/Media.php";
  require_once __DIR__ . "/Model/Movie.php";
  require_once __DIR__ . "/Model/TvSerie.php";
  require_once __DIR__ . "/db/db.php";
}catch(Exception $e){
  $error = $e->getMessage();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style.css">  

  <title>Productions</title>
</head>
<body>
  <h1 class="text-center mt-3">FILM AND TV SERIES</h1>
  <?php if(isset($error)): ?>
    <div class="alert alert-danger" role="alert">
      <?php echo $error ?>
    </div>
  <?php else: ?>
  <div class="container mt-3 d-flex flex-wrap">
    <?php foreach($productions as $production): ?>
      <div class="card" style="width: 18rem;">
        <img src="img/<?php echo $production->image->file_name ?>" class="card-img-top" alt="<?php echo $production->image->name ?>">
        <div class="card-body">
          <h5 class="card-title"><?php echo $production->title ?></h5>
          <p class="card-text"><?php echo $production->genre ?></p>
          <p class="card-text"><?php echo implode(" - ", $production->cast) ?></p>
          <p class="card-text">Anno di pubblicazione: <?php echo $production->publication_year ?></p>
          <p class="card-text">Tipo: <?php echo get_class($production) ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <?php endif; ?>
</body>
</html>
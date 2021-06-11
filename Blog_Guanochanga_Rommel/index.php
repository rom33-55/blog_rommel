<?php
require_once('config/functions.php');
$articles = getArticles();
?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php');
?>
<!-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actu Jeux Videos</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
</head> -->

<body>
<?php include('nav_bar.php');
?>
<!-- <header>
<div id="container">
<img id="image" src="images/Video-Games-Blog.jpg"  alt="" />

<p id="text">Actu VideoGames</p>
</div>  
</header>
<div id="botones">
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
   
  <div class="container-fluid">
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <button class="btn btn-danger me-3" type="submit">Accueil</button>
        <button class="btn btn-danger me-3" type="submit">Articles</button>
        <button class="btn btn-outline-danger me-3"  type="submit" aria-disabled="true">Admin</button>
      </ul>
      <form class="d-flex">
        <button class="btn btn-outline-danger me-3"  type="submit">S'inscrire</button>
        <button class="btn btn-danger" type="submit">S'identifier</button>
      </form>
 </div>
  </div>
</div>
</nav>
<br /> -->


<div id="pagina">
  
    <h1> Dernières articles publiés: </h1>
     
<br />



    <?php foreach($articles as $article): ?>
        <h2 ><?= $article->title ?></h2>
        <time><?= $article->date ?></time>
        <br /><br />
        <a href="article.php?id=<?= $article->id ?>"> lire la suite </a>
        <?php endforeach;?>

      
        </div>

        <?php include('footer.php');
?>
        
</body>
</html>
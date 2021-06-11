<?php
require_once('config/functions.php');
$articles = getArticles();
?>
<!DOCTYPE html>
<html lang="en">
<?php include('header.php');
?>


<body>
<?php include('nav_bar.php');
?>



<div id="pagina">
  
    <h1> Articles: </h1>
     
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
<?php
if(!isset($_GET['id']) OR !is_numeric($_GET['id']))
header('Location: index.php');
else
{
    extract($_GET);
    //strip_tags supprime le code html ou php de la var.
    $id= strip_tags($id);
    require_once('config/functions.php');

    if(!empty($_POST))
    {
        extract($_POST);
        $errors = array();

        $author = strip_tags($author);
        $comment = strip_tags($comment);

        if(empty($author))
        array_push($errors, 'Entrez un pseudo');
        if(empty($comment))
        array_push($errors, 'Entrez un commentaire');

        if(count($errors)==0)
        {
            $comment = addComment($id,$author,$comment);
            $success = 'Votre commentaire a été publié';

            unset($author);
            unset($comment);

        }


    }

    $article = getArticle($id);
    $comments = getComments($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('header.php');
?>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title><?= $article->title ?></title>
</head>
<body>
<?php include('nav_bar.php');
?>
<div id="pagina">
<a href="index.php">Retour aux articles </a>
<h1><?= $article->title ?></h1>
<time><?= $article->date ?></time>
    <p><?= $article->content ?></p>
    <hr />

    <?php
    if(isset($success))
    echo $success;

    if(!empty($errors)):?>

    <?php foreach($errors as $error): ?>
    <p><?= $error ?></p>
     <?php endforeach; ?>   

     <?php endif; ?>


    <form action="article.php?id=<?= $article->id?>" method="post">
    <p><label for="author">Pseudo : </label> <br/>
    <input type="text" name="author" id="author" value="<?php if(isset($author)) echo $author ?>"/></p>
    <p><label for="comment">Commentaire : </label> <br/>
    <textarea name="comment" id="comment" cols="30" rows="8"><?php if(isset($comment)) echo 
    $comment ?></textarea></p>
    <button type="submit">Envoyer</button>
    </form>

    <h2>Commentaires :</h2>
    <?php foreach($comments as $com): ?>
    <h3><?=$com->author ?></h3>
    <time><?=$com->date ?></time>
    <p><?= $com->comment ?></p>
    <?php endforeach; ?>
</div>
<?php include('footer.php');
?>
</body>
</html>
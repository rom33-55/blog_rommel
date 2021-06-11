<?php
// F pour recuperer les articles
function getArticles()
{
    require('config/connect.php');
    $req = $bdd->prepare('SELECT id, title, date FROM articles ORDER BY id DESC');
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}

// F pour recuperer un article par son id
function getArticle($id)
{
    require('config/connect.php');
    $req = $bdd->prepare('SELECT * FROM articles WHERE id = ?');
    $req->execute(array($id));
    if($req->rowCount() == 1)
    {
        $data = $req->fetch(PDO::FETCH_OBJ);
        return $data;
    }
    else
    header('Location: index.php');
    $req->closeCursor();
}

// F ajouter commentaire par id
function addComment($article_id, $author, $comment)
{
    require('config/connect.php');
    $req = $bdd->prepare('INSERT INTO comments (article_id, author, comment, date) VALUES (?,?,?, NOW())');
    $req->execute(array($article_id, $author, $comment));
    $req->closeCursor();
}

// F recupere les comentaires d'un article
function getComments($id)
{
    require('config/connect.php');
    $req = $bdd->prepare('SELECT * FROM comments WHERE article_id=?') ;
    $req->execute(array($id));
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
    $req->closeCursor();
}





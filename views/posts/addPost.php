<?php

require_once '../app/controllers/addPost.controller.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/styles/styleaddpost.css">
    <title>Document</title>
</head>
<body>
<main class="main">
        <aside class="sidebar">
          <nav class="nav">
            <ul>
                <img class="logo" src="/public/assets/new_logo-bl.png" alt="le logo de la communauté d'amateurs des films et des séries">
              <li class="active"><a href="#">Bienvenue dans Notre Communauté</a></li>
              <li><a href="../index.php">Accueil</a></li>
              <li><a href="./viewPosts.php">Voir Publications</a></li>
              <li><a href="#">Gérer Les Publications</a></li>
            </ul>
          </nav>
          <footer class="social-media">
            <a href="http://instagram.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/instagram-new--v1.png"/></a>
            <a href="http://facebook.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/facebook-circled--v1.png"/></a>
            <a href="http://youtube.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/youtube-play--v1.png"/></a>
        </footer>
        </aside>

        <aside class="sidebar-mobil">
            <nav class="nav-mobil">
              <ul>
                  <img class="logo" src="/public/assets/new_logo-bl.png" alt="le logo de la communauté d'amateurs des films et des séries">
                <li class="active"><a href="#">Bienvenue </a></li>
                
                <li><a href="../index.php"><img class="accueil" src="https://img.icons8.com/ios-glyphs/30/ffffff/home.png"/></a></li>
                <li><a href="../posts/viewPosts.php"><img src="https://img.icons8.com/ios/50/ffffff/show-all-views.png"/></a></li>
                <li><a href="../posts/addPost.php"><img src="https://img.icons8.com/ios/50/ffffff/edit-calendar.png"/></a></li>
              </ul>
            </nav>
            <footer class="social-media-mobil">
              <a href="http://instagram.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/instagram-new--v1.png"/></a>
              <a href="http://facebook.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/facebook-circled--v1.png"/></a>
              <a href="http://youtube.com"><img class="icon" src="https://img.icons8.com/ios/50/ffffff/youtube-play--v1.png"/></a>
          </footer>
          </aside>
      </main>
    <div class="main">
    <h1>Ajouter une Publication</h1>
            <a class="btn btn-outline-danger" href="/app/views/index.php">Déconnection</a>
            <hr>
        <div class="form-container">
            <form action="" method="post">
                <div class="form-group">
                        <label for="exampleInputLogin">login : </label>
                        <input type="text" class="form-control" name="login" autocomplete="off">
                    </div>
                   
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Titre : </label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="titre" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Catégorie : </label>
                        <input type="text" class="form-control" id="formGroupExampleInput3" name="categorie" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Description : </label>
                        <input type="text"  class="form-control" id="formGroupExampleInput5" name="desc" autocomplete="off"><br>
                    </div>

                    <div class="custom-file">
                    <label class="custom-file-label" for="inputGroupFile01">Choisir une photo : </label>
                    <br><br>
                    <input type="file" name="photo" class="custom-file-input" id="inputGroupFile01"
                       aria-describedby="inputGroupFileAddon01" autocomplete="off">
                    </div>
                    <input type="submit" class="btn btn-danger" value="submit" class="submit" name="submit">
            </form>
        </div>
    </div>
</body>
</html>
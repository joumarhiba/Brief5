<?php
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
  <?php
require_once ('./app/Views/sidebar.php');
  ?>
    <div class="main">
    <h1>Ajouter une Publication</h1>
            <a class="btn btn-outline-danger" href="/app/views/index.php">Déconnection</a>
            <hr>
        <div class="form-container">
        <form action="http://localhost:3000/user/savePost" method="post">
               
                   
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
                    <input type="file" name="img" class="custom-file-input" id="inputGroupFile01"
                       aria-describedby="inputGroupFileAddon01" autocomplete="off">
                    </div>
                    <input type="hidden" name="userId" value="<?= $post['idUser'] ?>" >
                    <input type="submit" class="btn btn-danger" value="Add" class="submit" name="add">
            </form>
        </div>
    </div>
</body>
</html>
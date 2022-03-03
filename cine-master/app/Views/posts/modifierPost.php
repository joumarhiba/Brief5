<?php 
require_once ('app/Models/Base.php') ;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
    <link rel="stylesheet" href="/public/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/styles/stylewiewposts.css">
</head>
<body>

<?php
require_once ('./app/Views/sidebar.php');
  ?>

    <div class="container">
        <div class="text-center my-5">
            <h1>Modifier une Publication</h1>
            <a class="btn btn-outline-danger" href="/app/views/index.php">Déconnection</a>
            <hr>
            
            <div class="form-container">
        <form action="http://localhost:3000/user/update/<?= $row['idPost']?>" method="post">           
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Titre : </label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" name="titre" value="<?= $row['title'] ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Catégorie : </label>
                        <input type="text" class="form-control" id="formGroupExampleInput3" name="categorie" value="<?= $row['category'] ?>" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="">Description : </label>
                        <input type="text"  class="form-control" id="formGroupExampleInput5" name="desc" autocomplete="off" value="<?= $row['description'] ?>"><br>
                    </div>
                    <div class="custom-file">
                    <label class="custom-file-label" for="inputGroupFile01">Changer une photo : </label>
                    <br><br>
                    <input type="file" name="img" class="custom-file-input" id="inputGroupFile01"
                       aria-describedby="inputGroupFileAddon01" value="<?= $row['photo'] ?>"  autocomplete="off">
                    </div>
                    <input type="hidden" value="<?= $row['idPost']?>" name="idUser">
                    <input type="submit" class="btn btn-danger" value="enregister" name="enregister" >
            </form>
        </div>
    </div>
</body>
</html>
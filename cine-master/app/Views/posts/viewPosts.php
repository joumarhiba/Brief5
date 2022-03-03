<?php 
// require_once ('../../Models/Base.php') ;
require_once ('app/Models/Base.php');
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
        <div class="text-center ">
            <h1>Voir Toutes Les Publications</h1>
            <a class="btn btn-outline-danger" href="http://localhost:3000/user/logout">Déconnection</a>
            <hr>

            <?php foreach($posts as $post): ?>
                  <div class="card-body">
                  
                        <h3 class="title"> Titre : <?= $post['title'] ?></h3>
                        <img  class="img-fluid" src="/public/assets/<?=$post['photo']?>" >
                        <p class="card-text"><br><strong>Categorie : </strong>  <?= $post['category'] ?></p>
                        <p class="card-text"><strong>Description : </strong> <?= $post['description'] ?></p>
                       
                       
                       
                        <label class="zone-cmt">
                            <p>Commentaires</p>
                            <form action="http://localhost:3000/user/addCmt" method="post">
                             <input type="hidden" value="<?= $post['idPost'] ?>" name="idPost">                        
                                <input type="text" name="comment" placeholder="Ajouter un commentaire">  
                                <button type="submit"  name="cmt" class="btn env">Envoyer</button> 
                            </form>
                        </label>
                        <div class="btns">
                    <form action="http://localhost:3000/user/edit".<?= $post['idPost'] ?> method="post">
                    <input type="hidden" value="<?= $post['idPost'] ?>" name="idPost">
                   <button type="submit"  name="modifier" class="btn modif">Modifier</button>
                    </form>



                    <form action="http://localhost:3000/user/delete" method="post">
                    <input type="hidden" value="<?= $post['idPost'] ?>" name="idPost">
                   <button type="submit"  name="delete" class="btn supp">Supprimer</button>
                    <!-- <button type="button" class="btn btn-outline-danger">Supprimer</button> -->
                    </form>
                   </div>
                   
                </div>
            <?php endforeach; ?> 
                   <!-- <div class="btns">
                   <button type="button" class="btn btn-danger">Modifier</button>
                    <button type="button" class="btn btn-outline-danger">Supprimer</button>
                   </div>
                </div> -->
            <!-- Row End -->
            </div>
            <!-- <div class="row">
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card md-5 shadow-sm"></div>
                    <img src="/public/assets/poster_joker.jpg" class="img-fluid" />
                   
            <div class="card-body">
                
                <div class="title">
                    <h2>this is the Title</h2>
                </div>
                <div class="card-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae exercitationem aperiam eum quod repudiandae quas tempora officia eveniet, porro error rem odit enim commodi eaque magni numquam, quisquam veniam ab!</p>
                </div>
                <div>
                    <label>
                        <p class="cmt">Commentaires</p>
                        <input type="text" name="cmt" placeholder="Ajouter un commentaire">
                        
                    </label>
                </div>
            </div>
            <div class="btns">
                   <button type="button" class="btn btn-danger">Modifier</button>
                    <button type="button" class="btn btn-outline-danger">Supprimer</button>
                   </div>
        </div>
    <!-- Row End -->
    </div>
        </div>
    </div>
</body>
</html>
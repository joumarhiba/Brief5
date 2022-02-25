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

    <main class="main">
        <aside class="sidebar">
          <nav class="nav">
            <ul>
                <img class="logo" src="/public/assets/new_logo-bl.png" alt="le logo de la communauté d'amateurs des films et des séries">
              <li class="active"><a href="#">Bienvenue dans Notre Communauté</a></li>
              <li><a href="../index.php">Accueil</a></li>
              <li><a href="./viewPosts.php">Voir Publications</a></li>
              <li><a href="../posts/addPost.php">Gérer Les Publications</a></li>
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

    <div class="container">
        <div class="text-center my-5">
            <h1>Voir Toutes Les Publications</h1>
            <a class="btn btn-outline-danger" href="/app/views/index.php">Déconnection</a>
            <hr>

            <!-- Row start -->
            <div class="row">
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
            <div class="row">
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
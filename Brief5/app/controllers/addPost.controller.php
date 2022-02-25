<?php 
if(isset($_POST['submit'])){
    $login = $_POST['login'];
    $photo = $_POST['photo'];
    $titre = $_POST['titre'];
    $desc = $_POST['desc'];
    $ctgr = $_POST['categorie'];
    require_once ('../models/addPost.model.php');
    
if ($res){
    echo ' Data inserted successfully ........................';
}
else{

    echo 'errooooooooooor ';
}

}
    
?>
<?php
//   session_start();
//   if (isset($_SESSION["email"])) {
//     header("location:viewPosts.php");
//   }
//   $Message = "";
//   if (isset($_POST["email"]) && $_POST["pwd"]) {
   
//       require_once("../models/connection.php");
//       $email = htmlspecialchars($_POST['email']);
//       $pwd = htmlspecialchars($_POST['pwd']);
//       if($email !== "" && $password !== "")
//     {
//         $requete = "SELECT count(*) FROM users where 
//              email  = '".$email."' and password = '".$pwd."' ";
//         $exec_requete = mysqli_query($conn,$requete);
//         $reponse      = mysqli_fetch_array($exec_requete);
//         $count = $reponse['count(*)'];
//         if($count!=0) // nom d'utilisateur et mot de passe correctes
//         {
//            $_SESSION['email'] = $email;
//            header('Location: viewPosts.php');
//         }
//     }
// }
// class Main{
//     function __construct($db)
//     {
//         $this->_db = $db;
//     }
//     function login(){
//         if(isset($_POST['submit'])){
//             $email = addslashes(strip_tags($_POST['email']));
//             $pwd = addslashes(strip_tags($_POST['pwd']));

//             if(!empty($email) AND !empty($pwd)){
//                 $sql = $this->_db->prepare("SELECT * FROM `users` WHERE email = :email AND password = :pw");
//                 $sql->execute(array('email' => $email,'pwd' => $pwd));
//                 if($sql->rowCount()){
//                     $data = $sql->fetch();
//                     $_SESSION['id'] = $data['id'];
//                     $_SESSION['id'] = true;
//                     header('location :index.php');
//                 }
//             }else{
//                 echo 'entrer lotre email et mot de passe';
//             }

//         }
//     }
// }

  session_start();

  $Message = "";
  if(isset($_POST['submit'])){
  if (isset($_POST["email"])) {
    if (empty($_POST["email"]) || empty($_POST["pwd"])) {
      $Message = '<div style="color:red;text-align:center">All fields is required</div>';
    }else {
      include("../models/connection.php");
      $email = $_POST["email"];
      $pwd = sha1($_POST["pwd"]);
      $res = $con->prepare("SELECT `email`,`password` from users where email = :email AND `password` = :pwd");
      $res->execute(array(':email'=>$email,':pwd'=>$pwd));
      $count =$res->rowCount();
      if ($count > 0) {
        $_SESSION["email"] = $_POST["email"];
        header("location:C:/xampp/Xampp/htdocs/xampp/Brief5/app/views/posts/viewPosts.php");
      }else {
        $Message = "username or password is incorrect";
      }
    }
  }
  header("location:C:/xampp/Xampp/htdocs/xampp/Brief5/controllers/viewPosts.controllers.php");
  }

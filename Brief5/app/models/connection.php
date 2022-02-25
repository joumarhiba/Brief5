<?php 
// session_start();
// ob_start();


// $con = new mysqli('localhost', 'root', '', 'community');

// if($con){
//     echo 'connection successfull !';
// }
// else
// {
//     die(mysqli_error($con));
// }

$dsn = 'mysql:host=localhost;dbname=community';
$user = 'root';
$pw = '';

try {
  $con = new PDO($dsn,$user,$pw);
  $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo 'heyyyyyyyyyu';
  
} catch (PDOException $e) {
  echo 'Connection Failed' . $e -> getMessage();
}



require_once("../controllers/login.controller.php");

// $db = new Main($conn);

















// class ConnectDb {

// //infos de cnx
// private $serverName;
// private $userName;
// private $password;
// private $dbName;


//     protected function connection(){
//         $this->serverName = "localhost";
//         $this->userName = "root";
//         $this->password = "";
//         $this->dbName = "community";
        
//          $conn = new mysqli($this->serverName, $this->userName, $this->password, $this->dbName);
//          return $conn;
//             }
// }



// class post extends ConnectDb{
//     public function getPost(){
//         $sql = "SELECT * FROM posts";
//         $result = $this->connection()->query($sql);
//         $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
//         return $data ; 
//     }
//     public function setPost( $photo, $titre,$desc){
//         $sql = "INSERT INTO posts(title,photo,description)
//         VALUES ( '$photo', '$titre','$desc')";
//         if(mysqli_query($this->connection(), $sql)){
//             header('location:viewPosts.php');
//         };
//     }
// }





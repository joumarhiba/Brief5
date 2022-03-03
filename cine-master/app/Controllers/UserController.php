<?php 

require_once './app/core/View.php';
require './app/Models/Base.php';

class UserController
{
    public function register()
    {
        if (isset($_POST['sign'])) {


            $login = $_POST['login'];
            $email = $_POST['email'];
            $password = $_POST['password'] ;
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $result = new Base(); 
            if(!empty($_POST['login']) && !empty($_POST['email']) && !empty($_POST['password'])){
                $result->insert("users",['login','email','password'],[$login,$email,$password]);
                        if ($result) {
                            session_start();
                            View::load("posts/viewPosts");
                        }else 
                        {
                            echo "something wrong with SIGN UP";
                        }
            }else {
                echo ' Erooooor';
            }
            
        }
    }



    public function profile(){
        if(isset($_POST['submit'])){
                if (!empty($_POST["email"]) && !empty($_POST["pwd"])) {
                    $email = $_POST["email"];
                    $pwd = $_POST["pwd"];
                    $conn = new Base();
                    $user = $conn->selectByEmail($email);
                    if($pwd==$user['password']){
                        session_start();
                        $_SESSION['id'] = $user['idUser'];
                        $this->viewPosts();
                    }else 
                    {
                        echo "Le nom d'utilisateur ou le mot de passe est incorrect";
                    }
                    
                }
        }
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        View::load("home");
    }


    
    
    // public function addPost()
    // {
    //     $photo ='';
    //     View::load('posts/addPost');
        // if (isset($_POST['add'])) {
            // $title = $_POST["titre"];
            // $photo = $_FILES["photo"]['name'];
            // $desc = $_POST["desc"];
            // $category = $_POST['categorie'];
            // $login = $_POST['login'];
            // $upload = "public/assets/".$photo;
          

    public function addPost()
    {
        View::load("posts/addPost");
    }
    public function savePost()
    {
        if (isset($_POST['add']))
        {
            session_start();
            $title = $_POST["titre"];
            $photo = $_POST["img"];
            $desc = $_POST["desc"];
            $idUser = $_SESSION['id'];
            $category = $_POST['categorie'];
            // $login = $_POST['login'];
            $upload = "/public/assets/".$photo;
            if (!empty($title) && !empty($desc) && !empty($category) && !empty($upload)) {
                $conn = new Base();
                 $post = $conn->Ajouter($title,$photo,$desc,$category,$idUser);
                 $this->viewPosts();
                 if($post){
                    View::load("posts/viewPosts"); 
                 }else{
                    echo "ereur d'ajout en DB methode est savePost";
                 }
            }
        }
        }
        public function viewPosts()
        {   
            $cnx = new Base();
            $aff = $cnx->selectAll();
            $data['posts']= $aff;
        
            View::load("posts/viewPosts",$data);//à ne pas changer
        }
           

public function delete(){
    if(isset($_POST['delete'])){
        $id= $_POST['idPost'];
        $s = new Base();
        $del =  $s->deleteById($id);
        if($del){
            $this->viewPosts();
        }
        else {
            echo 'errooooooooor de suppression ';
        }       
}
}

public function addCmt(){
    session_start();
   if (isset($_POST['cmt'])){
    $content = $_POST['comment'];
    $idUser= $_SESSION['id'];
    $idPost = $_POST['idPost'];
   }
   if(!empty($content)){
    $conn = new Base();
    $cmt = $conn->addCmt($idUser,$idPost,$content);
    // $this->viewCmts();
    if($cmt){
        $this->viewCmts();
     }
   }
}

public function viewCmts()
        {   
            $cnx = new Base();
            $aff = $cnx->showCmt();
            $data['cmt']= $aff;
        
            View::load("posts/viewPosts",$data);//à ne pas changer
            
        }


   




public function edit(){
    session_start();
    $id= $_POST['idPost'];
    $conn = new Base();
    if($conn->selectById($id)){
        $d['row'] = $conn->selectById($id);
        View::load("posts/modifierPost",$d);
    }
    else {
        echo " ereur dans l'edit";
    }
}


public function update()
{
    if(isset($_POST['enregister'])){
        session_start();
        $title = $_POST["titre"];
        $photo = $_POST["img"];
        $desc = $_POST["desc"];
        $category = $_POST['categorie'];
        $id = $_POST['idUser'];

        // $dataIst = Array ("titre" => $title,
        // "img"=>$photo, "desc"=>$desc,"categorie"=>$category
        // );

        $conn = new Base();
        if($conn->updatePost($title,$photo,$desc,$category,$id)){
           
            View::load('posts/viewPosts',['row'=> $conn->selectById]);
        }



}




}
}





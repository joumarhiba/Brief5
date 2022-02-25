<?php
$Message = '';
require_once ('../models/connection.php');
require_once('../controllers/login.controller.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/styles/styling.css">
    <title>Login Page</title>
</head>
<body>
	<img class="logo" src="/public/assets/new_logo-bl.png" alt="">
<div class="form-structor">
	<div class="signup">
		<h2 class="form-title" id="signup"><span>or</span>Sign up</h2>
		<div class="form-holder">
			<input type="text" id="name" class="input" placeholder="Name" />
			<input type="email" id="email" class="input" placeholder="Email" />
			<input type="password" id="pwd" class="input" placeholder="Password" />
		</div>
		<button class="submit-btn">Sign up</button>
	</div>
    <form method="post" id="frml" class="login slide-up" action="<?php echo $_SERVER['PHP_SELF'] ?>">
		<div class="center">
			<h2 class="form-title" id="login"><span>or</span>Log in</h2>
			<div class="form-holder">
				<input type="email" id="email" name="email" class="input" placeholder="Email" />
				<input type="password" id="pwd" name="pwd" class="input" placeholder="Password" />
			</div>
		
			<input type="submit" name="submit" class="submit-btn" value="Login">
	</form>
			 <?php
			 if(!empty($Message)){ ?>
					<div id="msg"><?php echo $Message ?></div>
			 <?php } ?>
               <?php if(isset($_GET['erreur'])){
                   $err = $_GET['erreur'];
                   if($err==1 || $err==2){
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                 }
				}
				 ?>
            
		</div>
	</div>
</div>


<script src="/public/scripts/scriptlogin.js"></script>
<script src="/public/scripts/regex.js"></script>
</body>
</html>
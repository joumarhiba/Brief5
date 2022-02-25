<?php

require_once('../models/connection.php');

    
$sql = "INSERT INTO `posts` (title,photo,`description`,category) VALUES ('".$titre."','".$photo.",".$desc.",".$ctgr."')";
$res = $this->conn -> exucute($sql);





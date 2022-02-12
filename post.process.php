<?php

include("./includes/class-autoload.inc.php");

$posts= new Posts;
if(isset($_POST['submit'])){
   $title= $_POST['post-title'];
   $body= $_POST['post-content'];
   $author= $_POST['post-author'];
   $posts->addPost($title, $body, $author);

   header("Location: index.php");

}elseif(isset($_POST['update'])){
   $id=$_GET['id'];
   $title= $_POST['post-title'];
   $body= $_POST['post-content'];
   $author= $_POST['post-author'];
   $posts->updatePost($title, $body, $author, $id);

   header("Location: index.php");

}elseif($_GET['send'] =='del'){
   $id=$_GET['id'];
   $posts->deletePost($id);

   header("Location: index.php");
}
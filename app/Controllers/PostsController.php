<?php
require ('../../bootstrap.php');
   $posts=new \App\Models\posts();
if(isset($_GET['post_search'])){
    if(isset($_SESSION['logged'])){
        $posts=$posts->search($_GET['title']);
        $_SESSION['posts']=json_encode($posts);
        header('Location:' . '/Backend-Test/searchresults.php' . '');
    }else{
        $posts->errors[]='Morate biti ulogovani';
        $_SESSION['errors']=$posts->errors;
        header('Location:' . '/Backend-Test/searchresults.php' . '');
    }

}?>



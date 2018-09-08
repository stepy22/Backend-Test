<?php
require ('Header.php'); ?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
        <form class="navbar-form navbar-left" action="app/Controllers/PostsController.php">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="Search">
            </div>
            <input type="submit" name="post_search" class="btn btn-default">
        </form>
    </div>
</nav>

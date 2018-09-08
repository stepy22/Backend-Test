<?php
require ('bootstrap.php');
require ('Includes/NavBar.php');
?>

<?php if(isset($_SESSION['errors'])){ ?>
<?php foreach (json_decode($_SESSION['errors']) as $er){ ?>
    <div class="alert alert-danger"><?php echo $er; ?></div>
     <?php }//end foreach ?>
    <?php unset($_SESSION['errors']); //error unset ?>

<?php } //end if ?>

<?php if(isset($_SESSION['succes'])){ ?>
    <div class="alert alert-success"><?php echo $_SESSION['succes']; ?></div>

    <?php
    unset($_SESSION['succes']); //success unset
} //end if ?>



<div class="register">
<div class="container">
    <div class="row main">
        <div class="panel-heading">
            <div class="panel-title text-center">
                <h1 class="title">Register</h1>
                <hr />
            </div>
        </div>
        <div class="main-login main-center">
            <form class="form-horizontal" method="post" action="app/Controllers/AuthController.php">

                <div class="form-group">
                    <label for="name" class="cols-sm-2 control-label">Your Name</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="cols-sm-2 control-label">Your Email</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                            <input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="cols-sm-2 control-label">Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password1" id="password"  placeholder="Enter your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                    <div class="cols-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" name="password2" id="confirm"  placeholder="Confirm your Password"/>
                        </div>
                    </div>
                </div>

                <div class="form-group ">
                    <input type="submit" name="register-submit" class="btn btn-primary btn-lg btn-block login-button">
                </div>
                <div class="login-register">
                    <a href="index.php">Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>

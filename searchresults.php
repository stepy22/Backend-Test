
<?php
require ('bootstrap.php');
require ('Includes/NavBar.php');
?>
<?php if(isset($_SESSION['errors']) && $_SESSION['errors'] != null){ ?>
    <?php foreach (json_decode($_SESSION['errors']) as $er){ ?>
        <div class="alert alert-danger"><?php echo $er; ?></div>
    <?php }//end foreach ?>
    <?php unset($_SESSION['errors']); //error unset ?>

<?php } //end if ?>

<!--Posts come for post controller in session, this is bad way!-->
<?php if(isset($_SESSION['logged'])){ ?>
<?php if(isset($_SESSION['posts'])){ ?>
     <?php
     $posts=json_decode($_SESSION['posts']);
    ?>
    <?php foreach ($posts as $post){ ?>
        <h1><?php echo $post->title; ?></h1>
        <p><?php echo $post->text; ?></p>
  <?php } ?>
    <?php
    unset($_SESSION['posts']); //success unset
} //end if ?>
<?php }else{ ?>
 <h1>Morate se ulogovati</h1>
<?php } ?>

<?php 
/**
 * Template Name: Espace Pro
 */
session_start();
get_header();
include("conf/db.php"); ?>



<!--<form method="post" action="sign_in.php">
	<label for="sign-in-email">Email</label>
	<input type="email" name="email" id="sign-in-email" placeholder="Votre e-mail">
<<input type="text" name="password" id="Test_random_char" style="display:none;">
	<button type="submit">S'inscrire</button>
</form>

<?php if (array_key_exists('errors', $_SESSION)) : ?>
    <p><?= implode('<br>', $_SESSION['errors']);?></p>
    <?php  unset($_SESSION['errors']);
    endif; ?>

    <?php if (array_key_exists('success', $_SESSION)) : ?>
    <p>Votre message a bien été envoyé.</p>
    <?php  unset($_SESSION['success']);
    endif; 
?> -->

<!-- <p id="Test_random_number" style="visibility:hidden;"></p> -->

<script>
/*var test = Math.floor((Math.random() * 100000000) + 10000000);
document.getElementById("Test_random_number").innerHTML = test;*/
</script>

<script>
/*var text = "";
var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
for( var i=0; i < 10; i++ )
{
	text += possible.charAt(Math.floor(Math.random() * possible.length));
}
document.getElementById("Test_random_char").value = text;*/
</script>

<button data-target="#sign_in" data-toggle="modal" class="btn btn-default">S'inscrire</button>

<div class="modal fade in" id="sign_in" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" method="post" action="sign_in.php">
                <div class="modal-header">
                    <h3>Inscription</h3>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                    <?php if (array_key_exists('errors', $_SESSION)) : ?>
                        <p><?= implode('<br>', $_SESSION['errors']);?></p>
                        <?php  unset($_SESSION['errors']);
                        endif; ?>

                        <?php if (array_key_exists('success', $_SESSION)) : ?>
                        <p>Votre message a bien été envoyé.</p>
                        <?php  unset($_SESSION['success']);
                        endif; 
                    ?>
                    </div>
                    <div class="form-group">
                        <label for="sign-in-email" class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-9">
                            <input type="email" class="form-control" name="email" id="sign-in-email" placeholder="Votre e-mail">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Quitter</a>
                    <input class="btn btn-primary" type="submit" value="S'inscrire">
                </div>
            </form>
        </div>
    </div>
</div>

<?php get_footer(); ?>


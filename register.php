<?php 
session_start();
include("conf/db.php"); ?>


<form method="post" action="sign_in.php">
	<label for="sign-in-email">Email</label>
	<input type="email" name="email" id="sign-in-email" placeholder="Votre e-mail">
<!--	<input type="text" name="password" id="Test_random_char" style="display:none;"> -->
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
?>

<p id="Test_random_number" style="visibility:hidden;"></p>

<script>
var test = Math.floor((Math.random() * 100000000) + 10000000);
document.getElementById("Test_random_number").innerHTML = test;
</script>

<script>
var text = "";
var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
for( var i=0; i < 10; i++ )
{
	text += possible.charAt(Math.floor(Math.random() * possible.length));
}
document.getElementById("Test_random_char").value = text;
</script>


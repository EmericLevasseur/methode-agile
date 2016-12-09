<?php 
session_start();
include("conf/db.php"); ?>

<form method="post" action="log_in.php">
	<label for="log-in-email">Email</label>
	<input type="email" name="email" id="log-in-email" placeholder="Votre e-mail">
	<label for="log-in-password">Mot de passe</label>
	<input type="password" name="password" id="log-in-password" placeholder="Votre mot de passe">
	<button type="submit">Se connecter</button>
</form>

<?php if (array_key_exists('errors', $_SESSION)) : ?>
    <p><?= implode('<br>', $_SESSION['errors']);?></p>
    <?php  unset($_SESSION['errors']);
    endif; ?>

    <?php if (array_key_exists('success', $_SESSION)) : ?>
    <p>Vous êtes connecté(e).</p>
    <?php  unset($_SESSION['success']);
    endif; 
?>

<p>Liste des membres :</p>
<?php
$request = $db->prepare("SELECT members.id, email, is_admin, password, inscription_date FROM members");
    $request->execute
    (
        array
        (
           
        )
    );
    while ($data = $request->fetch())
    {
        ?>
        <table>
        	<tr>
                <th><h4>ID : </h4></th>
                <th><h4>E-mail : </h4></th>
                <th><h4>Mot de passe : </h4></th>
            </tr>
            <tr>
            	<th><?php echo $data["id"]; ?></th>
            	<th><?php echo $data["email"]; ?></th>
            	<th><?php echo $data["password"]; ?></th>
            </tr>
        </table>
        <?php
    }
?>

<style>
th
{
	width : 30vw;
}
</style>
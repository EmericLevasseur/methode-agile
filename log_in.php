<?php 
session_start();
include("conf/db.php"); 

$errors =[];

if (!array_key_exists('email', $_POST) || $_POST['email'] == '') {

	$errors['email'] = "Veuillez indiquer votre Email.";
}

if (!array_key_exists('password', $_POST) || $_POST['password'] == '') {

	$errors['password'] = "Veuillez entrer votre mot de passe.";
}

if (!empty($errors)) 
{
	$_SESSION['errors'] = $errors;
	header('Location: login.php');
}
else
{
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);
$request = $db->prepare("SELECT id FROM members WHERE email LIKE :email AND password = :password");
            $request->execute
            (
                array
                (
                    "email" => $email,
                    "password" => $password
                )
            );
            $members = $request->fetchAll();
            if(sizeof($members) > 0)
            {
                $id_member = $members[0]["id"];
                $_SESSION["id_member"] = $id_member;
                $_SESSION['success'] = 1;
            }
            else
            {
            	$errors['email'] = "Votre Email ou mot de passe ne semblent pas être bons";
            	$_SESSION['errors'] = $errors;
            }
}
header('Location: login.php');

?>

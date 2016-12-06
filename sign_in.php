<?php 
session_start();
include("conf/db.php"); 

$errors =[];


$seed = str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ'.'0123456789'); 
shuffle($seed); 
$rand = '';
foreach (array_rand($seed, 10) as $k) {$rand .= $seed[$k];}



if (!array_key_exists('email', $_POST) || $_POST['email'] == '') {

	$errors['email'] = "Veuillez indiquer votre Email.";
}

if (!empty($errors)) 
{
	$_SESSION['errors'] = $errors;
	header('Location: register.php');
}
else
{
$email = htmlspecialchars($_POST["email"]);
$password = $rand;
$request = $db->prepare("SELECT id FROM members WHERE email LIKE :email");
                $request->execute
                (
                    array
                    (
                        "email" => $email
                    )
                );
                $members = $request->fetchAll();
                if(sizeof($members) == 0)
                {
                    $request = $db->prepare("INSERT INTO members (password, email, inscription_date, is_admin) VALUES (:password, :email, NOW(), 0)");
                    $request->execute
                    (
                        array
                        (
                            "password" => $password,
                            "email" => $email
                        )
                    );
                    $_SESSION['success'] = 1;
                    $object = "Votre mot de passe pour Betrayal the Martyrs";
					$message = "Vous avez demandé un accès à notre site. \n
								Email : ". $_POST['email'] .
								"\n Mot de passe : " . $password;
					$headers = $_POST['email'];

					mail('alexcinq5555@yahoo.fr', $object, $message, $headers);
                }
                else
                {
                	$errors['email'] = "L'Email que vous venez de taper existe déjà dans notre base de données.";
            		$_SESSION['errors'] = $errors;
                }
	
	header('Location: register.php');

}

?>

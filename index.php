
<?php
$errors = [];

if ($_POST) {

	if (empty($_POST['user_name']))
	{
		
		$errors['name1'] = "Votre nom est requis";
	}

	if (strlen($_POST['user_name']) < 3)
	{
		$errors['name2'] = "Votre nom doit avoir plus de 2 lettres";
	}

	if (empty($_POST['user_firstname']))
	{
		$errors['firstname1'] = "Votre prénom est requis";
	}

	if (strlen($_POST['user_firstname']) < 3)
	{
		$errors['firstname2'] = "Votre prénom doit avoir au moins 2 lettres";
	}

	if (empty($_POST['user_mail']))
	{
		$errors['mail1'] = "Votre mail est requis";
	}

	if (!filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL))
	{
		$errors['mail2'] = "Le mail n'a pas le bon format";
	}

	if (empty($_POST['user_phone']))
	{
		$errors['phone1'] = "Vous devez indiquer votre numéro";
	}

	if (empty($_POST['user_message']))
	{
		$errors['message1'] = "Vous devez écrire un message";
	}






	if (count($errors) == 0)
	{
		header("location: succes.php");
		exit();
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>phpForms</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div>
		<form action="index.php" method="post">
			<div>
				<label for="name">Nom :</label>
				<input required type="text" name="user_name" id="name" placeholder="Nom" value="<?php if(isset($_POST['user_name'])) echo $_POST['user_name']; ?>">
				<p style="color: red"><?php if (isset($errors['name1']))  echo $errors['name1'];   ?></p>
				<p style="color: red"><?php if (isset($errors['name2'])) echo $errors['name2'];  ?></p>
			</div>
			<div>
				<label for="firstname">Prénom :</label>
				<input required type="text" name="user_firstname" id="firstname" placeholder="Prénom" value="<?php if(isset($_POST['user_firstname'])) echo $_POST['user_firstname']; ?>">
				<p style="color: red"><?php if (isset($errors['firstname1']))  echo $errors['firstname1'];   ?></p>
				<p style="color: red"><?php if (isset($errors['firstname2'])) echo $errors['firstname2'];  ?></p>
			</div>
			<div>
				<label for="mail">E-mail :</label>
				<input required type="email" name="user_mail" id="mail" placeholder="E-mail" value="<?php if(isset($_POST['user_mail'])) echo $_POST['user_mail']; ?>">
				<p style="color: red"><?php if (isset($errors['mail1']))  echo $errors['mail1'];   ?></p>
				<p style="color: red"><?php if (isset($errors['mail2'])) echo $errors['mail2'];  ?></p>
			</div>
			<div>
				<label for="phone">Téléphone :</label>
				<input required type="tel" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name="user_phone" id="phone" placeholder="Telephone" value="<?php if(isset($_POST['user_phone'])) echo $_POST['user_phone']; ?>">
				<p style="color: red"><?php if (isset($errors['phone1']))  echo $errors['phone1'];   ?></p>
			</div>
			<div>
				<label for="subject">Sujet :</label>
				<select name="user_subject" id="subject">
					<option>More info</option>
					<option>Refund demand</option>
					<option>Appointment demand</option>
				</select>
			</div>
			<div>
				<label for="msg">Message :</label>
				<textarea required  id="msg" name="user_message" placeholder="Entrez votre texte ici"><?php if(isset($_POST['user_name'])) echo $_POST['user_name']; ?></textarea>
				<p style="color: red"><?php if (isset($errors['message1']))  echo $errors['message1'];   ?></p>
			</div>
			<div class="button">
				<button type="submit">Envoyer le message</button>
			</form>
		</div>

	</body>

	</html
<!DOCTYPE html>
<html>
<head>
	<title>phpForms</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="succes">
		<p>Votre demande à bien été enregistrée !<p>
	</div>

	<div>
		<form action="index.php" method="post">
			<div>
				<label for="name">Nom :</label>
				<input type="text" name="user_name" id="name" placeholder="Nom" required>
			</div>
			<div>
				<label for="firstname">Prénom :</label>
				<input type="text" name="user_firstname" id="firstname" placeholder="Prénom" required>
			</div>
			<div>
				<label for="mail">E-mail :</label>
				<input type="email" name="user_mail" id="mail" placeholder="E-mail" required>
			</div>
			<div>
				<label for="phone">Téléphone :</label>
				<input type="tel" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" name="user_phone" id="phone" placeholder="Telephone" required>
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
				<textarea  id="msg" name="user_message" placeholder="Entrez votre texte ici" required></textarea>
			</div>
			<div class="button">
				<button type="submit">Envoyer le message</button>
			</form>
		</div>



	</body>

	</html
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Contactez-nous </title>
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" type="text/css" href="accueil.css">
</head>
<body>

<?php include 'Include/header.php'; ?>

<?php
// Vérifier si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Adresse email à laquelle envoyer le message
    $destinataire = "votre_email@example.com";

    // Sujet du message
    $sujet = "Nouveau message depuis le formulaire de contact";

    // Construire le corps du message
    $contenu = "Nom: $nom\n";
    $contenu .= "Email: $email\n";
    $contenu .= "Message: $message\n";

    // Envoi du message
    $envoi = mail($destinataire, $sujet, $contenu);

    // Vérifier si le message a été envoyé avec succès
    if ($envoi) {
        echo "<p>Votre message a été envoyé avec succès. Nous vous répondrons bientôt.</p>";
    } else {
        echo "<p>Désolé, une erreur s'est produite lors de l'envoi du message. Veuillez réessayer plus tard.</p>";
    }
}
?>

<h2>Contactez-nous</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nom">Nom :</label><br>
    <input type="text" id="nom" name="nom" required><br><br>

    <label for="email">Email :</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Message :</label> <br>
    <textarea id="message"> </textarea>
    
    <input type="submit" value="Envoyer">
    <br> <br>
<a href="accueil.php" class="button back-to-home">Retour à l'accueil</a>

</form>

<?php include 'Include/footer.php'; ?>

</body>
</html>
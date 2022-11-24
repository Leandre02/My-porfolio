<?php
    /**
     * Instructions : 
     * 
     * - Copiez se fichier au même niveau que votre fichier index.html sur le serveur de votre hébergeur.
     * - Dans votre formulaire de contact, l'attribut action va être le nom de ce fichier et method doit être POST
     *   <form action="sendmail.php" method="post">
     * - Encore dans le formulaire, utilisez des inputs avec des attributs name qui correspondent à ce qu'il y a 
     *   plus bas dans les lignes $_POST[""] (courriel, sujet, contact, message).
     * - Modifiez la valeur de la variable $courrielDestinataire pour votre adresse de réception.
     * - Entrez une adresse de redirection vers où vous voulez que le visiteur soit redirigé après l'envoi du courriel.
     * - Quand vous allez cliquer sur submit, ce fichier va être exécuté et le courriel envoyé. Les courriels qui sont 
     *   envoyés de cette façon risque de se retrouver dans votre boîte de pourriel.
     */

    // Le courriel va être envoyé seulement si une adresse courriel d'origine est fournie dans le formulaire
    // Utilisez un input avec l'attribut name="courriel"
    if (isset($_POST['courriel'])) {

        /**
         * Toutes les valeurs qui se retrouve dans les "bracket" suivant $_POST doivent être égale à une valeur de 
         * l'attribut name d'un input de votre formulaire si vous voulez les utiliser. J'ai mis des valeurs par défaut 
         * à chacune au cas où vous ne les utiliseriez pas.
         */
        $courrielOrigine = $_POST['courriel'];
        $sujet = isset($_POST['sujet']) ? $_POST['sujet'] : 'Demande de contact envoyé depuis mon site';
        $message = isset($_POST['contact']) ? "Nom : " . $_POST['contact'] . "\r\n\r\n" : '';
        $message .= isset($_POST['message']) ? $_POST['message'] : '';

        // Entrez ici l'adresse courriel vers laquelle vous voulez envoyer le formulaire
        $courrielDestinataire = "frechette.mathieu@cegepvicto.ca";

        $headers = "From: " . $courrielOrigine;

        mail($courrielDestinataire,$sujet,$message,$headers);

        // Adresse de redirection après l'envoi du courrier
        header("Location: https://mondomaine.ca");
    }

?>
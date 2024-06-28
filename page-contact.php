<?php get_header() ?>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/contact.scss" />

<div class="container-contact">
    <figure>
        <img src="<?php bloginfo('template_url') ?>/assets/images/photo_contact.JPEG" alt="salon Lovely Nail's by Prisci">
    </figure>
    <div class="wrapper-content">
        <div class="content">
            <h1>Contactez-nous</h1>
            <form method="post" id="form_contact">
                <div class="wrapper-form-item">
                    <div class="form-item">
                        <label for="nom">Nom *</label>
                        <input type="text" name="nom" id="nom" required placeholder="Saisir votre nom">
                    </div>
                    <div class="form-item">
                        <label for="prenom">Prénom *</label>
                        <input type="text" name="prenom" id="prenom" required placeholder="Saisir votre prénom">
                    </div>
                </div>

                <div class="form-item">
                    <label for="email">E-mail *</label>
                    <input type="email" name="email" id="email" required placeholder="Saisir votre adresse mail">
                </div>
                <div class="form-item">
                    <label for="message">Message *</label>
                    <textarea name="message" id="message" required placeholder="Saisir votre message"></textarea>
                </div>
                <div class="wrapper-btn"><input type="submit" id="btn-envoyer" value="ENVOYER" name="submit" class="btn"></div>


            </form>
        </div>
    </div>



</div>
<div class="wrapper-infos">
    <div class="container-horaires">
        <h2>Horaires d'ouverture</h2>
        <div class="content-horaires">
            <div class="item">Lundi<span>09:00 - 18:00</span></div>
            <div class="item">Mardi<span>09:00 - 18:00</span></div>
            <div class="item">Mercredi<span>09:00 - 12:00</span></div>
            <div class="item">Jeudi<span>09:00 - 17:30</span></div>
            <div class="item">Vendredi<span>09:00 - 17:30</span></div>
            <div class="item">Samedi<span>09:00 - 13:00</span></div>
            <div class="item">Dimanche<span>Fermé</span></div>
        </div>
    </div>
    <div class="container-iframe">
        <h2>Retrouvez nous ici</h2>
        <iframe style="border:0" loading="lazy" allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBWNYkxhbfec2Z-TLebMwgJXgW_cHIyVAc
    &q=Lovely+Nail's+by+Prisci,Saint-Nicolas-de-Bourgueil">
        </iframe>
    </div>

</div>

<?php
if (isset($_POST['nom']) and !empty($_POST['nom']) and isset($_POST['prenom']) and !empty($_POST['prenom']) and isset($_POST['email']) and !empty($_POST['email']) and isset($_POST['message']) and !empty($_POST['message'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $to  = 'alexisdu492@gmail.com';


        /*$headers = 'From: contact@angersloirecampus.fr' . "\r\n" .
            'Reply-To:'. $_POST['mail'] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();*/
        date_default_timezone_set("Europe/Paris");

        $sujet = 'Contact Site web ' . $_POST['email'] . date("h:i:sa");
        $msg = stripcslashes(

            $_POST['message'] .
                "\r\n\r\n Information de la personne" .
                "\r\nNom : " . $_POST['nom'] .
                "\r\nPrenom : " . $_POST['prenom'] .
                "\r\nEmail : " . $_POST['email'] .
                "\r\n\r\nCe mail est envoyer à la suite d'une prise de contact sur le site web."
        );
        $headers = array(
            'From: Lovely Nail\'s by Prisci <contact@lovelynails.fr>',
            'Reply-To: <' . $_POST['email'] . '>',
        );
        $retour = wp_mail($to, $sujet, $msg, $headers);
        if ($retour) {
            echo '<div id="msg_envoie">'
                . '<p>Votre message a bien été envoyé.</p>'
                . '</div>';
        } else {
            echo '<div id="msg_erreur">'
                . '<p>Gros bug</p>'
                . '</div>';
        }
    } else {
        echo '<div id="msg_erreur">'
            . '<p>Message non envoyé !<br>Champs non saisie 1.</p>'
            . '</div>';
    }
}
?>
<?php get_footer() ?>
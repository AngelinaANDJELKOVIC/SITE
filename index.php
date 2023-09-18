<?php get_header() ?>

<body>
    <main>
        <!--BANNER-->
        <section id="slide1">
            <div class="slide_inside">
                <div class="banner">
                    <img class="bannerimg" src="wp-content/themes/ANDANG/pv/Angelina.png" alt="logo">
                </div>
                <video autoplay loop muted id="idvideo">
                    <source type="video/mp4" src="https://angelinaandjelkovic.com/wp-content/themes/ANDANG/pv/shutterstock_1086820415_AdobeExpress.mp4">
                </video>
            </div>
            <!--COURTE PRÉSENTATION CV + LM-->
            <div id="moi" class="section-fade-in center sectionone">
                <div class="floating">
                    <div id="typedtext" class="hidden">
                    </div>
                    <br>
                    <br>
                    <div class="aller">
                        <p>ET J’AI SORTI MA TÊTE DE L’EAU POUR FAIRE QUELQUE CHOSE QUE J’AIME,
                            LE DÉVELOPPEMENT.</p>
                        <p>EN QUÊTE D’APPRENDRE ET ÉGALEMENT À VOTRE SERVICE.</p>
                    </div>
                    <br>
                    <br>
                    <a class="CV" href="wp-content/themes/ANDANG/pv/ANGELINA+ANDJELKOVIC+CV.pdf" download="ANGELINA+ANDJELKOVIC+CV.pdf">SI TU CLIQUES, TU AURAS MON CV</a>
                    <br>
                    <br>
                    <a class="CV" href="wp-content/themes/ANDANG/pv/ANGELINA+ANDJELKOVIClm.pdf" download="ANGELINA+ANDJELKOVIClm.pdf">ICI MA LETTRE DE MOTIVATION</a>
                </div>
            </div>
        </section>
        <!--MES COMPÉTENCES-->
        <section id="competence" class="section-fade-in hero-section">
            <h2 class="comp">“Il faut toujours jouer les compétences quand on a des cartes gagnantes.”</h2>
            <br>
            <div class="card-grid">
                <a class="card one zoom-in-out-box" href="#">
                    <div class="card__background" style="background-image: url(https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582748_640.png)">
                    </div>
                    <div class="card__content">
                    </div>
                </a>
                <a class="card two zoom-in-out-box" href="#">
                    <div class="card__background" style="background-image: url(https://cdn.pixabay.com/photo/2017/08/05/11/16/logo-2582747_1280.png)">
                    </div>
                    <div class="card__content">
                    </div>
                </a>
                <a class="card three zoom-in-out-box" href="#">
                    <div class="card__background" style="background-image: url(https://www.1min30.com/wp-content/uploads/2017/03/logo-WordPress.jpg)">
                    </div>
                    <div class="card__content">
                    </div>
                </a>
                <a class="card four zoom-in-out-box" href="#">
                    <div class="card__background" style="background-image: url(http://s3.amazonaws.com/gt7sp-prod/decal/20/89/27/5125114039554278920_1.png)">
                    </div>
                    <div class="card__content">
                    </div>
                    </li>
                    <a class="card five zoom-in-out-box" href="#">
                        <div class="card__background" style="background-image: url(https://cdn3.iconfinder.com/data/icons/popular-services-brands/512/php-512.png)">
                        </div>
                        <div class="card__content">
                        </div>
                    </a>
            </div>
        </section>
        <!--PROJETS-->
        <h2 id="projet" class="projeth2">"Il n'y a qu'une façon d'apprendre, c'est par l'action."</h2>
        <?php echo do_shortcode('[tlpportfolio id="55" title="Vidéos"]') ?>
        <!--CONTACT-->
        <section id="contact" class="section-fade-in">
            <div class="container">
                <div class="title">
                    <h2 id="contact">CONTACT</h2>
                </div>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["message"]) && isset($_POST["sujet"]) && isset($_POST["number"])) {
                        // Récupérer les données du formulaire
                        $nom = $_POST["nom"];
                        $email = $_POST["email"];
                        $message = $_POST["message"];
                        $sujet = $_POST["sujet"];
                        $number = $_POST["number"];
                        echo

                        //détails de l'envoi de courrier électronique
                        $destinataire = "angelina.andjelkovic1999@gmail.com";
                        $sujet = "Nouveau message de formulaire de contact";
                        $contenu = "Nom: $nom\n";
                        $contenu .= "Email: $email\n\n";
                        $contenu .= "Message:\n$message\n";

                        $headers = "From: $nom <$email>";

                        if (mail($destinataire, $sujet, $contenu, $headers)) {
                            echo "Votre message a été envoyé avec succès.";
                        } else {
                            echo "Une erreur s'est produite lors de l'envoi du message.";
                        }
                    }
                }
                ?>
                <form action="#" method="post">
                    <input type="text" name="nom" placeholder="Entrer votre nom..." required="">
                    <input type="email" name="email" placeholder="Entrer votre email..." required="">
                    <input type="text" name="sujet" placeholder="Entrer votre sujet..." required="">
                    <input type="text" name="number" placeholder="Entrer votre numéro de téléphone..." required="">
                    <textarea name="message" placeholder="Entrer votre message..."></textarea>
                    <button type="submit">Envoyer</button>
                </form>
            </div>
        </section>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    </main>



    <?php get_footer() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyril Fauveau - Portfolio</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="aos-master/dist/aos.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cardo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
  </head>
  <body>

    <header class="block_header">
      <div class="inner">

        <a href="#presentation" class="logo"><strong>Cyril</strong></a>

        <nav class="main_menu">
          <ul>
            <li><a href="#aboutme">A propos de moi</a></li>
            <!-- <li><a href="#cursus">Parcours</a></li> -->
            <li><a href="#projects">Projets</a></li>
            <li><a href="#skills">Compétences</a></li>
            <li><a href="#cv">CV</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>

      </div>
    </header>

    <main class="block_main">

      <section id="presentation" class="block_presentation">
        <div class="inner">

          <h1 class="title" data-aos="fade-up"><strong>Cyril Fauveau</strong></h1>

          <p class="presentation" data-aos="fade-up" data-aos-delay="300">
            Bienvenue sur mon <strong>Portfolio</strong> !
          </p>

        </div>
      </section>

      <section id="aboutme" class="block_aboutme">
        <div class="inner">
          <h2 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="center-bottom">A PROPOS DE MOI</h2>
          <div class="left"></div>
          <p class="text" data-aos="fade-left" data-aos-delay="200">
            Bonjour !<br>
            Je m'appelle Cyril Fauveau,
            j'ai 19 ans et je m'intéresse au développement web
            depuis quelques années.<br>
            Étudiant en 2ème année à Angers à MyDigitalSchool,
            j'ai pu apprendre plusieurs langages et travailler
            sur différents projets afin de développer mes compétences.
          </p>
        </div>
      </section>

      <!-- <section id="cursus" class="block_cursus">
        <div class="inner">
          <h2 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="center-bottom">MON PARCOURS</h2>
        </div>
      </section> -->

      <section id="projects" class="block_projects">
        <div class="inner">
          <h2 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="center-bottom">PROJETS</h2>
          <div class="carousel">
            <figure class="image">
              <img src="img/futuroid.jpg" alt="futuroid">
              <figcaption class="legend"><a href="https://futuroid.io/" target="_blank" rel="noopener noreferrer">Futuroid</a></figcaption>
            </figure>
          </div>
          <div class="carousel_buttons">
            <div class="button"></div>
            <div class="button active"></div>
            <div class="button"></div>
          </div>
        </div>
      </section>

      <section id="skills" class="block_skills">
        <div class="inner">
          <h2 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="center-bottom">COMPETENCES</h2>
          <div class="frontend">
            <h3 class="title-3">Frontend</h3>
            <ul class="list">
              <li>
                <div class="progress-circle p95 over50">
                  <span>95%</span>
                  <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                  </div>
                </div>
                <span class="skill">HTML/CSS</span>
              </li>
              <li>
                <div class="progress-circle p70 over50">
                  <span>70%</span>
                  <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                  </div>
                </div>
                <span class="skill">Bootstrap/Sass</span>
              </li>
              <li>
                <div class="progress-circle p80 over50">
                  <span>80%</span>
                  <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                  </div>
                </div>
                <span class="skill">Javascript</span>
              </li>
              <li>
                <div class="progress-circle p70 over50">
                  <span>70%</span>
                  <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                  </div>
                </div>
                <span class="skill">Jquery</span>
              </li>
            </ul>
          </div>
          <div class="backend">
            <h3 class="title-3">Backend</h3>
            <ul class="list">
              <li>
                <div class="progress-circle p90 over50">
                  <span>90%</span>
                  <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                  </div>
                </div>
                <span class="skill">PHP/Mysql</span>
              </li>
              <li>
                <div class="progress-circle p70 over50">
                  <span>70%</span>
                  <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                  </div>
                </div>
                <span class="skill">CodeIgniter</span>
              </li>
            </ul>
          </div>
          <div class="other">
            <h3 class="title-3">Autres</h3>
            <ul class="list">
              <li>
                <div class="progress-circle p60 over50">
                  <span>60%</span>
                  <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                  </div>
                </div>
                <span class="skill">Angular/Ionic</span>
              </li>
              <li>
                <div class="progress-circle p70 over50">
                  <span>70%</span>
                  <div class="left-half-clipper">
                    <div class="first50-bar"></div>
                    <div class="value-bar"></div>
                  </div>
                </div>
                <span class="skill">Git</span>
              </li>
            </ul>
          </div>
        </div>
      </section>

      <section id="cv" class="block_cv">
        <div class="inner">
          <h2 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="center-bottom">MON CV</h2>
          <figure class="image">
            <img src="img/Fauveau-Cyril_CV.png" alt="cv">
            <figcaption class="legend">
              <a href="img/Fauveau-Cyril_CV.png" download>Télécharger mon CV</a>
            </figcaption>
          </figure>
        </div>
      </section>

      <section id="contact" class="block_contact">
        <div class="inner">
          <h2 class="subtitle" data-aos="fade-up" data-aos-anchor-placement="center-bottom">CONTACT</h2>
          <form class="block_form" action="index.php" method="post">
            <label for="name">Votre nom</label><input id="name" type="text" name="name">
            <label for="mail">Votre e-mail</label><input id="mail" type="email" name="mail">
            <label for="message">Votre message</label><textarea id="message" rows="5" name="message"></textarea>
            <input class="send" type="submit" value="Envoyer">
          </form>
          <div class="informations">

          </div>
        </div>
      </section>
    </main>

    <script src="aos-master/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

  </body>
</html>

<?php

if (!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['message'])) {

  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $message = $_POST['message'];

  $to      = 'fauveaucyril@gmail.com';
  $subject = $mail;
  $headers = 'From: webmaster@example.com' . "\r\n" .
  'Reply-To: webmaster@example.com' . "\r\n" .
  'X-Mailer: PHP/' . phpversion();

  mail($to, $subject, $message, $headers);
}

?>

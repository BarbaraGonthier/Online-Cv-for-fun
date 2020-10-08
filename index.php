<?php
include ('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV de Bob O'ski</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fredericka+the+Great&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Akronim&&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="menu-items">
                <div class="desktop-menu" id="menu">
                    <a href="#home" title="Accueil">Accueil</a>
                    <a href="#experience" title="Expérience">Expérience</a>
                    <a href="#education" title="Formation">Formation</a>
                    <a href="#skills" title="Compétences">Compétences</a>
                    <a href="#interests" title="Centres d'intérêts">Centres d'intérêts</a>
                    <a href="#contact" title="Contact">Contact</a>
                    <a href="#home" class="close-burger" title="Fermer le menu">X</a> 
                </div>
                <a href="#menu" class="burger" title="Ouvrir le menu">
                    <div></div>
                    <div></div>
                    <div></div>   
                </a>
            </div>
            <div class="download-cv">
                <a href="CV-Bob-Roborovski.pdf"
                target="_blank"
                download="CV-Bob-Roborovski.pdf"
                title="Télécharger le CV en pdf">Télécharger le CV en pdf</a>
            </div>
            <div class="download-cv-mobile">
                <a href="CV-Bob-Roborovski.pdf"
                target="_blank"
                download="CV-Bob-Roborovski.pdf"
                title="Télécharger le CV en pdf">Pdf</a>
            </div>
        </nav>
    </header>
    <section id="home">
        <div class="ball-left">
            <img src="bubbles/Titre_grignoteur.png" alt="Titre grignoteur">
            <img src="bubbles/Maintenance.png" alt="Maintenance de réseaux câblés">
        </div>
        <div class="presentation">
            <img src="./bob.png" alt="Photo de Bob" class="profile-picture">
            <h1>Bob O'ski</h1>
            <h3>Rongeur de câbles</h3>
        </div>
        <div class="ball-right">
            <img src="bubbles/Dynamique.png" alt="Dynamique">
            <img src="bubbles/Reactif.png" alt="Réactif">
        </div>
        <div class="ball-mobile">
            <img src="bubbles/Titre_grignoteur.png" alt="Titre grignoteur">
            <img src="bubbles/Maintenance.png" alt="Maintenance de réseaux câblés">
            <img src="bubbles/Dynamique.png" alt="Dynamique">
            <img src="bubbles/Reactif.png" alt="Réactif">
        </div>
    </section>
    <section id="experience" class ="sectionExperiences">
<?php
    foreach ($experiences as $experience => $job) {
    ?>
        <div class="experiencesBloc">
                <div class=" element1">
                    <img src="education-icons/certificate.png" alt="job_image"/>
                    <h3> <?=$job['job']?> <br/>
                        <?=$job['date']?> <br/>
                        <?=$job['company']?> </h3>
                    <p classe="jobDescription"> <?=$job['description']?></p>
                    <p class="sentence"><?=$job['sentence']?> </p>
                </div>
                <div class="element2">
                    <img src="education-icons/certificate.png" alt="job_image"/>
                    <h3> <?=$job['job']?> <br/>
                        <?=$job['date']?> <br/>
                        <?=$job['company']?> </h3>
                    <p class="jobDescription"> Mes missions : Résoudre des algorithmes très complexes (parcours d'obstacles, tunnels, roue), avec parcours d'explorations très poussés afin de trouver les failles de sécurité d'une cage. Sans surprise, j'étais le meilleur !</p>
                    <p class ="sentence"> Le labyrinthe en bois ? Trop facile ! </p>
                </div>
                <div class="element3">
                    <img src="education-icons/certificate.png" alt="job_image"/>
                    <h3> TESTEUR DE CAGES <br/>
                        2012 - 2020 <br/>
                        Box4Ever </h3>
                    <p class="jobDescription"> Mes missions : Hamster Homes Corp a fait appel à mes services afin de tester qualité du matériel de couchage (foin, et fibre de lin), un hamster heureux est un hamster qui dort bien !</p>
                    <p class="sentence"> "Hamster Homes Corp, des cages qu'on oublie pas !"
                </div>
                <div class="element4">
                    <img src="education-icons/certificate.png" alt="job_image"/>
                    <h3> RONGEUR DE CÂBLES <br/>
                         Depuis 2020 <br/>
                         La passion du câble </h3>
                    <p class ="jobDescription"> Mes missions : Grignoter tous les câbles disponibles du matin au soir, ici ma compétence d'assistant déméleur s'avère extrêmement utile dans les moments critiques !</p>
                    <p class ="sentence"> "Mon titre professionnel grignoteur option câble a été un vrai plus !"</p>
                </div>
        </div>
        <?php
        };
        ?>
    </section>





    <section id="education" class="education">
        <h2>Formation</h2>
            
        <div class="global">
            <div class="formations-Année">
                <div class="formations">
                    <figure class="diploma">
                        <img src="education-icons/mortier.png" alt="mortier" title="mortier">
                        <figcaption>Diplome d'aventurier explorateur</figcaption>
                    </figure>
                </div>
                <div class="Année">
                    <figure class="year">
                        <img src="education-icons/calendar.png" alt="calendar" title="calendar">
                        <figcaption>2009</figcaption>
                    </figure>
                    <figure class="school">
                        <img src="education-icons/School.png" alt="school" title="school">
                        <figcaption>Ecole d'Indiana Jones</figcaption>
                    </figure>
                </div>
            </div>
            <div class="certificates">
                <figure class="certificate">
                    <img src="education-icons/mortierwhite.png" alt="mortierwhite" title="mortierwhite">
                    <figcaption>Brevet dégustateur de graines</figcaption>
                </figure>
                <div class="yearmiddle">
                    <figure class="year">
                        <img src="education-icons/calendarwhite.png" alt="calendar" title="calendar">
                        <figcaption>2008</figcaption>
                    </figure>
                    <figure class="school">
                        <img src="education-icons/schoolwhite.png" alt="school" title="school">
                        <figcaption>Centre formation de gerbelé</figcaption>
                    </figure>
                </div>
            </div>
            <div class="diplome-school">
                    <figure class="premierDip">
                        <img src="education-icons/mortier.png" alt="mortier" title="mortier">
                        <figcaption>Titre professionnel grignoteur option câbles</figcaption>
                    </figure>
                <div class="premierdiplome">
                    <figure class="year">
                        <img src="education-icons/calendar.png" alt="calendar" title="calendar">
                        <figcaption>2005</figcaption>
                    </figure>
                    <figure class="school">
                        <img src="education-icons/School.png" alt="school" title="school">
                        <figcaption>Ecole 30 millions d'amis</figcaption>
                    </figure>
                </div>
                </div>
        </div>
    </section>
        <section id="skills" class="skills">
            <div class="skillsLogos">
                <h2>Mes atouts</h2>
                <div class="element-perso">
                    <figure class="element-skills">
                        <img src="skills-icons/astucieux.png" alt="Astucieux" title="Astucieux">
                        <figcaption>Astucieux</figcaption>
                    </figure>
                    <figure class="element-skills">
                        <img src="skills-icons/curious.png" alt="Curieux" title="Curieux">
                        <figcaption>Curieux</figcaption>
                    </figure>
                    <figure class="element-skills">
                        <img src="skills-icons/social.png" alt="Sociable" title="Sociable">
                        <figcaption>Sociable</figcaption>
                    </figure>
                </div>
                <div class="element-pro">
                    <figure class="element-skills">
                        <img src="skills-icons/muscle.png" alt="Dynamique" title="Dynamique">
                        <figcaption>Dynamique</figcaption>
                    </figure>
                    <figure class="element-skills">
                        <img src="skills-icons/running.png" alt="Réactif" title="Réactif">
                        <figcaption>Réactif</figcaption>
                    </figure>
                    <figure class="element-skills">
                        <img src="skills-icons/creative.png" alt="Créatif" title="Créatif">
                        <figcaption>Créatif</figcaption>
                    </figure>
                </div>
            </div>
            <div class="skillsImage">
                <img src="https://64.media.tumblr.com/166a6324deb21f137192a254694a659a/tumblr_nnby9hDTMN1qbxi45o3_500.gifv"
                     alt="Compétence dynamique"
                     title="Compétence dynamique"
                >
            </div>
        </section>
        <section id="interests" class="interests">
            <div class="interestImage">
                <img
                    src="https://64.media.tumblr.com/565adba1c1494d2e1b1b31e3e115b1aa/tumblr_opk5w8lj7W1r5x837o4_500.gifv"
                    alt="Activité grignotter un pancake"
                    title="Activité grignotter un pancake"
                >
            </div>
            <div class="interestsLogos">
                <h2> Centres d'intérêt </h2>
                <div class="interestsRow">
                        <figure class="interestsFigures">
                            <img src="hamster-ball.png"
                                 alt="Sport"
                                 title="Sport">
                            <figcaption class="interestsFigcaptionTitle">Sport</figcaption>
                            <figcaption class="interestsFigcaptionDescription">Faire de la roue</figcaption>
                        </figure>
                        <figure class="interestsFigures">
                            <img src="growth.png"
                            alt="Jardinage"
                            title="Jardinage">
                            <figcaption class="interestsFigcaptionTitle">Jardinage</figcaption>
                            <figcaption class="interestsFigcaptionDescription">Creuser des tunnels et des galeries</figcaption>
                        </figure>
                </div>
                <div class="interestsRow">
                    <figure class="interestsFigures">

                        <img src="gastronomie.png"
                        alt="Gastronomie"
                        title="Gastronomie">
                        <figcaption class="interestsFigcaptionTitle">L'univers culinaire</figcaption>
                        <figcaption class="interestsFigcaptionDescription">Grignoter quelques friandises</figcaption>
                    </figure>
                    <figure class="interestsFigures">
                        <img src="hiking.png"
                        alt="Randonnée"
                        title="Randonnée">
                        <figcaption class="interestsFigcaptionTitle">Marche et Randonnées</figcaption>
                        <figcaption class="interestsFigcaptionDescription">Avec des petits recoins pour se cacher</figcaption>
                    </figure>
                </div>
            </div>
    </section>
    <section id="contact" class="contact">
        <div class="contactMe" >
            <h2> Contactez-Moi !</h2>
            <img src="https://i.pinimg.com/originals/f4/40/d1/f440d13b570123f9bb9aa3d0051fcb6f.jpg" alt="Photo de contact" class="pictureContact">
            <div class = "contactDiv">
                <img src="telephone.png" alt="logo telephone">
                <p> 00 11 22 33 44 </p>
            </div>

            <div class="contactDiv">
                <img src="email.png" alt="email logo">
                <a href="mailto:bob@hamster.com"> bob@hamster.com</a>
            </div>
        </div>
        <div class="contactForm">
            
            <form class="form">
                <h3> Ou laissez-moi un message !</h3>
                <div>
                    <label for="votreNom"> Votre nom</label>
                    <input type="text" name="votreNom" id="votreNom" placeholder="Roger Rabbit" required>
                </div>
                <div>
                    <label for="email"> Votre Email</label>
                    <input type="email" name="email" id="email" placeholder="hamster@suricate.com" required>
                </div>
                <div>
                    <label for="telephone"> Votre Téléphone</label>
                    <input type="tel" name="telephone" id="telephone" placeholder="06********" required>
                </div>
                <div>
                    <label for="message">Votre Message</label>
                    <textarea name="message" id="message" cols="30" rows="5" placeholder="Votre message"></textarea>
                </div>
                <div>
                    <button class=" formButton"> Envoyer</button>
                </div>
            </form>
        </div>
      
    </section>
    <footer>
        <div class="social-media">
            
                <a href="https://fr.wikipedia.org/wiki/Hamster_de_Roborovski" 
                title="A propos de moi"
                target="_blank">
                A propos de moi
                </a>
                <a href="https://www.linkedin.com/" 
                title="Profil Linkedin"
                target="_blank">
                Linkedin
                </a>
                <a href="https://twitter.com/?lang=fr" 
                title="Twitter account"
                target="_blank">
                Suivez-moi sur twitter
                </a>
        </div>
    </footer>            
 
</body>
</html>

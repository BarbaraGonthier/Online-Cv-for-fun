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
        <h2>Expériences professionnelles</h2>
        <div class="experiencesBloc">
            <div class = textLeft>
                <div class=" textElements1">
                    <h3>  Dégustateur de graines | année 2008 |<a href=""> SUNFLOWER'S & CO </a></h3>
                        <ul>
                            <li><img class = "seeds" src="graine.png" alt="graine" height="30px"/>
                                Dégustation de graines et autres friandises raffinées </li>
                            <li><img class="seeds" src="graine.png" alt="graine" height="30px"/>
                                Formation accélérée "brevet papille gustative" </li>
                            <p class="mind"> "La clé c'est de savoir céder à la gourmandise !"</p>
                        </ul>
                </div>
                <div class="textElements1">
                    <h3>  Aventurier explorateur | 2009-2012 | <a href=""> ESCAPE HAMSTER</a> </h3>
                        <ul>
                            <li><img class="seeds" src="graine.png" alt="graine" height="30px"/>
                                Trouver les failles de sécurité d'une cage </li>
                            <li><img class="seeds" src="graine.png" alt="graine" height="30px"/>
                                Résolution d'algorithmes très complexes (parcours d'obstacles, tunnels, roue) </li>
                            <p class ="mind"> "Le labyrinthe en bois ? Trop facile !" </p>
                        </ul>
                </div>
            </div>
            <div class="textRight">
                <div class="textElements2">
                    <h3>  Constructeur d'abris | 2012-2020 | <a href=""> HAMSTER HOMES CORP'</a></h3>
                        <ul>
                            <li><img class="seeds" src="graine.png" alt="graine" height="30px"/>
                                 Utilisation de matériaux de qualités (foin, granulés et fibre de lin)</li>
                            <li><img class="seeds" src="graine.png" alt="graine" height="30px"/>
                                Installation d'équipements (maisonnette, roue, mangeoire)</li>
                            <p class="mind"> "Hamster Homes Corp', des maisons qu'on oublie pas !"</p>
                        </ul>
                </div>
                <div class="textElements2">
                    <h3> Rongeur de câbles | DEPUIS 2020 |<a href=""> LA PASSION DU CÂBLE</a></h3>
                        <ul>
                            <li><img class="seeds" src="graine.png" alt="graine" height="30px"/>
                                 Grignotage intensif !</li>
                            <li><img class="seeds" src="graine.png" alt="graine" height="30px"/>
                                 Compétence d'assistant déméleur </li>
                            <p class ="mind"> "Mon titre professionnel grignoteur option câble est un vrai plus !</p>
                        </ul>
                </div>
            </div>
        </div>
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
        <div class="skillsDescription">
            <h2>Mes atouts</h2>
            <div class="skillsLogos">
            <?php
            $skillsSection = [
                'astucieux' => [
                    'image' => "skills-icons/astucieux.png",
                    'alternativeText' => 'Astucieux',
                    'title' => 'Astucieux',
                    'skill' => 'Astucieux',
                ],
                'curieux' =>[
                    'image' => "skills-icons/curious.png",
                    'alternativeText' => 'Curieux',
                    'title' => 'Curieux',
                    'skill' => 'Curieux',
                ],
                'sociable' =>[
                    'image' => "skills-icons/social.png",
                    'alternativeText' => 'Sociable',
                    'title' => 'Sociable',
                    'skill' => 'Sociable',
                ],
                'dynamique' =>[
                    'image' => "skills-icons/muscle.png",
                    'alternativeText' => 'Dynamique',
                    'title' => 'Dynamique',
                    'skill' => 'Dynamique',
                ],
                'réactif' =>[
                    'image' => "skills-icons/running.png",
                    'alternativeText' => 'Réactif',
                    'title' => 'Réactif',
                    'skill' => 'Réactif',
                ],
                'créactif' =>[
                    'image' => "skills-icons/creative.png",
                    'alternativeText' => 'Créatif',
                    'title' => 'Créatif',
                    'skill' => 'Créatif',
                ],
            ];

            foreach ($skillsSection as $dataType){
            ?>
                <figure class="element-skills">
                    <img src="<?php echo $dataType['image']; ?>"
                         alt="<?php echo $dataType['alternativeText']; ?>"
                         title="<?php echo $dataType['title']; ?>"
                    >
                    <figcaption><?php echo $dataType['skill']; ?></figcaption>
                </figure>
        <?php
        }
        ?>
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
            <div class="imageContainer">
            <img
                src="https://64.media.tumblr.com/565adba1c1494d2e1b1b31e3e115b1aa/tumblr_opk5w8lj7W1r5x837o4_500.gifv"
                alt="Activité grignoter un pancake"
                title="Activité grignoter un pancake"
            >
            </div>
        </div>
        <div class="interestsDescription">
            <h2> Centres d'intérêt </h2>
            <div class="interestsLogos">
                <?php
                $interestsSection = [
                    'sport' => [
                        'image' => "hamster-ball.png",
                        'alternativeText' => 'Sport',
                        'title' => 'Sport',
                        'interest' => 'Sport',
                        'description' => 'Faire de la roue',
                    ],
                    'jardinage' =>[
                        'image' => "growth.png",
                        'alternativeText' => 'Jardinage',
                        'title' => 'Jardinage',
                        'interest' => 'Jardinage',
                        'description' => 'Creuser des galeries',
                    ],
                    'gastronomie' =>[
                        'image' => "gastronomie.png",
                        'alternativeText' => 'Gastronomie',
                        'title' => 'Gastronomie',
                        'interest' => "L'univers culinaire",
                        'description' => 'Grignoter quelques friandises',
                    ],
                    'randonnée' =>[
                        'image' => "hiking.png",
                        'alternativeText' => 'Marche et randonnée',
                        'title' => 'Marche et randonnée',
                        'interest' => 'Marche et randonnée',
                        'description' => 'Avec des petits recoins',
                    ],
                ];

                foreach ($interestsSection as $dataType){
                ?>
                <figure class="interestsFigures">
                    <img src="<?php echo $dataType['image']?>"
                         alt="<?php echo $dataType['alternativeText']?>"
                         title="<?php echo $dataType['title']?>">
                    <figcaption class="interestsFigcaptionTitle"> <?php echo $dataType['interest']?></figcaption>
                    <figcaption class="interestsFigcaptionDescription"><?php echo $dataType['description']?></figcaption>
                </figure>
                <?php
                }
                ?>
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

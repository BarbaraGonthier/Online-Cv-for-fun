<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV de Bob O'ski</title>
    <link href="https://fonts.googleapis.com/css2?family=Akronim&family=Aladin&family=Noto+Sans+JP:wght@300;400&display=swap" rel="stylesheet">
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
                    <a href="#skills" title="Compétences">Atouts</a>
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
            <img src="home-img/titre-bubble.png" alt="Titre grignoteur">
            <img src="home-img/explorateur-bubble.png" alt="Explorateur">
        </div>
        <div class="presentation">
            <img src="home-img/bob.png" alt="Photo de Bob" class="profile-picture">
            <h1>Bob O'ski</h1>
            <h3>Rongeur de câbles</h3>
        </div>
        <div class="ball-right">
            <img src="home-img/dynamique-bubble.png" alt="Dynamique">
            <img src="home-img/reactif-bubble.png" alt="Réactif">
        </div>
        <div class="ball-mobile">
            <img src="home-img/bubble-mobile.png" alt="Bubbles mise en avant">
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
      <?php  include './formation.php'; ?>
    </section>
    <section id="skills" class="section-skills">
        <h2>Mes atouts</h2>
        <div class="skills">
            <div class="skillsDescription">
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
                <img src="http://lepassetempsderose.l.e.pic.centerblog.net/0_7820a_8b211f24_XXXL.gif"
                     alt="Compétence sociable"
                     title="Compétence sociable"
                >
            </div>
        </div>
        <div class="skillsCatchLine">
        <p> "Mon moment préféré : la réunion d'équipe avec avec le management !"</p>
        </div>
    </section>

    <section id="interests" class="section-interest">
        <h2> Centres d'intérêt </h2>
        <div class="interests">
            <div class="interestImage">
                <img
                    src="https://64.media.tumblr.com/565adba1c1494d2e1b1b31e3e115b1aa/tumblr_opk5w8lj7W1r5x837o4_500.gifv"
                    alt="Activité grignoter un pancake"
                    title="Activité grignoter un pancake"
                >
            </div>
            <div class="interestsDescription">
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
        </div>
        <div class="interestscatchLine">
            <p> "Cuisiner, un vrai moment de détente et de plaisir !"</p>
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

            <div class="contactDiv">
                <img src="map-location.png" alt="location logo">
                <p> Cage à hamster n°3<br>
                Sous l'escalier Nord<br>
                Hamsterville</p>
            </div>
        </div>
        <div class="contactForm">
            <div class="formulaire">

                <form class="form" action="" method="POST" >
                    <h3> Ou laissez-moi un message !</h3>
                    <div>
                        <label for="userName"> Votre nom</label>
                        <input type="text" name="userName" id="userName" placeholder="Roger Rabbit" required>
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
            <?php
                if( $_SERVER["REQUEST_METHOD"] == "POST"){
                    foreach ($_POST as $name => $input){
                        $data[$name] = trim($input);
                    }
                    if (empty($data["userName"])){
                        $errors[] = "Un nom est requis";
                    }
                    if(!filter_var($data["email"], FILTER_VALIDATE_EMAIL)){
                        $errors[] = "Format d'email invalide";
                    }
                    if (empty($data["telephone"])){
                        $errors[] = "Un numéro de téléphone est requis";
                    } ?> <div class = "errors"> <?php

                    if (!empty($errors)){ ?>
                        <ul>
                        <?php foreach ($errors as $error){ ?>
                        <li><?= $error;  ?></li> <?php
                        }?> </ul>
                        </div>
        </div>
        <?php
                }else { ?> <script>alert( "Merci je fais au plus vite pour te repondre !")</script>
<?php
            }
        }

        ?>
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

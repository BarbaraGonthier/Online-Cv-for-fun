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
        <?php include 'header.php' ?>
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
    <section id="experience">
        <h2> Experiences Professionnelles </h2>
        <div class="sectionExperiences">
            <div class="experiencesBloc">
            <?php
            include('data.php');
            foreach ($experiences as $experience => $job) {
            ?>
                <div class="experience">
                    <img src="<?=$job['image']?>" alt="job_image"/>
                    <h3> <?=$job['job']?> </h3>
                    <div class="subtitle"> <?=$job['date']?> | <?=$job['company']?> </div>
                    <div class="experienceBottom">
                        <p class="jobDescription"> <?=$job['description']?></p>
                        <p class="sentence"><?=$job['sentence']?> </p>
                    </div>
                </div>
        <?php
            }
        ?>
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
                    [
                        'image' => "skills-icons/astucieux.png",
                        'skill' => 'Astucieux',
                    ],
                    [
                        'image' => "skills-icons/curious.png",
                        'skill' => 'Curieux',
                    ],
                    [
                        'image' => "skills-icons/social.png",
                        'skill' => 'Sociable',
                    ],
                    [
                        'image' => "skills-icons/muscle.png",
                        'skill' => 'Dynamique',
                    ],
                    [
                        'image' => "skills-icons/running.png",
                        'skill' => 'Réactif',
                    ],
                    [
                        'image' => "skills-icons/creative.png",
                        'skill' => 'Créatif',
                    ],
                ];

                foreach ($skillsSection as $dataType){
                ?>
                    <figure class="element-skills">
                        <img src="<?php echo $dataType['image']; ?>"
                             alt="<?php echo $dataType['skill']; ?>"
                             title="<?php echo $dataType['skill']; ?>"
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
                         [
                            'image' => "hamster-ball.png",
                            'interest' => 'Sport',
                            'description' => 'Faire de la roue',
                        ],
                        [
                            'image' => "growth.png",
                            'interest' => 'Jardinage',
                            'description' => 'Creuser des galeries',
                        ],
                        [
                            'image' => "gastronomie.png",
                            'interest' => "L'univers culinaire",
                            'description' => 'Grignoter quelques friandises',
                        ],
                        [
                            'image' => "hiking.png",
                            'interest' => 'Marche et randonnée',
                            'description' => 'Avec des petits recoins',
                        ],
                    ];

                    foreach ($interestsSection as $dataType){
                    ?>
                    <figure class="interestsFigures">
                        <img src="<?php echo $dataType['image']?>"
                             alt="<?php echo $dataType['interest']?>"
                             title="<?php echo $dataType['interest']?>">
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
            <div class="infoContact">
                <div class = "contactDiv">
                    <img src="telephone.png" alt="logo telephone">
                    <p> 00 11 22 33 44 </p>
                </div>

                <div class="contactDiv">
                    <img src="email.png" alt="email logo">
                    <a id ="emailBob" href="mailto:bob@hamster.com"> bob@hamster.com</a>
                </div>

                <div class="contactDiv">
                    <img src="map-location.png" alt="location logo">
                    <p> Cage à hamster n°3<br>
                    Sous l'escalier Nord<br>
                    Hamsterville</p>
                </div>
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
        <?php include 'footer.php' ?>
    </footer>            
 
</body>
</html>

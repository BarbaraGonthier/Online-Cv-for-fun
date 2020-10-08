    <h2>Formation</h2>
    <div class="global">
        <?php
        $diplomas=[
            ['Diplome d\'aventurier explorateur', 2009, 'Ecole de Dora l\'Exploratrice'],
            ['Brevet dégustateur de graines', 2008, 'Centre de formation de Gerblé'],
            ['Titre professionnel grignoteur option câbles', 2005, 'Ecole Claude François'],
        ];
        $blackImg = ['mortier', 'calendar', 'school'];
        $whiteImg = ['mortierwhite', 'calendarwhite', 'schoolwhite'];
        $i=0;
        $picto = $blackImg;
        foreach($diplomas as $diploma) {
                    ?>
                    <div class="formations">
                        <figure class="formation">
                            <img src="education-icons/<?= $picto[0]?>.png" alt="<?= $picto[0]?>" title="<?= $picto[0]?>">
                            <figcaption><?= $diploma[0]?></figcaption>
                        </figure>
                        <figure class="year">
                            <img src="education-icons/<?= $picto[1]?>.png" alt="<?= $picto[1]?>" title="<?= $picto[1]?>">
                            <figcaption><?= $diploma[1] ?></figcaption>
                        </figure>
                        <figure class="localisation">
                            <img src="education-icons/<?= $picto[2]?>.png" alt="<?= $picto[2]?>" title="<?= $picto[2]?>">
                            <figcaption><?= $diploma[2] ?></figcaption>
                        </figure>
                    </div>
                    <?php
            if($i %2 === 0){
                $picto = $whiteImg;
            } else{
                $picto = $blackImg;
            }
            $i+=1;
        }
        ?>
    </div>

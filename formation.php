
<h2>Formation</h2>
<div class="global">
    <?php
    $diplomas=[
        ['Diplome d\'aventurier explorateur', 2009, 'Ecole d\'Indiana Jones'],
        ['Brevet dégustateur de graines', 2008, 'Centre de formation de gerblé'],
        ['Titre professionnel grignoteur option câbles', 2005, 'Ecole 30 millions d\'amis'],
    ];
    $images = ['mortier', 'calendar', 'school'];
    foreach($diplomas as $diploma) {
        $i = 0;
        ?>
    <div class="formations">
    <?php
        foreach ($images as $image){
        ?>

            <figure class="figure">
                <img src="education-icons/<?= $images[$i]?>.png" alt="<?= $images[$i]?>" title="<?= $images[$i]?>">
                <figcaption><?= $diploma[$i]?></figcaption>
            </figure>


    <?php
    $i++;
    }
        ?>
    </div>
<?php
}
?>
</div>
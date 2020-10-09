
<h2>Formation</h2>
<div class="global">
    <?php
    $diplomas=[
        ['DIPLOME D\'AVENTURIER EXPLORATEUR', 2009, 'Ecole Dora L\'Eploratrice'],
        ['BREVET GOÛTEUR DE GRAINES', 2008, 'Centre de formation de Gerblé'],
        ['TITRE GRIGNOTEUR OPTION CÂBLES', 2005, 'Ecole de Claude François'],
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
                <figcaption><h4><?= $diploma[$i]?></h4></figcaption>
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
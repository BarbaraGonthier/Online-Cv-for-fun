<?php
$animals= [
            ['species'=>'mammouth', 'weight'=>1000, 'isCarnivorous'=>false],
            ['species'=>'tigre', 'weight'=>120, 'isCarnivorous'=>true],
            ['species'=>'tic', 'weight'=>0.5, 'isCarnivorous'=>false],

            ];

function isDangerous(array $animals): bool
{
    foreach ($animals as $animal){
            if ($animal['weight'] >= 50 && $animal['isCarnivorous'] === true);
                $result = $animal;
}
    return $result;
}
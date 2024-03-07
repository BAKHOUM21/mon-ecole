<?php
include "header.php";
include "menu.php";
include "footer.php";
require_once "database.php";
$niveau = get_niveau_all();
//  var_dump($niveau);
?>

<div class="container-fluid parallax parallax1 mt-1 bg">
        <div class="row m-auto pt-3">
        <h2 class="bg-dark text-light m-auto">Veuillez choisir une classe !</h2>
        </div>

        <div class="row  mt-2 m-auto p-3" style="padding-bottom:700px;">
        <?php foreach ($niveau as $key): ?>
            <div class="col-sm-3 d-block p-1 text-center"><a href="mes_cours.php?niveau=<?=$key['Nom']?>" class="btn btn-primary w-75" style="text-decoration:none;border:1px solid black;padding:8x"><?=$key["Nom"]?></a></div>

        <?php endforeach;?>
        </div>
</div>

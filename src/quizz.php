<?php
include "menu.php";
include "footer.php";
session_start();
include('database.php');
ob_start();
// include('config_shared/WKmanagement.php');
// $obj = new WKS_gestion();
// $Affiche = $obj->Process_manage("consulter_une_formation", $Id_formation);

// $formations = $obj->Process_manage("consulter_Module", $Id_formation);
// $objet = new WK_Helpers_Manage();
// $cours_all = $objet->get_cours_all($Id_formation, $I_module);

$Id_q = 1;
$chap = get_quizz(2);
//var_dump($reponses_quizz[1]);
$reponses_quizz = get_reponses_quizz($Id_q);
if (!empty($_POST)) {

    foreach ($chap as $key) {
        foreach ($reponses_quizz as $rep) {
            // var_dump($_POST["reponse_" . $rep['Id']]);
            if ($rep['Id_quizz'] == $key["Id"]) {
                var_dump($_POST["reponse_" . $key["Id"] . "_" . $rep['Id']]);
            }
        }
    }
}
//include 'pages/headlogin.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="assets/css/quizz.css" rel="stylesheet">
    <title>Mes cours</title>
</head>

<body>
    <div class="container mt-5 mb-5" style="padding-top: 110px; ">
        <div class="row">
            <div class="navbar-nav" style="height:70px;border-radius:5px;background-color:#B8252B">
                <h1 class=" text-center align-middle pt-2" style="color:#e8e8e8"><?= "Evaluation des connaissances" ?></h1>
            </div>
            <div class="card m-auto mt-1 " style="background-color:#434343">

                <div class="card-body ">
                    <form action="#" method="post">
                        <div class="row">
                            <table id="dt-bordered" class="table table-bordered m-auto" cellspacing="0" style="width:85%;float:right;">

                                <thead>
                                    <tr>
                                        <th class="th-sm text-center text-light" style="width:45px;position:relative">Questions
                                        </th>
                                        <th class="th-sm text-center text-light" style="width:40px;position:relative">Réponses

                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($chap as $key) : ?>
                                        <tr>
                                            <td class="ml-2 align-middle text-light" style="width:45px;position:relative"><?= $key["Questions"] ?></td>
                                            <td class="text-center  align-middle text-light" style="width:40px;position:relative">

                                                <?php
                                                $reponses_quizz = get_reponses_quizz($Id_q);
                                                ?>
                                                <?php foreach ($reponses_quizz as $rep) : ?>
                                                    <?php if ($rep['Id_quizz'] == $key["Id"]) { ?>
                                                        <div class="form-check ml-0">
                                                            <input class="form-check-input" type="radio" name="reponse_<?= $key["Id"] . "_" . $rep["Id"] ?>" id="reponse_<?= $rep["Id"] ?>">

                                                            <label class="form-check-label" for="flexRadioDefault1">
                                                                <?= $rep["Choix_reponse"] ?>
                                                            </label>
                                                        </div>
                                                    <?php }; ?>
                                                <?php endforeach; ?>


                                            </td>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>

                            </table>
                        </div>
                        <div class="row mt-5 bout">
                            <div class="col-6 " style="margin-left: 67.5%;">
                                <button class="btn btn-primary ;" name="valider" value="valider" style="width:50%;" id="valid">Valider</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    const rep1 = document.getElementById("reponse_1");
    const rep2 = document.getElementById("reponse_2");
    const rep3 = document.getElementById("reponse_3");
    document.getElementById('valid').addEventListener("click", () => {
        console.log(rep1);
        console.log(rep2);
        console.log(rep3);
    });
</script>
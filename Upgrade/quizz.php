<?php
include("config_shared/Database.php");
$Id_formation = $_GET["At"];
$I_module = $_GET["Ats"];
session_start();

ob_start();
include('config_shared/WKmanagement.php');
$obj = new WKS_gestion();
$Affiche = $obj->Process_manage("consulter_une_formation", $Id_formation);

$formations = $obj->Process_manage("consulter_Module", $Id_formation);
$objet = new WK_Helpers_Manage();
$cours_all = $objet->get_cours_all($Id_formation, $I_module);

$Id_q = $_GET['Id_q'];
$chap = $objet->get_quizz($Id_q);
$i = 1;
$j=1;
$reponses_quizz = $objet->get_reponses_quizz($Id_q);
if (isset($_POST['valider'])) {
    
    foreach ($chap as $key) {
        foreach ($reponses_quizz as $rep) {
            
            if ($rep['Id_quizz'] == $key["Id_cours"]) {
                
                $tab = [];
                $results = $_POST["reponse_" . $rep["Id"] . "_" . $key["Id"]];
                if (!empty($results)) {
                    $tab = ["reponse" . $rep['Id'] => $results];
                    $nb_questions=array($j++);
                    if ($rep['Bonne_reponse'] == 1) {
                        $total=array($i++);
                        
                        }
                    };
                }
            }
        }
        $score=($total[0]/$nb_questions[0])*100;
        if($score>=70){
            echo"<h3 style='text-align:center; color:blue;margin-top:10%'>Bravo vous avez reussi le test avec un score de: $score %  <button style='background-color:red;color:white;'><a href='home.php'>Retour</a></button></h3> " ;
            
        }else{
            echo "<h3 style='text-align:center; color:red;margin-top:10%'>Merci de revoir votre cours et réessayer ultérieurement </h3> ";
            header("Refresh:5; url=quizz.php?Id_q=".$Id_q);
        }
        
     
    
}
include 'pages/headlogin.php';

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
    <div class="container mt-5 mb-5" style="padding-top: 90px;">
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
                                            $reponses_quizz = $objet->get_reponses_quizz($Id_q);
                                            ?>
                                            <?php foreach ($reponses_quizz as $rep) : ?>

                                                <?php if ($rep['Id_quizz'] == $key["Id_cours"]) { ?>
                                                    <div class="form-check ml-0">
                                                        <input class="form-check-input" type="radio" name="reponse_<?= $rep["Id"] . "_" . $key["Id"] ?>" value="<?= $rep['Choix_reponse'] ?>" id="reponse_<?= $rep["Id"] ?>_<?= $key["Id"] ?>">
                                                        <label class="form-check-label" for="flexRadioDefault1" id="choix-rep">
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
                        <button type="submit" name="valider"  value="valider" style="width:50%; border-radius:5px;background-color:dodgerblue; color:#e8e8e8;border:none;" id="valid">Valider</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color:black;
            color:blue;
            text-align: center;
        }
    </style>
    <title>Document</title>
</head>
<body >
    <card class="w-100 bg-light text-center" style="background-color:white;color:black;margin:auto;text-align:center">
        <card-body class="text-dark bg-light">
            <?php
                if (!empty($_POST['submit'])) {
                    $prenom = $_POST['prenom'];
                    $nom = $_POST['nom'];
                    $adresse = $_POST['adresse'];
                    $phone = $_POST['phone'];
                    $message = $_POST['message'];
                    echo "<h1>$prenom</h1>";
                    echo '</br>';
                    echo $nom;
                    echo '</br>';
                    echo $adresse;
                    echo '</br>';
                    echo $phone;
                    echo '</br>';
                    echo $message;
                    echo '</br>';
                }
            ?>
        <card-body>
</card>
</body>
</html>
<script defer>

    let prenom=<?=json_encode($prenom)?>;
    let nom=<?=json_encode($nom)?>;
    let adresse=<?=json_encode($adresse)?>;
    let phone=<?=json_encode($phone)?>;
    let message=<?=json_encode($message)?>;
    setInterval( emailjs.send("service_075ak8i","template_osooesk",{
        prenom: prenom,
        nom: nom,
        adresse: adresse,
        phone:phone,
        email_to: "bakhoumdemba1@gmail.com";
        message: message,
        reply_to: "boss",
    }), 1000);
   window.location.href="acceuil.php";
</script>
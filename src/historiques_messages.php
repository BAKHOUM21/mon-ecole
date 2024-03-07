
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            background-color:black;
            color:white;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
 
 if(!empty($_POST['submit'])){
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $adresse=$_POST['adresse'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
  echo "<h1>$prenom</h1>";echo '</br>';
  echo $nom;echo '</br>';
  echo $adresse;echo '</br>';
  echo $phone;echo '</br>';
  echo $message;echo '</br>';
  }
?>
</body>
</html>
<?php 
  include("header.php");
  include "menu.php";
  include("footer.php");
  if(!empty($_POST['submit'])){
    $prenom=$_POST['prenom'];
    $nom=$_POST['nom'];
    $adresse=$_POST['adresse'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
  var_dump($prenom);
  }
  
?>
<div class="container-fluid mt-0">
        <div class="parallax parallax1 mb-5">
            <h1 class="text-center bg-dark text-light">Contact</h1>
            <div class="row ">
  <div class="col-sm-6 mb-4 m-auto">
    <div class="card mb-4">
      <div class="card-header bg-dark text-light py-3">
        <h5 class="mb-0">Veuillez remplir ce formulaire</h5>
      </div>
      <div class="card-body">
        <form method="POST" action="historiques_messages.php">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          <div class="row mb-4">
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example1" class="form-control" name="prenom"/>
                <label class="form-label" for="form7Example1">Prenom</label>
              </div>
            </div>
            <div class="col">
              <div class="form-outline">
                <input type="text" id="form7Example2"  name="nom" class="form-control" />
                <label class="form-label" for="form7Example2">Nom</label>
              </div>
            </div>
          </div>

          <!-- Text input -->
          <div class="form-outline mb-4">
            <input type="text" id="form7Example4" name="adresse" class="form-control" />
            <label class="form-label" for="form7Example4" >Addresse</label>
          </div>

          <!-- Number input -->
          <div class="form-outline mb-4">
            <input type="number" id="form7Example6" name="phone" class="form-control" />
            <label class="form-label" for="form7Example6">Téléphone</label>
          </div>

          <!-- Message input -->
          <div class="form-outline mb-4">
            <textarea class="form-control" id="form7Example7"name="message" rows="4"></textarea>
            <label class="form-label" for="form7Example7" >Message</label>
          </div>

          <!-- Checkbox -->
          <div class="btn btn-submit justify-content-center mb-2">
            <input class="btn btn-primary me-2" name="submit" type="submit" value="Envoyer" id="form7Example8" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>


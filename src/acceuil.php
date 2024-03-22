<?php 
  include "header.php"; 
  include "menu.php";
  include("footer.php");
?>
<div class="container-fluid mb-5">
        <div class="card bg-light mt-5 mb-5 m-auto" style="width:80%;">
            <div class="card-body">
            <div style="margin:auto;" class="">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <p></p>
                    </div>
                    <div class="view">
                        <img class="d-block" style='width:100%;height:55%;' src="img/ecole-afr.jpg"
                            alt="First slide" id="img1">
                        <div class="mask rgba-black-light"></div>
                    </div>

                </div>

                <div class="carousel-item ">
                    <div class="view">
                        <img class="d-block w-100" src="img/ecole5.jpg"
                            alt="Second slide" id="img2">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <p></p>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="view">
                        <img class="d-block w-100" src="../img/affiche1.png"
                            alt="last slide" id="img3">
                        <div class="mask rgba-black-light"></div>
                    </div>
                    <div class="carousel-caption">
                        <p></p>
                    </div>
                </div>
            </div>
            </div>
        </div>
          
        <div class="parallax mt-3">
            <div class="row bg-dark m-auto">
              <div class="col">
                <h1 class="text-center text-light">A propos</h1>
              </div>
            </div>
            <div class="row mt-3 d-flex" style="margin:auto">
                <div class="col-sm-4" style="margin-bottom:5%">
                  <div class="card w-100">
                        <img src="../img/immo5.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-4" style="margin-bottom:5%">
                  <div class="card w-100">
                        <img src="../img/immo5.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-4" style="margin-bottom:5%">
                  <div class="card w-100">
                        <img src="../img/immo5.jpg" class="card-img-top" alt="Fissure in Sandstone"/>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#!" class="btn btn-primary">Button</a>
                        </div>
                      </div>
                </div>

            </div>
        </div>

        <div class="parallax parallax1">
          <div class="row bg-dark text-light m-auto">
            <h1 class="text-center ">Contact</h1>
          </div>
          <div class="row mt-0">
              <div class="col-md-8 mb-4 m-auto ">
                <div class="card sm-4 contact mt-4 w-100">
                  <div class="card-header bg-dark text-light py-3">
                    <h5 class="mb-0">Veuillez remplir ce formulaire</h5>
                  </div>
                  <div class="card-body">
                    <form method='POST' action='historiques_messages.php'>
                          <!-- 2 column grid layout with text inputs for the first and last names -->
                          <div class="row mb-4">
                            <div class="col">
                              <div class="form-outline">
                                <input type="text" id="form7Example1" class="form-control" name='prenom'/>
                                <label class="form-label" for="form7Example1" >Prenom</label>
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-outline">
                                <input type="text" id="form7Example2" class="form-control" name='nom'/>
                                <label class="form-label" for="form7Example2" >Nom</label>
                              </div>
                            </div>
                          </div>

                         
                          <!-- Text input -->
                          <div class="form-outline mb-4">
                            <input type="text" id="form7Example4" name='adresse' class="form-control" />
                            <label class="form-label" for="form7Example4" >Addresse</label>
                          </div>
                          <!-- Number input -->
                          <div class="form-outline mb-4">
                            <input type="number" id="form7Example6" name='phone' class="form-control" />
                            <label class="form-label" for="form7Example6" >Téléphone</label>
                          </div>

                          <!-- Message input -->
                          <div class="form-outline mb-4">
                            <textarea class="form-control" id="form7Example7" name='message' rows="4"></textarea>
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
        </div>

</div>

<?php
include("database.php");
include("header.php");
include("menu.php");
include "footer.php";
$all_cours=get_cours_all();
$niveau=$_GET['niveau'];
$get_cours_by_categories_niveau=get_cours_by_categories_niveau($niveau);
?>
<div class="container-fluid mt-5 mb-5">
    <div class="navbar-nav mt-3 w-100 bg-primary" style="height:80px;border-radius:5px;">
        <h2 class="text-center mt-3" style="color:#e8e8e8">L'ensemble de mes cours</h2>
    </div>
    <div class="card m-auto mt-1 w-100" style="background-color:lightgray;margin-bottom:5%;">
        
        <div class="card-body d-flex">
        <table id="dt-bordered" class="table table-bordered col-8 m-auto" cellspacing="0" style="width:90%;float:right;">
        
            <thead>
                <tr>
                <th class="th-sm text-center bg-dark text-primary" style="width:45px;position:relative" >Modules
                </th>
                <th class="th-sm text-center bg-dark text-primary" style="width:40px;position:relative" >Voir cours
                </th>
                </th>
                <th class="th-sm text-center bg-dark text-primary" style="width:40px;position:relative" >Exercices
                </th>
                
                </tr>
                
            </thead>
            <tbody>
            <?php foreach($get_cours_by_categories_niveau as $keys):?>
            <tr >
        <td class="text-center align-middle bg-dark text-light" style="width:45px;position:relative"><?=$keys["categories"]?></td>
            <td class="text-center align-middle text-danger" style="width:40px;position:relative"><a href="<?=$keys['Libelle_cours']?>"><?=$keys['Nom']?></a></td>
            <td class="text-center align-middle text-danger" style="width:40px;position:relative"><a href="<?=$keys['Libelle_exos']?>"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
            
            </tr>
            <?php  endforeach;?>
            
        </tbody>
        
        </table>

        </div>
    </div>
  </div>


</div>
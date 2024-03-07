
<?php

 
     
    //On établit la connexion
     try{
        function db(){
            $username = 'root';
            $password = '';
            $conn = new PDO("mysql:host=localhost;dbname=gestion_ecole", $username, $password);
            //On définit le mode d'erreur de PDO sur Exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
    
       
        //libelle
       
        // var_dump($categ);
        
        function get_cours_all(){
            $conn= db();
            $client=$conn->prepare("SELECT * FROM mes_cours" );
            $client->execute();
            $clients=$client->fetchAll();
            return $clients;
            
        }
       
        function get_cours_by_categories_niveau($niveau){
            $conn= db();
            $client=$conn->prepare("SELECT * FROM mes_chapitres Where niveau='".$niveau."'" );
            $client->execute();
            $clients=$client->fetchAll();
            return $clients;
            
        }
        function get_niveau_all(){
            $conn= db();
            $niveaux=$conn->prepare("SELECT * FROM niveau" );
            $niveaux->execute();
            $niv=$niveaux->fetchAll();
            return $niv;
            
        }
        
       
    }

     /*On capture les exceptions si une exception est lancée et on affiche
     *les informations relatives à celle-ci*/
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
        die;
      }
      function cours_by_id($Id_module,$Id_formation){  
        $conn= db(); 
        $cours_id=$conn->prepare("SELECT * FROM mes_cours Where Id_formation='".$Id_formation."' and Id_module='".$Id_module."'" );
        $cours_id->execute();
        $cours_ids=$cours_id->fetchAll();
        return $cours_ids;
    }
      
    //   function insert_revenue($Id_revenues_categories,$Id_revenues_sous_categories,$Id_budget_statuts,$Montants,$Frequence){
    //     $conn= db();
    //     $req=$conn->prepare("INSERT INTO revenues_details (Id_revenues_categories, Id_revenues_sous_categories,Id_budget_statuts, Montants,Frequence) VALUES (:Id_revenues_categories, :Id_revenues_sous_categories, :Id_budget_statuts, :Montants, :Frequence)" );
        
    //     $req->execute(array(
    //           ':Id_revenues_categories' => $Id_revenues_categories,
    //           ':Id_revenues_sous_categories' => $Id_revenues_sous_categories,
    //           ':Id_budget_statuts' => $Id_budget_statuts,
    //           ':Montants' => $Montants,
    //           ':Frequence' => $Frequence
             
    //         ));
       
    //   }
      
    function get_quizz($Id){
        $conn= db(); 
        $cours_id=$conn->prepare("SELECT * FROM quizz Where Id='".$Id."'" );
        $cours_id->execute();
        $cours_ids=$cours_id->fetchAll();
        return $cours_ids;
    }
    function get_reponses_quizz($Id_cours)
{
        $conn = db();
        $client =$conn->prepare("SELECT * FROM reponses_quizz  Where Id_cours='" . $Id_cours . "'");
        
        //$stmt->bind_param();       
        $client->execute();
        $question_all =$client->fetchAll();
        
        return $question_all;
}

      
?>
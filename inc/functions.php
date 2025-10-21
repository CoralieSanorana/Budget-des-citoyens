<?php
    include("connexion.php");

    function get_all_perspect_economiq(){
        $requete = "SELECT * FROM v_perspective_economique";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    function get_all_taux_croissance_sectorielle(){
        $requete = "SELECT * FROM TauxCroissanceSectorielle";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }


    function get_all_recettes_fiscales_interieurs(){
        $requete = "SELECT * FROM RecettesFiscalesInterieures";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }
    function get_all_depensesparnature(){
        $requete = "SELECT * FROM DepensesParNature";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    
    function get_all_InteretsDette(){
        $requete = "SELECT * FROM InteretsDette";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    function get_all_DepensesSoldesPensions(){
        $requete = "SELECT * FROM DepensesSoldesPensions";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    function get_all_PostesBudgetaires(){
        $requete = "SELECT * FROM PostesBudgetaires";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    function get_all_DepensesFonctionnement(){
        $requete = "SELECT * FROM DepensesFonctionnement";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    function get_all_DepensesInvestissement(){
        $requete = "SELECT * FROM DepensesInvestissement";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    function get_all_RepartitionDepensesAdministratif(){
        $requete = "SELECT * FROM RepartitionDepensesAdministratif";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }


    function get_all_recette_douaniere()
    {
        
        $requete = "SELECT * FROM RecettesDouanieres";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    function get_all_recette_nonFisc()
    {
        
         $requete = "SELECT * FROM RecettesNonFiscales";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

     function get_all_Dons()
    {
        
         $requete = "SELECT * FROM Dons";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

     function get_deficit_budget()
    {
        
         $requete = "SELECT * FROM DeficitBudgetaire";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    function get_all_acronyme()
    {
        
         $requete = "SELECT * FROM Acronymes";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    function get_all_glossaire()
    {
        
         $requete = "SELECT * FROM Glossaire";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    function get_all_disp_douan()
    {
        
        $requete = "SELECT * FROM DispositionsFiscales";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }

    function get_total_Recettes($nom_recette){
        if (!preg_match('/^[a-zA-Z0-9_]+$/', $nom_recette)) {
            die("Nom de table invalide !");
        }

        $requete = "SELECT 
                    SUM(montant_2024) AS total_2024, 
                    SUM(montant_2025) AS total_2025 
                FROM `$nom_recette`";
        $result = mysqli_query(dbconnect(),$requete);
        $result_array = [];
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $result_array[] = $row;
            }
        } else {
            echo "Error: " . mysqli_error(dbconnect());
        }
        return $result_array;
    }
?>
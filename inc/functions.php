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

<<<<<<< HEAD
    function get_all_recettes_fiscales_interieurs(){
        $requete = "SELECT * FROM RecettesFiscalesInterieures";
=======
    function get_all_depensesparnature(){
        $requete = "SELECT * FROM DepensesParNature";
>>>>>>> 8099d531f1bd15af0ae6ad0b96a3d7f5cae8a8d3
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
<<<<<<< HEAD
=======
    
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


>>>>>>> 8099d531f1bd15af0ae6ad0b96a3d7f5cae8a8d3

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
?>
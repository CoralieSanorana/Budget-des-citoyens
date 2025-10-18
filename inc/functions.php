<?php
    include("connexion.php");

    function get_all_perspect_economiq(){
        $requete = "SELECT * FROM PerspectivesEconomiques";
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
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



?>
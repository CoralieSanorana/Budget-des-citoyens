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


?>
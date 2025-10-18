        Projet: Budget des citoyens
- dossier sql:
    -base.sql:
    [ok]creer une base de donnees tirer du pdf
    [ok]inserer les donnees venant du pdf

header.php :
    [ok] creer un header commun a toutes les pages

dossier images :
        [] garder les images utilisees dans le projet

index.php :
     [] lien vers les differentes pages ;

Perspectives_economiques.php : (Coralie)
    [ok] afficher les donnees de la table perspectives economiques
    [ok] afficher les donnees de la table TauxCroissanceSectorielle
    [] ajouter un graphique pour illustrer les donnees
    {
        -dossier inc: functions.php:
         . [ok]creer get_all_pespect_economiq()
         . [ok]creer get_all_taux_croissance_sectorielle()

        -dossier sql: view.sql:
         . [ok]creer view v_perspective_economique
    }

Recettes.php :
    [ok] afficher les donnees de la table recettes
        - [ok] recettes fiscales interieurs
           - function get_all_recettes_fiscales_interieurs()
        
        - [ok] recettes douanieres
           -> function get_all_recette_douaniere()
        
        - [ok] recettes non fiscales
           -> function get_all_recette_nonFisc () 
        
        - [ok] Dons
           -> function get_all_don()

    [] ajouter un graphique pour illustrer les donnees

Depenses.php : (Coralie)
    [ok] afficher les donnees de la table depenses 
    [ok] lier chaque nature de depenses a une section correspondante
    {
        .[ok] afficher les donnees de cette table
        .[] ajouter un graphique pour illustrer les donnees
    }
    [] ajouter un graphique pour illustrer les donnees
    {
        -dossier inc: functions.php:
         . [ok]creer get_all_depensesparnature()
         . [ok]creer get_all_InteretsDette()
         . [ok]creer get_all_DepensesSoldesPensions()
         . [ok]creer get_all_PostesBudgetaires()
         . [ok]creer get_all_DepensesFonctionnement()
         . [ok]creer get_all_DepensesInvestissement()
         . [ok]creer get_all_RepartitionDepensesAdministratif()
    }

Deficit_budgetaire.php :
    [] afficher les donnees de la table deficit_budgetaire
        - [] Financement du deficit
           -> function get_def_buget()

    [] ajouter un graphique pour illustrer les donnees

Disp_douan.php :
    [] afficher les donnees de la table disp_douan
        - [] Dispersion douaniere
           -> function get_all_disp_douan()
    [] ajouter un graphique pour illustrer les donnees

Acronyme.php :
    [ok] afficher les donnees de la table acronyme
       -> get_all_acronyme();

Glossaire.php :
    [] afficher les donnees de la table glossaire
       -> get_all_glossaire();
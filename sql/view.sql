create or replace view v_perspective_economique as
SELECT 
    'PIB Nominal' AS Agrégat_Macroéconomique,
    MAX(CASE WHEN annee = 2024 THEN pib_nominal END) AS '2024',
    MAX(CASE WHEN annee = 2025 THEN pib_nominal END) AS '2025',
    MAX(CASE WHEN annee = 2026 THEN pib_nominal END) AS '2026'
FROM PerspectivesEconomiques
UNION
SELECT 
    'Taux de Croissance' AS Agrégat_Macroéconomique,
    MAX(CASE WHEN annee = 2024 THEN taux_croissance END) AS '2024',
    MAX(CASE WHEN annee = 2025 THEN taux_croissance END) AS '2025',
    MAX(CASE WHEN annee = 2026 THEN taux_croissance END) AS '2026'
FROM PerspectivesEconomiques
UNION
SELECT 
    'Indice des Prix à la Consommation' AS Agrégat_Macroéconomique,
    MAX(CASE WHEN annee = 2024 THEN indice_prix_consommation END) AS '2024',
    MAX(CASE WHEN annee = 2025 THEN indice_prix_consommation END) AS '2025',
    MAX(CASE WHEN annee = 2026 THEN indice_prix_consommation END) AS '2026'
FROM PerspectivesEconomiques
UNION
SELECT 
    'Ratio Dépenses Publiques/PIB' AS Agrégat_Macroéconomique,
    MAX(CASE WHEN annee = 2024 THEN ratio_depenses_publiques_pib END) AS '2024',
    MAX(CASE WHEN annee = 2025 THEN ratio_depenses_publiques_pib END) AS '2025',
    MAX(CASE WHEN annee = 2026 THEN ratio_depenses_publiques_pib END) AS '2026'
FROM PerspectivesEconomiques
UNION
SELECT 
    'Solde Global Base Caisse' AS Agrégat_Macroéconomique,
    MAX(CASE WHEN annee = 2024 THEN solde_global_base_caisse END) AS '2024',
    MAX(CASE WHEN annee = 2025 THEN solde_global_base_caisse END) AS '2025',
    MAX(CASE WHEN annee = 2026 THEN solde_global_base_caisse END) AS '2026'
FROM PerspectivesEconomiques
UNION
SELECT 
    'Solde Primaire Base Caisse' AS Agrégat_Macroéconomique,
    MAX(CASE WHEN annee = 2024 THEN solde_primaire_base_caisse END) AS '2024',
    MAX(CASE WHEN annee = 2025 THEN solde_primaire_base_caisse END) AS '2025',
    MAX(CASE WHEN annee = 2026 THEN solde_primaire_base_caisse END) AS '2026'
FROM PerspectivesEconomiques
UNION
SELECT 
    'Taux de Change Dollar/Ariary' AS Agrégat_Macroéconomique,
    MAX(CASE WHEN annee = 2024 THEN taux_change_dollar_ariary END) AS '2024',
    MAX(CASE WHEN annee = 2025 THEN taux_change_dollar_ariary END) AS '2025',
    MAX(CASE WHEN annee = 2026 THEN taux_change_dollar_ariary END) AS '2026'
FROM PerspectivesEconomiques
UNION
SELECT 
    'Taux de Change Euro/Ariary' AS Agrégat_Macroéconomique,
    MAX(CASE WHEN annee = 2024 THEN taux_change_euro_ariary END) AS '2024',
    MAX(CASE WHEN annee = 2025 THEN taux_change_euro_ariary END) AS '2025',
    MAX(CASE WHEN annee = 2026 THEN taux_change_euro_ariary END) AS '2026'
FROM PerspectivesEconomiques
UNION
SELECT 
    'Taux Investissement Public/PIB' AS Agrégat_Macroéconomique,
    MAX(CASE WHEN annee = 2024 THEN taux_investissement_public_pib END) AS '2024',
    MAX(CASE WHEN annee = 2025 THEN taux_investissement_public_pib END) AS '2025',
    MAX(CASE WHEN annee = 2026 THEN taux_investissement_public_pib END) AS '2026'
FROM PerspectivesEconomiques
UNION
SELECT 
    'Taux Investissement Privé/PIB' AS Agrégat_Macroéconomique,
    MAX(CASE WHEN annee = 2024 THEN taux_investissement_prive_pib END) AS '2024',
    MAX(CASE WHEN annee = 2025 THEN taux_investissement_prive_pib END) AS '2025',
    MAX(CASE WHEN annee = 2026 THEN taux_investissement_prive_pib END) AS '2026'
FROM PerspectivesEconomiques
UNION
SELECT 
    'Taux Pression Fiscale/PIB' AS Agrégat_Macroéconomique,
    MAX(CASE WHEN annee = 2024 THEN taux_pression_fiscale_pib END) AS '2024',
    MAX(CASE WHEN annee = 2025 THEN taux_pression_fiscale_pib END) AS '2025',
    MAX(CASE WHEN annee = 2026 THEN taux_pression_fiscale_pib END) AS '2026'
FROM PerspectivesEconomiques;
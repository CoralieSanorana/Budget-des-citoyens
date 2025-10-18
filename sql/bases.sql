create database Budget_citoyens;
use Budget_citoyens;

-- Table pour les perspectives économiques et macroéconomiques
CREATE TABLE PerspectivesEconomiques (
    id INT PRIMARY KEY AUTO_INCREMENT,
    annee VARCHAR(4),
    pib_nominal DECIMAL(15, 2),
    taux_croissance DECIMAL(5, 2),
    indice_prix_consommation DECIMAL(5, 2),
    ratio_depenses_publiques_pib DECIMAL(5, 2),
    solde_global_base_caisse DECIMAL(5, 2),
    solde_primaire_base_caisse DECIMAL(15, 2),
    taux_change_dollar_ariary DECIMAL(10, 2),
    taux_change_euro_ariary DECIMAL(10, 2),
    taux_investissement_public_pib DECIMAL(5, 2),
    taux_investissement_prive_pib DECIMAL(5, 2),
    taux_pression_fiscale_pib DECIMAL(5, 2)
);

-- Table pour les taux de croissance sectorielle
CREATE TABLE TauxCroissanceSectorielle (
    id INT PRIMARY KEY AUTO_INCREMENT,
    annee VARCHAR(4),
    secteur VARCHAR(50),
    taux_croissance_2024 DECIMAL(5, 2),
    taux_croissance_2025 DECIMAL(5, 2),
    perspective_economique_id INT,
    FOREIGN KEY (perspective_economique_id) REFERENCES PerspectivesEconomiques(id)
);

-- Table pour les recettes par source
CREATE TABLE RecettesParSource (
    id INT PRIMARY KEY AUTO_INCREMENT,
    annee VARCHAR(4),
    categorie VARCHAR(50),
    montant_2024 DECIMAL(15, 2),
    montant_2025 DECIMAL(15, 2)
);

-- Table pour les recettes fiscales intérieures
CREATE TABLE RecettesFiscalesInterieures (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nature_impot VARCHAR(200),
    montant_2024 DECIMAL(15, 2),
    montant_2025 DECIMAL(15, 2),
    recettes_par_source_id INT,
    FOREIGN KEY (recettes_par_source_id) REFERENCES RecettesParSource(id)
);

-- Table pour les recettes douanières
CREATE TABLE RecettesDouanieres (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nature_droit_taxe VARCHAR(200),
    montant_2024 DECIMAL(15, 2),
    montant_2025 DECIMAL(15, 2),
    recettes_par_source_id INT,
    FOREIGN KEY (recettes_par_source_id) REFERENCES RecettesParSource(id)
);

-- Table pour les recettes non fiscales
CREATE TABLE RecettesNonFiscales (
    id INT PRIMARY KEY AUTO_INCREMENT,
    categorie VARCHAR(200),
    montant_2024 DECIMAL(15, 2),
    montant_2025 DECIMAL(15, 2),
    recettes_par_source_id INT,
    FOREIGN KEY (recettes_par_source_id) REFERENCES RecettesParSource(id)
);

-- Table pour les dons
CREATE TABLE Dons (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type_don VARCHAR(50),
    montant_2024 DECIMAL(15, 2),
    montant_2025 DECIMAL(15, 2),
    recettes_par_source_id INT,
    FOREIGN KEY (recettes_par_source_id) REFERENCES RecettesParSource(id)
);

-- Table pour les dépenses par nature économique
CREATE TABLE DepensesParNature (
    id INT PRIMARY KEY AUTO_INCREMENT,
    rubrique VARCHAR(200),
    montant_2024 DECIMAL(15, 2),
    montant_2025 DECIMAL(15, 2)
);

-- Table pour les intérêts de la dette
CREATE TABLE InteretsDette (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type_dette VARCHAR(50),
    montant_2024 DECIMAL(15, 2),
    montant_2025 DECIMAL(15, 2),
    depenses_par_nature_id INT,
    FOREIGN KEY (depenses_par_nature_id) REFERENCES DepensesParNature(id)
);

-- Table pour les dépenses de soldes et pensions
CREATE TABLE DepensesSoldesPensions (
    id INT PRIMARY KEY AUTO_INCREMENT,
    libelle VARCHAR(200),
    montant_2024 DECIMAL(15, 2),
    montant_2025 DECIMAL(15, 2),
    ecart DECIMAL(15, 2),
    depenses_par_nature_id INT,
    FOREIGN KEY (depenses_par_nature_id) REFERENCES DepensesParNature(id)
);

-- Table pour les postes budgétaires autorisés
CREATE TABLE PostesBudgetaires (
    id INT PRIMARY KEY AUTO_INCREMENT,
    ministere VARCHAR(200),
    nombre_postes INT,
    depenses_soldes_pensions_id INT,
    FOREIGN KEY (depenses_soldes_pensions_id) REFERENCES DepensesSoldesPensions(id)
);

-- Table pour les dépenses de fonctionnement
CREATE TABLE DepensesFonctionnement (
    id INT PRIMARY KEY AUTO_INCREMENT,
    categorie VARCHAR(200),
    montant_2024 DECIMAL(15, 2),
    montant_2025 DECIMAL(15, 2),
    ecart DECIMAL(15, 2),
    observations TEXT,
    depenses_par_nature_id INT,
    FOREIGN KEY (depenses_par_nature_id) REFERENCES DepensesParNature(id)
);

-- Table pour les dépenses d'investissement
CREATE TABLE DepensesInvestissement (
    id INT PRIMARY KEY AUTO_INCREMENT,
    source_financement VARCHAR(50),
    montant_2024 DECIMAL(15, 2),
    montant_2025 DECIMAL(15, 2),
    depenses_par_nature_id INT,
    FOREIGN KEY (depenses_par_nature_id) REFERENCES DepensesParNature(id)
);

-- Table pour la répartition des dépenses par rattachement administratif
CREATE TABLE RepartitionDepensesAdministratif (
    id INT PRIMARY KEY AUTO_INCREMENT,
    institution_ministere VARCHAR(200),
    montant_2024 DECIMAL(15, 2),
    montant_2025 DECIMAL(15, 2),
    depenses_par_nature_id INT,
    FOREIGN KEY (depenses_par_nature_id) REFERENCES DepensesParNature(id)
);

-- Table pour le déficit budgétaire
CREATE TABLE DeficitBudgetaire (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type_financement VARCHAR(50),
    montant DECIMAL(15, 2)
);

-- Table pour les nouvelles dispositions fiscales
CREATE TABLE DispositionsFiscales (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type_impot VARCHAR(200),
    description TEXT
);

-- Table pour les acronymes
CREATE TABLE Acronymes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    acronyme VARCHAR(10),
    definition VARCHAR(200)
);

-- Table pour le glossaire
CREATE TABLE Glossaire (
    id INT PRIMARY KEY AUTO_INCREMENT,
    terme VARCHAR(200),
    definition TEXT
);

-- Insertion des données dans PerspectivesEconomiques
INSERT INTO PerspectivesEconomiques (annee, pib_nominal, taux_croissance, indice_prix_consommation, ratio_depenses_publiques_pib, solde_global_base_caisse, solde_primaire_base_caisse, taux_change_dollar_ariary, taux_change_euro_ariary, taux_investissement_public_pib, taux_investissement_prive_pib, taux_pression_fiscale_pib) VALUES
('2024', 78945.4, 4.4, 8.2, 16.2, -4.3, 214.2, 4508.6, 4905.5, 6.1, 14.6, 10.6),
('2025', 88851.6, 5.0, 7.1, 18.4, -4.1, 1097.6, 4688.8, 5275.2, 9.6, 12.0, 11.2),
('2026', 99826.3, 5.2, 7.2, 17.8, -4.1, 866.0, 4853.2, 5532.7, 8.3, 13.7, 11.8);

-- Insertion des données dans TauxCroissanceSectorielle
INSERT INTO TauxCroissanceSectorielle (annee, secteur, taux_croissance_2024, taux_croissance_2025, perspective_economique_id) VALUES
('2024', 'SECTEUR PRIMAIRE', 5.3, 7.8, 1),
('2025', 'Agriculture', 6.0, 9.5, 2),
('2025', 'Élevage et pêche', 3.9, 4.0, 2),
('2025', 'Sylviculture', 1.0, 1.1, 2),
('2024', 'SECTEUR SECONDAIRE', -3.3, 3.4, 1),
('2025', 'Industrie extractive', -20.8, 4.0, 2),
('2025', 'Alimentaire, boisson, tabac', 0.9, 2.4, 2),
('2025', 'Textile', 31.6, 4.0, 2),
('2025', 'Bois, papiers, imprimerie', 0.4, 0.7, 2),
('2025', 'Matériaux de construction', 7.9, 8.0, 2),
('2025', 'Industrie métallique', 7.2, 7.3, 2),
('2025', 'Machine, matériels électriques', 3.1, 3.2, 2),
('2025', 'Industries diverses', 0.5, 0.6, 2),
('2025', 'Électricité, eau, gaz', 3.9, 4.0, 2),
('2024', 'SECTEUR TERTIAIRE', 5.0, 5.4, 1),
('2025', 'BTP', 3.2, 3.6, 2),
('2025', 'Commerce, entretiens, réparations', 4.2, 4.3, 2),
('2025', 'Hôtel, restaurant', 14.7, 14.9, 2),
('2025', 'Transport', 7.0, 7.2, 2),
('2025', 'Poste et télécommunication', 13.4, 13.7, 2),
('2025', 'Banque, assurance', 5.3, 6.1, 2),
('2025', 'Services aux entreprises', 2.3, 2.4, 2),
('2025', 'Administration', 1.7, 1.9, 2),
('2025', 'Éducation', 1.7, 1.8, 2),
('2025', 'Santé', 1.8, 1.9, 2),
('2025', 'Services rendus aux ménages', 1.3, 1.4, 2);

-- Insertion des données dans RecettesParSource
INSERT INTO RecettesParSource (annee, categorie, montant_2024, montant_2025) VALUES
('2024', 'Impôts', 4636.5, 5628.4),
('2024', 'Douanes', 3768.0, 4366.0),
('2024', 'Recettes non fiscales', 345.8, 491.7),
('2024', 'Dons', 1086.3, 2476.6),
('2025', 'Total', 9636.6, 12626.7);

-- Insertion des données dans RecettesFiscalesInterieures
INSERT INTO RecettesFiscalesInterieures (nature_impot, montant_2024, montant_2025, recettes_par_source_id) VALUES
('Impôt sur les revenus', 1179.0, 1411.4, 1),
('Impôt sur les revenus Salariaux et Assimilés', 848.2, 889.9, 1),
('Impôt sur les revenus des Capitaux Mobiliers', 78.2, 93.7, 1),
('Impôt sur les plus-values Immobilières', 14.0, 18.3, 1),
('Impôt Synthétique', 132.3, 164.7, 1),
('Droit d’Enregistrement', 49.0, 62.8, 1),
('Taxe sur la Valeur Ajoutée (y compris Taxe sur les transactions Mobiles)', 1400.2, 1742.2, 1),
('Impôt sur les marchés Publics', 148.7, 250.0, 1),
('Droit d’Accise (y compris Taxe environnementale)', 754.1, 955.4, 1),
('Taxes sur les Assurances', 17.2, 20.6, 1),
('Droit de Timbres', 14.1, 16.8, 1),
('Autres', 1.5, 2.7, 1);

-- Insertion des données dans RecettesDouanieres
INSERT INTO RecettesDouanieres (nature_droit_taxe, montant_2024, montant_2025, recettes_par_source_id) VALUES
('Droit de douane', 847.5, 1010.7, 2),
('TVA à l’importation', 1768.3, 2148.3, 2),
('Taxe sur les produits pétroliers', 308.0, 326.0, 2),
('TVA sur les produits pétroliers', 842.8, 879.0, 2),
('Droit de navigation', 1.2, 1.9, 2),
('Autres', 0.2, 0.1, 2);

-- Insertion des données dans RecettesNonFiscales
INSERT INTO RecettesNonFiscales (categorie, montant_2024, montant_2025, recettes_par_source_id) VALUES
('Dividendes', 89.5, 120.2, 3),
('Productions immobilières financières', 0.5, 2.1, 3),
('Redevance de pêche', 10.0, 15.0, 3),
('Redevance minières', 84.9, 331.2, 3),
('Autres redevance', 9.7, 10.0, 3),
('Produits des activités et autres', 11.1, 8.1, 3),
('Autres', 140.1, 5.2, 3);

-- Insertion des données dans Dons
INSERT INTO Dons (type_don, montant_2024, montant_2025, recettes_par_source_id) VALUES
('Courants', 0.3, 31.0, 4),
('Capital', 1086.0, 2445.6, 4);

-- Insertion des données dans DepensesParNature
INSERT INTO DepensesParNature (rubrique, montant_2024, montant_2025) VALUES
('Intérêts de la dette', 672.0, 756.5),
('Dépenses courantes de solde (hors indemnités)', 3814.5, 3846.4),
('Dépenses courantes hors solde', 3069.0, 2304.3),
('Indemnités', 244.8, 244.8),
('Biens/Services', 573.2, 504.7),
('Transferts et subventions', 2251.0, 1554.8),
('Dépenses d’investissement', 4836.8, 8537.2),
('PIP sur financement interne', 1262.5, 2377.3),
('PIP sur financement externe', 3574.3, 6159.9),
('Autres opérations nettes du trésor', 390.2, 860.6),
('TOTAL', 12782.4, 16304.9);

-- Insertion des données dans InteretsDette
INSERT INTO InteretsDette (type_dette, montant_2024, montant_2025, depenses_par_nature_id) VALUES
('Intérêts de la dette extérieure', 287.6, 314.2, 1),
('Intérêts de la dette intérieure', 384.4, 442.2, 1);

-- Insertion des données dans DepensesSoldesPensions
INSERT INTO DepensesSoldesPensions (libelle, montant_2024, montant_2025, ecart, depenses_par_nature_id) VALUES
('Dépenses de solde', 3814.5, 3846.4, 31.9, 2);

-- Insertion des données dans PostesBudgetaires
INSERT INTO PostesBudgetaires (ministere, nombre_postes, depenses_soldes_pensions_id) VALUES
('Ministère des Forces Armées', 1000, 1),
('Ministère de la Santé Publique', 300, 1),
('Ministère de la Sécurité Publique', 1000, 1),
('Ministère de l’Éducation Nationale', 3000, 1),
('Ministère de l’Enseignement Technique et de la Formation Professionnelle', 250, 1),
('Ministère de l’Enseignement Supérieur et de la Recherche Scientifique', 100, 1),
('Ministère délégué en charge de la Gendarmerie Nationale', 1000, 1);

-- Insertion des données dans DepensesFonctionnement
INSERT INTO DepensesFonctionnement (categorie, montant_2024, montant_2025, ecart, observations, depenses_par_nature_id) VALUES
('Indemnités', 244.8, 244.8, 0, 'Aucune hausse sur les enveloppes globales de fonctionnement allouées aux Institutions et Ministères pour l’année budgétaire 2025 ;', 3),
('Biens et Services', 573.2, 504.7, -68.5, 'Rationalisation des allocations budgétaires : exclusion des crédits attribués aux fêtes et cérémonies ;', 4),
('Transferts', 2251.0, 1554.8, -696.2, 'Maintien du financement des secteurs sociaux prioritaires : santé, éducation, énergie, etc.', 5);

-- Insertion des données dans DepensesInvestissement
INSERT INTO DepensesInvestissement (source_financement, montant_2024, montant_2025, depenses_par_nature_id) VALUES
('PIP interne', 1262.5, 2377.3, 6),
('PIP externe', 3574.3, 6159.9, 6);

-- Insertion des données dans RepartitionDepensesAdministratif
INSERT INTO RepartitionDepensesAdministratif (institution_ministere, montant_2024, montant_2025, depenses_par_nature_id) VALUES
('Présidence de la République', 177.1, 224.7, 7),
('Sénat', 22.1, 21.3, 7),
('Assemblée Nationale', 87.4, 85.9, 7),
('Haute Cour Constitutionnelle', 11.9, 9.3, 7),
('Primature', 278.3, 339.9, 7),
('Conseil du Fampihavanana Malagasy', 6.7, 6.3, 7),
('Commission Électorale Nationale Indépendante', 113.3, 16.4, 7),
('Ministère de la Défense Nationale', 557.0, 543.2, 7),
('Ministère des Affaires Étrangères', 99.2, 104.7, 7),
('Ministère de la Justice', 199.6, 219.8, 7),
('Ministère de l’Intérieur', 150.2, 134.7, 7),
('Ministère de l’Économie et des Finances', 2848.0, 2332.7, 7),
('Ministère de la Sécurité Publique', 228.3, 229.2, 7),
('Ministère de l’Industrialisation et du Commerce', 113.2, 119.6, 7),
('Ministère de la Décentralisation et de l’Aménagement du Territoire', 356.8, 568.1, 7),
('Ministère du Travail, de l’Emploi et de la Fonction Publique', 31.8, 33.7, 7),
('Ministère du Tourisme et de l’Artisanat', 19.2, 43.9, 7),
('Ministère de l’Enseignement Supérieur et de la Recherche Scientifique', 284.2, 285.6, 7),
('Ministère de l’Environnement et du Développement Durable', 94.4, 188.8, 7),
('Ministère de l’Éducation Nationale', 1532.8, 1562.0, 7),
('Ministère des Transports et de la Météorologie', 63.9, 216.3, 7),
('Ministère de la Santé Publique', 716.6, 921.0, 7),
('Ministère de la Communication et de la Culture', 38.4, 32.1, 7),
('Ministère des Travaux Publics', 1217.3, 2327.5, 7),
('Ministère des Mines et des Ressources Stratégiques', 18.3, 18.1, 7),
('Ministère de l’Énergie et des Hydrocarbures', 407.9, 1332.0, 7),
('Ministère de l’Eau, de l’Assainissement et de l’Hygiène', 306.1, 600.2, 7),
('Ministère de l’Agriculture et de l’Élevage', 469.8, 795.5, 7),
('Ministère de la Pêche et de l’Économie Bleue', 29.9, 28.8, 7),
('Ministère de l’Enseignement Technique et de la Formation Professionnelle', 103.7, 94.8, 7),
('Ministère de l’Artisanat et des Métiers', 2.5, 0.0, 7),
('Ministère du Développement Numérique, des Postes et des Télécommunications', 8.4, 8.8, 7),
('Ministère de la Population et des Solidarités', 99.1, 193.4, 7),
('Ministère de la Jeunesse et des Sports', 40.5, 58.1, 7),
('Secrétariat d’État en charge des Nouvelles Villes et de l’Habitat', 247.1, 138.8, 7),
('Ministère délégué chargé de la Gendarmerie', 414.8, 446.4, 7),
('Secrétariat d’État en charge de la Souveraineté Alimentaire', 0.0, 127.3, 7),
('Haut Conseil pour la Défense de la Démocratie et de l’État de Droit (HCDDED)', 2.1, 2.0, 7),
('Commission Nationale Indépendante des Droits de l’Homme (CNIDH)', 2.1, 2.0, 7),
('Haute Cour de Justice', 3.7, 3.5, 7),
('Total Institutions et Ministères', 11395.9, 14408.9, 7),
('Total Organes Constitutionnels', 4.2, 4.0, 7),
('Total Hors Opérations d’ordre', 11403.8, 14416.4, 7);

-- Insertion des données dans DeficitBudgetaire
INSERT INTO DeficitBudgetaire (type_financement, montant) VALUES
('Déficit budgétaire', 3642.2),
('Financement extérieur', 3147.6),
('Financement intérieur', 494.6);

-- Insertion des données dans DispositionsFiscales
INSERT INTO DispositionsFiscales (type_impot, description) VALUES
('Impôt sur les revenus (IR)', 'Minima de perception pour les compagnies pétrolières : 1 000 000 Ar, majoré de 7‰ du chiffre d’affaires annuel HT (Art. 01.01.14 a) ; Minima de perception pour les détaillants de carburant : 1‰ du chiffre d’affaires HT (Art. 01.01.14 b).'),
('Impôt sur les marchés publics (IMP)', 'Exonération des revenus des marchés financés par des fonds RSE et des transactions avec la Banky Foiben’i Madagasikara (Art. 01.01.46).'),
('Impôt synthétique (IS)', 'Modifications des délais de déclaration fiscale : Déclarations à soumettre « au plus tard le 15 du mois suivant » (Art. 01.02.07 bis).'),
('Impôt sur les revenus salariaux et assimilés (IRSA)', 'Limitation à 2% du salaire brut pour la déduction des cotisations de santé (Art. 01.03.09) ; Réduction d’impôt de 2 000 Ar pour les personnes à charge (Art. 01.03.19).'),
('Impôt sur les plus values immobilières (IPVI)', 'Imposition des plus-values immobilières : Libératoire de l’impôt sur les revenus et de l’impôt synthétique, avec 30% des recettes affectées au Fonds National Foncier (Art. 01.05.01).'),
('Droit d’enregistrement', 'Base imposable pour les mutations immobilières : non inférieure à la valeur administrative ; pour les ventes aux enchères, la base est le prix le plus élevé entre vente et valeur administrative (Art. 02.01.05) ; Minimum de perception pour les droits proportionnels : Fixé à 20 000 Ar, même si les sommes et valeurs ne génèrent pas ce montant (Art. 02.02.02).'),
('Taxe sur les transactions mobiles', 'Opérations soumises à la taxe : transferts d’argent, paiements de biens et services, transferts vers des comptes bancaires, et réception d’argent en provenance de l’étranger (Art. 03.02.14) ; Responsabilité de paiement de la taxe : à la charge de la personne effectuant l’envoi pour les opérations domestiques et de la personne recevant l’argent pour les transferts internationaux (Art. 03.02.15) ; Exonérations : transferts inférieurs à Ar 150 000, paiements d’impôts, transferts effectués par l’État ou les institutions publiques, et transferts liés aux projets financés par des fonds externes (Art. 03.02.16) ; Taux de la taxe fixé à 0,5%, appliqué sur le montant transféré ou reçu (Art. 03.02.18).'),
('Taxe sur la valeur ajoutée', 'Assujettissement à la TVA : Pour les entreprises avec un chiffre d’affaires annuel ≥ 400 000 000 Ar et pour les prestataires non-résidents exerçant des activités à Madagascar (Art. 06.01.04) ; TVA à 10 % : Applicable aux importations et ventes de gaz butane et de leurs contenants (Art. 06.01.12).'),
('Impôt foncier sur le terrain et impôt sur les propriétés bâtis', 'Date limite pour le dépôt des déclarations fiscales d’impôt foncier sur les terrains : fixée au 15 octobre (Art. 10.01.05) ; Établissement de l’impôt foncier : effectué par le Centre fiscal compétent en fonction du lieu d’implantation du terrain (Art. 10.01.06 et 10.02.07) ; Base d’imposition pour l’IFT, l’IFPB, et la TAFPB : valeur vénale ou locative, avec un taux de 1 %, une exonération de 5 ans pour les nouvelles constructions, et un plafonnement annuel à 200 000 000 Ar (Art. 30.02.22).'),
('Impôt sur les revenus des capitaux mobiliers', 'Assujettissement à l’IRCM pour les revenus des capitaux mobiliers, à l’exception de certains paiements (Art. 30.02.13) ; Dividendes et autres distributions sont soumis à un taux de 10% d’IRCM (Art. 30.02.13).'),
('Droits d’enregistrement et de timbre', 'Taux réduits pour les actes de formation, prorogation de société et augmentation de capital : Barème progressif, avec un taux de 0% applicable après un cumul de 10 000 000 Ar de droits payés (Art. 30.02.14) ; Droits d’enregistrement pour cession de bail ou concession : Fixés à 4% du montant de la valeur, avec des taxes supplémentaires de 2% (publicité foncière) et 1% (additionnelle) (Art. 30.02.14).'),
('Taxe sur les chiffres d’affaires', 'Exonération de TVA sur les paiements d’intérêts, frais et commissions liées aux emprunts, et sur les effets personnels importés des expatriés (Art. 30.02.17) ; Taux zéro de TVA pour les exportations et cessions de produits miniers entre le Titulaire et l’Entité de Transformation (Art. 30.02.20).'),
('Nouvelles dispositions dans les codes de douanes', 'Création possible de zones franches, ports francs, zones économiques spéciales et autres délimitations territoriales avec régime douanier spécifique, conformément au présent Code (Art. 4, 2°) ; Application des régimes douaniers des zones franches à toute structure prévue à l’article 4.2, concernant l’importation, l’exportation et la circulation des marchandises sur le territoire douanier national (Art. 4, 3°) ; Mise en place, fonctionnement et conditions d’exploitation des zones franches évalués par l’administration douanière, conformément à la législation et réglementation douanières en vigueur (Art. 4, 4°) ; Mesures tarifaires ou non tarifaires des autres entités publiques soumises à l’étude, validation et décision de l’Administration des Douanes (Art. 6, 2°) ; Vérification par l’Administration des Douanes du respect des critères d’origine des marchandises déclarées, selon les modalités fixées par règlement (Art. 21, 3°) ; Déclaration des éléments sur la valeur considérée comme un acte authentique liant le déclarant à l’administration des douanes, comme la déclaration en détail (Art. 25, 4°) ; Imposition d’un droit d’accise sur certains produits consommés dans le territoire douanier, qu’ils soient importés, récoltés ou fabriqués, liquidé, perçu et recouvré par les douanes selon les règles du Code et modalités tarifaires fixées dans la Loi de Finances (Art. 257).');

-- Insertion des données dans Acronymes
INSERT INTO Acronymes (acronyme, definition) VALUES
('BAD', 'Banque Africaine pour le Développement'),
('CRCM', 'Caisse de Retraite Civile et Militaire'),
('HT', 'Hors Taxe'),
('IFPB', 'Impôt Foncier sur la Propriété Bâtie'),
('IFT', 'Impôt Foncier sur le Terrain'),
('IMP', 'Impôt sur les Marchés Publics'),
('IR', 'Impôt sur les Revenus'),
('IRCM', 'Impôt Sur les Revenus des Capitaux Mobiliers'),
('KW', 'Kilowatt'),
('LF', 'Loi de Finances'),
('LFI', 'Loi de Finances Initiale'),
('LFR', 'Loi de Finances Rectificative'),
('MW', 'Mégawatt'),
('OGT', 'Opérations Globales du Trésor'),
('PIB', 'Produit Intérieur Brut'),
('PIP', 'Programme d’Investissements Publics'),
('PLF', 'Projet de Loi de Finances'),
('PTF', 'Partenaires Technique et Financier'),
('SADC', 'Southern African Development Community'),
('TAFPB', 'Taxe Annexe à l’IFPB'),
('TTM', 'Taxe sur les Transactions Mobiles'),
('TVA', 'Taxe sur la Valeur Ajoutée');

-- Insertion des données dans Glossaire
INSERT INTO Glossaire (terme, definition) VALUES
('Souveraineté alimentaire', 'Capacité d’un pays à produire suffisamment de nourriture pour répondre aux besoins de sa population, en réduisant sa dépendance vis-à-vis des importations.'),
('Transition énergétique', 'Processus de passage des énergies polluantes (charbon, pétrole) vers des énergies renouvelables (solaire, éolien), afin de réduire l’impact sur l’environnement et de garantir une production énergétique durable.'),
('Zones Économiques Spéciales (ZES)', 'Zones où des conditions spéciales (avantages fiscaux, simplifications administratives) sont mises en place pour attirer les investisseurs et stimuler le développement économique.'),
('Transition écologique', 'Ensemble des actions visant à protéger l’environnement, comme la réduction des émissions de carbone, le recyclage, ou l’utilisation d’énergies propres.'),
('Soutenabilité des finances publiques', 'Capacité d’un pays à gérer ses finances de manière responsable, en évitant un endettement excessif tout en finançant des investissements nécessaires pour le développement durable.'),
('Fonds de Contre-Valeur (FCV)', 'Fonds issus de dons ou d’aides financières, utilisés pour financer des projets spécifiques, comme le développement d’infrastructures ou le soutien à des secteurs prioritaires.'),
('Indicateurs macroéconomiques', 'Données chiffrées, comme le taux de croissance ou l’inflation, qui permettent d’évaluer la santé économique d’un pays.'),
('Taxe sur les Transactions Mobiles (TTM)', 'Impôt appliqué aux transferts d’argent, paiements et autres transactions effectués via des téléphones mobiles.'),
('Taux de Pression Fiscale', 'Pourcentage des impôts collectés par rapport à la richesse totale produite dans le pays (PIB). Ce taux mesure l’effort fiscal supporté par les contribuables.');
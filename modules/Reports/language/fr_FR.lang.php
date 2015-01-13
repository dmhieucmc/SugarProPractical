<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
	

$mod_strings = array (
  'CHART_COUNT_PATTERN' => '{count} {module} ou {group_label} est {group_text}',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} est {numerical_value}{thousands} ou {group_label} est {group_text}',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} de {currency_symbol}{numerical_value}{thousands} ou {group_label} est {group_text}',
  'DEFAULT_REPORT_TITLE_1' => 'Prévisions du Trimestre courant',
  'DEFAULT_REPORT_TITLE_10' => 'Nouveaux Tickets par Mois',
  'DEFAULT_REPORT_TITLE_11' => 'Portefeuille par Type par Utilisateur',
  'DEFAULT_REPORT_TITLE_12' => 'Portefeuille par Equipe par Utilisateur',
  'DEFAULT_REPORT_TITLE_13' => 'Tâches par Equipe par Utilisateur',
  'DEFAULT_REPORT_TITLE_14' => 'Appels par Equipe Par Utilisateur',
  'DEFAULT_REPORT_TITLE_15' => 'Réunions par Equipe par Utilisateur',
  'DEFAULT_REPORT_TITLE_16' => 'Comptes par Type par Activité',
  'DEFAULT_REPORT_TITLE_17' => 'Affaires Gagnées par Origine Principale',
  'DEFAULT_REPORT_TITLE_18' => 'Origine Principale',
  'DEFAULT_REPORT_TITLE_19' => 'Echelle pour Mon Utilisation (Ce jour)',
  'DEFAULT_REPORT_TITLE_2' => 'Prévisions détaillées',
  'DEFAULT_REPORT_TITLE_20' => 'Echelle pour Mon Utilisation (7 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_21' => 'Echelle pour Mon Utilisation (30 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_22' => 'Echelle pour l&#39;utilisation de Mon Module (Ce jour)',
  'DEFAULT_REPORT_TITLE_23' => 'Echelle pour l&#39;utilisation de Mon Module (7 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_24' => 'Echelle pour l&#39;utilisation de Mon Module (30 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_25' => 'Echelle pour l&#39;utilisation des utilisateurs (7 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_26' => 'Echelle pour l&#39;utilisation des utilisateurs (30 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_27' => 'Modules utilisés pour Mes Rapports (30 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_28' => 'Requêtes lentes',
  'DEFAULT_REPORT_TITLE_29' => 'Mes Enregistrements dernièrement modifiés (7 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_3' => 'Liste des Comptes Partenaire',
  'DEFAULT_REPORT_TITLE_31' => 'Mes Enregistrements récemments modifiés (30 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_32' => 'Mes Enregistrements modifiés par mes Rapports (30 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_4' => 'Liste des Comptes Client',
  'DEFAULT_REPORT_TITLE_41' => 'Sessions d&#39;utilisateurs actifs (7 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_42' => 'Total des Sessions Utilisateurs (7 Derniers Jours)',
  'DEFAULT_REPORT_TITLE_43' => 'Mes Comptes Clients',
  'DEFAULT_REPORT_TITLE_44' => 'Mes nouveaux Comptes Clients',
  'DEFAULT_REPORT_TITLE_45' => 'Affaires par Phases de vente',
  'DEFAULT_REPORT_TITLE_46' => 'Affaires par Type',
  'DEFAULT_REPORT_TITLE_47' => 'Ouvrir Appels',
  'DEFAULT_REPORT_TITLE_48' => 'Ouvrir Réunions',
  'DEFAULT_REPORT_TITLE_49' => 'Ouvrir Tâches',
  'DEFAULT_REPORT_TITLE_5' => 'Liste des appels par date de dernier contact',
  'DEFAULT_REPORT_TITLE_50' => 'Affaires gagnées par Compte',
  'DEFAULT_REPORT_TITLE_51' => 'Affaires gagnées par Utilisateur',
  'DEFAULT_REPORT_TITLE_52' => 'Toutes les Affaires en cours',
  'DEFAULT_REPORT_TITLE_53' => 'Toutes les Affaires terminées',
  'DEFAULT_REPORT_TITLE_56' => 'Produits des Affaires éclaté par les périodes passées, présentes et futures et par mois',
  'DEFAULT_REPORT_TITLE_57' => 'Phases de vente des Affaires par périodes passées, présentes et futures et par mois',
  'DEFAULT_REPORT_TITLE_58' => 'Dernière/Actuelle/Prochaine Prévision par trimestre',
  'DEFAULT_REPORT_TITLE_59' => 'Phases de vente des Affaires pour les subordonnés sur la période en cours',
  'DEFAULT_REPORT_TITLE_6' => 'Affaires par Origine Principale',
  'DEFAULT_REPORT_TITLE_7' => 'Tickets Ouverts Par Utilisateur Par Statut',
  'DEFAULT_REPORT_TITLE_8' => 'Tickets Ouverts par Mois Par Utilisateur',
  'DEFAULT_REPORT_TITLE_9' => 'Tickets Ouverts par Priorité Par Utilisateur',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'Toutes les heures',
    21600 => 'Toutes les 6 heures',
    43200 => 'Toutes les 12 heures',
    86400 => 'Quotidien',
    604800 => 'Hebdomadaire',
    1209600 => 'Toutes les 2 semaines',
    2419200 => 'Toutes les 4 semaines',
  ),
  'ERR_REPORT_DEACTIVATED' => 'Le rapport planifié "{0}" a été désactivé',
  'ERR_REPORT_DEACTIVATED_SUBJECT' => 'Les rapports planifiés ont été désactivé',
  'ERR_REPORT_INVALID' => 'La définition du rapport "{0}" contient des champs invalides : {1}',
  'ERR_REPORT_INVALID_SUBJECT' => 'Rapport invalide',
  'ERR_SELECT_COLUMN' => 'Veuillez sélectionner une colonne à afficher.',
  'LBL_1X2' => '1 X 2',
  'LBL_1_REPORT_ON' => '1. Rapport sur',
  'LBL_2X1' => '2 X 1',
  'LBL_2_FILTER' => '2. Filtres',
  'LBL_3_CHOOSE' => '3. Colonnes à afficher',
  'LBL_3_GROUP' => '3. Groupe',
  'LBL_4_CHOOSE' => '4. Choisir les colonnes à afficher',
  'LBL_5_CHART_OPTIONS' => '5. Options graphiques',
  'LBL_ACCOUNT' => 'Compte',
  'LBL_ACCOUNTS' => 'Comptes',
  'LBL_ACCOUNT_REPORTS' => 'Rapports sur les Comptes',
  'LBL_ACTIVITIES_REPORTS' => 'Rapport d&#39;activités',
  'LBL_ADDED_FAVORITES' => 'rapport(s) ajouté(s) à Mes Rapports Favoris.',
  'LBL_ADD_BTN_HELP' => 'Cliquer pour ajouter un nouveau groupe de filtre. Utiliser les groupes pour appliquer aux filtres les opérateurs logiques ET/OU.',
  'LBL_ADD_COLUMN' => 'Ajouter une colonne',
  'LBL_ADD_FILTER_TO' => 'Ajouter un filtre à',
  'LBL_ADD_GROUP' => 'Ajouter un groupe de filtres',
  'LBL_ADD_NEW_FILTER' => 'Ajouter un filtre',
  'LBL_ADD_RELATE' => 'Ajouter une Liaison',
  'LBL_ADVANCED_FILTERS' => 'Filtres avancés',
  'LBL_AFTER' => 'Après',
  'LBL_ALERT_CANT_ADD' => 'Vous ne pouvez pas ajouter un module lié sans avoir sélectionné une table de liaison.\\nSélectionnez un module dans la liste à gauche du bouton &#39;Ajouter une Liaison&#39;.',
  'LBL_ALL' => 'Au moins',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Tous les rapports publiés',
  'LBL_ALL_REPORTS' => 'Tous les Rapports',
  'LBL_ALT_INFORMATION' => 'Information',
  'LBL_ALT_SHOW' => 'Voir',
  'LBL_AND' => 'et',
  'LBL_ANY' => 'Tous',
  'LBL_ANY_ONE_OF' => 'N&#39;importe lequel de',
  'LBL_ASCENDING' => 'Ascendant',
  'LBL_ASSIGNED_TO_NAME' => 'Assigné à:',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'Sélectionnez au moins une colonne à afficher.',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Au moins une colonne-résumé.',
  'LBL_AVAILABLE_FIELDS' => 'Champs disponibles',
  'LBL_AVG' => 'MOYENNE',
  'LBL_BASIC_FILTERS' => 'Filtres',
  'LBL_BEFORE' => 'Avant',
  'LBL_BUG_REPORTS' => 'Rapports sur les Bugs',
  'LBL_BY_DAY' => 'Par Jour',
  'LBL_BY_FISCAL_QUARTER' => 'Par trimestre fiscal',
  'LBL_BY_FISCAL_YEAR' => 'Par année fiscale',
  'LBL_BY_MONTH' => 'Par Mois',
  'LBL_BY_QUARTER' => 'Par Trimestre',
  'LBL_BY_YEAR' => 'Par An',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Liste d&#39;Appels par dernière date de contact',
  'LBL_CALL_REPORTS' => 'Rapports sur les Appels',
  'LBL_CANCEL' => 'Annuler',
  'LBL_CANNOT_BE_EMPTY' => 'ne peut pas être vide.',
  'LBL_CANNOT_DISPLAY_CHART_MESSAGE' => 'Le graphique ne peut être affiché à cause de sa configuration.',
  'LBL_CASE_REPORTS' => 'Rapports sur les Tickets',
  'LBL_CHANGE' => 'Sélectionner',
  'LBL_CHART_DATA_HELP' => 'Choisir quelle information sera utilisée dans la réalisation du graphique.',
  'LBL_CHART_DESCRIPTION' => 'Description du graphique',
  'LBL_CHART_OPTIONS' => 'Options graphiques',
  'LBL_CHART_TYPE' => 'Type de Graphique',
  'LBL_CHOOSE_COLUMNS' => 'Choisir les Colonnes à Afficher',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Colonne(s) affichée(s)',
  'LBL_CHOOSE_SUMMARIES' => 'Choisir les lignes de regroupement à afficher',
  'LBL_CLEAR' => 'Effacer',
  'LBL_COLUMN_NAME' => 'Nom de la colonne',
  'LBL_COMBO_TYPE_AHEAD' => 'Chercher par Champ',
  'LBL_CONTACT' => 'Contact',
  'LBL_CONTACTS' => 'Contacts',
  'LBL_CONTACT_REPORTS' => 'Rapports sur les Contacts',
  'LBL_CONTAINS' => 'Contient',
  'LBL_CONTENT' => 'Contenu',
  'LBL_CONTRACT_REPORTS' => 'Rapports sur les Contrats',
  'LBL_COUNT' => 'COMPTEUR',
  'LBL_CREATE_CUSTOM_REPORT' => 'Assistant Rapport',
  'LBL_CREATE_REPORT' => 'Créer un Rapport',
  'LBL_CSV_TIMESTAMP' => 'Y_m_j_H_m_s',
  'LBL_CURRENT_FISCAL_QUARTER' => 'Trimestre fiscal en cours',
  'LBL_CURRENT_FISCAL_YEAR' => 'Année fiscale en cours',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Affaires validées dans le trimestre en cours',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Prévisions pour le trimestre en cours',
  'LBL_CURRENT_USER' => 'Utilisateur courant',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Liste des Comptes Clients',
  'LBL_DATE' => 'Date de début',
  'LBL_DATE_BASED_FILTERS' => '<i>Les filtres sur les dates sont basés sur le fuseau horaire de l&#39;utilisateur <b>Assigné</b> au rapport</i>',
  'LBL_DAY' => 'Jour',
  'LBL_DEFINE_FILTERS' => 'Filtre(s)',
  'LBL_DELETE' => 'Supprimer',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'Le champ suivant n est plus valide dans ce rapport :',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Veuillez éditer ce rapport et vous assurer que les autres paramètres sont toujours adéquats.',
  'LBL_DELETE_ERROR' => 'Seul le propriétaire du rapport ou un administrateur peuvent supprimer des rapports.',
  'LBL_DEL_THIS' => 'Supprimer',
  'LBL_DESCENDING' => 'Descendant',
  'LBL_DETAILED_FORECAST' => 'Prévisions Détaillées',
  'LBL_DISPLAY_COLS_HELP_DESC' => '<b>Pour choisir les colonnes à afficher :</b><br/><br/>1) Cliquer sur un module dans l&#39;onglet <b>Modules liés</b> que vous voulez utiliser pour en afficher les champs dans votre rapport. Par défaut, le module principal (à la racine de l&#39;arborescence) que vous avez choisi à l&#39;étape &#39;Selection du Module&#39; est sélectionné.<br/><br/><br />	Vous pouvez choisir les champs d&#39;un module lié (Noeud enfant dans l&#39;arborescence) en cliquant sur le module. Les modules liés aux modules liés au module principal peuvent eux aussi être sélectionnés. Le module que vous sélectionnez détermine quel champ reportable apparait dans l&#39;onglet <b>Champs Disponibles</b>.<br/><br/><br />	2) Cliquer sur le champ dans l&#39;onglet <b>Champs Disponibles</b> pour afficher la donnée contenue dans le champ dans votre rapport. Vous pouvez aussi rechercher le champ en tapant directement son nom dans la zone de saisie dans l&#39;onglet.<br/><br/><br />	Après avoir sélectionné le nombre de champs désiré du module choisi dans l&#39;onglet <b>Modules liés</b>, vous pouvez choisir un module différent duquel vous pourrez ajouter des champs additionnels. Vous pouvez sélectionner autant de champ que vous le voulez, mais le rapport sera géneré plus lentement et deviendra d&#39;autant moins lisible que vous ajouterez de champs additionnels.<br/><br/><br />	Vous pouvez changer l&#39;ordre des champs par simple drag and drop. Changer l&#39;ordre des champs change l&#39;ordre dans lequel seront affichées les colonnes du résultat.',
  'LBL_DISPLAY_COLUMNS' => 'Colonnes Affichées',
  'LBL_DISPLAY_SUMMARIES' => 'Champ(s) affiché(s) dans les lignes de regroupement',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Choisir l&#39;affichage des lignes de regroupement :</b><br/><br/>1) Sélectionnez un module dans l&#39;onglet <b>Modules Liés</b> que vous souhaitez utiliser pour les lignes de regroupement de vos rapport. Par défaut, le module principal (Racine de l&#39;arborescence) est sélectionné.<br/><br/><br />	Vous pouvez sélectionner un module lié (Noeud enfant dans l&#39;arborescence) en cliquant dessus. Dépliez le noeud pour voir les modules additionnels relatifs au modules liés. Le module que vous sélectionnez détermine quels seront les champs qui apparaitront dans l&#39;onglet <b>Champs Disponibles</b>.<br/><br/><br />	2) Cliquer sur un champ dans l&#39;onglet <b>Champs Disponibles</b> pour sélectionner des lignes de regroupement pour votre rapport. Vous pouvez aussi rechercher le champ en tapant directement dans la zone de saisie de l&#39;onglet.<br/><br/><br />	Après avoir choisi n&#39;importe quel nombre de champs dans le module sélectionné dans l&#39;onglet <b>Modules Liés</b>, vous pouvez choisir un module différent duquel vous pouvez là aussi sélectionner des champs additionnels pour le résumé de votre rapport.<br/><br/>Pour les rapport matrice, vous pouvez choisir plus d&#39;un champ pour afficher plusieurs valeurs au sein d&#39;une seule et même cellule dans votre rapport.',
  'LBL_DOES_NOT_CONTAIN' => 'Ne contient pas',
  'LBL_DOES_NOT_EQUAL' => 'Différent de',
  'LBL_DOWN' => 'Bas',
  'LBL_DO_ROUND' => 'Arrondir les nombres au dessus de 100000',
  'LBL_DO_ROUND_HELP' => 'Les nombres au dessus de 100000 seront arrondis dans les graphiques.<br>Exemple: 350000 sera affiché 350K.',
  'LBL_DUPLICATE_AS_MATRIX' => 'Sous forme de Matrice',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'En conservant le type de Rapport',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Sous forme de Rapport standard',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Sous forme de Rapport consolidé détaillé',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Sous forme de Rapport consolidé',
  'LBL_EDIT' => 'Editer',
  'LBL_EDITLAYOUT' => 'Editer la mise en page',
  'LBL_EMAIL_REPORTS' => 'Rapports sur les Emails',
  'LBL_ENDS_WITH' => 'Fini par',
  'LBL_END_DATE' => 'Date de fin',
  'LBL_EQUALS' => 'Egal',
  'LBL_EXACT' => 'Exactement',
  'LBL_EXPORT' => 'Export',
  'LBL_FAILURE_REPORT' => 'Echec: Rapport',
  'LBL_FAVORITE' => 'Favoris',
  'LBL_FAVORITES_TITLE' => 'Rapports: Mes Rapports Favoris',
  'LBL_FAVORITE_REPORTS' => 'Mes Rapports Favoris',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Mes Rapports Favoris',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Tous les champs utilisables dans les rapports du <B>module</B> apparaissent ici. Sélectionnez un champ.',
  'LBL_FIELD_NAME' => 'Nom du champ',
  'LBL_FILTER' => 'Filtres',
  'LBL_FILTERS' => 'Filtres',
  'LBL_FILTERS_END' => '.',
  'LBL_FILTERS_HELP_DESC' => '<b>Pour définir des Filtres :</b><br/><br/>1) Sélectionnez le module dans l&#39;onglet <b>Modules liés</b> pour lequel vous souhaitez définir des filtres. Par défaut, c&#39;est le premier module (au sommet de l&#39;arborescence) qui est sélectionné. <br/><br/><br />	Vous pouvez sélectionner un sous module (noeud fils dans l&#39;arborescence) en cliquant sur le module. Déplier le noeud pour voir les modules additionnels concernant le module relatif. Le module sélectionné détermine quels seront les champs reportable qui apparaitront dans l&#39;onglet <b>Champs Disponibles</b>.<br/><br/><br />	2) Sélectionnez un champ dans l&#39;onglet <b>Champs Disponibles</b> pour l&#39;ajouter aux filtres. Vous pouvez aussi rechercher le champ en tapant directement son nom dans dans le champ de saisie de l&#39;onglet.<br/><br/><br />	Après avoir choisi le nombre de champs désiré dans le module sélectionné dans l&#39;onglet <b>Modules liés</b>, vous pouvez choisir un module différent duquel vous pouvez sélectionner autant de champ que nécessaire pour être utilisé comme filtre.<br/><br/><br />	3) Choisir <b>ET</b> ou bien <b>OU</b> pour choisir si tous les filtres ou bien n&#39;importe quel filtre, respectivement, sont utilisés pour rechercher les résultats dans le rapport.<br/><br/><br />	4) [Optionnel] Cliquez sur <b>Ajouter un groupe de filtre</b> pour créer un groupe de filtres. Vous pouvez créer autant de groupes de filtre et autant de filtres dans chaque groupe que vous le voulez.<br/><br/><br />	5) [Optionnel] Sélectionnez l&#39;option d&#39;interactif pour chaque filtre afin que l&#39;utilisateur puisse se servir de ce filtre pour personnaliser plus tard les résultats du rapport lors de la visualisation.',
  'LBL_FILTER_AND' => 'ET',
  'LBL_FILTER_BY_MODULE' => 'Par module',
  'LBL_FILTER_CONDITIONS' => 'Sélectionner les opérateurs',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Pour',
  'LBL_FILTER_DATE_RANGE_START' => 'De',
  'LBL_FILTER_OR' => 'OU',
  'LBL_FISCAL_QUARTER' => 'Trimestre fiscal',
  'LBL_FISCAL_YEAR' => 'Année Fiscale',
  'LBL_FORECAST_REPORTS' => 'Rapports sur les Prévisions',
  'LBL_FUNNEL' => 'Entonnoir',
  'LBL_GRAND_TOTAL' => 'Total Général',
  'LBL_GREATER_THAN' => 'Est supérieur à',
  'LBL_GREATER_THAN_EQUAL' => 'Supérieur strict à',
  'LBL_GROUP_BY' => 'Groupé par',
  'LBL_GROUP_BY_HELP_DESC' => '<b>Pour définir des Liaisons :</b><br></br>1) Cliquer sur un module dans l&#39;onglet <b>Modules liés</b> que vous voulez utiliser pour regrouper les enregistrements dans votre rapport. Par défaut, le module principal (à la racine de l&#39;arborescence) est sélectionné. <br/><br/><br />	Vous pouvez sélectionner un module lié (Noeud fils dans l&#39;arborescence) en cliquant sur le module. Déplier le noeud pour voir les modules additionels relatifs au module lié. Le module sélectionné détermine quel champ reportable apparait dans l&#39;onglet <b>Champ Disponibles</b>.<br/><br/><br />	2) Cliquer sur un champ dans l&#39;onglet <b>Champ Disponibles</b> pour grouper les enregistrements à partir du champ dans votre rapport. Vous pouvez aussi rechercher le champ en tapant son nom dans la zone de saisie de l&#39;onglet.<br/><br/><br />	Après avoir sélectionné les champs du module sélectionné dans l&#39;onglet <b>Modules liés</b>, vous pouvez choisir un autre module depuis lequel vous pouvez choisir n&#39;importe quel nombre de champs afin de grouper les enregistrements. Attention toutefois, choisir trop de champs rend le rapport d&#39;autant moins lisible.<br/><br/><br />	Vous pouvez intervertir l&#39;ordre des champs par simple drag and drop.  Changer cet ordre impact la façon dont les résultats seront affichés.<br/><br/>  Pour un rapport matrice, vous pouvez utiliser un maximum de trois champs pour grouper vos enregistrements.',
  'LBL_GROUP_BY_REQUIRED' => 'Pour faire un graphique il est nécessaire d&#39;utiliser un rapport consolidé avec une clause de regroupement et une colonne regroupée',
  'LBL_HELLO' => 'Bonjour',
  'LBL_HELP' => 'Aide',
  'LBL_HIDE_COLUMNS' => 'Masquer les colonnes',
  'LBL_HIDE_SUMMARIES' => 'Masquer les lignes de regroupement',
  'LBL_HORIZ_BAR' => 'Barres horizontales',
  'LBL_IS' => 'Est',
  'LBL_IS_BETWEEN' => 'Est entre',
  'LBL_IS_EMPTY' => 'Est vide',
  'LBL_IS_NOT' => 'N est pas',
  'LBL_IS_NOT_EMPTY' => 'Non vide',
  'LBL_IS_NOT_ONE_OF' => 'Ne fait pas partie de',
  'LBL_IS_PUBLISHED' => 'Publié',
  'LBL_LABEL' => 'Libellé',
  'LBL_LAST_30_DAYS' => '30 derniers jours',
  'LBL_LAST_7_DAYS' => '7 derniers jours',
  'LBL_LAST_MONTH' => 'Mois Dernier',
  'LBL_LAST_N_DAYS' => '# Dernier jours',
  'LBL_LAST_QUARTER' => 'Dernier Trimestre',
  'LBL_LAST_WEEK' => 'Semaine Dernière',
  'LBL_LAST_YEAR' => 'Année Dernière',
  'LBL_LEAD' => 'Lead',
  'LBL_LEADS' => 'Leads',
  'LBL_LEAD_REPORTS' => 'Rapports sur les Leads',
  'LBL_LEFT' => 'Gauche',
  'LBL_LESS_THAN' => 'Est inférieur à',
  'LBL_LESS_THAN_EQUAL' => 'Inférieur strict à',
  'LBL_LINE' => 'Courbe',
  'LBL_LIST_FORM_TITLE' => 'Rapports',
  'LBL_LIST_PUBLISHED' => 'Publié',
  'LBL_MATRIX_LAYOUT' => 'Options de mise en page :',
  'LBL_MATRIX_REPORT' => 'Rapport matrice',
  'LBL_MATRIX_REPORT_DESC' => 'Rapport consolidé affichant les résultats dans un tableau, groupé au maximum par trois champs.',
  'LBL_MAX' => 'MAX',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Une Matrice ne peut pas contenir plus de trois clauses de regroupement.',
  'LBL_MEETING_REPORTS' => 'Rapports sur les Réunions',
  'LBL_MIN' => 'MIN',
  'LBL_MINIMUM_2_GROUP_BY' => 'Une Matrice doit contenir au moins deux clauses de regroupement.',
  'LBL_MISSING_FIELDS' => 'Champs manquants',
  'LBL_MISSING_INPUT_VALUE' => 'Valeur obligatoire manquante.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'Seconde valeur obligatoire manquante.',
  'LBL_MODULE' => 'Module',
  'LBL_MODULE_CHANGE_PROMPT' => 'Changer le module sélectionné aura pour conséquence la perte des filtres, des colonnes etc. de votre rapport. Etes-vous sûr(e) de vouloir continuer ?',
  'LBL_MODULE_NAME' => 'Rapports',
  'LBL_MODULE_NAME_SAVED' => 'Nom du Module',
  'LBL_MODULE_NAME_SINGULAR' => 'Rapport',
  'LBL_MODULE_TITLE' => 'Rapports',
  'LBL_MODULE_VIEWER_TITLE' => 'Visualiseur de Rapports',
  'LBL_MONTH' => 'Mois',
  'LBL_MORE' => 'Plus...',
  'LBL_MY_ACCOUNT_REPORTS' => 'Rapports sur mes Comptes',
  'LBL_MY_BUG_REPORTS' => 'Rapports sur mes Bugs',
  'LBL_MY_CALL_REPORTS' => 'Rapports sur mes Appels',
  'LBL_MY_CASE_REPORTS' => 'Rapports sur mes Tickets',
  'LBL_MY_CONTACT_REPORTS' => 'Rapports sur mes Contacts',
  'LBL_MY_CONTRACT_REPORTS' => 'Mes Rapports de Contrats',
  'LBL_MY_EMAIL_REPORTS' => 'Rapports sur mes Emails',
  'LBL_MY_FORECAST_REPORTS' => 'Rapports sur mes Prévisions',
  'LBL_MY_LEAD_REPORTS' => 'Rapports sur mes Leads',
  'LBL_MY_MEETING_REPORTS' => 'Rapports sur mes Réunions',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Rapports sur mes Affaires',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Rapports sur mes Tâches Projet',
  'LBL_MY_PROSPECT_REPORTS' => 'Mes Rapports sur les Suspects',
  'LBL_MY_QUOTE_REPORTS' => 'Rapports sur mes Devis',
  'LBL_MY_REPORTS' => 'Mes rapports',
  'LBL_MY_SAVED_REPORTS' => 'Mes Rapports sauvegardés',
  'LBL_MY_TASK_REPORTS' => 'Rapports sur mes Tâches',
  'LBL_MY_TEAMS_REPORTS' => 'Rapports de mon Equipe',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Rapports sur les Comptes de mon équipe',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Rapports sur les Bugs de mon équipe',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Rapports sur les Appels de mon équipe',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Rapports sur les Tickets de mon équipe',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Rapports sur les Contacts de mon équipe',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Rapports sur les Contrats de mon équipe',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Rapports sur les Email de mon équipe',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Rapports sur les Prévisions de mon équipe',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Rapports sur les Leads de mon équipe',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Rapports sur les Réunions de mon équipe',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Rapports sur les Affaires de mon équipe',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Rapports sur les Tâches Projet de mon équipe',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Rapports sur les Suspects de mon équipe',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Rapports sur les Devis de mon équipe',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Rapports sur les Tâches de mon équipe',
  'LBL_NEXT' => 'Suivant >',
  'LBL_NEXT_30_DAYS' => '30 prochains jours',
  'LBL_NEXT_7_DAYS' => '7 prochains jours',
  'LBL_NEXT_FISCAL_QUARTER' => 'Prochain trimestre fiscal',
  'LBL_NEXT_FISCAL_YEAR' => 'Prochaine année fiscale',
  'LBL_NEXT_MONTH' => 'Mois Prochain',
  'LBL_NEXT_N_DAYS' => '# Prochain jours',
  'LBL_NEXT_QUARTER' => 'Trim. Suivant',
  'LBL_NEXT_RUN' => 'Prochain Email',
  'LBL_NEXT_WEEK' => 'Semaine Prochaine',
  'LBL_NEXT_YEAR' => 'Année Prochaine',
  'LBL_NONE' => '-- aucun --',
  'LBL_NONE_STRING' => 'Aucun',
  'LBL_NOTHING_WAS_SELECTED' => 'Aucune sélection.',
  'LBL_NOT_ON' => 'Différente de',
  'LBL_NO_ACCESS' => 'Accès à ce rapport impossible, son accès est restreint.',
  'LBL_NO_CHART' => 'Aucun graphique',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Pas assez de données pour tracer un graphique',
  'LBL_NO_EXPORT_ACCESS' => 'Export désactivé',
  'LBL_NO_FILTERS' => 'N&#39;a pas de filtres.',
  'LBL_NO_IMAGE' => 'Aucun Graphique',
  'LBL_NO_REPORTS' => 'Pas de résultats',
  'LBL_OF' => 'sur',
  'LBL_ON' => 'Egale',
  'LBL_ONE_OF' => 'Fait partie de',
  'LBL_OPPORTUNITIES' => 'Affaires',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Affaires groupées par origine principale',
  'LBL_OPPORTUNITY' => 'Affaires',
  'LBL_OPPORTUNITY_REPORTS' => 'Rapports sur les Affaires',
  'LBL_OPTIONAL_HELP' => 'Cocher les cases pour afficher les enregistrements du module principal même si les enregistrements du module liés n existent pas. Quand la case n est pas sélectionnée, les enregistrements du module principal s afficheront seulement si ils existent au moins une concordance dans le module lié.',
  'LBL_OPTIONAL_MODULES' => 'Modules Optionnels',
  'LBL_ORDER_BY' => 'Trier par',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Modules liés facultatifs ?',
  'LBL_OWNER' => 'Assigné à',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Liste des Comptes Partenaires',
  'LBL_PDF_TIMESTAMP' => 'y_m_j_H_m',
  'LBL_PIE' => 'Camembert',
  'LBL_PREVIEW_REPORT' => 'Aperçu',
  'LBL_PREVIOUS' => '< Précédent',
  'LBL_PREVIOUS_FISCAL_QUARTER' => 'Trimestre fiscal précédent',
  'LBL_PREVIOUS_FISCAL_YEAR' => 'Année fiscale précédente',
  'LBL_PROJECT_TASK_REPORTS' => 'Rapports sur les Tâches Projet',
  'LBL_PROSPECT_REPORTS' => 'Rapports sur les Suspects',
  'LBL_PUBLISH' => 'Publier',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Rapports publiés sur les Comptes',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Rapports publiés sur les Bugs',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Rapports publiés sur les Appels',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Rapports publiés sur les Tickets',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Rapports publiés sur les Contacts',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Rapports de Contrats publiés',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Rapports publiés sur les Emails',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Rapports publiés sur les Prévisions',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Rapports publiés sur les Leads',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Rapports publiés sur les Réunions',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Rapports publiés sur les Affaires',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Rapports publiés sur les Tâches Projet',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Rapports publiés sur les Suspects',
  'LBL_PUBLISHED_QUOTA_REPORTS' => 'Rapports sur les objectifs publiés',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Rapports publiés sur les Devis',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Rapports publiés sur les Tâches',
  'LBL_QUARTER' => 'Trimestre',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_QUERY' => 'Requête',
  'LBL_QUOTE_REPORTS' => 'Rapports sur les Devis',
  'LBL_RELATED' => 'Liaison:',
  'LBL_RELATED_MODULES' => 'Sélection du module',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'Le module Principal et les modules liés au module principal apparaissent ici. Sélectionnez un module.',
  'LBL_RELATED_TABLE_BLANK' => 'Merci de sélectionner un module lié.',
  'LBL_REMOVE' => 'Supprimer',
  'LBL_REMOVED_FAVORITES' => 'rapport(s) retiré(s) de Mes Rapports Favoris.',
  'LBL_REMOVE_BTN_HELP' => 'Cliquer pour supprimer ce groupe de filtre.',
  'LBL_REMOVE_GROUP' => 'Supprimer un groupe de filtres',
  'LBL_REPORTS' => 'Rapports',
  'LBL_REPORTS_TO' => 'Rend compte à',
  'LBL_REPORT_ATT_MODULES' => 'Modules',
  'LBL_REPORT_ATT_NAME' => 'Nom',
  'LBL_REPORT_COLLAPSE_ALL' => 'Tout réduire',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Ce rapport contient des données dans cet ordre :',
  'LBL_REPORT_DETAILS' => 'Rapport',
  'LBL_REPORT_EXPAND_ALL' => 'Tout agrandir',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Les filtres des rapports ont été modifiés depuis leur dernière exécution.',
  'LBL_REPORT_GRAND_TOTAL' => 'Total général',
  'LBL_REPORT_GROUP_BY' => 'Regroupement par',
  'LBL_REPORT_HIDE_CHART' => 'Masquer le graphique',
  'LBL_REPORT_HIDE_DETAILS' => 'Masquer les Détails',
  'LBL_REPORT_LAST_RUN_DATE' => 'Dernier accès',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Les rapports ont été modifiés depuis leur dernière exécution.',
  'LBL_REPORT_MODULES' => 'Reporter les Modules',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Visualiseur de Rapport',
  'LBL_REPORT_NAME' => 'Nom du Rapport',
  'LBL_REPORT_RESET_FILTER' => 'Réinitialiser',
  'LBL_REPORT_RESULTS' => 'Résultats',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Cliquer sur Lancer le rapport pour voir les résultats.',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Appliquer les filtres',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Planification',
  'LBL_REPORT_SHOW_CHART' => 'Afficher le graphique',
  'LBL_REPORT_SHOW_DETAILS' => 'Voir les Détails',
  'LBL_REPORT_TYPE' => 'Type de Rapport',
  'LBL_REPORT__ATT_TYPE' => 'Type',
  'LBL_RIGHT' => 'Droite',
  'LBL_ROLLOVER' => 'Survoler avec la souris un élément du graphique pour plus d&#39;informations.',
  'LBL_ROLLOVER_SQUARE' => 'Survoler un carré pour plus de détails.',
  'LBL_ROLLOVER_WEDGE' => 'Survoler avec la souris un secteur pour plus d&#39;informations.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Rapport standard',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Tableau contenant les valeurs de champs sélectionnés en fonction de critères de recherche spécifiques.',
  'LBL_RUNTIME_FILTERS' => 'Filtre dynamique',
  'LBL_RUNTIME_HELP' => 'Cocher cette case pour autoriser les utilisateurs à changer la valeur du filtre avant de générer le rapport.',
  'LBL_RUN_BUTTON_TITLE' => 'Lancer le Rapport [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Lancer le Rapport',
  'LBL_RUN_TIME_LABEL' => 'Interactif',
  'LBL_SAVED_SEARCH' => 'Recherches et Vues archivées',
  'LBL_SAVE_AS' => 'Sauvegarder sous',
  'LBL_SAVE_RUN' => 'Enregistrer et lancer',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'et a été sauvegardé sous le nom "',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Si vous souhaitez modifier les paramètres de votre rapport, connectez-vous à l&#39;application Sugar et cliquez sur l&#39;onglet "Rapports" tab.',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'La pièce jointe est un rapport généré automatiquement envoyé par l&#39;application Sugar. Ce rapport a été créé sur',
  'LBL_SCHEDULE_ACTIVE' => 'Planification Active',
  'LBL_SCHEDULE_EMAIL' => 'Rapport Planifié',
  'LBL_SCHEDULE_REPORT' => 'Rapport Planifié',
  'LBL_SCHEDULE_TYPE' => 'Type de planification',
  'LBL_SEARCH_FORM_TITLE' => 'Recherche de Rapports',
  'LBL_SELECT' => 'Sélectionner',
  'LBL_SELECT_GROUP_BY' => 'Champ(s) de regroupement',
  'LBL_SELECT_MODULE' => 'Module',
  'LBL_SELECT_MODULE_BUTTON' => 'Cliquer sur une icone pour choisir un Module.',
  'LBL_SELECT_RECORD' => 'Sélectionnez les enregistrements',
  'LBL_SELECT_REPORT_TYPE' => 'Sélectionnez le type de rapport que vous voulez créer',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'Sélectionnez un type de rapport',
  'LBL_SHOW' => 'Afficher',
  'LBL_SHOW_DETAILS' => 'Voir Détails',
  'LBL_SHOW_QUERY' => 'Afficher la requête',
  'LBL_SORT' => 'Trier',
  'LBL_STARTS_WITH' => 'Commence par',
  'LBL_START_DATE' => 'Date de début',
  'LBL_STATUS' => 'Statut',
  'LBL_SUBJECT' => 'Sujet',
  'LBL_SUBMIT_QUERY' => 'Soumettre la requête',
  'LBL_SUCCESS_REPORT' => 'SUCCES: Rapport',
  'LBL_SUM' => 'SOMME',
  'LBL_SUMMARY_COLUMNS' => 'Colonnes de Résumé',
  'LBL_SUMMATION_REPORT' => 'Rapport consolidé',
  'LBL_SUMMATION_REPORT_DESC' => 'Tableau fournissant les données traitées des enregistrements correspondant aux critères de recherche. Les données peuvent aussi être présentées dans un graphique.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Rapport consolidé détaillé',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Rapport consolidé affichant les données complémentaires relatives aux enregistrements retournés dans les résultats.',
  'LBL_SUMMATION_WITH_DETAILS' => 'Consolidé avec les détails',
  'LBL_TABLE_CHANGED' => 'La liste des Modules a été modifiée, merci de sélectionner à nouveau le critère saisi dans l&#39;onglet Groupe.',
  'LBL_TASK_REPORTS' => 'Rapports sur les Tâches',
  'LBL_TEAM' => 'Equipes',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Aucun rapport de ce type.',
  'LBL_THIS_MONTH' => 'Ce mois-ci',
  'LBL_THIS_QUARTER' => 'Ce Trimestre',
  'LBL_THIS_WEEK' => 'Cette semaine',
  'LBL_THIS_YEAR' => 'Cette Année',
  'LBL_TIME_INTERVAL' => 'Fréquence',
  'LBL_TITLE' => 'Titre',
  'LBL_TODAY' => 'Aujourd hui',
  'LBL_TOMORROW' => 'Demain',
  'LBL_TOTAL' => 'Total',
  'LBL_TOTAL_IS' => 'Total est',
  'LBL_TO_PDF' => 'Sauvegarder en PDF',
  'LBL_TYPE' => 'Type',
  'LBL_UNTITLED' => 'Titre non défini',
  'LBL_UN_PUBLISH' => 'non-publié',
  'LBL_UP' => 'Haut',
  'LBL_UPDATE_SCHEDULE' => 'Valider cette planification',
  'LBL_USER_EMPTY_HELP' => 'Afin de visualiser les enregistrements qui sont assignés à aucun utilisateur, vérifiez que "Modulex liés facultatifs" est bien coché dans la dernière étape de création du rapport en plus de mettre le filtre sur l&#39;utilisateur à "Est vide".',
  'LBL_USE_COLUMN_FOR' => 'Donnée pour le graphique',
  'LBL_VERT_BAR' => 'Barres verticales',
  'LBL_VIEW' => 'Visualiser',
  'LBL_VIEWER_RUNTIME_HELP' => 'Définir les valeurs des <b>Filtres dynamiques</b> et cliquer sur <b>Appliquer les filtres</b> pour rafraichir le rapport.',
  'LBL_WAS_NOT_SAVED' => 'non sauvegardé',
  'LBL_WAS_SAVED' => 'à été sauvegardé',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'MOYENNE: Montant * Probabilité',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'SOMME: Montant * Probabilité',
  'LBL_WHOSE_MAXIMUM' => 'dont le maximum',
  'LBL_WHOSE_MINIMUM' => 'dont le minimum',
  'LBL_WITH_AN_AVERAGE' => 'avec une moyenne',
  'LBL_WITH_A_TOTAL' => 'avec un total',
  'LBL_WITH_DETAILS' => 'Avec détails',
  'LBL_YEAR' => 'Année',
  'LBL_YESTERDAY' => 'Hier',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'You have no saved reports.',
  'LNK_ADVANCED_REPORTING' => 'Reporting d&#39;entreprise',
  'LNK_NEW_ACCOUNT' => 'Créer Compte',
  'LNK_NEW_CALL' => 'Planifier Appel',
  'LNK_NEW_CASE' => 'Créer Ticket',
  'LNK_NEW_CONTACT' => 'Créer Contact',
  'LNK_NEW_EMAIL' => 'Archiver Email',
  'LNK_NEW_MEETING' => 'Planifier Réunion',
  'LNK_NEW_NOTE' => 'Créer Note',
  'LNK_NEW_OPPORTUNITY' => 'Créer une Affaire',
  'LNK_NEW_TASK' => 'Créer Tâche',
  'MSG_NO_PERMISSIONS' => 'Vous n&#39;avez pas l&#39;autorisation d&#39;éditer ce rapport',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Impossible de publier. Il existe un autre rapport publié sous le même nom.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Impossible de dé-publier un rapport appartenant à un autre utilisateur. Vous disposez d&#39;un rapport avec le même nom.',
);

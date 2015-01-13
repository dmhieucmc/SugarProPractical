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
  'ERR_FORECAST_AMOUNT' => 'Angivet belopp är ett obligatoriskt fält och måste vara ett nummer.',
  'LBL_AMOUNT' => 'Summa',
  'LBL_BASE_RATE' => 'Basräntan',
  'LBL_COMMIT_HEADER' => 'Ange prognos',
  'LBL_COMMIT_MESSAGE' => 'Vill du ange dessa belopp?',
  'LBL_COMMIT_NOTE' => 'Ange de belopp du vill ange för den valda tidsperioden:',
  'LBL_COMMIT_STAGE' => 'Commit fas',
  'LBL_CREATED_BY' => 'Skapad av',
  'LBL_CURRENCY' => 'Valuta',
  'LBL_CURRENCY_ID' => 'Valuta ID',
  'LBL_CURRENCY_RATE' => 'Valutakursen',
  'LBL_DATE_CLOSED' => 'Förväntat slutdatum',
  'LBL_DATE_COMMITTED' => 'Angivet datum',
  'LBL_DATE_ENTERED' => 'Skapat datum',
  'LBL_DATE_MODIFIED' => 'Ändrat datum',
  'LBL_DELETED' => 'Raderad',
  'LBL_DV_FORECAST_OPPORTUNITY' => 'Prognos affärsmöjligheter',
  'LBL_DV_FORECAST_PERIOD' => 'Prognos tidperiod',
  'LBL_DV_FORECAST_ROLLUP' => 'Sammanställ prognos',
  'LBL_DV_HEADER' => 'Prognoser: Arbetsark',
  'LBL_DV_LAST_COMMIT_AMOUNT' => 'Senast angivna belopp:',
  'LBL_DV_LAST_COMMIT_DATE' => 'Senast angivna datum:',
  'LBL_DV_MY_FORECASTS' => 'Mina prognoser',
  'LBL_DV_MY_TEAM' => 'Mitt teams prognoser',
  'LBL_DV_TIMEPERIOD' => 'Tidsperiod:',
  'LBL_DV_TIMEPERIODS' => 'Tidsperioder:',
  'LBL_DV_TIMPERIOD_DATES' => 'Datumintervall:',
  'LBL_EDITABLE_INVALID' => 'Ogiltig värde för {{field_name}}',
  'LBL_EDITABLE_INVALID_RANGE' => 'Värdet måste vara mellan {{min}} och {{max}}',
  'LBL_FC_START_DATE' => 'Startdatum',
  'LBL_FC_USER' => 'Schemalägg för',
  'LBL_FDR_ADJ_AMOUNT' => 'Justerad summa',
  'LBL_FDR_COMMIT' => 'Angivet belopp',
  'LBL_FDR_DATE_COMMIT' => 'Angivet datum',
  'LBL_FDR_OPPORTUNITIES' => 'Affärsmöjligheter i prognos:',
  'LBL_FDR_USER_NAME' => 'Direkt rapport',
  'LBL_FDR_WEIGH' => 'Viktad summa av affärsmöjligheterna:',
  'LBL_FORECAST' => 'Prognos',
  'LBL_FORECAST_HISTORY' => 'Prognoser: Historik',
  'LBL_FORECAST_HISTORY_TITLE' => 'Historik',
  'LBL_FORECAST_ID' => 'Prognos ID',
  'LBL_FORECAST_OPP_COUNT' => 'Total antal affärsmöjligheter',
  'LBL_FORECAST_OPP_WEIGH' => 'Viktad summa',
  'LBL_FORECAST_PIPELINE_OPP_COUNT' => 'Pipeline antal affärsmöjligheter',
  'LBL_FORECAST_TIME_ID' => 'Tidsperiod ID',
  'LBL_FORECAST_TYPE' => 'Prognostyp',
  'LBL_FORECAST_USER' => 'Användare',
  'LBL_FS_CASCADE' => 'Sprid?',
  'LBL_FS_CREATED_BY' => 'Skapad av',
  'LBL_FS_DATE_ENTERED' => 'Skapat datum',
  'LBL_FS_DATE_MODIFIED' => 'Datum ändrat',
  'LBL_FS_DELETED' => 'Raderad',
  'LBL_FS_END_DATE' => 'Slutdatum',
  'LBL_FS_FORECAST_FOR' => 'Schemalägg för:',
  'LBL_FS_FORECAST_START_DATE' => 'Prognos startdatum',
  'LBL_FS_MODULE_NAME' => 'Prognos schema',
  'LBL_FS_START_DATE' => 'Startdatum',
  'LBL_FS_STATUS' => 'Status',
  'LBL_FS_TIMEPERIOD' => 'Tidsperiod',
  'LBL_FS_TIMEPERIOD_ID' => 'Tidsperiod ID',
  'LBL_FS_USER_ID' => 'Användar ID',
  'LBL_HISTORY_LOG' => 'Senaste commit',
  'LBL_LIST_FORM_TITLE' => 'Tillagda prognoser',
  'LBL_LOADING_COMMIT_HISTORY' => 'Laddar commit historik...',
  'LBL_LV_COMMIT' => 'Angivet belopp',
  'LBL_LV_COMMIT_DATE' => 'Angivet datum',
  'LBL_LV_OPPORTUNITIES' => 'Affärsmöjligheter',
  'LBL_LV_TIMPERIOD' => 'Tidsperiod',
  'LBL_LV_TIMPERIOD_END_DATE' => 'Slutdatum',
  'LBL_LV_TIMPERIOD_START_DATE' => 'Startdatum',
  'LBL_LV_TYPE' => 'Prognostyp',
  'LBL_LV_WEIGH' => 'Viktad summa',
  'LBL_MANGER_SAVED' => 'Manager sparat',
  'LBL_MODIFIED_USER_ID' => 'Ändrad av',
  'LBL_MODULE_NAME' => 'Prognoschef arbetsark',
  'LBL_MODULE_NAME_SINGULAR' => 'Prognoschef arbetsark',
  'LBL_MODULE_TITLE' => 'Prognoschef arbetsark',
  'LBL_MY_MANAGER_LINE' => '{{full_name}} (mig)',
  'LBL_NO_ACTIVE_TIMEPERIOD' => 'Inga aktiva tidsperioder för prognoser.',
  'LBL_NO_COMMIT' => 'Ingen tidigare commit',
  'LBL_OW_ACCOUNTNAME' => 'Account',
  'LBL_OW_DESCRIPTION' => 'Beskrivning',
  'LBL_OW_MODULE_TITLE' => 'Affärsmöjlighetsark',
  'LBL_OW_NEXT_STEP' => 'Nästa steg',
  'LBL_OW_OPPORTUNITIES' => 'Affärsmöjlighet',
  'LBL_OW_PROBABILITY' => 'Sannolikhet',
  'LBL_OW_REVENUE' => 'Summa',
  'LBL_OW_TYPE' => 'Typ',
  'LBL_OW_WEIGHTED' => 'Viktad summa',
  'LBL_PERCENT' => 'Procent',
  'LBL_PRODUCT_ID' => 'Produkt ID',
  'LBL_QC_COMMIT_BUTTON' => 'Ange',
  'LBL_QC_COMMIT_VALUE' => 'Ange summa:',
  'LBL_QC_DIRECT_FORECAST' => 'Mina direkta prognoser:',
  'LBL_QC_HEADER_DELIM' => 'Till',
  'LBL_QC_LAST_COMMIT_VALUE' => 'Senaste angivna belopp:',
  'LBL_QC_LAST_DATE_COMMITTED' => 'Senaste angivna datum:',
  'LBL_QC_OPPORTUNITY_COUNT' => 'Antal afärsmöjligheter:',
  'LBL_QC_ROLLUP_FORECAST' => 'Min grupps prognoser:',
  'LBL_QC_ROLL_COMMIT_VALUE' => 'Sammanfatta angivna belopp:',
  'LBL_QC_TIME_PERIOD' => 'Tidperiod:',
  'LBL_QC_UPCOMING_FORECASTS' => 'Mina prognoser',
  'LBL_QC_WEIGHT_VALUE' => 'Viktad summa:',
  'LBL_QC_WORKSHEET_BUTTON' => 'Arbetsark',
  'LBL_QUOTA' => 'Budget',
  'LBL_QUOTA_ADJUSTED' => 'Budget (Justerad)',
  'LBL_QUOTA_ID' => 'Budget ID',
  'LBL_REPORTS_TO_USER_NAME' => 'Rapporterar till',
  'LBL_RESET_CHECK' => 'All data i arbetsarket för den valda tidsperioden och inloggade användare kommer att raderas. Fortsätta?',
  'LBL_RESET_WOKSHEET' => 'Återställ arbetsarket',
  'LBL_SALES_STAGE' => 'Nivå',
  'LBL_SAVE_WOKSHEET' => 'Spara arbetsark',
  'LBL_SEARCH' => 'Välj',
  'LBL_SEARCH_LABEL' => 'Välj',
  'LBL_SHOW_CHART' => 'Visa diagram',
  'LBL_SVFS_CASCADE' => 'Sprid till rapporter?',
  'LBL_SVFS_FORECASTDATE' => 'Schemalägg startdatum',
  'LBL_SVFS_HEADER' => 'Schemalägg prognos:',
  'LBL_SVFS_STATUS' => 'Status',
  'LBL_SVFS_USER' => 'För',
  'LBL_TIMEPERIOD_NAME' => 'Tidperiod',
  'LBL_USER_NAME' => 'Användarnamn',
  'LBL_VERSION' => 'Version',
  'LBL_WK_REVISION' => 'Revision',
  'LBL_WK_VERSION' => 'Version',
  'LB_FS_KEY' => 'ID',
  'LNK_FORECAST_LIST' => 'Visa prognoshistorik',
  'LNK_NEW_OPPORTUNITY' => 'Skapa affärsmöjighet',
  'LNK_NEW_TIMEPERIOD' => 'Skapa tidsperiod',
  'LNK_QUOTA' => 'Visa offerter',
  'LNK_TIMEPERIOD_LIST' => 'Visa tidsperioder',
  'LNK_UPD_FORECAST' => 'Prognoschef arbetsark',
);

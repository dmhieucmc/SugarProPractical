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
  'ERR_CRON_SYNTAX' => 'Sintaksë e planifikuar jo valide',
  'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë planifikimin',
  'LBL_ADV_OPTIONS' => 'Opcionet e avancuara',
  'LBL_ALL' => 'Çdo ditë',
  'LBL_ALWAYS' => 'Çdoherë',
  'LBL_AND' => 'Dhe',
  'LBL_ASYNCMASSUPDATE' => 'Kryeni përditësim masive të josinkronik',
  'LBL_AT' => 'tek',
  'LBL_AT_THE' => 'në',
  'LBL_BASIC_OPTIONS' => 'Themelimi bazë',
  'LBL_CATCH_UP' => 'ekzekuto nëse mungon',
  'LBL_CATCH_UP_WARNING' => 'Mos kontrollo nësë puna do të kap më tepër se një minutë për ta drejtuar',
  'LBL_CLEANJOBQUEUE' => 'Pastrim i punës së reshtit',
  'LBL_CLEANOLDRECORDLISTS' => 'Pastro listat e vjetra të regjistrimit',
  'LBL_CRONTAB_EXAMPLES' => 'E lartëshënuara përdor simbole planifikuese të etiketimit.',
  'LBL_CRONTAB_SERVER_TIME_POST' => 'Ju lutemi specifikoni kohën e përmbushjeve të planifikimit në përputhje me rrethanat',
  'LBL_CRONTAB_SERVER_TIME_PRE' => 'Drejtimet e specifikimeve të planifikuara të bazuara në orën e zonës së serverit (',
  'LBL_CRON_INSTRUCTIONS_LINUX' => 'Për të themeluar etiketim planifikues',
  'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Për të themeluar planifikues të Windowsit',
  'LBL_CRON_LINUX_DESC' => 'Vërejtje: Në mënyrë për të drejtuar orarin Sugar, shtoni linjën në vijim për dosjen e skedës planifikuese:',
  'LBL_CRON_WINDOWS_DESC' => 'Vërejtje: Në mënyrë për të drejtuar orarin Sugar, krijoni serinë e dosjes për të drejtuar përdorimin e detyrave të planifikuara të Windows. Seria e dosjes duhet të përfshijë komandat vijuese:',
  'LBL_DATE_TIME_END' => 'Data dhe koha e përfundimit',
  'LBL_DATE_TIME_START' => 'Data dhe ora e nisjes',
  'LBL_DAY_OF_MONTH' => 'data',
  'LBL_DAY_OF_WEEK' => 'dita',
  'LBL_EVERY' => 'Çdo',
  'LBL_EVERY_DAY' => 'Çdo ditë',
  'LBL_EXECUTE_TIME' => 'koha e ekzekutimit',
  'LBL_FRI' => 'E premte',
  'LBL_FROM' => 'nga',
  'LBL_HOUR' => 'orët',
  'LBL_HOURS' => 'Orët',
  'LBL_HOUR_SING' => 'orë',
  'LBL_IN' => 'në',
  'LBL_INTERVAL' => 'Intervali',
  'LBL_JOB' => 'puna',
  'LBL_JOBS_SUBPANEL_TITLE' => 'Regjisrtim i punës',
  'LBL_JOB_URL' => 'Puna URL',
  'LBL_LAST_RUN' => 'Drejtimi i fundit i suksesshëm',
  'LBL_LIST_EXECUTE_TIME' => 'do të drejtohet në',
  'LBL_LIST_JOB_INTERVAL' => 'Intervali',
  'LBL_LIST_LIST_ORDER' => 'Planifikimet',
  'LBL_LIST_NAME' => 'Planifikimi:',
  'LBL_LIST_RANGE' => 'Gama:',
  'LBL_LIST_REMOVE' => 'Largo',
  'LBL_LIST_STATUS' => 'Statusi',
  'LBL_LIST_TITLE' => 'Lista e planifikimit',
  'LBL_MINS' => 'min',
  'LBL_MINUTES' => 'Minutat',
  'LBL_MIN_MARK' => 'shënues i minutave',
  'LBL_MODULE_NAME' => 'Sugar planifikimet',
  'LBL_MODULE_NAME_SINGULAR' => 'Sugar planifikues',
  'LBL_MODULE_TITLE' => 'Planifikimet',
  'LBL_MON' => 'E hënë',
  'LBL_MONTH' => 'Muaji',
  'LBL_MONTHS' => 'Muajtë',
  'LBL_NAME' => 'Emri i punës',
  'LBL_NEVER' => 'Asnjëherë',
  'LBL_NEW_FORM_TITLE' => 'Planifikim i ri',
  'LBL_NO_PHP_CLI' => 'Nëse hosti juaj nuk ka binare PHP në dispozicion, ju mund të përdorni wget ose rrotacionin për të nisur punët tuaja.<br />për wget: *    *    *    *    *    wget --quiet --non-verbose http://translate.sugarcrm.com/soon/latest/cron.php > /dev/null 2>&1<br />për rrotacion: *    *    *    *    *    curl --silent http://translate.sugarcrm.com/soon/latest/cron.php > /dev/null 2>&1',
  'LBL_OFTEN' => 'sa më shpesh që mundet',
  'LBL_ON_THE' => 'në',
  'LBL_OOTB_BOUNCE' => 'Drejtimi i procesit të natës refuzon Emailat e Kampanjës',
  'LBL_OOTB_CAMPAIGN' => 'Drejtimi i natës së Emailave masive të Kampanjës',
  'LBL_OOTB_CLEANUP_QUEUE' => 'Pastrimi i punëve të reshtit',
  'LBL_OOTB_CREATE_NEXT_TIMEPERIOD' => 'krijo periudha kohore te ardhshme',
  'LBL_OOTB_HEARTBEAT' => 'Rrahja e zemrës së Sugar',
  'LBL_OOTB_IE' => 'Kontrollo kutitë e maileve të drejtuara përbrenda',
  'LBL_OOTB_PRUNE' => 'Baza e të dhënave të trapave në muajin e 1',
  'LBL_OOTB_PRUNE_RECORDLISTS' => 'Shkurto listat e vjetra të regjistrimit',
  'LBL_OOTB_REPORTS' => 'Detyrat e planifikuara të gjenerimit të drejtimit të raporteve',
  'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Emailat e drejtuar kujtojnë njoftimet',
  'LBL_OOTB_TRACKER' => 'Tabela të trapave të gjurmuesve',
  'LBL_OOTB_WORKFLOW' => 'Detyrat e procesit të rrjedhës së punës',
  'LBL_PERENNIAL' => 'I vazhdueshëm',
  'LBL_PERFORMFULLFTSINDEX' => 'Kërkimi i tekstit të plotë në sistemin e indeksit',
  'LBL_POLLMONITOREDINBOXES' => 'Kontrollo llogaritë e maileve të drejtuara për brenda',
  'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Drejtimi i procesit të natës refuzon Emailat e Kampanjës',
  'LBL_PROCESSQUEUE' => 'Drejto detyrat e raporteve të planifikuara të gjenerimit',
  'LBL_PROCESSWORKFLOW' => 'Detyrat e procesit të rrjedhës së punës',
  'LBL_PRUNEDATABASE' => 'Baza e të dhënave të trapave në muajin e 1',
  'LBL_RANGE' => 'gjer',
  'LBL_REFRESHJOBS' => 'Rifrsko punët',
  'LBL_RUNMASSEMAILCAMPAIGN' => 'Drejtimi i natës së Emailave masive të Kampanjës',
  'LBL_SAT' => 'E shtunë',
  'LBL_SCHEDULER' => 'Planifikim:',
  'LBL_SEARCH_FORM_TITLE' => 'Kërkim i planifikimeve:',
  'LBL_SENDEMAILREMINDERS' => 'Drejtimi i Emailave përkujtuese të dërgimit',
  'LBL_STATUS' => 'Statusi',
  'LBL_SUGARJOBCREATENEXTTIMEPERIOD' => 'krijo periudha kohore te ardhshme',
  'LBL_SUGARJOBHEARTBEAT' => 'Rrahja e zemrës së Sugar',
  'LBL_SUN' => 'E diel',
  'LBL_THU' => 'E enjte',
  'LBL_TIME_FROM' => 'Aktive nga',
  'LBL_TIME_TO' => 'Aktive deri',
  'LBL_TOGGLE_ADV' => 'Trego opcionet e avancuara',
  'LBL_TOGGLE_BASIC' => 'Trego opcionet bazike',
  'LBL_TRIMTRACKER' => 'Tabelat e trapave të gjurmuesve',
  'LBL_TUE' => 'E martë',
  'LBL_UPDATETRACKERSESSIONS' => 'Rinovo tabelat e sesionit të gjurmuesve',
  'LBL_UPDATE_TRACKER_SESSIONS' => 'Rinovo tabelën e sesionit të gjurmimit',
  'LBL_WARN_CURL' => 'Paralajmërim',
  'LBL_WARN_CURL_TITLE' => 'cURL paralajmërim:',
  'LBL_WARN_NO_CURL' => 'Ky sistem nuk ka bibliotekat cURL të mundësuara/përpiluara në modulin e PHP.<br />(--withcurl=/path/to/curl_library). Ju lutemi të kontaktoni administratorin tuaj për të zgjidhur këtë çështje. Pa funksionalitetin e cURL, orari nuk mund të fute punët e saja.',
  'LBL_WED' => 'E mërkurë',
  'LNK_LIST_SCHEDULED' => 'Punët e planifikuara',
  'LNK_LIST_SCHEDULER' => 'Planifikuesit',
  'LNK_NEW_SCHEDULER' => 'Krijo planifikues',
  'NTC_DELETE_CONFIRMATION' => 'A jeni të sigurtë që dëshironi të fshini këtë regjistrim?',
  'NTC_LIST_ORDER' => 'Përcakto porosinë që ky planifikim do të shfaq në listën e poshtme të planifikimeve',
  'NTC_STATUS' => 'Vendos statusin në pasiv për heqje të këtij planifikimi prej listës së poshtme të planifikimeve',
  'SOCK_GREETING' => 'Kjo është ndërfaqja e SugarCRM për shërbimin e orarit. [ Komandat e demonit në dispozicion:fillimi|rinisja|mbyllja|statusi] Për të mbaruar, lloji $#39;mbaro$#39;".<br />Për të mbyllë shërbimin $#39;mbyllje$#39;.',
);

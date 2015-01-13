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
  'ERR_DELETE_RECORD' => 'Adjon meg egy azonosítót a termék törléséhez!',
  'LBL_ACCOUNT_ID' => 'Kliensazonosító:',
  'LBL_ACCOUNT_NAME' => 'Kliensnév:',
  'LBL_ASSET_NUMBER' => 'Nyereség mértéke:',
  'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
  'LBL_ASSIGNED_USER_ID' => 'Felelős felhasználó azonosítója:',
  'LBL_ASSOCIATED_QUOTE' => 'Árajánlat tárgya:',
  'LBL_BOOK_VALUE' => 'Könyv szerinti érték:',
  'LBL_BOOK_VALUE_DATE' => 'Könyv szerinti érték dátuma:',
  'LBL_BOOK_VALUE_USDOLLAR' => 'Könyv szerinti érték (USD):',
  'LBL_CALCULATED_LINE_ITEM_AMOUNT' => 'Árajánlatban szereplő tételek',
  'LBL_CAMPAIGN_PRODUCT' => 'Kampány termék',
  'LBL_CATEGORY' => 'Kategória:',
  'LBL_CATEGORY_NAME' => 'Kategória neve:',
  'LBL_COMMIT_STAGE' => 'Elköteleződés szintje',
  'LBL_COMMIT_STAGE_FORECAST' => 'Előrejelzés',
  'LBL_CONTACT' => 'Kapcsolat',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolatok',
  'LBL_CONTACT_ID' => 'Kapcsolati azonosító:',
  'LBL_CONTACT_NAME' => 'Kapcsolat neve:',
  'LBL_CONTRACTS' => 'Szerződések',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Szerződések',
  'LBL_CONVERT_TO_QUOTE_ERROR' => 'Hiba:',
  'LBL_CONVERT_TO_QUOTE_ERROR_MESSAGE' => 'Hiba merült fel az árajánlattá történő konvertálás során.',
  'LBL_COST_PRICE' => 'Költség:',
  'LBL_COST_USDOLLAR' => 'Költség (USD)',
  'LBL_CREATED_USER' => 'Létrehozott felhasználó',
  'LBL_CURRENCY' => 'Pénznem:',
  'LBL_CURRENCY_ID' => 'Pénznem azonosító:',
  'LBL_CURRENCY_RATE' => 'Árfolyam',
  'LBL_CURRENCY_SYMBOL_NAME' => 'Pénznem szimbólum neve',
  'LBL_DATE_CLOSED' => 'Lezárás várható dátuma',
  'LBL_DATE_CLOSED_TIMESTAMP' => 'Lezárás várható dátuma időbélyegző',
  'LBL_DATE_PURCHASED' => 'Vásárolva:',
  'LBL_DATE_SUPPORT_EXPIRES' => 'Támogatás lejár:',
  'LBL_DATE_SUPPORT_STARTS' => 'Támogatás kezdete:',
  'LBL_DEAL_TOT' => 'Kedvezmény:',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Termékek',
  'LBL_DESCRIPTION' => 'Leírás:',
  'LBL_DISCOUNT_AMOUNT' => 'Kedvezmény összege',
  'LBL_DISCOUNT_AS_PERCENT' => 'Kedvezmény %-ban',
  'LBL_DISCOUNT_PRICE' => 'Egységár:',
  'LBL_DISCOUNT_PRICE_DATE' => 'Kedvezményes ár dátuma:',
  'LBL_DISCOUNT_RATE' => 'Kedvezmény mértéke',
  'LBL_DISCOUNT_RATE_USDOLLAR' => 'Kedvezmény % (USD)',
  'LBL_DISCOUNT_TOTAL' => 'Kedvezmény összesen',
  'LBL_DISCOUNT_TOTAL_USDOLLAR' => 'Kedvezmény (USD)',
  'LBL_DISCOUNT_USDOLLAR' => 'Egységár (USD)',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentumok',
  'LBL_EDITLAYOUT' => 'Elrendezés szerkesztése',
  'LBL_EXPERT_ID' => 'Termék szakértő',
  'LBL_EXPORT_CURRENCY_ID' => 'Pénznem azonosító',
  'LBL_EXT_PRICE' => 'Kibővített ár',
  'LBL_FORECAST' => 'Belefoglal az előjelzésbe',
  'LBL_HELP_CREATE' => 'A {{plural_module_name}} modul azokat a termékeket listázza, amelyek eladásra kerültek, vagy eladásra várnak. {{module_name}} létrehozásához: 1. töltse ki a mezőket! A kötelező mezők kitöltése nélkül mentés nem lehetséges. Ha Önnek hiányzó mezőt talál, kattintson a "Több mutatása" opcióra a ráadás mezők felfedéséhez! 2. Kattintson a "Mentés" gombra a rekord mentéséhez és a korábbi oldalra való visszatéréshez! Amennyiben a "Mentés és megjelenítés" opciót választja, a {{module_name}} rekordnézetben fog megjelenni. A "Mentés és új létrehozása" paranccsal közvetlen új {{module_name}} létrehozatali oldalára továbbítódik.',
  'LBL_HELP_RECORD' => 'A {{plural_module_name}} modul azokat a termékeket listázza, amelyek eladásra kerültek, vagy eladásra várnak. - Szerkessze ennek a rekordnak a mezőit külön-külön, vagy kattintson a Szerkesztés gombra! Tekintse meg, vagy szerkessze a linkeket a bal alsó "Adatnézet" kapcsoló használatával! Olvassa el, vagy írjon felhasználói hozzászólásokat a "Tevékenységfolyam" opcióval! A rekord neve mellett található ikonok segítségével jelölje be kedvencének a tartalmat, vagy kövesse annak utóéletét! Egyéb tevékenységek a Szerkesztés gombtól jobbra szereplő műveleti gomb legördülő menüjében találhatók.',
  'LBL_HELP_RECORDS' => 'A {{plural_module_name}} modul azokat a termékeket listázza, amelyek eladásra kerültek, vagy eladásra várnak. Az értékesített áruk az alábbi helyen találhatók: Admin > Termékkatalógus - ennek tartalmát az adminisztrátorok módosíthatják. Új tételek létrehozásához használhatja a katalógust, vagy a {{plural_module_name}} modult. Létrehozás történhet kettőzéssel, importálással, illetve egyéb módokon is. Az új bejegyzések adatait rekord nézetben van lehetősége szerkeszteni.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Ajánlások',
  'LBL_LEAD_SOURCE' => 'Ajánlás forrása',
  'LBL_LIST_ACCOUNT_NAME' => 'Kliensnév',
  'LBL_LIST_CONTACT_NAME' => 'Kapcsolat neve',
  'LBL_LIST_COST_PRICE' => 'Költség',
  'LBL_LIST_DATE_PURCHASED' => 'Vásárolva',
  'LBL_LIST_DISCOUNT_PRICE' => 'Ár',
  'LBL_LIST_FORM_TITLE' => 'Termék lista',
  'LBL_LIST_LBL_MFT_PART_NUM' => 'Gyártó cikksz.',
  'LBL_LIST_LIST_PRICE' => 'Lista',
  'LBL_LIST_MANUFACTURER' => 'Gyártó',
  'LBL_LIST_NAME' => '',
  'LBL_LIST_PRICE' => 'Listaár:',
  'LBL_LIST_QUANTITY' => 'Mennyiség',
  'LBL_LIST_QUOTE_NAME' => 'Árajánlat neve',
  'LBL_LIST_STATUS' => 'Állapot',
  'LBL_LIST_SUPPORT_EXPIRES' => 'Lejár',
  'LBL_LIST_USDOLLAR' => 'Listaár (USD)',
  'LBL_MANUFACTURER' => 'Gyártó:',
  'LBL_MANUFACTURER_NAME' => 'Gyártó neve:',
  'LBL_MEMBER_OF' => 'Tagja:',
  'LBL_MFT_PART_NUM' => 'Gyártó partnerszáma:',
  'LBL_MODIFIED_USER' => 'Módosított felhasználó',
  'LBL_MODULE_NAME' => '',
  'LBL_MODULE_NAME_SINGULAR' => '',
  'LBL_MODULE_TITLE' => '',
  'LBL_NAME' => '',
  'LBL_NEW_FORM_TITLE' => 'Új termék',
  'LBL_NEXT_STEP' => 'Következő lépés:',
  'LBL_NOTES_SUBPANEL_TITLE' => 'Feljegyzés',
  'LBL_OPPORTUNITY' => 'Lehetőség',
  'LBL_OPPORTUNITY_ID' => 'Lehetőség azonosítója',
  'LBL_PRICING_FACTOR' => 'Árképzési tényező',
  'LBL_PRICING_FORMULA' => 'Árképzési forma:',
  'LBL_PROBABILITY' => 'Valószínűség (%)',
  'LBL_PRODUCT' => '',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => '',
  'LBL_PRODUCT_CATEGORIES' => 'Termékkategóriák',
  'LBL_PRODUCT_TEMPLATE' => 'Terméksablon:',
  'LBL_PRODUCT_TEMPLATE_ID' => 'Terméksablon azonosító:',
  'LBL_PRODUCT_TYPES' => 'Terméktípusok',
  'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektek',
  'LBL_QUANTITY' => 'Mennyiség:',
  'LBL_QUOTE' => 'Árajánlat',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Árajánlatok',
  'LBL_QUOTE_ID' => 'Árajánlat azonosító:',
  'LBL_QUOTE_NAME' => 'Árajánlat név:',
  'LBL_RELATED_PRODUCTS' => '',
  'LBL_RELATED_PRODUCTS_TITLE' => '',
  'LBL_REVENUELINEITEM' => 'Bevételi sor tétel',
  'LBL_REVENUELINEITEMS' => 'Bevétel sorok',
  'LBL_REVENUELINEITEM_ID' => 'Bevételi sor tétel azonosító:',
  'LBL_REVENUELINEITEM_NAME' => 'Bevételi sor tételnév:',
  'LBL_SALES_STAGE' => 'Értékesítési szint',
  'LBL_SALES_STATUS' => 'Bevételi sor állapota',
  'LBL_SEARCH_FORM_TITLE' => 'Termékek keresése',
  'LBL_SELECT_DISCOUNT' => 'Kedvezmény  %-ban',
  'LBL_SERIAL_NUMBER' => 'Sorozatszám:',
  'LBL_STATUS' => 'Állapot:',
  'LBL_SUPPORT_CONTACT' => 'Támogató kapcsolati adata:',
  'LBL_SUPPORT_DESCRIPTION' => 'Támogatás leírása:',
  'LBL_SUPPORT_NAME' => 'Támogató megnevezése:',
  'LBL_SUPPORT_TERM' => 'Támogatás időtartama:',
  'LBL_TAX_CLASS' => 'Áfa kulcs:',
  'LBL_TYPE' => 'Típus:',
  'LBL_URL' => 'Termék URL:',
  'LBL_VENDOR_PART_NUM' => 'Eladó partnerszáma:',
  'LBL_WEBSITE' => 'Honlap',
  'LBL_WEIGHT' => 'Súly:',
  'LNK_IMPORT_PRODUCTS' => 'Import termékek',
  'LNK_NEW_PRODUCT' => 'Termék hozzáadása',
  'LNK_PRODUCT_LIST' => 'Termékek megtekintése',
  'NTC_DELETE_CONFIRMATION' => 'Biztos benne, hogy törölni kívánja ezt a rekordot?',
  'NTC_REMOVE_CONFIRMATION' => 'Biztosan el akarja távolítani ezt a terméket a kapcsolatból?',
);


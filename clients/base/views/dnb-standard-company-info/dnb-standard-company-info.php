<?php
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
$viewdefs['base']['view']['dnb-standard-company-info'] = array(
    'dashlets' => array(
        array(
            'label' => 'LBL_DNB_STD_COMPANY_INFO',
            'description' => 'LBL_DNB_STD_COMPANY_INFO_DESC',
            'filter' => array(
                'module' => array(
                    'Accounts',
                ),
                'view' => 'record'
            ),
            'config' => array(
                'compname' => '1',
                'tradename' => '1',
                'locationtype' => '1',
                'cntrowndate' => '1',
                'cntrowntype' => '1',
                'operstatus' => '1',
                'orgstartyear' => '1',
                'primaddrstreet' => '1',
                'primaddrcity' => '1',
                'primaddrstateabbr' => '1',
                'primaddrstate' => '1',
                'primaddrctrycd' => '1',
                'primaddrctrygrp' => '1',
                'primaddrzip' => '1',
                'primaddrcountyname' => '1',
                'uscensuscd' => '1',
                'mailingaddrstreet' => '1',
                'mailingaddrcity' => '1',
                'mailingaddrstateabbr' => '1',
                'mailingaddrzip' => '1',
                'mailingaddrctrycd' => '1',
                'long' => '1',
                'lat' => '1',
                'phone' => '1',
                'fax' => '1',
                'webpage' => '1',
                'indempcnt' => '1',
                'conempcnt' => '1',
                'empdet' => '1',
                'lob' => '1',
                'impind' => '1',
                'expind' => '1',
                'agentind' => '1',
                'histrat' => '1',
                'uspatriskscr' => '1',
                'tpa' => '1',
                'minind' => '1',
                'smbind' => '1',
                'ethn' => '1',
                'femind' => '1',
                'smbdisadv' => '1',
                'alasnat' => '1',
                'smbcert' => '1',
                'mincoll' => '1',
                'disab' => '1',
                'svcdisabvet' => '1',
                'vietvet' => '1',
                'airprtdisadvent' => '1',
                'disabvetent' => '1',
                'disadvent' => '1',
                'disadvvetent' => '1',
                'minent' => '1',
                'fement' => '1',
                'hubcrt' => '1',
                'eightacrt' => '1',
                'vet_ind' => '1',
                'lsind' => '1',
                'vetent' => '1',
                'inqcnt' => '1',
                'transferdunsnbr' => '1',
                'lastupddate' => '1',
                'marketind' => '1',
                'dunsselfind' => '1',
                'nonmarkreastxt' => '1',
                'indcodes' => '1',

            ),
            'preview' => array(
                'compname' => '1',
                'tradename' => '1',
                'locationtype' => '1',
                'cntrowndate' => '1',
                'cntrowntype' => '1',
                'operstatus' => '1',
                'orgstartyear' => '1',
                'primaddrstreet' => '1',
                'primaddrcity' => '1',
                'primaddrstateabbr' => '1',
                'primaddrstate' => '1',
                'primaddrctrycd' => '1',
                'primaddrctrygrp' => '1',
                'primaddrzip' => '1',
                'primaddrcountyname' => '1',
                'uscensuscd' => '1',
                'mailingaddrstreet' => '1',
                'mailingaddrcity' => '1',
                'mailingaddrstateabbr' => '1',
                'mailingaddrzip' => '1',
                'mailingaddrctrycd' => '1',
                'long' => '1',
                'lat' => '1',
                'phone' => '1',
                'fax' => '1',
                'webpage' => '1',
                'indempcnt' => '1',
                'conempcnt' => '1',
                'empdet' => '1',
                'lob' => '1',
                'impind' => '1',
                'expind' => '1',
                'agentind' => '1',
                'histrat' => '1',
                'uspatriskscr' => '1',
                'tpa' => '1',
                'minind' => '1',
                'smbind' => '1',
                'ethn' => '1',
                'femind' => '1',
                'smbdisadv' => '1',
                'alasnat' => '1',
                'smbcert' => '1',
                'mincoll' => '1',
                'disab' => '1',
                'svcdisabvet' => '1',
                'vietvet' => '1',
                'airprtdisadvent' => '1',
                'disabvetent' => '1',
                'disadvent' => '1',
                'disadvvetent' => '1',
                'minent' => '1',
                'fement' => '1',
                'hubcrt' => '1',
                'eightacrt' => '1',
                'vet_ind' => '1',
                'lsind' => '1',
                'vetent' => '1',
                'inqcnt' => '1',
                'transferdunsnbr' => '1',
                'lastupddate' => '1',
                'marketind' => '1',
                'dunsselfind' => '1',
                'nonmarkreastxt' => '1',
                'indcodes' => '1',
            ),
        ),
    ),
    'custom_toolbar' => array(
        'buttons' => array(
            array(
                'dropdown_buttons' => array(
                    array(
                        'type' => 'dashletaction',
                        'action' => 'editClicked',
                        'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                    ),
                    array(
                        'type' => 'dashletaction',
                        'action' => 'refreshClicked',
                        'label' => 'LBL_DASHLET_REFRESH_LABEL',
                    ),
                    array(
                        'type' => 'dashletaction',
                        'action' => 'removeClicked',
                        'label' => 'LBL_DASHLET_REMOVE_LABEL',
                    ),
                )
            ),
            array(
                "type" => "dashletaction",
                "css_class" => "dashlet-toggle btn btn-invisible minify",
                "icon" => "icon-chevron-down",
                "action" => "toggleMinify",
                "tooltip" => "LBL_DASHLET_MAXIMIZE",
            )
        )
    ),
    'config' => array(
        'fields' => array(
            array(
                'name' => 'compname',
                'label' => 'LBL_DNB_PRIM_NAME',
                'desc' => 'LBL_DNB_PRIM_NAME_DESC',
                'header' => 'LBL_DNB_ORG_NAME',
                'header_desc' => 'LBL_DNB_ORG_NAME_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'tradename',
                'label' => 'LBL_DNB_TRD_NAME',
                'desc' => 'LBL_DNB_TRD_NAME_DESC',
                'last' => '1',
                'type' => 'bool'
            ),
            array(
                'name' => 'locationtype',
                'label' => 'LBL_DNB_LOCATION_TYPE',
                'desc' => 'LBL_DNB_LOCATION_TYPE_DESC',
                'header' => 'LBL_DNB_ORG_DET',
                'header_desc' => 'LBL_DNB_ORG_DET_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'cntrowndate',
                'label' => 'LBL_DNB_CNTRL_OWN_DATE',
                'desc' => 'LBL_DNB_CNTRL_OWN_DATE_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'cntrowntype',
                'label' => 'LBL_DNB_CNTRL_TYP_TEXT',
                'desc' => 'LBL_DNB_CNTRL_TYP_TEXT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'operstatus',
                'label' => 'LBL_DNB_OPERL_STA_TEXT',
                'desc' => 'LBL_DNB_OPERL_STA_TEXT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'orgstartyear',
                'label' => 'LBL_DNB_ORGS_STRT_YEAR',
                'desc' => 'LBL_DNB_ORGS_STRT_YEAR_DESC',
                'last' => '1',
                'type' => 'bool'
            ),
            array(
                'name' => 'primaddrstreet',
                'label' => 'LBL_DNB_PRIM_STREET',
                'desc' => 'LBL_DNB_PRIM_STREET_DESC',
                'header' => 'LBL_DNB_LOC',
                'header_desc' => 'LBL_DNB_LOC_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'primaddrcity',
                'label' => 'LBL_DNB_PRIM_CITY',
                'desc' => 'LBL_DNB_PRIM_CITY_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'primaddrstateabbr',
                'label' => 'LBL_DNB_PRIM_STATE_ABBR',
                'desc' => 'LBL_DNB_PRIM_STATE_ABBR_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'primaddrstate',
                'label' => 'LBL_DNB_PRIM_STATE',
                'desc' => 'LBL_DNB_PRIM_STATE_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'primaddrctrycd',
                'label' => 'LBL_DNB_PRIM_CTRY_CD',
                'desc' => 'LBL_DNB_PRIM_CTRY_CD_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'primaddrctrygrp',
                'label' => 'LBL_DNB_PRIM_CTRY_GRP',
                'desc' => 'LBL_DNB_PRIM_CTRY_GRP_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'primaddrzip',
                'label' => 'LBL_DNB_PRIM_ZIP',
                'desc' => 'LBL_DNB_PRIM_ZIP_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'primaddrcountyname',
                'label' => 'LBL_DNB_PRIM_COUNTY_NAME',
                'desc' => 'LBL_DNB_PRIM_COUNTY_NAME_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'uscensuscd',
                'label' => 'LBL_DNB_PRIM_CEN_CD',
                'desc' => 'LBL_DNB_PRIM_CEN_CD_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'mailingaddrstreet',
                'label' => 'LBL_DNB_MAIL_STREET',
                'desc' => 'LBL_DNB_PRIM_STREET_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'mailingaddrcity',
                'label' => 'LBL_DNB_MAIL_CITY',
                'desc' => 'LBL_DNB_PRIM_CITY_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'mailingaddrstateabbr',
                'label' => 'LBL_DNB_MAIL_STATE_ABBR',
                'desc' => 'LBL_DNB_PRIM_STATE_ABBR_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'mailingaddrzip',
                'label' => 'LBL_DNB_MAIL_ZIP',
                'desc' => 'LBL_DNB_PRIM_ZIP_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'mailingaddrctrycd',
                'label' => 'LBL_DNB_MAIL_CTRY_CD',
                'desc' => 'LBL_DNB_PRIM_CTRY_CD_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'long',
                'label' => 'LBL_DNB_LAT',
                'desc' => 'LBL_DNB_LAT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'lat',
                'label' => 'LBL_DNB_LONG',
                'desc' => 'LBL_DNB_LONG_DESC',
                'last' => '1',
                'type' => 'bool'
            ),
            array(
                'name' => 'phone',
                'label' => 'LBL_DNB_PHONE',
                'desc' => 'LBL_DNB_PHONE_DESC',
                'header' => 'LBL_DNB_TELECOMM',
                'header_desc' => 'LBL_DNB_TELECOMM_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'fax',
                'label' => 'LBL_DNB_FAX',
                'desc' => 'LBL_DNB_FAX_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'webpage',
                'label' => 'LBL_DNB_WEBPAGE',
                'desc' => 'LBL_DNB_WEBPAGE_DESC',
                'last' => '1',
                'type' => 'bool'
            ),
            array(
                'name' => 'indempcnt',
                'label' => 'LBL_DNB_IND_EMP_CNT',
                'desc' => 'LBL_DNB_IND_EMP_CNT_DESC',
                'header' => 'LBL_DNB_EMP_INF',
                'header_desc' => 'LBL_DNB_EMP_INF_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'conempcnt',
                'label' => 'LBL_DNB_CON_EMP_CNT',
                'desc' => 'LBL_DNB_CON_EMP_CNT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'empdet',
                'label' => 'LBL_DNB_EMP_DET',
                'desc' => 'LBL_DNB_EMP_DET_DESC',
                'last' => '1',
                'type' => 'bool'
            ),
            array(
                'name' => 'lob',
                'label' => 'LBL_DNB_LOB',
                'desc' => 'LBL_DNB_LOB_DESC',
                'header' => 'LBL_DNB_ACT_OPER',
                'header_desc' => 'LBL_DNB_ACT_OPER_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'impind',
                'label' => 'LBL_DNB_IMP_IND',
                'desc' => 'LBL_DNB_IMP_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'expind',
                'label' => 'LBL_DNB_EXP_IND',
                'desc' => 'LBL_DNB_EXP_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'agentind',
                'label' => 'LBL_DNB_AGENT_IND',
                'desc' => 'LBL_DNB_AGENT_IND_DESC',
                'last' => '1',
                'type' => 'bool'
            ),
            array(
                'name' => 'histrat',
                'label' => 'LBL_DNB_HIST_RAT',
                'desc' => 'LBL_DNB_HIST_RAT_DESC',
                'header' => 'LBL_DNB_ASSESMENT',
                'header_desc' => 'LBL_DNB_ASSESMENT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'uspatriskscr',
                'label' => 'LBL_DNB_USPAT_SCR',
                'desc' => 'LBL_DNB_USPAT_SCR_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'tpa',
                'label' => 'LBL_DNB_TPA',
                'desc' => 'LBL_DNB_TPA_DESC',
                'last' => '1',
                'type' => 'bool'
            ),
            array(
                'name' => 'minind',
                'label' => 'LBL_DNB_MIN_IND',
                'desc' => 'LBL_DNB_MIN_IND_DESC',
                'header' => 'LBL_DNB_SOCIO_IND',
                'header_desc' => 'LBL_DNB_SOCIO_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'smbind',
                'label' => 'LBL_DNB_SMB_IND',
                'desc' => 'LBL_DNB_SMB_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'ethn',
                'label' => 'LBL_DNB_ETHN',
                'desc' => 'LBL_DNB_ETHN_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'femind',
                'label' => 'LBL_DNB_FEM_IND',
                'desc' => 'LBL_DNB_FEM_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'smbdisadv',
                'label' => 'LBL_DNB_SMBDISADV_IND',
                'desc' => 'LBL_DNB_SMBDISADV_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'alasnat',
                'label' => 'LBL_DNB_ALASNAT_IND',
                'desc' => 'LBL_DNB_ALASNAT_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'smbcert',
                'label' => 'LBL_DNB_SMB_CERT',
                'desc' => 'LBL_DNB_SMB_CERT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'mincoll',
                'label' => 'LBL_DNB_MIN_COLL',
                'desc' => 'LBL_DNB_MIN_COLL_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'disab',
                'label' => 'LBL_DNB_DISAB_IND',
                'desc' => 'LBL_DNB_DISAB_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'svcdisabvet',
                'label' => 'LBL_DNB_SVC_DISAB_VET',
                'desc' => 'LBL_DNB_SVC_DISAB_VET_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'vietvet',
                'label' => 'LBL_DNB_VIET_VET',
                'desc' => 'LBL_DNB_VIET_VET_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'airprtdisadvent',
                'label' => 'LBL_DNB_AIRPRT_DISADV_ENT',
                'desc' => 'LBL_DNB_AIRPRT_DISADV_ENT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'disabvetent',
                'label' => 'LBL_DNB_DISAB_VET_ENT',
                'desc' => 'LBL_DNB_DISAB_VET_ENT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'disadvent',
                'label' => 'LBL_DNB_DISADV_ENT',
                'desc' => 'LBL_DNB_DISADV_ENT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'disadvvetent',
                'label' => 'LBL_DNB_DISADV_VET_ENT',
                'desc' => 'LBL_DNB_DISADV_VET_ENT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'minent',
                'label' => 'LBL_DNB_MIN_ENT',
                'desc' => 'LBL_DNB_MIN_ENT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'fement',
                'label' => 'LBL_DNB_FEM_ENT',
                'desc' => 'LBL_DNB_FEM_ENT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'hubcrt',
                'label' => 'LBL_DNB_HUB_CRT',
                'desc' => 'LBL_DNB_HUB_CRT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'eightacrt',
                'label' => 'LBL_DNB_EIGHTA_CRT',
                'desc' => 'LBL_DNB_EIGHTA_CRT_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'vet_ind',
                'label' => 'LBL_DNB_VET_IND',
                'desc' => 'LBL_DNB_VET_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'lsind',
                'label' => 'LBL_DNB_LS_IND',
                'desc' => 'LBL_DNB_LS_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'vetent',
                'label' => 'LBL_DNB_VET_ENT',
                'desc' => 'LBL_DNB_VET_ENT_DESC',
                'last' => '1',
                'type' => 'bool'
            ),
            array(
                'name' => 'inqcnt',
                'label' => 'LBL_DNB_INQ_CNT',
                'desc' => 'LBL_DNB_INQ_CNT_DESC',
                'header' => 'LBL_DNB_SUBJ_HEADER',
                'header_desc' => 'LBL_DNB_SUBJ_HEADER_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'transferdunsnbr',
                'label' => 'LBL_DNB_TRNS_DUNS',
                'desc' => 'LBL_DNB_TRNS_DUNS_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'lastupddate',
                'label' => 'LBL_DNB_LAST_UPD_DATE',
                'desc' => 'LBL_DNB_LAST_UPD_DATE_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'marketind',
                'label' => 'LBL_DNB_MARKET_IND',
                'desc' => 'LBL_DNB_MARKET_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'dunsselfind',
                'label' => 'LBL_DNB_DUNSSELF_IND',
                'desc' => 'LBL_DNB_DUNSSELF_IND_DESC',
                'type' => 'bool'
            ),
            array(
                'name' => 'nonmarkreastxt',
                'label' => 'LBL_DNB_NONMARK_REAS_TXT',
                'desc' => 'LBL_DNB_NONMARK_REAS_TXT_DESC',
                'last' => '1',
                'type' => 'bool'
            ),
            array(
                'name' => 'indcodes',
                'label' => 'LBL_DNB_IND_CD',
                'desc' => 'LBL_DNB_IND_CD_DESC',
                'header' => 'LBL_DNB_IND_CD_HED',
                'header_desc' => 'LBL_DNB_IND_CD_HED_DESC',
                'last' => '1',
                'type' => 'bool'
            ),
        ),
    ),
);
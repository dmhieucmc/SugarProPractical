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


$subpanel_layout = array(
	'top_buttons' => array(
        array('widget_class' => 'SubPanelTopCreateButton'),
		array('widget_class' => 'SubPanelTopSelectButton', 'popup_module' => 'Users'),
	),

	'where' => '',
	
	

    'list_fields'=> array(
		'accept_status_name' => array(
			'vname' => 'LBL_LIST_ACCEPT_STATUS',
			'width' => '11%',
			'sortable'=> false,
		),
		'c_accept_status_fields'=>array(
			'usage' => 'query_only',
		),
		'accept_status_id'=>array(
			'usage' => 'query_only',
		),				
        'first_name'=>array(
		 	'usage' => 'query_only',
		),
		'last_name'=>array(
		 	'usage' => 'query_only',
		),
		'full_name'=>array(
			'vname' => 'LBL_LIST_NAME',
			'widget_class' => 'SubPanelDetailViewLink',
			'target_module' => 'Employees',
		 	'module' => 'Users',
	 		'width' => '25%',
		),
		'user_name'=>array(
			'vname' => 'LBL_LIST_USER_NAME',
			'width' => '25%',
		),
		'email1'=>array(
			'vname' => 'LBL_LIST_EMAIL',
			'width' => '20%',
			'widget_class' => 'SubPanelEmailLink',
            'sortable' => false,
		),
		'phone_work'=>array (
			'vname' => 'LBL_LIST_PHONE',
			'width' => '10%',
		),
		'remove_button'=>array(
			'vname' => 'LBL_REMOVE',
			'widget_class' => 'SubPanelRemoveButtonMeetings',
		 	'module' => 'Users',
			'width' => '10%',
			'linked_field' => 'users',
		),
	),
);

?>
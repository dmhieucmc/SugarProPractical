<?php
$clientCache['Audit']['base']['field'] = array (
  'fieldtype' => 
  array (
    'controller' => 
    array (
      'base' => '/*
     * Your installation or use of this SugarCRM file is subject to the applicable
     * terms available at
     * http://support.sugarcrm.com/06_Customer_Center/10_Master_Subscription_Agreements/.
     * If you do not agree to all of the applicable terms or do not have the
     * authority to bind the entity as an authorized representative, then do not
     * install or use this SugarCRM file.
     *
     * Copyright (C) SugarCRM Inc. All rights reserved.
     */
({format:function(value){if(this.context&&this.context.parent){var parentModel=this.context.parent.get(\'model\'),field=parentModel.fields[value];if(field){value=app.lang.get(field.label||field.vname,parentModel.module);}}
return value;}})',
    ),
  ),
  '_hash' => '6d756e7798254c04c9e118e8526d4014',
);


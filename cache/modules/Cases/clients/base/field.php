<?php
$clientCache['Cases']['base']['field'] = array (
  'create-article-action' => 
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
({extendsFrom:\'RowactionField\',initialize:function(options){this._super(\'initialize\',[options]);this.def.route=\'bwc/index.php?module=KBDocuments&action=EditView&case_id=\'+this.model.id;},_loadTemplate:function(){this.type=\'rowaction\';this._super(\'_loadTemplate\');this.type=this.def.type;}})',
    ),
  ),
  '_hash' => '62e31221e9359399e6992e24baaba311',
);


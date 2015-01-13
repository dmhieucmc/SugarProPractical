<?php
$clientCache['Leads']['base']['view'] = array (
  'convert-headerpane' => 
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
({extendsFrom:\'HeaderpaneView\',events:{\'click [name=save_button]:not(".disabled")\':\'initiateSave\',\'click [name=cancel_button]\':\'initiateCancel\'},initialize:function(options){this._super("initialize",[options]);this.context.on(\'lead:convert-save:toggle\',this.toggleSaveButton,this);},_formatTitle:function(title){var leadsModel=this.context.get(\'leadsModel\'),name=!_.isUndefined(leadsModel.get(\'name\'))?leadsModel.get(\'name\'):leadsModel.get(\'first_name\')+\' \'+leadsModel.get(\'last_name\');return app.lang.get(title,this.module)+\': \'+name;},initiateSave:function(){this.context.trigger(\'lead:convert:save\');},initiateCancel:function(){app.drawer.close();},toggleSaveButton:function(enable){this.$(\'[name=save_button]\').toggleClass(\'disabled\',!enable);}})',
    ),
    'meta' => 
    array (
      'template' => 'headerpane',
      'fields' => 
      array (
        0 => 
        array (
          'name' => 'title',
          'type' => 'label',
          'default_value' => 'LBL_CONVERTLEAD',
        ),
      ),
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn btn-invisible btn-link cancel',
        ),
        1 => 
        array (
          'name' => 'save_button',
          'type' => 'button',
          'label' => 'LBL_SAVE_CONVERT_BUTTON_LABEL',
          'css_class' => 'btn-primary disabled',
          'acl_action' => 'edit',
        ),
        2 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
    ),
  ),
  'convert-panel-header' => 
  array (
    'templates' => 
    array (
      'convert-panel-header' => '
<div class="accordion-heading {{#unless this.meta.dependentModules}}enabled{{/unless}}" data-module="{{this.meta.module}}">
    <span class="pull-left step-circle">
        <span>{{this.meta.moduleNumber}}</span>
        <i class="icon-ok-sign"></i>
    </span>
    <span class="title">{{this.initial.title}}</span>
    <span class="dupecheck-results"></span>
    <span class="btn btn-invisible active-indicator pull-right"><i class="icon-chevron-down"></i></span>
    <span class="buttons pull-right">
        {{#each meta.buttons}}
            {{field ../this}}
        {{/each}}
    </span>
    <span class="subview-toggle pull-right hide">
        <a class="toggle-link dupecheck" data-next-toggle="create" href="javascript:void(0)">{{str \'LBL_CONVERT_IGNORE_DUPLICATES\' module}}</a>
        <a class="toggle-link create" data-next-toggle="dupecheck" href="javascript:void(0)" >{{str \'LBL_CONVERT_BACK_TO_DUPLICATES\' module}}</a>
    </span>
</div>
',
      'dupecheck-pending' => '
{{str \'LBL_CONVERT_FINDING_DUPLICATES\' labelModule}}
',
      'dupecheck-results' => '
{{#if duplicateCheckResult}}{{str \'LBL_CONVERT_DUPLICATES_FOUND\' labelModule duplicateCheckResult}}{{/if}}
',
      'title' => '
{{#if complete}}
    {{str \'LBL_CONVERT_ASSOCIATED_MODULE\' labelModule moduleInfo}}: {{associatedName}}
{{else}}
    {{#if create}}{{str \'LBL_CONVERT_CREATE_NEW\' labelModule moduleInfo}}{{else}}{{moduleInfo.moduleName}}{{/if}}{{#unless required}} {{str \'LBL_CONVERT_PANEL_OPTIONAL\' labelModule}}{{/unless}}:
{{/if}}
',
    ),
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
({events:{\'click .toggle-link\':\'handleToggleClick\'},initialize:function(options){options.meta.buttons=this.getButtons(options);app.view.View.prototype.initialize.call(this,options);this.layout.on(\'toggle:change\',this.handleToggleChange,this);this.layout.on(\'lead:convert-dupecheck:pending\',this.setDupeCheckPending,this);this.layout.on(\'lead:convert-dupecheck:complete\',this.setDupeCheckResults,this);this.layout.on(\'lead:convert-panel:complete\',this.handlePanelComplete,this);this.layout.on(\'lead:convert-panel:reset\',this.handlePanelReset,this);this.layout.on(\'lead:convert:duplicate-selection:change\',this.setAssociateButtonState,this);this.context.on(\'lead:convert:\'+this.meta.module+\':shown\',this.handlePanelShown,this);this.context.on(\'lead:convert:\'+this.meta.module+\':hidden\',this.handlePanelHidden,this);this.initializeSubTemplates();},getButtons:function(options){return[{name:\'associate_button\',type:\'button\',label:this.getLabel(\'LBL_CONVERT_ASSOCIATE_MODULE\',{\'moduleName\':options.meta.moduleSingular}),css_class:\'btn-primary disabled\'},{name:\'reset_button\',type:\'button\',label:\'LBL_CONVERT_RESET_PANEL\',css_class:\'btn-invisible btn-link\'}];},_render:function(){app.view.View.prototype._render.call(this);this.getField(\'reset_button\').hide();},getCurrentState:function(){var currentState=_.extend({},this.layout.currentState,{create:(this.layout.currentToggle===this.layout.TOGGLE_CREATE),labelModule:this.module,moduleInfo:{\'moduleName\':this.meta.moduleSingular},required:this.meta.required});if(_.isNumber(currentState.dupeCount)){currentState.duplicateCheckResult={\'duplicateCount\':currentState.dupeCount};}
return currentState;},initializeSubTemplates:function(){this.tpls={};this.initial={};this.tpls.title=app.template.getView(this.name+\'.title\',this.module);this.initial.title=this.tpls.title(this.getCurrentState());this.tpls.dupecheckPending=app.template.getView(this.name+\'.dupecheck-pending\',this.module);this.tpls.dupecheckResults=app.template.getView(this.name+\'.dupecheck-results\',this.module);},handleToggleClick:function(event){var nextToggle=this.$(event.target).data(\'next-toggle\');this.layout.trigger(\'toggle:showcomponent\',nextToggle);event.stopPropagation();},handleToggleChange:function(toggle){this.renderTitle();this.toggleDupeCheckResults(toggle===this.layout.TOGGLE_DUPECHECK);this.setSubViewToggle(toggle);this.setAssociateButtonState();},handlePanelShown:function(){this.$(\'.accordion-heading\').addClass(\'active\');this.toggleSubViewToggle(true);this.setAssociateButtonState();this.toggleActiveIndicator(true);},handlePanelHidden:function(){this.$(\'.accordion-heading\').removeClass(\'active\');this.toggleSubViewToggle(false);this.setAssociateButtonState(false);this.toggleActiveIndicator(false);},handlePanelComplete:function(){this.setStepCircle(true);this.renderTitle();this.toggleDupeCheckResults(false);this.toggleSubViewToggle(false);this.toggleButtons(true);},handlePanelReset:function(){this.setStepCircle(false);this.renderTitle();this.toggleDupeCheckResults(true);this.toggleButtons(false);this.setAssociateButtonState();},setStepCircle:function(complete){var $stepCircle=this.$(\'.step-circle\');if(complete){$stepCircle.addClass(\'complete\');}else{$stepCircle.removeClass(\'complete\');}},renderTitle:function(){this.$(\'.title\').html(this.tpls.title(this.getCurrentState()));},setDupeCheckPending:function(){this.renderDupeCheckResults(\'pending\');},setDupeCheckResults:function(duplicateCount){if(duplicateCount>0){this.renderDupeCheckResults(\'results\');}else{this.renderDupeCheckResults(\'clear\');}
this.setSubViewToggleLabels(duplicateCount);},renderDupeCheckResults:function(type){var results=\'\';if(type===\'results\'){results=this.tpls.dupecheckResults(this.getCurrentState());}else if(type===\'pending\'){results=this.tpls.dupecheckPending(this.getCurrentState())}
this.$(\'.dupecheck-results\').text(results);},toggleDupeCheckResults:function(show){this.$(\'.dupecheck-results\').toggle(show);},toggleSubViewToggle:function(show){if(this.layout.currentState.complete){show=false}
this.$(\'.subview-toggle\').toggleClass(\'hide\',!show);},setSubViewToggle:function(nextToggle){_.each([\'dupecheck\',\'create\'],function(currentToggle){this.toggleSubViewLink(currentToggle,(nextToggle===currentToggle));},this);},toggleSubViewLink:function(currentToggle,show){this.$(\'.subview-toggle .\'+currentToggle).toggle(show);},setSubViewToggleLabels:function(duplicateCount){if(duplicateCount>0){this.setSubViewToggleLabel(\'dupecheck\',\'LBL_CONVERT_IGNORE_DUPLICATES\');this.setSubViewToggleLabel(\'create\',\'LBL_CONVERT_BACK_TO_DUPLICATES\');this.searchMode=false;}else{this.setSubViewToggleLabel(\'dupecheck\',\'LBL_CONVERT_SWITCH_TO_CREATE\');this.setSubViewToggleLabel(\'create\',\'LBL_CONVERT_SWITCH_TO_SEARCH\');this.searchMode=true;}},setSubViewToggleLabel:function(currentToggle,label){this.$(\'.subview-toggle .\'+currentToggle).text(this.getLabel(label,{}));},toggleButtons:function(complete){var associateButton=\'associate_button\',resetButton=\'reset_button\';if(complete){this.getField(associateButton).hide();this.getField(resetButton).show();}else{this.getField(associateButton).show();this.getField(resetButton).hide();}},setAssociateButtonState:function(activate){var $associateButton=this.$(\'[name="associate_button"]\'),panelActive=this.$(\'.accordion-heading\').hasClass(\'active\');if(_.isUndefined(activate)){if(this.layout.currentToggle===this.layout.TOGGLE_CREATE){activate=true;}else{activate=this.layout.currentState.dupeSelected;}}
if(activate&&panelActive){$associateButton.removeClass(\'disabled\');}else{$associateButton.addClass(\'disabled\');}},toggleActiveIndicator:function(active){var $activeIndicator=this.$(\'.active-indicator i\');$activeIndicator.toggleClass(\'icon-chevron-up\',active);$activeIndicator.toggleClass(\'icon-chevron-down\',!active);},getLabel:function(key,context){return app.lang.get(key,\'Leads\',context);}})',
    ),
  ),
  'convert-results' => 
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
({extendsFrom:\'ConvertResultsView\',populateResults:function(){var model;if(!this.model.get(\'converted\')){return;}
this.associatedModels.reset();model=this.buildAssociatedModel(\'Contacts\',\'contact_id\',\'contact_name\');if(model){this.associatedModels.push(model);}
model=this.buildAssociatedModel(\'Accounts\',\'account_id\',\'account_name\');if(model){this.associatedModels.push(model);}
model=this.buildAssociatedModel(\'Opportunities\',\'opportunity_id\',\'opportunity_name\');if(model){this.associatedModels.push(model);}
app.view.View.prototype.render.call(this);},buildAssociatedModel:function(moduleName,idField,nameField){var moduleSingular=app.lang.getAppListStrings("moduleListSingular"),rowTitle,model;if(_.isEmpty(this.model.get(idField))){return false;}
rowTitle=app.lang.get(\'LBL_CONVERT_MODULE_ASSOCIATED\',this.module,{\'moduleName\':moduleSingular[moduleName]});model=app.data.createBean(moduleName,{id:this.model.get(idField),name:this.model.get(nameField),row_title:rowTitle,_module:moduleName,target_module:moduleName});model.module=moduleName;return model;}})',
    ),
  ),
  'create-actions' => 
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
({extendsFrom:\'CreateView\',getCustomSaveOptions:function(){var options={};if(this.context.get(\'prospect_id\')){options.params={};options.params.prospect_id=this.context.get(\'prospect_id\');this.context.unset(\'prospect_id\');}
return options;}})',
    ),
    'meta' => 
    array (
      'template' => 'record',
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'cancel_button',
          'type' => 'button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
        ),
        1 => 
        array (
          'name' => 'restore_button',
          'type' => 'button',
          'label' => 'LBL_RESTORE',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'select',
        ),
        2 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'main_dropdown',
          'primary' => true,
          'switch_on_click' => true,
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'rowaction',
              'name' => 'save_button',
              'label' => 'LBL_SAVE_BUTTON_LABEL',
            ),
            1 => 
            array (
              'type' => 'rowaction',
              'name' => 'save_view_button',
              'label' => 'LBL_SAVE_AND_VIEW',
              'showOn' => 'create',
            ),
            2 => 
            array (
              'type' => 'rowaction',
              'name' => 'save_create_button',
              'label' => 'LBL_SAVE_AND_CREATE_ANOTHER',
              'showOn' => 'create',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'LeadsCreate-actionsView_status_read_only',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'converted',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'status',
                'label' => 'status_label',
                'value' => 'equal($converted,"true")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'dupecheck-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'full_name',
              'type' => 'fullname',
              'fields' => 
              array (
                0 => 'salutation',
                1 => 'first_name',
                2 => 'last_name',
              ),
              'link' => true,
              'css_class' => 'full-name',
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'account_id',
                1 => 'converted',
              ),
            ),
            3 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL_ADDRESS',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'headerpane' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'name' => 'create_button',
          'type' => 'button',
          'label' => 'LBL_CREATE_BUTTON_LABEL',
          'css_class' => 'btn-primary',
          'acl_action' => 'create',
          'route' => 
          array (
            'action' => 'create',
          ),
        ),
        1 => 
        array (
          'name' => 'import_vcard_button',
          'type' => 'button',
          'label' => 'LBL_IMPORT_VCARD',
          'css_class' => 'btn-primary',
          'acl_action' => 'import',
          'events' => 
          array (
            'click' => 'function(e){
                    app.drawer.open({
                            layout : "vcard-import",
                            context: {
                                create: true
                            }
                        });
                    }',
          ),
        ),
        2 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
    ),
  ),
  'list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'full_name',
              'type' => 'fullname',
              'fields' => 
              array (
                0 => 'salutation',
                1 => 'first_name',
                2 => 'last_name',
              ),
              'link' => true,
              'css_class' => 'full-name',
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'account_id',
                1 => 'converted',
              ),
            ),
            3 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL_ADDRESS',
              'enabled' => true,
              'default' => true,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'default' => true,
              'readonly' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'panel-top-for-prospectlists' => 
  array (
    'meta' => 
    array (
      'type' => 'panel-top',
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'css_class' => 'btn-invisible',
          'icon' => 'icon-chevron-up',
          'tooltip' => 'LBL_TOGGLE_VISIBILITY',
        ),
        1 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'panel_dropdown',
          'css_class' => 'pull-right',
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'sticky-rowaction',
              'icon' => 'icon-plus',
              'name' => 'create_button',
              'label' => ' ',
              'acl_action' => 'create',
              'tooltip' => 'LBL_CREATE_BUTTON_LABEL',
            ),
            1 => 
            array (
              'type' => 'link-action',
              'name' => 'select_button',
              'label' => 'LBL_ASSOC_RELATED_RECORD',
            ),
            2 => 
            array (
              'type' => 'linkfromreportbutton',
              'name' => 'select_button',
              'label' => 'LBL_SELECT_REPORTS_BUTTON_LABEL',
              'initial_filter' => 'by_module',
              'initial_filter_label' => 'LBL_FILTER_LEADS_REPORTS',
              'filter_populate' => 
              array (
                'module' => 
                array (
                  0 => 'Leads',
                ),
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'record' => 
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
({extendsFrom:\'RecordView\',initialize:function(options){this.plugins=_.union(this.plugins||[],[\'HistoricalSummary\']);this._super(\'initialize\',[options]);},setupDuplicateFields:function(prefill){var duplicateBlackList=[\'id\',\'status\',\'converted\',\'account_id\',\'opportunity_id\',\'contact_id\'];_.each(duplicateBlackList,function(field){if(field&&prefill.has(field)){if(!_.isUndefined(prefill.fields[field])&&!_.isUndefined(prefill.fields[field].default)){prefill.set(field,prefill.fields[field].default);}else{prefill.unset(field);}}});}})',
    ),
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'name' => 'cancel_button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'css_class' => 'btn-invisible btn-link',
          'showOn' => 'edit',
        ),
        1 => 
        array (
          'type' => 'rowaction',
          'event' => 'button:save_button:click',
          'name' => 'save_button',
          'label' => 'LBL_SAVE_BUTTON_LABEL',
          'css_class' => 'btn btn-primary',
          'showOn' => 'edit',
          'acl_action' => 'edit',
        ),
        2 => 
        array (
          'type' => 'actiondropdown',
          'name' => 'main_dropdown',
          'primary' => true,
          'showOn' => 'view',
          'buttons' => 
          array (
            0 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:edit_button:click',
              'name' => 'edit_button',
              'label' => 'LBL_EDIT_BUTTON_LABEL',
              'acl_action' => 'edit',
            ),
            1 => 
            array (
              'type' => 'shareaction',
              'name' => 'share',
              'label' => 'LBL_RECORD_SHARE_BUTTON',
              'acl_action' => 'view',
            ),
            2 => 
            array (
              'type' => 'pdfaction',
              'name' => 'download-pdf',
              'label' => 'LBL_PDF_VIEW',
              'action' => 'download',
              'acl_action' => 'view',
            ),
            3 => 
            array (
              'type' => 'pdfaction',
              'name' => 'email-pdf',
              'label' => 'LBL_PDF_EMAIL',
              'action' => 'email',
              'acl_action' => 'view',
            ),
            4 => 
            array (
              'type' => 'divider',
            ),
            5 => 
            array (
              'type' => 'convertbutton',
              'name' => 'lead_convert_button',
              'label' => 'LBL_CONVERT_BUTTON_LABEL',
              'acl_action' => 'edit',
            ),
            6 => 
            array (
              'type' => 'manage-subscription',
              'name' => 'manage_subscription_button',
              'label' => 'LBL_MANAGE_SUBSCRIPTIONS',
              'acl_action' => 'view',
            ),
            7 => 
            array (
              'type' => 'vcard',
              'name' => 'vcard_button',
              'label' => 'LBL_VCARD_DOWNLOAD',
              'acl_action' => 'view',
            ),
            8 => 
            array (
              'type' => 'divider',
            ),
            9 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:find_duplicates_button:click',
              'name' => 'find_duplicates_button',
              'label' => 'LBL_DUP_MERGE',
              'acl_action' => 'edit',
            ),
            10 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:duplicate_button:click',
              'name' => 'duplicate_button',
              'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
              'acl_module' => 'Leads',
              'acl_action' => 'create',
            ),
            11 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:historical_summary_button:click',
              'name' => 'historical_summary_button',
              'label' => 'LBL_HISTORICAL_SUMMARY',
              'acl_action' => 'view',
            ),
            12 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:audit_button:click',
              'name' => 'audit_button',
              'label' => 'LNK_VIEW_CHANGE_LOG',
              'acl_action' => 'view',
            ),
            13 => 
            array (
              'type' => 'divider',
            ),
            14 => 
            array (
              'type' => 'rowaction',
              'event' => 'button:delete_button:click',
              'name' => 'delete_button',
              'label' => 'LBL_DELETE_BUTTON_LABEL',
              'acl_action' => 'delete',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'sidebar_toggle',
          'type' => 'sidebartoggle',
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'header' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'picture',
              'type' => 'avatar',
              'size' => 'large',
              'dismiss_label' => true,
            ),
            1 => 
            array (
              'name' => 'full_name',
              'type' => 'fullname',
              'label' => 'LBL_NAME',
              'dismiss_label' => true,
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'salutation',
                  'type' => 'enum',
                  'enum_width' => 'auto',
                  'searchBarThreshold' => 7,
                ),
                1 => 'first_name',
                2 => 'last_name',
              ),
            ),
            2 => 
            array (
              'type' => 'favorite',
            ),
            3 => 
            array (
              'type' => 'follow',
              'readonly' => true,
            ),
            4 => 
            array (
              'name' => 'badge',
              'type' => 'badge',
              'readonly' => true,
              'related_fields' => 
              array (
                0 => 'converted',
                1 => 'account_id',
                2 => 'contact_id',
                3 => 'contact_name',
                4 => 'opportunity_id',
                5 => 'opportunity_name',
              ),
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'panel_body',
          'label' => 'LBL_RECORD_BODY',
          'columns' => 2,
          'labels' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 'title',
            1 => 'phone_mobile',
            2 => 'website',
            3 => 'do_not_call',
            4 => 'account_name',
            5 => 'email',
          ),
        ),
        2 => 
        array (
          'name' => 'panel_hidden',
          'label' => 'LBL_RECORD_SHOWMORE',
          'hide' => true,
          'columns' => 2,
          'labels' => true,
          'labelsOnTop' => true,
          'placeholders' => true,
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'primary_address',
              'type' => 'fieldset',
              'css_class' => 'address',
              'label' => 'LBL_PRIMARY_ADDRESS',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'primary_address_street',
                  'css_class' => 'address_street',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_STREET',
                ),
                1 => 
                array (
                  'name' => 'primary_address_city',
                  'css_class' => 'address_city',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_CITY',
                ),
                2 => 
                array (
                  'name' => 'primary_address_state',
                  'css_class' => 'address_state',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_STATE',
                ),
                3 => 
                array (
                  'name' => 'primary_address_postalcode',
                  'css_class' => 'address_zip',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_POSTALCODE',
                ),
                4 => 
                array (
                  'name' => 'primary_address_country',
                  'css_class' => 'address_country',
                  'placeholder' => 'LBL_PRIMARY_ADDRESS_COUNTRY',
                ),
              ),
            ),
            1 => 
            array (
              'name' => 'alt_address',
              'type' => 'fieldset',
              'css_class' => 'address',
              'label' => 'LBL_ALT_ADDRESS',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'alt_address_street',
                  'css_class' => 'address_street',
                  'placeholder' => 'LBL_ALT_ADDRESS_STREET',
                ),
                1 => 
                array (
                  'name' => 'alt_address_city',
                  'css_class' => 'address_city',
                  'placeholder' => 'LBL_ALT_ADDRESS_CITY',
                ),
                2 => 
                array (
                  'name' => 'alt_address_state',
                  'css_class' => 'address_state',
                  'placeholder' => 'LBL_ALT_ADDRESS_STATE',
                ),
                3 => 
                array (
                  'name' => 'alt_address_postalcode',
                  'css_class' => 'address_zip',
                  'placeholder' => 'LBL_ALT_ADDRESS_POSTALCODE',
                ),
                4 => 
                array (
                  'name' => 'alt_address_country',
                  'css_class' => 'address_country',
                  'placeholder' => 'LBL_ALT_ADDRESS_COUNTRY',
                ),
                5 => 
                array (
                  'name' => 'copy',
                  'label' => 'NTC_COPY_PRIMARY_ADDRESS',
                  'type' => 'copy',
                  'mapping' => 
                  array (
                    'primary_address_street' => 'alt_address_street',
                    'primary_address_city' => 'alt_address_city',
                    'primary_address_state' => 'alt_address_state',
                    'primary_address_postalcode' => 'alt_address_postalcode',
                    'primary_address_country' => 'alt_address_country',
                  ),
                ),
              ),
            ),
            2 => 'department',
            3 => 'phone_work',
            4 => 'campaign_name',
            5 => 'phone_fax',
            6 => 'twitter',
            7 => 
            array (
              'name' => 'dnb_principal_id',
              'readonly' => true,
            ),
            8 => 
            array (
              'name' => 'description',
              'span' => 12,
            ),
            9 => 'status',
            10 => 'status_description',
            11 => 'lead_source',
            12 => 'lead_source_description',
            13 => 'assigned_user_name',
            14 => 'opportunity_amount',
            15 => 
            array (
              'name' => 'date_entered_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_ENTERED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_entered',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'created_by_name',
                ),
              ),
            ),
            16 => 'team_name',
            17 => 
            array (
              'name' => 'date_modified_by',
              'readonly' => true,
              'type' => 'fieldset',
              'label' => 'LBL_DATE_MODIFIED',
              'fields' => 
              array (
                0 => 
                array (
                  'name' => 'date_modified',
                ),
                1 => 
                array (
                  'type' => 'label',
                  'default_value' => 'LBL_BY',
                ),
                2 => 
                array (
                  'name' => 'modified_by_name',
                ),
              ),
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'LeadsRecordView_status_read_only',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'converted',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'status',
                'label' => 'status_label',
                'value' => 'equal($converted,"true")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'recordlist' => 
  array (
    'meta' => 
    array (
      'selection' => 
      array (
        'type' => 'multi',
        'actions' => 
        array (
          0 => 
          array (
            'name' => 'mass_email_button',
            'type' => 'mass-email-button',
            'label' => 'LBL_EMAIL_COMPOSE',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massaction:hide',
            ),
            'acl_module' => 'Emails',
            'acl_action' => 'edit',
            'related_fields' => 
            array (
              0 => 'name',
              1 => 'email',
            ),
          ),
          1 => 
          array (
            'name' => 'edit_button',
            'type' => 'button',
            'label' => 'LBL_MASS_UPDATE',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massupdate:fire',
            ),
            'acl_action' => 'massupdate',
          ),
          2 => 
          array (
            'name' => 'merge_button',
            'type' => 'button',
            'label' => 'LBL_MERGE',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:mergeduplicates:fire',
            ),
            'acl_action' => 'edit',
          ),
          3 => 
          array (
            'name' => 'calc_field_button',
            'type' => 'button',
            'label' => 'LBL_UPDATE_CALC_FIELDS',
            'events' => 
            array (
              'click' => 'list:updatecalcfields:fire',
            ),
            'acl_action' => 'massupdate',
          ),
          4 => 
          array (
            'name' => 'addtolist_button',
            'type' => 'button',
            'label' => 'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massaddtolist:fire',
            ),
            'acl_module' => 'ProspectLists',
            'acl_action' => 'edit',
          ),
          5 => 
          array (
            'name' => 'delete_button',
            'type' => 'button',
            'label' => 'LBL_DELETE',
            'acl_action' => 'delete',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massdelete:fire',
            ),
          ),
          6 => 
          array (
            'name' => 'export_button',
            'type' => 'button',
            'label' => 'LBL_EXPORT',
            'acl_action' => 'export',
            'primary' => true,
            'events' => 
            array (
              'click' => 'list:massexport:fire',
            ),
          ),
        ),
      ),
      'rowactions' => 
      array (
        'actions' => 
        array (
          0 => 
          array (
            'type' => 'rowaction',
            'css_class' => 'btn',
            'tooltip' => 'LBL_PREVIEW',
            'event' => 'list:preview:fire',
            'icon' => 'icon-eye-open',
            'acl_action' => 'view',
          ),
          1 => 
          array (
            'type' => 'rowaction',
            'name' => 'edit_button',
            'icon' => 'icon-pencil',
            'label' => 'LBL_EDIT_BUTTON',
            'event' => 'list:editrow:fire',
            'acl_action' => 'edit',
          ),
          2 => 
          array (
            'type' => 'follow',
            'name' => 'follow_button',
            'event' => 'list:follow:fire',
            'acl_action' => 'view',
          ),
          3 => 
          array (
            'type' => 'rowaction',
            'name' => 'delete_button',
            'icon' => 'icon-trash',
            'event' => 'list:deleterow:fire',
            'label' => 'LBL_DELETE_BUTTON',
            'acl_action' => 'delete',
          ),
          4 => 
          array (
            'type' => 'convertbutton',
            'name' => 'lead_convert_button',
            'label' => 'LBL_CONVERT_BUTTON_LABEL',
            'acl_action' => 'edit',
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'LeadsRecordlistView_status_read_only',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'converted',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'status',
                'label' => 'status_label',
                'value' => 'equal($converted,"true")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'resolve-conflicts-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'full_name',
              'type' => 'fullname',
              'fields' => 
              array (
                0 => 'salutation',
                1 => 'first_name',
                2 => 'last_name',
              ),
              'link' => true,
              'css_class' => 'full-name',
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'account_id',
                1 => 'converted',
              ),
            ),
            3 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL_ADDRESS',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'selection-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'full_name',
              'type' => 'fullname',
              'fields' => 
              array (
                0 => 'salutation',
                1 => 'first_name',
                2 => 'last_name',
              ),
              'link' => true,
              'css_class' => 'full-name',
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'name' => 'status',
              'label' => 'LBL_LIST_STATUS',
              'enabled' => true,
              'default' => true,
            ),
            2 => 
            array (
              'name' => 'account_name',
              'label' => 'LBL_LIST_ACCOUNT_NAME',
              'enabled' => true,
              'default' => true,
              'related_fields' => 
              array (
                0 => 'account_id',
                1 => 'converted',
              ),
            ),
            3 => 
            array (
              'name' => 'phone_work',
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
            ),
            4 => 
            array (
              'name' => 'email',
              'label' => 'LBL_LIST_EMAIL_ADDRESS',
              'enabled' => true,
              'default' => false,
            ),
            5 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_LIST_ASSIGNED_USER',
              'enabled' => true,
              'default' => false,
            ),
            6 => 
            array (
              'name' => 'date_entered',
              'label' => 'LBL_DATE_ENTERED',
              'enabled' => true,
              'default' => false,
              'readonly' => true,
            ),
          ),
        ),
      ),
    ),
  ),
  'subpanel-list' => 
  array (
    'meta' => 
    array (
      'panels' => 
      array (
        0 => 
        array (
          'name' => 'panel_header',
          'label' => 'LBL_PANEL_1',
          'fields' => 
          array (
            0 => 
            array (
              'name' => 'full_name',
              'type' => 'fullname',
              'fields' => 
              array (
                0 => 'salutation',
                1 => 'first_name',
                2 => 'last_name',
              ),
              'link' => true,
              'css_class' => 'full-name',
              'width' => 49,
              'label' => 'LBL_LIST_NAME',
              'enabled' => true,
              'default' => true,
            ),
            1 => 
            array (
              'label' => 'LBL_LIST_REFERED_BY',
              'enabled' => true,
              'default' => true,
              'name' => 'refered_by',
            ),
            2 => 
            array (
              'label' => 'LBL_LIST_LEAD_SOURCE',
              'enabled' => true,
              'default' => true,
              'name' => 'lead_source',
            ),
            3 => 
            array (
              'label' => 'LBL_LIST_PHONE',
              'enabled' => true,
              'default' => true,
              'name' => 'phone_work',
            ),
            4 => 
            array (
              'label' => 'LBL_LIST_EMAIL_ADDRESS',
              'enabled' => true,
              'default' => true,
              'name' => 'email',
            ),
            5 => 
            array (
              'name' => 'lead_source_description',
              'label' => 'LBL_LIST_LEAD_SOURCE_DESCRIPTION',
              'enabled' => true,
              'default' => true,
            ),
            6 => 
            array (
              'name' => 'assigned_user_name',
              'target_record_key' => 'assigned_user_id',
              'target_module' => 'Employees',
              'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
              'enabled' => true,
              'default' => true,
            ),
          ),
        ),
      ),
      'dependencies' => 
      array (
        0 => 
        array (
          'name' => 'LeadsSubpanel-listView_status_read_only',
          'hooks' => 
          array (
            0 => 'all',
          ),
          'trigger' => 'true',
          'triggerFields' => 
          array (
            0 => 'converted',
          ),
          'onload' => true,
          'actions' => 
          array (
            0 => 
            array (
              'action' => 'ReadOnly',
              'params' => 
              array (
                'target' => 'status',
                'label' => 'status_label',
                'value' => 'equal($converted,"true")',
              ),
            ),
          ),
          'notActions' => 
          array (
          ),
        ),
      ),
    ),
  ),
  'twitter' => 
  array (
    'meta' => 
    array (
      'dashlets' => 
      array (
        0 => 
        array (
          'name' => 'LBL_TWITTER_NAME',
          'description' => 'LBL_TWITTER_DESCRIPTION',
          'config' => 
          array (
            'limit' => '20',
          ),
          'preview' => 
          array (
            'title' => 'LBL_TWITTER_MY_ACCOUNT',
            'twitter' => 'sugarcrm',
            'limit' => '3',
          ),
        ),
      ),
      'config' => 
      array (
        'fields' => 
        array (
          0 => 
          array (
            'name' => 'limit',
            'label' => 'LBL_TWITTER_DISPLAY_ROWS',
            'type' => 'enum',
            'options' => 
            array (
              5 => 5,
              10 => 10,
              15 => 15,
              20 => 20,
              50 => 50,
            ),
          ),
        ),
      ),
    ),
  ),
  'massupdate' => 
  array (
    'meta' => 
    array (
      'buttons' => 
      array (
        0 => 
        array (
          'type' => 'button',
          'value' => 'cancel',
          'css_class' => 'btn-link btn-invisible cancel_button',
          'label' => 'LBL_CANCEL_BUTTON_LABEL',
          'primary' => false,
        ),
        1 => 
        array (
          'name' => 'update_button',
          'type' => 'button',
          'label' => 'LBL_UPDATE',
          'acl_action' => 'massupdate',
          'css_class' => 'btn-primary',
          'primary' => true,
        ),
      ),
      'panels' => 
      array (
        0 => 
        array (
          'fields' => 
          array (
          ),
        ),
      ),
    ),
  ),
  '_hash' => '739aae401079ee97b19a5fb564f2ba99',
);


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
({plugins:['ErrorDecoration'],fallbackFieldTemplate:'edit',events:{'click [name=login_button]':'login','keypress':'handleKeypress'},_alertKeys:{adminOnly:'admin_only',invalidGrant:'invalid_grant_error',login:'login',needLogin:'needs_login_error',offsetProblem:'offset_problem',unsupportedBrowser:'unsupported_browser'},showPasswordReset:false,logoUrl:null,handleKeypress:function(event){if(event.keyCode===13){this.$('input').trigger('blur');this.login();}},_declareModel:function(meta){meta=meta||{};var fields={};_.each(_.flatten(_.pluck(meta.panels,'fields')),function(field){fields[field.name]=field;});app.data.declareModel('Login',{fields:fields});},initialize:function(options){if(app.progress){app.progress.hide();}
this._declareModel(options.meta);options.context.prepare(true);this._super('initialize',[options]);var config=app.metadata.getConfig();if(config&&app.config.forgotpasswordON===true){this.showPasswordReset=true;}
$(document).attr('title','SugarCRM');},_render:function(){this.logoUrl=app.metadata.getLogoUrl();this._super('_render');this.refreshAdditionalComponents();if(!this._isSupportedBrowser()){app.alert.show(this._alertKeys.unsupportedBrowser,{level:'warning',title:'',messages:[app.lang.getAppString('LBL_ALERT_BROWSER_NOT_SUPPORTED'),app.lang.getAppString('LBL_ALERT_BROWSER_SUPPORT')]});}
var config=app.metadata.getConfig(),level=config.system_status&&config.system_status.level;if(level==='maintenance'||level==='admin_only'){app.alert.show(this._alertKeys.adminOnly,{level:'warning',title:'',messages:['',app.lang.getAppString(config.system_status.message)]});}
app.alert.dismiss(this._alertKeys.offsetProblem);return this;},refreshAdditionalComponents:function(){_.each(app.additionalComponents,function(component){component.render();});},login:function(){this.model.set({password:this.$('input[name=password]').val(),username:this.$('input[name=username]').val()});this.model.doValidate(null,_.bind(function(isValid){if(isValid){app.$contentEl.hide();app.alert.show(this._alertKeys.login,{level:'process',title:app.lang.getAppString('LBL_LOADING'),autoClose:false});var args={password:this.model.get('password'),username:this.model.get('username')};app.login(args,null,{error:function(){app.$contentEl.show();app.logger.debug('login failed!');},success:_.bind(function(){app.logger.debug('logged in successfully!');app.alert.dismiss(this._alertKeys.invalidGrant);app.alert.dismiss(this._alertKeys.needLogin);app.events.on('app:sync:complete',function(){app.logger.debug('sync in successfully!');_.defer(_.bind(this.postLogin,this));},this);},this),complete:_.bind(function(){app.alert.dismiss(this._alertKeys.login);},this)});}},this));app.alert.dismiss('offset_problem');},postLogin:function(){if(!app.user.get('show_wizard')){this.refreshAdditionalComponents();if(new Date().getTimezoneOffset()!=(app.user.getPreference('tz_offset_sec')/-60)){var link=new Handlebars.SafeString('<a href="#'+
app.router.buildRoute('Users',app.user.id,'edit')+'">'+
app.lang.get('LBL_TIMEZONE_DIFFERENT_LINK')+'</a>');var message=app.lang.get('TPL_TIMEZONE_DIFFERENT',null,{link:link});app.alert.show(this._alertKeys.offsetProblem,{messages:message,closeable:true,level:'warning'});}}
app.$contentEl.show();},_isSupportedBrowser:function(){var supportedBrowsers={msie:{min:9},mozilla:{min:18},safari:{min:536},chrome:{min:537}};var current=parseInt($.browser.version);if((/Trident\/7\./).test(navigator.userAgent)){var supported=supportedBrowsers['msie'];return current>=supported.min;}else{for(var b in supportedBrowsers){if($.browser[b]){var supported=supportedBrowsers[b];return current>=supported.min;}}}}})
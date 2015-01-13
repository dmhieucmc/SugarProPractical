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
({plugins:['ErrorDecoration'],events:{'click [name=save_button]':'savePassword'},initialize:function(options){var meta=options.meta||{},fields={};_.each(_.flatten(_.pluck(meta.panels,"fields")),function(field){fields[field.name]=field;});this.fieldsToValidate=fields;app.view.View.prototype.initialize.call(this,options);},_render:function(){var self=this;var message=app.lang.getAppString('LBL_PASSWORD_EXPIRATION_LOGIN');app.alert.dismissAll();this.logoUrl=app.metadata.getLogoUrl();this._showPasswordRequirements=false;this.passwordRequirements=[];if(app.user&&app.user.has('password_requirements')){this._showPasswordRequirements=true;var preqs=app.user.get('password_requirements');_.each(preqs,function(val,key){self.passwordRequirements.push(val);});}
app.view.View.prototype._render.call(this);if(app.user&&app.user.has('password_expired_message')){message=app.user.get('password_expired_message');}
this.$('.password-reqs-status').text(message);return this;},savePassword:function(){var self=this,callbacks,newPass,oldPass=self.$('[name=current_password]').val();self.model.doValidate(this.fieldsToValidate,function(isValid){if(isValid){if(app.config.honeypot_on&&app.config.honeypot_on===true&&(self.$('input[name="name_field"]').val()||self.model.get('name_field')))return;newPass=self.model.get('expired_password_update');if(newPass){app.alert.dismiss('changePassword');app.alert.show('passreset',{level:'process',title:app.lang.get('LBL_CHANGE_PASSWORD'),messages:app.lang.get('LBL_PROCESSING'),autoClose:false});app.api.updatePassword(oldPass,newPass,{success:function(data){app.alert.dismiss('passreset');app.$contentEl.show();if(data&&data.valid){callbacks=self.context.get("callbacks");if(callbacks&&callbacks.complete){callbacks.complete();}}else if(data.message){app.alert.show('password-invalid',{level:'error',title:data.message});}else{app.alert.show('password-invalid',{level:'error',title:app.lang.get('ERR_GENERIC_TITLE')+': '+
app.lang.get('ERR_CONTACT_TECH_SUPPORT')});}},error:function(error){app.alert.dismiss('passreset');app.error.handleHttpError(error,self);}});}}},self);}})
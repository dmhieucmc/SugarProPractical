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
({plugins:['Editable'],events:{'click [name=btn-stop]':'pauseUpdate'},totalRecord:0,_startTime:0,_velocity:0,$holders:{},_labelSet:{'update':{PROGRESS_STATUS:'TPL_MASSUPDATE_PROGRESS_STATUS',DURATION_FORMAT:'TPL_MASSUPDATE_DURATION_FORMAT',FAIL_TO_ATTEMPT:'TPL_MASSUPDATE_FAIL_TO_ATTEMPT',WARNING_CLOSE:'TPL_MASSUPDATE_WARNING_CLOSE',WARNING_INCOMPLETE:'TPL_MASSUPDATE_WARNING_INCOMPLETE',SUCCESS:'TPL_MASSUPDATE_SUCCESS',TITLE:'TPL_MASSUPDATE_TITLE'},'delete':{PROGRESS_STATUS:'TPL_MASSDELETE_PROGRESS_STATUS',DURATION_FORMAT:'TPL_MASSDELETE_DURATION_FORMAT',FAIL_TO_ATTEMPT:'TPL_MASSDELETE_FAIL_TO_ATTEMPT',WARNING_CLOSE:'TPL_MASSDELETE_WARNING_CLOSE',WARNING_INCOMPLETE:'TPL_MASSDELETE_WARNING_INCOMPLETE',SUCCESS:'TPL_MASSDELETE_SUCCESS',TITLE:'TPL_MASSDELETE_TITLE'}},hasUnsavedChanges:function(){return(this.totalRecord>0);},initCollection:function(collection){this.unbindData();this.collection=collection;this.hide();this.bindDataChange();},initLabels:function(){this.LABELSET=this._labelSet[this.collection.method||this.collection.defaultMethod];},initHolders:function(){var self=this;self.$holders={};this.$('[data-holder]').each(function(holder){var $el=$(this);self.$holders[$el.data('holder')]=$el;});},unbindData:function(){this.offBefore('start');this.off('render',null,this);app.view.View.prototype.unbindData.call(this);},bindDataChange:function(){if(!this.collection){return;}
this.on('render',this.initHolders,this);this.before('start',this.checkAvailable,this,true);this.collection.on('massupdate:always',this.updateProgress,this);this.collection.on('massupdate:start',this.showProgress,this);this.collection.on('massupdate:end',this.hideProgress,this);this.collection.on('massupdate:fail',this.checkError,this);this.collection.on('massupdate:resume',this.resumeProcess,this);this.collection.on('massupdate:pause',this.pauseProcess,this);},checkAvailable:function(){if(this.collection.chunks.length===this.collection.length){this.unbindData();this.collection.on('massupdate:end',this.hideProgress,this);return false;}
return true;},checkError:function(){if(this.collection.attempt===0){this.$holders.bar.addClass('progress-info').removeClass('progress-danger');return;}else if(this.collection.attempt>this.collection.maxAllowAttempt){return;}
this.$holders.bar.removeClass('progress-info').addClass('progress-danger');app.alert.dismiss('stop_confirmation');app.alert.show('stop_confirmation',{level:'error',messages:app.lang.get(this.LABELSET['FAIL_TO_ATTEMPT'],this.module,{num:this.collection.attempt,total:this.collection.maxAllowAttempt})});},getEstimate:function(){if(!this.collection.chunks){return 0;}
var chunkSize=this.collection.chunks.length,remainSize=this.collection.length,duration=(new Date().getTime()-this._startTime)/ 1000;this._startTime=new Date().getTime();this._velocity=chunkSize / duration;return parseInt(remainSize / this._velocity,10);},getRelativeTime:function(elapsed){var msPerMinute=60,msPerHour=msPerMinute*60,msPerDay=msPerHour*24,unitString='',relateTime=0;if(elapsed<=0){return'';}
if(elapsed<msPerMinute){relateTime=elapsed;unitString=app.lang.get('LBL_DURATION_SECONDS');}else if(elapsed<msPerHour){relateTime=Math.round(elapsed / msPerMinute);unitString=app.lang.get('LBL_DURATION_MINUTES');}else if(elapsed<msPerDay){relateTime=Math.round(elapsed / msPerHour);unitString=app.lang.get('LBL_DURATION_HOUR');}else{return'';}
return app.lang.get(this.LABELSET['DURATION_FORMAT'],this.collection.baseModule,{time:relateTime,unit:unitString});},getTotalRecords:function(){return this.collection.length;},getRemainder:function(){var chunkSize=_.isEmpty(this.collection.chunks)?0:this.collection.chunks.length,size=_.min([this.collection.models.length,this.collection.length+chunkSize]);return size;},getProgressSize:function(){var chunkSize=_.isEmpty(this.collection.chunks)?0:this.collection.chunks.length,size=_.min([this.totalRecord,this.totalRecord-this.collection.length+chunkSize]);return size;},getCompleteRecords:function(){return this.totalRecord-this.collection.length;},resumeUpdate:function(){this.collection.resumeFetch();},pauseUpdate:function(){var stopButton=this.getField('btn-stop');stopButton.setDisabled(true);this.collection.pauseFetch();},pauseProcess:function(){this.$holders.bar.removeClass('active');app.alert.dismiss('stop_confirmation');app.alert.show('stop_confirmation',{level:'confirmation',messages:app.lang.get(this.LABELSET['WARNING_CLOSE'],this.module,{num:this.getRemainder()}),onConfirm:_.bind(this.hideProgress,this),onCancel:_.bind(this.resumeUpdate,this),autoClose:false});},resumeProcess:function(){this.$holders.bar.addClass('active');var stopButton=this.getField('btn-stop');stopButton.setDisabled(false);},showProgress:function(){this.initLabels();this.totalRecord=this.getTotalRecords();if(this.triggerBefore('start')===false){return false;}
this._startTime=new Date().getTime();var stopButton=this.getField('btn-stop');if(stopButton){stopButton.setDisabled(false);}
var title=app.lang.get(this.LABELSET.TITLE,this.module,{module:this.module});this.$holders.title.text(title);this.updateProgress();this.show();},hideProgress:function(){var size=this.getCompleteRecords(),discardSize=this.collection.discards.length;if(discardSize>0){var message=app.lang.get(this.LABELSET['SUCCESS'],this.module,{num:this.totalRecord-discardSize});message+=app.lang.get('TPL_MASSUPDATE_WARNING_PERMISSION',this.module,{remain:discardSize});app.alert.show('massupdate_final_notice',{level:'warning',messages:message,autoClose:true,autoCloseDelay:8000});}else if(this.totalRecord!==size){app.alert.show('massupdate_final_notice',{level:'warning',messages:app.lang.get(this.LABELSET['WARNING_INCOMPLETE'],this.module,{num:this.getRemainder()}),autoClose:true,autoCloseDelay:8000});}else{app.alert.show('massupdate_final_notice',{level:'success',messages:app.lang.get(this.LABELSET['SUCCESS'],this.module,{num:size}),autoClose:true,autoCloseDelay:8000});}
this.totalRecord=0;this.collection.resetProgress();this.hide();},updateProgress:function(){if(!this.collection||this.collection.length===0){return;}
var estimate=this.getEstimate(),estimateMessage=this.getRelativeTime(estimate),size=this.getProgressSize(),percent=(size*100 / this.totalRecord),message=app.lang.get(this.LABELSET['PROGRESS_STATUS'],this.module,{num:size,percent:Math.round(percent),total:this.totalRecord});if(!_.isEmpty(estimateMessage)){this.$holders.estimate.text(estimateMessage);}
this.checkError();this.$holders.message.text(message);this.$holders.progressbar.css({'width':percent+'%'});}})
/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('anim-base',function(Y,NAME){var RUNNING='running',START_TIME='startTime',ELAPSED_TIME='elapsedTime',START='start',TWEEN='tween',END='end',NODE='node',PAUSED='paused',REVERSE='reverse',ITERATION_COUNT='iterationCount',NUM=Number;var _running={},_timer;Y.Anim=function(){Y.Anim.superclass.constructor.apply(this,arguments);Y.Anim._instances[Y.stamp(this)]=this;};Y.Anim.NAME='anim';Y.Anim._instances={};Y.Anim.RE_DEFAULT_UNIT=/^width|height|top|right|bottom|left|margin.*|padding.*|border.*$/i;Y.Anim.DEFAULT_UNIT='px';Y.Anim.DEFAULT_EASING=function(t,b,c,d){return c*t / d+b;};Y.Anim._intervalTime=20;Y.Anim.behaviors={left:{get:function(anim,attr){return anim._getOffset(attr);}}};Y.Anim.behaviors.top=Y.Anim.behaviors.left;Y.Anim.DEFAULT_SETTER=function(anim,att,from,to,elapsed,duration,fn,unit){var node=anim._node,domNode=node._node,val=fn(elapsed,NUM(from),NUM(to)-NUM(from),duration);if(domNode){if('style'in domNode&&(att in domNode.style||att in Y.DOM.CUSTOM_STYLES)){unit=unit||'';node.setStyle(att,val+unit);}else if('attributes'in domNode&&att in domNode.attributes){node.setAttribute(att,val);}else if(att in domNode){domNode[att]=val;}}else if(node.set){node.set(att,val);}else if(att in node){node[att]=val;}};Y.Anim.DEFAULT_GETTER=function(anim,att){var node=anim._node,domNode=node._node,val='';if(domNode){if('style'in domNode&&(att in domNode.style||att in Y.DOM.CUSTOM_STYLES)){val=node.getComputedStyle(att);}else if('attributes'in domNode&&att in domNode.attributes){val=node.getAttribute(att);}else if(att in domNode){val=domNode[att];}}else if(node.get){val=node.get(att);}else if(att in node){val=node[att];}
return val;};Y.Anim.ATTRS={node:{setter:function(node){if(node){if(typeof node==='string'||node.nodeType){node=Y.one(node);}}
this._node=node;if(!node){}
return node;}},duration:{value:1},easing:{value:Y.Anim.DEFAULT_EASING,setter:function(val){if(typeof val==='string'&&Y.Easing){return Y.Easing[val];}}},from:{},to:{},startTime:{value:0,readOnly:true},elapsedTime:{value:0,readOnly:true},running:{getter:function(){return!!_running[Y.stamp(this)];},value:false,readOnly:true},iterations:{value:1},iterationCount:{value:0,readOnly:true},direction:{value:'normal'},paused:{readOnly:true,value:false},reverse:{value:false}};Y.Anim.run=function(){var instances=Y.Anim._instances,i;for(i in instances){if(instances[i].run){instances[i].run();}}};Y.Anim.pause=function(){for(var i in _running){if(_running[i].pause){_running[i].pause();}}
Y.Anim._stopTimer();};Y.Anim.stop=function(){for(var i in _running){if(_running[i].stop){_running[i].stop();}}
Y.Anim._stopTimer();};Y.Anim._startTimer=function(){if(!_timer){_timer=setInterval(Y.Anim._runFrame,Y.Anim._intervalTime);}};Y.Anim._stopTimer=function(){clearInterval(_timer);_timer=0;};Y.Anim._runFrame=function(){var done=true,anim;for(anim in _running){if(_running[anim]._runFrame){done=false;_running[anim]._runFrame();}}
if(done){Y.Anim._stopTimer();}};Y.Anim.RE_UNITS=/^(-?\d*\.?\d*){1}(em|ex|px|in|cm|mm|pt|pc|%)*$/;var proto={run:function(){if(this.get(PAUSED)){this._resume();}else if(!this.get(RUNNING)){this._start();}
return this;},pause:function(){if(this.get(RUNNING)){this._pause();}
return this;},stop:function(finish){if(this.get(RUNNING)||this.get(PAUSED)){this._end(finish);}
return this;},_added:false,_start:function(){this._set(START_TIME,new Date()-this.get(ELAPSED_TIME));this._actualFrames=0;if(!this.get(PAUSED)){this._initAnimAttr();}
_running[Y.stamp(this)]=this;Y.Anim._startTimer();this.fire(START);},_pause:function(){this._set(START_TIME,null);this._set(PAUSED,true);delete _running[Y.stamp(this)];this.fire('pause');},_resume:function(){this._set(PAUSED,false);_running[Y.stamp(this)]=this;this._set(START_TIME,new Date()-this.get(ELAPSED_TIME));Y.Anim._startTimer();this.fire('resume');},_end:function(finish){var duration=this.get('duration')*1000;if(finish){this._runAttrs(duration,duration,this.get(REVERSE));}
this._set(START_TIME,null);this._set(ELAPSED_TIME,0);this._set(PAUSED,false);delete _running[Y.stamp(this)];this.fire(END,{elapsed:this.get(ELAPSED_TIME)});},_runFrame:function(){var d=this._runtimeAttr.duration,t=new Date()-this.get(START_TIME),reverse=this.get(REVERSE),done=(t>=d);this._runAttrs(t,d,reverse);this._actualFrames+=1;this._set(ELAPSED_TIME,t);this.fire(TWEEN);if(done){this._lastFrame();}},_runAttrs:function(t,d,reverse){var attr=this._runtimeAttr,customAttr=Y.Anim.behaviors,easing=attr.easing,lastFrame=d,done=false,attribute,setter,i;if(t>=d){done=true;}
if(reverse){t=d-t;lastFrame=0;}
for(i in attr){if(attr[i].to){attribute=attr[i];setter=(i in customAttr&&'set'in customAttr[i])?customAttr[i].set:Y.Anim.DEFAULT_SETTER;if(!done){setter(this,i,attribute.from,attribute.to,t,d,easing,attribute.unit);}else{setter(this,i,attribute.from,attribute.to,lastFrame,d,easing,attribute.unit);}}}},_lastFrame:function(){var iter=this.get('iterations'),iterCount=this.get(ITERATION_COUNT);iterCount+=1;if(iter==='infinite'||iterCount<iter){if(this.get('direction')==='alternate'){this.set(REVERSE,!this.get(REVERSE));}
this.fire('iteration');}else{iterCount=0;this._end();}
this._set(START_TIME,new Date());this._set(ITERATION_COUNT,iterCount);},_initAnimAttr:function(){var from=this.get('from')||{},to=this.get('to')||{},attr={duration:this.get('duration')*1000,easing:this.get('easing')},customAttr=Y.Anim.behaviors,node=this.get(NODE),unit,begin,end;Y.each(to,function(val,name){if(typeof val==='function'){val=val.call(this,node);}
begin=from[name];if(begin===undefined){begin=(name in customAttr&&'get'in customAttr[name])?customAttr[name].get(this,name):Y.Anim.DEFAULT_GETTER(this,name);}else if(typeof begin==='function'){begin=begin.call(this,node);}
var mFrom=Y.Anim.RE_UNITS.exec(begin),mTo=Y.Anim.RE_UNITS.exec(val);begin=mFrom?mFrom[1]:begin;end=mTo?mTo[1]:val;unit=mTo?mTo[2]:mFrom?mFrom[2]:'';if(!unit&&Y.Anim.RE_DEFAULT_UNIT.test(name)){unit=Y.Anim.DEFAULT_UNIT;}
if(!begin||!end){Y.error('invalid "from" or "to" for "'+name+'"','Anim');return;}
attr[name]={from:Y.Lang.isObject(begin)?Y.clone(begin):begin,to:end,unit:unit};},this);this._runtimeAttr=attr;},_getOffset:function(attr){var node=this._node,val=node.getComputedStyle(attr),get=(attr==='left')?'getX':'getY',set=(attr==='left')?'setX':'setY',position;if(val==='auto'){position=node.getStyle('position');if(position==='absolute'||position==='fixed'){val=node[get]();node[set](val);}else{val=0;}}
return val;},destructor:function(){delete Y.Anim._instances[Y.stamp(this)];}};Y.extend(Y.Anim,Y.Base,proto);},'3.15.0',{"requires":["base-base","node-style"]});
/*
     YUI 3.15.0 (build 834026e)
     Copyright 2014 Yahoo! Inc. All rights reserved.
     Licensed under the BSD License.
     http://yuilibrary.com/license/
     */
YUI.add('anim-xy',function(Y,NAME){var NUM=Number;Y.Anim.behaviors.xy={set:function(anim,att,from,to,elapsed,duration,fn){anim._node.setXY([fn(elapsed,NUM(from[0]),NUM(to[0])-NUM(from[0]),duration),fn(elapsed,NUM(from[1]),NUM(to[1])-NUM(from[1]),duration)]);},get:function(anim){return anim._node.getXY();}};},'3.15.0',{"requires":["anim-base","node-screen"]});
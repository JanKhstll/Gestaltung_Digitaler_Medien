/**
 * Adobe Edge: symbol definitions
 */
(function($, Edge, compId){
var symbols = {
"stage": {
   version: "0.1.3",
   baseState: "Base State",
   initialState: "Base State",
   content: {
      dom: [
        {
            id:'N',
            className:'stage_N_id',
            type:'text',
            tag:'div',
            rect:[428,29,59,48],
            text:"N",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[111,-10]]
        },
        {
            id:'Logo',
            className:'stage_Logo_id',
            type:'image',
            tag:'div',
            rect:[0,0,2150,550],
            fill:['rgba(0,0,0,0)','images/Logo.png'],
            transform:[]
        },
        {
            id:'Logo2',
            className:'stage_Logo2_id',
            type:'image',
            tag:'div',
            rect:[0,0,2150,550],
            fill:['rgba(0,0,0,0)','images/Logo2.png'],
            transform:[[-881.5,-225.5],,,[0.18,0.18]]
        },
        {
            id:'A',
            className:'stage_A_id',
            type:'text',
            tag:'div',
            rect:[510,32,39,37],
            text:"A",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-88,-13]]
        },
        {
            id:'L',
            className:'stage_L_id',
            type:'text',
            tag:'div',
            rect:[529,13,59,48],
            text:"L",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-78,6]]
        },
        {
            id:'B',
            className:'stage_B_id',
            type:'text',
            tag:'div',
            rect:[572,18,39,48],
            text:"B",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-91,1]]
        },
        {
            id:'E',
            className:'stage_E_id',
            type:'text',
            tag:'div',
            rect:[418,26,59,61],
            text:"E",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[92,-7]]
        },
        {
            id:'BeyonceAlbum2008',
            className:'stage_BeyonceAlbum2008_id',
            type:'image',
            tag:'div',
            rect:[0,0,1500,1500],
            fill:['rgba(0,0,0,0)','images/BeyonceAlbum2008.jpg'],
            transform:[[135,-700],,,[0.1,0.1]]
        },
        {
            id:'DAVID-GUETTA-Nothing-But-The-Beat-frontcover',
            className:'stage_DAVID-GUETTA-Nothing-But-The-Beat-frontcover_id',
            type:'image',
            tag:'div',
            rect:[0,0,1000,1000],
            fill:['rgba(0,0,0,0)','images/DAVID-GUETTA-Nothing-But-The-Beat-frontcover.jpeg'],
            transform:[[318.00004,-455.07721],[10],,[0.1,0.1]]
        },
        {
            id:'Rihanna-Loud-Album-Cover',
            className:'stage_Rihanna-Loud-Album-Cover_id',
            type:'image',
            tag:'div',
            rect:[0,0,1544,1559],
            fill:['rgba(0,0,0,0)','images/Rihanna-Loud-Album-Cover.jpg'],
            transform:[[-741.23522,-286.96983],[-14],,[0.05,0.05]]
        }],
      symbolInstances: [
      ]
   },
   states: {
      "Base State": {
         "${_Logo2}": [
            ["transform", "scaleX", '0.18'],
            ["transform", "scaleY", '0.18'],
            ["transform", "translateX", '-881.5px'],
            ["transform", "translateY", '-225.5px']
         ],
         "${_Rihanna-Loud-Album-Cover}": [
            ["style", "-webkit-transform-origin", [100,19.211032713278],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-moz-transform-origin", [100,19.211032713278],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-ms-transform-origin", [100,19.211032713278],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "msTransformOrigin", [100,19.211032713278],{valueTemplate:'@@0@@% @@1@@%'}],
            ["style", "-o-transform-origin", [100,19.211032713278],{valueTemplate:'@@0@@% @@1@@%'}],
            ["transform", "translateX", '-809.23523px'],
            ["transform", "scaleY", '0.05'],
            ["transform", "rotateZ", '-14deg'],
            ["style", "height", '1559px'],
            ["transform", "scaleX", '0.05'],
            ["transform", "translateY", '-157.96983px'],
            ["style", "width", '1544px']
         ],
         "${_N}": [
            ["transform", "translateX", '-533px'],
            ["transform", "translateY", '-8px']
         ],
         "${_stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '960px'],
            ["style", "height", '90px'],
            ["style", "overflow", 'hidden']
         ],
         "${_Logo}": [
            ["transform", "translateX", '0px'],
            ["transform", "scaleY", '0'],
            ["style", "height", '170px'],
            ["transform", "scaleX", '0'],
            ["transform", "translateY", '0px'],
            ["style", "width", '663px']
         ],
         "${_B}": [
            ["transform", "translateX", '-42px'],
            ["transform", "translateY", '117px']
         ],
         "${_A}": [
            ["transform", "translateX", '-117px'],
            ["transform", "translateY", '95px']
         ],
         "${_DAVID-GUETTA-Nothing-But-The-Beat-frontcover}": [
            ["transform", "scaleY", '0.1'],
            ["transform", "rotateZ", '99deg'],
            ["transform", "scaleX", '0.1'],
            ["transform", "translateY", '-600.92322px'],
            ["transform", "translateX", '347.00002px']
         ],
         "${_BeyonceAlbum2008}": [
            ["transform", "scaleX", '0'],
            ["transform", "translateX", '135px'],
            ["transform", "scaleY", '0'],
            ["transform", "translateY", '-700px']
         ],
         "${_E}": [
            ["transform", "translateX", '151px'],
            ["transform", "translateY", '-106px']
         ],
         "${_L}": [
            ["transform", "translateX", '-87px'],
            ["transform", "translateY", '-80px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 2000,
         labels: {

         },
         timeline: [
            { id: "eid67", tween: [ "transform", "${_DAVID-GUETTA-Nothing-But-The-Beat-frontcover}", "translateX", '318.00004px', { fromValue: '347.00002px'}], position: 0, duration: 2000 },
            { id: "eid1", tween: [ "style", "${_stage}", "width", '960px', { fromValue: '960px'}], position: 0, duration: 0 },
            { id: "eid43", tween: [ "transform", "${_E}", "translateX", '92px', { fromValue: '151px'}], position: 0, duration: 2000 },
            { id: "eid47", tween: [ "transform", "${_N}", "translateX", '111px', { fromValue: '-533px'}], position: 0, duration: 2000 },
            { id: "eid41", tween: [ "transform", "${_B}", "translateY", '1px', { fromValue: '117px'}], position: 0, duration: 2000 },
            { id: "eid65", tween: [ "transform", "${_Rihanna-Loud-Album-Cover}", "translateY", '-286.96983px', { fromValue: '-157.96983px'}], position: 0, duration: 2000 },
            { id: "eid33", tween: [ "transform", "${_A}", "translateY", '-13px', { fromValue: '95px'}], position: 0, duration: 2000 },
            { id: "eid61", tween: [ "transform", "${_BeyonceAlbum2008}", "translateY", '-700px', { fromValue: '-700px'}], position: 2000, duration: 0 },
            { id: "eid15", tween: [ "style", "${_Logo}", "width", '663px', { fromValue: '663px'}], position: 0, duration: 0 },
            { id: "eid80", tween: [ "transform", "${_DAVID-GUETTA-Nothing-But-The-Beat-frontcover}", "rotateZ", '-57deg', { fromValue: '99deg'}], position: 0, duration: 2000 },
            { id: "eid45", tween: [ "transform", "${_E}", "translateY", '-7px', { fromValue: '-106px'}], position: 0, duration: 2000 },
            { id: "eid77", tween: [ "transform", "${_BeyonceAlbum2008}", "scaleX", '0.11', { fromValue: '0'}], position: 0, duration: 2000 },
            { id: "eid69", tween: [ "transform", "${_DAVID-GUETTA-Nothing-But-The-Beat-frontcover}", "translateY", '-455.07721px', { fromValue: '-600.92322px'}], position: 0, duration: 2000 },
            { id: "eid37", tween: [ "transform", "${_L}", "translateY", '6px', { fromValue: '-80px'}], position: 0, duration: 2000 },
            { id: "eid63", tween: [ "transform", "${_Rihanna-Loud-Album-Cover}", "translateX", '-741.23522px', { fromValue: '-809.23523px'}], position: 0, duration: 2000 },
            { id: "eid14", tween: [ "style", "${_Logo}", "height", '170px', { fromValue: '170px'}], position: 0, duration: 0 },
            { id: "eid39", tween: [ "transform", "${_B}", "translateX", '-91px', { fromValue: '-42px'}], position: 0, duration: 2000 },
            { id: "eid78", tween: [ "transform", "${_BeyonceAlbum2008}", "scaleY", '0.11', { fromValue: '0'}], position: 0, duration: 2000 },
            { id: "eid18", tween: [ "transform", "${_Logo}", "translateX", '0px', { fromValue: '0px'}], position: 0, duration: 0 },
            { id: "eid60", tween: [ "transform", "${_BeyonceAlbum2008}", "translateX", '135px', { fromValue: '135px'}], position: 2000, duration: 0 },
            { id: "eid49", tween: [ "transform", "${_N}", "translateY", '-10px', { fromValue: '-8px'}], position: 0, duration: 2000 },
            { id: "eid3", tween: [ "style", "${_stage}", "height", '90px', { fromValue: '90px'}], position: 0, duration: 0 },
            { id: "eid31", tween: [ "transform", "${_A}", "translateX", '-88px', { fromValue: '-117px'}], position: 0, duration: 2000 },
            { id: "eid35", tween: [ "transform", "${_L}", "translateX", '-78px', { fromValue: '-87px'}], position: 0, duration: 2000 },
            { id: "eid19", tween: [ "transform", "${_Logo}", "translateY", '0px', { fromValue: '0px'}], position: 0, duration: 0 }]
      }
   }
}};

var comp;
Edge.registerCompositionDefn(compId, symbols);

/**
 * Adobe Edge DOM Ready Event Handler
 */
$(window).ready(function() {
     comp = new Edge.Composition(compId, {stage: "." + compId}, {});
	   /**
 * Adobe Edge Timeline Launch
 */
     comp.ready(function() {
         comp.play();
     });
});
})(jQuery, jQuery.Edge, "EDGE-3735892");

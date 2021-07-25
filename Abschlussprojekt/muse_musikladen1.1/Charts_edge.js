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
            id:'Text6',
            type:'text',
            tag:'div',
            rect:[679,23,23,48],
            text:"S",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-114,-5]]
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
            id:'T',
            className:'stage_T_id',
            type:'text',
            tag:'div',
            rect:[825,40,59,29],
            text:"T",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-377,-22]]
        },
        {
            id:'R',
            className:'stage_R_id',
            type:'text',
            tag:'div',
            rect:[830,33,59,48],
            text:"R",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-327,-15]]
        },
        {
            id:'Rectangle',
            type:'rect',
            tag:'div',
            rect:[728,62,73,48],
            fill:['rgba(52,51,51,1.00)'],
            stroke:[0,"rgba(0,0,0,1)","none"]
        },
        {
            id:'RectangleCopy',
            className:'RectangleCopy_id',
            type:'rect',
            tag:'div',
            rect:[728,62,73,48],
            fill:['rgba(52,51,51,1.00)'],
            stroke:[0,"rgba(0,0,0,1)","none"],
            transform:[[78,-20]]
        },
        {
            id:'RectangleCopy1',
            className:'RectangleCopy1_id',
            type:'rect',
            tag:'div',
            rect:[728,62,73,48],
            fill:['rgba(52,51,51,1.00)'],
            stroke:[0,"rgba(0,0,0,1)","none"],
            transform:[[155,-1]]
        },
        {
            id:'Text3',
            type:'text',
            tag:'div',
            rect:[672,18,59,41],
            text:"C",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-258]]
        },
        {
            id:'Text4',
            type:'text',
            tag:'div',
            rect:[670,30,59,41],
            text:"H",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-226,-12]]
        },
        {
            id:'Text5',
            type:'text',
            tag:'div',
            rect:[653,36,37,29],
            text:"A",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-177,-18]]
        },
        {
            id:'Text7',
            type:'text',
            tag:'div',
            rect:[824,7,47,29],
            text:"1",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[3,-8]]
        },
        {
            id:'Text8',
            type:'text',
            tag:'div',
            rect:[732,20,47,29],
            text:"2",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[15,-1]]
        },
        {
            id:'Text9',
            type:'text',
            tag:'div',
            rect:[917,31,23,29],
            text:"3",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-9,-13]]
        }],
      symbolInstances: [
      ]
   },
   states: {
      "Base State": {
         "${_Text7}": [
            ["transform", "translateX", '0px'],
            ["transform", "translateY", '-62px']
         ],
         "${_Text3}": [
            ["transform", "translateX", '-456px'],
            ["transform", "translateY", '132px']
         ],
         "${_stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "width", '960px'],
            ["style", "height", '90px'],
            ["style", "overflow", 'hidden']
         ],
         "${_RectangleCopy}": [
            ["color", "background-color", 'rgba(52,51,51,1)'],
            ["transform", "translateX", '78px'],
            ["transform", "translateY", '59px']
         ],
         "${_Text4}": [
            ["transform", "translateX", '-227px'],
            ["transform", "translateY", '-145px']
         ],
         "${_Logo2}": [
            ["transform", "scaleX", '0.18'],
            ["transform", "translateY", '-225.5px'],
            ["transform", "scaleY", '0.18'],
            ["transform", "translateX", '-881.5px']
         ],
         "${_Rectangle}": [
            ["color", "background-color", 'rgba(52,51,51,1.00)'],
            ["transform", "translateX", '0'],
            ["transform", "translateY", '46px']
         ],
         "${_Text8}": [
            ["transform", "translateX", '15px'],
            ["transform", "translateY", '-77px']
         ],
         "${_R}": [
            ["transform", "translateX", '-261px'],
            ["transform", "translateY", '158px'],
            ["transform", "rotateZ", '180deg']
         ],
         "${_Text5}": [
            ["transform", "translateX", '-73px'],
            ["transform", "translateY", '126px']
         ],
         "${_Text6}": [
            ["transform", "translateX", '-735px'],
            ["transform", "translateY", '-14px']
         ],
         "${_RectangleCopy1}": [
            ["color", "background-color", 'rgba(52,51,51,1)'],
            ["transform", "translateX", '151px'],
            ["transform", "translateY", '62px']
         ],
         "${_T}": [
            ["transform", "translateX", '-341.70225px'],
            ["transform", "translateY", '-100.80737px'],
            ["transform", "rotateZ", '30deg']
         ],
         "${_Text9}": [
            ["transform", "translateX", '-20px'],
            ["transform", "translateY", '-87px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 4000,
         labels: {

         },
         timeline: [
            { id: "eid252", tween: [ "transform", "${_Text9}", "translateY", '-13px', { fromValue: '-87px'}], position: 3040, duration: 960, easing: "easeOutBounce" },
            { id: "eid234", tween: [ "transform", "${_RectangleCopy1}", "translateX", '155px', { fromValue: '151px'}], position: 0, duration: 2000 },
            { id: "eid225", tween: [ "transform", "${_RectangleCopy}", "translateX", '78px', { fromValue: '78px'}], position: 2000, duration: 0 },
            { id: "eid210", tween: [ "transform", "${_Text6}", "translateY", '-5px', { fromValue: '-14px'}], position: 0, duration: 2000 },
            { id: "eid218", tween: [ "transform", "${_Text4}", "translateY", '-12px', { fromValue: '-145px'}], position: 0, duration: 2000 },
            { id: "eid248", tween: [ "transform", "${_Text8}", "translateY", '-1px', { fromValue: '-77px'}], position: 2450, duration: 1550, easing: "easeOutBounce" },
            { id: "eid214", tween: [ "transform", "${_Text5}", "translateY", '-18px', { fromValue: '126px'}], position: 0, duration: 2000 },
            { id: "eid132", tween: [ "transform", "${_T}", "translateX", '-289px', { fromValue: '-341.70225px'}], position: 0, duration: 2000 },
            { id: "eid220", tween: [ "transform", "${_Text3}", "translateX", '-258px', { fromValue: '-456px'}], position: 0, duration: 2000 },
            { id: "eid232", tween: [ "transform", "${_RectangleCopy}", "translateY", '-20px', { fromValue: '59px'}], position: 0, duration: 2000 },
            { id: "eid246", tween: [ "transform", "${_Text7}", "translateY", '-8px', { fromValue: '-62px'}], position: 2000, duration: 2000, easing: "easeOutBounce" },
            { id: "eid250", tween: [ "transform", "${_Text9}", "translateX", '-9px', { fromValue: '-20px'}], position: 3040, duration: 960, easing: "easeOutBounce" },
            { id: "eid134", tween: [ "transform", "${_T}", "translateY", '-22px', { fromValue: '-100.80737px'}], position: 0, duration: 2000 },
            { id: "eid130", tween: [ "transform", "${_T}", "rotateZ", '0deg', { fromValue: '30deg'}], position: 0, duration: 2000 },
            { id: "eid140", tween: [ "transform", "${_R}", "translateY", '-15px', { fromValue: '158px'}], position: 0, duration: 2000 },
            { id: "eid230", tween: [ "transform", "${_Rectangle}", "translateY", '0px', { fromValue: '46px'}], position: 0, duration: 2000 },
            { id: "eid1", tween: [ "style", "${_stage}", "width", '960px', { fromValue: '960px'}], position: 0, duration: 0 },
            { id: "eid138", tween: [ "transform", "${_R}", "translateX", '-324px', { fromValue: '-261px'}], position: 0, duration: 2000 },
            { id: "eid241", tween: [ "transform", "${_Text8}", "translateX", '15px', { fromValue: '15px'}], position: 4000, duration: 0, easing: "easeInOutBack" },
            { id: "eid222", tween: [ "transform", "${_Text3}", "translateY", '0px', { fromValue: '132px'}], position: 0, duration: 2000 },
            { id: "eid212", tween: [ "transform", "${_Text5}", "translateX", '-177px', { fromValue: '-73px'}], position: 0, duration: 2000 },
            { id: "eid136", tween: [ "transform", "${_R}", "rotateZ", '0deg', { fromValue: '180deg'}], position: 0, duration: 2000 },
            { id: "eid244", tween: [ "transform", "${_Text7}", "translateX", '3px', { fromValue: '0px'}], position: 2000, duration: 2000, easing: "easeOutBounce" },
            { id: "eid236", tween: [ "transform", "${_RectangleCopy1}", "translateY", '-1px', { fromValue: '62px'}], position: 0, duration: 2000 },
            { id: "eid208", tween: [ "transform", "${_Text6}", "translateX", '-114px', { fromValue: '-735px'}], position: 0, duration: 2000 },
            { id: "eid227", tween: [ "transform", "${_Rectangle}", "translateX", '0', { fromValue: '0'}], position: 2000, duration: 0 },
            { id: "eid3", tween: [ "style", "${_stage}", "height", '90px', { fromValue: '90px'}], position: 0, duration: 0 },
            { id: "eid216", tween: [ "transform", "${_Text4}", "translateX", '-226px', { fromValue: '-227px'}], position: 0, duration: 2000 }]
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

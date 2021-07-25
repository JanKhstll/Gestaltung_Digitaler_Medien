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
            className:'stage_Text6_id',
            type:'text',
            tag:'div',
            rect:[735,35,96,51],
            text:"E",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-232,-16]]
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
            id:'Text4',
            className:'stage_Text4_id',
            type:'text',
            tag:'div',
            rect:[670,30,59,41],
            text:"H",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-226,-12]]
        },
        {
            id:'Text3',
            className:'stage_Text3_id',
            type:'text',
            tag:'div',
            rect:[721,43,69,41],
            text:"O",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-289,-24]]
        },
        {
            id:'Text5',
            className:'stage_Text5_id',
            type:'text',
            tag:'div',
            rect:[723,16,59,51],
            text:"M",
            align:"auto",
            font:["\'Arial Black\', Gadget, sans-serif",39,"rgba(0,0,0,1)","normal","none","normal"],
            transform:[[-257,3]]
        },
        {
            id:'Note2',
            type:'image',
            tag:'div',
            rect:[0,0,351,439],
            fill:['rgba(0,0,0,0)','images/Note2.png'],
            transform:[[544.80497,-163.575],,,[0.15,0.15]]
        },
        {
            id:'Note2Copy',
            className:'Note2Copy_id',
            type:'image',
            tag:'div',
            rect:[0,0,351,439],
            fill:['rgba(0,0,0,0)','images/Note2.png'],
            transform:[[630.80502,-163.575],,,[0.15,0.15]]
        },
        {
            id:'Note2Copy1',
            className:'Note2Copy1_id',
            type:'image',
            tag:'div',
            rect:[0,0,351,439],
            fill:['rgba(0,0,0,0)','images/Note2.png'],
            transform:[[713.80502,-163.00001],,,[0.15,0.15]]
        }],
      symbolInstances: [
      ]
   },
   states: {
      "Base State": {
         "${_Logo2}": [
            ["transform", "scaleX", '0.18'],
            ["transform", "translateY", '-225.5px'],
            ["transform", "scaleY", '0.18'],
            ["transform", "translateX", '-881.5px']
         ],
         "${_Text3}": [
            ["transform", "translateX", '-369px'],
            ["transform", "translateY", '110px']
         ],
         "${_Text5}": [
            ["transform", "translateX", '-243px'],
            ["transform", "translateY", '-157px']
         ],
         "${_Note2Copy1}": [
            ["transform", "scaleX", '0.15'],
            ["transform", "translateX", '706.80502px'],
            ["transform", "translateY", '-276.00003px'],
            ["transform", "scaleY", '0.15']
         ],
         "${_Text6}": [
            ["transform", "translateX", '-838px'],
            ["transform", "translateY", '-16px']
         ],
         "${_Note2Copy}": [
            ["transform", "scaleX", '0.15'],
            ["transform", "translateX", '623.80502px'],
            ["transform", "translateY", '-276.57501px'],
            ["transform", "scaleY", '0.15']
         ],
         "${_Note2}": [
            ["transform", "scaleX", '0.15'],
            ["transform", "translateY", '-276.57501px'],
            ["transform", "scaleY", '0.15'],
            ["transform", "translateX", '537.80497px']
         ],
         "${_stage}": [
            ["color", "background-color", 'rgba(255,255,255,1)'],
            ["style", "overflow", 'hidden'],
            ["style", "height", '90px'],
            ["style", "width", '960px']
         ],
         "${_Text4}": [
            ["transform", "translateX", '-227px'],
            ["transform", "translateY", '-145px']
         ]
      }
   },
   timelines: {
      "Default Timeline": {
         fromState: "Base State",
         toState: "",
         duration: 2750,
         labels: {

         },
         timeline: [
            { id: "eid288", tween: [ "transform", "${_Note2Copy1}", "translateY", '-163.00001px', { fromValue: '-276.00003px'}], position: 0, duration: 2750 },
            { id: "eid270", tween: [ "transform", "${_Text5}", "translateX", '-257px', { fromValue: '-243px'}], position: 0, duration: 2000 },
            { id: "eid218", tween: [ "transform", "${_Text4}", "translateY", '-11px', { fromValue: '-145px'}], position: 0, duration: 2000 },
            { id: "eid286", tween: [ "transform", "${_Note2Copy1}", "translateX", '713.80502px', { fromValue: '706.80502px'}], position: 0, duration: 2750, easing: "easeOutBack" },
            { id: "eid290", tween: [ "transform", "${_Note2}", "translateX", '544.80497px', { fromValue: '537.80497px'}], position: 0, duration: 2595, easing: "easeOutCirc" },
            { id: "eid266", tween: [ "transform", "${_Text3}", "translateX", '-289px', { fromValue: '-369px'}], position: 0, duration: 2000 },
            { id: "eid292", tween: [ "transform", "${_Note2}", "translateY", '-163.575px', { fromValue: '-276.57501px'}], position: 0, duration: 2595, easing: "easeOutCirc" },
            { id: "eid272", tween: [ "transform", "${_Text5}", "translateY", '3px', { fromValue: '-157px'}], position: 0, duration: 2000 },
            { id: "eid268", tween: [ "transform", "${_Text3}", "translateY", '-24px', { fromValue: '110px'}], position: 0, duration: 2000 },
            { id: "eid284", tween: [ "transform", "${_Note2Copy}", "translateY", '-163.575px', { fromValue: '-276.57501px'}], position: 0, duration: 2750, easing: "easeOutBounce" },
            { id: "eid274", tween: [ "transform", "${_Text6}", "translateX", '-232px', { fromValue: '-838px'}], position: 0, duration: 2000 },
            { id: "eid282", tween: [ "transform", "${_Note2Copy}", "translateX", '630.80502px', { fromValue: '623.80502px'}], position: 0, duration: 2750, easing: "easeOutBounce" },
            { id: "eid3", tween: [ "style", "${_stage}", "height", '90px', { fromValue: '90px'}], position: 0, duration: 0 },
            { id: "eid260", tween: [ "transform", "${_Text6}", "translateY", '-16px', { fromValue: '-16px'}], position: 2000, duration: 0 },
            { id: "eid1", tween: [ "style", "${_stage}", "width", '960px', { fromValue: '960px'}], position: 0, duration: 0 },
            { id: "eid216", tween: [ "transform", "${_Text4}", "translateX", '-268px', { fromValue: '-227px'}], position: 0, duration: 2000 }]
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

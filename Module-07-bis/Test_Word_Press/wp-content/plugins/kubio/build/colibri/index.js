(()=>{"use strict";var e={n:t=>{var o=t&&t.__esModule?()=>t.default:()=>t;return e.d(o,{a:o}),o},d:(t,o)=>{for(var r in o)e.o(o,r)&&!e.o(t,r)&&Object.defineProperty(t,r,{enumerable:!0,get:o[r]})},o:(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r:e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};e.r(t),e.d(t,{extendBlockMeta:()=>a});const o=window.lodash;var r=e.n(o);const n=window.wp.blocks,a=(e,t)=>{let o=r().merge(e,t,{apiVersion:2,supports:{anchor:!0,customClassName:!0}});return o=function(e){if(r().has(e.attributes,["anchor","type"]))return e;return(0,n.hasBlockSupport)(e,"anchor")&&(e.attributes={...e.attributes,anchor:{type:"string"}}),e}(o),o};(window.kubio=window.kubio||{}).colibri=t})();

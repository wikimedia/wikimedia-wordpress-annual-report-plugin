(()=>{var e={694:(e,r,t)=>{"use strict";var n=t(925);function o(){}function s(){}s.resetWarningCache=o,e.exports=function(){function e(e,r,t,o,s,a){if(a!==n){var i=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw i.name="Invariant Violation",i}}function r(){return e}e.isRequired=e;var t={array:e,bigint:e,bool:e,func:e,number:e,object:e,string:e,symbol:e,any:e,arrayOf:r,element:e,elementType:e,instanceOf:r,node:e,objectOf:r,oneOf:r,oneOfType:r,shape:r,exact:r,checkPropTypes:s,resetWarningCache:o};return t.PropTypes=t,t}},556:(e,r,t)=>{e.exports=t(694)()},925:e=>{"use strict";e.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"},942:(e,r)=>{var t;!function(){"use strict";var n={}.hasOwnProperty;function o(){for(var e="",r=0;r<arguments.length;r++){var t=arguments[r];t&&(e=a(e,s(t)))}return e}function s(e){if("string"==typeof e||"number"==typeof e)return e;if("object"!=typeof e)return"";if(Array.isArray(e))return o.apply(null,e);if(e.toString!==Object.prototype.toString&&!e.toString.toString().includes("[native code]"))return e.toString();var r="";for(var t in e)n.call(e,t)&&e[t]&&(r=a(r,t));return r}function a(e,r){return r?e?e+" "+r:e+r:e}e.exports?(o.default=o,e.exports=o):void 0===(t=function(){return o}.apply(r,[]))||(e.exports=t)}()}},r={};function t(n){var o=r[n];if(void 0!==o)return o.exports;var s=r[n]={exports:{}};return e[n](s,s.exports,t),s.exports}t.n=e=>{var r=e&&e.__esModule?()=>e.default:()=>e;return t.d(r,{a:r}),r},t.d=(e,r)=>{for(var n in r)t.o(r,n)&&!t.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:r[n]})},t.o=(e,r)=>Object.prototype.hasOwnProperty.call(e,r),(()=>{"use strict";const e=window.wp.blocks,r=window.wp.i18n,n=window.wp.blockEditor,o=window.wp.data,s=window.wp.element;var a=t(556),i=t.n(a);const l=window.React,c=window.ReactJSXRuntime;function d({className:e,allowedBlocks:r,template:t,currentItemIndex:o=0,parentBlockId:s,renderAppender:a=!1,captureToolbars:i=!0}){const d=(0,l.useRef)(),p=(0,n.useInnerBlocksProps)({id:`inner-block-display-single-${s}`,className:e},{__experimentalCaptureToolbars:i,allowedBlocks:r,orientation:"horizontal",renderAppender:a,template:t,templateLock:!1});return(0,l.useEffect)((()=>{d.current&&(d.current.innerHTML=`#inner-block-display-single-${s} > *:not(:nth-child(${o+1}) ) { display: none; }`)}),[o,d,s]),(0,c.jsxs)(c.Fragment,{children:[(0,c.jsx)("style",{ref:d}),(0,c.jsx)("div",{...p})]})}d.propTypes={parentBlockId:i().string.isRequired,allowedBlocks:i().arrayOf(i().string).isRequired,template:i().array,className:i().string,currentItemIndex:i().number,renderAppender:i().oneOfType([i().bool,i().element])};const p=d;var u=t(942),f=t.n(u);const m=window.wp.components;function b({totalPages:e,currentPage:r,setCurrentPage:t,prevEnabled:n,nextEnabled:o,addSlide:s=(()=>{}),addSlideEnabled:a=!1}){return(0,c.jsxs)("div",{className:"inner-block-slider__navigation",children:[(0,c.jsx)(m.IconButton,{disabled:!n,icon:"arrow-left-alt2",isSecondary:!0,isSmall:!0,onClick:()=>{n&&t(r-1)}}),[...Array(e).keys()].map((e=>(0,c.jsx)(m.Button,{"aria-label":`Slide ${e+1}`,className:f()("components-button","is-not-small",{"is-primary":r===e+1,"is-secondary":r!==e+1}),type:"button",onClick:()=>{t(e+1)},children:e+1},e+1))),(0,c.jsx)(m.IconButton,{disabled:!o,icon:"arrow-right-alt2",isSecondary:!0,isSmall:!0,onClick:()=>{o&&t(r+1)}}),(0,c.jsx)(m.IconButton,{disabled:!a,icon:"plus-alt2",isSecondary:!0,isSmall:!0,onClick:()=>s()})]})}b.propTypes={totalPages:i().number.isRequired,currentPage:i().number.isRequired,setCurrentPage:i().func.isRequired,prevEnabled:i().bool.isRequired,nextEnabled:i().bool.isRequired,addSlide:i().func,addSlideEnabled:i().bool};const y=b,g=JSON.parse('{"UU":"wmf-reports/report-archive"}');(0,e.registerBlockType)(g.UU,{edit:function({clientId:t}){const a=(0,o.useSelect)((e=>e("core/block-editor").getBlock(t).innerBlocks)),{insertBlock:i}=(0,o.useDispatch)("core/block-editor"),l=(0,s.useRef)(a.length),[d,u]=(0,s.useState)(0);(0,s.useEffect)((()=>{(a.length>l.current||a.length<l.current&&d+1>a.length)&&u(a.length-1),l.current=a.length}),[a.length,d,l,a]);const f=(0,n.useBlockProps)({className:"report-archive carousel"});return(0,c.jsx)("div",{...f,children:(0,c.jsxs)("div",{className:"inner-block-slider",children:[(0,c.jsx)(p,{allowedBlocks:["wmf-reports/report"],className:"slides",currentItemIndex:d,parentBlockId:t,template:["wmf-reports/report"]}),(0,c.jsx)("p",{className:"help",children:(0,r.__)("Click on the + below to add a slide.","wmf-reports")}),(0,c.jsx)(y,{addSlide:()=>{const r=Date.now(),n=(0,e.createBlock)("wmf-reports/report",{id:r});i(n,void 0,t)},addSlideEnabled:!0,currentPage:d+1,nextEnabled:d+1<a.length,prevEnabled:d+1>1,setCurrentPage:e=>{u(e-1)},totalPages:a.length})]})})},save:()=>(0,c.jsx)(n.InnerBlocks.Content,{})})})()})();
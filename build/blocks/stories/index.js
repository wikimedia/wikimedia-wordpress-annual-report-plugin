(()=>{var e,t={85:(e,t,r)=>{"use strict";const n=window.wp.blocks,o=window.wp.i18n,s=window.wp.blockEditor,i=window.wp.data,a=window.wp.element;var l=r(556),c=r.n(l);const d=window.React,u=window.ReactJSXRuntime;function p({className:e,allowedBlocks:t,template:r,currentItemIndex:n=0,parentBlockId:o,renderAppender:i=!1,captureToolbars:a=!0}){const l=(0,d.useRef)(),c=(0,s.useInnerBlocksProps)({id:`inner-block-display-single-${o}`,className:e},{__experimentalCaptureToolbars:a,allowedBlocks:t,orientation:"horizontal",renderAppender:i,template:r,templateLock:!1});return(0,d.useEffect)((()=>{l.current&&(l.current.innerHTML=`#inner-block-display-single-${o} > *:not(:nth-child(${n+1}) ) { display: none; }`)}),[n,l,o]),(0,u.jsxs)(u.Fragment,{children:[(0,u.jsx)("style",{ref:l}),(0,u.jsx)("div",{...c})]})}p.propTypes={parentBlockId:c().string.isRequired,allowedBlocks:c().arrayOf(c().string).isRequired,template:c().array,className:c().string,currentItemIndex:c().number,renderAppender:c().oneOfType([c().bool,c().element])};const f=p;var g=r(942),m=r.n(g);const y=window.wp.components;function h({totalPages:e,currentPage:t,setCurrentPage:r,prevEnabled:n,nextEnabled:o,addSlide:s=(()=>{}),addSlideEnabled:i=!1}){return(0,u.jsxs)("div",{className:"inner-block-slider__navigation",children:[(0,u.jsx)(y.IconButton,{disabled:!n,icon:"arrow-left-alt2",isSecondary:!0,isSmall:!0,onClick:()=>{n&&r(t-1)}}),[...Array(e).keys()].map((e=>(0,u.jsx)(y.Button,{"aria-label":`Slide ${e+1}`,className:m()("components-button","is-not-small",{"is-primary":t===e+1,"is-secondary":t!==e+1}),type:"button",onClick:()=>{r(e+1)},children:e+1},e+1))),(0,u.jsx)(y.IconButton,{disabled:!o,icon:"arrow-right-alt2",isSecondary:!0,isSmall:!0,onClick:()=>{o&&r(t+1)}}),(0,u.jsx)(y.IconButton,{disabled:!i,icon:"plus-alt2",isSecondary:!0,isSmall:!0,onClick:()=>s()})]})}h.propTypes={totalPages:c().number.isRequired,currentPage:c().number.isRequired,setCurrentPage:c().func.isRequired,prevEnabled:c().bool.isRequired,nextEnabled:c().bool.isRequired,addSlide:c().func,addSlideEnabled:c().bool};const b=h,v=JSON.parse('{"UU":"wmf-reports/stories"}');(0,n.registerBlockType)(v.UU,{edit:function({clientId:e}){const t=(0,i.useSelect)((t=>t("core/block-editor").getBlock(e).innerBlocks)),{insertBlock:r,selectBlock:l,updateBlockAttributes:c}=(0,i.useDispatch)("core/block-editor"),d=(0,a.useRef)(t.length),[p,g]=(0,a.useState)(0),[m,y]=(0,a.useState)(0);(0,a.useEffect)((()=>{const e=document.getElementsByClassName("stories__categories-wrapper")?.[0],t=document.getElementsByClassName("stories__categories")?.[0],r=document.querySelector(".category-slide.active"),n=document.querySelector(".category-slide:last-child"),o=t.style.marginLeft||0,s=e?.getBoundingClientRect(),i=r?.getBoundingClientRect(),a=n?.getBoundingClientRect();if(0!==p)if(a.right<s.right)y(0);else if(p!==d.current-1){if(p>0&&p<d.current-1){const e=document.querySelector(".category-slide:first-child"),t=i.right-i.left,r=i.left-parseInt(o),n=(s.right-s.left)/2,l=s.right-n-r+t/2,c=e?.getBoundingClientRect();if(c.left-parseInt(o)+l>s.left)return void y(0);const d=a.right-parseInt(o);if(d+l<s.right)return void y(s.right-d);y(l)}}else{const e=i.right-i.left,t=i.left-parseInt(o),r=s.right-(t+e);y(r)}else y(0)}),[p]),(0,a.useEffect)((()=>{(t.length>d.current||t.length<d.current&&p+1>t.length)&&g(t.length-1),d.current=t.length}),[t.length,p,d,t]);const h=(0,s.useBlockProps)({className:"stories carousel"});return(0,u.jsxs)("div",{...h,children:[(0,u.jsx)("div",{className:"stories__categories-wrapper alignwide",children:(0,u.jsx)("div",{className:"stories__categories",style:{marginLeft:m},children:t.map(((t,r)=>{const{attributes:n,clientId:i}=t,{category:a}=n;return(0,u.jsx)(s.RichText,{className:"category-slide "+(r===p?"active":""),placeholder:(0,o.__)("Category Name","wmf-reports"),tagName:"div",value:a,onChange:e=>{c(i,{category:e})},onClick:()=>{g(r),l(e)}},i)}))})}),(0,u.jsxs)("div",{className:"inner-block-slider",children:[(0,u.jsx)(f,{allowedBlocks:["wmf-reports/story"],className:"slides",currentItemIndex:p,parentBlockId:e,template:[["wmf-reports/story"]]}),(0,u.jsx)("p",{className:"help",children:(0,o.__)("Click on the + below to add a slide. You can associate a slide with a post after it has been inserted.","wmf-reports")}),(0,u.jsx)(b,{addSlide:()=>{const t=Date.now(),o=(0,n.createBlock)("wmf-reports/story",{id:t});r(o,void 0,e)},addSlideEnabled:!0,currentPage:p+1,nextEnabled:p+1<t.length,prevEnabled:p+1>1,setCurrentPage:e=>{g(e-1)},totalPages:t.length})]})]})},save:()=>(0,u.jsx)(s.InnerBlocks.Content,{})})},694:(e,t,r)=>{"use strict";var n=r(925);function o(){}function s(){}s.resetWarningCache=o,e.exports=function(){function e(e,t,r,o,s,i){if(i!==n){var a=new Error("Calling PropTypes validators directly is not supported by the `prop-types` package. Use PropTypes.checkPropTypes() to call them. Read more at http://fb.me/use-check-prop-types");throw a.name="Invariant Violation",a}}function t(){return e}e.isRequired=e;var r={array:e,bigint:e,bool:e,func:e,number:e,object:e,string:e,symbol:e,any:e,arrayOf:t,element:e,elementType:e,instanceOf:t,node:e,objectOf:t,oneOf:t,oneOfType:t,shape:t,exact:t,checkPropTypes:s,resetWarningCache:o};return r.PropTypes=r,r}},556:(e,t,r)=>{e.exports=r(694)()},925:e=>{"use strict";e.exports="SECRET_DO_NOT_PASS_THIS_OR_YOU_WILL_BE_FIRED"},942:(e,t)=>{var r;!function(){"use strict";var n={}.hasOwnProperty;function o(){for(var e="",t=0;t<arguments.length;t++){var r=arguments[t];r&&(e=i(e,s(r)))}return e}function s(e){if("string"==typeof e||"number"==typeof e)return e;if("object"!=typeof e)return"";if(Array.isArray(e))return o.apply(null,e);if(e.toString!==Object.prototype.toString&&!e.toString.toString().includes("[native code]"))return e.toString();var t="";for(var r in e)n.call(e,r)&&e[r]&&(t=i(t,r));return t}function i(e,t){return t?e?e+" "+t:e+t:e}e.exports?(o.default=o,e.exports=o):void 0===(r=function(){return o}.apply(t,[]))||(e.exports=r)}()}},r={};function n(e){var o=r[e];if(void 0!==o)return o.exports;var s=r[e]={exports:{}};return t[e](s,s.exports,n),s.exports}n.m=t,e=[],n.O=(t,r,o,s)=>{if(!r){var i=1/0;for(d=0;d<e.length;d++){r=e[d][0],o=e[d][1],s=e[d][2];for(var a=!0,l=0;l<r.length;l++)(!1&s||i>=s)&&Object.keys(n.O).every((e=>n.O[e](r[l])))?r.splice(l--,1):(a=!1,s<i&&(i=s));if(a){e.splice(d--,1);var c=o();void 0!==c&&(t=c)}}return t}s=s||0;for(var d=e.length;d>0&&e[d-1][2]>s;d--)e[d]=e[d-1];e[d]=[r,o,s]},n.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return n.d(t,{a:t}),t},n.d=(e,t)=>{for(var r in t)n.o(t,r)&&!n.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},n.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={638:0,452:0};n.O.j=t=>0===e[t];var t=(t,r)=>{var o,s,i=r[0],a=r[1],l=r[2],c=0;if(i.some((t=>0!==e[t]))){for(o in a)n.o(a,o)&&(n.m[o]=a[o]);if(l)var d=l(n)}for(t&&t(r);c<i.length;c++)s=i[c],n.o(e,s)&&e[s]&&e[s][0](),e[s]=0;return n.O(d)},r=self.webpackChunkannual_report=self.webpackChunkannual_report||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var o=n.O(void 0,[452],(()=>n(85)));o=n.O(o)})();
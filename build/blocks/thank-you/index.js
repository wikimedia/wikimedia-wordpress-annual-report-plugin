(()=>{"use strict";var e,t={492:()=>{const e=window.wp.blocks,t=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":3,"name":"wmf-reports/thank-you","version":"0.1.0","title":"Thank-You Text","textdomain":"wmf-reports","category":"widgets","icon":"heart","description":"Animated vertical text carousel to display a multilingual message of gratitude.","supports":{"html":false},"attributes":{"lines":{"type":"array","default":["Merci","धन्यवाद","Gracias","ありがとう","شكراً","Danke","Asante","շնորհակալություն","Thank you!"]}},"editorScript":"file:./index.js","render":"file:./render.php","style":"file:./style-index.css","viewScript":"file:./view.js"}'),r=window.React,a=window.wp.i18n,n=window.wp.blockEditor;(0,e.registerBlockType)(t.name,{...t,edit:function({isSelected:e,attributes:t,setAttributes:s}){const i=(0,r.useCallback)(((e,r)=>{const a=[...t.lines];a[r]=e,s({lines:a})}),[t.lines,s]);return(0,r.createElement)("p",{...(0,n.useBlockProps)()},e?t.lines.map(((e,t)=>(0,r.createElement)(n.RichText,{key:e,tagName:"span",className:"wmf-thank-you-line",value:e,allowedFormats:[],onChange:e=>i(e,t),placeholder:(0,a.__)("Thank You!","wmf-reports")}))):t.lines.slice(0,4).map((e=>(0,r.createElement)("span",{key:e,className:"wmf-thank-you-line"},e))))}})}},r={};function a(e){var n=r[e];if(void 0!==n)return n.exports;var s=r[e]={exports:{}};return t[e](s,s.exports,a),s.exports}a.m=t,e=[],a.O=(t,r,n,s)=>{if(!r){var i=1/0;for(p=0;p<e.length;p++){for(var[r,n,s]=e[p],o=!0,l=0;l<r.length;l++)(!1&s||i>=s)&&Object.keys(a.O).every((e=>a.O[e](r[l])))?r.splice(l--,1):(o=!1,s<i&&(i=s));if(o){e.splice(p--,1);var c=n();void 0!==c&&(t=c)}}return t}s=s||0;for(var p=e.length;p>0&&e[p-1][2]>s;p--)e[p]=e[p-1];e[p]=[r,n,s]},a.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={495:0,263:0};a.O.j=t=>0===e[t];var t=(t,r)=>{var n,s,[i,o,l]=r,c=0;if(i.some((t=>0!==e[t]))){for(n in o)a.o(o,n)&&(a.m[n]=o[n]);if(l)var p=l(a)}for(t&&t(r);c<i.length;c++)s=i[c],a.o(e,s)&&e[s]&&e[s][0](),e[s]=0;return a.O(p)},r=globalThis.webpackChunkannual_report=globalThis.webpackChunkannual_report||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var n=a.O(void 0,[263],(()=>a(492)));n=a.O(n)})();
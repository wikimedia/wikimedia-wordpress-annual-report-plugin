(()=>{"use strict";const e=window.wp.blocks,t=window.React,o=window.wp.i18n,s=window.wp.blockEditor,l=window.wp.editPost,n=window.wp.element,c=window.wp.data,i=(0,o.__)("(Waypoint group has no ToC label)","wmf-reports"),a=e=>{const t=[];return e.forEach((e=>{e.attributes.includeInToC&&t.push(e),e.innerBlocks&&a(e.innerBlocks).forEach((e=>{t.push(e)}))})),t},r=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":3,"name":"wmf-reports/table-of-contents","version":"0.1.0","title":"Report Table of Contents","textdomain":"wmf-reports","category":"widgets","icon":"editor-ul","description":"Render a table of contents based on labeled group blocks.","example":{},"supports":{"multiple":false,"html":false},"attributes":{"waypoints":{"type":"string","default":""}},"editorScript":"file:./index.js","style":"file:./index.css"}');(0,e.registerBlockType)(r.name,{...r,edit:function({setAttributes:e}){const o=(0,c.useSelect)((e=>e(s.store).getBlocks())),{selectBlock:r}=(0,c.useDispatch)(s.store),{openGeneralSidebar:p}=(0,c.useDispatch)(l.store),u=(0,n.useMemo)((()=>a(o).map((e=>({clientId:e.clientId,tocLabel:e.attributes.tocLabel,tocSlug:e.attributes.tocSlug,selectBlock(){r(e.clientId),p("edit-post/block")}})))),[o,r,p]);return(0,n.useEffect)((()=>{e({waypoints:JSON.stringify(u.map((({tocLabel:e,tocSlug:t})=>({tocLabel:e,tocSlug:t}))))})}),[u,e]),(0,t.createElement)("ul",{...(0,s.useBlockProps)()},u.map((e=>(0,t.createElement)("li",{key:`waypoint-${e.clientId}`},(0,t.createElement)("a",{href:`#${e.tocSlug}`,onClick:()=>{r(e.clientId),p("edit-post/block")}},e.tocLabel||i)))))},save:function({attributes:e}){return(0,t.createElement)("ul",{...s.useBlockProps.save()},(JSON.parse(e.waypoints)||[]).map((e=>(0,t.createElement)("li",{key:`waypoint-${e.tocSlug}`},(0,t.createElement)("a",{href:`#${e.tocSlug}`},e.tocLabel)))))}})})();
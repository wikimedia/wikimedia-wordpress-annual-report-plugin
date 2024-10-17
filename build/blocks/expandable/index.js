(()=>{"use strict";const e=window.wp.blocks,t=window.wp.blockEditor,o=window.wp.components,s=window.wp.i18n,n=window.wp.data,i=window.ReactJSXRuntime,a=[{label:"px",value:"px"},{label:"%",value:"%"},{label:"vh",value:"vh"}],l=(0,t.withColors)({buttonBackgroundColor:"button-bg-color",buttonTextColor:"button-text-color"})((({attributes:e,setAttributes:l,clientId:r,isSelected:d})=>{const c=(0,t.useBlockProps)(),p=(u=r,(0,n.useSelect)((e=>{const o=e(t.store).getSelectedBlockClientId();return e(t.store).getBlockParents(o).includes(u)}),[u]));var u;const x=p||!e.visibleAmount||!e.visibleUnit,b=(0,t.useInnerBlocksProps)({className:"expandable-content"+(x?" is-expanded":""),"data-visible-amount":e.visibleAmount,"data-visible-unit":e.visibleUnit,style:{...x?{}:{height:`${e.visibleAmount}${e.visibleUnit}`,overflow:"hidden"}}},{template:[["core/paragraph"]]});return(0,i.jsxs)("div",{...c,children:[(0,i.jsx)(t.InspectorControls,{group:"styles",children:(0,i.jsx)(o.PanelBody,{intialOpen:!0,children:(0,i.jsxs)(o.PanelRow,{className:"wmf-expandable-dimensions-panel",children:[(0,i.jsx)(o.TextControl,{label:(0,s.__)("Visible Amount","wmf-reports"),value:e.visibleAmount,onChange:e=>{isNaN(+e)||l({visibleAmount:+e})}}),(0,i.jsx)(o.SelectControl,{label:(0,s.__)("Unit","wmf-reports"),options:a,value:e.visibleUnit||a[0].value,onChange:e=>l({visibleUnit:e})})]})})}),(0,i.jsx)("div",{...b}),!p&&(0,i.jsx)(t.RichText,{tagName:"div",className:"expandable-expander",value:e.showMoreText,placeholder:"Show more",onChange:e=>l({showMoreText:e}),withoutInteractiveFormatting:!0,allowedFormats:[]}),(d||p)&&(0,i.jsx)(t.RichText,{tagName:"div",className:"expandable-expander is-expanded-in-editor",value:e.showLessText,placeholder:"Show less",onChange:e=>l({showLessText:e}),withoutInteractiveFormatting:!0,allowedFormats:[]})]})})),r=JSON.parse('{"$schema":"https://schemas.wp.org/trunk/block.json","apiVersion":3,"name":"wmf-reports/expandable","title":"Expandable","description":"Show a teaser of some content, with a link to expand to see the full content.","category":"widgets","icon":"editor-expand","example":{},"attributes":{"buttonBackgroundColor":{"type":"string"},"buttonTextColor":{"type":"string"},"showMoreText":{"type":"string","default":"Show more"},"showLessText":{"type":"string","default":"Show less"},"visibleAmount":{"type":"number","default":300},"visibleUnit":{"enum":["px","%","vh"],"default":"px"}},"supports":{"html":false},"textdomain":"wmf-reports","editorScript":"file:./index.js","style":"file:./index.css","viewScript":"file:./view.js","keywords":["annual","report","expandable","accordion"]}');(0,e.registerBlockType)(r.name,{...r,edit:l,save:function({attributes:e}){const o=t.useBlockProps.save();return(0,i.jsxs)("div",{...o,children:[(0,i.jsx)("div",{className:"expandable-content","data-visible-amount":e.visibleAmount,"data-visible-unit":e.visibleUnit,children:(0,i.jsx)(t.InnerBlocks.Content,{})}),(0,i.jsx)("button",{className:"expandable-expander",type:"button","data-showmoretext":e.showMoreText,"data-showlesstext":e.showLessText,children:e.showMoreText})]})},transforms:{from:[{type:"block",blocks:["core/group"],transform:(t,o)=>(0,e.createBlock)(r.name,t,o)}]}})})();
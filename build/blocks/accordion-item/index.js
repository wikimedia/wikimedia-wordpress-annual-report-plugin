(()=>{"use strict";const t=window.wp.blocks,e=window.wp.blockEditor,o=window.wp.i18n,i=window.ReactJSXRuntime,c=JSON.parse('{"UU":"wmf-reports/accordion-item"}');(0,t.registerBlockType)(c.UU,{edit:function({attributes:t,setAttributes:c,context:s}){const n=(0,e.useBlockProps)(),r=s["accordion/fontColor"];return r!==t.fontColor&&setTimeout((()=>c({fontColor:r}))),(0,i.jsx)("div",{...n,children:(0,i.jsxs)("div",{className:"wmf-accordion-item","aria-expanded":!0,children:[(0,i.jsx)("div",{className:"wmf-accordion-item__title",children:(0,i.jsx)(e.RichText,{className:"wmf-accordion-item__title-text",formattingControls:[],placeholder:(0,o.__)("Add Accordion Title…","wmf-reports"),tagName:"h3",value:t.title,onChange:t=>c({title:t}),style:r&&{color:r}})}),(0,i.jsx)("div",{className:"wmf-accordion-item__content",children:(0,i.jsx)(e.InnerBlocks,{})})]})})},save:({attributes:t})=>{const o=e.useBlockProps.save({className:"wmf-accordion-item"}),{fontColor:c,title:s}=t;return(0,i.jsxs)("div",{...o,children:[(0,i.jsx)("button",{className:"wmf-accordion-item__title",style:c&&{color:c},children:(0,i.jsx)(e.RichText.Content,{className:"wmf-accordion-item__title-text",tagName:"h3",value:s})}),(0,i.jsx)("div",{className:"wmf-accordion-item__content",children:(0,i.jsx)(e.InnerBlocks.Content,{})})]})}})})();
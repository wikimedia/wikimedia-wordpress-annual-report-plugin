(()=>{"use strict";const e=window.wp.blocks,o=window.wp.blockEditor,r=window.wp.i18n,t=window.ReactJSXRuntime,l=()=>{},n=({color:e=null,label:r="",onColorChange:n=l,clientId:s})=>{const i=(0,o.__experimentalUseMultipleOriginColorsAndGradients)(),c=[{colorValue:e,onColorChange:n,label:r}];return(0,t.jsx)(o.InspectorControls,{group:"color",children:(0,t.jsx)(o.__experimentalColorGradientSettingsDropdown,{settings:c,panelId:s,hasColorsOrGradients:!1,__experimentalIsRenderedInSidebar:!0,...i})})},s=(0,o.withColors)({borderColor:"border-color"})((({attributes:e,setAttributes:l,clientId:s,borderColor:i,setBorderColor:c})=>{const a=(0,o.useBlockProps)();return(0,t.jsxs)("div",{...a,children:[(0,t.jsx)(n,{label:(0,r.__)("Border color","wmf-reports"),color:i?.color||e.borderColor,onColorChange:c,clientId:s}),(0,t.jsxs)("div",{className:"wmf-accordion-item","aria-expanded":!0,style:i?.color&&{borderLeftColor:i.color},children:[(0,t.jsx)("div",{className:"wmf-accordion-item__title",children:(0,t.jsx)(o.RichText,{className:"wmf-accordion-item__title-text",formattingControls:[],placeholder:(0,r.__)("Add Accordion Title…","wmf-reports"),tagName:"h3",value:e.title,onChange:e=>l({title:e})})}),(0,t.jsx)("div",{className:"wmf-accordion-item__content",children:(0,t.jsx)(o.InnerBlocks,{})})]})]})})),i=JSON.parse('{"UU":"wmf-reports/accordion-item"}');(0,e.registerBlockType)(i.UU,{edit:s,save:({attributes:e})=>{const r=o.useBlockProps.save({className:"wmf-accordion-item"}),{borderColor:l,title:n}=e;return(0,t.jsxs)("div",{...r,style:l&&{borderLeftColor:`var(--wp--preset--color--${l})`},children:[(0,t.jsx)("button",{className:"wmf-accordion-item__title",children:(0,t.jsx)(o.RichText.Content,{className:"wmf-accordion-item__title-text",tagName:"h3",value:n})}),(0,t.jsx)("div",{className:"wmf-accordion-item__content",children:(0,t.jsx)(o.InnerBlocks.Content,{})})]})}})})();
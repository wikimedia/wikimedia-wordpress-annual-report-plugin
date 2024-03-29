(()=>{"use strict";const e=window.React,t=window.wp.blocks,o=window.wp.i18n,l=window.wp.blockEditor,a=window.wp.components,s=window.wp.data,r=JSON.parse('{"UU":"wmf-reports/story"}');(0,t.registerBlockType)(r.UU,{edit:function({attributes:r,clientId:n,setAttributes:c}){const{PostSelectButton:i}=window.hm.components,{postId:p,postType:u}=r,d=(0,s.useSelect)((e=>e("core/editor").getBlocksByClientId(n)[0].innerBlocks)),{media:m,post:w}=(0,s.useSelect)((e=>{const t=e("core").getEntityRecord("postType",u,p);return{media:t?.featured_media?e("core").getMedia(t?.featured_media):{},post:t}})),{insertBlocks:_,removeBlocks:g}=(0,s.useDispatch)("core/block-editor");return(0,e.createElement)("div",{...(0,l.useBlockProps)({className:"carousel__slide"})},(0,e.createElement)(l.InspectorControls,null,(0,e.createElement)(a.PanelBody,null,(0,e.createElement)(a.SelectControl,{label:(0,o.__)("Choose Post Type","wmf-reports"),help:(0,o.__)("Altering the post type will allow you to choose posts from that post type using the select post button below.","wmf-reports"),options:[{label:"Post",value:"post"},{label:"Page",value:"page"},{label:"Profile",value:"profile"},{label:"Report",value:"wmf-report"},{label:"Story (Default)",value:"story"}],value:u,onChange:e=>{c({postType:e})}}),(0,e.createElement)(a.BaseControl,{className:"story-base-control",help:(0,o.__)("Associate this post with a slide. Once you have chosen a post use the button below to refresh the slide content.","wmf-reports"),id:(0,o.__)("Associated Post","wmf-reports"),label:(0,o.__)("Associated Post","wmf-reports")},(0,e.createElement)(i,{maxPosts:1,postType:u,value:[p],onSelect:e=>{const t=e?.[0]?.id||0;0!==t&&c({postId:t})}},(0,e.createElement)("span",{className:"components-button is-secondary"},(0,o.__)("Select post","wmf-reports")))),0!==p&&(0,e.createElement)(a.BaseControl,{className:"story-base-control",help:(0,o.__)("Pull the slide content from the associated post.","wmf-reports"),id:(0,o.__)("Refresh Slide Content","wmf-reports"),label:(0,o.__)("Refresh Slide Content","wmf-reports")},(0,e.createElement)(a.Button,{variant:"secondary",onClick:()=>{if(!p||0===p||!w)return;const e=d.map((e=>e.clientId)),o=w.title.raw||"",l=w?.featured_media||0,a=m?.link||"",s=w?.link||"#",r=(w.excerpt.rendered||"").replace(/<\/?[^>]+(>|$)/g,""),c=w?.content?.raw||"",i=wp.blocks.rawHandler({HTML:c});g(e);const f=[(0,t.createBlock)("core/group",{align:"full",backgroundColor:"wmf-report-blue",className:"wmf-pattern-reports-carousel-slide",layout:{type:"constrained"},textColor:"base100"},[(0,t.createBlock)("core/columns",{align:"wide"},[(0,t.createBlock)("core/column",{width:"66.66%"},[(0,t.createBlock)("core/image",{aspectRatio:"4/3",className:"is-style-default wmf-pattern-reports-carousel-slide__image",id:l||74197,lightbox:{aspectRatio:"4/3",className:"is-style-default wmf-pattern-reports-carousel-slide__image",enabled:!1,id:l||74197,linkDestination:"none",scale:"cover",sizeSlug:"full",url:a||"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},linkDestination:"none",scale:"cover",sizeSlug:"full",url:a||"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"})]),(0,t.createBlock)("core/column",{width:"33.33%"},[(0,t.createBlock)("core/heading",{className:"wmf-pattern-reports-carousel-slide__heading is-style-h2",content:o||"Lorem ipsum dolor sit amet vulputate.",level:3}),(0,t.createBlock)("core/paragraph",{className:"is-style-sans-p",content:r||"Lorem ipsum dolor sit amet ullamcorper convallis condimentum suspendisse cras blandit congue tincidunt turpis vulputate. Imperdiet quisque libero in porta venenatis vitae netus condimentum."}),(0,t.createBlock)("core/buttons",{},[(0,t.createBlock)("core/button",{backgroundColor:"base100",className:"is-style-tertiary wmf-pattern-reports-carousel-slide__button",text:"Read More",style:{elements:{link:{color:{text:"var:preset|color|base0"}}}},textColor:"base10",url:s})])])])]),(0,t.createBlock)("wmf-reports/overlay",{postId:p,postType:u},[(0,t.createBlock)("core/group",{align:"full",className:"wp-block-wmf-pattern-overlay",layout:{type:"constrained"}},[(0,t.createBlock)("core/columns",{align:"wide"},[(0,t.createBlock)("core/column",{width:"66.66%"},[(0,t.createBlock)("core/image",{aspectRatio:"4/3",className:"is-style-default wp-block-wmf-pattern-overlay__image",id:l||74197,lightbox:{aspectRatio:"4/3",className:"is-style-default wp-block-wmf-pattern-overlay__image",enabled:!1,id:l||74197,linkDestination:"none",scale:"cover",sizeSlug:"full",url:a||"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},linkDestination:"none",scale:"cover",sizeSlug:"full",url:a||"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"})]),(0,t.createBlock)("core/column",{width:"33.33%"},[(0,t.createBlock)("core/paragraph",{className:"wp-block-wmf-pattern-overlay__category is-style-sans-p",content:"Lorem ipsum / Sit amet",style:{elements:{link:{color:{text:"var:preset|color|orange"}}}},textColor:"orange"}),(0,t.createBlock)("core/heading",{className:"wp-block-wmf-pattern-overlay__heading is-style-h2",content:o||"Lorem ipsum dolor sit amet vulputate.",level:4})])]),(0,t.createBlock)("core/group",{align:"wide",className:"wp-block-wmf-pattern-overlay__content",layout:{type:"constrained"}},i)])])];_(f,null,n)}},(0,o.__)("Refresh Slide","wmf-reports"))))),(0,e.createElement)(l.InnerBlocks,{template:[["core/group",{align:"full",backgroundColor:"wmf-report-blue",className:"wmf-pattern-reports-carousel-slide",layout:{type:"constrained"},textColor:"base100"},[["core/columns",{align:"wide"},[["core/column",{width:"66.66%"},[["core/image",{aspectRatio:"4/3",className:"is-style-default wmf-pattern-reports-carousel-slide__image",id:74197,lightbox:{aspectRatio:"4/3",className:"is-style-default wmf-pattern-reports-carousel-slide__image",enabled:!1,id:74197,linkDestination:"none",scale:"cover",sizeSlug:"full",url:"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"},linkDestination:"none",scale:"cover",sizeSlug:"full",url:"/wp-content/uploads/2024/01/Wikimedia_Foundation_AI_Blog_Series_Header.png"}]]],["core/column",{width:"33.33%"},[["core/heading",{className:"wmf-pattern-reports-carousel-slide__heading is-style-h2",content:"Lorem ipsum dolor sit amet vulputate.",level:3}],["core/paragraph",{className:"is-style-sans-p",content:"Lorem ipsum dolor sit amet ullamcorper convallis condimentum suspendisse cras blandit congue tincidunt turpis vulputate. Imperdiet quisque libero in porta venenatis vitae netus condimentum."}],["core/buttons",{},[["core/button",{backgroundColor:"base100",className:"is-style-tertiary wmf-pattern-reports-carousel-slide__button",text:"Read More",style:{elements:{link:{color:{text:"var:preset|color|base0"}}}},textColor:"base10"}]]]]]]]]],["wmf-reports/overlay",{}]]}))},save:()=>(0,e.createElement)(l.InnerBlocks.Content,null)})})();
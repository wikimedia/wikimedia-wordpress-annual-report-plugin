(()=>{"use strict";const e=document.getElementsByClassName("wp-block-wmf-reports-story"),t=document.getElementsByClassName("category-slide"),i=document.getElementById("carousel-back"),s=document.getElementById("carousel-forward"),l=document.getElementById("carousel-slide-back"),o=document.getElementById("carousel-slide-forward"),n=e.length,c=document.getElementsByClassName("stories__categories")?.[0],r=e=>{c.style.marginLeft=e+"px"};let a=!1,d=0,y=0;function u(e){const t=e.querySelector("figure iframe")||e.querySelector("figure");if(t){const i=t.getBoundingClientRect().height,s=e.closest(".carousel-wrapper");s&&i&&s.style.setProperty("--story-slide-graphic-height",`${Math.round(i)}px`)}}window.addEventListener("resize",function(e,t){let i;return function(...t){clearTimeout(i),i=setTimeout((()=>{e.apply(this,t)}),100)}}((()=>{for(const t of e)if("hidden"!==t.style.visibility)return void u(t)})));const g=(i,s=!0)=>{const l=document.querySelector(".category-slide.active"),o=parseInt(l?.dataset?.index||0),d=e[i];u(d);const y=Array.from(t).filter((e=>e.dataset.id===d.id));Array.from(t).forEach((e=>{e.classList.remove("active")})),y.forEach((e=>{e.classList.add("active");const t=e.closest(".wp-block-group[id]")?.id;s&&(location.hash=`${t}-${e.dataset.id}`,(e=>{const t=e.closest(".stories.carousel");t&&function(e){const t=window.getComputedStyle(document.body).getPropertyValue("--scroll-margin-top");window.scrollTo({behavior:"smooth",top:e.getBoundingClientRect().top-document.body.getBoundingClientRect().top-(parseInt(t,10)+8)})}(t)})(e))})),Array.from(e).forEach(((e,t)=>{if(!a&&t!==i){if(t===o&&o!==i)return i>=o?(d.style.height=null,d.style.opacity=0,e.style.opacity=1,e.style.position="absolute",e.style.zIndex=1,e.classList.add("animate"),setTimeout((()=>{e.style.height=d.offsetHeight,e.style.opacity=0,a=!0}),1),setTimeout((()=>{e.style.height=0,e.style.opacity=null,e.style.position=null,e.style.visibility="hidden",e.style.zIndex=null,e.classList.remove("animate"),a=!1}),250),d.style.height=null,d.style.opacity=null,void(d.style.visibility="visible")):i<o?(d.style.height=null,d.style.opacity=0,d.style.position="absolute",d.style.visibility="visible",e.style.height=null,e.style.opacity=1,e.style.visibility="visible",setTimeout((()=>{d.classList.add("animate"),e.classList.add("animate")}),1),setTimeout((()=>{d.style.opacity=1,e.style.height=d.offsetHeight+"px",a=!0}),2),setTimeout((()=>{e.style.opacity=0}),250),void setTimeout((()=>{d.style.height=null,d.style.opacity=null,d.style.position=null,d.style.visibility="visible",d.classList.remove("animate"),e.style.height=0,e.style.opacity=null,e.style.visibility="hidden",e.classList.remove("animate"),a=!1}),250)):void 0;e.style.height=0,e.style.visibility="hidden"}})),(e=>{const t=document.getElementsByClassName("stories__categories-wrapper")?.[0],i=document.querySelector(".category-slide.active"),s=document.querySelector(".category-slide:last-child"),l=parseInt(c.style.marginLeft)||0,o=t?.getBoundingClientRect(),a=i?.getBoundingClientRect(),d=s?.getBoundingClientRect();if(d.right-l<o.right)return r(0),void(document.querySelector(".stories__categories-buttons").style.display="none");if(0!==e)if(e!==n-1){if(e>0&&e<n-1){const e=document.querySelector(".category-slide:first-child"),t=a.right-a.left,i=a.left-l,s=(o.right-o.left)/2,n=o.right-s-i+t/2,c=e?.getBoundingClientRect();if(c.left-l+n>o.left)return void r(0);const y=d.right-l;if(y+n<o.right)return void r(o.right-y);r(n)}}else{const e=a.right-a.left,t=a.left-l,i=o.right-(t+e);r(i)}else r(0)})(i)};g(0,!1);const h=e[0]&&e[0].closest(".carousel--uninitialized");h&&h.classList.remove("carousel--uninitialized"),Array.from(t).forEach(((e,t)=>{e.addEventListener("click",(()=>{g(t)}))})),[l,i].forEach((t=>{t.addEventListener("click",(()=>{const t=Array.from(e).findIndex((e=>"visible"===e.style.visibility)),i=t-1<0?e.length-1:t-1;g(i)}))})),[o,s].forEach((t=>{t.addEventListener("click",(()=>{let t=Array.from(e).findIndex((e=>"visible"===e.style.visibility));t<0&&(t=0);const i=t+1>e.length-1?0:t+1;g(i)}))})),c.addEventListener("touchstart",(e=>{d=e.changedTouches[0].screenX})),c.addEventListener("touchend",(e=>{y=e.changedTouches[0].screenX,y<d&&s.click(),y>d&&i.click()})),document.addEventListener("DOMContentLoaded",(()=>{const e=location.hash.slice(location.hash.lastIndexOf("-")+1),t=document.getElementById(e);t&&t.closest(".stories.carousel")&&setTimeout((()=>{const i=[...t.parentElement.children].findIndex((({id:t})=>t===e));g(i)}),500)}))})();
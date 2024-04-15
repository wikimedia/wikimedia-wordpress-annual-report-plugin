(()=>{"use strict";document.addEventListener("DOMContentLoaded",(()=>{const e=window.mapboxgl;if(!wmf?.apiKey||!e)return void console.error("Unable to initialize mapbox. API key or mapbox global unavailable.");const t=!!document.querySelector(".wikimedia-endow");e.accessToken=wmf.apiKey;const i=document.getElementById("map"),s=document.getElementsByClassName("wp-block-wmf-reports-marker"),o=document.getElementById("map-back"),l=document.getElementById("map-forward"),a=new e.NavigationControl,r=new e.Map({attributionControl:!1,container:"map",center:[8.18,t?26.83:9],projection:"equirectangular",renderWorldCopies:!1,scrollZoom:!1,style:i?.dataset?.mapStyle||"mapbox://styles/mapbox/light-v11",zoom:.5});let n=0,c=!1;r.addControl(a);const d=(e,t=!0)=>{n=e;const i=s[e],o=document.getElementsByClassName("marker"),l=Array.from(o).filter((e=>e.dataset.id===i.id)),a=document.querySelector('.wp-block-wmf-reports-marker[style*="visibility: visible"]');let r=0;a&&(r=Array.from(s).findIndex((e=>parseInt(a.id)===parseInt(e.id)))),Array.from(o).forEach((e=>{e.classList.remove("active")})),l.forEach((e=>{e.classList.add("active");const i=e.closest(".wp-block-group[id]")?.id;t&&e.dataset.id&&(location.hash=`${i}-${e.dataset.id}`,(e=>{const t=e.closest(".map.carousel");t&&function(e){const t=window.getComputedStyle(document.body).getPropertyValue("--scroll-margin-top")||0;window.scrollTo({behavior:"smooth",top:e.getBoundingClientRect().top-document.body.getBoundingClientRect().top-(parseInt(t,10)+8)})}(t)})(e))})),Array.from(s).forEach(((t,s)=>{if(!c&&s!==e){if(s===r&&r!==e)return e>=r?(i.style.height=null,i.style.opacity=0,t.style.opacity=1,t.style.position="absolute",t.style.zIndex=1,t.classList.add("animate"),setTimeout((()=>{t.style.height=i.offsetHeight,t.style.opacity=0,c=!0}),1),setTimeout((()=>{t.style.height=0,t.style.opacity=null,t.style.position=null,t.style.visibility="hidden",t.style.zIndex=null,t.classList.remove("animate"),c=!1}),250),i.style.height=null,i.style.opacity=null,void(i.style.visibility="visible")):e<r?(i.style.height=null,i.style.opacity=0,i.style.position="absolute",i.style.visibility="visible",t.style.height=null,t.style.opacity=1,t.style.visibility="visible",setTimeout((()=>{i.classList.add("animate"),t.classList.add("animate")}),1),setTimeout((()=>{i.style.opacity=1,t.style.height=i.offsetHeight+"px",c=!0}),2),setTimeout((()=>{t.style.opacity=0}),250),void setTimeout((()=>{i.style.height=null,i.style.opacity=null,i.style.position=null,i.style.visibility="visible",i.classList.remove("animate"),t.style.height=0,t.style.opacity=null,t.style.visibility="hidden",t.classList.remove("animate"),c=!1}),250)):void 0;t.style.height=0,t.style.visibility="hidden"}}))},m=s[0]&&s[0].closest(".carousel--uninitialized");m&&m.classList.remove("carousel--uninitialized"),o.addEventListener("click",(()=>{const e=Array.from(s).findIndex((e=>"visible"===e.style.visibility)),t=e-1<0?s.length-1:e-1;d(t,!1)})),l.addEventListener("click",(()=>{let e=Array.from(s).findIndex((e=>"visible"===e.style.visibility));e<0&&(e=0);const t=e+1>s.length-1?0:e+1;d(t,!1)})),r.on("load",(()=>{r.addSource("markers",{type:"geojson",data:{type:"FeatureCollection",features:Array.from(s).map(((e,t)=>({geometry:{type:"Point",coordinates:[e?.dataset?.long||0,e?.dataset?.lat||0]},type:"Feature",properties:{id:e?.id,index:t}})))||[]},cluster:!0,clusterRadius:10,clusterProperties:{sum:["get","count",["get","value",["properties"]]]}}),r.addLayer({id:"marker_circle",type:"circle",source:"markers",filter:["!=","cluster",!0],paint:{"circle-color":"#000","circle-radius":1}}),r.addLayer({id:"marker_label",type:"symbol",source:"markers",filter:["!=","cluster",!0],layout:{"text-field":"{point_count_abbreviated}","text-size":10},paint:{"circle-color":"#000","text-color":"white"}}),r.on("render",(()=>{r.isSourceLoaded("markers")&&(()=>{const t=r.querySourceFeatures("markers"),i=document.getElementsByClassName("marker"),s=document.getElementsByClassName("cluster"),o=[],l=[];for(const a of t){const t=a.geometry.coordinates,{cluster:c,cluster_id:m,id:y,index:u}=a.properties,p=Array.from(i).filter((e=>e?.dataset?.id===y))?.[0]||null,g=Array.from(s).filter((e=>parseInt(e?.dataset?.clusterId)===m))?.[0]||null;if(c){if(!g){const i=document.createElement("div");i.className="cluster",i.dataset.clusterId=m,i.innerHTML=a.properties.point_count_abbreviated,new e.Marker(i).setDraggable(!1).setLngLat(t).addTo(r)}l.includes(m)||l.push(m)}if(!c){if(!p){const i=document.createElement("div");i.className="marker",i.dataset.id=y,new e.Marker(i).setDraggable(!1).setLngLat(t).addTo(r),u===n&&i.classList.add("active"),i.addEventListener("click",(()=>{d(u);const e=document.getElementById("map").getBoundingClientRect().top+window.scrollY+-140;window.scrollTo({top:e,behavior:"smooth"})}))}o.includes(y)||o.push(y)}}Array.from(i).forEach((e=>{o.includes(e?.dataset?.id)||e.remove()})),Array.from(s).forEach((e=>{l.includes(parseInt(e?.dataset?.clusterId))||e.remove()}))})()}));const t=location.hash.slice(location.hash.lastIndexOf("-")+1),i=document.getElementById(t);if(i&&i.closest(".map.carousel")){const e=[...i.parentElement.children].findIndex((({id:e})=>e===t));setTimeout((()=>d(e)),50)}else d(0,!1)}))}))})();
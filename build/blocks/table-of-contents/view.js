(()=>{const t=document.querySelector(".wmf-toc-jumplist"),e=t.querySelectorAll(".wmf-toc-jumplist__items a"),o=t.querySelector(".wmf-toc-progress"),c=200,r=document.querySelector(".wp-block-button.has-icon-download");function n(){const o=function(){for(const t of e){const e=t.getAttribute("href"),o=document.querySelector(e).getBoundingClientRect();if(o.top<=c&&o.top+o.height>=c&&o.top+o.height>=0)return t}return null}();if(!o)return;const r=o.getAttribute("href"),n=t.querySelector(".wp-block-button.is-share-button a");if(r&&n&&n.href){const t=n.href;n.href=t.replace(/#.*$/,"")}e.forEach((t=>{t.classList.toggle("wmf-toc-jumplist__active-item",o===t)}))}t.querySelector(".wmf-toc-jumplist__modal-footer").prepend(r.cloneNode(!0)),window.addEventListener("scroll",(function(){(function(){const t=(document.querySelector("main")||document.querySelector("article")||document.body).clientHeight,e=document.documentElement.scrollTop,c=+Math.min(e/t*100,100).toFixed(2),r=(100-c)/100;o.setAttribute("style",`width:${c}%`);const n=o.querySelector("circle"),s=+n.getAttribute("r");if(isNaN(s))return;const l=Math.PI*s*2;n.setAttribute("stroke-dashoffset",`${(r*l).toFixed(0)}px`)})(),n()})),window.addEventListener("hashchange",n);const s="wmf-toc-jumplist--modal-open";document.querySelector(".wmf-toc-progress button").addEventListener("click",(()=>{document.querySelector(".wmf-toc-jumplist").classList.add(s)})),document.addEventListener("click",(({target:t})=>{const e=e=>t?.classList?.contains?.(e);(e("wmf-toc-jumplist__modal-blanket")||e("wmf-toc-jumplist__modal-close")||"A"===t.nodeName&&/^#[A-Za-z0-9-]+$/.test(t.getAttribute("href")))&&document.querySelectorAll(`.${s}`).forEach((t=>t.classList.remove(s)))}))})();
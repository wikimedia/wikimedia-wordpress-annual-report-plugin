(()=>{"use strict";function t(t,e,n=!1){if(!t||!e)return void console.error("Invalid expandable container nodes",{button:t,container:e});const{showmoretext:a,showlesstext:i}=t.dataset,{visibleAmount:r,visibleUnit:o}=e.dataset,s=n||"true"!==t.getAttribute("aria-expanded");t.setAttribute("aria-expanded",s),t.innerText=s?i:a,e.setAttribute("style",`height: ${s?"auto":r+o}`),e.classList.toggle("is-expanded",s)}function e(){t(document.querySelector(`[aria-controls="${this.id}"]`),this,!0)}document.addEventListener("click",(function(e){if(!e.target.classList.contains("expandable-expander"))return;e.preventDefault();const n=e.target.getAttribute("aria-controls"),a=document.getElementById(n);t(e.target,a)})),document.querySelectorAll(".expandable-content").forEach((t=>{t.addEventListener("focusin",e)}))})();
(()=>{"use strict";function t(t,e,n=!1){if(!t||!e)return void console.error("Invalid expandable container nodes",{button:t,container:e});const{showmoretext:o,showlesstext:i}=t.dataset,{visibleAmount:r,visibleUnit:a}=e.dataset,s=n||"true"!==t.getAttribute("aria-expanded");t.setAttribute("aria-expanded",s),t.innerText=s?i:o,e.setAttribute("style",`height: ${s?"auto":r+a}`),e.classList.toggle("is-expanded",s),window.scrollTo({top:s?window.scrollY+e.getBoundingClientRect().top+r:window.scrollY+e.getBoundingClientRect().top-r,behavior:"smooth"})}function e(){t(document.querySelector(`[aria-controls="${this.id}"]`),this,!0)}document.addEventListener("click",(function(e){if(!e.target.classList.contains("expandable-expander"))return;e.preventDefault();const n=e.target.getAttribute("aria-controls"),o=document.getElementById(n);t(e.target,o)})),document.querySelectorAll(".expandable-content").forEach((t=>{t.addEventListener("focusin",e)}))})();
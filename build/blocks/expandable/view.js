(()=>{"use strict";function t(t,e,n=!1){const o=document.documentElement.scrollTop||document.body.scrollTop;if(!t||!e)return void console.error("Invalid expandable container nodes",{button:t,container:e});const{showmoretext:r,showlesstext:a}=t.dataset,{visibleAmount:i,visibleUnit:s}=e.dataset,c=n||"true"!==t.getAttribute("aria-expanded");t.setAttribute("aria-expanded",c),t.innerText=c?a:r,e.setAttribute("style",`height: ${c?"auto":i+s}`),e.classList.toggle("is-expanded",c),window.scrollTo({top:parseInt(c?i:-i)+o,behavior:"smooth"})}function e(){t(document.querySelector(`[aria-controls="${this.id}"]`),this,!0)}document.addEventListener("click",(function(e){if(!e.target.classList.contains("expandable-expander"))return;e.preventDefault();const n=e.target.getAttribute("aria-controls"),o=document.getElementById(n);t(e.target,o)})),document.querySelectorAll(".expandable-content").forEach((t=>{t.addEventListener("focusin",e)}))})();
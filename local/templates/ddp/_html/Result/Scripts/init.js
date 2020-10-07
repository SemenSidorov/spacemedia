"use strict";function _toConsumableArray(e){return _arrayWithoutHoles(e)||_iterableToArray(e)||_nonIterableSpread()}function _nonIterableSpread(){throw new TypeError("Invalid attempt to spread non-iterable instance")}function _iterableToArray(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}function _arrayWithoutHoles(e){if(Array.isArray(e)){for(var t=0,i=new Array(e.length);t<e.length;t++)i[t]=e[t];return i}}function _classCallCheck(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function _defineProperties(e,t){for(var i=0;i<t.length;i++){var n=t[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(e,n.key,n)}}function _createClass(e,t,i){return t&&_defineProperties(e.prototype,t),i&&_defineProperties(e,i),e}window.onload=function(){try{var e=function(){function i(e,t){_classCallCheck(this,i),this.slider=e,this.block=e.parentElement,this.btnNext=this.block.querySelector(".arrow--next"),this.btnPrev=this.block.querySelector(".arrow--prev"),this.number=t}return _createClass(i,[{key:"init",value:function(){1===this.number?this.initSlider():this.initBigSlider()}},{key:"initBigSlider",value:function(){$(this.slider).slick({dots:!1,prevArrow:this.btnPrev,nextArrow:this.btnNext,infinite:!0,speed:300,slidesToShow:this.number,adaptiveHeight:!0,responsive:[{breakpoint:1300,settings:{slidesToShow:4}},{breakpoint:1e3,settings:{slidesToShow:3}},{breakpoint:600,settings:{slidesToShow:2}},{breakpoint:400,settings:{slidesToShow:1}}]})}},{key:"initSlider",value:function(){$(this.slider).slick({dots:!1,prevArrow:this.btnPrev,nextArrow:this.btnNext,infinite:!0,speed:300,slidesToShow:this.number,adaptiveHeight:!1})}},{key:"destroySlider",value:function(){$(this.slider).slick("unslick")}}]),i}(),t=document.querySelector(".project-slider");if(t)new e(t,1).init();var i=document.querySelector(".about-slider");if(i){new e(i,5).init()}var n=document.querySelector(".services-content");n&&new e(n,4).init()}catch(e){console.log(e+"- Slider")}var o,s;try{var a=function(){function t(e){_classCallCheck(this,t),this.ham=e,this.menuTop=e.querySelector(".menu-top"),this.menuMiddle=e.querySelector(".menu-middle"),this.menuBottom=e.querySelector(".menu-bottom")}return _createClass(t,[{key:"init",value:function(){this.bindActions()}},{key:"bindActions",value:function(){var t=this;this.ham.addEventListener("click",function(e){e.preventDefault(),t.activateMenu(e)})}},{key:"activateMenu",value:function(){document.body.classList.toggle("active-adaptive-menu"),this.menuTop.classList.toggle("menu-top-click"),this.menuMiddle.classList.toggle("menu-middle-click"),this.menuBottom.classList.toggle("menu-bottom-click")}},{key:"removeMenu",value:function(){document.body.classList.remove("active-adaptive-menu"),this.menuTop.classList.remove("menu-top-click"),this.menuMiddle.classList.remove("menu-middle-click"),this.menuBottom.classList.remove("menu-bottom-click")}}]),t}(),c=document.querySelector(".btn-menu");if(c)new a(c).init()}catch(e){console.log(e+"- Адаптивное меню")}try{var r,l=function(){function i(e){var t=this;_classCallCheck(this,i),this.social=e,this.article=e.previousElementSibling,this.body=document.querySelector("body"),this.metrica={},this.scrollFunc=function(){window.pageYOffset>=t.metrica.top&&window.pageYOffset<=t.metrica.top+t.articleHeight-500?t.initSocial():t.social.classList.contains("special-social--active")&&t.removeSocial()}}return _createClass(i,[{key:"init",value:function(){this.metrica=this.distance(),this.initScroll()}},{key:"initScroll",value:function(){1200<=window.innerWidth?(window.addEventListener("scroll",this.scrollFunc),this.removeSocial()):(window.removeEventListener("scroll",this.scrollFunc),this.social.classList.add("special-social--active"))}},{key:"initSocial",value:function(){this.social.classList.add("special-social--active"),this.social.style.right="".concat(this.metrica.left,"px")}},{key:"removeSocial",value:function(){this.social.classList.remove("special-social--active")}},{key:"distance",value:function(){var e=this.article.getBoundingClientRect(),t=window.pageXOffset||document.documentElement.scrollLeft,i=window.pageYOffset||document.documentElement.scrollTop;return{top:e.top+i,left:e.left+t}}},{key:"articleHeight",get:function(){return this.article.offsetHeight}}]),i}(),u=document.querySelector(".special-social");u&&((r=new l(u)).init(),window.addEventListener("resize",function(){r.init()}))}catch(e){console.log(e+"- Social")}try{var d=function(e){"animX"===e.animationName&&h(f),"animTwoX"===e.animationName&&h(p)},m=function(){var e=document.querySelector(".сosmonaut");e.classList.remove("cosmonaut--click"),e.classList.add("cosmonaut--animate")},h=function(e){var n,t=e.querySelectorAll(".star-text");t.forEach(function(e,t){e.classList.contains("star-text--active")&&(n=t)}),++n,t.forEach(function(e,t,i){n===i.length&&(n=0),t===n?e.classList.add("star-text--active"):e.classList.remove("star-text--active")})},f=document.querySelector("#star"),p=document.querySelector("#starTwo"),v=document.querySelector(".сosmonaut"),y=document.querySelector(".moon"),g=document.querySelector(".man");f&&(f.addEventListener("animationiteration",d,!1),f.className="animate",v.classList.add("cosmonaut--animate"),v.addEventListener("click",function(){v.classList.add("cosmonaut--click"),v.classList.remove("cosmonaut--animate")}),v.addEventListener("animationend",function(e){switch(e.type){case"animationend":m()}},!1)),p&&(p.addEventListener("animationiteration",d,!1),p.className="animate-two"),y&&y.classList.add("moon--animate"),g&&g.classList.add("man--animate")}catch(e){console.log(e+"- Animation")}try{var b=document.querySelector(".statistics");if(b)_toConsumableArray(b.querySelectorAll("li")).forEach(function(e){var t=e.innerHTML.replace(/&nbsp;/gi," "),i=(t=t.replace("+","")).split(" "),n=i.filter(function(e){return Number.parseInt(e)});i.splice(0,1);var o=document.createElement("p");o.classList.add("statistics__count"),o.innerHTML="".concat(n.toString(),'<span class="plus">+</span>');var s=document.createElement("p");s.classList.add("text-bigger"),s.innerText="".concat(i.join(" "));var a=document.createElement("li");a.append(o),a.append(s),e.replaceWith(a)})}catch(e){console.log(e+"Replace text and styles in advantages")}try{var S=document.querySelectorAll(".portfolio-result__number");if(S)_toConsumableArray(S).forEach(function(e){var t,i=e.innerText.split(" "),n=document.createElement("span");e.innerText="".concat(i[0]),2===i.length?(t=i[1],n.innerText="".concat(t),e.append(n)):3===i.length&&(t=i[1]+i[2],n.innerText="".concat(t),e.append(n))})}catch(e){console.log(e)}try{$("#phone").mask("+7 (999) 999-99-99")}catch(e){console.log("Mask tel input"+e)}try{var k=document.querySelector(".portfolio-scheme");k&&function(e){switch(e.children.length){case 3:e.classList.add("portfolio-scheme--three");break;case 2:e.classList.add("portfolio-scheme--two");break;case 1:e.classList.add("portfolio-scheme--one")}}(k)}catch(e){console.log(e)}try{var w=document.querySelector(".tools-advantages__list");w&&function(e){switch(e.children.length){case 4:e.classList.add("tools-advantages__list--four");break;case 2:e.classList.add("tools-advantages__list--two");break;case 1:e.classList.add("tools-advantages__list--one")}}(w)}catch(e){console.log(e)}try{var _=document.querySelector(".tools-works__list");_&&function(e){switch(e.children.length){case 4:e.classList.add("tools-works__list--four");break;case 3:e.classList.add("tools-works__list--three");break;case 2:e.classList.add("tools-works__list--two");break;case 1:e.classList.add("tools-works__list--one")}}(_)}catch(e){console.log(e)}try{var L=document.querySelector(".tools-advantages__list");L&&(o=_toConsumableArray(L.children),s=[],o.forEach(function(e){var t=e.querySelector("h3");s.push(t.offsetHeight)}),s.sort(function(e,t){return t-e}),o.forEach(function(e){e.querySelector("h3").style.height=s[0]+"px"}))}catch(e){console.log(e)}try{var q,E=document.querySelector(".portfolio"),A=E.querySelector(".btn"),T=E.querySelector(".portfolio-block"),x=Number(document.querySelector(".div-hidden").textContent);q=Number(A.getAttribute("data-id")),A.addEventListener("click",function(e){e.preventDefault(),$.ajax({url:"/local/templates/ddp/pagenation_portfolio.php?PAGEN_1=".concat(q),method:"GET",success:function(e){++q,$(T).append(e),T.children.length===x&&(A.style.display="none")},error:function(){A.style.display="none"}})})}catch(e){console.log(e+"Error AJAX query")}};
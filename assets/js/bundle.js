!function(){"use strict";function e(e){return document.createElement(e)}function t(){return document.createDocumentFragment()}function n(e){return document.getElementById(e)}function r(e){return document.querySelector(e)}const a=function(){var e=/postid-(\d+)/g.exec(document.body.classList.value);if(e){var t=n("post-"+e[1]);return!(!t||"ARTICLE"!==t.tagName)}return!1}();var i,s;i=HTMLElement.prototype,s={addClass:function(...e){this.classList.add(...e)},removeClass:function(e){this.classList.remove(e)},hasClass:function(e){return this.classList.contains(e)}},Object.keys(s).forEach((e=>{Object.defineProperty(i,e,{value:s[e],enumerable:!0})}));var l,o,c,d=(l=0,o=[],window.addEventListener("scroll",(function(){l||(l=setTimeout((function(){var e=window.scrollY;o.forEach((function(t){t.callback.call(t.thisArg,e)})),l=0}),50))})),{addHandle:function(e,t,n){o.every((function(t){return t.name!==e}))&&o.push({name:e,thisArg:t,callback:n})},deleteHandle:function(e){!function(e,t,n){for(var r=e.length,a=0;a<r;a++)e[a][t]===n&&e.splice(a,1)}(o,e,e)}});if(a){var u=(c="blockquote",document.getElementsByTagName(c));if(u&&u.length){var h=e("i"),m=e("i"),p=u.length;h.setAttribute("class","fa fa-quote-left"),m.setAttribute("class","fa fa-quote-right");for(var g=0;g<p;g++){var v=u.item(g),f=v.firstElementChild;f?v.insertBefore(g?h.cloneNode():h,f):v.appendChild(g?h.cloneNode():h),v.appendChild(g?m.cloneNode():m)}}}if(a){var C=r(".post-navigation"),b=C.querySelector(".nav-previous"),E=C.querySelector(".nav-next");if(b){var w=e("div"),x=e("i");x.setAttribute("class","fa fa-arrow-left"),w.appendChild(x),w.addEventListener("click",(()=>{window.location.href=b.querySelector("a").href})),b.insertBefore(w,b.firstElementChild)}if(E){var y=e("div"),A=e("i");A.setAttribute("class","fa fa-arrow-right"),y.appendChild(A),y.addEventListener("click",(()=>{window.location.href=E.querySelector("a").href})),E.appendChild(y)}}for(var T=n("wp-calendar").querySelector("tbody").getElementsByTagName("td"),I=T.length,L=0;L<I;L++){var k=T.item(L);k.childElementCount&&k.addClass("has-post")}var H=window.innerHeight,W=["hidden","mousedown"],N=n("back-to-top"),S=document.documentElement,_=0;function M(e){return String.fromCodePoint.apply(null,e)}N.addEventListener("click",(()=>{!function(e){if(_<H)window.scrollTo({top:0,behavior:"smooth"});else var t=setInterval((function(){S.scrollTop<=0&&clearInterval(t),S.scrollTop-=e}),20)}((_=S.scrollTop)/(1e3*(_/5/H)/20))})),N.addEventListener("mousedown",(()=>N.addClass(W[1]))),N.addEventListener("mouseup",(()=>N.removeClass(W[1]))),d.addHandle("bttv",null,(function(e){e>=window.innerHeight?N.removeClass(W[0]):N.addClass(W[0])}),null);const q=[0,1,2,3,4,5,6,7,8,9],B=["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];function $(e){for(var t="",n=1,r=0;r<e;r++)n?(t+=B[Math.floor(26*Math.random())],n=0):(t+=q[Math.floor(10*Math.random())],n=1);return t}function O(e,t){this.wrap=e,this.target=t,this.visible=!0}if(O.prototype={wrap:{},target:{},tagCount:[0,0,0,0,0,0],visible:!1,headingCollection:[],anchorCollection:[],_lastAnchor:null,_curAnchor:null,set currentAnchor(e){this._curAnchor=e,!this._lastAnchor||this._lastAnchor.removeClass("current"),this._curAnchor.addClass("current"),this._lastAnchor=e},get currentAnchor(){return this._curAnchor},h1(t,n){if(this.tagCount[0]>0)console.warn("Only one <h1> tag is allowed in single document");else{this.tagCount[0]+=1;var r=e("div");r.addClass("catalog-h1"),r.innerText=t.innerText,n.appendChild(r)}},h2To6(t,n,r){var a=parseInt(t.tagName.charAt(1));this.tagCount[a-1]+=1,a-r>1&&console.warn(`<h${r}> tag should not be followed directly by <h${a}> tag`);var i=e("a"),s=$(4);i.addClass("catalog-h"+a),i.innerHTML=`<div class="catalog-wrap"><div></div><span>${t.innerText}</span></div>`,t.id||(t.id=`h${a}-${this.tagCount[a-1]}-${s}`),i.href="#"+t.id,i.dataset.anchor=s,t.dataset.anchor=s,this.headingCollection.push(t),this.anchorCollection.push(i),n.appendChild(i)},generate(){if(!(!this.wrap instanceof HTMLElement||!this.target instanceof HTMLElement)){for(var e=this.wrap,n=e.children,r=e.childElementCount,a=t(),i=this.wrap.querySelector("h1")?0:1,s=0;s<r;s++){var l=n.item(s);switch(l.tagName){case"H1":this.h1(l,a),i=1;break;case"H2":case"H3":case"H4":case"H5":case"H6":this.h2To6(l,a,i),i=l.tagName.charAt(1)}}return!!a.childElementCount&&(this.target.appendChild(a),!0)}}},a){var j=r("article"),F=e("div"),G=new O(j.querySelector(".entry-content"),F);if(G.generate()){var P=`<div class="sidebar-item-title">${M([25991,31456,30446,24405])}</div>`,R=e("div"),z=e("div");z.innerHTML=P,F.addClass("sidebar-item-body"),R.addClass("sidebar-item","fixed"),R.id="post-catalog",z.appendChild(F),R.appendChild(z),n("widget-mount-left").appendChild(R);var D=e("div"),U=[M([38544,34255,30446,24405]),M([26174,31034,30446,24405])],Y=["mousedown","hidden","catalog-status-hidden"];D.id="post-catalog-switcher",D.innerHTML="<i class='fa fa-th-list'></i>",D.title=U[0],D.addEventListener("mousedown",(()=>{D.addClass(Y[0])})),D.addEventListener("mouseup",(()=>{D.removeClass(Y[0])})),D.addEventListener("click",(()=>{G.visible?(G.visible=!1,R.addClass(Y[1]),setTimeout((function(){D.addClass(Y[2]),D.title=U[1]}),200)):(G.visible=!0,R.removeClass(Y[1]),setTimeout((function(){D.removeClass(Y[2]),D.title=U[0]}),200))})),document.body.appendChild(D),F.addEventListener("click",(e=>{var t=e.target;"A"===t.tagName?G.currentAnchor=t:"A"===t.parentElement.tagName?G.currentAnchor=t.parentElement:"A"===t.parentElement.parentElement.tagName&&(G.currentAnchor=t.parentElement.parentElement)}));const t=80;var J=G.headingCollection,K=G.anchorCollection,Q=J.length;function r(){for(var e=Q-1;e>=0;e--)if(J[e].getBoundingClientRect().top<=t){var n=J[e].dataset.anchor,r=K.find((e=>e.dataset.anchor===n));G.currentAnchor=r;break}}d.addHandle("chl",null,r)}}function V(e,t){this.wrap=e,this.target=t}if(V.prototype={wrap:{},target:{},imgCollection:[],wrapCollection:[],count:0,preWrap:null,nextWrap:null,currentWrap:null,currentImageIndex:0,_curImg:null,_visible:!1,get visible(){return this._visible},set visible(e){e?(this.currentWrap.addClass("current"),this.preWrap&&this.preWrap.addClass("pre"),this.nextWrap&&this.nextWrap.addClass("next"),this._visible=!0):(this._visible=!1,this.currentWrap.removeClass("current"),this.preWrap&&this.preWrap.removeClass("pre"),this.nextWrap&&this.nextWrap.removeClass("next"))},get currentImage(){return this._curImg},set currentImage(e){this._curImg=e;var t=e.dataset.imgLink,n=this.wrapCollection.findIndex((e=>e.dataset.imgLink===t));this.currentImageIndex=n,this.currentWrap=this.wrapCollection[n],this.preWrap=n>0?this.wrapCollection[n-1]:null,this.nextWrap=n<this.count-1?this.wrapCollection[n+1]:null},generate(){if(!(!this.wrap instanceof HTMLElement||!this.target instanceof HTMLElement)){var n=this.wrap.getElementsByTagName("img"),r=n.length;if(r){for(var a=t(),i=0;i<r;i++){var s=n.item(i),l=e("div"),o=e("img"),c=$(4);s.dataset.imgLink=c,l.dataset.imgLink=c,o.src=s.src,l.appendChild(o),this.imgCollection.push(s),this.wrapCollection.push(l),a.appendChild(l)}this.target.appendChild(a),this.count=r}}}},a){var X=r(".entry-content"),Z=new V(X,n("post-imgs-collection"));if(Z.generate(),Z.count){var ee=n("post-img-gallery"),te=r(".gallery-close"),ne=(ie="gallery-mover",document.getElementsByClassName(ie)),re=r(".current-img-index"),ae=r(".current-img-description");function e(e){if("FIGURE"===e.parentElement.tagName){var t=e.nextElementSibling;if(t&&"FIGCAPTION"===t.tagName&&t.innerText)return void(ae.innerText=t.innerText)}e.alt?ae.innerText=e.alt:ae.innerText=""}X.addEventListener("click",(t=>{var n=t.target;"IMG"===n.tagName&&(Z.currentImage=n,Z.visible=!0,e(n),re.innerText=Z.currentImageIndex+1,ee.style.display="flex")})),te.addEventListener("click",(()=>{Z.visible=!1,ae.innerText="",re.innerText="",ee.style.display="none"})),ne.item(1).firstElementChild.addEventListener("click",(()=>{var t=Z.currentWrap,n=t.previousElementSibling,r=t.nextElementSibling;if(r){n&&n.setAttribute("class",""),t.setAttribute("class","pre"),r.setAttribute("class","current");var a=r.nextElementSibling;a&&a.setAttribute("class","next"),Z.currentWrap=r,Z.currentImageIndex+=1,e(Z.imgCollection[Z.currentImageIndex]),re.innerText=Z.currentImageIndex+1}})),ne.item(0).firstElementChild.addEventListener("click",(()=>{var t=Z.currentWrap,n=t.previousElementSibling,r=t.nextElementSibling;if(n){r&&r.setAttribute("class",""),t.setAttribute("class","next"),n.setAttribute("class","current");var a=n.previousElementSibling;a&&a.setAttribute("class","pre"),Z.currentWrap=n,Z.currentImageIndex-=1,e(Z.imgCollection[Z.currentImageIndex]),re.innerText=Z.currentImageIndex+1}}))}}var ie}();

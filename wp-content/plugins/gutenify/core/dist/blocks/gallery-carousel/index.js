(()=>{var e,t={2349:(e,t,a)=>{"use strict";const r=window.React,n=window.wp.i18n,l=window.wp.components,i=window.wp.blocks;var o=a(6942),s=a.n(o);const c=window.lodash,u=window.wp.element,d=window.wp.data,g=window.wp.blockEditor,p=window.wp.compose,m=window.wp.hooks,y="gutenify",b=window?.[`_${y}_vars`]?window[`_${y}_vars`]:{},{is_pro_activated:f,pro_account_url:h,pro_license_status:v,title:w,prefix:_,slug:k,authorWebSite:E,authorDemoWebSite:$,authorWebSiteProPage:C,defaultTheme:x,authorWebSiteSupport:N,plugin_directory_url:S,brand_color:A,plugin_main_version:B,documentationsURL:T,pro_title:O,active_blocks:P,plugin_main_camel_case_name:F}=b,G=(b?.siteUrl?b.siteUrl:b.site_url,(0,n.sprintf)("Want to enjoy all feature of blocks? Checkout %1$s%2$s%3$s.",'<a href="'+C+'" target="_blank">',O,"</a>"),{pluginMainSlug:"gutenify",pluginMainCamelCaseName:F,pluginMainFunctionPrefix:"gutenify"}),I=JSON.parse('{"UU":"gutenify/gallery-carousel","rE":"2","uK":{"blockClientId":{"type":"string","default":""},"blockAdvanceOptions":{"type":"object","default":{"buttonBorderWidth":1,"buttonBorderRadius":0}},"images":{"type":"array","default":[]},"imagesData":{"type":"object","default":{}},"columns":{"type":"number","default":1},"spaceBetween":{"type":"number","default":10},"hasNavigation":{"type":"boolean","default":true},"hasPagination":{"type":"boolean","default":true},"isAutoplay":{"type":"boolean","default":false},"layout":{"type":"string","default":"layout-1"}},"xY":{"html":false,"align":["center","wide","full"],"inserter":false}}'),{UU:R}=I,U={hookPrefix:"gallery-carousel",blockId:R.replace("/","--"),layouts:[{name:"layout-1",label:"Layout 1",imageAlign:"center",titleAlign:"center",ratingAlign:"center"},{name:"layout-2",label:"Layout 2",imageAlign:"center",titleAlign:"left",ratingAlign:"left"},{name:"layout-3",label:"Layout 3",imageAlign:"center",titleAlign:"right",ratingAlign:"right"}]},{Accordion:W}=window?.[`_${_}_vars`]?.components,{hookPrefix:M,layouts:j,blockId:D}=U,{pluginMainSlug:L}=G,{plugin_directory_url:q}=window[`_${_}_vars`];(0,m.addFilter)(`${L}--inspector-controls--${D}--content`,`${L}--inspector-controls--${D}--content--slider-layouts`,((e,t)=>{const{attributes:a,setAttributes:i}=t,{layout:o,columns:s,hasNavigation:c,hasPagination:d,spaceBetween:g}=a;return[...e,(0,r.createElement)(u.Fragment,{key:`gutenify-block-${D}-options-tab-content-basic`},(0,r.createElement)(W,{tabs:[{name:"slider-options",initialOpen:!0,label:()=>(0,n.__)("Slider"),cb:()=>(0,r.createElement)(u.Fragment,null,j&&(0,r.createElement)("div",{className:"gutenify-template-browser"},(0,r.createElement)("h2",null,"Templates"),(0,r.createElement)("ul",null,j.map((e=>{let t="gutenify-template-browser-item";return o===e.name&&(t+=" gutenify-template-browser-item-active"),(0,r.createElement)("li",{className:t,key:e.name},(0,r.createElement)("button",{className:"gutenify-template-browser-selector",onClick:()=>{const t={layout:e.name,socialIconAlign:e.socialIconAlign,imageAlign:e.imageAlign,titleAlign:e.titleAlign};i(t)}},(0,r.createElement)("img",{src:`${q}/assets/images/gallery-carousel-layouts/${e.name}.png`,alt:e.name}),(0,r.createElement)("small",null,e.label)))})))),(0,r.createElement)(l.ToggleControl,{label:(0,n.__)("Enable Navigation","gutenify"),checked:c,help:c?(0,n.__)("Showing slider navigation.","gutenify"):(0,n.__)("Toggle to enable slider navigation.","gutenify"),onChange:()=>i({hasNavigation:!c})}),(0,r.createElement)(l.ToggleControl,{label:(0,n.__)("Enable Pagination","gutenify"),checked:d,help:d?(0,n.__)("Showing slider pagination.","gutenify"):(0,n.__)("Toggle to enable slider pagination.","gutenify"),onChange:()=>i({hasPagination:!d})}),(0,r.createElement)("hr",null),(0,r.createElement)(l.RangeControl,{label:(0,n.__)("Columns"),value:s,onChange:e=>{i({columns:e})},min:1,max:(0,m.applyFilters)(`${L}--${D}--max-columns`,3),step:1}),(0,r.createElement)(l.RangeControl,{label:(0,n.__)("Slider space"),value:g,onChange:e=>{i({spaceBetween:e})},min:0,max:100,step:1,help:(0,n.__)("Space between each slide.")}),(0,m.applyFilters)(`gutenify--${M}--inspector--tab-content--slider`,[],t))}]}))]}));const{pluginMainSlug:H}=G,{hookPrefix:K}=U,Y=(0,p.compose)([(0,d.withDispatch)(((e,t)=>{const{selectBlock:a}=e("core/block-editor");return{selectBlock:()=>{a(t.clientId)}}}))])((e=>{const{isSelected:t,className:a,attributes:l}=e,{images:i,imagesData:o,columns:d,hasPagination:p,hasNavigation:y,spaceBetween:b,blockClientId:f,layout:h}=l,v=(0,u.useRef)();let[w,_]=(0,u.useState)(null);(0,u.useEffect)((()=>{const{ownerDocument:e}=v.current,t={allowTouchMove:!1,slidesPerView:d,pagination:{el:e.querySelector(`.${H}-section-${f} .swiper-pagination`),clickable:!0},navigation:{nextEl:e.querySelector(`.${H}-section-${f} .swiper-button-next`),prevEl:e.querySelector(`.${H}-section-${f} .swiper-button-prev`)},scrollbar:{el:".swiper-scrollbar"},spaceBetween:b},a=new Swiper(e.querySelector(`.${H}-section-${f}`),t);w=a,_(a)}),[d,b,p,y]),(0,u.useEffect)((()=>{void 0!==w.$el&&w.update()}),[d,b,p,y]);const k=(e,t)=>{const a=(0,c.find)(t,(t=>parseInt(t?.id)===e?.id));return Array.isArray(a?.caption)?a?.caption?.[0]:a?.caption||e?.caption||""},E=(e,t)=>{const a=(0,c.find)(t,(t=>parseInt(t?.id)===e?.id));return a?.imgLink||e?.imgLink||""},$=t=>(e.setAttributes({imagesData:{...o}}),t),C=(t,a,r)=>{(0,c.has)(o,t)||(o[t]={}),o[t][a]=r,e.setAttributes({imagesData:{...o}})};let x=[a,`gutenify-section-${f}`,`gutenify--${K}--${h}`,`${I.UU.replace(/\//gm,"-")}-version-${I.rE}`,"swiper-container"];x=s()((0,m.applyFilters)(`gutenify--${K}--wrapper-class`,x,e));const N=!!i.length,S=!N&&(0,n.__)("Gallery Carousel"),A=s()("gutenify--figure",{}),B=(0,g.useBlockProps)({className:x,ref:v});return(0,r.createElement)(r.Fragment,null,(0,r.createElement)("div",{...B},N&&(0,r.createElement)("div",{className:"swiper-wrapper"},i.map((e=>(0,r.createElement)("div",{className:"gutenify-gallery-carousel-item swiper-slide",key:e.id||e.url},(0,r.createElement)("div",{className:"gutenify-slider-image-wrapper"},(0,r.createElement)("div",{className:"gutenify-slider-content-image"},(0,r.createElement)("figure",{className:A},(0,r.createElement)("img",{src:e.url,alt:e.alt,"data-link":e.link,"data-id":e.id,className:e.id?`wp-image-${e.id}`:null})))),(0,r.createElement)("div",{className:"gutenify-slider-content-wrapper"},(0,r.createElement)("div",{className:"gutenify-slider-content-inner"},(0,r.createElement)(g.RichText,{tagName:"h2",value:(0,c.has)(o[e.id],"title")?o[e.id].title:"",allowedFormats:["core/bold","core/italic","core/link"],onChange:t=>{C(e.id,"title",t)},placeholder:(0,n.__)("Heading…"),className:"gutenify-slider-title"}),(0,r.createElement)(g.RichText,{tagName:"h3",value:(0,c.has)(o[e.id],"subTitle")?o[e.id].subTitle:"",allowedFormats:["core/bold","core/italic","core/link"],onChange:t=>{C(e.id,"subTitle",t)},placeholder:(0,n.__)("Sub Heading…"),className:"gutenify-slider-sub-title"}),(0,r.createElement)("div",{className:"gutenify-slider-content-inner-wrapper"},(0,r.createElement)("div",{className:"gutenify-slider-content clear-fix"},(0,r.createElement)(g.RichText,{tagName:"p",value:(0,c.has)(o[e.id],"description")?o[e.id].description:"",allowedFormats:["core/bold","core/italic","core/link"],onChange:t=>{C(e.id,"description",t)},placeholder:(0,n.__)("Content…")}))))))))),p&&(0,r.createElement)("div",{className:"swiper-pagination"}),y&&(0,r.createElement)("div",{className:"navigation-wrap"},(0,r.createElement)("div",{className:"swiper-button-prev"}),(0,r.createElement)("div",{className:"swiper-button-next"}))),(t||!N)&&(0,r.createElement)(r.Fragment,null,(0,r.createElement)(g.MediaPlaceholder,{addToGallery:N,isAppender:N,className:"gutenify-gallery-figure",disableMediaButtons:N&&!t,labels:{title:S,instructions:!N&&(0,n.__)("Drag images, upload new ones or select files from your library.","coblocks")},onSelect:t=>{e.setAttributes({images:t.map((e=>({...$(e),caption:k(e,i),imgLink:E(e,i)})))})},accept:"image/*",allowedTypes:["image"],multiple:!0,value:N?i:void 0,onError:()=>{}})))})),{blockId:J}=U,{pluginMainSlug:V}=G;(0,m.addFilter)(`${V}--inline-styles--${J}`,`${V}--inline-styles--${J}--button`,(function(e,t,a=!1){const{blockAdvanceOptions:r}=t.attributes,{innerBlock:n}=r;a=a||`.gutenify-section-${t.clientId} .gutenify-gallery-carousel-item`;let l="";l+=(0,c.has)(n,"textColor")&&!(0,c.isEmpty)(n.textColor)?`color: ${n.textColor};`:"",l+=(0,c.has)(n,"backgroundColor")&&!(0,c.isEmpty)(n.backgroundColor)?`background: ${n.backgroundColor};`:"",(0,c.has)(n,"backgroundGradient")&&!(0,c.isEmpty)(n.backgroundGradient)&&(l+=`background: ${n.backgroundGradient};`),l+=(0,c.has)(n,"borderColor")&&!(0,c.isEmpty)(n.borderColor)?`border-color: ${n.borderColor};`:"",l+=(0,c.has)(n,"borderWidth")&&n.borderWidth>0?`border-width: ${n.borderWidth}px;`:"",l+=(0,c.has)(n,"borderWidth")&&n.borderWidth>0?"border-style: solid;":"",l+=(0,c.has)(n,"borderRadius")&&!(0,c.isEmpty)(n.borderRadius)?`border-radius: ${n.borderRadius};`:"",l&&(e+=`${a} { ${l} }`);let i="";return i+=(0,c.has)(n,"hoverTextColor")&&!(0,c.isEmpty)(n.hoverTextColor)?`color: ${n.hoverTextColor};`:"",i+=(0,c.has)(n,"hoverBackgroundColor")&&!(0,c.isEmpty)(n.hoverBackgroundColor)?`background: ${n.hoverBackgroundColor};`:"",(0,c.has)(n,"hoverBackgroundGradient")&&!(0,c.isEmpty)(n.hoverBackgroundGradient)&&(i+=`background: ${n.hoverBackgroundGradient};`),i+=(0,c.has)(n,"hoverBorderColor")&&!(0,c.isEmpty)(n.hoverBorderColor)?`border-color: ${n.hoverBorderColor};`:"",i&&(e+=`${a}:hover { ${i} }`),(0,m.applyFilters)(`gutenify--${J}--inline-styles`,e,t)}));const{GalleryCarouselIcon:z}=window?.[`_${_}_vars`]?.components?.Icons,{uK:Q,UU:X,xY:Z}=I,ee={title:(0,n.__)("Gallery Carousel"),description:(0,n.__)("Gutenify Gallery Carousel."),icon:(0,r.createElement)(l.Icon,{icon:z}),keywords:["gutenify",(0,n.__)("Gallery Carousel"),(0,n.__)("Gallery"),(0,n.__)("Carousel"),(0,n.__)("Slider"),(0,n.__)("Sliders")],example:{attributes:{}},attributes:Q,edit:Y,save:()=>{},supports:Z};(0,i.registerBlockType)(X,{...ee})},6942:(e,t)=>{var a;!function(){"use strict";var r={}.hasOwnProperty;function n(){for(var e="",t=0;t<arguments.length;t++){var a=arguments[t];a&&(e=i(e,l(a)))}return e}function l(e){if("string"==typeof e||"number"==typeof e)return e;if("object"!=typeof e)return"";if(Array.isArray(e))return n.apply(null,e);if(e.toString!==Object.prototype.toString&&!e.toString.toString().includes("[native code]"))return e.toString();var t="";for(var a in e)r.call(e,a)&&e[a]&&(t=i(t,a));return t}function i(e,t){return t?e?e+" "+t:e+t:e}e.exports?(n.default=n,e.exports=n):void 0===(a=function(){return n}.apply(t,[]))||(e.exports=a)}()}},a={};function r(e){var n=a[e];if(void 0!==n)return n.exports;var l=a[e]={exports:{}};return t[e](l,l.exports,r),l.exports}r.m=t,e=[],r.O=(t,a,n,l)=>{if(!a){var i=1/0;for(u=0;u<e.length;u++){for(var[a,n,l]=e[u],o=!0,s=0;s<a.length;s++)(!1&l||i>=l)&&Object.keys(r.O).every((e=>r.O[e](a[s])))?a.splice(s--,1):(o=!1,l<i&&(i=l));if(o){e.splice(u--,1);var c=n();void 0!==c&&(t=c)}}return t}l=l||0;for(var u=e.length;u>0&&e[u-1][2]>l;u--)e[u]=e[u-1];e[u]=[a,n,l]},r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var a in t)r.o(t,a)&&!r.o(e,a)&&Object.defineProperty(e,a,{enumerable:!0,get:t[a]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={7951:0,2135:0};r.O.j=t=>0===e[t];var t=(t,a)=>{var n,l,[i,o,s]=a,c=0;if(i.some((t=>0!==e[t]))){for(n in o)r.o(o,n)&&(r.m[n]=o[n]);if(s)var u=s(r)}for(t&&t(a);c<i.length;c++)l=i[c],r.o(e,l)&&e[l]&&e[l][0](),e[l]=0;return r.O(u)},a=globalThis.webpackChunkgutenify=globalThis.webpackChunkgutenify||[];a.forEach(t.bind(null,0)),a.push=t.bind(null,a.push.bind(a))})();var n=r.O(void 0,[2135],(()=>r(2349)));n=r.O(n)})();